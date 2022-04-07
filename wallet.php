<?PHP
if ($_SERVER['QUERY_STRING'] != ''){ header('Location: https://www.bmorecoin.com/wallet.php'); die(); }
$date_format = 'F j, Y, g:i a T';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta property="og:image" content="https://www.bmorecoin.com/wallet.png"/>
    <!-- Still Missing og:url, og:type, og:title, og:description, fb:app_id -->
    <title>BMoreCoin | Web Wallet</title>
    <!-- Custom Scripts -->
    <script type="text/javascript" src="bmorecoin.js"></script>
    <script type="text/javascript" src="https://www.google-analytics.com/analytics.js"></script>
    
    <?PHP include_once('content.php'); ?>
    <?PHP include_once('analytics.php'); ?>
   
    <!-- jQuery 3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
    <!-- QR Generator -->
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <!-- QR Reader -->
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
    <script>
      $.ajaxSetup({
        url: "https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php",
        timeout: 120000
      });
    </script>
 
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content="303524778206-pbcvlggrgim3e58is51qnskgl411caro.apps.googleusercontent.com">
  <script>
    function qr2clip(){
      navigator.clipboard.writeText(getCookie('address'));
      alert("Copied your address: " + getCookie('address'));
     }
    function update_main_progress(percent_done){
     var html = '<div class="progress mb-3"><div class="progress-bar bg-gradient-primary" role="progressbar" style="width: ' + percent_done + '%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Loading ' + percent_done + '%</div></div>'; 
      let element = document.getElementById("main_progress");
      element.innerHTML = html;
    }
    function clear_main_progress(){
      let element = document.getElementById("main_progress");
      element.innerHTML = '';
    }
   function hide_show(element) {
    var x = document.getElementById(element);
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function just_hide(element) {
    var x = document.getElementById(element);
    x.style.display = "none";
  }
  function just_show(element) {
    var x = document.getElementById(element);
    x.style.display = "block";
  }
  function setCookie(cname, cvalue, exdays) {
   const d = new Date();
   d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
   let expires = "expires="+d.toUTCString();
   document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
    
    function new_wallet(){
     return new Promise((resolve,reject) => {
         console.log('New Wallet: Start');
         update_main_progress(0);
         let element01 = document.getElementById("wallet");
         element01.innerHTML = '<button type="button" class="btn btn-primary pe-none"><span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Connecting to wallet...</button>';
         $.post(
          "https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php", 
          {
            action: "new_wallet",
            email: getCookie('email')
        },
          function(data) {
            let element99 = document.getElementById("wallet");
            element99.innerHTML = 'Secure Connection Established to Wallet';
            console.log('Wallet: Done');
            resolve();
          }
        );
      });
    }
    
    function get_balance(){
      return new Promise((resolve,reject) => {
         console.log('Balance: Start');
         update_main_progress(60);
         let element02 = document.getElementById("balance");
         element02.innerHTML = '<button type="button" class="btn btn-primary pe-none"><span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading Balance...</button>';
         $.post(
          "https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php", 
          {
            action: "get_balance",
            email: getCookie('email')
        },
          function(data) {
            let element99 = document.getElementById("balance");
            element99.innerHTML = data;
            console.log('Get Balance: Done');
            resolve();
          }
        );
         
      });
    }
 
    function get_transfers(){
      return new Promise((resolve,reject) => {
         let element01 = document.getElementById("transfers");
         update_main_progress(80);
         element01.innerHTML = '<button type="button" class="btn btn-primary pe-none"><span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading Transfers...</button>';
         console.log('Get Transfers: Start');
         
         $.post(
          "https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php", 
          {
            action: "get_transfers",
            email: getCookie('email')
        },
          function(data) {
            let element99 = document.getElementById("transfers");
            element99.innerHTML = data;
            console.log('Get Transfers: Done');
            resolve();
          }
        );
         
      });
    }
    
    function get_address(){
      return new Promise((resolve,reject) => {
         console.log('Get Address: Start');
         update_main_progress(20);
        
         $.post(
          "https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php", 
          {
            action: "get_address",
            email: getCookie('email')
        },
          function(data) {
            setCookie("address", data, 365);
            
            console.log('Get Transfers: Done');
            resolve();
          }
        );
         
      });
    }
    
    function make_qr_code(){
      return new Promise((resolve,reject) => {
        just_show('qr_code_container');
        let element05 = document.getElementById("qrcode_gen");
        element05.innerHTML = "";
        
        update_main_progress(40);
        
        var qrcode_gen = new QRCode(document.getElementById("qrcode_gen"), {
                    text: getCookie('address'),
                    width: 300,
                    height: 300,
                    colorDark : "#000000",
                    colorLight : "#ffffff",
                    correctLevel : QRCode.CorrectLevel.H
                  });
        just_hide('help_container');
        just_show('faucet_container');
        just_show('event_container');
        just_show('qr_reader_container');
        let element06 = document.getElementById("just_address");
        element06.innerHTML = getCookie('address');
        just_show('transfers_container');
        resolve(); 
      });
    }
    
    async function process_one() {
         return new_wallet();
    }

    async function process_two() {
         return get_balance();
    }

    async function process_three() {
         return get_transfers();
    }

    async function process_four() {
         return get_address();
    }
    
    async function process_five() {
         return make_qr_code();
    }

    async function run_processes() {
        let res = null;
        try {
            res = [];
            res.push(await process_one());
            res.push(await process_four());
            res.push(await process_five());
            res.push(await process_two());
            res.push(await process_three());
            console.log('Success >>', res);
            clear_main_progress();
        } catch (err) {
            console.log('Fail >>', res, err);
        }
    } 
    
    
    
    
  function onSignIn(googleUser) {
    // clear, when we change users
    let element01 = document.getElementById("transfers");
    element01.innerHTML = "";
    let element02 = document.getElementById("balance");
    element02.innerHTML = "";
    let element04 = document.getElementById("tx_result");
    element04.innerHTML = "";
    let element05 = document.getElementById("tx_log");
    element05.innerHTML = "";
    var profile = googleUser.getBasicProfile();
    console.log('Google ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Google Name: ' + profile.getName());
    console.log('Google Image URL: ' + profile.getImageUrl());
    console.log('Google Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    setCookie("platform", "Google", 365);
    setCookie("email", profile.getEmail(), 365);
    setCookie("name", profile.getName(), 365);
    setCookie("user_picture", profile.getImageUrl(), 365);
    setCookie("user_id", profile.getId(), 365);
    document.getElementById("ProfilePic").src = profile.getImageUrl();
    console.log('STARTING FIRST RUN');
    run_processes();
    var interval = setInterval(function () { console.log('STARTING NEXT RUN'); run_processes(); }, 180000);
    console.log('Login Starup Completed, updating every 2 minutes.');
  }
    
  function signOut() {
      // clear display
      let element01 = document.getElementById("transfers");
      element01.innerHTML = "";
      let element02 = document.getElementById("balance");
      element02.innerHTML = "";
      let element04 = document.getElementById("tx_result");
      element04.innerHTML = "";
      let element05 = document.getElementById("tx_log");
      element05.innerHTML = "";
      // log out of google
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
       });
      
  }
    
     
    
  </script>
   <!-- SEO Meta Tags -->
    <meta name="description" content="<?PHP echo $SEO_description;?>">
    <meta name="keywords" content="<?PHP echo $SEO_keywords;?>">
    <meta name="author" content="<?PHP echo $SEO_author;?>">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #131022;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Theme mode -->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1000);
        };
      })();
    </script>
  </head>


  <!-- Body -->
  <body>

    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>

    

    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


      <!-- Navbar -->
      <?PHP include_once('navbar.php'); ?>


      <!-- Page content -->
      <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher + Search form -->
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
          <div class="col-lg-5 col-md-4">
            <h1 class="mb-2 mb-md-0">Web Wallet <img name="ProfilePic" id="ProfilePic"></h1>
            <div id='signin' class="g-signin2" data-onsuccess="onSignIn"></div>
             <script>
              document.getElementById("signin").addEventListener("click", function () {
                gtag("event", "login");
              });
            </script>
          </div>
        </div>

        <!-- Blog grid -->
        <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">
          
          
          
          <!-- Item -->
          <div class="col pb-3" style="display:block" id="help_container">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <img src="help.png" class="card-img-top" alt="What to do next">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Instructions</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format); ?></span>
                </div>
                <h3 class="h5 mb-0">
                 You are signed out.</h3>
                 <div>Once signed in you will have a new BALTx address linked to your gmail account. Use anywhere the internet goes. Collect free BALTx from the faucet. Transfer some to a "friend". Use Event Codes to get extra rewards. QR code reader and scanner available.</div>
                <div id='signin2' class="g-signin2" data-onsuccess="onSignIn"></div>
                <script>
              document.getElementById("signin2").addEventListener("click", function () {
                gtag("event", "login");
              });
            </script>
              </div>
              <div class="card-footer py-4">
                  Please click "Sign in" above.
              </div>
            </article>
          </div>
          
          
          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="https://www.bmorecoin.com/wallet.png" class="card-img-top" alt="Current Circulation">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Wallet Balance</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format); ?></span>
                </div>
                <h3 class="h5 mb-0">
                  <div id='balance'>Please Sign in.</div>
                </h3>
              </div>
              <div class="card-footer py-4">
                  <?PHP echo date($date_format); ?>
              </div>
            </article>
          </div>

          
           <!-- Item -->
          <div class="col pb-3" id="transfers_container" style="display:none;">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="send.png" class="card-img-top" alt="Send BALTx">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Send BALTx</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format); ?></span>
                </div>
                <h3 class="h5 mb-0">
                  
                  
              <form action='https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php' id='transfer_form' name='transfer_form' class="d-flex">
                <div class="mb-3">
                  <span class="input-group-text" id="basic-addon3">Address Sending To</span>
                  <input type="text" class="form-control" id="tx_to" name="tx_to" aria-label="tx_to">
                </div>
                
                <div class="mb-3">
                  <span class="input-group-text">BALTx</span>
                  <input type="text" class="form-control" id='tx_amount' name='tx_amount' aria-label="tx_amount">
                </div>
                
                <div class="mb-3">
                  <span class="input-group-text">MixIn</span>
                  <input type="text" class="form-control" id='tx_mixin' name='tx_mixin' aria-label="tx_mixin" value="2">
                </div>
               
                <button class="btn btn-outline-success">Send</button>
               
                </form>
                  <div id='tx_result' style='text-align:right;background-color:yellow;'></div>
                  <div id='tx_log' style='text-align:right;background-color:lightgreen;'></div>
                  <div id='wallet'></div>
                  <script>
                       $("#transfer_form").submit(function(event) {
                        event.preventDefault();
                        $('#tx_result').text('Received... Waiting for TX Confirmation...');
                        var $form = $(this),
                          url = $form.attr('action');
                        var posting = $.post(url, {
                          tx_to: $('#tx_to').val(),
                          tx_amount: $('#tx_amount').val(),
                          tx_mixin: $('#tx_mixin').val(),
                          email: getCookie('email')

                        });

                        /* Alerts the results */
                        posting.done(function(data) {
                          $('#tx_result').text('TX Confirmed');
                          let element99 = document.getElementById("tx_log");
                          element99.innerHTML = data;
                        });
                        posting.fail(function() {
                          $('#tx_result').text('Website Timeout - Reload to Check Transfers');
                        });
                      });
                  </script>
                  
                  
                </h3>
              </div>
              <div class="card-footer py-4">
                  <?PHP echo date($date_format); ?>
              </div>
            </article>
          </div>
          
          
               <!-- Item -->
          <div class="col pb-3" style='display:none;' id='faucet_container'>
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <img src="faucet.png" class="card-img-top" alt="BALTx Faucet">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">BALTx Faucet</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format); ?></span>
                </div>
                <h3 class="h5 mb-0">
                 1. <a href="https://twitter.com/bmorecoin?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @bmorecoin</a><br>
                 2. <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=This%20is%20going%20to%20be%20a%20great%20day,%20$BALTx%20#Baltimore%20#Blockchain%20#faucet%20[ADD%20YOUR%20BALTx%20ADDRESS%20HERE]" data-size="large">Tweet</a>
                 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                 
                </h3>
              </div>
              <div class="card-footer py-4">
                  Watch the Blockchain for your 1,000 BALTx after you tweet, it happens automatically throughout the day, so make sure you get it right.
              </div>
            </article>
          </div>
          
             <!-- Item -->
          <div class="col pb-3" style='display:none;' id='event_container'>
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <img src="event.png" class="card-img-top" alt="BALTx Event Rewards">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">BALTx Event Rewards</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format); ?></span>
                </div>
                <h3 class="h5 mb-0">
                 
                  <form action='https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php' id='event_form' name='event_form' class="d-flex">
                    <input type="text" class="form-control" id='event_code' name='event_code' aria-label="event_code">
                   <button class="btn btn-outline-success">Use Event Code</button>
                  </form>
                  
                  <div id='event'></div>
                  
                  <script>
                       $("#event_form").submit(function(event) {
                        event.preventDefault();
                        $('#event').text('Received... Waiting for TX Confirmation...');
                        var $form = $(this),
                          url = $form.attr('action');
                        var posting = $.post(url, {
                          address: getCookie('address'),
                          action: 'event',
                          event_code: $('#event_code').val(),
                          email: getCookie('email')

                        });

                        /* Alerts the results */
                        posting.done(function(data) {
                          $('#event').text('TX Confirmed');
                          let element99 = document.getElementById("event");
                          element99.innerHTML = data;
                        });
                        posting.fail(function() {
                          $('#event').text('Website Timeout - Reload to See Event Transfer');
                        });
                      });
                  </script>
                </h3>
              </div>
              <div class="card-footer py-4">
                  Event Codes Range in Amount of BALTx Rewarded
              </div>
            </article>
          </div>
          
          <!-- Item -->
          <div class="col pb-3" style="display:none" id="qr_code_container">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <div onClick="qr2clip()" id="qrcode_gen"></div>
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Public Address</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format); ?></span>
                </div>
                <h3 onClick="qr2clip()" class="h5 mb-0">
                  QR Code of Your Address for Receiving BALTx<br>
                  ( Click to copy )
                </h3>
              </div>
              <div class="card-footer py-4">
                  If you have trouble scanning try maximum brightness in light mode.
              </div>
            </article>
          </div>
  
          
          
            <!-- Item -->
          <div class="col pb-3" style="display:none" id="qr_reader_container">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                  <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <a id="btn-scan-qr">
                  <button type="button" class="btn btn-success">Access Camera</button>
                <a/>
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">QR Code Reader</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format); ?></span>
                </div>
                <h3 class="h5 mb-0">
                  Click the button above to access the camera to scan a QR code, and enter it in the Send BALTx form above.
                  <canvas hidden="" id="qr-canvas"></canvas>
                  <div id="qr-result" hidden="">
                    <b>Address Detected and Entered:</b> <span id="outputData"></span>
                  </div>
                  <script>
                    
                    var qrcode = window.qrcode;

                    const video = document.createElement("video");
                    const canvasElement = document.getElementById("qr-canvas");
                    const canvas = canvasElement.getContext("2d");

                    const qrResult = document.getElementById("qr-result");
                    const outputData = document.getElementById("outputData");
                    
                    
                    
                    const btnScanQR = document.getElementById("btn-scan-qr");

                    let scanning = false;

                    qrcode.callback = res => {
                      if (res) {
                        outputData.innerText = res;
                        scanning = false;
                        document.querySelector('input[name="tx_to"]').value = res;
                        video.srcObject.getTracks().forEach(track => {
                          track.stop();
                        });

                        qrResult.hidden = false;
                        canvasElement.hidden = true;
                        btnScanQR.hidden = false;
                      }
                    };

                    btnScanQR.onclick = () => {
                      navigator.mediaDevices
                        .getUserMedia({ video: { facingMode: "environment" } })
                        .then(function(stream) {
                          scanning = true;
                          qrResult.hidden = true;
                          btnScanQR.hidden = true;
                          canvasElement.hidden = false;
                          video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
                          video.srcObject = stream;
                          video.play();
                          tick();
                          scan();
                        });
                    };

                    function tick() {
                      canvasElement.height = video.videoHeight;
                      canvasElement.width = video.videoWidth;
                      canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

                      scanning && requestAnimationFrame(tick);
                    }

                    function scan() {
                      try {
                        qrcode.decode();
                      } catch (e) {
                        setTimeout(scan, 300);
                      }
                    }

                    
                    </script>
          
                </h3>
              </div>
              <div class="card-footer py-4">
                 <?PHP echo date($date_format); ?>
              </div>
            </article>
          </div>
          
          
     
  
          
          
                    
          
          
        </nav>
      </section>
        
        
        <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">
          <div id='just_address'></div>
          <div id='transfers'></div>
        </section>

      <!--
      <section class="py-5 bg-secondary">
        <div class="container py-md-3 py-lg-5">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11">
              <div id='transfers'></div>
            </div>
          </div>
        </div>
      </section>
        -->
        
      <!-- Subscription CTA -->
      <section class="py-5 bg-secondary">
        <div class="container py-md-3 py-lg-5">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11">
              <h2 class="h1 d-md-inline-block position-relative mb-md-5 mb-sm-4 text-sm-start text-center">
                Don't Want to Miss Anything?
  
                <!-- Arrow shape -->
                <svg class="d-md-block d-none position-absolute top-0 ms-4 ps-1" style="left: 100%;" xmlns="http://www.w3.org/2000/svg" width="65" height="68" fill="#6366f1"><path d="M53.9527 51.0012c8.396-10.5668 2.0302-26.0134-11.7481-26.7511-.6899-.0646-1.4612.0015-2.1258.0431.1243 9.0462-4.1714 18.8896-11.5618 21.3814-6.6695 2.2133-10.3337-4.2224-7.5813-9.676 3.2966-6.4755 9.103-11.8504 16.1678-13.8189-.5654-5.6953-3.3436-10.7672-9.485-12.48517C17.2678 6.8204 6.49364 16.3681 4.98841 26.127c-.09276 1.0297-1.68569.9497-1.59293-.0801C3.98732 12.9139 19.7395 2.55212 31.9628 8.5787c4.7253 2.3813 7.2649 7.3963 7.9368 13.067 7.4237-.9311 14.5154 3.3683 18.3422 9.5422 4.3988 7.1623 2.3584 15.1401-2.6322 21.1108-.7826.9653-2.3331-.3572-1.6569-1.2975zM26.7754 32.1845c-1.9411 2.2411-4.076 5.0872-4.3542 8.1764-.3036 2.9829 3.7601 3.0525 5.4905 2.7645 2.1568-.3863 3.7221-2.3164 4.8863-4.0419 2.6228-3.6308 4.3657-9.0752 4.4844-14.2563-4.0808 1.279-7.6514 4.2327-10.507 7.3573zm24.6311 25.592c-.7061-2.9738-1.2243-6.1031-1.1591-9.143.0423-1.242 1.767-1.0805 1.8313.1372.1284 2.435.815 4.8532 1.4764 7.1651l4.1619-1.4098c1.0153-.4586 2.4373-1.5714 3.6544-1.1804.6087.1954.7347.7264.6475 1.3068-.2302 1.3976-2.4683 1.9147-3.5901 2.398-1.8429.7619-3.6293 1.2865-5.5477 1.7298-.6391.1476-1.3233-.3665-1.4746-1.0037z"/></svg>
              </h2>
  
              <?PHP include_once('subscribe_large.php'); ?>
  
              <div class="form-text fs-sm text-sm-start text-center">
                * Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>.
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <?PHP include_once('footer.php'); ?>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>
