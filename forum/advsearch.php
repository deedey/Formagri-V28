<?php
////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//   Copyright (C) 2000  Phorum Development Team                              //
//   http://www.phorum.org                                                    //
//                                                                            //
//   This program is free software. You can redistribute it and/or modify     //
//   it under the terms of the Phorum License Version 1.0.                    //
//                                                                            //
//   This program is distributed in the hope that it will be useful,          //
//   but WITHOUT ANY WARRANTY, without even the implied warranty of           //
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                     //
//                                                                            //
//   You should have received a copy of the Phorum License                    //
//   along with this program.                                                 //
////////////////////////////////////////////////////////////////////////////////

  require "./common.php";

  if($num==0 || $ForumName==''){
    Header("Location: $forum_url/$forum_page.$ext?$GetVars");
    exit;
  }

  /////////////////////////////////////////////////////////////////
  // build the search terms array
  // this will build the array to pass to build_sql()

  function build_search_terms($search, $match) {
    $terms=array();

    // if this is an exact phrase match
    if($match==3){
      $terms[]=$search;
    }
    // not exact phrase, break up the terms
    else{
      if ( strstr( $search, '"' ) ){
        //first pull out all the double quoted strings
        if(strstr($search, "\"")){
          $search_string=$search;
          while(preg_match('/-*"[^"]*"/', $search_string, $match)){
            $terms[]=trim(str_replace("\"", "", $match[0]));
            $search_string=substr(strstr($search_string, $match[0]), strlen($match[0]));
          }
        }
        $search = preg_replace('/-*"[^"]*"/', '', $search );
      }

      //pull out the rest words in the string
      $regular_terms = explode( " ", $search);

      //merge them all together and return
      while (list ($key, $val) = each ($regular_terms)) {
        if($val!="")
          $terms[]=trim($val);
      }
    }
    return $terms;
  }

  /////////////////////////////////////////////////////////////////
  // build the sql statement's where clause
  // this will build the sql based on the given information

  function  build_terms_clause($terms, $date, $fields, $match){

    static $where_clause;

    if(empty($where_clause)){
      if($date!=0){
        $cutoff=date("Y-m-d", mktime(0,0,0,date("m"),date("d")-$date));
        $where_clause .= " datestamp >= '$cutoff' AND ";
      }

      while (list ($junk, $term) = each ($terms)) {
        $cmpfunc="LIKE";
        if(substr($term, 0, 1)=="-"){
          $term=substr($term, 1);
          $cmpfunc="NOT LIKE";
        }
        reset($fields);
        unset($likeArray);
        while (list ($key, $val) = each ($fields)) {
          $likeArray[]=" $val $cmpfunc '%$term%' ";
        }
        $termArray[] = " (".implode( $likeArray, " OR " ).") ";
      }

      $cmptype="AND";
      if($match!=1) $cmptype="OR";
      $where_clause.= " (".implode( $termArray, " $cmptype " ).") ";

      $where_clause.="order by datestamp desc";
    }

    return $where_clause;

  }

  /////////////////////////////////////////////////////////////////
  // build the sql statement
  // this will build the sql based on the given information

  function  build_sql($table_name, $terms, $date, $fields, $match){

    GLOBAL $ForumTableName;

    $SQL = "select $table_name.id, $table_name.thread, author, subject, datestamp, body from $table_name, $table_name"."_bodies where $table_name.id = $table_name"."_bodies.id and $table_name.approved='Y' AND";

    $SQL.=build_terms_clause($terms, $date, $fields, $match);

    return $SQL;
  }

  if(!isset($fldauthor) && !isset($fldsubject) && !isset($fldbody)){
    $fields[] = "subject";
    $fields[] = "body";
    $fldauthor=0;
    $fldsubject=1;
    $fldbody=1;
  }
  else{
    empty($fldauthor) ? $fldauthor=0 : $fields[] = "author";
    empty($fldsubject) ? $fldsubject=0 : $fields[] = "subject";
    empty($fldbody) ? $fldbody=0 : $fields[] = "body";
  }

  initvar("date", 30);
  initvar("globalsearch");
  initvar("match");
  initvar("start", 1);
