jQuery(document).ready(function () {
    jQuery('#execute').click(function(){
        var matchreg =/^(https?|ftp):\/\//;
        let urls = jQuery('#url').val().replace(matchreg,"");
        jQuery.get({
            url: 'https://scrapper.ermanu.vercel.app/?url=https://' + urls,
            success: (res) => {
                calculate(res.title, res.description);
            },
            fail: (res) => {
                urlcheck.innerHTML = "<span style='font-family: Arial, Arial, Tahoma, sans-serif; font-size:12px; font-weight: 400; color: #d6564f' >Your Url Is Not Valid</span><br>";
            }
        });
    })
});
function copy(element){
    var copyText = document.getElementById(element);
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    var alerttitle = document.getElementById("alerttitle");
    var alertdesc = document.getElementById("alertdesc");
    var alerturl = document.getElementById("alerturl");
    if(element==='title'){
        alerttitle.style = "padding: 4px 0px 2px; color: rgb(0, 102, 33); margin-bottom: 1px; font-size: 13px; line-height: 16px;";
        alerttitle.innerHTML = "Copied";
        setTimeout(function(){jQuery('#alerttitle').hide()}, 3000);
    }else if(element === 'desc'){
        alertdesc.style = "padding: 4px 0px 2px; color: rgb(0, 102, 33); margin-bottom: 1px; font-size: 13px; line-height: 16px;";
        alertdesc.innerHTML = "Copied";
        setTimeout(function(){jQuery('#alertdesc').hide()}, 3000);
    }else if(element === 'url'){
        alerturl.style = "padding: 4px 0px 2px; color: rgb(0, 102, 33); margin-bottom: 1px; font-size: 13px; line-height: 16px;";
        alerturl.innerHTML = "Copied";
        setTimeout(function(){jQuery('#alerturl').hide()}, 3000);
    }

}
const desc = document.getElementById('desc');
const url = document.getElementById('url');
const title = document.getElementById('title');
const resulttitle = document.getElementById('resulttitle');
const resultdesc = document.getElementById('resultdesc');
const resulturl = document.getElementById('resulturl');
const resulttitlemobile = document.getElementById('resulttitlemobile');
const resultdescmobile = document.getElementById('resultdescmobile');
const resulturlmobile = document.getElementById('resulturlmobile');
var titlecount = document.getElementById('titlecount');
var desccount = document.getElementById('desccount');
var urlcheck = document.getElementById('urlcheck');
var titlesizer = document.getElementById('titlesizer');
var titlesizertemp = document.getElementById('titlesizertemp');
var descsizer = document.getElementById('descsizer');
var descsizertemp = document.getElementById('descsizertemp');
resulttitle.style = "display: inline-block; text-decoration: none; color: #1e0fbe; font-size: 18px !important; line-height: 18px !important;";
titlesizer.style = "display: inline-block; text-decoration: none; color: #1e0fbe; font-size: 18px !important; line-height: 18px !important;white-space:nowrap;visibility:hidden;";
titlesizertemp.style = "display: inline-block; text-decoration: none; color: #1e0fbe; font-size: 18px !important; line-height: 18px !important;white-space:nowrap;visibility:hidden;";
resulttitlemobile.style = "display: inline-block; text-decoration: none; color: #1558d6; font-size: 18px !important; line-height: 24px !important;";
resulturl.style = "padding: 4px 0px 2px; color: rgb(0, 102, 33); margin-bottom: 1px; font-size: 13px; line-height: 16px;";
resulturlmobile.style = "padding: 4px 0px 2px 0; color: rgb(0, 102, 33); margin-bottom: 1px; font-size: 13px; line-height: 16px;";
resultdesc.style = "display: inline-block; font-family: arial, sans-serif; font-size: 13px;color: #545454;line-height: 1.4;white-space: pre-wrap;word-wrap: break-word;filter: none!important;";
resultdescmobile.style = "display: inline-block; font-family: arial, sans-serif; font-size: 13px;color: #3c4043;line-height: 20px;white-space: pre-wrap;word-wrap: break-word;filter: none!important;";
descsizer.style = "display: inline-block; font-family: arial, sans-serif; font-size: 13px;color: #545454;line-height: 1.4;white-space: pre-wrap;word-wrap: break-word;filter: none!important;white-space:nowrap;visibility:hidden;"
descsizertemp.style = "display: inline-block; font-family: arial, sans-serif; font-size: 13px;color: #545454;line-height: 1.4;white-space: pre-wrap;word-wrap: break-word;filter: none!important;white-space:nowrap;visibility:hidden;"


