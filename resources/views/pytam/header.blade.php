<!DOCTYPE html>
<html lang="en" >
    

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- title -->
        <title>Buy Sand and Aggregates Online at Affordable price - Bricks Mart</title>
        <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
        <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
        <meta name="author" content="spacingtech_webify">
        <!-- favicon -->
        <link rel="shortcut icon" type="{{url('/')}}/public/image/favicon" href="{{url('/')}}/public/image/fevicon.png">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/bootstrap.min.css">
        <!-- simple-line icon -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/simple-line-icons.css">
        <!-- font-awesome icon -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/font-awesome.min.css">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/themify-icons.css">
        <!-- ion icon -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/ionicons.min.css">
        <!-- owl slider -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/owl.theme.default.min.css">
        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/swiper.min.css">
        <!-- animation -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/animate.css">
        <!-- style -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/style.css">
                <!--<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/style9.css">-->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/responsive.css">
        
        <link rel="stylesheet" href="{{url('/')}}/public/css/newwcustom.css">
        
        
      
        
        <style>
        .rfrfrf{
    display: grid;
    grid-template-columns:  auto auto auto auto;
    grid-column-gap: 25px;
    grid-row-gap: 25px;
}
@media only screen and (max-width: 600px){
     .rfrfrf{
    
    grid-template-columns:  auto auto ;
   
}
}
@media only screen and (min-width: 600px){
    .sort{
        display:none;
    }
}
    
    .mprice{
        display:flex;
    font-size: 15px;
    font-weight: 600;
    margin-right: 5px;
        border-top: 1px solid #f5ab1e;
        text-decoration: line-through;
    }
    
    .smprice{
        display:flex;
    font-size: 16px;
    font-weight: 600;
    margin-right: 5px;
        border-top: 1px solid #f5ab1e;

    }
    .p-text{
        font-size:25px;
    }
    .sf-list {
    display: none;
    position: absolute;
    width: 100%;
    background: #fff;
    z-index: 99;
    box-shadow: 0 5px 5px 0 rgb(0 0 0 / 60%);
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    /* height: 300px; */
    
    top: 112%;
    overflow-y: hidden;
    border-radius: 25px;
    padding:10px;
}
   
</style>
        
    </head>
    <body class="home-1">
        <!-- top notificationbar start -->
        <section class="top1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="top-home">
                            <li class="top-home-li">
                                <!-- currency start -->
                                <div class="currency">
                                   <a href="http://sinoxtrading.in/pooja/pages/seller" style="
    padding: 10px;
    color: white;
">Became a seller</a> 
                                </div>
                                <!-- currency end -->
                                <!-- mobile search start -->
                                <div class="r-search">
                                    <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i class="fa fa-search"></i></a>
                                    <div class="modal fade" id="r-search-modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{url('/')}}/search" enctype="multipart/form-data" method='post' >
                                    @csrf
                                                <div class="modal-body">
                                                    <div class="m-drop-search">
                                                        <input type="text" name="search" id="search1" placeholder="Search products, brands or advice">
                                                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                                    </div>
                                                    <button type="button" class="close" data-bs-dismiss="modal"><i class="ion-close-round"></i></button>
                                                </div>
                                                <div class="sf-list">
   <ul id="readSearch1" style="padding:10px">
      
   </ul>
</div>
                                              </form>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- mobile search end -->
                            </li>
                            <li class="top-home-li t-content">
                                <!-- offer text start -->
                             <<a href="{{url('/')}}/pages/seller" class="btn btn-style3">Became a seller</a>
                             
                             <a href="{{url('/')}}/pages/price" class="btn btn-style3">Price Check </a>
                                <!-- offer text end -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- top notificationbar end -->

        <!-- header start -->
        <header class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- logo start -->
                                <div class="header-element logo">
                                    <a href="{{url('/')}}/">
                                        <img src="{{url('/')}}/public/logo/Bricks Mart (2).png" alt="logo-image" class="img-fluid" style="height: 60px;">
                                    </a>
                                </div>
                                <!-- logo end -->
                                <!-- search start -->
                                
                            <form action="{{url('/')}}/search" enctype="multipart/form-data" method='post' id="searchform">
                                    @csrf
                                    

                                <div class="header-element search-wrap">
                                    <input type="text" id="search" name="search" placeholder="Search product." >
                                    
                                    
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
<div class="sf-list">
   <ul id="readSearch" style="padding:10px">
      
   </ul>
