<?php /* New Forum */ ?>
<script language="JavaScript" type="text/javascript">
  function dropforum(url, folder){
    if(folder){
      ans=window.confirm("You are about to drop this folder.  All sub folders and sub forums of this folder will be dropped also.  Do you want to continue?");
    }
    else{
      ans=window.confirm("You are about to drop this forum.  Do you want to continue?");
    }
    if(ans){
      window.location.replace(url);
    }
  }
</script>
<form action="<?php echo $myname; ?>" method="POST">
<input type="Hidden" name="num" value="<?php echo $num; ?>">
<input type="Hidden" name="action" value="props">
<input type="Hidden" name="frompage" value="props">
<input type="Hidden" name="page" value="managemenu">
<input type="Hidden" name="table" value="<?php echo $ForumTableName; ?>">
<table border="1" cellspacing="0" cellpadding="3">
<tr>
  <td colspan="2" align="center" valign="middle" bgcolor="#000080"><font face="Arial,Helvetica" color="#FFFFFF"><b>Edit <?php $folder ? $word="Folder" : $word="Forum"; echo "$word: $ForumName"; ?></b></font></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Name:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="name" value="<?php echo $ForumName; ?>" size="25" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Description:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><textarea name="description" cols="60" rows="3" wrap="VIRTUAL" style="width: 300px;"><?php echo $ForumDescription; ?></textarea></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Config Suffix:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="config_suffix" value="<?php echo $ForumConfigSuffix; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Folder:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><select name="parent">
<option value="0">Top Level</option>
<?php
  $sSQL="Select id, name from ".$pho_main." where folder='1' and id<>$ForumId order by name";
  $q->query($DB, $sSQL);
  $rec=(object)$q->getrow();
  While(isset($rec->id)){
    echo "<option value=\"$rec->id\"";
    if($ForumParent==$rec->id) echo ' selected';
    echo ">$rec->name</option>\n";
    $rec=(object)$q->getrow();
  }
?>
</select></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Language File:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><select name="lang">
<?php
$aryLangs = array();
$strLangDir = "lang/";
$dirCurrent = dir($strLangDir);
while($strFile=$dirCurrent->read()) {
  if (is_file($strLangDir.$strFile)) {
    $aryLangs[] = $strLangDir.$strFile;
  }
}
$dirCurrent->close();

if (count($aryLangs) > 1) { sort ($aryLangs); }

