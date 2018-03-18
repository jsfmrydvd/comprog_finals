<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html>

<head>
  <?php include('assets/head.html') ?>
</head>
  <body>
    <!-- Content of the index.php -->
    <header class="v-header container">
  <div class="fullscreen-video-wrap">
    <video src="https://www.videvo.net/videvo_files/converted/2014_05/preview/Typing_on_Keyboard_2821_Videvo.mov46902.webm" autoplay="" loop="">
  </video>
  </div>
  <div class="header-overlay"></div>
  <div class="header-content text-md-center">
    <h1>Comprog 2</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
    <a href="main.php"class="btn">Go to the website</a>
  </div>
</header>
  <?php include('assets/scripts.html')?>
  </body>
</html>
