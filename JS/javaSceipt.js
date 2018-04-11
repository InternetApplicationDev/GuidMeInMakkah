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
			/*	RESERVATION FORM	*/

function validateForm() {
	// check complete required 'Name'
if (isEmpty(document.getElementById('data_3').value.trim())) {
alert('Name is required!');
return false;
}
	// Validate email
if (!validateEmail(document.getElementById('data_5').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
	// check complete required 'Date'
if (isEmpty(document.getElementById('data_6').value.trim())) {
alert('Date is required!');
return false;
}
	// check complete required 'Time'
if (isEmpty(document.getElementById('data_7').value.trim())) {
alert('Time is required!');
return false;
}

// check complete required 'Time'
if (isEmpty(document.getElementById('data_9').value.trim())) {
alert('Celebrity is required!');
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












$(function(){

  //Create variables we will be referencing in our tweens.
  var white = 'rgb(255,255,255)';
  var seafoam = 'rgb(30,205,151)';
  $buttonShapes = $('rect.btn-shape');
  $buttonColorShape = $('rect.btn-shape.btn-color');
  $buttonText = $('text.textNode');
  $buttonCheck = $('text.checkNode');

  //These are the button attributes which we will be tweening
  //This will be used with GSAP and the function below to tween
  var buttonProps = {
    buttonWidth : $buttonShapes.attr('width'),
    buttonX : $buttonShapes.attr('x'),
    buttonY : $buttonShapes.attr('y'),
    textScale : 1,
    textX : $buttonText.attr('x'),
    textY : $buttonText.attr('y')
  };

  //This is the update handler that lets us tween attributes
  function onUpdateHandler(){
    $buttonShapes.attr('width', buttonProps.buttonWidth);
    $buttonShapes.attr('x', buttonProps.buttonX);
    $buttonShapes.attr('y', buttonProps.buttonY);
    $buttonText.attr('transform', "scale(" + buttonProps.textScale + ")");
    $buttonText.attr('x', buttonProps.textX);
    $buttonText.attr('y', buttonProps.textY);
  }

  //Finally, create the timelines
  var hover_tl = new TimelineMax({
    tweens:[
      TweenMax.to( $buttonText, .15, { fill:white } ),
      TweenMax.to( $buttonShapes, .25, { fill: seafoam })
    ]
  });
  hover_tl.stop();

  var tl = new TimelineMax({onComplete:bind_mouseenter});
  //This is the initial transition, from [submit] to the circle
  tl.append( new TimelineMax({
    align:"start",
    tweens:[
      TweenMax.to( $buttonText, .15, { fillOpacity:0 } ),
      TweenMax.to( buttonProps, .25, { buttonX: (190-64)/2, buttonWidth:64, onUpdate:onUpdateHandler } ),
      TweenMax.to( $buttonShapes, .25, { fill: white })
    ],
    onComplete:function(){
      $buttonColorShape.css({
        'strokeDasharray':202,
        'strokeDashoffset':202
      });
    }
  }) );

  //The loading dasharray offset animation…
  tl.append(TweenMax.to($buttonColorShape, 1.2, {
    strokeDashoffset:0,
    ease:Quad.easeIn,
    onComplete:function(){
      //Reset these values to their defaults.
      $buttonColorShape.css({
        'strokeDasharray':453,
        'strokeDashoffset':0
      });
    }
  }));

  //The Finish - transition to check
  tl.append(new TimelineMax({
    align:"start",
    tweens:[
      TweenMax.to($buttonShapes, .3, {fill:seafoam}),
      TweenMax.to( $buttonCheck, .15, { fillOpacity:1 } ),
      TweenMax.to( buttonProps, .25, { buttonX: 3, buttonWidth:190, onUpdate:onUpdateHandler } )
    ]
  }));

  //The Reset - back to the beginning
  //For demo only - probably you would want to remove this.
  tl.append(TweenMax.to($buttonCheck, .1, {delay:1,fillOpacity:0}));

  tl.append(new TimelineMax({
    align:"start",
    tweens:[
      TweenMax.to($buttonShapes, .3, {fill:white}),
      TweenMax.to($buttonText, .3, {fill:seafoam, fillOpacity:1})
    ],
    onComplete:function() {
      $('.colins-submit').removeClass('is-active');
    }
  }));
  tl.stop();

  //-- On Click, we launch into the cool transition
  $('.colins-submit').on('click', function(e) {
    //-- Add this class to indicate state
    $(e.currentTarget).addClass('is-active');
    tl.restart();
    $('.colins-submit').off('mouseenter');
    $('.colins-submit').off('mouseleave');
  });

  bind_mouseenter();

  function bind_mouseenter() {
    $('.colins-submit').on('mouseenter', function(e) {
      hover_tl.restart();
      $('.colins-submit').off('mouseenter');
      bind_mouseleave();
    });
  }
  function bind_mouseleave() {
    $('.colins-submit').on('mouseleave', function(e) {
      hover_tl.reverse();
      $('.colins-submit').off('mouseleave');
      bind_mouseenter();
    });
  }

});