$file = current($aryLangs);
while ($file) {
  if($file!="$strLangDir"."blank.php"){
    $intStartLang = strpos($file, '/') + 1;
    $intLengthLang = strpos($file, '.') - $intStartLang;
    $text=ucwords(substr($file,$intStartLang,$intLengthLang));
    echo "<option value=\"$file\"";
    if($file==$ForumLang) echo ' selected';
    echo ">$text</option>\n";
  }
  $file = next($aryLangs);
}
?></select></td>
</tr>
<?php if(!$ForumFolder){ ?>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Moderator Host:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="staff_host" value="<?php echo $ForumStaffHost; ?>" size="25" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Allow uploads?</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><font face="Arial,Helvetica">
  <?php
    if ($ForumAllowUploads == 'Y') {
      print '<INPUT TYPE="radio" NAME="allow_uploads" VALUE="Y" CHECKED>yes';
      print '<INPUT TYPE="radio" NAME="allow_uploads" VALUE="N">no';
    } else {
      print '<INPUT TYPE="radio" NAME="allow_uploads" VALUE="Y">yes';
      print '<INPUT TYPE="radio" NAME="allow_uploads" VALUE="N" CHECKED>no';
    }
  ?>
  </td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Moderation:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><select name="moderation" class=big>
  <option value="none" <?php if($ForumModeration=='n') echo 'selected'; ?>>None</option>
  <option value="all" <?php if($ForumModeration=='a') echo 'selected'; ?>>All Messages Before Posted</option>
  <option value="react" <?php if($ForumModeration=='r') echo 'selected'; ?>>All Messages After Posted</option>
</select></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Moderator Email:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="mod_email" value="<?php echo $ForumModEmail; ?>" size="25" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Moderator Password:<br>(enter to change)</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="password" name="mod_pass" size="10" class="TEXT"><br><input type="password" name="mod_pass_2" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Mailing List Address:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="email_list" value="<?php echo $ForumEmailList; ?>" size="25" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Mailing List Return:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="email_return" value="<?php echo $ForumEmailReturnList; ?>" size="25" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Mailing List Tag:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="email_tag" value="<?php echo $ForumEmailTag; ?>" size="25" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Duplicate Posts:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><select name="check_dup" class=big>
<option value="0" <?php if($ForumCheckDup==0) echo "selected"; ?>>Do Not Check For Duplicates</option>
<option value="1" <?php if($ForumCheckDup==1) echo "selected"; ?>>Check For Duplicates</option>
</select></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Messages Per Page:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="display" value="<?php echo $ForumDisplay; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Thread Type:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><select name="multi_level">
<option value="0" <?php if($ForumMultiLevel==0) echo "selected"; ?>>Single Level</option>
<option value="1" <?php if($ForumMultiLevel==1) echo "selected"; ?>>Multiple Levels</option>
</select></td>
</tr>
<b></b><br>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Thread Display:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><select name="collapsed">
<option value="0" <?php if($ForumCollapse==0) echo "selected"; ?>>Expanded</option>
<option value="1" <?php if($ForumCollapse==1) echo "selected"; ?>>Collapsed</option>
</select></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Read Messages:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><select name="rflat" class=big>
<option value="0" <?php if($ForumFlat==0) echo "selected"; ?>>One At A Time</option>
<option value="1" <?php if($ForumFlat==1) echo "selected"; ?>>Entire Thread At Once</option>
</select></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">HTML Settings:</font></td>
  <td valign="middle" bgcolor="#C0C0C0">
<?php
  if($ForumAllowHTML=="Y"){
    $html_all=1;
    $html_style=0;
    $html_font=0;
    $html_li=0;
    $html_img=0;
    $html_a=0;
  }
  else{
    strstr($ForumAllowHTML, "|i|")   ? $html_style=1 : $html_style=0;
    strstr($ForumAllowHTML, "font")  ? $html_font=1  : $html_font=0;
    strstr($ForumAllowHTML, "ul")  ? $html_li=1    : $html_li=0;
    strstr($ForumAllowHTML, "img") ? $html_img=1   : $html_img=0;
    strstr($ForumAllowHTML, "a")    ? $html_a=1     : $html_a=0;
  }
?>
<table cellspacing="0" cellpadding="2" border="0">
<tr>
    <td><font face="Arial,Helvetica"><input type="checkbox" name="html_all" value="1" <?php if($html_all==1) echo "checked"; ?>> Allow All</font></td>
    <td><font face="Arial,Helvetica"><input type="checkbox" name="html_style" value="1" <?php if($html_style==1) echo "checked"; ?>> Bold, Italic, Underline</font></td>
</tr>
<tr>
    <td><font face="Arial,Helvetica"><input type="checkbox" name="html_font" value="1" <?php if($html_font==1) echo "checked"; ?>> Fonts</font></td>
    <td><font face="Arial,Helvetica"><input type="checkbox" name="html_li" value="1" <?php if($html_li==1) echo "checked"; ?>> Lists (ul,ol,li)</font></td>
</tr>
<tr>
    <td><font face="Arial,Helvetica"><input type="checkbox" name="html_img" value="1" <?php if($html_img==1) echo "checked"; ?>> Images</font></td>
    <td><font face="Arial,Helvetica"><input type="checkbox" name="html_a" value="1" <?php if($html_a==1) echo "checked"; ?>> Anchors (Links)</font></td>
</tr>
</table>
</td>
</tr>
<?php } ?>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Table Width:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="table_width" value="<?php echo $ForumTableWidth; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Table Header Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="table_header_color" value="<?php echo $ForumTableHeaderColor; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Table Header Font Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="table_header_font_color" value="<?php echo $ForumTableHeaderFontColor; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Main Table Body Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="table_body_color_1" value="<?php echo $ForumTableBodyColor1; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Main Table Body Font Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="table_body_font_color_1" value="<?php echo $ForumTableBodyFontColor1; ?>" size="10" class="TEXT"></td>
</tr>
<?php if(!$ForumFolder){ ?>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Alt. Table Body Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="table_body_color_2" value="<?php echo $ForumTableBodyColor2; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Alt. Table Body Font Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="table_body_font_color_2" value="<?php echo $ForumTableBodyFontColor2; ?>" size="10" class="TEXT"></td>
</tr>
<?php } ?>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Navigation Background Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="nav_color" value="<?php echo $ForumNavColor; ?>" size="10" class="TEXT"></td>
</tr>
<tr>
  <td valign="middle" bgcolor="#FFFFFF"><font face="Arial,Helvetica">Navigation Font Color:</font></td>
  <td valign="middle" bgcolor="#C0C0C0"><input type="Text" name="nav_font_color" value="<?php echo $ForumNavFontColor; ?>" size="10" class="TEXT"></td>
</tr>
</td>
</tr>
</table>
<p>
<center><input type="Submit" name="submit" value="Update" class="BUTTON"></center>
</form>
