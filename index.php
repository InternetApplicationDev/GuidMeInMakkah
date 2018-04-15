<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
  <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
  <link rel="stylesheet" href="CSS/jquery.fullPage.css">
  <link rel="stylesheet" href="CSS/style.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> <!-- link javascript -->
  <script src="JS/jquery.fullPage.js"></script>
  <script type = "text/javascript" src = "JS/javaScript.js"></script>
  <!-- pace preloader -->
  <script src="JS/pace.js"></script>
</head>
<body>
  <div class="navbar">
    <ul class="navmenu">
      <li><a href="index.php"><img src="images/logo-small.png"/></a></li>
      <li><a href="listPage.php">Cafe</a></li>
      <li><a href="listPage.php">Restaurants</a></li>
      <li><a href="listPage.php">Cafe & Restaurants</a></li>
       <li class="navmenu-right"><a href="Registration.html">Sign Up</a></li>
      <li class="navmenu-right"><a href="Login.php">Login</a></li>
    </ul>
  </div>
  <div id="wrapper">
    <div class="section" id="sectionOne">
      <div class="icon">
        <img id="mainLogo" src="images/logo.png" />
      </div>
    </div>
    <div class="section">
      <div class="slide" id="sectionTwoFirst">
        <div class="boxes">
          <?php
          $idCoffee=1;
          $idReturant=2;
          $idBoth=3;

          echo '<a href="listPage.php?id='.$idCoffee.'" ><img id="Cafe" src="images/icons/coffee-cup.png" title="Cafe" /></a>';
          echo '<a href="listPage.php?id='.$idReturant.'"><img id="Restaurant" src="images/icons/tray.png" title="Restaurant" /></a>';
          echo '<a href="listPage.php?id='.$idBoth.'"><img id="CafeAndRestaurant" src="images/icons/trayAndCoffee.png" title="CafeAndRestaurant" /></a>';
          ?>
        </div>
      </div>
      <div class="slide" id="sectionTwoSecond">
        <div class="boxes">
          <?php
          $idCoffee=1;
          $idReturant=2;
          $idBoth=3;

          echo '<a href="listPage.php?id='.$idCoffee.'" ><img id="Cafe" src="images/icons/coffee-cup.png" title="Cafe" /> </a>';
          echo '<a href="listPage.php?id='.$idReturant.'"><img id="Restaurant" src="images/icons/tray.png" title="Restaurant" /></a>';
          echo '<a href="listPage.php?id='.$idBoth.'"><img id="CafeAndRestaurant" src="images/icons/trayAndCoffee.png" title="Cafe And Restaurant" /></a>';
          ?>

        </div>
      </div>
      <div class="slide" id="sectionTwoThird">
        <div class="boxes">
          <?php
          $idCoffee=1;
          $idReturant=2;
          $idBoth=3;

          echo '<a href="listPage.php?id='.$idCoffee.'" ><img id="Cafe" src="images/icons/coffee-cup.png" title="Cafe" /></a>';
          echo '<a href="listPage.php?id='.$idReturant.'"><img id="Restaurant" src="images/icons/tray.png" title="Restaurant" /></a>';
          echo '<a href="listPage.php?id='.$idBoth.'"><img id="CafeAndRestaurant" src="images/icons/trayAndCoffee.png" title="CafeAndRestaurant" /></a>';
          ?>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
