$('#btn-ssl').on('click',function () {
    let url = $('#url').val().replace(/^(http(s)?|ftp):\/\//,'')
    $.ajax({
        url :'https://api.cmlabs.co/ssl',
        type : 'GET',
        header: {
            "Access-Control-Allow-Origin": "*",
        },
        dataType : "JSON",
        contentType: "application/json",
        data : {
            url: url
        },
        success: (response)=>{
            console.log(response);
            let tls = '<p>Common Name = '+response.subject.CN+'</p>\n' +
                '      <p>Subject Alternative Names = '+response.subjectaltname+'</p>\n' +
                '      <p>Issuer = '+response.issuer.CN+'</p>\n' +
                '      <p>Serial Number = '+response.serialNumber+'</p>\n' +
                '      <p>SHA1 Thumbprint = '+response.fingerprint+'</p>\n' +
                '      <p>Key Length = '+response.bits+'</p>\n' +
                '      <p style="color: red">Signature algorithm = SHA256-RSA</p>\n' +
                '      <p style="color: red">Secure Renegotiation:</p>';
            $('#tls-certificate').html(tls);
            let valid_from = new Date(response.valid_from);
            let valid_until = new Date(response.valid_to);
            let diff = valid_until-valid_from;
            let difDay = Math.ceil(Math.abs(diff)/(1000*60*60*24));
            let words = 'The certificate expires '+parseMonth(valid_until.getMonth())+' '+valid_until.getDate()+', '+valid_until.getFullYear();
            let word = diff < 0 ? words+' ('+difDay+' days ago)': words+' ('+difDay+' days from today)';
            $('#date').html(word);
            let format_from = valid_from.getDay()+'/'+valid_from.getMonth()+'/'+valid_from.getFullYear();
            let format_to = valid_until.getDay()+'/'+valid_until.getMonth()+'/'+valid_until.getFullYear();
            let server = '<p>Subject '+response.subject.CN+'</p>\n' +
                '         <p>Valid from '+format_from+' to '+format_to+'</p>\n' +
                '         <p>Issuer '+response.issuer.CN+'</p>';
            toastr.success('Success scan your ssl', 'Success');
            $('#result').css('display','block');
            sticky.update();
        },
        error:(error)=>{
            toastr.error('Error happen during proses','Error')
        }
    })
});

function parseMonth(month) {
    switch (month) {
        case 1:
            return 'January';
            break;
        case 2:
            return 'February';
            break;
        case 3:
            return 'March';
            break;
        case 4:
            return 'April';
            break;
        case 5:
            return 'May';
            break;
        case 6:
            return 'June';
            break;
        case 7:
            return 'July';
            break;
        case 8:
            return 'August';
            break;
        case 9:
            return 'September';
            break;
        case 10:
            return 'October';
            break;
        case 11:
            return 'November';
            break;
        case 12:
            return 'December';
            break;
    }
}
