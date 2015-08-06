$(document).ready(function (){

	$("#btnSignIn").mouseover(function (){

		$("#btnSignIn").stop().animate({
			'background-color': 'rgba(0, 192, 192, 1)'
		}, 100);

	});

	$("#btnSignIn").mouseleave(function (){

		$("#btnSignIn").stop().animate({
			'background-color': 'rgba(0, 192, 192, 0)'
		}, 100);

	});

	$("#btnSignUp").mouseover(function (){

		$("#btnSignUp").stop().animate({
			'background-color': 'rgba(8, 175, 55, 1)'
		}, 100);

	});

	$("#btnSignUp").mouseleave(function (){

		$("#btnSignUp").stop().animate({
			'background-color': 'rgba(0, 192, 192, 0)'
		}, 100);

	});

	$("#btnRegister").mouseover(function (){
		$("#btnRegister").stop().animate({
			'background-color': 'rgba(8, 175, 55, 1)'
		}, 100);
	});

	$("#btnRegister").mouseleave(function (){
		$("#btnRegister").stop().animate({
			'background-color': 'rgba(9, 208, 65, 1)'
		}, 100);
	});


});