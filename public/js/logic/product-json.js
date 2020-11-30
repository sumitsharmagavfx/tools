function print() {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "mainEntity": []
    };

jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let jobTitle = lang ==='en'?'JobTitle':'Jabatan';
    let identifier = lang==='en'?'Identifier':'Identifier';
    let description = lang ==='en'?'Description':'Deskripsi';
    let name = lang==='en'?'Name':'Nama';
    let companyUrl = lang==='en'?'CompanyUrl':'UrlCompany';
    let industry = lang==='en'?'Industry':'Industry';
    let employmentType = lang==='en'?'EmploymentType':'TipePegawai';



    main.mainEntity.push({
        "name": "",
        "image": "",
        "description": "",
        "brand": "",
        "gtin8": "",
        "gtin14": "",
        "mpn": "",
        "gtin13": "",
        "sku": "",
        "offers": {
            "@type": "",
            "url": "",
            "priceCurrency": "",
            "lowPrice": "",
            "highPrice": "",
            "offerCount": ""
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "",
            "bestRating": "",
            "worstRating": "",
            "ratingCount": ""
        }
    });
    print();
    jQuery('#add-product').click(function () {
        main.mainEntity.push({
            "title": "",
            "description": "",
            "hiringOrganization" : {
              "@type": "Organization",
              "name": ""
            },
            "datePosted": "",
            "validThrough": "",
            "jobLocation": {
              "@type": "Place",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "",
                "addressLocality": "",
                "postalCode": "",
                "addressCountry": ""
              }
            },
            "baseSalary": {
                "@type": "MonetaryAmount",
                "currency": "",
                "value": {
                  "@type": "",
                  "minValue": "",
                  "maxValue": "",
                  "unitText": ""
                }
              },
        });
        print();
        jQuery('#formjobPosting').append("<button type=\"button\" class=\"btn btn-danger mb-2 delete\" name=\"button\" data-id=\""+(main.mainEntity.length-1)+"\">"+deletes+"</button>\n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 headline\" placeholder=\""+jobTitle+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 headline\" placeholder=\""+identifier+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 headline\" placeholder=\""+description+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 headline\" placeholder=\""+name+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 headline\" placeholder=\""+companyUrl+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 headline\" placeholder=\""+industry+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 headline\" placeholder=\""+employmentType+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\">"
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

jQuery(document).on('keyup', '.image', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].image = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.description', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].description = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.brand', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].brand = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.gtin8', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].gtin8 = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.gtin14', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].gtin14 = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.gtin14', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].gtin14 = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.mpn', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].mpn = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.gtin13', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].gtin13 = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.sku', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].sku = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.offer', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].offers['@type'] = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.url', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].offers.url = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.priceCurrency', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].offers.priceCurrency = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.lowPrice', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].offers.lowPrice = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.highPrice', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].offers.highPrice = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.numberOffers', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].offers.offerCount = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.ratingValue', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].aggregateRating.ratingValue = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.bestRating', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].aggregateRating.bestRating = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.worstRating', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].aggregateRating.worstRating = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.ratingCount', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].aggregateRating.ratingCount= jQuery(this).val();
    print();
});


jQuery(document).on('click', '.delete', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index!==0){
        main.mainEntity.splice(index, 1);
        print();
        for (let i = index + 1; i < main.mainEntity.length + 1; i++) {
            jQuery('.jobTitle[data-id=' + (i - 1) + ']').val(jQuery('.jobTitle[data-id=' + (i) + ']').val())
            jQuery('.identifierrl[data-id=' + (i - 1) + ']').val(jQuery('.identifier[data-id=' + (i) + ']').val())
            jQuery('.employmentType[data-id=' + (i - 1) + ']').val(jQuery('.employmentType[data-id=' + (i) + ']').val())
            jQuery('.description[data-id=' + (i - 1) + ']').val(jQuery('.description[data-id=' + (i) + ']').val())
            jQuery('.name[data-id=' + (i - 1) + ']').val(jQuery('.name[data-id=' + (i) + ']').val())
            jQuery('.companyUrl[data-id=' + (i - 1) + ']').val(jQuery('.companyUrl[data-id=' + (i) + ']').val())
            jQuery('.industry[data-id=' + (i - 1) + ']').val(jQuery('.industry[data-id=' + (i) + ']').val())
        }
        jQuery('label[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.jobTitle[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.identifier[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.description[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.name[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.companyUrl[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.industry[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.employmentType[data-id=' + main.mainEntity.length + ']').remove();
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
