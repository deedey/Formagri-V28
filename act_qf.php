<?php
if (!isset($_SESSION)) session_start();
include ("include/UrlParam2PhpVar.inc.php");
if (!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "")
{
  exit();
}
require ("admin.inc.php");
require ("fonction.inc.php");
require ("lang$lg.inc.php");
dbconnect();
echo "<HTML>";
echo "<BODY marginwidth='0' marginheight='0' leftmargin='0' topmargin='0'>";
$date_op = date("Y-m-d H:i:s");
$date = date("Y/m/d H:i:s" ,time());
list($dtj,$hdeb) = explode(" ",$date);
$aza = str_replace("undefined","",$aza);
if ($lg == "fr")
{
  $aza = str_replace("é","�",$aza);
  $aza = str_replace("è","�",$aza);
  $aza = str_replace("ç","�",$aza);
  $aza = str_replace("â","�",$aza);
  $aza = str_replace("ù","�",$aza);
  $aza = str_replace("î","�",$aza);
  $aza = str_replace("ô","�",$aza);
  $aza = str_replace("�","�",$aza);
}
if ($lg == "ru")
{
  $aza = str_replace("й","�",$aza);
  $aza = str_replace("ц","�",$aza);
  $aza = str_replace("у","�",$aza);
  $aza = str_replace("к","�",$aza);
  $aza = str_replace("е","�",$aza);
  $aza = str_replace("н","�",$aza);
  $aza = str_replace("г","�",$aza);
  $aza = str_replace("ш","�",$aza);
  $aza = str_replace("щ","�",$aza);
  $aza = str_replace("з","�",$aza);
  $aza = str_replace("х","�",$aza);
  $aza = str_replace("ъ","�",$aza);
  $aza = str_replace("ф","�",$aza);
  $aza = str_replace("ы","�",$aza);
  $aza = str_replace("в","�",$aza);
  $aza = str_replace("а","�",$aza);
  $aza = str_replace("п","�",$aza);
  $aza = str_replace("р","�",$aza);
  $aza = str_replace("о","�",$aza);
  $aza = str_replace("л","�",$aza);
  $aza = str_replace("д","�",$aza);
  $aza = str_replace("ж","�",$aza);
  $aza = str_replace("э","�",$aza);
  $aza = str_replace("я","�",$aza);
  $aza = str_replace("ч","�",$aza);
  $aza = str_replace("с","�",$aza);
  $aza = str_replace("м","�",$aza);
  $aza = str_replace("и","�",$aza);
  $aza = str_replace("т","�",$aza);
  $aza = str_replace("ь","�",$aza);
  $aza = str_replace("б","�",$aza);
  $aza = str_replace("ю","�",$aza);
  $aza = str_replace("Й","�",$aza);
  $aza = str_replace("Ц","�",$aza);
  $aza = str_replace("У","�",$aza);
  $aza = str_replace("Б","�",$aza);
  $aza = str_replace("Е","�",$aza);
  $aza = str_replace("Н","�",$aza);
  $aza = str_replace("Г","�",$aza);
  $aza = str_replace("Ш","�",$aza);
  $aza = str_replace("Щ","�",$aza);
  $aza = str_replace("З","�",$aza);
  $aza = str_replace("Х","�",$aza);
  $aza = str_replace("Ъ","�",$aza);
  $aza = str_replace("Ф","�",$aza);
  $aza = str_replace("Ы","�",$aza);
  $aza = str_replace("В","�",$aza);
  $aza = str_replace("А","�",$aza);
  $aza = str_replace("П","�",$aza);
  $aza = str_replace("� ","�",$aza);
  $aza = str_replace("О","�",$aza);
  $aza = str_replace("Л","�",$aza);
  $aza = str_replace("Д","�",$aza);
  $aza = str_replace("Ж","�",$aza);
  $aza = str_replace("Э","�",$aza);
  $aza = str_replace("Я","�",$aza);
  $aza = str_replace("Ч","�",$aza);
  $aza = str_replace("С","�",$aza);
  $aza = str_replace("М","�",$aza);
  $aza = str_replace("И","�",$aza);
  $aza = str_replace("Т","�",$aza);
  $aza = str_replace("Ь","�",$aza);
  $aza = str_replace("Б","�",$aza);
  $aza = str_replace("Ю","�",$aza);
}
$aza = str_replace("Number of questions",$qf_nq,$aza);
$aza = str_replace("Right Answers",$qf_ra,$aza);
$aza = str_replace("Wrong Answers",$qf_was,$aza);
$aza = str_replace("Wrong answer",$qf_wa,$aza);
$aza = str_replace("Unmarked questions",$qf_uqs,$aza);
$aza = str_replace("Question not valuated",$qf_uq,$aza);
$aza = str_replace("Time elapsed",$qf_tps,$aza);
$aza = str_replace("Date",$qf_dat,$aza);
$aza = str_replace("MARK",$qf_not,$aza);
$aza = str_replace("Correct answer",$qf_cr,$aza);
$aza = str_replace("Right sentences",$qf_rs,$aza);
$aza = str_replace("Guess words",$qf_gw,$aza);
$aza = str_replace(" on ",$qf_on,$aza);
$aza = str_replace("Matching",$qf_mt,$aza);
$complement= "<CENTER><TABLE bgColor='#298CA0' cellspacing='2'><TR><TD>\n".
             "<TABLE bgColor='#FFFFFF' cellspacing='2' width='100%'>\n".
             "<TR><TD background=\"/images/fond_titre_table.jpg\" colspan='2' height='34' align='center' valign='center'>\n<Font size='3' color='#FFFFFF'><B>$results</B></FONT>\n".
             "</TD></TR><TR><TD>";
