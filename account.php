<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=main.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
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
          <li class="nav-item active">
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

    <div class="heading-content-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="text-primary col-md-12 text-center">
            <?php echo '<h3>Hi <span>' .$_SESSION['fname'] .'</span></h3>'; ?>
            <h5>Account Details</h5>
            <p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
              <p>You can try our <span style="font-weight: 600">ADMIN PAGE</span> by logging in email:<span style="font-weight: 600">test@gmail.com</span><span>&</span>password: <span style="font-weight: 600">password</span></p>
          </div>
        </div>
      </div>
    </div>


    <form method="POST" action="update.php">
        <div class="sign-up">
          <div class="container">
            <div class="row">
              <h1 class="col-md-12 text-center" style>Edit Account</h1>


              <?php

                $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
                  echo ' <label for="first-name" class="label-holder col-md-12 text-center"><b>First Name</b></label>';
                  echo'     <div class="input-holder col-md-12">';
                  echo '<input class="input-holder col-md-12" type="text" id="right-label" placeholder="'. $obj->fname. '" name="fname">';
                  echo '</div>';

                  echo ' <label for="last-name" class="label-holder col-md-12 text-center"><b>Last Name</b></label>';
                  echo'     <div class="input-holder col-md-12">';
                  echo '<input class="input-holder col-md-12" type="text" id="right-label" placeholder="'. $obj->lname. '" name="lname">';
                  echo '</div>';


                  echo ' <label for="address" class="label-holder col-md-12 text-center"><b>Province</b></label>';
                  echo'     <div class="input-holder col-md-12">';
                  echo '<input class="input-holder col-md-12" type="text" id="right-label" placeholder="'. $obj->address. '" name="address">';
                  echo '</div>';

                  echo ' <label for="city" class="label-holder col-md-12 text-center"><b>City</b></label>';
                  echo'     <div class="input-holder col-md-12">';
                  echo '<input class="input-holder col-md-12" type="text" id="right-label" placeholder="'. $obj->city. '" name="city">';
                  echo '</div>';


                  echo ' <label for="pin" class="label-holder col-md-12 text-center"><b>Phone Number</b></label>';
                  echo'     <div class="input-holder col-md-12">';
                  echo '<input class="input-holder col-md-12" type="text" id="right-label" placeholder="'. $obj->pin. '" name="pin">';
                  echo '</div>';

                  echo ' <label for="email" class="label-holder col-md-12 text-center"><b>Email</b></label>';
                  echo'     <div class="input-holder col-md-12">';
                  echo '<input class="input-holder col-md-12" type="email" id="right-label" placeholder="'. $obj->email. '" name="email">';
                  echo '</div>';
              }


              echo ' <label for="password" class="label-holder col-md-12 text-center"><b>Password</b></label>';
              echo'     <div class="input-holder col-md-12">';
              echo '<input class="input-holder col-md-12" type="password" id="right-label" name="pwd">';

              echo '</div>';
          ?>

            <div class="button-holder-section col-md-12 text-center">
              <input class="button-type" type="submit" id="right-label" value="Update" >
              <input class="button-type" type="reset" id="right-label" value="Reset">
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Footer -->
    <?php include('assets/footer.html') ?>
    <!-- cart modal -->
    <?php include('assets/cart-modal.php') ?>
    <!-- Scripts  -->
    <?php include('assets/scripts.html') ?>
  </body>
</html>
