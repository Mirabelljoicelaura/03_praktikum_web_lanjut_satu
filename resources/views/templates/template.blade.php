<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motor Website Template</title>
  <meta name="description" content="">
<!--
Motor Template
http://www.templatemo.com/tm-463-motor
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>
      <body class="about-page">

        <!-- Preloader -->
        <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
        <!-- End Preloader -->

        <section class="templatemo-top-section">
          <div class="templatemo-header">
            <img class="templatemo-header-img" src="img/header.png" alt="Header">
            <h1 class="templatemo-site-name">Motor</h1>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <div class="templatemo-nav-container">
              <nav class="templatemo-nav">
                <ul>
                 <li><a href="index.html" class="active">Home</a></li>
                 <li><a href="products">Products</a></li>
                 <li><a href="service">Services</a></li>
                 <li><a href="gallery">Gallery</a></li>
                 <li><a href="contact">Contact</a></li>
               </ul>
             </nav>
           </div>
         </div>


@yield('konten')
 <!--Footer content-->
 <footer class="tm-footer">
    <div class="container">
      <div class="row margin-bottom-60">
        <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
          <h3 class="tm-footer-div-title">Main Menu</h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="gallery.html">Directory</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="services.html">Our Services</a></li>
          </ul>
        </nav>

        <div class="col-lg-5 col-md-5 tm-footer-div">
          <h3 class="tm-footer-div-title">About Us</h3>
          <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
          <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
        </div>
        <div class="col-lg-4 col-md-4 tm-footer-div">
          <h3 class="tm-footer-div-title">Get Social</h3>
          <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
          <div class="tm-social-icons-container">
            <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
            <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
      <div class="row tm-copyright">
        <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Company Name</p>
      </div>
    </div>
  </footer> <!-- Footer content-->

  <!-- JS -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
  <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
  <script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
  <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        prevText: "&#xf104;",
        nextText: "&#xf105;"
      });

      // Remove preloader
      // https://ihatetomatoes.net/create-custom-preloading-screen/
      $('body').addClass('loaded');
    });
  </script>
</body>
</html>