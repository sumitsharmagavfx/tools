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

$(document).on('click', '#add-product-review', function () {
    $('#addReview').append("<div class=\"row\"><div class=\"col-12 col-lg-6\"><label class=\"text-black font-weight-bold\" for=\"review\">#"+(0)+" Review’s name</label><input type=\"text\" name=\"\" class=\"form-control review mb-5\" placeholder=\"Type review’s name here..\" value=\"\" data-id=\""+(0)+"\">" +
    "                   <div class=\"row\"><div class=\"col-6 col-md-4\"><label class=\"text-black font-weight-bold\" for=\"rating\">Rating</label><input type=\"number\" name=\"\" class=\"form-control rating mb-5\" placeholder=\"0\" value=\"\" min=\"0\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-6 col-md-8\"><label class=\"text-black font-weight-bold\" for=\"dateReview\">Date</label><div class=\"input-group date\"><div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span></div>" +
    "                   <input type=\"text\" id=\"kt_datepicker_2\" name=\"\" class=\"form-control dateReview\" readonly  placeholder=\"Pick a date\" value=\"\" data-id=\""+(0)+"\"/></div></div></div></div>" +
    "                   <div class=\"col-12 col-lg-6 mb-8 mb-lg-5\"><label class=\"text-black font-weight-bold\" for=\"reviewBody\">Review’s body</label><textarea name=\"\" class=\"form-control reviewBody\" placeholder=\"Type your review’s body here..\" data-id=\""+(0)+"\"></textarea></div></div>" +
    "                   <div class=\"row mb-5\"><div class=\"col-5\"><label class=\"text-black font-weight-bold\" for=\"authorReview\">Author</label><input type=\"text\" name=\"\" class=\"form-control authorReview\" placeholder=\"Type author name here..\" value=\"\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-6\"><label class=\"text-black font-weight-bold\" for=\"publisher\">Publisher</label><input type=\"text\" name=\"\" class=\"form-control publisher\" placeholder=\"Type publisher here..\" value=\"\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-1\"><div class=\"d-flex justify-content-center mt-9\"><i class=\"bx bxs-x-circle bx-md text-darkgrey deleteReview\"></i></div></div></div>"
    );
});

$(document).on('click', '.deleteReview', function () {
    $('#addReview > .row').remove();
});

jQuery('#copy').click(function () {
    const copyText = jQuery('#json-format');
    copyText.select();
    // copyText.setSelectionRange(0, 999999); /*For mobile devices*/
    document.execCommand("copy");
});

// $(document).on("change", ".identifier", function() {
//     var selectedItem = $(this).val();
//     console.log(selectedItem);
//       $(selectedItem).each(function(index, value){
//         console.log(value);
//         if(value === "sku"){
//             $("#sku").append("<label class=\"text-black font-weight-bold\" for=\"sku\">sku</label><input type=\"text\" name=\"\" class=\"form-control sku mb-5\" placeholder=\"@lang('product.sku')\" value=\"\" data-id=\"0\">");
//         }else{
//             $("#sku").remove("<label class=\"text-black font-weight-bold\" for=\"sku\">sku</label><input type=\"text\" name=\"\" class=\"form-control sku mb-5\" placeholder=\"@lang('product.sku')\" value=\"\" data-id=\"0\">");
//         }
//       });
// });

$(document).on("change", ".offerType", function() {
    var selectedItem = $(this).val();
    if(selectedItem === "Aggregate Offer") {
        $("#ag_offer").css('display', 'flex');
        $("#offer").hide(); 
    }else if(selectedItem === "Offer") {
        $("#offer").css('display', 'flex');
        $("#ag_offer").hide();        
    }else if(selectedItem === "None"){
        $("#ag_offer").hide();
        $("#offer").hide(); 
    }
});