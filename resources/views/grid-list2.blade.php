
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
    <!-- grid-list start -->
   
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Categories</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter">
                                 @foreach ($category as $category)
                                <li class="grid-list-option">
                                    <!--<input type="checkbox">-->
                                    <a href="{{url('/')}}/grid-list/{{$category->id}}">{{$category->name}} <span class="grid-items"></span></a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-price collapse" id="price-filter">
                                
                                <a href="{{url('/')}}/grid-list/"><li class="f-price">
                                    <!--<input type="checkbox">-->
                                    <!--<label>0-1000</label>-->
                                    <a href="{{url('/')}}/grid-list/price/{{$id}}/0/1000">0-1000 <span class="grid-items"></span></a>
                                </li>
                                </a>
                                
                                <li class="f-price">
                                    <!--<input type="checkbox">-->
                                    <!--<label>1000-10000</label>-->
                                    <a href="{{url('/')}}/grid-list/price/{{$id}}/1000/10000">1000-10000<span class="grid-items"></span></a>
                                </li>
                                <li class="f-price">
                                    <!--<input type="checkbox">-->
                                    <!--<label>200-300</label>-->
                                    <a href="{{url('/')}}/grid-list/price/{{$id}}/10000/50000">10000-50000<span class="grid-items"></span></a>
                                </li>
                                <li class="f-price">
                                    <!--<input type="checkbox">-->
                                    <!--<label>200-300</label>-->
                                    <a href="{{url('/')}}/grid-list/price/{{$id}}/50000/100000">50000-100000<span class="grid-items"></span></a>
                                </li>
                            </ul>
                        </div>
                       <div class="vendor-filter">
                            <h4 class="filter-title">Filter by vendor</h4>
                            <a href="#vendor" data-bs-toggle="collapse" class="filter-link"><span>Filter by vendor </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-vendor collapse" id="vendor">
                                 @foreach ($vendor as $vendor)
                                <li class="f-vendor">
                                    <!--<input type="checkbox">-->
                                    <a href="{{url('/')}}/grid-list2/{{$vendor->id}}">{{$vendor->name}} <span class="grid-items"></span></a>
                                </li>
                                @endforeach
                                
                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    
                    <div class="grid-list-area">
                        <form action="{{url('/')}}/grid-list" id="target" method="post">
                        <div class="grid-list-select">
                           
                                        @csrf
                            <ul class="grid-list-selector">
                                <li>
                                    <label>Sort by</label>
                                   <input type="hidden" name="id" value="{{$id}}">
                                    <select name="orderby" class="use-chosen" wire:modal="sorting" >
                                        <option value="default" selected="selected">Default</option>
                                        
                                        <option value="price"><a href="">Price, low to high</a></option>
                                        <option value="price-des">Price, high to low</option>
                                        <option value="date">sort by newness</option>
                                        
                                    </select>
                                    
                                </li>
                            </ul>
                            
                             <ul class="grid-list-selector"> 
                                <li>
                                    <label>Sort by</label>
                                    <select name="pagesize" class="use-chosen"wire:modal"pagesize">
                                        <option value="12" selected="selected"> 12 per page </option>
                                        <option value="16">16 per page</option>
                                        <option value="18">18 per page</option>
                                        <option value="21">21 per page</option>
                                        <option value="24">24 per page</option>
                                        <option value="30">30 per page</option>
                                        <optionvalue="32">32 per page</option>
                                       
                                    </select>
                                </li>
                            </ul>
                            <!--<input type="submit" >-->
                                    
                        </div>
                        </form>
                        <div class="grid-pro">
                            <ul class="grid-product">
                                 @foreach ($product as $products)
                                <li class="grid-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{url('/')}}/product/{{$products->id}}">
                                                <img class="img-fluid" style="height:200px;width:200px" src="{{url('/')}}/public/uploads/product/{{$products->product_image}}" alt="pro-img1">
                                                <!--<img class="img-fluid additional-image" src="{{url('/')}}/public/image/pro/pro-img-01.jpg" alt="additional image">-->
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">{{$products->product_offer}}%</span>
                                        </div>
                                        <div class="pro-icn">
                                            
                                            <a onclick="addtocart({{$products->id}},{{$products->product_minimumorder}},{{$products->product_by}})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" onclick="addtocompare({{$products->id}})"><i class="icon-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{url('/')}}/product/{{$products->id}}">{{$products->product_name}}</a></h3>
                                        
                                        <!--<div class="rating">-->
                                        <!--    <i class="fa fa-star c-star"></i>-->
                                        <!--    <i class="fa fa-star c-star"></i>-->
                                        <!--    <i class="fa fa-star c-star"></i>-->
                                        <!--    <i class="fa fa-star-o"></i>-->
                                        <!--    <i class="fa fa-star-o"></i>-->
                                        <!--</div>-->
                                        <div class="pro-price">
                                            <span class="new-price" style="    text-decoration: line-through;">MRP:Rs{{$products->product_mrp}}</span>
                                        </div>
                                        
                                        
                                        
                                        
                                                                                <div class="pro-price">
                                            <span class="new-price" style="border-top: 1px solid #f5ab1e"><span style="color:red">Price:</span>Rs{{$products->product_price}}/{{$products->product_unit}}</span>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </li>
                                                       @endforeach

                            </ul>
                        </div>
                    </div>
                      {{-- Pagination --}}
        <div class="d-flex justify-content-center">
          {!! $product->links() !!}
         
        </div>
                    <!--<div class="list-all-page">-->
                    <!--    <span class="page-title">Showing 1 - 17 of 17 result</span>-->
                    <!--    <div class="page-number">-->
                    <!--        <a href="grid-list.html" class="active">1</a>-->
                    <!--        <a href="grid-list-2.html">2</a>-->
                    <!--        <a href="grid-list-3.html">3</a>-->
                    <!--        <a href="grid-list-4.html">4</a>-->
                    <!--        <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
    
       @endsection
       
       
           
       
       @section('script')
       <script>
        $(document).ready(function() {
          
       $('form').on('change', 'select', function(){
    // console.log('Form changed!');
    $( "#target" ).submit();
});
        });
       </script>

       @endsection