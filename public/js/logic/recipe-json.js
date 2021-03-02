function print() {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "recipe",
        "name": "",
        "image": "",
        "description": "",
        "keywords": "",
        "author": {
          "@type": "Person",
          "name": ""
        },
        "prepTime": "",
        "cookTime": "", 
        "totalTime": "", 
        "nutrition": {
          "@type": "NutritionInformation",
          "calories": ""
        },
        "recipeInstructions": []
    };

let imageSingle = true;

jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let name = lang ==='en'? 'Name':'Nama';
    let image = lang ==='en'?'Image':'Gambar';
    let description = lang ==='en'?'Description':'Deskripsi';
    let keywords = lang==='en'?'KeyWords':'KataKunci';
    let authorName = lang==='en'?'AuthorName':'NamaPenulis';
    let prepTime = lang ==='en'?'PrepTime':'WaktuPersiapan';
    let cookTime = lang==='en'?'CookTime':'Waktu Masak';
    let recipeCategory = lang==='en'?'RecipeCategory':'KategoriResep';
    let recipeCuisine = lang==='en'?'RecipeCuisine':'RecipeCuisine';
    let recipeYield = lang==='en'?'RecipeYield':'RecipeYield';
    let imageUrl = lang==='en'?'ImageUrl':'UrlGambar';
    
    print();
    jQuery('#add-imageUrl').click(function () {
        if (imageSingle) {
            let getImageSingle = main.image;
            console.log(getImageSingle);
            main.image = [
                getImageSingle,
                ""
            ];
        } else {
            main.image.push("");
        }
        print();
        
        // jQuery('#image').append("<button type=\"button\" class=\"btn btn-danger mb-2 deleteImage\" name=\"button\" data-id=\""+(main.image.length-1)+"\">"+deletes+"</button>\n" +
        //     "                <input type=\"text\" name=\"\" class=\"form-control mb-5 image\" placeholder=\""+imageUrl+" :\" value=\"\" data-id=\""+(main.image.length-1)+"\">"
        // );
        jQuery('#image').append("<div class=\"row\" data-id=\""+(main.image.length-1)+"\"><div class=\"col-10 col-sm-11\"><label class=\"text-black font-weight-bold\" for=\"image\" data-id=\""+(main.image.length-1)+"\">Image URL #"+(main.image.length)+"</label>\n" +
        "                <input type=\"text\" name=\"\" class=\"form-control image mb-5\" placeholder=\"Type image url here..\" value=\"\" data-id=\""+(main.image.length-1)+"\"></div><div class=\"col-2 col-sm-1\"><div class=\"d-flex justify-content-center mt-9\"><i class=\'bx bxs-x-circle bx-md delete deleteImage\' data-id=\""+(main.image.length-1)+"\"></i></div></div></div>\n"
        );
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
        sticky.update();
        imageSingle = false;
    });
});

jQuery(document).on('click', '#add-ingredients', function () {
    // let index = parseInt(jQuery(this).data('id'));
    // let ingredients = lang==='en'?'Ingredients':'Bahan';
    // let deletes = lang ==='en'? 'Delete' : 'Hapus';

    // main.mainEntity.ingredients=[""];
    jQuery('#ingredients').append("<div class=\"row\" data-id=\""+(0)+"\"><div class=\"col-10 col-sm-11\"><label class=\"text-black font-weight-bold\" for=\"ingredients\" data-id=\""+(0)+"\">Ingredients #"+(0)+"</label>\n" +
    "                <input type=\"text\" name=\"\" class=\"form-control ingredients mb-5\" placeholder=\"Type image url here..\" value=\"\" data-id=\""+(0)+"\"></div><div class=\"col-2 col-sm-1\"><div class=\"d-flex justify-content-center mt-9\"><i class=\'bx bxs-x-circle bx-md delete deleteIngredients\' data-id=\""+(0)+"\"></i></div></div></div>\n"
    );
    // let row = parseInt(jQuery('#json-format').val().split('\n').length);
    // jQuery('#json-format').attr('rows',row);
    // sticky.update();
    // print();
});

