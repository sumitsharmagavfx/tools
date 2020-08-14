toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
const dataurl = document.getElementById('url');
const btn_check = document.getElementById('btn-check');
const title = document.getElementById('result-title');
const subtitle = document.getElementById('result-subtitle');
const mob_issues_title = document.getElementById('mobile-issues-title');
const mob_issues = document.getElementById('mobile-issues');
const image = document.getElementById('result-image');
const res_section = document.getElementById('result-section');
const err_section = document.getElementById('error-section');
const err_msg = document.getElementById('error-msg');
const date_now = document.getElementById('date-now');
const resIssues = document.getElementById('resource-issues');
$('.error-icon').hide();
// res_section.style.display='none';
let loader;

// res_section.style.display = "none";
// err_section.style.display = "none";
// $('.row-success').hide();
// $('.row-error').hide();
// $('.success-icon').hide();
// $('.error-icon').hide();

issueurl = '';
issues_detail = '';
triggerEnter('#btn-check','#url');
$(document).ready(function() {
    $('#btn-check').on('click', function() {
        let match =/^(http(s)?|ftp):\/\//;
        let url = $('#url').val().replace(match,"");
        let title = '';
        let button = '';
        let htmlFill = '';
        if (lang === 'en'){
            title = 'The crawling process will take some time';
            button = 'Cancel';
            htmlFill = 'While waiting please read our blog <a href="javascript:window.open(\'https://cmlabs.co/blog/\')" style="text-decoration: underline">here</a>'
        }
        else {
            title = 'Proses crawling akan memakan waktu';
            button = 'Batal';
            htmlFill = 'Sambil menunggu silahkan baca blog kami <a href="javascript:window.open(\'https://cmlabs.co/blog/\')" style="text-decoration: underline">disini</a>'
        }
        Swal.fire({
            title: title,
            html:htmlFill,
            showCancelButton: true,
            cancelButtonColor: '#FE2151',
            allowClickOutside: false,
            cancelButtonText : button,
            // timer:0,
            // timerProgressBar:true,
            onBeforeOpen: () => {
                // $('#swal2-content').after('<div class="spinner spinner-primary spinner-lg mr-15 spinner-right"></div>');
                // $('.swal2-confirm').after('<br>')
                // Swal.enableButtons();
                $('.swal2-actions').css('flex-direction','column');
                $('.swal2-actions').css('flex-direction','column');
                $('.swal2-actions').css('flex-wrap','nowrap');
                $('.swal2-actions').css('justify-content','flex-start');
                $('.swal2-actions').css('align-items','center');
                $('.swal2-actions').css('align-content','center');
                $('.swal2-confirm').addClass('mb-9');
                Swal.showLoading();
            }
        }).then((result)=>{
            if (result.dismiss === 'cancel'){
                loader.abort();
            }
        });
        res_section.style.display='none';
        resIssues.style.display='none';
        mob_issues.style.display='none';
        // $('#spinner').addClass('spinner spinner-success spinner-right');
        var newData =
        {
            "url" : 'https://'+url,
            "requestScreenshot": true
        };
        var dataJson = JSON.stringify(newData);

        loader = $.ajax({
            url : "https://searchconsole.googleapis.com/v1/urlTestingTools/mobileFriendlyTest:run?key=AIzaSyAe7AXnQrH6VxQk6wDlg3E7eJuZn9AywC8",
            type : "POST",
            credentials: 'include',
            header: {
                "Access-Control-Allow-Origin": "*",
            },
            dataType : "JSON",
            contentType: "application/json",
            data : dataJson,
            success : function(result) {
                // console.clear(result);
                // console.log(result);
                jQuery('#spinner').removeClass('spinner spinner-success spinner-right');
                // $('.row-success').show();
                if( result.testStatus.status === 'COMPLETE') {
                    resultdata(result.mobileFriendliness, result.screenshot.data);
                    mobileissues(result.mobileFriendlyIssues);
                    resourceissues(result.resourceIssues);
                    res_section.style.display = "inline";
                    sticky.update();
                } else {
                    var errorstatus = result.testStatus.status;
                    var errormessage = result.testStatus.details;
                    if (lang === 'en')
                        toastr.error('Error',"An error occurred during the test process. Please try again with http/https or try with another website URL");
                    else toastr.error('Error',"Error terjadi selama proses. Coba lagi dengan http/https atau coba dengan url website lain");
                    // err_section.style.display = "block";
                    // err_msg.innerHTML = errormessage;
                    sticky.update();
                }
                resultdata(result.mobileFriendliness, result.screenshot.data);
                Swal.close();
                sticky.update();
            },
            error: function(e) {
                // console.log("Execute Error", e);
                if (e.statusText === 'abort'){
                    if (lang === 'en')
                        toastr.error('Cencel button clicked','Cancel');
                    else toastr.error('Anda membatalkan proses','Batal');
                }else {
                    if (lang === 'en')
                        toastr.error('Error',"An error occurred during the test process. Please try again or try with another website URL");
                    else toastr.error('Error',"Error terjadi selama proses. Coba lagi dengan url website lain");
                }
                // jQuery('#spinner').removeClass('spinner spinner-success spinner-right');
                // err_section.style.display = "block";
                //
                // err_section.style = 'display:block';
                // err_msg.innerHTML = "An error occurred during the test process. Please try again or try with another website URL";
                sticky.update();
                Swal.close();
            },
        });
        sticky.update();
    });
});

