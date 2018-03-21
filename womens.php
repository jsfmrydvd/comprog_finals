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
    <div class="featured-items-collection products">
      <div class="container">
        <div class="text-heading col-auto text-center">
          <div class="text-holder">
            <!-- heading -->
            <h2>Womens Clothing</h2>
                <hr />
          </div>
        </div>
    <div class="row d-flex justify-content-around">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $womens = $mysqli->query('SELECT * FROM womens');
          if($womens === FALSE){
            die(mysql_error());
          }

          if($womens){

            while($obj = $womens->fetch_object()) {

              echo '<div class="image-content-products">';
              echo '<h3>'.$obj->product_name.'</h3>';
              echo '<img src="img/womens/'.$obj->product_img_name.'"/>';
              echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
              echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
              echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
              echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';
              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }
          }
          $_SESSION['product_id'] = $product_id;
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          ?>
    <!-- Footer -->
    <?php include('assets/footer.html') ?>
    <!-- Scripts  -->
    <?php include('assets/scripts.html') ?>
  </body>
</html>