jQuery(document).on('click', '#add-recipe-step', function () {
    let index = parseInt(jQuery(this).data('id'));
    let step = lang==='en'?'Step':'Langkah Langkah';
    let deletes = lang ==='en'? 'Delete Step' : 'Hapus Langkah';

    // jQuery('#step').append("<button type=\"button\" class=\"btn btn-danger mb-2 deleteStep\" name=\"button\" data-id=\""+(main.recipeInstructions.length-1)+"\">"+deletes+"</button>\n" +
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 step\" placeholder=\""+step+" :\" value=\"\" data-id=\""+(main.recipeInstructions.length-1)+"\">" +
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 nameStep\" placeholder=\" Name Step :\" value=\"\" data-id=\"\">"+
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 url\" placeholder=\" URL :\" value=\"\" data-id=\"\">"+
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 imageStep\" placeholder=\" Image \" value=\"\" data-id=\"\">"


    // );
    jQuery('#step').append("<div class=\"row\" data-id=\""+(main.recipeInstructions.length-1)+"\"><div class=\"col-6 col-md-3\"><label class=\"text-black font-weight-bold\" for=\"step\" data-id=\""+(main.recipeInstructions.length-1)+"\">Step #"+(main.recipeInstructions.length)+": Text</label><input type=\"text\" name=\"\" class=\"form-control step mb-5\" placeholder=\"Type step here..\" value=\"\" data-id=\""+(main.recipeInstructions.length-1)+"\"></div>" + 
    "                <div class=\"col-6 col-md-2 mb-5\"><label class=\"text-black font-weight-bold\" for=\"nameStep\" data-id=\""+(main.recipeInstructions.length-1)+"\">Name</label><input type=\"text\" name=\"\" class=\"form-control nameStep\" placeholder=\"Type name here..\" value=\"\" data-id=\""+(main.recipeInstructions.length-1)+"\"></div>" + 
    "                <div class=\"col-6 col-md-3 mb-5\"><label class=\"text-black font-weight-bold\" for=\"url\" data-id=\""+(main.recipeInstructions.length-1)+"\">URL</label><input type=\"text\" name=\"\" class=\"form-control url\" placeholder=\"Type URL here..\" value=\"\" data-id=\""+(main.recipeInstructions.length-1)+"\"><div class=\"invalid-feedback\">Value should be more than 0</div></div>" + 
    "                <div class=\"col-5 col-md-3 mb-5\"><label class=\"text-black font-weight-bold\" for=\"imageStep\" data-id=\""+(main.recipeInstructions.length-1)+"\">Image URL</label><input type=\"text\" name=\"\" class=\"form-control imageStep\" placeholder=\"Type URL here..\" value=\"\" data-id=\""+(main.recipeInstructions.length-1)+"\"><div class=\"invalid-feedback\">Value should be more than 0</div></div>" + 
    "                <div class=\"col-1\"><div class=\"d-flex justify-content-center mt-9\"><i class=\'bx bxs-x-circle bx-md delete deleteStep\' data-id=\""+(main.recipeInstructions.length-1)+"\"></i></div></div>"

    );
    let row = parseInt(jQuery('#json-format').val().split('\n').length);
    jQuery('#json-format').attr('rows',row);
    sticky.update();
    print();

    main.recipeInstructions.push(
        {
            "@type": "HowToStep",
            "name": "",
            "text": "",
            "url": "",
            "image": ""
    }
    );
    print(); 
});

jQuery(document).on('keyup', '.step', function () {
    let index = jQuery('.step').data('id');
    var main1 = main.recipeInstructions[index];
    console.log(main.recipeInstructions)
    main1.text = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.stepName', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.recipeInstructions[index].name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.url', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.recipeInstructions[index].url = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.imageStep', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.recipeInstructions[index].image = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.ingredients', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.ingredients = jQuery(this).val();
    print();
});


jQuery(document).on('keyup', '.name', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.image', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    if (imageSingle) {
        main.image = jQuery(this).val();
    } else {
        main.image[index] = jQuery(this).val();
    }
    
    print();
});

jQuery(document).on('keyup', '.imageUrl', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.imageUrl.url.name[index] = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.description', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.description = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.videoContentUrl', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.video = {
        "@type": "VideoObject",
        "name": "",
        "description": $(".description").val(),
        "thumbnailUrl": "",
        "uploadDate": "", 
        "contentUrl": ""
    }
    main.video.contentUrl = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.videoEmbedUrl', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.video.embedUrl = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.keywords', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.keywords = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.creator', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.author.name = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.datePublished', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.datePublished = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.prepTime', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.prepTime = "PT"+ jQuery(this).val()+"M";
    print();
});

jQuery(document).on('keyup', '.cookTime', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.cookTime = "PT"+ jQuery(this).val()+"M";
    var prep = parseInt( $(".prepTime").val());
    var cook = parseInt(jQuery(this).val());
    var total = prep + cook;
    main.totalTime ="PT"+ total + "M";
    print();
});

jQuery(document).on('change', '.recipeCategory', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.recipeCategory = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.recipeCuisine', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.recipeCuisine = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.recipeYield', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.recipeYield = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.servingSize', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.nutrition.servingSize = jQuery(this).val();
    print();
});


jQuery(document).on('change', '.calories', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.nutrition.calories = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.fatContent', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.nutrition.fatContent = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.ratingValue', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.aggregateRating = {
        "@type": "AggregateRating",
        "ratingValue": jQuery(this).val(),
        "ratingCount": ""
    }
    print();
});

jQuery(document).on('change', '.ratingCount', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.aggregateRating.ratingCount = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.bestRating', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.aggregateRating.bestRating = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.worstRating', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.aggregateRating.worstRating = jQuery(this).val();
    print();
});






