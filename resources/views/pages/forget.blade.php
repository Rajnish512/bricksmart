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
                                <li class="about-p"><span>Forgot-password</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- forgot password start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="forgat-password-area">
                        <h4 class="forgot-title">Forgot password?</h4>
                        <div class="forgot-p">
                            <span class="forgot">Reset your password here</span>
                            <form>
                                <input type="text" name="text" placeholder="Username or email">
                            </form>
                            <a href="login.html" class="forgot-link"><span>Get new password <i class="fa fa-unlock"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- forgot password end -->
   @endsection