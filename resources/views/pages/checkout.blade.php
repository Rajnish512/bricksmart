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
                                <li class="about-p"><span class="text-light">Your checkout</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- breadcrumb end -->
        <!-- checkout page start -->
        <section class="section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="checkout-area">
                            <div class="billing-area">
                                @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                                <form action="" method="post">
                                        @csrf
                                    <h2>Billing details</h2>
                                    
                                    <div class="billing-form">
                                        <ul class="billing-ul input-2">
                                            <li class="billing-li">
                                       <input type="hidden" id="totalfee" name="totalfee" >
                                                <label>First name</label>
                                                <input type="text" name="fname" value="{{old('fname')}}"  placeholder="First name">
                                                                                <span class="text-danger">                                     @error('fname')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    
                                                    </span>
                                            </li>
                                            <li class="billing-li">
                                                <label>Last name</label>
                                                <input type="text" name="lname" value="{{old('lname')}}" placeholder="Last name">
                                         <span class="text-danger">                                     @error('lname')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Company name (Optional)</label>
                                                <input type="text" name="companydetails" placeholder="Company name">
                                            </li>
                                        </ul>
                                       
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Street address</label>
                                                <input type="text" name="address"value="{{old('address')}}"  placeholder="Street address">
                                     <span class="text-danger">                                     @error('address')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Apartment,suite,unit etc. </label>
                                                <input type="text" name="appartment" value="{{old('appartment')}}"  placeholder="">
                                                  <span class="text-danger">
                                                   @error('appartment')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                                
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Town / City</label>
                                                <input type="text" name="city" value="{{old('city')}}"  placeholder="">
                                                 <span class="text-danger">
                                                  @error('city')
                                                    {{$message}}
                                                    @enderror
                                                    </span>
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>State</label>
                                                <input type="text" name="state" value="{{old('state')}}"  placeholder="">
                                                <span class="text-danger">
                                                  @error('state')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                            </li>
                                        </ul>
                                        <ul class="billing-ul">
                                            <li class="billing-li">
                                                <label>Postcode / ZIP</label>
                                                <input type="number" name="zip" value="{{old('zip')}}"  placeholder="">
                                                 
                                                 <span class="text-danger">
                                                  @error('zip')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                            </li>
                                        </ul>
                                        <ul class="billing-ul input-2">
                                            <li class="billing-li">
                                                <label>Email address</label>
                                                <input type="text" name="email" value="{{old('email')}}"  placeholder="Email address">
                                                                                                 
                                                <span class="text-danger">                                         @error('email')
                                                    {{$message}}
                                                 
                                                    @enderror
                                                    </span>
                                            </li>
                                            <li class="billing-li">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{old('phone')}}"  placeholder="Phone">
                                                 <span class="text-danger">
                                                 @error('phone')
                                                  
                                                        {{$message}}
                                                   
                                                 
                                                    @enderror
                                                    </span>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                
                                <div class="billing-details">
                                    
                                        <h2>Shipping details</h2>
                                        <ul class="shipping-form">
                                            <li class="check-box">
                                                <input type="checkbox" name="ssshipping">
                                                <label>Ship to a different address?</label>
                                            </li>
                                            <li class="comment-area">
                                                <label>Order notes(Optional)</label>
                                                <textarea name="shipping" rows="4" cols="80"></textarea>
                                            </li>
                                        </ul>
                                        
                                    
                                </div>
                            </div>
                            <div class="order-area">
                                <!--<div class="check-pro">-->
                                <!--    <h2>In your cart (2)</h2>-->
                                <!--    <ul class="check-ul">-->
                                <!--        <li>-->
                                <!--            <div class="check-pro-img">-->
                                <!--                <a href="product.html"><img src="{{url('/')}}/public/image/pro-page-image/check-image-1.jpg" class="img-fluid" alt="image"></a>-->
                                <!--            </div>-->
                                <!--            <div class="check-content">-->
                                <!--                <a href="product.html">Fresh healthy food</a>-->
                                <!--                <span class="check-code-blod">Product code: <span>CA70051541B</span></span>-->
                                <!--                <span class="check-price">$93.00</span>-->
                                <!--            </div>-->
                                <!--        </li>-->
                                <!--        <li>-->
                                <!--            <div class="check-pro-img">-->
                                <!--                <a href="product.html"><img src="{{url('/')}}/public/image/pro-page-image/check-image-2.jpg" class="img-fluid" alt="image"></a>-->
                                <!--            </div>-->
                                <!--            <div class="check-content">-->
                                <!--                <a href="product.html">Fresh healthy food</a>-->
                                <!--                <span class="check-code-blod">Product code: <span>CA70051541B</span></span>-->
                                <!--                <span class="check-price">$230.00</span>-->
                                <!--            </div>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</div>-->
                                <h2>Your order</h2>
                                <ul class="order-history" id="showcart1">
                                    <!--<li class="order-details">-->
                                    <!--    <span>Product:</span>-->
                                    <!--    <span>Total</span>-->
                                    <!--</li>-->
                                    <!--<li class="order-details">-->
                                    <!--    <span>Orange juice:</span>-->
                                    <!--    <span>$93.00</span>-->
                                    <!--</li>-->
                                    <!--<li class="order-details">-->
                                    <!--    <span>Shrimp jumbo:</span>-->
                                    <!--    <span>$230.00</span>-->
                                    <!--</li>-->
                                    <!--<li class="order-details">-->
                                    <!--    <span>Subtotal:</span>-->
                                    <!--    <span>$323.00</span>-->
                                    <!--</li>-->
                                    <!--<li class="order-details">-->
                                    <!--    <span>Shipping Charge:</span>-->
                                    <!--    <span>Free shipping</span>-->
                                    <!--</li>-->
                                    <!--<li class="order-details">-->
                                    <!--    <span>Total:</span>-->
                                    <!--    <span>$323.00</span>-->
                                    <!--</li>-->
                                </ul>
                                
                                    <!--<ul class="order-form"> -->
                                    <!--    <li>-->
                                    <!--        <input type="checkbox" name="--">-->
                                    <!--        <label>Direct bank transfer</label>-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <input type="checkbox" name="--">-->
                                    <!--        <label>Cheque payment</label>-->
                                    <!--    </li>-->
                                    <!--    <li>-->
                                    <!--        <input type="checkbox" name="--">-->
                                    <!--        <label>Paypal</label>-->
                                    <!--    </li>-->
                                    <!--    <li class="pay-icon">-->
                                    <!--        <a href="javascript:void(0)"><i class="fa fa-credit-card"></i></a>-->
                                    <!--        <a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a>-->
                                    <!--        <a href="javascript:void(0)"><i class="fa fa-cc-paypal"></i></a>-->
                                    <!--        <a href="javascript:void(0)"><i class="fa fa-cc-mastercard"></i></a>-->
                                    <!--    </li>-->
                                    <!--</ul>-->
                                    <div class="checkout-btn">
                                    <button type="submit" class="btn btn-style1">Place order</button>
                                    </div>
                                    
                                </form>
                                <!--<div class="checkout-btn">-->
                                <!--    <a href="javascript:void(0)" class="btn-style1">Place order</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout page end -->
        
         @endsection
         
         @section('script')
         <script>
      $(document).ready(function(){
            showcart1();
            
            });
            function showcart1(){
     $.ajax({
        url:"{{ url('showcart/') }}",
        type:'get',
        
          success	:function(data,status){
            
            
            // $('#showcart1').html(data);
            //  console.log(data);
            var html ='<li class="order-details">';
                  html +='<span>Product:</span>';
                  html +='<span>Total</span></li>';
        if(data.product.length >0){
            let total =0;
        for(var count = 0; count < data.product.length; count++)
                    {
                        let sub = parseInt(data.product[count].product_price, 10)*parseInt(data.product[count].qty, 10);
                        html +='<li class="order-details">';
                        html +='<span>'+data.product[count].product_name+':</span>';
                        html +='<span>₹'+sub+'</span>';
                        html +='</li>';
                           
                         
                    // parseInt(quantity, 10)
                     total = total+sub;
                    // html +=total; 
                    }
                    html +='<li class="order-details">';
                    html +='           <span>Total:</span>';
                    
                    html +='    <span>₹'+total+'</span></li>';
                    var total1 ='₹'+total+''; 
                    $('#showcart1').html(html);
                    $('#showcount').html(data.count);
                    $('#showcount1').html(data.count);
                    $('#total1').html(total1);
                    $('#totalfee').val(total);
                    
        }
        else{
            
        }

        }
    }) ;
     
 }
            </script>
         @endsection