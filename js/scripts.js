var WindowY = $(window).height();
var WindowX = $(window).width();

function goToByScroll(id) {
	$('html,body').animate({
		scrollTop : $(id).offset().top
	}, 'slow');
}


$(document).ready(function() {
	//Set banner img width to window width
	$('.banner .img').css('width', WindowX);

	//Set nav width to about section width
	function nav2about() {
		var aboutWidth = $('.about').css('width');
		$('.navbar .container').css('width', aboutWidth);
	}

	nav2about();
	$(window).resize(function() {

		console.log('woah');
		nav2about();
	});

	//Auto scroll to sections from navbar
	$('.navbar a').click(function() {
		goToByScroll($(this).attr('href'));
		return false;
	});

	//Auto focus inputs on modal shows
	$('#login-modal').on('shown.bs.modal', function() {
		$('.login-focus').focus()
	});
	$('#contact-modal').on('shown.bs.modal', function() {
		$('.contact-focus').focus()
	});
	
	//Clear modal inputs on close
	$('.modal').on('hidden.bs.modal', function(){
		$('input').val('');
		$('textarea').val('');
	});
});
