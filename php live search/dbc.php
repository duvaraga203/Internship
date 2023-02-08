<?php
//connecting database
$connect = new mysqli('localhost', 'root', '', 'db1');

if($connect->connect_errno){
    echo "Failed to connect.".$connect->connect_error;
    die();
}

if(isset($_POST['query'])){
    $input = $_POST['query'];
    $query = "SELECT name FROM user_input WHERE name LIKE '$input%'";
    $con = $connect->query($query);
    if ($con->num_rows > 0) {
        while($row= $con->fetch_assoc()){
            $id = 1;
            echo "<a class='list-group-item ml-2 u_name style='width:70%''>".$row['name']."</a>";
            $id++;
        }
    }else {
        echo "<a class='list-group-item ml-2'>No records found.</a>";
    }
}

?>