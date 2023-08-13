<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding-Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2f671c2a32.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'partials/header.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php
    $id = $_GET['cat_id'];
    $sql = "SELECT * FROM `categories` WHERE `category_id`=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];

    }
    ?>









    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname?> forum</h1>
            <p class="lead"><?php echo $catdesc?></p>
            <hr class="my-4">
            <p>This is peer to peer forum to share knowledge with each other.<br>
            <h6>Rules: </h6><br>
            <b>Be Respectful: </b>Treat all members with kindness and respect. Avoid personal attacks, offensive language, and discriminatory remarks. Disagreements are fine, but keep the discussion civil.<br>
            <b>No Harassment or Bullying:</b> Harassing, bullying, or intimidating other members is strictly prohibited. This includes any form of stalking, threats, or unwanted attention.<br>
            <b>Stay on Topic: </b>Keep discussions relevant to the forum's theme or category. Off-topic posts can clutter discussions and make it harder for others to find relevant information.<br>
            <b>No Spamming or Self-Promotion: </b>Do not post repetitive, irrelevant, or promotional content. Promoting your own website, products, or services without permission is not allowed.
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    <div class="container">
        <h1>Browse Questions</h1>
        <div class="media">
            <!-- <img class="mr-3" src="..." alt="Generic placeholder image"> -->
            <i class="fa-solid fa-user">user</i>
            <div class="media-body">
                <h5 class="mt-0">What are the key differences between procedural programming and object-oriented programming paradigms, and how do these differences impact the way software is designed and structured?</h5>
                Ans> Procedural programming centers around breaking down a program into functions that manipulate data, while object-oriented programming involves bundling data and methods into objects, enabling better organization, encapsulation, and code reusability. OOP's emphasis on inheritance, polymorphism, and encapsulation supports more modular, maintainable, and flexible code structures compared to procedural programming.
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>