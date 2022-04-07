<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BMoreCoin | Faucet Instructions</title>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="bmorecoin.js"></script>
    <?PHP include_once('content.php'); ?>
    <?PHP include_once('analytics.php'); ?>
    
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
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css"/>

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


      <!-- Breadcrumb -->
      <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center justify-content-md-start mb-0">
          <li class="breadcrumb-item">
            <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">BALTx Faucet</li>
        </ol>
      </nav>


      <!-- Page title + Image -->
      <section class="container pb-5 mb-md-3 mb-lg-5">
        <div class="row align-items-center">
          <div class="col-xl-5 col-md-6 offset-xl-1 order-md-2 text-center text-md-start mb-3 mb-sm-0">
            <h2 class="h4 text-primary mb-2">BALTx Faucet</h2>
            <h1 class="mb-4">Faucet Instructions</h1>
            <p class="fs-xl d-md-none d-lg-block pb-2 pb-md-4 mb-lg-3">1. <a href="https://twitter.com/bmorecoin?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @bmorecoin</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
            <p class="fs-xl d-md-none d-lg-block pb-2 pb-md-4 mb-lg-3">2. Tweet "I just claimed my daily 1,000 $BALTx, #Baltimore #Blockchain #faucet" <a class="twitter-share-button"
                        href="https://twitter.com/intent/tweet?text=I%20just%20claimed%20my%20daily%201,000%20$BALTx,%20#Baltimore%20#Blockchain%20#faucet%20[ADD%20YOUR%20BALTx%20ADDRESS%20HERE]"
                        data-size="large">
                      Tweet</a></p>
            <p class="fs-xl d-md-none d-lg-block pb-2 pb-md-4 mb-lg-3">3. Click to confirm and claim your 1,000 BALTx for the day!</p>
            <button type="button" class="btn btn-primary shadow-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              All Done - Claim 1,000 BALTx
            </button>
          </div>
          <div class="col-md-6 order-md-1">
            <img src="assets/img/services/single/dashboard.png" alt="Image">
          </div>
        </div>
      </section>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Checking Twitter...</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action='https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php' id='faucet_form' name='faucet_form' class="d-flex">
                   <button id='faucet_button' class="btn btn-outline-success">Claim 1,000 BALTx</button>
                    <script>
              document.getElementById("faucet_button").addEventListener("click", function () {
                gtag("event", "earn_virtual_currency", {
                  virtual_currency_name: "BALTx",
                  value: 1000
                });
              });
            </script>
                  </form>
                  
                  <div id='faucet'></div>
                  
                  <script>
                       $("#faucet_form").submit(function(event) {
                        event.preventDefault();
                        $('#faucet').text('Received... Waiting for TX Confirmation...');
                        var $form = $(this),
                          url = $form.attr('action');
                        var posting = $.post(url, {
                          address: getCookie('address'),
                          action: 'faucet',
                          email: getCookie('email')

                        });

                        /* Alerts the results */
                        posting.done(function(data) {
                          $('#faucet').text('TX Confirmed');
                          let element99 = document.getElementById("faucet");
                          element99.innerHTML = data;
                        });
                        posting.fail(function() {
                          $('#faucet').text('Website Timeout - Reload to See Transfer');
                        });
                      });
                  </script>
            <?PHP
            function getJson($url){
                $curl = curl_init();
                curl_setopt ($curl, CURLOPT_URL, $url);
                curl_setopt ($curl, CURLOPT_USERAGENT, sprintf("BMorCoin/%d.0",rand(40,500)));
                curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt ($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . getenv('bearer_token')));
                $json = curl_exec ($curl);
                curl_close ($curl);
                $array = json_decode($json, true);
                return $array;
            }
           
              echo "
            Checking Followers...
            ";
            $follows = getJson("https://api.twitter.com/2/users/1486503862634749957/followers");
            print_r($follows);
            
              echo "
            Checking Recent Tweets...
            ";
            $tweets = getJson("https://api.twitter.com/2/tweets/search/recent?query=bmorecoin%20faucet");
            print_r($tweets);
            echo "
            Details of Recent Tweet...
            ";  
            $tweet = getJson("https://api.twitter.com/2/tweets/1510828042037379076?user.fields=name%2Cprofile_image_url%2Clocation%2Cdescription&tweet.fields=&expansions=author_id&place.fields=geo&media.fields=");
            print_r($tweet);
            echo "</pre>";
            ?></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Done</button>
            </div>
          </div>
        </div>
      </div>

      
      
      <!-- Services -->
      <section class="container pb-5 mb-md-3 mb-lg-5">
        <div class="row justify-content-center text-center">
          <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
            <h2 class="h1 mb-4">Detailed Faucet Instruction</h2>
            <p class="text-muted mb-3 mb-lg-4">You are the future, Thanks for Supporting BMoreCoin.</p>
          </div>
        </div>
        

        <!-- Swiper slider -->
        <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 8,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "0": {
              "slidesPerView": 1
            },
            "560": {
              "slidesPerView": 2
            },
            "992": {
              "slidesPerView": 3
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <div class="d-table position-relative p-3 mb-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-secondary rounded-circle"></span>
                    <div class="text-primary position-relative zindex-5">
                      <svg class="" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"><g clip-path="url(#A)" fill="currentColor"><path d="M29.699 18.609a5.87 5.87 0 0 0 0-8.286c-2.29-2.29-5.996-2.29-8.286 0a5.87 5.87 0 0 0 0 8.286c2.29 2.29 5.996 2.29 8.286 0zM23.07 11.98c1.374-1.374 3.598-1.374 4.972 0a3.52 3.52 0 0 1 0 4.972c-1.374 1.374-3.598 1.374-4.972 0a3.52 3.52 0 0 1 0-4.972zM.054 38.476a1.17 1.17 0 0 0 1.467 1.471c1.017-.318 10.012-3.172 12.434-5.594.649-.649 1.177-1.382 1.567-2.167a1.15 1.15 0 0 0 .602-.124l2.839-1.427.43 5.754c.002.875.925 1.433 1.699 1.044.292-.194 3.324-1.302 5.46-4.766 1.186-1.923 1.805-4.134 1.805-6.394v-.805c1.764-1.141 3.406-2.36 4.752-3.66 5.822-5.621 7.137-12.54 6.856-20.64C39.944.553 39.45.059 38.834.037c-8.098-.281-15.018 1.033-20.64 6.856-1.274 1.32-2.471 2.868-3.593 4.593h-.975c-4.561 0-8.803 2.607-10.879 6.762l-.281.56a1.17 1.17 0 0 0 1.044 1.699c.665.002-.361-.045 5.868.512l-1.437 2.86a1.17 1.17 0 0 0-.124.633c-.777.389-1.504.913-2.147 1.557C3.247 28.487.374 37.461.054 38.476zm15.765-8.889l-5.407-5.406 1.106-2.208 6.509 6.509-2.208 1.106zm5.798 4.883l-.395-4.977A102.77 102.77 0 0 0 26 26.911c-.197 3.096-1.816 5.873-4.383 7.559zM37.65 2.35c.039 2.56-.109 4.825-.466 6.863a7.51 7.51 0 0 1-6.397-6.397c2.037-.357 4.303-.505 6.862-.466zM19.88 8.519c2.455-2.543 5.194-4.229 8.616-5.187a9.84 9.84 0 0 0 2.771 5.401 9.84 9.84 0 0 0 5.401 2.771c-.959 3.422-2.644 6.161-5.187 8.616-2.837 2.74-7.2 5.175-11.251 7.249l-7.598-7.599c2.074-4.051 4.509-8.413 7.249-11.251zM5.415 18.297c1.715-2.623 4.567-4.26 7.738-4.409-.939 1.61-1.819 3.271-2.641 4.879l-5.096-.47zm3.905 8.106l1.32 1.32-2.486 2.486a1.172 1.172 0 1 0 1.657 1.657l2.486-2.486 1.32 1.32c-.281.723-.729 1.404-1.32 1.994-1.343 1.343-6.052 3.17-9.274 4.286 1.122-3.215 2.957-7.913 4.302-9.257a5.81 5.81 0 0 1 1.994-1.32zm10.415-6.138a1.172 1.172 0 1 0-1.657 1.657 1.172 1.172 0 1 0 1.657-1.657z"/></g><defs><clipPath id="A"><path fill="#fff" d="M0 0h40v40H0z"/></clipPath></defs></svg>
                    </div>
                  </div>
                  <h3 class="h4">Step 1</h3>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                      <a href="https://twitter.com/bmorecoin?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @bmorecoin</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <div class="d-table position-relative p-3 mb-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-secondary rounded-circle"></span>
                    <div class="text-primary position-relative zindex-5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"><path d="M38.828 27.031h-1.172V7.109a3.52 3.52 0 0 0-3.516-3.516H5.859c-1.938 0-3.508 1.577-3.508 3.516v19.922H1.18A1.18 1.18 0 0 0 0 28.203v2.344a5.87 5.87 0 0 0 5.859 5.859H34.14A5.87 5.87 0 0 0 40 30.547v-2.344a1.17 1.17 0 0 0-1.172-1.172zM4.688 7.109c0-.646.526-1.172 1.172-1.172h28.281a1.18 1.18 0 0 1 1.18 1.172v19.922H27.11c-.647 0-1.164.525-1.164 1.172v.002 1.17H14.063v-1.172a1.17 1.17 0 0 0-1.172-1.172H4.688V7.109zm32.977 23.438a3.53 3.53 0 0 1-3.524 3.516H5.859a3.52 3.52 0 0 1-3.516-3.516v-1.172h9.383v1.172c0 .647.517 1.172 1.164 1.172h14.219a1.17 1.17 0 0 0 1.172-1.172v-1.172h9.383v1.172zm-4.696-7.031a1.17 1.17 0 0 0-1.172-1.172H11.049l6.604-6.549 3.862 3.862a1.17 1.17 0 0 0 1.651.006l4.765-4.697c.46.222.977.347 1.522.347a3.52 3.52 0 0 0 3.516-3.516 3.52 3.52 0 0 0-3.516-3.516 3.52 3.52 0 0 0-3.516 3.516c0 .539.122 1.051.34 1.508l-3.928 3.872-3.865-3.865a1.17 1.17 0 0 0-1.654-.004l-7.456 7.394V9.453a1.172 1.172 0 0 0-2.344 0v14.062c0 .653.534 1.172 1.172 1.172h.001 23.593a1.17 1.17 0 0 0 1.172-1.172zm-3.516-12.891c.646 0 1.172.526 1.172 1.172s-.526 1.172-1.172 1.172-1.172-.526-1.172-1.172.526-1.172 1.172-1.172z"/></svg>
                    </div>
                  </div>
                  <h3 class="h4">Step 2</h3>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                      Your going to want to Tweet the following message, once a day, don't forget to add your address to the tweet.
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                      "I just claimed my daily 1,000 $BALTx, #Baltimore #Blockchain #faucet [ADD YOUR BALTx ADDRESS HERE]"
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                      <a class="twitter-share-button"
                        href="https://twitter.com/intent/tweet?text=I%20just%20claimed%20my%20daily%201,000%20$BALTx,%20#Baltimore%20#Blockchain%20#faucet%20[ADD%20YOUR%20BALTx%20ADDRESS%20HERE]"
                        data-size="large">
                      Tweet</a>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto py-3">
              <div class="card border-0 shadow-sm card-hover card-hover-primary h-100 mx-2">
                <div class="card-body">
                  <div class="d-table position-relative p-3 mb-3">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-secondary rounded-circle"></span>
                    <div class="text-primary position-relative zindex-5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"><path d="M36.484 1.25H3.516A3.52 3.52 0 0 0 0 4.766v23.437a3.52 3.52 0 0 0 3.516 3.516h10.171l-1.562 4.687H8.281a1.172 1.172 0 1 0 0 2.344h23.438a1.172 1.172 0 1 0 0-2.344h-3.843l-1.562-4.687h10.171A3.52 3.52 0 0 0 40 28.203V4.766a3.52 3.52 0 0 0-3.516-3.516zm-21.89 35.156l1.563-4.687h7.686l1.563 4.687H14.595zm23.062-8.203c0 .646-.526 1.172-1.172 1.172H3.516c-.646 0-1.172-.526-1.172-1.172v-1.172h35.312v1.172zM12.78 17.952l-1.066-1.066 1.657-1.657 1.066 1.066a1.17 1.17 0 0 0 1.424.181c.659-.388 1.362-.681 2.089-.869a1.17 1.17 0 0 0 .878-1.134V12.97h2.344v1.503a1.17 1.17 0 0 0 .878 1.134 8.13 8.13 0 0 1 2.089.87 1.17 1.17 0 0 0 1.424-.181l1.066-1.066 1.657 1.657-1.066 1.066a1.17 1.17 0 0 0-.181 1.424 8.09 8.09 0 0 1 .869 2.09 1.17 1.17 0 0 0 1.134.878h1.503v2.344h-4.806a5.88 5.88 0 0 0 .118-1.172A5.87 5.87 0 0 0 20 17.656a5.87 5.87 0 0 0-5.859 5.859 5.88 5.88 0 0 0 .118 1.172H9.453v-2.344h1.503a1.17 1.17 0 0 0 1.135-.878c.188-.728.481-1.431.869-2.09a1.17 1.17 0 0 0-.181-1.424zm10.736 5.563a3.53 3.53 0 0 1-.201 1.172h-6.628a3.53 3.53 0 0 1-.201-1.172A3.52 3.52 0 0 1 20 20a3.52 3.52 0 0 1 3.516 3.516zm14.141 1.172h-4.766v-3.516A1.17 1.17 0 0 0 31.719 20h-1.81a10.5 10.5 0 0 0-.418-1.003l1.282-1.282a1.17 1.17 0 0 0 0-1.657l-3.314-3.315a1.17 1.17 0 0 0-1.657 0l-1.282 1.282c-.328-.157-.663-.296-1.003-.418v-1.811a1.17 1.17 0 0 0-1.172-1.172h-4.688a1.17 1.17 0 0 0-1.172 1.172v1.811a10.3 10.3 0 0 0-1.003.418L14.2 12.743a1.17 1.17 0 0 0-1.657 0l-3.314 3.315a1.17 1.17 0 0 0 0 1.657l1.281 1.282A10.46 10.46 0 0 0 10.092 20H8.281a1.17 1.17 0 0 0-1.172 1.172v3.516H2.344V4.766c0-.646.526-1.172 1.172-1.172h32.969c.646 0 1.172.526 1.172 1.172v19.922zM31.719 5.938a3.52 3.52 0 0 0-3.516 3.516 3.52 3.52 0 0 0 3.516 3.516 3.52 3.52 0 0 0 3.516-3.516 3.52 3.52 0 0 0-3.516-3.516zm0 4.688c-.646 0-1.172-.526-1.172-1.172s.526-1.172 1.172-1.172 1.172.526 1.172 1.172-.526 1.172-1.172 1.172z"/></svg>
                    </div>
                  </div>
                  <h3 class="h4">Step 3</h3>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                       You Can Claim 1,000 BALTx in a Web Based Wallet
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                       You Can Claim 1,000 BALTx in a GUI Wallet
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                       You Can Claim 1,000 BALTx in a CLI Wallet
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bx bx-check-circle fs-xl text-muted me-2"></i>
                      <button type="button" class="btn btn-primary shadow-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Check Twitter
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative d-lg-none pt-2 pt-sm-3 mt-4"></div>
        </div>
      </section>


      <!-- Customers -->
      <section class="container pb-5 mb-md-4 mb-lg-5">
        <h2 class="h1 text-center pb-4">Local to Digital</h2>
        <div class="position-relative pt-md-5 mt-md-n5">
          <div class="position-absolute top-50 start-0 w-100 text-center mt-sm-n5">
            <h3 class="h2 mx-auto mt-n5" style="max-width: 572px;">
              At the heart of it all, we <span class="text-primary">Shop Local</span> with a current demand for digital <span class="text-primary">Rewards</span>. So here we are, the <span class="text-primary">Charm</span> you are looking for!
            </h3>
          </div>
          <img src="assets/img/services/single/map.png" alt="Map">
        </div>
      </section>




        
      
          <!-- Pattern -->
          <div class="position-absolute end-0 bottom-0 text-primary">
            <svg width="416" height="444" viewBox="0 0 416 444" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M240.875 615.746C389.471 695.311 562.783 640.474 631.69 504.818C700.597 369.163 645.201 191.864 496.604 112.299C348.007 32.7335 174.696 87.5709 105.789 223.227C36.8815 358.882 92.278 536.18 240.875 615.746ZM208.043 680.381C388.035 776.757 605.894 713.247 694.644 538.527C783.394 363.807 709.428 144.04 529.436 47.6636C349.443 -48.7125 131.584 14.7978 42.8343 189.518C-45.916 364.238 28.0504 584.005 208.043 680.381Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M262.68 572.818C382.909 637.194 526.686 594.13 584.805 479.713C642.924 365.295 595.028 219.601 474.799 155.224C354.57 90.8479 210.793 133.912 152.674 248.33C94.5545 362.747 142.45 508.442 262.68 572.818ZM253.924 590.054C382.526 658.913 538.182 613.536 601.593 488.702C665.004 363.867 612.156 206.847 483.554 137.988C354.953 69.129 199.296 114.506 135.886 239.341C72.4752 364.175 125.323 521.195 253.924 590.054Z" fill="currentColor"/></svg>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <?PHP include_once('footer.php');?>


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
      <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
      <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>
