jQuery(document).ready(function(){
	
	var selector = ".feature-box, .half-feature-box, .feature-box-image, #nursing-twitter, .meet-the-team, .news-story-section-home, .staff-type-buttons, .news-feed, .field-name-field-staff-profile-block, #current-meeting, #feature-story, #recent-awards, #art-exhibition, #latest-matters, #facebook-find, #media-enquiries, .important-news, .logo-box";
	// make them look clickable
    jQuery(selector).css('cursor','pointer');
	jQuery(selector).click(function(e){
		 window.location = jQuery(this).find("a").attr("href");
		 e.preventDefault();
	});
	
	
});
;
GS_googleAddAdSenseService("ca-pub-9003971709719446");
GS_googleEnableAllServices();

GA_googleAddSlot("ca-pub-9003971709719446", "Addenbrookes(EXT)");

GA_googleFetchAds();
;
