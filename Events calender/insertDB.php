<?php 

$event = $_POST['event'];
$date = $_POST['date'];

$connect = mysqli_connect("localhost","root","","event_calendar");

$my_query = "INSERT INTO event_table(event,date) VALUES ('$event','$date')";

$check_condition = $connect->query("SELECT date FROM event_table WHERE date='$date'");

if($check_condition->num_rows < 5){
    if($con = $connect->query($my_query)){
        echo "Events added successfully!!!";
    }
 } else {
        echo "Events storing limits per day already reached!";
 }

?>