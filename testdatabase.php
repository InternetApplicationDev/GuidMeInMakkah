

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script type="text/javascript" src= "JS/javaScript.js"></script>
  <!-- Sweet Alert  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
 <script src="JS/pace.js"></script>
</head> 
<body>

<?php
 
include 'DB.php';

$bar = new connection;

$r = $bar->individualRestaurant(1);
print_r($r);


for ($i = 0; $i < count($r); $i++) {

print"<p> {$r[$i][o]}</p>
<p> {$r[$i][1]}</p>
<p> {$r[$i][2]}</p>
<p> {$r[$i][3]}</p>
<p> {$r[$i][4]}</p>
<p> {$r[$i][5]}</p>
<p> {$r[$i][6]}</p>
<p> {$r[$i][7]}</p>
<img src=\"{$r[$i][8]}\" alt=\"Avatar\">
<img src=\"{$r[$i][9]}\" alt=\"Avatar\">";


} ?>


	 <div >
		<table>
			<tr>
			  <td><image  src="images/Menu_1.jpg" id="Menus_food" height="580" width="400"/> </td>
			  <td><image  src="images/Larrow.png" title= "previous"  class="Larrow" onclick="LarrowOnclick()" height="70px" weight="70px"/> </td>
			  <td><image  src="images/Rarrow.png" title= "next"  class="Rarrow" onclick="RarrowOnclick()" height="70px" weight="70px"/> </td>
			</tr>
		</table>
	</div>



	<br><br><br><br></br>

</body>
</html>
