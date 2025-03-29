@extends('front.layouts.app')
@section('content')
    <!-- flat-title -->
        <section class="style-2 bg-4 mb-3 pt-2 pb-2">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="title-inner ">
                            <ul class="breadcrumb">
                                <li><a class="home fw-6 text-color-3" href="{{route('home')}}">Home</a></li>
                                <li>Property Listing</li>
                            </ul>
                        </div> --}}
                        <form id="filter_form" action="{{ route('properties') }}" method="get" enctype='multipart/form-data'>
                            <input type="hidden" name="sort" id="sort_value" value="desc">
                            <div class="wg-filter style-2 relative z-31 mt-2 mb-2">
                                <div class="form-title style-2 bg-4">
                                    
                                    <fieldset class="form">
                                        <input type="text" placeholder="Address, City, ZIP..." name="search" value="{{ request('search', '') }}">
                                    </fieldset>
                                    
                                    <select class="form-control form-select nice-select" name="for_type">
                                        <option value="">For Type: Any</option>
                                        @foreach (config('constants.FOR_TYPE') as $key=>$value)
                                            <option value="{{$key}}" {{ old('for_type', request('for_type')) == $key ? 'selected' : '' }} >{{$value}}</option>
                                        @endforeach                                 
                                    </select>

                                    <select class="form-control form-select nice-select" name="property_detail">
                                        <option value="">Property: Any</option>
                                        @foreach (config('constants.PROPERTY_DETAIL') as $key=>$value)
                                            <option value="{{$key}}" {{ old('property_detail', request('property_detail')) == $key ? 'selected' : '' }} >{{$value}}</option>
                                        @endforeach
                                    </select>

                                    <select class="form-control form-select nice-select" name="type">
                                        <option value="">Type: Any</option>
                                        @foreach (config('constants.TYPE') as $key=>$value)
                                            <option value="{{$key}}" {{ old('type', request('type')) == $key ? 'selected' : '' }} >{{$value}}</option>
                                        @endforeach                                 
                                    </select> 

                                    
                                    
                                    <div class="wrap-btn">
                                        <div class="btn-filter show-form">
                                            <div class="icons">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 4H14" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 4H3" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21 12H12" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 12H3" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21 20H16" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 20H3" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M14 2V6" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 10V14" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16 18V22" stroke="#F1913D" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <button type="submit" class="tf-btn bg-color-primary pd-23 ">
                                            Search <i class="icon-MagnifyingGlass fw-1"></i>
                                        </button>
                                        <a href="{{route('properties')}}" class="tf-btn bg-color-primary fw-1 pd-23" >Reset</a>
                                    </div>
                                    
                                </div>
                                <div class="wd-search-form">
                                    {{-- <div class="group-price">
                                        <div class="widget-price">
                                            <div class="box-title-price">
                                                <span class="title-price">Price range</span>
                                                <div class="caption-price">
                                                    <span>from</span>
                                                    <span class="value fw-6" id="min-range-price"></span>
                                                    <span>to</span>
                                                    <span class="value fw-6" id="max-range-price"></span>
                                                </div>
                                            </div>
                                            <div id="slider-range-price"></div>
                                            <input type="hidden" name="min_price" value="{{ request('min_price', '') }}" >
                                            <input type="hidden" name="max_price" value="{{ request('max_price', '') }}" >
                                        </div> 
                                    </div>   --}}
                                    <div class=" group-select">
                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="availability">
                                                <option value="">Availability: Any</option>
                                                @foreach (config('constants.AVAILABILITY') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('availability', request('availability')) == $key ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach                                 
                                            </select>
                                        </div>
                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="ownership">
                                                <option value="">Ownership: Any</option>
                                                @foreach (config('constants.OWNERSHIP') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('ownership', request('ownership')) == $key ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach                                 
                                            </select>
                                        </div>
                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="furnished">
                                                <option value="">Furnished: Any</option>
                                                @foreach (config('constants.FURNISHED_DETAIL') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('furnished', request('furnished')) == $key ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach                                 
                                            </select>
                                        </div>

                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="is_premium">
                                                <option value="">Premium: Any</option>
                                                @foreach (config('constants.IS_PREMIUM') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('is_premium', request('is_premium')) === (string)$key ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach                                 
                                            </select>
                                        </div>

                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="is_verified">
                                                <option value="">Verify: Any</option>
                                                @foreach (config('constants.IS_VERIFIED') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('is_verified', request('is_verified')) === (string)$key ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach                                 
                                            </select>
                                        </div>

                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="bathroom">
                                                <option value="">Bath: Any</option>
                                                @foreach (config('constants.LOOP5') as $value)
                                                    <option value="{{$value}}" {{ old('bathroom', request('bathroom')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach                              
                                            </select>
                                        </div>
                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="bedroom">
                                                <option value="">Beds Any</option>
                                                @foreach (config('constants.LOOP5') as $value)
                                                    <option value="{{$value}}" {{ old('bedroom', request('bedroom')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach                              
                                            </select>
                                        </div>
                                        <div class="box-select">
                                            <select class="form-control form-select nice-select" name="min_price"> 
                                                <option value="">Budget</option>
                                                @foreach (config('constants.MIN_PRICE_SELL') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('min_price', request('min_price')) == $key ? 'selected' : '' }}  >{{$value}}</option>
                                                @endforeach                                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </section>
        <!-- /flat-title -->

        <!-- .main-content -->
        <div class="main-content">

            <section class="section-property-layout">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="box-title mb-3">
                                <h4>Property listing</h4>
                                <div class="right">
                                    <ul class="nav-tab-filter group-layout" role="tablist">
                                        <li class="nav-tab-item" role="presentation">
                                            <a href="#gridLayout" class="btn-layout grid nav-link-item "
                                                data-bs-toggle="tab">
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.04883 6.40508C5.04883 5.6222 5.67272 5 6.41981 5C7.16686 5 7.7908 5.62221 7.7908 6.40508C7.7908 7.18801 7.16722 7.8101 6.41981 7.8101C5.67241 7.8101 5.04883 7.18801 5.04883 6.40508Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M11.1045 6.40508C11.1045 5.62221 11.7284 5 12.4755 5C13.2229 5 13.8466 5.6222 13.8466 6.40508C13.8466 7.18789 13.2227 7.8101 12.4755 7.8101C11.7284 7.8101 11.1045 7.18794 11.1045 6.40508Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M19.9998 6.40514C19.9998 7.18797 19.3757 7.81016 18.6288 7.81016C17.8818 7.81016 17.2578 7.18794 17.2578 6.40508C17.2578 5.62211 17.8813 5 18.6288 5C19.3763 5 19.9998 5.62215 19.9998 6.40514Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M7.74249 12.5097C7.74249 13.2926 7.11849 13.9147 6.37133 13.9147C5.62411 13.9147 5 13.2926 5 12.5097C5 11.7267 5.62419 11.1044 6.37133 11.1044C7.11842 11.1044 7.74249 11.7266 7.74249 12.5097Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M13.7976 12.5097C13.7976 13.2927 13.1736 13.9147 12.4266 13.9147C11.6795 13.9147 11.0557 13.2927 11.0557 12.5097C11.0557 11.7265 11.6793 11.1044 12.4266 11.1044C13.1741 11.1044 13.7976 11.7265 13.7976 12.5097Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M19.9516 12.5097C19.9516 13.2927 19.328 13.9147 18.5807 13.9147C17.8329 13.9147 17.209 13.2925 17.209 12.5097C17.209 11.7268 17.8332 11.1044 18.5807 11.1044C19.3279 11.1044 19.9516 11.7265 19.9516 12.5097Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M5.04297 18.5947C5.04297 17.8118 5.66709 17.1896 6.4143 17.1896C7.16137 17.1896 7.78523 17.8116 7.78523 18.5947C7.78523 19.3778 7.16139 19.9997 6.4143 19.9997C5.66714 19.9997 5.04297 19.3773 5.04297 18.5947Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M11.0986 18.5947C11.0986 17.8118 11.7227 17.1896 12.47 17.1896C13.2169 17.1896 13.8409 17.8117 13.8409 18.5947C13.8409 19.3778 13.2169 19.9997 12.47 19.9997C11.7225 19.9997 11.0986 19.3774 11.0986 18.5947Z"
                                                        stroke="#8E8E93" />
                                                    <path
                                                        d="M17.252 18.5947C17.252 17.8117 17.876 17.1896 18.6229 17.1896C19.3699 17.1896 19.9939 17.8117 19.9939 18.5947C19.9939 19.3778 19.3702 19.9997 18.6229 19.9997C17.876 19.9997 17.252 19.3774 17.252 18.5947Z"
                                                        stroke="#8E8E93" />
                                                </svg>

                                            </a>
                                        </li>
                                        <li class="nav-tab-item" role="presentation">
                                            <a href="#listLayout" class="nav-link-item btn-layout list active"
                                                data-bs-toggle="tab">
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.7016 18.3317H9.00246C8.5615 18.3317 8.2041 17.9743 8.2041 17.5333C8.2041 17.0923 8.5615 16.7349 9.00246 16.7349H19.7013C20.1423 16.7349 20.4997 17.0923 20.4997 17.5333C20.4997 17.9743 20.1426 18.3317 19.7016 18.3317Z"
                                                        fill="#8E8E93" />
                                                    <path
                                                        d="M19.7016 13.3203H9.00246C8.5615 13.3203 8.2041 12.9629 8.2041 12.5219C8.2041 12.081 8.5615 11.7236 9.00246 11.7236H19.7013C20.1423 11.7236 20.4997 12.081 20.4997 12.5219C20.5 12.9629 20.1426 13.3203 19.7016 13.3203Z"
                                                        fill="#8E8E93" />
                                                    <path
                                                        d="M19.7016 8.30919H9.00246C8.5615 8.30919 8.2041 7.95179 8.2041 7.51083C8.2041 7.06986 8.5615 6.71246 9.00246 6.71246H19.7013C20.1423 6.71246 20.4997 7.06986 20.4997 7.51083C20.4997 7.95179 20.1426 8.30919 19.7016 8.30919Z"
                                                        fill="#8E8E93" />
                                                    <path
                                                        d="M5.5722 8.64465C6.16436 8.64465 6.6444 8.16461 6.6444 7.57245C6.6444 6.98029 6.16436 6.50024 5.5722 6.50024C4.98004 6.50024 4.5 6.98029 4.5 7.57245C4.5 8.16461 4.98004 8.64465 5.5722 8.64465Z"
                                                        fill="#8E8E93" />
                                                    <path
                                                        d="M5.5722 13.5942C6.16436 13.5942 6.6444 13.1141 6.6444 12.522C6.6444 11.9298 6.16436 11.4498 5.5722 11.4498C4.98004 11.4498 4.5 11.9298 4.5 12.522C4.5 13.1141 4.98004 13.5942 5.5722 13.5942Z"
                                                        fill="#8E8E93" />
                                                    <path
                                                        d="M5.5722 18.5438C6.16436 18.5438 6.6444 18.0637 6.6444 17.4716C6.6444 16.8794 6.16436 16.3994 5.5722 16.3994C4.98004 16.3994 4.5 16.8794 4.5 17.4716C4.5 18.0637 4.98004 18.5438 5.5722 18.5438Z"
                                                        fill="#8E8E93" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="nice-select select-filter list-sort" tabindex="0"><span class="current">
                                        {{ request('sort') == 'asc' ? 'Newest' : (request('sort') == 'desc' ? 'Oldest' : 'Sort by (Default)') }}
                                    </span>
                                        <ul class="list">
                                            <li data-value="desc" class="option">Sort by (Default)</li>
                                            <li data-value="asc" class="option">Newest</li>
                                            <li data-value="desc" class="option">Oldest</li>
                                        </ul>
                                    </div>
                                    {{-- <a href="{{route('properties')}}" class="tf-btn bg-color-primary fw-6 pd-23" style="height: auto;">Reset</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="flat-animate-tab">
                                <div class="tab-content">
                                    <div class="tab-pane" id="gridLayout" role="tabpanel">
                                        <div class="tf-grid-layout md-col-2">
                                            @foreach ($rows as $row)
                                                <div class="box-house hover-img h-100">
                                                    <div class="image-wrap ht-210">
                                                        <a href="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" data-fancybox="gallery">
                                                            <img class="lazyload cover-img" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" alt="">
                                                        </a>
                                                        <ul class="box-tag flex gap-8 ">
                                                            <li class="flat-tag text-4 bg-main fw-6 text-white">{{config('constants.FOR_TYPE')[$row->for_type]}}
                                                            </li>
                                                             
                                                        </ul>
                                                        <div class="list-btn flex gap-8 ">
                                                            {{-- <a href="{{route('user.favorite.toggle', $row->id)}}" class="btn-icon save hover-tooltip">
                                                                <i class="icon-save"></i>
                                                                <span class="tooltip">Add Favorite</span>
                                                            </a> --}}
                                                            <a href="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" data-fancybox="gallery" class="btn-icon find hover-tooltip">
                                                                <i class="icon-find-plus"></i>
                                                                <span class="tooltip">Quick View</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">
                                                            <a href="{{route('property', $row->slug)}}" class="line-clamp-1" >{{ App\Helper\Helper::propertyTitle($row)}}</a>
                                                        </h5>
                                                        <p class="location text-1 flex items-center gap-6 line-clamp-2">
                                                            <i class="icon-location"></i> {{$row->location}}
                                                        </p>
                                                        <ul class="meta-list flex">
                                                            <li class="text-1 flex"><span>{{$row->bedroom}}</span>Beds</li>
                                                            <li class="text-1 flex"><span>{{$row->bathroom}}</span>Baths</li>
                                                            <li class="text-1 flex"><span>{{$row->plot_area}}</span>Sqft</li>
                                                        </ul>
                                                        <div class="bot flex justify-between items-center">
                                                            <h5 class="price">
                                                                {{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}
                                                                <p class="text-3 text-secondary">{{App\Helper\Helper::perUnitPrice($row)}}</p>
                                                            </h5>
                                                            <div class="wrap-btn flex">
                                                                <a href="javascript:void(0)" class="tf-btn style-border pd-4 interested-function" data-slug="{{$row->slug}}" data-id="{{$row->id}}">Interested</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach 
                                        </div>
                                    </div>
                                    <div class="tab-pane active show" id="listLayout" role="tabpanel">
                                        <div class="wrap-list">
                                            @foreach ($rows as $row)
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap wd-250">
                                                    <a href="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" data-fancybox="gallery">
                                                        <img class="lazyload cover-img" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">{{config('constants.FOR_TYPE')[$row->for_type]}}</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        {{-- <a href="{{route('user.favorite.toggle', $row->id)}}" class="btn-icon save hover-tooltip">
                                                            <i class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a> --}}
                                                        <a href="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" data-fancybox="gallery" class="btn-icon find hover-tooltip"><i class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content box-overview position-relative">
                                                    <a href="#sharePopup" data-bs-toggle="modal" class="share-button position-absolute" data-url="{{route('property', $row->slug)}}" >
                                                        <svg viewBox="0 0 40 40" fill="#df4234"><path d="M6,30 C8,18 19,16 23,16 L23,16 L23,10 L33,20 L23,29 L23,24 C19,24 8,27 6,30 Z"></path></svg>
                                                        <span class="opacity-0">share</span>
                                                    </a>
                                                    <h5 class="title">
                                                        <a href="{{route('property', $row->slug)}}" class="line-clamp-1" >{{ App\Helper\Helper::propertyTitle($row)}}</a>
                                                    </h5>
                                                    <p class="mb-3 flex items-center line-clamp-1">
                                                        <i class="icon-location"></i> {{$row->location}}
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="meta-item">
                                                            <div class="text-9 flex">
                                                                <i class="icon-bed"></i>
                                                                <span>
                                                                    <div class="text-c-1 text-color-default">Beds:</div>
                                                                    <div class="text-c-2">{{$row->bedroom}}</div>
                                                                </span>
                                                            </div>
                                                            <div class="text-9 flex">
                                                                <i class="icon-sqft"></i>
                                                                <span>
                                                                    <div class="text-c-1 text-color-default">Area:</div>
                                                                    <div class="text-c-2">{{$row->plot_area}} {{$row->plot_type??'Sqft'}} </div>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="meta-item">
                                                            <div class="text-9 flex">
                                                                <i class="icon-bath"></i>
                                                                <span>
                                                                    <div class="text-c-1 text-color-default">Baths:</div>
                                                                    <div class="text-c-2">{{$row->bathroom}}</div>
                                                                </span>
                                                            </div>
                                                            <div class="text-9 flex">
                                                                <i class="icon-Crop"></i>
                                                                <span>
                                                                    <div class="text-c-1 text-color-default">Carpet:</div>
                                                                    <div class="text-c-2">{{$row->carpet_area}} Sqft</div>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <li class="meta-item">
                                                            <div class="text-9 flex">
                                                                <i class="icon-furnished"></i>
                                                                <span>
                                                                    <div class="text-c-1 text-color-default">Furnished:</div>
                                                                    <div class="text-c-2">{{config('constants.FURNISHED_DETAIL')[$row->furnished] ?? ''}}</div>
                                                                </span> 
                                                            </div>
                                                            <div class="text-9 flex">
                                                                <i class="icon-construction"></i>
                                                                <span>
                                                                    <div class="text-c-1 text-color-default">Availability:</div>
                                                                    <div class="text-c-2">{{config('constants.AVAILABILITY')[$row->availability] ?? ''}}</div>
                                                                </span>
                                                            </div>
                                                        </li>
                                                    </ul>                                                
                                                    <p >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
                                                            <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016m6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0"/>
                                                            <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
                                                        </svg>
                                                        {{$row->facing}} Facing Property
                                                    </p>
                                                    <div class="bot flex justify-between items-center">
                                                        
                                                        <h6 class="price">
                                                            {{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}} /
                                                            <span class="text-3 text-secondary">{{App\Helper\Helper::perUnitPrice($row)}}</span>
                                                        </h6>
                                                        <div class="wrap-btn flex"> 
                                                            {{-- <a href="{{route('property', $row->slug)}}" class="tf-btn style-border pd-4">Interested</a> --}}
                                                            <a href="javascript:void(0)" class="tf-btn style-border pd-4 interested-function" data-slug="{{$row->slug}}" data-id="{{$row->id}}">Interested</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-pagination">
                                <p class="text-1">Showing {{ $rows->firstItem() }}-{{ $rows->lastItem() }} of {{ $rows->total() }} results.</p>
                                {{ $rows->links('vendor.pagination.frontend-bootstrap-4') }}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tf-sidebar">
                                <div class="sidebar-item sidebar-featured style-2  pb-36 mb-28">
                                    <h5 class="sidebar-title mb-28 ">Featured Listings</h5>
                                    <ul>
                                        @foreach ($featured as $featuredRow)
                                        <li class="box-listings style-2 hover-img">
                                            <div class="image-wrap">
                                                <img class="lazyload cover-img" data-src="{{ App\Helper\Helper::getImage('storage/property/'.$featuredRow->id, $featuredRow?->image?->image) }}"
                                                    src="{{ App\Helper\Helper::getImage('storage/property/'.$featuredRow->id, $featuredRow?->image?->image) }}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="text-1 title fw-5 lh-20">
                                                    {{-- <a href="{{route('property', $featuredRow->slug)}}">{{$featuredRow->title}}</a> --}}
                                                    <a href="{{route('property', $featuredRow->slug)}}" class="text-limit-1">{{ App\Helper\Helper::propertyTitle($featuredRow)}}</a>
                                                </div>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>{{$featuredRow->bedroom}}</span>Beds</li>
                                                    <li class="text-1 flex"><span>{{$featuredRow->bathroom}}</span>Baths</li>
                                                    <li class="text-1 flex"><span>{{$featuredRow->plot_area}}</span>Sqft</li>
                                                </ul>
                                                <div class="price text-1 lh-20 fw-6">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($featuredRow->price)}}</div>
                                            </div>
                                        </li>
                                        @endforeach 
                                    </ul>
                                </div> 
                              
                                <div class="sidebar-ads">
                                    <div class="image-wrap">
                                        <img class="lazyload" data-src="{{ url('frontend/images/blog/ads.jpg')}}" src="{{ url('frontend/images/blog/ads.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="logo relative z-5">
                                        <img src="{{ url('frontend/images/logo/logo-2%402x.png')}}" alt="">
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

            {{-- @include('front.layouts.pre-footer') --}}
        </div>
        <!-- /main-content -->
@endsection

@push('scripts') 
@endpush
