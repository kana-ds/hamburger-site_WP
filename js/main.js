jQuery(function($) {
    var menu = $('.l-sidebar');
    var overlay = $('.p-overlay');
    var body = $('body');
    var menuText = $(".p-menu-button__text");
    var hamburger = $(".js-hamburger");

    hamburger.on("click",function(){
        $(this).toggleClass("is-open");
        menuText.toggleClass("is-open");
        menu.toggleClass("is-open");
        body.toggleClass("is-open");
        overlay.toggleClass("is-open");
    });

    // リサイズ時に.is-openを削除
    $(window).on('resize', function() {
      menu.removeClass("is-open");
      body.removeClass("is-open");
      overlay.removeClass("is-open");
      menuText.removeClass('is-open');
    });

    // オーバーレイをクリックで.is-openを削除
    overlay.on("click", function() {
        hamburger.removeClass("is-open")
        menuText.removeClass("is-open");
        menu.removeClass("is-open");
        overlay.removeClass("is-open");
        body.removeClass("is-open");
    });
});