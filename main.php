<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap CDN -->
  <link rel="stylesheet" type="text/css" href="css/home.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <!-- fontawesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
  <!--sr script  -->
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>
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
      <a class="navbar-brand mxauto" href="main.php">LOGO HERE</a>
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
          <!-- <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a> -->

        </ul>
      </div>
    </nav>
<!-- Carousel -->
<div class="section-carousel">
  <div id="carouselMain" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
      <li data-target="#carouselMain" data-slide-to="1"></li>
      <li data-target="#carouselMain" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
<!-- first carousel slide -->
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/carousel-two.jpeg" alt="First slide">
        <div class="carousel-caption second text-center">
          <h2 class="alt-font">Welcome to iteam shop</h2>
          <hr />
          <h2 class="uppercase-lg"><strong>HUGE SALE <br /><span>UP TO 70% OFF</span></strong></h2>
          <hr />
          <a href="products.php" class="primary-product-button one">Shop Men</a>
          <a href="products.php" class="primary-product-button two">Shop Women</a>
          <a href="products.php" class="primary-product-button three">Shop All</a>
        </div>
      </div>
      <!-- Second carousel slide -->
      <div class="carousel-item ">
        <img class="d-block w-100" src="img/carousel-1.jpg" alt="Second slide">
        <div class="carousel-caption one text-left">
          <h3 class="alt-font">Mens Clothing</h3>
        </div>
        <div class="carousel-caption two text-left">
          <h2 class="uppercase"><strong>HOT SUMMER <br /><span>FASHION</span></strong></h2>
        </div>
        <div class="carousel-caption three text-left">
          <hr />
          <a href="products.php" class="primary-product-button">Shop Now</a>
        </div>
      </div>
      <!-- third carousel slide -->
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carousel-three.jpeg" alt="Third slide">
        <div class="carousel-caption third-one text-right">
          <h3 class="alt-font">Womens Clothing</h3>
        </div>
        <div class="carousel-caption third-two text-right">
          <h2 class="uppercase"><strong>HOT SUMMER <br /><span>FASHION</span></strong></h2>
        </div>
        <div class="carousel-caption third-three text-right">
          <hr />
          <a href="products.php" class="primary-product-button">Shop Now</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
      <i class="cursor-icons" style="display: none;">left key</i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
      <i class="cursor-icons" style="display: none;">right key</i>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- collection of items under carousel -->
<div id="collections">
  <div class="container-fluid" style="padding: 0;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <div class="image-holder ">
          <img src="img/collection-1.jpg" alt="First slide">
          <div class="text-holder text-center">
            <strong>summer 2017</strong>
            <h2>new summer trends</h2>
            <a href="#" class="shop-btn">shop now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="image-holder ">
          <img src="img/collection-2.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <strong>summer 2017</strong>
            <h2>new summer trends</h2>
            <a href="#" class="shop-btn">shop now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="image-holder ">
          <img src="img/collection-3.jpeg" alt="First slide">
          <div class="text-holder text-center">
            <strong>summer 2017</strong>
            <h2>new summer trends</h2>
            <a href="#" class="shop-btn">shop now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Welcome to our shop -->
<div id="welcome">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>welcome to our shop</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <a href="#" class="about-btn">about us</a>
        <a href="#" class="shop-btn">shop now</a>
      </div>
    </div>
  </div>
</div>
<!-- featured items 3 items -->
<div class="featured-items-collection">
  <div class="container">
    <div class="text-heading col-auto text-center">
      <div class="text-holder">
        <!-- heading -->
        <h2>Featured Collections</h2>
            <hr />
      </div>
    </div>
    <div class="row d-flex justify-content-around">
      <div class="image-content one">
      <img src="img/1.jpg" alt="sample11"/>
      <div class="text-holder">
        <div><h2><i class="fab fa-instagram"></i></h2></div>
        <div><p>price</p></div>
        <a href="#"></a>
      </div>
      </div>
      <div class="image-content two">
      <img src="img/2.jpg" alt="sample12"/>
      <div class="text-holder">
        <div><h2><i class="fab fa-instagram"></i></h2></div>
          <div><p>price</p></div>
        <a href="#"></a>
      </div>
      </div>
      <div class="image-content three">
      <img src="img/3.jpg" alt="sample13"/>
      <div class="text-holder">
        <div><h2><i class="fab fa-instagram"></i></h2></div>
          <div><p>price</p></div>
        <a href="#"></a>
      </div>
      </div>
    </div>
    </div>
  </div>
    <!-- Gallery image -->
      <div class="bp-section">
        <div class="container">
          <div class="heading">
            <hr />
            <h2> BROWSE PRODUCTS</h2>
          </div>
        <main class="main1">
          <section class="info1 animate-info-1">
            <h2>A Collection</h2>
            <p>
              Lorem Ipsum
            </p>
            <a href="#" class="info-lnk">Learn More</a>
          </section>
          <figure class="figure1 animate-fig-one" style="margin: 0;">
            <img src="img/pic02.jpeg" class="figure-img" />
            <h2> bags</h2>
          </figure>
          <figure class="figure2 animate-fig-two" style="margin: 0;">
            <img src="img/pic07.jpeg" class="figure-img" />
          </figure>
          <figure class="figure3 animate-fig-three" style="margin: 0;">
            <img src="img/pic08.jpeg" class="figure-img" />
          </figure>
          <figure class="figure4 animate-fig-four" style="margin: 0;">
            <img src="img/pic09.jpeg" class="figure-img" />
          </figure>
          <figure class="figure5 animate-fig-five" style="margin: 0;">
            <img src="img/pic10.jpeg" class="figure-img" />
          </figure>
          <figure class="figure6" style="margin: 0;">
            <img src="img/pic11.jpeg" class="figure-img" />
          </figure>
          <section class="info2 animate-info-2">
          <h2>S Collection</h2>
            <p>
              Lorem Ipsum
            </p>
            <a href="#" class="info-link">Learn more</a>
          </section>
          <figure class="figure7 animate-fig-six" style="margin: 0;">
            <img src="img/pic13.jpeg" class="figure-img" />
          </figure>
          <figure class="figure8 animate-fig-seven" style="margin: 0;">
            <img src="img/pic14.jpeg" class="figure-img" />
          </figure>
        </main>
        </div>
      </div>
<!-- Parallax  section -->
<div class="parallax-heading-bg">
  <div class="container">
    <div class="tagline">
      <p>
        Sometimes it's easier to describe what we do throught images.
      </p>
    </div>
  </div>
</div>
<!-- Text list (feautured news) -->
<section id="info2">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="info-left">
          <h2>Info Block One</h2>
          <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="info-left-two">
          <h2>Info Block Two</h2>
          <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="info-right">
          <h2>Info Block One</h2>
          <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="info-right-two">
          <h2>Info Block Two</h2>
          <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Footer -->
  <?php include('assets/footer.php') ?>
    <!-- Scripts  -->
  <?php include('assets/scripts.php') ?>
  </body>
</html>
