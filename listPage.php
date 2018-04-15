<!DOCTYPE html>
<html class="theBackGround">
<head>
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
      <?php 
          $idCoffee=1;
          $idReturant=2;
          $idBoth=3;
      echo '<li><a href="listPage.php?id='.$idCoffee.'"> Cafe</a></li>'; 
      echo '<li><a href="listPage.php?id='.$idReturant.'"> RESTAURANT</a></li>';
      echo '<li><a href="listPage.php?id='.$idBoth.'">BOTH</a></li>';

      ?>
     <li class="navmenu-right"><a href="Registration.html">Sign Up</a></li>
      <li class="navmenu-right"><a href="Signin.html">Login</a></li>
    </ul>
  </div>
  <div class ="header">
         <?php
	  if ($_GET[id]==1){
echo'COFFEE LIST ';
echo'<div class="logo"> <img class="img" src="images/icons/coffee-cup-black.png" alt="LOGO" > </div>';
}
else if ($_GET[id]==2){ //if the user click to the resturant
//change the pic to restaurant black
	echo'RESTAURANTS LIST ';
	echo'<div class="logo"> <img class="img" src="images/icons/tray_black.png" alt="LOGO" > </div>';
}
else{//if the user click to the both
echo'RESTAURANTS AND COFFEE LIST ';
//change the pic to both black
echo'<div class="logo"> <img class="img" src="images/icons/trayAndCoffee-black.png" alt="LOGO" > </div>';
}
    ?>

  </div>
  <hr>
  <form method="POST">
    <div class="container">
  <!--SENSTIVE AREA DDDDONT TOUCH IT !!! -->
      <?php

      include 'DB.php';
      $bar = new connection;
      
         $idCoffee=1;
          $idReturant=2;
          $idBoth=3;
    
    
     $count ;
    if ($_GET[id]==2)
{
  //LATER WE WILL TAKE THE NUMBER OF THE COFFEE'S STORD IN DATABSE WITH SELECT AND PUT THE NO IN COUNR VARIBLE BUT THIS IS INITIALLY
  //SELECT TO TAKE THE NO OF COFFEE'S


  $r = $bar->retreve_restrants();
for ($i = 0; $i < count($r); $i++) {
     print"<div class=\"box\">
        <img src=\"{$r[$i][1]}\" alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> {$r[$i][0]} </a>
        </div>
        </div>";  
}



}

else if ($_GET[id]==1){ //if the user click to the restaurant

   
  $r = $bar->retreve_caffes();
for ($i = 0; $i < count($r); $i++) {

<<<<<<< HEAD
<<<<<<< HEAD

		$query = "SELECT profile_pic FROM restaurants WHERE restaurant_id='$i' ";
		if ($r = mysqli_query ($dbc, $query)) {
		while ($row = mysqli_fetch_array ($r)) {

			echo " <div class=\"box\">
        <img src='images/resturantPics/".$row['profile_pic']."' alt=\"Avatar\" class=\"img\"  <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> </a>>
        <div class=\"overlay\">";
       

      print "<div class=\"box\">
        <img src=\"{$r[$i][1]}\" alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> {$r[$i][0]} </a>


      print"<div class=\"box\">
        <img src=\"{$r[$i][1]}\" alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> {$r[$i][0]} </a>
        <img src=\"{$r[$i][1]}\" alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> {$r[$i][0]} </a>
        </div>
        </div>";
   
   
}

}

else{

  $r = $bar-> retreve_both();
for ($i = 0; $i < count($r); $i++) {

      print"<div class=\"box\">
        <img src=\"{$r[$i][1]}\" alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> {$r[$i][0]} </a>
        </div>
        </div>";
   
}


}

   ?>



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
            <li>Ebtsam Alkhuzai &ensp; </li>
            <li>Esraa Samkari </li>
            <li>Joanna Assaeedi </li>
            <li>Joud Alajlan </li>
            <li>Rozan Alghamdi </li>
            <li>Wafaa Alshaikhi </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
  </html>
