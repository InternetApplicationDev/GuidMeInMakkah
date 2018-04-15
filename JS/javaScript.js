$(document).ready(function(){
	$('#wrapper').fullpage({
		controlArrows: false,
		loopBottom: true,
		afterRender: function () {
			setInterval(function () {
				$.fn.fullpage.moveSlideRight();
			}, 3000);
		}
	});
});


var heart ="unheart";

function changeImageOnclick() {
	// add to database as favor page
	if (heart == "unheart")
	{
		document.getElementById("imgClickAndChange").src = "images/hreat.png";
		heart="heart";
	}
	else
	{
		document.getElementById("imgClickAndChange").src = "images/unhreat.png";
		heart="unheart";
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

function checkTA(){
	// chack user comment from text area
	if(document.getElementById("TAtest").value.trim().length < 1){
		alert("please enter something");
	}else{
		document.getElementById("commentsForm").submit();
	}
}

function numOfRating(){
	// get user rate number
	var num = document.querySelector('.stars input:checked').value;
	document.getElementById("starValue").value = num;
}


///////////////////////////////////////////////////	RESERVATION FORM ///////////////////////////////////////////////////

function validateForm() {
	// check complete required 'Name'
	if (isEmpty(document.getElementById('Name').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Name is required!',
		})
		return false;
	}
	// check complete required 'last name '
	if (isEmpty(document.getElementById('l_name').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'password is required!',
		})
		return false;
	}
	// check complete required 'E-mail'
	if (isEmpty(document.getElementById('Email').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'password is required!',
		})
		return false;
	}

	// Validate email
	if (!validateEmail(document.getElementById('Email').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Email must be a valid email address!',
		})
		return false;
	}
	
	// check complete required 'password'
	if (isEmpty(document.getElementById('password').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'password is required!',
		})
		return false;
	}

	// check complete required 'Date'
	if (isEmpty(document.getElementById('data_6').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Date is required!',
		})
		return false;
	}
	// check complete required 'Time'
	if (isEmpty(document.getElementById('data_7').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Time is required!',
		})
		return false;
	}
	// check complete required 'Time'
	if (isEmpty(document.getElementById('data_9').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Occasion is required!',
		})
		return false;
	}

	return true;
}


// check empty
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
// Validate email
function validateEmail(Email) {
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
	return isEmpty(Email) || re.test(Email);
}


/////////////////////////////////////////////////// footer Developers ///////////////////////////////////////////////////
function showDevFunction() {
	var x = document.getElementById("developersNames");
	var footer = document.getElementById("theFooter");
	if(x.style.display=="block"){
		x.style.display="none";
		footer.style.height = "75px";
	} else {
		x.style.display="block";
		footer.style.height = "180px";
	}
}

/////////////////////////////////////////////////// log in ///////////////////////////////////////////////////
function loginAlert(loginState){
	if(loginState == 1){
		swal({
			type: 'success',
			title: 'You Have Been Logged In sccessfully',
			showConfirmButton: false,
			timer: 1500,
		});
		alert(loginState);
	}
	else{
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Incorrect email or password',
		});
		alert(loginState);
	}
}
/////////////////////////////////////////////////// footer siteMap ///////////////////////////////////////////////////
function showSiteMap(){
	swal({
		// text : "<img src= './images/GuideMeInMakkah_small.png'>",
		imageUrl: './images/GuideMeInMakkah_small.png',
		showConfirmButton: false,
	});
}
