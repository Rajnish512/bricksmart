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
                                <li class="about-p"><span class="text-light">Requirements</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<link rel="stylesheet" href="{{url('/')}}/public/css/newwcustom.css">


 <div class="container mt-5 outer">
      <div class="row">
        <div class="col-sm-5" style="
    padding-bottom: 53px;
">
            <div class="container">
                <div class="row d-flex justify-content-center text-light fir" style="
    margin-top: 78px;
">
                  <h1 class="text-light">Post YourRequirement on Bricksmart</h1> 
                  <p class="text-light">If you are a Manufacturer or a Distributor supplying building and construction materials, and like to sell on Bricksmart platform, please follow the following instructions.</p>
              </div>
              </div>
              <div class="con">
                <ol class="">
                  <li class="text-light"> Fill the registration form.</li>
                  <li class="text-light">Our sourcing team will get in touch with you in 2-3 business days.</li>
                  <li class="text-light">BuildersMart will onboard your products at the pre-negotiated rates.</li>
                </ol>
              </div>
            
        
        </div>


<div class="col-md-7">
    <div class="container"></div>,<div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel d-flex justify-content-between">
      <div class="stepwizard-step ">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
      @csrf
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 1</h3>
          <div class="form-box-inputs mt-4">
<div class="new-form-group radio-checkbox">
<div class="new-form-inputs">

<div class="radio-checkbox-inputs width3 checkboxes">
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Cement">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/cement_2.jpg)"><e>Cement</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Sand &amp; Aggregates">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/sand.jpg)"><e>Sand &amp; Aggregates</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Bricks &amp; Blocks">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/bricks.jpg)"><e>Bricks &amp; Blocks</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Electrical">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/electrical.jpg)"><e>Electrical</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Plumbing">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/plumbing_1.jpg)"><e>Plumbing</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="TMT Steel Bars">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/tmtsteel_1.jpg)"><e>TMT Steel Bars</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Bathroom Accessories">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/bathroom-accesories_1.jpg)"><e>Bathroom Accessories</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Wooden Products">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/wooden-products.jpg)"><e>Wooden Products</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Paints &amp; Finishes">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/paints_1.jpg)"><e>Paints &amp; Finishes</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Hardware Fixtures">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/hardware_3.jpg)"><e>Hardware Fixtures</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Lighting &amp; Fixtures">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/lighting_1.jpg)"><e>Lighting &amp; Fixtures</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Tiles">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/tiles_1.jpg)"><e>Tiles</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Natural Stones">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/granite.jpg)"><e>Natural Stones</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="RMC (Ready Mix Concrete)">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/rmc_2.jpg)"><e>RMC (Ready Mix Concrete)</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="UPVC Doors &amp; Windows">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/upvc.jpg)"><e>UPVC Doors &amp; Windows</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Home Decor">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/home-decor.jpg)"><e>Home Decor</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Roofing Solutions">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/roofing-solution.jpg)"><e>Roofing Solutions</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Home Automation">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/home-automation.jpg)"><e>Home Automation</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Modular Kitchen">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/modular-kitchen.jpg)"><e>Modular Kitchen</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Construction Chemicals">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/construction_Chemicals_1.jpg)"><e>Construction Chemicals</e></span></label>
          <label class="radio-checkbox-inline sand">
          <input type="checkbox" name="category[]" class="categorylist" value="Glass Hardware">
          <span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/annealed-glass-500x500.jpg)"><e>Glass Hardware</e></span></label>
          </div>
</div>
</div>
</div>
          <button id="Next" class="btn btn-primary nextBtn btn-lg pull-right" type="button" disabled>Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 2</h3>
           
           
           <select class="form-control" name="select" id="add_row" >
        <option selected="true" disabled="disabled">Select product</option>
        @foreach ($product as $product)
        <option value="{{$product->id}}">{{$product->product_name}}</option>
        @endforeach
      
    </select>
    <table id="invoice-item-table" class="table">
  <thead>
    <tr>
      <th scope="col">S No.</th>
      <th scope="col">Product Name</th>
      <th scope="col">
          Quantity
      </th>
        <th scope="col">
          Delete
      </th>
     
    </tr>
  </thead>
  <tbody>
    <!--<tr>-->
    <!--  <th scope="row">1</th>-->
    <!--  <td>Mark</td>-->
    <!--  <td>-->
    <!--       <input type="text"  aria-label="Text input with checkbox">-->
    <!--  </td>-->
    <!--  <td>-->
    <!--      <button class="btn btn-danger">-->
    <!--          <i class="fa fa-trash" aria-hidden="true"></i>-->

    <!--      </button>-->
    <!--  </td>-->
    <!--</tr>-->
   
  </tbody>
</table>
           
           
           
           
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button id="next1"  class="btn btn-primary nextBtn btn-lg pull-right" type="button" disabled>Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3>
           <div class="row mt-2">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile</label>
      <input type="number" class="form-control" id="inputEmail4" name="phone" placeholder="Mobile" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Location</label>
      <input type="text" class="form-control" id="inputPassword4" name="location" placeholder="Enter Location" required>
    </div>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress"> Name</label>
    <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Enter Name" required>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">Email</label>
    <input type="email" class="form-control" id="inputAddress2" name="email" placeholder="Enter Email" required>
  </div>
  <div class="form-row mt-2">
       <label for="inputAddress2">Additional Info.</label>
  <textarea placeholder="Additional Info." name="Additional" style="
    width: 100%;
" required>
      
  </textarea>
  </div>
  
          
          
          
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>
</div>
       
      </div>
    </div>



 @endsection
 
 
 
 @section('script')
 <script>
 
     $(document).ready(function () {
        //  categorylist
        $(".categorylist").on("change", function(e){
      e.preventDefault();
      $('#Next').removeAttr("disabled")
        });
       

      
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
 </script>
 <script>
         
      $(document).ready(function(){
        var final_total_amt = $('#final_total_amt').text();
        var count = 0;
        
        $(document).on('change', '#add_row', function(){
          count++;
          $('#next1').removeAttr("disabled")
          var x = document.getElementById("add_row").value;
           $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
           $.ajax({
        url:"{{ url('selectedproducrs/') }}",
        type:'post',
        data:{ selectedproducrs : x},
        
          success	:function(data,status){
              console.log(data);
          if(data.product.length >0){
            let total =0;
        for(var count1 = 0; count1 < data.product.length; count1++)
                    {
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><span id="sr_no">'+count+'</span></td>';
          html_code += '<td>'+data.product[count1].product_name+'<input type="hidden" name="products[]" value="'+data.product[count1].product_name+'"></td>';
          html_code += '<td><input type="text" name="quantity[]" value="'+data.product[count1].product_minimumorder+'" id="item_name'+count+'" /></td>';
          
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
          html_code += '</tr>';
          $('#invoice-item-table').append(html_code);
                    }
          }
          }
           });
        });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          var total_item_amount = $('#order_item_final_amount'+row_id).val();
          var final_amount = $('#final_total_amt').text();
          var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
          $('#final_total_amt').text(result_amount);
          $('#row_id_'+row_id).remove();
          count--;
          $('#total_item').val(count);
        });
        
      });
        
     </script>
 @endsection