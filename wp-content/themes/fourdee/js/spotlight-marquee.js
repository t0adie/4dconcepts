jQuery(function ($) {

var currentPanel = 1;
var totalPanels = $('div#marquee-photo').size();
var marqueImages = $('img.image');
var articleWidth = $(window).width();
var articleHeight = $(window).height() - (jQuery(window).height() / 7);

window.currentPanel = [];
window.totalPanel = [];

$('#banner section.isotopes').height(articleHeight).width(articleWidth);

marqueImages.each(function(index) {
  $("#banner section.isotopes").append("<div id='marquee-photo' style='background-image: url(" + jQuery(this).attr('src') + ")'></div>");
});

$spotlightArticle.each(function(index) {

  $spotlightArticle.css({
    'width': $('body').width() / 6
  });
  $spotlightArticles.css({
    'width': $spotlightArticle.width() * $spotlightArticle.size()
  });
  $(this).css({
    'left': index * $spotlightArticle.width()
  });

});

// SET THE NAVIGATION BUTTONS

function goLeft() {

  var $index = $('#spotlight-articles article.current').index();
  var $current = $('#spotlight-articles article.current');
  var $next = $current.next();

  if ($index - 1 === $current.size()) {
    $next = $('#spotlight-articles article').first();
  }

  $next.addClass('current');
  $current.removeClass('current');

}

function goRight() {

  var $index = $('#spotlight-articles article.current').index();
  var $current = $('#spotlight-articles article.current');
  var $next = $current.next();

  $next.addClass('current');
  $current.removeClass('current');

}

$('#left-bracket').click(function() {

  goRight();

  var $index = $('#spotlight-articles article.current').index();
  $spotlightArticles.animate({
    'right': $index * $spotlightArticle.width()
  }, 1000);

});

$(' #right-bracket').click(function() {

  goLeft();

  var $index = $('#spotlight-articles article.current').index();
  $spotlightArticles.animate({
    'right': $index * $spotlightArticle.width()
  }, 1000);

});

});