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

    <div class="row" style="margin-top:10px;">
      <div class="col-md-12 text-center">
        <!-- <div class="table-contents" style="border: 2px solid black; background-color: rgba(0,0,0,.58);"> -->
        <?php
        if(isset($_SESSION['cart'])) {
          echo '<p><h3>Your Shopping Cart</h3></p>';
        }else {
          echo '<p><h3>Your Shopping Cart is Empty</h3></p>';
        }
          echo '<hr />';
          if(isset($_SESSION['cart'])) {
            $total = 0;
            echo '<table style="margin: auto;">';
            echo '<tr>';
            echo '<th>Product</th>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $camera = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM camera WHERE id = ".$product_id);
            $watch = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM watch WHERE id = ".$product_id);
            $bags = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM bags WHERE id = ".$product_id);
            $mens = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM mens WHERE id = ".$product_id);
            $womens = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM womens WHERE id = ".$product_id);


            if($camera){

              while($obj = $camera->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td><img width="100px" height="100px" src="img/slr/'.$obj->product_img_name.'"/></td>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
            if($watch){

              while($obj = $watch->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td><img width="100px" height="100px" src="img/watch/'.$obj->product_img_name.'"/></td>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
            if($bags){

              while($obj = $bags->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td><img width="100px" height="100px" src="img/bags/'.$obj->product_img_name.'"/></td>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
            if($mens){

              while($obj = $mens->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td><img width="100px" height="100px" src="img/mens/'.$obj->product_img_name.'"/></td>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
            if($womens){

              while($obj = $womens->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td><img width="100px" height="100px" src="img/womens/'.$obj->product_img_name.'"/></td>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
          }
          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';
          echo '<tr>';
              echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a><a href="featured.php" class="button [secondary success alert]">Continue Shopping</a>';
              if(isset($_SESSION['username'])) {
                echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
              }
              else {
                echo '<a href="login.php"><button style="float:right;">Login</button></a>';
              }
              echo '</td>';
            echo '</tr>';
          echo '</table>';
        }

        else {
          echo '<a href="main.php">Continue Shopping Here</a>';
        }

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
