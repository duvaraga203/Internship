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
    
  <div class="container bg-dark">
    <p class="text-center text-light">Your details submitted successfully!!!!</p>
  </div>
</body>

</html>

<?php
$con = new mysqli('localhost','root','','db1');

if ($con -> connect_errno) {
    echo $con->connect_errno;
    echo "db is not connected!!!";
    die();
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sql = "INSERT INTO user_input (name, age) VALUES ('$name','$age')";

    if ($con->query($sql)) {
        echo "data inserted successfully!!!!";
    } else {
        echo "Insert failed!!!";
    }
    
} else {
    echo "Please enter details.";
}


?>
