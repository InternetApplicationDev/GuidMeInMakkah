<?php

class connection {

function connect()
    {
 ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE); 

if ($dbc = mysqli_connect ('localhost', 'root', '12345678'))  // connect
{		
print '<p>Successfully connected to MySQL.</p>';

 

}}

function address($id ){
$dbc = mysqli_connect ('localhost', 'root', '12345678');//conn

if (@mysqli_select_db ($dbc,'db')) {

$query = "SELECT * FROM restaurants WHERE restaurant_id = $id";
if ($r = mysqli_query ($dbc, $query)) {
	

$arry = array();
$x=0;
while ($row = mysqli_fetch_array ($r)) {	//fetch array get the rows 
	$arry[$x]=$row;
	$x++;

}//end of if 
return $arry;
}

else { // Query didn't run.	
die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");} 
}

else {		
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}	
	
} //end


//insert new user func
function InsertNewUser(){

$dbc = mysqli_connect ('localhost', 'root', '12345678');//conn

if (@mysqli_select_db ($dbc,'db')) {

if($_POST['submit'] == 'Submit'){

$query = "INSERT INTO User (ID , First_name, Last_name, E-mail, Password) 

VALUES (0, '{$_POST['Name']}', '{$_POST['l_name']}','{$_POST['Email']}', '{$_POST['password']}')";	

if (@mysqli_query ($dbc, $query)) {		
print '<p>The User has been added.</p>';	
}  else {		
print "<p>Could not add the user because: <b>" . mysqli_error($dbc) . "</b>. The query was $query.</p>"; 	
    }
   }
 }
} //end


function retreve_restrants(){
$dbc = mysqli_connect ('localhost', 'root', '12345678');

if (@mysqli_select_db ($dbc,'db')) {

$query = "SELECT restaurant_name, profile_pic FROM restaurants";
if ($r = mysqli_query ($dbc, $query)) {
	

$arry = array();
$x=0;
while ($row = mysqli_fetch_array ($r)) {	
	$arry[$x]=$row;
	$x++;

}//end of if 
return $arry;
}

else { // Query didn't run.	
die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");} 
}

else {		
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}	

 }//end of fun


function retreve_caffes(){
$dbc = mysqli_connect ('localhost', 'root', '12345678');

if (@mysqli_select_db ($dbc,'db')) {

$query = "SELECT cafe_name, profile_pic FROM cafe";
if ($r = mysqli_query ($dbc, $query)) {
	

$arry = array();
$x=0;
while ($row = mysqli_fetch_array ($r)) {	
	$arry[$x]=$row;
	$x++;

}//end of if 
return $arry;
}

else { // Query didn't run.	
die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");} 
}

else {		
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}	

 }//end of fun



function retreve_both(){
$dbc = mysqli_connect ('localhost', 'root', '12345678');

if (@mysqli_select_db ($dbc,'db')) {

$query = "SELECT cafeAndRest_name, profile_pic FROM cafeandrest";
if ($r = mysqli_query ($dbc, $query)) {
	

$arry = array();
$x=0;
while ($row = mysqli_fetch_array ($r)) {	
	$arry[$x]=$row;
	$x++;

}//end of if 
return $arry;
}

else { // Query didn't run.	
die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");} 
}

else {		
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}	

 }


function individualRestaurant($id){


$dbc = mysqli_connect ('localhost', 'root', '12345678');

if (@mysqli_select_db ($dbc,'db')) {

$query = "SELECT * FROM restaurants WHERE restaurant_id = $id";
if ($r = mysqli_query ($dbc, $query)) {
	

$arry = array();
$x=0;
while ($row = mysqli_fetch_array ($r)) {	
	$arry[$x]=$row;
	$x++;

}//end of if 
return $arry;
} 

else { // Query didn't run.	
die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");} 
}

else {		
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}	

 }//end of fun


function restaurantPics($id){


$dbc = mysqli_connect ('localhost', 'root', '12345678');
if (@mysqli_select_db ($dbc,'db')) {
$query = "SELECT restaurantPic FROM restaurantpics WHERE restaurant_id = $id";
if ($r = mysqli_query ($dbc, $query)) {
	

$arry = array();
$x=0;
while ($row = mysqli_fetch_array ($r)) {	
	$arry[$x]=$row;
	$x++;

}//end of if 
return $arry;
}

else { // Query didn't run.	
die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");} 
}

else {		
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}	

 }//end of fun


  }//end of class


?>


