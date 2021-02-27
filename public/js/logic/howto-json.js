    var _supplyCounter = 0;
    var _toolsCounter = 0;
    var _stepCounter = 0;

    const jsonSchema = class  {
        constructor() {
            this.name = '';
            this.description = undefined;
            this.image = undefined;
            this.totalTime = undefined;
            this.supplyItem = [];
            this.tools = [];
            this.step = [];
            this.costEstimate = undefined;
            this.currency = undefined;
            this.estimate = {
                "@type": "MonetaryAmount",
                "currency": "",
                "value": ""
            };

        }

        render(){

            const obj = {
                "@context": "https://schema.org",
                "@type": "how-to",
                name:this.name,
            };

            obj.name = this.name;

            if(this.description) obj.description = this.description;

            if(this.image) obj.image = this.image;

            if(this.totalTime) obj.totalTime = "PT"+this.totalTime+"M";

            if(this.supplyItem.length > 0) {
                if (this.supplyItem.length === 1) {
                    obj.supply = this.supplyItem[0];
                } else {
                    obj.supply = this.supplyItem;
                }
            }

            if(this.tools.length > 0) {
                if (this.tools.length === 1) {
                    obj.tools = this.tools[0];
                } else {
                    obj.tools = this.tools;
                }
            }

            if(this.estimate.currency || this.estimate.value) obj.estimateCost = this.estimate;

            if(this.step.length > 0){
                if(this.step.length === 1){
                    obj.step = this.step[0];
                } else {
                    obj.step = this.step;
                }
            }

            $("#json-format").val("<script type=\"application/ld+json\">\n" + JSON.stringify(obj, undefined, 4) + "\n<\/script>");
            return obj;
        }
    }

    let jsonFormat = new jsonSchema();
    jsonFormat.step.push({
        "@type": "HowToStep",
        "text": "",
    })
    jsonFormat.render();


    jQuery(document).ready(function () {
        let deletes = lang ==='en'? 'Delete' : 'Hapus';
        let name = lang ==='en'? 'Name' : 'Nama';
        let imageUrl = lang ==='en'? 'ImageUrl':'UrlGambar';
        // jsonFormat();

    });

    $('#add-howto-supply').click(function () {
        if(jsonFormat.supplyItem.length > 0) _supplyCounter++;
        let deletes = lang==='en'?'Delete Supply':'Hapus Supply';
        let supplyName = lang==='en'?'Supply Name':'Supply';
        jsonFormat.supplyItem.push({
            "@type": "HowToSupply",
            "name": ""
        })

        jsonFormat.render();
        jQuery('#howto-supply').append("<input type='hidden' id='supplyCounter' value='"+(_supplyCounter)+"'><div class=\"row mt-5\" data-id=\""+(_supplyCounter)+"\"><div class=\"col-10\" data-id=\""+(_supplyCounter)+"\"><label class=\"text-black font-weight-bold\" for=\"tool\" data-id=\""+(_supplyCounter)+"\">Supply #"+(_supplyCounter+1)+"</label>\n" +
        "                <input type=\"text\" name=\"\" class=\"form-control supplyName\" placeholder=\""+supplyName+"\" value=\"\" data-id=\""+(_supplyCounter)+"\"></div><div class=\"col-2\"><div class=\"d-flex justify-content-center mt-9\"><i class=\'bx bxs-x-circle bx-md text-darkgrey deleteSupply\' data-id=\""+(_supplyCounter)+"\"></i></div></div>"
        );
        let row = parseInt($('#json-format').val().split('\n').length);
        $('#json-format').attr('rows',row);
        sticky.update();
    });

    $('#add-howto-tool').click(function () {
        if(jsonFormat.tools.length > 0) _toolsCounter++;

        let deletes = lang==='en'?'Delete Tool':'Hapus Tool';
        let tool = lang==='en'?'Tool Name':'Alat';

        jsonFormat.tools.push({
            "@type": "HowToTool",
            "name": "",
        })

        jsonFormat.render();

        $('#howto-tool').append("<input type='hidden' id='toolsCounter' value='"+(_toolsCounter)+"'><div class=\"row mt-5\" data-id=\""+(_toolsCounter)+"\"><div class=\"col-10\" data-id=\""+(_toolsCounter)+"\"><label class=\"text-black font-weight-bold\" for=\"tool\" data-id=\""+(_toolsCounter)+"\">Tool #"+(_toolsCounter+1)+"</label>\n" +
        "                <input type=\"text\" name=\"\" class=\"form-control tool\" placeholder=\""+tool+"\" value=\"\" data-id=\""+(_toolsCounter)+"\"></div><div class=\"col-2\"><div class=\"d-flex justify-content-center mt-9\"><i class=\'bx bxs-x-circle bx-md text-darkgrey deleteTool\' data-id=\""+(_toolsCounter)+"\"></i></div></div>"
        );
        let row = parseInt(jQuery('#json-format').val().split('\n').length);
        $('#json-format').attr('rows',row);
        sticky.update();
    });

    $('#add-howto-step').click(function () {
        _stepCounter++;
        let deletes = lang==='en'?'Delete Step':'Hapus Step';
        let tool = lang==='en'?'Tool Name':'Alat';
        jsonFormat.step.push({
            "@type": "HowToStep",
            "text": "",
        });

        jsonFormat.render();

        jQuery('#howto-step').append("<div class='loopStep' data-id='"+(_stepCounter)+"'><input type='hidden' id='stepCounter' value='"+(_stepCounter)+"'><div class=\"row mt-5\" data-id=\""+(_stepCounter)+"\"><div class=\"col-10 col-sm-11\"><label class=\"text-black font-weight-bold\" for=\"instructions\" data-id=\""+(_stepCounter)+"\">Step #"+(_stepCounter+1)+": instruction</label>\n" +
            "                <input type=\"text\" name=\"\" class=\"form-control instructions mb-5\" placeholder=\"Type your instruction here..\" value=\"\" data-id=\""+(_stepCounter)+"\"></div><div class=\"col-2 col-sm-1\"><div class=\"d-flex justify-content-center mt-9\"><i class=\'bx bxs-x-circle bx-md text-darkgrey deleteStep\' data-id=\""+(_stepCounter)+"\"></i></div></div></div>\n" +
            "                <div class=\"row\" data-id=\""+(_stepCounter)+"\"><div class=\"col-12 col-md-4\"><label class=\"text-black font-weight-bold\" for=\"imageStep\" data-id=\""+(_stepCounter)+"\">Image URL</label><input type=\"text\" name=\"\" class=\"form-control imageStep mb-5\" placeholder=\"Type image URL here..\" value=\"\" data-id=\""+(_stepCounter)+"\"></div>" +
            "                <div class=\"col-12 col-md-4\"><label class=\"text-black font-weight-bold\" for=\"nameStep\" data-id=\""+(_stepCounter)+"\">Name</label><input type=\"text\" name=\"\" class=\"form-control nameStep mb-5\" placeholder=\"Type name here..\" value=\"\" data-id=\""+(_stepCounter)+"\"></div>" +
            "                <div class=\"col-12 col-md-4\"><label class=\"text-black font-weight-bold\" for=\"url\" data-id=\""+(_stepCounter)+"\">URL</label><input type=\"text\" name=\"\" class=\"form-control url mb-5\" placeholder=\"Type URL here..\" value=\"\" data-id=\""+(_stepCounter)+"\"></div></div></div>");
        let row = parseInt($('#json-format').val().split('\n').length);
        $('#json-format').attr('rows',row);
        sticky.update();
    });

    $('.name').keyup(function(event){
        jsonFormat.name = $(this).val();
        jsonFormat.render();
    });

    $('.description').keyup(function(event){
        jsonFormat.description = $(this).val();
        jsonFormat.render();
    });

    $('.totalTime').keyup(function(event){
        jsonFormat.totalTime = $(this).val();
        jsonFormat.render();
    });

    $('.imageUrl').keyup(function (event) {
        jsonFormat.image = $(this).val();
        jsonFormat.render();
    })

    $('.estimated').keyup(function(event){
        // let index = parseInt($(this).data('id'));
        jsonFormat.estimate.value = $(this).val();
        jsonFormat.render();
    });

    $('.currency').on('change', function() {
        // let index = parseInt($(this).data('id'));
        // console.log('index:' + index);
        jsonFormat.estimate.currency = $(this).val();
        jsonFormat.render();
    });


    $(document).on('keyup', '.supplyName', function () {
        let index = parseInt($(this).data('id'));
        // console.log(index)
        jsonFormat.supplyItem[index].name = $(this).val();
        jsonFormat.render();
    });

    $(document).on('keyup', '.tool', function () {
        let index = parseInt(jQuery(this).data('id'));
        jsonFormat.tools[index].name = $(this).val();
        jsonFormat.render();
    });

    $(document).on('click', '.deleteSupply', function () {
        let index = parseInt(jQuery(this).data('id'));
        jsonFormat.supplyItem.splice(index, 1);
        jsonFormat.render();

        for(let i = index+1; i < jsonFormat.supplyItem.length + 1; i++){
            $('.supplyName[data-id=' + (i - 1) + ']').val($('.supplyName[data-id=' + (i) + ']').val())
        }

        $('.row[data-id=' + jsonFormat.supplyItem.length + ']').remove();
        let row = parseInt($('#json-format').val().split('\n').length);
        $('#json-format').attr('rows',row);

        sticky.update();
        if(jsonFormat.supplyItem.length > 0) _supplyCounter--;
    });

    $(document).on('keyup', '.instructions', function () {
        let index = parseInt(jQuery(this).data('id'));
        jsonFormat.step[index].text = jQuery(this).val();
        jsonFormat.render();
    });

    jQuery(document).on('keyup', '.imageStep', function () {
        let index = parseInt(jQuery(this).data('id'));
        jsonFormat.step[index].image = jQuery(this).val();
        jsonFormat.render();
    });

    jQuery(document).on('keyup', '.nameStep', function () {
        let index = parseInt(jQuery(this).data('id'));
        jsonFormat.step[index].name = jQuery(this).val();
        jsonFormat.render();
    });

    jQuery(document).on('keyup', '.url', function () {
        let index = parseInt(jQuery(this).data('id'));
        jsonFormat.step[index].url = jQuery(this).val();
        jsonFormat.render();
    });



    jQuery(document).on('click', '.deleteTool', function () {
        let index = parseInt(jQuery(this).data('id'));

            jsonFormat.tools.splice(index, 1);
            jsonFormat.render();

            for (let i = index + 1; i < jsonFormat.tools.length + 1; i++) {
                $('.tool[data-id=' + (i - 1) + ']').val($('.tool[data-id=' + (i) + ']').val())
            }

            $('.row[data-id=' + jsonFormat.tools.length + ']').remove();
            let row = parseInt($('#json-format').val().split('\n').length);
            $('#json-format').attr('rows',row);

        sticky.update();
        if(jsonFormat.tools.length > 0) _toolsCounter--;
    });


jQuery(document).on('click', '.deleteStep', function () {
    let index = parseInt(jQuery(this).data('id'));

        jsonFormat.step.splice(index, 1);
        jsonFormat.render();

        for (let i = index + 1; i < jsonFormat.step.length + 1; i++) {
            $('.loopStep[data-id=' + (i - 1) + ']').val($('.loopStep[data-id=' + (i) + ']').val())
        }

        $('.deleteTool[data-id=' + jsonFormat.step.length + ']').remove();
        $('.row[data-id=' + jsonFormat.step.length + ']').remove();
        let row = parseInt($('#json-format').val().split('\n').length);
        $('#json-format').attr('rows',row);
    sticky.update();
    if(jsonFormat.step.length > 0) _stepCounter--;
});

jQuery('#copy').click(function () {
    const copyText = jQuery('#json-format');
    copyText.select();
    // copyText.setSelectionRange(0, 999999); /*For mobile devices*/
    document.execCommand("copy");
});
