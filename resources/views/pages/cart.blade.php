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
                                <li class="go-home"><a href="{{url('/')}}" class="text-light">Home</a></li>
                                <li class="about-p"><span class="text-light">Shopping Cart</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- breadcrumb end -->
        <!-- cart start -->
        <section class="cart-page section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="cart-area" id="showcart1">
                            
                            <div>
                                
                            </div>
                        </div>
                   <div class="shop-total mt-4 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h3 class="mr-2">Total</h3>
                                <span class="total-amount m-2 h4" id="total1">0</span>
                                </div>
                                                            <a href="{{url('/')}}/pages/checkout" class="mt-2 text-white btn btn-warning check-link" style="height: 40px;">Checkout</a>
                            </div>

                    </div>
                   
                </div>
            </div>
        </section>
        <!-- cart end -->
        <!-- footer start -->
        <section class="footer-one section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-service section-b-padding">
                            <ul class="service-ul">
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-truck"></i></a>
                                    <span>Free delivery</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-rupee"></i></a>
                                    <span>Cash on delivery</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-refresh"></i></a>
                                    <span>30 Days returns</span>
                                </li>
                                <li class="service-li">
                                    <a href="javascript:void(0)"><i class="fa fa-headphones"></i></a>
                                    <span>Online support</span>
                                </li>
                            </ul>
                        </div>
                        <div class="f-logo">
                            <ul class="footer-ul">
                                <li class="footer-li footer-logo">
                                    <a href="index1.html">
                                        <img class="img-fluid" src="{{url('/')}}/public/image/logo1.png" alt="">
                                    </a>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-location"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Address</h6>
                                            <span>401 Broadway 24th floor
