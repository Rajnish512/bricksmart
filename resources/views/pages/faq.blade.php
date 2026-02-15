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
                                <li class="about-p"><span class="text-light">Faq's</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- faq's collapse start -->
    <section class="faqs-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="faq-title">
                        <h1>FAQ's</h1>
                        <p>The questions that are mentioned below are frequently asked by our users. You might find your
                            answer with the help of these FAQs:</p>
                    </div>
                    <div class="faq-box">
                        <ul class="faq-ul">
                            <li class="faq-li">
                                <h3><span>1.</span>  What Is BricksMart’s Return Policy?</h3>
                                <span class="faq-desc">To provide security to our buyers, we allow for the easy return of the products. You can return a delivered product if it is complying with our “Refund Policy”. </span>
                            </li>
                            <li class="faq-li">
                                <h3><span>2.</span>How To Submit A Dispute For An Order?</h3>
                                <span class="faq-desc">If you have any issues with the delivered product, you need to email us at support@bricksmart.com within 7 days of the delivery date.</span>
                            </li>
                            <li class="faq-li">
                                <h3><span>3.</span> When Will I Be Refunded?</h3>
                                <span class="faq-desc">Once you raise a dispute at BricksMart.com, our team looks into it, and if they found the refund request as per our guidelines then the amount will be refunded to the same payment method within
                                    3-5 business days.</span>
                            </li>
                        </ul>
                        <ul class="faq-ul">
                            <li class="faq-li">
                                <h3><span>4.</span> What are the shipping charges?</h3>
                                <span class="faq-desc"> Shipping charges are based on the weight of the product and they might vary from one product to another. However, sometimes we might allow free delivery on our products as well. </span>
                            </li>
                            <li class="faq-li">
                                <h3><span>5.</span> What is the estimated delivery time?</h3>
                                <span class="faq-desc">We ensure the fastest delivery of our products. The estimated time may depend on the product size,
                                    distance, and availability of the products. However, we make sure the delivery of our products is
                                    within 7 working days. </span>
                            </li>
                            <li class="faq-li">
                                <h3><span>6.</span> How will the delivery be done?</h3>
                                <span class="faq-desc">To send our products safely we process our deliveries through verified courier partners such as
                                    BlueDart, Aramex, Delhivery, E-come, DTDC, DHL, and FedEx.</span>
                            </li>
                        </ul>
                        <!--<a href="contact.html" class="btn-style1">Still have a question?</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq's collapse end -->
    <!-- collapse start -->
    
    
    
    <!--<section class="faq-collapse section-b-padding">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col">-->
    <!--                <div class="faq-title">-->
    <!--                    <h1>General questions</h1>-->
    <!--                </div>-->
    <!--                <div class="faq-start">-->
    <!--                    <span>Q.1</span>-->
    <!--                    <a href="#collapse-7" data-bs-toggle="collapse" class="collapse-title">How are items packaged?</a>-->
    <!--                    <div class="collapse collapse-content" id="collapse-7">-->
    <!--                        <p>All items are carefully packaged as to avoid any form of damage.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="faq-start">-->
    <!--                    <span>Q.2</span>-->
    <!--                    <a href="#collapse-8" data-bs-toggle="collapse" class="collapse-title">Who would be responsible for paying local taxes in countries outside of India?</a>-->
    <!--                    <div class="collapse collapse-content" id="collapse-8">-->
    <!--                        <p>Customs duty & other international taxes etc. if applicable will have to be borne by the customer according to the laws of the land.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="faq-start">-->
    <!--                    <span>Q.3</span>-->
    <!--                    <a href="#collapse-9" data-bs-toggle="collapse" class="collapse-title"> How do i pay for a Mikshaa’s purchase?</a>-->
    <!--                    <div class="collapse collapse-content" id="collapse-9">-->
    <!--                        <p>Mikshaa offers you multiple payment methods. Whatever your online mode of payment, you can trust assured that Mikshaa's trusted payment gateway partners use secure encryption technology to keep your transaction details confidential at all times.</p>-->
    <!--                        <p>You may use Internet Banking, Debit Card, Credit Card and Cash on Delivery to make your purchase. We also accept payments made using Visa, MasterCard, American Express and Any Club credit/debit cards.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="faq-start">-->
    <!--                    <span>Q.4</span>-->
    <!--                    <a href="#collapse-10" data-bs-toggle="collapse" class="collapse-title">Can i make a credit/debit card or Internet Banking payment through my mobile?</a>-->
    <!--                    <div class="collapse collapse-content" id="collapse-10">-->
    <!--                        <p>Yes, you can make credit card payments through the Mikshaa mobile site. Mikshaa uses 256-bit encryption technology to protect your card information while securely transmitting it to the secure and trusted payment gateways managed by leading banks.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="faq-start">-->
    <!--                    <span>Q.5</span>-->
    <!--                    <a href="#collapse-11" data-bs-toggle="collapse" class="collapse-title">Is it safe to use my credit/debit card on Mikshaa?</a>-->
    <!--                    <div class="collapse collapse-content" id="collapse-11">-->
    <!--                        <p>Is it safe to use my credit/debit card on Mikshaa?</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="faq-start">-->
    <!--                    <span>Q.6</span>-->
    <!--                    <a href="#collapse-12" data-bs-toggle="collapse" class="collapse-title">Does Craftsvilla store my credit card information?</a>-->
    <!--                    <div class="collapse collapse-content" id="collapse-12">-->
    <!--                        <p>No, Mikshaa does not collect or store your account information at all. Your transaction is authorized at multiple points, first by EBS/CCavenue and subsequently by Visa/MasterCard/Amex secure directly without any information passing through us.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    
    
    
    
    <!-- collapse end -->
    <!-- News Letter start -->
    <!--<section class="news-letter1">-->
    <!--    <div class="section-tb-padding" style="background-image: url({{url('/')}}/public/image/banner3.jpg);">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col">-->
    <!--                    <div class="home-news">-->
    <!--                        <h2>Get The Latest Deals</h2>-->
    <!--                        <p>And Receive 20% Off Coupon For First Shopping</p>-->
    <!--                        <form>-->
    <!--                            <input type="text" name="search" placeholder="Enter your email address">-->
    <!--                            <button class="btn btn-style3">Subscribe</button>-->
    <!--                            <button class="btn btn-style1 news-sub">Subscribe</button>-->
    <!--                        </form>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- News Letter end -->
   @endsection