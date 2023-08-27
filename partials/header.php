<?php
session_start();
echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand" href="#">Discuss-Forum</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/forumproject">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Category
        </a>
        <ul class="dropdown-menu">';

        $sql = "SELECT `category_name`, `category_id` FROM `categories` LIMIT 4";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo '<li><a class="dropdown-item" href="threadlist.php?cat_id='. $row['category_id'].'">'. $row['category_name'] .'</a></li>';
        } 

        echo '</ul>
    </li>
    </ul>';
    
    if (isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true) {
        echo '<div class="d-flex align-items-center">';
        echo '<p class="mb-0 me-3">Welcome '. $_SESSION['user_email'] .'</p>
        <a href="partials/logout.php" type="button" class="btn btn-primary me-2">Logout</a>
        <form class="d-flex" role="search" action="search.php" method="get">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>';
        echo '</div>';
    } else {
        echo '<div>';
        echo '<button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>';
        echo '</div>';
    }
    
    echo '</div>
</div>
</nav>';

include 'partials/loginModal.php';
include 'partials/signupModal.php';
if (isset($_GET['signupsuccess']) and $_GET['signupsuccess'] == true) {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success</strong> You have signed up.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
