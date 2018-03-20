<div class="header-primary">
  <div class="container-fluid">
    <div class="col-md-12 login-head d-flex text-right">
      <div class="mr-auto p-2"></div>
        <?php
          if(isset($_SESSION['username'])){

            echo '<div class="p-2"><a href="account.php" class="header-login"><i class="fas fa-user" style="margin-right: 10px;"></i>Account</a></div>';
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
