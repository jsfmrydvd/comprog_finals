<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Activity 5</title>
  <link rel="stylesheet" type="text/css" href="css/home.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap CDN -->
  <!-- fontawesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

  <style type="text/css">

      * {
          margin: 0;
          padding: 0;
      }
      body {
          font-family: 'Open Sans', Arial, sans-serif;
          font-weight: 700;
      }
      .welcome-section {
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          background-color: #000;
          overflow: hidden;
      }
      .welcome-section .content-wrap {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate3d(-50%, -50%, 0);
      }
      .welcome-section .content-wrap .fly-in-text {
          list-style: none;
      }
      .welcome-section .content-wrap .fly-in-text li {
          display: inline-block;
          margin-right: 30px;
          font-size: 5em;
          color: #fff;
          opacity: 1;
          transition: all 2s ease;
          font-family: monospace, sans-serif;
      }
      .welcome-section .content-wrap .fly-in-text li:last-child {
          margin-right: 0;
      }
      .welcome-section .content-wrap .enter-button {
          display: block;
          text-align: center;
          font-size: 1em;
          text-decoration: none;
          text-transform: uppercase;
          color: #22c9ec;
          opacity: 1;
          transition: all 1s ease 2s;
      }

      .welcome-section.content-hidden .content-wrap .fly-in-text li { opacity: 0; }
      .welcome-section.content-hidden .content-wrap .fly-in-text li:nth-child(1) { transform: translate3d(-100px, 0, 0); }
      .welcome-section.content-hidden .content-wrap .fly-in-text li:nth-child(2) { transform: translate3d(100px, 0, 0); }
      .welcome-section.content-hidden .content-wrap .enter-button { opacity: 0; transform: translate3d(0, -30px, 0); }

      @media (min-width: 800px) {
          .welcome-section .content-wrap .fly-in-text li { font-size: 10em; }
          .welcome-section .content-wrap .enter-button { font-size: 1.5em; }
      }
  </style>
</head>
  <body>
    <!-- Content of the index.php -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"/>ITEAM STORE</a>
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
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">View Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <?php
          if(isset($_SESSION['username'])){
            echo '<li class="nav-item ml-2 mx-2"><a href="account.php" class="nav-link"><i class="fas fa-user"></i>Your Account</a></li>';
            echo '<li class="nav-item ml-2 mx-2"><a href="logout.php" class="nav-link"><i class="fas fa-shopping-cart"></i>Log Out</a></li>';
          }
          else{
            echo '<li class="nav-item ml-2 mx-2"><a href="login.php" class="nav-link">Log In</a></li>';
            echo '<li class="nav-item ml-2 mx-2"><a href="register.php" class="nav-link">Register</a></li>';
          }
          ?>
        </ul>
      </div>
    </nav>
    </header>

  <!-- Carousel -->
  <div class="section-carousel">
    <div id="carouselMain" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
        <li data-target="#carouselMain" data-slide-to="1"></li>
        <li data-target="#carouselMain" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/carousel1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/pic11.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/pic02.jpeg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
      <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<!-- Footer -->
    <footer>
      <div class="text-footer">
        <span class="text-left">&copy; Comprog 2. All Rights Reserved</span>
        <span class="text-right"><a href="#">Who Designed This Website?</a></span>
      </div>
    </footer>

    <!-- Welcome Screen before the content -->
    <div class="welcome-section content-hidden">
        <div class="content-wrap">
            <ul class="fly-in-text">
                <li>I</li>
                <li>TEAM</li>
            </ul>
            <a href="#" class="enter-button">Enter</a>
        </div>
    </div>
    <!-- Scripts  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/top.js"></script>
  </body>
</html>
