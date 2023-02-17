<?php
//connecting database
$connect = new mysqli('localhost', 'root', '', 'ajax_data');

if ($connect->connect_errno) {
    echo "Failed to connect." . $connect->connect_error;
    die();
}

if (isset($_POST['name'])) {
    $rollno = $_POST['roll'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $query = "INSERT INTO user_data(rollno,name,age,gender,email,mobile,password) VALUES ('$rollno','$name','$age','$gender','$email','$mobile','$password')";

    $con = $connect->query($query);

    if ($con->num_rows > 0) {
        echo "<script>alert('Details submitted successfully!!!')</script>";
    } else {
        echo "<script>alert('Failed to add data.')</script>";
    }
}

?>