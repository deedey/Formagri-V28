<?php
if (!isset($_SESSION)) session_start();
//  fichier lang
if ($lg == "fr"){
   $msgrph_ActNo = "Aucune activit� n'a �t� affect�e � cet apprenant dans le cadre de cette formation";
   $msgrph_dureeNo = "Aucune dur�e n'a �t� renseign�e dans ce cas : pas d'activit� ou activit�s Scorm ou Aicc";
   $msgrph_avanti = "Etat d'avancement de la formation";
   $msgrph_Mavanti = "Etat d'avancement de ma formation";
   $msgrph_av_cmt = "Les barres repr�sentent pour chaque apprenant :<br />".
                    " <li type=sphere> le nombre d'activit�s prescrites ;</li>".
                    " <li type=sphere> le volume horaire de la formation ;</li>".
                    " <br />... ainsi que le r�alis� � la date en cours.";
   $msgrph_lgred = "le curseur rouge correspond � la date de la derni�re connexion";
   $msgrph_lgreg = "les pointill�s verticaux correspondent aux regroupements";
   $msgrph_lgdtj = "le trac� vertical noir correspond � la date du jour";
}elseif ($lg == "en"){
   $msgrph_ActNo = "Aucune activit� n'a �t� affect�e � cet apprenant dans le cadre de cette formation";
   $msgrph_dureeNo = "Aucune dur�e n'a �t� renseign�e dans ce cas : probablement des activit�s Scorm ou Aicc";
   $msgrph_avanti = "Etat d'avancement de la formation";
   $msgrph_Mavanti = "Etat d'avancement de ma formation";
   $msgrph_av_cmt = "Les barres repr�sentent pour chaque apprenant :<br />".
                    " <li type=sphere> le nombre d'activit�s prescrites ;</li>".
                    " <li type=sphere> le volume horaire de la formation ;</li>".
                    " <br />... ainsi que le r�alis� � la date en cours.";
   $msgrph_lgred = "le curseur rouge correspond � la date de la derni�re connexion";
   $msgrph_lgreg = "les pointill�s verticaux correspondent aux regroupements";
   $msgrph_lgdtj = "le trac� vertical noir correspond � la date du jour";
}elseif ($lg == "ru"){
   $msgrph_ActNo = "Aucune activit� n'a �t� affect�e � cet apprenant dans le cadre de cette formation";
   $msgrph_dureeNo = "Aucune dur�e n'a �t� renseign�e dans ce cas : probablement des activit�s Scorm ou Aicc";
   $msgrph_avanti = "Etat d'avancement de la formation";
   $msgrph_Mavanti = "Etat d'avancement de ma formation";
   $msgrph_av_cmt = "Les barres repr�sentent pour chaque apprenant :<br />".
                    " <li type=sphere> le nombre d'activit�s prescrites ;</li>".
                    " <li type=sphere> le volume horaire de la formation ;</li>".
                    " <br />... ainsi que le r�alis� � la date en cours.";
   $msgrph_lgred = "le curseur rouge correspond � la date de la derni�re connexion";
   $msgrph_lgreg = "les pointill�s verticaux correspondent aux regroupements";
   $msgrph_lgdtj = "le trac� vertical noir correspond � la date du jour";
}
?>