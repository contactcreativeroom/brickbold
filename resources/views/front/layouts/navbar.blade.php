<!-- mobile-nav -->
    <div class="offcanvas offcanvas-start mobile-nav-wrap " tabindex="-1" id="menu-mobile"
        aria-labelledby="menu-mobile">
        <div class="offcanvas-header top-nav-mobile">
            <div class="offcanvas-title">
                <a href="{{route('home')}}"><img src="{{ App\Helper\Helper::getLogo(); }}"></a>
            </div>
            <div data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="icon-close"></i>
            </div>
        </div>
        <div class="offcanvas-body inner-mobile-nav">
            <div class="mb-body">
                <div>
                    <ul id="menu-mobile-menu"> 
                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-buy" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-buy">
                                Buy
                            </a>
                            <div id="dropdown-menu-buy" class="collapse" data-bs-parent="#menu-mobile-menu">
                                <ul class="sub-mobile">
                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-buy-popular" class="item-menu-mobile  collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-agents">Popular</a>
                                        <div id="sub-buy-popular" class="collapse" data-bs-parent="#dropdown-menu-buy">
                                            <ul class="sub-mobile">
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{ route('properties', ['for_type' => 'for-sell', 'availability' => 'ready-to-move']) }}">Ready to Move</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'ownership' => 'free-hold'])}}">Owner Properties</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'is_negotiable' => 'negotiable'])}}">Budget Homes</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'is_premium' => 1])}}">Premium Homes</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'sort' => 'asc'])}}">Newly Launched</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-buy-type" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="sub-agents">Property Types</a>
                                        <div id="sub-buy-type" class="collapse" data-bs-parent="#dropdown-menu-buy">
                                            <ul class="sub-mobile">
                                            <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'type' => 'residential'])}}">Residential</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'house'])}}">House For Sell</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'villa'])}}">Villa For Sell</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'type' => 'apartment'])}}">Apartment</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'type' => 'commercial'])}}">Commercial</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'office'])}}">Commercial Office Space</a>
                                                </li>
                                                <li class="menu-item ">
                                                    <a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'plot-land'])}}">Commercial Land</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-buy-budget" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="sub-agents">Budget</a>
                                        <div id="sub-buy-budget" class="collapse" data-bs-parent="#dropdown-menu-buy">
                                            <ul class="sub-mobile">
                                                <li class="menu-item "><a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'max_price' => 5000000])}}">Under ₹50 Lac</a>
                                                    </li>
                                                <li class="menu-item "><a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 5000000, 'max_price' => 10000000])}}">₹50 Lac - ₹1 Cr</a>
                                                </li>
                                                <li class="menu-item "><a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 10000000, 'max_price' => 20000000])}}">₹1 Cr - ₹2 Cr</a>
                                                </li>
                                                <li class="menu-item "><a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 20000000, 'max_price' => 50000000])}}">₹2 Cr - ₹5 Cr</a>
                                                </li>
                                                <li class="menu-item "><a class="item-menu-mobile " href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 100000000])}}">Above ₹10 Cr</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-rent" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-rent">
                                Rent
                            </a>
                            <div id="dropdown-menu-rent" class="collapse" data-bs-parent="#menu-mobile-menu">
                                <ul class="sub-mobile">
                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-rent-choice" class="item-menu-mobile  collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-agents">Popular Choices</a>
                                        <div id="sub-rent-choice" class="collapse" data-bs-parent="#dropdown-menu-rent">
                                            <ul class="sub-mobile">
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{ route('properties', ['for_type' => 'for-rent', 'availability' => 'ready-to-move']) }}">Ready to Move</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'ownership' => 'free-hold'])}}">Owner Properties</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'is_verified' => 1])}}">Verified Properties</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'house', 'furnished' => 'furnished'])}}">Furnished Homes</a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-rent-type" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="sub-agents">Property Types</a>
                                        <div id="sub-rent-type" class="collapse" data-bs-parent="#dropdown-menu-rent">
                                            <ul class="sub-mobile">
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'type' => 'residential'])}}">Residential</a>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'house'])}}">House For Rent</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'villa'])}}">Villa For Rent</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'type' => 'apartment'])}}">Apartment</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'type' => 'commercial'])}}">Commercial</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'office'])}}">Office Space</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-rent-budget" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="sub-agents">Budget</a>
                                        <div id="sub-rent-budget" class="collapse" data-bs-parent="#dropdown-menu-rent">
                                            <ul class="sub-mobile">
                                                <li class="menu-item " ><a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'max_price' => 10000])}}">Under ₹10,000</a>
                                                </li>
                                                <li class="menu-item " ><a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 10000, 'max_price' => 15000])}}">₹10,000 - ₹15,000</a>
                                                </li>
                                                <li class="menu-item " ><a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 15000, 'max_price' => 20000])}}">₹15,000 - ₹20,000</a>
                                                </li>
                                                <li class="menu-item " ><a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 20000, 'max_price' => 25000])}}">₹20,000 - ₹25,000</a>
                                                </li>
                                                <li class="menu-item " ><a class="item-menu-mobile" href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 25000])}}">Above ₹25,000</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-has-children-mobile">
                            <a href="#dropdown-menu-sell" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="dropdown-menu-sell">
                                Sell
                            </a>
                            <div id="dropdown-menu-sell" class="collapse" data-bs-parent="#menu-mobile-menu">
                                <ul class="sub-mobile">
                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-sell-owner" class="item-menu-mobile  collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-agents">For Owner</a>
                                        <div id="sub-sell-owner" class="collapse" data-bs-parent="#dropdown-menu-sell">
                                            <ul class="sub-mobile">
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('user.property.add')}}">Rent Post Property</a>
                                                </li>
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('user.dashboard')}}">My Dashboard</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a class="item-menu-mobile" href="{{route('packages')}}">Sell / Rent Ad Packages</a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile-2">
                                        <a href="#sub-sell-agent" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="sub-agents">For Agent & Builder</a>
                                        <div id="sub-sell-agent" class="collapse" data-bs-parent="#dropdown-menu-sell">
                                            <ul class="sub-mobile">
                                            <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('user.dashboard')}}">My Dashboard</a>
                                                <li class="menu-item" >
                                                    <a class="item-menu-mobile" href="{{route('packages')}}">Ad Packages</a>
                                                </li> 
                                                <li class="menu-item " >
                                                    <a class="item-menu-mobile" href="{{route('contact')}}">Sales Enquiry</a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    
                    <li class="menu-item "> 
                            <a href="{{route('homeloan')}}" class="tem-menu-mobile ">Home Loan</a>
                        </li>

                        {{-- <li class="menu-item ">
                            <a href="{{route('page', 'elite-services')}}" class="tem-menu-mobile ">Elite Services</a>
                        </li> --}}

                        <li class="menu-item ">
                            <a href="{{route('contact')}}" class="tem-menu-mobile "> Contact</a>
                        </li> 
                    </ul>
                    <div class="btn-add mt-2">
                        <a class="tf-btn bg-color-primary pd-23" href="{{route('register')}}" >
                            Post Property
                            <span class="text-danger ps-3 pe-3 bg-warning rounded-4">Free</span>
                        </a>
                    </div>
                    <div class="btn-add mt-2">
                        <a class="tf-btn bg-color-primary pd-23" href="{{route('login')}}" >
                            Login
                        </a>
                    </div>
                </div>


                <div class="support">
                    <a href="{{route('contact')}}" class="text-need"> Need help?</a>
                    <ul class="mb-info">
                        <li>Call Us Now: <span class="number">{{ data_get($config, 'phone', '') }}</span></li>
                        <li>Support 24/7: <a href="javascript:void(0)">{{ data_get($config, 'email', '') }}</a></li>
                        <li>
                            <div class="wrap-social">
                                <p>Follow us:</p>
                                <ul class="tf-social  style-2">

                                    <li>
                                        <a target="_blank" href="{{ data_get($config, 'social.facebook', '') }}">
                                            <i class="icon-fb"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ data_get($config, 'social.twitter', '') }}">
                                            <i class="icon-X"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ data_get($config, 'social.linkedin', '') }}">
                                            <i class="icon-linked"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ data_get($config, 'social.instagram', '') }}">
                                            <i class="icon-ins"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- /mobile-nav -->


    <!-- .prograss -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div> <!-- /.prograss -->