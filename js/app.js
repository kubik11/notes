$(document).ready(function(){
	$('.hamburger').click(function(){
		$(this).toggleClass('is-active');
		if(!$(this).hasClass("is-active")){
			$(".nav").fadeOut('slow');
		}else{
			// $(".nav").css('display', 'block');
			$(".nav").fadeOut().fadeIn('slow');
		}
	});
	window.resize = function(){
		console.log('sc');
	}
});