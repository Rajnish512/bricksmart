@extends('main')
@section('main-section')


 <!-- breadcrumb start -->
    
     <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}">Home</a></li>
                                <li class="about-p"><span>Search</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- search page start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search-title">
                        <h4 style="
    color: gray;
">Your search for <span class="text-warning">
                            {{$search}}
                        </span> revealed the following:</h4>
                    </div>
                    
                    
                   
                    
                    <!--<div class="saerch-input">-->
                    <!--    <form>-->
                    <!--        <input type="text" name="search" placeholder="Search our store">-->
                    <!--        <a href="search.html" class="search-btn"><i class="fa fa-search"></i></a>-->
                    <!--    </form>-->
                    <!--</div>-->
                    <div class="search-pro-area justify-content-center">
                        @if (count($products) > 0)
                        @foreach ($products as $product)
                        <div class="search-pro-items">
                            <div class="search-img">
                                <a href="{{url('/')}}/product/{{$product->id}}">
                                    <img src="{{url('/')}}/public/uploads/product/{{$product->product_image}}" class="img-fluid"style="height: 200px; width: 200px;" alt="image">
                                    <!--<img src="image/search-image/hover/pro-img-03.jpg" class="img-fluid search-hover" alt="image">-->
                                </a>
                                
                                                   
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a onclick="addtocart({{$product->id}},{{$product->product_minimumorder}},{{$product->product_by}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="search-caption">
                                <h4><a href="{{url('/')}}/product/{{$product->id}}"> {{$product->product_name}}</a></h4>
                    <div class="mprice">
                                                          <p>MRP:</p>
                                                         Rs{{$product->product_mrp}}
                                                    </div>
                                                    
                                                    
                            <div class="smprice">
                                                        <p style="color: red">Price:</p>Rs{{$product->product_price}}/ {{$product->product_unit}}</span>
                                                    </div>
                            </div>
                        </div>
                       @endforeach
                       
    {{-- Pagination --}}
        <div class="d-flex justify-content-center">
          {!! $products->links() !!}
         
        </div>
                       
               @else
    <div class="fnf-area">
                            <p class="fnf-title" style="
    color: gray;
">No Record <span class="color-font"> Found</span></p>
                            <p style="
    color: gray;
">Oops, The  keyword you are looking for can't be found!</p>

                            <a href="{{url('/')}}/" class="back-home">Go to home</a>
                        </div>
@endif
                    </div>


                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- search page end -->
    <!-- quick veiw start -->
    <section class="quick-view">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                        <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                    </div>
                    <div class="quick-veiw-area">
                        <div class="quick-image">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="image-1">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-2">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-3">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-4">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image1.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-5">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image2.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-6">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-7">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image3.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-8">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image03.jpg" class="img-fluid" alt="image">
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                <li class="nav-item items">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#image-1">
                                        
                                        <img src="{{url('/')}}/public/image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-2">
                                        <img src="{{url('/')}}/public/image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-3">
                                        <img src="{{url('/')}}/public/image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-4">
                                        <img src="{{url('/')}}/public/image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-5">
                                        <img src="{{url('/')}}/public/image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-6">
                                        <img src="{{url('/')}}/public/image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-7">
                                        <img src="{{url('/')}}/public/image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-8">
                                        <img src="{{url('/')}}/public/image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="quick-caption">
                            <h4>Fresh organic reachter</h4>
                            <div class="quick-price">
                                <span class="new-price">$350.00 USD</span>
                                <span class="old-price"><del>$399.99 USD</del></span>
                            </div>
                            <div class="quick-rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                            </div>
                            <div class="pro-size">
                                <label>Size: </label>
                                <select>
                                    <option>1 ltr</option>
                                    <option>3 ltr</option>
                                    <option>5 ltr</option>
                                </select>
                            </div>
                            <div class="plus-minus">
                                <span>
                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                    <input type="text" name="name" value="1">
                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                </span>
                                <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- quick veiw end -->
    
    @endsection