<?php

// if(isset($_POST['submit_image'])) {
// $target_file = basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// //connecting database
// $connect = new mysqli('localhost', 'root', '', 'user_image');

// if ($connect->connect_errno) {
//     echo "Failed to connect." . $connect->connect_error;
//     die();
// }

// // Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
//     $uploadOk = 0;
// }


// $image = $_FILES["fileToUpload"]["tmp_name"];
// $name = $_FILES["fileToUpload"]["name"];

// $image = file_get_contents($image);
// $image = base64_encode($image);

// $query = "INSERT INTO image_table(name,image) VALUES ('$name','$image')";

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk != 0) {
//     $con = $connect->query($query);
//     if ($con == true) {
//         echo "<script>alert('The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.')</script>";
//     } else {
//         echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
//     }
// }

// }
?>

<?php


$con = mysqli_connect("localhost", "root", "", "user_image");

session_start();
$username = $_SESSION['username'] ;

$sql = "SELECT * FROM user,image_table WHERE user.id = image_table.id_fkey AND user.username='$username'";
$res = $con->query($sql);
$user_image = "";

if ($res->num_rows > 0) {

    while ($row = $res->fetch_assoc()) {
        $user_image .= "
        <img class='col-lg-2 mt-3' src='data:image;base64,{$row['image']}'>";
    }

    echo $user_image;
} else {
    echo "<p class='text-center text-light'><br>No record found</p>";
}
?>