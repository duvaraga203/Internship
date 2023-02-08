<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP AC</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container bg-danger">
    <h2 class="text-light text-center mt-2 p-2">Auto complete</h2>

    <div class="container row">
      <form class="col-lg-4 offset-lg-4 mt-2 mb-2 p-2 bg-info" method="post" action="main.php">
        <div class="input-group mt-2 mb-2">
          <input type="text" class="form-control" name="name" id="uname" placeholder="Enter name">
          <div class="input-group-append">
            <input type="submit" class="input-group-text btn btn-primary" id="basic-addon2" placeholder="Search">
          </div>
        </div>
      </form>

    </div>
    <div class="row" style="position:absolute;z-index:1;margin-left:26%;">
      <div class="col-12 list-group" id="show_name" style="margin-top:-20px">
        
      </div>
    </div>

    <div class="row">
            <table class="bg-light table-light mb-2">
                <tr>
                    <th>Roll no</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>

                <?php
                error_reporting(0);
                $con = new mysqli('localhost', 'root', '', 'db1');

                //show error
                if ($con->connect_errno) {
                    echo $con->connect_errno;
                    echo "db is not connected!!!";
                    die();
                }


                //show details
                $user_name = $_POST['name'];
                $query = "SELECT * FROM user_input where name='$user_name'";
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

 

  <script src="./script.js"></script>
</body>

</html>