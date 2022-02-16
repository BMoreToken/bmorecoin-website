<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BMoreCoin | Case Studies</title>
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
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Case Studies</li>
        </ol>
      </nav>


      <!-- Page title + Filters -->
      <section class="container d-md-flex align-items-center justify-content-between pb-3">
        <h1 class="text-nowrap mb-md-4 pe-md-5">Case Studies</h1>
        <nav class="overflow-auto">
          <ul class="nav nav-tabs-alt flex-nowrap border-0">
            <li class="nav-item">
              <a href="#" class="nav-link text-nowrap active">All Works</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-nowrap">Web Design</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-nowrap">Graphic Design</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-nowrap">Branding</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-nowrap">UI / UX</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-nowrap">Motion Design</a>
            </li>
          </ul>
        </nav>
      </section>


      <!-- Portfolio grid -->
      <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
        <div class="row pb-lg-3">

          <!-- Item -->
          <div class="col-md-5 mb-2">
            <div class="card card-portfolio">
              <div class="card-img">
                <img src="assets/img/portfolio/grid/01.jpg" alt="Image">
              </div>
              <div class="card-body">
                <h2 class="h4 mb-2">
                  <a href="case_study.php" class="stretched-link">Astronaut &amp; Flashing Neon Lights</a>
                </h2>
                <div class="card-portfolio-meta">
                  <span class="text-muted">3D Render / Graphic Design / Motion Design</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-7 mb-2">
            <div class="card card-portfolio">
              <div class="card-img">
                <img src="assets/img/portfolio/grid/02.jpg" alt="Image">
              </div>
              <div class="card-body">
                <h2 class="h4 mb-2">
                  <a href="case_study.php" class="stretched-link">Scene of Sunglasses &amp; Headphone on Human Head</a>
                </h2>
                <div class="card-portfolio-meta pb-1">
                  <span class="text-muted">NFT / Graphic Design / Art / Identity / Motion Design</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-7 mb-2">
            <div class="card card-portfolio">
              <div class="card-img">
                <img src="assets/img/portfolio/grid/03.jpg" alt="Image">
              </div>
              <div class="card-body">
                <h2 class="h4 mb-2">
                  <a href="case_study.php" class="stretched-link">Plaster Antique Sculpture in a Pop Art Style</a>
                </h2>
                <div class="card-portfolio-meta">
                  <span class="text-muted">NFT / Graphic Design / Art / 3D</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-5 mb-2">
            <div class="card card-portfolio">
              <div class="card-img">
                <img src="assets/img/portfolio/grid/04.jpg" alt="Image">
              </div>
              <div class="card-body">
                <h2 class="h4 mb-2">
                  <a href="case_study.php" class="stretched-link">Big Blue Whale Shape</a>
                </h2>
                <div class="card-portfolio-meta">
                  <span class="text-muted">3D Pollygonal Shape / Graphic Design / Art</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-5 mb-2">
            <div class="card card-portfolio">
              <div class="card-img">
                <img src="assets/img/portfolio/grid/05.jpg" alt="Image">
              </div>
              <div class="card-body">
                <h2 class="h4 mb-2">
                  <a href="case_study.php" class="stretched-link">3D Shape Illustration</a>
                </h2>
                <div class="card-portfolio-meta">
                  <span class="text-muted">3D Design / Illustration / Art</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-7 mb-2">
            <div class="card card-portfolio">
              <div class="card-img">
                <img src="assets/img/portfolio/grid/06.jpg" alt="Image">
              </div>
              <div class="card-body">
                <h2 class="h4 mb-2">
                  <a href="case_study.php" class="stretched-link">Mannequin Hands Holding Phone</a>
                </h2>
                <div class="card-portfolio-meta">
                  <span class="text-muted">NFT / Graphic Design / Art / 3D</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item active" aria-current="page">
              <span class="page-link">
                1
                <span class="visually-hidden">(current)</span>
              </span>
            </li>
            <li class="page-item">
              <a href="#" class="page-link">2</a>
            </li>
            <li class="page-item">
              <a href="#" class="page-link">3</a>
            </li>
            <li class="page-item">
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


      <!-- Contact CTA -->
      <section class="container mb-1 mb-md-3 mb-lg-4">
        <div class="bg-secondary rounded-3 overflow-hidden">
          <div class="row align-items-center">
            <div class="col-xl-4 col-md-5 offset-lg-1">
              <div class="pt-5 pb-3 pb-md-5 px-4 px-lg-0 text-center text-md-start">
                <p class="lead mb-3">Ready to get started?</p>
                <h2 class="h1 pb-3 pb-sm-4">Take Your <span class="text-primary">Business</span> to the Next Level</h2>
                <a href="#" class="btn btn-primary btn-lg">Work with us</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-7 offset-xl-1">
              <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100">
                <svg class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y" width="868" height="868" style="min-width: 868px;" viewBox="0 0 868 868" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.15" cx="434" cy="434" r="434" fill="#6366F1"/></svg>
                <img src="assets/img/about/cta.png" class="position-relative zindex-3 mb-2 my-lg-4" width="382" alt="Illustration">
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
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>
