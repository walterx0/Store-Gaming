<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&family=Metal+Mania&family=Open+Sans&family=Roboto&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bondi.css">
  <!-- CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="https://cdn.breakers-store.site/wp-content/uploads/2023/04/breakers_store_logo@3x-2048x1659.png">
  <style>
body{
    background-color:#1c2434;
}
input[type=text]{
    background-color: #293140;
transition:all .3s;
color:white;
border: 1px solid #293140;

}
input[type=text]:focus{
    border: 1px solid red;
    background:#293140;
    
}
input[type=password]{
    background-color: #293140;
    transition:all .3s;
    border: 1px solid #293140;
    color:white;
}
input[type=password]:focus{
    border: 1px solid red;
    background:#293140;

}
</style>

</head>
<body>

<div class="header">
  <div class="container text-light text-center p-2 font-weight-bold">
    Hello World Breaker’s Here
    </div>
</div>
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/breakers_store_logo@3x-2048x1659.png" alt="" srcset="" width="100px" height="100px">
      </a>
      
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main"
      aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
      
      <div class="collapse navbar-collapse" id="main">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item font-weight-bold ">
            <a class="nav-link p-2 p-lg-3 fs-5 active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Steam</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5"  href="#">EA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Playstaion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Battle.net</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Netflix</a>
          </li>
        </ul>
      </div>
      <div class="search ps-3 pe-3 d-lg-block d-none ">
        <i class="fa-solid fa-magnifying-glass text-danger"></i>
  
      </div>
      
      <!-- login -->

      </div>
   
      <!-- checkout -->
<!--  -->
    </div>


  </nav>

<div class="container mt-5 w-50">
        <h2 class=" text-light">Login</h2>
        <?php
        session_start();
        if (isset($_SESSION['login_error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['login_error'] . '</div>';
            unset($_SESSION['login_error']); // Clear the login error message
        }
        ?>
        <form action="processlogin.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-light w-100">Login</button>
            <div class="not justify-content-center  align-items-center mt-5">
                <span class="text-light text-muted">Not Member Yet ?</span>
            <a href="signup.php" class=" text-light">Register</a>
            </div>
        </form>
    </div>
</body>
</html>
