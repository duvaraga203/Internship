<?php 


$connect = mysqli_connect("localhost","root","","event_calendar");

$my_query = "SELECT * FROM event_table";

$con = $connect->query($my_query);

$event;
$date;

if($con->num_rows > 0){
    while($row= $con->fetch_assoc()){
        echo $event, $date;;
    }

}
?>