@extends('layouts.app')
@section('content')
    <!-- Main Slider-->
      <section class="hero-slider" style="background-image: url({{asset('template/images/main-bg.jpg')}});">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom">
                      {{-- <img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma"> --}}
                    <div class="h2 text-body text-normal mb-2 pt-1">Logo Creation</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">Coporate and Brochure Design</div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">View Projects</a>
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
                    <div class="h2 text-body text-normal mb-2 pt-1">Office Branding</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">Flyers and Posters</div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">View Projects</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{asset('template/images/16.jpeg')}}" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom">
                      {{-- <img class="d-inline-block w-150 mb-4" src="img/hero-slider/logo02.png" alt="Puma"> --}}
                    <div class="h2 text-body text-normal mb-2 pt-1">High Premium</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">Banner and Stands</div>
                  </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">View Projects</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{asset('template/images/14.jpeg')}}" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
            <!-- Featured Products Carousel-->
      <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Products and Services</h3>
          <div class="row">
              <!-- Product-->
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/1.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/2.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/4.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <br>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/6.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/14.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <div class="grid-item col-md-4">
                <div class="product-card">
                    <div class="product-badge text-danger"></div>
                    <a class="product-thumb" href="shop-single.html">
                        <img src="{{asset('template/images/15.jpeg')}}" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                    {{-- <h4 class="product-price">
                        {{-- <del>$44.95</del>$34.99 --}}
                    {{-- </h4> --}}
                    {{-- <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div> --}}
                </div>
            </div>
            <br>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/16.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/12.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/5.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
            <br>
            <div class="grid-item col-md-4">
                <div class="product-card">
                <div class="product-badge text-danger"></div><a class="product-thumb" href="shop-single.html"><img src="{{asset('template/images/7.jpeg')}}" alt="Product"></a>
                <h3 class="product-title"><a href="shop-single.html">Brochure design</a></h3>
                {{-- <h4 class="product-price">
                    {{-- <del>$44.95</del>$34.99 --}}
                {{-- </h4> --}}
                {{-- <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                </div> --}}
                </div>
            </div>
          </div>
      </section>
      <!-- Promo #2-->
      <section class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12">
            <div class="fw-section rounded padding-top-4x padding-bottom-4x" style="background-image: url(img/banners/home02.jpg);"><span class="overlay rounded" style="opacity: .35;"></span>
              <div class="text-center">
                <h3 class="display-4 text-normal text-white text-shadow mb-1">Old Collection</h3>
                <h2 class="display-2 text-bold text-white text-shadow">HUGE SALE!</h2>
                <h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">at our outlet stores</h4><br><a class="btn btn-primary margin-bottom-none" href="contacts.html">Locate Stores</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br/>
      <br/>
      <!-- Popular Brands-->
      <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/07.png" alt="Dior"></div>
        </div>
      </section>
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
