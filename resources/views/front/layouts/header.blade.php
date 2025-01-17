 <!-- .header -->
<header id="header-main" class="header header-fixed">
    <div class="header-inner">
        <div class="tf-container xl">
            <div class="row">
                <div class="col-12">
                    <div class="header-inner-wrap">
                        <div class="header-logo">
                            <a href="{{route('home')}}" class="site-logo">
                                <img id="logo_header" alt="" src="{{ App\Helper\Helper::getLogo(); }}">
                            </a>
                        </div>
                        <nav class="main-menu">
                            <ul class="navigation ">
                                <li class="current-menu"><a href="{{route('about')}}">About Us</a></li>  

                                <li class="has-child style-2"><a href="{{route('properties')}}">Buy</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{route('properties')}}">Popular</a>
                                            <ul class="submenu2">
                                                <li>
                                                    <a href="{{ route('properties', ['for_type' => 'for-sell', 'availability' => 'ready-to-move']) }}">Ready to Move</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'ownership' => 'free-hold'])}}">Owner Properties</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'is_negotiable' => 'negotiable'])}}">Budget Homes</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'is_premium' => 1])}}">Premium Homes</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'sort' => 'asc'])}}">Newly Launched</a>
                                                </li>                                                 
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('properties')}}">Property Types</a>
                                            <ul class="submenu2">
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'type' => 'residential'])}}">Residential</a>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'house'])}}">House For Sell</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'villa'])}}">Villa For Sell</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'type' => 'apartment'])}}">Apartment</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'type' => 'commercial'])}}">Commercial</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'office'])}}">Commercial Office Space</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-sell', 'property_detail' => 'plot-land'])}}">Commercial Land</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('properties')}}">Budget</a>
                                            <ul class="submenu2">
                                                <li><a href="{{route('properties', ['for_type' => 'for-sell', 'max_price' => 5000000])}}">Under ₹50 Lac</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 5000000, 'max_price' => 10000000])}}">₹50 Lac - ₹1 Cr</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 10000000, 'max_price' => 20000000])}}">₹1 Cr - ₹2 Cr</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 20000000, 'max_price' => 50000000])}}">₹2 Cr - ₹5 Cr</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-sell', 'min_price' => 100000000])}}">Above ₹10 Cr</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>  

                                <li class="has-child style-2"><a href="{{ route('properties', ['for_type' => 'for-rent']) }}">Rent</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('properties', ['for_type' => 'for-rent']) }}">Popular Choices</a>
                                            <ul class="submenu2">
                                                <li>
                                                    <a href="{{ route('properties', ['for_type' => 'for-rent', 'availability' => 'ready-to-move']) }}">Ready to Move</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'ownership' => 'free-hold'])}}">Owner Properties</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'is_verified' => 1])}}">Verified Properties</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'house', 'furnished' => 'furnished'])}}">Furnished Homes</a>
                                                </li>                                                  
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('properties')}}">Property Types</a>
                                            <ul class="submenu2">
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'type' => 'residential'])}}">Residential</a>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'house'])}}">House For Rent</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'villa'])}}">Villa For Rent</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'type' => 'apartment'])}}">Apartment</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'type' => 'commercial'])}}">Commercial</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('properties', ['for_type' => 'for-rent', 'property_detail' => 'office'])}}">Office Space</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('properties')}}">Budget</a>
                                            <ul class="submenu2">
                                                <li><a href="{{route('properties', ['for_type' => 'for-rent', 'max_price' => 10000])}}">Under ₹10,000</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 10000, 'max_price' => 15000])}}">₹10,000 - ₹15,000</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 15000, 'max_price' => 20000])}}">₹15,000 - ₹20,000</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 20000, 'max_price' => 25000])}}">₹20,000 - ₹25,000</a>
                                                </li>
                                                <li><a href="{{route('properties', ['for_type' => 'for-rent', 'min_price' => 25000])}}">Above ₹25,000</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-child style-2 size-6"><a href="#">Sell</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{route('properties')}}">For Owner</a>
                                            <ul class="submenu2">
                                                <li>
                                                    <a href="{{route('user.property.add')}}">Rent Post Property</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('user.dashboard')}}">My Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('packages')}}">Sell / Rent Ad Packages</a>
                                                </li>                                                  
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('properties')}}">For Agent & Builder</a>
                                            <ul class="submenu2">
                                                <li>
                                                    <a href="{{route('user.dashboard')}}">My Dashboard</a>
                                                <li>
                                                    <a href="{{route('packages')}}">Ad Packages</a>
                                                </li> 
                                                <li>
                                                    <a href="{{route('contact')}}">Sales Enquiry</a>
                                                </li> 
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header-right">
                            <div class="phone-number">
                                <div class="icons">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.875 5.625C1.875 12.5283 7.47167 18.125 14.375 18.125H16.25C16.7473 18.125 17.2242 17.9275 17.5758 17.5758C17.9275 17.2242 18.125 16.7473 18.125 16.25V15.1067C18.125 14.6767 17.8325 14.3017 17.415 14.1975L13.7292 13.2758C13.3625 13.1842 12.9775 13.3217 12.7517 13.6233L11.9433 14.7008C11.7083 15.0142 11.3025 15.1525 10.935 15.0175C9.57073 14.5159 8.33179 13.7238 7.30398 12.696C6.27618 11.6682 5.48406 10.4293 4.9825 9.065C4.8475 8.6975 4.98583 8.29167 5.29917 8.05667L6.37667 7.24833C6.67917 7.0225 6.81583 6.63667 6.72417 6.27083L5.8025 2.585C5.75178 2.38225 5.63477 2.20225 5.47004 2.07361C5.30532 1.94498 5.10234 1.87507 4.89333 1.875H3.75C3.25272 1.875 2.77581 2.07254 2.42417 2.42417C2.07254 2.77581 1.875 3.25272 1.875 3.75V5.625Z"
                                            stroke="black" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <p>{{ data_get($config, 'phone', '') }}</p>
                            </div>
                            @auth('user')
                            <div class="box-user tf-action-btns">
                                <div class="user ">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.749 6C15.749 6.99456 15.3539 7.94839 14.6507 8.65165C13.9474 9.35491 12.9936 9.75 11.999 9.75C11.0044 9.75 10.0506 9.35491 9.34735 8.65165C8.64409 7.94839 8.249 6.99456 8.249 6C8.249 5.00544 8.64409 4.05161 9.34735 3.34835C10.0506 2.64509 11.0044 2.25 11.999 2.25C12.9936 2.25 13.9474 2.64509 14.6507 3.34835C15.3539 4.05161 15.749 5.00544 15.749 6ZM4.5 20.118C4.53213 18.1504 5.33634 16.2742 6.73918 14.894C8.14202 13.5139 10.0311 12.7405 11.999 12.7405C13.9669 12.7405 15.856 13.5139 17.2588 14.894C18.6617 16.2742 19.4659 18.1504 19.498 20.118C17.1454 21.1968 14.5871 21.7535 11.999 21.75C9.323 21.75 6.783 21.166 4.5 20.118Z"
                                            stroke="#2C2E33" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="name">
                                    {{ auth('user')->user()->name ?? 'Anonymous' }} 
                                    <i class="icon-CaretDown"></i>
                                </div>
                                <div class=" menu-user">
                                    <a class="dropdown-item" href="{{route('user.dashboard')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 2.5H3.33333C2.8731 2.5 2.5 2.8731 2.5 3.33333V9.16667C2.5 9.6269 2.8731 10 3.33333 10H7.5C7.96024 10 8.33333 9.6269 8.33333 9.16667V3.33333C8.33333 2.8731 7.96024 2.5 7.5 2.5Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M16.668 2.5H12.5013C12.0411 2.5 11.668 2.8731 11.668 3.33333V5.83333C11.668 6.29357 12.0411 6.66667 12.5013 6.66667H16.668C17.1282 6.66667 17.5013 6.29357 17.5013 5.83333V3.33333C17.5013 2.8731 17.1282 2.5 16.668 2.5Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M16.668 10H12.5013C12.0411 10 11.668 10.3731 11.668 10.8333V16.6667C11.668 17.1269 12.0411 17.5 12.5013 17.5H16.668C17.1282 17.5 17.5013 17.1269 17.5013 16.6667V10.8333C17.5013 10.3731 17.1282 10 16.668 10Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M7.5 13.3334H3.33333C2.8731 13.3334 2.5 13.7065 2.5 14.1667V16.6667C2.5 17.1269 2.8731 17.5 3.33333 17.5H7.5C7.96024 17.5 8.33333 17.1269 8.33333 16.6667V14.1667C8.33333 13.7065 7.96024 13.3334 7.5 13.3334Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Dashboards</a>
                                    <a class="dropdown-item" href="{{route('user.profile')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 15C16.3807 15 17.5 13.8807 17.5 12.5C17.5 11.1193 16.3807 10 15 10C13.6193 10 12.5 11.1193 12.5 12.5C12.5 13.8807 13.6193 15 15 15Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M7.5013 9.16667C9.34225 9.16667 10.8346 7.67428 10.8346 5.83333C10.8346 3.99238 9.34225 2.5 7.5013 2.5C5.66035 2.5 4.16797 3.99238 4.16797 5.83333C4.16797 7.67428 5.66035 9.16667 7.5013 9.16667Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.33464 12.5H5.0013C4.11725 12.5 3.2694 12.8512 2.64428 13.4763C2.01916 14.1014 1.66797 14.9493 1.66797 15.8333V17.5"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M18.082 13.6666L17.332 13.4166" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12.668 11.5834L11.918 11.3334" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.832 15.5834L14.082 14.8334" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.918 10.1666L16.168 9.41663" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16.3333 15.5833L16 14.75" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M14.0013 10.25L13.668 9.41663" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11.918 13.8333L12.7513 13.5" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M17.25 11.5L18.0833 11.1666" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        My profile</a>
                                    <a class="dropdown-item" href="{{route('user.package')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.5 7.5H17.5V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V7.5Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M2.5 7.50004L4.54167 3.41671C4.6808 3.14059 4.89401 2.90861 5.15744 2.74673C5.42087 2.58484 5.72414 2.49943 6.03333 2.50004H13.9667C14.2773 2.49788 14.5823 2.58256 14.8473 2.74453C15.1124 2.9065 15.3269 3.13931 15.4667 3.41671L17.5 7.50004"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10 2.5V7.5" stroke="#A8ABAE" stroke-width="1.4"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        My package</a>
                                    {{-- <a class="dropdown-item" href="{{route('user.favorites')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.33203 18.3333H14.9987C15.4407 18.3333 15.8646 18.1577 16.1772 17.8451C16.4898 17.5326 16.6654 17.1087 16.6654 16.6666V5.83329L12.4987 1.66663H4.9987C4.55667 1.66663 4.13275 1.84222 3.82019 2.15478C3.50763 2.46734 3.33203 2.89127 3.33203 3.33329V4.99996"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M11.668 1.66663V4.99996C11.668 5.44199 11.8436 5.86591 12.1561 6.17847C12.4687 6.49103 12.8926 6.66663 13.3346 6.66663H16.668"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.574 8.91662C8.28934 8.63239 7.92648 8.43938 7.53169 8.3622C7.1369 8.28503 6.72807 8.32718 6.35733 8.48329C6.11566 8.58329 5.89066 8.73329 5.70733 8.92496L5.41566 9.20829L5.124 8.92496C4.84097 8.641 4.48002 8.44744 4.08689 8.36882C3.69376 8.29019 3.28613 8.33003 2.91566 8.48329C2.66566 8.58329 2.449 8.73329 2.25733 8.92496C1.46566 9.70829 1.424 11.0333 2.424 12.0416L5.41566 15L8.41566 12.0416C9.41566 11.0333 9.36566 9.70829 8.574 8.92496V8.91662Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        My favorites (1)</a> --}}
                                     
                                    {{-- <a class="dropdown-item" href="{{route('user.reviews')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6.66797 9.99996C7.11 9.99996 7.53392 9.82436 7.84648 9.5118C8.15904 9.19924 8.33464 8.77532 8.33464 8.33329V6.66663H6.66797"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M11.668 9.99996C12.11 9.99996 12.5339 9.82436 12.8465 9.5118C13.159 9.19924 13.3346 8.77532 13.3346 8.33329V6.66663H11.668"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Reviews</a> --}}
                                    <a class="dropdown-item" href="{{route('user.properties')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.082 18.3333H14.9987C15.4407 18.3333 15.8646 18.1577 16.1772 17.8451C16.4898 17.5326 16.6654 17.1087 16.6654 16.6666V5.83329L12.4987 1.66663H4.9987C4.55667 1.66663 4.13275 1.84222 3.82019 2.15478C3.50763 2.46734 3.33203 2.89127 3.33203 3.33329V6.66663"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M11.668 1.66663V4.99996C11.668 5.44199 11.8436 5.86591 12.1561 6.17847C12.4687 6.49103 12.8926 6.66663 13.3346 6.66663H16.668"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M2.49828 10.9167C2.24146 11.0649 2.02884 11.279 1.88235 11.5368C1.73587 11.7946 1.66082 12.0868 1.66494 12.3833V15.0833C1.65529 15.3802 1.72514 15.6742 1.86726 15.935C2.00937 16.1958 2.2186 16.4139 2.47328 16.5667L4.99828 18.0833C5.25385 18.2356 5.5455 18.3166 5.84297 18.3181C6.14044 18.3195 6.43288 18.2414 6.68994 18.0917L9.16494 16.5833C9.42176 16.4351 9.63438 16.221 9.78087 15.9632C9.92735 15.7054 10.0024 15.4132 9.99828 15.1167V12.4167C10.0079 12.1198 9.93808 11.8258 9.79596 11.565C9.65385 11.3042 9.44462 11.0861 9.18994 10.9333L6.66494 9.41666C6.40937 9.26442 6.11771 9.18337 5.82025 9.1819C5.52278 9.18044 5.23033 9.25862 4.97328 9.40832L2.49828 10.9167Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5.83203 14.1666V18.3333" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M9.7513 11.8334L5.83464 14.1667L1.91797 11.8334"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        My properties
                                    </a>
                                    <a class="dropdown-item " href="{{route('user.property.add')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9987 4.16663L12.987 2.15496C12.6745 1.84238 12.2507 1.66672 11.8087 1.66663H4.9987C4.55667 1.66663 4.13275 1.84222 3.82019 2.15478C3.50763 2.46734 3.33203 2.89127 3.33203 3.33329V16.6666C3.33203 17.1087 3.50763 17.5326 3.82019 17.8451C4.13275 18.1577 4.55667 18.3333 4.9987 18.3333H14.9987C15.4407 18.3333 15.8646 18.1577 16.1772 17.8451C16.4898 17.5326 16.6654 17.1087 16.6654 16.6666"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M17.8168 10.5217C18.1487 10.1897 18.3352 9.73947 18.3352 9.27C18.3352 8.80054 18.1487 8.3503 17.8168 8.01834C17.4848 7.68637 17.0346 7.49988 16.5651 7.49988C16.0956 7.49988 15.6454 7.68637 15.3134 8.01834L11.9718 11.3617C11.7736 11.5597 11.6286 11.8044 11.5501 12.0733L10.8526 14.465C10.8317 14.5367 10.8304 14.6127 10.849 14.6851C10.8675 14.7574 10.9052 14.8235 10.958 14.8763C11.0108 14.9291 11.0768 14.9668 11.1492 14.9853C11.2216 15.0038 11.2976 15.0026 11.3693 14.9817L13.7609 14.2842C14.0298 14.2057 14.2746 14.0606 14.4726 13.8625L17.8168 10.5217Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M6.66797 15H7.5013" stroke="#A8ABAE" stroke-width="1.4"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Add property
                                    </a> 
                                    {{-- <a class="dropdown-item " href="{{route('user.property.enquiries')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6.66797 9.99996C7.11 9.99996 7.53392 9.82436 7.84648 9.5118C8.15904 9.19924 8.33464 8.77532 8.33464 8.33329V6.66663H6.66797"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M11.668 9.99996C12.11 9.99996 12.5339 9.82436 12.8465 9.5118C13.159 9.19924 13.3346 8.77532 13.3346 8.33329V6.66663H11.668"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Enquiries
                                    </a>  --}}
                                    <a class="dropdown-item" href="{{route('user.logout')}}">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H7.5"
                                                stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.332 14.1667L17.4987 10L13.332 5.83337" stroke="#A8ABAE"
                                                stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M17.5 10H7.5" stroke="#A8ABAE" stroke-width="1.4"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Logout</a>
                                </div>
                            </div>
                            
                            @endauth

                            @guest('user')
                                <div class="btn-add">
                                    <a class="tf-btn style-border pd-23" href="#modalLogin" data-bs-toggle="modal" >
                                        Post Property
                                        <span class="text-danger ps-3 pe-3 bg-warning rounded-4">Free</span>
                                    </a>
                                </div>
                                {{-- <div class="box-user tf-action-btns">
                                    <div class="user ">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.749 6C15.749 6.99456 15.3539 7.94839 14.6507 8.65165C13.9474 9.35491 12.9936 9.75 11.999 9.75C11.0044 9.75 10.0506 9.35491 9.34735 8.65165C8.64409 7.94839 8.249 6.99456 8.249 6C8.249 5.00544 8.64409 4.05161 9.34735 3.34835C10.0506 2.64509 11.0044 2.25 11.999 2.25C12.9936 2.25 13.9474 2.64509 14.6507 3.34835C15.3539 4.05161 15.749 5.00544 15.749 6ZM4.5 20.118C4.53213 18.1504 5.33634 16.2742 6.73918 14.894C8.14202 13.5139 10.0311 12.7405 11.999 12.7405C13.9669 12.7405 15.856 13.5139 17.2588 14.894C18.6617 16.2742 19.4659 18.1504 19.498 20.118C17.1454 21.1968 14.5871 21.7535 11.999 21.75C9.323 21.75 6.783 21.166 4.5 20.118Z"
                                                stroke="#2C2E33" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="d-flex wrap-login">
                                        <a href="#modalLogin" data-bs-toggle="modal">login</a>
                                        <span>/</span>
                                        <a href="#modalRegister" data-bs-toggle="modal">register </a>
                                    </div>
                                </div> --}}
                            @endguest
                            <div class="mobile-button" data-bs-toggle="offcanvas" data-bs-target="#menu-mobile"
                                aria-controls="menu-mobile">
                                <i class="icon-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- /.header -->