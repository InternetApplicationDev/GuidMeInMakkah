<?php
if(isset($_GET['Logout'])){
  setcookie("theuser","", time() - 1,'/');
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html class="theBackGroundS">
<head>
  <title>Contact Us</title>
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
  <!-- Flyaway button -->
  <link rel="stylesheet" href="css/flyawayStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

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
        <li class="navmenu-right"><a href="Signup.php">Sign Up</a></li>
      <?php } ?>
    </ul>
  </div>
  <div class ="header">
    Contact Us
    <div class="logo">  </div>
  </div>
  <hr>


  <!-- here is your content -->
  <div class="container">
    <div class="contactUs">
      <div class="contactLable"> Name:<br/><input type="text" name = "name" id= "data_3" placeholder="Enter your name" class="roundTextArea"/></div>
      <div class="contactLable"> Email:<br/><input type="text" id="data_5" name="email"  placeholder="example@xxxxx.com" class="roundTextArea"/></div>
      <div>
        <select name="feedback" id="data_3" size="1" class="roundTextArea">
          <option>Help</option>
          <option>Suggestion</option>
          <option>Complaint</option>
          <option>Idea</option>
        </select></div></br>
        <textarea name="suggestion" placeholder="Write Here" class="roundTextArea" ></textarea><br/><br/>
        <button id="send">
          <p  class="text">Send</p>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
            M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path>
          </svg>
        </button>
        <button id="clear">
          <p  class="text">Clear</p>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
            <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
            <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M4606.5,1787.9L1702.9-1115.7l9.9-91.2c11.9-99.2-73.4-5.9,1112.6-1231.6l325.3-337.2l819.1-5.9c755.7-4,821.1-2,870.7,29.8c29.8,19.8,1180.1,1166.2,2556.5,2546.6l2503,2510.9v97.2v95.2l-1065,1069C8247.9,4154,7744.1,4647.9,7714.4,4663.7c-29.7,15.9-87.2,27.8-128.9,27.8C7512.1,4691.5,7444.6,4626,4606.5,1787.9z M8501.8,3283.3l892.5-892.5L7748.1,744.7L6101.9-901.5L5215.4-14.9c-489.9,489.9-888.5,896.5-888.5,908.4c0,19.8,3252.7,3282.4,3272.5,3282.4C7605.3,4175.8,8011.9,3773.2,8501.8,3283.3z M4911.9-306.5l892.5-892.5l-585.1-585.1l-585.1-585.1h-644.6h-644.6l-378.8,392.7c-208.2,214.2-460.1,478-563.3,585.1L2216.6-1197l892.5,892.5C3599,185.4,4003.6,586,4009.5,586S4422,185.4,4911.9-306.5z"/><path d="M159.9-2426.7c-99.2-101.1-71.4-271.7,55.5-337.2c29.8-15.9,372.9-21.8,1146.4-21.8c1227.7,0,1195.9-4,1251.5,132.9c37.7,85.3,9.9,184.5-65.5,243.9c-49.6,39.7-77.3,39.7-1190,39.7H217.4L159.9-2426.7z"/><path d="M1054.4-3237.9c-150.7-75.4-146.8-307.4,7.9-370.9c59.5-25.8,325.3-29.7,1787-29.7c1856.4,0,1789-4,1862.3,103.1c39.7,57.5,39.7,172.6,0,230.1c-73.4,107.1-5.9,103.1-1866.3,103.1C1246.7-3202.2,1119.8-3204.1,1054.4-3237.9z"/><path d="M211.4-4078.8c-73.4-39.7-109.1-103.1-109.1-190.4c0-69.4,11.9-97.2,57.5-144.8l57.5-57.5h1140.4c1112.7,0,1140.4,0,1190,39.7c75.4,59.5,103.1,158.7,65.5,243.9c-55.5,136.9-23.8,132.9-1255.5,132.9C592.2-4057,239.2-4062.9,211.4-4078.8z"/></g></g>
          </svg>
        </button>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="js/flyaway.js"></script>
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
