
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
    <!-- Database connection -->
    <?php include 'partials/_dbconnect.php';?>
    <!-- This is carousel -->
    <?php include 'partials/header.php';?>
    <!-- Search results -->
    <div class="container">
        <h1>Search Results for - <?php echo $_GET['search']?></h1>
        <div class="results">
            <h2><a href="/categories/dfd">Results</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto odio, ipsa sapiente necessitatibus quas velit ipsum saepe expedita dolore nihil, dolores a, deserunt fuga! Quam nostrum nobis eius molestiae rem, aspernatur atque laborum laboriosam architecto dolore harum? Quidem officia placeat ullam saepe adipisci repellat mollitia.</p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>