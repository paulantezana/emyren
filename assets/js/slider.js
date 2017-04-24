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

    /*
        ===========================================
               SLIDER
        ===========================================
    */
    $('#servicesHome').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1
    });

    /*
        ===========================================
                GIGANTO SLIDER
        ===========================================
    */

    if (innerWidth < 640) {
        $('#giganto__slider').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1
        });
    } else if (innerWidth > 640 && innerWidth < 1024) {
        $('#giganto__slider').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2
        });
    } else {
        $('#giganto__slider').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3
        });
    }

    /*
        ===========================================
                NAVIGATION NEXT PREV
        ===========================================
    */
    var buttomPrevNext = document.querySelectorAll('.slick-arrow');
    if (buttomPrevNext.length != 0) {
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
            for (var _iterator = buttomPrevNext[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                var buttom = _step.value;

                buttom.textContent = "";
            }
        } catch (err) {
            _didIteratorError = true;
            _iteratorError = err;
        } finally {
            try {
                if (!_iteratorNormalCompletion && _iterator.return) {
                    _iterator.return();
                }
            } finally {
                if (_didIteratorError) {
                    throw _iteratorError;
                }
            }
        }

        for (var i = 0; i < buttomPrevNext.length; i++) {
            if (i % 2 === 0) {
                buttomPrevNext[i].classList.add('icon-prev');
            } else {
                buttomPrevNext[i].classList.add('icon-next');
            }
        }
    }
    // ===========================================
});