var WindowY = $(window).height();
var WindowX = $(window).width();

$(document).ready(function() {
	console.log(WindowX);
	$('.banner .img').css('width', WindowX);
});
