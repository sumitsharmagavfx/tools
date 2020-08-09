$('#btn-ssl').on('click',function () {
    $('#result').css('display','none');
    $('#input').addClass('spinner spinner-primary spinner-right');
    let url = $('#url').val().replace(/^(http(s)?|ftp):\/\//,'');
    url = url.substr(url.length-1)==='/'? url.slice(0,-1) : url;
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
            $('#input').removeClass('spinner spinner-primary spinner-right');
            console.log(response);
            if ("errno" in response){
                $('#nothing').css('display','block');
                $('#accordionExample5').css('display','none');
                toastr.success('Success scan your ssl', 'Success');
            }else {
                $('#nothing').css('display','none');
                $('#accordionExample5').css('display','block');
                let tls = '<p>Common Name = '+response.subject.CN+'</p>\n' +
                    '      <p>Subject Alternative Names = '+response.subjectaltname+'</p>\n' +
                    '      <p>Issuer = '+response.issuer.CN+'</p>\n' +
                    '      <p>Serial Number = '+response.serialNumber+'</p>\n' +
                    '      <p>SHA1 Thumbprint = '+response.fingerprint+'</p>\n' ;
                $('#tls-certificate').html(tls);
                let valid_from = new Date(response.valid_from);
                let valid_until = new Date(response.valid_to);
                let diff = valid_until-Date.now();
                let difDay = Math.ceil(Math.abs(diff)/(1000*60*60*24));
                let words = 'The certificate expires '+parseMonth(valid_until.getMonth())+' '+valid_until.getDate()+', '+valid_until.getFullYear();
                let word;
                if (diff < 0){
                    word = words+' ('+difDay+' days ago)';
                    $('#date').html(word).addClass('text-danger');
                    $('#date-ex').removeClass('fas fa-check text-success');
                    $('#date-ex').addClass('fa fa-times-circle text-danger');
                    let correct = '<i class="fa fa-times-circle text-danger"></i> TLS Certificate is not correctly installed'
                    $('#correct').html(correct);
                    $('#congrats').addClass('text-danger').html('Sorry, This certificate is expired.')
                }else {
                    word = words+' ('+difDay+' days from today)';
                    $('#date-ex').removeClass('fa fa-times-circle text-danger');
                    $('#date-ex').addClass('fas fa-check text-success');
                    $('#date').html(word).removeClass('text-danger');
                    let correct = '<i class="fas fa-check text-success"></i> TLS Certificate is correctly installed';
                    $('#correct').html(correct);
                    $('#congrats').removeClass('text-danger').html('Congratulations! This certificate is correctly installed.')
                }
                let format_from = valid_from.getDay()+'/'+valid_from.getMonth()+'/'+valid_from.getFullYear();
                let format_to = valid_until.getDay()+'/'+valid_until.getMonth()+'/'+valid_until.getFullYear();
                let server = '<p>Subject '+response.subject.CN+'</p>\n' +
                    '         <p>Valid from '+format_from+' to '+format_to+'</p>\n' +
                    '         <p>Issuer '+response.issuer.CN+'</p>';
                $('#cerf').html(server);
                toastr.success('Success scan your ssl', 'Success');
            }
            $('#result').css('display','block');
            sticky.update();
        },
        error:(error)=>{
            $('#input').removeClass('spinner spinner-primary spinner-right');
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