</div>
                                </div>
                                
                                <div id="readSearch">
                                    
                                </div>
                                     </form>
                                  
                                    

                                 
                                <!-- search end -->
                                <!-- header-icon start -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="sort ">
                                            <!--Sort By-->
                                             <div class="dropdown">
    <button type="button" id="sortbymo" class="btn btn-style1 " data-toggle="dropdown" style="width: 110px;">
     Sort By
    </button>
    <div class="dropdown-menu" id="dropdownsortbymo">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>
                                        </li>
                                        <li class="side-wrap nav-toggler">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                            <span class="line"></span>
                                            </button>
                                        </li>
                                        <li class="side-wrap user-wrap">
                                            <div class="acc-desk">
                                                @auth
                                                <div class="user-icon">
                                                    <a href="{{url('/')}}/account" class="user-icon-desk">
                                                        <span><i class="icon-user"></i></span>
                                                    </a>
                                                </div>
                                                @endauth
                                                <div class="user-info align-items-center">
                                                    <!--<span class="acc-title">Account</span>-->
                                                    <!--<div class="account-login">-->
                                                    <!--    <a href="{{url('/')}}/register">Register</a>-->
                                                    <!--    <a href="{{url('/')}}/login">Log in</a>-->
                                                    <!--</div>-->
                                                    @auth
          {{auth()->user()->name}}
          <!--<div class="text-end">-->
          <!--  <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>-->
          <!--</div>-->
           <div class="">
              <div class="">
                                                       <a href="{{ route('logout.perform') }}" class="btn btn-style1" style="padding-right: 13px;">Logout</a>
                                                       
                                                    </div>
            
                                                </div>
                               @endauth
  
                           
                                              </div>
                                            </div>
                                             
                                        </li>
                                        @auth
                                        <li class="side-wrap wishlist-wrap">
                                            <a href="{{url('/')}}/pages/compare" class="header-wishlist">
                                                <span class="wishlist-icon"><i class="icon-shuffle"></i></span>
                                                <span id="showcount2" class="wishlist-counter">0</span>
                                            </a>
                                        </li>
                                        <li class="side-wrap cart-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a href="javascript:void(0)" class="cart-count">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                            <span id="showcount1" class="bigcounter">0</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        @endauth
                                    </ul>
                                </div>
                                <!-- header-icon end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom-area">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="main-menu-area pt-2">
                                    <div class="main-navigation navbar-expand-xl">
                                        <div class="box-header menu-close">
                                            <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                        </div>
                                        <!-- menu start -->
                                        <div class="navbar-collapse" id="navbarContent">
                                            <div class="megamenu-content">
                                                <div class="mainwrap">
                                                    <ul class="main-menu">

                                 <li class="menu-link parent ">
                         <a href="javascript:void(0)" class="btn btn-style1">
                             <span class="sp-link-title">Sort By</span>
                                                            </a>
                                                           
                         <a href="#collapse-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                              
                                                </a>
                        <ul class="dropdown-submenu sub-menu collapse " id="collapse-home" style=" display: grid; grid-template-columns: auto auto auto auto;">

                                                               
                                                            </ul>
                                                        </li>
                                                        

                                                        
                                 
                                                        
                                   <li class="menu-link parent">
                               <a href="{{url('/')}}/brand" class="link-title">
                                 <span class="sp-link-title">Brand</span>
                                                         </a>
                                                        </li>
                                                     
                                                     
                                 <li class="menu-link parent">
                          <a href="{{url('/')}}/pages/blog" class="link-title">
                                 <span class="sp-link-title">Buying Guide</span>
                                                            </a>

                                                        </li>
                                                        
                                 <li class="menu-link parent">
                                                            <a href="{{url('/')}}/BestSeller" class="link-title">
                                                                <span class="sp-link-title">Best Selling</span>

                                                            </a>
                                                                          
                                                        </li>
                                                        
                                                        
                                                        
                                <!--<li class="menu-link parent">-->
                                <!-- <a href="{{url('/')}}/" class="link-title">-->
                                <!-- <span class="sp-link-title">Material Calculation</span>-->
                                <!--                            </a>-->
                                                          
                                                            
                                <!--                        </li>-->
                                                        
                                                
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- menu end -->
                                        <div class="img-hotline">
                                            <div class="image-line">
                                                <a href="javascript:void(0)"><img src="{{url('/')}}/public/image/icon_contact.png" class="img-fluid" alt="image-icon"></a>
                                            </div>
                                            <div class="image-content">
                                                <a href="{{url('/')}}/pages/quotation">  
                                                <span class="hot-l">Get a Free Quote</span>
                                                </a>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mini-cart">
                <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
                <div class="cart-item-title">
                    <p>
                        <span class="cart-count-desc">There are</span>
                        <span class="cart-count-item bigcounter" id="showcount"></span>
                        <span class="cart-count-desc">Products</span>
                    </p>
                </div>
                <ul class="cart-item-loop" id="showcart">
                    
                </ul>
                <ul class="subtotal-title-area">
                    <li class="subtotal-info">
                        <div class="subtotal-titles">
                            <h6>Sub total:</h6>
                            <span class="subtotal-price" id="total"></span>
                        </div>
                    </li>
                    <li class="mini-cart-btns">
                        <div class="cart-btns">
                            <a href="{{url('/')}}/pages/cart" class="btn btn-style2">View cart</a>
                            <a href="{{url('/')}}/pages/checkout" class="btn btn-style2">checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        
        <!-- header end -->

        <!-- mobile menu start -->
        <div class="header-bottom-area mobile">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-menu-area pt-2"> 
                            <div class="main-navigation navbar-expand-xl">
                                <div class="box-header menu-close">
                                    <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                </div>
                                 
                                <div class="navbar-collapse" id="navbarContent01">
                                    <div class="megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                
                                        <li class="menu-link parent">
                                                    <a href="{{url('/')}}/" class="link-title">
                                                        <span class="btn btn-primary sp-link-title">Sort By</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-home1" data-bs-toggle="collapse" class="link-title link-title-lg" style="
    background: #f5ab1e;
    color: white;
