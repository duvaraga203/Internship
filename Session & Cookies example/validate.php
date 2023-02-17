<?php

$my_username = "duvaraga112";
$my_password = "asdf123";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username==$my_username && $password==$my_password){
            session_start();
            $_SESSION['username'] = $username;
            header("Location:dashboard.php");
    }else {
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>location.href = 'index.php'</script>";
    }
}

else {
    header("Location:index.php");
}


?>