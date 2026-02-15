@extends('main')
@section('main-section')
     @livewireStyles    
        <!-- breadcrumb start -->
        @foreach ($products as $product)
          <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}">Home</a></li>
                                <li class="about-p"><span>Products</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- breadcrumb end -->
        <!-- product info start -->
        <section class="section-tb-padding pro-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-md-12 col-xs-12 pro-image">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 larg-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="image-11">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/uploads/product/{{$product->product_image}}">
                                                <img src="{{url('/')}}/public/uploads/product/{{$product->product_image}}" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="image-22">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/image/pro-page-image/prro-page-image01.jpg)">
                                                <img src="{{url('/')}}/public/image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="image-33">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/image/pro-page-image/pro-page-image1-1.jpg)">
                                                <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="image-44">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/image/pro-page-image/pro-page-image1.jpg)">
                                                <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image1.jpg" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="image-55">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/image/pro-page-image/pro-page-image2.jpg)">
                                                <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image2.jpg" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="image-66">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/image/pro-page-image/pro-page-image2-2.jpg)">
                                                <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="image-77">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/image/pro-page-image/pro-page-image3.jpg)">
                                                <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image3.jpg" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="tab-pane fade" id="image-88">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{url('/')}}/public/uploads/product/{{$product->product_image}}">
                                                <img src="{{url('/')}}/public/image/pro-page-image/pro-page-image03.jpg" class="img-fluid" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                                    <li class="nav-item items">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#image-11"><img src="{{url('/')}}/public/uploads/product/{{$product->product_image}}" class="img-fluid" alt="image"></a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-6 col-12 col-xs-12 pro-info">
                                <h4>{{$product->product_name}}</h4>
                                <div class="rating" id="average_ratinghtml">
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-availabale">
                                    <span class="available">Availability:</span>
                                    <span class="pro-instock">{{$product->product_availability}}</span>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">₹{{$product->product_price}} </span>
                                    <span class="old-price"><del>₹{{$product->product_mrp}} </del> {{$product->product_unit}}</span>
                                    <div class="Pro-lable">
                                        <span class="p-discount">-{{$product->product_offer}}%</span>
                                    </div>
                                </div>
                                <span class="pro-details">Hurry up! only <span class="pro-number">7</span> products left in stock!</span>
                                <!--<p></p>-->
                                
                                
                                <div class="pro-qty detail-qty">
                                    <span class="qty">Quantity:</span>
                                    <div class="plus-minus ">
                                        <span>
                                            <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                            <!--<input  type="text" name="name" value="1">-->
                                            <span style="padding: 9px;" class="qty-val" id="qty12">{{$product->product_minimumorder}}</span>
                                            <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                        </span>
                                    </div>
                                    <spam style="font-size: 11px;">Minimum Order Qty : {{$product->product_minimumorder}}</spam>
                                </div>
                                <div class="pro-btn">
                                    <a onclick="addtocompare({{$product->id}})"  class="btn btn-style1"><i class="icon-shuffle"></i></a>
                                    <a onclick="addtocart1({{$product->id}},{{$product->product_minimumorder}},{{$product->product_by}})" class="btn btn-style1"><i class="fa fa-shopping-bag"></i> Add to cart</a>
                                    <a onclick="addtocart2({{$product->id}},{{$product->product_minimumorder}},{{$product->product_by}})"  class="btn btn-style1">Buy now</a>
                                </div>
                                <div class="share">
                                    <span class="share-lable">Share:</span>
                                    <ul class="share-icn">
                                        <li><a href="javascript:void(0)" data-toggle="tooltip" onclick="window.open( 'http://www.facebook.com/sharer.php?u={{url('/')}}/product/{{$product->id}}', 'sharer', 'toolbar=0, status=0, width=626, height=436');return false;" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li>
                                        <a href="javascript:void(0)" data-toggle="tooltip" onclick="window.open( 'https://twitter.com/intent/tweet?url={{url('/')}}/product/{{$product->id}}', 'sharer', 'toolbar=0, status=0, width=626, height=436');return false;" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="mailto:?subject={{$product->product_name}}&body={{url('/')}}/product/{{$product->id}}"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="https://api.whatsapp.com/send?text={{url('/')}}/product/{{$product->id}}" data-action="share/whatsapp/share" target="blank" onclick="incrementValue()"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                                <!--<div class="pay-img">-->
                                <!--    <a href="checkout-1.html">-->
                                <!--        <img src="{{url('/')}}/public/image/pay-image.jpg" class="img-fluid" alt="pay-image">-->
                                <!--    </a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-xs-12 pro-shipping">
                        <div class="product-service">
                            <div class="icon-title">
                                <span><i class="ti-truck"></i></span>
                                <h4>Delivery info</h4>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                        </div>
                        <div class="product-service">
                            <div class="icon-title">
                                <span><i class="ti-reload"></i></span>
                                <h4>30 days returns</h4>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>
                        </div>
                        <!--<div class="product-service">-->
                        <!--    <div class="icon-title">-->
                        <!--        <span><i class="ti-id-badge"></i></span>-->
                        <!--        <h4>10 year warranty</h4>-->
                        <!--    </div>-->
                        <!--    <p>Lorem Ipsum is simply dummy text of the printing and typesetting the printing and typesetting industry.</p>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- product info end -->
        <!-- product page tab start -->
        <section class="section-b-padding pro-page-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pro-page-tab">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Reviews</a>
                                </li>
                                
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-1">
                                    <div class="tab-1content">
                                        <h4>More details</h4>
                                        <p>{{$product->product_description}}</p>
                                        <h4>Seller</h4>
                                        <p>{{$product->name}}</p>
                                        
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade show" id="tab-2">
                                    <h4 class="reviews-title">Customer reviews</h4>
                                    <!--<div class="customer-reviews t-desk-2">-->
                                    <!--    <span class="p-rating">-->
                                    <!--        <i class="fa fa-star e-star"></i>-->
                                    <!--        <i class="fa fa-star e-star"></i>-->
                                    <!--        <i class="fa fa-star e-star"></i>-->
                                    <!--        <i class="fa fa-star e-star"></i>-->
                                    <!--        <i class="fa fa-star e-star"></i>-->
                                    <!--    </span>-->
                                    <!--    <p class="review-desck">Based on 2 reviews</p>-->
                                    <!--    <a href="#add-review" data-bs-toggle="collapse">Write a review</a>-->
                                    <!--</div>-->
                                    <!--<div class="review-form collapse" id="add-review">-->
                                    <!--    <h4>Write a review</h4>-->
                                    <!--    <form>-->
                                    <!--        <label>Name</label>-->
                                    <!--        <input type="text" name="name" placeholder="Enter your name">-->
                                    <!--        <label>Email</label>-->
                                    <!--        <input type="text" name="mail" placeholder="Enter your Email">-->
                                    <!--        <label>Rating</label>-->
                                    <!--        <span>-->
                                    <!--            <i class="fa fa-star"></i>-->
                                    <!--            <i class="fa fa-star"></i>-->
                                    <!--            <i class="fa fa-star"></i>-->
                                    <!--            <i class="fa fa-star"></i>-->
                                    <!--            <i class="fa fa-star"></i>-->
                                    <!--        </span>-->
                                    <!--        <label>Review title</label>-->
                                    <!--        <input type="text" name="mail" placeholder="Review title">-->
                                    <!--        <label>Add comments</label>-->
                                    <!--        <textarea name="comment" placeholder="Write your comments"></textarea>-->
                                    <!--    </form>-->
                                    <!--</div>-->
                                    @livewire('product-ratings', ['product' => $product], key($product->id))
                                    <div>
                                        <div id="showre">
                   
               </div>
                                    
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product page tab end -->
        <!-- releted product start -->
        <section class="section-b-padding pro-releted">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>Related Products</h2>
                        </div>
                        <div class="releted-products owl-carousel owl-theme">
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
                                       
                                        <a onclick="addtocart({{$products->id}},{{$products->product_minimumorder}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
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
        <!-- releted product end -->
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
                                            <img src="{{url('/')}}/public/uploads/product/{{$product->product_image}}" class="img-fluid" alt="image">
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
        <script {$nonce}="">
    console.warn("Livewire: The published Livewire assets are out of date\n See: https://laravel-livewire.com/docs/installation/")
