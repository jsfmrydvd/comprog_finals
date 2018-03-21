<div id="modalCart" class="modal">
  <div class="modal-content">
        <div class="cart-content col-md-12">
          <?php
            echo '<p><h3>Your Shopping Cart</h3></p>';
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
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                echo ' <div class="col-md-12">';
                    echo '<img style="object-fit: cover;width: 100%;height: auto;" src="img/slr/'.$obj->product_img_name.'"/>';
                echo '  </div>';
                  echo ' <div class="text-heading col-md-12">';
                echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                echo '<p>Quantity<span>'.$quantity.'</span>&nbsp;<div class="border-cart"><a class="button [secondary success alert]" style="padding:22px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></div></p>';
                echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                    echo '  <hr />';
                    echo '  </div>';


                }
              }
              if($watch){

                while($obj = $watch->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                echo ' <div class="col-md-12">';
                    echo '<img style="object-fit: cover;width: 100%;height: auto;" src="img/watch/'.$obj->product_img_name.'"/>';
                echo '  </div>';
                  echo ' <div class="text-heading col-md-12">';
                echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                echo '<p>Quantity<span>'.$quantity.'</span>&nbsp;<div class="border-cart"><a class="button [secondary success alert]" style="padding:22px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></div></p>';
                echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                    echo '  <hr />';
                    echo '  </div>';


                }
              }
              if($bags){

                while($obj = $bags->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                echo ' <div class="col-md-12">';
                    echo '<img style="object-fit: cover;width: 100%;height: auto;" src="img/bags/'.$obj->product_img_name.'"/>';
                echo '  </div>';
                  echo ' <div class="text-heading col-md-12">';
                echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                echo '<p>Quantity<span>'.$quantity.'</span>&nbsp;<div class="border-cart"><a class="button [secondary success alert]" style="padding:22px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></div></p>';
                echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                    echo '  <hr />';
                    echo '  </div>';


                }
              }
              if($mens){

                while($obj = $mens->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                echo ' <div class="col-md-12">';
                    echo '<img style="object-fit: cover;width: 100%;height: auto;" src="img/mens/'.$obj->product_img_name.'"/>';
                echo '  </div>';
                  echo ' <div class="text-heading col-md-12">';
                echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                echo '<p>Quantity<span>'.$quantity.'</span>&nbsp;<div class="border-cart"><a class="button [secondary success alert]" style="padding:22px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></div></p>';
                echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                    echo '  <hr />';
                    echo '  </div>';


                }
              }
              if($womens){

                while($obj = $womens->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost
                  echo ' <div class="container">';
                  echo ' <div class="row">';
                echo ' <div class="col-md-12">';
                    echo '<img style="object-fit: cover;width: 100%;height: auto;" src="img/womens/'.$obj->product_img_name.'"/>';
                echo '  </div>';
                  echo ' <div class="text-heading col-md-12">';
                echo '<p>Code:<span>'.$obj->product_code.'</span></p>';
                echo '<p>Name:<span>'.$obj->product_name.'</span></p>';
                echo '<p>Quantity<span>'.$quantity.'</span>&nbsp;<div class="border-cart"><a class="button [secondary success alert]" style="padding:22px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></div></p>';
                echo '<p>Cost:<span>'.$currency.$cost.'</span></p>';
                    echo '  <hr />';
                    echo '  </div>';


                }
              }
            }
                    echo ' <div class="text-total">';
                    echo '<p style="text-transform: uppercase;font-weight: lighter;">Total: <span style="font-weight: bold; margin-left: 10px;">'.$total.'</span></p>';
                    echo '  </div>';
                    echo '  </div>';
                    echo '  </div>';
                echo '<p class="content-total"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a><a href="featured.php" class="button [secondary success alert]">Continue Shopping</a>';
                if(isset($_SESSION['username'])) {
                  echo '<a href="orders-update.php"><button>COD</button></a>';
                }
                else {
                  echo '<a href="login.php"><button>Login</button></a>';
                }
                echo '</p>';

          }
          else {
            echo "You have no items in your shopping cart.";
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
