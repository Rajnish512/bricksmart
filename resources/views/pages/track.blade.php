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
                                <li class="about-p"><span class="text-light">Traking</span></li>
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
                     @foreach($Order as $Orders)
                    <div class="track-area">
                        <div class="track-price">
                           
                            <ul class="track-order">
                                <li>
                                    <h4>Your order id is: {{$Orders->order_id }}</h4>
                                </li>
                                <li><span class="track-status">Status:</span> {{$Orders->order_status_track }}</li>
                            </ul>
                        </div>
                       
                        @if($Orders->order_status_track=="Order Pending")
                         <div class="track-main">
                            <div class="track">
                                <div class="step">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">Order confirmed</span>
                                </div>
                                <div class="step ">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Picked by courier</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text"> On the way </span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Ready for pickup</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Order delivered</span>
                                </div>
                            </div>
                        </div>
                        @elseif($Orders->order_status_track=="Order confirmed")
                         <div class="track-main">
                            <div class="track">
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">Order confirmed</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Picked by courier</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text"> On the way </span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Ready for pickup</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Order delivered</span>
                                </div>
                            </div>
                        </div>
                        @elseif($Orders->order_status_track=="Picked by courier")
                         <div class="track-main">
                            <div class="track">
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">Order confirmed</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Picked by courier</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text"> On the way </span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Ready for pickup</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Order delivered</span>
                                </div>
                            </div>
                        </div>
                        @elseif($Orders->order_status_track=="On the way")
                         <div class="track-main">
                            <div class="track">
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">Order confirmed</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Picked by courier</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text"> On the way </span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Ready for pickup</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Order delivered</span>
                                </div>
                            </div>
                        </div>
                        @elseif($Orders->order_status_track=="Ready for pickup")
                         <div class="track-main">
                            <div class="track">
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">Order confirmed</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Picked by courier</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text"> On the way </span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Ready for pickup</span>
                                </div>
                                <div class="step">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Order delivered</span>
                                </div>
                            </div>
                        </div>
                        @elseif($Orders->order_status_track=="Order delivered")
                         <div class="track-main">
                            <div class="track">
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <span class="text">Order confirmed</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <span class="text">Picked by courier</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-truck"></i></span>
                                    <span class="text"> On the way </span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Ready for pickup</span>
                                </div>
                                <div class="step active">
                                    <span class="icon"><i class="fa fa-archive"></i>
                                    </span> <span class="text">Order delivered</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Order complete end -->
   @endsection