var SE = SE || {};
var $ = jQuery;
SE.ele = {};
SE.util = {};
SE.anim = {};

SE.init = function(){
	SE.ele.about = document.getElementById('aboutme');
	SE.offset = SE.ele.exp.offsetTop;
	SE.setListeners();
	SE.navMenuListener();
}

SE.setListeners = function(){

}

SE.navMenuListener = function(){
	$('.hamburger').on('click', function(e){
		var $navbar = $('#navbar');
		if($navbar.hasClass('open')){
			$navbar.removeClass('open');
		} else {
			$navbar.addClass('open');
		}
	})
}


SE.anim.navbar = function(bool) {
	var $navbar = $(SE.ele.navbar);
	if(bool){
		$navbar.addClass('sticky');
	} else {
		$navbar.removeClass('sticky');
	}
}

SE.util.scrollHandler = function(){
	($(window).scrollTop() >= 600) ? SE.anim.navbar(true) : SE.anim.navbar(false);
}

// scroll handler
setInterval(function() {
    if ( SE.scrolled ) {
        SE.scrolled = false; 
        SE.util.scrollHandler();
    }
}, 50);

$(window).scroll(function() {
    SE.scrolled = true;
});




window.onload = SE.init;