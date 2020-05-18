@extends('layouts.app')
@section('content')
 <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Admin</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="{{url('/')}}">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Admin</li>
            </ul>
          </div>
        </div>
      </div>
<!----- Page Content ------>
    <div class="container padding-bottom-2x mb-2">
        <div class="product-buttons">
            <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modalCentered">Add New Product</button>
        </div>
        <div class="row p-1">
            <h6 class="text-muted text-normal text-uppercase padding-top-1x mt-1">Product List View</h6>
            <hr class="margin-bottom-1x">
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <div class="product-card product-list margin-bottom-none"><a class="product-thumb" href="#">
                            {{-- <div class="rating-stars">
                                <i class="icon-star filled">
                                </i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                            </div> --}}
                            <img src="storage/image/{{$product->images[0]->name}}" alt="Product"></a>
                        <div class="product-info">
                        <h3 class="product-title"><a href="#">{{$product->title}}</a></h3>
                        <p class="hidden-xs-down">{{$product->description}}</p>
                        <div class="product-buttons">
                            <a class="btn btn-danger btn-sm btn-wishlist=" href="/admin/delete/{{$product->id}}"style="background-color: #ff5252!important;" data-toggle="tooltip" title="Delete"><i class="icon-trash"></i></a>
                        </div>
                        </div>
                    </div>
                @endforeach
            @else

            @endif
        </div>
    </div>



@endsection
