<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$product_id = $_GET['id'];
$action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$camera = $mysqli->query("SELECT qty FROM camera WHERE id = ".$product_id);
$watch = $mysqli->query("SELECT qty FROM watch WHERE id = ".$product_id);
$bags = $mysqli->query("SELECT qty FROM bags WHERE id = ".$product_id);
$mens = $mysqli->query("SELECT qty FROM mens WHERE id = ".$product_id);
$womens = $mysqli->query("SELECT qty FROM womens WHERE id = ".$product_id);

if($camera){

  if($obj = $camera->fetch_object()) {

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

      case "rem":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id])
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}

if($watch){

  if($obj = $watch->fetch_object()) {

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

      case "rem":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id])
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}
if($bags){

  if($obj = $bags->fetch_object()) {

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

      case "rem":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id])
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}
if($mens){

  if($obj = $mens->fetch_object()) {

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

      case "rem":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id])
        unset($_SESSION['cart'][$product_id]);
        break;
    }
  }
}
if($womens){

  if($obj = $womens->fetch_object()) {

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

      case "rem":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id])
        unset($_SESSION['cart'][$product_id]);
        break;

    }
  }
}



header("location:cart.php");

?>
