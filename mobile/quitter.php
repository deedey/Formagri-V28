<?php
session_start();
require ("../admin.inc.php");
require ("../fonction.inc.php");
require ("../fonction_html.inc.php");
dbConnect();
$date = date("d/m/Y H:i:s" ,time());
$serveur = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = getenv('REMOTE_ADDR');
if (isset($_SESSION['LMS']))
file_put_contents('mobilog.log',$_SESSION['IDUSER'].",   d�CONNEXION ,   ".$date." ,   $serveur ,   $ip ,   ".$_SESSION['LMS'].
                    " ,   ".$_SESSION['nom']." ".$_SESSION['prenom']."\n",FILE_APPEND);
session_destroy();
setcookie("NameUser", "", time() - 3800);
echo utf2Charset($_COOKIE['NameUser'].": Vous n'�tes plus connect�(e) � Formagri Notify. ".
                 "<br /><br />Appuyez sur le bouton RETOUR pour quitter compl�tement si vous �tes connect� sur mobile","iso-8859-1");
?>
