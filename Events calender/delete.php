<?php 

$id = $_POST['delete'];

$connect = mysqli_connect("localhost","root","","event_calendar");

$my_query = "DELETE FROM event_table WHERE id='$id'";

    if($con = $connect->query($my_query)){
        echo "Event removed successfully!!!";
    }

?>