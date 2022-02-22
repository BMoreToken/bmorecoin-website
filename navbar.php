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

<!-- Navbar -->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
<header class="header navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
  <div class="container px-3">
    <!-- API loading bar -->
    <div id='main_progress'></div>
    <a href="index.php" class="navbar-brand pe-3">
      <img src="assets/img/logo.svg" width="47" alt="BMoreCoin">
      BMoreCoin
    </a>
    <div id="navbarNav" class="offcanvas offcanvas-end">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-tkey="network">Net: <strong><span id="g_networkHashrate"><span data-tkey="na">N/A</span></span></strong></a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" data-tkey="poolProp">Prop: <strong><span id="g_poolHashrate"><span data-tkey="na">N/A</span></span></strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-tkey="poolSolo">Solo: <strong><span id="g_poolHashrateSolo"><span data-tkey="na">N/A</span></span></strong></a> 
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-current="page">Main Menu</a>
            <div class="dropdown-menu">
              <div class="d-lg-flex pt-lg-3">
                <div class="mega-dropdown-column">

                  <h6 class="px-3 mb-2">BMoreCoin Information</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="https://www.bmorecoin.com/tokenomics.php" class="dropdown-item py-1">Tokenomics</a></li>
                    <li><a href="https://www.bmorecoin.com/explorer.php" class="dropdown-item py-1">Block Explorer</a></li>
                    <li><a href="https://www.bmorecoin.com/explorer.php" class="dropdown-item py-1">About The BMoreToken Team</a></li>

                  </ul>

                   <h6 class="px-3 mb-2">BMoreCoin Wallets</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="https://www.bmorecoin.com/wallet.php" class="dropdown-item py-1">Web Wallet</a></li>
                    <li><a href="https://www.bmorecoin.com/explorer.php" class="dropdown-item py-1">Graphical Wallet</a></li>
                    <li><a href="https://github.com/BMoreToken/bmorecoin/releases" class="dropdown-item py-1">Command Line Wallet and Miner</a></li>
                    <li><a target="_Blank" href="https://xmrig.com/miner" class="dropdown-item py-1">XMRig Mining Software</a></li>
                  </ul>    

                  <h6 class="px-3 mb-2">Social Media</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="https://www.facebook.com/groups/bmoretoken" class="dropdown-item py-1">Facebook</a></li>
                    <li><a href="https://www.youtube.com/channel/UCqCVh7yCV34dDWF-TfFKc_Q" class="dropdown-item py-1">Youtube</a></li>
                    <li><a href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=BMoreToken" class="dropdown-item py-1">BMoreToken Twitter</a></li>
                    <li><a href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=BMoreCoin" class="dropdown-item py-1">BMoreCoin Twitter</a></li>
                    <li><a href="https://medium.com/bmoretoken" class="dropdown-item py-1">Medium</a></li>
                    <li><a href="https://www.reddit.com/r/BMoreToken/" class="dropdown-item py-1">Reddit</a></li>
                    <li><a href="https://www.instagram.com/bmoretoken/" class="dropdown-item py-1">Instagram</a></li>
                  </ul>

                </div>
                <div class="mega-dropdown-column">
                  <h6 class="px-3 mb-2">Chat</h6>
                  <ul class="list-unstyled mb-3">
                     <li><a href="<?PHP echo $discord_link;?>" class="dropdown-item py-1">Discord</a></li>
                    <li><a href="https://t.me/joinchat/GrZyx823mpMWzeqk" class="dropdown-item py-1">Telegram</a></li>    
                  </ul>
                  <h6 class="px-3 mb-2">Mining</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="services.html" class="dropdown-item py-1">Solo Mining</a></li>
                    <li><a href="services-single.html" class="dropdown-item py-1">Pool Mining</a></li>
                  </ul>
                </div>
                <div class="mega-dropdown-column">
                  <h6 class="px-3 mb-2">E-Mail</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="https://us14.list-manage.com/contact-form?u=daff4232598a1a5d3f812b4a7&form_id=c206758d11ddc0b49bdec83f2aa68a80" class="dropdown-item py-1">E-Mail Us</a></li>
                    <li><a href="http://eepurl.com/hUeQVD" class="dropdown-item py-1">Mailing List Signup</a></li>
                  </ul>
                  <h6 class="px-3 mb-2">How to Help</h6>
                  <ul class="list-unstyled">
                    <li><a href="404-v1.html" class="dropdown-item py-1">Spread The Word</a></li>
                    <li><a href="https://github.com/BMoreToken" class="dropdown-item py-1">Contribute Code</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>


        </ul>
      </div>
      <div class="offcanvas-footer border-top">
        <a href="#" onclick="getWallet()" class="btn btn-primary w-100">
          <i class="bx bx-cart fs-4 lh-1 me-1"></i>
          &nbsp;Download now
        </a>
      </div>      
    </div>
    <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
      <input type="checkbox" class="form-check-input" id="theme-mode">
      <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
      <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
    </div>
    <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="#" onclick="getWallet()" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex">
      <i class="bx bx-cart fs-5 lh-1 me-1"></i>
      &nbsp;Download now
    </a>
  </div>
</header>


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
         //updateText('g_userHashrate', getReadableHashRateString(lastStats.miner.hashrate) + '/sec');
    }
    else{
        //updateText('g_userHashrate', 'N/A');
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

