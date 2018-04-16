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
      <li><a href="#Coffe">Cafe</a></li>
      <li><a href="#Restaurants">Restaurants</a></li>
      <li><a href="#Cafe_and_Restaurants">Cafe & Restaurants</a></li>
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
    TABLE RESERVATION
    <div class="logo">  </div>
  </div>
  <hr>


  <!-- here is your content -->
  <div class="container">
    <div class="contactUs">
      <ul class="contactMenu">
        <li><a href="#"></a> <img class="pic" src="images/twitter.png" alt="LOGO" ></br> @GuideMeNMakkah </li></br>
        <li><a href="#"></a> <img class="pic" src="images/facebook.png" alt="LOGO" ></br> @GuideMeNMakkah</li></br>
        <li><a href="#"></a> <img class="pic" src="images/gmail.png" alt="LOGO" ></br>GuideNM@gmail.com</li>
      </ul>
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
          <li>Joanna Assaeedi</li>
          <li>Joud Alajlan</li>
          <li>Rozan Alghamdi</li>
          <li>Wafaa Alshaikhi</li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
