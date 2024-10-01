<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themepresss.com/tf/html/sadakat-live/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 09:04:08 GMT -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="wpoceans" />
  <title>
    <?php
    if (isset($_GET['page'])) {
      $pageTitle = htmlspecialchars($_GET['page']) . " || Huzaifa Foundation";
      echo $pageTitle;
    } else {
      echo "Huzaifa Foundation";
    }
    ?>
  </title>
  <link href="assets/css/themify-icons.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/flaticon.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/animate.css" rel="stylesheet" />
  <link href="assets/css/owl.carousel.css" rel="stylesheet" />
  <link href="assets/css/owl.theme.css" rel="stylesheet" />
  <link href="assets/css/slick.css" rel="stylesheet" />
  <link href="assets/css/slick-theme.css" rel="stylesheet" />
  <link href="assets/css/swiper.min.css" rel="stylesheet" />
  <link href="assets/css/owl.transitions.css" rel="stylesheet" />
  <link href="assets/css/jquery.fancybox.css" rel="stylesheet" />
  <link href="assets/css/odometer-theme-default.css" rel="stylesheet" />
  <link href="assets/css/nice-select.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/light.css" rel="stylesheet" />

  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo-1.png">
  <link rel="icon" type="image/png" href="assets/images/logo-1.png" sizes="32x32">
  <link rel="icon" type="image/png" href="assets/images/logo-1.png" sizes="16x16">

  <style>
    .img-holder-services {
      width: 100%;
      height: 300px;
      /* Set the height as desired */
      overflow: hidden;
      /* Hide any overflow */
    }

    .img-holder-services img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Maintain aspect ratio while covering the entire area */
    }

    .p-text {
      font-size: 20px;
    }

    .list-st>li {
      padding-top: 10px;
    }
  </style>
</head>

