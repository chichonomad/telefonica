
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


	calculaPrecios();

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

	$(document).on('click', '.ver-video', function(e) {
 		$(".modal-video").slideToggle();
 		$("#video").html('<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ufJhV8J8VA4?rel=0&autoplay=1"></iframe>');
 	});


 	$(document).on('click', '.cerrar-video', function(e) {
 		$(".modal-video").slideToggle();
 		$("#video").html('');
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

	
 	$("select, input[type='radio']").change(function() {
 		calculaPrecios();
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


function calculaPrecios(){
	
	/* Calculos Cloud */
	var cloudCloud = parseInt($('.cloud-cloud').val());
	var cloudAlmacenamiento = parseInt($(".cloud-almacenamiento").val());
	var cloudRam = parseInt($(".cloud-ram").val());
	var cloudProcesador = parseInt($(".cloud-procesador").val());

	var totalCloud = cloudCloud + cloudAlmacenamiento + cloudRam + cloudProcesador;
	$(".precioCloud").val(totalCloud);
	var cloud10 = totalCloud*10;
	cloud10 = numeral(cloud10).format('$ 0,0');
	cloud10 = cloud10.replace(",", ".");
	totalCloud = numeral(totalCloud).format('$ 0,0');
	totalCloud = totalCloud.replace(",", ".");
	$(".cloud-cloud-precio").html(totalCloud);
	$(".cloud-1").html(totalCloud);
	$(".cloud-10").html(cloud10);
	

	/* Calculos Internet */
	if($("input[name='internet']:checked").length > 0){
		var totalInternet = parseInt($( "input[name='internet']:checked" ).val());
	}else{
    	var totalInternet = parseInt(0);
	}
	
	$(".precioInternet").val(totalInternet);
	var internet10 = totalInternet*10;
	internet10 = numeral(internet10).format('$ 0,0');
	internet10 = internet10.replace(",", ".");
	totalInternet = numeral(totalInternet).format('$ 0,0');
	totalInternet = totalInternet.replace(",", ".");
	$(".internet-precio").html(totalInternet);
	$(".internet-1").html(totalInternet);
	$(".internet-10").html(internet10);


	/* Calculos Movil */
	var totalMovil = parseInt($( "input[name='movil']:checked" ).val());
	$(".precioMovil").val(totalMovil);
	var movil10 = totalMovil*10;
	movil10 = numeral(movil10).format('$ 0,0');
	movil10 = movil10.replace(",", ".");
	totalMovil = numeral(totalMovil).format('$ 0,0');
	totalMovil = totalMovil.replace(",", ".");
	$(".movil-precio").html(totalMovil);
	$(".movil-1").html(totalMovil);
	$(".movil-10").html(movil10);

	calculaTotales();
}



function calculaTotales(){
	var total1 = parseInt($(".precioCloud").val()) + parseInt($(".precioInternet").val()) + parseInt($(".precioMovil").val());
	var total10 = total1*10;

	var stringtotal1 = numeral(total1).format('$ 0,0');
	stringtotal1 = stringtotal1.replace(",", ".");

	var stringtotal10 = numeral(total10).format('$ 0,0');
	stringtotal10 = stringtotal10.replace(",", ".");

	$(".total1 b").html(stringtotal1)
	$(".total10 b").html(stringtotal10);

	$(".finalizar-compra").attr('href', 'finalizar-compra.php?val='+total10);
}