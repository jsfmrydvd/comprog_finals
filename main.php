<?php

if(session_id() == '' || !isset($_SESSION)){
  session_start();
}
?>
<!DOCTYPE html>
<html ng-app="myApp">
<head>
  <?php include('assets/head.html') ?>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:0px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top: 0px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: white;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #fff;
    color: white;
}
  </style>
</head>
  <body>
    <!-- Content of the the top -->
    <header>
      <?php include('assets/header-top.html') ?>
      <!-- Content of the secondary -->
      <?php include('assets/header-primary.php') ?>
    </header>
    <!-- Navbar here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black" ng-controller="loginCtrl">
      <!-- Logo or name-->
      <a class="navbar-brand mxauto" href="main.php">{{logo}}</a>
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
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>Cart</a>
          </li>
        </ul>
      </div>
    </nav>
  <!-- Carousel Section -->
  <?php include('assets/carousel.html') ?>
  <!-- collection of items under carousel -->
  <?php include('assets/collections.html') ?>
  <!-- Welcome to our shop -->
  <?php include('assets/welcome.html') ?>
  <!-- featured items 3 items -->
  <?php include('assets/featured.html') ?>
  <!-- Parallax  section -->
  <?php include('assets/parallax.html') ?>
  <!-- Gallery image -->
  <?php include('assets/gallery.html') ?>
  <!-- Text list (feautured news) -->
  <?php include('assets/featured-news.html') ?>
  <!-- Footer -->
  <?php include('assets/footer.html') ?>

  <h2>Animated Modal with Header and Footer</h2>

  <!-- Trigger/Open The Modal -->
  <button id="myBtn">Open Modal</button>
<div class="border">
  <img id="myBtn" width="300px" height="300px" src="img/featured-2.jpeg" />
</div>
  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <!-- <h2>Modal Header</h2> -->
      </div>
      <div class="modal-body">
        <div class="image-conten">
          <img width="400px" height="350px" style="object-fit: cover;"src="img/watch-1.jpeg" alt="sample11" />
          <div class="text-holder">
            <div>
    <p><a href="update-cart.php?action=add&id=1"><input class="add" type="submit" value="Add To Cart"/></a></p>';
            <div>
              <p>{{price}}</p>
            </div>
            <a href="#"></a>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <h3>Modal Footer</h3> -->
      </div>
    </div>
  </div>


  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <!-- Scripts  -->
  <?php include('assets/scripts.html') ?>
  </body>
</html>
