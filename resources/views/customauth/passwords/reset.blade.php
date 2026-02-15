@extends('main')
@section('main-section')
 <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}/">Home</a></li>
                                <li class="about-p"><span>Reset-password</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="section-tb-padding" style="
    background: url('https://media.istockphoto.com/photos/online-shopping-concept-laptop-and-shopping-cart-on-blue-background-picture-id1301022916?b=1&k=20&m=1301022916&s=170667a&w=0&h=SZwrubcWrhzWgomr41shkT15TzZyjta9ubUoFPbmEiM=');
    background-size: cover;
    background-position: center;
">
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-12">
            <!--<div class="card">-->
                 
                      <div class="login-area">
                        <div class="login-box bg-light">
                            <div class="card-header h2">Reset Password</div>
                          <form method="POST" action="{{url('/')}}/reset-password">
                           @csrf
                           <input type="hidden" name="token" value="{{ $token }}">
                        
                            <label for="email" >E-Mail Address</label>
                          
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        
                            <label for="password" >Password</label>
                            
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

                      
                            <label for="password-confirm" >Confirm Password</label>
                            
                                <input id="password-confirm" type="password"  name="password_confirmation" autocomplete="new-password">
                            
                        <div class="d-flex justify-content-between align-items-center">
                             <!--<div class="col-md-6 offset-md-4">-->
                          <button type="submit" class="btn-style1 m-2">Reset Password</button>
                                
                            </div> 

                    </form>
                </div>
                </div>
            <!--</div>-->
        </div>
    </div>
</div>
    </section>
@endsection