$(document).ready(function () {
    // Testimonials - content carousel
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 15000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fade: { crossFade: true }
    })

    // Mobile nav button toggle
    $('.mob-nav-btn').on('click', function() {
        $('.site-content-wrapper').toggleClass('isOpen');
    });

    // Add/remove class on top-nav after scrolling past header section
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var os = $('.site-header, .header-static, .header-single-post').offset().top;
        var ht = $('.site-header, .header-static, .header-single-post').height();
        if(scroll > os + ht){
            $('.top-nav').addClass('scrolled');
        } else {
            $('.top-nav').removeClass('scrolled');
        }
    });
});