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
                    <div class="order-info">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Date purchased</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Track</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($Order as $Orders)
                                    <tr>
                                        <td>{{$Orders->order_id}}</td>
                                        <td>{{$Orders->created_at}}</td>
                                        <td>{{$Orders->order_status_track}}</td>
                                        <td>₹{{$Orders->product_price}}</td>
                                        <td><a href="{{url('/')}}/pages/track/{{$Orders->o_id}}" class="btn btn-style1" >Track</a></td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order complete end -->
   @endsection