
jQuery(document).ready(function($){
	$('span').css ('color', '#ff0000');
	$("span").wrap ("<div> </div>");
	$('div').css ('border', 'solid 1px green');
	$('div').css ('margin-left', '30px');

	
	//jQuery Triggering manipulation.
	//Change font color of the  <span> element on mouseover
	/*
	$("span").hover( function() { 
    $(this).css("color", "#33CC33");
    })
	*/


    //Change font color of the  <span> element on mouseover and on mouseout
    $('span').mouseover(function(){
	$(this).css('color','#33CC33');
	}).mouseout(function(){
		$(this).css('color','#ff0000');
		});

	//Wrap the <span> element with a <div> on click on him.
	//Add the border to the <div> element after the click
	//Move the <div> element to the right by 30px. after adding the border.
	$('span').click(function(){
		$(this).wrap ('<div></div>');
		$(this).unbind();
		$(this).css ('border', 'solid 1px #ff0000');
		$(this).unbind();
		$('div div').css ('margin-left', '40px');
		//$('div div').css ('border', 'solid 1px yellow');
		// add padding to first div
		$('div div').css ('padding', '10px');
		// add padding to the second div
		$(this).css ('padding', '5px');

	}); 
});







