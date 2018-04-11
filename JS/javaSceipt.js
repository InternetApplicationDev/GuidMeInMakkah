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
