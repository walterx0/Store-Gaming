<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Walter</title>
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

</head>
<body>
  

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
        <i class="fa-solid fa-magnifying-glass"></i>
  
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
   
      <!-- checkout -->
<div class="chechout text-center pb-2 pt-2 d-lg-block d-none">
  <i class="fa-solid fa-cart-shopping align-items-center  "></i>
  <a class="btn rounded-pill main-btn d-block  text-light align-items-center  " href="#" >Checkout</a>

</div>
<!--  -->
    </div>


  </nav>
  



<div class="square bg-black">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="img">
          <img class="img-fluid mt-4 mb-4" src="https://cdn.breakers-store.site/wp-content/uploads/2023/10/Batman-800x1185.png" alt="" srcset="" width="90%">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="paragraph mt-5">
        <h2 class="text-light ">Batman: Arkham Collection STEAM</h2>
<p class="text-danger">EGP 935.00</p>

        </div>
        <div class="content ">
<p class="text-success">Content</p>
<span class="text-light">
  <div class="span">Batman: Arkham Asylum Game of the Year Edition.</div>
  <div class="span">Batman: Arkham City – Game of the Year Edition.</div>
  <div class="span">Batman™: Arkham Knight.</div>


</span>
        </div>
        <div class="Region mt-4">
          <p class="text-success">Region <span class="text-light">:Kazakhstan / India</span></p>
        </div>
        <div class="Language ">
          <p class="text-success">Language <span class="text-light"> :English</span></p>
        </div>
        <div class="quntity"> 
          
        <div class="input-group mb-3 " style="width:27%;">
  <button class="btn btn-outline-secondary minus-btn" type="button">-</button>
  <input type="number" class="form-control quantity-input" value="1" min="1" max="10">
  <button class="btn btn-outline-secondary plus-btn" type="button">+</button>
</div>

        
        <a href="#" class="btn btn-danger  main-btn  w-100 font-weight-bold  text-center text-light p-2 mb-5" >Add to cart</a>
</div>
      </div>
      <hr style="background:white;">
      <!--  -->
      <div class="distitle text-center mb-5">
  <p class="text-danger fw-bold">Description</p>
  <div class="w-100 text-center text-light ">Includes 4 items: Batman: Arkham Asylum Game of the Year Edition, Batman: Arkham City – Game of the Year Edition, Batman™: Arkham Knight, Batman™: Arkham Knight Season Pass
<p class="text-light mt-5 ">Category: <span class="text-danger fs-6">STEAM Games </span></p>
</div>
</div>
<div class="Relatedproducts">
  <h3 class="text-light mb-5">Related Products</h3>
  <div class="row">
<div class="col-lg-3 col-md-6 col-6 " >
  <div class="card text-light"  style="background-color: #040615 ;  ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/10/Arkk-441x564.jpg" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">ARK: Survival Ascended </a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 900.00</p>
      <a href="#" class="btn   btn-danger  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 " >
  <div class="card text-light"  style="background-color: #040615 ;  ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/07/nfs-300x400.jpg" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">Need for Speed™ Unbound STEAM
 </a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 900.00</p>
      <a href="#" class="btn   btn-danger  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 " >
  <div class="card text-light"  style="background-color: #040615 ;  ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/10/Euro-Truck-Simulator-2-300x383.jpg" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">Euro Truck Simulator 2 STEAM</a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 900.00</p>
      <a href="#" class="btn   btn-danger  w-100 font-weight-bold   text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 " >
  <div class="card text-light"  style="background-color: #040615 ;  ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/07/GTAV-300x409.jpg" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">Grand Theft Auto V: Premium Edition STEAM </a>
      <p class="card-text  text-uppercase text-danger font-weight-bold ">EGP 900.00</p>
      <a href="#" class="btn  btn-danger   w-100 font-weight-bold  text-center text-light " >Add to cart</a>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
    </div>
    
  </div>


</div>























































































<!-- footer -->
<div class="footer text-md-start pt-3 pb-3 ">
  <div class="container ">
    <div class="row ">
      <div class="col-lg-3 pt-5 mt-4" >
        <div class="card" style="background-color: #0c1826;" >
          <div class="card-header text-light" style="  background-color: #c00000;">
            Account
          </div>
          <ul class="list-group list-group-flush  " >
            <a href="#" class="text-decoration-none  main-btn foot-btn  w-100 font-weight-bold  text-center text-light text-start p-3 " >My account
            </a>
            <a href="#" class="text-decoration-none  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Orders</a>
            <a href="#" class="text-decoration-none  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >My Wishlist</a>
            <a href="#" class="text-decoration-none  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >My Wallet</a>
            <a href="#" class="text-decoration-none  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Checkout</a>
            
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.plus-btn').click(function() {
        var input = $(this).parent().find('.quantity-input');
        var currentValue = parseInt(input.val());
        if (!isNaN(currentValue) && currentValue < parseInt(input.attr('max'))) {
            input.val(currentValue + 1);
        } else {
            input.val(parseInt(input.attr('max')));
        }
    });

    $('.minus-btn').click(function() {
        var input = $(this).parent().find('.quantity-input');
        var currentValue = parseInt(input.val());
        if (!isNaN(currentValue) && currentValue > parseInt(input.attr('min'))) {
            input.val(currentValue - 1);
        } else {
            input.val(parseInt(input.attr('min')));
        }
    });
});
</script>

    </body>










    </html>