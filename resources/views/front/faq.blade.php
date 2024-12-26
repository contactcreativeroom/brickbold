@extends('front.layouts.app')
@section('content')
    <!-- flat-title -->
    <section class="flat-title ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-inner ">
                        <ul class="breadcrumb">
                            <li><a class="home fw-6 text-color-3" href="index.html">Home</a></li>
                            <li>Property Listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /flat-title -->

    <!-- .main-content -->
    <div class="main-content tf-spacing-6 header-fixed">

        <!-- section-faq -->
        <section class="section-faq ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="heading-section  mb-48">
                            <h2 class="title ">Frequently Asked Questions</h2>
                        </div>
                        <div class="tf-faq mb-49">
                            <h3 class="fw-8 title mb-24">Overview</h3>
                            <ul class="box-faq" id="wrapper-faq">
                                <li class="faq-item">
                                    <a href="#accordion-faq-one" class="faq-header h6 collapsed "
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion-faq-one">
                                        Why Should I Use Your Services? <i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion-faq-one" class="collapse" data-bs-parent="#wrapper-faq">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item active">
                                    <a href="#accordion-faq-two" class="faq-header h6" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="accordion-faq-two">
                                        Why Should I Use Your Services? <i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion-faq-two" class="collapse show" data-bs-parent="#wrapper-faq">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion-faq-three" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion-faq-three">
                                        How Secure Are Your Services? <i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion-faq-three" class="collapse" data-bs-parent="#wrapper-faq">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion-faq-four" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion-faq-four">
                                        Is There Customer Support Available?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion-faq-four" class="collapse" data-bs-parent="#wrapper-faq">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion-faq-five" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion-faq-five">
                                        How Can I Update My Account Information?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion-faq-five" class="collapse" data-bs-parent="#wrapper-faq">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tf-faq mb-49">
                            <h3 class="fw-8 title mb-24">Costs and Payments</h3>
                            <ul class="box-faq" id="wrapper-faq-2">
                                <li class="faq-item">
                                    <a href="#accordion2-faq-one" class="faq-header h6 collapsed "
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion2-faq-one">
                                        How Do You Calculate Fees?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion2-faq-one" class="collapse" data-bs-parent="#wrapper-faq-2">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item active">
                                    <a href="#accordion2-faq-two" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion2-faq-two">
                                        How Do I Pay My Invoices?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion2-faq-two" class="collapse " data-bs-parent="#wrapper-faq-2">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion2-faq-three" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion2-faq-three">
                                        Are There Opportunities For Discounts Or Promotions? <i
                                            class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion2-faq-three" class="collapse" data-bs-parent="#wrapper-faq-2">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion2-faq-four" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion2-faq-four">
                                        Are There Any Hidden Fees Not Displayed In The Pricing Table?<i
                                            class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion2-faq-four" class="collapse" data-bs-parent="#wrapper-faq-2">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion2-faq-five" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion2-faq-five">
                                        What Is The Refund Procedure?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion2-faq-five" class="collapse" data-bs-parent="#wrapper-faq-2">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion2-faq-six" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion2-faq-six">
                                        Is There Financial Or Accounting Support?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion2-faq-six" class="collapse" data-bs-parent="#wrapper-faq-2">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tf-faq ">
                            <h3 class="fw-8 title mb-24">Safety and Security</h3>
                            <ul class="box-faq" id="wrapper-faq-3">
                                <li class="faq-item">
                                    <a href="#accordion3-faq-one" class="faq-header h6 collapsed "
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion3-faq-one">
                                        What Languages Does Your Service Support?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion3-faq-one" class="collapse" data-bs-parent="#wrapper-faq-3">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item active">
                                    <a href="#accordion3-faq-two" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion3-faq-two">
                                        How Do I Integrate Your Service Into My System?<i
                                            class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion3-faq-two" class="collapse " data-bs-parent="#wrapper-faq-3">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion3-faq-three" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion3-faq-three">
                                        What Are The Safety Features Of Your System?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion3-faq-three" class="collapse" data-bs-parent="#wrapper-faq-3">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion3-faq-four" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion3-faq-four">
                                        How Can I Request New Features?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion3-faq-four" class="collapse" data-bs-parent="#wrapper-faq-3">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion3-faq-five" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion3-faq-five">
                                        Is My Data Protected?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion3-faq-five" class="collapse" data-bs-parent="#wrapper-faq-3">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                                <li class="faq-item">
                                    <a href="#accordion3-faq-six" class="faq-header h6 collapsed"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="accordion3-faq-six">
                                        How Do I Report A Technical Issue?<i class="icon-CaretDown"></i>
                                    </a>
                                    <div id="accordion3-faq-six" class="collapse" data-bs-parent="#wrapper-faq-3">
                                        <p class="faq-body">
                                            Once your account is set up and you've familiarized yourself with the
                                            platform, you are ready to start using our services. Whether it's
                                            accessing
                                            specific features, making transactions, or utilizing our tools, you'll
                                            find
                                            everything you need at your fingertips.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class=" tf-sidebar sticky-sidebar ">
                            <form class="form-contact-seller mb-30">
                                <h4 class="heading-title mb-30">
                                    Contact Sellers
                                </h4>
                                <div class="seller-info">
                                    <div class="avartar">
                                        <img src="images/avatar/seller.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">Shara Conner</h6>
                                        <ul class="contact">
                                            <li><i class="icon-phone-1"></i><span>1-333-345-6868</span></li>
                                            <li><i class="icon-mail"></i><a href="#">themesflat@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <fieldset class="mb-12">
                                    <input type="text" class="form-control" placeholder="Full Name" name="name"
                                        id="name" required>
                                </fieldset>
                                <fieldset class="mb-30">
                                    <textarea name="message" cols="30" rows="10" placeholder="How can an agent help"
                                        id="message" required></textarea>
                                </fieldset>

                                <a href="#" class="tf-btn bg-color-primary w-full">
                                    Send message</a>
                            </form>

                            <div class=" sidebar-ads">
                                <div class="image-wrap">
                                    <img class="lazyload" data-src="images/blog/ads.jpg" src="images/blog/ads.jpg"
                                        alt="">
                                </div>
                                <div class="logo relative z-5">
                                    <img src="images/logo/logo-2%402x.png" alt="">
                                </div>
                                <div class="box-ads relative z-5">
                                    <div class="content ">
                                        <h4 class="title"><a href="property-detail-v1.html">We can help you find a
                                                local real estate agent</a> </h4>
                                        <div class="text-addres ">
                                            <p>Connect with a trusted agent who knows the market inside out -
                                                whether you’re buying or selling.</p>
                                        </div>
                                    </div>
                                    <a href="#" class="tf-btn fw-6 bg-color-primary w-full">
                                        Connect with an agent
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section-faq -->

        <div class="section-contact-help ">
            <div class="tf-container">
                <div class="row ">
                    <div class="col-12 ">
                        <div class="relative">
                            <div class="logo">
                                <img src="images/logo/logo-2%402x.png" alt="">
                            </div>
                            <div class="image-wrap">
                                <img class="lazyload" data-src="images/section/section-contact.jpg"
                                    src="images/section/section-contact.jpg" alt="">
                            </div>

                            <div class="content">
                                <div class="heading-section mb-0 ">
                                    <h2 class="title text-white">Need help? Talk to our expert.</h2>
                                    <p class="text-1 text-white ">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </p>
                                </div>
                                <div class="wrap-btn">
                                    <a href="#" class="tf-btn style-border color-white  pd-14 fw-6">Contact us</a>
                                    <a href="#" class="tf-btn bg-color-primary pd-15 fw-6"><svg width="20"
                                            height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.875 8.125V4.375M11.875 8.125H15.625M11.875 8.125L16.875 3.125M14.375 18.125C7.47167 18.125 1.875 12.5283 1.875 5.625V3.75C1.875 3.25272 2.07254 2.77581 2.42417 2.42417C2.77581 2.07254 3.25272 1.875 3.75 1.875H4.89333C5.32333 1.875 5.69833 2.1675 5.8025 2.585L6.72417 6.27083C6.81583 6.6375 6.67917 7.0225 6.37667 7.24833L5.29917 8.05667C5.14494 8.16831 5.03083 8.32672 4.97379 8.50837C4.91674 8.69002 4.9198 8.88523 4.9825 9.065C5.48406 10.4293 6.27618 11.6682 7.30398 12.696C8.33179 13.7238 9.57073 14.5159 10.935 15.0175C11.3025 15.1525 11.7083 15.0142 11.9433 14.7008L12.7517 13.6233C12.8623 13.4756 13.0141 13.3639 13.188 13.3021C13.3619 13.2402 13.5501 13.2311 13.7292 13.2758L17.415 14.1975C17.8317 14.3017 18.125 14.6767 18.125 15.1067V16.25C18.125 16.7473 17.9275 17.2242 17.5758 17.5758C17.2242 17.9275 16.7473 18.125 16.25 18.125H14.375Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        (603) 555-0123</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /main-content -->
@endsection

@push('scripts') 
@endpush
