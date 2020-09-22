<?php

session_start();
if (isset($_POST['update'])) {
  $username = $_POST['cuser'];
  $newusername = $_POST['nuser'];

  // echo $username.' ';
  // echo $newusername.' ';
  // echo $password;
  $connection = mysqli_connect('localhost', 'root', '', 'signup');
  $selquery2 = "SELECT username FROM sign_up WHERE username = '$username'";
  $result2 = mysqli_query($connection,$selquery2);

  if ($result2){
     $updquery = "UPDATE sign_up SET username = '$newusername' WHERE username = '$username'";
    $result3 = mysqli_query($connection,$updquery);
    echo "AFTER";
  }
  else{
    echo "No Such User";
  }
}
?>
<!DOCTYPE html>

<html>

<head>
	<link rel="icon" href="login.gif" type="image/gif" sizes="25x25">
	<meta charset="utf-8">

	<title> Update</title>

	<link rel="stylesheet" type="text/css" href="style1.css">

</head>
<script type="text/javascript">
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
	</script>
<body>
	


	<nav>
          
      <div class="logo">
         <a href="sectionpage.php"><img src="newLogo.jpg"></a>
      </div>
           
   </nav>

	<div class="box">
<form   action="update.php" method="POST">
		<h2>Update</h2>

		

			<div class="inputBox">

				<input id="username" type="text" name="cuser">

				<label> Confirm Username</label>	
			</div>
			<div class="inputBox">
				<input id="username" type="text" name="nuser">

				<label> New Username</label>	
			</div>


			<button type="submit" name="update" value="Submit">UPDATE</button>


			<br><br>
   			<a href="delete.php">Delete Account</a>

		</form>

	</div>












</body>

</html>