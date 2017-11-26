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
	// resize of browser window
	window.onresize = resize;
	function resize(e){
		if(this.innerWidth >= 992){
			$("#nav").css({ display: 'flex'});
			$('.hamburger').removeClass("is-active")
			console.log('bigger');
		}else if(this.innerWidth < 992 && !$('.hamburger').hasClass("is-active")){
			$("#nav").css({ display: 'none'});
		}
		
	}
	window.click = function(e){
		
	}
});