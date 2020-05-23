@extends('layouts.app')
@section('content')
    <!-- Main Slider-->
      <section class="hero-slider pt-3" style="background-color: #032041;">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom">
                      {{-- <img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma"> --}}
                    <div class="h2 text-body text-white text-bold mb-2 pt-1">Logo Creation</div>
                    <div class="h2 text-body text-white text-bold mb-4 pb-1">Coporate and Brochure Design</div>
                  </div><a class="btn btn-primary scale-up delay-1" href="#products">View Projects</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{asset('template/images/2.jpeg')}}" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom">
                      {{-- <img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma"> --}}
                    <div class="h2 text-body text-white text-bold mb-2 pt-1">Office Branding</div>
                    <div class="h2 text-body text-white text-bold mb-4 pb-1">Flyers and Posters</div>
                  </div><a class="btn btn-primary scale-up delay-1" href="#products">View Projects</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{asset('template/images/16.jpeg')}}" alt="Banner"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom">
                      {{-- <img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma"> --}}
                    <div class="h2 text-body text-white text-bold mb-2 pt-1">High Premium</div>
                    <div class="h2 text-body text-white text-bold mb-4 pb-1">Banner and Stands</div>
                  </div><a class="btn btn-primary scale-up delay-1" href="#products">View Projects</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{asset('template/images/14.jpeg')}}" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container padding-top-3x padding-bottom-3x">
          <h2 class="text-center text-bold mb-30">WELCOME TO E-XACT PRINTING MEDIA</h2>
          <div class="row">
              <div class="col-md-12">
                  <p class="text-center h3">
                    E-xact is Nigeria’s most innovative Printing and Branding Company based in Lagos, Nigeria; duly registered  with CAC as E-xact Global Media Services Rec (2897132) . Our designs are brilliant and our prints, very exclusive. We offer full range of printing and branding services to a wide range of clients operating across different industry sectors all across Nigeria and beyond. E-xact is a One stop shop for all your printing needs; our custom made solutions are tailored specifically to meet your peculiar needs ensuring the best output throughout the process. Join our happy customers who made E-xact their most preferred printing destination in Nigeria. Let us earn your loyalty, give us a trial Today.
Our project timeline is as important to us as our delivering excellence in print.  From the design and print of Business Cards, Corporate Stationary, Display Banners, Signs and Displays, Stamps and Seals, Marketing Materials to the Branding of Vehicles, Clothing, Gifts and Souvenirs, we provide quality finishing using our cutting-edge printing technology.”
                  </p>
              </div>
          </div>
      </section>
            <!-- Featured Products Carousel-->
      <section class="container padding-top-1x padding-bottom-3x" id="products">
        <h3 class="text-center mb-30">Products and Services</h3>
          <div class="row">
              <!-- Product-->
              @if (count($products) > 0)
                  @foreach ($products as $product)
                    <div class="grid-item col-md-4">
                        {{-- <div class="product-card">
                            <div class="product-badge text-danger"></div><a class="product-thumb" href="/single/{{$product->id}}"><img src="/storage/image/{{$product->images[0]->name}}" alt="Product"></a>
                            <h3 class="product-title"><a href="/single/{{$product->id}}">{{$product->title}}</a></h3>
                            {{-- <h4 class="product-price">
                                {{-- <del>$44.95</del>$34.99 --}}
                            {{-- </h4> --}}
                            {{-- <div class="product-buttons">
                                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                            </div> --}}
                        {{-- </div> --}}

                        <!------- New Card---------->
                        <div class="product-card-image mt-3">
                            <a href="/single/{{$product->id}}">
                                <img src="/storage/image/{{$product->images[0]->name}}" alt="" class="product-image">
                                <div class="overlay">
                                    <div class="text-title">
                                        {{$product->title}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                  @endforeach
              @else
                  <div class="col-md-12">
                      <p class="h3 text-bold">No Available Products</p>
                  </div>
              @endif
          </div>
      </section>
      <!-- Promo #2-->
      <section class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12">
            <div class="fw-section rounded padding-top-4x padding-bottom-4x" style="background-image: url({{asset('template/images/bg-images/background3.jpeg')}});"><span class="overlay rounded" style="opacity: .35;"></span>
              <div class="text-center">
                <h3 class="display-4 text-normal text-white text-shadow mb-1">Print With Us</h3>
                <h2 class="display-2 text-bold text-white text-shadow">@ AFFORDABLE PRICES</h2>
                <h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">at our outlet stores</h4><br><a class="btn btn-primary margin-bottom-none" href="contacts.html">Locate Stores</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br/>
      <br/>
      <!-- Popular Brands-->
      {{-- <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/07.png" alt="Dior"></div>
        </div>
      </section> --}}
      <!-- Services-->
      <section class="container padding-top-3x padding-bottom-2x">
        <div class="row">
          <div class="col-md-6 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{asset('template/images/01.png')}}" alt="Shipping">
            <h6>Fast Delivery</h6>
            <p class="text-muted margin-bottom-none">Accessable and Speedy delivery on request</p>
          </div>
          <div class="col-md-6 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{asset('template/images/03.png')}}" alt="Support">
            <h6>24/7 Customer Support</h6>
            <p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
          </div>
        </div>
      </section>
@endsection
