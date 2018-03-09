<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

        header("location:main.php");
}
if(empty($_POST["fname"]) || empty($_POST["pwd"])) {

  
}

?>

<?php include('assets/header.php')?>
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

<!-- Login Form here -->
    <form method="POST" action="verify.php" style="margin-top:30px;">
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <div class="col-md-12">
              <label for="right-label" class="right inline">Email</label>
            </div>
            <div class="col-md-12">
              <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="username">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="col-md-12">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
              <input type="submit" id="right-label" value="Login" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


            <!-- Footer -->
            <?php include('assets/footer.php') ?>
            <!-- Scripts -->
            <?php include('assets/scripts.php') ?>
  </body>
</html>
