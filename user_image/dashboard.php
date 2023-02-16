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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

        </div>
    </nav>


    <div class="container mt-3">
        <h3 class="text-center">Image upload</h3>
        <form class="offset-lg-3 col-lg-6 bg-dark text-light mt-3" action="dashboard.php" enctype="multipart/form-data"
            method="post">
            <span class="row offset-lg-2 p-3">
                <label class="col-lg-4">Select image</label>
                <input class="col-lg-8" type="file" name="fileToUpload" id="int_image">
            </span>
            <input class="offset-lg-5 col-lg-2 mb-2 p-1 bg-success rounded" type="submit" value="Submit"
                name="submit_image">
        </form>
    </div>
    <div class="container-fluid bg-dark mt-3">
        <h3 class="text-center text-light">Images</h3>
    </div>
    <div class="container-fluid pb-3 bg-dark">
        <div class="row" id="images_div">

        </div>

    </div>
</body>

</html>



<script>

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "store_inside.php",
            success: function (response) {
                console.log(response);
                $("#images_div").html(response);
            }

        });
    });

    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<?php

if (isset($_POST['submit_image'])) {
    $target_file = basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //connecting database
    $connect = new mysqli('localhost', 'root', '', 'user_image');

    if ($connect->connect_errno) {
        echo "Failed to connect." . $connect->connect_error;
        die();
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        $uploadOk = 0;
    }


    $image = $_FILES["fileToUpload"]["tmp_name"];
    $name = $_FILES["fileToUpload"]["name"];

    $image = file_get_contents($image);
    $image = base64_encode($image);

    $username = $_SESSION['username'];

    $for_id = $connect->query("SELECT id FROM user WHERE username = '$username'");
    $row = $for_id->fetch_assoc();
    $id = $row['id'];

    $query = "INSERT INTO image_table(name,image,id_fkey) VALUES ('$name','$image','$id')";

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk != 0) {
        $con = $connect->query($query);
        if ($con == true) {
            echo "<script>alert('The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.')</script>";
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    }

}
?>