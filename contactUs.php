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
    TABLE RESERVATION
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

		<div class= "contactSubmit">
		<input name="skip_Submit" value="Submit" type="submit" class="submitbutton"/>
		<input type = "reset" value = "Cancel" class="submitbutton"/>
		</div>
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
