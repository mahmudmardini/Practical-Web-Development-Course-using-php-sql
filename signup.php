<?php

 ?>

<html >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/forms.css">
    <title>برمجة موقع ويب من الألف الى الياء مع محمود مارديني</title>
  </head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <a href="login.php"><h2 class="inactive underlineHover"> Login </h2></a>
    <a href="signup.php"><h2 class="active"> Sign Up </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="icons/icon.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="text" class="fadeIn second" name="username" placeholder="username">
      <input type="email" class="fadeIn second" name="email" placeholder="email">
      <input type="password"  class="fadeIn third" name="pass" placeholder="password">
      <input type="password"  class="fadeIn third" name="pass2" placeholder="confirm password">
      <input type="submit" class="fadeIn fourth" value="Sign Up">
    </form>

  </div>
</div>
  </body>
</html>
