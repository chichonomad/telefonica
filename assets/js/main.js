
/* Start Document Ready */ 
$(document).ready(function(){
	//ejemplo("ready");

	
	$('#banner-home').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		autoplayTimeout:3500,
		dots:false
	});


	$('#mas-vendidos').owlCarousel({
    	loop:true,
    	margin:10,
    	autoplay:true,
    	autoplayTimeout:3500,
    	autoplayHoverPause:true,
    	responsiveClass:true,
    	dots:false,
	    responsive:{
	        0:{
	            items:2,
	            nav:true
	        },
	        600:{
	            items:4,
	            nav:false
	        },
	        1000:{
	            items:6,
	            nav:true,
	            loop:false
	        }
	    }
	});

});



/* Start Windows Load */ 
$(window).load(function(){
	


	
});


/* Smart Resize Windows */ 
$(window).bind("debouncedresize", function() {
	
});



/* Start Functions Event */ 
$(function() {
	$(document).on('click', '.open-avanzada', function(e) {
 		$(".avanzada").slideToggle();
 	});

 	$(document).on('click', '.comprobar-factibilidad', function(e) {
 		$(".factibilidad input").hide();
 		$(".comprobando").fadeIn();
 		setTimeout(function(){
 			$(".comprobando").hide();
 			$(".comprobado").fadeIn();
 			setTimeout(function(){
 				$(".factibilidad").fadeOut();
 			}, 5000);
 		}, 5000);
 		
 		e.preventDefault();
 	});

	


	
	
	
});



/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(240,244,244,1)";
}