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

	//Accordion
    var link = $(".accordion a");
    link.on('click', function(e) {
        e.preventDefault();
        var a = $(this).attr("href");
        $(a).slideDown(300);
        $(".accordion div").not(a).slideUp(300);
    });
    $('.accorLink').click(function() {
        $('.accorLink').removeClass('active');    
        $(this).addClass('active');
    });

    //Forgot Details Toggle
    $('.detailInput').hide();
	$('.forgotDetails').change(function () {
	    $(this).find("option").each(function () {
	        $('#' + this.value).hide();
	    });
	    $('#' + this.value).show();

	});

    //Animation
    var controller = $.superscrollorama();
	controller.addTween('.fade-it', TweenMax.from( $('.fade-it'), .5, {css:{opacity: 0}}));
	controller.addTween('.fly-it', TweenMax.from( $('.fly-it'), .25, {css:{right:'2000px'}, ease:Quad.easeInOut}));
	controller.addTween('.scale-it', TweenMax.fromTo( $('.scale-it'), .25, {css:{opacity:0}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1}, ease:Quad.easeInOut}));

	//Back Top Top
	var offset = 220;
	var duration = 500;
	$(window).scroll(function() {
		if ($(this).scrollTop() > offset) {
			$('.backToTop').fadeIn(duration);
		} else {
			$('.backToTop').fadeOut(duration);
		}
	});
	
	$('.backToTop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, duration);
		return false;
	})

});
//Doc Ready End
