<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">iSecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="log_in.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_up.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="log_out.php">Logout</a>
        </li>
       
       
      </ul>
      <form class="d-flex">
      <a class="navbar-brand" href="index.php">Welcome Dear <b><?php echo $_SESSION['username']; ?></b>.</a>
      
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
    </div>
  </div>
</nav>