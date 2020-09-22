<?php

if(isset($_POST['signup'])) {
    include_once'connection.php';

    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $pswd = mysqli_real_escape_string($conn, $_POST['password']);
    $retypepswd = mysqli_real_escape_string($conn, $_POST['password2']);

    //error handling  check if input characters are valid
    if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header("Location: ../newlginfrm.php?name=invalid");
        exit();
    }
    else {
        //hashing the password
        $hashedPwd = password_hash($pswd, PASSWORD_DEFAULT);
        //insert the user into the database
        $sql = "INSERT INTO sign_up (username, email, password) VALUES ('$name', '$email', '$hashedPwd')";
        if(mysqli_query($conn, $sql)) {
            header("Location: ../sectionpage.php?signup=success");
            exit();
        }
        else {
            header("Location: ../signup.php?signup=failed");
          }
       }
}


else {
header("Location: signup.php");
exit();
}

?>