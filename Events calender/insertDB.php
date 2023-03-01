<?php 

$event = $_POST['event'];
$date = $_POST['date'];

$connect = mysqli_connect("localhost","root","","event_calendar");

$my_query = "INSERT INTO event_table(event,date) VALUES ('$event','$date')";

$con = $connect->query($my_query);

?>