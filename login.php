<?php 
	include"header.php";

?>

<html>
	<head>
		<style>
			.loginForm {
				border: 2px solid blue;
				width: 70%;
				height: 70%;
			}
		</style>
	</head>
	<body><br><br><br><br>
		<div class="container content u-centered u-m80" align="center">
		<form method="POST" action="/login" class="loginForm" align="center"><br><br><br>
		<img src="https://fetcher.ai/images/icons/sunglasses.png" alt=""><br><br>
		<h1 class="h5 thinfont">Welcome Back</h1><br><br>
		<div class="column">
		<input type="text" name="email" placeholder="Email Address"><br><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		<input type="submit" value="Sign In" class="button green-btn loginButton"><br><br>
		<p class="blue-gray u-m20"><b>or</b></p>
		<a href="https://accounts.google.com/servicelogin" class="button white-btn loginButton u-m20"><img src="	https://fetcher.ai/images/icons/google-signin.png" alt="Sign In with Google" class="loginPartner">Sign In with Google</a><br><br>
		<a href="https://outlook.office365.com/mail/inbox" class="button white-btn loginButton"><img src="	https://fetcher.ai/images/icons/outlook-signin.png" alt="Sign in with Outlook" class="loginPartner">Sign In with Outlook</a><br><br>
		</div></form></div><br><br><br>
	
		<?php include"footer.php"; ?>
	</body>
</html>