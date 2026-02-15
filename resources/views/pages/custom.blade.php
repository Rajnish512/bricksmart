   
 @extends('main')
@section('main-section')
<style>
    .cutom-home-banner {
    width: 100%;
    padding: 0;
    margin: 0;
    position: relative;
    height: 620px;
    overflow: hidden;
    background-size: cover;
}
.custom-home-banner-inner {
    width: 100%;
    background: rgba(0,0,0,0.55);
    height: 100%;
}
.custom-home-banner-content {
    width: 100%;
    margin: 0;
    padding: 60px 0 100px;
}
.top-title h2 {
    font-size: 36px;
    line-height: 36px;
    font-weight: 500;
    color: #fff;
    margin: 0;
    padding: 15px 0;
}
.top-title p {
    font-size: 18px;
    line-height: 24px;
    font-weight: 400;
    color: #fff;
    margin: 0;
    padding: 15px 0;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.get_quote {
    color: #fff;
    font-size: 16px;
    padding: 10px 20px;
}
.btn-quote {
    background: #C95E16 !important;
    color: #fff;
}
.top-title h1 {
    font-size: 60px;
    line-height: 60px;
    font-weight: 300;
    color: #fff;
    margin: 0;
    padding: 60px 0 10px 0;
}
.custom-home-boxes {
    background: #fff;
}
.chme-heading {
    display: block;
    width: 100%;
    clear: both;
}
}
.clearfix {
    clear: both;
    display: block;
    width: 100%;
}
.whychoose .col-md-20 {
    width: 20%;
    display: block;
    float: left;
    padding: 0 15px;
}
.whychoose-inner {
    padding: 50px 0 20px;
    text-align: center;
    width: 100%;
    max-width: 200px;
}
.whychoose-inner .icon-container.fa-stack {
    line-height: 75px;
    width: 75px;
    height: 75px;
    background: #1f91d2;
    color: #fff;
    border-radius: 50px;
}
.finished-container {
    background: #1f91d2;
    border-top: 1px solid #eee;
}
.finished {
    padding: 40px 0;
}
.finished-container .includes {
    font-size: 20px;
    padding: 35px 0;
    margin: 0;
    line-height: 1.4;
    font-weight: 300;
    color: #fff;
}
.finished-container .includes ul {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
}
.finished-container .includes p {
    margin: 0;
    padding: 20px 0 0;
    font-weight: 500;
}
.finished-container .includes li {
    display: flex;
    width: 25%;
    padding: 6px 0 6px 20px;
    position: relative;
    
}
.pricing-block {
    padding: 60px 0;
    background: #fff;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
}
.cd-pricing-header {
    height: auto;
    padding: 1.9em 0.9em 1.6em;
    pointer-events: auto;
    text-align: center;
    color: #173d50;
    background-color: #78cfbf;
    position: relative;
    z-index: 1;
    border: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
}
.cd-pricing-header h2 {
    margin-bottom: 3px;
    color:white;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 2rem;
    letter-spacing: 1px;
}
.cd-price {
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 100%;
}
.cd-value {
    font-size: 7rem;
    font-weight: 300;
    display: flex;
    /*height: 60px;*/
    /*line-height: 60px;*/
    overflow: hidden;
    justify-content: center;
}
.cd-value span {
    font-size: 2rem;
    line-height: 80px;
}
.cd-duration {
    font-size: 1.4rem;
    color: rgba(23,61,80,0.75);
    font-weight: 500;
    color:white;
    overflow: hidden;
    display: flex;
    width: 100%;
    justify-content: center;
}
.cd-pricing-body {
    overflow-x: visible;
    background: #fff;
    padding: 0;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
}

