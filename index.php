<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Activity 5</title>
  <link rel="stylesheet" type="text/css" href="css/home.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

  <style type="text/css">
body{
  margin:0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size:1rem;
  font-weight:normal;
  line-height:1.5;
  color:#333;
overflow-x:hidden;
}

.v-header{
  height:100vh;
  display:flex;
  align-items:center;
  color:#fff;
}

.container{
  max-width:960px;
  padding-left:1rem;
  padding-right:1rem;
  margin:auto;
  text-align:center;
}

.fullscreen-video-wrap{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100vh;
  overflow:hidden;
}

.fullscreen-video-wrap video{
  min-height:100%;
  min-width:100%;
}

.header-overlay{
  height:100vh;
  position: absolute;
  top:0;
  left:0;
  width:100vw;
  z-index:1;
  background:#0e0e0e;
  opacity:0.85;
}

.header-content{
  z-index:2;
}

.header-content h1{
  font-size:50px;
  margin-bottom:0;
}

.header-content p{
  font-size:1.5rem;
  display:block;
  padding-bottom:2rem;
}

.btn{
  background: #608882;
  color:#fff;
  font-size:1rem;
  padding: 0.3rem 1rem;
  text-decoration: none;
}
.btn:hover {
  color: white;
  background-color: black;
}




@media(max-width:960px){
  .container{
    padding-right:3rem;
    padding-left:3rem;
  }
}
  </style>
</head>
  <body>
    <!-- Content of the index.php -->
    <header class="v-header container">
  <div class="fullscreen-video-wrap">
    <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
    <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
    <video src="https://production.cdmycdn.com/assets/marketing-pages/intensives/bws/coding-scenes-9a2031e8142b40bdb5d936d5eef33dfa.mp4" autoplay="" loop="">
  </video>
  </div>
  <div class="header-overlay"></div>
  <div class="header-content text-md-center">
    <h1>Comprog 2</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
    <a href="main.php"class="btn">Go to the website</a>
  </div>
</header>

    <!-- Welcome Screen before the content -->
    <!-- <div class="welcome-section content-hidden">
        <div class="content-wrap">
            <ul class="fly-in-text">
                <li>I</li>
                <li>TEAM</li>
            </ul>
            <a href="#" class="enter-button">Enter</a>
        </div>
    </div> -->
    <!-- Scripts  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/top.js"></script>
  </body>
</html>
