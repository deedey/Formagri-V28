<?php
if (!isset($_SESSION)) session_start();
include ("include/UrlParam2PhpVar.inc.php");
if (!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "")
{
  exit();
}
require "lang$lg.inc.php";
include ("click_droit.txt");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Microsoft VM</TITLE>
<META http-equiv=Content-Type content=text/html;CHARSET=iso-8859-1>
<META content="MSHTML 6.00.2800.1400" name=GENERATOR></HEAD>
<BODY>
<H1 align=center><FONT face="Arial, Helvetica" color=#0033cc size=5>T�l�chargement de Microsoft VM</FONT></H1>
<P><FONT face="Arial, Helvetica" color=red size=4>Vous �tes sur la page de t�l�chargement de Microsoft Virtual Machine
</FONT></P>
de vous retrouver sur cette page indique que <B>JAVA n'est pas install� sur la machine</B> que vous utilisez et qu'il est n�cessaire pour une utilisation optimale de cette plateforme de formation.
<BR>Le t�l�chargement va se lancer automatiquement dans quelques secondes. Si vous pr�f�rez t�l�charger plut�t Java de Sun microsystems cliquez sur "Java de Sun" sinon laissez le t�l�chargement se poursuivre ou encore fermez la fen�tre en cliquant sur l'ic�ne de sortie.<P><BR></P>
<P><CENTER><FORM><input type="BUTTON" name="SUBMIT" value="Java de Sun Microsystems" onclick="javascript:document.location.replace('http://www.java.com/fr/');">&nbsp;&nbsp;&nbsp;&nbsp;<input type=image src="images/fermer.gif" onclick="javascript:window.close();"></FORM></CENTER>
<P><FONT face="Arial, Helvetica" color=red size=4>Vous autorisez l'installation de Microsoft Virtual Machine</FONT></P>
<UL>
  <LI><B>Les fichiers d'installation vont �tre charg�s</B>.
  <LI>Tant que vous aurez le sablier, le t�l�chargement n'est pas termin�
  <LI><B>Rappel:</B> Ce t�l�chargement peut exiger jusqu'� 30 minutes avec modem de 28.8 bits/s.
  <LI>Quand le t�l�chargement sera termin�, une invite de s�curit� vous demandera si vous d�sirez installer Microsoft VM.
  <LI>Cliquez 'Oui' dans cette fen�tre d'alerte
  <LI>Quand l'installation est termin�e, �teignez puis r�allumer votre PC pour la prise en compte de Microsoft VM
  <LI>Vous pouvez toutefois continuer � utiliser le menu javascript actuel jusqu'� votre prochaine connection. </LI></UL>
<P>
<OBJECT codeBase=http://ef-dev.educagri.fr/java/JavaVM3186.exe#Version=5,0,3186 height=0 width=0
  classid=clsid:08B0E5C0-4FCB-11CF-AAA5-00401C608500>
</OBJECT></P>
</BODY>
</HTML>