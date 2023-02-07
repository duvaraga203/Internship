<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php and mysql</title>
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
    <div class="container bg-dark">
        <h2 class="text-light text-center p-2">Delete details</h2>
        <div class="container row">
            <form class="col-lg-4 offset-lg-4 mt-2 mb-2 p-2 bg-info" method="post" action="delete.php">
                <label for="uno" class="ml-4 mt-3 mr-4">Rollno</label>
                <input class="ml-5" type="number" name="uno" placeholder="Enter your rollno"> <br>
                <div class="row">
                    <input class="mt-3 bg-success col-6 offset-3" type="submit" name="submit" value="Delete">
                </div>
                <span><a href="./main.php" class="ml-5 text-light">Save details</a><a href="./show.php"
                        class="text-light ml-5">Show details</a></span>
                <a href="./update.php" class="ml-5 text-light">Update details</a>

            </form>
        </div>
    </div>
</body>

</html>

<?php
//connect db
$con = new mysqli('localhost', 'root', '', 'db1');

//show error
if ($con->connect_errno) {
    echo $con->connect_errno;
    echo "db is not connected!!!";
    die();
  }

//delete row
if (isset($_POST['submit'])) {
    $rollno = $_POST['uno'];
    $sql = "DELETE FROM user_input  WHERE roll='$rollno'";

    if ($con->query($sql)) {
        echo "<script>alert('Data removed successfully!!!!')</script>";
    } else {
        echo "Insert failed!!!";
    }

}
?>