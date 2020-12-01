function print() {
    jQuery("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(main, undefined, 4) + "\n<\/script>");
}

let main =
    {
        "@context": "https://schema.org",
        "@type": "how-to",
        "mainEntity": {
            "name": "",
            "step":[ {
                "@type": "HowToStep",
                "text": "",
        }],
            "supply":[],
            "tool":[],
    }
    };

jQuery(document).ready(function () {
    let deletes = lang ==='en'? 'Delete' : 'Hapus';
    let name = lang ==='en'? 'Name' : 'Nama';
    let imageUrl = lang ==='en'? 'ImageUrl':'UrlGambar';


    // main.mainEntity.supply.push({
    //     "@type": "HowToSupply",
    //             "name": ""
    // });
    print();
});

jQuery('#add-howto-supply').click(function () {
    let deletes = lang==='en'?'Delete Supply':'Hapus Supply';
    let supplyName = lang==='en'?'Supply Name':'Supply';
    main.mainEntity.supply.push({
        
            "@type": "HowToSupply",
            "name": ""
        
    });
    print();
    jQuery('#howto-supply').append("<button type=\"button\" class=\"btn btn-danger mb-2 mt-3 deleteSupply\" name=\"button\" data-id=\""+(main.mainEntity.supply.length-1)+"\">"+deletes+"</button>\n" +
        "                <input type=\"text\" name=\"\" class=\"form-control mb-5 supplyName\" placeholder=\""+supplyName+" :\" value=\"\" data-id=\""+(main.mainEntity.supply.length-1)+"\">"
    );
    console.log("INDEX",main.mainEntity.supply.length-1)
    let row = parseInt(jQuery('#json-format').val().split('\n').length);
    jQuery('#json-format').attr('rows',row);
    sticky.update();
});

jQuery('#add-howto-tool').click(function () {
    let deletes = lang==='en'?'Delete Tool':'Hapus Tool';
    let tool = lang==='en'?'Tool Name':'Alat';
    main.mainEntity.tool.push({
        
        "@type": "HowToTool",
        "name": "",
    });
    print();
    jQuery('#howto-tool').append("<button type=\"button\" class=\"btn btn-danger mb-2 mt-3 deleteTool\" name=\"button\" data-id=\""+(main.mainEntity.tool.length-1)+"\">"+deletes+"</button>\n" +
        "                <input type=\"text\" name=\"\" class=\"form-control mb-5 tool\" placeholder=\""+tool+" :\" value=\"\" data-id=\""+(main.mainEntity.tool.length-1)+"\">"
    );
    let row = parseInt(jQuery('#json-format').val().split('\n').length);
    jQuery('#json-format').attr('rows',row);
    sticky.update();
});


jQuery('#add-howto-step').click(function () {
    let deletes = lang==='en'?'Delete Step':'Hapus Step';
    let tool = lang==='en'?'Tool Name':'Alat';
    main.mainEntity.step.push({
        
        "@type": "HowToStep",
        "text": "",
    });
    print();
    jQuery('#howto-step').append("<button type=\"button\" class=\"btn btn-danger mb-2 mt-3 deleteStep\" name=\"button\" data-id=\""+(main.mainEntity.step.length-1)+"\">"+deletes+"</button>\n" +
        "                <input type=\"text\" name=\"\" class=\"form-control mb-5 mt-5 instructions\" placeholder=\"@lang('howto.instructions') :\" value=\"\" data-id=\""+(main.mainEntity.step.length-1)+"\"> \n"+
        "                <input type=\"text\" name=\"\" class=\"form-control mb-5 imageStep\" placeholder=\"@lang('howto.imageStep') :\" value=\"\" data-id=\""+(main.mainEntity.step.length-1)+"\"> \n "+
        "                <input type=\"text\" name=\"\" class=\"form-control mb-5 nameStep\" placeholder=\"@lang('howto.nameStep') :\" value=\"\" data-id=\""+(main.mainEntity.step.length-1)+"\"> \n "+
        "                <input type=\"text\" name=\"\" class=\"form-control mb-5 url\" placeholder=\"@lang('howto.urlStep') :\" value=\"\" data-id=\""+(main.mainEntity.step.length-1)+"\"> \n "
    );
    let row = parseInt(jQuery('#json-format').val().split('\n').length);
    jQuery('#json-format').attr('rows',row);
    sticky.update();
});


jQuery(document).on('keyup', '.name', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity.name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.description', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity.description = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.totalTime', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity.totalTime = jQuery(this).val();
    print();
});