/*
  if($ActiveForums>1){
    $nav = "<div class=nav><a href=\"$forum_page.$ext?f=$ForumParent$GetVars\">".$lForumList."</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"$post_page.$ext?f=$num$GetVars\">".$lStartTopic."</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"$list_page.$ext?f=$num$GetVars\">".$lGoToTop."</font></a>&nbsp;</font></div>";
  }
  else{
    $nav = "<div class=nav><a href=\"$post_page.$ext?f=$num$GetVars\">".$lStartTopic."</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"$list_page.$ext?f=$num$GetVars\">".$lGoToTop."</font></a>&nbsp;</font></div>";
  }
*/
  if (empty($search)){
    $search="";
    $searchtext="";
  }
  else{
    $search=trim(stripslashes($search));
    $searchtext = htmlentities($search,ENT_QUOTES,'ISO-8859-1');
    $terms = build_search_terms($search, $match);
    if(count($terms)>0){

      if($globalsearch){
        $SQL="Select id, name, table_name from $pho_main where";
        if(isset($searchforums)){
          $SQL.=" id in (".implode(",", $searchforums).")";
        }
        else{
          $SQL.=" active=1 or id=$num";
        }
        $q->query($DB, $SQL);
        $row = $q->getrow();
      }
      else{
        $row=array("id"=>$num, "name"=>$ForumName, "table_name"=>$ForumTableName);
      }
      $totalFound=0;
      $messagesCopied=0;
      $messages=array();
      while(is_array($row)){
        $forums[$row["id"]]=$row["name"];
        $SQL=build_sql($row["table_name"], $terms, $date, $fields, $match);
        $results[$row["id"]] = new query($DB, $SQL);
        $numrows=$results[$row["id"]]->numrows();
        if($numrows==0){
          unset($results[$row["id"]]);
        }
        else{
          $results[$row["id"]]->getrow();
          $totalFound+=$numrows;
        }
        if($globalsearch){
          $row = $q->getrow();
        }
        else{
          $row=0;
        }
      }
      $q->free();

      $winner=1;
      $MessagesCopied=0;
      $MessagesMatched=0;
      while($MessagesCopied<$ForumDisplay && $winner!=0){
        $winner=0;
        $current=reset($results);
        $highdate="";
        while(is_object($current)){
          $forum=key($results);
          if(!empty($results[$forum]->row)){
            if($results[$forum]->field("datestamp")>$highdate){
              $highdate=$results[$forum]->field("datestamp");
              $winner=$forum;
            }
          }
          $current=next($results);
        }
        if($winner!=0){
          $MessagesMatched++;
          if($MessagesMatched>=$start){
            $MessagesCopied++;
            $row=$results[$winner]->row;
            $row["forum"]=$winner;
            $messages["$row[datestamp]-$winner-$row[id]"]=$row;
          }
          $results[$winner]->getrow();
        }
      }

    }
  }

  $sTitle=" ".strtolower($lSearch);

  if(file_exists("$include_path/header_$ForumConfigSuffix.php")){
    include "$include_path/header_$ForumConfigSuffix.php";
  }
  else{
    include "$include_path/header.php";
  }
?>
<?php
  if(@is_array($terms)){
/*
<p>
<table width="<?php echo $ForumTableWidth; ?>" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td <?php echo bgcolor($ForumNavColor); ?> valign="TOP" nowrap><font color="<?php echo $ForumNavFontColor; ?>"><?php echo $nav; ?></font></td>
  </tr>
</table>
*/
?>
<table width="<?php echo $ForumTableWidth; ?>" cellspacing="0" cellpadding="4" border="0">
  <tr>
    <?php
      $end=count($messages)+$start-1;
      $range="$start-$end";
    ?>
    <td <?php echo bgcolor($ForumTableHeaderColor); ?> valign="TOP" nowrap><font color="<?php echo $ForumTableHeaderFontColor; ?>">&nbsp;<?php echo "$lSearchResults: $range of $totalFound";?></font></td>
  </tr>
<tr><td width="<?php echo $ForumTableWidth; ?>" valign="TOP" <?php echo bgcolor($ForumTableBodyColor2); ?>><font color="<?php echo $ForumTableBodyFontColor2; ?>">
<?php
    if($totalFound>0){
      krsort($messages);
      $message=current($messages);
      $count=$start-1;
      While(is_array($message)){
        $count=$count+1;
        if(!isset($top_id)){
          $top_id=$message["id"];
        }
        echo "<dl><dt><b>$count. </b><a href=\"$read_page.$ext?f=$message[forum]&i=$message[id]&t=$message[thread]$GetVars\"><b>".chop($message["subject"])."</b></a> - ".chop($message["author"])."<br>\n<dd>";
        $text=chop(substr($message["body"], 0, 200));
        if(function_exists("strip_tags")){
          $text=strip_tags($text);
        }
        else{
          $text=preg_replace("/<[^>]*>/", "", $text);
          $text=preg_replace("/^<[^>]*>/", "", $text);
          $text=preg_replace("/<[^>]*>$/", "", $text);
        }
        echo $text."<br>";
        echo "<font size=-2>$lBigForum: <b>".$forums[$message["forum"]]."</b>&nbsp;&nbsp;$lDate: ".dateFormat($message["datestamp"])."</font><br>\n";
        echo "</dl><p>\n";
        $last_id=$message["id"];
        $message=next($messages);
      }
    }
    else{
      echo $lNoMatches;
      $count = 0;
    }

    $prevmatch='';
    $morematch='';

    if($totalFound>$count){
      $startvar=$count+1;
      $morematch="<a href=\"$search_page.$ext?f=$num&search=".urlencode($search)."&globalsearch=$globalsearch&match=$match&date=$date&fldauthor=$fldauthor&fldsubject=$fldsubject&fldbody=$fldbody&start=$startvar$GetVars\"><FONT color=\"$ForumNavFontColor\">$lMoreMatches</font></a>";
    }
    if($start!=1){
      $startvar=$start-$ForumDisplay;
      $prevmatch="<a href=\"$search_page.$ext?f=$num&search=".urlencode($search)."&globalsearch=$globalsearch&match=$match&date=$date&fldauthor=$fldauthor&fldsubject=$fldsubject&fldbody=$fldbody&start=$startvar$GetVars\"><FONT color=\"$ForumNavFontColor\">$lPrevMatches</font></a>";
    }
    if($prevmatch || $morematch){
      echo "<center><br><br><div class=nav><FONT color=\"$ForumNavFontColor\"><b>";
      if($prevmatch) echo $prevmatch;
      if($prevmatch && $morematch) echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
      if($morematch) echo $morematch;
      echo "</font></div><br><br></center>";
    }
?>
</font>
</td></tr></table>
<BR>
<?php
  }
