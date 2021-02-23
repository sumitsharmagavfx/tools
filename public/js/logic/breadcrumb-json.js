function print() {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "breadcrumb",
        "itemListElement": []
    };

jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let pageName = lang ==='en'? 'PageName': 'Nama Halaman';
    let url = lang === 'en'?'Url':'Url';
    main.itemListElement.push({
        "@type": "breadcrumbList",
        "pageName": "",
        'url':"",
    });
    print();
    jQuery('#add-breadcrumb').click(function () {

        main.itemListElement.push({
            "@type": "breadcrumb",
            "pageName": "",
            'url':"",
        });
        print();
        jQuery('#formbreadcrumb').append(
            "<div class='row form-cotainer' data-id='"+(main.itemListElement.length)+"'><div class='col-10 col-sm-11'><div class='row'><div class='col-sm-5'><label for='pageName' class='font-weight-bold'>Page #"+(main.itemListElement.length+1)+" name</label><input type='text' id='pageName' class='form-control  mb-5 pageName' name='' placeholder='Type your name here..' value='' data-id='"+(main.itemListElement.length)+"'></div><div class='col-sm-7'><label for='url' class='font-weight-bold'>URL #"+(main.itemListElement.length+1)+"</label><input type='text' id='url' class='form-control mb-5 url' name='' placeholder='Type your URL here..' value='' data-id='"+(main.itemListElement.length)+"'></div></div></div><div class='col-2 col-sm-1'><div class='d-flex justify-content-center mt-9'><i class='bx bxs-x-circle bx-md delete' data-id='"+(main.itemListElement.length)+"'></i></div></div></div>"
            // "<button type=\"button\" class=\"btn btn-danger mb-2 delete\" name=\"button\" data-id=\""+(main.itemListElement.length-1)+"\">"+deletes+"</button>\n" +
            // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 pageName\" placeholder=\""+pageName+" :\" value=\"\" data-id=\""+(main.itemListElement.length-1)+"\"> \n" +
            // "                <input type=\"text\" name=\"\" class=\"form-control mb-7 url\" placeholder=\""+url+" :\" value=\"\" data-id=\""+(main.itemListElement.length-1)+"\">"
        );
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
        sticky.update();
    });



});

jQuery(document).on('keyup', '.pageName', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.itemListElement[index].pageName = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.url', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.itemListElement[index].url = jQuery(this).val();
    print();
});


jQuery(document).on('click', '.delete', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index!==0){
        main.itemListElement.splice(index, 1);
        print();
        for (let i = index + 1; i < main.itemListElement.length + 1; i++) {
            jQuery('.pageName[data-id=' + (i - 1) + ']').val(jQuery('.pageName[data-id=' + (i) + ']').val())
            jQuery('.url[data-id=' + (i - 1) + ']').val(jQuery('.url[data-id=' + (i) + ']').val())
        }
        jQuery('.form-cotainer[data-id=' + (main.itemListElement.length + 1) + ']').remove();
        // jQuery('.pageName[data-id=' + main.itemListElement.length + ']').remove();
        // jQuery('.url[data-id=' + main.itemListElement.length + ']').remove();
        // jQuery('.labelURL[data-id=' + main.itemListElement.length + ']').remove();
        // jQuery('.delete[data-id=' + main.itemListElement.length + ']').remove();
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
    }
    sticky.update();
});

jQuery('#copy').click(function () {
    const copyText = jQuery('#json-format');
    copyText.select();
    // copyText.setSelectionRange(0, 999999); /*For mobile devices*/
    document.execCommand("copy");
});
