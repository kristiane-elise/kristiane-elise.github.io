<!DOCTYPE html>
<?php
	$error = '';
	include("login.php");
	//Check if there are any return error messages from the reset page
	if (isset($_SESSION['reseterror'])) {
		$error = $_SESSION['reseterror'];
		//Delete the error since they have seen it now
		unset($_SESSION['reseterror']);
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Queensland Herbarium</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/login_forms.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div id="background-image"></div>
		<div class="login-wrapper">
			<div class="inner-form">
				<img src="images/BriGreen_200.png" alt="Queensland Herbarium" style="width:136px; height:120px;margin-bottom:10px;">
				<h1 class="login-title">Plant Specimen Profile</h1>
				<?php echo $error; ?>
				<form class="login-form" action="" method="post">
					<input type="text" name="username" placeholder="Enter Username" onkeypress="checkCapsLock(event)"/>
					<input type="password" name="password" placeholder="Enter Password" onkeypress="checkCapsLock(event)"/>
					<div id="capsevent" style="visibility:hidden">Caps Lock is on.</div>
					<button id="login_button" type="submit">LOGIN TO PSP</button>
					<p class="lower-text">Forgot your password? <a href="forgotpassword.php">Reset password</a></p>
					<p class="lower-text">Are you a new user? <a href="registration.php">Create an account</a></p>
				</form>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
			//Function to check if user has Caps Lock toggled on when typing in the form, and warn them
	        function checkCapsLock(typeEvent){
		        kc = typeEvent.keyCode?typeEvent.keyCode:typeEvent.which;
		        sk = typeEvent.shiftKey?typeEvent.shiftKey:((kc == 16)?true:false);
		        if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)) {
		        	document.getElementById('capsevent').style.visibility = 'visible';
				}
		        else {
		        	document.getElementById('capsevent').style.visibility = 'hidden';
				}
		    }
        </script>
	</body>
</html>