</script>
<script src="{{url('/')}}/public/vendor/livewire/livewire.js?id=936e5d0fb0b76b631ba7" data-turbo-eval="false" data-turbolinks-eval="false"></script>
        <script src="https://use.fontawesome.com/02452149ed.js"></script>
<script src="https://kit.fontawesome.com/5b2fed0d44.js" crossorigin="anonymous"></script>
 @livewireScripts
 @endforeach
          @endsection
          
          @section('script')
          <script>
          $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');
        
        

    });
          $(document).ready(function(){
              
              showre();

 "use strict";
          
  $('.detail-qty').each(function () {
            var qtyval = parseInt($(this).find('.qty-val').text(), 10);
            $('.plus-btn').on('click', function (event) {
                event.preventDefault();
                qtyval = qtyval + 1;
                $(this).prev().text(qtyval);
            });
            $('.minus-btn').on('click', function (event) {
                event.preventDefault();
                qtyval = qtyval - 1;
                if (qtyval > {{$product->product_minimumorder}}) {
                    $(this).next().text(qtyval);
                } else {
                    qtyval = {{$product->product_minimumorder}};
                    $(this).next().text(qtyval);
                }
            });
        });
          });
          function addtocart1(addtocart,product_minimumorder,selleruser_id){
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// qty12
 var product_minimumorder = $('#qty12').html();
 
//  console.log(product_minimumorder);
     $.ajax({
        url:"{{ url('addtocart/') }}",
        type:'post',
        data:{ addtocart : addtocart,
            product_minimumorder :product_minimumorder,
            selleruser_id :selleruser_id
        },
          success	:function(data,status){
            showcart();
            $('#addtocart').html(data);
            // console.log(addtocart);
            console.log(data);
            // console.log(data.request);
            if(data.status){
              Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: ''+data.status+'',
  showConfirmButton: false,
  timer: 1500
})   
            }
            if(data.redirect_url){
       window.location=data.redirect_url; // or {{url('login')}}
    }

        }
    }) ;
