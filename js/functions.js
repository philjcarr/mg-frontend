//Doc Ready Start
$(document).ready(function() {
	
	//How It Works - Image Fade In/Out
	$("#slider1").responsiveSlides({
		maxwidth: 745,
		speed: 2000,
		timeout: 4000
	});

	//Navigation Bar
	jQuery('header nav').meanmenu();

	//Toggle Active
	$(function() {
		$(".currencyBox").click(function() {
		  $(".currencyBox").removeClass("active");
		  $(this).addClass("active");
		  return false;
		});
		$(".subTypelink").click(function() {
		  $(".subTypelink").removeClass("active");
		  $(this).addClass("active");
		  return false;
		});
		$(".projectLinks").click(function() {
		  $(".projectLinks").removeClass("active");
		  $(this).addClass("active");
		  return false;
		});
	});

	//Toggle Help
	$('.show').click(function() {
		$(this).find(".text").toggle();
		$(this).next('.slidingDiv').slideToggle();
		return false;
	});
	$('.hide').click(function() {
		$(this).parent().slideUp();
		return false;
	});

	//Scroll To Element On The Page 
	var $root = $('html, body');
	$('a.anchor').click(function() {
	    $root.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 1000);
	    return false;
	});

});
//Doc Ready End
