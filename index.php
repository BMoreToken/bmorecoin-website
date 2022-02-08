<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BMoreCoin Landing</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="BMoreCoin BALTx">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Patrick McGuire">

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
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
      <header class="header navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
        <div class="container px-3">
          <a href="index.html" class="navbar-brand pe-3">
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
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                  <div class="dropdown-menu">
                    <div class="d-lg-flex pt-lg-3">
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">About</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="about-v1.html" class="dropdown-item py-1">About v.1</a></li>
                          <li><a href="about-v2.html" class="dropdown-item py-1">About v.2</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Portfolio</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="portfolio-grid.html" class="dropdown-item py-1">Grid View</a></li>
                          <li><a href="portfolio-list.html" class="dropdown-item py-1">List View</a></li>
                          <li><a href="portfolio-slider.html" class="dropdown-item py-1">Slider View</a></li>
                          <li><a href="portfolio-courses.html" class="dropdown-item py-1">Courses</a></li>
                          <li><a href="portfolio-single-project.html" class="dropdown-item py-1">Single Project</a></li>
                          <li><a href="portfolio-single-course.html" class="dropdown-item py-1">Single Course</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">Blog</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="blog-list-with-sidebar.html" class="dropdown-item py-1">List View with Sidebar</a></li>
                          <li><a href="blog-grid-with-sidebar.html" class="dropdown-item py-1">Grid View with Sidebar</a></li>
                          <li><a href="blog-list-no-sidebar.html" class="dropdown-item py-1">List View no Sidebar</a></li>
                          <li><a href="blog-grid-no-sidebar.html" class="dropdown-item py-1">Grid View no Sidebar</a></li>
                          <li><a href="blog-simple-feed.html" class="dropdown-item py-1">Simple Feed</a></li>
                          <li><a href="blog-single.html" class="dropdown-item py-1">Single Post</a></li>
                          <li><a href="blog-podcast.hml" class="dropdown-item py-1">Podcast</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Services</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="services.html" class="dropdown-item py-1">Services Page</a></li>
                          <li><a href="services-single.html" class="dropdown-item py-1">Service Details</a></li>
                        </ul>
                      </div>
                      <div class="mega-dropdown-column">
                        <h6 class="px-3 mb-2">Contacts</h6>
                        <ul class="list-unstyled mb-3">
                          <li><a href="contacts-v1.html" class="dropdown-item py-1">Contacts v.1</a></li>
                          <li><a href="contacts-v2.html" class="dropdown-item py-1">Contacts v.2</a></li>
                        </ul>
                        <h6 class="px-3 mb-2">Specialty</h6>
                        <ul class="list-unstyled">
                          <li><a href="404-v1.html" class="dropdown-item py-1">404 Error v.1</a></li>
                          <li><a href="404-v2.html" class="dropdown-item py-1">404 Error v.2</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li><a href="account-details.html" class="dropdown-item">Account Details</a></li>
                    <li><a href="account-security.html" class="dropdown-item">Security</a></li>
                    <li><a href="account-notifications.html" class="dropdown-item">Notifications</a></li>
                    <li><a href="account-messages.html" class="dropdown-item">Messages</a></li>
                    <li><a href="account-saved-items.html" class="dropdown-item">Saved Items</a></li>
                    <li><a href="account-collections.html" class="dropdown-item">My Collections</a></li>
                    <li><a href="account-payment.html" class="dropdown-item">Payment Details</a></li>
                    <li><a href="account-signin.html" class="dropdown-item">Sign In</a></li>
                    <li><a href="account-signup.html" class="dropdown-item">Sign Up</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="components/typography.html" class="nav-link">UI Kit</a>
                </li>
                <li class="nav-item">
                  <a href="docs/getting-started.html" class="nav-link">Docs</a>
                </li>
              </ul>
            </div>
            <div class="offcanvas-footer border-top">
              <a href="#" class="btn btn-primary w-100">
                <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                &nbsp;Buy now
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
          <a href="#" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex">
            <i class="bx bx-cart fs-5 lh-1 me-1"></i>
            &nbsp;Buy now
          </a>
        </div>
      </header>


      <!-- Hero slider + BG parallax -->
      <section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
        <div class="jarallax-img" style="background-image: url(assets/img/landing/software-company/hero-bg.jpg);"></div>
        <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

          <!-- Slider controls (Prev / next) -->
          <button type="button" id="hero-prev" class="btn btn-prev btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 start-0 translate-middle-y d-none d-md-inline-flex ms-n3 ms-lg-2">
            <i class="bx bx-chevron-left fs-1"></i>
          </button>
          <button type="button" id="hero-next" class="btn btn-next btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 end-0 translate-middle-y d-none d-md-inline-flex me-n3 me-lg-2">
            <i class="bx bx-chevron-right fs-1"></i>
          </button>

          <!-- Slider -->
          <div class="container text-center py-xl-5">
            <div class="row justify-content-center pt-lg-5">
              <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{
                  "effect": "fade",
                  "speed": 500,
                  "autoplay": {
                    "delay": 5500,
                    "disableOnInteraction": false
                  },
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "prevEl": "#hero-prev",
                    "nextEl": "#hero-next"
                  }
                }'>
                  <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4">The Best IT Solutions for Your Business</h2>
                      <div class="from-end">
                        <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">We provide the wide range of high quality IT services and best practices solutions to our customers making their business better.</p>
                      </div>
                      <div class="scale-up delay-1">
                        <a href="#" class="btn btn-primary shadow-primary btn-lg">Start your project</a>
                      </div>

                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4">Award-Winning Software Development</h2>
                      <div class="from-end">
                        <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">We build complex web, desktop and mobile applications. With us you get quality software and perfect service every time.</p>
                      </div>
                      <div class="scale-up delay-1">
                        <a href="#" class="btn btn-primary shadow-primary btn-lg">View case studies</a>
                      </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4">24/7 Tech &amp; Business Support</h2>
                      <div class="from-end">
                        <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">We ensure lifetime support of all applications we've built. Our support department is a team of professionals who will assist you 24/7.</p>
                      </div>
                      <div class="scale-up delay-1">
                        <a href="#" class="btn btn-primary shadow-primary btn-lg">Work with us</a>
                      </div>
                    </div>
                  </div>

                  <!-- Pagination (bullets) -->
                  <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container d-flex flex-column flex-sm-row align-items-center justify-content-between position-relative zindex-5 pb-5">
          <div class="d-flex mb-4 mb-sm-0">
            <a href="#" class="btn btn-icon btn-secondary btn-linkedin rounded-circle me-2">
              <i class="bx bxl-linkedin"></i>
            </a>
            <a href="#" class="btn btn-icon btn-secondary btn-facebook rounded-circle me-2">
              <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" class="btn btn-icon btn-secondary btn-twitter rounded-circle me-2">
              <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="btn btn-icon btn-secondary btn-youtube rounded-circle me-2">
              <i class="bx bxl-youtube"></i>
            </a>
          </div>
          <a href="#" class="nav-link px-0">
            Our case studies
            <i class="bx bx-right-arrow-circle fs-4 ms-2"></i>
          </a>
        </div>
      </section>


      <!-- About -->
      <section class="container pt-5 mt-2 mt-md-4 mt-lg-5">
        <div class="row pt-xl-3">
          <div class="col-md-5 text-center text-md-start pb-5">
            <h1 class="mb-4">Award-Winning Software Company</h1>
            <p class="fs-lg pb-lg-3 mb-4">We create diverse, complex, web and mobile solutions for any business need. With us you get quality software and perfect service every time.</p>
            <a href="about-v2.html" class="btn btn-primary shadow-primary btn-lg">More about us</a>
            <div class="mt-3 mt-sm-0 pt-4 pt-sm-5 mt-xl-4">
              <h2 class="h6 mb-4">Some of our awards:</h2>
              <img src="assets/img/landing/software-company/awards.svg" alt="Awards">
            </div>
          </div>
          <div class="col-xl-6 col-md-7 offset-xl-1 pb-4 pb-sm-3 pb-lg-0 mb-4 mb-sm-5 mb-lg-0">
            <img src="assets/img/landing/software-company/about-img.jpg" class="rounded-3 shadow-sm" alt="Image">
          </div>
        </div>
      </section>


      <!-- Services -->
      <section class="bg-secondary pb-md-2 pb-lg-5">
        <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px;"></div>
        <div class="container pb-4 pt-5">
          <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">Our Services</h2>
          <div class="row align-items-center pb-5 mb-lg-2">
            <div class="col-md-8 text-center text-md-start">
              <p class="fs-lg text-muted mb-md-0">We are focused on helping brands grow through digital transformation services. We bring real solutions to each client’s problems through a deep understanding of their market, solution, and vision.</p>
            </div>
            <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
              <a href="services.html" class="btn btn-outline-primary btn-lg">See all services</a>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2">

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                <div class="card-body pt-3">
                  <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                    <img src="assets/img/services/cms.svg" class="d-block m-1" width="40" alt="Icon">
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Custom Software Development
                    <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">Nisi, dis sed cursus eget pellentesque mattis. Odio eu proin aliquam a. Semper bibendum tellus non tellus, facilisi dignissim in quam massa. Aliquam, feugiat ut cum tellus, sit. Quis consectetur gravida ac ac lectus cursus egestas.</p>
                </div>
              </a>
            </div>
  
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                <div class="card-body pt-3">
                  <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                    <img src="assets/img/services/rocket.svg" class="d-block m-1" width="40" alt="Icon">
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Software Integration
                    <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">Id eget blandit sapien cras massa lectus lorem placerat. Quam dolor commodo fermentum bibendum dictumst. Risus pretium eget at viverra eget. Sit neque adipiscing malesuada blandit justo, quam.</p>
                </div>
              </a>
            </div>
  
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                <div class="card-body pt-3">
                  <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                    <img src="assets/img/services/mobile-app.svg" class="d-block m-1" width="40" alt="Icon">
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Mobile App Development
                    <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">Nunc, justo, diam orci, dictum purus convallis risus. Suscipit hendrerit at egestas id id blandit interdum est. Integer fames placerat turpis pretium quis hac leo lacus. Orci, dictum nunc mus quis semper eu bibendum enim, morbi.</p>
                </div>
              </a>
            </div>
  
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                <div class="card-body pt-3">
                  <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                    <img src="assets/img/services/analytics.svg" class="d-block m-1" width="40" alt="Icon">
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Business Analytics
                    <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">Gravida eget euismod tempus diam dignissim quam. Dignissim magnis blandit faucibus convallis augue nisl, etiam. Feugiat ut molestie non arcu senectus sed. Diam pellentesque sit mattis nec amet varius nunc a sed.</p>
                </div>
              </a>
            </div>
  
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                <div class="card-body pt-3">
                  <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                    <img src="assets/img/services/web-search.svg" class="d-block m-1" width="40" alt="Icon">
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Software Testing
                    <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">Quis rhoncus quam venenatis facilisi. Risus dis libero nisl condimentum quis. Tincidunt ultricies vulputate ornare nunc rhoncus in. Ultrices dolor eu natoque volutpat praesent curabitur ultricies.</p>
                </div>
              </a>
            </div>
  
            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
              <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                <div class="card-body pt-3">
                  <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                    <img src="assets/img/services/timer.svg" class="d-block m-1" width="40" alt="Icon">
                  </div>
                  <h2 class="h4 d-inline-flex align-items-center">
                    Project Management
                    <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                  </h2>
                  <p class="fs-sm text-body mb-0">Massa dis morbi sagittis, tellus sit gravida. Id ut non ut in faucibus eu, ac. Tempus feugiat enim id pellentesque a sagittis vitae, convallis. Nunc, arcu enim orci ullamcorper aenean. Scelerisque eget a nibh bibendum commodo.</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Case studies -->
      <section class="bg-secondary pt-1">
        <div class="container">
          <h2 class="h1 text-center text-md-start mb-lg-4">Case Studies</h2>
          <div class="row align-items-center pb-5">
            <div class="col-md-8 col-lg-7 col-xl-6 text-center text-md-start">
              <p class="fs-lg text-muted mb-md-0">We bring real solutions to each client’s problems through a deep understanding of their market, solution, and vision.</p>
            </div>
            <div class="col-md-4 col-lg-5 col-xl-6 d-flex justify-content-center justify-content-md-end">
              <a href="#" class="btn btn-outline-primary btn-lg">See all case studies</a>
            </div>
          </div>
        </div>

        <div class="position-relative py-lg-4 py-xl-5">

          <!-- Swiper tabs -->
          <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
            <div id="image-1" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab active" data-jarallax data-speed="0.4">
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
              <div class="jarallax-img" style="background-image: url(assets/img/landing/software-company/case-study01.jpg);"></div>
            </div>
            <div id="image-2" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab" data-jarallax data-speed="0.4">
              <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
              <div class="jarallax-img" style="background-image: url(assets/img/landing/software-company/case-study02.jpg);"></div>
            </div>
          </div>

          <!-- Swiper slider -->
          <div class="container position-relative zindex-5 py-5">
            <div class="row py-2 py-md-3">
              <div class="col-xl-5 col-lg-7 col-md-9">

                <!-- Slider controls (Prev / next) -->
                <div class="d-flex justify-content-center justify-content-md-start pb-3 mb-3">
                  <button type="button" id="case-study-prev" class="btn btn-prev btn-icon btn-sm bg-white me-2">
                    <i class="bx bx-chevron-left"></i>
                  </button>
                  <button type="button" id="case-study-next" class="btn btn-next btn-icon btn-sm bg-white ms-2">
                    <i class="bx bx-chevron-right"></i>
                  </button>
                </div>

                <!-- Card -->
                <div class="card bg-white shadow-sm p-3">
                  <div class="card-body">
                    <div class="swiper" data-swiper-options='{
                      "spaceBetween": 30,
                      "loop": true,
                      "tabs": true,
                      "pagination": {
                        "el": "#case-study-pagination",
                        "clickable": true
                      },
                      "navigation": {
                        "prevEl": "#case-study-prev",
                        "nextEl": "#case-study-next"
                      }
                    }'>
                      <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-tab="#image-1">
                          <img src="assets/img/landing/software-company/case-study-logo01.png" class="d-block mb-3" width="72" alt="Logo">
                          <h3 class="mb-2">Cashless payment case study</h3>
                          <p class="fs-sm text-muted border-bottom pb-3 mb-3">Payment Service Provider Company</p>
                          <p class="pb-2 pb-lg-3 mb-3">Aenean dolor elit tempus tellus imperdiet. Elementum, ac convallis morbi sit est feugiat ultrices. Cras tortor maecenas pulvinar nec ac justo. Massa sem eget semper...</p>
                          <a href="#" class="btn btn-primary">View case study</a>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-tab="#image-2">
                          <img src="assets/img/landing/software-company/case-study-logo02.png" class="d-block mb-3" width="72" alt="Logo">
                          <h3 class="mb-2">Smart tech case study</h3>
                          <p class="fs-sm text-muted border-bottom pb-3 mb-3">Data Analytics Company</p>
                          <p class="pb-2 pb-lg-3 mb-3">Adipiscing quis a at ligula. Gravida gravida diam rhoncus cursus in. Turpis sagittis tempor gravida phasellus sapien. Faucibus donec consectetur sed id sit nisl.</p>
                          <a href="#" class="btn btn-primary">View case study</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="dark-mode pt-4 mt-3">
                  <div id="case-study-pagination" class="swiper-pagination position-relative bottom-0"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Features -->
      <section class="container py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 text-center pt-1 pt-xl-2 mb-4">Why Choose Us?</h2>
        <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">We personalize how we work to fit your project needs. Our approach helps augment innovation.</p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-xl-3">
          <div class="col text-center border-end">
            <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
              <img src="assets/img/landing/software-company/features/01.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Build a functional prototype in 24 hrs</h3>
          </div>
          <div class="col text-center border-end">
            <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
              <img src="assets/img/landing/software-company/features/02.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Create an MVP within two weeks</h3>
          </div>
          <div class="col text-center border-end">
            <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
              <img src="assets/img/landing/software-company/features/03.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Kickstart software development</h3>
          </div>
          <div class="col text-center">
            <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
              <img src="assets/img/landing/software-company/features/04.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Get 24/7 tech & business support</h3>
          </div>
        </div>
      </section>


      <!-- Testimonials (Slider) -->
      <section class="container pb-5 mb-md-2 mb-xl-4">
        <div class="row pb-lg-2">
          <div class="col-md-5 mb-4 mb-md-0">
            <div class="card justify-content-center bg-dark h-100 p-4 p-lg-5">
              <div class="p-2">
                <h3 class="display-4 text-primary mb-1">200+</h3>
                <h2 class="text-light pb-5 mb-2">Clients Already Served</h2>
                <a href="#" class="d-inline-flex align-items-center rounded-3 text-decoration-none py-3 px-4" style="background-color: #3e4265;">
                  <div class="pe-3">
                    <div class="fs-xs text-light text-uppercase opaciy-70 mb-2">Reviewed on</div>
                    <img src="assets/img/about/clutch.svg" width="97" alt="Clutch">
                  </div>
                  <div class="ps-1">
                    <div class="text-nowrap mb-2">
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                    </div>
                    <div class="text-light opacity-70">49 reviews</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card border-0 shadow-sm p-4 p-xxl-5">

              <!-- Slider prev/next buttons + Quotation mark -->
              <div class="d-flex justify-content-between pb-4 mb-2">
                <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                  <i class="bx bxs-quote-left"></i>
                </span>
                <div class="d-flex">
                  <button type="button" id="testimonial-prev" class="btn btn-prev btn-icon btn-sm me-2">
                    <i class="bx bx-chevron-left"></i>
                  </button>
                  <button type="button" id="testimonial-next" class="btn btn-next btn-icon btn-sm ms-2">
                    <i class="bx bx-chevron-right"></i>
                  </button>
                </div>
              </div>   
              
              <!-- Slider -->
              <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
                "spaceBetween": 24,
                "loop": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "prevEl": "#testimonial-prev",
                  "nextEl": "#testimonial-next"
                }
              }'>
                <div class="swiper-wrapper">
        
                  <!-- Item -->
                  <div class="swiper-slide h-auto" data-swiper-tab="#author-1">
                    <figure class="card h-100 position-relative border-0 bg-transparent">
                      <blockquote class="card-body p-0 mb-0">
                        <p class="fs-lg mb-0">Dolor, a eget elementum, integer nulla volutpat, nunc, sit. Quam iaculis varius mauris magna sem. Egestas sed sed suscipit dolor faucibus dui imperdiet at eget. Tincidunt imperdiet quis hendrerit aliquam feugiat neque cras sed. Dictum quam integer volutpat tellus, faucibus platea. Pulvinar turpis proin faucibus at mauris. Sagittis gravida vitae porta enim.</p>
                      </blockquote>
                      <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                        <img src="assets/img/avatar/05.jpg" width="48" class="rounded-circle" alt="Ralph Edwards">
                        <div class="ps-3">
                          <h5 class="fw-semibold lh-base mb-0">Ralph Edwards</h5>
                          <span class="fs-sm text-muted">Head of Marketing at Lorem Company</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
        
                  <!-- Item -->
                  <div class="swiper-slide h-auto" data-swiper-tab="#author-2">
                    <figure class="card h-100 position-relative border-0 bg-transparent">
                      <blockquote class="card-body p-0 mb-0">
                        <p class="fs-lg mb-0">Mi semper risus ultricies orci pulvinar in at enim orci. Quis facilisis nunc pellentesque in ullamcorper sit. Lorem blandit arcu sapien, senectus libero, amet dapibus cursus quam. Eget pellentesque eu purus volutpat adipiscing malesuada. Purus nisi, tortor vel lacus. Donec diam molestie ultrices vitae eget pulvinar fames. Velit lacus mi purus velit justo, amet.</p>
                      </blockquote>
                      <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                        <img src="assets/img/avatar/06.jpg" width="48" class="rounded-circle" alt="Annette Black">
                        <div class="ps-3">
                          <h5 class="fw-semibold lh-base mb-0">Annette Black</h5>
                          <span class="fs-sm text-muted">Strategic Advisor at Ipsum Ltd.</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
        
                  <!-- Item -->
                  <div class="swiper-slide h-auto" data-swiper-tab="#author-3">
                    <figure class="card h-100 position-relative border-0 bg-transparent">
                      <blockquote class="card-body p-0 mb-0">
                        <p class="fs-lg mb-0">Ac at sed sit senectus massa. Massa ante amet ultrices magna porta tempor. Aliquet diam in et magna ultricies mi at. Lectus enim, vel enim egestas nam pellentesque et leo. Elit mi faucibus laoreet aliquam pellentesque sed aliquet integer massa. Orci leo tortor ornare id mattis auctor aliquam volutpat aliquet. Odio lectus viverra eu blandit nunc malesuada vitae eleifend pulvinar.</p>
                      </blockquote>
                      <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                        <img src="assets/img/avatar/01.jpg" width="48" class="rounded-circle" alt="Darrell Steward">
                        <div class="ps-3">
                          <h5 class="fw-semibold lh-base mb-0">Darrell Steward</h5>
                          <span class="fs-sm text-muted">Project Manager at Company Ltd.</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
        
                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-3 mt-4"></div>
              </div>        
            </div>
          </div>
        </div>
      </section>


      <!-- Brands (Carousel) -->
      <section class="container pb-5">
        <div class="swiper mx-n2" data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="assets/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="assets/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="assets/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="assets/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide py-3">
              <a href="#" class="card card-body card-hover px-2 mx-2">
                <img src="assets/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
              </a>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 mt-4"></div>
        </div>
      </section>


      <!-- News slider -->
      <section class="bg-secondary border-bottom border-light py-5">
        <div class="container py-md-3 py-lg-5">
          <h2 class="h1 text-center pb-2">News &amp; Insights</h2>
          <div class="position-relative mx-md-2 px-md-5">

            <!-- Slider controls (Prev / next) -->
            <button type="button" id="news-prev" class="btn btn-prev btn-icon btn-sm position-absolute top-50 start-0 translate-middle-y mt-n4 d-none d-md-inline-flex">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="news-next" class="btn btn-next btn-icon btn-sm position-absolute top-50 end-0 translate-middle-y mt-n4 d-none d-md-inline-flex">
              <i class="bx bx-chevron-right"></i>
            </button>

            <!-- Swiper slider -->
            <div class="swiper swiper-nav-onhover mx-n2" data-swiper-options='{
              "slidesPerView": 1,
              "loop": true,
              "spaceBetween": 8,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "navigation": {
                "prevEl": "#news-prev",
                "nextEl": "#news-next"
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
                  <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
                    <div class="card-body pb-0">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">Tech</a>
                        <span class="fs-sm text-muted">1 day ago</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link">How the Millennial Lifestyle Changes as Service Prices Rise</a>
                      </h3>
                      <p class="mb-0">Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet. Mauris duis eleifend faucibus amet sagittis.</p>
                    </div>
                    <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">2</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">0</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">3</span>
                      </div>
                    </div>
                  </article>
                </div>
    
                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
                    <div class="card-body pb-0">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">Strategy</a>
                        <span class="fs-sm text-muted">12 hours ago</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link">Mobile App Generates Data for the Energy Management</a>
                      </h3>
                      <p class="mb-0">Sociis sit risus id. Sit facilisis dolor arcu, fermentum vestibulum arcu ele. Pulvinar at maecenas maecenas pharetra, tincidunt sollicitudin in in. </p>
                    </div>
                    <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">8</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">4</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">2</span>
                      </div>
                    </div>
                  </article>
                </div>
    
                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
                    <div class="card-body pb-0">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">Software</a>
                        <span class="fs-sm text-muted">May 24, 2021</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link">What the Software Stock Slump Means for the Market</a>
                      </h3>
                      <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                    </div>
                    <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">6</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">1</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">5</span>
                      </div>
                    </div>
                  </article>
                </div>
    
                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
                    <div class="card-body pb-0">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">Startups</a>
                        <span class="fs-sm text-muted">Sep 3, 2021</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link">5 Bad Landing Page Examples & How We Would Fix Them</a>
                      </h3>
                      <p class="mb-0">Totam, soluta placeat hic adipisci reprehenderit iusto est nulla dolorum doloremque inventore suscipit consequuntur distinctio id.</p>
                    </div>
                    <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">8</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">7</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">3</span>
                      </div>
                    </div>
                  </article>
                </div>
    
                <!-- Item -->
                <div class="swiper-slide h-auto py-3">
                  <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
                    <div class="card-body pb-0">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">Technology</a>
                        <span class="fs-sm text-muted">Aug 19, 2021</span>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html" class="stretched-link">Why UX Design Matters and How it Affects Ranking</a>
                      </h3>
                      <p class="mb-0">Quaerat quos assumenda numquam dolorem, repellendus est, itaque sint et odio perferendis laudantium laboriosam.</p>
                    </div>
                    <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">5</span>
                      </div>
                      <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">3</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">9</span>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
    
              <!-- Pagination (bullets) -->
              <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
            </div>
          </div>
        </div>
      </section>


      <!-- CTA -->
      <section class="position-relative bg-dark py-5">
        <span class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, .05)"></span>
        <div class="container position-relative zindex-5 text-center my-xl-3 py-1 py-md-4 py-lg-5">
          <p class="lead text-light opacity-70 mb-3">Ready to get started?</p>
          <h2 class="h1 text-light pb-3 pb-lg-0 mb-lg-5">Launch Your Project with Us</h2>
          <a href="#" class="btn btn-primary shadow-primary btn-lg">Work with us</a>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer dark-mode bg-dark pt-5 pb-4 pb-lg-5">
      <div class="container pt-lg-4">
        <div class="row pb-5">
          <div class="col-lg-4 col-md-6">
            <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
              <img src="assets/img/logo.svg" width="47" alt="BMoreCoin">
              BMoreCoin
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
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Case Studies</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">About Us</a></li>
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
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                <h6 class="mb-2">Contact Us</h6>
                <a href="mailto:email@example.com" class="fw-medium">email@example.com</a>
              </div>
            </div>
          </div>
        </div>
        <p class="fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
          <span class="text-light opacity-50">&copy; All rights reserved. Made by </span>
          <a class="nav-link d-inline-block p-0" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a>
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

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>