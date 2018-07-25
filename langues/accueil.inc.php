<?php
if (!isset($_SESSION)) session_start();
/****************************************** ***************
*                                                         *
* Copyright  formagri/cnerta/eduter/enesad                *
* Dey Bendifallah                                         *
* Ce script fait partie int�grante du LMS Formagri.       *
* Il peut �tre modifi� ou utilis� � d'autres fins.        *
* Il est libre et sous licence GPL                        *
* Les auteurs n'apportent aucune garantie                 *
*                                                         *
**********************************************************/
//  fichier lang
if ($lg == "fr")
{
   $msg_WNS = "Quoi de neuf ?";
   $msgevt_WNS = "Quoi de neuf depuis votre derni�re connexion le ";
   $msgevtWNS = "Quoi de neuf depuis votre derni�re connexion le";
   $msgfrm_lib = "Il n'y a eu aucun nouveau message post� dans le forum libre";
   $msgfrm_form = "Il n'y a eu aucun nouveau message post� dans le forum des encadrants p�dagogiques";
   $msgfrm_app = "Il n'y a eu aucun nouveau message post� dans les forums des formations auxquels vous avez acc�s";
   $msgfrm_nolib = "Le forum libre est actuellement d�sactiv� sur cette plate-forme";
   $msgins_no = "Aucune nouvelle inscription n'a eu lieu";
   $msgress_no = "Aucune nouvelle ressource ni cat�gorie n'a �t� ajout�e";
   $msgCnt_formno = "Aucune nouvelle formation n'a �t� ajout�e";
   $msgCnt_modno = "Aucun nouveau module n'a �t� ajout�";
   $msgCnt_seqno = "Aucune nouvelle s�quence n'a �t� ajout�e";
   $msgCnt_actno = "Aucune nouvelle activit� n'a �t� ajout�e";
   $msgRep_Frmno = "Aucun fichier ni dossier n'a �t� ajout� aux dossiers partag�s des formateurs";
   $msgRep_Grpno = "Aucun fichier ni dossier n'a �t� ajout� aux dossiers partag�s des formations auxquelles vous avez acc�s";
   $msgtutno = "Vous n'avez aucun rendez-vous de tutorat aujourd'hui";
   $msgins_aut = "Inscrit par";
   $msgress_aut = "Ins�r�(e) par";
   $msgress_cat = "Cr�ation d'une cat�gorie";
   $msgnew_ins = "nouvelle(s) insertion(s)";
   $msgnew_act = "nouvelle(s) activit�(s)";
   $msgnew_seq = "nouvelle(s) s�quence(s)";
   $msgnew_mod = "nouveau(x) module(s)";
   $msgAcc_msg = 'Messages';
   $msgAcc_frm = 'Forums';
   $msgAcc_cnx = 'Connect�s';
   $msgAcc_ins = 'Inscrits';
   $msgAcc_mod = 'Modules';
   $msgAcc_seq = 'S�quences';
   $msgAcc_act = 'Activit�s';
   $msgAcc_rdv = 'Rendez-vous';
   $msgAcc_rep = 'Dossiers';
   $msgAcc_res = 'Ressources';
   $msgRep_dos = 'Dossier';
   $msgRep_fic = 'Fichier';
   $msgRep_rpf = 'Dossiers partag�s';
   $msgRep_clkFic = 'Cliquez sur le lien pour ouvrir le fichier';
   $msgRep_clkRep = 'Cliquez sur le lien pour acc�der � ce dossier';

}
elseif ($lg == "en")
{
   $msg_WNS = "Quoi de neuf ?";
   $msgevt_WNS = "Quoi de neuf depuis votre derni�re connexion le ";
   $msgfrm_lib = "Il n'y a eu aucun nouveau message post� dans le forum libre";
   $msgfrm_form = "Il n'y a eu aucun nouveau message post� dans le forum des encadrants p�dagogiques";
   $msgfrm_app = "Il n'y a eu aucun nouveau message post� dans les forums des formations auxquels vous avez acc�s";
   $msgfrm_nolib = "Le forum libre est actuellement d�sactiv� sur cette plate-forme";
   $msgins_no = "Aucune nouvelle inscription n'a eu lieu";
   $msgress_no = "Aucune nouvelle ressource ni cat�gorie n'a �t� ajout�e";
   $msgCnt_formno = "Aucune nouvelle formation n'a �t� ajout�e";
   $msgCnt_modno = "Aucun nouveau module n'a �t� ajout�";
   $msgCnt_seqno = "Aucune nouvelle s�quence n'a �t� ajout�e";
   $msgCnt_actno = "Aucune nouvelle activit� n'a �t� ajout�e";
   $msgRep_Frmno = "Aucun fichier ni dossier n'a �t� ajout� aux dossiers partag�s des formateurs";
   $msgRep_Grpno = "Aucun fichier ni dossier n'a �t� ajout� aux dossiers partag�s des formations auxquelles vous avez acc�s";
   $msgtutno = "Vous n'avez aucun rendez-vous de tutorat aujourd'hui";
   $msgins_aut = "Inscrit par";
   $msgress_aut = "Ins�r�(e) par";
   $msgress_cat = "Cr�ation d'une cat�gorie";
   $msgnew_ins = "nouvelle(s) insertion(s)";
   $msgnew_act = "nouvelle(s) activit�(s)";
   $msgnew_seq = "nouvelle(s) s�quence(s)";
   $msgnew_mod = "nouveau(x) module(s)";
   $msgAcc_msg = 'Messages';
   $msgAcc_frm = 'Forums';
   $msgAcc_cnx = 'Connect�s';
   $msgAcc_ins = 'Inscrits';
   $msgAcc_mod = 'Modules';
   $msgAcc_seq = 'S�quences';
   $msgAcc_act = 'Activit�s';
   $msgAcc_rdv = 'Rendez-vous';
   $msgAcc_rep = 'Dossiers';
   $msgAcc_res = 'Ressources';
   $msgRep_dos = 'Dossier';
   $msgRep_fic = 'Fichier';
   $msgRep_rpf = 'Dossiers partag�s de(s)';
   $msgRep_clkFic = 'Cliquez sur le lien pour ouvrir le fichier';
   $msgRep_clkRep = 'Cliquez sur le lien pour acc�der � ce dossier';

}
elseif ($lg == "ru")
{
   $msg_WNS = "Quoi de neuf ?";
   $msgevt_WNS = "Quoi de neuf depuis votre derni�re connexion le ";
   $msgfrm_lib = "Il n'y a eu aucun nouveau message post� dans le forum libre";
   $msgfrm_form = "Il n'y a eu aucun nouveau message post� dans le forum des encadrants p�dagogiques";
   $msgfrm_app = "Il n'y a eu aucun nouveau message post� dans les forums des formations auxquels vous avez acc�s";
   $msgfrm_nolib = "Le forum libre est actuellement d�sactiv� sur cette plate-forme";
   $msgins_no = "Aucune nouvelle inscription n'a eu lieu";
   $msgress_no = "Aucune nouvelle ressource ni cat�gorie n'a �t� ajout�e";
   $msgCnt_formno = "Aucune nouvelle formation n'a �t� ajout�e";
   $msgCnt_modno = "Aucun nouveau module n'a �t� ajout�";
   $msgCnt_seqno = "Aucune nouvelle s�quence n'a �t� ajout�e";
   $msgCnt_actno = "Aucune nouvelle activit� n'a �t� ajout�e";
   $msgRep_Frmno = "Aucun fichier ni dossier n'a �t� ajout� aux dossiers partag�s des formateurs";
   $msgRep_Grpno = "Aucun fichier ni dossier n'a �t� ajout� aux dossiers partag�s des formations auxquelles vous avez acc�s";
   $msgtutno = "Vous n'avez aucun rendez-vous de tutorat aujourd'hui";
   $msgins_aut = "Inscrit par";
   $msgress_aut = "Ins�r�(e) par";
   $msgress_cat = "Cr�ation d'une cat�gorie";
   $msgnew_ins = "nouvelle(s) insertion(s)";
   $msgnew_act = "nouvelle(s) activit�(s)";
   $msgnew_seq = "nouvelle(s) s�quence(s)";
   $msgnew_mod = "nouveau(x) module(s)";
   $msgAcc_msg = 'Messages';
   $msgAcc_frm = 'Forums';
   $msgAcc_cnx = 'Connect�s';
   $msgAcc_ins = 'Inscrits';
   $msgAcc_mod = 'Modules';
   $msgAcc_seq = 'S�quences';
   $msgAcc_act = 'Activit�s';
   $msgAcc_rdv = 'Rendez-vous';
   $msgAcc_rep = 'Dossiers';
   $msgAcc_res = 'Ressources';
   $msgRep_dos = 'Dossier';
   $msgRep_fic = 'Fichier';
   $msgRep_rpf = 'Dossiers partag�s de(s)';
   $msgRep_clkFic = 'Cliquez sur le lien pour ouvrir le fichier';
   $msgRep_clkRep = 'Cliquez sur le lien pour acc�der � ce dossier';

}

?>