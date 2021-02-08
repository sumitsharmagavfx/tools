const refreshLocalStorage = function(){
    try{
        const keys = JSON.parse(localStorage.getItem('keys'))
        for (let key of keys){
            console.log(key)
            let temp = localStorage.getItem(key).slice(0,45)
            let date = new Date(key*1000)
            let div = '<div class="custom-card py-5 px-3" onclick="getData('+key+')">'+
            '<div class="d-flex align-items-center justify-content-between">'+
                '<div class="local-collection-title">'+temp+'</div>'+
                    '<div class="d-flex align-items-center">'+
                        '<span class="mr-2 text-grey date-created">Created at '+((date.getHours() < 10) ? ('0'+date.getHours()):date.getHours())+'.'+((date.getMinutes() < 10) ? ('0'+date.getMinutes()):date.getMinutes())+' | '+date.getDate()+', '+getMonth(date.getMonth())+' '+date.getFullYear()+'</span>'+
                        '<i class="bx bxs-x-circle text-grey" onclick="removeData('+key+')"></i>'+
                    '</div>'+
                '</div>'+
            '</div>'
        
            let div2 = '<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px" onclick="getData('+key+')">'+
            '<div class="d-flex justify-content-between">'+
            '  <div class="local-collection-title">'+temp+'</div>'+
            '  <div class="d-flex align-items-center">'+
                '<span class="mr-2 text-grey date-created">Created at '+(date.getHours() < 10 ? ('0'+date.getHours()):date.getHours())+'.'+(date.getMinutes() < 10 ? ('0'+date.getMinutes()):date.getMinutes())+' | '+date.getDate()+', '+getMonth(date.getMonth())+' '+date.getFullYear()+'</span>'+
            '    <i class="bx bxs-x-circle text-grey" onclick="removeData('+key+')"></i>'+
            '  </div>'+
            '</div>'+
            '</li>'
            
            $('#localsavemobile').append(div)
            $('#localsavedesktop').append(div2)
        }
    }catch(e){
        console.log(e)
    }
}

const getMonth = function(index){
    const month = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL",
        "AUG", "SEP", "OCT", "NOV", "DES"]
    return month[index]
}

var input = document.querySelectorAll('textarea')[0],
    characterCount = document.querySelector('#characterCount'),
    wordCount = document.querySelector('#wordCount'),
    sentenceCount = document.querySelector('#sentenceCount'),
    paragraphCount = document.querySelector('#paragraphCount'),
    readingTime = document.querySelector('#readingTime'),
    topKeywords = document.querySelector('#topKeywords'),
    topKeywords2 = document.querySelector('#top2'),
    topKeywords3 = document.querySelector('#top3'),
    // topKeywords4 = document.querySelector('#top4'),
    // topKeywords5 = document.querySelector('#top5'),
    topKeywordsMobile = document.querySelector('#topKeywordsMobile'),
    topKeywords2Mobile = document.querySelector('#top2Mobile'),
    topKeywords3Mobile = document.querySelector('#top3Mobile');
    // topKeywords4 = document.querySelector('#top4'),
    // topKeywords5 = document.querySelector('#top5');


// input.innerHTML = sessionStorage.getItem("text");
// input.innerHTML = localStorage.getItem("text");
// characterCount.innerHTML = sessionStorage.getItem("char");
characterCount.innerHTML = 0;
// wordCount.innerHTML = sessionStorage.getItem("words");
wordCount.innerHTML = 0;
// sentenceCount.innerHTML = sessionStorage.getItem("sentences");
sentenceCount.innerHTML = 0;
// paragraphCount.innerHTML = sessionStorage.getItem("paragraph");
paragraphCount.innerHTML = 0;
// readingTime.innerHTML = sessionStorage.getItem("read");
readingTime.innerHTML = 0;

let prefilled_en = '( text bellow is an example, you can change the example anytime )\n\nCommon Phases In Content Writing\n\nThen, what are the phases in developing a good content writing? Here we have seven common phases that can be applied for online writing. However, these steps must be firstly adjusted to the project objectives since different project may come with different scheme and approach, too. The seven phases are in the following :';
let prefilled_id = '( teks di bawah ini adalah contoh, Anda dapat mengubah contoh kapan saja )\n\nFase Umum Dalam Penulisan Konten\n\nLalu, apa saja tahapan dalam mengembangkan content writing yang baik? Di sini kami memiliki tujuh fase umum yang dapat diterapkan untuk penulisan online. Namun, langkah-langkah ini harus terlebih dahulu disesuaikan dengan tujuan proyek karena proyek yang berbeda mungkin datang dengan skema dan pendekatan yang berbeda juga. Ketujuh fase tersebut adalah sebagai berikut :';

