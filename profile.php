<!DOCTYPE html>
<html class="theBackGround">
<head>
  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script type = "text/javascript" src = "JS/javaSceipt.js"></script>
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <div class="card">
    <img src="images/pesonal icon.jpg" alt="profile picture" style="width:100%">
    <h1>Name</h1>
    <p>Bio</p>
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button>Contact</button></p>
  </div>
  <div class="Favorite">
    <img src="images/add.png"/>
    <img src="images/add.png"/>
    <img src="images/add.png"/>
    <img src="images/add.png"/>
    <img src="images/add.png"/>
  </div>
  <div class="container">
    <div class="profileComments">
      <h1>Comment</h1>
      <?php
      for ($i = 1; $i <= 5; $i++){
        echo '<h4>'.$i.'-</h4>';
        ?>
        <table style="margin-left:2%">
          <tr>
            <td> <img src="images/pesonal icon.jpg" height="35%" width="35%" /> </td>
            <td><table style="margin-left:-100%">
              <tr><td style="font-size: 20px;color: gray;">user name</td> </tr>
              <tr><td>user comments</td> </tr>
            </table></td>
          </tr>
        </table>
        <?php
        echo '<hr>';
      }
      ?>
    </div>
  </div>
  <div class="footer" id="theFooter">
    <div class="footbar">
      <ul class="footmenu">
        <li><a href="#" onclick="showDevFunction()">Developers</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="contactUs.html">Contact us</a></li>
        <li><a href="#">siteMap</a></li>
      </ul>
      <div id="developersNames">
        <ul class="devNames">
          <li>Ebtsam Alkhuzai</li>
          <li>Esraa Samkari</li>
          <li >Joanna Assaeedi</li>
          <li>Joud Alajlan</li>
          <li>Rozan</li>
          <li>Wafaa</li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
