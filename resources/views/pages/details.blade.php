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
                                <li class="about-p"><span class="text-light">Get Product Price Instantly</span></li>
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
     <form method="post" action="{{ url('pages/details/') }}">
      @csrf
    <div class="container mt-4 mb-4 w-50">
       
  <div class="row mt-4">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="hidden" class="form-control" id="inputEmail4" placeholder="First Name" name="id" value="{{$id}} ">
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="fname" value="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Last Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="lname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group mt-4">
    <label for="inputAddress">Mobile</label>
    <input type="number" class="form-control" id="inputAddress" name="phone" placeholder="Phone">
  </div>
   <div class="form-group mt-4">
    <label for="inputAddress">E Mail</label>
    <input type="email" class="form-control" id="inputAddress" name="email" placeholder="E Mail">
  </div>
 

    </div>
    
    
  
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary " href="{{url('/')}}/pages/details">
        Get Product Price Instantly
    </button>
    </div>
    </form>
 </div>

@endsection