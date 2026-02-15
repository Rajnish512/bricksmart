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
                                <li class="about-p"><span class="text-light">Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- order history start -->
    <section class="order-histry-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">
                            <div class="order-pro">
                                <div class="pro-img">
                                    <a href="javascript:void(0)"><img src="{{url('/')}}/public/image/banner/Avatar-PNG-Image.png
" alt="img" class="img-fluid" style="height: 58px;"></a>
                                </div>
                                <div class="order-name">
                                    <h4>Welcome {{auth()->user()->name}}</h4>
                                    <span>Joined {{auth()->user()->created_at}}</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="{{url('/')}}/account" >Profile</a></li>
                                    <li class="profile-li"><a href="{{url('/')}}/pages/complete"><span>Orders</span> </a></li>
                                    
                                    <!--<li class="profile-li"><a href="{{url('/')}}/pages/addresses">Address</a></li>-->
                                    <li class="profile-li"><a href="{{url('/')}}/pages/compare"><span>Compare</span> </a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="profile-form">
                            <form method="POST">
                                  @csrf
                    @method('PUT')
                                <ul class="pro-input-label">
                                    <li>
                                        <label>First Name</label>
                                        <input type="text" name="name" placeholder="First name" value="{{auth()->user()->name}}" >
                                    </li>
                                    <li>
                                        <label>Last name</label>
                                        <input type="text" name="lname" placeholder="Last name" value="">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="E-mail address" required value="{{auth()->user()->email}}">
                                    </li>
                                    <li>
                                        <label>Phone number</label>
                                        <input type="text" name="phone" placeholder="Phone number" value="{{auth()->user()->phone}}">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>New password</label>
                                        <input type="text" name="password" placeholder="New password" >
                                    </li>
                                    <li>
                                        <label>Confirm password</label>
                                        <input type="text" name="cpassword" placeholder="Confirm password">
                                    </li>
                                </ul>
                                <ul class="pro-submit">
                                    <li>
                                        <input type="checkbox" name="name">
                                        <label>Subscribe me to newsletter</label>
                                    </li>
                                    <li>
                                        <Button type="submit" class="btn btn-style1">Update profile</Button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->
       @endsection