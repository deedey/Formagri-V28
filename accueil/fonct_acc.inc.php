<?php
/******************************************
*                                         *
* Copyright  formagri/cnerta/eduter/enesad*
* Dey Bendifallah                         *
* Ce script fait partie int�grante du LMS *
* Formagri.Il peut �tre modifi� ou utilis�*
* � d'autres fins.                        *
* Il est libre et sous licence GPL        *
* Les auteurs n'apportent aucune garantie *
*                                         *
******************************************/
function req_gene($requete)
{
     GLOBAL $_SESSION;
     $req = mysql_query ($requete);
     $nb_items = mysql_num_rows($req);
     if ($nb_items > 0)
        return $req;
     else
        return FALSE;

}


?>