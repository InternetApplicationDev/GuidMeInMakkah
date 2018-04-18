<?php
if(isset($_GET['Logout'])){
  setcookie("theuser","", time() - 1,'/');
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html class="theBackGround">
<head>
  <title>About US</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
  <!-- customized CSS and JS -->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script type="text/javascript" src= "JS/javaScript.js"></script>
  <!-- Sweet Alert  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  <!-- pace preloader -->
  <script src="JS/pace.js"></script>
</head>
<body class="centerPage">
  <div class="navbar">
    <ul class="navmenu">
      <li><a href="index.php"><img src="images/logo-small.png"/></a></li>
      <li><a href="listPage.php?id=1">Cafe</a></li>
      <li><a href="listPage.php?id=2">Restaurants</a></li>
      <li><a href="listPage.php?id=3">Cafe & Restaurants</a></li>
      <?php if ($_COOKIE['theuser']){ ?>
        <li class="navmenu-right"><a href="profile.php">Profile</a></li>
        <li class="navmenu-right"><a href="?Logout">Logout</a></li>
      <?php }else{ ?>
        <li class="navmenu-right"><a href="Login.php">Login</a></li>
        <li class="navmenu-right"><a href="Registration.php">Sign Up</a></li>
      <?php } ?>
    </ul>
  </div>
  <div class ="header">
    ABOUT US
    <div class="logo"> <img class="img" src="images/icons/tray_black.png" alt="LOGO" > </div>

  </div>
  <hr>

  <div class="container">
    <div class= "about">
      <p class= "about1">About Us:<p>
        <p class= "about2">As an online platform, our aim is to help you discover restaurants and guide you to trending places in Makkah</p>
        <p class= "about3">Connect to Your Chosen Restaurant</p>
        <p class= "about4"><b style="font-style: italic;">		GuideMe in Makkah</b> enables you to make an online booking at your chosen restaurant and in many cases to take advantage of unique promotions.
          GuideMe in Makkah enables you to make an online booking at your chosen restaurant and in many cases to take advantage of unique promotions.
          Our user-friendly website lists the best places to dine.
          We want to make the booking process hassle free, so we send you a confirmation E-mail with your reservation.
          Alternatively, you can call the restaurant directly via the number provided on the restaurant page.
        </div>
      </div>

      <div class="footer" id="theFooter">
        <div class="footbar">
          <ul class="footmenu">
            <li><a href="#" onclick="showDevFunction()">Developers</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contactUs.php">Contact us</a></li>
            <li><a href="#" onclick="showSiteMap()">siteMap</a></li>
          </ul>
          <div id="developersNames">
            <ul class="devNames">
              <li>Ebtsam Alkhuzai</li>
              <li>Esraa Samkari</li>
              <li >Joanna Assaeedi</li>
              <li>Joud Alajlan</li>
              <li>Rozan Alghamdi</li>
              <li>Wafaa Alshaikhi</li>
            </ul>
          </div>
        </div>
      </div>
    </body>
    </html>
