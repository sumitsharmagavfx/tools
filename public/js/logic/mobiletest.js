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
res_section.style.display='none';

// res_section.style.display = "none";
// err_section.style.display = "none";
// $('.row-success').hide();
// $('.row-error').hide();
// $('.success-icon').hide();
// $('.error-icon').hide();

issueurl = '';
issues_detail = '';

$(document).ready(function() {
    $('#btn-check').on('click', function() {
        res_section.style.display='none';
        resIssues.style.display='none';
        mob_issues.style.display='none';
        $('#spinner').addClass('spinner spinner-success spinner-right');
        var newData =
        {
            "url" : $('#url').val(),
            "requestScreenshot": true
        };
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
                console.clear(result);
                console.log(result);
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
                    toastr.error('Error',"An error occurred during the test process. Please try again with http/https or try with another website URL");
                    // err_section.style.display = "block";
                    // err_msg.innerHTML = errormessage;
                    sticky.update();
                }
                resultdata(result.mobileFriendliness, result.screenshot.data);
                sticky.update();
            },
            error: function(e) {
                console.log("Execute Error", e);
                jQuery('#spinner').removeClass('spinner spinner-success spinner-right');
                toastr.error('Error',"An error occurred during the test process. Please try again or try with another website URL");
                // err_section.style.display = "block";
                //
                // err_section.style = 'display:block';
                // err_msg.innerHTML = "An error occurred during the test process. Please try again or try with another website URL";
                sticky.update();
            },
        });
        sticky.update();
    });
});

var observer1 = new MutationObserver(function(mutations) {
    console.log('running');
    mutations.forEach(function(mutation) {
        if (mutation.attributeName === "style") {
            console.log('yeyy');
            sticky.update();
        }
    });
});
var observer2 = new MutationObserver(function(mutations) {
    console.log('running');
    mutations.forEach(function(mutation) {
        if (mutation.attributeName === "style") {
            console.log('yeyy');
            sticky.update();
        }
    });
});
observer1.observe(res_section,{attributes:true});
observer2.observe(err_section,{attributes:true})

function resultdata(titledata, imagedata) {
    if(titledata === 'MOBILE_FRIENDLY') {
        title.innerHTML = "Page is mobile friendly<br/>";
        subtitle.innerHTML = 'This page is easy to use on a mobile device';
        title.style = 'color: green';
        $('.error-icon').hide();
        $('.success-icon').show();
    } else if(titledata === 'MOBILE_FRIENDLY_TEST_RESULT_UNSPECIFIED') {
        title.innerHTML = 'An Error Occurred While Performing a Test. Please Try Again<br/>';
        subtitle.innerHTML = '';
        $('.error-icon').show();
        $('.success-icon').hide();
        title.style = 'color: red';
    } else if(titledata === 'NOT_MOBILE_FRIENDLY') {
        title.innerHTML = 'Page is not mobile friendly<br/>';
        subtitle.innerHTML = 'This page is difficult to use on a mobile device';
        title.style = 'color: red';
        $('.error-icon').show();
        $('.success-icon').hide();
    }

    var baseStr64 = imagedata;

    image.src = "data:image/png;base64," + baseStr64;
    image.style = "width: 100% !important; height: auto";

    date_now.innerHTML = "Tested on " + datenow();
}

function resourceissues(res_issues) {
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

        resIssues.innerHTML = "<h5>Page Loading Issues</h5>" + issueurl;
    }

}

function mobileissues(rules) {
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
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Sorry, we don\'t have a description of the settings for errors.</div></div>';
            } else if( rules[i].rule === 'USES_INCOMPATIBLE_PLUGINS') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Uses incompatible plugins</div></div>';
            } else if( rules[i].rule === 'CONFIGURE_VIEWPORT') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Viewport not set</div></div>';
            } else if( rules[i].rule === 'FIXED_WIDTH_VIEWPORT') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Viewport not set to "device-width"</div></div>';
            } else if( rules[i].rule === 'SIZE_CONTENT_TO_VIEWPORT') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Content wider than screen</div></div>';
            } else if( rules[i].rule === 'USE_LEGIBLE_FONT_SIZES') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Text too small to read</div></div>';
            } else if( rules[i].rule === 'TAP_TARGETS_TOO_CLOSE') {
                issues_detail += '<div class="card card-custom mb-4"><div class="card-body"><i class="fa fa-times-circle text-danger"></i>&nbsp;&nbsp;Clickable elements too close together</div></div>';
            }

            mob_issues.innerHTML = "<h5>Fix the Following Problems</h5>" + issues_detail;
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
