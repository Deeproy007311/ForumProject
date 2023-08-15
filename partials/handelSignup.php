<?php
$showError = "false";
$showAlert = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '_dbconnect.php';

    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupCpassword'];

    //check wheather the username is already exists in the database or not
    $existSql = "SELECT * FROM `users` WHERE `user_email`= '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numExistsRows = mysqli_num_rows($result);
    if ($numExistsRows > 0) {
        $showError = "Email is already exixts";
    }
    else {
        if (($pass == $cpass)) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_password`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
                header("Location: /forumproject/index.php?signupsuccess=true");
                exit();
            }
        }
        else {
            $showError = "password do not match";
            
        } 
        header("Location: /forumproject/index.php?signupsuccess=false&error=$shoError");  
    }
}
?>