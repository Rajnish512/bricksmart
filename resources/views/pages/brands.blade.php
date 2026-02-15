@extends('main')
@section('main-section')



      
 <div class="container">
        <!-- breadcrumb start -->
      <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}" class="text-light">Home</a></li>
                                <li class="about-p"><span class="text-light">Select Brands</span></li>
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
                    <div class="track-area">
                        
                        <div class="track-main">
                            <div class="track">
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">
Select Product Category</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Select Your Brand</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text"> Select Products </span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Fill Your Details</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Get Price Details</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order complete end -->
    
    
    <div class="row">
        
         @foreach ($brand as $brand)
                         <div class="top-cat col-md-3 mb-4 ">
                                                <a href="{{url('/')}}/pages/select/{{$brand->id}}" class="cat-url d-flex align-items-center border rounded justify-content-between">
                                                    <img src="{{url('/')}}/public/uploads/brand/{{$brand->logo}}" height="50px" alt="image">
                                                    
                                                </a>
                                            </div>
                                            @endforeach
                       
                    
    </div>
 </div>

@endsection