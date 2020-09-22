<?php
session_start();
$email=$_SESSION['email'];
$password=$_SESSION['pswd'];


//Update and Delete Logic
if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // echo $username.' ';
  // echo $newusername.' ';
  // echo $password;
  $connection = mysqli_connect('localhost', 'root', '', 'signup');
  $selquery2 = "SELECT username FROM sign_up WHERE email = '$email'";
  $result2 = mysqli_query($connection,$selquery2);

  if ($result2){
     $updquery = "UPDATE sign_up SET username = '$newusername' WHERE email = '$email'";
    $result3 = mysqli_query($connection,$updquery);
    echo "AFTER";
  }
  else{
    echo "No Such User";
  }
}

/*
//delete query make delete button first-submit2
if (isset($_POST['delete'])) {
//$username = $_POST['namedelete'];

$connection = mysqli_connect('localhost', 'root', '', 'signup');
$pswd = mysqli_real_escape_string($conn, $_POST['password']);

             //de-hashing the password
             $hashedPwdCheck = password_verify($pswd, $password);
             if ($hashedPwdCheck == false) {
                 header("Location: ../update.php?delete=errorpassword");
                 exit();
             }
             elseif ($hashedPwdCheck == true){
                  $selquery = "SELECT username FROM sign_up WHERE email = '$email' ";
                  $result1 = mysqli_query($connection,$selquery);

                  if ($result1){
                      $delquery = "DELETE FROM sign_up WHERE email = '$email' ";
                      $result3 = mysqli_query($connection,$delquery);
                      header("Location: ../sectionpage.php?delete=success");
                  exit();    
}
else{
  //echo "No Such Username Exits!";
  header("Location: ../sectionpage.php?delete=success");
}
               
 

}
}    */

?>
