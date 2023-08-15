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
        $id = $_GET['thread_id'];
        $sql = "SELECT * FROM `threads` WHERE `thread_id`=$id";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
        }
    ?>
    <?php
    $showAlert = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // if server method is post a comment will handeled in the page.
            $comment = $_POST['comment'];
            $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_time`) VALUES ('$comment', '$id', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            $showAlert = true;
            if ($showAlert) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your comment has been added.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    ?>
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title?></h1>
            <p class="lead"><?php echo $desc?></p>
            <p><b>Posted by: Deep</b></p>
            <hr class="my-4">
            <p>This is peer to peer forum to share knowledge with each other.<br>
        </div>
    </div>
    <!-- Post your comments here -->
    <div class="container pb-4 pt-4">
        <h1>Post your comment here</h1>
        <form action="<?php $_SERVER["REQUEST_URI"];?>" method="post">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment"></textarea>
                <label for="floatingTextarea">write your very own comments</label>
            </div>
            <button type="submit" class="btn btn-primary " >Post</button>
        </form>
    </div>

    <!-- discussions -->
    <div class="container pb-4">
        <h1>Discussions</h1>
        <?php
        $id = $_GET['thread_id'];
        $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['comment_id'];
            $content = $row['comment_content'];

            echo '
            <div class="media">
                <i class="fa-solid fa-user"></i>
                <div class="media-body">
                    '. $content .'
                </div>
            </div>';
        }
        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid" style="background-color: #D8D9DA;">
            <div class="container">
              <p class="display-4">No results found</p>
              <p class="lead">Ask your question first</p>
            </div>
          </div>';
        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>