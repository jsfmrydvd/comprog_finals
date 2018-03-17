<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$product_id = $_GET['id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$result = $mysqli->query("SELECT qty FROM products WHERE id = ".$product_id);
$result1 = $mysqli->query("SELECT qty FROM camera WHERE id = ".$product_id);
$result2 = $mysqli->query("SELECT qty FROM watch WHERE id = ".$product_id);

if($result){

  if($obj = $result->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->qty)
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}

if($result1){

  if($obj = $result1->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->qty)
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}
if($result2){

  if($obj = $result2->fetch_object()) {

    switch($action) {

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj->qty)
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}



header("location:cart.php");

?>
