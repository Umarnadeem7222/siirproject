<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!--Magnific css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--Select2 css-->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!--Slicknav css-->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!--Bootstrap-Datepicker css-->
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <!--Jquery UI css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--Perfect-Scrollbar css-->
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <div>
    <header class="jobguru-header-area stick-top forsticky">
        <div class="menu-animation">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-2">
                    <div class="site-logo">
                       <a href="/">
                       <img src="assets/img/logo.png" alt="jobguru" class="non-stick-logo" />
                       <img src="assets/img/logo-2.png" alt="jobguru" class="stick-logo" />
                       </a>
                    </div>
                    <!-- Responsive Menu Start -->
                    <div class="jobguru-responsive-menu"></div>
                    <!-- Responsive Menu Start -->
                 </div>
                 <div class="col-lg-6">
                    <div class="header-menu">
                       <nav id="navigation">
                          <ul id="jobguru_navigation">
                             <li class="active has-children">
                                <a href="#">home</a>
                                <ul>
                                   <li><a href="index.html">Home 1</a></li>
                                   <li><a href="index-2.html">Home 2</a></li>
                                </ul>
                             </li>
                             <li class=" has-children">
                                <a href="#">for candidates</a>
                                <ul>
                                   <li class="has-inner-child">
                                      <a href="#">browse jobs</a>
                                      <ul>
                                         <li><a href="browse-jobs.html">full page grid</a></li>
                                         <li><a href="job-grid-sidebar.html">grid sidebar</a></li>
                                         <li><a href="job-list-sidebar.html">list sidebar</a></li>
                                      </ul>
                                   </li>
                                   <li><a href="browse-categories.html">Browse Categories</a></li>
                                   <li><a href="browse-companies.html">browse companies</a></li>
                                   <li><a href="single-candidates.html">candidates details</a></li>
                                   <li><a href="/form">submit resume</a></li>
                                   <li class="has-inner-child">
                                      <a href="#">candidate dashboard</a>
                                      <ul>
                                         <li><a href="candidate-dashboard.html">Candidate dashboard</a></li>
                                         <li><a href="candidate-profile.html">Candidate profile</a></li>
                                         <li><a href="message.html">messages</a></li>
                                         <li><a href="manage-jobs.html">manage jobs</a></li>
                                         <li><a href="candidate-earnings.html">earnings</a></li>
                                         <li><a href="change-password.html">change password</a></li>
                                      </ul>
                                   </li>
                                </ul>
                             </li>
                             <li class="has-children">
                                <a href="#">for employers</a>
                                <ul>
                                   <li><a href="browse-candidates.html">Browse Candidates</a></li>
                                   <li><a href="single-company.html">company details</a></li>
                                   <li><a href="post-job.html">Post A job</a></li>
                                   <li class="has-inner-child">
                                      <a href="#">employer dashboard</a>
                                      <ul>
                                         <li><a href="employer-dashboard.html">employer dashboard</a></li>
                                         <li><a href="company-profile.html">company profile</a></li>
                                         <li><a href="message.html">messages</a></li>
                                         <li><a href="manage-candidates.html">manage candidates</a></li>
                                         <li><a href="transaction.html">transaction</a></li>
                                         <li><a href="change-password.html">change password</a></li>
                                      </ul>
                                   </li>
                                </ul>
                             </li>
                             <li class="has-children">
                                <a href="#">pages</a>
                                <ul>
                                   <li><a href="about.html">About us</a></li>
                                   <li class="has-inner-child">
                                      <a href="#">blog</a>
                                      <ul>
                                         <li><a href="blog.html">blog</a></li>
                                         <li><a href="single-blog.html">single blog</a></li>
                                      </ul>
                                   </li>
                                   <li><a href="job-page.html">job page</a></li>
                                   <li><a href="/login">login</a></li>
                                   <li><a href="/register">register</a></li>
                                   <li><a href="/contact">contact us</a></li>
                                </ul>
                             </li>
                          </ul>
                       </nav>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="header-right-menu">
                       <ul>
                          <li><a href="post-job.html" class="post-jobs">Post jobs</a></li>
                          <li><a href="/register"><i class="fa fa-user"></i>sign up</a></li>
                          <li><a href="/login"><i class="fa fa-lock"></i>login</a></li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </header>

        <main class="py-4">
            @yield('content')
        </main>


        <footer class="jobguru-footer-area">
            <div class="footer-top section_50">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                           <div class="footer-logo">
                              <a href="index.html">
                              <img src="assets/img/logo.png" alt="jobguru logo" />
                              </a>
                           </div>
                           <p>Aliquip exa consequat dui aut repahend vouptate elit cilum fugiat pariatur lorem dolor cit amet consecter adipisic elit sea vena eiusmod nulla</p>
                           <ul class="footer-social">
                              <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#" class="gp"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                           <h3>recent post</h3>
                           <div class="latest-post-footer clearfix">
                              <div class="latest-post-footer-left">
                                 <img src="assets/img/footer-post-2.jpg" alt="post" />
                              </div>
                              <div class="latest-post-footer-right">
                                 <h4><a href="#">Website design trends for 2018</a></h4>
                                 <p>January 14 - 2018</p>
                              </div>
                           </div>
                           <div class="latest-post-footer clearfix">
                              <div class="latest-post-footer-left">
                                 <img src="assets/img/footer-post-3.jpg" alt="post" />
                              </div>
                              <div class="latest-post-footer-right">
                                 <h4><a href="#">UI experts and modern designs</a></h4>
                                 <p>January 12 - 2018</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                           <h3>main links</h3>
                           <ul>
                              <li><a href="#"><i class="fa fa-angle-double-right "></i> About jobguru</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right "></i> Delivery Information</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right "></i> Terms & Conditions</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right "></i> Customer support</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right "></i> Contact with an expert</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right "></i> community updates</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right "></i> upcoming updates</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget footer-contact">
                           <h3>Contact Info</h3>
                           <p><i class="fa fa-map-marker"></i> 4257 Street, SunnyVale, USA </p>
                           <p><i class="fa fa-phone"></i> 012-3456-789</p>
                           <p><i class="fa fa-envelope-o"></i> info@jobguru.com</p>
                           <p><i class="fa fa-envelope-o"></i> info@jobguru.com</p>
                           <p><i class="fa fa-fax"></i> 112-3456-7898</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="copyright-left">
                           <p>Copyright &copy; 2018 Themescare. All Rights Reserved</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
    </div>
       <!--Jquery js-->
       <script src="assets/js/jquery-3.6.0.min.js"></script>
       <!--Bootstrap js-->
       <script src="assets/js/bootstrap.bundle.min.js"></script>
       <!--Bootstrap Datepicker js-->
       <script src="assets/js/bootstrap-datepicker.min.js"></script>
       <!--Perfect Scrollbar js-->
       <script src="assets/js/jquery-perfect-scrollbar.min.js"></script>
       <!--Owl-Carousel js-->
       <script src="assets/js/owl.carousel.min.js"></script>
       <!--SlickNav js-->
       <script src="assets/js/jquery.slicknav.min.js"></script>
       <!--Magnific js-->
       <script src="assets/js/jquery.magnific-popup.min.js"></script>
       <!--Select2 js-->
       <script src="assets/js/select2.min.js"></script>
       <!--jquery-ui js-->
       <script src="assets/js/jquery-ui.min.js"></script>
       <!--Jarallax js-->
       <script src="assets/js/jarallax.min.js"></script>
       <script src="assets/js/jarallax-video.min.js"></script>
       <!--Main js-->
       <script src="assets/js/main.js"></script>
</body>

</html>
