<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>


<!DOCTYPE html>
<html ng-app="myApp">
<head>
  <?php include('assets/head.html') ?>
</head>
  <body>
    <!-- Content of the the top -->
    <header>
      <?php include('assets/header-top.html') ?>
      <!-- Content of the secondary -->
      <?php include('assets/header-primary.php') ?>
    </header>
    <!-- Navbar here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
      <a class="navbar-brand mxauto" href="main.php">ITEAM STORE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="dropdown">
              <button class="dropbtn">Collection</button>
                <div class="dropdown-content">
                  <a href="#">watch</a>
                  <a href="#">camera</a>
                  <a href="#">mens clothing</a>
                  <a href="#">womens clothing</a>
                </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>Cart</a>
          </li>
        </ul>
      </div>
    </nav>
<!-- new section -->
<div id="content">
  <div class="container" style="padding: 0;">
    <div class="row d-flex justify-content-around">
      <div class="box-content">
        <div class="image-holder">
          <img src="img/collection-1.jpg" alt="First slide">
          <div class="text-holder text-center">
            <h2>WATCH</h2>
            <a href="#" class="shop-btn">6 PRODUCTS</a>
          </div>
        </div>
      </div>
      <div class="box-content">
        <div class="image-holder">
          <img src="img/collection-2.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <h2>BAGS</h2>
            <a href="#" class="shop-btn">12 products</a>
          </div>
        </div>
      </div>
      <div class="box-content">
        <div class="image-holder">
          <img src="img/collection-3.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <h2>CAMERA</h2>
            <a href="#" class="shop-btn">3 PRODUCTS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<?php include('assets/footer.html') ?>
<!-- Scripts  -->
<?php include('assets/scripts.html') ?>
</body>
</html>
