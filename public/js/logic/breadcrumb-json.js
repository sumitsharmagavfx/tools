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
        jQuery('#formbreadcrumb').append("<button type=\"button\" class=\"btn btn-danger mb-2 delete\" name=\"button\" data-id=\""+(main.itemListElement.length-1)+"\">"+deletes+"</button>\n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 pageName\" placeholder=\""+pageName+" :\" value=\"\" data-id=\""+(main.itemListElement.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-7 url\" placeholder=\""+url+" :\" value=\"\" data-id=\""+(main.itemListElement.length-1)+"\">"
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
        jQuery('label[data-id=' + main.itemListElement.length + ']').remove();
        jQuery('.pageName[data-id=' + main.itemListElement.length + ']').remove();
        jQuery('.url[data-id=' + main.itemListElement.length + ']').remove();
        jQuery('.delete[data-id=' + main.itemListElement.length + ']').remove();
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
