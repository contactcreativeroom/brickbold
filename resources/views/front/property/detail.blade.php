@extends('front.layouts.app')
{{-- <link rel="stylesheet" type="text/css" href="{{url('frontend/css/map.min.css')}}" /> --}}
@section('content')
    <!-- flat-title -->
    <section class="flat-title ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-inner ">
                        <ul class="breadcrumb">
                            <li><a class="home fw-6 text-color-3" href="{{route('home')}}">Home</a></li>
                            <li>Property Listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /flat-title -->

    <!-- .main-content -->
    <div class="main-content">
        <!-- section-property-detail -->
        <section class="section-property-detail style-2 ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="swiper sw-thumbs-sigle " data-preview="1" data-space="0" data-speed="1000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" data-fancybox="gallery"
                                        class="image-wrap relative d-block">
                                        <img class="lazyload" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}"
                                            src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" alt="" style="height:500px;">
                                        <div class="tag-property ">
                                            <div class="icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.875 13.125L6.17417 8.82583C6.34828 8.65172 6.55498 8.51361 6.78246 8.41938C7.00995 8.32515 7.25377 8.27665 7.5 8.27665C7.74623 8.27665 7.99005 8.32515 8.21754 8.41938C8.44502 8.51361 8.65172 8.65172 8.82583 8.82583L13.125 13.125M11.875 11.875L13.0492 10.7008C13.2233 10.5267 13.43 10.3886 13.6575 10.2944C13.885 10.2001 14.1288 10.1516 14.375 10.1516C14.6212 10.1516 14.865 10.2001 15.0925 10.2944C15.32 10.3886 15.5267 10.5267 15.7008 10.7008L18.125 13.125M3.125 16.25H16.875C17.2065 16.25 17.5245 16.1183 17.7589 15.8839C17.9933 15.6495 18.125 15.3315 18.125 15V5C18.125 4.66848 17.9933 4.35054 17.7589 4.11612C17.5245 3.8817 17.2065 3.75 16.875 3.75H3.125C2.79348 3.75 2.47554 3.8817 2.24112 4.11612C2.0067 4.35054 1.875 4.66848 1.875 5V15C1.875 15.3315 2.0067 15.6495 2.24112 15.8839C2.47554 16.1183 2.79348 16.25 3.125 16.25ZM11.875 6.875H11.8817V6.88167H11.875V6.875ZM12.1875 6.875C12.1875 6.95788 12.1546 7.03737 12.096 7.09597C12.0374 7.15458 11.9579 7.1875 11.875 7.1875C11.7921 7.1875 11.7126 7.15458 11.654 7.09597C11.5954 7.03737 11.5625 6.95788 11.5625 6.875C11.5625 6.79212 11.5954 6.71263 11.654 6.65403C11.7126 6.59542 11.7921 6.5625 11.875 6.5625C11.9579 6.5625 12.0374 6.59542 12.096 6.65403C12.1546 6.71263 12.1875 6.79212 12.1875 6.875Z"
                                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                            <div class="text-16 text-white fw-6 lh-20">1/{{$row?->images->count()}} Photos</div>
                                        </div>
                                    </a>
                                </div>
                                @if (isset($row->images))   
                                @foreach($row->images as $imageKey => $imageVal)
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" data-fancybox="gallery"
                                        class="image-wrap d-block">
                                        <img class="lazyload" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $imageVal->image) }}" src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $imageVal->image) }}" alt="" style="height:500px;">
                                    </a>
                                </div> 
                                @endforeach
                                @endif
                            </div>
                            <div class="swiper-button-prev sw-button style-2 sw-thumbs-prev">
                                <i class="icon-arrow-left-1"></i>
                            </div>
                            <div class="swiper-button-next sw-button style-2 sw-thumbs-next">
                                <i class="icon-arrow-right-1"></i>
                            </div>
                        </div>
                        <div class="wg-property box-overview style-2">
                            <div class="heading flex justify-between">
                                <div class="title text-5 fw-6 text-color-heading">
                                    {{$row->title}}
                                </div>
                                <div class="price text-5 fw-6 text-color-heading">
                                    {{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}
                                    {{-- <span class="h5 lh-30 fw-4 text-color-default">/month</span> --}}
                                </div>
                            </div>
                            <div class="info flex justify-between">
                                <div class="feature">
                                    <p class="location text-1 flex items-center gap-10">
                                        <i class="icon-location"></i>{{$row->location}}, {{$row->state}}, {{$row->city}} {{$row->zip_code}}
                                    </p>
                                    <ul class="meta-list flex">
                                        <li class="text-1 flex"><span>{{$row->bedroom}}</span>Bed</li>
                                        <li class="text-1 flex"><span>{{$row->bathroom}}</span>Bath</li>
                                        <li class="text-1 flex"><span>{{$row->plot_area}}</span>{{$row->plot_type? $row->plot_type : 'sqft'}}</li>
                                    </ul>
                                </div>
                                @if (Auth::guard('user')->user())
                                    <div class="action action-button-list">
                                        <ul class="list-action">
                                            {{-- <li>
                                                <a href="{{route('user.favorite.toggle', $row->id)}}" class="{{ $row->favorites()->where('user_id', Auth::guard('user')->user()->id)->count() > 0 ? 'selectedClass' : '' }}">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.75 6.1875C15.75 4.32375 14.1758 2.8125 12.234 2.8125C10.7828 2.8125 9.53625 3.657 9 4.86225C8.46375 3.657 7.21725 2.8125 5.76525 2.8125C3.825 2.8125 2.25 4.32375 2.25 6.1875C2.25 11.6025 9 15.1875 9 15.1875C9 15.1875 15.75 11.6025 15.75 6.1875Z" stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li> --}}
                                            <li><a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.625 15.75L2.25 12.375M2.25 12.375L5.625 9M2.25 12.375H12.375M12.375 2.25L15.75 5.625M15.75 5.625L12.375 9M15.75 5.625H5.625"
                                                            stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a></li>
                                            <li><a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.04 10.3718C4.86 10.3943 4.68 10.4183 4.5 10.4438M5.04 10.3718C7.66969 10.0418 10.3303 10.0418 12.96 10.3718M5.04 10.3718L4.755 13.5M12.96 10.3718C13.14 10.3943 13.32 10.4183 13.5 10.4438M12.96 10.3718L13.245 13.5L13.4167 15.3923C13.4274 15.509 13.4136 15.6267 13.3762 15.7378C13.3388 15.8489 13.2787 15.951 13.1996 16.0376C13.1206 16.1242 13.0244 16.1933 12.9172 16.2407C12.8099 16.288 12.694 16.3125 12.5767 16.3125H5.42325C4.92675 16.3125 4.53825 15.8865 4.58325 15.3923L4.755 13.5M4.755 13.5H3.9375C3.48995 13.5 3.06072 13.3222 2.74426 13.0057C2.42779 12.6893 2.25 12.2601 2.25 11.8125V7.092C2.25 6.28125 2.826 5.58075 3.62775 5.46075C4.10471 5.3894 4.58306 5.32764 5.0625 5.2755M13.2435 13.5H14.0618C14.2834 13.5001 14.5029 13.4565 14.7078 13.3718C14.9126 13.287 15.0987 13.1627 15.2555 13.006C15.4123 12.8493 15.5366 12.6632 15.6215 12.4585C15.7063 12.2537 15.75 12.0342 15.75 11.8125V7.092C15.75 6.28125 15.174 5.58075 14.3723 5.46075C13.8953 5.38941 13.4169 5.32764 12.9375 5.2755M12.9375 5.2755C10.3202 4.99073 7.67978 4.99073 5.0625 5.2755M12.9375 5.2755V2.53125C12.9375 2.0655 12.5595 1.6875 12.0938 1.6875H5.90625C5.4405 1.6875 5.0625 2.0655 5.0625 2.53125V5.2755M13.5 7.875H13.506V7.881H13.5V7.875ZM11.25 7.875H11.256V7.881H11.25V7.875Z"
                                                            stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a></li>
                                            <li>
                                                <a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.41251 8.18028C5.23091 7.85351 4.94594 7.5963 4.60234 7.44902C4.25874 7.30173 3.87596 7.27271 3.51408 7.36651C3.1522 7.46032 2.83171 7.67163 2.60293 7.96728C2.37414 8.26293 2.25 8.62619 2.25 9.00003C2.25 9.37387 2.37414 9.73712 2.60293 10.0328C2.83171 10.3284 3.1522 10.5397 3.51408 10.6335C3.87596 10.7273 4.25874 10.6983 4.60234 10.551C4.94594 10.4038 5.23091 10.1465 5.41251 9.81978M5.41251 8.18028C5.54751 8.42328 5.62476 8.70228 5.62476 9.00003C5.62476 9.29778 5.54751 9.57753 5.41251 9.81978M5.41251 8.18028L12.587 4.19478M5.41251 9.81978L12.587 13.8053M12.587 4.19478C12.6922 4.39288 12.8358 4.56803 13.0095 4.70998C13.1832 4.85192 13.3834 4.95782 13.5985 5.02149C13.8135 5.08515 14.0392 5.1053 14.2621 5.08075C14.4851 5.0562 14.7009 4.98745 14.897 4.87853C15.093 4.7696 15.2654 4.62267 15.404 4.44634C15.5427 4.27001 15.6448 4.06781 15.7043 3.85157C15.7639 3.63532 15.7798 3.40937 15.751 3.18693C15.7222 2.96448 15.6494 2.75 15.5368 2.55603C15.3148 2.17378 14.9518 1.89388 14.5256 1.77649C14.0995 1.6591 13.6443 1.71359 13.2579 1.92824C12.8715 2.1429 12.5848 2.50059 12.4593 2.92442C12.3339 3.34826 12.3797 3.80439 12.587 4.19478ZM12.587 13.8053C12.4794 13.9991 12.4109 14.2121 12.3856 14.4324C12.3603 14.6526 12.3787 14.8757 12.4396 15.0888C12.5005 15.3019 12.6028 15.501 12.7406 15.6746C12.8784 15.8482 13.0491 15.993 13.2429 16.1007C13.4367 16.2083 13.6498 16.2767 13.87 16.302C14.0902 16.3273 14.3133 16.309 14.5264 16.2481C14.7396 16.1872 14.9386 16.0849 15.1122 15.9471C15.2858 15.8092 15.4306 15.6386 15.5383 15.4448C15.7557 15.0534 15.8087 14.5917 15.6857 14.1613C15.5627 13.7308 15.2737 13.3668 14.8824 13.1494C14.491 12.932 14.0293 12.879 13.5989 13.002C13.1684 13.125 12.8044 13.4139 12.587 13.8053Z"
                                                            stroke="#5C5E61" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                                
                            </div>
                            <div class="info-detail ">
                                <div class="wrap-box">
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-HouseLine"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">ID:</div>
                                            <div class="text-1 text-color-heading">#{{ App\Helper\Helper::propertyid($row->id) }}</div>
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Bathtub"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Bathrooms:</div>
                                            <div class="text-1 text-color-heading">{{$row->bathroom}} Rooms</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-box">
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-SlidersHorizontal"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Type:</div>
                                            <div class="text-1 text-color-heading">{{config('constants.TYPE')[$row->type]}}</div>
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Crop"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Land Size:</div>
                                            <div class="text-1 text-color-heading">{{$row->plot_area}} {{$row->plot_type? $row->plot_type : 'sqft'}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-box">
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Garage-1"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Garages</div>
                                            <div class="text-1 text-color-heading">{{$row->plot_area}}</div>
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Hammer"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Year Built:</div>
                                            <div class="text-1 text-color-heading">{{config('constants.BUILD_YEAR')[$row->build_year]}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-box">
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Bed-2"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Bedrooms:</div>
                                            <div class="text-1 text-color-heading">{{$row->bedroom}} Rooms</div>
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Ruler"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Builtup Area:</div>
                                            <div class="text-1 text-color-heading">{{$row->builtup_area}} sqft</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="tf-btn bg-color-primary pd-21 fw-6">Ask a question</a>
                        </div>
                        @if ($row->video_link)
                        <div class=" wg-property video spacing-2">
                            <div class="wg-title text-11 fw-6 text-color-heading">
                                Video
                            </div>
                            <div class="widget-video">
                                <img class="lazyload" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}"
                                    src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" alt="">
                                <a href="{{$row->video_link}}" class="popup-youtube">
                                    <i class="icon-play"></i></a>
                            </div>
                        </div>
                        @endif
                        
                        <div class="wg-property box-property-detail  spacing-1">
                            <div class="wg-title text-11 fw-6 text-color-heading">
                                Property Details
                            </div>
                            <div class="content">
                                <p class="description text-1 mb-10">{{$row->description}}</p>
                                <a href="javascript:void(0);" class="tf-btn-link style-hover-rotate">
                                    <span>Read More
                                    </span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2348_5612)">
                                            <path
                                                d="M1.66732 9.99999C1.66732 14.6024 5.39828 18.3333 10.0007 18.3333C14.603 18.3333 18.334 14.6024 18.334 9.99999C18.334 5.39762 14.603 1.66666 10.0007 1.66666C5.39828 1.66666 1.66732 5.39762 1.66732 9.99999Z"
                                                stroke="#F1913D" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10 6.66666L10 13.3333" stroke="#F1913D" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.66732 10L10.0007 13.3333L13.334 10" stroke="#F1913D"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2348_5612">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(20) rotate(90)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="box">
                                <ul>
                                    <li class="flex">
                                        <p class="fw-6">ID</p>
                                        <p>#{{ App\Helper\Helper::propertyid($row->id) }}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Price</p>
                                        <p>{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Status</p>
                                        <p>{{config('constants.FOR_TYPE')[$row->for_type]}}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Size</p>
                                        <p>{{$row->plot_area}} {{$row->plot_type? $row->plot_type : 'sqft'}} </p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Builtup Area</p>
                                        <p>{{$row->builtup_area}} sqft </p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Carpet Area</p>
                                        <p>{{$row->carpet_area}} sqft </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="flex">
                                        <p class="fw-6">Rooms</p>
                                        <p>{{$row->bathroom + $row->bedroom}}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Baths</p>
                                        <p>{{$row->bathroom}}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Beds</p>
                                        <p>{{$row->bedroom}}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Year buit</p>
                                        <p>{{config('constants.BUILD_YEAR')[$row->build_year]}}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Type</p>
                                        <p>{{config('constants.TYPE')[$row->type]}}</p>
                                    </li>
                                    <li class="flex">
                                        <p class="fw-6">Balcony</p>
                                        <p>{{$row->balcony}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wg-property box-amenities spacing-3">
                            <div class="wg-title text-11 fw-6 text-color-heading">
                                Amenities And Features
                            </div>
                            @php
                                $amenities = explode(',', $row->amenities);
                                $boxCount = 3;
                                $boxes = array_fill(0, $boxCount, []);
                                foreach ($amenities as $index => $amenitie) {
                                    $boxIndex = $index % $boxCount;
                                    $boxes[$boxIndex][] = trim($amenitie);
                                }
                            @endphp
                            <div class="wrap-feature">
                                @foreach ($boxes as $box)
                                    <div class="box-feature">
                                        <ul>
                                            @foreach ($box as $amenitie)
                                                <li class="feature-item">
                                                    {{ $amenitie }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="wg-property box-amenities spacing-3">
                            <div class="wg-title text-11 fw-6 text-color-heading">
                                Addtional Room
                            </div>
                            
                            <div class="wrap-feature">
                                <div class="box-feature">
                                    <ul>
                                    @foreach (explode(',', $row->additional) as $addtional)
                                        <li class="feature-item">
                                            {{ $addtional }}
                                        </li>
                                    @endforeach 
                                    </ul>
                                </div> 
                            </div>
                        </div>
                        <div class="wg-property single-property-map spacing-9">
                            <div class="wg-title text-11 fw-6 text-color-heading">Get Direction</div>                            
                            <iframe class="map" 
                            {{-- src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d135905.11693909427!2d-73.95165795400088!3d41.17584829642291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1727094281524!5m2!1sen!2s"   --}}
                            
                             src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d135905.11693909427!2d{{$row->longitude}}!3d{{$row->latitude}}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s{{$row->location}}!5m2!1sen!2s"  
    
                            style="border:0;" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe> 
                            {{-- <div id="map"  data-map-zoom="16" data-map-scroll="true" style="height:500px;"></div> --}}
                            <div class="info-map">
                                <ul class="box-left">
                                    <li>
                                        <span class="label fw-6">Address</span>
                                        <div class="text text-variant-1">{{$row->location}}</div>
                                    </li>
                                    
                                    <li>
                                        <span class="label fw-6">State/county</span>
                                        <div class="text text-variant-1">{{$row->state}}</div>
                                    </li>
                                </ul>
                                <ul class="box-right">
                                    <li>
                                        <span class="label fw-6">City</span>
                                        <div class="text text-variant-1">{{$row->city}}</div>
                                    </li>
                                    <li>
                                        <span class="label fw-6">Postal code</span>
                                        <div class="text text-variant-1">{{$row->zip_code}}</div>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                       
                        {{-- <div class="wg-property mb-0 box-comment spacing-8">
                            <div class="wrap-comment">
                                <h4 class="title">Guest Reviews</h4>
                                <ul class="comment-list">
                                    <li>
                                        <div class="comment-item">
                                            <div class="image-wrap">
                                                <img src="{{ url('frontend/images/avatar/avatar-1.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="user">
                                                    <div class="author ">
                                                        <h6 class="name mb-5">Viola Lucas</h6>
                                                        <div class="time">
                                                            August 13, 2023
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                    </div>
                                                </div>
                                                <div class="comment">
                                                    <p>It's really easy to use and it is exactly what I am looking
                                                        for.
                                                        A lot of good looking templates & it's highly customizable.
                                                        Live
                                                        support is helpful, solved my issue in no time.</p>
                                                    <div class="group-image">
                                                        <img src="{{ url('frontend/images/blog/comment-1.jpg')}}" alt="">
                                                        <img src="{{ url('frontend/images/blog/comment-2.jpg')}}" alt="">
                                                        <img src="{{ url('frontend/images/blog/comment-3.jpg')}}" alt="">
                                                    </div>
                                                    <div class="action action-button-list">
                                                        <div class="action-item action-button btn-action">
                                                            <div class="icons">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.375 6.75H10.6875M4.66949 14.0625C4.66124 14.025 4.64849 13.9875 4.63049 13.9515C4.18724 13.0515 3.93749 12.039 3.93749 10.9687C3.93587 9.89238 4.19282 8.83136 4.68674 7.875M4.66949 14.0625C4.72649 14.3362 4.53224 14.625 4.23824 14.625H3.55724C2.89049 14.625 2.27249 14.2365 2.07824 13.599C1.82399 12.7665 1.68749 11.8837 1.68749 10.9687C1.68749 9.804 1.90874 8.69175 2.31074 7.67025C2.54024 7.08975 3.12524 6.75 3.74999 6.75H4.53974C4.89374 6.75 5.09849 7.167 4.91474 7.47C4.83434 7.60234 4.7578 7.73742 4.68674 7.875M4.66949 14.0625H5.63999C6.0027 14.0623 6.36307 14.1205 6.70724 14.235L9.04274 15.015C9.38691 15.1295 9.74728 15.1877 10.11 15.1875H13.122C13.5855 15.1875 14.0347 15.0022 14.3257 14.6407C15.6143 13.0434 16.3156 11.0523 16.3125 9C16.3125 8.6745 16.2952 8.35275 16.2615 8.03625C16.1797 7.2705 15.4905 6.75 14.721 6.75H12.3765C11.913 6.75 11.6332 6.207 11.8327 5.7885C12.191 5.03444 12.3763 4.20985 12.375 3.375C12.375 2.92745 12.1972 2.49823 11.8807 2.18176C11.5643 1.86529 11.135 1.6875 10.6875 1.6875C10.5383 1.6875 10.3952 1.74676 10.2897 1.85225C10.1843 1.95774 10.125 2.10082 10.125 2.25V2.72475C10.125 3.1545 10.0425 3.57975 9.88349 3.97875C9.65549 4.54875 9.18599 4.97625 8.64374 5.265C7.81128 5.7092 7.0807 6.32228 6.49874 7.065C6.12524 7.5405 5.57924 7.875 4.97474 7.875H4.68674"
                                                                        stroke="#A8ABAE" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                            <div class="text-2">Useful</div>
                                                        </div>
                                                        <div class="action-item action-button btn-action">
                                                            <div class="icons">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.62501 11.25H7.31251M13.3305 3.9375C13.3388 3.975 13.3515 4.0125 13.3695 4.0485C13.8128 4.9485 14.0625 5.961 14.0625 7.03125C14.0641 8.10762 13.8072 9.16864 13.3133 10.125M13.3305 3.9375C13.2735 3.66375 13.4678 3.375 13.7618 3.375H14.4428C15.1095 3.375 15.7275 3.7635 15.9218 4.401C16.176 5.2335 16.3125 6.11625 16.3125 7.03125C16.3125 8.196 16.0913 9.30825 15.6893 10.3298C15.4598 10.9103 14.8748 11.25 14.25 11.25H13.4603C13.1063 11.25 12.9015 10.833 13.0853 10.53C13.1657 10.3977 13.2422 10.2626 13.3133 10.125M13.3305 3.9375H12.36C11.9973 3.93772 11.6369 3.87948 11.2928 3.765L8.95726 2.985C8.61309 2.87053 8.25272 2.81228 7.89001 2.8125H4.87801C4.41451 2.8125 3.96526 2.99775 3.67426 3.35925C2.38572 4.95658 1.68441 6.94774 1.68751 9C1.68751 9.3255 1.70476 9.64725 1.73851 9.96375C1.82026 10.7295 2.50951 11.25 3.27901 11.25H5.62351C6.08701 11.25 6.36676 11.793 6.16726 12.2115C5.80897 12.9656 5.6237 13.7902 5.62501 14.625C5.62501 15.0726 5.8028 15.5018 6.11927 15.8182C6.43574 16.1347 6.86496 16.3125 7.31251 16.3125C7.46169 16.3125 7.60477 16.2532 7.71026 16.1477C7.81575 16.0423 7.87501 15.8992 7.87501 15.75V15.2753C7.87501 14.8455 7.95751 14.4203 8.11651 14.0213C8.34451 13.4513 8.81401 13.0238 9.35626 12.735C10.1887 12.2908 10.9193 11.6777 11.5013 10.935C11.8748 10.4595 12.4208 10.125 13.0253 10.125H13.3133"
                                                                        stroke="#A8ABAE" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                            <div class="text-2">Not helpful</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-item">
                                            <div class="image-wrap">
                                                <img src="{{ url('frontend/images/avatar/avatar-2.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="user">
                                                    <div class="author ">
                                                        <h6 class="name mb-5">Viola Lucas</h6>
                                                        <div class="time">
                                                            August 13, 2023
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                    </div>
                                                </div>
                                                <div class="comment">
                                                    <p>It's really easy to use and it is exactly what I am looking
                                                        for.
                                                        A lot of good looking templates & it's highly customizable.
                                                        Live
                                                        support is helpful, solved my issue in no time.</p>
                                                    <div class="action action-button-list">
                                                        <div class="action-item action-button btn-action">
                                                            <div class="icons">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.375 6.75H10.6875M4.66949 14.0625C4.66124 14.025 4.64849 13.9875 4.63049 13.9515C4.18724 13.0515 3.93749 12.039 3.93749 10.9687C3.93587 9.89238 4.19282 8.83136 4.68674 7.875M4.66949 14.0625C4.72649 14.3362 4.53224 14.625 4.23824 14.625H3.55724C2.89049 14.625 2.27249 14.2365 2.07824 13.599C1.82399 12.7665 1.68749 11.8837 1.68749 10.9687C1.68749 9.804 1.90874 8.69175 2.31074 7.67025C2.54024 7.08975 3.12524 6.75 3.74999 6.75H4.53974C4.89374 6.75 5.09849 7.167 4.91474 7.47C4.83434 7.60234 4.7578 7.73742 4.68674 7.875M4.66949 14.0625H5.63999C6.0027 14.0623 6.36307 14.1205 6.70724 14.235L9.04274 15.015C9.38691 15.1295 9.74728 15.1877 10.11 15.1875H13.122C13.5855 15.1875 14.0347 15.0022 14.3257 14.6407C15.6143 13.0434 16.3156 11.0523 16.3125 9C16.3125 8.6745 16.2952 8.35275 16.2615 8.03625C16.1797 7.2705 15.4905 6.75 14.721 6.75H12.3765C11.913 6.75 11.6332 6.207 11.8327 5.7885C12.191 5.03444 12.3763 4.20985 12.375 3.375C12.375 2.92745 12.1972 2.49823 11.8807 2.18176C11.5643 1.86529 11.135 1.6875 10.6875 1.6875C10.5383 1.6875 10.3952 1.74676 10.2897 1.85225C10.1843 1.95774 10.125 2.10082 10.125 2.25V2.72475C10.125 3.1545 10.0425 3.57975 9.88349 3.97875C9.65549 4.54875 9.18599 4.97625 8.64374 5.265C7.81128 5.7092 7.0807 6.32228 6.49874 7.065C6.12524 7.5405 5.57924 7.875 4.97474 7.875H4.68674"
                                                                        stroke="#A8ABAE" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                            <div class="text-2">Useful</div>
                                                        </div>
                                                        <div class="action-item action-button btn-action">
                                                            <div class="icons">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.62501 11.25H7.31251M13.3305 3.9375C13.3388 3.975 13.3515 4.0125 13.3695 4.0485C13.8128 4.9485 14.0625 5.961 14.0625 7.03125C14.0641 8.10762 13.8072 9.16864 13.3133 10.125M13.3305 3.9375C13.2735 3.66375 13.4678 3.375 13.7618 3.375H14.4428C15.1095 3.375 15.7275 3.7635 15.9218 4.401C16.176 5.2335 16.3125 6.11625 16.3125 7.03125C16.3125 8.196 16.0913 9.30825 15.6893 10.3298C15.4598 10.9103 14.8748 11.25 14.25 11.25H13.4603C13.1063 11.25 12.9015 10.833 13.0853 10.53C13.1657 10.3977 13.2422 10.2626 13.3133 10.125M13.3305 3.9375H12.36C11.9973 3.93772 11.6369 3.87948 11.2928 3.765L8.95726 2.985C8.61309 2.87053 8.25272 2.81228 7.89001 2.8125H4.87801C4.41451 2.8125 3.96526 2.99775 3.67426 3.35925C2.38572 4.95658 1.68441 6.94774 1.68751 9C1.68751 9.3255 1.70476 9.64725 1.73851 9.96375C1.82026 10.7295 2.50951 11.25 3.27901 11.25H5.62351C6.08701 11.25 6.36676 11.793 6.16726 12.2115C5.80897 12.9656 5.6237 13.7902 5.62501 14.625C5.62501 15.0726 5.8028 15.5018 6.11927 15.8182C6.43574 16.1347 6.86496 16.3125 7.31251 16.3125C7.46169 16.3125 7.60477 16.2532 7.71026 16.1477C7.81575 16.0423 7.87501 15.8992 7.87501 15.75V15.2753C7.87501 14.8455 7.95751 14.4203 8.11651 14.0213C8.34451 13.4513 8.81401 13.0238 9.35626 12.735C10.1887 12.2908 10.9193 11.6777 11.5013 10.935C11.8748 10.4595 12.4208 10.125 13.0253 10.125H13.3133"
                                                                        stroke="#A8ABAE" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                            <div class="text-2">Not helpful</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-item">
                                            <div class="image-wrap">
                                                <img src="{{ url('frontend/images/avatar/avatar-3.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="user">
                                                    <div class="author ">
                                                        <h6 class="name mb-5">Viola Lucas</h6>
                                                        <div class="time">
                                                            August 13, 2023
                                                        </div>
                                                    </div>
                                                    <div class="ratings">
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                        <i class="icon-start"></i>
                                                    </div>
                                                </div>
                                                <div class="comment">
                                                    <p>It's really easy to use and it is exactly what I am looking
                                                        for.
                                                        A lot of good looking templates & it's highly customizable.
                                                        Live
                                                        support is helpful, solved my issue in no time.</p>
                                                    <div class="action action-button-list">
                                                        <div class="action-item action-button btn-action">
                                                            <div class="icons">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.375 6.75H10.6875M4.66949 14.0625C4.66124 14.025 4.64849 13.9875 4.63049 13.9515C4.18724 13.0515 3.93749 12.039 3.93749 10.9687C3.93587 9.89238 4.19282 8.83136 4.68674 7.875M4.66949 14.0625C4.72649 14.3362 4.53224 14.625 4.23824 14.625H3.55724C2.89049 14.625 2.27249 14.2365 2.07824 13.599C1.82399 12.7665 1.68749 11.8837 1.68749 10.9687C1.68749 9.804 1.90874 8.69175 2.31074 7.67025C2.54024 7.08975 3.12524 6.75 3.74999 6.75H4.53974C4.89374 6.75 5.09849 7.167 4.91474 7.47C4.83434 7.60234 4.7578 7.73742 4.68674 7.875M4.66949 14.0625H5.63999C6.0027 14.0623 6.36307 14.1205 6.70724 14.235L9.04274 15.015C9.38691 15.1295 9.74728 15.1877 10.11 15.1875H13.122C13.5855 15.1875 14.0347 15.0022 14.3257 14.6407C15.6143 13.0434 16.3156 11.0523 16.3125 9C16.3125 8.6745 16.2952 8.35275 16.2615 8.03625C16.1797 7.2705 15.4905 6.75 14.721 6.75H12.3765C11.913 6.75 11.6332 6.207 11.8327 5.7885C12.191 5.03444 12.3763 4.20985 12.375 3.375C12.375 2.92745 12.1972 2.49823 11.8807 2.18176C11.5643 1.86529 11.135 1.6875 10.6875 1.6875C10.5383 1.6875 10.3952 1.74676 10.2897 1.85225C10.1843 1.95774 10.125 2.10082 10.125 2.25V2.72475C10.125 3.1545 10.0425 3.57975 9.88349 3.97875C9.65549 4.54875 9.18599 4.97625 8.64374 5.265C7.81128 5.7092 7.0807 6.32228 6.49874 7.065C6.12524 7.5405 5.57924 7.875 4.97474 7.875H4.68674"
                                                                        stroke="#A8ABAE" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                            <div class="text-2">Useful</div>
                                                        </div>
                                                        <div class="action-item action-button btn-action">
                                                            <div class="icons">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.62501 11.25H7.31251M13.3305 3.9375C13.3388 3.975 13.3515 4.0125 13.3695 4.0485C13.8128 4.9485 14.0625 5.961 14.0625 7.03125C14.0641 8.10762 13.8072 9.16864 13.3133 10.125M13.3305 3.9375C13.2735 3.66375 13.4678 3.375 13.7618 3.375H14.4428C15.1095 3.375 15.7275 3.7635 15.9218 4.401C16.176 5.2335 16.3125 6.11625 16.3125 7.03125C16.3125 8.196 16.0913 9.30825 15.6893 10.3298C15.4598 10.9103 14.8748 11.25 14.25 11.25H13.4603C13.1063 11.25 12.9015 10.833 13.0853 10.53C13.1657 10.3977 13.2422 10.2626 13.3133 10.125M13.3305 3.9375H12.36C11.9973 3.93772 11.6369 3.87948 11.2928 3.765L8.95726 2.985C8.61309 2.87053 8.25272 2.81228 7.89001 2.8125H4.87801C4.41451 2.8125 3.96526 2.99775 3.67426 3.35925C2.38572 4.95658 1.68441 6.94774 1.68751 9C1.68751 9.3255 1.70476 9.64725 1.73851 9.96375C1.82026 10.7295 2.50951 11.25 3.27901 11.25H5.62351C6.08701 11.25 6.36676 11.793 6.16726 12.2115C5.80897 12.9656 5.6237 13.7902 5.62501 14.625C5.62501 15.0726 5.8028 15.5018 6.11927 15.8182C6.43574 16.1347 6.86496 16.3125 7.31251 16.3125C7.46169 16.3125 7.60477 16.2532 7.71026 16.1477C7.81575 16.0423 7.87501 15.8992 7.87501 15.75V15.2753C7.87501 14.8455 7.95751 14.4203 8.11651 14.0213C8.34451 13.4513 8.81401 13.0238 9.35626 12.735C10.1887 12.2908 10.9193 11.6777 11.5013 10.935C11.8748 10.4595 12.4208 10.125 13.0253 10.125H13.3133"
                                                                        stroke="#A8ABAE" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                            <div class="text-2">Not helpful</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="tf-btn style-border fw-7 pd-1">
                                    <span>View all reivew <i class="icon-arrow-right-2 fw-4
                                        "></i></span>
                                </a>
                            </div>
                            <div class="box-send ">
                                <div class="heading-box">
                                    <h4 class="title fw-7">Add Review</h4>
                                    <p>Your email address will not be published</p>
                                </div>
                                <form class="form-add-review">
                                    <div class="cols">
                                        <fieldset class="name">
                                            <label class="text-1 fw-6 " for="name3">Name</label>
                                            <input type="text" class="tf-input style-2" placeholder="Your Name*"
                                                tabindex="2" aria-required="true" id="name3" name="name" required>
                                        </fieldset>
                                        <fieldset class="email">
                                            <label class="text-1 fw-6" for="email3">Email</label>
                                            <input type="email" class="tf-input style-2" placeholder="Your Email*"
                                                tabindex="2" aria-required="true" id="email3" name="email" required>
                                        </fieldset>
                                    </div>
                                    <div class="checkbox-item style-1">
                                        <label>
                                            <span class="text-1 fw-4">Save your name, email for the next time
                                                review</span>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </div>
                                    <fieldset class="message">
                                        <label class="text-1 fw-6" for="message">Review</label>
                                        <textarea id="message" class="tf-input" name="message" rows="4"
                                            placeholder="Your review" tabindex="4" aria-required="true"
                                            required></textarea>
                                    </fieldset>
                                    <button class="tf-btn bg-color-primary pd-24 fw-7" type="submit">
                                        Post Comment <i class="icon-arrow-right-2 fw-4
                                        "></i>
                                    </button>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class=" tf-sidebar sticky-sidebar ">
                            <form class="form-contact-seller mb-30" method="post" action="{{route('property.enquiry')}}" >
                                @csrf
                                <h4 class="heading-title mb-30">
                                    Contact Sellers
                                </h4>
                                <div class="seller-info">
                                    <div class="avartar">
                                        <img src="{{ App\Helper\Helper::getProfileImage('storage/user/'.$row?->user_id, $row?->user?->profile_image) }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="name">{{$row?->user?->name }}</h6>
                                        <ul class="contact">
                                            <li><i class="icon-phone-1"></i><span>{{$row?->user?->phone }}</span></li>
                                            <li><i class="icon-mail"></i>{{$row?->user?->email }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <fieldset class="mb-12">
                                    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your name" name="name" id="name" value="@if(old('name')!=null){{old('name')}}@endif">
                                    @if($errors->has('name'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </fieldset>
                                <fieldset class="mb-12">
                                    <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" id="email-contact" value="@if(old('email')!=null){{old('email')}}@endif">
                                    @if($errors->has('email'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </fieldset>
                                <fieldset class="mb-12"> 
                                    <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Your phone number" name="phone" id="phone" value="@if(old('phone')!=null){{old('phone')}}@endif">
                                    @if($errors->has('phone'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </fieldset>
                                <fieldset class="mb-30">
                                    <textarea name="message" cols="30" rows="10" placeholder="How can an agent help" id="message1" class="{{ $errors->has('message') ? ' is-invalid' : '' }}">@if(old('message')!=null){{old('message')}}@endif</textarea>
                                    @if($errors->has('message'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif
                                </fieldset>
                                <input type="hidden" name="property_id"  value="{{$row->id}}">
                                <input type="hidden" name="property_slug"  value="{{$row->slug}}">
                                <button type="submit" class="tf-btn bg-color-primary w-full"> Send message</button>
                            </form>
                            <div class=" sidebar-ads mb-30">
                                <div class="image-wrap">
                                    <img class="lazyload" data-src="{{ url('frontend/images/blog/ads.jpg') }}" src="{{ url('frontend/images/blog/ads.jpg') }}"
                                        alt="">
                                </div>
                                <div class="logo relative z-5">
                                    <img src="{{ url('frontend/images/logo/logo-2%402x.png') }}" alt="">
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
                                    <a href="{{ route('contact')}}" class="tf-btn fw-6 bg-color-primary w-full">
                                        Connect with an agent
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section-property-detail -->

        <!-- section-opinion -->
        <section class="section-similar-properties tf-spacing-3 ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section mb-32">
                            <h2 class="title ">Similar Properties</h2>
                        </div>
                        <div class="swiper style-pagination tf-sw-mobile-1" data-screen="991" data-preview="1"
                            data-space="15">
                            <div class="swiper-wrapper tf-layout-mobile-xl  lg-col-3 wrap-agent wow fadeInUp"
                                data-wow-delay=".2s">
                                @foreach ($similarProperties as $similarProperty)
                                    <div class="swiper-slide">
                                    <div class="box-house hover-img">
                                        <div class="image-wrap">
                                            <a href="{{route('property', $similarProperty->slug)}}">
                                                <img class="lazyload" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$similarProperty->id, $similarProperty?->image?->image) }}" src="{{ App\Helper\Helper::getImage('storage/property/'.$similarProperty->id, $similarProperty?->image?->image) }}" alt="">
                                            </a>
                                            <ul class="box-tag flex gap-8 ">
                                                <li class="flat-tag text-4 bg-main fw-6 text-white">Featured</li>
                                                <li class="flat-tag text-4 bg-3 fw-6 text-white">{{config('constants.FOR_TYPE')[$similarProperty->for_type]}}</li>
                                            </ul>
                                            <div class="list-btn flex gap-8 ">
                                                {{-- <a href="{{route('user.favorite.toggle', $similarProperty->id)}}" class="btn-icon save hover-tooltip"><i class="icon-save"></i>
                                                    <span class="tooltip">Add Favorite</span>
                                                </a> --}}
                                                <a href="{{route('property', $similarProperty->slug)}}" class="btn-icon find hover-tooltip"><i class="icon-find-plus"></i>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">
                                                <a href="{{route('property', $similarProperty->slug)}}">{{$similarProperty->title}}</a>

                                            </h5>
                                            <p class="location text-1 flex items-center gap-8">
                                                <i class="icon-location"></i> {{$similarProperty->location}}
                                            </p>
                                            <ul class="meta-list flex">
                                                <li class="text-1 flex"><span>{{$similarProperty->bedroom}}</span>Beds</li>
                                                <li class="text-1 flex"><span>{{$similarProperty->bathroom}}</span>Baths</li>
                                                <li class="text-1 flex"><span>{{$similarProperty->plot_area}}</span>{{$similarProperty->plot_type? $similarProperty->plot_type : 'sqft'}} </li>
                                            </ul>
                                            <div class="bot flex justify-between items-center">
                                                <h5 class="price">
                                                    {{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($similarProperty->price)}}
                                                </h5>
                                                <div class="wrap-btn flex"> 
                                                    <a href="{{route('property', $similarProperty->slug)}}" class="tf-btn style-border pd-4">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="sw-pagination sw-pagination-mb-1 text-center d-lg-none d-block mt-20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section-opinion -->

         @include('front.layouts.pre-footer')

    </div>
    <!-- /main-content -->

@endsection

@push('scripts') 
<script>
var curLong = {{ $row->longitude }} ;
var curLat = {{ $row->latitude }} ;
var locations = [
    {
        coordinates: [{{ $row->longitude }}, {{ $row->latitude }}],
        properties: {
            image: "{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}",
            url: "{{route('property', $row->slug)}}",
            title: "{{ $row->title }}",
            location: "{{ $row->location }}",
            price: "{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}",
            beds: {{ $row->bedroom }},
            baths: {{ $row->bathroom }},
            sqft: "{{ $row->plot_area }}",
            forType: "{{config('constants.FOR_TYPE')[$row->for_type]}}",
        },
    },
] ;   
</script>
{{-- <script type="text/javascript" src="{{url('frontend/js/map.min.js') }}"></script>
<script type="text/javascript" src="{{url('frontend/js/map.js') }}"></script>  --}}
@endpush
