var $=jQuery.noConflict();
 
(function($){
	"use strict";
	$(function(){
 
		/*------------------------------------*\
			#GLOBAL
		\*------------------------------------*/

		$(document).ready(function() {
			document.getElementById("year").innerHTML = new Date().getFullYear();
			footerBottom();
			$('.sidenav').sidenav();	
			$('.materialboxed').materialbox();
			//imageMasonry();	

		});
 
		$(window).on('resize', function(){
			footerBottom();
			//imageMasonry();
		});
 
		$(document).scroll(function() {

		});
 
		// if( parseInt( isHome ) ){

		// } 

		// if( parseInt( isSingular ) ){

		// } 

		if( parseInt( isPageGallery ) ){
			$(document).ready(function() {	
				imageIsotope();
				//Filtra por taxonomía "lugar" a la galería
				$('.is-checked').click();
			});		
			$(window).on('resize', function(){
				imageIsotope();
			});	

			$(".btn-zoom").click(function() {
				//buttonMenuScroll();
				var idButton = $(this).attr('id'); //Opción del menú
				console.log(idButton);
				$("img."+idButton).click();
			});
		} 

	});
})(jQuery);
 
/**
 * Fija el footer abajo
 */
function footerBottom(){
	var alturaFooter = getFooterHeight();
	$('.main-body').css('padding-bottom', alturaFooter );
}
function getHeaderHeight(){
	return $('.js-header').outerHeight();
}// getHeaderHeight
function getFooterHeight(){
	return $('footer').outerHeight();
}// getFooterHeight

//Masonry galería
function imageMasonry(){
	// init Packery
	var $grid = $('.grid').packery({
		itemSelector: '.grid-item',
		percentPosition: true
	});
	// layout Packery after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.packery();
	}); 
}

function imageIsotope(){

	// init Isotope
	var $grid = $('.grid').isotope({
	  itemSelector: '.element-item',
	  layoutMode: 'fitRows',
	  getSortData: {
	    section: '.section-gallery',
	    weight: function( itemElem ) {
	      var weight = $( itemElem ).find('.weight').text();
	      return parseFloat( weight.replace( /[\(\)]/g, '') );
	    }
	  }
	});

	// layout Isotope after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.isotope();
	}); 

	// bind filter button click
	$('#filters').on( 'click', 'button', function() {
	  var filterValue = $( this ).attr('data-filter');
	  // use filterFn if matches value
	  $grid.isotope({ filter: filterValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});

}
