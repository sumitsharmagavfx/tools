
var checkBox = 0;

const jobSchema = class {
    constructor() {
        this.country = '';
        this.streetAddress = '';
        this.addressLocality = '';
        this.postalCode = '';
        this.title = '';
        this.description = '';
        this.salaryValue = '';
        this.identify = {
            "@type": "PropertyValue",
            "name": "",
            "value":""
        };
        this.hiring = {
            "@type": "Organization",
            "name": ""
        };
        this.industry = undefined;
        this.employmentType = undefined;
        this.workHours = undefined;
        this.datePosted = '';
        this.validThrough = '';

        this.jobLocation = {};

        this.applicantLocationRequirements = undefined;
        this.baseSalary = {
            "@type": "MonetaryAmount",
            "currency": "",
            "value": {
                "@type": "QuantitativeValue",
                "value": "",
                "unitText": ""
            }
        };

    }

    temp(){

        const tempObj = {};


        if(this.streetAddress) tempObj.streetAddress = this.streetAddress;

        if(this.addressLocality) tempObj.addressLocality = this.addressLocality;

        if(this.postalCode) tempObj.postalCode = this.postalCode;

        if(this.salaryValue) tempObj.salaryValue = this.salaryValue;
        tempObj.country = this.country;

        return tempObj;
    }

    render(){
        const obj = {
            "@context": "https://schema.org/",
            "@type": "JobPosting",
            title:this.title,
            description:this.description,

        }


        obj.title = this.title;

        obj.description = this.description;

        if(this.identify.name || this.identify.value) obj.identifier = this.identify;

        obj.hiringOrganization = this.hiring;

        if(this.industry) obj.industry = this.industry;

        if(this.employmentType) obj.employmentType = this.employmentType;

        if(this.workHours) obj.workHours = this.workHours;

        obj.datePosted = this.datePosted;

        obj.validThrough = this.validThrough;

        if(this.hiring.length > 0){
            if(this.hiring.length === 1){
                obj.hiringOrganization = this.hiring[0];
            } else {
                obj.hiringOrganization = this.hiring;
            }
        }

        obj.jobLocation = this.jobLocation;

        // if(this.jobLocationReg) obj.jobLocation = this.jobLocationReg;

        if(this.applicantLocationRequirements) obj.applicantLocationRequirements = this.applicantLocationRequirements;

        if(this.baseSalary.value.value) obj.baseSalary = this.baseSalary;

        $("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(obj, undefined, 4) + "\n<\/script>");
        return obj;
    }
}

    let jobFormat = new jobSchema();

if($('#hide-province').is(":visible")){
    jobFormat.jobLocation = {
        "@type": "Place",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "",
            "addressLocality": "",
            "postalCode": "",
            "addressCountry": ""
        }
    }

}else{
    jobFormat.jobLocation = {
        "@type": "Place",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "",
            "addressLocality": "",
            "addressRegion": "",
            "postalCode": "",
            "addressCountry": ""
        }
    }
}

    jobFormat.render();

