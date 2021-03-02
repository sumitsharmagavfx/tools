// Init var
var insightSlide = document.getElementById('insight-slide'),
    insightopts = {
        type    : 'loop',
        arrows: false,
        pagination: false,
        perPage : 3,
        drag: false,
        perMove: 1,
        autoplay: true,
        breakpoints: {
            992: { 
                perPage: 3 
            },
            768: { 
                perPage: 2 ,
                drag: true,
                autoplay: true,
            },
            520: { 
                perPage: 1,
                drag: true, 
                autoplay: true,
            }
        }
    }

$(document).ready(function() {
    // Header Info Slider
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

    // Get data for insight slider with ajax
    // $.ajax({
    //     url: '/blog/data',
    //     header: {
    //         "Access-Control-Allow-Origin": "*",
    //     },
    //     type: 'GET',
    //     cache: false,
    //     dataType: 'json',
    //     success: function (dataResult) {
    //         // console.log(dataResult)
    //         // var dataDesktop = ''
    //         var dataSlide = ''

    //         $.each(dataResult, function (index, data) {
    //             var content = data.content.rendered
    //             content = content.replace('<span style="font-weight: 400;">', '')
    //             content = content.replace('<span style="font-weight: 400;" >', '')
    //             content = content.replace('<span style="font-weight: 400;"  >', '')
    //             content = content.replace('</span>', '')
    //             content = content.replace('[vc_row][vc_column][vc_column_text]', '')
    //             content = content.replace('<p>', '')
    //             content = content.replace('</p>', '')
    //             content = content.replace('<i>', '')
    //             content = content.replace('</i>', '')

    //             var newString = content
    //             var maxLength = 150
    //             var trimmedString = newString.substr(0, maxLength);

    //             if(newString.length > trimmedString.length){
    //                 trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")))
    //             }

    //             var blogdate = new Date(data.date)
    //             let formattedDate = blogdate.getDate() + "/" + (blogdate.getMonth() + 1) + "/" + blogdate.getFullYear()

    //             dataSlide += '<li class="splide__slide">'
    //             dataSlide += '<a href="' +data.link+ '">'
    //             dataSlide += '<div class="card card-custom card-stretch card-insight mr-3 ml-3"><div class="card-body pt-8 pl-5 pr-5 pb-5">'
    //             dataSlide += '<span class="h6 font-weight-bolder">' +data.title.rendered+ '</span>'
    //             dataSlide += '<p class="mt-3 font-weight-light">' +trimmedString+ ' ...</p></div>'
    //             dataSlide += '<div class="card-footer pt-0 pl-5 pr-5 pb-5 d-flex justify-content-start align-items-center border-0">'
    //             dataSlide += '<span>Posted on ' +formattedDate+ '</span>'
    //             dataSlide += '</div>'
    //             dataSlide += '</div>'
    //             dataSlide += '</a>'
    //             dataSlide += '</li>'
    //         })

    //         insightSlide.innerHTML = dataSlide
    //         new Splide( '.splide-insight', insightopts).mount();
    //     }
    // })
})

// Custom Show Hide Tools Title and Menu
$('#toggle_button_writer').click( function() {
    $('#header_writer_title').removeClass('d-none')
    $('#headermobile_writer_title').removeClass('d-none')
    $('#asidemobile_writer_title').removeClass('d-none')
    $('#toggle_button_webmaster').removeClass('d-none')
    $('#togglemobile_button_webmaster').removeClass('d-none')
    $('#menu_tools_writer').removeClass('d-none')
    $('#mobilemenu_tools_writer').removeClass('d-none')

    $('#header_webmaster_title').addClass('d-none')
    $('#headermobile_webmaster_title').addClass('d-none')
    $('#asidemobile_webmaster_title').addClass('d-none')
    $('#toggle_button_writer').addClass('d-none')
    $('#togglemobile_button_writer').addClass('d-none')
    $('#menu_tools_webmaster').addClass('d-none')
    $('#mobilemenu_tools_webmaster').addClass('d-none')
})

$('#toggle_button_webmaster').click( function() {
    $('#header_writer_title').addClass('d-none')
    $('#headermobile_writer_title').addClass('d-none')
    $('#asidemobile_writer_title').addClass('d-none')
    $('#toggle_button_webmaster').addClass('d-none')
    $('#togglemobile_button_webmaster').addClass('d-none')
    $('#menu_tools_writer').addClass('d-none')
    $('#mobilemenu_tools_writer').addClass('d-none')

    $('#header_webmaster_title').removeClass('d-none')
    $('#headermobile_webmaster_title').removeClass('d-none')
    $('#asidemobile_webmaster_title').removeClass('d-none')
    $('#toggle_button_writer').removeClass('d-none')
    $('#togglemobile_button_writer').removeClass('d-none')
    $('#menu_tools_webmaster').removeClass('d-none')
    $('#mobilemenu_tools_webmaster').removeClass('d-none')
})

$('#togglemobile_button_writer').click( function() {
    $('#header_writer_title').removeClass('d-none')
    $('#headermobile_writer_title').removeClass('d-none')
    $('#asidemobile_writer_title').removeClass('d-none')
    $('#toggle_button_webmaster').removeClass('d-none')
    $('#togglemobile_button_webmaster').removeClass('d-none')
    $('#menu_tools_writer').removeClass('d-none')
    $('#mobilemenu_tools_writer').removeClass('d-none')

    $('#header_webmaster_title').addClass('d-none')
    $('#headermobile_webmaster_title').addClass('d-none')
    $('#asidemobile_webmaster_title').addClass('d-none')
    $('#toggle_button_writer').addClass('d-none')
    $('#togglemobile_button_writer').addClass('d-none')
    $('#menu_tools_webmaster').addClass('d-none')
    $('#mobilemenu_tools_webmaster').addClass('d-none')
})

$('#togglemobile_button_webmaster').click( function() {
    $('#header_writer_title').addClass('d-none')
    $('#headermobile_writer_title').addClass('d-none')
    $('#asidemobile_writer_title').addClass('d-none')
    $('#toggle_button_webmaster').addClass('d-none')
    $('#togglemobile_button_webmaster').addClass('d-none')
    $('#menu_tools_writer').addClass('d-none')
    $('#mobilemenu_tools_writer').addClass('d-none')

    $('#header_webmaster_title').removeClass('d-none')
    $('#headermobile_webmaster_title').removeClass('d-none')
    $('#asidemobile_webmaster_title').removeClass('d-none')
    $('#toggle_button_writer').removeClass('d-none')
    $('#togglemobile_button_writer').removeClass('d-none')
    $('#menu_tools_webmaster').removeClass('d-none')
    $('#mobilemenu_tools_webmaster').removeClass('d-none')
})

// Window scroll setting for header and subehader
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