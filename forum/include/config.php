<?php

//param�tres de connection � la base de donn�es
require '../admin.inc.php';

$localhost = $adresse;        // Nom serveur ou localhost
$dbName = $bdd;                        // Nom de votre base de donn�es
$login = $log;                             // Votre Loggin
$pwd = $mdp;                              //  Votre mot de passe

// Connexion au Serveur
$connexion=mysql_connect($localhost, $login , $pwd );


// Alimentation des libell�s
$texte_singulier  =   " personne connect�e";        // Alimentation libell� pour une connection
                                                                               //  Ex : $texte_singulier  =   "personne connect�e ";
$texte_pluriel      =   " personnes connect�es";        // Alimentation libell� pour plusieurs connections
                                                                                  //  Ex : $texte_pluriel   =   "personnes connect�es ";
?>