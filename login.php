<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:main.php");
}
if(empty($_POST["fname"]) || empty($_POST["pwd"])) {


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
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
      <!-- Logo or name-->
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

<!-- Login Form here -->
    <form method="POST" action="verify.php" style="margin-top:30px;">
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <div class="col-md-12">
              <label for="right-label" class="right inline">Email</label>
            </div>
            <div class="col-md-12">
              <input type="email" id="right-label" placeholder="email@gmail.com" name="username">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="col-md-12">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
              <input type="submit" id="right-label" value="Login" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Footer -->
    <?php include('assets/footer.html') ?>
    <!-- Scripts  -->
    <?php include('assets/scripts.html') ?>
  </body>
</html>
