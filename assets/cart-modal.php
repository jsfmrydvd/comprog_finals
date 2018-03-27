<div id="modalCart" class="modal">
  <div class="modal-content-cart">
        <div class="cart-content col-md-12">
          <?php
              if(isset($_SESSION['cart'])) {
                echo '<p><h3>Your Shopping Cart</h3></p>';
              }else {
                echo '<p><h3>Your Shopping Cart is Empty</h3></p>';
              }
            echo '<hr />';
            if(isset($_SESSION['cart'])) {
              $total = 0;
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
                  echo ' <div class="camera-content">';
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                  echo ' <div class="image-content col-md-6">';
                  echo '<img src="img/slr/'.$obj->product_img_name.'"/>';
                  echo '  </div>';
                  echo ' <div class="text-heading col-md-6">';
                  echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                  echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                  echo '<p>Quantity<span>'.$quantity.'</span>&nbsp';
                  echo '<p><a class="button plus" href="cart.php">EDIT</a>&nbsp;</p>';
                  echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  <hr />';

                }
              }
              if($watch){

                while($obj = $watch->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="camera-content">';
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                  echo ' <div class="image-content col-md-6">';
                  echo '<img src="img/watch/'.$obj->product_img_name.'"/>';
                  echo '  </div>';
                  echo ' <div class="text-heading col-md-6">';
                  echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                  echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                  echo '<p>Quantity<span>'.$quantity.'</span>&nbsp';
                  echo '<p><a class="button plus" href="cart.php">EDIT</a>&nbsp;</p>';
                  echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  <hr />';

                }
              }
              if($bags){
                while($obj = $bags->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="camera-content">';
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                  echo ' <div class="image-content col-md-6">';
                  echo '<img src="img/bags/'.$obj->product_img_name.'"/>';
                  echo '  </div>';
                  echo ' <div class="text-heading col-md-6">';
                  echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                  echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                  echo '<p>Quantity<span>'.$quantity.'</span>&nbsp';
                  echo '<p><a class="button plus" href="cart.php">EDIT</a>&nbsp;</p>';
                  echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  <hr />';

                }
              }
              if($mens){

                while($obj = $mens->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="camera-content">';
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                  echo ' <div class="image-content col-md-6">';
                  echo '<img src="img/mens/'.$obj->product_img_name.'"/>';
                  echo '  </div>';
                  echo ' <div class="text-heading col-md-6">';
                  echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                  echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                  echo '<p>Quantity<span>'.$quantity.'</span>&nbsp';
                  echo '<p><a class="button plus" href="cart.php">EDIT</a>&nbsp;</p>';
                  echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  <hr />';

                }
              }
              if($womens){

                while($obj = $womens->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="camera-content">';
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                  echo ' <div class="image-content col-md-6">';
                  echo '<img src="img/womens/'.$obj->product_img_name.'"/>';
                  echo '  </div>';
                  echo ' <div class="text-heading col-md-6">';
                  echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                  echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                  echo '<p>Quantity<span>'.$quantity.'</span>&nbsp';
                  echo '<p><a class="button plus" href="cart.php">EDIT</a>&nbsp;</p>';
                  echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  </div>';
                  echo '  <hr />';
                }
              }
            }
                    echo ' <div class="text-total">';
                    echo '<p style="text-transform: uppercase;font-weight: lighter;">Total: <span style="font-weight: bold; margin-left: 10px;">'.$total.'</span></p>';
                    echo '  </div>';
                    echo '  </div>';
                    echo '<div class="content-total"><h2><a href="update-cart.php?action=empty" class="button">Empty Cart</a></h2>
                    <h2><a href="featured.php" class="button">Continue Shopping</a></h2>';
                if(isset($_SESSION['username'])) {
                  echo '<a href="orders-update.php"><button>COD</button></a>';
                }
                else {
                  echo '<a href="login.php"><button>Login</button></a>';
                }
                echo '</div>';

          }
          else {
            echo '<a href="main.php">Continue Shopping Here</a>';
          }
            ?>
        </div>
        <div class="cart-button">
          <div class="button">
            <a class="close" style="position: absolute; top: 0; right: 10px;">&times;</a>
          </div>
          <div class="content-modal">
      </div>
    </div>
  </div>
</div>
