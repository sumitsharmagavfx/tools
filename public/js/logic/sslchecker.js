$('#btn-ssl').on('click',function () {
    $('#result').css('display','none');
    $('#input').addClass('spinner spinner-success spinner-right');
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
            $('#input').removeClass('spinner spinner-success spinner-right');
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
                let words = '';
                if (lang === 'en')
                    words = 'The certificate expires '+parseMonth(valid_until.getMonth())+' '+valid_until.getDate()+', '+valid_until.getFullYear();
                else words = 'Sertifikat kadaluarsa pada '+parseMonthId(valid_until.getMonth())+' '+valid_until.getDate()+', '+valid_until.getFullYear();
                let word;
                if (diff < 0){
                    if (lang === 'en')
                        word = words+' ('+difDay+' days ago)';
                    else word = words+' ('+difDay+' hari yang lalu)';
                    $('#date').html(word).addClass('text-danger');
                    $('#date-ex').removeClass('fas fa-check text-success');
                    $('#date-ex').addClass('fa fa-times-circle text-danger');
                    let correct ='';
                    if (lang === 'en')
                        correct = '<i class="fa fa-times-circle text-danger"></i> TLS Certificate is not correctly installed'
                    else correct = '<i class="fa fa-times-circle text-danger"></i> TLS Certificate tidak terpasang dengan benar'
                    $('#correct').html(correct);
                    if (lang === 'en')
                        $('#congrats').addClass('text-danger').html('Sorry, This certificate is expired.');
                    else $('#congrats').addClass('text-danger').html('Maaf, sertifikat ini telah kadaluarsa');
                }else {
                    if (lang === 'en')
                        word = words+' ('+difDay+' days from today)';
                    else word = words+' ('+difDay+' hari dari sekarang)';
                    $('#date-ex').removeClass('fa fa-times-circle text-danger');
                    $('#date-ex').addClass('fas fa-check text-success');
                    $('#date').html(word).removeClass('text-danger');
                    let correct ='';
                    if (lang === 'en')
                        correct = '<i class="fas fa-check text-success"></i> TLS Certificate is correctly installed';
                    else correct = '<i class="fas fa-check text-success"></i> TLS Certificate telah terpasang dengan benar';
                    $('#correct').html(correct);
                    if (lang === 'en')
                        $('#congrats').removeClass('text-danger').html('Congratulations! This certificate is correctly installed.')
                    else $('#congrats').removeClass('text-danger').html('Selamat! sertifikat ini telah terpasang dengan benar')
                }
                if (lang === 'en')
                    toastr.success('Success scan your ssl', 'Success');
                else toastr.success('Success mendeteksi ssl anda', 'Success');
            }
            $('#result').css('display','block');
            sticky.update();
        },
        error:(error)=>{
            $('#input').removeClass('spinner spinner-success spinner-right');
            if (lang === 'en')
                toastr.error('Error happen during proses','Error')
            else toastr.error('Error terjadi selama proses berlangsung','Error')
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

function parseMonthId(month) {
    switch (month) {
        case 1:
            return 'Januari';
            break;
        case 2:
            return 'Februari';
            break;
        case 3:
            return 'Maret';
            break;
        case 4:
            return 'April';
            break;
        case 5:
            return 'Mei';
            break;
        case 6:
            return 'Juni';
            break;
        case 7:
            return 'Juli';
            break;
        case 8:
            return 'Agustus';
            break;
        case 9:
            return 'September';
            break;
        case 10:
            return 'Oktober';
            break;
        case 11:
            return 'November';
            break;
        case 12:
            return 'Desember';
            break;
    }
}
