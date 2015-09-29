
jQuery(document).ready(function($){
	for (var i = 1; i <= 160; i ++) {
		$('div').append( '<p>' + i + '</p>' );
	}

	$('p').each(function(){
			$('p').addClass('number'); //adauga clasa
			var content = $(this).html(); // iau continutul actualului <p>
			$(this).attr('id', content);
		if(content % 2 == 1){
			$('p[id =' + content + ']').addClass('odd');
			$('p[id = ' + content + ']').css('color', '#00FF00');
		}
		else{
			$('p[id = ' + content + ']').addClass('even')
			$('p[id = ' + content + ']').css('color', '#FF0000');
		};

		$(this).click(function(){
			$(this).text($(this).html()*2);
			$(this).addClass('even'); //orice numar dublat va fi mereu par
			$(this).removeClass('odd');
		});	

	});

});

