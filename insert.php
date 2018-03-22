<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
// $repwd = $_POST["pwd"];
  	// $pwd = password_hash($pwd, PASSWORD_DEFAULT);
  	// $query = "INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')";
  	// if(mysqli_query($mysqli,$query)) {
  	// 	echo ' <script>alert("Registration Done")</script>';
  	// }

// if(empty($_POST["fname"]) || empty($_POST["pwd"])) {
// 	echo '<script>alert("Both field are required")</script>';
// } else {
// 	$fname = mysqli_real_escape_string($mysqli, $_POST["fname"]);
// 	$pwd = mysqli_real_escape_string($mysqli, $_POST["pwd"]);
// 	// $pwd = password_hash($pwd, PASSWORD_DEFAULT);
// 	$query = "INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')";
// 	if(mysqli_query($mysqli,$query)) {
// 		echo ' <script>alert("Registration Done")</script>';
// 	}
// }

$query = "INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')";
if(mysqli_query($mysqli,$query)) {
	echo ' <script>alert("Registration Done")</script>';
	// if($pwd == $repwd){
	// 	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	//   $result = $mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')");
	// }
	// else {
	// 	echo ' wrong password';
	// }
}

// $mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')");
// 	echo 'Data inserted';
// 	echo '<br/>';
	// if($pwd==$repwd){
	// 	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	//   $query = $mysqli->query('INSERT INTO users SET password ="'. $pwd .'" WHERE id ='.$_SESSION['id']);
	// }


header ("location:login.php");

?>
