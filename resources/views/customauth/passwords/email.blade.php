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
                                <li class="about-p"><span>Forgot-password</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="section-tb-padding" style="
    background: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190614/ourmid/pngtree-internet-password-network-security-technology-background-image_122932.jpg');
    background-size: cover;
    background-position: center;
">
<div class="container">
     <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header h2">Forget Password</div>
                
               <div class="card-body">
                    @if (session('status'))
                         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                   <form method="POST" action="{{url('/')}}/forget-password">
                        @csrf
                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   
                         <div class="d-flex justify-content-between align-items-center mt-4">
                             <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn-style1 m-2">Send Password Reset Link</button>
                                
                            </div>      
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 </section>
@endsection