if ( $('#textarea').val() === '' ) {
    if (lang === 'en')
        $('#textarea').val(prefilled_en);
    else $('#textarea').val(prefilled_id);
    start();
}
else if ($('#textarea').val() === prefilled_en || $('#textarea').val() === prefilled_id) {
    if (lang === 'en')
        $('#textarea').val(prefilled_en);
    else $('#textarea').val(prefilled_id);
    start();
}
else {
    start()
}

refreshLocalStorage();

$('#textarea').on('input', function(){
    if($('#autosaveParam').data('autosave') == "on"){
        if($(this).val()){
            const key = $(this).data('key');
            const keys = window.localStorage.getItem('keys')
            var temp = []
            if (keys){
                temp = JSON.parse(keys)
            }
            if (!temp.includes(key)){
                temp.push(key)
            }
            window.localStorage.setItem('keys', JSON.stringify(temp));
            window.localStorage.setItem(key, $('#textarea').val());
        }else{
            const key = $(this).data('key');
            const keys = window.localStorage.getItem('keys')
            var temp = []
            if (keys){
                temp = JSON.parse(keys)
                let index = temp.indexOf(key)
                if (index > 0){
                    temp.splice(index, 1)
                }
                window.localStorage.setItem('keys', JSON.stringify(temp));
                window.localStorage.removeItem(key);
            }
        }
    }
    start();
})

const getData = function(key){
    if(localStorage.getItem(key)){
        $('#textarea').val(localStorage.getItem(key));
        $('#textarea').data('key',key)
        start();
    }
    
}

const removeData = function(key){
    let currentKey = $('#textarea').data('key')
    if (currentKey === key){
        $('#textarea').data('key',new Date().getTime())
        $('#textarea').val('')
        start();
    }
    let keys = JSON.parse(localStorage.getItem('keys'));
    for(var i in keys){
        if(keys[i] === key){
            keys.splice(i,1)
            break;
        }
    }
    localStorage.setItem('keys',JSON.stringify(keys))
    localStorage.removeItem(key)
    $('#localsavemobile').empty();
    $('#localsavedesktop').empty();
    console.log("first",$('#textarea').val())
    refreshLocalStorage();
    console.log("last",$('#textarea').val())
}

const clearAll = function(){
    localStorage.clear();
    $('#localsavemobile').empty();
    $('#localsavedesktop').empty();
}

// var target = $('.collapse');
// for (let i = 0; i < target.length; i++) {
//     var observer = new MutationObserver(function(mutations) {
//         mutations.forEach(function(mutation) {
//             if (mutation.attributeName === "class") {
//                 sticky.update();
//             }
//         });
//     });
//     observer.observe(target[i],{attributes:true});
// }

jQuery('#reset').click(function () {
    sessionStorage.clear();
    jQuery('#textarea').val('');
    jQuery('.collapse').collapse('hide');

    characterCount.innerHTML = 0;
    wordCount.innerHTML = 0;
    sentenceCount.innerHTML = 0;
    paragraphCount.innerHTML = 0;
    readingTime.innerHTML = 0;

    topKeywords.innerHTML = '';
    topKeywords2.innerHTML = '';
    topKeywords3.innerHTML = '';
    // topKeywords4.innerHTML = '';
    // topKeywords5.innerHTML = '';
    topKeywordsMobile.innerHTML = '';
    topKeywords2Mobile.innerHTML = '';
    topKeywords3Mobile.innerHTML = '';

    // sticky.update();
});  

