<!DOCTYPE html>
<html class="theBackGround">
<head>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body class="centerPage">
  <div class="navbar">
    <ul class="navmenu">
      <li><a href="index.html"><img src="images/logo-small.png"/></a></li>
      <li><a href="listPage.php">Cafe</a></li>
      <li><a href="listPage.php">Restaurants</a></li>
      <li><a href="listPage.php">Cafe & Restaurants</a></li>
      <li class="navmenu-right"><a href="#signUp">Sign Up</a></li>
      <li class="navmenu-right"><a href="profile.php">Login</a></li>
    </ul>
  </div>
  <div class ="header">
   RESTAURANTS LIST 
    <div class="logo"> <img class="img" src="images/icons/tray_black.png" alt="LOGO" > </div>
  </div>
  <hr>
<!--  <h1 class="listPageh1"> Makkah: </h1>-->
    <form method="POST">
    <div class="container">
      <?php
      $count = 16;
      for ($i = 0; $i < $count; $i++) {
        print " 	 <div class=\"box\">
        <img src=\"images/res.jpg\" alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> Click </a>
        </div>
        </div>";}
        ?>
      </div>
    </form>
    <div class="footer">Footer</div>
  </body>
  </html>
