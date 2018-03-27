<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(isset($_SESSION["username"])){

      header("location:main.php");

}


include 'config.php';
$loginErr  = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"]) || empty($_POST["pwd"]) ) {
    $loginErr = " *Both field is required!";
  }

  else{
       $username=mysqli_real_escape_string($mysqli,$_POST["username"]);
        $password=mysqli_real_escape_string($mysqli,$_POST["pwd"]);
        $sql="SELECT * FROM users WHERE email='$username'";
        $result=mysqli_query($mysqli,$sql);
        $count=mysqli_num_rows($result);

      if($count==1)
      {
        $sql2="SELECT password FROM users WHERE email='$username'";
        $result2=mysqli_query($mysqli,$sql2);
        $row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
        $pass = $row['password'];
        if(password_verify($password, $pass)){
        $result3 = $mysqli->query('SELECT id, email, password, fname, type from users order by id asc');
        $obj = $result->fetch_object();

          $_SESSION['username'] = $username;
          $_SESSION['type'] = $obj->type;
          $_SESSION['id'] = $obj->id;
          $_SESSION['fname'] = $obj->fname;
          header("location:main.php");

        }
        else
         $loginErr = " *Your email or password is invalid";
      }
      else
      {
        $loginErr = " *Your email or password is invalid";
      }
    }
  }
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

<!-- Login Form here -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="margin-top:30px;">
      <div class="sign-up">
        <div class="container">
          <div class="row">
              <h1 class="col-md-12">Login</h1>
              <span class="error col-md-12 text-center" style="color:red"><?php echo $loginErr;?></span><br>
            <label for="email" class="label-holder col-md-12 text-center"><b>Email</b></label>
          <div class="input-holder col-md-12">
              <input class="input-holder col-md-12" type="email" id="right-label" placeholder="email@gmail.com" name="username">
            </div>
            <label for="password" class="label-holder col-md-12 text-center"><b>Password</b></label>
            <div class="input-holder col-md-12">
              <input class="input-holder col-md-12" type="password" id="right-label" name="pwd">
            </div>
            <div class="button-holder-section col-md-12 text-center">
              <input class="button-type " type="submit" id="right-label" value="Login">
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
