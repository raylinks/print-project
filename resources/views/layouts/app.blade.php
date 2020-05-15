<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>E-xact Digital Print Media
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('template/css/vendor.min.css')}}">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('template/css/styles.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('template/css/main.css')}}">
    <!-- Modernizr-->
    <script src="{{asset('template/js/modernizr.min.js')}}"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">WELCOME TO SOMETHING PRINT</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class=""><span><a href="#">HOME</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="#">ABOUT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="#">FAQ</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="#">BLOG</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">SOMETHING</a></li>
              <li><a href="#">MORE SOMETHING</a></li>
            </ul>
          </li>
          <li class=""><span><a href="#">CONTACT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="#">PROSUCT AND SERVICES</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Something</a></li>
              <li><a href="#">Something</a></li>
              <li><a href="#">Something</a></li>
            </ul>
          </li>
          <li class=""><span><a href="#">SPECIAL OFFERS</a><span class="sub-menu-toggle"></span></span>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">WELCOME TO SOMETHING PRINT</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class=""><span><a href="#">HOME</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="#">ABOUT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="#">FAQ</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="#">BLOG</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">SOMETHING</a></li>
              <li><a href="#">MORE SOMETHING</a></li>
            </ul>
          </li>
          <li class=""><span><a href="#">CONTACT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="#">PRODUCTs AND SERVICES</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Something</a></li>
              <li><a href="#">Something</a></li>
              <li><a href="#">Something</a></li>
            </ul>
          </li>
          <li class=""><span><a href="#">SPECIAL OFFERS</a><span class="sub-menu-toggle"></span></span>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Topbar-->
    <div class="topbar">
      <div class="topbar-column"><a class="hidden-md-down" href="mailto:"><i class="icon-mail"></i>&nbsp; company email</a><a class="hidden-md-down" href="tel:"><i class="icon-bell"></i>&nbsp; +234 802 600 0690</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky navbar-ghost">
      <div class="site-branding">
        <div class="inner">
          {{-- <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a> --}}
          <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          <!-- Site Logo--><a class="site-logo" href="{{url('/')}}"><img src="" alt="Title|Company"></a>
        </div>
      </div>
      <!-- Main Navigation-->
        <nav class="site-menu">
        <ul>
        @if(\Request::is('home'))
          <li class="active"><a href="{{url('/')}}"><span>Home</span></a>
          </li>
        @else
          <li class=""><a href="{{url('/')}}"><span>Home</span></a>
          </li>
        @endif
        @if(\Request::is('aboutUs'))
          <li class="active"><a href="{{url('/aboutUs')}}"><span>ABOUT US</span></a>
          </li>
        @else
        <li class=""><a href="{{url('/aboutUs')}}"><span>ABOUT US</span></a>
          </li>
        @endif
        @if(\Request::is('faq'))
          <li class="active"><a href="{{url('/faq')}}"><span>FAQ</span></span></a>
          </li>
        @else
        <li class=""><a href="{{url('/faq')}}"><span>FAQ</span></span></a>
          </li>
        @endif
        @if(\Request::is('blog'))
          <li class="active"><a href="{{url('/blog')}}"><span>BLOG</span></a>
            <ul class="sub-menu">
                <li><a href="">SOMETHING</a></li>
                <li><a href="">SOMETHING</a></li>
            </ul>
          </li>
        @else
        <li><a href="{{url('/blog')}}"><span>BLOG</span></a>
            <ul class="sub-menu">
                <li><a href="">SOMETHING</a></li>
                <li><a href="">SOMETHING</a></li>
            </ul>
          </li>
        @endif
        @if(\Request::is('contactUs'))
          <li class="active"><a href="{{url('/contactUs')}}"><span>CONTACT US</span></a>
          </li>
        @else
        <li><a href="{{url('/contactUs')}}"><span>CONTACT US</span></a>
          </li>
        @endif
          <li class="has-megamenu"><a href="{{url('/products_and_services')}}"><span>PRODUCTS AND SERVICES</span></a>
            <ul class="mega-menu">
              <li><span class="mega-menu-title">PRODUCT 1</span>
                  <ul class="sub-menu">
                    <li><a href="">something </a></li>
                    <li><a href="">something </a></li>
                    <li><a href="">something </a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">PRODUCT 2</span>
                  <ul class="sub-menu">
                    <li><a href="">something</a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{url('/special_offers')}}"><span>SPECIAL OFFER</span></a>
          </li>
        </ul>
      </nav>
      <!-- Toolbar-->

    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Content-->
      @yield('content')
      <!-- Site Footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Contact Info-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Get In Touch With Us</h3>
                <p class="text-white">Phone: +234 802 600 0690</p>
                <ul class="list-unstyled text-sm text-white">
                  <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 5.00 pm</li>
                  <li><span class="opacity-50">Saturday:</span>10.00 am - 3.00 pm</li>
                </ul>
                <p><a class="navi-link-light" href="#">company email</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6 ">
              <!-- About Us-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Blog</a></li>
                </ul>
              </section>
            </div>
          </div>
          <hr class="hr-light mt-2 margin-bottom-2x">
          <!-- Copyright-->
          <p class="footer-copyright">© All rights reserved. E-xact Digital Print Media</p>
        </div>
      </footer>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{asset('template/js/main.js')}}"></script>
    <script src="{{asset('template/js/vendor.min.js')}}"></script>
    <script src="{{asset('template/js/scripts.min.js')}}"></script>
  </body>
</html>