jQuery(document).on('keyup', '.estimated', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity.estimated = jQuery(this).val();
    print();
});

jQuery(document).on('change', '.currency', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity.currency = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.imageUrl', function () {
    let index = parseInt(jQuery(this).data('id'));
    // console.log('index:' + index);
    main.mainEntity.imageUrl = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.supplyName', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.mainEntity.supply[index].name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.tool', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.mainEntity.tool[index].name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.instructions', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.mainEntity.step[index].text = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.imageStep', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.mainEntity.step[index].image = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.nameStep', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.mainEntity.step[index].name = jQuery(this).val();
    print();
});

jQuery(document).on('keyup', '.url', function () {
    let index = parseInt(jQuery(this).data('id'));
    main.mainEntity.step[index].url = jQuery(this).val();
    print();
});

jQuery(document).on('click', '.deleteSupply', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index>=0){
        main.mainEntity.supply.splice(index, 1);
        print();
        for (let i = index + 1; i < main.mainEntity.supply.length + 1; i++) {
            jQuery('.supplyName[data-id=' + (i - 1) + ']').val(jQuery('.supplyName[data-id=' + (i) + ']').val())
        }
        jQuery('label[data-id=' + main.mainEntity.supply.length + ']').remove();
        jQuery('.supplyName[data-id=' + main.mainEntity.supply.length + ']').remove();
        
        jQuery('.deleteSupply[data-id=' + main.mainEntity.supply.length + ']').remove();
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
    }
    sticky.update();
});

jQuery(document).on('click', '.deleteTool', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index>=0){
        main.mainEntity.tool.splice(index, 1);
        print();
        console.log("Length :",main.mainEntity.tool.length)
        for (let i = index + 1; i < main.mainEntity.tool.length + 1; i++) {
            jQuery('.tool[data-id=' + (i - 1) + ']').val(jQuery('.tool[data-id=' + (i) + ']').val())
        }
        jQuery('label[data-id=' + main.mainEntity.tool.length + ']').remove();
        jQuery('.tool[data-id=' + main.mainEntity.tool.length + ']').remove();
        
        jQuery('.deleteTool[data-id=' + main.mainEntity.tool.length + ']').remove();
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        jQuery('#json-format').attr('rows',row);
    }
    sticky.update();
});


jQuery(document).on('click', '.deleteStep', function () {
    let index = parseInt(jQuery(this).data('id'));
    if (index>=0){
        main.mainEntity.step.splice(index, 1);
        print();
        console.log("Length :",main.mainEntity.tool.length)
        for (let i = index + 1; i < main.mainEntity.step.length + 1; i++) {
            jQuery('.instructions[data-id=' + (i - 1) + ']').val(jQuery('.instructions[data-id=' + (i) + ']').val())
            jQuery('.imageStep[data-id=' + (i - 1) + ']').val(jQuery('.imageStep[data-id=' + (i) + ']').val())
            jQuery('.nameStep[data-id=' + (i - 1) + ']').val(jQuery('.nameStep[data-id=' + (i) + ']').val())
            jQuery('.url[data-id=' + (i - 1) + ']').val(jQuery('.imageStep[data-id=' + (i) + ']').val())
        }
        jQuery('label[data-id=' + main.mainEntity.step.length + ']').remove();
        jQuery('.deleteStep[data-id=' + main.mainEntity.step.length + ']').remove();
        jQuery('.instructions[data-id=' + main.mainEntity.step.length + ']').remove();
        jQuery('.imageStep[data-id=' + main.mainEntity.step.length + ']').remove();
        jQuery('.nameStep[data-id=' + main.mainEntity.step.length + ']').remove();
        jQuery('.url[data-id=' + main.mainEntity.step.length + ']').remove();
        
        jQuery('.deleteTool[data-id=' + main.mainEntity.step.length + ']').remove();
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
