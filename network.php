<!-- Support JS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.3/jquery.timeago.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.1/mustache.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

<!-- Pool JS -->
<script src="https://pool.bmorecoin.com/config.js?"></script>
<script src="https://pool.bmorecoin.com/lang/languages.js"></script>
<script src="https://pool.bmorecoin.com/js/common.js"></script>






    <li class="nav-item">
      <span data-tkey="network">Network</span>: <strong><span id="g_networkHashrate"><span data-tkey="na">N/A</span></span></strong>&nbsp;&nbsp; 
    </li>
    <li class="nav-item">
      <span data-tkey="poolProp">Prop Pool</span>: <strong><span id="g_poolHashrate"><span data-tkey="na">N/A</span></span></strong>&nbsp;&nbsp; 
    </li>
    <li class="nav-item">
      <span data-tkey="poolSolo">Solo Pool</span>: <strong><span id="g_poolHashrateSolo"><span data-tkey="na">N/A</span></span></strong>&nbsp;&nbsp; 
    </li>
    <li class="nav-item">
      <span data-tkey="you">You</span>: <strong><span id="g_userHashrate"><span tkey="na">N/A</span></span></strong>&nbsp;&nbsp; 
    </li>
    



<script>
// Store last pool statistics
let lastStats;
let mergedStats = {};
let blockExplorers = {};
let mergedApis = {};

function getUrlVars() {
    let vars = {};
    let location = window.location.href.replace('#worker_stats', '');
    let parts = location.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function getUrlParam(parameter, defaultvalue){
    let urlparameter = defaultvalue;
    if(window.location.href.indexOf(parameter) > -1){
        urlparameter = getUrlVars()[parameter];
        }
    return urlparameter;
}


// Get current miner address
function getCurrentAddress(coin) {
    let address = ''
    if (coin) {
        let urlWalletAddress = getUrlParam(coin, 0);
        address = urlWalletAddress || docCookies.getItem(`mining_address_${coin}`);
    }   
    return address;
}

// Pulse live update
function pulseLiveUpdate(){
   // let stats_update = document.getElementById('statsUpdated');
   // stats_update.style.transition = 'opacity 100ms ease-out';
   // stats_update.style.opacity = 1;
   // setTimeout(function(){
   //     stats_update.style.transition = 'opacity 7000ms linear';
   //     stats_update.style.opacity = 0;
   // }, 500);
}

// Update live informations
function updateLiveStats(data, key) {
    pulseLiveUpdate();
    if (key !== parentCoin) {
        mergedStats[key] = data;
    } else {
        lastStats = data;
        if (lastStats && lastStats.pool && lastStats.pool.totalMinersPaid.toString() == '-1'){
            lastStats.pool.totalMinersPaid = 0;
        }
        updateIndex();
    }
    if (currentPage) currentPage.update(key);
}

// Update global informations
function updateIndex(){
    updateText('coinSymbol', lastStats.config.symbol);
    updateText('g_networkHashrate', getReadableHashRateString(lastStats.network.difficulty / lastStats.config.coinDifficultyTarget) + '/sec');
    updateText('g_poolHashrate', getReadableHashRateString(lastStats.pool.hashrate) + '/sec');
    updateText('g_poolHashrateSolo', getReadableHashRateString(lastStats.pool.hashrateSolo) + '/sec');
    if (lastStats.miner && lastStats.miner.hashrate){
         updateText('g_userHashrate', getReadableHashRateString(lastStats.miner.hashrate) + '/sec');
    }
    else{
        updateText('g_userHashrate', 'N/A');
    }
    updateText('poolVersion', lastStats.config.version);
}

// Load live statistics
function loadLiveStats(reload) {

    
    let apiURL = api + '/stats';
    let address = getCurrentAddress();
    if (address) { apiURL = apiURL + '?address=' + encodeURIComponent(address); }

    if (xhrLiveStats[parentCoin]){
        xhrLiveStats[parentCoin].abort();
    }

    $.get(apiURL, function(data){
        updateLiveStats(data, parentCoin);
        if (!reload) {
            routePage(fetchLiveStats(api, parentCoin));
    }
    });


    Object.keys(mergedApis).some(key => {
        let apiUrl = `${mergedApis[key].api}/stats`
        // if (xhrLiveStats[key]){
        //     xhrLiveStats[key].abort();
        // }

        $.get(apiUrl, function(data){
            updateLiveStats(data, key);
            if (!reload){
         routePage(fetchLiveStats(mergedApis[key].api, key));
        }
        });
    })
}

// Fetch live statistics
let xhrLiveStats = {};
function fetchLiveStats(endPoint, key) {
    let apiURL = endPoint + '/live_stats';
    let address = getCurrentAddress(key);
    if (address) { 
    apiURL = apiURL + '?address=' + encodeURIComponent(address); 
    }

    // if (xhrLiveStats[key] && xhrLiveStats[key].status !== 200){
    //     xhrLiveStats[key].abort();
    // }


    xhrLiveStats[key] = $.ajax({
        url: apiURL,
        dataType: 'json',
        cache: 'false'
    }).done(function(data){
        updateLiveStats(data, key);
    }).always(function(){
        fetchLiveStats(endPoint, key);
    });
}

// Fetch Block and Transaction Explorer Urls
let xhrBlockExplorers;
let xhrMergedApis;
function fetchBlockExplorers() {
    let apiURL = api + '/block_explorers';

    xhrBlockExplorers = $.ajax({
        url: apiURL,
        dataType: 'json',
        cache: 'false'
    }).done(function(data){
        blockExplorers = data;
    })

    apiURL = api + '/get_apis';

    xhrMergedApis = $.ajax({
        url: apiURL,
        dataType: 'json',
        cache: 'false',
    }).done(function(data){
        mergedApis = data;
    loadLiveStats()
    })
}


// Initialize
$(function(){
    // Load current theme if not default
    if (themeCss && themeCss != 'themes/default.css') {
        $("head").append("<link rel='stylesheet' href=" + themeCss + ">");
    }

    // Add support informations to menu
    if (typeof telegram !== 'undefined' && telegram) {
        $('#menu-content').append('<li><a target="_new" href="'+telegram+'"><i class="fa fa-telegram"></i> <span data-tkey="telegram">Telegram group</span></a></li>');
    }
    if (typeof discord !== 'undefined' && discord) {
        $('#menu-content').append('<li><a target="_new" href="'+discord+'"><i class="fa fa-ticket"></i> <span data-tkey="discord">Discord</span></a></li>');
    }
    if (typeof email !== 'undefined' && email) {
        $('#menu-content').append('<li><a target="_new" href="mailto:'+email+'"><i class="fa fa-envelope"></i> <span data-tkey="contactUs">Contact Us</span></a></li>');
    }
    if (typeof facebook !== 'undefined' && facebook) {
        $('#menu-content').append('<li><a target="_new" href="'+facebook+'"><i class="fa fa-facebook"></i> <span data-tkey="facebook">Facebook</span></a></li>');
    }
    if (typeof langs !== 'undefined' && langs) {
        $('#menu-content').append('<div id="mLangSelector"></div>');
    renderLangSelector();
    }


    if (xhrBlockExplorers) 
        xhrBlockExplorers.abort();
    if (xhrMergedApis)
    xhrMergedApis.abort();
    fetchBlockExplorers()

});
</script>
