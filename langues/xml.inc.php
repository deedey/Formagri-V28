<?php
if (!isset($_SESSION)) session_start();
//  fichier lang
if ($lg == "fr"){
   $mess_exparcSco = "Exporter en Scorm [Xml]";
   $messxml_dtmod = "Date de derni�re modification sinon de cr�ation";
   $mess_tit_manifest = "Essai d'exportation pour formagri";
   $mess_fic_corrompu = "Fichier � importer corrompu";
}elseif ($lg == "en"){
   $mess_exparcSco = "Exporter en Scorm [Xml]";
   $messxml_dtmod = "Date de derni�re modification sinon de cr�ation";
   $mess_tit_manifest = "Essai d'exportation pour formagri";
   $mess_fic_corrompu = "Fichier � importer corrompu";
}elseif ($lg == "ru"){
   $mess_exparcSco = "Exporter en Scorm [Xml]";
   $messxml_dtmod = "Date de derni�re modification sinon de cr�ation";
   $mess_tit_manifest = "Essai d'exportation pour formagri";
   $mess_fic_corrompu = "Fichier � importer corrompu";
}
?>