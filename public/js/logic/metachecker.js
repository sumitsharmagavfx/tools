jQuery(document).ready(function() {
    $("#manual-mode").hide();
    refreshLocalStorage();
});

jQuery('#crawlURL').click(function() {
    var matchreg = /^(https?|ftp):\/\//;
    let urls = jQuery('#url').val().replace(matchreg, "");
    jQuery.get({
        url: 'https://api.cmlabs.co/?url=https://' + urls,
        success: (res) => {
            $('#resulttitle').text(res.title);
            $('#resultdesc').text(res.description);
            $('#resulturl').text('https://' + urls.toLowerCase());
            $('#resulttitlemobile').text(res.title);
            $('#resultdescmobile').text(res.description);
            $('#resulturlmobile').text('https://' + urls.toLowerCase());
            $('#desc').val(res.description)
            $('#title').val(res.title)
            $("#manual-mode").removeClass("d-none").addClass("d-block").slideDown();
            $('#desc').attr('disabled', 'disabled');
            $('#title').attr('disabled', 'disabled');
            var rateTitle = titleChecker(res.title);
            fillTitleBar(rateTitle);
            var rateDesc = descChecker(res.description);
            fillDescBar(rateDesc);
            save('https://' + urls, res.title, res.description)
            refreshLocalStorage();
        },
        fail: (res) => {
            toastr.error("Your URL not valid")
        }
    });
})

$('#title').on('keyup', function() {
    var rateTitle = titleChecker($(this).val());
    fillTitleBar(rateTitle)
    $('#resulttitle').text($(this).val())
    $('#resulttitlemobile').text($(this).val())
})

$('#desc').on('keyup', function() {
    var rateDesc = descChecker($(this).val());
    fillDescBar(rateDesc);
    $('#resultdesc').text($(this).val());
    $('#resultdescmobile').text($(this).val());
})

$('#url').on('keyup', function() {
    $('#resulturl').text($(this).val().toLowerCase())
    $('#resulturlmobile').text($(this).val().toLowerCase())
})

const save = function(url, title, description) {
    let key = new Date().getTime();
    let datum = {
        url: url,
        title: title,
        description: description
    }
    const keys = window.localStorage.getItem('keys')
    var temp = define()
    if (keys) {
        temp = JSON.parse(keys)
    }
    if (!temp.meta.includes(key)) {
        temp.meta.push(key)
    }
    localStorage.setItem('keys', JSON.stringify(temp));
    localStorage.setItem(key, JSON.stringify(datum));
}

const removeData = function(key) {
    let keys = JSON.parse(localStorage.getItem('keys'));
    for (var i in keys.meta) {
        if (keys.meta[i] === key) {
            keys.meta.splice(i, 1)
            break;
        }
    }
    localStorage.setItem('keys', JSON.stringify(keys))
    localStorage.removeItem(key)
    refreshLocalStorage();
}

const getMonth = function(index) {
    const month = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL",
        "AUG", "SEP", "OCT", "NOV", "DES"
    ]
    return month[index]
}

const refreshLocalStorage = function() {
    try {
        $('#localsavemobile').empty();
        $('#localsavedesktop').empty();
        const keys = JSON.parse(localStorage.getItem('keys'))
        if (keys) {
            for (let key of keys.meta) {
                let temp = JSON.parse(localStorage.getItem(key)).url
                let date = new Date(key)
                let div = '<div class="custom-card py-5 px-3" onclick="getData(' + key + ')">' +
                    '<div class="d-flex align-items-center justify-content-between">' +
                    '<div class="local-collection-title">' + temp + '</div>' +
                    '<div class="d-flex align-items-center">' +
                    '<span class="mr-2 text-grey date-created">Created at ' + ((date.getHours() < 10) ? ('0' + date.getHours()) : date.getHours()) + '.' + ((date.getMinutes() < 10) ? ('0' + date.getMinutes()) : date.getMinutes()) + ' | ' + date.getDate() + ', ' + getMonth(date.getMonth()) + ' ' + date.getFullYear() + '</span>' +
                    '<i class="bx bxs-x-circle text-grey" onclick="removeData(' + key + ')"></i>' +
                    '</div>' +
                    '</div>' +
                    '</div>'

                let div2 = '<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px" onclick="getData(' + key + ')">' +
                    '<div class="d-flex justify-content-between">' +
                    '  <div class="local-collection-title">' + temp + '</div>' +
                    '  <div class="d-flex align-items-center">' +
                    '    <span class="mr-2 text-grey date-created">Created at ' + (date.getHours() < 10 ? ('0' + date.getHours()) : date.getHours()) + '.' + (date.getMinutes() < 10 ? ('0' + date.getMinutes()) : date.getMinutes()) + ' | ' + date.getDate() + ', ' + getMonth(date.getMonth()) + ' ' + date.getFullYear() + '</span>' +
                    '    <i class="bx bxs-x-circle text-grey" onclick="removeData(' + key + ')"></i>' +
                    '  </div>' +
                    '</div>' +
                    '</li>'

                $('#localsavemobile').append(div)
                $('#localsavedesktop').append(div2)
            }
        }
    } catch (e) {}
}

