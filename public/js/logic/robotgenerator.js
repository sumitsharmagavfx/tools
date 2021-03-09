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

// Register new robot data
let main =
{
    "defaultaccess": "",
    "crawldelay": "",
    "sitemap": "",
    "directive": []
}

// Get all data from input
jQuery(document).on('change', '#robotAccess', function () {
    main.defaultaccess = jQuery(this).val()
    setRobotResult()
});
jQuery(document).on('change', '#crawlDelay', function () {
    main.crawldelay = jQuery(this).val()
    setRobotResult()
});
jQuery(document).on('keyup', '#sitemap', function () {
    main.sitemap = jQuery(this).val()
    setRobotResult()
});
jQuery(document).on('change', '.access-directive', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.directive[index].access = jQuery(this).val();
    setRobotResult()
});
jQuery(document).on('change', '.user-agent', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.directive[index].useragent = jQuery(this).val();
    setRobotResult()
});
jQuery(document).on('keyup', '.directory', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.directive[index].directory = jQuery(this).val();
    setRobotResult()
});

// Add Directive Function
jQuery('#add').click(function() {
    let placeholder_access = lang === 'en' ? 'Select access' : 'Pilih akses';
    let access_opt_1 = lang === 'en' ? 'Allow' : 'Izinkan';
    let access_opt_2 = lang === 'en' ? 'Disallow' : 'Jangan izinkan';
    let placeholder_user_agent = lang === 'en' ? 'Select user agent' : 'Pilih agen pengguna';
    let placeholder_directory = lang === 'en' ? 'your-directory' : 'direktori-anda';

    $('#directive-title').removeClass('d-none')
    $('#add-directive').addClass('d-none')
    $('#add-more-directive').removeClass('d-none')

    main.directive.push({
        "access": "",
        "useragent": "",
        "directory": ""
    });

    jQuery('#form').append(
      "<div class=\"row directive-row\" data-id=\"" +(main.directive.length-1)+ "\">"+
        "<div class=\"col-10 col-sm-11\">"+
          "<div class=\"row\">"+
            "<div class=\"col-md-4\">"+
              "<div class=\"form-group\">"+
                "<select name=\"\" class=\"form-control access-directive\" data-id=\"" +(main.directive.length-1)+ "\">"+
                  "<option value=\"\" disabled selected>"+placeholder_access+"</option>"+
                  "<option value=\"Allow\">"+access_opt_1+"</option>"+
                  "<option value=\"Disallow\">"+access_opt_2+"</option>"+
                "</select>"+
              "</div>"+
            "</div>"+
            "<div class=\"col-md-4\">"+
              "<div class=\"form-group\">"+
                "<select name=\"\" class=\"form-control user-agent\" data-id=\"" +(main.directive.length-1)+ "\">"+
                    "<option value=\"\" disabled selected>"+placeholder_user_agent+"</option>"+
                "</select>"+
              "</div>"+
            "</div>"+
            "<div class=\"col-md-4\">"+
              "<div class=\"form-group\">"+
                "<input type=\"text\" class=\"form-control directory\" name=\"\" value=\"\" placeholder=\"/"+placeholder_directory+"\" data-id=\"" +(main.directive.length-1)+ "\" required>"+
              "</div>"+
            "</div>"+
          "</div>"+
        "</div>"+
        "<div class=\"col-2 col-sm-1\">"+
          "<div class=\"d-flex justify-content-center align-items-center mt-1\">"+
            "<i class='bx bxs-x-circle bx-md delete remove' data-id=\"" +(main.directive.length-1)+ "\"></i>"+
          "</div>"+
        "</div>"+
      "</div>"
    )

    jQuery.getJSON('https://my-json-server.typicode.com/rifqiiardhian/botdata/db', function(data) {
        for ( let i = 0; i < data.bot.length; i++ ) {
            jQuery('.user-agent').append(
                "<option value=\"" +data.bot[i].value+ "\">" +data.bot[i].name+ "</option>"
            );
        }
    });
});

