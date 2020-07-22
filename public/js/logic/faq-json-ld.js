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
        jQuery('#form').append("<button type=\"button\" class=\"btn btn-danger mb-2 delete\" name=\"button\" data-id=\""+(main.mainEntity.length-1)+"\">"+deletes+"</button>\n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-5 question\" placeholder=\""+question+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\"> \n" +
            "                <input type=\"text\" name=\"\" class=\"form-control mb-7 answer\" placeholder=\""+answer+" :\" value=\"\" data-id=\""+(main.mainEntity.length-1)+"\">"
        );
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
    });

});

jQuery(document).on('keyup', '.question', function () {
    let index = parseInt(jQuery(this).data('id'));
    console.log('index:' + index);
    main.mainEntity[index].name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.answer', function () {
    let index = parseInt(jQuery(this).data('id'));
    console.log('index:' + index);
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
});

jQuery('#copy').click(function () {
    const copyText = jQuery('#json-format');
    copyText.select();
    // copyText.setSelectionRange(0, 999999); /*For mobile devices*/
    document.execCommand("copy");
});
