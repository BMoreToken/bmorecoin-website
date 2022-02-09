<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BMoreCoin | Case Study</title>
    <!-- Custom Scripts -->
    <script type="text/javascript" src="bmorecoin.js"></script>

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
          <li class="breadcrumb-item">
            <a href="case_studies.php">Case Studies</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Case Study</li>
        </ol>
      </nav>


      <!-- Page title -->
      <section class="container pb-4 mb-2 mb-lg-3">
        <h1>Single Project 3D Rendering of Human Sculpture</h1>
        <p class="text-muted mb-0">NTF / Graphic Design / Art / Identity / Motion Design </p>
      </section>


      <!-- Hero image (Parallax) -->
      <section class="jarallax" data-jarallax data-speed="0.5">
        <div class="jarallax-img" style="background-image: url(assets/img/portfolio/single/hero.jpg);"></div>
        <div class="d-none d-xxl-block" style="height: 800px;"></div>
        <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
        <div class="d-md-none" style="height: 400px;"></div>
      </section>


      <!-- About project -->
      <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
              <h2 class="h1 mb-4">About</h2>
              <p class="fs-lg mb-0">Lacinia pulvinar at diam, urna, non blandit. Cras id enim tortor nascetur. Cursus ante eu nam ut non vestibulum sem. Ullamcorper quis varius eu, vel. Sagittis ut suspendisse et, nec. Parturient eu iaculis sit dolor, erat mauris. Leo at egestas aliquet duis pellentesque amet. Proin mattis ac ornare malesuada sed. Diam libero tortor suspendisse molestie non duis enim. Lectus pulvinar euismod et risus egestas. Cursus porttitor id faucibus eu vestibulum. Eu blandit faucibus nulla adipiscing amet ullamcorper.</p>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
            <div class="ps-lg-4 ms-lg-3">
              <h3 class="h5 d-flex align-items-center">
                <i class="bx bx-help-circle text-primary fs-4 me-2"></i>
                Challenge
              </h3>
              <p class="pb-4 mb-0 mb-lg-3">Ultricies massa iaculis vestibulum egestas vestibulum, cursus. Leo non arcu ultricies senectus a purus sed.</p>
              <h3 class="h5 d-flex align-items-center">
                <i class="bx bx-bulb text-primary fs-4 me-2"></i>
                Solution
              </h3>
              <p class="mb-0">Sit tellus id proin viverra iaculis pellentesque ornare. Diam augue sit feugiat porttitor leo, fusce vel ac. Placerat vulputate quisque.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Image grid (Parallax) -->
      <section class="container position-relative pt-1 pt-md-3">
        <div class="row align-items-start">
          <div class="col-lg-5 col-sm-6 mb-4 mb-sm-0" data-jarallax-element="20" data-disable-parallax-down="sm">
            <img src="assets/img/portfolio/single/01.jpg" class="rounded-3" width="526" alt="Image">
          </div>
          <div class="col-lg-7 col-sm-6 d-sm-flex justify-content-end pt-sm-4 pt-lg-5 mt-md-3 mb-4 mb-sm-0" data-jarallax-element="40" data-disable-parallax-down="sm">
            <img src="assets/img/portfolio/single/03.jpg" class="rounded-3" width="416" alt="Image">
          </div>
          <div class="col-lg-5 col-sm-6 d-sm-flex justify-content-lg-end pt-sm-5 mt-lg-5 mb-4 mb-sm-0" data-jarallax-element="40" data-disable-parallax-down="sm">
            <img src="assets/img/portfolio/single/04.jpg" class="rounded-3" width="416" alt="Image">
          </div>
          <div class="col-lg-7 col-sm-6 d-sm-flex justify-content-center mt-sm-n5 mb-4 mb-sm-0" data-jarallax-element="10" data-disable-parallax-down="sm">
            <img src="assets/img/portfolio/single/05.jpg" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image">
          </div>
        </div>
        <div class="row position-sm-absolute top-50 start-0 translate-middle-sm-y w-100 d-flex mt-md-n5">
          <div class="col-lg-5 col-sm-6 offset-sm-3 offset-lg-4 mt-sm-n5" data-jarallax-element="-50" data-disable-parallax-down="sm">
            <img src="assets/img/portfolio/single/02.jpg" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image">
          </div>
        </div>
      </section>


      <!-- Results -->
      <section class="container py-5 my-2 my-md-4 my-lg-5">
        <div class="row py-md-3">
          <div class="col-md-3 offset-lg-1">
            <h2>Results</h2>
          </div>
          <div class="col-lg-7 col-md-9">
            <p class="fs-lg pb-4 mb-2 mb-lg-3">Vitae eget in vulputate quam. Turpis habitasse egestas vitae, sed tortor, nunc. Enim, magna duis lectus mauris magna orci, nunc. Tincidunt ultrices mauris, sed quisque. Vulputate volutpat egestas facilisi morbi proin sagittis. Ipsum eleifend commodo eu, at et adipiscing. Viverra turpis sem in tincidunt viverra aliquet eleifend. Adipiscing elit, donec volutpat ante aliquet imperdiet quis hendrerit.</p>
            <div class="row row-cols-1 row-cols-sm-3 g-4">
              <div class="col">
                <h3 class="h1 mb-2">+1,200</h3>
                <p class="mb-0"><span class="fw-semibold">Requests</span> per Week</p>
              </div>
              <div class="col">
                <h3 class="h1 mb-2">+760</h3>
                <p class="mb-0"><span class="fw-semibold">New Clients</span> per Month</p>
              </div>
              <div class="col">
                <h3 class="h1 mb-2">+480</h3>
                <p class="mb-0"><span class="fw-semibold">Remote</span> Sales Experts</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Testimonial -->
      <section class="bg-secondary py-5">
        <div class="container py-2 py-md-4 py-lg-5">
          <div class="row">
            <div class="col-md-4">
              <div class="position-relative d-flex h-100">
                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url(assets/img/testimonials/03.jpg);"></div>
              </div>
            </div>
            <div class="col-md-8">
              <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
                <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
                  <i class="bx bxs-quote-left"></i>
                </span>
                <blockquote class="card-body mt-2 mb-0">
                  <p class="fs-lg">Dolor, a eget elementum, integer nulla volutpat, nunc, sit. Quam iaculis varius mauris magna sem. Egestas sed sed suscipit dolor faucibus dui imperdiet at eget. Tincidunt imperdiet quis hendrerit aliquam feugiat neque cras sed. Dictum quam integer volutpat tellus, faucibus platea. Pulvinar turpis proin faucibus at mauris.</p>
                </blockquote>
                <figcaption class="card-footer border-0 d-sm-flex pt-0 mt-n3 mt-lg-0">
                  <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-4">
                    <img src="assets/img/avatar/05.jpg" width="48" class="d-md-none rounded-circle" alt="Ralph Edwards">
                    <div class="ps-3 ps-md-0">
                      <h5 class="fw-semibold lh-base mb-0">Ralph Edwards</h5>
                      <span class="fs-sm text-muted">Head of Marketing</span>
                    </div>
                  </div>
                  <img src="assets/img/brands/02.svg" width="160" class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </section>


      <!-- Related projects (Carousel on narrow screens) -->
      <section class="container py-5 mt-2 mt-md-4 mt-lg-5 mb-xl-2">
        <h2 class="h1 text-center pt-2 pt-md-3 pb-4 mb-2 mb-lg-3">Explore More Projects</h2>
        <div class="swiper" data-swiper-options='{
          "slidesPerView": 1,
          "spaceBetween": 24,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "560": {
              "slidesPerView": 2
            },
            "1000": {
              "slidesPerView": 3
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <div class="card card-portfolio">
                <div class="card-img">
                  <img src="assets/img/portfolio/single/related01.jpg" alt="Image">
                </div>
                <div class="card-body">
                  <h3 class="h4 mb-2">
                    <a href="portfolio-single-project.html" class="stretched-link">3D Shape Illustration</a>
                  </h3>
                  <div class="card-portfolio-meta">
                    <span class="text-muted">3D Design / Illustratio / Art</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <div class="card card-portfolio">
                <div class="card-img">
                  <img src="assets/img/portfolio/single/related02.jpg" alt="Image">
                </div>
                <div class="card-body">
                  <h3 class="h4 mb-2">
                    <a href="portfolio-single-project.html" class="stretched-link">Mobile Banking App</a>
                  </h3>
                  <div class="card-portfolio-meta">
                    <span class="text-muted">Mobile App Desig / UI / UX</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide h-auto">
              <div class="card card-portfolio">
                <div class="card-img">
                  <img src="assets/img/portfolio/single/related03.jpg" alt="Image">
                </div>
                <div class="card-body">
                  <h3 class="h4 mb-2">
                    <a href="portfolio-single-project.html" class="stretched-link">Big Blue Whale Shape</a>
                  </h3>
                  <div class="card-portfolio-meta">
                    <span class="text-muted">3D Pollygonal Shape / Graphic Design / Art</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-sm-2 mt-4"></div>
        </div>
      </section>


      <!-- Contact CTA -->
      <section class="container pb-lg-2 mt-md-n2">
        <div class="card border-0 bg-gradient-primary">
          <div class="card-body p-md-5 p-4 bg-size-cover" style="background-image: url(assets/img/landing/digital-agency/contact-bg.png);">
            <div class="py-md-5 py-4 text-center">
              <h3 class="h4 fw-normal text-light opacity-75">Want to work with us? Let’s talk</h3>
              <a href="mailto:email@example.com" class="display-6 text-light">email@example.com</a>
              <div class="pt-md-5 pt-4 pb-md-2">
                <a href="contacts-v1.html" class="btn btn-lg btn-light">Contact us</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer pt-5 pb-4 pb-lg-5">
      <div class="container pt-lg-4">
        <div class="row pb-5">
          <div class="col-lg-4 col-md-6">
            <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
              <img src="assets/img/logo.svg" width="47" alt="Silicon">
              Silicon
            </div>
            <p class="fs-sm pb-lg-3 mb-4">Proin ipsum pharetra, senectus eget scelerisque varius pretium platea velit. Lacus, eget eu vitae nullam proin turpis etiam mi sit. Non feugiat feugiat egestas nulla nec. Arcu tempus, eget elementum dolor ullamcorper sodales ultrices eros.</p>
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
                    <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Behance</a></li>
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
          &copy; 2021 - <?PHP echo date('Y'); ?> All rights reserved. Made by 
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
    <script src="assets/vendor/jarallax/dist/jarallax-element.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main Theme Script -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>