//   showcart  
 }
 
 function addtocart2(addtocart,product_minimumorder,selleruser_id){
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// qty12
 var product_minimumorder = $('#qty12').html();
 
//  console.log(product_minimumorder);
     $.ajax({
        url:"{{ url('addtocart/') }}",
        type:'post',
        data:{ addtocart : addtocart,
            product_minimumorder :product_minimumorder,
            selleruser_id :selleruser_id
        },
          success	:function(data,status){
            showcart();
            $('#addtocart').html(data);
            // console.log(addtocart);
            console.log(data);
            // console.log(data.request);
            if(data.status){
              Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: ''+data.status+'',
  showConfirmButton: false,
  timer: 1500
})   
window.location="{{ url('/') }}/pages/checkout";
            }
            if(data.redirect_url){
       window.location=data.redirect_url; // or {{url('login')}}
    }

        }
    }) ;
//   showcart  
 }
  function showre(){
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 });
     $.ajax({
        url:"{{ url('rating/') }}/{{$product->id}}",
        type:'get',
        // data:{ [ : addtocompare},
          success	:function(data,status){
           console.log(data.comments);
           console.log(data.comments[1].rating);
           const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
            $("#average_rating").html(data.average_rating);
            var htm ='';
            for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.average_rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            htm += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }
                        $('#average_ratinghtml').html(htm);
           var html ='';
        if(data.comments.length >0){
            let total =0;
        for(var count = 0; count < data.comments.length; count++)
                    {
               html +=' <div class="customer-reviews">';
               html +='<span class="p-rating">';
                                            
                            for(var star = 1; star <= 5; star++)
                        {
                            

                            if(data.comments[count].rating >= star){
                           
                 html +='   <i class="fa fa-star e-star"></i>';
                            }
                            else{
                            
                   html +='  <i class="fa fa-star-o"></i>';
                            
                            }     
                    }
                                           
                        const d = new Date(data.comments[count].updated_at);
const c = d.getFullYear();
const b = d.getDate();
const a = months[d.getMonth()];                    
                      html +='    </span>';
                          html +='<h4 class="review-head"></h4>';
                        html +='<span class="reviews-editor">'+data.comments[count].user[0].name+' <span class="review-name"> on </span> '+b+'/'+a+'/'+c+' </span>';
                         html +='    <p class="r-description">'+data.comments[count].comment+'</p>';
                     html +='   </div> ';  
                    }
                    
        }
           $("#showre").html(html);
          }
     });
 }
  </script>
  @endsection