.cd-select {
    position: static;
    height: auto;
    color: #FFF;
    background-color: #0c1f28;
    font-size: 1.4rem;
    text-indent: 0;
    text-transform: uppercase;
    display: block;
    padding: 1.7em 0;
    border-radius: 0 0 4px 4px;
}
.cd-pricing-features li {
    float: none;
    width: auto;
    padding: 10px 20px;
    font-size: 16px;
    text-align: left;
    font-weight: 500;
    line-height: 1.4;
    color: #111;
}
.cd-pricing-features li .type-sub-text {
    font-size: 14px;
    color: #666;
    font-weight: 400;
}
.cd-pricing-features li .type-sub-text span {
    display: block;
    padding: 5px 5px 5px 18px;
    width: 100%;
    position: relative;
}
.cd-pricing-features li:nth-child(2n) {
    background: #eee;
}
.cd-deluxe .cd-pricing-header {
    color: #fff;
    background-color: #166593;
}
.cd-popular .cd-pricing-header {
    color: #fff;
    background-color: #8c420f;
}
.column-form-block .custom-form-heading {
    background: #1f91d2;
    padding: 25px 30px;
    text-align: left;
    display: block;
}
.block-webform-block {
    background: #fff;
    padding: 30px 30px 10px;
    margin-bottom: 0 !important;
    -webkit-box-shadow: 0 3px 8px 0 rgb(54 57 73 / 5%);
    box-shadow: 0 3px 8px 0 rgb(54 57 73 / 5%);
}
.block-webform-block .form-group input, .block-webform-block .form-group select, .block-webform-block .form-group textarea {
    width: 100%;
    padding: 0 10px;
    height: 40px;
    background: none;
    border: 0;
    border: 1px solid rgba(0,0,0,.1);
    font-size: 14px;
    padding-left: 15px;
    -webkit-box-shadow: none;
    box-shadow: none;
    line-height: 30px;
    outline: 0;
}
@media (max-width: 600px){
    .whychoose .col-md-20 {
    width: 50%;
}
}
.chme-heading .title {
    font-size: 30px;
    font-weight: 400;
    position: relative;
    padding-bottom: 0;
    margin: 0;
}
.chme-heading .sub-title {
    color: #abadba;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 2px;
    font-weight: 600;
}
@media (max-width: 767px)
{
    .finished-container .includes li {
    width: 50%;
    font-size: 16px;
}
}
</style>
<section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner/sinoxtrading1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="{{url('/')}}" class="text-light">Home</a></li>
                                <li class="about-p"><span class="text-light">Custom</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="cutom-home-banner" style="background:url(https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/customhomes/custom-homes.jpg) no-repeat center center;">
