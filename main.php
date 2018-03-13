<?php

if(session_id() == '' || !isset($_SESSION)){
  session_start();
}
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-black" ng-controller="loginCtrl">
      <!-- Logo or name-->
      <a class="navbar-brand mxauto" href="main.php">{{logo}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
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
  <!-- Carousel Section -->
  <?php include('assets/carousel.html') ?>
  <!-- collection of items under carousel -->
  <?php include('assets/collections.html') ?>
  <!-- Welcome to our shop -->
  <?php include('assets/welcome.html') ?>
  <!-- featured items 3 items -->
  <?php include('assets/featured.html') ?>
  <!-- Parallax  section -->
  <?php include('assets/parallax.html') ?>
  <!-- Gallery image -->
  <?php include('assets/gallery.html') ?>
  <!-- Text list (feautured news) -->
  <?php include('assets/featured-news.html') ?>
  <!-- Footer -->
  <?php include('assets/footer.html') ?>
  <!-- Scripts  -->
  <?php include('assets/scripts.html') ?>
  </body>
</html>
