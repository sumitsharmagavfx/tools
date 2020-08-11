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

let main =
{
    "defaultaccess": "",
    "crawldelay": "",
    "sitemap": "",
    "directive": []
};
const result = document.getElementById('result');

jQuery(document).ready(function () {
    main.directive.push({
        "access": "",
        "useragent": "",
        "directory": ""
    });

    jQuery.getJSON('https://my-json-server.typicode.com/rifqiiardhian/botdata/db', function(data) {
        for ( let i = 0; i < data.bot.length; i++ ) {
            jQuery('.user-agent').append(
                "           <option value=\"" +data.bot[i].value+ "\">" +data.bot[i].name+ "</option>"
            );
        }
    });

    jQuery('#add-directive').click(function() {
        main.directive.push({
            "access": "",
            "useragent": "",
            "directory": ""
        });

        jQuery('#form').append(
            "<div class=\"row mb-5 directive-row\" data-id=\"" +(main.directive.length-1)+ "\">" +
            "   <div class=\"col-lg-3\">" +
            "       <select class=\"form-control access-directive\" name=\"\" data-id=\"" +(main.directive.length-1)+ "\">" +
            "           <option value=\"\">Select Access</option>" +
            "           <option value=\"Allow\">Allow</option>" +
            "           <option value=\"Disallow\">Disallow</option>" +
            "       </select>" +
            "   </div>" +
            "   <div class=\"col-lg-3\">" +
            "       <select class=\"form-control user-agent\" name=\"\" data-id=\"" +(main.directive.length-1)+ "\">" +
            "           <option value=\"\">Select User Agent</option>" +
            "       </select>" +
            "   </div>" +
            "   <div class=\"col-lg-3\">" +
            "       <input type=\"text\" class=\"form-control directory\" name=\"\" placeholder=\"/your-directory\" data-id=\"" +(main.directive.length-1)+ "\"/>" +
            "   </div>" +
            "   <div class=\"col-lg-3\">" +
            "       <button type=\"button\" class=\"btn btn-danger btn-block remove\" data-id=\"" +(main.directive.length-1)+ "\">REMOVE</button>" +
            "   </div>" +
            "</div>"
        );

        jQuery.getJSON('https://my-json-server.typicode.com/rifqiiardhian/botdata/db', function(data) {
            for ( let i = 0; i < data.bot.length; i++ ) {
                jQuery('.user-agent').append(
                    "           <option value=\"" +data.bot[i].value+ "\">" +data.bot[i].name+ "</option>"
                );
            }
        });
    });

    jQuery('#create-robot').click(function() {
        console.log(main);

        let defaccess = main.defaultaccess + "\n\n";
        let crawldel = main.crawldelay + "\n\n";
        let sitemap = main.sitemap + "\n";
        let directive = '';

        for (let i = 0; i < main.directive.length; i++) {
            directive += "User-agent: " +main.directive[i].useragent + "\n" +main.directive[i].access+ ": " +main.directive[i].directory+ "\n\n";
        }

        jQuery("#robot-result").val(defaccess+ "Crawl-delay: " +crawldel+ "Sitemap: " +sitemap+ "\n" +directive);

        toastr.success('Successfully Generating Robots.txt', 'Success');
        result.style.display = 'block';
        sticky.update();
    });
});

jQuery(document).on('change', '#defaultaccess', function () {
    main.defaultaccess = jQuery(this).val();
});

jQuery(document).on('change', '#crawldelay', function () {
    main.crawldelay = jQuery(this).val();
});

jQuery(document).on('keyup', '#sitemapurl', function () {
    main.sitemap = jQuery(this).val();
});

jQuery(document).on('change', '.access-directive', function () {
    let index = parseInt(jQuery(this).data('id'));
    console.log('index:' + index);
    main.directive[index].access = jQuery(this).val();
});

jQuery(document).on('change', '.user-agent', function () {
    let index = parseInt(jQuery(this).data('id'));
    console.log('index:' + index);
    main.directive[index].useragent = jQuery(this).val();
});

jQuery(document).on('keyup', '.directory', function () {
    let index = parseInt(jQuery(this).data('id'));
    console.log('index:' + index);
    main.directive[index].directory = jQuery(this).val();
});

jQuery(document).on('click', '.remove', function () {
    let index = parseInt(jQuery(this).data('id'));
    if ( index !== 0 ){
        main.directive.splice(index, 1);

        for (let i = index + 1; i < main.directive.length + 1; i++) {
            jQuery('.user-agent[data-id=' + (i - 1) + ']').val(jQuery('.user-agent[data-id=' + (i) + ']').val())
            jQuery('.access-directive[data-id=' + (i - 1) + ']').val(jQuery('.access-directive[data-id=' + (i) + ']').val())
            jQuery('.directory[data-id=' + (i - 1) + ']').val(jQuery('.directory[data-id=' + (i) + ']').val())
        }
        jQuery('.user-agent[data-id=' + main.directive.length + ']').remove();
        jQuery('.access-directive[data-id=' + main.directive.length + ']').remove();
        jQuery('.directory[data-id=' + main.directive.length + ']').remove();
        jQuery('.remove[data-id=' + main.directive.length + ']').remove();
        jQuery('.directive-row[data-id=' + main.directive.length + ']').remove();
    }
});

jQuery('#export').click(function () {
    var text = jQuery('#robot-result').val();
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

jQuery('#copy').click(function () {
    const textarea = jQuery('#robot-result');
    textarea.select();
    document.execCommand("copy");

    toastr.info('Copied to Clipboard', 'Information');
});

jQuery('#reset').click(function () {
    location.reload();
});
