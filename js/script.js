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
            console.log('inelse', windowSize)
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

    //Projects page--Show technical deets popups for touch screens
    //Card1
    $(".js--cardFrontTechnical1").click(function () {
        $(".js--popup1").css("transform", "rotatey(-180deg)");
        $("#popup1").css("transform", "rotatey(0)");
        $("#popup1").css("opacity", "1");
        $("#popup1").css("visibility", "1");                
    });
    $(".js--popBack1").click(function () {         
       $(".js--popup1").css("transform", "rotatey(0)");
        $("#popup1").css("transform", "rotatey(-180)");
        $("#popup1").css("opacity", "0");
        $("#popup1").css("visibility", "0");         
    });
    //Card2
    $(".js--cardFrontTechnical2").click(function () {
        $(".js--popup2").css("transform", "rotatey(-180deg)");
        $("#popup2").css("transform", "rotatey(0)");
        $("#popup2").css("opacity", "1");
        $("#popup2").css("visibility", "1");  
    });
    $(".js--popBack2").click(function () {
        $(".js--popup2").css("transform", "rotatey(0)");
        $("#popup2").css("transform", "rotatey(-180)");
        $("#popup2").css("opacity", "0");
        $("#popup2").css("visibility", "0"); 
    });
    //Card3
    $(".js--cardFrontTechnical3").click(function () {
        $(".js--popup3").css("transform", "rotatey(-180deg)");
        $("#popup3").css("transform", "rotatey(0)");
        $("#popup3").css("opacity", "1");
        $("#popup3").css("visibility", "1");  
    });
    $(".js--popBack3").click(function () {
        $(".js--popup3").css("transform", "rotatey(0)");
        $("#popup3").css("transform", "rotatey(-180)");
        $("#popup3").css("opacity", "0");
        $("#popup3").css("visibility", "0"); 
    });
    //Card4
    $(".js--cardFrontTechnical4").click(function () {
        $(".js--popup4").css("transform", "rotatey(-180deg)");
        $("#popup4").css("transform", "rotatey(0)");
        $("#popup4").css("opacity", "1");
        $("#popup4").css("visibility", "1");  
    });
    $(".js--popBack4").click(function () {
        $(".js--popup4").css("transform", "rotatey(0)");
        $("#popup4").css("transform", "rotatey(-180)");
        $("#popup4").css("opacity", "0");
        $("#popup4").css("visibility", "0"); 
    });
    //Card5
    $(".js--cardFrontTechnical5").click(function () {
        $(".js--popup5").css("transform", "rotatey(-180deg)");
        $("#popup5").css("transform", "rotatey(0)");
        $("#popup5").css("opacity", "1");
        $("#popup5").css("visibility", "1");  
    });
    $(".js--popBack5").click(function () {
        $(".js--popup5").css("transform", "rotatey(0)");
        $("#popup5").css("transform", "rotatey(-180)");
        $("#popup5").css("opacity", "0");
        $("#popup5").css("visibility", "0"); 
    });   
});

