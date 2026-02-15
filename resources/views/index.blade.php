@extends('main')
@section('main-section')

<style>
    .top-menubar {
    border-top: 1px solid #ededed;
    }
    .container {
    max-width: 1500px; 
}

.top-menubar .menu-slider {
    display: flex;
    flex-wrap: wrap;
    /*align-items: center;*/
    justify-content:center;
}



.top-menubar .menu-slider .head-categry {
    position: relative;
    width: calc(80% - 110px);
    margin-left: 55px;
    margin-right: 55px;
}
.swiper-container {
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0;
    z-index: 1;
}
.swiper-container .swiper-notification {
    position: absolute;
    left: 0;
    top: 0;
    pointer-events: none;
    opacity: 0;
    z-index: -1000;
}
.top-menubar .menu-slider .head-categry {
    position: relative;
    width: calc(80% - 110px);
    margin-left: 55px;
    margin-right: 55px;
}
.top-menubar .menu-slider {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}
.top-menubar .menu-slider .head-categry {
    position: relative;
    width: calc(80% - 110px);
    margin-left: 55px;
    margin-right: 55px;
}
.top-menubar .menu-slider .head-categry .swiper-buttons a.swiper-prev-cat {
    left: -55px;
}
.swiper-buttons a:first-child {
    margin-left: 0px;
}
.swiper-buttons a {
    position: absolute;
    bottom: 50%;
    transform: translateY(50%);
    width: 40px;
    height: 40px;
    font-size: 12px;
    z-index: 2;
    margin-left: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ededed;
    border-radius: 4px;
}
.top-menubar .menu-slider .head-categry .top-cat a.cat-url {
    color: #fff;
    display: flex;
    /* align-items: center; */
    justify-content: space-between;
}
.top-menubar .menu-slider .head-categry .top-cat a.cat-url img {
    width: 45px;
    height:45px;
}
.top-menubar .menu-slider .head-categry .top-cat a.cat-url span.title {
    width: calc(100% - 75px);
    margin: 0px 15px;
    text-align: center;
}
.top-menubar .menu-slider .head-categry .top-cat a.cat-url {
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.top-menubar .menu-slider .head-categry .top-cat {
    background-color: #7da63f;
    margin: 15px 8px;
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 0 8px rgb(0 0 0 / 8%);
}
.top-menubar .menu-slider .head-categry .swiper-buttons a.swiper-next-cat {
    right: -55px;
}
.swiper-buttons a {
    position: absolute;
    bottom: 50%;
    transform: translateY(50%);
    width: 40px;
    height: 40px;
    font-size: 12px;
    z-index: 2;
    margin-left: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ededed;
    border-radius: 4px;
}
.top-menubar .menu-slider .head-categry .swiper-buttons a.swiper-next-cat {
    right: -55px;
}

</style>

<p style="display:flex; justify-content: center;">Go Quickly To</p>
 <section class="top-menubar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menu-slider">
                          


                            <div class="head-categry">
                                <div class="swiper-container" id="top-category">
                                    <div class="swiper-wrapper">
                                        
                                        
                                         @foreach ($quickfind as $quickfind)
                                        <div class="swiper-slide" style="width: 214.2px;">
                                            <div class="top-cat">
                                                <a href="{{url('/')}}/pages/quickfind/{{$quickfind->id}}" class="cat-url">
                                                    <img src="{{url('/')}}/public/uploads/category/{{$quickfind->img}}" class="img-fluid" alt="image">
                                                    <span class="title">{{$quickfind->name}}</span>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        

                                        
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <a href="javascript:void(0)" class="swiper-prev-cat"><i class="ti-angle-left"></i></a>
                                    <a href="javascript:void(0)" class="swiper-next-cat"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--home page slider start-->
        <section class="slider">
            <div class="home-slider owl-carousel owl-theme">
                <!--<div class="items">-->
                <!--    <div class="img-back" style="background-image:url({{url('/')}}/public/image//slider1.jpg);">-->
                <!--        <div class="h-s-content slide-c-l">-->
                <!--            <span>Summer vage sale</span>-->
                <!--            <h1>Fresh fruits<br>&vegetable</h1>-->
                <!--            <a href="{{url('/')}}/grid-list" class="btn btn-style1">Shop now</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="items">-->
                <!--    <div class="img-back" style="background-image:url({{url('/')}}/public/image//slider2.jpg);">-->
                <!--        <div class="h-s-content slide-c-r">-->
                <!--            <span>Organic indian masala</span>-->
                <!--            <h1>Prod of indian<br>100% pacaging</h1>-->
                <!--            <a href="{{url('/')}}/grid-list" class="btn btn-style1">Shop now</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="items">-->
                <!--    <div class="img-back" style="background-image:url({{url('/')}}/public/image//banner001.jpg);">-->
                <!--        <div class="h-s-content slide-c-c">-->
                <!--            <span>Top selling!</span>-->
                <!--            <h1>Fresh for your health</h1>-->
                <!--            <a href="{{url('/')}}/grid-list" class="btn btn-style1">Shop now</a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
                <img src="{{url('/')}}/public/image/banner/photo_2022-08-30_18-07-52.jpg" style=" width: 100%;
  height: auto;"/>
  <img src="{{url('/')}}/public/image/banner/photo_2022-09-01_12-14-19.jpg
" style=" width: 100%;
  height: auto;"/>
            </div>
        </section>
        <!--home page slider start-->
     
        
        
        
        
        
      
        <!-- Category image slide -->
        <section class="category-img1 section-t-padding section-b-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            
                            <h2>Shop by category</h2>
                            
                        </div>
                        <div class="home-category owl-carousel owl-theme">
                            
                            
                  @foreach ($category as $category)
                
                            <div class="items">
                                <div class="h-cate">
                                    <div class="c-img">
                                        <a href="{{url('/')}}/grid-list/{{$category->id}}" class="home-cate-img">
                                            <img class="img-fluid" style="height:150px;width:150px" src="{{url('/')}}/public/uploads/category/{{$category->img}}" alt="cate-image">
                                            <span class="cat-title">{{$category->name}}</span>
                                        </a>
                                    </div>
                                 
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Category image slide -->
        <!-- Trending Products Start -->
        <section class="h-t-products1 section-t-padding section-b-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Trending products</h2>
                        </div>
                        <div class="trending-products owl-carousel owl-theme">
                              @foreach ($products as $products)
                            <div class="items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="{{url('/')}}/product/{{$products->id}}">
                                            <img class="img-fluid" style="height: 200px; width: 200px;" src="{{url('/')}}/public/uploads/product/{{$products->product_image}}" alt="pro-img1">
                                            
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                       
                                        <a onclick="addtocart({{$products->id}},{{$products->product_minimumorder}},{{$products->product_by}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" onclick="addtocompare({{$products->id}})"><i class="icon-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3><a href="{{url('/')}}/product">{{$products->product_name}}</a></h3>
                                   
                                                  <div class="mprice">
                                                                <p>MRP:</p>
                                                         Rs{{$products->product_mrp}}
                                                    </div>
                                                    
                                                    
                                                  <div class="smprice">
                                                        <p style="color: red">Price:</p>Rs{{$products->product_price}}/ {{$products->product_unit}}</span>
                                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Trending Products end -->
        <!-- Back-image and countdown star -->
        <section class="home-countdown1">
            <div class="back-img" style="background-image: url({{url('/')}}/public/image/banner/photo_2022-09-03_14-34-04.jpg
">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="deal-content">
                                <h2>Deal Of The Day!</h2>
                                <span class="deal-c">We offer a hot deal offer every festival</span>
                                <ul class="contdown_row" >
                                    <li class="countdown_section">
                                        <span id="demo" class="countdown_timer">254</span>
                                        <span class="countdown_title">Days</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="demo2" class="countdown_timer">11</span>
                                        <span class="countdown_title">Hours</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="demo3" class="countdown_timer">33</span>
                                        <span class="countdown_title">Minutes</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="demo4" class="countdown_timer">36</span>
                                        <span class="countdown_title">Seconds</span>
                                    </li>
                                </ul>
                               

<script>
// Set the date we're counting down to
var countDownDate = new Date("2022-10-30T09:58").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days   ;
  document.getElementById("demo2").innerHTML =  hours 
  ;
  document.getElementById("demo3").innerHTML =  minutes  ;
  document.getElementById("demo4").innerHTML = seconds ;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
                                
                                <a href="{{url('/')}}/grid-list/15" class="btn btn-style1">Shop collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Back image and countdown end -->
        <!-- Our Products Tab start -->
        <section class="our-products-tab section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Our products</h2>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home">SPECIAL PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile">HOT DEALS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact">OFFERS FOR YOU</a>
                                </li>
                            </ul>
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
                                                            <!--<img src="{{url('/')}}/public/image/pro/pro-img-04.jpg" alt="additional image" class="img-fluid additional-image">-->
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">-{{$product->product_offer}}%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="{{url('/')}}/addtocart/{{$product->id}}" class="w-c-q-icn"></a>
                                                        <a onclick="addtocart({{$product->id}},{{$product->product_minimumorder}},{{$product->product_by}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
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
                            <div class="tab-pane fade" id="profile">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                      
                                      
                                                                               @foreach ($hotdeals as $hotdeals)
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="{{url('/')}}/product/{{$hotdeals->id}}">
                                                            <img src="{{url('/')}}/public/uploads/product/{{$hotdeals->product_image}}" class="img-fluid" style="height: 200px; width: 200px;">
                                                            <!--<img src="{{url('/')}}/public/image/pro/pro-img-04.jpg" alt="additional image" class="img-fluid additional-image">-->
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">-{{$hotdeals->product_offer}}%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="{{url('/')}}/addtocart/{{$product->id}}" class="w-c-q-icn"></a>
                                                        <a onclick="addtocart({{$hotdeals->id}},{{$hotdeals->product_minimumorder}},{{$product->product_by}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" onclick="addtocompare({{$hotdeals->id}})"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="{{url('/')}}/product">{{$hotdeals->product_name}}</a></h3>

                                                    
                                                  <div class="mprice">
                                                                <p>MRP:</p>
                                                         Rs{{$hotdeals->product_mrp}}
                                                    </div>
                                                    
                                                    
                                                  <div class="smprice">
                                                        <p style="color: red">Price:</p>Rs{{$hotdeals->product_price}}/ {{$hotdeals->product_unit}}</span>
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
                            <div class="tab-pane fade" id="contact">
                                <div class="home-pro-tab swiper-container">
                                    <div class="swiper-wrapper">
                                     
                                     
                                     
                                     @foreach ($offers as $offers)
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="{{url('/')}}/product/{{$offers->id}}">
                                                            <img src="{{url('/')}}/public/uploads/product/{{$offers->product_image}}" class="img-fluid" style="height: 200px; width: 200px;">
                                                            <!--<img src="{{url('/')}}/public/image/pro/pro-img-04.jpg" alt="additional image" class="img-fluid additional-image">-->
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-text">-{{$offers->product_offer}}%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="{{url('/')}}/addtocart/{{$product->id}}" class="w-c-q-icn"></a>
                                                        <a onclick="addtocart({{$offers->id}},{{$offers->product_minimumorder}},{{$product->product_by}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" onclick="addtocompare({{$offers->id}})"><i class="icon-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3><a href="{{url('/')}}/product">{{$offers->product_name}}</a></h3>

                                                    
                                                  <div class="mprice">
                                                                <p>MRP:</p>
                                                         Rs{{$offers->product_mrp}}
                                                    </div>
                                                    
                                                    
                                                  <div class="smprice">
                                                        <p style="color: red">Price:</p>Rs{{$offers->product_price}}/ {{$offers->product_unit}}</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Products Tab end -->
        
        <!-- Blog start -->
        <section class="section-tb-padding blog1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Recent Blogs</h2>
                        </div>
                        <div class="home-blog owl-carousel owl-theme">
                             @foreach ($news as $news)
                            <div class="items">
                                <div class="blog-start">
                                    <div class="blog-image">
                                        <a href="{{url('/')}}/pages/blog_details/{{$news->sno}}">
                                            <img src="{{url('/')}}/public/uploads/news/{{$news->news_image}}" alt="blog-image" class="img-fluid"/>
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="{{url('/')}}/pages/blog_details/{{$news->sno}}">{{$news->heading}}</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">{{$news->uploaded_by}}</span></span>
                                        </div>
                                        <p class="blog-description">{{$news->description}}</p>
                                        <a href="{{url('/')}}/pages/blog_details/{{$news->sno}}" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">{{$news->created_at}}</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--<div class="items">-->
                            <!--    <div class="blog-start">-->
                            <!--        <div class="blog-image">-->
                            <!--            <a href="blog-style-1-details.html">-->
                            <!--                <img src="{{url('/')}}/public/image/blog-image/blog-2.jpg" alt="blog-image" class="img-fluid">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h6><a href="blog-style-1-details.html">All time fresh every time healthy</a></h6>-->
                            <!--                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>-->
                            <!--            </div>-->
                            <!--            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>-->
                            <!--            <a href="blog-style-1-details.html" class="read-link">-->
                            <!--                <span>Read more</span>-->
                            <!--                <i class="ti-arrow-right"></i>-->
                            <!--            </a>-->
                            <!--            <div class="blog-date-comment">-->
                            <!--                <span class="blog-date">8 Jan 2021</span>-->
                            <!--                <a href="javascript:void(0)">1 Comment</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="items">-->
                            <!--    <div class="blog-start">-->
                            <!--        <div class="blog-image">-->
                            <!--            <a href="blog-style-1-details.html">-->
                            <!--                <img src="{{url('/')}}/public/image/blog-image/blog-3.jpg" alt="blog-image" class="img-fluid">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h6><a href="blog-style-1-details.html">Health and skin for your organic</a></h6>-->
                            <!--                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>-->
                            <!--            </div>-->
                            <!--            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>-->
                            <!--            <a href="blog-style-1-details.html" class="read-link">-->
                            <!--                <span>Read more</span>-->
                            <!--                <i class="ti-arrow-right"></i>-->
                            <!--            </a>-->
                            <!--            <div class="blog-date-comment">-->
                            <!--                <span class="blog-date">8 Jan 2021</span>-->
                            <!--                <a href="javascript:void(0)">1 Comment</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="items">-->
                            <!--    <div class="blog-start">-->
                            <!--        <div class="blog-image">-->
                            <!--            <a href="blog-style-1-details.html">-->
                            <!--                <img src="{{url('/')}}/public/image/blog-image/blog-4.jpg" alt="blog-image" class="img-fluid">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h6><a href="blog-style-1-details.html">Health and skin for your organic</a></h6>-->
                            <!--                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>-->
                            <!--            </div>-->
                            <!--            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>-->
                            <!--            <a href="blog-style-1-details.html" class="read-link">-->
                            <!--                <span>Read more</span>-->
                            <!--                <i class="ti-arrow-right"></i>-->
                            <!--            </a>-->
                            <!--            <div class="blog-date-comment">-->
                            <!--                <span class="blog-date">8 Jan 2021</span>-->
                            <!--                <a href="javascript:void(0)">0 Comment</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="items">-->
                            <!--    <div class="blog-start">-->
                            <!--        <div class="blog-image">-->
                            <!--            <a href="blog-style-1-details.html">-->
                            <!--                <img src="{{url('/')}}/public/image/blog-image/blog-5.jpg" alt="blog-image" class="img-fluid">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h6><a href="blog-style-1-details.html">Organic mix masala fresh & soft</a></h6>-->
                            <!--                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>-->
                            <!--            </div>-->
                            <!--            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>-->
                            <!--            <a href="blog-style-1-details.html" class="read-link">-->
                            <!--                <span>Read more</span>-->
                            <!--                <i class="ti-arrow-right"></i>-->
                            <!--            </a>-->
                            <!--            <div class="blog-date-comment">-->
                            <!--                <span class="blog-date">8 Jan 2021</span>-->
                            <!--                <a href="javascript:void(0)">0 Comment</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="items">-->
                            <!--    <div class="blog-start">-->
                            <!--        <div class="blog-image">-->
                            <!--            <a href="blog-style-1-details.html">-->
                            <!--                <img src="{{url('/')}}/public/image/blog-image/blog-6.jpg" alt="blog-image" class="img-fluid">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h6><a href="blog-style-1-details.html">Fresh organic brand and picnic</a></h6>-->
                            <!--                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>-->
                            <!--            </div>-->
                            <!--            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>-->
                            <!--            <a href="blog-style-1-details.html" class="read-link">-->
                            <!--                <span>Read more</span>-->
                            <!--                <i class="ti-arrow-right"></i>-->
                            <!--            </a>-->
                            <!--            <div class="blog-date-comment">-->
                            <!--                <span class="blog-date">8 Jan 2021</span>-->
                            <!--                <a href="javascript:void(0)">0 Comment</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="items">-->
                            <!--    <div class="blog-start">-->
                            <!--        <div class="blog-image">-->
                            <!--            <a href="blog-style-1-details.html">-->
                            <!--                <img src="{{url('/')}}/public/image/blog-image/blog-7.jpg" alt="blog-image" class="img-fluid">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        <div class="blog-content">-->
                            <!--            <div class="blog-title">-->
                            <!--                <h6><a href="blog-style-1-details.html">Vegist special liquide fresh vegetable</a></h6>-->
                            <!--                <span class="blog-admin">By <span class="blog-editor">Andrew louise</span></span>-->
                            <!--            </div>-->
                            <!--            <p class="blog-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor...</p>-->
                            <!--            <a href="blog-style-1-details.html" class="read-link">-->
                            <!--                <span>Read more</span>-->
                            <!--                <i class="ti-arrow-right"></i>-->
                            <!--            </a>-->
                            <!--            <div class="blog-date-comment">-->
                            <!--                <span class="blog-date">8 Jan 2021</span>-->
                            <!--                <a href="javascript:void(0)">0 Comment</a>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                        <div class="all-blog">
                            <a href='{{url('/')}}/pages/blog' class="btn btn-style1">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog end -->
        
        
        
        <!-- Testimonial Start -->
        <section class="section-tb-padding testimonial-bg1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Our customer say</h2>
                        </div>
                        <div class="testi-m owl-carousel owl-theme">
                            <div class="items">
                                <div class="testimonial-area">

                                    <p>BricksMart offers lesser prices compared to a physical store. I was looking for cement at reasonable
prices and BricksMart made it possible by delivering the cement to my doorstep at the satisfactory
price. </p>
                                    <div class="testi-name">
                                        <h6>Bhushan Singh</h6>
                                        <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="testimonial-area">

                                    <p>Best place to buy building materials. Price is good and the delivery time is too much good. BricksMart 
unloaded my burden of finding the construction materials for my home at competitive prices.</p>
                                    <div class="testi-name">
                                        <h6>Gautam Kumar</h6>
                                        <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="testimonial-area">

                                    <p>For me, the most difficult task to build my own dream home was finding the building materials and 
hardware goods. But BricksMart made it too easy by offering all the required products at the 
construction site in my area.
</p>
                                    <div class="testi-name">
                                        <h6>Rupesh Kukreja</h6>
                                        <span>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->
        
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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="{{url('/')}}/public/image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="{{url('/')}}/public/image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="{{url('/')}}/public/image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="{{url('/')}}/public/image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="{{url('/')}}/public/image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="{{url('/')}}/public/image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                         <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="{{url('/')}}/public/image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                                    </li>
                                    <li class="nav-item items">
                                        <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="{{url('/')}}/public/image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
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
                                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
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
        
        <!-- News Letter start -->
        <section class="news-letter1">
            <div class="section-tb-padding news-img" style="background-image: url('http://bricksmart.in/public/image/banner/photo_2022-09-03_14-34-04.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home-news">
                                <h2>Subscribe To Stay Updated</h2>
                                
                                <form method="post">
                                    @csrf
                                    <input type="email" name="email" placeholder="Enter your email address">
                                    <button  type="submit"class="btn btn-style3">Subscribe</button>
                                    <!--<button class="btn btn-style1 news-sub">Subscribe</button>-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- News Letter end -->
        <!-- brand logo start -->
        
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
        <div class="text-center">
        <a href="{{url('/')}}/brand" class="btn btn-style1 ">View all</a>
        </div>
        
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
        
        
        
          <!--download app-->
        <div id="newsspec-19854-app" class="news-app-promo">
    <div class="news-app-promo-text">
        <div class="news-app-promo-text__tagline">Get deals, discounts & more. Search products, services and get verified sellers info</div><br>
        <div class="news-app-promo-text__download">Get Bricksmart App</div>
    </div>
    <div class="news-app-promo__section">
        <div class="news-app-promo-subsection">
            <img class="news-app-promo__bbc-logo" src="{{url('/')}}/public/image/img/Mobile App.png"  >
        </div>
        <div class="news-app-promo-subsection">
            <a class="news-app-promo-subsection--link news-app-promo-subsection--playstore" href="https://play.google.com/store/apps/details?id=bbc.mobile.news.ww&amp;hl=en" target="_parent">
                <img class="news-app-promo__play-store" src="//news.files.bbci.co.uk/include/newsspec/19854/assets/app-project-assets/google_play_store.svg" width="161" height="auto" border="0">
            </a>
            <a class="news-app-promo-subsection--link news-app-promo-subsection--appstore" href="https://itunes.apple.com/us/app/bbc-news/id364147881?mt=8" target="_parent">
                <img class="news-app-promo__app-store" src="//news.files.bbci.co.uk/include/newsspec/19854/assets/app-project-assets/ios_app_store.svg" width="161" height="auto" border="0">
            </a>
        </div>
    </div>
    <div class="news-app-promo__section">

    </div>
</div>

        <!------------->
       
@endsection