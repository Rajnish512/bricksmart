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
                                <li class="go-home"><a href="{{url('/')}}" class="text-light ">Home</a></li>
                                <li class="about-p" ><span class="text-light ">Login</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- login start -->
    <section class="section-tb-padding" style="
    background: url('{{url('/')}}/public/image/Untitled design (22).png');
    background-size: cover;
    background-position: center;
">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="login-area">
                        <div class="login-box bg-light" style="background-position: bottom;
    background-size: cover;
    
    background-image: url(https://t3.ftcdn.net/jpg/04/94/41/24/360_F_494412400_DkZhO4DcjWcUGLJaCvOZrrxX61w8vbgw.jpg);
    background-repeat: no-repeat;">
                            <h1>Login</h1>
                            <p>Please login below account detail</p>
                            <samp class="text-danger">
                            
                    @error('0')
                    
                        {{$message}}

                        @enderror
                    </samp>
                            <form id="submit_form" action="{{url('/')}}/login" method="POST" >
                                @csrf
                                <label>Email</label>
                                <input type="text" name="username" placeholder="Email">
                                  <samp class="text-danger">
                        @error('username')
                        {{$message}}

                        @enderror

                      </samp>
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password">
                                  <samp class="text-danger">
                        @error('password')
                        {{$message}}

                        @enderror

                      </samp>
                      <div class="d-flex justify-content-between align-items-center">
                          <button type="submit" class="btn-style1 m-2">Sign in</button>
                                
                                  <a href="{{url('/')}}/register" class="ceate-a">Don't have an account? Create account</a>
                      </div>
                                
                                
                                <a href="{{url('/')}}/forget-password" class="re-password">Forgot your password?</a>
                            </form> 
                        </div>
                        <!--<div class="login-account">-->
                        <!--    <h4>Don't have an account?</h4>-->
                        <!--    <a href="{{url('/')}}/register" class="ceate-a">Create account</a>-->
                        <!--    <div class="login-info">-->
                        <!--        <a href="{{url('/')}}/pages/terms" class="terms-link"><span>*</span> Terms & conditions.</a>-->
                        <!--        <p>Your privacy and security are important to us. For more information on how we use your data read our <a href="{{url('/')}}/pages/privacy">privacy policy</a></p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login end -->    
    @endsection
    