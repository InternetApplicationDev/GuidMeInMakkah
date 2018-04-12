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

function changeImageOnclick() {
	// add to database as favor page
	if (document.getElementById("imgClickAndChange").src == "http://localhost/project_2018/images/hreat.png")
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


///////////////////////////////////////////////////	RESERVATION FORM ///////////////////////////////////////////////////

function validateForm() {
	// check complete required 'Name'
	if (isEmpty(document.getElementById('data_3').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Name is required!',
		})
		return false;
	}
	// Validate email
	if (!validateEmail(document.getElementById('data_5').value.trim())) {
		swal({
			type: 'error',
			title: 'Oops...',
			text: 'Email must be a valid email address!',
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
function validateEmail(email) {
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
	return isEmpty(email) || re.test(email);
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

/////////////////////////////////////////////////// footer siteMap ///////////////////////////////////////////////////
function showSiteMap(){
	swal({
		// text : "<img src= './images/GuideMeInMakkah_small.png'>",
		imageUrl: './images/GuideMeInMakkah_small.png',
		showConfirmButton: false,
	});
}
