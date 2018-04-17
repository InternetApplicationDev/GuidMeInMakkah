<?php
if(isset($_GET['Logout'])){
  setcookie("theuser","",time()-60*60*24*30,'/');
  header('Location: index.php');
  exit;
}
$theuser = $_COOKIE['theuser'];
$dbc = mysqli_connect("localhost","root","12345678");
mysqli_select_db($dbc,"db");
$result = mysqli_query($dbc,"SELECT user_picture,user_email,user_name,user_bio From user where user_id = $theuser");
while($row = mysqli_fetch_array($result)){
  $picturePath = $row['user_picture'];
  $userName = $row['user_name'];
  $userBio = $row['user_bio'];
  $userEmail = $row['user_email'];
}
?>
<!DOCTYPE html>
<html class="theBackGround">
<head>
  <title>Profile</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
  <!-- customized CSS and JS -->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script type = "text/javascript" src = "JS/javaScript.js"></script>
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Sweet Alert  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  <!-- pace preloader -->
  <script src="JS/pace.js"></script>
  <!-- contact button -->
  <link rel='stylesheet prefetch' href='css/pqbdwk.css'>
</head>
<body class="centerPage">
  <div class="navbar">
    <ul class="navmenu">
      <li><a href="index.php"><img src="images/logo-small.png"/></a></li>
      <li><a href="listPage.php">Cafe</a></li>
      <li><a href="listPage.php">Restaurants</a></li>
      <li><a href="listPage.php">Cafe & Restaurants</a></li>
      <?php if ($_COOKIE['theuser']){ ?>
        <li class="navmenu-right"><a href="profile.php">Profile</a></li>
        <li class="navmenu-right"><a href="?Logout">Logout</a></li>
      <?php }else{ ?>
        <li class="navmenu-right"><a href="Login.php">Login</a></li>
        <li class="navmenu-right"><a href="Registration.php">Sign Up</a></li>
      <?php } ?>
    </ul>
  </div>
  <div class="card">
    <img src="<?php echo $picturePath; ?>" alt="profile picture" style="width:100%">
    <h1><?php echo $userName; ?></h1>
    <p><?php echo $userBio; ?></p>
    <br />
    <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <symbol id="icon-paperplane" viewBox="0 0 1024 1024">
          <title>paperplane</title>
          <path class="path1" d="M1009.376 5.12c-5.312-3.424-11.36-5.12-17.376-5.12-6.176 0-12.384 1.76-17.76 5.376l-960 640c-9.888 6.56-15.328 18.112-14.048 29.952 1.216 11.808 8.896 22.016 19.936 26.368l250.368 100.192 117.728 206.016c5.632 9.888 16.096 16 27.424 16.128 0.128 0 0.224 0 0.352 0 11.232 0 21.664-5.952 27.424-15.552l66.464-110.816 310.24 124.064c3.808 1.536 7.808 2.272 11.872 2.272 5.44 0 10.816-1.376 15.68-4.128 8.448-4.736 14.24-13.056 15.872-22.624l160-960c2.080-12.576-3.488-25.184-14.176-32.128zM100.352 664.864l741.6-494.432-539.2 577.184c-2.848-1.696-5.376-3.936-8.512-5.184l-193.888-77.568zM326.048 770.112c-0.064-0.128-0.16-0.192-0.224-0.32l606.176-648.8-516.768 805.184-89.184-156.064zM806.944 947.488l-273.312-109.312c-6.496-2.56-13.248-3.424-19.936-3.808l420.864-652.416-127.616 765.536z"></path>
        </symbol>
      </defs>
    </svg>
    <a href="?email" class="contact-button">
      Contact
      <svg class="icon icon-paperplane"><use xlink:href="#icon-paperplane"></use></svg>
      <span><?php echo $userEmail; ?></span>
    </a>
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
