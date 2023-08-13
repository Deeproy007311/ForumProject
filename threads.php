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
    <!-- Database connection -->
    <?php include 'partials/_dbconnect.php';?>
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to java forum</h1>
            <p class="lead">Java is a widely used object-oriented programming language and software platform that runs
                on billions of devices, including notebook computers, mobile devices, gaming consoles, medical devices
                and many others. The rules and syntax of Java are based on the C and C++ languages.

                One major advantage of developing software with Java is its portability. Once you have written code for
                a Java program on a notebook computer, it is very easy to move the code to a mobile device. When the
                language was invented in 1991 by James Gosling of Sun Microsystems (later acquired by Oracle), the
                primary goal was to be able to "write once, run anywhere."

                It's also important to understand that Java is much different from JavaScript. Javascript does not need
                to be compiled, while Java code does need to be compiled. Also, Javascript only runs on web browsers
                while Java can be run anywhere.

                New and improved software development tools are coming to market at a remarkable pace, displacing
                incumbent products once thought to be indispensable. In light of this continual turnover, Java’s
                longevity is impressive; more than two decades after its creation, Java is still the most popular
                language for application software development—developers continue to choose it over languages such as
                Python, Ruby, PHP, Swift, C++, and others. As a result, Java remains an important requirement for
                competing in the job market.</p>
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
            <i class="fa-solid fa-user"></i>
            <div class="media-body">
                <h5 class="mt-0">Media heading</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>