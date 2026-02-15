@extends('main')
@section('main-section')
        <!-- breadcrumb start -->
        <section class="about-breadcrumb">
            <div class="about-back section-tb-padding" style="background-image: url({{url('/')}}/public/image/about-image.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about-l">
                                <ul class="about-link">
                                    <li class="go-home"><a href="index1.html">Home</a></li>
                                    <li class="about-p"><span>Cancellation</span></li>
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
                        <div class="cancellation-title">
                            <h1>Cancellation</h1>
                        </div>
                        <div class="cancellation-content">
                            <ul class="cancellation">
                                <li>
                                    <p>You may cancel your order at anytime by emailing support@libazz.com</p>
                                </li>
                                <li>
                                    <p>Once your order is cancelled will be immediately deleted from the Service. Since deletion of all data is final please be sure that you do in fact want to cancel your order before doing go ahead</p>
                                </li>
                                <li>
                                    <p>If you cancel the order in the middle of the delivery, you will receive one final invoice via email. Once that invoice has been paid you by us will not be charged again</p>
                                </li>
                                <li>
                                    <p>Fraud: Without limiting any other queries, Libazz may cancel your order if we suspect that you (by conviction, settlement, insurance or escrow investigation, or otherwise) have engaged in fraudulent activity in connection with the Site</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </li>
                                <li>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq's collapse end -->
     @endsection