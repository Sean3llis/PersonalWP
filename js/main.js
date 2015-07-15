var SE = {};
var $ = jQuery;
SE.ele = {};
SE.util = {};
SE.anim = {};

$(window).scroll(function() {
    SE.scrolled = true;
});

// scroll handler
setInterval(function() {
    if ( SE.scrolled ) {
        SE.scrolled = false; 
        SE.util.scrollHandler();
    }
}, 50);

SE.util.scrollHandler = function(){}
