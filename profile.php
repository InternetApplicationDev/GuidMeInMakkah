<?php
if(isset($_GET['Logout'])){
  setcookie("theuser","",time()-60*60*24*30,'/');
  header('Location: index.php');
  exit;
}
$theuser = $_COOKIE['theuser'];
$dbc = mysqli_connect("localhost","root","12345678");
mysqli_select_db($dbc,"db");
$getPictureSql = mysqli_query($dbc,"SELECT user_picture From user where user_id = $theuser");
while($getPicture = mysqli_fetch_array($getPictureSql)){
  $picturePath = $getPicture['user_picture'];
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
</head>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL&~E_NOTICE);
if (isset($_POST['Submit'])){
  if($dbc=@mysqli_connect('localhost','root','root')){
    if(!@mysqli_select_db($dbc,'db')){
      die('<p> Could not select the database because:<b>'.mysqli_error($dbc).'</b></p>');
    }
  }
  else {
      die('<p> Could not connect to mysql because:<b>'.mysqli_error($dbc).'</b></p>');
  }

  //Define the query
  $insert = "INSERT INTO `User` (`ID`, `First_name`, `Last_name`, `E-mail`, `Password`)
   VALUES ('0','{$_POST['Name']}', '{$_POST['l_name']}', '{$_POST['Email']}', '{$_POST['password']}')";
   //execute INSERT
   if(@mysqli_query($dbc,$insert)){
     print'';
   }
   else {
    print"<p> Could not add the entry because:<b>'.mysqli_error($dbc).'</b>. The query was $insert .</p>";
   }
   mysqli_close($dbc);
}
?>
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
    <h1>Name</h1>
    <?php
    print"<h1>{$_POST['Name']} {$_POST['l_name']} </h1>";
    ?>
    <p>Bio</p>
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
