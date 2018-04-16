<!DOCTYPE html>
<?php

function searchUserNameInIndexFile($userName,$pageName){
	$data = file ('Files/filesCommentIndex.txt'); 
	$fp = fopen('Files/filesCommentIndex.txt', "r");  
	
	$n = count ($data);
	$result=0; // 0-> no found user and page name
				// 1-> found user name
				 // 2-> found user and page name
	$tmpFilePointer=0; // depend on this value it will chane seek pointer
	$tmpName=""; // find match between user name and useres names in file
	$tmpPage=""; // find match between page name and pages names in file
	$tmpLengthOfFoundName; // to calculat the position of page names
	
	// search user name from file, if it found change var result to 1
	for ($i = 0; $i < $n; $i++) { // search line by line
		for ($coun = 1; $coun < strlen($data[$i]); $coun++){ // search char by char in the current line
			$tmpChar = substr( $data[$i], $coun, 1 ); // get current char
			if($tmpChar == ']'){ // end name
				$tmpLengthOfFoundName = strlen(substr( $data[$i],0,++$coun)); // sum the len of current user name
				break; // we do not need to search the rest of the current string
			}
			else 
				$tmpName .=$tmpChar; // to make full user name from char pices
			
		}
		
		if($tmpName == $userName){ // found user name from file
			$tmpFilePointer+=$tmpLengthOfFoundName; // calculat the postion of page name for this user
			$result=1; // found user name
			break;
		}
		
		$tmpFilePointer=$tmpFilePointer+strlen($data[$i]); // calculat the postion by adding len of previous line
		$tmpName=""; // to make another user name from file
	} 
	
	// if found user name than go search for page name 
	 //else return result value 0 to add user name and page name to file
	if ($result==1){
		// change current position
		fseek($fp,$tmpFilePointer);
		$pagesNames = fgets($fp);
		
		for ($i = 1; $i < strlen($pagesNames); $i++){
			$tmpChar = substr( $pagesNames, $i, 1 ); // get current char
			$tmpFilePointer++;
			if($tmpPage == $pageName){
				$result = 2; // found page name
				break;
			}else if($tmpChar == ')'){ // end name
				$tmpPage ="";
				break; // end of pages name
			}else if($tmpChar == ','){
				$tmpPage ="";
				continue;
			}else 
				$tmpPage .=$tmpChar; // to make full page name from char pices
		} // end for
	}
	
	
	fclose($fp);
	
	if($result==1){ // found just user name without page name,so add page name to this user
		// copy the rest of file content
		$fp = fopen("Files/filesCommentIndex.txt", "r");
		fseek($fp,$tmpFilePointer);
		$tmpReminderOfFileString="";
		while (!feof($fp)){
			$tmpReminderOfFileString .= fgets($fp);
		}
		fclose($fp);
		
		// add new page name and appand the copy rest after this page name
		$fp = fopen('Files/filesCommentIndex.txt', 'rw+');
		fseek($fp,$tmpFilePointer);
		fwrite($fp,",".$pageName.$tmpReminderOfFileString,500);
		fclose($fp);
		return $result;
	}
	else if($result==0){ // nothing found, so add both user and page name
		$fp = fopen('Files/filesCommentIndex.txt', 'ab');
		fwrite($fp,"[".$userName."](".$pageName.")\n");
		fclose($fp);
		return $result;
	}

return $result;	
}

function addUserNameComment($userName,$comments,$pageName){
	$fp = fopen('Files/Comments/'.$pageName.'.txt', 'ab');
	
	$userComment = str_replace("\r\n", "<br>", $comments);
		
	fwrite($fp,"[".$userName."](".$userComment.")\n");
	fclose($fp);
}

function retrieveUsersComments($userNameWithHisComment){
	$userName ="";
	$userComment = "";
	$i = 1;
	for ( ;$i < strlen($userNameWithHisComment); $i++){
		$tmpChar = substr( $userNameWithHisComment, $i, 1 ); // get current char
		if($tmpChar == ']'){ // end name
			break; // we do not need to search the rest of the current string
		}
		else 
			$userName .=$tmpChar; // to make full user name from char pices
	}
	
	$i+= 2;
	for ( ;$i < strlen($userNameWithHisComment); $i++){
		$tmpChar = substr( $userNameWithHisComment, $i, 1 ); // get current char
		if($tmpChar == ')'){ // end name
			break; // we do not need to search the rest of the current string
		}
		else 
			$userComment .=$tmpChar; // to make full user name from char pices
	}
	
	return array($userName,$userComment);
}

