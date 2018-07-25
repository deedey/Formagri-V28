<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['id_user']) || $_SESSION['id_user'] == "")
{
  exit();
}
//  fichier lang
if ($lg == "fr")
{ 
   $mmsg_mod_miens = "Afficher uniquement mes modules";
   $mmsg_mod_ssref = "Afficher tous les modules non li�s � un r�f�rentiel";
   $mmsg_mod_ref = "Afficher tous les modules li�s � un r�f�rentiel ";
   $mmsg_mod_tts = "Afficher tous les modules disponibles";
   $mmsg_mod_type = "Afficher tous les modules_types duplicables et non prescriptibles";
   $mmsg_mod_new = "Cr�er un nouveau module";
   $mmsg_seq_miens = "Afficher uniquement mes s�quences";
   $mmsg_seq_ssref = "Afficher toutes les s�quences non li�es � un r�f�rentiel";
   $mmsg_seq_ref = "Afficher toutes les s�quences li�es � un r�f�rentiel ";
   $mmsg_seq_tts = "Afficher toutes les s�quences disponibles";
   $mmsg_seq_type = "Afficher toutes les s�quences_type duplicables et non prescriptibles";
   $mmsg_seq_new = "Cr�er une nouvelle s�quence";
   $mmsg_act_miens_lbrs = "Afficher toutes mes activit�s";
   $mmsg_act_miens_seq = "Afficher toutes les activit�s";
   $mmsg_act_seq = "Afficher toutes les activit�s li�es � une s�quence";
   $mmsg_act_lbtts = "Afficher toutes les activit�s libres";
   $mmsg_act_lb_nd = "Afficher toutes les activit�s libres non duplicables";
   $mmsg_act_new = "Cr�er une nouvelle activit� libre";
   $mmsg_gene = "Les modifications apport�es ont �t� prises en compte";
   $mmsg_supact = "Le lien vers la ressource a �t� supprim�";
   $mmsg_menu_qcm = "Ce module permet � un formateur de concevoir et d'inclure des tests en tant qu'activit� dans une s�quence. ".
                    "Le formateur doit aussi fixer un seuil de r�ussite (note sur 20) qui permet (si l'option a �t� retenue) � ".
                    "l'apprenant d'acc�der � l'activit� suivante�";
   $mmsg_qcm_cr = "Cr�er un nouveau QCM";
   $mmsg_qcm_cs = "Consulter un QCM";
   $mmsg_qcm_md = "Modifier un QCM";
   $mmsg_qcm_sp = "Supprimer un QCM";
   $mmsg_qcmNoImg = "L'image indiqu�e n'a pas d'extension(gif, jpg, ou png): elle ne sera pas prise en compte";
   $mmsg_qcm_TImg = "Cliquez ici pour voir l'image en taille r�elle";
   $mmsg_ntExp = "Vous venez de proc�der � l'exportation du module";
   $mmsg_noExp = "Export impossible : la plate-forme destinataire n'est pas h�berg�e par le r�seau Formagri/Ceres";
   $msgPrpSeq = "Pr�requis � la s�quence";
   $msgRetSeq = "Retour � la s�quence";
   $msgConsPreq = "Consulter les pr�-requis de la s�quence";
   $msgNoSeq = "Vous n\'avez choisi aucune s�quence existante";
   $msgchxSeq = "Choisir la s�quence";
   $msgVldSq = "Valider la s�quence pr�-requise";
   $msgCarSeq = "Attention, si le pr�-requis est une activit�, la proc�dure continue";
   $msgchxseqOk = "Vous allez choisir une activit� de la s�quence ";
   $msgchXAct = "Choisir l'activit� pr�-requise";
   $msgActSeqReq = "Cette activit� est bien devenue un pr�requis pour la s�quence ";
   $msgChxSeq = "Vous avez choisi cette s�quence comme pr�requis";
   $msqVld = "Validez votre choix";
   $msg_DjaPrq = "est d�j� un pr�-requis pour cette s�quence";
   $msg_fav_ot = "Oter de mes favoris";
   $msg_mod_mark = "Modules marqu�s";
   $msg_seq_mark = "S�quences marqu�es";
   $msgseq_mark = "marqu�e";
   $msg_modNbPg="Choisissez le nombre de lignes par page pour cette session";
   $msg_modItm = "Nombre d'items affichables pour cette session : ";
   $mess_AjStar = "Ajouter une s�quence marqu�e";
   $msg_formod = "Forum du module";
   $msg_supforparc = "La suppression est effective et irreversible pour le forum du module : ";
   $msgCreForMod = "Cochez cette case pour cr�er le forum de ce module";
   $msg_SupForMod = "Supprimer le forum de ce module.";
   $msg_ForSupOk = "Forum supprim�";
   $msg_FMNosup = "Forum actif: vous pourrez le supprimer quand le module ne sera plus prescrit et ne contiendra plus de s�quences.";
   $msg_ConsMod = "Consulter le module";
   $msg_RmtSjt = "Accueil du forum";
   $msg_NewSjt = "Nouveau sujet";
   $msg_SjtVis = "Ce message ainsi que tous ceux qui lui sont sous-jacents sont desormais visibles";
   $msg_SjtNoVis = "Ce message ainsi que tous ceux qui lui sont sous-jacents sont desormais invisibles sauf pour l'auteur du module";
   $msg_LstMsg = "Liste des messages de ce fil de discussion";
   $msg_Lst_sbjt = "Liste des sujets trait�s";
   $msg_IsModFrm = "Ce module possede un forum";
   $msg_RmtFil = "Revenir au fil de discussion";
   
}
elseif ($lg == "en")
{
   $mmsg_mod_miens = "Afficher uniquement mes modules";
   $mmsg_mod_ssref = "Afficher tous les modules non li�s � un r�f�rentiel";
   $mmsg_mod_ref = "Afficher tous les modules li�s � un r�f�rentiel ";
   $mmsg_mod_tts = "Afficher tous les modules disponibles";
   $mmsg_mod_type = "Afficher tous les modules_types duplicables et non prescriptibles";
   $mmsg_mod_new = "Cr�er un nouveau module ";
   $mmsg_seq_miens = "Afficher uniquement mes s�quences";
   $mmsg_seq_ssref = "Afficher toutes les s�quences non li�es � un r�f�rentiel";
   $mmsg_seq_ref = "Afficher toutes les s�quences li�es � un r�f�rentiel ";
   $mmsg_seq_tts = "Afficher toutes les s�quences disponibles";
   $mmsg_seq_type = "Afficher toutes les s�quences_type duplicables et non prescriptibles";
   $mmsg_seq_new = "Cr�er une nouvelle s�quence";
   $mmsg_act_miens_lbrs = "Afficher uniquement mes activit�s libres";
   $mmsg_act_miens_seq = "Afficher uniquement mes activit�s li�es � une s�quence";
   $mmsg_act_seq = "Afficher toutes les activit�s li�es � une s�quence";
   $mmsg_act_lbtts = "Afficher toutes les activit�s libres";
   $mmsg_act_lb_nd = "Afficher toutes les activit�s libres non duplicables";
   $mmsg_act_new = "Cr�er une nouvelle activit� libre";
   $mmsg_gene = "Les modifications apport�es ont �t� prises en compte";
   $mmsg_supact = "Le lien vers la ressource a �t� supprim�";
   $mmsg_menu_qcm = "Ce module permet � un formateur de concevoir et d'inclure des tests en tant qu'activit� dans une s�quence. ".
                    "Le formateur doit aussi fixer un seuil de r�ussite (note sur 20) qui permet (si l'option a �t� retenue) � ".
                    "l'apprenant d'acc�der � l'activit� suivante�";
   $mmsg_qcm_cr = "Cr�er un nouveau QCM";
   $mmsg_qcm_cs = "Consulter un QCM";
   $mmsg_qcm_md = "Modifier un QCM";
   $mmsg_qcm_sp = "Supprimer un QCM";
   $mmsg_qcmNoImg = "L'image indiqu�e n'a pas d'extension(gif, jpg, ou png): elle ne sera pas prise en compte";
   $mmsg_qcm_TImg = "Cliquez ici pour voir l'image en taille r�elle";
   $mmsg_ntExp = "Vous venez de proc�der � l'exportation du module";
   $mmsg_noExp = "Export impossible : la plate-forme destinataire n'est pas h�berg�e par le r�seau Formagri/Ceres";
   $msgPrpSeq = "Pr�-requis � la s�quence";
   $msgRetSeq = "Retour � la s�quence";
   $msgConsPreq = "Consulter les pr�-requis de la s�quence";
   $msgNoSeq = "Vous n\'avez choisi aucune s�quence existante";
   $msgchxSeq = "Choisir la s�quence";
   $msgVldSq = "Valider la s�quence pr�-requise";
   $msgCarSeq = "Attention, si le pr�-requis est une activit�, la proc�dure continue";
   $msgchxseqOk = "Vous allez choisir une activit� de la s�quence ";
   $msgchXAct = "Choisir l'activit� pr�-requise";
   $msgActSeqReq = "Cette activit� est bien devenue un pr�requis pour la s�quence ";
   $msgChxSeq = "Vous avez choisi cette s�quence comme pr�requis";
   $msqVld = "Validez votre choix";
   $msg_DjaPrq = "est d�j� un pr�-requis pour cette s�quence";
   $msg_fav_ot = "Oter de mes favoris";
   $msgseq_mark = "marqu�e";
   $msg_mod_mark = "Modules marqu�s";
   $msg_modNbPg="Choisissez le nombre de lignes par page pour cette session";
   $msg_modItm = "Nombre d'items affichables pour cette session : ";
   $mess_AjStar = "Add a favorite sequence";
   $msg_formod = "Forum of this course";
   $msg_supforparc = "The forum is absolutly deleted. Any forum now is liked to the course : ";
   $msgCreForMod = "Check this Box to link a forum to this course";
   $msg_SupForMod = "Delete forum of this course : ";
   $msg_ForSupOk = "Forum is deleted";
   $msg_FMNosup = "Forum actif: vous pourrez le supprimer quand le module ne sera plus prescrit et ne contiendra plus de s�quences.";
   $msg_ConsMod = "Consulter le module";
   $msg_RmtSjt = "Accueil du forum";
   $msg_NewSjt = "Nouveau sujet";
   $msg_SjtVis = "Ce message ainsi que tous ceux qui lui sont sous-jacents sont desormais visibles";
   $msg_SjtNoVis = "Ce message ainsi que tous ceux qui lui sont sous-jacents sont desormais invisibles sauf pour l'auteur du module";
   $msg_LstMsg = "Liste des messages de ce fil de discussion";
   $msg_Lst_sbjt = "Liste des sujets trait�s";
   $msg_IsModFrm = "Ce module est dot� de son forum";
   $msg_RmtFil = "Revenir au fil de discussion";

}
elseif ($lg == "ru")
{
   $mmsg_mod_miens = "Afficher uniquement mes modules";
   $mmsg_mod_ssref = "Afficher tous les modules non li�s � un r�f�rentiel";
   $mmsg_mod_ref = "Afficher tous les modules li�s � un r�f�rentiel ";
   $mmsg_mod_tts = "Afficher tous les modules disponibles";
   $mmsg_mod_type = "Afficher tous les modules_types duplicables et non prescriptibles";
   $mmsg_mod_new = "Cr�er un nouveau module ";
   $mmsg_seq_miens = "Afficher uniquement mes s�quences";
   $mmsg_seq_ssref = "Afficher toutes les s�quences non li�es � un r�f�rentiel";
   $mmsg_seq_ref = "Afficher toutes les s�quences li�es � un r�f�rentiel ";
   $mmsg_seq_tts = "Afficher toutes les s�quences disponibles";
   $mmsg_seq_type = "Afficher toutes les s�quences_type duplicables et non prescriptibles";
   $mmsg_seq_new = "Cr�er une nouvelle s�quence";
   $mmsg_act_miens_lbrs = "Afficher uniquement mes activit�s libres";
   $mmsg_act_miens_seq = "Afficher uniquement mes activit�s li�es � une s�quence";
   $mmsg_act_seq = "Afficher toutes les activit�s li�es � une s�quence";
   $mmsg_act_lbtts = "Afficher toutes les activit�s libres";
   $mmsg_act_lb_nd = "Afficher toutes les activit�s libres non duplicables";
   $mmsg_act_new = "Cr�er une nouvelle activit� libre";
   $mmsg_gene = "Les modifications apport�es ont �t� prises en compte";
   $mmsg_supact = "Le lien vers la ressource a �t� supprim�";
   $mmsg_menu_qcm = "Ce module permet � un formateur de concevoir et d'inclure des tests en tant qu'activit� dans une s�quence. ".
                    "Le formateur doit aussi fixer un seuil de r�ussite (note sur 20) qui permet (si l'option a �t� retenue) � ".
                    "l'apprenant d'acc�der � l'activit� suivante�";
   $mmsg_qcm_cr = "Cr�er un nouveau QCM";
   $mmsg_qcm_cs = "Consulter un QCM";
   $mmsg_qcm_md = "Modifier un QCM";
   $mmsg_qcm_sp = "Supprimer un QCM";
   $mmsg_qcmNoImg = "L'image indiqu�e n'a pas d'extension(gif, jpg, ou png): elle ne sera pas prise en compte";
   $mmsg_qcm_TImg = "Cliquez ici pour voir l'image en taille r�elle";
   $mmsg_ntExp = "Vous venez de proc�der � l'exportation du module";
   $mmsg_noExp = "Export impossible : la plate-forme destinataire n'est pas h�berg�e par le r�seau Formagri/Ceres";
   $msgPrpSeq = "Pr�-requis � la s�quence";
   $msgRetSeq = "Retour � la s�quence";
   $msgConsPreq = "Consulter les pr�-requis de la s�quence";
   $msgNoSeq = "Vous n\'avez choisi aucune s�quence existante";
   $msgchxSeq = "Choisir la s�quence";
   $msgVldSq = "Valider la s�quence pr�-requise";
   $msgCarSeq = "Attention, si le pr�-requis est une activit�, la proc�dure continue";
   $msgchxseqOk = "Vous allez choisir une activit� de la s�quence ";
   $msgchXAct = "Choisir l'activit� pr�-requise";
   $msgActSeqReq = "Cette activit� est bien devenue un pr�requis pour la s�quence ";
   $msgChxSeq = "Vous avez choisi cette s�quence comme pr�requis";
   $msqVld = "Validez votre choix";
   $msg_DjaPrq = "est d�j� un pr�-requis pour cette s�quence";
   $msg_fav_ot = "Oter de mes favoris";
   $msg_mod_mark = "Modules marqu�s";
   $msgseq_mark = "marqu�e";
   $msg_modNbPg="Choisissez le nombre de lignes par page pour cette session";
   $msg_modItm = "Nombre d'items affichables pour cette session : ";
   $mess_AjStar = "Add a favorite sequence";
   $msg_formod = "Forum of this course";
   $msg_supforparc = "The forum is absolutly deleted. Any forum now is liked to the course : ";
   $msgCreForMod = "Check this Box to link a forum to this course";
   $msg_SupForMod = "Delete forum of this course ";
   $msg_ForSupOk = "Forum is deleted";
   $msg_FMNosup = "Forum actif: vous pourrez le supprimer quand le module ne sera plus prescrit et ne contiendra plus de s�quences.";
   $msg_ConsMod = "Consulter le module";
   $msg_RmtSjt = "Accueil du forum";
   $msg_NewSjt = "Nouveau sujet";
   $msg_SjtVis = "Ce message ainsi que tous ceux qui lui sont sous-jacents sont desormais visibles";
   $msg_SjtNoVis = "Ce message ainsi que tous ceux qui lui sont sous-jacents sont desormais invisibles sauf pour l'auteur du module";
   $msg_LstMsg = "Liste des messages de ce fil de discussion";
   $msg_Lst_sbjt = "Liste des sujets trait�s";
   $msg_IsModFrm = "Ce module est dot� de son forum";
   $msg_RmtFil = "Revenir au fil de discussion";
   
   
}
?>