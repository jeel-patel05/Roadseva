<html>
<head>
	<title>Sign Up</title>	
	<link rel="stylesheet" type="text/css" href="signup.css">
	<link rel="icon" href="sgnup.gif" type="image/gif" sizes="25x25">
</head>

<body>
	<nav>
          
      <div class="logo">
         <a href="sectionpage.php"><img src="newLogo.jpg"></a>
           
   </nav>
	<div id="login-box">
		<div class="left-box">
			<form action="includes/signup.inc.php" method="POST">
			<h1>Sign Up</h1>
			<input type="text" name="username" placeholder="Username" required>
			<input type="text" name="email" placeholder="Email" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="password" name="password2" placeholder="Retype Password" required>
			<button type="submit" name="signup" placeholder="Sign Up">SUBMIT</button>
		</form>
		</div>
		<div class="right-box">
		<span class="signinwith">Sign in With<br>Social Network</span>
	<button class="social facebook"><a href="https://www.facebook.com">Log in with Facebook</a></button>
		<button class="social google"><a href="https://www.gmail.com">Log in with Gmail</a></button>
		<button class="social twitter"><a href="https://twitter.com/login?lang=en">Log in with Twitter</a></button>
		</div>
			<div class="or">OR</div>

	</div>
</body>
</html>
			