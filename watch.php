<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
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
      <a class="navbar-brand mxauto" href="main.php">LOGO DITO HEHE</a>
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
                  <a href="watch.php">watch</a>
                  <a href="camera.php">camera</a>
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



    <div class="featured-items-collection products">
      <div class="container">
        <div class="text-heading col-auto text-center">
          <div class="text-holder">
            <!-- heading -->
            <h2>Watch</h2>
                <hr />
          </div>
        </div>
    <div class="row d-flex justify-content-around">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM watch');
          if($result === FALSE){
            die(mysql_error());
          }


          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="image-content-products">';
              echo '<h3>'.$obj->product_name.'</h3>';
              echo '<img src="img/'.$obj->product_img_name.'"/>';
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
