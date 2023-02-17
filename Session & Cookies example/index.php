<?php 
session_start();
if (isset($_SESSION['username'])) {
  header("location:dashboard.php");
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
    <script src="./script.js"></script>
  </head>
  <body>
    <div class="container bg-dark text-light">
      <h2 class="text-center pt-2">Login</h2>
      <form action="validate.php" method="post" class="col-7 offset-lg-4 p-3">
        <div class="form-group row mt-2">
          <label class="col-lg-2" for="id1">Username</label>
          <input
            class="col-lg-4 col-sm-12"
            type="text"
            id="id1"
            placeholder="Enter your User Name"
            name="username"
            required
          />
        </div>
        <div class="form-group row mt-4">
          <label class="col-lg-2" for="id2">Password</label>
          <input
            class="col-lg-4 col-sm-12"
            type="password"
            id="id2"
            placeholder="Enter your password"
            name="password"
            required
          />
        </div>
        <div class="container offset-lg-1 mt-4">
          <input type="submit" class="col-lg-4 btn btn-success" value="Login" name="login">
        </div>
      </form>
    </div>
  </body>
</html>
