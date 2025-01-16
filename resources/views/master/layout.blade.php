<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>IIUM SMASHERS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .main {
            min-height: calc(100vh - 60px); /* Adjust based on your footer's height */
            padding-bottom: 60px;
        }

        footer {
            background-color: #214e20;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            width: 100%;
            position: relative;
        }

        /* Additional styles like navbar, other content, etc. */
    </style>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">IIUM SMASHERS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="/" class="active">Home<br></a></li>
            <li><a href="{{ route('membership.index') }}">Membership</a></li>
            <li><a href="{{ route('index-booking.index') }}">Court Booking</a></li>
            <li><a href="{{ route('friendly.index') }}">Friendly</a></li>
            <li><a href="{{ route('inquiries.index') }}">Inquiries</a></li>
            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
            <li><a href="{{ route('payment.index') }}">Payment</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>




            {{-- <li><a href="#services">Services</a></li>
           <li><a href="#portfolio">Portfolio</a></li>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>s
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> --}}
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    @yield('content')

  </main>

  <footer>
    <div style="text-align: left; font-size:20px;">
        <p>Follow us for more updates!</p>
        <div>
            <img src="assets/img/tiktokrbg.png" alt="TikTok" style="width: 40px; margin-right: 5px;">
            <img src="assets/img/twitterrbg.png" alt="Twitter" style="width: 40px; margin-right: 5px;">
            <img src="assets/img/fbrbg.png  " alt="Facebook" style="width: 40px; margin-right: 5px;">
            <img src="assets/img/igrgb.png" alt="Instagram" style="width: 40px;">
        </div>
    </div>
    <div style="font-size: 20px;">
        <p>In Collaboration with:</p>
        <div class="partner-logos">
            <img src="assets/img/iiumustangrgb.png" alt="Mustangs" style="height: 70px; margin-right: 10px;">
            <img src="assets/img/iiumrbg.png" alt="Partner" style="height: 70px; margin-right: 35px;">
        </div>
    </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
