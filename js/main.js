(function($){

	$(document).ready(function(){
		mainLogoAnimation();
	});

	function mainLogoAnimation(){
		var s = Snap("#maintest");
		var mainCircle = s.circle(250,250,100);
		var radius = mainCircle.node.r.baseVal.value;
		var length = circum(radius);
		mainCircle.attr({
	    fill: "transparent",
	    stroke: "#fff",
	    strokeWidth: "4px"
		});
		var path = $('#maintest circle');
		var wrapper = path.parents('#maintest');
		animateElement(mainCircle.node, wrapper, length );
	}

	function animateElement(path, parent, length){
		path.style.strokeDasharray = length + ' ' + length;

		// offset that stroke so that it is all 
		path.style.strokeDashoffset = length;

		// set animation CSS properties for hover
		path.style.transition = path.style.WebkitTransition =
	  'all 0.5s ease-in-out';
  
		$(parent).on({
			mouseenter: function(){
				path.style.strokeDashoffset = 0;
			},
			mouseleave: function(){
				path.style.strokeDashoffset = length;
			}
		})
	}


	function circum(r){
		return 2 * Math.PI * r;
	}


})(jQuery);

