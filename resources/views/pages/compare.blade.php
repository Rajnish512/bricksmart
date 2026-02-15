@extends('main')
@section('main-section')
<link rel="stylesheet" href="{{url('/')}}/public/css/newwcustom.css">
<link rel="stylesheet" href="{{url('/')}}/public/js/newwcustom.js">
 <!-- breadcrumb start -->
          <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}" class="text-light">Home</a></li>
                                <li class="about-p"><span class="text-light">Compare </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- breadcrumb end -->
	<div class="container pb-5 mb-2">
    <div class="comparison-table">
        <table class="table table-bordered">
            <thead class="bg-secondary" id="compaerhead">
              
            </thead>
            <tbody id="summary" data-filter="target">
                
            </tbody>
            
        </table>
    </div>
</div>

        @endsection
        @section('script')
        <script>
        $(document).ready(function(){
            
            showcompare1();
            
        });
            function showcompare1(){
     $.ajax({
        url:"{{ url('showcompare/') }}",
        type:'get',
        
          success	:function(data,status){
            
            
           
             console.log(data);
             
            
        if(data.product.length >0){
            var html1 ='<tr><td class="align-middle"></td>';
        for(var count = 0; count < data.product.length; count++)
                    {
                    html1 +='<td>'; 
                    html1 +='<div class="comparison-item"><span class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" onclick="removecompare('+data.product[count].co_id+')" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>'; 
                    html1 +='<a class="comparison-item-thumb"  href="{{url('/')}}/product/'+data.product[count].id+'"><img src="{{url('/')}}/public/uploads/product/'+data.product[count].product_image+'" alt="Apple iPhone Xs Max"></a><a class="comparison-item-title" style="display: block; white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;" href="{{url('/')}}/product/'+data.product[count].id+'">'+data.product[count].product_name+'</a>'; 
                     html1 +='<button class="btn btn-pill btn-outline-primary btn-sm" type="button" onclick="addtocart('+data.product[count].p_id+','+data.product[count].product_minimumorder+','+data.product[count].product_by+')" data-toggle="toast" data-target="#cart-toast">Add to Cart</button>'; 
                     html1 +='</div>';    
                    }
                    html1 +='</tr>';
          $('#compaerhead').html(html1);
          var html ='<tr class="bg-secondary"><th class="text-uppercase">Summary</th>';
        for(var count = 0; count < data.product.length; count++)
                    {
                    html +='<td><span class="text-dark font-weight-semibold">'+data.product[count].product_name+'</span></td>'; 
                    }
                    html +='</tr>';
            html +='<tr class="bg-secondary"><th class="text-uppercase">Price</th>';
          for(var count = 0; count < data.product.length; count++)
                    {
                    html +='<td><span class="text-dark font-weight-semibold">₹'+data.product[count].product_price+'</span></td>'; 
                    }
                    html +='</tr>';
                    html +='<tr class="bg-secondary"><th class="text-uppercase">product MRP</th>';
          for(var count = 0; count < data.product.length; count++)
                    {
                    html +='<td><span class="text-dark font-weight-semibold">₹'+data.product[count].product_mrp+'</span></td>'; 
                    }
                    html +='</tr>';
                    html +='<tr class="bg-secondary"><th class="text-uppercase">Categorys</th>';
          for(var count = 0; count < data.product.length; count++)
                    {
                    html +='<td><span class="text-dark font-weight-semibold">'+data.product[count].name+'</span></td>'; 
                    }
                    html +='</tr>';
                    html +='<tr class="bg-secondary"><th class="text-uppercase">Brand</th>';
          for(var count = 0; count < data.product.length; count++)
                    {
                    html +='<td><span class="text-dark font-weight-semibold"><img style=" height: 50px;" src="{{url('/')}}/public/uploads/brand/'+data.product[count].logo+'" alt="Brand"></span></td>'; 
                    }
                    html +='</tr>';
                    html +='<tr class="bg-secondary"><th class="text-uppercase">Description</th>';
          for(var count = 0; count < data.product.length; count++)
                    {
                    html +='<td><span class="text-dark font-weight-semibold">'+data.product[count].product_description+'</span></td>'; 
                    }
                    html +='</tr>'; 
                    html +='<tr class="bg-secondary"><th class="text-uppercase">Add to Cart</th>';
          for(var count = 0; count < data.product.length; count++)
                    {
                    html +='<td style="text-align: center;"><span class="text-dark font-weight-semibold"><button class="btn btn-pill btn-outline-primary btn-sm" type="button" onclick="addtocart('+data.product[count].p_id+','+data.product[count].product_minimumorder+','+data.product[count].product_by+')" data-toggle="toast" data-target="#cart-toast">Add to Cart</button></span></td>'; 
                    }
                    html +='</tr>'; 
                    $('#summary').html(html);
                        }
        else{
            $('#compaerhead').html('');
          $('#summary').html('<div style="justify-content: center;display: flex;"><h5>No data for compare </h5><div>');  
        }

        }
    }) ;
     
 }
 function removecompare(removecompare){
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
     $.ajax({
        url:"{{ url('removecompare/') }}",
        type:'post',
        data:{ removecompare : removecompare},
          success	:function(data,status){
            showcompare1();
            showcompare();
            $('#addtocart').html(data);
            // console.log(addtocart);
            console.log(data);
            // console.log(data.request);
//              Swal.fire({
//   position: 'top-end',
//   icon: 'success',
//   title: ''+data+'',
//   showConfirmButton: false,
//   timer: 1500
// })

        }
    }) ;
//   showcart  
 }
        </script>
        @endsection 
        