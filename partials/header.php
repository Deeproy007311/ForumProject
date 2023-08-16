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
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </li>
    </ul>
    <div class="mx-2">';
    if (isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true) {
        echo '
        <p>Welcome '. $_SESSION['user_email'] .'</p>
        <a href="partials/logout.php" type="button" class="btn btn-primary my-0 mx-2">Logout</a>';
        
    }
    else{
        echo '<button class="btn btn-primary mx-3" style="
        position: relative;
        right: 197px;
        top: 39px;" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    <button class="btn btn-primary" style="
        position: relative;
        right: 189px;
        top: 38px;
        "  data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
    <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>';
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