<div class="custom-home-banner-inner">
<div class="custom-home-banner-content">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-6">
<div class="top-title">
<h1>BuildersMART <br>Custom Homes</h1>
<h2>Transforming Dreams into Reality</h2>
<p>We build your dream home to your required plan and specifications on a plot owned by you. Just select one of the below packages suitable for your budget and we will convert your dream into reality.</p>
<a href="#getquote" class="btn btn-quote get_quote">I am Interested</a>
</div>
</div>
<div class="col-md-5 col-sm-6">
<div class="banner-image">
<img src="https://cdn-skin.buildersmart.in/skin/frontend/pt_allurestore/default/images/customhomes/custom-home-mini.png" alt="BuildersMART Custom Homes" title="BuildersMART Custom Homes">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="custom-home-boxes">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="whychoose mt-4">
<div class="whychoose-block">
<div class="chme-heading">
<div class="heading-top">
<div class="sub-title"><span>Why Us</span></div>
<h2 class="title"><span>Why Choose BuildersMART</span></h2>
</div>
</div>
<div class="clearfix"></div>
<div class="whychoose-content">
<div class="row">
<div class="col-md-20">
<div class="whychoose-inner">
<div class="whychoose-content-inner">
<div class="icon-background">
<div class="highlight-icon">
<span class="icon-container fa-2x radius-5x fa-stack">
<span class="fa fa-list-alt"></span>
</span>
</div>
<div class="highlight_content">
<div class="title">All Inclusive Pricing</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-20">
<div class="whychoose-inner">
<div class="whychoose-content-inner">
<div class="icon-background">
<div class="highlight-icon">
<span class="icon-container fa-2x radius-5x fa-stack">
<span class="fa fa-clock-o"></span>
</span>
</div>
<div class="highlight_content">
<div class="title">Timely Project Completion</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-20">
<div class="whychoose-inner">
<div class="whychoose-content-inner">
<div class="icon-background">
<div class="highlight-icon">
<span class="icon-container fa-2x radius-5x fa-stack">
<span class="fa fa-money"></span>
</span>
</div>
<div class="highlight_content">
<div class="title">Home Loan Process Availability</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-20">
<div class="whychoose-inner">
<div class="whychoose-content-inner">
<div class="icon-background">
<div class="highlight-icon">
<span class="icon-container fa-2x radius-5x fa-stack">
<span class="fa fa-briefcase"></span>
</span>
</div>
<div class="highlight_content">
<div class="title">All Branded Materials Only</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-20">
<div class="whychoose-inner">
<div class="whychoose-content-inner">
<div class="icon-background">
<div class="highlight-icon">
<span class="icon-container fa-2x radius-5x fa-stack">
<span class="fa fa-thumbs-up"></span>
</span>
</div>
<div class="highlight_content">
<div class="title">Quality As Promised</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="text-center" style="padding:20px 0;">
<a href="#getquote" class="btn btn-quote get_quote">I am Interested</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<div class="finished-container">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="finished">
<div class="finished-block">
<div class="chme-heading">
<div class="heading-top">
<div class="sub-title text-light"><span>Fully Finished Homes</span></div>
<h2 class="title text-light"><span>Our Packages Includes</span></h2>
</div>
</div>
<div class="clearfix"></div>
<div class="includes">
<ul>
<li>Elevation</li>
<li>Floor Plans</li>
<li>Structural Designs</li>
<li>Excavation</li>
<li>RCC Works</li>
<li>Brickwork</li>
<li>Plastering (Internal &amp; External)</li>
<li>Doors</li>
<li>Windows</li>
<li>Plumbing</li>
<li>Electrical Works</li>
<li>Wall Putty</li>
<li>Painting (Internal &amp; External)</li>
<li>Flooring (Marble/Tiles)</li>
<li>Bathroom Tiles</li>
<li>Hardware Fittings</li>
</ul>
<p><b>Our Optional Packages</b></p>
<ul>
<li>Cabinets</li>
<li>Modular Kitchen</li>
<li>Pop False Ceiling in Living</li>
<li>Dining &amp; Bedroom</li>
<li>Lights &amp; Fans</li>
<li>Air Conditioners in Bedrooms</li>
</ul>
</div>
</div>
</div>

</div>
</div>
</div>
</div>







