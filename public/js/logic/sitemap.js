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
$(document).ready(function () {
    const socket = io('https://api.cmlabs.co', {transports: ['websocket', 'polling', 'flashsocket'], secure: true});

    $('#generate').click(function () {
        // $('#spin').addClass("spinner spinner-success spinner-right");
        clearTable();
        let match =/^(http(s)?|ftp):\/\//;
        let url = $('#url').val().replace(match,"");
        if (url.substr(url.length-1)==='/')
            socket.emit('crawl',"https://"+url.slice(0,-1));
        else socket.emit('crawl',"https://"+url);
        console.log('start we crawl your website');
        socket.emit('image',url);
        Swal.fire({
            title: 'Proses crawling akan memakan waktu',
            html:"<div class=\"progress mb-2\" style=\"height:20px\">\n" +
                "      <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%;\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" id=\"progress-bar\">0%</div>\n" +
                "    </div>\n" +
                "    <center><span id=\"detail-progress\">0 of 0 Pages Crawled</span></center>",
            showCancelButton:true,
            showConfirmButton:false,
            allowOutsideClick: false
        }).then((result)=>{
            if (result.dismiss === 'cancel'){
                socket.emit('stop','abort');
                toastr.error('Cancel button clicked','Cancel');
            }
        })
    });

    socket.on('update queue', data =>{
        // console.log(data);
        updateProgressBar(data);
    });

    socket.on('image_url',url=>{
        console.log('image '+url);
        $('#screenshot').attr('src','https://api.cmlabs.co/'+url.url);
        $('#add').css('display','block');
    });

    socket.on('result', response => {
        // $('#spin').removeClass("spinner spinner-success spinner-right");
        // console.log(response);
        $('#table').css('display','block');
        for (let datum in response.url){
            addData(response.url[datum],parseInt(datum)+1);
        }
        DATA_FINAL = response;
        sticky.update();
        Swal.close();
    });

    socket.on('notfound', msg =>{
        $('#spin').removeClass("spinner spinner-success spinner-right");
        toastr.error('Error', msg)
    })
});

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
    console.log(parse.json2xml_str(DATA_FINAL))
});

function addData(data, i) {
    $("#url-table tbody").append("<tr>\n" +
        "              <td scope=\"col\" width=\"70px\">#"+i+"</td>\n" +
        "              <td scope=\"col\">"+data.loc+"</td>\n" +
        "            </tr>");
}

function updateProgressBar(data) {
    let percentage = (data.site_length/(parseInt(data.site_length)+parseInt(data.queue_length))*100).toFixed(1);
    $('#progress-bar')
        .attr('aria-valuenow',percentage)
        .css('width',percentage+'%')
        .html(percentage+'%');
    $('#detail-progress').html(data.site_length+' of '+(parseInt(data.site_length)+parseInt(data.queue_length))+' Pages Crawled')
}

function clearTable() {
    $("#table tbody tr").remove();
}
