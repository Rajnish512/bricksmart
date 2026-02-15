@extends('main')
@section('main-section')

<section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}" class="text-light">Home</a></li>
                                <li class="about-p"><span class="text-light">Quick Find</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
            <section class="section-tb-padding home-brand1">
            
            <div class="container">
                <div class="row">
                     <div class="section-title">
                            <h2>Shop By Brands</h2>
                        </div>
                        
                    <div class="col">
                       
                        <div class="brand-carousel owl-carousel owl theme">
                              @foreach ($brand as $brand)
                            <div class="items">
                                <div class="brand-img">
                                    <a href="{{url('/')}}/brand/{{$brand->id}}">
                                        <img src="{{url('/')}}/public/uploads/brand/{{$brand->logo}}" style="height:80px" alt="home brand" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    
    
                       <section class="our-products-tab section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Our products</h2>

                        </div>
                        <div class="tab-content pro-tab-slider">
                            <div class="tab-pane fade show active" id="home">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                         @foreach ($product as $product)
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="{{url('/')}}/product/{{$product->id}}">
                                                            <img src="{{url('/')}}/public/uploads/product/{{$product->product_image}}" class="img-fluid" style="height: 200px; width: 200px;">

                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">-{{$product->product_offer}}%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="{{url('/')}}/addtocart/{{$product->id}}" class="w-c-q-icn">
                                                        <a onclick="addtocart({{$product->id}},{{$product->product_minimumorder}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" onclick="addtocompare({{$product->id}})"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="{{url('/')}}/product">{{$product->product_name}}</a></h3>

                                                    
                                                  <div class="mprice">
                                                                <p>MRP:</p>
                                                         Rs{{$product->product_mrp}}
                                                    </div>
                                                    
                                                    
                                                  <div class="smprice">
                                                        <p style="color: red">Price:</p>Rs{{$product->product_price}}/ {{$product->product_unit}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       @endforeach
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-end">
    
</div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
                                <!--banner start-->
        <section class="t-banner1 section-tb-padding">
            <div class="container">
                <div class="rfrfrf">
                         <div class="o-t-banner  ">
                                <a href="{{url('/')}}/pages/requirement" class="image-b">
                                    <img class="img-fluid" src="{{url('/')}}/public/image/img/b8.png" alt="banner image">
                                </a>
                               
                            </div> 
                            <div class="o-t-banner  ">
                                <a href="{{url('/')}}/pages/seller" class="image-b">
                                    <img class="img-fluid" src="{{url('/')}}/public/image/img/b7.png" alt="banner image">
                                </a>
                               
                            </div> 
                            
                             <div class="o-t-banner  ">
                                <a href="{{url('/')}}/pages/advertise" class="image-b">
                                    <img class="img-fluid" src="{{url('/')}}/public/image/img/b5.png" alt="banner image">
                                </a>
                               
                            </div>
                            <div class="o-t-banner  ">
                                <a href="{{url('/')}}/pages/custom" class="image-b">
                                    <img class="img-fluid" src="{{url('/')}}/public/image/img/b4.png" alt="banner image">
                                </a>
                               
                            </div>
                             <div class="o-t-banner  ">
                                <a href="{{url('/')}}/pages/buyNowPayLeter" class="image-b">
                                    <img class="img-fluid" src="{{url('/')}}/public/image/img/b3.png" alt="banner image">
                                </a>
                               
                            </div>
                            <div class="o-t-banner  ">
                                <a href="{{url('/')}}/pages/contact" class="image-b">
                                    <img class="img-fluid" src="{{url('/')}}/public/image/img/b2.png" alt="banner image">
                                </a>
                               
                            </div>
                             <div class="o-t-banner  ">
                                <a href="{{url('/')}}/pages/quotation" class="image-b">
                                    <img class="img-fluid" src="{{url('/')}}/public/image/img/b1.png" alt="banner image">
                                </a>
                               
                            </div>
                           
    

                </div>
            </div>
        </section>
        <!-- banner end -->

@endsection