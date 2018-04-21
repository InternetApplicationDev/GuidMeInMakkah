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
  $dbc = mysqli_connect("localhost","root","root");
  //$dbc = mysqli_connect("localhost","root","12345678");
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
<html class="theBackGroundS">
<head>
  <title>Sign Up</title>
  <!-- Font -->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
  <!-- customized CSS and JS -->
  <script type="text/javascript" src= "JS/javaScript.js"></script>
  <!-- Sweet Alert  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  <!-- pace preloader -->
  <script src="JS/pace.js"></script>
</head>

<body class="content">

  <!--
  <div class="navbar">

  <ul class="navmenu">
  <li><a href ="index.php"><img src="images/logo-small.png"/></a></li>
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
</div> -->

<a class ="signLogo" href ="index.php"><img src="images/logo-small-black.png"/></a>
<h2 class = "welcomeText"> Welcome To Guide Me In Makkah </h2>
<h3 color="gray" class = "welcomeText"> creat new account </h3>


<form method="post" id="SignupForm" onSubmit="return validateForm();">

  <input  type="text" id="Name" name="firstName" placeholder="First Name"  />

  <input  type="text" id="l_name" name="lastname" placeholder="Last Name" />

  <input type="text" id="Email" name="Email"  placeholder="example@xxxxx.com" />

  <input  type="password" id="password" name="password" placeholder="password"  />

  <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password" />

  <input name="Submit" value="Submit" type="submit"/>


  <h3 class = "welcomeText"> already have account <a href="Login.php">sign in </a> </h3>

</form>

</body>
</html>
