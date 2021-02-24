const KEYWORD_RESEARCH_LOCAL_STORAGE_KEY = 'keyword-research-history'
var jqueryRequest = undefined;
var dataResult = undefined;
var counter = 1;

const HistoryTemplate = (keyword, date) => `
<li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px history--list" data-keyword="${keyword}">
  <div class="d-flex justify-content-between">
    <div class="local-collection-title">${keyword}</div>
    <div class="d-flex align-items-center">
      <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at ${date}"></i>
      <i class='bx bxs-x-circle bx-sm text-grey delete-history--btn' data-url="${keyword}"></i>
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

const HistoryTemplateMobile = (keyword, date) => `
<div class="custom-card py-5 px-3 history--list" data-url="${keyword}">
<div class="d-flex align-items-center justify-content-between">
  <div class="local-collection-title">${keyword}</div>
  <div class="d-flex align-items-center">
    <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="${date}"></i>
    <i class='bx bxs-x-circle bx-sm text-grey delete-history--btn' data-url="${keyword}"></i>
  </div>
</div>
</div>`;

const EmptyHistoryTemplateMobile = () => `
<div class="custom-card py-5 px-3">
<div class="d-flex justify-content-center text-center">
  <span>This is your first impressions, no history yet!</span>
</div>
</div>`;

function renderAllData(data){
    $('#external-link-list').empty();
    $('#internal-link-list').empty();
    $('#show-more-internal').addClass('d-flex').show();
    $('#show-more-external').addClass('d-flex').show();
    $('#empty-container').hide();
    $('#analyzer-container').show();

    createChart(
        data.internal_links.value,
        data.external_links.value,
        data.nofollow_links.value,
        data.dofollow_links.value
    )
    renderStatsValue(data);
    $('#external-links-value-tab').text(`External Links (${data.external_links.value})`);
    $('#internal-links-value-tab').text(`Internal Links (${data.internal_links.value})`);
    // counter = 1;
    renderListOfLinks( 10);
}

function createChart(){
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Feb 20", "Mar 20", "Apr 20", "May 20", "Jun 20", "Jul 20", "Aug 20", "Sep 20", "Oct 20", "Nov 20", "Dec 20", "Jan 21"],
            datasets: [{
                label: 'Search Volume',
                data: [1600, 1900, 1600, 1000, 880, 1000, 2400, 1900, 1600, 1300, 1600, 1600],
                borderColor: '#18A0FB',
                backgroundColor: '#18A0FB',
                pointBackgroundColor: '#fff',
                pointBorderColor: '#18A0FB',
                fill: false,
                lineTension: 0,
                borderWidth: 1,
                hidden: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
                align: 'start',
                padding: 20
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [ {
                    display:true,
                    ticks: {
                        maxTicksLimit: 7,
                    },
                }]
            },
            tooltips: {
                backgroundColor: '#fff',
                cornerRadius: 0,
                displayColors: false,
                titleFontFamily: "'Roboto', sans-serif",
                titleFontColor: '#2A2F33',
                bodyAlign: 'center',
                bodyFontFamily: "'Roboto', sans-serif",
                bodyFontColor: '#2A2F33',
                bodyFontStyle: 'normal',
                position: 'average',
                intersect: false,
            }
        }
    });
}

function research(keyword,market) {
    var [location_code , language_code] = market.split(':');
    // if (checkKeyword(keyword)) {
        jqueryRequest = $.get({
            url: KEYWORD_RESEARCH_API_URL,
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'location_code': location_code,
                'language_code': language_code,
                'keyword': keyword
            },
            beforeSend: () => {
                updateProgressBar(50);
                $('#progress-stop-message').hide();
                $('#progress-start-message').show();
                $('#progress-finish-message').hide();
                $('#cancel-request-btn')
                    .removeClass('btn-cancel-disabled')
                    .addClass('btn-cancel')
                    .removeAttr('disabled');
                updateProgressBar(20);
            },
            success: (res) => {
                if (res.statusCode === 200) {
                    // Render stats value
                    dataResult = res.data;
                    // console.log(dataResult);
                    // addHistory(_url, res.data)
                    renderAllData(res.data);
                } else {
                    console.log(res);
                    toastr.error(res.message, 'Error API');
                }
            },
            error: (err) => {
                if (err.responseJSON) {
                    toastr.error(err.responseJSON.message, 'Error API');
                } else {
                    toastr.error('Canceled', 'Error');
                }
            },
            complete: () => {
                $('#progress-start-message').hide();
                $('#progress-finish-message').show();
                updateProgressBar(100);
                $('#cancel-request-btn')
                    .removeClass('btn-cancel')
                    .addClass('btn-cancel-disabled')
                    .attr('disabled', 'disabled')
            }
        })
    // } else {
    //     toastr.error('URL Format is not valid', 'Error')
    // }
}

function checkKeyword(keyword) {
    try {
        let _url = new URL(url)
        return _url.protocol === 'https:' || _url.protocol === 'http:';
    } catch (e) {
        console.log(e)
        return false
    }
}

function updateProgressBar(value) {
    $('#progress-bar-loader')
        .css('width', `${value}%`)
        .attr('aria-valuenow', value);
}

$('#goResearch').click(function () {
    research($('#kwsearch').val(), $('#market option:selected').val());
})

createChart(0, 0, 0, 0);



