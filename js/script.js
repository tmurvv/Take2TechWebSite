//JavaScript file
"use strict";
$(document).ready(function () {
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    var $pane = $('#pane1');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize > 440) {
            //if the window is greater than 440px wide then turn on jScrollPane..
            $pane.jScrollPane({
            scrollbarWidth:15, 
            scrollbarMargin:52
            });
        }
    }
// Execute on load
checkWidth();
// Bind event listener
$(window).resize(checkWidth);
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    
    function checkWidth() {
        var windowSize = $window.width();
        var mainNav = $(".js--main-nav");
        var hamburger = $(".nav__mobileNav--icon-hamburger");
        var close = $(".nav__mobileNav--icon-close");
        if (windowSize >= 900) {
            //if the window is greater than 600px wide then show mainNav
            if (mainNav.is(":hidden")) {
                console.log('inif', windowSize);
                mainNav.removeAttr("style"); 
                hamburger.css("display", "none");
                close.css("display", "none");              
            }
        } else {
            hamburger.css("display", "block");
            close.css("display", "none");
            mainNav.css('visibility', 'hidden');
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);

    //Header page--Show_Hide mainNav menu                                     
    $(".js--nav__mobileNav--icon").click(function () {
        var mainNav = $(".js--main-nav");
        var hamburger = $(".nav__mobileNav--icon-hamburger");
        var hamburgerVis = $(".nav__mobileNav--icon-hamburger:visible");
        var close = $(".nav__mobileNav--icon-close");
        mainNav.slideToggle(200, function() {
            if (mainNav.is(":hidden")) {
                mainNav.removeAttr("style");               
            }
        });
        if ((hamburgerVis).length == 0) {
            hamburger.css("display", "block");
            close.css("display", "none");
        }
        else {
            hamburger.css("display", "none");
            close.css("display", "block");
        }
    });  
});
