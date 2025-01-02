@extends('front.layouts.app')
@section('content')
    <!-- page-title  -->
    <div class="page-title home01">
        <div class="tf-container ">
            <div class="row justify-center relative">
                <div class="col-lg-8 ">
                    <div class="content-inner">
                        <div class="heading-title">
                            <h1 class="title">About Us</h1>
                            <p class="h6 fw-4">Welcome To The Brick Bold </p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.page-title  -->

    <!-- .main-content -->
    <div class="main-content tf-spacing-1">

        <section class="section-listing">
            <div class="tf-container">
                <div class="row ">
                    <div class="col-md-12 heading-section">
                        <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">Thousands of luxury home enthusiasts just like you Brick Bold, a leading real estate services portal in India, is headquartered in Ludhiana, Punjab. With a strong presence in the financial market since 2013, we offer a range of financial services through our banking partners to the real estate sector. Our journey in the real estate business began five years ago, and we have since constructed multiple buildings. Our other private company, VFS Alliance Pvt. Ltd, provides a comprehensive range of services, including construction, financial, and insurance services.</P>
                    </div>                          
                </div>
            </div>
        </section>
            <!-- end banner video -->
        <section class="section-listing">
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <div class="heading-section mb-30">
                                <h3 class="title text-anime-wave">What is Brick Bold?</h3>
                                <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">BrickBold is a leading platform for property buyers and sellers, attracting over 1 Lakh monthly visitors and hosting 50 Thousand active listings. With more than 3 years of experience, it has transformed into a full-service provider, offering home loans services, and expert guidance to enhance the real estate experience. Whether you're looking to buy, sell, or improve your property, BrickBold is your go-to resource.</p>
                            </div> 

                            <div class="flat-service wrap-service wow fadeInUpSmall" style="border:none;" data-wow-delay=".4s" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0.4s;">
                                <div class="heading-section mb-30">
                                    <h6 class="title text-anime-wave"><i class="fas fa-seedling"></i> Vision</h6>
                                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">To be the most desired company for both clients and realtors, we create, preserve, and provide valuable, affordable properties that transform our communities, work to eliminate family insecurity and empower residents to experience.</p>       
                                </div>

                                <div class="box-service hover-btn-view">                                    
                                    <div class="heading-section mb-30">
                                        <h6 class="title text-anime-wave"><i class="fas fa-infinity"></i>  Mission</h6>
                                        <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">To be the most desired company for both clients and realtors, we create, preserve, and provide valuable, affordable properties that transform our communities, work to eliminate family insecurity and empower residents to experience.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </section>
        <!-- Service -->
        <section class="section-listing style-1">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading-section mb-48">                                                           
                            <h4 class="title text-anime-wave">Discover What Sets Our Real Estate Expertise Apart</h4>
                            <p class="text-1 wow animate__fadeInUp animate__animated mb-30" data-wow-duration="1.5s" data-wow-delay="0s">
                            We generate access to an extensive network and also provide higher availability with near sub-second downtime maintenance; we help you increase efficiency and productivity. So, that you can&#39;t face problems in buying and selling properties. The company regulates a target-to-property lead generation strategy. Under the real estate portal, you can access the network of active people in the whole industry. We will share with you about upcoming real estate projects in your city. Our expert relationship manager helps you convert the lead into a healthy business and suggests hassle-free home loan products.
                            </p>
                        
                            
                            <a href="{{ route('contact') }}" class="tf-btn bg-color-primary fw-7 pd-18 wow animate__fadeInUp animate__animated" data-wow-duration="1s" data-wow-delay="0s">Contact Us</a>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="tf-grid-layout md-col-1 mb-30">

                            <div class="box-house style-list hover-img">
                                <div class="image-wrap">
                                    <a href="{{ route('properties', ['for_type' => 'for-sell']) }}">
                                        <img class=" ls-is-cached lazyloaded" data-src="{{ url('images/buy.png')}}" src="{{ url('images/buy.png')}}" alt="">
                                    </a>
                                </div>

                                <div class="content">
                                    <h5 class="title">
                                        <a href="{{ route('properties', ['for_type' => 'for-sell']) }}">Buy A New Home</a>
                                    </h5>
                                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">Explore diverse properties and expert guidance for a seamless buying experience.</p>                                    
                                </div>
                            </div>

                            <div class="box-house style-list hover-img">
                                <div class="image-wrap">
                                    <a href="{{ route('properties', ['for_type' => 'for-rent']) }}">
                                        <img class=" ls-is-cached lazyloaded" data-src="{{ url('images/rent.png')}}" src="{{ url('images/rent.png')}}" alt="">
                                    </a>
                                </div>

                                <div class="content">
                                    <h5 class="title">
                                        <a href="{{ route('properties', ['for_type' => 'for-rent']) }}">Rent a home</a>
                                    </h5>
                                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">Explore a diverse variety of listings tailored precisely to suit your unique lifestyle needs.</p>                                    
                                </div>
                            </div> 

                            <div class="box-house style-list hover-img">
                                <div class="image-wrap">
                                    <a href="{{route('user.property.add')}}">
                                        <img class=" ls-is-cached lazyloaded" data-src="{{ url('images/sell.png')}}" src="{{ url('images/sell.png')}}" alt="">
                                    </a>
                                </div>

                                <div class="content">
                                    <h5 class="title">
                                        <a href="{{route('user.property.add')}}">Sell a home</a>
                                    </h5>
                                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">Showcasing your property's best features for a successful sale.</p>                                    
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- /.main-content -->
@endsection

@push('scripts') 
@endpush
