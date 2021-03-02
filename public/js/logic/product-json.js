
    const sku = (id) => `<div class="col-12 col-md-4" id="sku">
        <label class="text-black font-weight-bold" for="sku">sku</label>
        <input type="text" name="" class="form-control sku mb-5" placeholder="${$('#skulang').val()}" value="" data-id="${id}">
      </div>`;

    const gtin = (id) => `<div class="col-12 col-md-4" id="gtin8">
    <label class="text-black font-weight-bold" for="gtin8">gtin8</label>
    <input type="text" name="" class="form-control gtin8 mb-5" placeholder="${$('#gtin8lang').val()}" value="" data-id="${id}">
  </div>`;

    const Secondgtin = (id) => `<div class="col-12 col-md-4" id="gtin13">
    <label class="text-black font-weight-bold" for="gtin13">gtin13</label>
    <input type="text" name="" class="form-control gtin13 mb-5" placeholder="${$('#gtin13lang').val()}" value="" data-id="${id}">
  </div>`;

    const Thirdgtin = (id) => `<div class="col-12 col-md-4" id="gtin14">
    <label class="text-black font-weight-bold" for="gtin14">gtin14</label>
    <input type="text" name="" class="form-control gtin14 mb-5" placeholder="${$('#gtin14lang').val()}" value="" data-id="${id}">
  </div>`;

    const mpm = (id) => ` <div class="col-12 col-md-4" id="mpn">
    <label class="text-black font-weight-bold" for="mpn">mpn</label>
    <input type="text" name="" class="form-control mpn mb-5" placeholder="${$('#mpnlang').val()}" value="" data-id="${id}">
  </div>`;

    const productDescription = {
        sku:sku,
        gtin:gtin,
        gtin8:Secondgtin,
        gtin13:Thirdgtin,
        mpm:mpm,
    }

    const productSchema = class {
        constructor() {
            this.name = '';
            this.image = '';
            this.description = undefined;
            this.brand = undefined;
            this.sku = undefined;
            this.gtin8 = undefined;
            this.gtin13 = undefined;
            this.gtin14 = undefined;
            this.mpn = undefined;

            this.tempIdentify = [];
        }

        render(){

            const obj = {
                "@context": "https://schema.org",
                "@type": "Product",
                "name": this.name,
                "image": this.image,
            };

            obj.name = this.name;
            obj.image = this.image;

            if(this.description) obj.description = this.description;

            if(this.brand) obj.brand = this.brand;

            if(this.sku) obj.sku = this.sku;

            $("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(obj, undefined, 4) + "\n<\/script>");
            return obj;

        }

    }

    let productFormat = new productSchema();
    productFormat.render();

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

});

    $('.name').keyup(function (e) {
        productFormat.name = $(this).val();
        productFormat.render();
    });

    $('.image').keyup(function (e) {
        productFormat.image = $(this).val();
        productFormat.render();
    });

    $('.description').keyup(function (e) {
        productFormat.description = $(this).val();
        productFormat.render();
    });

    $('.productBrand').keyup(function (e) {
        productFormat.brand = $(this).val();
        productFormat.render();
    });

    $('.identifier').change(function (e) {
        for (let i=0;i< $(this).val().length; i++){
            if($.inArray($(this).val()[i], productFormat.tempIdentify) == -1) {
                // counterSocial++;
                $('.product-description').append(eval('productDescription.'+$(this).val()[i]+'('+i+')'));
                // productFormat['productDescription'] = $(this).val()[i];
            }
        }
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
    "                   <div class=\"col-6 col-md-8\"><label class=\"text-black font-weight-bold\" for=\"dateReview\">Date</label><div class=\"input-group date\"><div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"bx bx-calendar text-darkgrey\"></i></span></div>" +
    "                   <input type=\"text\" id=\"kt_datepicker_2\" name=\"\" class=\"form-control custom-date dateReview\" readonly  placeholder=\"Pick a date\" value=\"\" data-id=\""+(0)+"\"/></div></div></div></div>" +
    "                   <div class=\"col-12 col-lg-6 mb-8 mb-lg-5\"><label class=\"text-black font-weight-bold\" for=\"reviewBody\">Review’s body</label><textarea name=\"\" class=\"form-control custom-textarea-82 reviewBody\" placeholder=\"Type your review’s body here..\" data-id=\""+(0)+"\"></textarea></div></div>" +
    "                   <div class=\"row mb-5\"><div class=\"col-5\"><label class=\"text-black font-weight-bold\" for=\"authorReview\">Author</label><input type=\"text\" name=\"\" class=\"form-control authorReview\" placeholder=\"Type author name here..\" value=\"\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-6\"><label class=\"text-black font-weight-bold\" for=\"publisher\">Publisher</label><input type=\"text\" name=\"\" class=\"form-control publisher\" placeholder=\"Type publisher here..\" value=\"\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-1\"><div class=\"d-flex justify-content-center mt-9\"><i class=\"bx bxs-x-circle bx-md delete deleteReview\"></i></div></div></div>"
    );
    $('#addReview').find('.custom-date').datepicker();
});

$(document).on('click', '.deleteReview', function () {
    $('#addReview > .row').remove();
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
        $(".url, .price, .priceCurrency").removeAttr("disabled");
        $(".priceCurrency").selectpicker("refresh");
        $("#ag_offer").css('display', 'flex');
        $("#offer").hide();
    }else if(selectedItem === "Offer") {
        $(".url, .price, .priceCurrency").removeAttr("disabled");
        $(".priceCurrency").selectpicker("refresh");
        $("#offer").css('display', 'flex');
        $("#ag_offer").hide();
    }else if(selectedItem === "None"){
        $(".url, .price, .priceCurrency").attr("disabled", true);
        $(".priceCurrency").selectpicker("refresh");
        $("#ag_offer").hide();
        $("#offer").hide();
    }
});
