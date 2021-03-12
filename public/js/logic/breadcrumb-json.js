    const _breadcrumbLocalStorage = 'breadcrumb-history';
    // localStorage.clear();
    const HistoryTemplate = (name, date) => `
<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px history--list" data-name="${name}">
  <div class="d-flex justify-content-between">
    <div class="local-collection-title">${name}</div>
    <div class="d-flex align-items-center">
      <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at ${date}"></i>
      <i class='bx bxs-x-circle bx-sm text-grey delete-history--btn' data-name="${name}"></i>
    </div>
  </div>
</li>
`;

    const getMonth = function(index){
        const month = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL",
            "AUG", "SEP", "OCT", "NOV", "DES"]
        return month[index]
    }

    const getData = function(key){
        let raw = localStorage.getItem(key);
        if(raw){
            $('.row.parent').remove();
            $('#json-format').val(raw);
            $('#json-format').data('key',key)
            let data = JSON.parse(sliceFirstLastLine(raw));
            $("#formbreadcrumb").empty();
            for (let i in data.itemListElement){

                if(i < 2){
                    $('#formbreadcrumb').append(
                        `<div class='row form-cotainer' data-id='${i}'><input type='hidden' id='itemListLength' value='${data.itemListElement[i].length}'>
<div class='col-10 col-sm-11'><div class='row'><div class='col-sm-5 mb-5'>
<label for='pageName' class='font-weight-bold'>Page # ${i+1} name</label>
<input type='text' id='pageName' class='form-control pageName' name='' placeholder='${data.itemListElement[i].name}' value='${data.itemListElement[i].name}' data-id='${i}'>
</div><div class='col-sm-7 mb-5'><label for='url' class='font-weight-bold'>URL #${i+1}</label>
<input type='text' id='url' class='form-control url' name='' placeholder='${data.itemListElement[i].item}' value='${data.itemListElement[i].item}' data-id='${i}'>
<div class='invalid-feedback' data-id='${i}'>Invalid URL</div></div></div></div><div class='col-2 col-sm-1'>
<div class='d-flex justify-content-center mt-9'><i class='bx bxs-x-circle bx-md delete disabled'  data-id='${i}'></i></div></div></div>`
                    );
                }else{
                    $('#formbreadcrumb').append(
                        `<div class='row form-cotainer' data-id='${i}'><input type='hidden' id='itemListLength' value='${data.itemListElement[i].length}'>
<div class='col-10 col-sm-11'><div class='row'><div class='col-sm-5 mb-5'>
<label for='pageName' class='font-weight-bold'>Page # ${i+1} name</label>
<input type='text' id='pageName' class='form-control pageName' name='' placeholder='${data.itemListElement[i].name}' value='${data.itemListElement[i].name}' data-id='${i}'>
</div><div class='col-sm-7 mb-5'><label for='url' class='font-weight-bold'>URL #${i+1}</label>
<input type='text' id='url' class='form-control url' name='' placeholder='${data.itemListElement[i].item}' value='${data.itemListElement[i].item}' data-id='${i}'>
<div class='invalid-feedback' data-id='${i}'>Invalid URL</div></div></div></div><div class='col-2 col-sm-1'>
<div class='d-flex justify-content-center mt-9'><i class='bx bxs-x-circle bx-md delete'  data-id='${i}'></i></div></div></div>`
                    );
                }


            }
            // console.log(raw)
        }
    }

    const refreshLocalStorage = function(){
        try{
            const keys = JSON.parse(localStorage.getItem(_breadcrumbLocalStorage))
            if (keys.faq){
                for (let key of keys.breadcrumbs){
                    // console.log(sliceFirstLastLine(localStorage.getItem(key)))
                    let temp = JSON.parse(sliceFirstLastLine(localStorage.getItem(key)))
                    let date = new Date(key*1000)
                    let div = '<div class="custom-card py-5 px-3" onclick="getData('+key+')">'+
                        '<div class="d-flex align-items-center justify-content-between">'+
                        '<div class="local-collection-title">'+temp.itemListElement[0].name+'</div>'+
                        '<div class="d-flex align-items-center">'+
                        '<span class="mr-2 text-grey date-created">Created at '+((date.getHours() < 10) ? ('0'+date.getHours()):date.getHours())+'.'+((date.getMinutes() < 10) ? ('0'+date.getMinutes()):date.getMinutes())+' | '+date.getDate()+', '+getMonth(date.getMonth())+' '+date.getFullYear()+'</span>'+
                        '<i class="bx bxs-x-circle text-grey" onclick="removeData('+key+')"></i>'+
                        '</div>'+
                        '</div>'+
                        '</div>'

                    let div2 = '<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px" onclick="getData('+key+')">'+
                        '<div class="d-flex justify-content-between">'+
                        '  <div class="local-collection-title">'+temp.itemListElement[0].name+'</div>'+
                        '  <div class="d-flex align-items-center">'+
                        '<span class="mr-2 text-grey date-created">Created at '+(date.getHours() < 10 ? ('0'+date.getHours()):date.getHours())+'.'+(date.getMinutes() < 10 ? ('0'+date.getMinutes()):date.getMinutes())+' | '+date.getDate()+', '+getMonth(date.getMonth())+' '+date.getFullYear()+'</span>'+
                        '    <i class="bx bxs-x-circle text-grey" onclick="removeData('+key+')"></i>'+
                        '  </div>'+
                        '</div>'+
                        '</li>'

                    $('#localsavemobile').append(div)
                    $('#localsavedesktop').append(div2)
                }
            }
        }catch(e){
            console.log(e)
        }
    }

    function getHistories() {
        $('#localsavedesktop').empty();
        // $('#local-history-mobile').empty();
        let histories = localStorage.getItem(_breadcrumbLocalStorage);
        histories = histories ? JSON.parse(histories) : [];
        if (!histories || histories.length === 0) {
            $('#localsavedesktop').append(EmptyHistoryTemplate());
            // $('#local-history-mobile').append(EmptyHistoryTemplateMobile());
            return;
        }
        for (let history of histories.reverse()) {
            $('#localsavedesktop').append(
                HistoryTemplate(history.pageName, history.date)
            );
            $('#localsavemobile').append(
                HistoryTemplateMobile(history.pageName, history.date)
            )
        }
    }

    const sliceFirstLastLine = function(text){
        let splited = text.split('\n')
        splited.splice(0,1)
        splited.splice(splited.length - 1,1)
        return splited.join('\n')
    }

    const removeData = function(key){
        let keys = JSON.parse(localStorage.getItem(_breadcrumbLocalStorage));
        for(var i in keys.breadcrumbs){
            if(keys.breadcrumbs[i] === key){
                keys.breadcrumbs.splice(i,1)
                break;
            }
        }
        localStorage.setItem('keys',JSON.stringify(keys))
        localStorage.removeItem(key)
        $('#localsavemobile').empty();
        $('#localsavedesktop').empty();
        refreshLocalStorage();
    }



    const getDataFromText = function(){
        const raw = $('#json-format').val();
        return JSON.parse(sliceFirstLastLine(raw));
    }

    function addHistory(pageName, data) {
        let datas = getDataFromText();
        if(datas.itemListElement.length !== 1 || (datas.itemListElement[0].name && datas.itemListElement[0].item)){
            // console.log(data,"SAVE")
            const key = $('#json-format').data('key');
            const keys = window.localStorage.getItem(_breadcrumbLocalStorage)
            var temp = define();
            if (keys){
                temp = JSON.parse(keys)
            }
            if (!temp.breadcrumbs.includes(key)){
                temp.breadcrumbs.push(key)
            }
            localStorage.setItem(_breadcrumbLocalStorage, JSON.stringify(temp));
            localStorage.setItem(key, $('#json-format').val());
        }else{
            // console.log(data,"FAIL")
            const key = $('#json-format').data('key');
            const keys = window.localStorage.getItem(_breadcrumbLocalStorage)
            var temp = define();
            if (keys){
                temp = JSON.parse(keys)
                let index = temp.breadcrumbs.indexOf(key)
                if (index > 0){
                    temp.breadcrumbs.splice(index, 1)
                }
                localStorage.setItem(_breadcrumbLocalStorage, JSON.stringify(temp));
                localStorage.removeItem(key);
            }
        }
        $('#localsavemobile').empty();
        $('#localsavedesktop').empty();
        refreshLocalStorage();
    }

    // declare counter for data-id
    var counter = 2;

    // declare first two json-ld breadcrumbs component
    var main = {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "",
                "item": "",
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "",
                "item": "",
            }
        ]
    }

    function jsonFormat() {
        $("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
    }

    // let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let label_page = lang === 'en'?'Page':'Laman';
    let label_name = lang === 'en'?'name':'nama';
    let placeholder_pageName = lang ==='en'? 'Type your page name here..': 'Ketik nama halaman Anda di sini..';
    let placeholder_url = lang === 'en'?'Type your page URL here..':'Ketik URL halaman Anda di sini..';
    let invalid_url = lang === 'en'?'Invalid URL':'URL Tidak Valid';

    // call JsonFormat for showing json-ld script
    jsonFormat();
    refreshLocalStorage();

    function addBreadcrumb(){
        counter++;
        main.itemListElement.push({
            "@type": "ListItem",
            "position": counter,
            "name": "",
            "item": "",
        });
        jsonFormat();
        $('#formbreadcrumb').append("<div class='row form-cotainer' data-id='"+(counter)+"'><input type='hidden' id='itemListLength' value='"+(main.itemListElement.length)+"'><div class='col-10 col-sm-11'><div class='row'><div class='col-sm-5 mb-5'><label for='pageName' class='font-weight-bold'>"+label_page+" #"+(counter)+" "+label_name+"</label><input type='text' id='pageName' class='form-control pageName' name='' placeholder='"+placeholder_pageName+"' value='' data-id='"+(counter)+"'></div><div class='col-sm-7 mb-5'><label for='url' class='font-weight-bold'>URL #"+(counter)+"</label><input type='text' id='url' class='form-control url' name='' placeholder='"+placeholder_url+"' value='' data-id='"+(counter)+"'><div class='invalid-feedback'>"+invalid_url+"</div></div></div></div><div class='col-2 col-sm-1'><div class='d-flex justify-content-center mt-9'><i class='bx bxs-x-circle bx-md delete' data-id='"+(counter)+"'></i></div></div></div>");
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        $('#json-format').attr('rows',row);
        // sticky.update();
    }

    function deleteBreadcrumb(index){
        // if(index > 2){
            main.itemListElement.splice(index-1, 1);

            for (let i = index-1; i < main.itemListElement.length; i++) {
                    main.itemListElement[i]['position'] = main.itemListElement[i]['position'] - 1;
            }

            jsonFormat();
            $('.form-cotainer[data-id=' + (counter) + ']').remove();
            let row = parseInt(jQuery('#json-format').val().split('\n').length);
            $('#json-format').attr('rows',row);
            counter--;
        // }
        sticky.update();
    }

    function updateJSON_item(index, url){

        /*
        *
        * Adding regex url
        * */

        var _url = new URL(url);

        if(index < 2){
            // console.log(index)
            if (_url.protocol === 'https:' || _url.protocol === 'http:') {
                main.itemListElement[index].item = url;
                jsonFormat();
            } else {
                main.itemListElement[index].item = url;
                jsonFormat();
                $(`.url[data-id=${index}]`).addClass('is-invalid');
                $(`.invalid-feedback[data-id=${index}]`).show();
            }
        }else{
            if(counter > 2){
                if (_url.protocol === 'https:' || _url.protocol === 'http:') {
                    main.itemListElement[index-1].item = url;
                    jsonFormat();
                } else {
                    main.itemListElement[index].item = url;
                    jsonFormat();
                    $(`.url[data-id=${counter}]`).addClass('is-invalid');
                    $('.invalid-feedback[data-id=' + (counter) + ']').show();
                }
            }else{
                if (_url.protocol === 'https:' || _url.protocol === 'http:') {
                    main.itemListElement[index].item = url;
                    jsonFormat();
                } else {
                    main.itemListElement[index].item = url;
                    jsonFormat();
                    $(`.url[data-id=${counter}]`).addClass('is-invalid');
                    $('.invalid-feedback[data-id=' + (counter) + ']').show();
                }
            }
        }



    }

    function updateJSON_name(index, value){
        if(counter > 2){
            main.itemListElement[index-1].name = value;
            jsonFormat();
        }else{
            main.itemListElement[index].name = value;
            jsonFormat();
        }

    }


    $('#add-breadcrumb').click(function () {
        addBreadcrumb();
    });

    $(document).on('click', '.delete', function () {
        deleteBreadcrumb(parseInt($(this).data('id')));
        addHistory($(this).val(), $('#formbreadcrumb').html());
    });

    $(document).on('keyup', '.url', function () {
        updateJSON_item(parseInt($(this).data('id')), $(this).val());
        addHistory($(this).val(), $('#formbreadcrumb').html());
    });

    $(document).on('keyup', '.pageName', function () {
        updateJSON_name(parseInt($(this).data('id')), $(this).val());
        addHistory($(this).val(), $('#json-format').val());
    });

    $(document).on('change', '#schema-json-ld', function() {
        if($(this).val() !== 'home') {
            window.location = 'json-ld-' + $(this).val() + '-schema-generator'
        }else{
            window.location = 'json-ld-schema-generator'
        }
    });

    $('#copy').click(function () {
        var copyText = jQuery('#json-format');
        copyText.select();
        document.execCommand("copy");
    });