function start(){
    // sessionStorage.setItem("text", input.value);
    // localStorage.
    // setItem("text", input.value);
    // console.clear();

    characterCount.innerHTML = input.value.length;
    // sessionStorage.setItem("char", input.value.length);

    var words = input.value.replace(/['";:,.?\xbf\-!\xa1]+/g, "").match(/\S+/g);
    if (words) {
        wordCount.innerHTML = words.length;
        // sessionStorage.setItem("words", words.length);
    } else {
        wordCount.innerHTML = 0;
    }

    if (words) {
        var sentences = input.value.match(/\w([^.?!;\u2026]+[.?!;\u2026]+)/g);
        if (!sentences){
            sentenceCount.innerHTML = 0;   
        }else{
            sentenceCount.innerHTML = sentences.length;
        }
        // sessionStorage.setItem("sentences", sentences.length);
    } else {
        sentenceCount.innerHTML = 0;
    }                                                                                                     

    if (words) {
        var paragraphs = input.value.replace(/\n$/gm, '').split(/\n/);
        paragraphCount.innerHTML = paragraphs.length;
        // sessionStorage.setItem("paragraph", paragraphs.length);
    } else {
        paragraphCount.innerHTML = 0;
    }
    if (words) {
        var seconds = Math.floor(words.length *  60 / 275);
        if (seconds > 59) {
            var minutes = Math.floor(seconds / 60);
            seconds = seconds - minutes*60;
            readingTime.innerHTML = minutes + "m "+ seconds + "s";
            // sessionStorage.setItem("read", minutes + "m "+ seconds + "s");
        } else {
            readingTime.innerHTML = seconds + "s";
            // sessionStorage.setItem("read", seconds + "s");
        }
    } else {
        readingTime.innerHTML = "0s";
    }

    if (words) {
        var nonStopWords = [];
        var stopWords = ["+","a","able","about","above","abst","accordance","according","accordingly","across","actually","adj","after","afterwards","again","against","ah","all","almost","alone","along","already","also","although","always","am","among","amongst","an","and","another","any","anybody","anyhow","anymore","anyone","anything","anyway","anyways","anywhere","apparently","approximately","are","aren","arent","around","as","aside","at","auth","available","away","awfully","b","back","be","because","before","beforehand","behind","below","beside","besides","between","beyond","biol","both","brief","briefly","but","by","c","ca","certain","certainly","co","com","contain","couldnt","d","downwards","due","e","ed","edu","eg","eight","either","else","elsewhere","et","et-al","etc","even","ever","ex","f","ff","fifth","first","five","fix","followed","following","follows","for","former","formerly","forth","found","four","from","further","furthermore","g","gave","get","gets","getting","give","given","gives","giving","go","goes","gone","got","gotten","h","had","happens","hardly","has","hasn't","have","haven't","having","he","hed","hence","her","here","hereafter","hereby","herein","heres","hereupon","hers","herself","hes","hi","hid","him","himself","his","hither","home","how","howbeit","however","hundred","i","id","ie","if","i'll","im","immediate","immediately","importance","important","in","inc","indeed","index","information","instead","into","invention","inward","is","isn't","it","itd","it'll","its","itself","i've","j","just","k","keep","keeps","kept","kg","km","know","known","knows","l","largely","last","lately","later","latter","latterly","least","less","lest","let","lets","like","liked","likely","line","little","'ll","look","looking","looks","ltd","m","made","mainly","make","makes","many","may","maybe","me","mean","means","meantime","meanwhile","merely","mg","might","million","miss","ml","more","moreover","most","mostly","mr","mrs","much","mug","must","my","myself","n","na","name","namely","nay","nd","near","nearly","necessarily","necessary","need","needs","neither","never","nevertheless","new","next","nine","ninety","no","nobody","non","none","nonetheless","noone","nor","normally","nos","not","noted","nothing","now","nowhere","o","obtain","obtained","obviously","of","off","often","oh","ok","okay","old","omitted","on","once","one","ones","only","onto","or","ord","other","others","otherwise","ought","our","ours","ourselves","out","outside","over","overall","owing","own","p","page","pages","part","particular","particularly","per","perhaps","placed","please","plus","poorly","possible","possibly","potentially","pp","predominantly","previously","primarily","probably","promptly","proud","provides","put","q","que","quickly","quite","qv","r","ran","rather","rd","re","readily","really","recent","recently","ref","refs","regarding","regardless","regards","related","relatively","research","respectively","resulted","resulting","results","right","run","s","said","same","saw","say","saying","says","sec","section","see","seeing","seem","seemed","seeming","seems","seen","self","selves","sent","seven","several","shall","she","shed","she'll","shes","should","shouldn't","show","showed","shown","showns","shows","significant","significantly","similar","similarly","since","six","slightly","so","some","somebody","somehow","someone","somethan","something","sometime","sometimes","somewhat","somewhere","soon","sorry","specifically","specified","specify","specifying","still","stop","strongly","sub","substantially","successfully","such","sufficiently","sup","sure","t","take","taken","taking","tell","tends","th","than","thanx","that","that'll","thats","that've","the","their","theirs","them","themselves","then","thence","there","thereafter","thereby","thered","therefore","therein","there'll","thereof","therere","theres","thereto","thereupon","there've","these","they","theyd","they'll","theyre","they've","think","this","those","thou","though","thoughh","thousand","throug","through","throughout","thru","thus","til","tip","to","together","too","took","toward","towards","tried","tries","truly","try","trying","ts","twice","two","u","un","under","unfortunately","unless","unlike","unlikely","until","unto","up","upon","ups","us","use","used","useful","usefully","usefulness","uses","using","usually","v","value","various","'ve","very","via","viz","vol","vols","vs","w","want","wants","was","wasn't","way","we","wed","welcome","we'll","went","were","weren't","we've","what","whatever","what'll","whats","when","whence","whenever","where","whereafter","whereas","whereby","wherein","wheres","whereupon","wherever","whether","which","while","whim","whither","who","whod","whoever","whole","who'll","whom","whomever","whos","whose","why","widely","willing","wish","with","within","without","won't","words","world","would","wouldn't","www","x","y","yes","yet","you","youd","you'll","your","youre","yours","yourself","yourselves","you've","z","zero","(", ")"];
        for (var i = 0; i < words.length; i++) {
            if (stopWords.indexOf(words[i].toLowerCase()) === -1 && isNaN(words[i])) {
                nonStopWords.push(words[i].toLowerCase());
            }
        }
        //1
        var keywords = {};
        for (var i = 0; i < nonStopWords.length; i++) {
            if(nonStopWords[i] in keywords) {
                keywords[nonStopWords[i]] += 1;
            } else {
                keywords[nonStopWords[i]] = 1;
            }
        }
        var sortedKeywords = [];
        for (var keyword in keywords){
            sortedKeywords.push([keyword, keywords[keyword]])
        }
        sortedKeywords.sort(function(a, b) {return b[1] - a[1]});
        topKeywords.innerHTML = "";
        for (var i = 0; i < sortedKeywords.length && i < 10; i++) {
            var div = document.createElement('div');
            if (i == 9) {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%</span></div></div></div>"
            } else if (i > 2) {
                div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            } else {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            }
            // "<b>" + sortedKeywords[i][0] + "</b>: " + sortedKeywords[i][1]+" ("+((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%)";
            topKeywords.appendChild(div);
        }

        topKeywordsMobile.innerHTML = "";
        for (var i = 0; i < sortedKeywords.length && i < 10; i++) {
            var div = document.createElement('div');
            if (i == 9) {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%</span></div></div></div>"
            } else if (i > 2) {
                div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            } else {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            }
            // div.innerHTML = "<b>" + sortedKeywords[i][0] + "</b>: " + sortedKeywords[i][1]+" ("+((sortedKeywords[i][1]/words.length)*100).toFixed(1)+"%)";
            topKeywordsMobile.appendChild(div);
        }
        //2
        var keywords2 = {};
        for (var i = 0; i < nonStopWords.length-1; i++) {
            var key = nonStopWords[i]+" "+nonStopWords[i+1];
            if(key in keywords2) {
                keywords2[key] += 1;
            } else {
                keywords2[key] = 1;
            }
        }
        var sortedKeywords2 = [];
        for (var keyword in keywords2){
            sortedKeywords2.push([keyword, keywords2[keyword]])
        }
        sortedKeywords2.sort(function(a, b) {return b[1] - a[1]});
        topKeywords2.innerHTML = "";
        for (var i = 0; i < sortedKeywords2.length && i < 10; i++) {
            var div = document.createElement('div');
            if (i == 9) {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords2[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords2[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords2[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div>"
            } else if (i > 2) {
                div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords2[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords2[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords2[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            } else {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords2[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords2[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords2[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            }
            // li.innerHTML = "<b>" + sortedKeywords2[i][0] + "</b>: " + sortedKeywords2[i][1]+" ("+((sortedKeywords2[i][1]/(words.length/3))*100).toFixed(1)+"%)";
            topKeywords2.appendChild(div);
        }

        topKeywords2Mobile.innerHTML = "";
        for (var i = 0; i < sortedKeywords2.length && i < 10; i++) {
            var div = document.createElement('div');
            if (i == 9) {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords2[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords2[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords2[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div>"
            } else if (i > 2) {
                div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords2[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords2[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords2[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            } else {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords2[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords2[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords2[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            }
            // li.innerHTML = "<b>" + sortedKeywords2[i][0] + "</b>: " + sortedKeywords2[i][1]+" ("+((sortedKeywords2[i][1]/(words.length/3))*100).toFixed(1)+"%)";
            topKeywords2Mobile.appendChild(div);
        }
        //3
        var keywords3 = {};
        for (var i = 0; i < nonStopWords.length-2; i++) {
            var key = nonStopWords[i]+" "+nonStopWords[i+1]+" "+nonStopWords[i+2];
            if(key in keywords3) {
                keywords3[key] += 1;
            } else {
                keywords3[key] = 1;
            }
        }
        var sortedKeywords3 = [];
        for (var keyword in keywords3){
            sortedKeywords3.push([keyword, keywords3[keyword]])
        }
        sortedKeywords3.sort(function(a, b) {return b[1] - a[1]});
        topKeywords3.innerHTML = "";
        for (var i = 0; i < sortedKeywords3.length && i < 10; i++) {
            var div = document.createElement('div');
            if (i == 9) {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords3[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords3[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords3[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div>"
            } else if (i > 2) {
                div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords3[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords3[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords3[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            } else {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords3[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords3[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords3[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            }
            // li.innerHTML = "<b>" + sortedKeywords3[i][0] + "</b>: " + sortedKeywords3[i][1]+" ("+((sortedKeywords3[i][1]/(words.length/4))*100).toFixed(1)+"%)";
            topKeywords3.appendChild(div);
        }

        topKeywords3Mobile.innerHTML = "";
        for (var i = 0; i < sortedKeywords3.length && i < 10; i++) {
            var div = document.createElement('div');
            if (i == 9) {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords3[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords3[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords3[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div>"
            } else if (i > 2) {
                div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-non-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords3[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords3[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords3[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            } else {
              div.innerHTML = "<div class='row'><div class='col-8'><div class='d-flex justify-content-start align-items-center'><div class='container-label-top-keywords mr-3'><span class='label label-lg label-top-3'>" + (i + 1) + "</span></div>" + sortedKeywords3[i][0] + "</div></div><div class='col-4 d-flex justify-content-end align-items-center'><div class='d-flex justify-content-end align-items-center'><span class='mr-3 font-weight-bolder mt-1'>" + sortedKeywords3[i][1] + "</span><span class='font-weight-bolder mt-1'>" + ((sortedKeywords3[i][1]/(words.length))*100).toFixed(1)+"%</span></div></div></div><hr class='my-2'>"
            }
            // li.innerHTML = "<b>" + sortedKeywords3[i][0] + "</b>: " + sortedKeywords3[i][1]+" ("+((sortedKeywords3[i][1]/(words.length/4))*100).toFixed(1)+"%)";
            topKeywords3Mobile.appendChild(div);
        }
        //4
        // var keywords4 = {};
        // for (var i = 0; i < nonStopWords.length-3; i++) {
        //     var key = nonStopWords[i]+" "+nonStopWords[i+1]+" "+nonStopWords[i+2]+" "+nonStopWords[i+3];
        //     if(key in keywords4) {
        //         keywords4[key] += 1;
        //     } else {
        //         keywords4[key] = 1;
        //     }
        // }
        // var sortedKeywords4 = [];
        // for (var keyword in keywords4){
        //     sortedKeywords4.push([keyword, keywords4[keyword]])
        // }
        // sortedKeywords4.sort(function(a, b) {return b[1] - a[1]});
        // topKeywords4.innerHTML = "";
        // for (var i = 0; i < sortedKeywords4.length && i < 15; i++) {
        //     var li = document.createElement('li');
        //     li.innerHTML = "<b>" + sortedKeywords4[i][0] + "</b>: " + sortedKeywords4[i][1]+" ("+((sortedKeywords4[i][1]/(words.length/5))*100).toFixed(1)+"%)";
        //     topKeywords4.appendChild(li);
        // }
        //5
        // var keywords5 = {};
        // for (var i = 0; i < nonStopWords.length-4; i++) {
        //     var key = nonStopWords[i]+" "+nonStopWords[i+1]+" "+nonStopWords[i+2]+" "+nonStopWords[i+3]+" "+nonStopWords[i+4];
        //     if(key in keywords5) {
        //         keywords5[key] += 1;
        //     } else {
        //         keywords5[key] = 1;
        //     }
        // }
        // var sortedKeywords5 = [];
        // for (var keyword in keywords5){
        //     sortedKeywords5.push([keyword, keywords5[keyword]])
        // }
        // sortedKeywords5.sort(function(a, b) {return b[1] - a[1]});
        // topKeywords5.innerHTML = "";
        // for (var i = 0; i < sortedKeywords5.length && i < 15; i++) {
        //     var li = document.createElement('li');
        //     li.innerHTML = "<b>" + sortedKeywords5[i][0] + "</b>: " + sortedKeywords5[i][1]+" ("+((sortedKeywords5[i][1]/(words.length/6))*100).toFixed(1)+"%)";
        //     topKeywords5.appendChild(li);
        // }
    }
    if (words){
        if (sentences.length >= 1){
            $('#collapseOne1').addClass('show');
            $('#word1').removeClass('collapsed').attr('aria-expanded','true')
            sticky.update();
        }
        // sticky.update();
    }else {
        $('#collapseOne1').removeClass('show');
        $('#word1').addClass('collapsed').attr('aria-expanded','false')
        // sticky.update();
    }
    // sticky.update();
}