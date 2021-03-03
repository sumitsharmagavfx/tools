
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

    const mpn = (id) => ` <div class="col-12 col-md-4" id="mpn">
    <label class="text-black font-weight-bold" for="mpn">mpn</label>
    <input type="text" name="" class="form-control mpn mb-5" placeholder="${$('#mpnlang').val()}" value="" data-id="${id}">
  </div>`;

    const productDescription = {
        sku:sku,
        gtin8:gtin,
        gtin13:Secondgtin,
        gtin14:Thirdgtin,
        mpn:mpn,
    }

    const productSchema = class {
        constructor() {
            this.name = '';
            this.image = '';
            this.description = undefined;
            this.brand = undefined;

            this.skuTemp = 'none';
            this.gtin8Temp = 'none';
            this.gtin13Temp = 'none';
            this.gtin14Temp = 'none';
            this.mpnTemp = 'none';

            this.sku = '';
            this.gtin8 = '';
            this.gtin13 = '';
            this.gtin14 = '';
            this.mpn = '';

            this.price = '';
            this.highPrice = '';
            this.priceCurrency = ''
            this.url = '';

            this.offers = undefined;

            this.aggregateRating = undefined;


            this.tempIdentify = [];
        }

        temp(){
            const tempObj = {};

            tempObj.price = this.price;
            tempObj.lowPrice = this.price;
            // tempObj.highPrice = this.highPrice;
            tempObj.url = this.url;

            // if(this.offers.url) tempObj.offers.url = this.offers.url;

            return tempObj;
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

            if(this.skuTemp != 'none') obj.sku = this.sku;
            if(this.gtin8Temp != 'none') obj.gtin8 = this.gtin8;
            if(this.gtin13Temp != 'none') obj.gtin13 = this.gtin13;
            if(this.gtin14Temp != 'none') obj.gtin14 = this.gtin14;
            if(this.mpnTemp != 'none') obj.mpn = this.mpn;

            if(this.offers) {
                obj.offers = this.offers;
                obj.offers.lowPrice = this.offers.lowPrice;
                if(this.offers.price) obj.offers.price = this.offers.price;
                if(this.offers.highPrice) obj.offers.highPrice = this.offers.highPrice;
                if(this.offers.offerCount) obj.offers.offerCount = this.offers.offerCount
            }

            if(this.aggregateRating) obj.aggregateRating = this.aggregateRating;

            $("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(obj, undefined, 4) + "\n<\/script>");
            return obj;

        }

    }

    let productFormat = new productSchema();
    productFormat.render();

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

        if(productFormat.tempIdentify.length > $(this).val().length){
            for(let i=0; i < productFormat.tempIdentify.length; i++){
                if($.inArray(productFormat.tempIdentify[i], $(this).val()) == -1) {

                    if(productFormat.tempIdentify[i] === 'sku'){
                        productFormat.skuTemp = "none";
                        productFormat.sku = "";
                    } else if(productFormat.tempIdentify[i] === 'gtin8'){
                        productFormat.gtin8Temp = "none";
                        productFormat.gtin8 = "";
                    } else if(productFormat.tempIdentify[i] === 'gtin13'){
                        productFormat.gtin13Temp = "none";
                        productFormat.gtin13 = "";
                    } else if(productFormat.tempIdentify[i] === 'gtin14'){
                        productFormat.gtin14Temp = "none";
                        productFormat.gtin14 = "";
                    } else {
                        productFormat.mpnTemp = "none";
                        productFormat.mpn = "";
                    }

                    $('#'+productFormat.tempIdentify[i]+'').remove();
                    productFormat.tempIdentify.splice(i, 1);

                }
            }

        }

        for (let i=0;i< $(this).val().length; i++){
            if($.inArray($(this).val()[i], productFormat.tempIdentify) == -1) {
                // counterSocial++;
                $('.product-description').append(eval('productDescription.'+$(this).val()[i]+'('+i+')'));
                if($(this).val()[i] === 'sku'){
                    productFormat.skuTemp = "filled";
                } else if($(this).val()[i] === 'gtin8'){
                    productFormat.gtin8Temp = "filled";
                } else if($(this).val()[i] === 'gtin13'){
                    productFormat.gtin13Temp = "filled";
                } else if($(this).val()[i] === 'gtin14'){
                    productFormat.gtin14Temp = "filled";
                } else {
                    productFormat.mpnTemp = "filled";
                }
                productFormat.tempIdentify.push($(this).val()[i]);

            }
        }

        productFormat.render();

    });

    $(document).on('keyup', '.gtin8', function () {
        productFormat.gtin8 = $(this).val();
        productFormat.render();
    });

    $(document).on('keyup', '.sku', function () {
        productFormat.sku = $(this).val();
        productFormat.render();
    });

    $(document).on('keyup', '.gtin14', function () {
        productFormat.gtin14 = $(this).val();
        productFormat.render();
    });

    $(document).on('keyup', '.mpn', function () {
        productFormat.mpn = $(this).val();
        productFormat.render();
    });

    $(document).on('keyup', '.gtin13', function () {
        productFormat.gtin13 = $(this).val();
        productFormat.render();
    });

    $('.url').keyup(function (e) {
        productFormat.offers.url = $(this).val();
        productFormat.temp();
        productFormat.render();
    });

    $('.priceCurrency').change(function (e) {
        productFormat.offers.priceCurrency = $(this).val();
        productFormat.temp();
        productFormat.render();
    });

    $('.price').keyup(function (e) {
        productFormat.offers.price = $(this).val();
        productFormat.temp();
        productFormat.render();
    });

    $('.highPrice').keyup(function (e) {
        if($(this).val().length < 1){
            delete productFormat.offers.highPrice;
        }else{
            productFormat.offers.highPrice = $(this).val();
        }
        productFormat.render();
    });

    $('.offer').keyup(function (e) {

        if($(this).val().length < 1){
            delete productFormat.offers.offerCount;
        }else{
            productFormat.offers.offerCount = $(this).val();
        }
        productFormat.render();

    });

    $('.ratingValue').keyup(function (e) {

        if($(this).val().length < 1){
            $('.ratingCount').attr('disabled')
            $('.bestRating').attr('disabled')
            $('.worstRating').attr('disabled')
            delete productFormat.aggregateRating;
            $('.ratingCount').val('');
            $('.bestRating').val('');
            $('.worstRating').val('');

        }else{
            $('.ratingCount').removeAttr('disabled')
            $('.bestRating').removeAttr('disabled')
            $('.worstRating').removeAttr('disabled')
            productFormat.aggregateRating = {
                "@type": "AggregateRating",
                "ratingValue": $(this).val(),
                "bestRating": "",
                "worstRating": "",
                "ratingCount": ""
            }
        }

        productFormat.render();

    });

    $('.ratingCount').keyup(function (e) {
        productFormat.aggregateRating.ratingCount = $(this).val();
        productFormat.render();
    });

    $('.bestRating').keyup(function (e) {
        productFormat.aggregateRating.bestRating = $(this).val();
        productFormat.render();
    });

    $('.worstRating').keyup(function (e) {
        productFormat.aggregateRating.worstRating = $(this).val();
        productFormat.render();
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

$(document).on("change", ".offerType", function() {
    var selectedItem = $(this).val();

    if(selectedItem === "Aggregate Offer") {
        productFormat.offers = {
            "@type": "AggregateOffer",
            "url": "",
            "priceCurrency": "",
            "lowPrice": ""
        }
        $(".url, .price, .priceCurrency").removeAttr("disabled");
        $(".priceCurrency").selectpicker("refresh");
        $("#ag_offer").css('display', 'flex');
        $("#offer").hide();
    }else if(selectedItem === "Offer"){
        productFormat.offers = {
            "@type": "Offer",
            "url": "",
            "priceCurrency": "",
            "price": ""
        }
        $(".url, .price, .priceCurrency").removeAttr("disabled");
        $(".priceCurrency").selectpicker("refresh");
        $("#offer").css('display', 'flex');
        $("#ag_offer").hide();
    }else if(selectedItem === "None"){
        delete productFormat.offers;
        $(".url, .price, .priceCurrency").attr("disabled", true);
        $(".priceCurrency").selectpicker("refresh");
        $("#ag_offer").hide();
        $("#offer").hide();
    }
    productFormat.render();
});