?>
<form action="<?php echo "$PHP_SELF"; ?>" method="GET">
<?php echo $PostVars; ?>
<input type="Hidden" name="f" value="<?php echo $num; ?>">
<table width="<?php echo $ForumTableWidth; ?>" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td <?php echo bgcolor($ForumNavColor); ?> valign="TOP" nowrap><font color="<?php echo $ForumNavFontColor; ?>"><?php echo $nav; ?></font></td>
  </tr>
</table>
<table  width="<?php echo $ForumTableWidth; ?>" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td <?php echo bgcolor($ForumTableHeaderColor); ?> valign="TOP" nowrap><font color="<?php echo $ForumTableHeaderFontColor; ?>">&nbsp;<?php echo $lSearch;?></font></td>
  </tr>
  <tr>
    <td align="CENTER" valign="MIDDLE" <?php echo bgcolor($ForumTableBodyColor2); ?>>
    <br>
<table cellspacing="0" cellpadding="2" border="0">
<tr>
    <td align="right"><font color="<?php echo $ForumTableBodyFontColor2; ?>">&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
    <td><input type="Text" name="search" size="40" value="<?php echo $searchtext; ?>">&nbsp;<input type="Submit" value="Chercher">&nbsp;&nbsp;</td>
</tr>
<tr>
    <td align="right">&nbsp;</td>
    <td><input type="hidden" name="globalsearch" value="0"><select name="match"><option value="1" <?php if($match==1) echo "selected"; ?>><?php echo $lSearchAllWords ?></option><option value="2" <?php if($match==2) echo "selected"; ?>><?php echo $lSearchAnyWords ?></option><option value="3" <?php if($match==3) echo "selected"; ?>><?php echo $lSearchPhrase ?></option></select>&nbsp;&nbsp;&nbsp;&nbsp;<select name="date"><option value="30" <?php if($date==30) echo "selected"; ?>><?php echo $lSearchLast30; ?></option><option value="60" <?php if($date==60) echo "selected"; ?>><?php echo $lSearchLast60; ?></option><option value="90" <?php if($date==90) echo "selected"; ?>><?php echo $lSearchLast90; ?></option><option value="180" <?php if($date==180) echo "selected"; ?>><?php echo $lSearchLast180; ?></option><option value="0" <?php if($date==0) echo "selected"; ?>><?php echo $lSearchAllDates; ?></option></select></font></td>
</tr>
<tr>
    <td align="right">&nbsp;</td>
    <td><font color="<?php echo $ForumTableBodyFontColor2; ?>"><input type="checkbox" name="fldauthor" value="1" <?php if($fldauthor==1)  echo "checked"; ?>> <?php echo $lAuthor; ?>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="fldsubject" value="1" <?php if($fldsubject==1)  echo "checked"; ?>> <?php echo $lFormSubject; ?>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="fldbody" value="1" <?php if($fldbody==1)  echo "checked"; ?>> <?php echo $lMessageBodies; ?>&nbsp;&nbsp;&nbsp;</font></td>
</tr>
</table>
</font><br></td>
</td>
</tr>
</table>
</form>
<?php
/*
<p>
<table width="<?php echo $ForumTableWidth; ?>" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td <?php echo bgcolor($ForumTableHeaderColor); ?> valign="TOP" nowrap><font color="<?php echo $ForumTableHeaderFontColor; ?>">&nbsp;<?php echo $lSearchTips;?></font></td>
  </tr>
  <tr>
    <td width="<?php echo $ForumTableWidth; ?>" align="LEFT" valign="MIDDLE" <?php echo bgcolor($ForumTableBodyColor2); ?>><font color="<?php echo $ForumTableBodyFontColor2; ?>"><?php echo $lTheSearchTips;?><br></font></td>
  </tr>
</table>
*/
  if(file_exists("$include_path/footer_$ForumConfigSuffix.php")){
    include "$include_path/footer_$ForumConfigSuffix.php";
  }
  else{
    include "$include_path/footer.php";
  }

?>