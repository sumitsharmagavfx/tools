function print() {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "person",
        "mainEntity": []
    };

jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let name = lang ==='en'? 'Name' : 'Nama';
    let url = lang ==='en'? 'Url':'Url';
    let pictureUrl = lang ==='en'? 'PictureUrl' : 'UrlGambar';
    let jobTitle = lang ==='en'? 'JobTitle':'Jabatan';

    let sosmed = lang==='en'?'Sosmed':'Medsos';
    let sosmedName = lang==='en'?'Name':'Nama';

    main.mainEntity.push({
        "@type": "person",
        "name": "",
        'url':"",
        "pictureUrl":"",
        "jobTitle":"",
        "company":"",
    });
    print();
    jQuery('#add-person').click(function () {
        main.mainEntity.push({
            "socialMedia":{
                "sosmed":"",
                "sosmedName":"",
            }
        });
        print();
        jQuery('#formperson').append("<button type=\"button\" class=\"btn btn-danger mb-2 delete\" name=\"button\" data-id=\""+(main.mainEntity.length-1)+"\">"+deletes+"</button>\n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 sosmed\" placeholder=\""+sosmed+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <select name=\"\" class=\"form-control mb-5 sosmedName\" data-id=\""+(main.mainEntity.length-1)+"\"> \n"+
            "                <option value=\"\">Choose Your Social Media</option> \n"+
            "                <option value=\" facebook \">Facebook</option> \n"+
            "                <option value=\" twitter \">Twitter</option> \n"+
            "                <option value=\" linkedin \">LinkedIn</option> \n"+
            "                </select>"

        );
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
        sticky.update();
    });



});

jQuery(document).on('keyup', '.name', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.url', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].url = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.pictureUrl', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].pictureUrl = jQuery(this).val();
    print();
});


jQuery(document).on('keyup', '.jobTitle', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].jobTitle = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.company', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].company = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.sosmed', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].socialMedia.sosmed = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.sosmedName', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].socialMedia.sosmedName = jQuery(this).val();
    print();
});


jQuery(document).on('click', '.delete', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index!==0){
        main.mainEntity.splice(index, 1);
        print();
        for (let i = index + 1; i < main.mainEntity.length + 1; i++) {
            jQuery('.sosmed[data-id=' + (i - 1) + ']').val(jQuery('.sosmed[data-id=' + (i) + ']').val())
            jQuery('.sosmedName[data-id=' + (i - 1) + ']').val(jQuery('.sosmedName[data-id=' + (i) + ']').val())

        }
        jQuery('label[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.sosmed[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.sosmedName[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.delete[data-id=' + main.mainEntity.length + ']').remove();
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
