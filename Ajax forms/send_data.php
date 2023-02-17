<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Signup</title>
</head>

<body>
  <script>$(document).ready(function () {
      $("#sub_btn").click(function () {

        if (
          $("#rollno").val() == "" ||
          $("#name").val() == "" ||
          $("#age").val() == "" ||
          $("#gender").val() == "" ||
          $("#e_mail").val() == "" ||
          $("#m_number").val() == "" ||
          $("#pass").val() == ""
        ) {
          alert("Please fill all fields.");
          return false;
        }

        $.ajax({

          url: "send.php",
          method: "post",
          data: $('#my_form').serialize(),
          success: function (data) {
            alert("ajax");
          }
        });
      });
    });
  </script>
  <!-- Send data -->
  <div class="container mt-3 mb-3">
    <div class="row">
      <div class="container col-sm-12">
        <div class="card col-lg-4 offset-lg-4">
          <div class="card-body bg-dark text-light rounded">
            <h2 class="card-title text-center">Signup</h2>
            <form action="#" method="post" id="my_form" class="p-2">
              <div class="form-group">
                <label for="rollno">Rollno</label>
                <input class="form-control" type="number" id="rollno" name="roll" placeholder="Enter rollno" required />
              </div>
              <div class="form-group mt-2">
                <label for="fname">Name</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name" required />
              </div>

              <div class="form-group mt-2">
                <label for="age">Age</label>
                <input class="form-control" type="number" id="age" name="age" placeholder="Enter your age" />
              </div>
              <div class="form-group mt-2">
                <label for="gender">Gender</label>

                <select id="gender" class="form-control" name="gender" required>
                  <option value="">Choose your gender</option>
                  <option value="male">Male</option>
                  <option value="femlale">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="form-group mt-2">
                <label for="m_number">Mobile no.</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="phone">+91</span>
                  </div>
                  <input class="form-control" type="number" id="m_number" placeholder="Enter mobile no" name="mobile"
                    maxlength="10" required />
                </div>
              </div>
              <div class="form-group mt-2">
                <label for="e_mail">Email</label>
                <input class="form-control" type="email" id="e_mail" name="email" placeholder="abc@example.com"
                  required />
              </div>
              <div class="form-group mt-2">
                <label for="pass">Password</label>
                <input class="form-control" type="password" id="pass" name="password" placeholder="Enter password"
                  required />
              </div>

              <div class="form-group mt-2 text-center">
                <button type="submit" class="btn btn-success" id="sub_btn">
                  Signup
                </button>
              </div>
              <div class="form-group mt-2 text-center">
                <a href="./retrive_data.php" class="btn btn-sm btn-primary">
                  Show data
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>