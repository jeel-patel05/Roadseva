<?php

session_start();

?>
<!DOCTYPE html>

<html>

<head>
	<link rel="icon" href="login.gif" type="image/gif" sizes="25x25">
	<meta charset="utf-8">

	<title> Login Form</title>

	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<!--<script type="text/javascript">
		function validateForm() {
			var x = document.getElementById('username').value;
			var y = document.getElementById('password').value;
			var uReg = /^[a-zA-Z0-9]+([_ -]?[a-zA-Z0-9])*$/;
			var pReg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
			if (uReg.test(x)) {
				if (pReg.test(y)) {
					return true;
				} else {
					alert("Enter Password ");
					return false;
				}
			} else {
				alert("Enter Username ");
				return false;
			};
			return true;
		}
	</script>   -->
<body>
	


	<nav>
          
      <div class="logo">
         <a href="sectionpage.php"><img src="newLogo.jpg"></a>
      </div>
           
   </nav>

	<div class="box">
<form onsubmit="validateForm()"  action="includes/newlginfrm.inc.php" method="POST">
		<h2>Login</h2>

		

			<div class="inputBox">

				<input id="username" type="text" name="username">

				<label>Username</label>	

			</div>


			<div class="inputBox">

				<input id="email" type="email" name="email">

				<label>E-mail</label>	

			</div>	
			


			<div class="inputBox">

				<input id="password" type="password" name="password">

				<label>Password</label>	

			</div>

			<button type="submit" name="Submit" value="Submit">SUBMIT</button>

			<br><br>
   			<div class="signp"> Don't have an account? <a href="signup.php">&nbsp; Sign Up</a></div>

		</form>

	</div>





</body>

</html>