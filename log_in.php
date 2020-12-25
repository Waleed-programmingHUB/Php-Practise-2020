<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Log In</title>
</head>

<body>

  <?php include 'partials/_navbar.php'; ?>
  <?php
        $log_in = false;
        $showError = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Database Connection
          include 'partials/Database/_dbconnect.php';
                $username = $_POST['username'];
                $userpass = $_POST['password'];
                $exists = false;
                // Exists Query
                $wsql = "Select * from users where u_name ='$username' AND u_password ='$userpass'";
                $result_ = mysqli_query($conn,$wsql);

                $num_ = mysqli_num_rows($result_);
                if ($num_ == 1) {
                  $log_in = true;
                  session_start();
                  $_SESSION['loggedin'] = true;
                  $_SESSION['username'] = $username;
                  // redirect function
                  header("location: index.php");
                }
                else {
                  $showError = "Invalid Credentials";
                }
          }
  ?>
  <!-- Log In form here -->
  <div class="container my-5">
    <div class="row">
      <div class="col-sm p-5 text-center">
        <br>
        <br>
        <br>
        <h1>Log In to our Website</h1>
        <p>if your are new user,please Log In here</p>
      </div>
      <div class="col-md-6">
        <form action="/loginsystem/log_in.php" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
            <small id="NameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
          </div>
          <br>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <br>
          <?php
             if ($showError) {
              echo "<!-- Alert Error -->
             <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                 <strong>Error !</strong> '. $showError .'.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>";
             }
          ?>
          <?php
            if ($log_in) {
              echo "<!-- Alert Success -->
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>Success! </strong> You are Logged in .
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
            }
          ?>
          <br>
          <button type="submit" class="btn btn-primary container">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>