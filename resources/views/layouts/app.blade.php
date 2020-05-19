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

    <link rel="icon" type="image/jpeg" href="{{asset('template/images/bg-images/logo.jpeg')}}">
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
    @include('inc.modalcreate')
    <!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">WELCOME TO SOMETHING PRINT</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class=""><span><a href="{{url('/')}}">HOME</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="{{url('/aboutUs')}}">ABOUT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="{{url('/faq')}}">FAQ</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="{{url('/blog')}}">BLOG</a><span class="sub-menu-toggle"></span></span>
            {{-- <ul class="offcanvas-submenu">
              <li><a href="#">SOMETHING</a></li>
              <li><a href="#">MORE SOMETHING</a></li>
            </ul> --}}
          </li>
          <li class=""><span><a href="{{url('/contactUs')}}">CONTACT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="{{url('/products_and_services')}}">PRODUCT AND SERVICES</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">COPORATE BRANDING</a></li>
              <li><a href="#">LOGO DESIGN</a></li>
              <li><a href="#">OFFICE BRANDING</a></li>
              <li><a href="#">ROLL UP BANNERS</a></li>
              <li><a href="#">FLYING FLAG BANNERS</a></li>
              <li><a href="#">FLYERS BROCHURES </a></li>
              <li><a href="#">POSTERS</a></li>
            </ul>
          </li>
          <li class=""><span><a href="{{url('/special_offers')}}">SPECIAL OFFERS</a><span class="sub-menu-toggle"></span></span>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">WELCOME TO E-xact Print Media</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class=""><span><a href="{{url('/')}}">HOME</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="{{url('/aboutUs')}}">ABOUT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class=""><span><a href="{{url('/faq')}}">FAQ</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="{{url('/blog')}}">BLOG</a><span class="sub-menu-toggle"></span></span>
            {{-- <ul class="offcanvas-submenu">
              <li><a href="#">SOMETHING</a></li>
              <li><a href="#">MORE SOMETHING</a></li>
            </ul> --}}
          </li>
          <li class=""><span><a href="{{url('/contactUs')}}">CONTACT US</a><span class="sub-menu-toggle"></span></span>
          </li>
          <li class="has-children"><span><a href="{{url('/products_and_services')}}">PRODUCTs AND SERVICES</a><span class="sub-menu-toggle"></span></span>
             <ul class="offcanvas-submenu">
              <li><a href="#">COPORATE BRANDING</a></li>
              <li><a href="#">LOGO DESIGN</a></li>
              <li><a href="#">OFFICE BRANDING</a></li>
              <li><a href="#">ROLL UP BANNERS</a></li>
              <li><a href="#">FLYING FLAG BANNERS</a></li>
              <li><a href="#">FLYERS BROCHURES </a></li>
              <li><a href="#">POSTERS</a></li>
            </ul>
          </li>
          <li class=""><span><a href="{{url('/special_offers')}}">SPECIAL OFFERS</a><span class="sub-menu-toggle"></span></span>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Topbar-->
    <div class="topbar">
      <div class="topbar-column col-md-6"><img class="d-block w-270 m-auto" style="float: left;" src="{{asset('template/images/bg-images/logo.jpeg')}}" alt="Online Shopping"></div>
      <div class="topbar-column col-md-6">
        <a class="hidden-md-down" href="mailto:">
            <i class="icon-mail"></i>
            &nbsp; company email
        </a>
        <a class="hidden-md-down" href="tel:">
            <i class="icon-bell"></i>
            &nbsp; +234 802 600 0690
        </a>
         <form class="input-group form-group search-input" method="get"><span class="input-group-btn">
                    <button type="submit"><i class="icon-search"></i></button></span>
                  <input class="form-control" type="search" placeholder="Search site">
         </form>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky navbar-ghost">
      <div class="site-branding">
        <div class="inner">
          {{-- <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a> --}}
          <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          <!-- Site Logo--><a class="site-logo" href="{{url('/')}}"><img src="{{asset('template/images/bg-images/logo.jpeg')}}" alt="Title|Company"></a>
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
            {{-- <ul class="sub-menu">
                <li><a href="">SOMETHING</a></li>
                <li><a href="">SOMETHING</a></li>
            </ul> --}}
          </li>
        @else
        <li><a href="{{url('/blog')}}"><span>BLOG</span></a>
            {{-- <ul class="sub-menu">
                <li><a href="">SOMETHING</a></li>
                <li><a href="">SOMETHING</a></li>
            </ul> --}}
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
              <li><span class="mega-menu-title">COPORATE BRANDING</span>
                  <ul class="sub-menu">
                    <li><a href="">BRAND IDENTITY DESIGN </a></li>
                    <li><a href="">LOGO DESIGN </a></li>
                    <li><a href="">WEB DESIGN </a></li>
                    <li><a href="">BRANDED COPORATE GIFTS </a></li>
                    <li><a href="">OFICE BRANDING</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">GENERAL PRODUCTS</span>
                  <ul class="sub-menu">
                    <li><a href="">QUICK DIGITAL PRINTING</a></li>
                    <li><a href="">BUSINESS CARDS PRINTING</a></li>
                    <li><a href="">FLYERS BROCHURES AND POSTERS</a></li>
                    <li><a href="">STATIONARY PRINTING</a></li>
                    <li><a href="">STAMPS AND SEALS</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">DIGITAL DISPLAY BANNERS</span>
                  <ul class="sub-menu">
                    <li><a href="">ROLL UP BANNERS</a></li>
                    <li><a href="">POP UP BANNERS</a></li>
                    <li><a href="">LARGE FORMAL PRINTING</a></a></li>
                    <li><a href="">FYING FLAG BANNERS</a></li>
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
      {{-- @include('inc.notifications') --}}
      @include('inc.messages')
      @yield('content')
      <!-- Site Footer-->
      <footer class="site-footer" style="background-color: #032041;">
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
                  {{-- <li><a href="#">Careers</a></li> --}}
                  <li><a href="{{url('aboutUs')}}">About Us</a></li>
                  <li><a href="{{url('contactUs')}}">Contact Us</a></li>
                  <li><a href="#">Services</a></li>
                  {{-- <li><a href="#">Our Blog</a></li> --}}
                </ul>
              </section>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <section class="widget widget-tags">
                    <h3 class="widget-title">Product Tags</h3>
                   @if (count($products) > 0)
                        @foreach ($products as $product)
                            <a class="tag" href="/product/?tag={{$product->title}}">{{$product->title}}</a>
                        @endforeach
                   @else
                    <p></p>
                   @endif
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
