<!DOCTYPE html>
<!-- Testo - Pizza and Fast Food Landing Page Template design design by Jthemes (http://www.jthemes.net) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jthemes" />
    <meta name="description" content="Testo - Pizza and Fast Food Landing Page Template" />
    <meta name="keywords"
        content="Jthemes, Food, Fast Food, Restaurant, Pizzeria, Restaurant Menu, Pizza, Burger, Sushi, Steak, Grill, Snack">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>Azza Koi Farm</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="{{ asset('files/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('files/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('files/images/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('files/images/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('files/images/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('files/images/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('files/images/apple-touch-icon.png') }}" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('files/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('files/css/flaticon.css') }}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{ asset('files/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('files/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('files/css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('files/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('files/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('files/css/jquery.datetimepicker.min.css') }}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{{ asset('files/css/style.css') }}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{{ asset('files/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>




<body>




    <!-- PRELOADER SPINNER
  ============================================= -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="cssload-spinner">
                <div class="cssload-ball cssload-ball-1"></div>
                <div class="cssload-ball cssload-ball-2"></div>
                <div class="cssload-ball cssload-ball-3"></div>
                <div class="cssload-ball cssload-ball-4"></div>
            </div>
        </div>
    </div>




    <!-- HEADER-1
  ============================================= -->
    <header id="header-1" class="header navik-header header-shadow center-menu-1 header-transparent">
        <div class="container">


            <!-- NAVIGATION MENU -->
            <div class="navik-header-container">


                <!-- CALL BUTTON -->
                <div class="callusbtn"><a href="tel:123456789"><i class="fas fa-phone"></i></a></div>


                <!-- LOGO IMAGE -->
                <div class="logo" data-mobile-logo="{{ asset('files/images/logo.png') }}"
                    data-sticky-logo="{{ asset('files/images/logo-3.png') }}">
                    <a href="#hero-9">
                        <img src="{{ asset('files/images/logo.png') }}" alt="header-logo" /></a>
                </div>


                <!-- BURGER MENU -->
                <div class="burger-menu">
                    <div class="line-menu line-half first-line"></div>
                    <div class="line-menu"></div>
                    <div class="line-menu line-half last-line"></div>
                </div>


                <!-- MAIN MENU -->
                <nav class="navik-menu menu-caret navik-meat">
                    <ul class="top-list">

                        <!-- DROPDOWN MENU -->
                        <li>
                            <a href="#">Beranda</a>
                        </li>

                        <!-- Tentang Kami -->
                        <li class="mega-menu">
                            <a href="#">Tentang Kami</a>
                        </li> <!-- END MEGA MENU -->

                    </ul>
                    <ul>

                        <!-- DROPDOWN MENU -->
                        <li>
                            <a href="#">Produk</a>
                        </li>

                        <!-- DROPDOWN MENU -->
                        <li>
                            <a href="#">Kontak</a>
                        </li>


                    </ul>
                </nav> <!-- END MAIN MENU -->


            </div> <!-- END NAVIGATION MENU -->


        </div> <!-- End container -->
    </header> <!-- END HEADER-1 -->




    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">

        @yield('content')




        <!-- HERO-9
   ============================================= -->
        <!-- FOOTER-2
   ============================================= -->
        <footer id="footer-2" class="footer division">
            <div class="container">
                <div class="footer-2-holder text-center">
                    <div class="row">


                        <!-- FOOTER INFO -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-info mb-30">

                                <!-- Title -->
                                <h5 class="h5-md">Location</h5>

                                <!-- Address -->
                                <p>8721 M Central Avenue,</p>
                                <p>Los Angeles, CA 90036,</p>
                                <p>United States</p>

                            </div>
                        </div>


                        <!-- WORKING HOURS -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-info mb-30">

                                <!-- Title -->
                                <h5 class="h5-md">Working Hours</h5>

                                <!-- Text -->
                                <p>Mon-Fri: 9:00AM - 10:00PM</p>
                                <p>Saturday: 10:00AM - 8:30PM</p>
                                <p>Sunday: 12:00PM - 5:00PM</p>

                            </div>
                        </div>


                        <!-- FOOTER CONTACTS -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-contacts mb-30">

                                <!-- Title -->
                                <h5 class="h5-md">Order Now</h5>

                                <p>Quaerat neque purus ipsum at neque dolor primis tempus</p>
                                <p class="mt-5"><span class="meat-color"><a
                                            href="tel:123456789">789-654-3210</a></span></p>

                            </div>
                        </div>


                        <!-- FOOTER IMAGES -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="footer-socials-links mb-30">

                                <!-- Title -->
                                <h5 class="h5-md">Follow Us</h5>

                                <!-- Text -->
                                <p>Quaerat neque purus ipsum at neque dolor primis tempus</p>

                                <!-- List -->
                                <ul class="foo-socials text-center clearfix">
                                    <li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a>
                                    </li>

                                    <!--
          <li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>
          <li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>
          <li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>
          <li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>
          <li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
          <li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>-->
                                </ul>

                            </div>
                        </div> <!-- END FOOTER IMAGES -->


                    </div> <!-- END FOOTER CONTENT -->


                    <!-- FOOTER COPYRIGHT -->
                    <div class="bottom-footer">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-10 offset-lg-1">

                                <!-- Links List -->
                                <ul class="bottom-footer-list clearfix">
                                    <li>
                                        <p>&copy; 2020 Testo. All Rights Reserved</p>
                                    </li>
                                    <li>
                                        <p class="first-li"><a href="#">About Us</a></p>
                                    </li>
                                    <li>
                                        <p><a href="#">Gift Cards</a></p>
                                    </li>
                                    <li>
                                        <p><a href="#">Terms Of Use</a></p>
                                    </li>
                                    <li>
                                        <p class="last-li"><a href="#">Privacy Policy</a></p>
                                    </li>
                                </ul>

                            </div>
                        </div> <!-- End row -->
                    </div> <!-- END FOOTER COPYRIGHT -->


                </div> <!-- End footer-2-holder -->
            </div> <!-- End container -->
        </footer> <!-- END FOOTER-2 -->
    </div> <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
  ============================================= -->
    <script src="{{ asset('files/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('files/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('files/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('files/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('files/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('files/js/jquery.scrollto.js') }}"></script>
    <script src="{{ asset('files/js/menu.js') }}"></script>
    <script src="{{ asset('files/js/materialize.js') }}"></script>
    <script src="{{ asset('files/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('files/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('files/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('files/js/contact-form.js') }}"></script>
    <script src="{{ asset('files/js/comment-form.js') }}"></script>
    <script src="{{ asset('files/js/booking-form.js') }}"></script>
    <script src="{{ asset('files/js/jquery.datetimepicker.full.js') }}"></script>
    <script src="{{ asset('files/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('files/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{asset('files/js/custom.js')}}"></script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
   <script src="js/html5shiv.js" type="text/javascript"></script>
   <script src="js/respond.min.js" type="text/javascript"></script>
  <![endif] -->

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
  <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXX-X']);
      _gaq.push(['_trackPageview']);

      (function() {
          var ga = document.createElement('script');
          ga.type = 'text/javascript';
          ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
              '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(ga, s);
      })();
  </script>
  -->



</body>



</html>
