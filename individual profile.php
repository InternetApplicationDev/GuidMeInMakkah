<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/tmpStyle.css">
 
 <script language="javascript">
    function changeImageOnclick() {
		// add to database as favor page
        if (document.getElementById("imgClickAndChange").src == "http://localhost/projects_2018/images/hreat.png") 
        {
            document.getElementById("imgClickAndChange").src = "images/unhreat.png";
        }
		else 
        {
            document.getElementById("imgClickAndChange").src = "images/hreat.png";
        }
    }

	function LarrowOnclick() {
		// chack alt to change img to previos img
		 // check if it is first img or not
		 document.getElementById("Menus_food").src = "images/Menu_0.jpg";
	}
	
	
	function RarrowOnclick() {
		// chack alt to change img to next img
		// check if it is last img or not
		document.getElementById("Menus_food").src = "images/Menu_2.jpg";
		
	}
	
	</script>
 
</head>
<body>

<div class="navbar" >
    <ul class="navmenu">
      <li><a href="#Coffe">Cafe</a></li>
      <li><a href="#Restaurants">Restaurants</a></li>
      <li><a href="#Cafe_and_Restaurants">Cafe & Restaurants</a></li>
      <li class="navmenu-right"><a href="#signUp">Sign Up</a></li>
      <li class="navmenu-right"><a href="#login">Login</a></li>
    </ul>
 </div>
</br></br></br>
 <div class ="header">

PROJECT 
<div class="logo"> <img class="img" src="restaurant.png" alt="LOGO" > </div>

 </div>
 
 <hr>

