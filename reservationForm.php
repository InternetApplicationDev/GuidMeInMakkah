<?php
if(isset($_GET['Logout'])){
  setcookie("theuser","",time()-60*60*24*30,'/');
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html class="theBackGround">
<head>
  <title>reservation Form</title>
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
    <div class="logo"> <img class="img" src="images/icons/tray_black.png" alt="LOGO" > </div>
  </div>
  <hr>

  <form method="post" action="reservationForm.html" onSubmit="return validateForm();">
    <div class="container">
      <div class= "reserv1"> </br>We would be glad to reserve a table for you at our restaurant!</div>

      <div>
        <!-- name -->
        <div class= "reserv2">Name<span style="color: red;"> *</span><br/>
          <input type="text" id="Name" name="Name" class="roundTextArea"/>
        </div>
        <!-- phone -->
        <div class= "reserv2">Phone<br/>
          <input type="text" id="data_4" name="data_4" class="roundTextArea"/>
        </div>

        <div class= "reserv2">Email<br/>
          <input type="text" id="Email" name="Email"  placeholder="example@xxxxx.com" class="roundTextArea"/>
        </div>
        <div class= "reserv2">Date<span style="color: red;"> *</span><br/>
          <input type="text" id="data_6" name="data_6"class="roundTextArea"/>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">new Pikaday({ field: document.getElementById('data_6') });</script>

        <div class= "reserv2">Time<span style="color: red;"> *</span><br/>
          <input type="text" id="data_7" name="data_7" class="roundTextArea"/>
        </div>
        <div class= "reserv2">Number of Attendees<span style="color: red;"> *</span><br/>
          <select id="data_8" name="data_9" class="roundTextArea"><option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>10+ (Specify in Comments)</option>
          </select>
        </div>
        <div class= "reserv2">Occasion<span style="color: red;"> *</span><br/>
          <select id="data_9" name="data_8" class="roundTextArea"><option> </option>
            <option>Birth Day</option>
            <option>Wedding</option>
            <option>Mother's Day</option>
            <option>Dad's Day</option>
            <option>Wedding anniversary</option>
            <option>Other (Specify in Comments)</option>
          </select>
        </div>
        <div class= "reserv2">Comments / Additional Requests<br/>
          <textarea id="data_9" false name="data_9" class="roundTextArea2"></textarea>
        </div>

        <div class= "reservSubmit">
          <input name="skip_Submit" value="Submit" type="submit" class="submitbutton"/>
          <input type = "reset" value = "Cancel" class="submitbutton"/>
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