<div class="pricing-block">
<div class="">
<div class="chme-heading m-b-30">
<div class="heading-top">
<div class="sub-title"><span>Packages</span></div>
<h2 class="title"><span>Cost &amp; Packages</span></h2>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<ul class="cd-pricing-list row">
<li class="cd-classic col-md-4  ">
<ul class="cd-pricing-wrapper">
<li data-type="package" class="is-visible is-ended">
<header class="cd-pricing-header">
<h2>Classic</h2>
<div class="cd-price">
<span class="cd-value">1.49 <span>Lakhs</span></span>
<span class="cd-duration">per 100 sft of builtup area</span>
</div>
</header>
<div class="cd-pricing-body">
<ul class="cd-pricing-features">
<li class="height1" style="height: 131px;">Designs &amp; Drawings
<div class="type-sub-text hauto">
<span>2D Floor Plan</span>
<span>3D Elevation</span>
<span>Structural Design</span>
</div>
</li>
<li class="height2" style="height: 318px;">Structure
<div class="type-sub-text">
<span>Steel - <b>Sunvik, Meenakshi, Kamdhenu or equivalent</b></span>
<span>Aggregates - 20mm &amp; 40mm</span>
<span>Blocks - Standard Solid Concrete blocks. 6 inch for Exterior Walls &amp; 4 inch for Interior Walls</span>
<span>Cement - ACC, Birla of Grade - 43 &amp; 53</span>
<span>M sand for Blockwork &amp; Plastering</span>
<span>RCC Design Mix - M25</span>
<span>Dr.Fixit Waterproofing</span>
<span>Ceiling Height - 10 feet</span>
<br>
</div>
</li>
<li class="height3" style="height: 308px;">Kitchen
<div class="type-sub-text">
<span>Ceramic Wall Tiles, 2 feet above kitchen slab - Upto <br> <b><i class="fa fa-inr"></i>40 per Sqft</b></span>
<span>Main Sink Faucet - Jaquar / Parryware / Hindware upto <b><i class="fa fa-inr"></i>1500</b></span>
<span>Any Other Faucet &amp; Accessories - ISI Marked</span>
<span>Kitchen Sink - Stainless Steel Single Sink worth <b><i class="fa fa-inr"></i>5000</b></span>
<span>Kitchen Granite 40 mm thick - Upto <b><i class="fa fa-inr"></i>100 per Sqft</b></span>
</div>
</li>
<li class="height4" style="height: 357px;">Bathroom
<div class="type-sub-text">
<span>Bathroom Ceramic Wall Tiles with 7 feet height - Upto <b><i class="fa fa-inr"></i>40 per Sqft</b></span>
<span>Sanitary ware &amp; CP Fittings - Upto <b><i class="fa fa-inr"></i>40000</b> till 1000 sqft of construction and prorata after. Company : <b>Jaquar, Hindware, Parryware</b></span>
<span>CPVC Pipe - <b>Astral</b></span>
<span>Bathroom Accessories - EWC, Health Faucet, Wash Basin with accessories, 2 in 1 wall mixer, Overhead Shower.</span>
<span>Bathroom doors - Waterproof flush doors</span>
</div>
</li>
<li class="height5" style="height: 259px;">Doors &amp; Windows
<div class="type-sub-text">
<span>Main Door - <b>Indian Or African Teak door along with teak frame of 5 inch by 3 inch, worth <i class="fa fa-inr"></i>20000. Door Thickness around 38mm</b></span>
<span>Internal Doors - <b>Membrane doors / Flush Door with Laminates. Door Frames of Sal Wood 4 inch by 2.5 inch</b></span>
<span>Windows - <b>Aluminium Windows with glass shutters and mesh shutters</b></span>
</div>
</li>
<li class="height6" style="height: 141px;">Painting
<div class="type-sub-text hauto">
<span>Interior Painting - <b>JK Putty + Tractor Emulsion</b> </span>
<span>Exterior Painting - <b>Asian Primer + Ace Exterior Emuslion Paint</b></span>
</div>
</li>
<li class="height7" style="height: 308px;">Flooring
<div class="type-sub-text hauto">
<span>Living and Dining Flooring - Tiles or Granite of value upto <b><i class="fa fa-inr"></i>55 per sqft</b></span>
<span>Rooms and Kitchen Flooring - Tiles or Granite or Wooden flooring upto <b><i class="fa fa-inr"></i>50 per sqft</b></span>
<span>Balcony and Open Areas Flooring - Anti-skid tiles of value upto <b><i class="fa fa-inr"></i>40 per sqft</b></span>
<span>Staircase Flooring - Sadarahalli Granite or Marble of value upto <b><i class="fa fa-inr"></i>70 per sqft</b></span>
<span>Parking Tiles - Anti-skid tiles of value upto <b><i class="fa fa-inr"></i>40 per sqft</b></span>
</div>
</li>
<li class="height8" style="height: 102px;">Electrical Works
<div class="type-sub-text hauto">
<span>Wires - Fireproof wires by Finolex</span>
<span>Switches &amp; Sockets - <b>Anchor Roma</b></span>
</div>
</li>
<li class="height9" style="height: 240px;">Miscellaneous
<div class="type-sub-text">
<span>Overhead Tank - <b>Sintex Double Layered 1500 ltrs</b></span>
<span>Underground Sump - <b>6000 litres</b></span>
<span>Staircase Railing - <b>MS Railing</b></span>
<span>Parapet wall of 3 feet height</span>
<span>Window Grills - <b>Basic MS Grills with Enamel Paint at <br><i class="fa fa-inr"></i>110 per sqft</b></span>
</div>
</li>
<li class="height10" style="height: 220px;">Optional Packages
<div class="type-sub-text">
<span>Cabinets</span>
<span>Modular Kitchen</span>
</div>
</li>
</ul>
</div>
<footer class="cd-pricing-footer">
<a class="cd-select" href="#getquote" data-package="basic">Select Package</a>
</footer>
</li>
</ul>
</li>
<li class="cd-deluxe col-md-4  ">
<ul class="cd-pricing-wrapper">
<li data-type="package" class="is-visible is-ended">
<header class="cd-pricing-header">
<h2>Deluxe</h2>
<div class="cd-price">
<span class="cd-value">1.99 <span>Lakhs</span></span>
<span class="cd-duration">per 100 sft of builtup area</span>
</div>
</header>
<div class="cd-pricing-body">
<ul class="cd-pricing-features">
<li class="height1" style="height: 131px;">Designs &amp; Drawings
<div class="type-sub-text hauto">
<span class="width50">2D Floor Plan</span>
<span class="width50">3D Elevation</span>
<span class="width50">Structural Design</span>
<div class="clearfix"></div>
<span><b>Electrical Drawings</b></span>
</div>
</li>
<li class="height2" style="height: 318px;">Structure
<div class="type-sub-text">
<span>Steel - <b>JSW steel</b></span>
<span>Aggregates - 20mm &amp; 40mm</span>
<span>Blocks - Standard Solid Concrete blocks. 6 inch for Exterior Walls &amp; 4 inch for Interior Walls</span>
<span>Cement - ACC, Birla of Grade - 43 &amp; 53</span>
<span>M sand for Blockwork &amp; Plastering</span>
<span>RCC Design Mix - M25</span>
<span>Dr.Fixit Waterproofing</span>
<span>Ceiling Height - 10 feet</span>
<br>
</div>
</li>
<li class="height3" style="height: 308px;">Kitchen
<div class="type-sub-text">
<span>Ceramic Wall Tiles, 2 feet above kitchen slab - Upto <br> <b><i class="fa fa-inr"></i> 60 per Sqft</b></span>
<span>Main Sink Faucet - Jaquar / Parryware / Hindware upto <b><i class="fa fa-inr"></i>3000</b></span>
<span>Any Other Faucet &amp; Accessories - Basic Jaquar / Parryware / Hindware Fitting</span>
<span>Kitchen Sink - Stainless Steel Single Sink or <b>Granite finish worth <i class="fa fa-inr"></i>7000/- (Futura , Carysil)</b></span>
<span>Kitchen Granite 40 mm thick - Upto <b><i class="fa fa-inr"></i>140 per Sqft</b></span>
</div>
</li>
<li class="height4" style="height: 357px;">Bathroom
<div class="type-sub-text">
<span>Bathroom Ceramic Wall Tiles with 7 feet height - Upto <b><i class="fa fa-inr"></i>55 per Sqft</b></span>
<span>Sanitary ware &amp; CP Fittings - Upto <b><i class="fa fa-inr"></i>60000</b> till 1000 sqft of construction and prorata after. Company : <b>Kohler, Jaquar, Hindware, Parryware</b></span>
<span>CPVC Pipe - <b>Ashirwad / Supreme</b></span>
<span>Bathroom Accessories - EWC, Health Faucet, Wash Basin with accessories, 2 in 1 wall mixer, Overhead Shower.</span>
<span><b>Mirror, Soap Dish, Towel Rail - Worth <i class="fa fa-inr"></i>5000 till 1000 ft of construction and prorata after.</b></span>
<span>Bathroom doors - Waterproof flush doors</span>
</div>
</li>
<li class="height5" style="height: 259px;">Doors &amp; Windows
<div class="type-sub-text">
<span>Main Door - <b>Burma Teak Door along with teak frame of 5inch by 3.5 inch, worth <i class="fa fa-inr"></i>35000. Door Thickness around 38mm</b></span>
<span>Internal Doors - <b>Hardwood Panelled Door. Door Frames of Sal Wood 4 inch by 3 inch</b></span>
<span>Windows - <b>Sal wood/UPVC Windows with glass and mesh shutters</b></span>
</div>
</li>
<li class="height6" style="height: 141px;">Painting
<div class="type-sub-text hauto">
<span>Interior Painting - <b>JK Putty + Apcolite Premium Emulsion</b></span>
<span>Exterior Painting - <b>Asian Primer + Apex Exterior Emulsion Paint</b></span>
</div>
</li>
<li class="height7" style="height: 308px;">Flooring
<div class="type-sub-text hauto">
<span>Living and Dining Flooring - Tiles or Granite or Marble of value upto <b><i class="fa fa-inr"></i>100 per sqft</b></span>
<span>Rooms and Kitchen Flooring - Tiles or Granite or Wooden flooring upto <b><i class="fa fa-inr"></i>80 per sqft</b></span>
<span>Balcony and Open Areas Flooring - Anti-skid tiles of value upto <b><i class="fa fa-inr"></i>60 per sqft</b></span>
<span>Staircase Flooring - Sadarahalli Granite or Marble of value upto <b><i class="fa fa-inr"></i>80 per sqft</b></span>
<span>Parking Tiles - Anti-skid tiles of value upto <b><i class="fa fa-inr"></i>50 per sqft</b></span>
</div>
</li>
<li class="height8" style="height: 102px;">Electrical Works
<div class="type-sub-text hauto">
<span>Wires - Fireproof wires by Finolex</span>
<span>Switches &amp; Sockets - <b>Anchor Roma</b></span>
</div>
</li>
<li class="height9" style="height: 240px;">Miscellaneous
<div class="type-sub-text"> 
<span>Overhead Tank - <b>Sintex Triple Layered 1500 ltrs</b></span>
<span>Underground Sump - <b>7000 litres</b></span>
<span>Staircase Railing - <b>MS Railings with sal wood hand rail</b></span>
<span>Parapet wall of 3 feet height</span>
<span>Window Grills - <b>Basic MS Grills with Enamel Paint at <i class="fa fa-inr"></i>110 per sqft</b></span>
</div>
</li>
<li class="height10" style="height: 220px;">Optional Packages
<div class="type-sub-text">
<span>Cabinets</span>
<span>Modular Kitchen</span>
<span><b>Pop False Ceiling in Living</b></span>
<span><b>Dining &amp; Bedroom</b></span>
<span><b>Lights &amp; Fans</b></span>
</div>
</li>
</ul>
</div>
<footer class="cd-pricing-footer">
<a class="cd-select" href="#getquote" data-package="deluxe">Select Package</a>
</footer>
</li>
</ul>
</li>
<li class="cd-popular col-md-4  ">
<ul class="cd-pricing-wrapper">
<li data-type="package" class="is-visible is-ended">
<header class="cd-pricing-header">
<h2>Luxury</h2>
<div class="cd-price">
<span class="cd-value">2.49 <span>Lakhs</span></span>
<span class="cd-duration">per 100 sft of builtup area</span>
</div>
</header>
<div class="cd-pricing-body">
<ul class="cd-pricing-features">
<li class="height1">Designs &amp; Drawings
<div class="type-sub-text hauto">
<span class="width50">2D Floor Plan</span>
<span class="width50">3D Elevation</span>
<span class="width50">Structural Design</span>
<span class="width50"><b>Electrical Drawings</b></span>
<span class="width50"><b>Plumbing Drawings</b></span>
<span class="width50"><b>Furniture Plan</b></span>
</div>
</li>
<li class="height2">Structure
<div class="type-sub-text">
<span>Steel - <b>JSW steel</b></span>
<span>Aggregates - 20mm &amp; 40mm</span>
<span>Blocks - Standard Solid Concrete blocks. 6 inch for Exterior Walls &amp; 4 inch for Interior Walls</span>
<span>Cement - ACC, Birla of Grade - 43 &amp; 53</span>
<span>M sand for Blockwork &amp; Plastering</span>
<span>RCC Design Mix - M25</span>
<span>Dr.Fixit Waterproofing</span>
<span>Ceiling Height - 10 feet</span>
<br>
</div>
</li>
<li class="height3">Kitchen
<div class="type-sub-text">
<span>Ceramic Wall Tiles, 2 feet above kitchen slab - Upto <br> <b><i class="fa fa-inr"></i>80 per Sqft</b></span>
<span>Main Sink Faucet - Jaquar / Parryware / Hindware upto <b><i class="fa fa-inr"></i>3500</b></span>
<span>Any Other Faucet &amp; Accessories - Basic Jaquar / Parryware / Hindware Fitting</span>
<span>Kitchen Sink - Stainless Steel Single Sink or <b>Granite finish worth <i class="fa fa-inr"></i>8000/- (Futura , Carysil)</b></span>
<span>Kitchen Granite 40 mm thick - Upto <b><i class="fa fa-inr"></i>160 per Sqft</b></span>
</div>
</li>
<li class="height4">Bathroom
<div class="type-sub-text">
<span>Bathroom Ceramic Wall Tiles with 7 feet height - Upto <b><i class="fa fa-inr"></i>75 per Sqft</b></span>
<span>Sanitary ware &amp; CP Fittings - Upto <b><i class="fa fa-inr"></i>80000</b> till 1000 sqft of construction and prorata after. Company : <b>Kohler, Jaquar, Hindware, Parryware</b></span>
<span>CPVC Pipe - <b>Ashirwad / Supreme</b></span>
<span>Bathroom Accessories - EWC, Health Faucet, Wash Basin with accessories, 2 in 1 wall mixer, Overhead Shower.</span>
<span><b>Mirror, Soap Dish, Towel Rail - Worth <i class="fa fa-inr"></i>9000 till 1000 ft of construction and prorata after.</b></span>
<span>Bathroom doors - Waterproof flush doors</span>
</div>
</li>
<li class="height5">Doors &amp; Windows
<div class="type-sub-text">
<span>Main Door - <b>Burma Teak Door with along teak frame of 5inch by 3.5 inch, worth <i class="fa fa-inr"></i>50000. Door Thickness around 38mm</b></span>
<span>Internal Doors - <b>Hardwood Panelled Door. Door Frames of Sal Wood 4 inch by 3 inch</b></span>
<span>Windows - <b>Sal wood/UPVC Windows with glass and mesh shutters</b></span>
<span>Pooja Room Door - <b>Burma Teak along with teak frame of 5inch by 2.5 inch, worth <i class="fa fa-inr"></i>25000</b></span>
</div>
</li>
<li class="height6">Painting
<div class="type-sub-text hauto">
<span>Interior Painting - <b>JK Putty + Apcolite Premium Royale Emulsion</b></span>
<span>Exterior Painting - <b>Asian Primer + Apex Ultima Exterior Emulsion Paint</b></span>
</div>
</li>
<li class="height7">Flooring
<div class="type-sub-text hauto">
<span>Living and Dining Flooring - Tiles or Granite or Marble of value upto <b><i class="fa fa-inr"></i>160 per sqft</b></span>
<span>Rooms and Kitchen Flooring - Tiles or Granite or Wooden flooring upto <b><i class="fa fa-inr"></i>140 per sqft</b></span>
<span>Balcony and Open Areas Flooring - Anti-skid tiles of value upto <b><i class="fa fa-inr"></i>70 per sqft</b></span>
<span>Staircase Flooring - Sadarahalli Granite or Marble of value upto <b><i class="fa fa-inr"></i>140 per sqft</b></span>
<span>Parking Tiles - Anti-skid tiles of value upto <b><i class="fa fa-inr"></i>65 per <br>sqft</b></span>
</div>
</li>
<li class="height8">Electrical Works
<div class="type-sub-text hauto">
<span>Wires - Fireproof wires by Finolex</span>
<span>Switches &amp; Sockets - <b>GM Modular / Legrand</b></span>
</div>
</li>
<li class="height9">Miscellaneous
<div class="type-sub-text">
<span>Overhead Tank - <b>Sintex Triple Layered 2000 ltrs</b></span>
<span>Underground Sump - <b>8000 litres</b></span>
<span>Staircase Railing - <b>SS (Stainless Steel) Railing</b></span>
<span>Parapet wall of 3 feet height</span>
<span>Window Grills - <b>Windows MS Grills with Enamel Paint as per client requirement at <i class="fa fa-inr"></i>130 persqft</b></span>
<span>Elevation Extras of <b><i class="fa fa-inr"></i>30000</b></span>
</div>
</li>
<li class="height10">Optional Packages
<div class="type-sub-text">
<span>Cabinets</span>
<span>Modular Kitchen</span>
<span><b>Pop False Ceiling in Living</b></span>
<span><b>Dining &amp; Bedroom</b></span>
<span><b>Lights &amp; Fans</b></span>
<span><b>Air Conditioners in Bedrooms</b></span>
</div>
</li>
</ul>
</div>
<footer class="cd-pricing-footer">
<a class="cd-select" href="#getquote" data-package="luxury">Select Package</a>
</footer>
 </li>
