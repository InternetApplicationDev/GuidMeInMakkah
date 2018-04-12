<html>
<head></head>
<body>


<?php
$idCoffee=1;
$idReturant=2;
$idBoth=3;
/*
 echo '<a href="rehref.php?id='.$idCoffee.'">coffee</a>';
echo '<a href="rehref.php?id='.$idReturant.'">Resturant</a>';
echo '<a href="rehref.php?id='.$idBoth.'">Both</a>';*/




			echo '<a href="listPage1.php?id='.$idCoffee.'" ><img id="Cafe" src="images/icons/coffee-cup.png" /></a>';
			echo '<a href="listPage1.php?id='.$idReturant.'"><img id="Restaurant" src="images/icons/tray.png" /></a>';
			echo '<a href="listPage1.php?id='.$idBoth.'"><img id="CafeAndRestaurant" src="images/icons/trayAndCoffee.png" /></a>';

			
			
			
		  /*<a href="listPage.php" ><img id="Cafe" src="images/icons/coffee-cup.png" /></a>
          <a href="listPage.php"><img id="Restaurant" src="images/icons/tray.png" /></a>
          <a href="listPage.php"><img id="CafeAndRestaurant" src="images/icons/trayAndCoffee.png" /></a>*/

?>



</body>

</html>