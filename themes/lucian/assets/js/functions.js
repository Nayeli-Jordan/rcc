var $=jQuery.noConflict();

(function($){
    "use strict";
    $(function(){

        /*------------------------------------*\
            #GLOBAL
        \*------------------------------------*/
        $(window).ready(function(){
            footerBottom();

        });

        $(window).on('resize', function(){
            footerBottom();
        });

        $(window).scroll(function(){
            lineScroll();
        });

        $(".btn-open-modal").click(function() {
            $('body').addClass("overflow-hidden");
        });

        $(".w3-closebtn").click(function() {
            $('body').removeClass("overflow-hidden");
        });

        $( "#row-animated2 a" ).click(function(e) {
            //$( "#row-animated2 a" ).on('click', function(e) {
            //e.preventDefault();
            $('#zo-header > .container').addClass("bg-light");
            $( "#row-animated1, #row-animated2" ).animate({
                bottom: "+=1000"
            }, 1000, function() {
                // Animation complete.
            });
        });

    });
})(jQuery);

//Footer Bottom
function getHeaderHeight(){
    return $('.js-header').outerHeight();
}// getHeaderHeight

function getFooterHeight(){
    return $('#zo-footer-top').outerHeight();
}// getFooterHeight

function footerBottom(){
    var alturaFooter = getFooterHeight();
    $('.main-body').css('padding-bottom', alturaFooter );
    console.log(getFooterHeight());
}


function formWrap(){
    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );

        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();
}

function lineScroll(){
    //var go = true;
    if ($(window).scrollTop() > 50) {
        $( ".line" ).animate({
            height: "120px"
        }, 500);
        //go = false;
    }
}