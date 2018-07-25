<?php
if (!isset($_SESSION)) session_start();
error_reporting(7);

$url="http://ef-dev.educagri.fr/flash_chat/"; //absolute url to scripts directory

$text_order = "down"; //use "down" o "up" to show messages downwars or upwards

$review_text_order = "down"; //the same with review messages windos

$delete_empty_room = "no"; //use "yes" to delete messagees when the room is empty

$show_without_time = "no"; //"no" shows always hour, "yes" shows hour only whe the user enters or leaves the room

$password_system = "password"; //"ip" o "password" to use ip or password to identify users

/*   NOTE:   the banning system only works with "ip" "ip" */
/*           Use "password" only when users come from the same ip*/


/*   Administration variables  */
/*   _______________________   */

$admin_name = "dey"; //user name for admin (max. 12 characters)

$admin_password = "safia"; // password for admin (max. 12 characters)


/*   Chat numeric variables    */
/*   _______________________   */

$correct_time = 0;//difference in seconds with time in server

$chat_lenght = 15;//number of messages displayed in chat room

$review_lenght = 500;//number of messages displayed in review messages

$total_lenght = 1000;//number of messages stored in chat file


/*   Words to filter   */
/*   _________________  */

$words_to_filter = array("����", "&nbsp;�����&nbsp;",);//list of bad words to replace (add more if you want)

$replace_by = "(������ ���������)";//expression to replace bad words


/*___________________________________________________*/
/*___________________________________________________*/
/*___________________________________________________*/
/*--------------------------------TRANSLATION ? partir d'ici---------------------------------------------------------*/
/*___________________________________________________*/
/*___________________________________________________*/
/*___________________________________________________*/


/*   Expressions to translate in intro page  */
/*   ______________________________________  */

$intro_alert="���������� :"; //

$alert_message_1="-��� ����� �� ������ ��������� 4 �������"; //

$alert_message_2="-��� ������ �� ������ ��������� 4 ������� "; //

$alert_message_3="-������ ������������ ����������� ������� � ����� ��� ������"; //

$alert_message_4="-� ���������, �� ������� �������� ������ � ������ IP ������, ����� ��� ������������ "; //

$alert_message_5="-������ ������������ ����������� ������� ��� ������"; //

$person_word="�������(�)"; //

$plural_particle=" "; //

$now_in_the_chat= " � ��������� ����� � ������������� ������ ";//

$require_sentence = "���������� ����� �� ������� ���� Flash 4 ��� ������� ����"; //

$name_word = "���"; //

$password_word = "������"; //

$enter_button = "����" ; //

$enter_sentence_1 = "��� ����� � �����, �������, ����������, ���� ���  ";//

$enter_sentence_2 = "� ������";//

$enter_sentence_3 = " ����� �������� �� ������ ";//


/*   Expressions to translate in chat room   */
/*   ______________________________________  */

$private_message_expression = "\(���� (.*)\)"; //Regular expression for beginning of private message

$before_name="(? "; // if you change the regular expression write here the text between "\ and (.*)

$after_name=")"; // if you change the regular expression write here the text after (.*)

$not_here_string = "-��� ���������� �� ��������� � ������-"; //receiver of private message is not in the room

$bye_string = "�� ������ �������,";//message showed to dimissed user

$enter_string = "�������������� � ���";//message showed when a new user enters.

$bye_user = "��� ��������";//message showed when a user exits.

$kicked_user = "---�� ���� ����������� ��������������� ---";//message showed in the chat room to kicked user.

$bye_kicked_user = "� ��������� ��� ���������� ������������ � ������������ ";//bye for kicked users

$bye_banned_user = "��������, �� ���� ����������� ���������������";//bye for banned users

$banned_user = "� ���������, �� �� ������ ����� � �����";//message for banned user trying to enter


/*   Expressions to translate in chat interface   */
/*   ___________________________________________  */

$intro_text="����� ������, ����������� ���������� ��������� ���������� :\n";

$intro_text .=" ���� ���-��, ������� ���� ���, ��� ��������� � ������, ������� ��� �������� ��� � �������.\n";

$intro_text .=" ���� �� ������� � ��� � ������ �������, ������� ��� �������� ��� �������1. \n";

$intro_text .=" �� ������ ������ ������ ������ �������������� ������������� � ��������� ��������� ������ �� ��� ����� ('��������'), �������� ���� ('����') � ��������� � ������ ('�������').\n";

$intro_text .="��������� ���������.";//

$conn="��������� ����������, ���������� ���������� � �����..."; //

$you_are="�� "; //

$connected_users= "�������������� ������������";//

$private_message_to= "������� ��������� ���";//

$private_message_text="������� ��������� ����� ���� ����������� ���� ����������.\n";//

$private_message_text.=" ������� ������ ��������� ��������, ����� ��������� �� ����� ����� ���������.\n";//

$private_message_text.=" �������, ��� �� ������ ���������� ��������� ��� ��� ������������� � ������ ����������.";//


/*   Expressions to translate in review messages page  */
/*   ________________________________________________  */

$review_title ="���. ��������� ���������";// title for review messages page


/*   Expressions to translate in administration pages   */
/*   ________________________________________________  */

$link_to_admin ="�����������������";// text for link to administration pages

$intro_admin_title = "��� Form@grI";// title for administration intro page

$intro_admin_name = "���";//Text for name field in administration intro page

$intro_admin_password = "������";//Text for name field in administration intro page

$intro_admin_button= "Ok";//Text for button in administration intro page

$no_users = "� ������ ��� �������������";//no users in the room

$text_for_kick_button = "�������������";//text fof kick button

$text_for_bann_button = "���������";//text for button for bannig ips

$no_ips = "� ���� ��� ������������ �������������";//no banned IPs in the room

$text_for_pardon_button = "��������";//text for button to pardon ips

$ip_link = "����������������� ������������ IPs";//text for link to banned IPs

$no_ip_link = "��� �� ���������� ����� IP � �������� �������������� ������������ �, ����� �������, �� ����� ��� ������������� ������� ";//text if you use password instead de IP

$users_link = "����������������� ������ ������������� ";//text for link to connected users

?>
