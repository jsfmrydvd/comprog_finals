<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:fail.php");
}
include 'config.php';
?>

<?php include('assets/header.php') ?>
<body>
  <!-- Content of the the top -->
  <header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span>new now: our latest products</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Content of the secondary -->
  <div class="header-primary">
    <div class="container-fluid">
      <div class="col-md-12 login-head d-flex text-right">
        <div class="mr-auto p-2"></div>
          <?php
            if(isset($_SESSION['username'])){

              echo '<div class="p-2"><a href="account.php" class="header-login"><i class="fas fa-user"></i></a></div>';
              echo '<div class="p-2"><a href="logout.php" class="header-login">Log Out</a></div>';
            }
            else{
              echo '<div class="mr-4 p-1"><a href="login.php" class="header-login">Log In</a></div>';
              echo '<div class="p-1"><a href="register.php" class="header-login">Sign up</a></div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Navbar here -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <!-- Logo or name-->
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
          <a class="nav-link" href="products.php">Products</a>
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
            <?php include('assets/footer.php') ?>
            <!-- Scripts -->
            <?php include('assets/scripts.php') ?>
  </body>
</html>
