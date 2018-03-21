<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:fail.php");
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
        <li class="nav-item active">
          <a class="nav-link" href="orders.php">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="dropdown">
            <button class="dropbtn">Collection</button>
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



  <div class="background-1">
    <div class="container">
      <div class="text-heading col-auto text-center">
        <div class="text-holder1">
          <h2>ORDERS</h2>
              <hr />
        </div>
      </div>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '<p><hr></p>';
            }
          }
        ?>
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