$entete = "<HTML>\n<HEAD>\n<TITLE>$msq_activite</TITLE>\n".
          "<STYLE>\n".
          "BODY {font-family:verdana;font-size:11px;color: #000066}\n".
          "TD {font-family:verdana;font-size:12px;color: #000066}\n".
          "</STYLE>\n".
          "</HEAD><BODY bgcolor=\"#002D44\">";
$one = "";
$two = "";
$fin_page = "</BODY></HTML>";
$complement1 = "</TD></TR></TABLE></TD></TR></TABLE>";
$aza=$entete.$complement.$one.$two.stripslashes($aza).$complement1.$fin_page;
/*
echo "<pre>";
     print_r($_POST);print_r($_GET);
echo "</pre>";
*/
if ($typ_user == "APPRENANT")
{
  $Ext='_'.$_SESSION['numero_groupe'];
  $suivi_etat= GetDataField ($connect,"select suivi_etat_lb from suivi1$Ext where suivi_act_no= $id_act and suivi_utilisateur_no=$id_user and suivi_grp_no=$numero_groupe","suivi_etat_lb");
  $suivi_comment= GetDataField ($connect,"select suivi_commentaire_cmt from suivi1$Ext where suivi_act_no= $id_act and suivi_utilisateur_no=$id_user and suivi_grp_no=$numero_groupe","suivi_commentaire_cmt");
  $suivi_fichier= GetDataField ($connect,"select suivi_fichier_lb from suivi1$Ext where suivi_act_no= $id_act and suivi_utilisateur_no=$id_user and suivi_grp_no=$numero_groupe","suivi_fichier_lb");
  $suivi_note= GetDataField ($connect,"select suivi_note_nb1 from suivi1$Ext where suivi_act_no= $id_act and suivi_utilisateur_no=$id_user and suivi_grp_no=$numero_groupe","suivi_note_nb1");
  $id_ress = GetDataField ($connect,"select act_ress_no from activite where act_cdn = $id_act","act_ress_no");
  $act_valid = GetDataField ($connect,"select act_acquittement_lb from activite where act_cdn = $id_act","act_acquittement_lb");
  $ress = GetDataField ($connect,"select ress_url_lb from ressource_new where ress_cdn = $id_ress","ress_url_lb");
  $fichier="qf_".$id_ress."_";
  $fichier .= substr(strrchr($ress, "/"), 1);
  $dir_app="ressources/".$login."_".$id_user."/devoirs/".$fichier;
  $fp = fopen($dir_app, "w");
  $fw = fwrite($fp, $aza);
  fclose($fp);
  $change_traq = mysql_query("update suivi1$Ext set suivi_fichier_lb='$fichier',suivi_note_nb1 = '$note' where suivi_act_no=$id_act and suivi_utilisateur_no=$id_user and suivi_grp_no=$numero_groupe");
  if ($suivi_comment != "Activit� repass�e" && $suivi_etat == "A FAIRE")
    $change_traq = mysql_query("update suivi1$Ext set suivi_date_debut_dt='$date_op' where suivi_act_no=$id_act and suivi_utilisateur_no=$id_user and suivi_grp_no=$numero_groupe");
  elseif (($suivi_etat == "A FAIRE" && $suivi_comment == "Activit� repass�e") || ($suivi_etat != "A FAIRE" && strstr($fichier,"qf_") && $act_valid == "APPRENANT"))
    $change_traq = mysql_query("update suivi1$Ext set suivi_date_fin_dt='$date_op',suivi_commentaire_cmt='Activit� repass�e' where suivi_act_no=$id_act and suivi_utilisateur_no=$id_user and suivi_grp_no=$numero_groupe");
}
?>
<SCRIPT language=javascript>
    setTimeout("Quit()",1500);
    function Quit() {
      self.opener=null;self.close();return false;
    }
</SCRIPT>
</BODY></HTML>