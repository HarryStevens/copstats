var WindowY = $(window).height();
var WindowX = $(window).width();

function goToByScroll(id) {
	$('html,body').animate({
		scrollTop : $(id).offset().top
	}, 'slow');
}


$(document).ready(function() {
	console.log(WindowX);
	$('.banner .img').css('width', WindowX);

	$('.navbar a').click(function() {
		goToByScroll($(this).attr('href'));
		return false;
	});
});
