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
                                <li class="about-p"><span class="text-light">Seller</span></li>
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
                  <h1 class="text-light">Become a Seller on Bricksmart</h1> 
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
    
    </div>
  </div>
  
  <form role="form" action="" method="post">
      @csrf
    <div class="row setup-content" id="step-1">
       <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3 class="mb-4"> Choose Category You Want To sell</h3>
           <div class="radio-checkbox-inputs width3 checkboxes">
           @foreach ($category as $category)
          <label class="radio-checkbox-inline sand">
              
          <input type="checkbox" name="category[{{$category->id}}]" class="categorylist" value="{{$category->name}}">
          <span style="background-image: url({{url('/')}}/public/uploads/category/{{$category->img}})"><e>{{$category->name}}</e></span></label>
          <span class=text-danger>
                                                    @error('category[{{$category->id}}]')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                </span>
          @endforeach
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Sand &amp; Aggregates">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/sand.jpg)"><e>Sand &amp; Aggregates</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Bricks &amp; Blocks">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/bricks.jpg)"><e>Bricks &amp; Blocks</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Electrical">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/electrical.jpg)"><e>Electrical</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Plumbing">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/plumbing_1.jpg)"><e>Plumbing</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="TMT Steel Bars">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/tmtsteel_1.jpg)"><e>TMT Steel Bars</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Bathroom Accessories">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/bathroom-accesories_1.jpg)"><e>Bathroom Accessories</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Wooden Products">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/wooden-products.jpg)"><e>Wooden Products</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Paints &amp; Finishes">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/paints_1.jpg)"><e>Paints &amp; Finishes</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Hardware Fixtures">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/hardware_3.jpg)"><e>Hardware Fixtures</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Lighting &amp; Fixtures">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/lighting_1.jpg)"><e>Lighting &amp; Fixtures</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Tiles">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/tiles_1.jpg)"><e>Tiles</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Natural Stones">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/granite.jpg)"><e>Natural Stones</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="RMC (Ready Mix Concrete)">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/rmc_2.jpg)"><e>RMC (Ready Mix Concrete)</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="UPVC Doors &amp; Windows">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/upvc.jpg)"><e>UPVC Doors &amp; Windows</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Home Decor">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/home-decor.jpg)"><e>Home Decor</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Roofing Solutions">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/roofing-solution.jpg)"><e>Roofing Solutions</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Home Automation">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/home-automation.jpg)"><e>Home Automation</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Modular Kitchen">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/modular-kitchen.jpg)"><e>Modular Kitchen</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Construction Chemicals">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/construction_Chemicals_1.jpg)"><e>Construction Chemicals</e></span></label>-->
          <!--<label class="radio-checkbox-inline sand">-->
          <!--<input type="checkbox" name="category[]" class="categorylist" value="Glass Hardware">-->
          <!--<span style="background-image: url(https://cdn-media.buildersmart.in/media/catalog/category/annealed-glass-500x500.jpg)"><e>Glass Hardware</e></span></label>-->
          </div>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button id="next1" class="btn btn-primary nextBtn btn-lg pull-right" type="button" disabled>Next</button>
        </div>
      </div>
    </div>
  
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Fill Your Details</h3>
           <div class="row mt-2">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile</label>
      <input type="number" class="form-control" id="inputEmail4" name="Mobile" placeholder="Mobile" required>
                                                      <span class=text-danger>
                                                    @error('Mobile')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                </span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Company Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="Company" placeholder="Company Name" required>
                                           <span class=text-danger>
                                                    @error('Company')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                </span>
    </div>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress">Contact Name</label>
    <input type="text" class="form-control" id="inputAddress" name="Contact" placeholder="Contact Name" required>
                                            <span class=text-danger>
                                                    @error('Contact')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                </span>
  </div>
  <div class="form-group mt-2">
    <label for="inputAddress2">Email</label>
    <input type="email" class="form-control" id="inputAddress2" name="Email" placeholder="Email" required>
                                             <span class=text-danger>
                                                    @error('Email')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                </span>
  </div>
  <div class="form-row mt-2">
       <label for="inputAddress2">Additional Info.</label>
  <textarea placeholder="Additional Info." name="Additional" required style="
    width: 100%;
" required>
                                               
      
  </textarea >
   <span class=text-danger>
                                                    @error('Additional')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                </span>
  </div>
  
          
          
          
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-success btn-lg pull-right" type="submit" >Submit</button>
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
         
        $(".radio-checkbox-inline").on("change", function(e){
      e.preventDefault();
      $('#Next').removeAttr("disabled")
        });
        $(".categorylist").on("change", function(e){
      e.preventDefault();
      $('#next1').removeAttr("disabled")
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
 @endsection