// Automatically set data to textarea
function setRobotResult() {
    let defuseragent = 'User-agent: *'
        defaccess = '',
        crawldel = '',
        sitemap = ''

    if (main.defaultaccess === '') {
        defaccess = ''
    } else {
        defaccess = defuseragent+ "\n" +main.defaultaccess+ ": /"
    }

    if (main.crawldelay === '') {
        crawldel = ''
    } else {
        crawldel = '\n\nCrawl-delay: ' +main.crawldelay
    }
    
    if (main.sitemap === '') {
        sitemap = ''
    } else {
        sitemap = '\n\nSitemap: ' +main.sitemap
    }

    let directive = ''

    for (let i = 0; i < main.directive.length; i++) {
        let useragent = main.directive[i].useragent,
            access = main.directive[i].access,
            directory = main.directive[i].directory

        if (directory == '') {
            directory = '/'
        }

        if (useragent === '*' && directory === '/' && access === main.defaultaccess) {
            directive += ''    
        } else {
            directive += "\n\nUser-agent: " +useragent + "\n" +access+ ": " +directory;
        }
    }

    jQuery("#json-format").val(defaccess+ "" +crawldel+ "" +sitemap+ "" +directive);
}

// Remove Action
jQuery(document).on('click', '.remove', function () {
    let index = parseInt(jQuery(this).data('id'));

    main.directive.splice(index, 1);

        for (let i = index; i < main.directive.length; i++) {
            jQuery('.user-agent[data-id=' + i + ']').val(jQuery('.user-agent[data-id=' + i + ']').val())
            jQuery('.access-directive[data-id=' + i + ']').val(jQuery('.access-directive[data-id=' + i + ']').val())
            jQuery('.directory[data-id=' + i + ']').val(jQuery('.directory[data-id=' + i + ']').val())
        }
        jQuery('.user-agent[data-id=' + main.directive.length + ']').remove();
        jQuery('.access-directive[data-id=' + main.directive.length + ']').remove();
        jQuery('.directory[data-id=' + main.directive.length + ']').remove();
        jQuery('.remove[data-id=' + main.directive.length + ']').remove();
        jQuery('.directive-row[data-id=' + main.directive.length + ']').remove();

    if (main.directive.length === 0) {
        $('#directive-title').addClass('d-none')
        $('#add-directive').removeClass('d-none')
        $('#add-more-directive').addClass('d-none')
    }
    setRobotResult()
});

// Export Action
jQuery('#export').click(function () {
    var text = jQuery('#json-format').val();
    var blob = new Blob([text], { type: "text/plain"});
    var anchor = document.createElement("a");
    anchor.download = "robots.txt";
    anchor.href = window.URL.createObjectURL(blob);
    anchor.target ="_blank";
    anchor.style.display = "none";
    document.body.appendChild(anchor);
    anchor.click();
    document.body.removeChild(anchor);

    toastr.success('Successfully Exporting Files', 'Success');
});

// Copy Action
jQuery('#copy').click(function () {
    const textarea = jQuery('#json-format');
    textarea.select();
    document.execCommand("copy");

    toastr.info('Copied to Clipboard', 'Information');
});

// Reset Action
jQuery('#reset').click(function () {
    jQuery('#robotAccess').val('')
    jQuery('#crawlDelay').val('')
    jQuery('#sitemap').val('')

    for (let i = 0; i < main.directive.length; i++) {
        jQuery('.user-agent[data-id=' + i + ']').remove();
        jQuery('.access-directive[data-id=' + i + ']').remove();
        jQuery('.directory[data-id=' + i + ']').remove();
        jQuery('.remove[data-id=' + i + ']').remove();
        jQuery('.directive-row[data-id=' + i + ']').remove();
    }

    jQuery('#json-format').val('')

    main = {
        "defaultaccess": "",
        "crawldelay": "",
        "sitemap": "",
        "directive": []
    }

    if (main.directive.length === 0) {
        $('#directive-title').addClass('d-none')
        $('#add-directive').removeClass('d-none')
        $('#add-more-directive').addClass('d-none')
    }
});
