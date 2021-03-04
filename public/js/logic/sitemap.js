// const { take } = require("lodash");
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
    cancel(false)
    refreshLocalStorage()
    clearTable();
    const socket = io(URL_API, {transports: ['websocket', 'polling', 'flashsocket'], secure: true});
    triggerEnter('#generate','#url');
    $('#generate').click(function () {
        $(this).prop('disabled',true)
        clearTable();
        rendering.skip = 0;
        let match =/^(http(s)?|ftp):\/\//;
        let url = $('#url').val().replace(match,"");
        if (url.substr(url.length-1)==='/')
            socket.emit('crawl',"https://"+url.slice(0,-1));
        else socket.emit('crawl',"https://"+url);
        $('#info').html("Our robot is excecuting your task..")
        cancel(true)
        $("#noCrawlResult").hide();
        $("#generateCrawlResult").show();
        buttonOn(false)
        $("#result").empty();
        isCanceled = false;
    });

    $('#cancelOn').on('click',function(){
        socket.emit('stop');
        cancel(false)
        $("#noCrawlResult").show();
        $("#generateCrawlResult").hide();
        $('#info').html("Our robot is sleeping right now. Give him a task!")
        $('#detail-progress').empty();
        isCanceled = true;
        updateProgressBar(0)
        toastr.error('Cancel your task')
        $('#generate').prop('disabled',false)
    });

    socket.on('update queue', data =>{
        if (!isCanceled){
            $('#detail-progress').html(data.site_length+' Has been crawled')
        }
    });

    socket.on('result', response => {
        clearTable();
        $('#length-result').html(`(${response.data.length})`)
        $('#detail-progress').empty()
        $('#info').html("Our robot is already finished your task.")
        $('#noCrawlResult').hide();
        buttonOn(true, response.hash)
        DATA_FINAL = response.data;
        removeShowMore()
        renderData()
        cancel(false)
        $('#generate').prop('disabled',false)
        saveData(response)
        refreshLocalStorage()
    });

    socket.on('notfound', msg =>{
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
    buttonOn(false)
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

let renderData = function() {
    for (let i = rendering.skip ; i < DATA_FINAL.length; i++){
        addData(DATA_FINAL[i],i+1)
        if(i === rendering.skip + rendering.take){
            $("#result").append('<div id="show-more" onclick="showMore()" class="d-flex align-items-center justify-content-between mx-5 result-row-show-more">\n' +
                '                  <div class="">\n' +
                '                    <span class="label label-square label-sitemap">...</span>\n' +
                '                    <span class="mx-3 sitemap-url-result">Show More</span>\n' +
                '                  </div>\n' +
                '                  <div class="d-flex align-items-center">\n' +
                '                    <i class=\'bx bxs-chevron-down sitemap-show-more\'></i>\n' +
                '                  </div>\n' +
                '                </div>');
            break;
        }
    }
    rendering.skip += rendering.take+1;
}

let removeShowMore = function (){
    $('#show-more').remove();
}

let showMore = function (){
    removeShowMore()
    renderData()
}

let saveData = function (data) {
    let dataFromLocal = localStorage.getItem('sitemap-generator')
    let storage = []
    if (dataFromLocal){
        storage = JSON.parse(dataFromLocal)
    }
    storage.push(data)
    localStorage.setItem('sitemap-generator',JSON.stringify(storage))
}

const refreshLocalStorage = function(){
    try{
        const month = ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DES']
        $('#localsavemobile').empty();
        $('#localsavedesktop').empty();
        const keys = JSON.parse(localStorage.getItem('sitemap-generator'))
        if(keys){
            let index = 0;
            for (let key of keys){
                let date = new Date(key.date)
                let formatDate = `Created at ${date.getHours() < 10 ? ('0'+date.getHours()) : date.getHours()}.${date.getMinutes() < 10 ? ('0'+date.getMinutes()) : date.getMinutes()} | ${date.getDate()}, ${month[date.getMonth()]} ${date.getFullYear()}`
                let div = `<div class="custom-card py-5 px-3" onclick="getData(${index})">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="local-collection-title">${key.url}
                        </div>
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark"
                               title="${formatDate}"></i>
                            <i class='bx bxs-x-circle bx-sm text-grey' onclick="removeLocal(${index})"></i>
                        </div>
                    </div>
                </div>`

                let div2 = `<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px" onclick="getData(${index})">
                  <div class="d-flex justify-content-between">
                    <div class="local-collection-title">${key.url}</div>
                    <div class="d-flex align-items-center">
                      <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="${formatDate}"></i>
                      <i class='bx bxs-x-circle bx-sm text-grey' onclick="removeLocal(${index})"></i>
                    </div>
                  </div>`
                index++
                $('#localsavemobile').append(div)
                $('#localsavedesktop').append(div2)
            }
        }else {
            let div2 = `<li id="empty-impression" class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                  <div class="d-flex justify-content-center text-center">
                    <span>This is your first impressions, no history yet!</span>
                  </div>
                </li>`
            let div = `<div class="custom-card py-5 px-3">
                    <div class="d-flex justify-content-center text-center">
                        <span>This is your first impressions, no history yet!</span>
                    </div>
                </div>`

            $('#localsavemobile').append(div)
            $('#localsavedesktop').append(div2)
        }
    }catch(e){
        console.log(e)
    }
}

let removeLocal = function (index){
    const keys = JSON.parse(localStorage.getItem('sitemap-generator'))
    keys.splice(index,1)
    localStorage.setItem('sitemap-generator',JSON.stringify(keys))
    refreshLocalStorage()
}

let getData = function (index) {
    $("#result").empty();
    $('#noCrawlResult').hide();
    let local = JSON.parse(localStorage.getItem('sitemap-generator'))
    $('#url').val(local[index].url)
    buttonOn(true,local[index].hash)
    DATA_FINAL = local[index].data
    $('#length-result').html(`(${DATA_FINAL.length})`)
    rendering.skip = 0
    renderData()
}

let buttonOn = function (param, hash = null) {
    let download = $('#download-button')
    download.empty()
    if (param){
        download.append(`<a href="${URL_API+'/download/'+hash}" id="downloadOn" type="button" class="btn btn-download-sitemap">Download Sitemap</a>`)
    }else {
        download.append(`<button id="downloadOff" type="button" class="btn btn-download-sitemap-disabled"
                                        disabled name="button">Download Sitemap
                                </button>`)
    }
}

let cancel = function (param) {
    let cancel = $('#cancel-button')
    cancel.empty()
    if (param){
        cancel.append(`<button id="cancelOn" type="button" class="btn btn-cancel" name="button">Cancel
                                    </button>`)
    }else {
        cancel.append(`<button id="cancelOff" type="button" class="btn btn-cancel-disabled" disabled
                                name="button">Cancel
                        </button>`)
    }
}
