// Javascript Document

jQuery(function (){

var currentPanel = 1;
var totalPanels = jQuery('div#marquee-photo').size();
var marqueImages = jQuery('article img.image');
var articleWidth = jQuery(window).width();
var articleHeight = jQuery(window).height()  - (jQuery(window).height() / 7);

window.currentPanel = [];
window.totalPanel = [];
	
	jQuery('banner #marquee').height(articleHeight).width(articleWidth);
	
	marqueImages.each(function (index) {
		jQuery("banner div#marquee-photos").append("<div id='marquee-photo' style='background-image: url(" + jQuery(this).attr('src') + ")'></div>");
	});
	
// Generate Navigation Link Lineup

jQuery(".marquee-nav a.marquee-nav-item").addClass('selected');

jQuery('div#marquee-photo').each(function (index) {

    jQuery("div.marquee-nav").append("<a href='#' class='marquee-nav-item'></a>");
    window.totalPanels = index + 1;

    jQuery('#marquee-photos').width(articleWidth).height(window.totalPanels * articleHeight);
    jQuery(this).width(articleWidth).height(articleHeight).css({
        'top': index * articleHeight
    });
});

var totalPanels = jQuery('div#marquee-photo').size();
window.totalPanel = [];

// Action for Clicking on Navigation Links

jQuery(".marquee-nav a.marquee-nav-item").click(function () {
    jQuery(".marquee-nav a.marquee-nav-item").removeClass('selected');
    jQuery(this).addClass('selected');

    var navClicked = jQuery(this).index();
    var marqueeHeight = articleHeight;
    var distanceToMove = marqueeHeight * (-1);
    var newPhotoPosition = navClicked * distanceToMove + 'px';
    window.currentPanel = navClicked + 1;

    jQuery('#marquee-photos').stop().animate({
        'top': newPhotoPosition
    }, 1000);

});

jQuery(".marquee-nav").css({
    "top": (articleHeight / 2) - (jQuery(".marquee-nav").height() / 2)
});

// Action for Clicking on Slideshow Image

jQuery('div#marquee-photo').click(function () {

    if (window.currentPanel == totalPanels) {
        window.currentPanel = 0;
    }
    jQuery('.marquee-nav a.marquee-nav-item:nth-child(' + (window.currentPanel + 1) + ')').trigger('click');

    console.log(window.currentPanel);

});

// Window Resize Delay

var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
        if (!uniqueId) {
            uniqueId = "Don't call this twice without a uniqueId";
        }
        if (timers[uniqueId]) {
            clearTimeout(timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
    };
})();

// Resize Page Contnent on Resize

jQuery(window).resize(function () {
    waitForFinalEvent(function () {
		articleWidth = jQuery(window).width();
		articleHeight = jQuery(window).height()  - (jQuery(window).height() / 7);

        jQuery('#marquee').animate({
			"width": articleWidth,
            "height": articleHeight
        }, 200);
        jQuery('div#marquee-photo').each(function (index) {

            jQuery('#marquee-photos').animate({
                "width": articleWidth,
                    "height": (window.totalPanels * articleHeight)
            }, 200);
            jQuery(this).animate({
                "width": articleWidth,
                    "height": articleHeight
            }, 200).css({
                'top': index * articleHeight
            });
            
        });

        console.log(window.currentPanel);

        jQuery(".marquee-nav").css({
            "top": (articleHeight / 2) - (jQuery(".marquee-nav").height() / 2),
        });
		
		jQuery(".marquee-nav").each(function (i) {
        	jQuery(this).delay(i * 25).fadeIn(50, function () {
        });
		
    });
    }, 100, "some unique string");
});

});