<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);
    $result1 = $mysqli->query("SELECT * FROM camera WHERE id = ".$product_id);
    $result2 = $mysqli->query("SELECT * FROM watch WHERE id = ".$product_id);


    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        $query = $mysqli->query("INSERT INTO orders (product_code, product_name, product_desc, price, units, total, email) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost, '$user')");

        if($query){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE products SET qty = ".$newqty." WHERE id = ".$product_id)){

          }
        }
      }
    }
    if($result1){

      if($obj = $result1->fetch_object()) {


        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        $query = $mysqli->query("INSERT INTO orders (product_code, product_name, product_desc, price, units, total, email) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost, '$user')");

        if($query){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE camera SET qty = ".$newqty." WHERE id = ".$product_id)){

          }
        }
      }
    }
    if($result2){

      if($obj = $result2->fetch_object()) {


        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        $query = $mysqli->query("INSERT INTO orders (product_code, product_name, product_desc, price, units, total, email) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost, '$user')");

        if($query){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE watch SET qty = ".$newqty." WHERE id = ".$product_id)){

          }
        }
      }
    }
  }
}

unset($_SESSION['cart']);
header("location:success.php");

?>
