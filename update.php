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
        <h2 class="text-light text-center p-2">Update details</h2>
        <div class="container row">
            <form class="col-lg-4 offset-lg-4 mt-2 mb-2 p-2 bg-info" method="post" action="update.php">
                <label for="uno" class="ml-4 mt-3 mr-4">Rollno</label>
                <input class="ml-5" type="number" name="uno" placeholder="Enter your rollno"> <br>
                <label for="uname" class="ml-3 mt-3 mr-2">Update name</label>
                <input class="mr-1 ml-4" type="text" name="uname" placeholder="Enter your name"> <br>
                <label for="uage" class="ml-3 mt-3">Update age</label>
                <input class="ml-5" type="text" name="uage" placeholder="Enter your age"> <br>
                <label for="pass" class="ml-3 mt-3">Update password</label>
                <input class="ml-2" type="password" name="upass" placeholder="Enter your password"> <br>
                <div class="row">
                    <input class="mt-3 bg-success col-6 offset-3" type="submit" name="submit" value="Update">
                </div>
                <span><a href="./main.php" class="ml-5 text-light">Save details</a><a href="./show.php"
                        class="text-light ml-5">Show details</a></span>
                        <a href="./delete.php" class="ml-5 text-light">Delete details</a>
            </form>
        </div>
    </div>
</body>

</html>

<?php

$con = new mysqli('localhost', 'root', '', 'db1');

if (isset($_POST['submit'])) {
    $rollno = $_POST['uno'];
    $name = $_POST['uname'];
    $u_age = $_POST['uage'];
    $pass = $_POST['upass'];
    $sql = "UPDATE user_input SET name='$name', age='$u_age' ,password='$pass' where roll='$rollno'";

    if ($con->query($sql)) {
        echo "<script>alert('data updated successfully!!!!')</script>";
    } else {
        echo "Insert failed!!!";
    }

}
?>
