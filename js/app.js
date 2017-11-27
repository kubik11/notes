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
	var viewUI = {
		DOMStrings: {
			forms: $('.forms'),
			signUpForm: $('#sign-up-form'),
			overlay: $('.overlay'),
			loginForm: $('#login-form'),
			forgotForm: $('#forgot-form'),
			userChange: $('#username-change'), //from profile page 
			emailChange: $('#email-change'),
			passwordChange: $('#password-change')
		}
	}
	window.addEventListener('click', onClick);
	function onClick(e){
		var target = e.target;
		toSignUp(target);//Open and close sign up form
		toLogin(target); //Open and close login form
		toForgot(target); // close forget form 
		Change(target); // change username from profile page
	}
	function toSignUp(e){
		if(e.id == 'sign-up'){
			viewUI.DOMStrings.forms.fadeIn();
			viewUI.DOMStrings.signUpForm.fadeIn();
			viewUI.DOMStrings.overlay.fadeIn();
		}
		if (e.id == 'cancel-sign-up') {
			viewUI.DOMStrings.forms.fadeOut();
			viewUI.DOMStrings.signUpForm.fadeOut();
			viewUI.DOMStrings.overlay.fadeOut();
		}
	}
	function toLogin(e){
		if(e.id == 'to-login'){
			// закрываем меню
			if(window.innerWidth < 992){
				$('.hamburger').removeClass("is-active");
				$(".nav").fadeOut('slow');
			}
			// 
			viewUI.DOMStrings.forms.fadeIn();
			viewUI.DOMStrings.loginForm.fadeIn();
			viewUI.DOMStrings.overlay.fadeIn();
		}
		if (e.id == 'cancel-login') {
			viewUI.DOMStrings.forms.fadeOut();
			viewUI.DOMStrings.loginForm.fadeOut();
			viewUI.DOMStrings.overlay.fadeOut();
		}
		if (e.classList.contains('register')) {
			viewUI.DOMStrings.forgotForm.fadeOut();
			viewUI.DOMStrings.loginForm.fadeOut(300, function(){
				viewUI.DOMStrings.signUpForm.fadeIn();
			});
		}
		if (e.id == 'hint') {
			viewUI.DOMStrings.loginForm.fadeOut(300, function(){
				viewUI.DOMStrings.forgotForm.fadeIn();
			});
		}
	}
	//forgot form
	function toForgot(e){
		if (e.id == 'cancel-forgot') {
			viewUI.DOMStrings.forgotForm.fadeOut();
			viewUI.DOMStrings.forms.fadeOut();
			viewUI.DOMStrings.overlay.fadeOut();
		}
	}
	//********************************PROFILE PAGE
	function Change(e){
		var id, form;
		if (e.id == 'cancel-username') {
			viewUI.DOMStrings.forms.fadeOut();
			viewUI.DOMStrings.userChange.fadeOut();
			viewUI.DOMStrings.overlay.fadeOut();
		}
		if (e.id == 'cancel-email') {
			viewUI.DOMStrings.forms.fadeOut();
			viewUI.DOMStrings.emailChange.fadeOut();
			viewUI.DOMStrings.overlay.fadeOut();
		}
		if (e.id == 'cancel-new-password') {
			viewUI.DOMStrings.forms.fadeOut();
			viewUI.DOMStrings.passwordChange.fadeOut();
			viewUI.DOMStrings.overlay.fadeOut();
		}
		if(e.parentNode.classList.contains('t-row')){
			id = e.parentNode.id;
			if (id == 'UserID') {
				 viewUI.DOMStrings.forms.fadeIn();
				 viewUI.DOMStrings.userChange.fadeIn();
				 viewUI.DOMStrings.overlay.fadeIn();
				console.log('WRONG');
			}
			if(id == 'EmailID'){
				 viewUI.DOMStrings.forms.fadeIn();
				 viewUI.DOMStrings.emailChange.fadeIn();
				 viewUI.DOMStrings.overlay.fadeIn();
			}
			if (id == 'PasswordID') {
				 viewUI.DOMStrings.forms.fadeIn();
				 viewUI.DOMStrings.passwordChange.fadeIn();
				 viewUI.DOMStrings.overlay.fadeIn();
			}
			console.log(e.parentNode.id);
		}
	}
});