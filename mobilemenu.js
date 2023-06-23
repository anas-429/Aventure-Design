// VARIABLES

var hamburger = document.querySelector('.hamburger');
var exitMobile = document.querySelector('.exit-mobile');

// EVENT LISTENERS

hamburger.addEventListener("click", function() {
    mobileMenu.style.display = "block";
    document.querySelector('body').style.overflow = "none";
})

exitMobile.addEventListener("click", function() {
    mobileMenu.style.display = "none";
})