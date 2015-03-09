var WindowY = $(window).height();
var WindowX = $(window).width();

function goToByScroll(id) {
	$('html,body').animate({
		scrollTop : $(id).offset().top
	}, 'slow');
}

//Set nav width to about section width
function nav2about() {
	var aboutWidth = $('.about').css('width');
	$('.navbar .container').css('width', aboutWidth);
}


$(document).ready(function() {
	//Set nav width to about section width
	nav2about();
	$(window).resize(function() {
		nav2about();
	});

	//Set banner img width to window width
	$('.banner .img').css('width', WindowX);

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
	$('.modal').on('hidden.bs.modal', function() {
		$('input').val('');
		$('textarea').val('');
	});
	
	//Contact modal, when submit button is click, show a message
	$('.contact-submit').mousedown(function(){
		$('.contact-before').addClass('hide').removeClass('show');
		$('.contact-after').addClass('show').removeClass('hide');
	});
	$('#contact-modal').on('hidden.bs.modal', function() {
		$('.contact-before').addClass('show').removeClass('hide');
		$('.contact-after').addClass('hide').removeClass('show');		
	});
});
