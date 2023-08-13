<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding-Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/header.php';?>
    <!-- Database connection -->
    <?php include 'partials/_dbconnect.php';?>
    <!-- This is carousel -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2400x700/?apple,code" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?coding,code" class="d-block w-100 h-30" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?gaming,pc" class="d-block w-100 h-30" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- This is content -->
    <div class="container my-3">
        <h2 class="text-center">Welcome to idiscuss Browse Categories👨‍💻</h2>
        <div class="row">
            <!-- Here we will the categories of forum project from the database -->
            <?php
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $cat_id = $row['category_id'];
                $cat = $row['category_name'];
                $catDesc = $row['category_description'];
                echo '<div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/400x300/?'. $cat .',code" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="threads.php?cat_id='. $cat_id .'">'. $cat .'</a></h5>
                        <p class="card-text">'. substr($catDesc, 0, 80) .'...</p>
                        <a href="threads.php?cat_id='. $cat_id .'" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>'; 
            }
            
            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>