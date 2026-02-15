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
                                <li class="about-p"><span class="text-light ">Register</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- login start -->
    <section class="section-tb-padding"  style="
    background: url('{{url('/')}}/public/image/Untitled design (20).png');
    background-size: cover;
    background-position: center;
">
        <div class="container" >
            <div class="row">
                <div class="col">
                    <div class="register-area">
                        <div class="register-box bg-light" style="background-image: url(https://static.vecteezy.com/system/resources/previews/003/557/256/original/abstract-blue-and-orange-wave-business-background-free-vector.jpg);
}">
                            <h1 class="text-light">Create account</h1>
                            <p class="text-light">Please register below account detail</p>
                            <form id="submit_form" action="{{ route('register.perform') }}" method="POST" >
                                @csrf

                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Firts name">
                         <samp class="text-danger">
                        @error('username')
                        {{$message}}

                        @enderror

                      </samp>
                                <input type="text" name="phone" placeholder="phone">
                                <samp class="text-danger">
                        @error('phone')
                        {{$message}}

                        @enderror

                      </samp>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                                <samp class="text-danger">
                        @error('email')
                        {{$message}}

                        @enderror

                      </samp>
                      
                                <input type="password" name="password" value="{{ old('password') }}" placeholder="Password">
                                <samp class="text-danger">
                        @error('password')
                        {{$message}}

                        @enderror

                      </samp>
                      <!--<div class="form-group form-floating mb-3 mt-2">-->
            <input type="password"  name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <!--<label for="floatingConfirmPassword">Confirm Password</label>-->
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        <!--</div>-->
        <div class="d-flex justify-content-between align-items-center mt-2">
            <button type="submit" class="btn-style1">Create</button>
            <a href="{{url('/')}}/login" class="ceate-a">Already have an account? Log in</a>
        </div>
                                
                            </form>
                        </div>
                        <!--<div class="register-account">-->
                        <!--    <h4>Already an account holder?</h4>-->
                        <!--    <a href="{{url('/')}}/login" class="ceate-a">Log in</a>-->
                        <!--    <div class="register-info">-->
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