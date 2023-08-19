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
    <?php
    $showAlert = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // if server method is post we will a thread into out threadlist page
            $th_title = $_POST['title'];
            $th_desc = $_POST['desc'];
            $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $showAlert = true;
            if ($showAlert) {
                echo '<div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your thread has been added.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                </div>';
            }
            
        }
    ?>
    <!-- Jumbotron -->
    <div class="container my-4" style="background-color: #D8D9DA;">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname?> forum</h1>
            <p class="lead"><?php echo $catdesc?></p>
            <hr class="my-4">
            <p>This is peer to peer forum to share knowledge with each other.</p>
        </div>
    </div>
    <!-- Asking some Questions -->
    <?php
    if (isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true) {
    echo '<div class="container pb-4 pt-4">
    <h1>Ask some Questions</h1>
    <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
    <div class="mb-3">
        <label for="title" class="form-label">Problem Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc"></textarea>
        <label for="floatingTextarea">Elaborate your problem</label>
    </div>
    <button type="submit" class="btn btn-primary ">Submit</button>
    </form>
    </div>';
    }
    else {
    echo '<div class="alert alert-danger" role="alert">
        You are not logged in. after login you can start your discussions.
    </div>';
    }

    ?>
    <!-- questions -->
    <div class="container pb-4 pt-4">
        <h1>Browse Questions</h1>
        <?php
        $id = $_GET['cat_id'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $threadtime = $row['timestamp'];
            $thread_user_id = $row['thread_user_id'];
            $sql2 = "SELECT user_email FROM `users` WHERE sno = '$thread_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);


            echo '
            <div class="media" style="display: flex;">
                <i class="fa-solid fa-user"></i>
                <div class="media-body">
                <p class="font-weight-bold my-0"><b>Asked by: </b>'. $row2['user_email'] .'</p>
                    <h5 class="mt-0"><a href="thread.php?thread_id='. $id .'">'. $title .'</a></h5>
                    '. $desc .'
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