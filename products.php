<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>


  <?php include('assets/header.php') ?>
  <body>

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
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>Cart</a>
          </li>
        </ul>
      </div>
    </nav>




    <div class="row d-flex justify-content-around">
      <div class="image-content">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }


          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="col-md-12 text-center">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img width="100px" height="100px" src="images/products/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';



              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
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
          ?>

                  <!-- Footer -->
                  <?php include('assets/footer.php') ?>
                  <!-- Scripts -->
                  <?php include('assets/scripts.php') ?>
  </body>
</html>
