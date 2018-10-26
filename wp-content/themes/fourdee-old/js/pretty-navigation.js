// Javascript Document

jQuery(function ($) {

    var $menuItem = $(".mainMenu ul li");

    function niceFade() {
        $menuItem.each(function (index) {
            $(this).delay(index * 50).fadeIn({
                duration: 500,
                queue: false
            });
            $(this).delay(index * 50).animate({
                "top": 0
            }, 200);
        });
    }

    function resetMenu() {
        $menuItem.css({
            "display": "none",
                "position": "relative",
                "top": 500
        });
    }

    var navOut = false;

    $('.menu-open-button').click(function(e) {
		console.log(e.target.nodeName);
		$('menu').animate({'opacity': 1}, 500);
		niceFade();
		return false;
    });

    $('body').click(function (e) {
		console.log(e.target.nodeName);
        $('menu').animate({'opacity': 0}, 500, function () {
            resetMenu();
        });
    });
});