">
                                                        <span class="sp-link-title">Sort By</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="collapse-home1">
                                                        <li class="submenu-li">
                                                            <a href="{{url('/')}}/" class="submenu-link">Vegist home 01</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="{{url('/')}}/" class="submenu-link">Vegist home 01 (RTL)</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="{{url('/')}}/" class="submenu-link">Vegist home 01 (BOX)</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index2.html" class="submenu-link">Vegist home 02</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index3.html" class="submenu-link">Vegist home 03</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index4.html" class="submenu-link">Vegist home 04</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index5.html" class="submenu-link">Vegist home 05</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index6.html" class="submenu-link">Vegist home 06</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index7.html" class="submenu-link">Vegist home 07</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index8.html" class="submenu-link">Vegist home 08</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index9.html" class="submenu-link">Vegist home 09</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index10.html" class="submenu-link">Vegist home 10</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index11.html" class="submenu-link">Vegist home 11</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index12.html" class="submenu-link">Vegist home 12</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="index13.html" class="submenu-link">Vegist home 13</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                         
                        
                        
                                         
                        <li class="menu-link">
                                                    <a href="{{url('/')}}/brand" class="link-title">
                                                        <span class="sp-link-title">Brand
                                                    </a>
                                                </li>                        
                                                
                                                
                                                
                        <li class="menu-link">
                                                    <a href="{{url('/')}}/pages/blog" class="link-title">
                                                        <span class="sp-link-title">Buying Guide</span>
                                                    </a>
                                                </li>
                        <li class="menu-link">
                                                    <a href="{{url('/')}}/pages/blog" class="link-title">
                                                        <span class="sp-link-title">Best Selling</span>
                                                    </a>
                                                </li>
                        <li class="menu-link">
                                                    <a href="{{url('/')}}/pages/blog" class="link-title">
                                                        <span class="sp-link-title">Material Calculation</span>
                                                    </a>
                                                </li>

                                                
                                                
                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="img-hotline">
                                    <div class="image-line">
                                        <a href="javascript:void(0)"><img src="{{url('/')}}/public/image/icon_contact.png" class="img-fluid" alt="image-icon"></a>
                                    </div>
                                    <div class="image-content">
                                        <span class="hot-l">Hotline:</span>
                                        <span>0123 456 789</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu end -->