<!DOCTYPE html>
<html class="theBackGround">
<head>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script type="text/javascript" src= "JS/javaSceipt.js"></script>
  <!-- Sweet Alert  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  <!-- pace preloader -->
 <script src="JS/pace.js"></script>
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
    <div class="footer" id="theFooter">
      <div class="footbar">
        <ul class="footmenu">
          <li><a href="#" onclick="showDevFunction()">Developers</a></li>
          <li><a href="about.html">About us</a></li>
          <li><a href="contactUs.html">Contact us</a></li>
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
