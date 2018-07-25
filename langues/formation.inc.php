<?php
if (!isset($_SESSION)) session_start();
//  fichier lang
if ($lg == "fr"){
   $msgrp_acces = " Cette formation est maintenant accessible ";
   $msgrp_noacces = " Cette formation n'est plus accessible. Elle est en construction ";
   $msgrp_mut = " Cette formation est maintenant mutualisee ";
   $msgrp_nomut = " Cette formation n'est plus mutualisee ";
   $msgrp_ind = "Cette formation permet desormais l'individualisation";
   $msgrp_noind = "Cette formation ne permet plus l'individualisation.<br /> Le parcours de formation sera identique pour tous les apprenants";
   $msgrp_ajtapform = "Ajouter un nouvel apprenant � cette formation";
   $msgrp_inscOk = "a �t� inscrit � la formation";
   $msgrp_notut = "n'accompagne plus en qualit� de tuteur l'apprenant";
   $msgrp_permut = "a permut� avec";
   $msgrp_seq_presc = "des s�quences appartenant � ce module est prescriptible. Le reste ne l'est pas";
   $msgrp_nomodif_presc = "Vous n'avez op�r� aucune modification des prescriptions";
   $msg_indivi_tit = "Individualisation de la formation";
   $msg_ajtF = "Ajouter une formation";
   $msg_frm_presc = "Formation(s) prescrite(s)";
   $msg_seq_rinit = "R�initialisation";
   $msg_bilglb = "Informations globales";
   $msg_bilfrm = "Historique d'activit�s li�es � la formation";
   $msgActPlus = "Activit� ajout�e pour vous individuellement en plus du contenu de la s�quence";

}elseif ($lg == "en"){
   $msgrp_acces = " Cette formation est d�sormais accessible ";
   $msgrp_noacces = " Cette formation n'est plus accessible. Elle est en construction ";
   $msgrp_mut = " Cette formation est d�sormais mutualis�e ";
   $msgrp_nomut = " Cette formation n'est plus mutualis�e ";
   $msgrp_ind = "Cette formation permet d�sormais l'individualisation";
   $msgrp_noind = "Cette formation ne permet plus l'individualisation.<br /> Le parcours de formation sera le m�me pour tous les apprenants";
   $msgrp_ajtapform = "Ajouter un nouvel apprenant � cette formation";
   $msgrp_inscOk = "a �t� inscrit � la formation";
   $msgrp_notut = "n'accompagne plus en qualit� de tuteur l'apprenant";
   $msgrp_permut = "a permut� avec";
   $msgrp_seq_presc = "des s�quences appartenant � ce module est prescriptible. Le reste ne l'est pas";
   $msgrp_nomodif_presc = "Vous n'avez op�r� aucune modification des prescriptions";
   $msg_indivi_tit = "Individualisation de la formation";
   $msg_ajtF = "Ajouter une formation";
   $msg_frm_presc = "Formation(s) prescrite(s)";
   $msg_seq_rinit = "R�initialisation";
   $msg_bilglb = "Informations globales";
   $msg_bilfrm = "Historique d'activit�s li�es � la formation";
   $msgActPlus = "Activit� ajout�e pour vous individuellement en plus du contenu de la s�quence";


}elseif ($lg == "ru"){
   $msgrp_acces = " Cette formation est d�sormais accessible ";
   $msgrp_noacces = " Cette formation n'est plus accessible. Elle est en construction ";
   $msgrp_mut = " Cette formation est d�sormais mutualis�e ";
   $msgrp_nomut = " Cette formation n'est plus mutualis�e ";
   $msgrp_ind = "Cette formation permet d�sormais l'individualisation";
   $msgrp_noind = "Cette formation ne permet plus l'individualisation.<br /> Le parcours de formation sera le m�me pour tous les apprenants";
   $msgrp_ajtapform = "Ajouter un nouvel apprenant � cette formation";
   $msgrp_inscOk = "a �t� inscrit � la formation";
   $msgrp_notut = "n'accompagne plus en qualit� de tuteur l'apprenant";
   $msgrp_permut = "a permut� avec";
   $msgrp_nomodif_presc = "Vous n'avez op�r� aucune modification des prescriptions";
   $msgrp_seq_presc = "des s�quences appartenant � ce module est prescriptible. Le reste ne l'est pas";
   $msg_indivi_tit = "Individualisation de la formation";
   $msg_ajtF = "Ajouter une formation";
   $msg_frm_presc = "Formation(s) prescrite(s)";
   $msg_seq_rinit = "R�initialisation";
   $msg_bilglb = "Informations globales";
   $msg_bilfrm = "Historique d'activit�s li�es � la formation";
   $msgActPlus = "Activit� ajout�e pour vous individuellement en plus du contenu de la s�quence";


}

?>