function calculate(title, desc) {
    resulttitlemobile.innerHTML = title;
    resulttitle.innerHTML = title;
    titlesizer.innerHTML = title;
    document.getElementById("title").value = title;
    if (resulttitle.value != '') {
        // console.clear();
        // console.log(resulttitle.clientWidth);
        counttitle();
    }
    resultdescmobile.innerHTML = desc;
    resultdesc.innerHTML = desc;
    descsizer.innerHTML = desc;
    document.getElementById("desc").value = desc;
    if (resultdesc.value != '') {
        // console.clear();
        // console.log(resultdesc.clientWidth);
        let l = descsizer.clientWidth;
        if (l >= 0 && l < 400) {
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, <span style='color: #d6564f' >need more " + (400 - l) + " pixel(s)</span><br>";
        } else if (l >= 400 && l <= 750) {
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, <span style='color:rgb(0, 102, 33)' > — an acceptable length</span><br>";
        } else if (l > 750) {
            var rawDescription = jQuery.trim(jQuery("#desc").val());
            var description = rawDescription;
            jQuery("#descsizer").html(description);
            jQuery("#descsizertemp").html(description);
            var lastWord = new RegExp("\\S+$");
            while (jQuery("#descsizertemp").width() > 750) {
                description = jQuery.trim(description.replace(" <b>...</b>", ""));
                var newDescription = description;
                newDescription = jQuery.trim(newDescription.replace(lastWord, ""));
                rawDescription = jQuery.trim(rawDescription.replace(lastWord, ""));
                if (newDescription.length >= description.length) {
                    newDescription = newDescription.substring(0, newDescription.length - 1);
                    rawDescription = rawDescription.substring(0, rawDescription.length - 1)
                }
                description = newDescription + " <b>...</b>";
                jQuery("#descsizertemp").html(description)
            }
            resultdesc.innerHTML = description;
            resultdescmobile.innerHTML = description;
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, <span style='color: #d6564f' >too much " + (l - 750) + " pixel(s)</span><br>";
        } else {
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, Meta Description Tag : :(<br>"
        }
        l = desc.length;
        if (l >= 0 && l < 65) {
            desccount.innerHTML += "Meta Description is " + desc.length + " character(s) long, <span style='color: #d6564f' >need more " + (65 - l) + " character(s)</span><br>";
        } else if (l >= 65 && l <= 160) {
            desccount.innerHTML += "Meta Description is " + desc.length + " character(s) long, <span style='color:rgb(0, 102, 33)' > — an acceptable length</span><br>";
        } else if (l > 160) {
            desccount.innerHTML += "Meta Description is " + desc.length + " character(s) long, <span style='color: #d6564f' >too much " + (l - 160) + " character(s)</span><br>";
        } else {
            desccount.innerHTML += "Meta Description is " + desc.length + " character(s) long, Meta Description Tag : :("
        }
        var w = descsizer.innerHTML.replace(/['";:,.?\xbf\-!\xa1]+/g, "").match(/\S+/g);
        if (w) {
            desccount.innerHTML += "Words Length is " + w.length;
        } else {
            desccount.innerHTML += "Words Length is " + 0;
        }
    }
};
const titleInputHandler = function (t) {
    resulttitlemobile.innerHTML = t.target.value;
    resulttitle.innerHTML = t.target.value;
    titlesizer.innerHTML = t.target.value;
    if (resulttitle.value != '') {
        // console.clear();
        // console.log(resulttitle.clientWidth);
        counttitle();
    }
};
const urlInputHandler = function (u) {
    var tempurl = resulturl.innerHTML = u.target.value;
    resulturl.innerHTML = u.target.value + "<span class='urlgreenarrow'>";
    resulturlmobile.innerHTML = u.target.value + "<span class='urlgreenarrow'>";
    if (resulturl.value != '') {
        var check = new RegExp("^(http:\\/\\/www\\.|https:\\/\\/www\\.|http:\\/\\/|https:\\/\\/)?[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}(:[0-9]{1,5})?(\\/.*)?$");
        var checkurl = tempurl.match(check);
        if (checkurl) {
            urlcheck.innerHTML = "<span style='font-family: Arial, Arial, Tahoma, sans-serif;; font-size:12px; font-weight: 400; color:rgb(0, 102, 33)' >Your Url Is Valid</span><br>";
        } else {
            urlcheck.innerHTML = "<span style='font-family: Arial, Arial, Tahoma, sans-serif; font-size:12px; font-weight: 400; color: #d6564f' >Your Url Is Not Valid</span><br>";
        }
    }
};
const descInputHandler = function (d) {
    resultdescmobile.innerHTML = d.target.value;
    resultdesc.innerHTML = d.target.value;
    descsizer.innerHTML = d.target.value;
    if (resultdesc.value != '') {
        // console.clear();
        // console.log(resultdesc.clientWidth);
        let l = descsizer.clientWidth;
        if (l >= 0 && l < 400) {
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, <span style='color: #d6564f' >need more " + (400 - l) + " pixel(s)</span><br>";
        } else if (l >= 400 && l <= 750) {
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, <span style='color:rgb(0, 102, 33)' > — an acceptable length</span><br>";
        } else if (l > 750) {
            var rawDescription = jQuery.trim(jQuery("#desc").val());
            var description = rawDescription;
            jQuery("#descsizer").html(description);
            jQuery("#descsizertemp").html(description);
            var lastWord = new RegExp("\\S+$");
            while (jQuery("#descsizertemp").width() > 750) {
                description = jQuery.trim(description.replace(" <b>...</b>", ""));
                var newDescription = description;
                newDescription = jQuery.trim(newDescription.replace(lastWord, ""));
                rawDescription = jQuery.trim(rawDescription.replace(lastWord, ""));
                if (newDescription.length >= description.length) {
                    newDescription = newDescription.substring(0, newDescription.length - 1);
                    rawDescription = rawDescription.substring(0, rawDescription.length - 1)
                }
                description = newDescription + " <b>...</b>";
                jQuery("#descsizertemp").html(description)
            }
            resultdesc.innerHTML = description;
            resultdescmobile.innerHTML = description;
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, <span style='color: #d6564f' >too much " + (l - 750) + " pixel(s)</span><br>";
        } else {
            desccount.innerHTML = "Meta Description is " + l + " pixel(s) long, Meta Description Tag : :(<br>"
        }
        l = desc.value.length;
        if (l >= 0 && l < 65) {
            desccount.innerHTML += "Meta Description is " + desc.value.length + " character(s) long, <span style='color: #d6564f' >need more " + (65 - l) + " character(s)</span><br>";
        } else if (l >= 65 && l <= 160) {
            desccount.innerHTML += "Meta Description is " + desc.value.length + " character(s) long, <span style='color:rgb(0, 102, 33)' > — an acceptable length</span><br>";
        } else if (l > 160) {
            desccount.innerHTML += "Meta Description is " + desc.value.length + " character(s) long, <span style='color: #d6564f' >too much " + (l - 160) + " character(s)</span><br>";
        } else {
            desccount.innerHTML += "Meta Description is " + desc.value.length + " character(s) long, Meta Description Tag : :("
        }
        var w = descsizer.innerHTML.replace(/['";:,.?\xbf\-!\xa1]+/g, "").match(/\S+/g);
        console.log(w);
        if (w) {
            desccount.innerHTML += "Words length is " + w.length;
        } else {
            desccount.innerHTML += "Words length is " + 0;
        }
    }
};
function counttitle(){
    let l = titlesizer.clientWidth;
    if (l >= 0 && l < 250) {
        titlecount.innerHTML = "Page Title is " + titlesizer.clientWidth + " pixel(s) long, <span style='color: #d6564f' > need more " + (250 - l) + " pixel(s)</span><br>";
    } else if (l >= 250 && l <= 470) {
        titlecount.innerHTML = "Page Title is " + titlesizer.clientWidth + " pixel(s) long, <span style='color:rgb(0, 102, 33)' > — an acceptable length</span><br>";
    } else if (l > 470) {
        var rawTitle = jQuery.trim(jQuery("#title").val());
        var titles = rawTitle;
        jQuery("#titlesizer").html(titles);
        jQuery("#titlesizertemp").html(titles);
        var lastWord = new RegExp("\\S+$");
        while (jQuery("#titlesizertemp").width() > 470) {
            titles = jQuery.trim(titles.replace(" <b>...</b>", ""));
            var newTitle = titles;
            newTitle = jQuery.trim(newTitle.replace(lastWord, ""));
            if (newTitle.length >= titles.length) {
                newTitle = newTitle.substring(0, newTitle.length - 1)
            }
            titles = newTitle + " <b>...</b>";
            jQuery("#titlesizertemp").html(titles)
        }
        resulttitle.innerHTML = titles;
        resulttitlemobile.innerHTML = titles;
        titlecount.innerHTML = "Page Title is " + titlesizer.clientWidth + " pixel(s) Long, <span style='color: #d6564f' >too much " + (l - 470) + " pixel(s)</span><br>";
    } else {
        titlecount.innerHTML = "Page Title is " + titlesizer.clientWidth + " pixel(s) Long, Title tag : :(<br>"
    }
    l = title.value.length;
    if (l >= 0 && l < 30) {
        titlecount.innerHTML += "Page Title is " + title.value.length + " character(s) long, <span style='color: #d6564f' >need more " + (30 - l) + " character(s)</span><br>";
    } else if (l >= 30 && l <= 55) {
        titlecount.innerHTML += "Page Title is " + title.value.length + " character(s) long, <span style='color:rgb(0, 102, 33)' > — an acceptable length</span><br>";
    } else if (l > 55) {
        titlecount.innerHTML += "Page Title is " + title.value.length + " character(s) long, <span style='color: #d6564f' >too much " + (l - 55) + " character(s)</span><br>";
    } else {
        titlecount.innerHTML += "Page Title is " + title.value.length + " character(s) long, Title Tag : :("
    }
    var w = titlesizer.innerHTML.replace(/['";:,.?\xbf\-!\xa1]+/g, "").match(/\S+/g);
    // console.log(w);
    if (w) {
        titlecount.innerHTML += "Words length is " + w.length;
    } else {
        titlecount.innerHTML += "Words length is " + 0;
    }
}

title.addEventListener('input', titleInputHandler);
title.addEventListener('propertychange', titleInputHandler);
desc.addEventListener('input', descInputHandler);
desc.addEventListener('propertychange', descInputHandler);
url.addEventListener('input', urlInputHandler);
url.addEventListener('propertychange', urlInputHandler);
