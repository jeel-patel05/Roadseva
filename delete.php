<?php  

session_start();
if (isset($_POST['delete'])) {
$username = $_POST['namedelete'];

$connection = mysqli_connect('localhost', 'root', '', 'signup');
$selquery = "SELECT username FROM sign_up WHERE username = '$username'";
$result1 = mysqli_query($connection,$selquery);

if ($result1){
  $delquery = "DELETE FROM sign_up WHERE username = '$username'";
  $result3 = mysqli_query($connection,$delquery);
}
else{
  echo "No Such Username Exits!";
}



}





?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" type="text/css" href="delete.css">
</head>
<body>
	<form action="delete.php" method="POST">
		<h2>Delete Account</h2>

				
			<div class="inputBox">

				<input type="text" name="namedelete">
				<label>Confrirm Username</label>
				<input type="submit" name="delete" value="Delete">
			</div>

			<!-- <button type="submit" name="delete" value="Submit">Delete account</button> -->

			<br><br>
   			

		</form>


</body>
</html>