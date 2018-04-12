<html>
<head></head>
<body>
<?php

 $count = 5;
	 $dbc = @mysqli_connect ('localhost', 'root', '12345678');
	 @mysqli_select_db ($dbc,'db');
	 
	  for ($i = 0; $i < $count; $i++) {
		  
		$query = "SELECT profile_pic FROM restaurants WHERE restaurant_id='$i' ";  
		if ($r = mysqli_query ($dbc, $query)) {
		while ($row = mysqli_fetch_array ($r)) {
			/*echo "<img src='images/resturantPics/".$row['profile_pic']."' />";*/
			

			echo " <div class=\"box\">
        <img src='images/resturantPics/".$row['profile_pic']."' alt=\"Avatar\" class=\"img\">
        <div class=\"overlay\">
        <a href=\"individualprofile.php\"  type=\"button\" value=\"Input Button\" class=\"text\"> Click </a>
        </div>
        </div>";
		
		
		
		
		}
	  }} 
?>


</body>

</html>