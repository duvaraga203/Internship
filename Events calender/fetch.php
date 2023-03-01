<?php 


$connect = mysqli_connect("localhost","root","","event_calendar");

$my_query = "SELECT * FROM event_table";

$con = $connect->query($my_query);

$event_array = [];
$event_array1 = [];

if($con->num_rows > 0){
    while($row= $con->fetch_assoc()){
        $event_array[] = [$row['date'] => $row['event'],$row['id']];
    }

}
echo json_encode($event_array);
?>
