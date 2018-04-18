<?php
if(isset($_GET['Logout'])){
  setcookie("theuser","",time()-60*60*24*30,'/');
  header('Location: index.php');
  exit;
}
if (isset($_POST['firstName'])) {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastname'];
  $email = $_POST['Email'];
  $pass = $_POST['password'];
  $dbc = mysqli_connect("localhost","root","12345678");
  mysqli_select_db($dbc,"db");
  $insertNewUser = "INSERT INTO user (user_email,user_password,user_first_name,user_last_name)
  VALUES ('$email','$pass','$firstName','$lastName')";
  @mysqli_query ($dbc, $insertNewUser);
  if (mysqli_num_rows(mysqli_query($dbc,"SELECT * From user where user_email = '$email' AND user_password ='$pass'"))) {
    $result = mysqli_query($dbc,"SELECT * From user where user_email = '$email' AND user_password ='$pass'");
    while ($row = mysqli_fetch_array($result)) {
      setcookie("theuser",$row['user_id'],time()+60*60*24*30,'/');
      echo '
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
      <script>
      $( document ).ready(function() {
        swal({
          title: \'Welcome To GuideMeInMakkah\',
          type: \'success\',
          showConfirmButton: false,
          timer: 1500,
        }).then(function(){
          window.location.href = \'profile.php\';
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
        text: \'There was a problem with signing you up\',
        type: \'error\',
      }, function(isConfirm) {
        document.location.href="/login.html"
      });
    });
    </script>';
  }
mysqli_close($dbc);
}
?>
<!DOCTYPE html>
<html class="theBackGround">
<head>
  <title>RegistrationForm</title>
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
    Sign Up
    <div class="logo"> <img class="img" src="images/icons/tray_black.png" alt="LOGO" > </div>
  </div>
  <hr>
  <form method="post" onSubmit="return validateForm();">
    <div class="container">
      <div>
        <div>
          <!-- name -->
          <div class= "register1">First Name : <span style="color: red;"> *</span><br/>
            <input type="text" id="Name" name="firstName" class="roundTextArea"/>
          </div>
          <br/>
          <!-- last name  -->
          <div class= "register1">Last Name : <span style="color: red;"> *</span> <br/>
            <input type="text" id="l_name" name="lastname" class="roundTextArea"/>
          </div>
          <br/>
          <div class= "register1">E-mail : <span style="color: red;"> *</span><br/>
            <input type="text" id="Email" name="Email"  placeholder="example@xxxxx.com" class="roundTextArea"/>
          </div>
          <br/>
          <div class= "register1"> Password :<span style="color: red;"> *</span><br/>
            <input type="password" id="password" name="password"class="roundTextArea"/>
          </div>
          <br/>
          <div class= "register1"> Confirm Password :<span style="color: red;"> *</span> <br/>
            <input type="password" id="cpassword" name="cpassword" class="roundTextArea"/>
          </div>
          <br/>
          <div class= "regesterSubmit"><input name="Submit" value="Submit" type="submit" class="submitbutton"/>
          </div>
        </div>
      </div>
    </form>
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
