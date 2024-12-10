@extends('front.layouts.app')
@section('content')
    <!-- flat-title -->
        <section class="flat-title style-2">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-inner ">
                            <ul class="breadcrumb">
                                <li><a class="home fw-6 text-color-3" href="index.html">Home</a></li>
                                <li>Property Listing</li>
                            </ul>
                        </div>
                        <div class="wg-filter style-2 relative z-31">
                            <div class="form-title style-2">
                                <form>
                                    <fieldset>
                                        <input type="text" placeholder="Address, City, ZIP...">
                                    </fieldset>
                                </form>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Status</span>
                                    <ul class="list">
                                        <li data-value class="option selected">Status</li>
                                        <li data-value="bungalow" class="option">Bungalow</li>
                                        <li data-value="apartment" class="option">Apartment</li>
                                        <li data-value="house" class="option">House</li>
                                        <li data-value="smart-home" class="option">Smart Home</li>
                                        <li data-value="Single family home" class="option">Office</li>
                                        <li data-value="Multi family home" class="option">Villa</li>
                                    </ul>
                                </div>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Type</span>
                                    <ul class="list">
                                        <li data-value="1" class="option">Type</li>
                                        <li data-value="bungalow" class="option">Bungalow</li>
                                        <li data-value="apartment" class="option">Apartment</li>
                                        <li data-value="house" class="option">House</li>
                                        <li data-value="smart-home" class="option">Smart Home</li>
                                        <li data-value="Single family home" class="option">Office</li>
                                        <li data-value="Multi family home" class="option">Villa</li>
                                    </ul>
                                </div>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Bath</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">Baths</li>
                                        <li data-value="floating" class="option">Floating baths</li>
                                        <li data-value="massage" class="option">Massage baths</li>
                                        <li data-value="floor-standing" class="option">Floor-standing bath</li>
                                        <li data-value="built-in" class="option">Built-in baths</li>
                                    </ul>
                                </div>
                                <div class="nice-select" tabindex="0">
                                    <span class="current">Beds</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">Beds</li>
                                        <li data-value="twin" class="option">Twin beds</li>
                                        <li data-value="bunk" class="option">Bunk beds</li>
                                        <li data-value="kids" class="option">Kids beds</li>
                                        <li data-value="single" class="option">Single bed</li>
                                    </ul>
                                </div>
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
                                    <a href="#" class="tf-btn bg-color-primary pd-3 fw-6">
                                        Search <i class="icon-MagnifyingGlass fw-6"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="wd-search-form">
                                <div class="group-price">
                                    <div class="widget-price">
                                        <div class="box-title-price">
                                            <span class="title-price">Price range</span>
                                            <div class="caption-price">
                                                <span>from</span>
                                                <span class="value fw-6" id="slider-range-value1"></span>
                                                <span>to</span>
                                                <span class="value fw-6" id="slider-range-value2"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value" value="">
                                                <input type="hidden" name="max-value" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-price">
                                        <div class="box-title-price">
                                            <span class="title-price">Size range</span>
                                            <div class="caption-price">
                                                <span>from</span>
                                                <span class="value fw-6" id="slider-range-value01"></span>
                                                <span>to</span>
                                                <span class="value fw-6" id="slider-range-value02"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range2"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value2" value="">
                                                <input type="hidden" name="max-value2" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" group-select">
                                    <div class="box-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Province / States</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">California</li>
                                                <li data-value="2" class="option selected">Texas</li>
                                                <li data-value="3" class="option">Florida </li>
                                                <li data-value="4" class="option">New York
                                                </li>
                                                <li data-value="5" class="option">Illinois</li>
                                                <li data-value="6" class="option">Washington</li>
                                                <li data-value="7" class="option">Pennsylvania</li>
                                                <li data-value="8" class="option">Ohio</li>
                                                <li data-value="9" class="option">Georgia</li>
                                                <li data-value="10" class="option">North Carolina
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Rooms</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">1</li>
                                                <li data-value="2" class="option selected">2</li>
                                                <li data-value="3" class="option">3</li>
                                                <li data-value="4" class="option">4</li>
                                                <li data-value="5" class="option">5</li>
                                                <li data-value="6" class="option">6</li>
                                                <li data-value="7" class="option">7</li>
                                                <li data-value="8" class="option">8</li>
                                                <li data-value="9" class="option">9</li>
                                                <li data-value="10" class="option">10</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-select">

                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Bath: Any</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">1</li>
                                                <li data-value="2" class="option selected">2</li>
                                                <li data-value="3" class="option">3</li>
                                                <li data-value="4" class="option">4</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-select">

                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Beds: Any</span>
                                            <ul class="list">
                                                <li data-value="1" class="option">1</li>
                                                <li data-value="2" class="option selected">2</li>
                                                <li data-value="3" class="option">3</li>
                                                <li data-value="4" class="option">4</li>
                                                <li data-value="5" class="option">5</li>
                                                <li data-value="6" class="option">6</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-checkbox">
                                    <div class=" title text-4 fw-6">Amenities:</div>
                                    <div class="group-amenities ">
                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4">Bed linens</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Carbon alarm</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Check-in lockbox </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Coffee maker </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4"> Dishwasher</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Fireplace</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Extra pillows </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">First aid kit </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>

                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4">Hangers </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Iron</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Microwave</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Fireplace</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>

                                        <fieldset class="checkbox-item style-1  ">
                                            <label>
                                                <span class="text-4"> Refrigerator</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Security cameras </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4"> Smoke alarm</span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="checkbox-item style-1   mt-12">
                                            <label>
                                                <span class="text-4">Fireplace </span>
                                                <input type="checkbox">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="box-title">
                                <h2>Property listing</h2>
                                <div class="right">
                                    <ul class="nav-tab-filter group-layout" role="tablist">
                                        <li class="nav-tab-item" role="presentation">
                                            <a href="#gridLayout" class=" btn-layout grid nav-link-item active"
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
                                            <a href="#listLayout" class="nav-link-item btn-layout list"
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
                                    <div class="nice-select select-filter list-sort" tabindex="0"><span
                                            class="current">Sort by (Default)</span>
                                        <ul class="list">
                                            <li data-value="default" class="option selected">Sort by (Default)</li>
                                            <li data-value="new" class="option">Newest</li>
                                            <li data-value="old" class="option">Oldest</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="flat-animate-tab">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="gridLayout" role="tabpanel">
                                        <div class="tf-grid-layout md-col-2">
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house.jpg"
                                                            src="images/section/box-house.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-2.jpg"
                                                            src="images/section/box-house-2.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-3.jpg"
                                                            src="images/section/box-house-3.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-4.jpg"
                                                            src="images/section/box-house-4.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-5.jpg"
                                                            src="images/section/box-house-5.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-6.jpg"
                                                            src="images/section/box-house-6.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-7.jpg"
                                                            src="images/section/box-house-7.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-8.jpg"
                                                            src="images/section/box-house-8.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-9.jpg"
                                                            src="images/section/box-house-9.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-15.jpg"
                                                            src="images/section/box-house-15.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-16.jpg"
                                                            src="images/section/box-house-16.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-14.jpg"
                                                            src="images/section/box-house-14.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY
                                                        11237
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">
                                                            <a href="#"
                                                                class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M16.6922 14.1922L14.1922 16.6922C14.0749 16.8095 13.9159 16.8754 13.75 16.8754C13.5842 16.8754 13.4251 16.8095 13.3078 16.6922C13.1905 16.5749 13.1247 16.4159 13.1247 16.25C13.1247 16.0842 13.1905 15.9251 13.3078 15.8078L14.7414 14.375H3.75C3.58424 14.375 3.42527 14.3092 3.30806 14.192C3.19085 14.0747 3.125 13.9158 3.125 13.75C3.125 13.5843 3.19085 13.4253 3.30806 13.3081C3.42527 13.1909 3.58424 13.125 3.75 13.125H14.7414L13.3078 11.6922C13.1905 11.5749 13.1247 11.4159 13.1247 11.25C13.1247 11.0842 13.1905 10.9251 13.3078 10.8078C13.4251 10.6905 13.5842 10.6247 13.75 10.6247C13.9159 10.6247 14.0749 10.6905 14.1922 10.8078L16.6922 13.3078C16.7503 13.3659 16.7964 13.4348 16.8279 13.5107C16.8593 13.5865 16.8755 13.6679 16.8755 13.75C16.8755 13.8321 16.8593 13.9135 16.8279 13.9893C16.7964 14.0652 16.7503 14.1342 16.6922 14.1922ZM5.80782 9.1922C5.92509 9.30947 6.08415 9.37536 6.25 9.37536C6.41586 9.37536 6.57492 9.30947 6.69219 9.1922C6.80947 9.07492 6.87535 8.91586 6.87535 8.75001C6.87535 8.58416 6.80947 8.4251 6.69219 8.30782L5.2586 6.87501H16.25C16.4158 6.87501 16.5747 6.80916 16.6919 6.69195C16.8092 6.57474 16.875 6.41577 16.875 6.25001C16.875 6.08425 16.8092 5.92528 16.6919 5.80807C16.5747 5.69086 16.4158 5.62501 16.25 5.62501H5.2586L6.69219 4.1922C6.80947 4.07492 6.87535 3.91586 6.87535 3.75001C6.87535 3.58416 6.80947 3.4251 6.69219 3.30782C6.57492 3.19055 6.41586 3.12466 6.25 3.12466C6.08415 3.12466 5.92509 3.19055 5.80782 3.30782L3.30782 5.80782C3.24971 5.86587 3.20361 5.9348 3.17215 6.01067C3.1407 6.08655 3.12451 6.16788 3.12451 6.25001C3.12451 6.33215 3.1407 6.41348 3.17215 6.48935C3.20361 6.56522 3.24971 6.63415 3.30782 6.6922L5.80782 9.1922Z"
                                                                        fill="#5C5E61" />
                                                                </svg>
                                                                Compare
                                                            </a>
                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="listLayout" role="tabpanel">
                                        <div class="wrap-list">
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house.jpg"
                                                            src="images/section/box-house.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-2.jpg"
                                                            src="images/section/box-house-2.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-3.jpg"
                                                            src="images/section/box-house-3.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-4.jpg"
                                                            src="images/section/box-house-4.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-5.jpg"
                                                            src="images/section/box-house-5.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-6.jpg"
                                                            src="images/section/box-house-6.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-7.jpg"
                                                            src="images/section/box-house-7.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-8.jpg"
                                                            src="images/section/box-house-8.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-9.jpg"
                                                            src="images/section/box-house-9.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-15.jpg"
                                                            src="images/section/box-house-15.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-16.jpg"
                                                            src="images/section/box-house-16.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-house style-list hover-img">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="images/section/box-house-14.jpg"
                                                            src="images/section/box-house-14.jpg" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured
                                                        </li>
                                                        <li class="flat-tag text-4 bg-3 fw-6 text-white">For Sale</li>
                                                    </ul>
                                                    <div class="list-btn flex gap-8 ">
                                                        <a href="#" class="btn-icon save hover-tooltip"><i
                                                                class="icon-save"></i>
                                                            <span class="tooltip">Add Favorite</span>
                                                        </a>
                                                        <a href="#" class="btn-icon find hover-tooltip"><i
                                                                class="icon-find-plus"></i>
                                                            <span class="tooltip">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">
                                                        <a href="property-detail-v1.html">Elegant studio flat</a>

                                                    </h5>
                                                    <p class="location text-1 flex items-center gap-6">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="text-1 flex"><span>3</span>Beds</li>
                                                        <li class="text-1 flex"><span>3</span>Baths</li>
                                                        <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                    </ul>
                                                    <div class="bot flex justify-between items-center">
                                                        <h5 class="price">
                                                            $8.600
                                                        </h5>
                                                        <div class="wrap-btn flex">

                                                            <a href="property-detail-v1.html"
                                                                class="tf-btn style-border pd-4">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-pagination">
                                <p class="text-1">Showing 1-8 of 42 results.</p>
                                <ul class="wg-pagination ">
                                    <li class="arrow">
                                        <a href="#"><i class="icon-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">...</a>
                                    </li>
                                    <li>
                                        <a href="#">20</a>
                                    </li>
                                    <li class="arrow">
                                        <a href="#"><i class="icon-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tf-sidebar">
                                <form class="form-advanced-search  mb-30">
                                    <h4 class="heading-title mb-30">
                                        Advanced Search
                                    </h4>
                                    <fieldset class="mb-12">
                                        <input type="text" class="form-control" required placeholder="Type keyword..."
                                            name="search" id="search" required>
                                        <div class="icon ">
                                            <i class="icon-location1"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="mb-30">
                                        <input type="text" class="form-control" required placeholder="Location"
                                            name="Location" id="Location" required>
                                        <div class="icon ">
                                            <i class="icon-search"></i>
                                        </div>
                                    </fieldset>
                                    <div class="widget-range mb-30">
                                        <div class="box-title-price mb-10">
                                            <div class="caption-price text-12">
                                                <span>Distance:</span>
                                                <span class="value" id="slider-range-value4"></span>
                                                <span>miles</span>
                                            </div>
                                        </div>
                                        <div id="slider-range3"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value3" value="">
                                                <input type="hidden" name="max-value3" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" group-select mb-30">
                                        <div class="box-select mb-12">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Status</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">California</li>
                                                    <li data-value="2" class="option selected">Texas</li>
                                                    <li data-value="3" class="option">Florida </li>
                                                    <li data-value="4" class="option">New York
                                                    </li>
                                                    <li data-value="5" class="option">Illinois</li>
                                                    <li data-value="6" class="option">Washington</li>
                                                    <li data-value="7" class="option">Pennsylvania</li>
                                                    <li data-value="8" class="option">Ohio</li>
                                                    <li data-value="9" class="option">Georgia</li>
                                                    <li data-value="10" class="option">North Carolina
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-select mb-12">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Regions</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">1</li>
                                                    <li data-value="2" class="option selected">2</li>
                                                    <li data-value="3" class="option">3</li>
                                                    <li data-value="4" class="option">4</li>
                                                    <li data-value="5" class="option">5</li>
                                                    <li data-value="6" class="option">6</li>
                                                    <li data-value="7" class="option">7</li>
                                                    <li data-value="8" class="option">8</li>
                                                    <li data-value="9" class="option">9</li>
                                                    <li data-value="10" class="option">10</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-select mb-12">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">House</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">1</li>
                                                    <li data-value="2" class="option selected">2</li>
                                                    <li data-value="3" class="option">3</li>
                                                    <li data-value="4" class="option">4</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-select mb-12">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Beds</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">1</li>
                                                    <li data-value="2" class="option selected">2</li>
                                                    <li data-value="3" class="option">3</li>
                                                    <li data-value="4" class="option">4</li>
                                                    <li data-value="5" class="option">5</li>
                                                    <li data-value="6" class="option">6</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-select mb-12">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Baths</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">1</li>
                                                    <li data-value="2" class="option selected">2</li>
                                                    <li data-value="3" class="option">3</li>
                                                    <li data-value="4" class="option">4</li>
                                                    <li data-value="5" class="option">5</li>
                                                    <li data-value="6" class="option">6</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-select mb-12">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Garages</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">1</li>
                                                    <li data-value="2" class="option selected">2</li>
                                                    <li data-value="3" class="option">3</li>
                                                    <li data-value="4" class="option">4</li>
                                                    <li data-value="5" class="option">5</li>
                                                    <li data-value="6" class="option">6</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-price style-2 mb-30">
                                        <div class="box-title-price mb-10">
                                            <span class="title-price">Price:</span>
                                            <div class="caption-price">
                                                <span class="value" id="slider-range-value03"></span>
                                                <span>-</span>
                                                <span class="value" id="slider-range-value04"></span>
                                            </div>
                                        </div>
                                        <div id="slider-range4"></div>
                                        <div class="slider-labels">
                                            <div>
                                                <input type="hidden" name="min-value" value="">
                                                <input type="hidden" name="max-value" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="tf-btn bg-color-primary w-full">
                                        Search Property<i class="icon-search"></i>
                                    </button>
                                </form>
                                <div class="sidebar-item sidebar-featured style-2  pb-36 mb-28">
                                    <h4 class="sidebar-title mb-28 ">Featured Listings</h4>
                                    <ul>
                                        <li class="box-listings style-2 hover-img">
                                            <div class="image-wrap">
                                                <img class="lazyload" data-src="images/section/box-listing-1.jpg"
                                                    src="images/section/box-listing-1.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="text-1 title fw-5 lh-20">
                                                    <a href="property-detail-v1.html">Casa Lomas de Machalí Machas</a>
                                                </div>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>3</span>Bed</li>
                                                    <li class="text-1 flex"><span>3</span>Bath</li>
                                                    <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                </ul>
                                                <div class="price text-1 lh-20 fw-6">$7250,00</div>
                                            </div>
                                        </li>
                                        <li class="box-listings style-2 hover-img">
                                            <div class=" image-wrap">
                                                <img class="lazyload" data-src="images/section/box-listing-2.jpg"
                                                    src="images/section/box-listing-2.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="text-1 title fw-5 lh-20">
                                                    <a href="property-detail-v1.html">Casa Lomas de Machalí Machas</a>
                                                </div>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>3</span>Bed</li>
                                                    <li class="text-1 flex"><span>3</span>Bath</li>
                                                    <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                </ul>
                                                <div class="price text-1 lh-20 fw-6">$7250,00</div>

                                            </div>
                                        </li>
                                        <li class="box-listings style-2 hover-img">
                                            <div class=" image-wrap">
                                                <img class="lazyload" data-src="images/section/box-listing-3.jpg"
                                                    src="images/section/box-listing-3.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="text-1 title fw-5 lh-20">
                                                    <a href="property-detail-v1.html">Casa Lomas de Machalí Machas</a>
                                                </div>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>3</span>Bed</li>
                                                    <li class="text-1 flex"><span>3</span>Bath</li>
                                                    <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                </ul>
                                                <div class="price text-1 lh-20 fw-6">$7250,00</div>

                                            </div>
                                        </li>
                                        <li class="box-listings style-2 hover-img">
                                            <div class=" image-wrap">
                                                <img class="lazyload" data-src="images/section/box-listing-4.jpg"
                                                    src="images/section/box-listing-4.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="text-1 title fw-5 lh-20">
                                                    <a href="property-detail-v1.html">Casa Lomas de Machalí Machas</a>
                                                </div>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>3</span>Bed</li>
                                                    <li class="text-1 flex"><span>3</span>Bath</li>
                                                    <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                </ul>
                                                <div class="price text-1 lh-20 fw-6">$7250,00</div>
                                            </div>
                                        </li>
                                        <li class="box-listings style-2 hover-img">
                                            <div class=" image-wrap">
                                                <img class="lazyload" data-src="images/section/box-listing-5.jpg"
                                                    src="images/section/box-listing-5.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="text-1 title fw-5 lh-20">
                                                    <a href="property-detail-v1.html">Casa Lomas de Machalí Machas</a>
                                                </div>
                                                <ul class="meta-list flex">
                                                    <li class="text-1 flex"><span>3</span>Bed</li>
                                                    <li class="text-1 flex"><span>3</span>Bath</li>
                                                    <li class="text-1 flex"><span>4,043</span>Sqft</li>
                                                </ul>
                                                <div class="price text-1 lh-20 fw-6">$7250,00</div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-item sidebar-location">
                                    <h4 class="sidebar-title mb-28 ">Real estate near you</h4>
                                    <div class="wrap-box-location">
                                        <a class="box-location style-2 hover-img-rotate">
                                            <div class="image-wrap">
                                                <img class="lazyload" data-src="images/section/location-23.jpg"
                                                    src="images/section/location-23.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="text-white text-1 lh-20">New York</h6>
                                                <p class="text-2">1570 listing</p>
                                            </div>
                                        </a>
                                        <a class="box-location style-2 hover-img-rotate">
                                            <div class="image-wrap">
                                                <img class="lazyload" data-src="images/section/location-24.jpg"
                                                    src="images/section/location-24.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="text-white text-1 lh-20">Mississauga</h6>
                                                <p class="text-2">1570 listing</p>
                                            </div>
                                        </a>
                                        <a class="box-location style-2 hover-img-rotate">
                                            <div class="image-wrap">
                                                <img class="lazyload" data-src="images/section/location-25.jpg"
                                                    src="images/section/location-25.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="text-white text-1 lh-20">Halifax</h6>
                                                <p class="text-2">1570 listing</p>
                                            </div>
                                        </a>
                                        <a class="box-location style-2 hover-img-rotate">
                                            <div class="image-wrap">
                                                <img class="lazyload" data-src="images/section/location-26.jpg"
                                                    src="images/section/location-26.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="text-white text-1 lh-20">Ottawa</h6>
                                                <p class="text-2">1570 listing</p>
                                            </div>
                                        </a>
                                        <a class="box-location style-2 hover-img-rotate">
                                            <div class="image-wrap">
                                                <img class="lazyload" data-src="images/section/location-27.jpg"
                                                    src="images/section/location-27.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="text-white text-1 lh-20">Iqaluit</h6>
                                                <p class="text-2">1570 listing</p>
                                            </div>
                                        </a>
                                        <a class="box-location style-2 hover-img-rotate">
                                            <div class="image-wrap">
                                                <img class="lazyload" data-src="images/section/location-28.jpg"
                                                    src="images/section/location-28.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="text-white text-1 lh-20">Toronto</h6>
                                                <p class="text-2">1570 listing</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="sidebar-item sidebar-contact-agents">
                                    <h4 class="sidebar-title mb-28 ">Real estate near you</h4>
                                    <div class="wrap-contact-agents">
                                        <div class="box-contact-agent">
                                            <div class="avatar">
                                                <img src="images/avatar/avt-png19.png" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="#" class="text-1">Robert Fox</a>
                                                <h6>(201) 555-0124</h6>
                                            </div>
                                        </div>
                                        <div class="box-contact-agent">
                                            <div class="avatar">
                                                <img src="images/avatar/avt-png20.png" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="#" class="text-1">Cameron Williamson</a>
                                                <h6>(405) 555-0128</h6>
                                            </div>
                                        </div>
                                        <div class="box-contact-agent">
                                            <div class="avatar">
                                                <img src="images/avatar/avt-png21.png" alt="">
                                            </div>
                                            <div class="content">
                                                <a href="#" class="text-1">Darlene Robertson</a>
                                                <h6>(252) 555-0126</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-ads">
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

            <!-- section-CTA -->
            <section class="section-CTA">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-inner">
                                <img src="images/section/cta.png" alt="">
                                <div class="content">
                                    <h4 class="text-white mb-8 ">Find a Local Real Estate Agent Today</h4>
                                    <p class="text-white text-1">If you’re looking to buy or sell a home. We’ll help you
                                        make
                                        the most money
                                        possible.</p>
                                </div>
                                <a href="#" class="tf-btn style-2 fw-6 ">Find your location agent <i
                                        class="icon-MagnifyingGlass fw-6"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-CTA -->
        </div>
        <!-- /main-content -->
@endsection

@push('scripts') 
@endpush
