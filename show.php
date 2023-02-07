<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php and mysql</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container bg-dark">
    <h2 class="text-light text-center mt-2 p-2">Show Details</h2>
    <div class="container row">
      <form class="col-lg-4 offset-lg-4 mt-2 mb-2 p-2 bg-info" method="post" action="show.php">
        <label for="rno" class="ml-3 mt-5 mr-2">Rollno</label>
        <input class="ml-4" type="number" name="rno" placeholder="Enter your rollno"> <br>
        <div class="row">
          <input class="mt-5 bg-success col-5 offset-3" type="submit" name="submit1" value="Show details">
        </div>
        <span><a href="./main.php" class="ml-5 text-light">Save details</a><a href="./update.php" class="text-light ml-5">Update details</a></span>

      </form>
    </div>
    <div class="row">
      <table class="bg-light table-light mb-2">
        <tr>
          <th>Roll no</th>
          <th>Name</th>
          <th>Age</th>
        </tr>

        <?php
        $con = new mysqli('localhost', 'root', '', 'db1');
        $sno = $_POST['rno'];
        $query = "SELECT * FROM user_input where roll='$sno'";
        $connect = mysqli_query($con, $query);
        $row = mysqli_num_rows($connect);

        if ($row > 0) {
          while ($data = mysqli_fetch_assoc($connect)) {
            echo "<tr>
            <td>" . $data['roll'] . "</td>
            <td>" . $data['name'] . "</td>
            <td>" . $data['age'] . "</td>
         </tr>";
          }
        }
        ?>

      </table>
    </div>

  </div>
</body>

</html>
