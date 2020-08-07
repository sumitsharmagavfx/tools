$('#btn-ssl').on('click',function () {
    let url = $('#url').val().replace(/^(http(s)?|ftp):\/\//,'')
    $.ajax({
        url :'http://128.199.126.255:8080/',
        type : 'GET',
        header: {
            "Access-Control-Allow-Origin": "*",
        },
        dataType : "JSON",
        contentType: "application/json",
        data : {
            host: url
        },
        success: (response)=>{
            console.log(response)
        }
    })
});
