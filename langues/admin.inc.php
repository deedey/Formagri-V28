<?php
if (!isset($_SESSION)) session_start();
if ($lg == "")
{
  exit();
}
//  fichier lang
if ($lg == "fr")
{
   $ntf_adm_mc = "pourra acc�der � partir de cette plateforme �";
   $msgadm_nbr_aff = "le nombre d'�l�ments � afficher par page est pass� �";
   $msgadm_msgmc = "Mode Multi-Centre activ�";
   $msgadm_msgfav = "Gestion du marquage des modules, s�quences et activit�s favorites activ�e";
   $msgadm_fav =  "Gestion du marquage des modules, s�quences et activit�s favorites";
   $msgadm_msgchat = "Chat activ�";
   $msgadm_msgflib = "Forum libre activ�";
   $msgadm_msgrss = "Fil Rss sur la conception des modules activ�";
   $msgadm_mc = "Le mode multi-centre a �t�";
   $msgadm_chat = "L'acc�s au chat a �t�";
   $msgadm_flib = "L'acc�s au forum libre a �t�";
   $msgadm_rss = "L'acc�s au fil RSS a �t�";
   $msgadm_mc_act = "activ�";
   $msgadm_mc_desact = "d�sactiv�";
   $msg_logo_def = "Les param�tres de l'interface sont de nouveau ceux fournis par d�faut par la plate-forme";
   $msg_logo_new = "Vous venez de modifier les param�tres de l'interface de la plate-forme";
   $msgadm_supserv = "Vous venez de supprimer le serveur dont l'adresse est";
   $msgadm_modserv = "Vous venez de modifier les param�tres du serveur dont l'adresse est";
   $msgadm_ajtserv = "Vous venez d'ajouter un serveur dont l'adresse est";
   $msgadm_pgs_idx = "Le nombre d'items affich� par page dans votre index des ressources sera d�sormais de";
   $msgadm_scNrm = "Vous venez de s�lectionner un �cran au format Normal avec toutes les fonctionnalit�s du navigateur";
   $msgadm_scMed = "Vous venez de s�lectionner un �cran au format M�dian avec un navigateur sans barre d'adresse";
   $msgadm_noapp_dv = "Aucun apprenant inscrit";
   $msgadm_nosch_dv = "Aucun nom ne r�pond � cet suite de lettres. Faites une autre recherche<br /> ou choisissez une option dans le menu d�roulant.";
   $msgadm_sch_nb = " correspond(ent) au nom ou d�but de nom recherch�";
   $msgadm_sch_nmdb = " Nom ou d�but de nom recherch�";
   $msgadm_rf_titbul = "Responsable de la formation ";
   $msgadm_presc_titbul = "A prescrit dans la formation ";
   $msgadm_form_titbul = "Formateur dans la formation ";
   $msgadm_spv_titbul = "Observateur de la formation ";
   $msgadm_tut_titbul = "Tuteur pour ";
   $msgadm_mod = "Modules";
   $msgadm_seq = "S�quences";
   $msgadm_new_img = "Vous venez d'affecter � vos �crans une nouvelle image de fond";
   $msgadm_new_color = "Vous venez de modifier la couleur de fond d'�cran de la page d'accueil";
   $msgadm_clkEtat = "Cliquez sur le lien pour modifier l'�tat de cette fonctionnalit�";
   $msgadm_ecrmod = "Modifier la configuration du navigateur (avec [NORMAL] ou sans [MEDIAN] menus d�roulants ni barre d'adresse)";
   $msgadm_etatfav = "Gestion des modules, s�quences et acitivit�s favorites activ�";
}
elseif ($lg == "en")
{
   $ntf_adm_mc = "pourra acc�der � partir de cette plateforme �";
   $msgadm_nbr_aff = "le nombre d'�l�ments � afficher par page est pass� �";
   $msgadm_msgmc = "Mode Multi-Centre activ�";
   $msgadm_msgfav = "Gestion des modules, s�quences et activit�s favorites activ�e";
   $msgadm_fav =  "Gestion des modules, s�quences et activit�s favorites";   $msgadm_msgchat = "Chat activ�";
   $msgadm_msgflib = "Forum libre activ�";
   $msgadm_msgrss = "Fil Rss sur la conception des modules activ�";
   $msgadm_mc = "Le mode multi-centre a �t�";
   $msgadm_chat = "L'acc�s au chat a �t�";
   $msgadm_flib = "L'acc�s au forum libre a �t�";
   $msgadm_rss = "L'acc�s au fil RSS a �t�";
   $msgadm_mc_act = "activ�";
   $msgadm_mc_desact = "d�sactiv�";
   $msg_logo_def = "Les param�tres de l'interface sont de nouveau ceux fournis par d�faut par la plate-forme";
   $msg_logo_new = "Vous venez de modifier les param�tres de l'interface de la plate-forme";
   $msgadm_supserv = "Vous venez de supprimer le serveur dont l'adresse est";
   $msgadm_modserv = "Vous venez de modifier les param�tres du serveur dont l'adresse est";
   $msgadm_ajtserv = "Vous venez d'ajouter un serveur dont l'adresse est";
   $msgadm_pgs_idx = "Le nombre d'items affich� par page dans votre index des ressources sera d�sormais de";
   $msgadm_scNrm = "Vous venez de s�lectionner un �cran au format Normal avec toutes les fonctionnalit�s du navigateur";
   $msgadm_scMed = "Vous venez de s�lectionner un �cran au format M�dian avec un navigateur sans barre d'adresse";
   $msgadm_noapp_dv = "Aucun apprenant inscrit";
   $msgadm_nosch_dv = "Aucun nom ne r�pond � cet suite de lettres. Faites une autre recherche<br /> ou choisissez une option dans le menu d�roulant.";
   $msgadm_sch_nb = " correspond(ent) au nom ou d�but de nom recherch�";
   $msgadm_sch_nmdb = " Nom ou d�but de nom recherch�";
   $msgadm_rf_titbul = "Responsable de la formation ";
   $msgadm_presc_titbul = "A prescrit dans la formation ";
   $msgadm_form_titbul = "Formateur dans la formation ";
   $msgadm_spv_titbul = "Observateur de la formation ";
   $msgadm_tut_titbul = "Tuteur pour ";
   $msgadm_mod = "Modules";
   $msgadm_seq = "S�quences";
   $msgadm_new_img = "Vous venez d'affecter � vos �crans une nouvelle image de fond";
   $msgadm_new_color = "Vous venez de modifier la couleur de fond d'�cran de la page d'accueil";
   $msgadm_clkEtat = "Cliquez sur le lien pour modifier l'�tat de cette fonctionnalit�";
   $msgadm_ecrmod = "Modifier la configuration du navigateur (avec [NORMAL] ou sans [MEDIAN] menus d�roulants ni barre d'adresse)";
   $msgadm_etatfav = "Gestion des modules, s�quences et acitivit�s favorites activ�";
}
elseif ($lg == "ru")
{
   $ntf_adm_mc = "pourra acc�der � partir de cette plateforme �";
   $msgadm_nbr_aff = "le nombre d'�l�ments � afficher par page est pass� �";
   $msgadm_msgmc = "Mode Multi-Centre activ�";
   $msgadm_msgfav = "Gestion des modules, s�quences et activit�s favorites activ�e";
   $msgadm_fav =  "Gestion des modules, s�quences et activit�s favorites";   $msgadm_msgchat = "Chat activ�";
   $msgadm_msgflib = "Forum libre activ�";
   $msgadm_msgrss = "Fil Rss sur la conception des modules activ�";
   $msgadm_mc = "Le mode multi-centre a �t�";
   $msgadm_chat = "L'acc�s au chat a �t�";
   $msgadm_flib = "L'acc�s au forum libre a �t�";
   $msgadm_rss = "L'acc�s au fil RSS a �t�";
   $msgadm_mc_act = "activ�";
   $msgadm_mc_desact = "d�sactiv�";
   $msg_logo_def = "Les param�tres de l'interface sont de nouveau ceux fournis par d�faut par la plate-forme";
   $msg_logo_new = "Vous venez de modifier les param�tres de l'interface de la plate-forme";
   $msgadm_supserv = "Vous venez de supprimer le serveur dont l'adresse est";
   $msgadm_modserv = "Vous venez de modifier les param�tres du serveur dont l'adresse est";
   $msgadm_ajtserv = "Vous venez d'ajouter un serveur dont l'adresse est";
   $msgadm_pgs_idx = "Le nombre d'items affich� par page dans votre index des ressources sera d�sormais de";
   $msgadm_scNrm = "Vous venez de s�lectionner un �cran au format Normal avec toutes les fonctionnalit�s du navigateur";
   $msgadm_scMed = "Vous venez de s�lectionner un �cran au format M�dian avec un navigateur sans barre d'adresse";
   $msgadm_noapp_dv = "Aucun apprenant inscrit";
   $msgadm_nosch_dv = "Aucun nom ne r�pond � cet suite de lettres. Faites une autre recherche<br /> ou choisissez une option dans le menu d�roulant.";
   $msgadm_sch_nb = " correspond(ent) au nom ou d�but de nom recherch�";
   $msgadm_sch_nmdb = " Nom ou d�but de nom recherch�";
   $msgadm_rf_titbul = "Responsable de la formation ";
   $msgadm_presc_titbul = "A prescrit dans la formation ";
   $msgadm_form_titbul = "Formateur dans la formation ";
   $msgadm_spv_titbul = "Observateur de la formation ";
   $msgadm_tut_titbul = "Tuteur pour ";
   $msgadm_mod = "Modules";
   $msgadm_seq = "S�quences";
   $msgadm_new_img = "Vous venez d'affecter � vos �crans une nouvelle image de fond";
   $msgadm_new_color = "Vous venez de modifier la couleur de fond d'�cran de la page d'accueil";
   $msgadm_clkEtat = "Cliquez sur le lien pour modifier l'�tat de cette fonctionnalit�";
   $msgadm_ecrmod = "Modifier la configuration du navigateur (avec [NORMAL] ou sans [MEDIAN] menus d�roulants ni barre d'adresse)";
   $msgadm_etatfav = "Gestion des modules, s�quences et activit�s favorites activ�";
}


?>