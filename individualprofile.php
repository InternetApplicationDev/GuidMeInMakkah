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
	if(isset($_POST["submit"])){
	
	}
?>


<html class="theBackGround">
<head>

  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  
  <script type = "text/javascript" src = "JS/javaScript.js"></script>
  <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
  
</head>
<body class="centerPage" onload="Slider()">

  <div class="navbar">
    <ul class="navmenu">
      <li><a href="index.php"><img src="images/logo-small.png"/></a></li>
      <li><a href="listPage.php">Cafe</a></li>
      <li><a href="listPage.php">Restaurants</a></li>
      <li><a href="listPage.php">Cafe & Restaurants</a></li>
      <li class="navmenu-right"><a href="#signUp">Sign Up</a></li>
      <li class="navmenu-right"><a href="profile.php">Login</a></li>
    </ul>
  </div>
  <div class ="header">
    RESTAURANTS LIST
    <div class="logo"> <img class="img" src="images/icons/tray_black.png" alt="LOGO" > </div>
  </div>

  <hr>
  </br>
  <div class="fix_layout_center">
	  <div class="emptyBlackBackground">
			
	  </div>
	  <div class="imageIntro">
		<img src="images/cafe-intro-backfound.jpg"  alt="image"/>
	  </div>
	  <div class="textBlackBackground">
		<p id="textSliderImg">Wellcome To </br> ____ </br> Coffee shop name</p>
	  </div>
	  <img class="starsBlackBackground" id="star_0" src="images/stars rate/2.png" alt="image"/>
	 
  </div>
  
  
  </br>
  <p class="pathThisPageAsText"> home  > list > coffee shope name </p>
 <hr><hr>
 <div class="contenerTheRestOfcontint">
  <table class="tableButtonReservation">
	<tr>
	<th>&nbsp &nbsp  <font color="white">150</font> <font color="yellow">RS</font></th>
	<th> <button class="buttonReservation">Reservation</button> </th>
	</tr>
  </table>
  <br>
  <div class="subBar">
    <ul class="navmenu">
      <li><a href="#desci">Description </a></li>
	  <li><a href="#addr"> Address </a></li>
      <li><a href="#menu"> Menu </a></li>
      <li><a href="#comm"> Comment </a></li>
    </ul>
  </div>
  
  
  <div id="desci"></div>
  <h1>Description</h1>
  <textarea class="description" rows="8" cols="50">
	At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
   </textarea>
	<div class="imagesSliders">
		<img id="1" src="images/cafe-intro-backfound.jpg" border="0" alt="image"/>
		<img id="2" src="images/Cafe-and-Restaurant-Background.jpg" border="0" alt="image"/>
		<img id="3" src="images/Cafe-Background.jpg" border="0" alt="image"/>
    </div>
	
	<img  src="images/unhreat.png" title= "favorite"  onclick="changeImageOnclick()" id="imgClickAndChange" class="image_heart"/>
   
   <div class="contenerOfAddress">
		<h1 id="addr">Address</h1>
		<div class="addressMap">
		<ul>
			<li class="addressMap_1"><image  src="images/map_icon.png" height="45px" weight="45px"/> </li>
			<li><h4>Makkah</h4></li>
		</ul>
		
		</div>
		
		<div class="imgAdrress">
			<img  src="images/map_1.jpg" />
		</div>
		
	</div>
	
	
	<br><br>
    <h1 id="menu">Menu</h1>
	<div >
		<table>
			<tr>
			  <td><image  src="images/Menu_1.jpg" id="Menus_food" height="580" width="400"/> </td>
			  <td><image  src="images/Larrow.png" title= "previous"  class="Larrow" onclick="LarrowOnclick()" height="70px" weight="70px"/> </td>
			  <td><image  src="images/Rarrow.png" title= "next"  class="Rarrow" onclick="RarrowOnclick()" height="70px" weight="70px"/> </td>
			</tr>
		</table>
	</div>
	
	<br><br><br><br><br>
	
	
	
	
	<br><br><br><br></br>
  </div>
  
<div class="containerComments">
	<!--comments sections-->
  <div class="content">
    <div class="Comment">
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

  <hr>
  <hr>
  <?php
  // how many comments of this page from file and prinit
  $data = file ('Files/Comments/page.txt'); 
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

 
<div class="footer">Footer</div>

</body>
</html>

