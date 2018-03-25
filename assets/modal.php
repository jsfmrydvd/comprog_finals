<div id="modalOne" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/watch/watch-1.jpeg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM watch WHERE id=1');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modalTwo" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/watch/watch-3.jpeg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM watch WHERE id=3');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modalThree" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/watch/watch-6.jpeg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM watch WHERE id=6');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="modalFour" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/watch/watch-4.jpeg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM watch WHERE id=4');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="modalFive" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/watch/watch-5.jpeg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM watch WHERE id=5');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modalSix" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/bags/bag-3.jpg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM bags WHERE id=15');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="modalSeven" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/slr/slr-1.jpeg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM camera WHERE id=7');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modalEight" class="modal">
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="gallery-content col-md-6">
          <img src="img/slr/slr-6.jpeg" alt="sample11" />
        </div>
        <div class="cart-button col-md-6">
          <div class="button">
            <a class="close">&times;</a>
          </div>
          <div class="content-modal">
            <?php
              $i=0;
              $product_id = array();
              $product_quantity = array();

              $result = $mysqli->query('SELECT * FROM camera WHERE id=12');
              if($result === FALSE){
                die(mysql_error());
              }
              if($result){

                while($obj = $result->fetch_object()) {
                  echo '<h3>'.$obj->product_name.'</h3>';
                  echo '<p>Product Code: <span>'.$obj->product_code.'</span></p>';
                  echo '<p>Description: <span>'.$obj->product_desc.'</span></p>';
                  echo '<p>Units Available: <span>'.$obj->qty.'</span></p>';
                  echo '<p>Price (Per Unit): <span>'.$currency.$obj->price.'</span></p>';

                  if($obj->qty > 0){
                    echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input class="add" type="submit" value="Add To Cart"/></a></p>';
                  }
                  else {
                    echo 'Out Of Stock!';
                  }
                  echo '</div>';
                  $i++;
                }

              }

              $_SESSION['product_id'] = $product_id;
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              ?>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
