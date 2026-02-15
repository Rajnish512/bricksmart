@extends('pytam/main')
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
                                <li class="about-p"><span class="text-light">Order Complete</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- Order complete start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-area">
                        <div class="order-price">
                            <ul class="total-order">
                                <li>
                                    <span class="order-no">Order no. {{$_POST["ORDERID"]}}</span>
                                    <span class="order-date">23th jan 2021 3:04 pm</span>
                                </li>
                                <li>
                                    <span class="total-price">Order total</span>
                                    <span class="amount">{{$_POST["TXNAMOUNT"]}}</span>
                                </li>
                            </ul>
                        </div>
 <!--                       echo "<a>Home</a>" . "<br/>";-->
	<!--echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";-->
	@if ($_POST["STATUS"] == "TXN_SUCCESS") 
		<div class="order-details">
                            <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                            <h4>Thank you for order</h4>
                            <span class="order-s">Your order will ship within few hours</span>
                            <a href="tracking.html" class="tracking-link btn btn-style1">Tracking details</a>
                        </div>
		<!--//Process your transaction here as success transaction.-->
		<!--//Verify amount & order id received from Payment gateway with your application's order id and amount.-->
	
	@else 
		<b></b><br/>
		<div class="order-details">
                            <span class="text-danger order-i"><i class="fa fa-times-circle-o"></i></span>
                            <h4>Thank you for order</h4>
                            <span class="order-s">Transaction status is failure</span>
                            <!--<a href="tracking.html" class="tracking-link btn btn-style1">Tracking details</a>-->
                        </div>
	
	@endif
                        
                        <div class="order-delivery">
                            <ul class="delivery-payment">
                                <li class="delivery">
                                    <h5>Delivery address</h5>
                                    <p id ="flname">Lorem ipsum</p>
                                    <span class="order-span " id="oaddress">7003 fairway street</span>
                                    <span class="order-span" id="ocity">New york</span>
                                    <span class="order-span" id="ostate">NY 10033</span>
                                    <span class="order-span" id="ozip">USA</span>
                                    <span class="order-span" id="ophone">Mobile No :+11-123456789</span>
                                </li>
                                <li class="pay">
                                    <h5>Payment summary</h5>
                                    <p class="transition">Transaction No : {{$_POST["TXNID"] }}</p>
                                    <span class="order-span p-label">
                                        <span class="n-price">Price</span>
                                        <span class="o-price totalorder" id="totalorder">$876.00</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Shipping charge</span>
                                        <span class="o-price">₹0.0</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Order Total</span>
                                        <span class="o-price totalorder">$100.00</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    @foreach($_POST as $paramName => $paramValue) -->
<!--			<br/>{{$paramName}} = {{$paramValue}}-->
<!--@endforeach-->
    <!-- Order complete end -->
    
@endsection
@section('script')
<script>
        $(document).ready(function(){
            
            showOrder();
        });
            function showOrder(){
             $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
             }) ;

$.ajax({
        url:"{{ url('showOrder/') }}/{{$_POST['ORDERID']}}",
        type:'get',
        
          success	:function(data,status){
            
            $('#addtocart').html(data);
        //   product_price
        var total =0;
        var subtotal =0;
        for(var count = 0; count < data.product.length; count++)
                    {
                    subtotal = data.product[count].product_price*data.product[count].quantity;
                  total =subtotal +total;  
            console.log(data);
            var  flname = ''+data.product[count].fname+' '+data.product[count].lname+'';
            var  oaddress = ''+data.product[count].address+' '+data.product[count].appartment+'';
             var  ocity = ''+data.product[count].city+'';
             var  ostate = ''+data.product[count].state+'';
             var  ozip = ''+data.product[count].zip+'';
             var  ophone = 'Mobile No :'+data.product[count].phone+'';
                    }
                var total1 = '₹'+total+''; 
                    $('.totalorder').html(total1);
                  
                $('#flname').html(flname); 
                $('#oaddress').html(oaddress);
                $('#ocity').html(ocity);
                $('#ostate').html(ostate);
                $('#ozip').html(ozip);
                $('#ophone').html(ophone);
          
        }
   
});
 
            }
            
        
</script>
@endsection