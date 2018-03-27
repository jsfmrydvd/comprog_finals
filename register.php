<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}
include 'config.php';
$fnameErr  = "";
$lnameErr  = "";
$addrErr  = "";
$cityErr  = "";
$pinErr  = "";
$emailErr  = "";
$pwdErr  = "";
$verifyErr  = "";
$name = "/^[A-Z][a-zA-Z ]+$/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = " *This field is required!";
  }
  if (empty($_POST["lname"]) ) {
    $lnameErr = " *This field is required!";
  }
  if (empty($_POST["address"]) ) {
    $addrErr = " *This field is required!";
  }
  if (empty($_POST["city"]) ) {
    $cityErr = " *This field is required!";
  }
  if (empty($_POST["pin"]) ) {
    $pinErr = " *This field is required!";
  }
  if (empty($_POST["email"]) ) {
    $emailErr = " *This field is required!";
  }
  if (empty($_POST["pwd"]) ) {
    $pwdErr = " *This field is required!";
  }
  if (($_POST["pwd"]) != ($_POST["verifyPwd"]) ) {
          $verifyErr = " *Your password did not match!";
  }
  if (($_POST["fname"]) && ($_POST["lname"]) && ($_POST["address"]) && ($_POST["pin"]) && ($_POST["city"]) && ($_POST["email"]) && ($_POST["verifyPwd"]) && ($_POST["pwd"])) {

        $result = mysqli_query($mysqli,"SELECT `email` FROM `users` WHERE `email` = '".$_POST["email"]."'");
        if (mysqli_num_rows($result)){
            $emailErr = " *Email is already taken";
        }

        else if (($_POST["pwd"]) != ($_POST["verifyPwd"]) ) {
          $verifyErr = " *Your password did not match!";
          unset($_POST['verifyPwd']);
        }
        else if(strlen($_POST["pwd"]) < 8){
          $pwdErr = " *Password must be at least 8 characters";
         }
        else if(strlen($_POST["pin"]) < 11){
          $pinErr = " *This is not a valid phone number";
         }
        else if(substr($_POST["pin"], 0, 2) != "09") {
          $pinErr = " *This is not a valid phone number";
         }
        else if (ctype_alpha(str_replace(' ', '', $_POST["fname"])) == false) {
          $fnameErr = " *Name must contain letters only";
         }
        else if (ctype_alpha(str_replace(' ', '', $_POST["lname"])) == false) {
          $lnameErr = " *Name must contain letters only";
         }
        else{
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $address = $_POST["address"];
          $city = $_POST["city"];
          $pin = $_POST["pin"];
          $email = $_POST["email"];
          $pass = password_hash($_POST["pwd"],PASSWORD_DEFAULT);
          $mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', '$pin', '$email', '$pass')");
            echo 'Data inserted';
          header ("location:login.php");
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

    <form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="sign-up">
        <div class="container">
          <div class="row">
            <h1 class="col-md-12">Register Account</h1>
              <label for="first-name" class="label-holder col-md-12 text-center"><b>First Name</b></label>
              <div class="input-holder col-md-12">
                <input class="input-holder col-md-12" type="text" id="right-label" placeholder="Name" name="fname" value = <?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>>
                <span class="error" style="color:red"><?php echo $fnameErr;?></span>
              </div>
              <label for="last-name" class="label-holder col-md-12 text-center"><b>Last Name</b></label>
              <div class="input-holder col-md-12">
                <input class="input-holder col-md-12" type="text" id="right-label" placeholder="Last Name" name="lname" value = <?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>>
                <span class="error" style="color:red"><?php echo $lnameErr;?></span>
              </div>

              <label for="province" class="label-holder col-md-12 text-center"><b>Province</b></label>
              <div class="input-holder col-md-12">
                <input class="input-holder col-md-12" type="text" id="right-label" placeholder="Province" name="address" value = <?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>>
                <span class="error" style="color:red"><?php echo $addrErr;?></span>
              </div>

              <label for="city" class="label-holder col-md-12 text-center"><b>City</b></label>
              <div class="input-holder col-md-12">
                <input class="input-holder col-md-12" type="text" id="right-label" placeholder="City" name="city" value = <?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>>
                <span class="error" style="color:red"><?php echo $cityErr;?></span>
              </div>

              <label for="pin" class="label-holder col-md-12 text-center"><b>Phone Number</b></label>
              <div class="input-holder col-md-12">
                <input class="input-holder col-md-12" type="number" id="right-label" placeholder="Phone Number" name="pin" value = <?php echo isset($_POST['pin']) ? $_POST['pin'] : '' ?>>
                <span class="error" style="color:red"><?php echo $pinErr;?></span>
              </div>

              <label for="email" class="label-holder col-md-12 text-center"><b>Email</b></label>
              <div class="input-holder col-md-12">
              <input class="input-holder col-md-12" type="email" id="right-label" placeholder="email@gmail.com" name="email" value = <?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>>
              <span class="error" style="color:red"><?php echo $emailErr;?></span>
            </div>

            <label for="password" class="label-holder col-md-12 text-center"><b>Password</b></label>
            <div class="input-holder col-md-12">
              <input class="input-holder col-md-12" type="password" id="right-label" name="pwd">
              <span class="error" style="color:red"><?php echo $pwdErr;?></span>
            </div>

            <label for="repassword" class="label-holder col-md-12 text-center"><b>Repassword</b></label>
            <div class="input-holder col-md-12">
              <input class="input-holder col-md-12" type="password" id="right-label" name="verifyPwd">
              <span class="error" style="color:red"><?php echo $verifyErr;?></span>
            </div>
            <div class="button-holder-section col-md-12 text-center">
              <input class="button-type" type="submit" name="register" id="right-label" value="Register" >
              <input class="button-type" type="reset" id="right-label" value="Reset" >
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
