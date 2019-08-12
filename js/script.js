//JavaScript file
"use strict";
// Menu State helper functions
function setMenuState() {
    const windowSize = window.innerWidth;
    const mainNav = document.querySelector("#js--main-nav");
    const hamburger = document.querySelector("#js--hamburgerIcon");
    const close = document.querySelector("#js--menuCloseIcon");
    if (windowSize >= 900) {
        mainNav.style.display='block'; 
        hamburger.style.display = 'none';
        close.style.display='none';              
        
    } else {
        mainNav.style.display='none'; 
        hamburger.style.display = 'block';
        close.style.display='none'; 
    }
}
function toggleMobileMenu() {
    const windowSize = window.innerWidth;
    const mainNav = document.querySelector("#js--main-nav");
    const hamburger = document.querySelector("#js--hamburgerIcon");
    const close = document.querySelector("#js--menuCloseIcon");
    //if window was resized to >= 900, show menu and return
    if (windowSize >= 900) {
        mainNav.style.display='block'; 
        hamburger.style.display = 'none';
        close.style.display='none';              
        return;
    }
    //if closed icon showing, close menu
    if (close.style.display === 'block') {
        mainNav.style.display='none'; 
        hamburger.style.display = 'block';
        close.style.display='none';
    //if no close icon, show menu
    } else {
        mainNav.style.display='block'; 
        hamburger.style.display = 'none';
        close.style.display='block'; 
    }
}
//portfolio flip cards helper functions
function cardClick(e) {
    const card = e.target.id;
    const popup = document.querySelector(`#js--popup${card}`);
    const backCard = document.querySelector(`#js--back${card}`);
    popup.style.transform = 'rotatey(-180deg)';
    backCard.style.tranform = 'rotatey(0)';
    backCard.style.opacity = 1;
    backCard.style.visibility = 1;              
}
function popCardBack(e) {
    const card = e.target.id;
    const popup = document.querySelector(`#js--popup${card}`);
    const backCard = document.querySelector(`#js--back${card}`);
    popup.style.transform = 'rotatey(0)';
    backCard.style.tranform = 'rotatey(-180deg)';
    backCard.style.opacity = 0;
    backCard.style.visibility = 0;        
}