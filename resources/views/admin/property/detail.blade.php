@extends('front.layouts.app-no-header')
{{-- <link rel="stylesheet" type="text/css" href="{{url('frontend/css/map.min.css')}}" /> --}}
@section('content')
     <!-- .main-content -->
    <div class="main-content">
        <!-- section-property-detail -->
        <section class="section-property-detail style-2 ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="swiper sw-thumbs-sigle " data-preview="1" data-space="0" data-speed="1000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" data-fancybox="gallery" class="image-wrap relative d-block">
                                        <img class="lazyload cover-img" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}"
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
                                    <a href="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $imageVal->image) }}" data-fancybox="gallery" class="image-wrap d-block">
                                        <img class="lazyload cover-img" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $imageVal->image) }}" src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $imageVal->image) }}" alt="" style="height:500px;">
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
                                <div class="title text-11 fw-6 text-color-heading">
                                    {{ App\Helper\Helper::propertyTitle($row)}}
                                </div>
                                <div class="price text-11 fw-6 text-color-heading">
                                    {{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}
                                    {{-- <span class="h5 lh-30 fw-4 text-color-default">/month</span> --}}
                                </div>
                            </div>
                            <div class="info flex justify-between position-relative">
                                <div class="feature">
                                    <p class="location text-1 flex items-center gap-10">
                                        <i class="icon-location"></i>{{$row->location}}, {{$row->state}}, {{$row->city}} {{$row->zip_code}}
                                    </p>
                                    <ul class="meta-list flex">
                                        <li class="text-1 flex"><i class="icon-bed"></i> <span>{{$row->bedroom}}</span>Bed</li>
                                        <li class="text-1 flex"><i class="icon-bath"></i> <span>{{$row->bathroom}}</span>Bath</li>
                                        <li class="text-1 flex"><i class="icon-sqft"></i> <span>{{$row->plot_area}}</span>{{$row->plot_type? $row->plot_type : 'sqft'}}</li>
                                    </ul>
                                </div>                                
                                
                            </div>
                            <div class="info-detail ">
                                <div class="wrap-box">
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-HouseLine"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">ID:</div>
                                            <div class="text-1 text-color-heading">{{ $row->uid }}</div>
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
                                            <i class="icon-SlidersHorizontal"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Type:</div>
                                            <div class="text-1 text-color-heading">{{config('constants.TYPE')[$row->type]}}</div>
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Garage-1"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Builtup Area:</div>
                                            <div class="text-1 text-color-heading">{{$row->builtup_area}} sqft</div>
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
                                            <div class="text-4 text-color-default">Carpet Area</div>
                                            <div class="text-1 text-color-heading">{{$row->carpet_area}} sqft</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-box">
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Bathtub"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Bathrooms:</div>
                                            <div class="text-1 text-color-heading">{{$row->bathroom}} Rooms</div>
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <div class="icons">
                                            <i class="icon-Hammer"></i>
                                        </div>
                                        <div class="content">
                                            <div class="text-4 text-color-default">Year Built:</div>
                                            <div class="text-1 text-color-heading">{{ config('constants.BUILD_YEAR')[$row->build_year] ?? '' }}</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
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
                            <div class="wg-title text-11 fw-6 text-color-heading text-nowrap">
                                Property Details <span ><h6 class="d-inline"> {{$row?->user?->user_type? '( '.$row?->user?->user_type .' )' :'' }} </h6></span>
                            </div>
                            <div class="content">
                                <p class="description text-1 mb-10">{{$row->description}}</p>
                                <a href="javascript:void(0);" class="tf-btn-link style-hover-rotate d-none">
                                    <span>Read More </span>
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
                                        <p>{{ $row->uid}}</p>
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
                                        <p>{{(int)$row->bathroom + (int)$row->bedroom}}</p>
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
                                        <p>{{ config('constants.BUILD_YEAR')[$row->build_year] ?? '' }}</p>
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
                    </div> 
                </div>
            </div>
        </section>
        <!-- section-property-detail --> 
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
