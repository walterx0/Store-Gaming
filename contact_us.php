<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="https://cdn.breakers-store.site/wp-content/uploads/2023/04/breakers_store_logo@3x-2048x1659.png">
<style>
    body {
        background:black;
    }
</style>
</head>
<body >
<div class="header">
  <div class="container text-light text-center p-2 font-weight-bold">
    Hello World Breaker’s Here
  </div>
  
</div>



<!-- navbar -->
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
      <div class="dropdown ">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-user text-black "></i>
    </button>
    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
        <?php
        session_start();

        if (isset($_SESSION['username'])) {
            // User is logged in, display profile name and logout link
            echo "<li><span class='dropdown-item-text text-light'>Welcome, {$_SESSION['username']}!</span></li>";
            echo "<li><a class='dropdown-item text-light' href='logout.php'>Logout</a></li>";
        } else {
            // User is not logged in, display the login link
            echo "<li><a class='dropdown-item text-light' href='login.php'>Login</a></li>";
        }
        ?>
    </ul>
</div>

      </div>


      <div class="chechout text-center pb-2 pt-2 d-lg-block d-none">
  <i class="fa-solid fa-cart-shopping align-items-center  "></i>
  <a class="btn rounded-pill main-btn d-block  text-light align-items-center  " href="#" >Checkout</a>

</div>

</div>

      <!-- checkout -->
<!--  -->


  </nav>
  

    <div class="container mt-5 mb-5">
        <h2 class="text-light">Contact Us</h2>
        <form action="process_contact.php" method="post">
            <div class="form-group text-light">
                <label for="name ">Name:</label>
                <input type="text" class="form-control " id="name" name="name" required placeholder="Name">
            </div>
            <div class="form-group text-light">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
            </div>
            <div class="form-group text-light">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
    <div class="footer text-md-start pt-3 pb-3 ">
  <div class="container ">
    <div class="row ">
      <div class="col-lg-3 pt-5 mt-4" >
        <div class="card" style="background-color: #0c1826;" >
          <div class="card-header text-light" style="  background-color: #c00000;">
            Account
          </div>
          <ul class="list-group list-group-flush " >
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light text-start p-3" >My account
            </a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Orders</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >My Wishlist</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >My Wallet</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Checkout</a>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 pt-5 mt-4 " >
        <div class="card" style="background-color: #0c1826;" >
          <div class="card-header text-light" style="  background-color: #c00000;">
            Legal
          </div>
          
          <ul class="list-group list-group-flush  " > 
            <a href="contact_us.php" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Contact us</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Privacy Policy</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Terms and Conditions</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3 " >Refund Policy</a>
         
            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 pt-5 mt-4" >
        <div class="card" style="background-color: #0c1826;" >
          <div class="card-header text-light " style="  background-color: #c00000;">
            Follow
          </div>
          <ul class="list-group list-group-flush  " >
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light  p-5 " >Facebook
            </a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-5" >Instagram</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-5 text-center " >Whatsapp</a>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 pt-5 mt-4 " >
        <div class="card " style="background-color: #0c1826; " >
          <div class="card-header text-light " style="  background-color: #c00000;">
            Sign up
          </div>
          <div class="form text-start p-3 " style="background-color: #040615;">
            <p class="text-light text-center  mt-5 mb-5" >Sign up to our newsletter.

            </p>
            <div class="search">
              <input type="text" placeholder="Your Email Address" class="p-2 w-100">
              <a href="#" class="btn  main-btn mt-3 w-100   font-weight-bold  text-center text-light " style="background-color: #c00000;" >Sign up</a>
            
            </div>
            
          </div>
          
          <div class="contact  ">
            <ul class="d-flex mt-5 list-unstyled gap-5">
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-2"></i>
              </a></li>
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-twitter fa-lg twitter rounded-circle p-2"></i>
              </a></li>
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-linkedin fa-lg linkedin rounded-circle p-2"></i>
              </a></li>
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-youtube fa-lg youtube rounded-circle p-2"></i>
              </a></li>
            </ul>
            
          </div>
    
        </div>
        
      </div>
      <div class="info ">
        <div class="copyright text-light ">
         &copy; <span>Breakers Store 2023</span>
        </div>
        <div class="text-light" >Developed By Walter

        </div>
        
      </div>


    </div>
    
  </div>
</div>





<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
