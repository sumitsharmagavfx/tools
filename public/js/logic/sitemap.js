// import html2canvas from "html2canvas";

let DATA_FINAL;


$('#generate').click(function () {
    $('#spin').addClass("spinner spinner-success spinner-right");
    let url = $('#url').val();
    $('#render').attr('src',url);
    console.log('start we crawl your website');
    $.get({
        url: "http://localhost:3000?url="+url,
        success: function (response) {
            $('#spin').removeClass("spinner spinner-success spinner-right");
            console.log(response);
            for (let datum in response.url){
                addData(response.url[datum],parseInt(datum)+1);
            }
            DATA_FINAL = response;
            console.log(DATA_FINAL)
        },
        error : function (response) {
            console.log(response)
        },
        timeout:0
    });
    // var frameDoc =$("#render")
    // console.log(frameDoc);
    // html2canvas(frameDoc).then(canvas=>{
    //     console.log('testtt')
    //     $('#screeshoot').attr('src',canvas.toDataURL())
    // });

    // $.get({
    //     url: "http://localhost:3000/img?url="+url,
    //     success: function (response) {
    //         console.log(response);
    //         var doc = document.implementation.createHTMLDocument();
    //         doc.open();
    //         doc.write(response.data);
    //         doc.close();
    //         $('#render').append(doc.body)
    //         html2canvas(doc.body).then(canvas=>{
    //         console.log('testtt')
    //         $('#screeshoot').attr('src',canvas.toDataURL())
    //         });
    //     },
    //     error: function (response) {
    //         console.log(response)
    //     }
    // });
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