</span>
                                            <span>Near ant mall cross road</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-contact">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-telephone"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Contact</h6>
                                            <a href="tel:1-800-222-000">Phone: 1-800-222-000</a>
                                            <a href="mailto:demo@demo.com">Email: demo@demo.com</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer-li footer-address">
                                    <ul class="f-ul-li-ul">
                                        <li class="footer-icon">
                                            <i class="ion-ios-help"></i>
                                        </li>
                                        <li class="footer-info">
                                            <h6>Help</h6>
                                            <span>Lorem ipsum is simply</span>
                                            <span>Dummy the printing</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bottom section-t-padding">
                            <div class="footer-link" id="footer-accordian">
                                <div class="f-link">
                                    <h2 class="h-footer">Top categories</h2>
                                    <a href="#t-cate" data-bs-toggle="collapse" class="h-footer">
                                        <span>Top categories</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="f-link-ul collapse" id="t-cate" data-bs-parent="#footer-accordian">
                                        <li class="f-link-ul-li"><a href="grid-list.html">Fruits</a></li>
                                        <li class="f-link-ul-li"><a href="grid-list.html">Fast foods</a></li>
                                        <li class="f-link-ul-li"><a href="grid-list.html">Vegetable</a></li>
                                        <li class="f-link-ul-li"><a href="grid-list.html">Salads</a></li>
                                        <li class="f-link-ul-li"><a href="grid-list.html">Bestseller</a></li>
                                    </ul>
                                </div>
                                <div class="f-link">
                                    <h2 class="h-footer">Services</h2>
                                    <a href="#services" data-bs-toggle="collapse" class="h-footer">
                                        <span>Services</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="f-link-ul collapse" id="services" data-bs-parent="#footer-accordian">
                                        <li class="f-link-ul-li"><a href="about-us.html">About vegist</a></li>
                                        <li class="f-link-ul-li"><a href="faq%27s.html">Faq's</a></li>
                                        <li class="f-link-ul-li"><a href="contact.html">Contact us</a></li>
                                        <li class="f-link-ul-li"><a href="blog-style-1-3-grid.html">News</a></li>
                                        <li class="f-link-ul-li"><a href="sitemap.html">Sitemap</a></li>
                                    </ul>
                                </div>
                                <div class="f-link">
                                    <h2 class="h-footer">Privacy & terms</h2>
                                    <a href="#privacy" data-bs-toggle="collapse" class="h-footer">
                                        <span>Privacy & terms</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="f-link-ul collapse" id="privacy" data-bs-parent="#footer-accordian">
                                        <li class="f-link-ul-li"><a href="payment-policy.html">Payment policy</a></li>
                                        <li class="f-link-ul-li"><a href="privacy-policy.html">Privacy policy</a></li>
                                        <li class="f-link-ul-li"><a href="return-policy.html">Return policy</a></li>
                                        <li class="f-link-ul-li"><a href="shipping-policy.html">Shipping policy</a></li>
                                        <li class="f-link-ul-li"><a href="terms-conditions.html">Terms & conditions</a></li>
                                    </ul>
                                </div>
                                <div class="f-link">
                                    <h2 class="h-footer">My account</h2>
                                    <a href="#account" data-bs-toggle="collapse" class="h-footer">
                                        <span>My account</span>
                                        <i class="fa fa-angle-down"></i> 
                                    </a>
                                    <ul class="f-link-ul collapse" id="account" data-bs-parent="#footer-accordian">
                                        <li class="f-link-ul-li"><a href="account.html">My account</a></li>
                                        <li class="f-link-ul-li"><a href="cart.html">My cart</a></li>
                                        <li class="f-link-ul-li"><a href="tracking.html">Order history</a></li>
                                        <li class="f-link-ul-li"><a href="wishlist.html">My wishlist</a></li>
                                        <li class="f-link-ul-li"><a href="addresses.html">My address</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     @endsection
     @section('script')
     <script>
      $(document).ready(function(){
            showcart1();
            
      $(".updatecart").on("keyup", function(e){
      e.preventDefault();
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var updatv = $(this).val();
// var search = $(this).val();
      $.ajax({
        url:"{{ url('updatecart/') }}",
        type:'post',
        data:{ updatecart : 'updatecart',
             updatv : updatv
        },
          success	:function(data,status){
            showcart();
            showcart1();
            $('#addtocart').html(data);
            console.log(updatv);
        }
    });
      });

      
      });
     function showcart1(){
     $.ajax({
        url:"{{ url('showcart/') }}",
        type:'get',
        
          success	:function(data,status){
            
            
            // $('#showcart1').html(data);
            //  console.log(data);
            var html ='<div class="cart-details">';
                    html +='<div class="cart-item">';
                     html +='<span class="cart-head">My cart:</span>';
                     html +='<span class="c-items">'+data.count+' item</span>';
                   html +='</div>';
        if(data.product.length >0){
            let total =0;
        for(var count = 0; count < data.product.length; count++)
                    {
                        let sub = parseInt(data.product[count].product_price, 10)*parseInt(data.product[count].qty, 10);
                        html +='<div class="cart-all-pro">';
                         html +='<div class="cart-pro">';
                         html +='  <div class="cart-pro-image">';
                        html +='<a href="{{url('/')}}/product/'+data.product[count].id+'"><img src="{{url('/')}}/public/uploads/product/'+data.product[count].product_image+'" class="img-fluid" alt="{{url('/')}}/public/image"></a> </div>';
                         html +='<div class="pro-details">';
                           html +=' <h4><a href="{{url('/')}}/product/'+data.product[count].id+'">'+data.product[count].product_name+'</a></h4>';
                        
                            html +=' <span class="cart-pro-price">₹'+data.product[count].product_price+'</span>';
                            html +='      </div></div>';
                            html +='   <div class="qty-item">';
                            html +='    <div class="center">';
                             html +='         <div class="plus-minus">';
                            html +='              <span>';
                             html +='                <button onclick="minus('+data.product[count].c_id+')" class="p-2 minus-btn text-black">-</button>';
                             html +='                  <input type="text" name="name" id="inputs'+data.product[count].c_id+'" value="'+data.product[count].qty+'" class="updatecart" onchange="inputs('+data.product[count].c_id+')" >';
                             html +='<button onclick="plus('+data.product[count].c_id+')" class="plus-btn text-black p-2">+</button> </span></div>';
                            html +='<a onclick="removecart('+data.product[count].c_id+')" class="pro-remove">Remove</a></div> </div>';
                              html +='<div class="all-pro-price">';
                               html +='<span>₹'+sub+'</span></div></div>';
                               
                               
                    
                   
                    
                   
                    // parseInt(quantity, 10)
                     total = total+sub;
                    // html +=total; 
                    }
                    html +='</div>';
                    var total1 ='₹'+total+''; 
                    
        }
        else{
         html +='<li> No Record Found </li>';   
        }
        $('#showcart1').html(html);
                    $('#showcount').html(data.count);
                    $('#showcount1').html(data.count);
                    $('#total1').html(total1);

        }
    }) ;
     
 }
 function inputs(idin){
     
 var valof =$('#inputs'+idin).val();
//  console.log("jlj");
//   console.log(valof);
//   console.log("jlj");
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $.ajax({
        url:"{{ url('updatecart/') }}",
        type:'post',
        data:{ updatecart : idin,
            updatecartval : valof
        },
          success	:function(data,status){
            showcart();
            showcart1();
            $('#addtocart').html(data);
            // console.log(data);
        }
    }) ;
 }
 function minus(minuscart){
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
     $.ajax({
        url:"{{ url('minuscart/') }}",
        type:'post',
        data:{ minuscart : minuscart},
          success	:function(data,status){
            showcart();
            showcart1();
            $('#addtocart').html(data);
            // console.log(data);
        }
    }) ;
//   showcart  
 }
 function plus(pluscart){
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
     $.ajax({
        url:"{{ url('pluscart/') }}",
        type:'post',
        data:{ pluscart : pluscart},
          success	:function(data,status){
            showcart();
            showcart1();
            $('#addtocart').html(data);
            // console.log(data);
        }
    }) ;
//   showcart  
 }
//   function update(updatecart){
//       $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
//  var updatv = $(this).val();
//      $.ajax({
//         url:"{{ url('updatecart/') }}",
//         type:'post',
//         data:{ updatecart : updatecart,
//              updatv : updatv
//         },
//           success	:function(data,status){
//             showcart();
//             showcart1();
//             $('#addtocart').html(data);
//             console.log(updatv);
//         }
//     }) ;
  
//  }
 
 </script>
     @endsection