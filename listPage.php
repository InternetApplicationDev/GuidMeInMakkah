<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/project.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
  <div class="navbar">
    <ul class="navmenu">
      <li><a href="#Coffe">Cafe</a></li>
      <li><a href="#Restaurants">Restaurants</a></li>
      <li><a href="#Cafe_and_Restaurants">Cafe & Restaurants</a></li>
      <li class="navmenu-right"><a href="#signUp">Sign Up</a></li>
      <li class="navmenu-right"><a href="#login">Login</a></li>
    </ul>
  </div>
  <div class ="header">

    PROJECT
    <div class="logo"> <img class="img" src="images/restaurant.png" alt="LOGO" > </div>

  </div>
  <hr>

  <h1> Makkah: </h1>
  <form action="pro2.php" method="POST">
    <div class="container">

      <?php

      $count = 15;
      for ($i = 0; $i < $count; $i++) {

        echo " 	 <div class=\"box\">
        <img src=\"images/java.png\" alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"pro2.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> Click </a>
        </div>
        </div>";}
        ?>
        <div class="footer">Footer</div>
      </div>
    </form>
  </body>
  </html>
