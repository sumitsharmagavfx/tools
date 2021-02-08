function print() {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": []
    };

jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let question = lang ==='en'? 'Question' : 'Pertanyaan';
    let answer = lang ==='en'? 'Answer' : 'Jawaban';
    main.mainEntity.push({
        "@type": "Question",
        "name": "",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": ""
        }
    });
    print();
    jQuery('#add').click(function () {
        main.mainEntity.push({
            "@type": "Question",
            "name": "",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": ""
            }
        });
        print();
        jQuery('#form').append(
          "<div class='row'><div class='col-10 col-sm-11'><div class='form-group'><label for='question-" + (main.mainEntity.length) + "' class='font-weight-bold question'>Question " + (main.mainEntity.length) + "</label><input type='text' class='form-control question' name='' value='' data-id='" + (main.mainEntity.length-1) + "'></div><div class='form-group'><label for='answer-"+(main.mainEntity.length)+"' class='font-weight-bold answer'>Answer "+(main.mainEntity.length)+"</label><input type='text' class='form-control answer' name='' value='' data-id='"+(main.mainEntity.length-1)+"'></div></div><div class='col-2 col-sm-1'><div class='d-flex justify-content-center mt-9'><i class='bx bxs-x-circle bx-md delete' data-id='"+(main.mainEntity.length-1)+"'></i></div></div></div>"

        );

        // append("<button type=\"button\" class=\"btn btn-danger mb-2 delete\" name=\"button\" data-id=\""+(main.mainEntity.length-1)+"\">"+deletes+"</button>\n" +
        //     "                <input type=\"text\" name=\"\" class=\"form-control mb-5 question\" placeholder=\""+question+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
        //     "                <input type=\"text\" name=\"\" class=\"form-control mb-7 answer\" placeholder=\""+answer+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\">"
        // );
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
        sticky.update();
    });



});

jQuery(document).on('keyup', '.question', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.answer', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity[index].acceptedAnswer.text = jQuery(this).val();
    print();
});

jQuery(document).on('click', '.delete', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index!==0){
        main.mainEntity.splice(index, 1);
        print();
        for (let i = index + 1; i < main.mainEntity.length + 1; i++) {
            jQuery('.question[data-id=' + (i - 1) + ']').val(jQuery('.question[data-id=' + (i) + ']').val())
            jQuery('.answer[data-id=' + (i - 1) + ']').val(jQuery('.answer[data-id=' + (i) + ']').val())
        }
        jQuery('label[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.question[data-id=' + main.mainEntity.length + ']').remove();
        jQuery('.answer[data-id=' + main.mainEntity.length + ']').remove();
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
    toastr.info('Copied to Clipboard', 'Information');

});
