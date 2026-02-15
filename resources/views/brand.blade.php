 @extends('main')
@section('main-section')

   <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}" class="text-light">Home</a></li>
                                <li class="about-p"><span class="text-light">Brands</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



 <div class="section-title">
          <h2>Popular Brands</h2>
         </div>
         
<!--<div class="saerch-input">-->
<!--                        <form action="{{url('/')}}/searchbrand" method='post'>-->
<!--                            @csrf-->
<!--                            <input type="text" name="search" placeholder="Search our brands">-->
<!--                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>-->
<!--                        </form>-->
<!--                    </div>         -->

<section class="section-tb-padding blog-page">
            <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="blog-style-1-full-grid">
                                  @foreach ($brand as $brands) 
                            <div class="blog-start">
                                <div class="blog-post" style=" height: 100px;
    width: 250px; display:flex;JUSTIFY-CONTENT:center"  >
                                    <div class="blog-image">
                                        <a href="{{url('/')}}/brand/{{$brands->id}}">
                                            <img src="{{url('/')}}/public/uploads/brand/{{$brands->logo}}" alt="blog-image" style=" height: 100px;
    " class="img-fluid">
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                            
                                                       @endforeach
                            
                          
                           
                        </div>
                        <div class="all-page">
                            {{-- Pagination --}}
                               
                            <div class="page-number style-1">
        <div class="d-flex justify-content-center">
          {!! $brand->links() !!}
         
        </div>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>











  @endsection