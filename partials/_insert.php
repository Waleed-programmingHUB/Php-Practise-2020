<?php
$user_name = $_POST['username'];
$user_pass = $_POST['password'];
$c_pass = $_POST['cpassword'];
$exists = false;

// Exists Query
$existSqL = "SELECT * FROM `users` WHERE  u_name = '$user_name'";
$result_sql = mysqli_query($conn, $existSqL);
$noExistRows = mysqli_num_rows($result_sql);
// Check Table Data Exists Query in Database 
if ($noExistRows > 0) {
    $showError = "Username is alerady Exists";
}else {
    if (($user_pass == $c_pass)) {
        $insert_sql = "INSERT INTO `users` (`u_name`, `u_password`, `u_time`) VALUES ('$user_name', '$user_pass', current_timestamp())";
        $result_sql = mysqli_query($conn, $insert_sql);
        if ($result_sql) {
            $showAlert = true;
        }
    }
}
// New User Query for New User 
if (($user_pass == $c_pass)) {
    $insert_sql = "INSERT INTO `users` (`u_name`, `u_password`, `u_time`) VALUES ('$user_name', '$user_pass', current_timestamp())";
    $result_sql = mysqli_query($conn, $insert_sql);
    if ($result_sql) {
        $showAlert = true;
    }
}
