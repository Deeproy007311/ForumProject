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
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title?></h1>
            <p class="lead"><?php echo $desc?></p>
            <p><b>Posted by: Deep</b></p>
            <hr class="my-4">
            <p>This is peer to peer forum to share knowledge with each other.<br>
        </div>
    </div>

    <!-- discussions -->
    <div class="container pb-4">
        <h1>Discussions</h1>
        <!-- <?php
        $id = $_GET['cat_id'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];

            echo '
            <div class="media">
                <i class="fa-solid fa-user"></i>
                <div class="media-body">
                    <h5 class="mt-0"><a href="thread.php">'. $title .'</a></h5>
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
        ?> -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>