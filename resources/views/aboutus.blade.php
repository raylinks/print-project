@extends('layouts.app')
@section('content')
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>About Us</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="{{url('/')}}">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-2x mb-2">
        <div class="row align-items-center padding-bottom-2x">
          <div class="col-md-5"><img class="d-block w-270 m-auto" src="{{asset('template/images/bg-images/logo.jpeg')}}" alt="Online Shopping"></div>
          <div class="col-md-7 text-md-left text-center">
            <div class="mt-30 hidden-md-up"></div>
            <h2>Who Are We?</h2>
            <p>E-xact Prints is a smart print shop based in Lagos; a leading provider of smart and innovative solution in digital printing, direct imaging printing, offset printing, large format printing, being an expert in printing solutions and technologies, our product and services offers our clients a wide variety of printing solutions that saves time and money, and enhance  the printing abilities of their organizations.

With our comprehensive knowledge of print methodologies we offer our client innovative way of idea conceptualization, design generation and print planning arrangement which provide for professional and efficient handling of all printing jobs. If you are looking for a Professional Printing and Branding Company based in Nigeria, look no further, E-xact print is the No. 1 printing destination for all quality print lovers in Nigeria.  </p><a class="text-medium text-decoration-none" href="shop-grid-ls.html">View Products&nbsp;<i class="icon-arrow-right"></i></a>
          </div>

          <div class="row align-items-center mt-2 padding-bottom-2x">
              <div class="col-md-5">
                  <div class="row">
                      <div class="col-sm-4"><img class="d-block mx-auto mb-3" src="{{asset('template/images/3.jpeg')}}" alt="Image"></div>
                      <div class="col-sm-4"><img class="d-block mx-auto mb-3" src="{{asset('template/images/4.jpeg')}}" alt="Image"></div>
                      <div class="col-sm-4"><img class="d-block mx-auto mb-3" src="{{asset('template/images/8.jpeg')}}" alt="Image"></div>
                      <div class="col-sm-4"><img class="d-block mx-auto mb-3" src="{{asset('template/images/11.jpeg')}}" alt="Image"></div>
                      <div class="col-sm-4"><img class="d-block mx-auto mb-3" src="{{asset('template/images/15.jpeg')}}" alt="Image"></div>
                      <div class="col-sm-4"><img class="d-block mx-auto mb-3" src="{{asset('template/images/14.jpeg')}}" alt="Image"></div>
                  </div>
              </div>
              <div class="col-md-7 text-md-left text-center">
                <h2>Why Choose Us?</h2>
                <p class="pr-2 pl-2">E-xact Prints is a smart print shop based in Lagos; a leading provider of smart and innovative solution in digital printing, direct imaging printing, offset printing, large format printing, being an expert in printing solutions and technologies, our product and services offers our clients a wide variety of printing solutions that saves time and money, and enhance  the printing abilities of their organizations.

With our comprehensive knowledge of print methodologies we offer our client innovative way of idea conceptualization, design generation and print planning arrangement which provide for professional and efficient handling of all printing jobs. If you are looking for a Professional Printing and Branding Company based in Nigeria, look no further, E-xact print is the No. 1 printing destination for all quality print lovers in Nigeria.</p>
                <a class="text-medium text-decoration-none" href="">View Products&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
          </div>
        </div>
        <hr>
        <hr>
        {{-- <div class="text-center padding-top-3x mb-30">
          <h2>Our Core Team</h2>
          <p class="text-muted">People behind your awesome shopping experience.</p>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/01.jpg" alt="Team">
            <h6>Grace Wright</h6>
            <p class="text-muted mb-2">Founder, CEO</p>
            <div class="social-bar"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
          </div>
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/02.jpg" alt="Team">
            <h6>Taylor Jackson</h6>
            <p class="text-muted mb-2">Financial Director</p>
            <div class="social-bar"><a class="social-button shape-circle sb-skype" href="#" data-toggle="tooltip" data-placement="top" title="Skype"><i class="socicon-skype"></i></a><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-paypal" href="#" data-toggle="tooltip" data-placement="top" title="PayPal"><i class="socicon-paypal"></i></a></div>
          </div>
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/03.jpg" alt="Team">
            <h6>Quinton Cross</h6>
            <p class="text-muted mb-2">Marketing Director</p>
            <div class="social-bar"><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a><a class="social-button shape-circle sb-email" href="#" data-toggle="tooltip" data-placement="top" title="Email"><i class="socicon-mail"></i></a></div>
          </div>
          <div class="col-md-3 col-sm-6 mb-30 text-center"><img class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/04.jpg" alt="Team">
            <h6>Liana Mullen</h6>
            <p class="text-muted mb-2">Lead Designer</p>
            <div class="social-bar"><a class="social-button shape-circle sb-behance" href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="socicon-behance"></i></a><a class="social-button shape-circle sb-dribbble" href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="socicon-dribbble"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a></div>
          </div>
        </div> --}}
      </div>

@endsection
