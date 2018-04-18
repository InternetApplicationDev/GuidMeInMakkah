<?php
if(isset($_GET['Logout'])){
  setcookie("theuser","",time()-60*60*24*30,'/');
  header('Location: index.php');
  exit;
}
$theuser = $_COOKIE['theuser'];
$dbc = mysqli_connect("localhost","root","12345678");
mysqli_select_db($dbc,"db");
$result = mysqli_query($dbc,"SELECT user_picture,user_email,user_first_name,user_last_name,user_bio From user where user_id = $theuser");
while($row = mysqli_fetch_array($result)){
  $picturePath = $row['user_picture'];
  $userName = $row['user_first_name'];
  $userName .= ' ';
  $userName .= $row['user_last_name'];
  $userBio = $row['user_bio'];
  $userEmail = $row['user_email'];
}
?>

<?php
function searchUserNameInIndexFile($userName){
	$data = file ('Users/Files/filesCommentIndex.txt');
	$fp = fopen('Users/Files/filesCommentIndex.txt', "r");

	$n = count ($data);
	$result = 0; 
	$tmpFilePointer=0; // depend on this value it will chane seek pointer
	$tmpName=""; // find match between user name and useres names in file
	$tmpPage=""; // find match between page name and pages names in file
	$tmpLengthOfFoundName; // to calculat the position of page names
	
	$pagenameAsArr=array();
	
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
			if($tmpChar == ')' && strlen($tmpPage)<2){ // end name
				break; // end of pages name
			}else if($tmpChar == ')' && strlen($tmpPage)>2){
				$result=2;
				array_push($pagenameAsArr,$tmpPage);
				break;
			}else if($tmpChar == ','){
				$result=2;
				array_push($pagenameAsArr,$tmpPage);
				$tmpPage ="";
				continue;
			}else{
				$tmpPage .=$tmpChar; // to make full page name from char pices
			}
		} // end for
	}

	fclose($fp);

	if($result==2)
	{
		return $pagenameAsArr;
	}else{
		return $result;
	}

}

function retrieveUsersComments($userNameWithHisComment,$user_name){
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
	
	if($user_name != $userName){
		return array("","");
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

function retrieveAllComment($userName,$pageName){
	$arrOfCommInThisPage=array();
	$path ="Users/Files/Comments/".$pageName.".txt";
	$data = file ($path);
	$n = count ($data);
	
	$tempUserName;
	for ( $i=0; $i < $n; $i++){
		$getUseANDCom = retrieveUsersComments($data[$i],$userName);
		if($userName == $getUseANDCom[0]){
			array_push($arrOfCommInThisPage,$getUseANDCom[1]);
		}
	}
	
	return $arrOfCommInThisPage;
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
  <script type="text/javascript">var userEmail = "<?= $userEmail ?>";</script>
  <script type = "text/javascript" src = "JS/javaScript.js"></script>
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Sweet Alert  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  <!-- pace preloader -->
  <script src="JS/pace.js"></script>
  <!-- contact button -->
  <link rel='stylesheet prefetch' href='css/pqbdwk.css'>
</head>
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
    <h1><?php echo $userName; ?></h1>
    <p><?php echo $userBio; ?></p>
    <br />
    <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <symbol id="icon-paperplane" viewBox="0 0 1024 1024">
          <title>paperplane</title>
          <path class="path1" d="M1009.376 5.12c-5.312-3.424-11.36-5.12-17.376-5.12-6.176 0-12.384 1.76-17.76 5.376l-960 640c-9.888 6.56-15.328 18.112-14.048 29.952 1.216 11.808 8.896 22.016 19.936 26.368l250.368 100.192 117.728 206.016c5.632 9.888 16.096 16 27.424 16.128 0.128 0 0.224 0 0.352 0 11.232 0 21.664-5.952 27.424-15.552l66.464-110.816 310.24 124.064c3.808 1.536 7.808 2.272 11.872 2.272 5.44 0 10.816-1.376 15.68-4.128 8.448-4.736 14.24-13.056 15.872-22.624l160-960c2.080-12.576-3.488-25.184-14.176-32.128zM100.352 664.864l741.6-494.432-539.2 577.184c-2.848-1.696-5.376-3.936-8.512-5.184l-193.888-77.568zM326.048 770.112c-0.064-0.128-0.16-0.192-0.224-0.32l606.176-648.8-516.768 805.184-89.184-156.064zM806.944 947.488l-273.312-109.312c-6.496-2.56-13.248-3.424-19.936-3.808l420.864-652.416-127.616 765.536z"></path>
        </symbol>
      </defs>
    </svg>
    <a href="#" class="contact-button" onclick="displayEmail()">
      Contact
      <svg class="icon icon-paperplane"><use xlink:href="#icon-paperplane"></use></svg>
      <span><?php echo $userEmail; ?></span>
    </a>
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
      <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 548.157 548.157" style="enable-background:new 0 0 548.157 548.157;" xml:space="preserve"><g transform="matrix(0.0676446, 0, 0, 0.0676446, 255.539, 255.539)"><link xmlns="" type="text/css" id="dark-mode" rel="stylesheet" class="active-path"/><style xmlns="" type="text/css" id="dark-mode-custom-style" class="active-path"/><g>
      	<path d="M545.027,112.765c-3.046-6.471-7.57-11.657-13.565-15.555c-5.996-3.9-12.614-5.852-19.846-5.852H292.351   c-11.04,0-20.175,4.184-27.408,12.56L9.13,396.279c-4.758,5.328-7.661,11.56-8.708,18.698c-1.049,7.139-0.144,13.941,2.712,20.417   c3.044,6.468,7.564,11.652,13.561,15.553c5.997,3.898,12.612,5.853,19.845,5.853h219.268c11.042,0,20.177-4.179,27.41-12.56   l255.813-292.363c4.75-5.33,7.655-11.561,8.699-18.699C548.788,126.039,547.877,119.238,545.027,112.765z M255.811,420.254H36.54   l95.93-109.632h219.27L255.811,420.254z" data-original="#000000" class="active-path" fill="#000000"/>
      </g></g> </svg> -->
      
	 <div class="content">

		 <h1>Comment</h1>
     
		<div class="containerComments" >
		<?php
			$getCommentPage = searchUserNameInIndexFile($userName);
			if(is_array($getCommentPage)){
				for ( $pages=0; $pages < sizeof($getCommentPage); $pages++){
					$comments = retrieveAllComment($userName,$getCommentPage[$pages]);
					for ( $i=0; $i < sizeof($comments); $i++){
					?>	
						<div class="commentsUserBox" >
							<p class="userNameInComment"><?php echo $userName; ?></p>
							<img src="images/pesonal icon.jpg" />
							<div><p class="userCommentInComment"><?php echo $comments[$i]; ?></p></div>
						</div>
						<?php
						echo '<br><hr>';
					}
				}
			}else{
				echo "you do not have any comment <br> <br>";
			}
			?>
			
			

		</div>

	</div>
	
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
