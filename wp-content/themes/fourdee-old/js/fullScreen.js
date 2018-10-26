  // JavaScript Document

  jQuery(document).ready(function($) {

    $width = $('body').width();
    $height = $(window).height() - ($(window).height() / 4);
    $section = $('section.isotopes dl, section.isotopes dl dt');
    $caption = $('section.isotopes dl dd');
    $header = $('header');
    $menu = $('menu.popOut');
    $submenu = $('ul.sub-menu');

    $menu.width($width).height($(window).height());
    $submenu.width($('menu.popOut').width() + 50);

    var $window = $('body');
    var $dl = $('dl');
    var $dd = $('dd');

    var $menuItem = $(".popOut li.menu-item");

    function niceFade() {
      $menuItem.each(function(index) {
        $(this).delay(index * 20).fadeIn({
          duration: 300,
          queue: false
        });
        $(this).delay(index * 20).animate({
          "top": 0
        }, 300);
      });
    }

    function resetMenu() {

      var $menuItem = $($(".popOut li.menu-item").get().reverse());

      $menuItem.each(function(index) {
        $(this).delay(index * 20).fadeOut({
          duration: 300,
          queue: false
        });
        $(this).delay(index * (-20)).animate({
          "top": 200
        }, 300);
      });
    }

    var navOut = false;

    function menuOut() {

    }

    $('#menu-open').on('click', function() {
      if ($(this).is(':checked') === true) {
        $('menu.popOut').fadeIn({
          duration: 300,
          queue: false
        });
        niceFade();
      } else {
        $(this).prop('checked', false)
        $('menu.popOut').fadeOut({
          duration: 300,
          queue: false
        });
        resetMenu();
      }
    });
    $('menu.popOut').click(function() {
      if ($('#menu-open').is(':checked') === true) {
        $('menu.popOut').fadeOut({
          duration: 300,
          queue: false
        });
        $('#menu-open').prop('checked', false);
        resetMenu();
      }
    });
  });