<body>
  <!-- start page-wrapper -->
  <div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header" class="tp-site-header tp-header-style-3">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col col-md-6 col-sm-7 col-12">
              <div class="contact-intro">
                <ul>
                  <li><i class="fi flaticon-call"></i>+2348089446990</li>
                  <li>
                    <i class="fi flaticon-envelope"></i> info@huzaifafoundation.org
                  </li>
                </ul>
              </div>
            </div>
            <div class="col col-md-6 col-sm-5 col-12">
              <div class="contact-info">
                <ul>
                  <li>
                    <a class="theme-btn" href="?page=Contact-Us">Donate Now</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end topbar -->
      <nav class="navigation navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="open-btn">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?page=Home"><img src="assets/images/huzzfoundLG.png" alt="logo" style="width: 180px;" /></a>
          </div>
          <div
            id="navbar"
            class="navbar-collapse collapse navbar-right navigation-holder">
            <button class="close-navbar"><i class="ti-close"></i></button>
            <ul class="nav navbar-nav">
              <li><a href="?page=Home">Home</a></li>
              <li><a href="?page=About">About</a></li>
              <li><a href="?page=Projects">Projects</a></li>
              <li><a href="?page=Contact-Us">Contact</a></li>
            </ul>
          </div>
          <!-- end of nav-collapse -->
          <div class="cart-search-contact">
            <div class="header-search-form-wrapper">
              <button class="search-toggle-btn">
                <i class="fi flaticon-magnifying-glass"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- end of container -->
      </nav>
    </header>
    <!-- end of header -->

    <?php
    if (isset($_GET['page'])) {
      switch ($_GET['page']) {
        case 'Home':
          include("pages/home.php");
          break;

        case 'About':
          include("pages/about.php");
          break;

        case 'Projects':
          include("pages/projects.php");
          break;

        case 'Contact-Us':
          echo '<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>';
          include("pages/contact.php");
          break;

        case 'Project-Detail':
          include("pages/project_detail.php");
          break;

        default:
          include("pages/home.php");
          break;
      }
    } else {
      include("pages/home.php");
    }
    ?>

  </div>
  <!-- end of page-wrapper -->

  <!-- news-letter-section end-->
  <div class="tp-ne-footer">
    <!-- start tp-site-footer -->
    <footer class="tp-site-footer">
      <div class="tp-upper-footer">
        <div class="container">
          <div class="row">
            <div class="col col-lg-3 col-md-3 col-sm-6">
              <div class="widget about-widget">
                <div class="logo widget-title">
                  <img
                    class="ft-logo-1"
                    src="assets/images/huzzfoundLG.png"
                    alt="blog" />
                  <img
                    class="ft-logo-2"
                    src="assets/images/huzzfoundLG.png"
                    alt="blog" />
                </div>
                <p>
                  Join us in creating lasting change. Whether
                  you're a volunteer, partner, or donor, your
                  support helps us bring hope to children, youth,
                  and women all over.
                </p>
                <ul>
                  <li>
                    <div class="parallax-wrap">
                      <div class="parallax-element">
                        <a href="#">
                          <i class="ti-facebook"></i>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="parallax-wrap">
                      <div class="parallax-element">
                        <a href="#">
                          <i class="ti-twitter-alt"></i>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="parallax-wrap">
                      <div class="parallax-element">
                        <a href="#">
                          <i class="ti-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col col-lg-2 col-md-3 col-sm-6">
              <div class="widget link-widget">
                <div class="widget-title">
                  <h3>Useful Links</h3>
                </div>
                <ul>
                  <li><a href="?pag=About">About Us</a></li>
                  <li><a href="?pag=Gallery">Gallery</a></li>
                  <li><a href="?pag=Contact-Us">Donate</a></li>
                  <li><a href="?pag=Contact-Us">Contact Us</a></li>
                  <li><a href="?pag=Projects">Our Projects</a></li>
                </ul>
              </div>
            </div>
            <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
              <div class="widget market-widget tp-service-link-widget">
                <div class="widget-title">
                  <h3>Contact</h3>
                </div>
                <p>
                  We exist to accelerate progress in society towards a
                  fair and sustainable future for all.
                </p>
                <div class="contact-ft">
                  <ul>
                    <li>
                      <i class="fi flaticon-pin"></i>15b Yalinga Street, Wuse 2
                      FCT-Abuja, Nigeria
                    </li>
                    <li><i class="fi flaticon-call"></i>+000123456789</li>
                    <li>
                      <i class="fi flaticon-envelope"></i>huzaifafoundation@gmail.com
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-sm-6">
              <div class="widget instagram">
                <div class="widget-title">
                  <h3>Instagram</h3>
                </div>
                <ul class="d-flex">
                  <li>
                    <a href="#"><img src="assets/images/instragram/1.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="assets/images/instragram/2.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="assets/images/instragram/3.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="assets/images/instragram/4.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="assets/images/instragram/5.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="assets/images/instragram/6.jpg" alt="" /></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end container -->
      </div>
      <div class="tp-lower-footer">
        <div class="container">
          <div class="row">
            <div class="col col-xs-12">
              <p class="copyright">
                &copy; 2024 HuzaifaFoundation. All rights reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end tp-site-footer -->
  </div>

  <!-- theme-change-btn -->
  <div class="theme-change-btn">
    <button id="change-theme-btn">
      <span class="cng-btn-1">Light <i class="ti-palette"></i></span>
      <span class="cng-btn-2">Dark <i class="ti-palette"></i></span>
    </button>
  </div>

  <div id="magic-cursor">
    <div id="ball">
      <div id="ball-drag-x"></div>
      <div id="ball-drag-y"></div>
      <div id="ball-loader"></div>
    </div>
  </div>
  <!-- All JavaScript files
    ================================================== -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Plugins for this template -->
  <script src="assets/js/jquery-plugin-collection.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <!-- Custom script for this template -->
  <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from themepresss.com/tf/html/sadakat-live/?page=About by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 09:08:53 GMT -->

</html>