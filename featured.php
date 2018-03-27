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
      <a class="image-show cart" data-modal="modalCart"><i class="fas fa-shopping-cart"></i></a>
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
            <a class="nav-link" href="orders.php">My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="dropdown">
              <a class="dropbtn" href="featured.php">Collection</a>
                <div class="dropdown-content">
                  <a href="watch.php">watch</a>
                  <a href="bags.php">bags</a>
                  <a href="camera.php">camera</a>
                  <a href="mens.php">mens clothing</a>
                  <a href="womens.php">womens clothing</a>
                </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link image-show cart" data-modal="modalCart"><i class="fas fa-shopping-cart" data-modal="modalCart"></i>Cart</a>
          </li>
        </ul>
      </div>
    </nav>
<!-- new section -->
<div class="featured-items-collection products" style="padding-top: 50px; padding-bottom: 0;">
  <div class="container">
    <div class="text-heading col-auto text-center">
      <div class="text-holder">
        <!-- heading -->
        <h2 class="collections">Collections</h2>
            <hr />
      </div>
    </div>
  </div>
</div>
</div>
<div id="content">
  <div class="container" style="padding: 0;">
    <div class="row d-flex justify-content-around" style="margin: 0;">
      <div class="box-content" ng-controller="loginCtrl">
        <div class="image-holder" onclick="window.location.href='watch.php';">
          <img src="img/watch-4.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <h2>WATCH</h2>
            <a href="watch.php" class="shop-btn">6 PRODUCTS</a>
          </div>
        </div>
      </div>
      <div class="box-content">
        <div class="image-holder" onclick="window.location.href='bags.php';">
          <img src="img/collection-5.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <h2>BAGS</h2>
            <a href="bags.php" class="shop-btn">5 PRODUCTS</a>
          </div>
        </div>
      </div>
      <div class="box-content">
        <div class="image-holder" onclick="window.location.href='camera.php';" >
          <img src="img/collection-4.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <h2>CAMERA</h2>
            <a href="camera.php" class="shop-btn">6 PRODUCTS</a>
          </div>
        </div>
      </div>
      <div class="box-content">
        <div class="image-holder" onclick="window.location.href='mens.php';" >
          <img src="img/featured-mens.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <h2>MENS</h2>
            <a href="mens.php" class="shop-btn">6 PRODUCTS</a>
          </div>
        </div>
      </div>
      <div class="box-content">
        <div class="image-holder" onclick="window.location.href='womens.php';" >
          <img src="img/featured-womens.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <h2>WOMENS</h2>
            <a href="womens.php" class="shop-btn">4 PRODUCTS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<?php include('assets/footer.html') ?>
<!-- cart modal -->
<?php include('assets/cart-modal.php') ?>
<!-- Scripts  -->
<?php include('assets/scripts.html') ?>
</body>
</html>
