<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>

    <?php include 'partials/_navbar.php'; ?>
    <?php
    // Server Database Connection Query
    $showError = false;
    $showAlert = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'partials/Database/_dbconnect.php';
        include 'partials/_insert.php';
    }else
    {
        $showError = "Password Do not Match";
    }
    ?>
    <?php 
    if ($showAlert) {
        echo "<!-- Alert Success -->
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Successfully</strong> Your account is now created and you can log In .
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }  
    ?>
    <!-- Sign Up form here -->
    <div class="container my-5">
        <div class="row">
            <div class="col-sm p-5 text-center">
                <br>
                <br>
                <br>
                <h1>Sign Up to our Website</h1>
                <p>if your are new user,please Sign Up here</p>
            </div>
            <div class="col-md-6">
                <form action="/loginsystem/sign_up.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" maxlength="11" required>
                        <small id="NameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" maxlength="30" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" maxlength="20" required>
                        <small id="PasswordHelp" class="form-text text-muted">Make sure to type same password.</small>
                    </div>
                    <?php
                        if ($showError) {
                             echo "<!-- Alert Error -->
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Error !</strong> '. $showError .'.
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