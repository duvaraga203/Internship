<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm text-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand link-light" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link active link-light" aria-current="page" href="#">Home</a>

                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav ml-auto">
                    <?php echo "<a class='nav-link active link-light' aria-current='page' href='logout.php'>Logout</a>"; ?>

                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav ml-auto">
                    <?php echo "<a class='nav-link active link-light' aria-current='page' href='logoutall.php'>Logout all</a>"; ?>

                </div>
            </div>

        </div>
    </nav>

    <div class="container">
        <?php

        echo "Welcome " . $_SESSION['username'];

        ?>
    </div>
</body>

</html>