<?php
if (!isset($_SESSION)) session_start();
//  fichier lang
if ($lg == "fr"){
   $msgrech_retqcm = "Revenir au menu de cr�ation de QCM";
   $mmsg_ModRessOk = "La ressource choisie a �t� associ�e � l'activit�";
   $mmsg_RessOk = "La ressource a �t� modifi�e";
   $mmsg_SupRess = "Le lien vers la ressource a �t� supprim� ";
   $mmsg_noResLgn = "Pas de ressource en ligne";
   $mmsg_noAffTt = "Afficher tout";
   $mmsg_qcmSupp = "Supprimer le QCM";
   $mmsg_qcmMdf = "Modifier le QCM";
   $mmsg_qcmOpn = "Ouvrir le QCM";
   $mmsg_qcmPgs = "Le nombre de QCM � afficher par page est pass� � ";
   $mmsg_qcmDisp = "QCM disponible(s)";
   $mmsg_qcmAffAut = "Afficher tous les QCM de";
   $msgRess_supOk = "La suppression de la ressource a bien eu lieu";


}elseif ($lg == "en"){
   $msgrech_retqcm = "Revenir au menu de cr�ation de QCM";
   $mmsg_RessOk = "La ressource choisie a �t� associ�e � l'activit� ";
   $mmsg_ModRessOk = "La ressource choisie a �t� associ�e � l'activit�";
   $mmsg_SupRess = "Le lien vers la ressource a �t� supprim� ";
   $mmsg_noResLgn = "Pas de ressource en ligne";
   $mmsg_noAffTt = "Afficher tout";
   $mmsg_qcmSupp = "Supprimer le QCM";
   $mmsg_qcmMdf = "Modifier le QCM";
   $mmsg_qcmOpn = "Ouvrir le QCM";
   $mmsg_qcmPgs = "Le nombre de Qcm � afficher par page est pass� � ";
   $mmsg_qcmDisp = "QCM disponible(s)";
   $mmsg_qcmAffAut = "Afficher tous les QCM de";
   $msgRess_supOk = "La suppression de la ressource a bien eu lieu";

}elseif ($lg == "ru"){
   $msgrech_retqcm = "Revenir au menu de cr�ation de QCM";
   $mmsg_RessOk = "La ressource choisie a �t� associ�e � l'activit� ";
   $mmsg_ModRessOk = "La ressource choisie a �t� associ�e � l'activit�";
   $mmsg_SupRess = "Le lien vers la ressource a �t� supprim� ";
   $mmsg_noResLgn = "Pas de ressource en ligne";
   $mmsg_noAffTt = "Afficher tout";
   $mmsg_qcmSupp = "Supprimer le QCM";
   $mmsg_qcmMdf = "Modifier le QCM";
   $mmsg_qcmOpn = "Ouvrir le QCM";
   $mmsg_qcmPgs = "Le nombre de Qcm � afficher par page est pass� � ";
   $mmsg_qcmDisp = "QCM disponible(s)";
   $mmsg_qcmAffAut = "Afficher tous les QCM de";
   $msgRess_supOk = "La suppression de la ressource a bien eu lieu";

}

?>