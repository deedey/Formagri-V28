<?php
if (!isset($_SESSION)) session_start();
//  fichier lang
if ($lg == "fr")
{
   $msg_ajt_seq = "Ajouter une s�quence � ce module pour cet apprenant";
   $msg_ajtseq_nota = "Ins�rer au minimum 3 caract�res pour faire votre recherche, ".
                      "puis choisissez une s�quence parmi celles qui sont affich�es. ".
                      "En cliquant sur le nom de la s�quence, vous l'ajoutez automatiquement � cet apprenant";
   $mesg_voirform = "Retour au suivi";
   $mesg_vaform = "Voir la formation";
   $mesg_listform = "Ajouter un formateur en tapant 1 lettre minimum";
   $mesg_listpresc = "Ajouter un prescripteur en tapant 1 lettre minimum";
   $mesg_modform = "Modifier le formateur en tapant 1 lettre minimum";
   $mesg_modpresc = "Modifier le prescripteur en tapant 1 lettre minimum";
   $msgajtseq = "Pour ajouter une s�quence � ce module, taper 3 lettres au minimum pour lancer votre recherche";
   $msg_ajt_mod_app = "Ajouter un module en tapant 3 lettres minimum";
   $msgPresc_No = "Cet apprenant est d�j� inscrit � cette formation. Vous ne pouvez l'y inscrire deux fois";
   $msgPrscSuptts = "D�sinscrire tous les apprenants de cette formation";
   $msgNoPrsc = "Pas encore de prescription";

}
elseif ($lg == "en")
{
   $msg_ajt_seq = "Ajouter une s�quence � ce module pour cet apprenant";
   $msg_ajtseq_nota = "Ins�rer au minimum 3 caract�res pour faire votre recherche, ".
                      "puis choisissez une s�quence parmi celles qui sont affich�es. ".
                      "En cliquant sur le nom de la s�quence, vous l'ajoutez automatiquement � cet apprenant";
   $mesg_voirform = "Retour au suivi";
   $mesg_vaform = "Voir la formation";
   $mesg_listform = "Ajouter un formateur en tapant 1 lettre minimum";
   $mesg_listpresc = "Ajouter un prescripteur en tapant 1 lettre minimum";
   $mesg_modform = "Modifier le formateur en tapant 1 lettre minimum";
   $mesg_modpresc = "Modifier le prescripteur en tapant 1 lettre minimum";
   $msgajtseq = "Pour ajouter une s�quence � ce module, taper 3 lettres au minimum pour lancer votre recherche";
   $msg_ajt_mod_app = "Ajouter un module en tapant 3 lettres minimum";
   $msgPresc_No = "Cet apprenant est d�j� inscrit � cette formation. Vous ne pouvez l'y inscrire deux fois";
   $msgPrscSuptts = "D�sinscrire tous les apprenants de cette formation";
   $msgNoPrsc = "Pas encore de prescription";


}
elseif ($lg == "ru")
{
   $msg_ajt_seq = "Ajouter une s�quence � ce module pour cet apprenant";
   $msg_ajtseq_nota = "Ins�rer au minimum 3 caract�res pour faire votre recherche, ".
                      "puis choisissez une s�quence parmi celles qui sont affich�es. ".
                      "En cliquant sur le nom de la s�quence, vous l'ajoutez automatiquement � cet apprenant";
   $mesg_voirform = "Retour au suivi";
   $mesg_vaform = "Voir la formation";
   $mesg_listform = "Ajouter un formateur en tapant 1 lettre minimum";
   $mesg_listpresc = "Ajouter un prescripteur en tapant 1 lettre minimum";
   $mesg_modform = "Modifier le formateur en tapant 1 lettre minimum";
   $mesg_modpresc = "Modifier le prescripteur en tapant 1 lettre minimum";
   $msgajtseq = "Pour ajouter une s�quence � ce module, taper 3 lettres au minimum pour lancer votre recherche";
   $msg_ajt_mod_app = "Ajouter un module en tapant 3 lettres minimum";
   $msgPresc_No = "Cet apprenant est d�j� inscrit � cette formation. Vous ne pouvez l'y inscrire deux fois";
   $msgPrscSuptts = "D�sinscrire tous les apprenants de cette formation";
   $msgNoPrsc = "Pas encore de prescription";

}
?>