$('#btn-ssl').on('click',function () {
    let url = $('#url').val().replace(/^(http(s)?|ftp):\/\//,'')
    $.ajax({
        url :'https://ssl-cert.glitch.me/',
        type : 'GET',
        credentials: 'include',
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
