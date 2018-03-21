<div id="modalCart" class="modal">
  <div class="modal-content">
        <div class="image-content col-md-12">
          <?php
            echo '<p><h3>Your Shopping Cart</h3></p>';
            echo '<hr />';
            if(isset($_SESSION['cart'])) {
              $total = 0;
              echo '<table>';
              echo '<tr>';
              echo '<th>Product</th>';
              echo '<th>Code</th>';
              echo '<th>Name</th>';
              echo '<th>Quantity</th>';
              echo '<th>Cost</th>';
              echo '</tr>';
              foreach($_SESSION['cart'] as $product_id => $quantity) {
              $camera = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM camera WHERE id = ".$product_id);
              $watch = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM watch WHERE id = ".$product_id);
              $bags = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, qty, price FROM bags WHERE id = ".$product_id);
              if($watch){

                while($obj = $watch->fetch_object()) {
                  $cost = $obj->price * $quantity; //work out the line cost
                  $total = $total + $cost; //add to the total cost

                  echo '<tr>';
                  echo '<td style="max-width: 500px;"><img width="100px" height="100px" src="img/watch/'.$obj->product_img_name.'"/></td>';
                  echo '<td>'.$obj->product_code.'</td>';
                  echo '<td>'.$obj->product_name.'</td>';
                  echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                  echo '<td>'.$cost.'</td>';
                  echo '</tr>';
                }
              }
            }

            echo '<tr>';

            echo '<td>Total</td>';
            echo '<td>Total</td>';
            echo '<td>'.$total.'</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td c><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a><a href="featured.php" class="button [secondary success alert]">Continue Shopping</a>';
                if(isset($_SESSION['username'])) {
                  echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
                }
                else {
                  echo '<a href="login.php"><button style="float:right;">Login</button></a>';
                }
                echo '</td>';
              echo '</tr>';
            echo '</table>';
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
