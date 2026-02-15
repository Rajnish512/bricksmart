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
.sell-with-steps .sell-with-step {
    display: block;
    float: left;
    width: 33.3%;
    padding: 0 20px;
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
                                <li class="about-p"><span class="text-light">Advertise</span></li>
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
<h3 class="text-light">Advertise your Brand with Bricksmart </h3>
<p>Stop Waiting And Start Trending...

</p>
</div>
<div class="sell-with-steps">
<div class="sell-with-step">
<div class="sell-with-step-header">
<span>1</span> Fill the Form
</div>
<p>Fill the registration form</p>
</div>
<div class="sell-with-step">
<div class="sell-with-step-header">
<span>2</span> Get Quotes
</div>
<p>Our representative will send the quotes</p>
</div>
<div class="sell-with-step">
<div class="sell-with-step-header">
<span>3</span> Start Trending
</div>
<p>Advertise your brand with Bricksmart</p>
</div>
</div>
</div>
        </div>
        <div class="col-md-4">
          <form class="sell-with-us-txt" method="POST">
              @csrf
              <h3 class="text-light text-center">Advertise On Bricksmart</h3>
               <div class="form-group m-2">
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
    
  </div>
  <div class="form-group m-2">
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company Name" name="cname">
    
  </div>
  <div class="form-group m-2">
    
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" name="email">
  </div>
  
  <div class="form-group m-2">
    
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Number" name="number">
  </div>
  
  <div class="form-group m-2">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter City" name="city">
  </div>
  
 
  
  <button type="submit" class="btn btn-primary m-2">Submit</button>
</form>
        </div>
    </div>
</div>

</div>





@endsection