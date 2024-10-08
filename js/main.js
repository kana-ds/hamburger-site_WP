jQuery(function($) {
    var menuButton = $('.p-menu-button--close');
    var menu = $('.l-sidebar');
    var overlay = $('.p-overlay');

    $(".js-hamburger").on("click",function(){
        $(this).toggleClass("is-open");
        $(".p-menu-button__text").toggleClass("is-open");
        menu.toggleClass("is-open");
        $("body").toggleClass("is-open");
        overlay.toggleClass("is-open");
    });

    // pcサイズ時に広げた時に.is-openを削除
    $(window).resize(function() {
        if ($(window).width() >= 1280) {
          menu.removeClass("is-open");
          $("body").removeClass("is-open");
          overlay.removeClass("is-open");
        }
      });

    // オーバーレイをクリックで.is-openを削除
    overlay.click(function() {
        menu.removeClass('is-open');
        overlay.removeClass('is-open');
        $('body').removeClass('is-open');
    });
});