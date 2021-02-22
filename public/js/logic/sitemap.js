const { take } = require("lodash");

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
let DATA_FINAL;
let isCanceled = false;
let rendering = {
    skip : 0,
    take : 10
}
$(document).ready(function () {
    $('#noCrawl').show()
    $('#crawlHttps').hide()
    $('#crawlHttp').hide()
    $('#cancelOff').show()
    $('#cancelOn').hide()
    clearTable();
    const socket = io('http://127.0.0.1:3000', {transports: ['websocket', 'polling', 'flashsocket'], secure: true});
    triggerEnter('#generate','#url');
    $('#generate').click(function () {
        clearTable();
        let match =/^(http(s)?|ftp):\/\//;
        let url = $('#url').val().replace(match,"");
        if (url.substr(url.length-1)==='/')
            socket.emit('crawl',"https://"+url.slice(0,-1));
        else socket.emit('crawl',"https://"+url);
        $('#info').html("Our robot is excecuting your task..")
        $('#cancelOff').hide()
        $('#cancelOn').show()
        $("#noCrawlResult").hide();
        $("#generateCrawlResult").show();
        $("#downloadOff").show();
        $("#downloadOn").hide();
        $("#result").empty();
    });

    $('#cancelOn').on('click',function(){
        socket.emit('stop');
        $(this).hide();
        $('#cancelOff').show();
        $("#noCrawlResult").show();
        $("#generateCrawlResult").hide();
        $('#info').html("Our robot is sleeping right now. Give him a task!")
        $('#detail-progress').empty();
        isCanceled = true;
        updateProgressBar(0)
        toastr.error('Cancel your task')
    });

    socket.on('update queue', data =>{
        console.log(isCanceled);
        if (!isCanceled){
            $('#detail-progress').html(data.site_length+' Has been crawld')
            // updateProgressBar((data.site_length/data.queue_length*100).toFixed(2));
        }
    });

    socket.on('result', response => {
        // $('#spin').removeClass("spinner spinner-success spinner-right");
        // console.log(response);
        $('#info').html("Our robot is already finished your task.")
        clearTable();
        $('#table').css('display','block');
        $('#noCrawlResult').hide();
        $("#downloadOff").hide();
        $("#downloadOn").show();
        $("#downloadOn").attr('href','http://127.0.0.1:3000/download/'+response.url);
        for (let datum in response.data){
            addData(response.data[datum],parseInt(datum)+1);
        }
        DATA_FINAL = response.data;
        sticky.update();
        Swal.close();
    });

    socket.on('notfound', msg =>{
        // $('#spin').removeClass("spinner spinner-success spinner-right");
        toastr.error('Error', msg)
    })
});

$('#url').on('input',function(){
    let check = regexHttps($(this).val());
    if(check === 'https'){
        $('#noCrawl').hide()
        $('#crawlHttps').show()
        $('#crawlHttp').hide()
    }else if (check === 'http'){
        $('#noCrawl').hide()
        $('#crawlHttps').hide()
        $('#crawlHttp').show()
    }else{
        $('#noCrawl').show()
        $('#crawlHttps').hide()
        $('#crawlHttp').hide()
    }
})

$('#download').click(function () {
    let parse = new X2JS();
    let text= "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" +
        "<urlset\n" +
        "      xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"\n" +
        "      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"\n" +
        "      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9\n" +
        "            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\n" +
        "<!-- created with Free Online Sitemap Generator https://tools.cmlabs.co -->"+
        parse.json2xml_str(DATA_FINAL)+
        "</urlset>";
    download(vkbeautify.xml(text),"sitemap.xml","text/xml");
    // console.log(parse.json2xml_str(DATA_FINAL))
});

function addData(data, i) {
    $("#result").append('<div class="d-flex align-items-center mx-5 result-row">'+
    '   <span class="label label-square label-sitemap">'+i+'</span>'+
    '   <span class="mx-3 sitemap-url-result">'+data.url+'</span>'+
    '</div>'+
    '<hr>');
}

function updateProgressBar(percentage) {
    $('#progress-bar')
        .attr('aria-valuenow',percentage)
        .css('width',percentage+'%')
        .html(percentage+'%');
}

function clearTable() {
    $("#noCrawlResult").show();
    $("#generateCrawlResult").hide();
    $("#downloadOff").show();
    $("#downloadOn").hide();
    $("#result").empty();
}

function regexHttps(url){
    let httpsPattern = new RegExp("^https:\/\/")
    let httpPattern = new RegExp("^http:\/\/")
    if (httpsPattern.test(url)){
        return 'https'
    }else if (httpPattern.test(url)){
        return 'http'
    }else{
        return 'none'
    }
}

let renderData = function(data) {
    for (let i = skip ; i < data.length; i++){
        addData(data[i],i+1)
        if((i% rendering.take)==0) 
            break;
    }
    if(i < data.length){
        $("#result").append();
    }
    rensering.skip += take;
}
