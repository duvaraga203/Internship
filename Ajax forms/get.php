<?php


$con = mysqli_connect("localhost", "root", "", "ajax_data");

$sql = "SELECT * FROM user_data";
$res = $con->query($sql);
$new_table = "<table class='table table-dark'>
       <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Password</th>
       </tr>";
if ($res->num_rows > 0) {

    while ($row = $res->fetch_assoc()) {
        $new_table .= "<tr>
          <td>{$row['name']}</td>
          <td>{$row['age']}</td>
          <td>{$row['email']}</td>
          <td>{$row['password']}</td>
          </tr>";
    }
    $new_table .= "</table>";

    echo json_encode($new_table);
} else {
    echo "<p><br>No record found</p>";
}
?>