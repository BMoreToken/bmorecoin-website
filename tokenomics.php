<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BMoreCoin | Tokenomics</title>
    <!-- Custom Scripts -->
    <script type="text/javascript" src="bmorecoin.js"></script>
    <?PHP 
     include_once('content.php'); 
     include_once('analytics.php');
     $date_format = 'F j, Y';
    ?>
    <!-- jQuery 3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- SEO Meta Tags -->
    <meta name="description" content="BMoreCoin - Multipurpose Cryptocurrency">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="BMoreCoin">

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
<script>
  $.getJSON('https://www.mdwestserve.com/BMoreCoin/tokenomics.php', function(data) {
      // JSON result in `data` variable
      let element99 = document.getElementById("debug");
      element99.innerHTML = data;
  });
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
      <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 pt-5">
          <li class="breadcrumb-item">
            <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Tokenomics</li>
        </ol>
      </nav>


      <!-- Page content -->
      <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher + Search form -->
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
          <div class="col-lg-5 col-md-4">
            <h1 class="mb-2 mb-md-0">Tokenomics</h1>
          </div>
        </div>

        <!-- Blog grid -->
        <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">

          <!-- Item -->
          <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
              <div class="position-relative">
                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                  <i class="bx bx-bookmark"></i>
                </a>
                <img src="assets/img/done.png" class="card-img-top" alt="Current Circulation">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Current Circulation</a>
                  <span class="fs-sm text-muted"><?PHP echo date($date_format,'-5 days');?></span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">Debug pulling in the data</a>
                </h3>
                <div id="debug" name="debug"></div>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/01.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Jerome Bell
                </a>
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
                <img src="assets/img/blog/02.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Future Circulation</a>
                  <span class="fs-sm text-muted">Sep 28, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">Why UX Design Matters and How it Affects Ranking</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/01.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Jerome Bell
                </a>
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
                <img src="assets/img/blog/03.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Business</a>
                  <span class="fs-sm text-muted">Sep 16, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">This Week in Search: New Limits and Exciting Features</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/02.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Ralph Edwards
                </a>
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
                <img src="assets/img/blog/04.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Processes &amp; Tools</a>
                  <span class="fs-sm text-muted">12 hours ago</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">Five Effective Lead Generation Techniques For Your Business</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/03.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Esther Howard
                </a>
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
                <img src="assets/img/blog/05.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Digital</a>
                  <span class="fs-sm text-muted">Oct 9, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">Inclusive Marketing: Why and How Does it Work?</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/04.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Jane Cooper
                </a>
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
                <img src="assets/img/blog/06.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Marketing</a>
                  <span class="fs-sm text-muted">Apr 2, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">How Agile is Your Forecasting Process?</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/05.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Albert Flores
                </a>
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
                <img src="assets/img/blog/07.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Processes &amp; Tools</a>
                  <span class="fs-sm text-muted">Sep 3, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">Your Guide to Optimising A JavaScript-enabled Website</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/02.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Ralph Edwards
                </a>
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
                <img src="assets/img/blog/08.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Processes &amp; Tools</a>
                  <span class="fs-sm text-muted">Sep 10, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">A Study on Smartwatch Design Qualities and People’s Preferences</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/03.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Esther Howard
                </a>
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
                <img src="assets/img/blog/09.jpg" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none">Strategy</a>
                  <span class="fs-sm text-muted">Sep 16, 2021</span>
                </div>
                <h3 class="h5 mb-0">
                  <a href="blog-single.html">This Long-Awaited Technology May Finally Change the World</a>
                </h3>
              </div>
              <div class="card-footer py-4">
                <a href="#" class="d-flex align-items-center fw-bold text-dark text-decoration-none">
                  <img src="assets/img/avatar/02.jpg" class="rounded-circle me-3" width="48" alt="Avatar">
                  Ralph Edwards
                </a>
              </div>
            </article>
          </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center pt-md-4 pt-2">
            <li class="page-item">
              <a href="#" class="page-link">
                <i class="bx bx-chevron-left mx-n1"></i>
              </a>
            </li>
            <li class="page-item disabled d-sm-none">
              <span class="page-link text-body">2 / 4</span>
            </li>
            <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item active d-none d-sm-block" aria-current="page">
              <span class="page-link">
                2
                <span class="visually-hidden">(current)</span>
              </span>
            </li>
            <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">3</a>
            </li>
            <li class="page-item d-none d-sm-block">
              <a href="#" class="page-link">4</a>
            </li>
            <li class="page-item">
              <a href="#" class="page-link">
                <i class="bx bx-chevron-right mx-n1"></i>
              </a>
            </li>
          </ul>
        </nav>
      </section>


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
  
              <!-- Title + checkboxes -->
              <div class="row gy-4 align-items-center mb-lg-5 mb-4 pb-3">
                <div class="col-md-3">
                  <h3 class="h5 mb-0 text-sm-start text-center">Sign up for Newsletters</h3>
                </div>
                <div class="col-md-9">
                  <div class="row row-cols-sm-3 row-cols-2 gy-2">
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-daily-newsletter" class="form-check-input">
                        <label for="s-daily-newsletter" class="form-check-label">Daily Newsletter</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-advertising-updates" class="form-check-input" checked>
                        <label for="s-advertising-updates" class="form-check-label">Advertising Updates</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-week-in-review" class="form-check-input">
                        <label for="s-week-in-review" class="form-check-label">Week in Review</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-event-updates" class="form-check-input">
                        <label for="s-event-updates" class="form-check-label">Event Updates</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-startups-weekly" class="form-check-input">
                        <label for="s-startups-weekly" class="form-check-label">Startups Weekly</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input id="s-podcasts" type="checkbox" class="form-check-input">
                        <label for="s-podcasts" class="form-check-label">Podcasts</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Email field -->
              <form class="d-flex flex-sm-row flex-column mb-3 needs-validation" novalidate>
                <div class="input-group me-sm-3 mb-sm-0 mb-3">
                  <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y ms-3 zindex-5 fs-5 text-muted"></i>
                  <input type="email" class="form-control form-control-lg rounded-3 ps-5" placeholder="Your email" required>
                  <div class="invalid-tooltip position-absolute start-0 top-0 mt-n4">Please provide a valid email address!</div>
                </div>
                <button class="btn btn-lg btn-primary">Subscribe *</button>
              </form>
              <div class="form-text fs-sm text-sm-start text-center">
                * Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>.
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer dark-mode bg-dark pt-5 pb-4 pb-lg-5">
      <div class="container pt-lg-4">
        <div class="row pb-5">
          <div class="col-lg-4 col-md-6">
            <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
              <img src="assets/img/logo.svg" width="47" alt="Silicon">
              Silicon
            </div>
            <p class="fs-sm text-light opacity-70 pb-lg-3 mb-4">Proin ipsum pharetra, senectus eget scelerisque varius pretium platea velit. Lacus, eget eu vitae nullam proin turpis etiam mi sit. Non feugiat feugiat egestas nulla nec. Arcu tempus, eget elementum dolor ullamcorper sodales ultrices eros.</p>
            <form class="needs-validation" novalidate>
              <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
              <div class="input-group">
                <input type="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
            <div id="footer-links" class="row">
              <div class="col-lg-4">
                <h6 class="mb-2">
                  <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Useful Links</a>
                </h6>
                <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                  <ul class="nav flex-column pb-lg-1 mb-lg-3">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Our Works</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Blog</a></li>
                  </ul>
                  <ul class="nav flex-column mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Terms &amp; Conditions</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-3">
                <h6 class="mb-2">
                  <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Socials</a>
                </h6>
                <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                  <ul class="nav flex-column mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                <h6 class="mb-2">Contact Us</h6>
                <a href="mailto:project@bmoretoken.com" class="fw-medium">project@bmoretoken.com</a>
              </div>
            </div>
          </div>
        </div>
        <p class="fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
          <span class="text-light opacity-50">&copy; 2021 - <?PHP echo date('Y'); ?> All rights reserved. Made by </span>
          <a class="nav-link d-inline-block p-0" href="https://www.bmorecoin.com/" target="_blank" rel="noopener">BMoreCoin</a>
        </p>
      </div>
    </footer>


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
