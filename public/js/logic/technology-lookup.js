const TECH_LOOKUP_LOCAL_STORAGE_KEY = 'tech-lookup-history';

const TechnologyTemplate = (title, icon, category, version) => `
<div class="d-flex justify-content-between align-items-center mx-5">
  <div class="d-flex align-items-center">
    <img src="/media/technologyLookup/icons/${icon}" alt="" width="20px">
    <span class="mx-3 technology-name">${title}</span>
    ${version}
  </div>
  <div class="">
    <span>${category}</span>
  </div>
</div>
<hr>`;

const HistoryTemplate = (url, date) => `
<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px history--list" data-url="${url}">
  <div class="d-flex justify-content-between">
    <div class="local-collection-title">${url}</div>
    <div class="d-flex align-items-center">
      <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at ${date}"></i>
      <i class='bx bxs-x-circle bx-sm text-grey delete-history--btn' data-url="${url}"></i>
    </div>
  </div>
</li>
`;

const EmptyHistoryTemplate = () => `
<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
  <div class="d-flex justify-content-center text-center">
    <span>This is your first impressions, no history yet!</span>
  </div>
</li>`;

function getHistories() {
    $('#local-history').empty();
    let histories = localStorage.getItem(TECH_LOOKUP_LOCAL_STORAGE_KEY);
    histories = histories ? JSON.parse(histories) : [];
    if (!histories || histories.length === 0) {
        $('#local-history').append(EmptyHistoryTemplate());
        return;
    }
    for (let history of histories.reverse()) {
        $('#local-history').append(
            HistoryTemplate(history.url, history.date)
        );
    }
}

function addHistory(url){
    let histories = localStorage.getItem(TECH_LOOKUP_LOCAL_STORAGE_KEY);
    histories = histories ? JSON.parse(histories) : [];
    if(histories.find(history => {return history.url === url;})) return;
    histories.push({
        url: url,
        date: formatDate(new Date())
    })
    localStorage.setItem(TECH_LOOKUP_LOCAL_STORAGE_KEY, JSON.stringify(histories));
    getHistories();
}

function convertSecond(seconds){
    let minute = (seconds / 60).toFixed(0);
    let second = seconds % 60;
    return {
        minute,
        second
    }
}

function analyzeUrl(_url) {
    if (checkUrl(_url)) {
        $('#technology-lookup-result-total').text("")
        $.post({
            url: LOOKUP_API_URL,
            data: {
                _token: $('meta[name=csrf-token]').attr('content'),
                url: _url
            },
            beforeSend: () => {
                KTApp.block('#technology-lookup-result-container', {
                    overlayColor: 'gray',
                    opacity: 0.1,
                    state: 'primary'
                });
            },
            success: (res) => {
                if (res.statusCode === 200) {
                    $('#technology-lookup-result-empty').hide();
                    $('#technology-lookup-result-list').empty().show();
                    $('#technology-lookup-result-total').text(`(${res.data.technologies.length})`)
                    for (let technology of res.data.technologies) {
                        let _versionLabel = technology.version != null ? `<span class="label label-primary-version label-inline font-weight-normal px-2">${technology.version}</span>` : '';
                        $('#technology-lookup-result-list').append(
                            TechnologyTemplate(technology.name, technology.icon, technology.categories[0].name, _versionLabel)
                        )
                    }

                    addHistory(_url);
                    getHistories();
                } else {
                    $('#technology-lookup-result-list').hide();
                    $('#technology-lookup-result-empty').show();
                    toastr.error(res.message, 'Error')
                }
            },
            error: (err) => {
                if(err.responseJSON.statusCode === 429){
                    let {minute, second} = convertSecond(err.responseJSON.data.current_time);
                    toastr.error(`Please wait for ${minute} minutes and ${second} seconds`, `Error ${err.responseJSON.message}`)
                } else {
                    toastr.error(err.responseJSON.message, 'Error')
                }
                $('#technology-lookup-result-list').hide();
                $('#technology-lookup-result-empty').show();
            },
            complete: () => {
                KTApp.unblock('#technology-lookup-result-container');
            }
        })
    } else {
        $('#technology-lookup-result-list').hide();
        $('#technology-lookup-result-empty').show();
        toastr.error('URL Format is not valid', 'Error')
        KTApp.unblock('#technology-lookup-result-container');
    }
}

function deleteHistory(_url = null) {
    let histories = [];
    if (_url) {
        histories = localStorage.getItem(TECH_LOOKUP_LOCAL_STORAGE_KEY) || [];
        if (typeof (histories) === 'string' || histories instanceof String) histories = JSON.parse(histories);
        histories = histories.filter((url) => {
            return url !== _url;
        });
    }

    localStorage.setItem(TECH_LOOKUP_LOCAL_STORAGE_KEY, JSON.stringify(histories));
    getHistories();
}

function formatDate(date){
    // Format should be : DD/MM/YYYY HH:ii
    return `${date.getDate()}/${date.getMonth()}/${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}`
}

function checkUrl(url) {
    try {
        let _url = new URL(url)
        return _url.protocol === 'https:' || _url.protocol === 'http:';
    } catch (e) {
        return false
    }
}

function getProtocol(url){
    try {
        let _url = new URL(url)
        return _url.protocol;
    } catch (e) {
        return false
    }
}

$('#input-url').keyup(function () {
    const _url = $(this).val();
    if(checkUrl(_url)){
        $('#empty-url').hide();
        const _protocol = getProtocol(_url)
        if(_protocol === 'https:') {
            $('#unsecure-url').hide();
            $('#secure-url').show();
        } else {
            $('#secure-url').hide();
            $('#unsecure-url').show();
        }
    } else {
        $('#empty-url').show();
        $('#secure-url').hide();
        $('#unsecure-url').hide();
    }
});

$('#local-history').on('click', '.delete-history--btn', function(){
    deleteHistory($(this).data('url'))
}).on('click', '.history--list', function(e){
    if(e.target.classList.contains('delete-history--btn')) return;
    analyzeUrl($(this).data('url'));
})

$('#crawl-btn').click(function(){
    analyzeUrl($('#input-url').val());
})

