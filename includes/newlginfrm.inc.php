<?php

session_start();

if(isset($_POST['Submit'])) {
    include'connection.php';
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM sign_up WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck < 1) {
        header("Location: ../newlginfrm.php?login=error-resultcheck");
        exit();
     }
     else {
         if ($row = mysqli_fetch_assoc($result)) {
             //de-hashing the password
             $hashedPwdCheck = password_verify($password, $row['password']);
             if ($hashedPwdCheck == false) {
                 header("Location: ../newlginfrm.php?login=errorpassword");
                 exit();
             }
             elseif ($hashedPwdCheck == true){
                  //login the user
                  $_SESSION['username'] = $row['username'];
                  $_SESSION['email'] = $row['email'];
                  
                  $_SESSION['pswd'] = $row['password'];
                  header("Location: ../sectionpage.php?login=success");
                  exit();         
             }
         }
     }
}
else {
header("Location: ../newlginfrm.php?login=errorsignin");
exit();
}
?>