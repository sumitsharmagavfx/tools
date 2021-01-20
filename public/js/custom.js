$(document).ready(function() {
    $('.custom-slide-header').removeClass('d-none');
    $('.slick-navbar').slick({
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        autoplay: true,
        autoplaySpeed: 3000,
    });
})

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos >= currentScrollPos) {
        // document.getElementById('kt_header_mobile').style.top = "0";
        // document.getElementById('kt_subheader_mobile').style.top = "55px";
        // $('#subheader_logo_mobile').addClass('d-none');

        document.getElementById('kt_header').style.top = "0";
        document.getElementById('kt_subheader').style.top = "64px";
        $('#subheader_logo').addClass('d-none');
    } else {
        document.getElementById('kt_header').style.top = "-64px";
        document.getElementById('kt_subheader').style.top = "0";
        $('#subheader_logo').removeClass('d-none');
        
        // document.getElementById('kt_header_mobile').style.top = "-54px";
        // document.getElementById('kt_subheader_mobile').style.top = "0";
        // $('#subheader_logo_mobile').removeClass('d-none');
    }
}