const getData = function(key) {
    if (localStorage.getItem(key)) {
        var res = JSON.parse(localStorage.getItem(key));
        $('#resulttitle').text(res.title);
        $('#resultdesc').text(res.description);
        $('#resulturl').text(res.url);
        $('#resulttitlemobile').text(res.title);
        $('#resultdescmobile').text(res.description);
        $('#resulturlmobile').text(res.url);
        $('#desc').val(res.description)
        $('#title').val(res.title)
        $("#manual-mode").show();
        $('#desc').attr('disabled', 'disabled');
        $('#title').attr('disabled', 'disabled');
        var rateTitle = titleChecker(res.title);
        fillTitleBar(rateTitle);
        var rateDesc = descChecker(res.description);
        fillDescBar(rateDesc);
    }
}

const clearAll = function() {
    var res = JSON.parse(localStorage.getItem('keys'));
    for (let i of res.meta) {
        localStorage.removeItem(i);
    }
    res.meta = [];
    localStorage.setItem('keys', JSON.stringify(res))
    $('#localsavemobile').empty();
    $('#localsavedesktop').empty();
}

const titleChecker = function(title) {
    var titlesizer = $('#titlesizer');
    var rate = 0;
    var l = title.length;
    if (l > 30 && l < 55) {
        rate++;
    }
    titlesizer.css("display: inline-block; text-decoration: none; color: #1e0fbe; font-size: 18px !important; line-height: 18px !important;white-space:nowrap;visibility:hidden; font-family: Arial,Arial, Tahoma, Sans Serif")
    titlesizer.append(title);
    var pixel = titlesizer.innerWidth();
    if (pixel >= 250 && pixel <= 470) {
        rate += 2;
    }
    titlesizer.empty();
    return rate;
}

const descChecker = function(desc) {
    var descsizer = $('#descsizer');
    var rate = 0;
    var l = desc.length;
    if (l > 65 && l < 160) {
        rate++;
    }
    descsizer.css("display: inline-block; font-family: arial, sans-serif; font-size: 13px;color: #545454;line-height: 1.4;white-space: pre-wrap;word-wrap: break-word;filter: none!important;white-space:nowrap;visibility:hidden;");
    descsizer.append(desc)
    var pixel = descsizer.innerWidth();
    if (pixel >= 400 && pixel <= 750) {
        rate += 2;
    }
    descsizer.empty()
    return rate;
}

const fillTitleBar = function(param) {
    for (let i = 1; i < param + 1; i++) {
        $('#titlebar' + i).removeClass("blank")
        $('#titlebar' + i).addClass("active")
    }
    for (let i = param + 1; i < 4; i++) {
        $('#titlebar' + i).removeClass("active")
        $('#titlebar' + i).addClass("blank")
    }
}

const fillDescBar = function(param) {
    for (let i = 1; i < param + 1; i++) {
        $('#descbar' + i).removeClass("blank")
        $('#descbar' + i).addClass("active")
    }
    for (let i = param + 1; i < 4; i++) {
        $('#descbar' + i).removeClass("active")
        $('#descbar' + i).addClass("blank")
    }
}

$(document).ready(function() {
    $('#manualModeOff').click(function() {
        $('#manualModeOn').removeClass("d-none").addClass("d-block");
        $('#botModeOff').removeClass("d-none").addClass("d-block");
        $('#manual-mode').removeClass("d-none").addClass("d-block").slideDown();
        $('#manualModeOff').removeClass("d-block").addClass("d-none");
        $('#botModeOn').removeClass("d-block").addClass("d-none");
        $("#crawlURL").attr("disabled", true);
    });

    $('#botModeOff').click(function() {
        $('#botModeOn').removeClass("d-none").addClass("d-block");
        $('#manualModeOff').removeClass("d-none").addClass("d-block");
        $('#manual-mode').slideUp().removeClass("d-block");
        $('#botModeOff').removeClass("d-block").addClass("d-none");
        $('#manualModeOn').removeClass("d-block").addClass("d-none");
        $("#crawlURL").attr("disabled", false);
    });
});
jQuery.each(jQuery('textarea[data-autoresize]'), function() {
    var offset = this.offsetHeight - this.clientHeight;

    var resizeTextarea = function(el) {
        jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
    };
    jQuery(this).on('keyup input', function() {
        resizeTextarea(this);
    }).removeAttr('data-autoresize');
});
