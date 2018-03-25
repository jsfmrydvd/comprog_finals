<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';

$_SESSION["products_id"] = array();
$_SESSION["products_id"] = $_REQUEST['quantity'];


$result = $mysqli->query("SELECT * FROM watch ORDER BY id asc");
$result1 = $mysqli->query("SELECT * FROM camera ORDER BY id asc");
$result2 = $mysqli->query("SELECT * FROM bags ORDER BY id asc");
$result3 = $mysqli->query("SELECT * FROM mens ORDER BY id asc");
$result4 = $mysqli->query("SELECT * FROM womens ORDER BY id asc");
$i=0;
$x=1;

if($result) {
  while($obj = $result->fetch_object()) {
    if(empty($_SESSION["products_id"][$i])) {
      $i++;
      $x++;
    }
    else {
      $newqty = $obj->qty + $_SESSION["products_id"][$i];
      if($newqty < 0) $newqty = 0; //So, Qty will not be in negative.
      $update = $mysqli->query("UPDATE watch SET qty =".$newqty." WHERE id =".$x);
      if($update)
        echo 'Data Updated';
      $i++;
      $x++;
    }
  }
}
if($result1) {
  while($obj = $result1->fetch_object()) {
    if(empty($_SESSION["products_id"][$i])) {
      $i++;
      $x++;
    }
    else {
      $newqty = $obj->qty + $_SESSION["products_id"][$i];
      if($newqty < 0) $newqty = 0; //So, Qty will not be in negative.
      $update = $mysqli->query("UPDATE camera SET qty =".$newqty." WHERE id =".$x);
      if($update)
        echo 'Data Updated';

      $i++;
      $x++;
    }
  }
}
if($result2) {
  while($obj = $result2->fetch_object()) {
    if(empty($_SESSION["products_id"][$i])) {
      $i++;
      $x++;
    }
    else {
      $newqty = $obj->qty + $_SESSION["products_id"][$i];
      if($newqty < 0) $newqty = 0; //So, Qty will not be in negative.
      $update = $mysqli->query("UPDATE bags SET qty =".$newqty." WHERE id =".$x);
      if($update)
        echo 'Data Updated';

      $i++;
      $x++;
    }
  }
}
if($result3) {
  while($obj = $result3->fetch_object()) {
    if(empty($_SESSION["products_id"][$i])) {
      $i++;
      $x++;
    }
    else {
      $newqty = $obj->qty + $_SESSION["products_id"][$i];
      if($newqty < 0) $newqty = 0; //So, Qty will not be in negative.
      $update = $mysqli->query("UPDATE mens SET qty =".$newqty." WHERE id =".$x);
      if($update)
        echo 'Data Updated';

      $i++;
      $x++;
    }
  }
}
if($result4) {
  while($obj = $result4->fetch_object()) {
    if(empty($_SESSION["products_id"][$i])) {
      $i++;
      $x++;
    }
    else {
      $newqty = $obj->qty + $_SESSION["products_id"][$i];
      if($newqty < 0) $newqty = 0; //So, Qty will not be in negative.
      $update = $mysqli->query("UPDATE womens SET qty =".$newqty." WHERE id =".$x);
      if($update)
        echo 'Data Updated';

      $i++;
      $x++;
    }
  }
}



header ("location:admin.php");



?>