<div class="container"> 
	<div class="top"> 
	
	<image class="inner_top_image" src="images/coffee shop.jpg" height="35%" width="35%">
	<image  src="images/unhreat.png" onclick="changeImageOnclick()" id="imgClickAndChange" class="image_heart"/>
	</image>
	<h1 style=" position: absolute;margin-left:68%;margin-top:-8.5%;color: white;">209</h1>
	<h1 style=" position: absolute;margin-left:29%;margin-top:-10%;color: white;"> coffee shop name 
	<div class="rating">
	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
	</div>
	</h1>
	<image src="images/count of resv.png" height="18%" width="13%"  style=" position:absolute; margin-left:36%;margin-top:2%;"/>
	
	</div>
	
	<form action="reser.php" method="post" style=" position: absolute;margin-left:40%;margin-top:-7%;">
		<input type="submit" value="Reservation">
	</form>
	<div id="content"> 
		<div class="col1">
		<table style="width: 100%; height:60%; margin-top:30%;border: 1px solid lightgrey">
			<tr><th ><a href="#desc" />Description <hr></th></tr>
			<tr><th ><a href="#Menu" />Menu & price<hr></th></tr>
			<tr><th ><a href="#Comment" /> Comment<hr></th></tr>
		</table> </div>  
		<div class="col2"> 
			<p> Home page > Coffee shop list > name of shop </p> 
			<h1>General information</h1>
			<p>The application will calculate the perfect weight and the recommended daily
			amounts of calories. And you can contact with your dietitian to ask them for
			better food system that will fit with your health status and your body needs, and
			ask them how to balance between the calories and other essential nutrients such as
			carbohydrates, protein and fat. Your messages to your Dietitian will be sent
			secretly an they reply also will be secretly.
			The application will calculate the perfect weight and the recommended daily
			amounts of calories. And you can contact with your dietitian to ask them for
			better food system that will fit with your health status and your body needs, and
			ask them how to balance between the calories and other essential nutrients such as
			carbohydrates, protein and fat. Your messages to your Dietitian will be sent
			secretly an they reply also will be secretly.
			The application will calculate the perfect weight and the recommended daily
			amounts of calories. And you can contact with your dietitian to ask them for
			better food system that will fit with your health status and your body needs, and
			ask them how to balance between the calories and other essential nutrients such as
			carbohydrates, protein and fat. Your messages to your Dietitian will be sent
			secretly an they reply also will be secretly.
			</p>
		</div> 
		<div class="col3"> <table style="width: 100%; height:80%; margin-top:30%;">
			<tr style="width: 40%; height:30%;"><th><a href="https://www.google.com/maps/place/%D8%A7%D9%84%D8%B4%D8%B1%D8%A7%D9%8A%D8%B9+%D9%85%D9%88%D9%84%E2%80%AD/@21.4598063,39.9498944,17.5z/data=!4m5!3m4!1s0x15c2004866707fa3:0xaa270f4cfde36fc9!8m2!3d21.4596801!4d39.9495681"  target="_blank"/><img src="images/map_1.jpg" height="40%" width="100%"/></th></tr>
			
		</table> </div>
		
	</div>
	
			<!--description sections-->
	<div class="content"> 
		<div id="desc">
		<hr>
		<h1>Description</h1></br></br>
			<center>
				<p class="descPrgh">The application will calculate the perfect weight and the recommended daily
				amounts of calories. And you can contact with your dietitian to ask them for
				better food system that will fit with your health status and your body needs, and
				ask them how to balance between the calories and other essential nutrients such as
				carbohydrates, protein and fat. Your messages to your Dietitian will be sent
				secretly an they reply also will be secretly.
				The application will calculate the perfect weight and the recommended daily
				amounts of calories. And you can contact with your dietitian to ask them for
				better food system that will fit with your health status and your body needs, and
				ask them how to balance between the calories and other essential nutrients such as
				carbohydrates, protein and fat. Your messages to your Dietitian will be sent
				secretly an they reply also will be secretly.
				The application will calculate the perfect weight and the recommended daily
				amounts of calories. And you can contact with your dietitian to ask them for
				better food system that will fit with your health status and your body needs, and
				ask them how to balance between the calories and other essential nutrients such as
				carbohydrates, protein and fat. Your messages to your Dietitian will be sent
				secretly an they reply also will be secretly.
				</p>
			</center>
		</div>  
		
	</div>
	
			<!--menus sections-->
	<div class="content"> 
		<div id="Menu">
		<hr>
		<h1>Menu & price</h1>
		</br></br>
		<center><table>
			<tr>
			<td><image  src="images/Larrow.png" alt="image_1" class="Larrow" onclick="LarrowOnclick() "height="20%" weight="20%"/> </td>
			<td><image  src="images/Menu_1.jpg" id="Menus_food" height="580" width="400"/> </td>
			<td><image  src="images/Rarrow.png" alt="image_3" class="Rarrow" onclick="RarrowOnclick()" height="20%" weight="20%"/> </td>
			</tr>
		</table></center>
			
		</div>  
		
	</div>
	
			<!--comments sections-->
	<div class="content"> 
		<div id="Comment">
		<h1>Comment</h1>
		<!-- 
			if(has been log in)
				can commant
			else 
				<center><hr><p style="font-size: 25px; color: red;">YOU MUST LOGIN FIRST TO COMMANTS</p><hr></center>
		-->
		<form action="/action_page.php">
			<table style="margin-left:2%;">
				<tr>
				<td> <img src="images/pesonal icon.jpg" height="35%" width="35%" /> </td>
				<td><table style="margin-left:-30%">
					<tr><td style="font-size: 20px;color: gray;">user name</td></tr>
					<tr><td><textarea rows="4" cols="50"  placeholder="write your comments"></textarea></td></tr>
					<tr><td >Your rating:<h1 style="margin-right:30%;margin-top:-7%;"><div class="rating" >
					<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
					</div></h1></td>
					</tr>
				</table></td>
				<td><input type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
		
		<hr>
		<hr>
		<?php
			// how many comments of this page from Database and prinit
			// instid of num 10 it will be var
			for ($i = 1; $i <= 3; $i++){
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
	

</div>

<div class="footer">Footer</div>

</body>
</html>



<!--
<a href="#arrow" ><img src="upArrow.png" title="up" height="5%" weight="5%"/></a>
id="arrow"

-->