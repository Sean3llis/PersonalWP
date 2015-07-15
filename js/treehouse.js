var SE = SE || {};

SE.util.ajaxTreehouse = function(){
	$.ajax({
	  method: "GET",
	  url: "https://teamtreehouse.com/seanellis2.json"
	})
	.done(function(results){
		if(results){
			SE.util.treehouse = results;
			SE.util.treehouse.badges.reverse();
			SE.util.buildBadges();
		}
	});
}

SE.util.buildBadges = function(){
	if(SE.util.treehouse){
		var treehouse = SE.util.treehouse;
		var $template = $('<div class="treehouse-badge"><a href="" class="badge-link"><img src="" class="badge-icon" alt=""></a></div>');
		var $wrapper = $('.badge-wrapper');
		var counter = 0;
		while (counter < 30) {
			var icon = treehouse.badges[counter].icon_url;
			var link = treehouse.badges[counter].url;
			var currentBadge = $template.clone();
			currentBadge.find('.badge-icon').attr('src', icon);
			currentBadge.find('.badge-link').attr('href', link);
			$wrapper.append(currentBadge);
			counter++;
		}
	}
}