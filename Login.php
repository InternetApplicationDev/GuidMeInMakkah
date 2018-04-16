<?php
$loginState;
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $conn = mysqli_connect("localhost","root","12345678");
  mysqli_select_db($conn,"testingtesting");
  if (mysqli_num_rows(mysqli_query($conn,"SELECT * From admin_login where admin_name = '$email' AND admin_password ='$pass'"))) {
    $result = mysqli_query($conn,"SELECT * From admin_login where admin_name = '$email' AND admin_password ='$pass'");
    while ($row = mysqli_fetch_array($result)) {
      setcookie("theuser",$row['admin_id'],time()+60*60*24*30);
      echo '
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
      <script>
      $( document ).ready(function() {
        swal({
          title: \'You Have Been Logged In sccessfully\',
          type: \'success\',
          showConfirmButton: false,
          timer: 1500,
        }, function(isConfirm) {
          document.location.href="/Login.php"
        });
      });
      </script>';
    }
  }else {
    echo '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
    <script>
    $( document ).ready(function() {
      swal({
        title: \'Oops..\',
        text: \'Not logged!\',
        type: \'error\',
      }, function(isConfirm) {
        document.location.href="/Login.php"
      });
    });
    </script>';
  }
  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html class="theBackGround">
<head>
  <title>Log in</title>
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
      <li class="navmenu-right"><a href="Registration.html">Sign Up</a></li>
      <li class="navmenu-right"><a href="Login.php">Login</a></li>
    </ul>
  </div>

  <div class ="header">
    Log In

    <div class="logo"> <img class="img" src="images/icons/tray_black.png" alt="LOGO" > </div>
  </div>
  <hr>

  <form method="post" id="LoginForm" onSubmit="return validateForm();">
    <div class="container">

      <div>

        <div class= "register1"> E-mail : <span style="color: red;"> *</span><br/>
          <input type="text" id="Email" name="Email" placeholder="example@xxxxx.com" class="roundTextArea"/>
        </div>
        <br/>
        <div class= "register1"> Password :<span style="color: red;"> *</span><br/>
          <input type="password" id="password" name="password"class="roundTextArea"/>
        </div>

        <br/>
        <div class= "regesterSubmit"><input name="skip_Submit" value="Submit" type="submit" class="submitbutton"/>
        </div>
      </div>
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
