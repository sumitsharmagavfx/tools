function print(data) {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(data, undefined, 4) + "\n<\/script>");
}

const refreshLocalStorage = function(){
    try{
        const keys = JSON.parse(localStorage.getItem('keys'))
        if (keys.faq){
            for (let key of keys.faq){
                console.log(sleceFirstLastLine(localStorage.getItem(key)))
                let temp = JSON.parse(sleceFirstLastLine(localStorage.getItem(key)))
                let date = new Date(key*1000)
                let div = '<div class="custom-card py-5 px-3" onclick="getData('+key+')">'+
                    '<div class="d-flex align-items-center justify-content-between">'+
                    '<div class="local-collection-title">'+temp.mainEntity[0].name+'</div>'+
                    '<div class="d-flex align-items-center">'+
                    '<span class="mr-2 text-grey date-created">Created at '+((date.getHours() < 10) ? ('0'+date.getHours()):date.getHours())+'.'+((date.getMinutes() < 10) ? ('0'+date.getMinutes()):date.getMinutes())+' | '+date.getDate()+', '+getMonth(date.getMonth())+' '+date.getFullYear()+'</span>'+
                    '<i class="bx bxs-x-circle text-grey" onclick="removeData('+key+')"></i>'+
                    '</div>'+
                    '</div>'+
                    '</div>'

                let div2 = '<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px" onclick="getData('+key+')">'+
                    '<div class="d-flex justify-content-between">'+
                    '  <div class="local-collection-title">'+temp.mainEntity[0].name+'</div>'+
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

const sleceFirstLastLine = function(text){
    let splited = text.split('\n')
    splited.splice(0,1)
    splited.splice(splited.length - 1,1)
    return splited.join('\n')
}

const getData = function(key){
    let raw = localStorage.getItem(key);
    if(raw){
        $('.row.parent').remove();
        $('#json-format').val(raw);
        $('#json-format').data('key',key)
        let data = JSON.parse(sleceFirstLastLine(raw));
        for (let i in data.mainEntity){
            if(i == 0){
                jQuery('.question[data-id=' + 0 + ']').val(data.mainEntity[0].name)
                jQuery('.answer[data-id=' + 0 + ']').val(data.mainEntity[0].acceptedAnswer.text)
                continue;
            }
            jQuery('#form').append(
                `<div class='row parent' data-id='${i}'><div class='col-10 col-sm-11'><div class='form-group mb-5'><label for='question-${i}' data-id='${i}' class='font-weight-bold question'>Question ${parseInt(i)+1}</label><input type='text' class='form-control question' name='' value='${data.mainEntity[i].name}' data-id='${i}'></div><div class='form-group mb-5'><label for='answer-${i}' data-id='${i}' class='font-weight-bold answer'>Answer ${parseInt(i)+1}</label><input type='text' class='form-control answer' name='' value='${data.mainEntity[i].acceptedAnswer.text}' data-id='${i}'></div></div><div class='col-2 col-sm-1'><div class='d-flex justify-content-center mt-9'><i class='bx bxs-x-circle bx-md delete' data-id='${i}'></i></div></div></div>`
            );
        }
    }
}

const removeData = function(key){
    let currentKey = $('#textarea').data('key')
    if (currentKey === key){
        for (let i = 1; i < main.mainEntity.length; i++) {
            jQuery('.row[data-id=' + i + ']').remove();
        }
        let data = getDataFromText()
        data.mainEntity.splice(1, main.mainEntity.length - 1);
        data.mainEntity[0].name = '';
        data.mainEntity[0].acceptedAnswer.text = '';
        jQuery('.question[data-id=' + 0 + ']').val(main.mainEntity[0].name)
        jQuery('.answer[data-id=' + 0 + ']').val(main.mainEntity[0].acceptedAnswer.text)
        print(data);
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
    }
    let keys = JSON.parse(localStorage.getItem('keys'));
    for(var i in keys.faq){
        if(keys.faq[i] === key){
            keys.faq.splice(i,1)
            break;
        }
    }
    localStorage.setItem('keys',JSON.stringify(keys))
    localStorage.removeItem(key)
    $('#localsavemobile').empty();
    $('#localsavedesktop').empty();
    refreshLocalStorage();
}

const clearAll = function(){
    var res = JSON.parse(localStorage.getItem('keys'));
    for(let i of res.faq){
        localStorage.removeItem(i);
    }
    res.faq = [];
    localStorage.setItem('keys',JSON.stringify(res))
    $('#localsavemobile').empty();
    $('#localsavedesktop').empty();
}

const getMonth = function(index){
    const month = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL",
        "AUG", "SEP", "OCT", "NOV", "DES"]
    return month[index]
}

const getDataFromText = function(){
    const raw = $('#json-format').val();
    // console.log(sleceFirstLastLine(raw))
    return JSON.parse(sleceFirstLastLine(raw));
}

const save = function(){
    let data = getDataFromText();
    console.log(data.mainEntity.length !== 1 || (data.mainEntity[0].name && data.mainEntity[0].acceptedAnswer.text))
    if(data.mainEntity.length !== 1 || (data.mainEntity[0].name && data.mainEntity[0].acceptedAnswer.text)){
        console.log(data,"SAVE")
        const key = $('#json-format').data('key');
        const keys = window.localStorage.getItem('keys')
        var temp = define();
        if (keys){
            temp = JSON.parse(keys)
        }
        if (!temp.faq.includes(key)){
            temp.faq.push(key)
        }
        window.localStorage.setItem('keys', JSON.stringify(temp));
        window.localStorage.setItem(key, $('#json-format').val());
    }else{
        console.log(data,"FAIL")
        const key = $('#json-format').data('key');
        const keys = window.localStorage.getItem('keys')
        var temp = define();
        if (keys){
            temp = JSON.parse(keys)
            let index = temp.faq.indexOf(key)
            if (index > 0){
                temp.faq.splice(index, 1)
            }
            window.localStorage.setItem('keys', JSON.stringify(temp));
            window.localStorage.removeItem(key);
        }
    }
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": []
    };

jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let question = lang ==='en'? 'Question' : 'Pertanyaan';
    let answer = lang ==='en'? 'Answer' : 'Jawaban';
    main.mainEntity.push({
        "@type": "Question",
        "name": "",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": ""
        }
    });
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
    refreshLocalStorage();
});

