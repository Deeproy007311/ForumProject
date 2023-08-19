<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '_dbconnect.php';

    $user_email = $_POST['loginEmail'];
    $user_pass = $_POST['loginPassword'];
    
    
    $sql = "SELECT * FROM `users` WHERE user_email='$user_email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows == 1) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($user_pass, $row['user_password'])) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['sno'] = $row['sno'];
        $_SESSION['user_email'] = $user_email;
      }
      header("Location: /forumproject/index.php");
    }
    header("Location: /forumproject/index.php");
}
?>