function addUserRate($userName,$userRate,$pageName){
	
}


?>
<?php
	if(isset($_POST["getStarValue"])){
		$comments = $_POST["CommentTA"];
		$userName ="hdi";
		$pageName ="page name";
		$userRate = $_POST["getStarValue"];
		searchUserNameInIndexFile($userName,$pageName);
		addUserNameComment($userName,$comments,$pageName);
		addUserRate($userName,$userRate,$pageName);
	}
?>
<html class="theBackGround">
<head>
	<title> <?php echo $_GET[className] ?> </title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<script type = "text/javascript" src = "JS/javaScript.js"></script>
	<script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<script>
	  function Slider(){
		$(".imagesSliders #0").show("fade",400);
		$(".imagesSliders #0").delay(5500).hide("slide",{direction:'left'},400);
		
		var sc = $(".imagesSliders img").size();
		--sc;
		var count = 1;
		 
		setInterval(function (){
			$(".imagesSliders #"+count).show("slide",{direction:'right'},400);
			$(".imagesSliders #"+count).delay(5500).hide("slide",{direction:'left'},400);
	  
			if(count == sc){
				count = 0;
			}else{
				count = count+1 ;
			}
		}, 6500);
	  }
	</script>

</head>
<body class="centerPage" onload="Slider()">

	<div class="navbar">
	<ul class="navmenu">
	  <li><a href="index.php"><img src="images/logo-small.png"/></a></li>
	  <li><a href="listPage.php?id=1">Cafe</a></li>
	  <li><a href="listPage.php?id=2">Restaurants</a></li>
	  <li><a href="listPage.php?id=3">Cafe & Restaurants</a></li>
	<li class="navmenu-right"><a href="Registration.html">Sign Up</a></li>
	  <li class="navmenu-right"><a href="Signin.html">Login</a></li>
	</ul>
	</div> <!-- navbar -->
	<div class ="header"> <!-- div header -->

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
   
  </div> <!-- header --> 

  <hr><br>
  
	<div class="fix_layout_center"> <!-- div name -->
	<div class="emptyBlackBackground"></div>
	<div class="imageIntro">
		<img src="images/cafe-intro-backfound.jpg"  alt="image"/>
	</div>
	<div class="textBlackBackground">
	   <?php 

	include 'DB.php';
	$bar = new connection;
	$r = $bar->individualRestaurant(1);
		 print " <p id=\"textSliderImg\">Wellcome To </br> ____ </br>
		 {$_GET[className]} </p>  </div>";

		if($r[0][7] == 1 ){

		print "<img class=\"starsBlackBackground\" id=\"star_0\" src=\"images/stars rate/1.png\" alt=\"image\"/>"; 

		}	
		else if($r[0][7] == 2){

		print "<img class=\"starsBlackBackground\" id=\"star_0\" src=\"images/stars rate/2.png\" alt=\"image\"/>"; 

		} else if ($r[0][7] == 3){

		print "<img class=\"starsBlackBackground\" id=\"star_0\" src=\"images/stars rate/3.png\" alt=\"image\"/>"; 

		} else if ($r[0][7] == 4){

		print "<img class=\"starsBlackBackground\" id=\"star_0\" src=\"images/stars rate/4.png\" alt=\"image\"/>"; 

		} else if ($r[0][7] == 5){

		print "<img class=\"starsBlackBackground\" id=\"star_0\" src=\"images/stars rate/5.png\" alt=\"image\"/>"; 

		} else {
		print "<img class=\"starsBlackBackground\" id=\"star_0\" alt=\"image\"/>"; 

		}
	 
	?>
	</div> 
	
