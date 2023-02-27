<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<?php

$start_time = microtime(true);

$cache_file = "cache-users.php";
$cache_time = 20; // seconds

// Database connection
$conn = mysqli_connect("localhost", "root", "", "db1");
$result = mysqli_query($conn, "SELECT * FROM user_input");

if (file_exists($cache_file) && (filemtime($cache_file) + $cache_time > time()))
{
	readfile($cache_file);

	$end_time = microtime(true);
	echo "<h1>Difference: " . ($end_time - $start_time) . " seconds</h1>";

	exit();
}

ob_start();



while ($row = mysqli_fetch_object($result))
{
	$new_table = "<table class='table table-dark'>
       <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Password</th>
       </tr>";
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $new_table .= "<tr>
          <td>{$row['roll']}</td>
          <td>{$row['name']}</td>
          <td>{$row['age']}</td>
          <td>{$row['password']}</td>
          </tr>";
    }
    $new_table .= "</table>";

    echo $new_table;
}}

$file = fopen($cache_file, "w");
fwrite($file, ob_get_contents());
fclose($file);

?>

<?php

$end_time = microtime(true);

echo "<h1>Difference: " . ($end_time - $start_time) . " seconds</h1>";
?>
</body>
</html>



