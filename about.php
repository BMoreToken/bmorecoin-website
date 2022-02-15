<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BMoreCoin | About</title>
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
    <link rel="stylesheet" media="screen" href="assets//vendor/lightgallery.js/dist/css/lightgallery.min.css"/>

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


      <?PHP include_once('navbar.php'); ?>

      <!-- Breadcrumb -->
      <nav class="container pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="index.php"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>


      <!-- Intro -->
      <section class="container py-5 mt-n3 mt-sm-0">
        <div class="row pt-lg-4 pb-lg-3 pb-xl-5">
          <div class="col-md-6">
            <h4 class="text-primary pb-1 mb-2">about</h4>
            <h1 class="display-1">Multipurpose Cryptocurrency</h1>
          </div>
          <div class="col-md-6 col-xl-5">
            <p class="fs-xl mb-1 mb-md-3">We are a dedicated team of passionate product managers, full stack developers, UX/UI designers, QA engineers and marketing experts helping businesses of every size — from new startups to public companies — launch their projects using our software .</p>
          </div>
        </div>
      </section>


      <!-- About company -->
      <section class="pb-5 mb-2 mb-md-4 mb-lg-5">
        <div class="jarallax" data-jarallax data-speed="0.4">
          <div class="jarallax-img" style="background-image: url(assets/img/about/cover01.jpg);"></div>
          <div class="d-none d-xxl-block" style="height: 700px;"></div>
          <div class="d-none d-xl-block d-xxl-none" style="height: 550px;"></div>
          <div class="d-none d-lg-block d-xl-none" style="height: 400px;"></div>
          <div class="d-none d-md-block d-lg-none" style="height: 300px;"></div>
          <div class="d-md-none" style="height: 250px;"></div>
        </div>
        <div class="container position-relative zindex-3" style="margin-top: -4.5rem;">
          <div class="bg-light position-relative border rounded-3 shadow-sm py-5">
            <span class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-faded-light"></span>
            <div class="row position-relative justify-content-center zindex-3 py-lg-4">
              <div class="col-11 col-md-10 col-lg-8 text-center">
                <h2 class="h1 pb-3">Our Company</h2>
                <p class="fs-xl pb-3 mb-4">Enim, vulputate felis, pharetra, leo diam est morbi. Gravida porta nunc vitae tempor sit proin lobortis mauris nulla. Eget felis nec ultrices quis viverra aliquam aliquam. Eget vestibulum, orci, pulvinar diam. Ultrices tortor cursus porta magna sit blandit dolor, nulla a. Sit diam non donec et, in interdum.</p>
                <a href="#" class="btn btn-primary btn-lg">Work with us</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Stats -->
      <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">

          <!-- Item -->
          <div class="col">
            <div class="d-flex align-items-center">
              <div class="bg-secondary rounded-circle flex-shrink-0 p-4">
                <img src="assets/img/about/icons/headset.svg" alt="Icon">
              </div>
              <div class="ps-3 ps-xl-4">
                <h3 class="h1 mb-2">2,480</h3>
                <p class="mb-0"><span class="fw-semibold">Remote</span> Professionals</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="d-flex align-items-center">
              <div class="bg-secondary rounded-circle flex-shrink-0 p-4">
                <img src="assets/img/about/icons/chat.svg" alt="Icon">
              </div>
              <div class="ps-3 ps-xl-4">
                <h3 class="h1 mb-2">1,200</h3>
                <p class="mb-0"><span class="fw-semibold">Requests</span> per Week</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="d-flex align-items-center">
              <div class="bg-secondary rounded-circle flex-shrink-0 p-4">
                <img src="assets/img/about/icons/add-group.svg" alt="Icon">
              </div>
              <div class="ps-3 ps-xl-4">
                <h3 class="h1 mb-2">760</h3>
                <p class="mb-0"><span class="fw-semibold">New Clients</span> per Month</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Gallery -->
      <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
        <h2 class="h1 pb-3">We are Powerful</h2>
        <div class="gallery row g-4 pb-3 mb-3" data-thumbnails="true">
          <div class="col-md-5">
            <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8" class="gallery-item video-item is-hovered rounded-3" data-sub-html='<h6 class="fs-sm text-light">Silicon Inc. Showreel by Marvin McKinney</h6>'>
              <img src="assets/img/about/gallery/01.jpg" alt="Gallery thumbnail">
              <div class="gallery-item-caption p-4">
                <h4 class="text-light mb-1">Silicon Inc.</h4>
                <p class="mb-0">Showreel by Marvin McKinney</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-5">
            <a href="assets/img/about/gallery/02.jpg" class="gallery-item rounded-3 mb-4" data-sub-html='<h6 class="fs-sm text-light">Program for apprentices</h6>'>
              <img src="assets/img/about/gallery/02.jpg" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Program for apprentices</div>
            </a>
            <a href="assets/img/about/gallery/03.jpg" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Modern bright offices</h6>'>
              <img src="assets/img/about/gallery/03.jpg" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Modern bright offices</div>
            </a>
          </div>
          <div class="col-md-4 col-sm-7">
            <a href="assets/img/about/gallery/04.jpg" class="gallery-item rounded-3 mb-4" data-sub-html='<h6 class="fs-sm text-light">Friendly professional team</h6>'>
              <img src="assets/img/about/gallery/04.jpg" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Friendly professional team</div>
            </a>
            <a href="assets/img/about/gallery/05.jpg" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Efficient project management</h6>'>
              <img src="assets/img/about/gallery/05.jpg" alt="Gallery thumbnail">
              <div class="gallery-item-caption fs-sm fw-medium">Efficient project management</div>
            </a>
          </div>
        </div>
        <a href="#" class="btn btn-outline-primary btn-lg w-100">
          <i class="bx bx-images fs-4 lh-1 me-2"></i>
          See all photos
        </a>
      </section>


      <!-- Testimonials (Slider) -->
      <section class="bg-secondary py-5">
        <div class="container py-2 py-md-4 py-lg-5">
          <h2 class="h1 mt-n1 pb-3 pb-lg-4">What Our Clients Say</h2>
          <div class="row">
            <div class="col-md-4 d-none d-md-block">

              <!-- Swiper tabs (Author images) -->
              <div class="swiper-tabs">

                <!-- Author 1 image -->
                <div id="author-1" class="card bg-transparent border-0 swiper-tab active">
                  <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center" style="background-image: url(assets/img/testimonials/03.jpg);"></div>
                  <div class="card-footer d-flex w-100 border-0 pb-0">
                    <img src="assets/img/brands/01.svg" width="160" class="d-none d-xl-block" alt="Company logo">
                    <div class="border-start-xl ps-xl-4 ms-xl-2">
                      <h5 class="fw-semibold lh-base mb-0">Ralph Edwards</h5>
                      <span class="fs-sm text-muted">Head of Marketing <span class="d-xl-none d-inline">at Lorem Ltd.</span></span>
                    </div>
                  </div>
                </div>

                <!-- Author 2 image -->
                <div id="author-2" class="card bg-transparent border-0 swiper-tab">
                  <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center" style="background-image: url(assets/img/testimonials/02.jpg);"></div>
                  <div class="card-footer d-flex w-100 border-0 pb-0">
                    <img src="assets/img/brands/02.svg" width="160" class="d-none d-xl-block" alt="Company logo">
                    <div class="border-start-xl ps-xl-4 ms-xl-2">
                      <h5 class="fw-semibold lh-base mb-0">Annette Black</h5>
                      <span class="fs-sm text-muted">Strategic Advisor <span class="d-xl-none d-inline">at Company LLC</span></span>
                    </div>
                  </div>
                </div>

                <!-- Author 3 image -->
                <div id="author-3" class="card bg-transparent border-0 swiper-tab">
                  <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center" style="background-image: url(assets/img/testimonials/01.jpg);"></div>
                  <div class="card-footer d-flex w-100 border-0 pb-0">
                    <img src="assets/img/brands/04.svg" width="160" class="d-none d-xl-block" alt="Company logo">
                    <div class="border-start-xl ps-xl-4 ms-xl-2">
                      <h5 class="fw-semibold lh-base mb-0">Darrell Steward</h5>
                      <span class="fs-sm text-muted">Project Manager <span class="d-xl-none d-inline">at Ipsum Ltd.</span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card border-0 shadow-sm p-4 p-xxl-5 ms-xxl-5">

                <!-- Slider prev/next buttons + Quotation mark -->
                <div class="d-flex justify-content-between pb-4 mb-2">
                  <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                    <i class="bx bxs-quote-left"></i>
                  </span>
                  <div class="d-flex">
                    <button type="button" id="prev2" class="btn btn-prev btn-icon btn-sm me-2">
                      <i class="bx bx-chevron-left"></i>
                    </button>
                    <button type="button" id="next2" class="btn btn-next btn-icon btn-sm ms-2">
                      <i class="bx bx-chevron-right"></i>
                    </button>
                  </div>
                </div>   
                
                <!-- Slider -->
                <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
                  "spaceBetween": 24,
                  "loop": true,
                  "tabs": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "prevEl": "#prev2",
                    "nextEl": "#next2"
                  }
                }'>
                  <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide h-auto" data-swiper-tab="#author-1">
                      <figure class="card h-100 position-relative border-0 bg-transparent">
                        <blockquote class="card-body p-0 mb-0">
                          <p class="fs-lg mb-0"><?PHP echo $client1;?></p>
                        </blockquote>
                        <figcaption class="card-footer border-0 d-sm-flex d-md-none w-100 pb-2">
                          <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-2">
                            <img src="assets/img/avatar/05.jpg" width="48" class="rounded-circle" alt="<?PHP echo $client1_name;?>">
                            <div class="ps-3">
                              <h5 class="fw-semibold lh-base mb-0"><?PHP echo $client1_name;?></h5>
                              <span class="fs-sm text-muted"><?PHP echo $client1_title;?></span>
                            </div>
                          </div>
                          <img src="assets/img/brands/01.svg" width="160" class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                        </figcaption>
                      </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto" data-swiper-tab="#author-2">
                      <figure class="card h-100 position-relative border-0 bg-transparent">
                        <blockquote class="card-body p-0 mb-0">
                          <p class="fs-lg mb-0"><?PHP echo $client2;?></p>
                        </blockquote>
                        <figcaption class="card-footer border-0 d-sm-flex d-md-none w-100 pb-2">
                          <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-2">
                            <img src="assets/img/avatar/06.jpg" width="48" class="rounded-circle" alt="<?PHP echo $client2_name;?>">
                            <div class="ps-3">
                              <h5 class="fw-semibold lh-base mb-0"><?PHP echo $client2_name;?></h5>
                              <span class="fs-sm text-muted"><?PHP echo $client2_title;?></span>
                            </div>
                          </div>
                          <img src="assets/img/brands/02.svg" width="160" class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                        </figcaption>
                      </figure>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto" data-swiper-tab="#author-3">
                      <figure class="card h-100 position-relative border-0 bg-transparent">
                        <blockquote class="card-body p-0 mb-0">
                          <p class="fs-lg mb-0"><?PHP echo $client3;?></p>
                        </blockquote>
                        <figcaption class="card-footer border-0 d-sm-flex d-md-none w-100 pb-2">
                          <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-2">
                            <img src="assets/img/avatar/01.jpg" width="48" class="rounded-circle" alt="<?PHP echo $client3_name;?>">
                            <div class="ps-3">
                              <h5 class="fw-semibold lh-base mb-0"><?PHP echo $client3_name;?></h5>
                              <span class="fs-sm text-muted"><?PHP echo $client3_title;?></span>
                            </div>
                          </div>
                          <img src="assets/img/brands/04.svg" width="160" class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                        </figcaption>
                      </figure>
                    </div>
                  </div>

                  <!-- Pagination (bullets) -->
                  <div class="swiper-pagination position-relative pt-3 mt-4 d-none d-md-flex"></div>
                </div>        
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Team -->
      <section class="container py-5 my-md-3 my-lg-5">
        <h2 class="h1 text-center pt-1 pb-3 mb-3 mb-lg-4">Our Leadership</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/01.jpg" class="rounded-3" alt="Jenny Wilson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Jenny Wilson</h3>
                <p class="fs-sm mb-0">Co-Founder &amp; CEO</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/02.jpg" class="rounded-3" alt="Ralph Edwards">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Ralph Edwards</h3>
                <p class="fs-sm mb-0">Co-Founder</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/03.jpg" class="rounded-3" alt="Cameron Williamson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white me-2">
                      <i class="bx bxl-dribbble"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Cameron Williamson</h3>
                <p class="fs-sm mb-0">Creative Director</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/04.jpg" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                      <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Jerome Bell</h3>
                <p class="fs-sm mb-0">Marketing Director</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/05.jpg" class="rounded-3" alt="Marvin McKinney">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-behance btn-sm bg-white me-2">
                      <i class="bx bxl-behance"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white">
                      <i class="bx bxl-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Marvin McKinney</h3>
                <p class="fs-sm mb-0">Lead Designer</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/06.jpg" class="rounded-3" alt="Esther Howard">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white me-2">
                      <i class="bx bxl-dribbble"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-behance btn-sm bg-white">
                      <i class="bx bxl-behance"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Esther Howard</h3>
                <p class="fs-sm mb-0">Motion Designer</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/07.jpg" class="rounded-3" alt="Darrell Steward">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-stack-overflow btn-sm bg-white me-2">
                      <i class="bx bxl-stack-overflow"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-github btn-sm bg-white">
                      <i class="bx bxl-github"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Darrell Steward</h3>
                <p class="fs-sm mb-0">Lead Developer</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/08.jpg" class="rounded-3" alt="Jane Cooper">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Jane Cooper</h3>
                <p class="fs-sm mb-0">Senior Project Manager</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact CTA -->
      <section class="container mt-n2 mt-sm-0">
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


      <!-- Social networks (Carousel on narrow screens) -->
      <section class="container text-center py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 mb-4">We Have Social Networks</h2>
        <p class="fs-lg text-muted pb-2 mb-5">Follow us and keep up to date with the freshest news!</p>
        <div class="swiper" data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3
            },
            "650": {
              "slidesPerView": 4
            },
            "900": {
              "slidesPerView": 5
            },
            "1100": {
              "slidesPerView": 6
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link">
                  <i class="bx bxl-facebook"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Facebook</h6>
                  <p class="fs-sm text-muted mb-0">silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-instagram btn-lg stretched-link">
                  <i class="bx bxl-instagram"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Instagram</h6>
                  <p class="fs-sm text-muted mb-0">@silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-lg stretched-link">
                  <i class="bx bxl-twitter"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Twitter</h6>
                  <p class="fs-sm text-muted mb-0">@silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-lg stretched-link">
                  <i class="bx bxl-linkedin"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">LinkedIn</h6>
                  <p class="fs-sm text-muted mb-0">Silicon Inc.</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-youtube btn-lg stretched-link">
                  <i class="bx bxl-youtube"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">YouTube</h6>
                  <p class="fs-sm text-muted mb-0">Silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-lg stretched-link">
                  <i class="bx bxl-dribbble"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Dribbble</h6>
                  <p class="fs-sm text-muted mb-0">Silicon</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative bottom-0 pt-3 mt-4"></div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer dark-mode bg-dark border-top border-light pt-5 pb-4 pb-lg-5">
      <div class="container pt-lg-4">
        <div class="row pb-5">
          <div class="col-lg-4 col-md-6">
            <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
              <img src="assets/img/logo.svg" width="47" alt="Silicon">
              Silicon
            </div>
            <p class="fs-sm text-light opacity-70 pb-lg-3 mb-4"><?PHP echo $lower_paragraph;?></p>
            <?PHP include_once('subscribe_small.php'); ?>
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
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Case Studies</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">About US</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">News &amp; Insights</a></li>
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
                    <?PHP echo $lower_social_menu; ?>
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
    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="assets/vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
    <script src="assets/vendor/lg-zoom.js/dist/lg-zoom.min.js"></script>
    <script src="assets/vendor/lg-video.js/dist/lg-video.min.js"></script>
    <script src="assets/vendor/lg-thumbnail.js/dist/lg-thumbnail.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>
