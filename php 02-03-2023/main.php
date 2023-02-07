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
    <h2 class="text-light text-center">Save details</h2>
    <div class="container row">
      <form class="col-lg-4 offset-lg-4 mt-2 mb-2 p-2 bg-info" method="post" action="main.php">
        <label for="rno" class="ml-4 mt-3 mr-2">Rollno</label>
        <input class="ml-5" type="number" name="r_no" id="rno" placeholder="Enter your rollno" required> <br>
        <label for="uname" class="ml-4 mt-3 mr-2">Name</label>
        <input class="ml-5" type="text" name="name" id="uname" placeholder="Enter your name"> <br>
        <label for="uage" class="ml-4 mr-4 mt-3">Age</label>
        <input class="ml-5" type="text" name="age" id="uage" placeholder="Enter your age"> <br>
        <label for="pass" class="ml-4 mr-2 mt-3">Password</label>
        <input class="ml-4" type="password" name="u_pass" id="pass" placeholder="Enter your password"> <br>
        <div class="row">
          <input class="mt-3 bg-success col-6 offset-3" type="submit" name="submit" value="Save details">
        </div>
        <span><a href="./show.php" class="ml-5 text-light">Show details</a><a href="./update.php"
            class="text-light ml-5">Update details</a></span>
            <a href="./delete.php" class="ml-5 text-light">Delete details</a>

      </form>
    </div>
  </div>
</body>

</html>

<?php
$con = new mysqli('localhost', 'root', '', 'db1');

//show error
if ($con->connect_errno) {
  echo $con->connect_errno;
  echo "db is not connected!!!";
  die();
}

//save details
if (isset($_POST['submit'])) {
  $rollno = $_POST['r_no'];
  $name = $_POST['name'];
  $u_age = $_POST['age'];
  $pass = $_POST['u_pass'];
  $sql = "INSERT INTO user_input ( roll ,name, age ,password) VALUES ('$rollno','$name','$u_age','$pass')";

  if ($con->query($sql)) {
    echo "data inserted successfully!!!!";
  } else {
    echo "Insert failed!!!";
  }

}
?>