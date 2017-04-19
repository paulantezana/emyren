'use strict';

jQuery(document).ready(function ($) {
    if (innerWidth < 480) {
        $('#noticeMain').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1
        });
    } else if (innerWidth > 480 && innerWidth < 870) {
        $('#noticeMain').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2
        });
    } else {
        $('#noticeMain').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3
        });
    }

    /*
        ===========================================
                CUSTOM ARTICLE
        ===========================================
    */
    if (innerWidth < 480) {
        $('#customAticle').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1
        });
    } else if (innerWidth > 480 && innerWidth < 870) {
        $('#customAticle').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2
        });
    } else {
        $('#customAticle').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3
        });
    }
});