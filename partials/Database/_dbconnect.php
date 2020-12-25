<?php
$myserver = "localhost";
$username = "root";
$userpass = "";
$userDatabase = "myclient";

$conn = mysqli_connect($myserver,$username,$userpass,$userDatabase);
if (!$conn) {
    echo "<!-- Alert Error -->
    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Error</strong> You are Not Connected.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}
?>