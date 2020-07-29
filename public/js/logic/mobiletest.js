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

$(document).ready(function() {
    $('.row-success').hide();
    $('.row-error').hide();
    $('.success-icon').hide();
    $('.error-icon').hide();
    $('#btn-check').on('click', function() {
        $('#spinner').addClass('spinner spinner-success spinner-right');
        var newData =
        {
            "url" : $('#url').val(),
            "requestScreenshot": true
        }
        var dataJson = JSON.stringify(newData);

        $.ajax({
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
                console.log(result);
                jQuery('#spinner').removeClass('spinner spinner-success spinner-right');
                $('.row-success').show();

                if( result.testStatus.status === 'COMPLETE') {
                    if(result.mobileFriendliness === 'MOBILE_FRIENDLY') {
                        resultdata(result.mobileFriendliness, result.screenshot.data);
                    } else {
                        resultdata(result.mobileFriendliness, result.screenshot.data);
                        mobileissues(result.mobileFriendlyIssues);
                    }

                    if(result.resourceIssues != "undefined") {
                        resourceissues(result.resourceIssues);
                    }
                } else {
                    var errorstatus = result.testStatus.status;
                    var errormessage = result.testStatus.details;

                    // err_section.style = 'display:block';
                    err_msg.innerHTML = errormessage;
                }

                resultdata(result.mobileFriendliness, result.screenshot.data);
            },
            error: function(e) {
                console.log("Execute Error", e);
                jQuery('#spinner').removeClass('spinner spinner-success spinner-right');

                // var errorstatus = e.testStatus.status;
                // var errormessage = e.testStatus.details;

                err_section.style = 'display:block';
                err_msg.innerHTML = "Terjadi kesalahan saat proses test. Silakan coba lagi atau coba dengan URL website yang lain";
            },
        });
    });
});

function resultdata(titledata, imagedata) {
    if(titledata === 'MOBILE_FRIENDLY') {
        title.innerHTML = 'Halaman ini Mobile Friendly<br/>';
        subtitle.innerHTML = 'Halaman ini mudah digunakan pada perangkat seluler';
        title.style = 'color: green';
        $('.error-icon').hide();
        $('.success-icon').show();
    } else if(titledata === 'MOBILE_FRIENDLY_TEST_RESULT_UNSPECIFIED') {
        title.innerHTML = 'Terjadi Kesalahan Saat Melakukan Test. Silakan Coba Lagi<br/>';
        subtitle.innerHTML = '';
        $('.error-icon').show();
        $('.success-icon').hide();
        title.style = 'color: red';
    } else if(titledata === 'NOT_MOBILE_FRIENDLY') {
        title.innerHTML = 'Halaman ini Tidak Mobile Friendly<br/>';
        subtitle.innerHTML = 'Halaman ini sulit digunakan pada perangkat seluler';
        title.style = 'color: red';
        $('.error-icon').show();
        $('.success-icon').hide();
    }

    var baseStr64 = imagedata;

    image.src = "data:image/png;base64," + baseStr64;
    image.style = "width: 100% !important; height: auto";

    date_now.innerHTML = "Telah diuji pada " + datenow();
}

function resourceissues(res_issues) {
    var resissues = '';
    var url = '';
    var urls = '';

    for (i = 0; i < res_issues.length; i++) {
        urls += url.replace(url,'<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-exclamation-triangle text-warning"></i>&nbsp;&nbsp' +res_issues[i].blockedResource.url+ '</div></div>');
    }

    resIssues.innerHTML = "<p><b>Masalah Pemuatan Halaman pada</b></p>" + urls;
}

function mobileissues(rules) {
    var issues = '';
    var issues_detail = '';
    for (i = 0; i < rules.length; i++) {

        if( rules[i].rule === 'MOBILE_FRIENDLY_RULE_UNSPECIFIED') {
            issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Maaf, kami tidak memiliki deskripsi pada pengaturan yang terdapat kesalahan / error.</div></div>';
        } else if( rules[i].rule === 'USES_INCOMPATIBLE_PLUGINS') {
            issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Plugin tidak kompatibel dengan perangkat seluler sedang digunakan</div></div>';
        } else if( rules[i].rule === 'CONFIGURE_VIEWPORT') {
            issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Viewport tidak ditentukan menggunakan tag meta viewport</div></div>';
        } else if( rules[i].rule === 'FIXED_WIDTH_VIEWPORT') {
            issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Viewport didefinisikan sebagai width fixed</div></div>';
        } else if( rules[i].rule === 'SIZE_CONTENT_TO_VIEWPORT') {
            issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Konten tidak berukuran sesuai viewport</div></div>';
        } else if( rules[i].rule === 'USE_LEGIBLE_FONT_SIZES') {
            issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Ukuran font terlalu kecil untuk dibaca dengan mudah di layar kecil</div></div>';
        } else if( rules[i].rule === 'TAP_TARGETS_TOO_CLOSE') {
            issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Elemen sentuh terlalu dekat satu sama lain</div></div>';
        }

        mob_issues.innerHTML = "<p><b>Perbaiki Masalah Berikut</b></p>" + issues_detail;
    }
}

function datenow() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    var hr = today.getHours();
    var min = today.getMinutes();

    today = dd + '/' + mm + '/' + yyyy + " " + hr + "." + min;
    return today;
}