</ul>
</li>
</ul>
<div class="text-right text-muted"><small><i>* Conditions Apply</i></small></div>
</div>
</div>

<div class="column-form-container">
<div class="column-form-block">
<form id="customhomes" method="post" >
    @csrf
<div class="custom-form-heading">
<div class="heading-top"><h2 class="text-light"><span>Request For Home Construction</span></h2></div>
<div class="heading-bottom">
<div class="title-desc"><p class="text-light">Get the best professionals for you.</p></div>
</div>
</div>
<div class="clearfix"></div>
<div class="block-webform-block" id="quoteForm">
<div class="form-block-content">
<div class="row">
<div class="col-sm-12 col-xs-12">
<div class="form-group">
<label for="Package">Package</label>
<select id="Package" name="Package" class="validate-select">
<option value="">Select</option>
<option value="Basic Package">Basic Package</option>
<option value="Deluxe Package">Deluxe Package</option>
<option value="Luxury Package">Luxury Package</option>
</select>
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4">
<div class="form-group">
<label for="editname">Name <span class="required">*</span></label>
<input type="text" id="editname" name="name" class="input-text required-entry validation-failed" required="">
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4">
<div class="form-group">
<label for="Phone">Phone <span class="required">*</span></label>
<input type="text" id="Phone" name="Phone" class="input-text required-entry validation-failed" required="">
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4">
<div class="form-group">
<label for="Email">Email</label>
<input type="text" id="Email" name="Email">
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4">
<div class="form-group">
<label for="City">City</label>
<select id="City" name="City">
<option value="">Select</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Bengaluru">Bengaluru</option>
<option value="Guntur">Guntur</option>
<option value="Vijayawada">Vijayawada</option>
<option value="Chennai">Chennai</option>
</select>
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4">
<div class="form-group">
<label for="Plot">Plot Size</label>
<input type="text" id="Plot" name="Plot">
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4">
<div class="form-group">
<label for="Floors">Type</label>
<select id="Floors" name="Floors">
<option value="">Select</option>
<option value="Bungalows">Bungalows</option>
<option value="Apartments/Flats">Apartments/Flats</option>
<option value="Villas">Villas</option>
<option value="Eco-Friendly Homes">Eco-Friendly Homes</option>
<option value="Small Indian House">Small Indian House</option>
<option value="Office Building">Office Building</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4">
<div class="form-group">
<label for="Budget">Estimate Budget</label>
<select id="Budget" name="Budget">
<option>Select</option>
<option>Upto 20 Lakhs</option>
<option>Upto 40 Lakhs</option>
<option>Upto 60 Lakhs</option>
<option>Upto 1 Crore</option>
<option>Above 1 Crore</option>
</select>
</div>
</div>
<div class="col-sm-6 col-xs-12 mt-4 ">
<div class="form-group">
<label for="elevation">Need Floor Plan / Elevation</label>
<select id="elevation" name="elevation">
<option>Select</option>
<option>Yes</option>
<option>No</option>
</select>
</div>
</div>
</div>
<div class="form-group" style="margin-top:10px;">
<input class="btn btn-quote" type="submit" value="Submit">
</div>
</div>
</div>
</form>
<script type="text/javascript">
									//< ![CDATA[
									var customForm = new VarienForm('customhomes');
									//]]>
								</script>
</div>
</div>

 @endsection