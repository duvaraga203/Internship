<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
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
  <h2 class="text-light text-center">Form</h2>
    <div class="container row">
      <form class="col-lg-4 offset-lg-4 mt-2 mb-2 p-2 bg-info" enctype="multipart/form-data" method="post"
        action="connect_db.php">
        <label for="uname" class="ml-3 mt-5">Name</label>
        <input class="ml-2" type="text" name="name" id="uname" placeholder="Enter your name"> <br>
        <label for="uage" class="ml-3 mt-5">Age</label>
        <input class="ml-2" type="text" name="age" id="uage" placeholder="Enter your age"> <br>
        <input class="ml-5 mt-5" type="submit" name="submit" value="Save details">
      </form>
    </div>
  </div>
</body>

</html>