</div> <!-- close div name-->
   
  <br><hr><hr>

	<div class="contenerTheRestOfcontint"> <!-- content STILL OPEN -->

		<table class="tableButtonReservation">
			<tr>
			<th>&nbsp &nbsp 150 RS</th>
			<th> <button class="buttonReservation" onclick="">Reservation</button> </th>
			</tr>
		</table>
		 
		<br>

	<div class="subBar"> <!-- subbar -->
    <ul class="navSubBar">
      <li><a href="#desci">Description </a></li>
	  <li><a href="#addr"> Address </a></li>
      <li><a href="#menu"> Menu </a></li>
      <li><a href="#comm"> Comment </a></li>
    </ul>
  </div> <!-- close sub bar -->
  
  
  <div id="desci"> <!-- discription  -->
	  <h1>Description</h1>
	  <?php 
	 print "<p class=\"description\"> {$r[0][2]} </p>";
	  ?>
 </div>
 
 

    <div class="imagesSliders"> 
		<?php
			$bar = new connection;
			$r = $bar->restaurantPics(1);

			for ($i = 0; $i < count($r); $i++) {
				// print"<img src=\"{$r[$i][0]}\" alt=\"Avatar\" >"; 
				print" <img id=\"{$i}\" src=\"{$r[$i][0]}\" border=\"0\" alt=\"image\"/>"; 
			}
		?>
    </div>
	<img  src="images/unhreat.png" title= "favorite"  onclick="changeImageOnclick()" id="imgClickAndChange" class="image_heart"/>
   
    <div class="contenerOfAddress"> <!-- ADDERSS -->
       <h1 id="addr">Address</h1>
			<?php
				$bar = new connection;

				$r = $bar->individualRestaurant(1);

				print"<a href='https://www.google.com/maps/@21.4406911,39.8099034,15z'><image  src=\"{$r[0][3]}\"/></a> ";

			?>	
	</div>

	<br><br>
    <h1 id="menu">Menu</h1>
	<?php 

$bar = new connection;
$r = $bar->individualRestaurant(1);
	  print"<image  src=\"{$r[0][9]}\" id=\"Menus_food\" height=\"580\" width=\"400\"/> ";

?>
	<br><br><br><br><br><br><br><br><hr><br><br><br>
   
<div class="containerComments" id="comm">
	<!--comments sections-->
	<div class="content">
		
		 <h1>Comment</h1>
      <!--
      if(has been log in)
      can commant
      else
      <center><hr><p style="font-size: 25px; color: red;">YOU MUST LOGIN FIRST TO COMMANTS</p><hr></center>
    -->
    <form action="individualprofile.php" method="post" >
      <table>
        <tr>
          <td> <img src="images/pesonal icon.jpg" class="imgUserInCommetn"/> </td>
          <td><table style="margin-left:-20%">
            <tr><td class="userNameInComment">user name</td></tr>
            <tr><td><textarea id="TAtest" name="CommentTA" rows="4" cols="50"  placeholder="write your comments"></textarea></td></tr>
            <tr><td >Your rating:<div class="stars" onclick="numOfRating()">
			<input type="radio" id="star5" name="star" value="5" >
			<label for="star5"></label>
			<input type="radio" id="star4" name="star" value="4">
			<label for="star4"></label>
			<input type="radio" id="star3" name="star" value="3" >
			<label for="star3"></label>
			<input type="radio" id="star2" name="star" value="2" >
			<label for="star2"></label>
			<input type="radio" id="star1" name="star" value="1">
			<label for="star1"></label>
		   </div></td>
          </tr>
        </table></td>
        <td><input type="submit" value="Submit" name="submit"></td>
		<td><input id="starValue" name="getStarValue" type="hidden" value="0"></td>
      </tr>
    </table>
  </form>
  <br> <br> <br><hr><hr><br> <br>
			
		<div class="Comment">
		<?php
		// how many comments of this page from file and prinit
		$data = file ('Files/Comments/page name.txt'); 
		$n = count ($data);

		for ( $j=0; $j < $n; $j++){
		$getUseANDCom = retrieveUsersComments($data[$j]);
		?>
		<div class="commentsUserBox" >
		<p class="userNameInComment"><?php echo $getUseANDCom[0]; ?></p>
		<img src="images/pesonal icon.jpg" />
		<div><p class="userCommentInComment"><?php echo $getUseANDCom[1]; ?></p></div>
		</div>
		<?php
		echo '<br><hr>';
		} // for end
		?>

		</div>
		
	</div>
</div>

 
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