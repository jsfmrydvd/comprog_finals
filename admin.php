<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

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
            <a class="nav-link active" href="about.php">About</a>
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
            <h2>Admin Page</h2>
                <hr />
          </div>
        </div>
    <div class="row d-flex justify-content-around">
        <?php
          $result = $mysqli->query("SELECT * from camera order by id asc");
          $result1 = $mysqli->query("SELECT * from watch order by id asc");
          $result2 = $mysqli->query("SELECT * from bags order by id asc");
          $result3 = $mysqli->query("SELECT * from mens order by id asc");
          $result4 = $mysqli->query("SELECT * from womens order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="image-content-products">';
              echo '<h3>'.$obj->product_name.'</h3>';
              echo '<img src="img/camera/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>New Qty</strong>:</p>';
              echo '<div class="large-6 columns" style="margin-bottom: 30px;">';
              echo '<input type="number" name="quantity[]"/>';
              echo '<input type="submit" name="quantity[]"/>';
              echo '</div>';
              echo '</div>';
            }
          }
          if($result1) {
            while($obj = $result1->fetch_object()) {
              echo '<div class="image-content-products">';
              echo '<h3>'.$obj->product_name.'</h3>';
              echo '<img src="img/watch/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>New Qty</strong>:</p>';
              echo '<div class="large-6 columns" style="margin-bottom: 30px;">';
              echo '<input type="number" name="quantity[]"/>';
              echo '<input type="submit" name="quantity[]"/>';
              echo '</div>';
              echo '</div>';
            }
          }
          if($result2) {
            while($obj = $result2->fetch_object()) {
              echo '<div class="image-content-products">';
              echo '<h3>'.$obj->product_name.'</h3>';
              echo '<img src="img/bags/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>New Qty</strong>:</p>';
              echo '<div class="large-6 columns" style="margin-bottom: 30px;">';
              echo '<input type="number" name="quantity[]"/>';
              echo '<input type="submit" name="quantity[]"/>';
              echo '</div>';
              echo '</div>';
            }
          }
          if($result3) {
            while($obj = $result3->fetch_object()) {
              echo '<div class="image-content-products">';
              echo '<h3>'.$obj->product_name.'</h3>';
              echo '<img src="img/mens/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>New Qty</strong>:</p>';
              echo '<div class="large-6 columns" style="margin-bottom: 30px;">';
              echo '<input type="number" name="quantity[]"/>';
              echo '<input type="submit" name="quantity[]"/>';
              echo '</div>';
              echo '</div>';
            }
          }
          if($result4) {
            while($obj = $result4->fetch_object()) {
              echo '<div class="image-content-products">';
              echo '<h3>'.$obj->product_name.'</h3>';
              echo '<img src="img/womens/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>New Qty</strong>:</p>';
              echo '<div class="large-6 columns" style="margin-bottom: 30px;">';
              echo '<input type="number" name="quantity[]"/>';
              echo '<input type="submit" name="quantity[]"/>';
              echo '</div>';
              echo '</div>';
            }
          }
        ?>
      </div>
    </div>
  </div>


            <!-- Footer -->
            <?php include('assets/footer.html') ?>
            <!-- cart modal -->
            <?php include('assets/cart-modal.php') ?>
            <!-- Scripts -->
            <?php include('assets/scripts.html') ?>
  </body>
</html>
