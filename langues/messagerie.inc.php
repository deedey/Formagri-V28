<?php
if ($_SESSION['lg'] == 'fr')
{
   $msg_mess_lu = "Message consid�r� comme lu";
   $msg_mess_nonlu = "Message consid�r� comme non lu";
   $msg_mess_rest = "Restauration : message remis dan la bo�te de r�ception";
}
elseif ($_SESSION['lg'] == 'en')
{
   $msg_mess_lu = "Message consid�r� comme lu";
   $msg_mess_nonlu = "Message consid�r� comme non lu";
   $msg_mess_rest = "Restauration : message remis dan la bo�te de r�ception";
}
elseif ($_SESSION['lg'] == 'ru')
{
   $msg_mess_nonlu = "Message consid�r� comme non lu";
   $msg_mess_lu = "Message consid�r� comme lu";
   $msg_mess_rest = "Restauration : message remis dan la bo�te de r�ception";
}
?>
