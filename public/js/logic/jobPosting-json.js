function print() {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "jobPosting",
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
    jQuery('#add-article').click(function () {
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

jQuery(document).on('keyup', '.jobTitle', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].title = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.identifier', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].identifier.value = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.description', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].description = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.name', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].hiringOrganization.name = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.employmentType', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].employmentType = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.companyUrl', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].companyUrl = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.industry', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].industry = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.workHours', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].workHours = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.datePosted', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].datePosted = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.expiredDate', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].validThrough = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.street', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].jobLocation.address.streetAddress = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.city', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].jobLocation.address.addressLocality = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.zipCode', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].jobLocation.address.postalCode = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.country', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].jobLocation.address.addressCountry = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.salary', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].baseSalary.value.minValue = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.salary', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].baseSalary.value.minValue = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.currency', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].baseSalary.currency = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.maxSalary', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].baseSalary.value.maxValue = jQuery(this).val();
    print();
});


jQuery(document).on('change', '.unitText', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].baseSalary.value.unitText = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.responsibilities', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].responsibilities = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.skills', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].skills = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.qualifications', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].qualifications = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.educationRequirements', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].educationRequirements = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.experienceRequirements', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].experienceRequirements = jQuery(this).val();
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
