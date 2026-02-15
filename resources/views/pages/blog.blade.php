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
                                <li class="about-p"><span class="text-light">Blogs</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- breadcrumb end -->
        <!-- blog start -->
        <section class="section-tb-padding blog-page">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="blog-style-1-full-grid">
                            @foreach ($news as $new)
                            <div class="blog-start">
                                <div class="blog-post">
                                    <div class="blog-image">
                                        <a href="{{url('/')}}/pages/blog_details/{{$new->sno}}">
                                            <img src="{{url('/')}}/public/uploads/news/{{$new->news_image}}" alt="blog-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h6><a href="{{url('/')}}/blog_details/{{$new->sno}}">{{$new->heading}}</a></h6>
                                            <span class="blog-admin">By <span class="blog-editor">{{$new->uploaded_by}}</span></span>
                                        </div>
                                        <p class="blog-description">{{$new->description}}</p>
                                        <a href="{{url('/')}}/pages/blog_details/{{$new->sno}}" class="read-link">
                                            <span>Read more</span>
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                        <div class="blog-date-comment">
                                            <span class="blog-date">{{$new->created_at}}</span>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                        <div class="all-page">
                          
                            <div class="page-number style-1">
                                <div class="d-flex justify-content-center">
                               {!! $news->links() !!}
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog end -->
      @endsection