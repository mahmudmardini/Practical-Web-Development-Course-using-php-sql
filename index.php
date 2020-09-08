<?php
require_once "pdo.php";
require_once "funcs.php";
session_start();

if(!isset($_SESSION["username"])){
  redirect("login.php");
}

flash_msg();



 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>برمجة موقع ويب من الألف الى الياء مع محمود مارديني</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <header>
      <nav >
        <div class="container">
             <ul class="nav navbar-nav">
               <a href="index.php"><h2 class="brand">Web Development</h2></a>
               <li>
                 <a href=""><br>Add</a>
               </li>
              <li>
                <a href="profile.php"></br><?=$_SESSION["username"]?></a>
              </li>
              <li>
                <a href="logout.php"></br>logout</a>
              </li>

            </ul>
        </div>
      </nav>
    </header>

  <body>

<div class="container">

<div id="home-tiles" class="row">

 <div class="tiles" style="height: 350px; padding-bottom:30px;">
   <img class="center" width="65%" height="100%" src="images/welcome.jpg"></img>
   <span>Welcome!</span>
 </div>



 </div>
</div>
  </body>

  <footer class="panel-footer" style="background-color: #222; border:0;">
     <div class="container">
       <div class="text-center">© Copyright <a href="https://www.linkedin.com/in/mahmud-mardini-1a3a43165/" target="_blank">Mahmud Mardini</a> 2020</div>
     </div>
  </footer>
</html>