jQuery(document).on('click', '#add-recipe-review', function () {
    let index = parseInt(jQuery(this).data('id'));
    let deletes = lang ==='en'? 'Delete Review' : 'Hapus Review';

    // jQuery('#addReview').append("<button type=\"button\" class=\"btn btn-danger mb-2 deleteStep\" name=\"button\" data-id=\""+(main.length-1)+"\">"+deletes+"</button>\n" +
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 review\" placeholder=\"Review :\" value=\"\" data-id=\""+(main.recipeInstructions.length-1)+"\">" +
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 reviewBody\" placeholder=\" reviewBody :\" value=\"\" data-id=\"\">"+
    // "                <input type=\"number\" name=\"\" class=\"form-control mb-5 rating\" placeholder=\" Rating :\" value=\"\" data-id=\"\">"+
    // "                <input type=\"date\" name=\"\" class=\"form-control mb-5 dateReview\" placeholder=\" Date Review \" value=\"\" data-id=\"\">" +
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 authorReview\" placeholder=\" Author \" value=\"\" data-id=\"\">"+
    // "                <input type=\"text\" name=\"\" class=\"form-control mb-5 publisher\" placeholder=\" publisher \" value=\"\" data-id=\"\">"
    // );

    jQuery('#addReview').append("<div class=\"row\"><div class=\"col-12 col-lg-6\"><label class=\"text-black font-weight-bold\" for=\"review\">#"+(0)+" Review’s name</label><input type=\"text\" name=\"\" class=\"form-control review mb-5\" placeholder=\"Type review’s name here..\" value=\"\" data-id=\""+(0)+"\">" +
    "                   <div class=\"row\"><div class=\"col-6 col-md-4\"><label class=\"text-black font-weight-bold\" for=\"rating\">Rating</label><input type=\"number\" name=\"\" class=\"form-control rating mb-5\" placeholder=\"0\" value=\"\" min=\"0\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-6 col-md-8\"><label class=\"text-black font-weight-bold\" for=\"dateReview\">Date</label><div class=\"input-group date\"><div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"bx bx-calendar text-darkgrey\"></i></span></div>" +
    "                   <input type=\"text\" id=\"kt_datepicker_2\" name=\"\" class=\"form-control custom-date dateReview\" readonly  placeholder=\"Pick a date\" value=\"\" data-id=\""+(0)+"\"/></div></div></div></div>" +
    "                   <div class=\"col-12 col-lg-6 mb-8 mb-lg-5\"><label class=\"text-black font-weight-bold\" for=\"reviewBody\">Review’s body</label><textarea name=\"\" class=\"form-control reviewBody\" placeholder=\"Type your review’s body here..\" data-id=\""+(0)+"\"></textarea></div></div>" +
    "                   <div class=\"row mb-5\"><div class=\"col-5\"><label class=\"text-black font-weight-bold\" for=\"authorReview\">Author</label><input type=\"text\" name=\"\" class=\"form-control authorReview\" placeholder=\"Type author name here..\" value=\"\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-6\"><label class=\"text-black font-weight-bold\" for=\"publisher\">Publisher</label><input type=\"text\" name=\"\" class=\"form-control publisher\" placeholder=\"Type publisher here..\" value=\"\" data-id=\""+(0)+"\"></div>" +
    "                   <div class=\"col-1\"><div class=\"d-flex justify-content-center mt-9\"><i class=\"bx bxs-x-circle bx-md delete deleteReview\"></i></div></div></div>"
    );
    $('#addReview').find('.custom-date').datepicker();
    let row = parseInt(jQuery('#json-format').val().split('\n').length);
    jQuery('#json-format').attr('rows',row);
    sticky.update(); 
    print(); 

    main.review = {
            "@type": "Review",
            "reviewBody": "",
            "author": {"@type": "Person", "name": ""}
    }
    print();
});


jQuery(document).on('keyup', '.review', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.review.name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.reviewBody', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.review.reviewBody = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.rating', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.review.reviewRating = {
        "@type": "Rating",
        "ratingValue": ""
    }
    main.review.reviewRating.ratingValue = jQuery(this).val();
    print();
});


jQuery(document).on('keyup', '.dateReview', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.review.datePublished = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.authorReview', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.review.author.name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.publisher', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.review.author.publisher = jQuery(this).val();
    print();
});

jQuery(document).on('click', '.deleteImage', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index!==0){
        main.image.splice(index, 1);
        print();
        for (let i = 1; i < main.image.length + 1; i++) {
            jQuery('.image[data-id=' + i + ']').val(main.image[i])
        }
        jQuery('.deleteImage[data-id=' + main.image.length + ']').remove();
        jQuery('.image[data-id=' + main.image.length + ']').remove();
        jQuery('.row[data-id=' + main.image.length + ']').remove();
        
        if (main.image.length == 1) {
            imageSingle = true;
            main.image = main.image[0]
            print()
        }
    }
    sticky.update();
});

$(document).on('click', '.deleteIngredients', function () {
    $('#ingredients > .row').remove();
});

$(document).on('click', '.deleteStep', function () {
    $('#step > .row').remove();
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
