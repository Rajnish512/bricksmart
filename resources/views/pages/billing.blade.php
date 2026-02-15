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
                                    <li class="about-p"><span>Billing-info</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- map area start -->
        <section class="contact section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="billing-area">
                            <div class="billing-title">
                                <h4>Billing address</h4>
                            </div>
                            <div class="billing-address-1">
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>First name</label>
                                        <input type="text" name="name" placeholder="First name">
                                    </li>
                                    <li class="billing-name">
                                        <label>Last name</label>
                                        <input type="text" name="name" placeholder="Last name">
                                    </li>
                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>Address 1</label>
                                        <input type="text" name="address" placeholder="Address line 1">
                                    </li>
                                    <li class="billing-name">
                                        <label>Address 2</label>
                                        <input type="text" name="address" placeholder="Address line 2">
                                    </li>
                                </ul>
                                <ul class="billing-locatio">
                                    <li class="billing-info">
                                        <label>City</label>
                                        <input type="text" name="city" placeholder="Enter your city">
                                    </li>
                                    <li class="billing-info">
                                        <label>State</label>
                                        <input type="text" name="State" placeholder="Enter your city">
                                    </li>
                                    <li class="billing-info">
                                        <label>Pincode</label>
                                        <input type="text" name="pin" placeholder="Enter your pincode">
                                    </li>
                                </ul>
                                <ul class="country-info">
                                    <li class="billing-country">
                                        <label>Country</label>
                                        <select>
                                            <option>India</option>
                                            <option>Hindustan</option>
                                        </select>
                                    </li>
                                    <li class="billing-country">
                                        <label>Phone no</label>
                                        <input type="text" name="phone" placeholder="Enter your Phone no">
                                    </li>
                                </ul>
                            </div>
                            <div class="billing-title">
                                <h4>Shipping address</h4>
                            </div>
                            <div class="billing-address-1">
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>First name</label>
                                        <input type="text" name="name" placeholder="First name">
                                    </li>
                                    <li class="billing-name">
                                        <label>Last name</label>
                                        <input type="text" name="name" placeholder="Last name">
                                    </li>
                                </ul>
                                <ul class="add-name">
                                    <li class="billing-name">
                                        <label>Address 1</label>
                                        <input type="text" name="address" placeholder="Address line 1">
                                    </li>
                                    <li class="billing-name">
                                        <label>Address 2</label>
                                        <input type="text" name="address" placeholder="Address line 2">
                                    </li>
                                </ul>
                                <ul class="billing-locatio">
                                    <li class="billing-info">
                                        <label>City</label>
                                        <input type="text" name="city" placeholder="Enter your city">
                                    </li>
                                    <li class="billing-info">
                                        <label>State</label>
                                        <input type="text" name="State" placeholder="Enter your city">
                                    </li>
                                    <li class="billing-info">
                                        <label>Pincode</label>
                                        <input type="text" name="pin" placeholder="Enter your pincode">
                                    </li>
                                </ul>
                                <ul class="country-info">
                                    <li class="billing-country">
                                        <label>Country</label>
                                        <select>
                                            <option>India</option>
                                            <option>Hindustan</option>
                                        </select>
                                    </li>
                                    <li class="billing-country">
                                        <label>Phone no</label>
                                        <input type="text" name="phone" placeholder="Enter your Phone no">
                                    </li>
                                </ul>
                            </div>
                            <div class="next-button">
                                <a href="index1.html">Back</a>
                                <a href="cart.html">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- map area end -->
        @endsection