var observer1 = new MutationObserver(function(mutations) {
    // console.log('running');
    mutations.forEach(function(mutation) {
        if (mutation.attributeName === "style") {
            // console.log('yeyy');
            sticky.update();
        }
    });
});
var observer2 = new MutationObserver(function(mutations) {
    // console.log('running');
    mutations.forEach(function(mutation) {
        if (mutation.attributeName === "style") {
            // console.log('yeyy');
            sticky.update();
        }
    });
});
observer1.observe(res_section,{attributes:true});
observer2.observe(err_section,{attributes:true})

function resultdata(titledata, imagedata) {

    let resu_page = lang ==='en'? 'Page is mobile friendly' : 'Halaman ramah seluler';
    let resu_desc = lang ==='en'? 'This page is easy to use on a mobile device' : 'Halaman ini mudah digunakan di perangkat seluler';
    let resu_error = lang ==='en'? 'An Error Occurred While Performing a Test. Please Try Again' : 'Terjadi Kesalahan Saat Melakukan Tes. Silakan Coba Lagi';
    let resu_pagenot = lang ==='en'? 'Page is not mobile friendly' : 'Halaman tidak ramah seluler';
    let resu_descnot = lang ==='en'? 'This page is difficult to use on a mobile device' : 'Halaman ini sulit digunakan di perangkat seluler';
    let resu_date = lang ==='en'? 'Tested on ' : 'Diuji Pada ';

    if(titledata === 'MOBILE_FRIENDLY') {
        title.innerHTML = resu_page + "<br/>";
        subtitle.innerHTML = resu_desc;
        title.style = 'color: green';
        $('.error-icon').hide();
        $('.success-icon').show();
    } else if(titledata === 'MOBILE_FRIENDLY_TEST_RESULT_UNSPECIFIED') {
        title.innerHTML = resu_error + "<br/>";
        subtitle.innerHTML = '';
        $('.error-icon').show();
        $('.success-icon').hide();
        title.style = 'color: red';
    } else if(titledata === 'NOT_MOBILE_FRIENDLY') {
        title.innerHTML = resu_pagenot + "<br/>";
        subtitle.innerHTML = resu_descnot;
        title.style = 'color: red';
        $('.error-icon').show();
        $('.success-icon').hide();
    }

    var baseStr64 = imagedata;

    image.src = "data:image/png;base64," + baseStr64;
    image.style = "width: 100% !important; height: auto";

    date_now.innerHTML = resu_date + datenow();
}

function resourceissues(res_issues) {

    let reso_pageloading = lang ==='en'? 'Page Loading Issues' : 'Masalah Pemuatan Halaman';

    if ( typeof res_issues === 'undefined' ) {
        resIssues.style = "display:none";
        resIssues.innerHTML = "";
    } else {
        resIssues.style = "display:block";

        delete issues_detail;
        delete issueurl;
        issues_detail = '';
        issueurl = '';

        for (i = 0; i < res_issues.length; i++) {
            issueurl += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-exclamation-triangle text-warning"></i>&nbsp;&nbsp' +res_issues[i].blockedResource.url+ '</div></div>';
        }

        resIssues.innerHTML = "<h5>"+reso_pageloading+"</h5>" + issueurl;
    }

}

function mobileissues(rules) {

    let mob_wider = lang ==='en'? 'Content wider than screen' : 'Konten lebih lebar dari layar';
    let mob_unexpected = lang ==='en'? 'Sorry, we don\'t have a description of the settings for errors.' : 'Maaf, kami tidak memiliki deskripsi tentang pengaturan untuk kesalahan.';
    let mob_plugin = lang ==='en'? 'Uses incompatible plugins' : 'Menggunakan plugin yang tidak cocok   ';
    let mob_viewnot = lang ==='en'? 'Viewport not set' : 'Area pandang tidak diatur';
    let mob_viewnotto = lang ==='en'? 'Viewport not set to "device-width"' : 'Area pandang tidak diatur ke lebar perangkat';
    let mob_text = lang ==='en'? 'Text too small to read' : 'Teks terlalu kecil untuk dibaca';
    let mob_element = lang ==='en'? 'Clickable elements too close together' : 'Elemen yang dapat diklik terlalu berdekatan';
    let mob_fix = lang ==='en'? 'Fix the Following Problems' : 'Perbaiki Masalah Berikut';

    if ( typeof rules === 'undefined' ) {
        mob_issues.style = "display:none";
        mob_issues.innerHTML = "";
    } else {
        mob_issues.style = "display:block";

        delete issues_detail;
        delete issueurl;
        issues_detail = '';
        issueurl = '';

        for (i = 0; i < rules.length; i++) {

            if( rules[i].rule === 'MOBILE_FRIENDLY_RULE_UNSPECIFIED') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;'+ mob_unexpected +'</div></div>';
            } else if( rules[i].rule === 'USES_INCOMPATIBLE_PLUGINS') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;'+ mob_plugin +'</div></div>';
            } else if( rules[i].rule === 'CONFIGURE_VIEWPORT') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;'+ mob_viewnot +'</div></div>';
            } else if( rules[i].rule === 'FIXED_WIDTH_VIEWPORT') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;'+ mob_viewnotto +'</div></div>';
            } else if( rules[i].rule === 'SIZE_CONTENT_TO_VIEWPORT') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;'+ mob_wider +'</div></div>';
            } else if( rules[i].rule === 'USE_LEGIBLE_FONT_SIZES') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;'+ mob_text +'</div></div>';
            } else if( rules[i].rule === 'TAP_TARGETS_TOO_CLOSE') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;'+ mob_element +'</div></div>';
            }

            mob_issues.innerHTML = "<h5>"+mob_fix+"</h5>" + issues_detail;
        }
    }
}

function datenow() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    var hr = today.getHours();
    var min = String(today.getMinutes()).padStart(2, '0');

    today = dd + '/' + mm + '/' + yyyy + " " + hr + "." + min;
    return today;
}
