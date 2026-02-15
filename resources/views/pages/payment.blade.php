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
                                <li class="about-p"><span class="text-light">Payment plicy</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- faq's collapse start -->
    <section class="privacy-area section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="privacy-title">
                        <h1>Payment policy</h1>
                    </div>
                    <div class="privacy-content">
                      <h5 class="mt-4 mb-4">Bricks Mart Payment Policy</h5 >
                      <p>BricksMart collects the payment information of the users to process online transactions. However, we 
take care of your personal and payment information seriously. This Payment Policy is written to clarify 
how we process the transaction and manage your payment information. We make sure that your 
financial information will not be used, sent, or sold to third parties for any kind of purpose not related 
to BricksMart.
</p>
<h5 class="mt-4 mb-4">Money Transaction</h5 >
<p>BricksMart does not manage your payment information itself. A trusted third party that processes the 
transactions on our platform handles your payment information. However, we strictly ask them to 
ensure the safety of your payment information.
</p>
<h5 class="mt-4 mb-4">Our Partners</h5 >
<p>We use Razorpay Payment Gateway to process the payment of the customers. This is the most secure
and trusted electronic payment method. To learn more about Rozer Pay security, please visit their 
dedicated section: Razorpay-About Us </p>
<h5 class="mt-4 mb-4">Why You Are Asked For Payment Information?</h5 >
<p>Once you choose a product at our website or mobile app, you need to select a payment method to 
process the transaction. In case you are looking to pay online for the order, you need to provide the 
required payment details. Whether you want to provide the payment details or not, it’stotally on you. 
But in case you do not submit the required financial details then you may not be able to make the 
transaction at BricksMart.</p>
<h5 class="mt-4 mb-4">Which Payment Methods Do We Use?</h5 >
<p>For the convenience of the users, we accept different payment methods such as cash on delivery, net 
banking, mobile payments, credit or debit card, etc.</p>
<h5 class="mt-4 mb-4">Contact</h5 >
<p>BricksMart has the right to make changes to this Payment Policy at any time. Whenever we make a 
change to this policy, we ask you to review the policy. For any type of query or doubt, you can contact
us via email, phone, or make a visit to our office. You can get our official Contact details by visiting the 
“Contact Us” page of this website or app. 
</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq's collapse end -->
 @endsection