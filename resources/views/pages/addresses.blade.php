@extends('main')
@section('main-section')
        
        <!-- breadcrumb start -->
        <section class="about-breadcrumb">
            <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/about-image.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about-l">
                                <ul class="about-link">
                                    <li class="go-home"><a href="index1.html">Home</a></li>
                                    <li class="about-p"><span>Addresses</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- faq's collapse start -->
        <section class="address-area section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="address-title">
                            <h1>Your addresses</h1>
                        </div>
                        <div class="account-link">
                            <a href="{{url('/')}}/account">Return to account details</a>
                        </div>
                        <div class="add-area">
                            <!--<a class="address-link">-->
                            <!--    <i class="icon-plus"></i>-->
                            <!--    <span class="sp-link-title">Add a new address</span>-->
                            <!--</a>-->
                            <div class="add-title">
                                <h4>Add a new address</h4>
                            </div>
                            <div class="address-content">
                                <ul class="address-input">
                                    <li class="type-add">
                                        <label>First name</label>
                                        <input type="text" name="fname" value="{{old('fname')}}" placeholder="First name">
                                        <span class="text-danger">                                     @error('fname')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    
                                                    </span>
                                    </li>
                                    <li class="type-add">
                                        <label>Last name</label>
                                        <input type="text" name="lname" value="{{old('fname')}}" placeholder="Last name">
                                        <span class="text-danger">                                     @error('lname')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    
                                                    </span>
                                    </li>
                                    <li class="type-add">
                                        <label>Company</label>
                                        <input type="text" name="companydetails" value="{{old('fname')}}" placeholder="Company">
                                         <span class="text-danger">                                     @error('companydetails')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    
                                                    </span>
                                    </li>
                                    <li class="type-add">
                                        <label>Street address</label>
                                        <input type="text" name="address" value="{{old('address')}}" placeholder="Street address">
                                         <span class="text-danger">                                     @error('address')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                        
                                    </li>
                                    <li class="type-add">
                                        <label>Apartment,suite,unit etc</label>
                                        <input type="text" name="appartment" value="{{old('appartment')}}" placeholder="Apartment,suite,unit etc">
                                         <span class="text-danger">
                                                   @error('appartment')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                    </li>
                                    <li class="type-add">
                                        <label>Town/City</label>
                                        <input type="text" name="city" value="{{old('city')}}" placeholder="City">
                                        <span class="text-danger">
                                                  @error('city')
                                                    {{$message}}
                                                    @enderror
                                                    </span>
                                    </li>
                                  <li class="type-add">
                                        <label>State</label>
                                        <input type="text" name="state" value="{{old('state')}}" placeholder="state">
                                        <span class="text-danger">
                                                  @error('state')
                                                    {{$message}}
                                                    @enderror
                                                    </span>
                                    </li>
                                   
                                  
                                    <li class="type-add">
                                        <label>Postal/Zip code</label>
                                        <input type="text" name="zip" value="{{old('zip')}}" placeholder="Postal/Zip code">
                                        <span class="text-danger">
                                                  @error('zip')
                                                    {{$message}}
                                                    
                                                    @enderror
                                                    </span>
                                    </li>
                                        <li class="type-add">
                                        <label>Email address</label>
                                        <input type="text" name="email" placeholder="Email address">
                                         <span class="text-danger">                         @error('email')
                                                    {{$message}}
                                                 
                                                    @enderror
                                                    </span>
                                    </li>
                                    <li class="type-add">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{old('phone')}}" placeholder="Phone">
                                        <span class="text-danger">
                                                 @error('phone')
                                                  
                                                        {{$message}}
                                                   
                                                 
                                                    @enderror
                                                    </span>
                                    </li>
                                </ul>
                                <label class="check"><input type="checkbox"> Set as default address</label>
                                <div class="add-link">
                                    <a href="javascript:void(0)" class="btn btn-style1">Add address</a>
                                    <a href="index1.html" class="btn btn-style1">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq's collapse end -->
        @endsection