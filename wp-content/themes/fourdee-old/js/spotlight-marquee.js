// Javascript Document

// Global Variables

window.currentPanel = [];
window.totalPanel = [];

jQuery(function ($){
	
// Global Variables

var currentPanel = 1;
var totalPanels = $('section.isotope').size();
var $width = $('body').width();
var $height = $(window).height() - 200;

if ($width <= 780) {
	$height = "600px";
}

var marqueImages = $('article img.size-full');
var $section = $('#banner, .isotopes, .isotope, .isotope dt');
var $caption = $('.isotope dd');
var $header = $('header');
var $menu = $('.menuWrapper');	

marqueImages.each(function (index) {
	$(".isotopes").append("<div style='background-image: url(" + $(this).attr('src') + ")' class='isotope'></div>");
	$(this).css({"display": "none"});
});

$( ".gallery" ).empty();

// Set size for Slideshow Window

$(".isotopes").width($width * $('.isotope').size());

$(".isotope").each(function(index) {

    $(this).css({'left': index * $width, 'width': $width}).height($height);
	
});

$('#banner').width($('body').width());
$section.height($height);

// Attach Class Marker to First Slide

$('.isotope').first().addClass("current").css({opacity: 1});

// SET THE NAVIGATION BUTTONS

function goLeft(){
	
	var $index = $('.current').index();
	var $current = $('.current');
	var $next = $current.next();
	
	if ($index === $('.isotope').size() - 1){
		
		$('.isotope:first').addClass('current');
		$('.isotope:last').removeClass('current');
		
	}
	
	$next.addClass('current');
	$current.removeClass('current');
	
}

function goRight(){
	
	var $index = $('.current').index();
	var $current = $('.current');
	var $prev = $current.prev();
	
	if ($index === 0){
		
		$('.isotope:last').addClass('current');
		$('.isotope:first').removeClass('current');
		
	}
	
	$prev.addClass('current');
	$current.removeClass('current');
	
}

function goToTop(){
	
	$(document).animate({scrollTop: 0});
	
}

$('#left-bracket').click(function(){
	
	goRight();
	goToTop();
	
	var $index = $('.current').index();
	
	$('.isotopes').stop().animate({'right': $index * $width}, 1000);
	
	console.log($index);
	
});

$(' #right-bracket').click(function(){
	
	goLeft();
	goToTop();
	
	var $index = $('.current').index();
	var $length = $('').size() - 1;
	
	$('.isotopes').stop().animate({'right': $index * $width}, 1000);
	
});

});