$("#province-show").hide();

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

    $('.jobTitle').keyup(function(event){
        // let index = parseInt($(this).data('id'));
        jobFormat.title = $(this).val();
        jobFormat.render();
    });

    $('.description').keyup(function(event){
        // let index = parseInt($(this).data('id'));
        jobFormat.description = $(this).val();
        jobFormat.render();
    });

    $(document).on('keyup', '.identifier', function () {
        jobFormat.identify.value = $(this).val();
        jobFormat.render();
    });

    $('.company-name').keyup(function (e){
        jobFormat.identify.name = $(this).val();
        jobFormat.hiring.name = $(this).val();
        jobFormat.render();
    });

    $('.companyUrl').keyup(function (e){
        // console.log(jobFormat.hiring.sameAs)
        // if(jobFormat.hiring.sameAs != '' ) {
        // }else{
        //     delete jobFormat.hiring.sameAs;
        // }

        jobFormat.hiring.sameAs = $(this).val();
        jobFormat.render();
    });

    $('.industry').keyup(function (e){
        jobFormat.industry = $(this).val();
        jobFormat.render();
    });

    $('.employment-type').change(function (e){
        if($(this).val() == "none"){
            delete jobFormat.employmentType;
        }else{
            jobFormat.employmentType = $(this).val();
        }
        jobFormat.render();
    });

    $('.workHours').keyup(function (e){
        jobFormat.workHours = $(this).val();
        jobFormat.render();
    });

    $('.datePosted').change(function (e){
        jobFormat.datePosted = $(this).val();
        jobFormat.render();
    });

    $('.expiredDate').change(function (e){
        jobFormat.validThrough = $(this).val();
        jobFormat.render();
    });

    $('.street').keyup(function (e){
        jobFormat.jobLocation.address.streetAddress = $(this).val();
        jobFormat.render();
    });

    $('.city').keyup(function (e){
        jobFormat.jobLocation.address.addressLocality = $(this).val();
        jobFormat.render();
    });

    $('.city').keyup(function (e){
        jobFormat.jobLocation.address.addressLocality = $(this).val();
        jobFormat.render();
    });

    $('.country').change(function (e){
        jobFormat.country = $(this).val();
        if($(this).val() == "none"){
            if(checkBox == 1){
                jobFormat.applicantLocationRequirements.name = "";
            }else{

                if($(this).val() == 'ID'){
                    $("#province").hide();
                    $("#province-show").show();
                }else{
                    $("#province").show();
                    $("#province-show").hide();
                }

                jobFormat.jobLocation.addressCountry = "";
            }
        }else{
            if(checkBox == 1){
                jobFormat.applicantLocationRequirements.name = $(this).val();
            }else{

                if($(this).val() == 'ID'){
                    $("#hide-province").hide();
                    $("#province-show").show();
                }else{
                    $("#hide-province").show();
                    $("#province-show").hide();
                }

                jobFormat.jobLocation.address.addressCountry = $(this).val();
            }
        }

        if($('#hide-province').is(":visible")){
            jobFormat.jobLocation = {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "",
                    "addressLocality": "",
                    "postalCode": "",
                    "addressCountry": jobFormat.country
                }
            }

        }else{
            jobFormat.jobLocation = {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "",
                    "addressLocality": "",
                    "addressRegion": "",
                    "postalCode": "",
                    "addressCountry": jobFormat.country
                }
            }
        }
        jobFormat.temp();
        jobFormat.render();
    });

    $("#remoteJob").change(function() {
        if (this.checked) {
            $(".street, .city, div.province > button, .zipCode").attr("disabled", true);
            checkBox = 1;
            delete jobFormat.jobLocation;
            jobFormat.applicantLocationRequirements = {
                "@type": "Country",
                "name": jobFormat.country
            };
        } else {
            checkBox = 0;
            delete jobFormat.applicantLocationRequirements;
            jobFormat.jobLocation = {
                "@type": "Place",
                "address" : {
                    "@type": "PostalAddress",
                    "streetAddress": "",
                    "addressLocality": "",
                    "postalCode": "",
                    "addressCountry": jobFormat.country
                }
            }
            $(".street, .city, div.province > button, .zipCode").removeAttr("disabled");
        }
        jobFormat.render();
    });

    $(".salary").keyup(function() {
        if (this.value.length > 0) {
            $(".maxSalary, .currency, .unitText").removeAttr("disabled");
            $(".currency, .unitText").selectpicker("refresh");
            jobFormat.baseSalary.value.value = $(this).val();
            jobFormat.salaryValue = $(this).val();
        } else {
            $(".maxSalary, .currency, .unitText").attr("disabled", true);
            $(".currency, .unitText").selectpicker("refresh");
        }
        jobFormat.render();
    });

    $(".province").change(function() {
        jobFormat.jobLocation.address.addressRegion = $(this).val();
        jobFormat.render();
    });

    $('.maxSalary').keyup(function (e) {
        if(this.value.length > 0){
            delete jobFormat.baseSalary.value.value;
            jobFormat.baseSalary.value = {
                "@type": "QuantitativeValue",
                "minValue": jobFormat.salaryValue,
                "maxValue": $(this).val(),
                "unitText": ""
            }
        }else{
            delete jobFormat.baseSalary.value;
            jobFormat.baseSalary.value = {
                "@type": "QuantitativeValue",
                "value": jobFormat.salaryValue,
                "unitText": ""
            }
        }
    });


// jQuery(document).on('keyup', '.jobTitle', function () {
//     let index = parseInt(jQuery(this).data('id'));
//     // console.log('index:' + index);
//     main.mainEntity[index].title = jQuery(this).val();
//     print();
// });

// jQuery(document).on('keyup', '.identifier', function () {
//     let index = parseInt(jQuery(this).data('id'));
//     // console.log('index:' + index);
//     main.mainEntity[index].identifier = jQuery(this).val();
//     print();
// });

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

// jQuery(document).on('keyup', '.salary', function () {
//     let index = parseInt(jQuery(this).data('id'));
//     // console.log('index:' + index);
//     main.mainEntity[index].baseSalary.value.minValue = jQuery(this).val();
//     print();
// });

jQuery(document).on('change', '.currency', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].baseSalary.currency = jQuery(this).val();
    print();
});

// jQuery(document).on('keyup', '.maxSalary', function () {
//     let index = parseInt(jQuery(this).data('id'));
//     // console.log('index:' + index);
//     main.mainEntity[index].baseSalary.value.maxValue = jQuery(this).val();
//     print();
// });


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
            jQuery('.identifier[data-id=' + (i - 1) + ']').val(jQuery('.identifier[data-id=' + (i) + ']').val())
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
