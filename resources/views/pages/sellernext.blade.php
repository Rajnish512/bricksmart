 @extends('main')
@section('main-section')
<link rel="stylesheet" href="{{url('/')}}/public/css/newwcustom.css">

<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-6 bg-primary">
            <div class="form-box-left-section">
<div class="fbls-top">
<h1 class="text-light">Become a Seller on BuildersMART</h1>
<p>If you are a Manufacturer or a Distributor supplying building and construction materials, and like to sell on BuildersMart platform, please follow the following instructions.</p>
<ul class="new-form-list">
<li>
<div class="new_circle"><div class="new_border"></div><div class="new_circle_number">1</div></div>
<span class="nfl-txt">Fill the registration form.</span>
</li>
<li>
<div class="new_circle"><div class="new_border"></div><div class="new_circle_number">2</div></div>
<span class="nfl-txt">Our sourcing team will get in touch with you in 2-3 business days.</span>
</li>
<li>
<div class="new_circle"><div class="new_border"></div><div class="new_circle_number">3</div></div>
<span class="nfl-txt">BuildersMart will onboard your products at the pre-negotiated rates.</span>
</li>
</ul>
</div>
<div class="fbls-img"><img src="https://cdn-skin.buildersmart.in/skin/frontend/base/default/images/new-form-icons/vendor-bg.png" alt=""></div>
</div>
        </div>
        <div class="col-md-6">
            <div class="form-box-right-section">
          <form id="VendorRegister" method="post" enctype="multipart/form-data">
          <div class="steps-block" id="step1" style="display: none;">
          <div class="steps-top-block">
          <div class="form-box-title">Sign Up as a <span>Seller Now</span></div>
          <div class="top-nav-btns right">
          <button type="button" class="nextstep top-nav-btn" data-target="#step2"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
          </div>
          </div>
          
          <div class="form-box-inputs">
          <div class="new-form-group radio-checkbox">
          <div class="new-form-inputs">
          <label class="activelabel">You are a? <span class="required">*</span></label>
          <div class="radio-checkbox-inputs">
          <label class="radio-checkbox-inline"><input type="radio" name="youare" value="Manufacturer"> <span>Manufacturer</span></label>
          <label class="radio-checkbox-inline"><input type="radio" name="youare" value="Authorised Dealer"> <span>Authorised Dealer</span></label>
          <label class="radio-checkbox-inline"><input type="radio" name="youare" value="Distributor"> <span>Distributor</span></label>
          <label class="radio-checkbox-inline"><input type="radio" name="youare" value="Dealer"> <span>Dealer</span></label>
          </div>
          </div>
          </div>
          </div>
          <div class="form-box-btns right">
          <button type="button" class="new-form-btn color1 nextstep" data-target="#step2">Next</button>
          </div>
          </div>
          
          <div class="steps-block" id="step2" style="display: block;">
          <div class="steps-top-block">
          <div class="form-box-title">Select your Selling <span>Product Categories</span></div>
          <div class="top-nav-btns">
          <button type="button" class="btn btn-primary m-2" data-target="#step1"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-primary m-2" data-target="#step3"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
          </div>
          </div>
          
          <div class="form-box-inputs">
          <div class="new-form-group radio-checkbox">
          <div class="new-form-inputs">
          <label class="activelabel">What you want to sell on BuildersMart? <span class="required">*</span></label>
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
          <div class="form-box-btns">
          <button type="button" class="btn btn-primary" data-target="#step1">Back</button>
          <button type="button" class="btn btn-primary" data-target="#step3">Next</button>
          </div>
          </div>
          
          <div class="steps-block" id="step3" style="display: none;">
          <div class="steps-top-block">
          <div class="form-box-title">Please Enter <span>Your Details</span></div>
          <div class="top-nav-btns left">
          <button type="button" class="nextstep top-nav-btn default" data-target="#step2"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
          </div>
          </div>
          
          <div class="form-box-inputs">
          <div class="row">
          <div class="col-md-6 col-sm-6">
          <div class="new-form-group">
          <div class="new-form-icon"><object type="image/svg+xml" data="https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/new-form-icons/mobile.svg"></object></div>
          <div class="new-form-inputs">
          <input type="number" class="new-form-control" name="Phone" autocomplete="off" id="Phone" required="">
          <label>Mobile <span class="required">*</span></label>
          </div>
          </div>
          </div>
          <div class="col-md-6 col-sm-6">
          <div class="new-form-group">
          <div class="new-form-icon"><object type="image/svg+xml" data="https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/new-form-icons/company.svg"></object></div>
          <div class="new-form-inputs">
          <input type="text" class="new-form-control" name="cname" autocomplete="off" id="cname" required="">
          <label>Company Name <span class="required">*</span></label>
          </div>
          </div>
          </div>
          <div class="col-md-6 col-sm-6">
          <div class="new-form-group">
          <div class="new-form-icon"><object type="image/svg+xml" data="https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/new-form-icons/user.svg"></object></div>
          <div class="new-form-inputs">
          <input type="text" class="new-form-control" name="name" autocomplete="off" id="name" required="">
          <label>Contact Name <span class="required">*</span></label>
          </div>
          </div>
          </div>
          <div class="col-md-6 col-sm-6">
          <div class="new-form-group">
          <div class="new-form-icon"><object type="image/svg+xml" data="https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/new-form-icons/email.svg"></object></div>
          <div class="new-form-inputs">
          <input type="text" class="new-form-control" name="Email" autocomplete="off" id="Email" required="">
          <label>Email <span class="required">*</span></label>
          </div>
          </div>
          </div>
          <div class="col-md-12 col-sm-12">
          <div class="new-form-group">
          <div class="new-form-icon"><object type="image/svg+xml" data="https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/new-form-icons/chat.svg"></object></div>
          <div class="new-form-inputs">
          <textarea type="text" class="new-form-control" name="Requirements" id="Requirements" required=""></textarea>
          <label>Additional Information if any</label>
          </div>
          </div>
          </div>
          </div>
          </div>
          <div class="form-box-btns">
          <button type="button" class="new-form-btn default nextstep" data-target="#step2">Back</button>
          <button type="button" class="new-form-btn color1" id="submitform">Submit</button>
          </div>
          </div>
          
          <div class="steps-block" id="step4" style="display:none;">
          <div class="success-top-block">
          <img src="https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/new-form-icons/success-icon.png" alt="">
          <h2>Thank You</h2>
          <p>Your request created successfully.</p>
          <p>Our sourcing team will get in touch with you shortly.</p>
          </div>
          </div>
          
          </form>
          </div>
        </div>
    </div>
</div>
  @endsection