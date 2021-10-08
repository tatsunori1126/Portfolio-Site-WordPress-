jQuery(function() {
    // ハンバーガーボタン
    jQuery('.p-hamburger-btn').click(function () {
        jQuery('.p-single-header-nav').toggleClass('is-single-open');
        jQuery('.p-mask').toggleClass("is-show");
        jQuery('body').toggleClass('is-fixed');
    });
    //  Xボタン
    jQuery('#is-close').click(function () {
        jQuery('.p-single-header-nav').toggleClass('is-single-open');
        jQuery('.p-mask').toggleClass("is-show");
        jQuery('body').toggleClass('is-fixed');
    });
});