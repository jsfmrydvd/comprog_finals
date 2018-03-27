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
          <li class="nav-item active">
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
      <!-- Contact text here -->
      <div class="contact-heading-section" ng-controller="loginCtrl">
        <div class="container">
          <div class="text-heading col-auto text-center">
            <div class="text-holder">
              <!-- heading -->
              <h2>The Team</h2>
              <hr />
            </div>
          </div>
          <div class="row d-flex justify-content-around">
            <div class="image-content">
              <img width="200px" height="200px" src="img/team/josef.jpg" alt="sample11" />
              <div class="text-holder">
                <h4>Josef Mary David</h4>
                  <p>frontend/backend</p>
              <div class="icon-holder">
                <a href="https://twitter.com/jsfmrydvd"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/jsfmrydvd"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:josefmarydavid@gmail.com"><i class="fab fa-google"></i></a>
              </div>

              </div>
            </div>
            <div class="image-content">
              <img width="200px" height="200px" src="img/team/april.jpg" alt="sample11" />
              <div class="text-holder">
                <h4>April Joie Arazo</h4>
                  <p>frontend/backend</p>
                  <div class="icon-holder">
                    <a href="https://twitter.com/arazoapril"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/apriljoie.arazo"><i class="fab fa-facebook-f"></i></a>
                    <a href="mailto:aprilarazo0426@gmail.com"><i class="fab fa-google"></i></a>
                  </div>
              </div>
            </div>
            <div class="image-content">
              <img width="200px" height="200px" src="img/team/giselle.jpg" alt="sample11" />
              <div class="text-holder">
                <h4>Giselle Ayson</h4>
                  <p>frontend/backend</p>
                  <div class="icon-holder">
                    <a href="https://twitter.com/giseellllle"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/giselleayson"><i class="fab fa-facebook-f"></i></a>
                    <a href="mailto:giselleayson@yahoo.com"><i class="fab fa-google"></i></a>
                  </div>
              </div>
            </div>
            <div class="image-content">
              <img width="200px" height="200px" src="img/team/maico.jpg" alt="sample11" />
              <div class="text-holder">
                <h4>Maico Degorio</h4>
                  <p>frontend</p>
                  <div class="icon-holder">
                    <a href="https://twitter.com/maicolicious"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/Maicolicious"><i class="fab fa-facebook-f"></i></a>
                    <a href="mailto:maicodegorio06@gmail.com"><i class="fab fa-google"></i></a>
                  </div>
              </div>
            </div>
            <div class="image-content">
              <img width="200px" height="200px" src="img/team/celine.jpg" alt="sample11" />
              <div class="text-holder">
                <h4>Celine Joy Salac</h4>
                  <p>frontend</p>
                  <div class="icon-holder">
                    <a href="https://twitter.com/salaccln"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/salaccln"><i class="fab fa-facebook-f"></i></a>
                    <a href="mailto:salacceline@gmail.com"><i class="fab fa-google"></i></a>
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
