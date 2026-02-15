@extends('main')
@section('main-section')

<style>
    .sell-with-us-txt {
    padding: 100px 0 0;
    color: #fff;
    font-size: 16px;
    line-height: 1.4;
}
.sell-with-steps .sell-with-step.two {
    display: block;
    float: left;
    width: 50%;
    padding: 0 20px 20px;
}
.sell-with-steps {
    display: block;
    padding: 20px 0;
}
.sell-with-steps .sell-with-step .sell-with-step-header {
    display: flex;
    flex-direction: row;
    width: 100%;
    padding: 5px 0;
    font-weight: 500;
    align-items: center;
    border-bottom: 2px solid rgba(255,255,255,0.1);
}
.banner-form .banner-form-inner {
    background: rgba(255,255,255,0.9);
    padding: 20px;
    border-radius: 10px;
    -webkit-box-shadow: 0 3px 8px 0 rgb(54 57 73 / 5%);
    box-shadow: 0 3px 8px 0 rgb(54 57 73 / 5%);
}
.fnt{
        font-size: 8px;
        margin-left:10px;
}
.sell-with-steps .sell-with-step .sell-with-step-header span {
    width: 25px;
    height: 25px;
    font-size: 18px;
    color: #333;
    background: #fff;
    border-radius: 20px;
    text-align: center;
    display: block;
    margin-right: 10px;
}
</style>
<section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}" class="text-light">Home</a></li>
                                <li class="about-p"><span class="text-light">Buy Now Pay Leter</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div style="    width: 100%;
    min-height: 500px;
    background: url(https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/sell-with-us-bg-new.jpg) no-repeat right top;
    background-attachment: fixed;">
    

<div class="container" >
    <div class="row" >
        <div class="col-md-8">
            <div class="sell-with-us-txt">
<div>
    <h3 class="text-light">Bricksmart introduces <i><u>"Buy Now, Pay Later"</u></i> for it's customers. <i><u>Avail Upto 30 Lakhs credit.</u></i></h3>


</div>
<div class="sell-with-steps">
<div class="sell-with-step two">
<div class="sell-with-step-header">
<span >1</span> Fast and flexible credit process
</div>
</div>
<div class="sell-with-step two">
<div class="sell-with-step-header">
<span>2</span> Quick approval
</div>
</div>
<div class="sell-with-step two">
<div class="sell-with-step-header">
<span>3</span> Transparent charges
</div>
</div>
<div class="sell-with-step two">
<div class="sell-with-step-header">
<span>4</span> Revolving credit upto 30 Lakhs
</div>
</div>
</div>
</div>
        </div>
        <div class="col-md-4">
          <form class="sell-with-us-txt" method="POST">
              @csrf
              <h3 class="text-light text-center">Buy Now Pay Later</h3>
               <div class="form-group m-2">
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
    
  </div>
  <div class="form-group m-2">
    
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    
  </div>
  <div class="form-group m-2">
    
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Number"  name="number">
  </div>
  
  <div class="form-group m-2">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter City" name="city">
  </div>
  <div class="form-group m-2">
    
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Credit You Want" name="credit">
  </div>
  
  <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck1"  value="Cement" name="n1">
    <label class="form-check-label fnt" for="exampleCheck1">Cement</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck2"  value="Sand & Aggregates" name="n2">
    <label class="form-check-label fnt" for="exampleCheck2">Sand & Aggregates</label>
  </div>
  </div>
  
   <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck3" value="TMT Steel Bars" name="n3">
    <label class="form-check-label fnt" for="exampleCheck3">TMT Steel Bars</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck4" value="Bricks & Blocks" name="n4">
    <label class="form-check-label fnt" for="exampleCheck4">Bricks & Blocks</label>
  </div>
  </div>
  
  
   <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck5" value="Electrical" name="n5">
    <label class="form-check-label fnt" for="exampleCheck5">Electrical</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck6" value="Plumbing" name="n6">
    <label class="form-check-label fnt" for="exampleCheck6">Plumbing</label>
  </div>
  </div>
  
  
  
   <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck7" value="Wooden Products" name="n7">
    <label class="form-check-label fnt" for="exampleCheck7">Wooden Products</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck8" value="Tiles" name="n8">
    <label class="form-check-label fnt" for="exampleCheck8">Tiles</label>
  </div>
  </div>
    <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck9" value="Bathroom Accessories" name="n9">
    <label class="form-check-label fnt" for="exampleCheck9">Bathroom Accessories</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck20" value="Bathroom Accessories" name="n10">
    <label class="form-check-label fnt" for="exampleCheck20">Hardware & Fixtures</label>
  </div>
  </div>
    <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck10" value="Paints & Finishes" name="n11">
    <label class="form-check-label fnt" for="exampleCheck10">Paints & Finishes</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck11" value="Lighting & Fixtures" name="n12">
    <label class="form-check-label fnt" for="exampleCheck11">Lighting & Fixtures</label>
  </div>
  </div>
    <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck12" value="RMC" name="n13">
    <label class="form-check-label fnt" for="exampleCheck12">RMC (Ready Mix Concrete)</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck13" value="Natural Stones" name="n14">
    <label class="form-check-label fnt" for="exampleCheck13">Natural Stones</label>
  </div>
  </div>
    <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck14" value="Home Decor" name="n15">
    <label class="form-check-label fnt" for="exampleCheck14">Home Decor</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck15" value="UPVC Doors & Windows" name="n16">
    <label class="form-check-label fnt" for="exampleCheck15">UPVC Doors & Windows</label>
  </div>
  </div>
  
 
  
   <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck16" value="Modular Kitchen" name="n17">
    <label class="form-check-label fnt" for="exampleCheck16"> Modular Kitchen</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck17" value="Roofing Solutions" name="n18">
    <label class="form-check-label fnt" for="exampleCheck17">Roofing Solutions</label>
  </div>
  </div>
   <div class="row m-2">
      <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck18" value="Construction Chemicals" name="n19">
    <label class="form-check-label fnt" for="exampleCheck18">Construction Chemicals</label>
  </div>
  <div class="form-group form-check col-md-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck19" value="Glass Hardware" name="n20">
    <label class="form-check-label fnt" for="exampleCheck19">Glass Hardware</label>
  </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary m-2">Submit</button>
</form>
        </div>
    </div>
</div>

</div>





@endsection