jQuery('#add').click(function () {
    data = getDataFromText()
    data.mainEntity.push({
        "@type": "Question",
        "name": "",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": ""
        }
    });
    print(data);
    jQuery('#form').append(
        "<div class='row parent' data-id='"+(data.mainEntity.length-1)+"'><div class='col-10 col-sm-11'><div class='form-group mb-5'><label for='question-" + (data.mainEntity.length) + "' data-id='"+(data.mainEntity.length-1)+"' class='font-weight-bold question'>Question " + (data.mainEntity.length) + "</label><input type='text' class='form-control question' name='' value='' data-id='" + (data.mainEntity.length-1) + "'></div><div class='form-group mb-5'><label for='answer-"+(data.mainEntity.length)+"' data-id='"+(data.mainEntity.length-1)+"' class='font-weight-bold answer'>Answer "+(data.mainEntity.length)+"</label><input type='text' class='form-control answer' name='' value='' data-id='"+(data.mainEntity.length-1)+"'></div></div><div class='col-2 col-sm-1'><div class='d-flex justify-content-center mt-9'><i class='bx bxs-x-circle bx-md delete' data-id='"+(data.mainEntity.length-1)+"'></i></div></div></div>"
    );

    let row = parseInt(jQuery('#json-format').val().split('\n').length);
    jQuery('#json-format').attr('rows',row);
    save();
    sticky.update();
});

jQuery(document).on('keyup', '.question', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    data = getDataFromText()
    data.mainEntity[index].name = jQuery(this).val();
    print(data);
    save();
});

jQuery(document).on('keyup', '.answer', function () {
    let index = parseInt(jQuery(this).data('id'));
    let data = getDataFromText()
    data.mainEntity[index].acceptedAnswer.text = jQuery(this).val();
    print(data);
    save();
});

jQuery(document).on('click', '.delete', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index!==0){
        let data = getDataFromText()
        data.mainEntity.splice(index, 1);
        print(data);
        for (let i = 0; i < main.mainEntity.length; i++) {
            jQuery('.question[data-id=' + i + ']').val(main.mainEntity[i].name)
            jQuery('.answer[data-id=' + i + ']').val(main.mainEntity[i].acceptedAnswer.text)
        }
        jQuery('.row[data-id=' + main.mainEntity.length + ']').remove();
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
        save()
    }
    sticky.update();
});

$(document).on('change', '#schema-json-ld', function() {
    if($(this).val() !== 'home') {
        window.location = 'json-ld-' + $(this).val() + '-schema-generator'
    }else{
        window.location = 'json-ld-schema-generator'
    }
});

jQuery('#copy').click(function () {
    const copyText = jQuery('#json-format');
    copyText.select();
    // copyText.setSelectionRange(0, 999999); /*For mobile devices*/
    document.execCommand("copy");
    toastr.info('Copied to Clipboard', 'Information');
});

jQuery('#reset').click(function(){
    for (let i = 1; i < main.mainEntity.length; i++) {
        jQuery('.row[data-id=' + i + ']').remove();
    }
    data = getDataFromText()
    data.mainEntity.splice(1, main.mainEntity.length - 1);
    data.mainEntity[0].name = '';
    data.mainEntity[0].acceptedAnswer.text = '';
    jQuery('.question[data-id=' + 0 + ']').val(main.mainEntity[0].name)
    jQuery('.answer[data-id=' + 0 + ']').val(main.mainEntity[0].acceptedAnswer.text)
    print(data);
    let row = parseInt(jQuery('#json-format').val().split('\n').length);
    jQuery('#json-format').attr('rows',row);
});
