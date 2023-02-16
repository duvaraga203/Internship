<?php

//connecting database
$connect = new mysqli('localhost', 'root', '', 'user_image');

if ($connect->connect_errno) {
    echo "Failed to connect." . $connect->connect_error;
    die();
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $sql);

if (isset($_POST['login'])) {
    if ($result == true) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location:dashboard.php");
    } else {
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>location.href = 'index.php'</script>";
    }
} else {
    header("Location:index.php");
}


?>