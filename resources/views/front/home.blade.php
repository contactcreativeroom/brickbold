@extends('front.layouts.app')
@section('content')
    <!-- page-title  -->
    <div class="page-title home01">
        <div class="tf-container ">
            <div class="row justify-center relative">
                <div class="col-lg-8 ">
                    <div class="content-inner">
                        <div class="heading-title">
                            <h1 class="title">Search Luxury Homes</h1>
                            <p class="h6 fw-4">Thousands of luxury home enthusiasts just like you visit our website.
                            </p>
                        </div>
                        <div class="wg-filter">
                            <div class="form-title">
                                <div class="tf-dropdown-sort " data-bs-toggle="dropdown">
                                    <div class="btn-select">
                                        <span class="text-sort-value">For sale</span><i class="icon-CaretDown"></i>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="select-item active">
                                            <span class="text-value-item">For sale</span>
                                        </div>
                                        <div class="select-item">
                                            <span class="text-value-item">For rent</span>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <fieldset>
                                        <input type="text" placeholder="Place, neighborhood, school or agent...">
                                    </fieldset>
                                </form>
                                <div class="box-item wrap-btn">
                                    <div class="btn-filter show-form">
                                        <div class="icons">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 4H14" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M10 4H3" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M21 12H12" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M8 12H3" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M21 20H16" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M12 20H3" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M14 2V6" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M8 10V14" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16 18V22" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <a href="#" class="tf-btn bg-color-primary pd-3">
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
        </div>

    </div><!-- /.page-title  -->

    <!-- .main-content -->
    <div class="main-content ">

        <!-- .Categories -->
        <section class="tf-spacing-1 section-categories pb-0">
            <div class="tf-container">
                <div class="heading-section text-center mb-48">
                    <h2 class="title text-anime-wave">Try Searching For</h2>
                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                        data-wow-delay="0s">Thousands of luxury home enthusiasts just like you have found their
                        dream home
                    </p>
                </div>
                <div class="wrap-categories-sw">
                    <div class="swiper tf-sw-categories style-pagination" data-preview="6" data-tablet="4"
                        data-mobile-sm="3" data-mobile="2" data-space="15" data-space-md="30" data-space-lg="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="categories-item">
                                    <div class="icon-box">
                                        <i class="icon icon-apartment1">
                                        </i>
                                    </div>
                                    <div class="content text-center">
                                        <h5>Apartment</h5>
                                        <p class="mt-4 text-1">234 Property</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="categories-item">
                                    <div class="icon-box">
                                        <i class="icon icon-villa">
                                        </i>
                                    </div>
                                    <div class="content text-center">
                                        <h5>Villa</h5>
                                        <p class="mt-4 text-1">234 Property</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="categories-item active">
                                    <div class="icon-box">
                                        <i class="icon icon-studio">
                                        </i>
                                    </div>
                                    <div class="content text-center">
                                        <h5>Studio</h5>
                                        <p class="mt-4 text-1">234 Property</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="categories-item">
                                    <div class="icon-box">
                                        <i class="icon icon-office1">
                                        </i>
                                    </div>
                                    <div class="content text-center">
                                        <h5>Office</h5>
                                        <p class="mt-4 text-1">234 Property</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="categories-item">
                                    <div class="icon-box">
                                        <i class="icon icon-townhouse">
                                        </i>
                                    </div>
                                    <div class="content text-center">
                                        <h5>Townhouse</h5>
                                        <p class="mt-4 text-1">234 Property</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="categories-item">
                                    <div class="icon-box">
                                        <i class="icon icon-commercial">
                                        </i>
                                    </div>
                                    <div class="content text-center">
                                        <h5>Commercial</h5>
                                        <p class="mt-4 text-1">234 Property</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="sw-pagination sw-pagination-category text-center d-lg-none d-block mt-20"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Categories -->

        <!-- .section-listing -->
        <section class="section-listing tf-spacing-1">
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center ">
                            <h2 class="title text-anime-wave">Today’s Luxury Listings</h2>
                            <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                data-wow-delay="0s">Thousands of luxury home enthusiasts just like you
                                visit our website.
                            </p>
                        </div>
                        <div class="swiper style-pagination tf-sw-mobile-1" data-screen="767" data-preview="1"
                            data-space="15">
                            <div class="swiper-wrapper tf-layout-mobile-md md-col-2  lg-col-3 ">
                                <div class="swiper-slide">
                                    <div class="box-house hover-img ">
                                        <div class="image-wrap">
                                            <a href="property-detail-v1.html">
                                                <img class="lazyload"
                                                    data-src="{{ url('frontend/images/section/box-house.jpg') }}" ')}}                                                        src="{{ url('frontend/images/section/box-house.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY 11237
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
                                                            <a href="#" class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="swiper-slide">
                                            <div class="box-house hover-img ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-2.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-2.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY 11237
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
                                                            <a href="#" class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="swiper-slide ">
                                            <div class="box-house hover-img ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-3.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-3.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY 11237
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
                                                            <a href="#" class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="swiper-slide">
                                            <div class="box-house hover-img ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-4.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-4.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY 11237
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
                                                            <a href="#" class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="swiper-slide">
                                            <div class="box-house hover-img ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-5.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-5.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY 11237
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
                                                            <a href="#" class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="swiper-slider">
                                            <div class="box-house hover-img ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-6.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-6.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">Featured</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> 102 Ingraham St, Brooklyn, NY 11237
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
                                                            <a href="#" class="compare flex gap-8 items-center text-1"><svg
                                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                    <div class="sw-pagination sw-pagination-mb-1 text-center d-lg-none d-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- /.section-listing -->

                <!-- section-help -->
                <section class="section-help tf-spacing-1">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center">
                                    <h2 class="title text-anime-wave">Discover how we can help</h2>
                                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                        data-wow-delay="0s">Thousands of luxury home enthusiasts just like you
                                        visit our website.
                                    </p>
                                </div>
                                <div class="widget-tabs style-2 style-border-primary">
                                    <ul class="widget-menu-tab ">
                                        <li class="item-title active">
                                            Buying
                                        </li>
                                        <li class="item-title">
                                            Rating
                                        </li>
                                        <li class="item-title">
                                            Selling
                                        </li>
                                    </ul>
                                    <div class="widget-content-tab">
                                        <div class="widget-content-inner active">
                                            <div class=" tf-grid-layout md-col-3 ">
                                                <div class="icons-box default effec-icon animate__zoomIn wow animate__animated"
                                                    data-wow-duration="1.5s">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.825 95.1156H85.1625C85.5769 95.1156 85.9743 94.951 86.2673 94.658C86.5604 94.3649 86.725 93.9675 86.725 93.5531V53.0187H93.7922C95.0391 53.0187 96.1547 52.2703 96.6344 51.1125C96.874 50.5321 96.9345 49.8932 96.8081 49.2781C96.6817 48.663 96.3741 48.0998 95.925 47.6609L52.1359 5.73123C51.5537 5.18615 50.7855 4.88364 49.988 4.88538C49.1904 4.88713 48.4236 5.19299 47.8438 5.74061L29.4734 23.3437V12.2031C29.4734 11.7887 29.3088 11.3913 29.0158 11.0983C28.7228 10.8052 28.3253 10.6406 27.9109 10.6406H14.825C14.4106 10.6406 14.0132 10.8052 13.7201 11.0983C13.4271 11.3913 13.2625 11.7887 13.2625 12.2031V38.8797L4.09375 47.6656C3.64187 48.0963 3.3297 48.6527 3.19765 49.2627C3.0656 49.8728 3.11977 50.5085 3.35312 51.0875C3.58434 51.6606 3.98229 52.151 4.49544 52.4953C5.00859 52.8397 5.61329 53.022 6.23125 53.0187H13.2625V93.5531C13.2625 93.9675 13.4271 94.3649 13.7201 94.658C14.0132 94.951 14.4106 95.1156 14.825 95.1156ZM16.3875 13.764H26.3484V26.3375L16.3875 35.8703V13.764ZM6.26094 49.9172L23.0109 33.8594L28.9906 28.1344C29 28.125 29.0031 28.1125 29.0109 28.1031L49.9844 7.99842L93.7969 49.8953H85.1625C84.7481 49.8953 84.3507 50.0599 84.0576 50.3529C83.7646 50.646 83.6 51.0434 83.6 51.4578V91.9922H16.3875V51.4562C16.3875 51.0418 16.2229 50.6444 15.9299 50.3514C15.6368 50.0583 15.2394 49.8937 14.825 49.8937L6.26094 49.9172Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M48.8594 78.9703C52.625 78.9703 56.4031 78.0016 59.8031 76.0281C60.4922 77.2188 61.2328 78.4344 62.0453 79.6375C63.7031 82.1125 65.4828 84.4469 66.4781 85.4531C67.1866 86.1623 68.0283 86.7245 68.9547 87.1074C69.8812 87.4903 70.8741 87.6864 71.8766 87.6844C72.8793 87.6859 73.8724 87.4898 74.7993 87.1072C75.7261 86.7246 76.5685 86.1631 77.2781 85.4547L77.2828 85.4516C78.7106 84.0157 79.5114 82.0726 79.51 80.0476C79.5085 78.0227 78.7049 76.0807 77.275 74.6469C76.2735 73.6547 73.9391 71.875 71.4688 70.2203C70.2875 69.4293 69.0795 68.6788 67.8469 67.9703C70.2631 63.7911 71.2313 58.9309 70.6012 54.1448C69.9711 49.3587 67.778 44.9146 64.3625 41.5031C60.2172 37.3578 54.7063 35.075 48.8422 35.075C42.9781 35.075 37.4703 37.3563 33.3313 41.5031C31.2864 43.5347 29.6651 45.952 28.5614 48.6149C27.4577 51.2777 26.8935 54.1331 26.9016 57.0156C26.9016 62.8781 29.1844 68.3906 33.3297 72.5344C35.3678 74.5758 37.7886 76.195 40.4534 77.2994C43.1182 78.4038 45.9748 78.9716 48.8594 78.9703ZM75.0703 76.861C75.9136 77.7086 76.3871 78.8556 76.3874 80.0513C76.3877 81.2469 75.9148 82.3941 75.0719 83.2422C74.2252 84.0856 73.0792 84.5596 71.8841 84.5607C70.6891 84.5619 69.5421 84.0901 68.6938 83.2484C67.975 82.5234 66.3516 80.4516 64.6391 77.8953C63.8443 76.7184 63.0917 75.5134 62.3828 74.2828C62.4484 74.2313 62.5063 74.1688 62.5703 74.1156C63.1906 73.6203 63.7938 73.0969 64.3672 72.5297C64.9297 71.9625 65.45 71.3594 65.9453 70.7422C65.9969 70.6781 66.0594 70.6203 66.1094 70.5547C67.2875 71.2313 68.5172 72 69.7266 72.8141C72.2781 74.5235 74.3484 76.1469 75.0703 76.861ZM35.5391 43.7125C37.2815 41.9592 39.3545 40.5691 41.6381 39.6228C43.9217 38.6766 46.3703 38.193 48.8422 38.2C53.8703 38.2 58.5969 40.1578 62.1531 43.7125C68.5625 50.125 69.5 60.1875 64.375 67.6344L64.3719 67.6406C63.7155 68.5987 62.9739 69.4956 62.1563 70.3203C61.3269 71.1433 60.4248 71.8896 59.4609 72.55C52.0125 77.675 41.9516 76.7375 35.5391 70.325C31.9828 66.7703 30.025 62.0438 30.025 57.0156C30.025 51.9875 31.9828 47.2641 35.5391 43.7125Z"
                                                                fill="#F1913D" />
                                                            <path
                                                                d="M48.2188 72C48.6332 72 49.0306 71.8353 49.3236 71.5423C49.6166 71.2493 49.7813 70.8519 49.7813 70.4375C49.7813 70.0231 49.6166 69.6256 49.3236 69.3326C49.0306 69.0396 48.6332 68.875 48.2188 68.875C46.7431 68.8788 45.2814 68.59 43.9181 68.0251C42.5548 67.4603 41.3171 66.6307 40.2766 65.5843C39.231 64.5445 38.4022 63.3074 37.8381 61.9449C37.2741 60.5824 36.986 59.1215 36.9906 57.6468C36.9908 57.2324 36.8264 56.8349 36.5335 56.5418C36.2407 56.2486 35.8433 56.0838 35.4289 56.0836C35.0145 56.0834 34.617 56.2478 34.3238 56.5406C34.0307 56.8335 33.8658 57.2309 33.8656 57.6453C33.8625 61.4797 35.3547 65.0828 38.0672 67.7937C40.7797 70.5047 44.3828 71.9984 48.2172 71.9984L48.2188 72Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Find out how much you <br>
                                                            can afford</a></h4>
                                                    <p class="text-center text-1">We’ll help you estimate your budget range.
                                                        Save to your buyer profile to help
                                                        <br> in your search
                                                    </p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                                <div class="icons-box default effec-icon animate__zoomIn wow animate__animated"
                                                    data-wow-duration="1.5s">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.23437 53.0156H13.2656V93.5469C13.2656 93.9613 13.4302 94.3587 13.7233 94.6517C14.0163 94.9447 14.4137 95.1094 14.8281 95.1094H85.1562C85.5706 95.1094 85.9681 94.9447 86.2611 94.6517C86.5541 94.3587 86.7188 93.9613 86.7188 93.5469V53.0156H93.7969C94.4075 53.0157 95.0043 52.8332 95.5105 52.4916C96.0166 52.1499 96.4091 51.6648 96.6375 51.0984C96.8751 50.521 96.9343 49.8856 96.8073 49.2743C96.6803 48.6629 96.373 48.1037 95.925 47.6687L52.1359 5.73905C51.5551 5.19085 50.7862 4.88613 49.9875 4.88758C49.1888 4.88903 48.421 5.19655 47.8422 5.74686L4.09219 47.6656C3.63982 48.0922 3.32632 48.645 3.19249 49.2522C3.05865 49.8593 3.11068 50.4927 3.34179 51.0699C3.57291 51.6471 3.97241 52.1414 4.48832 52.4884C5.00422 52.8355 5.61263 53.0191 6.23437 53.0156ZM49.9844 8.00311L93.8 49.8906L93.7969 51.4531V49.8906H85.1562C84.7418 49.8906 84.3444 50.0552 84.0514 50.3483C83.7584 50.6413 83.5938 51.0387 83.5938 51.4531V91.9844H16.3906V51.4531C16.3906 51.0387 16.226 50.6413 15.933 50.3483C15.64 50.0552 15.2425 49.8906 14.8281 49.8906L6.25312 49.925L49.9844 8.00311Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M51.3969 67.7188H48.6047C47.6709 67.7171 46.7758 67.3453 46.1156 66.6848C45.4554 66.0244 45.084 65.1291 45.0828 64.1953C45.0828 63.7809 44.9182 63.3835 44.6252 63.0905C44.3321 62.7974 43.9347 62.6328 43.5203 62.6328C43.1059 62.6328 42.7085 62.7974 42.4155 63.0905C42.1224 63.3835 41.9578 63.7809 41.9578 64.1953C41.961 65.9279 42.6405 67.5909 43.8517 68.8298C45.063 70.0687 46.7101 70.7858 48.4422 70.8281V73.9062C48.4422 74.3207 48.6068 74.7181 48.8998 75.0111C49.1929 75.3041 49.5903 75.4688 50.0047 75.4688C50.4191 75.4688 50.8165 75.3041 51.1095 75.0111C51.4026 74.7181 51.5672 74.3207 51.5672 73.9062V70.8281C53.2982 70.7842 54.9437 70.0664 56.1536 68.8277C57.3635 67.5889 58.0422 65.9269 58.0453 64.1953C58.0432 62.4327 57.3421 60.7428 56.0957 59.4964C54.8494 58.2501 53.1595 57.5489 51.3969 57.5469H48.6047C47.6709 57.5452 46.7758 57.1734 46.1156 56.513C45.4554 55.8525 45.084 54.9573 45.0828 54.0234C45.084 53.0896 45.4554 52.1944 46.1156 51.5339C46.7758 50.8735 47.6709 50.5017 48.6047 50.5H49.9797C49.9891 50.5 49.9953 50.5047 50.0062 50.5047C50.0172 50.5047 50.0219 50.5 50.0328 50.5H51.3969C52.331 50.5012 53.2264 50.8729 53.8869 51.5334C54.5475 52.1939 54.9191 53.0893 54.9203 54.0234C54.9203 54.4378 55.0849 54.8353 55.378 55.1283C55.671 55.4213 56.0684 55.5859 56.4828 55.5859C56.8972 55.5859 57.2946 55.4213 57.5877 55.1283C57.8807 54.8353 58.0453 54.4378 58.0453 54.0234C58.0418 52.2924 57.3631 50.631 56.1536 49.3926C54.9441 48.1542 53.2992 47.4365 51.5687 47.3922V44.3203C51.5687 43.9059 51.4041 43.5085 51.1111 43.2155C50.8181 42.9224 50.4206 42.7578 50.0062 42.7578C49.5918 42.7578 49.1944 42.9224 48.9014 43.2155C48.6084 43.5085 48.4437 43.9059 48.4437 44.3203V47.3906C46.7114 47.4326 45.0638 48.1494 43.8523 49.3884C42.6408 50.6274 41.961 52.2905 41.9578 54.0234C41.9599 55.7858 42.6608 57.4754 43.9068 58.7218C45.1529 59.9681 46.8423 60.6694 48.6047 60.6719H51.3969C52.331 60.6731 53.2264 61.0447 53.8869 61.7052C54.5475 62.3657 54.9191 63.2612 54.9203 64.1953C54.9191 65.1294 54.5475 66.0249 53.8869 66.6854C53.2264 67.3459 52.331 67.7175 51.3969 67.7188Z"
                                                                fill="#F1913D" />
                                                            <path
                                                                d="M50.0063 84.3656C63.9328 84.3656 75.2609 73.0359 75.2609 59.1094C75.2609 45.1828 63.9328 33.8547 50.0063 33.8547C36.0797 33.8547 24.75 45.1828 24.75 59.1094C24.75 73.0359 36.0797 84.3656 50.0063 84.3656ZM50.0063 36.9797C62.2094 36.9797 72.1359 46.9062 72.1359 59.1094C72.1359 71.3125 62.2078 81.2406 50.0063 81.2406C37.8031 81.2406 27.875 71.3125 27.875 59.1094C27.875 46.9062 37.8031 36.9797 50.0063 36.9797Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Understand your <br>
                                                            monthly costs</a></h4>
                                                    <p class="text-center text-1">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Ut sollicitudin ipsum eu
                                                        massa sollicitudin facilisis. </p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                                <div class="icons-box default effec-icon animate__zoomIn wow animate__animated"
                                                    data-wow-duration="1.5s">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M95.925 47.6687L52.1359 5.73905C51.5551 5.19085 50.7862 4.88613 49.9875 4.88758C49.1888 4.88903 48.421 5.19655 47.8422 5.74686L4.09217 47.6656C3.63981 48.0922 3.32631 48.645 3.19247 49.2522C3.05864 49.8593 3.11066 50.4927 3.34178 51.0699C3.57289 51.6471 3.9724 52.1414 4.4883 52.4884C5.0042 52.8355 5.61262 53.0191 6.23436 53.0156H13.2656V93.5469C13.2656 93.9613 13.4302 94.3587 13.7233 94.6517C14.0163 94.9447 14.4137 95.1094 14.8281 95.1094H85.1562C85.5706 95.1094 85.9681 94.9447 86.2611 94.6517C86.5541 94.3587 86.7187 93.9613 86.7187 93.5469V53.0156H93.7969C94.4075 53.0157 95.0043 52.8332 95.5104 52.4916C96.0166 52.1499 96.4091 51.6648 96.6375 51.0984C96.8751 50.521 96.9343 49.8856 96.8073 49.2743C96.6803 48.6629 96.3729 48.1037 95.925 47.6687ZM93.7969 51.4531V49.8906H85.1562C84.7418 49.8906 84.3444 50.0552 84.0514 50.3483C83.7583 50.6413 83.5937 51.0387 83.5937 51.4531V91.9844H16.3906V51.4531C16.3906 51.0387 16.226 50.6413 15.933 50.3483C15.6399 50.0552 15.2425 49.8906 14.8281 49.8906L6.25311 49.925L49.9844 8.00311L93.8 49.8906L93.7969 51.4531Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M44.2593 55.7437C43.9663 55.4508 43.569 55.2863 43.1547 55.2863C42.7403 55.2863 42.343 55.4508 42.05 55.7437L29.1031 68.689C28.958 68.8342 28.843 69.0065 28.7645 69.1962C28.686 69.3858 28.6457 69.5891 28.6458 69.7943C28.6458 69.9995 28.6863 70.2027 28.7649 70.3923C28.8435 70.5819 28.9587 70.7541 29.1039 70.8992C29.2491 71.0443 29.4214 71.1593 29.611 71.2378C29.8007 71.3163 30.0039 71.3566 30.2091 71.3566C30.4144 71.3565 30.6176 71.316 30.8071 71.2374C30.9967 71.1588 31.169 71.0436 31.314 70.8984L43.1547 59.0578L51.364 67.2672C51.6571 67.5601 52.0544 67.7247 52.4687 67.7247C52.883 67.7247 53.2804 67.5601 53.5734 67.2672L68.2297 52.6109V58.3172C68.2297 58.7316 68.3943 59.129 68.6873 59.422C68.9803 59.7151 69.3778 59.8797 69.7922 59.8797C70.2066 59.8797 70.604 59.7151 70.897 59.422C71.19 59.129 71.3547 58.7316 71.3547 58.3172V48.8391C71.3543 48.5301 71.2624 48.2282 71.0905 47.9716C70.9186 47.7149 70.6745 47.5149 70.389 47.3969C70.1999 47.318 69.9971 47.2771 69.7922 47.2766H60.3125C59.8981 47.2766 59.5006 47.4412 59.2076 47.7342C58.9146 48.0272 58.75 48.4246 58.75 48.8391C58.75 49.2535 58.9146 49.6509 59.2076 49.9439C59.5006 50.2369 59.8981 50.4016 60.3125 50.4016H66.0172L52.4687 63.9531L44.2593 55.7437Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Get help with your down <br>
                                                            payment</a></h4>
                                                    <p class="text-center text-1">In fermentum dignissim mauris et blandit.
                                                        Fusce efficitur libero sit amet ullamcorper, nec volutpat justo
                                                        fringilla</p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-inner ">
                                            <div class="grid-layout-3">
                                                <div class="icons-box default effec-icon">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.825 95.1156H85.1625C85.5769 95.1156 85.9743 94.951 86.2673 94.658C86.5604 94.3649 86.725 93.9675 86.725 93.5531V53.0187H93.7922C95.0391 53.0187 96.1547 52.2703 96.6344 51.1125C96.874 50.5321 96.9345 49.8932 96.8081 49.2781C96.6817 48.663 96.3741 48.0998 95.925 47.6609L52.1359 5.73123C51.5537 5.18615 50.7855 4.88364 49.988 4.88538C49.1904 4.88713 48.4236 5.19299 47.8438 5.74061L29.4734 23.3437V12.2031C29.4734 11.7887 29.3088 11.3913 29.0158 11.0983C28.7228 10.8052 28.3253 10.6406 27.9109 10.6406H14.825C14.4106 10.6406 14.0132 10.8052 13.7201 11.0983C13.4271 11.3913 13.2625 11.7887 13.2625 12.2031V38.8797L4.09375 47.6656C3.64187 48.0963 3.3297 48.6527 3.19765 49.2627C3.0656 49.8728 3.11977 50.5085 3.35312 51.0875C3.58434 51.6606 3.98229 52.151 4.49544 52.4953C5.00859 52.8397 5.61329 53.022 6.23125 53.0187H13.2625V93.5531C13.2625 93.9675 13.4271 94.3649 13.7201 94.658C14.0132 94.951 14.4106 95.1156 14.825 95.1156ZM16.3875 13.764H26.3484V26.3375L16.3875 35.8703V13.764ZM6.26094 49.9172L23.0109 33.8594L28.9906 28.1344C29 28.125 29.0031 28.1125 29.0109 28.1031L49.9844 7.99842L93.7969 49.8953H85.1625C84.7481 49.8953 84.3507 50.0599 84.0576 50.3529C83.7646 50.646 83.6 51.0434 83.6 51.4578V91.9922H16.3875V51.4562C16.3875 51.0418 16.2229 50.6444 15.9299 50.3514C15.6368 50.0583 15.2394 49.8937 14.825 49.8937L6.26094 49.9172Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M48.8594 78.9703C52.625 78.9703 56.4031 78.0016 59.8031 76.0281C60.4922 77.2188 61.2328 78.4344 62.0453 79.6375C63.7031 82.1125 65.4828 84.4469 66.4781 85.4531C67.1866 86.1623 68.0283 86.7245 68.9547 87.1074C69.8812 87.4903 70.8741 87.6864 71.8766 87.6844C72.8793 87.6859 73.8724 87.4898 74.7993 87.1072C75.7261 86.7246 76.5685 86.1631 77.2781 85.4547L77.2828 85.4516C78.7106 84.0157 79.5114 82.0726 79.51 80.0476C79.5085 78.0227 78.7049 76.0807 77.275 74.6469C76.2735 73.6547 73.9391 71.875 71.4688 70.2203C70.2875 69.4293 69.0795 68.6788 67.8469 67.9703C70.2631 63.7911 71.2313 58.9309 70.6012 54.1448C69.9711 49.3587 67.778 44.9146 64.3625 41.5031C60.2172 37.3578 54.7063 35.075 48.8422 35.075C42.9781 35.075 37.4703 37.3563 33.3313 41.5031C31.2864 43.5347 29.6651 45.952 28.5614 48.6149C27.4577 51.2777 26.8935 54.1331 26.9016 57.0156C26.9016 62.8781 29.1844 68.3906 33.3297 72.5344C35.3678 74.5758 37.7886 76.195 40.4534 77.2994C43.1182 78.4038 45.9748 78.9716 48.8594 78.9703ZM75.0703 76.861C75.9136 77.7086 76.3871 78.8556 76.3874 80.0513C76.3877 81.2469 75.9148 82.3941 75.0719 83.2422C74.2252 84.0856 73.0792 84.5596 71.8841 84.5607C70.6891 84.5619 69.5421 84.0901 68.6938 83.2484C67.975 82.5234 66.3516 80.4516 64.6391 77.8953C63.8443 76.7184 63.0917 75.5134 62.3828 74.2828C62.4484 74.2313 62.5063 74.1688 62.5703 74.1156C63.1906 73.6203 63.7938 73.0969 64.3672 72.5297C64.9297 71.9625 65.45 71.3594 65.9453 70.7422C65.9969 70.6781 66.0594 70.6203 66.1094 70.5547C67.2875 71.2313 68.5172 72 69.7266 72.8141C72.2781 74.5235 74.3484 76.1469 75.0703 76.861ZM35.5391 43.7125C37.2815 41.9592 39.3545 40.5691 41.6381 39.6228C43.9217 38.6766 46.3703 38.193 48.8422 38.2C53.8703 38.2 58.5969 40.1578 62.1531 43.7125C68.5625 50.125 69.5 60.1875 64.375 67.6344L64.3719 67.6406C63.7155 68.5987 62.9739 69.4956 62.1563 70.3203C61.3269 71.1433 60.4248 71.8896 59.4609 72.55C52.0125 77.675 41.9516 76.7375 35.5391 70.325C31.9828 66.7703 30.025 62.0438 30.025 57.0156C30.025 51.9875 31.9828 47.2641 35.5391 43.7125Z"
                                                                fill="#F1913D" />
                                                            <path
                                                                d="M48.2188 72C48.6332 72 49.0306 71.8353 49.3236 71.5423C49.6166 71.2493 49.7813 70.8519 49.7813 70.4375C49.7813 70.0231 49.6166 69.6256 49.3236 69.3326C49.0306 69.0396 48.6332 68.875 48.2188 68.875C46.7431 68.8788 45.2814 68.59 43.9181 68.0251C42.5548 67.4603 41.3171 66.6307 40.2766 65.5843C39.231 64.5445 38.4022 63.3074 37.8381 61.9449C37.2741 60.5824 36.986 59.1215 36.9906 57.6468C36.9908 57.2324 36.8264 56.8349 36.5335 56.5418C36.2407 56.2486 35.8433 56.0838 35.4289 56.0836C35.0145 56.0834 34.617 56.2478 34.3238 56.5406C34.0307 56.8335 33.8658 57.2309 33.8656 57.6453C33.8625 61.4797 35.3547 65.0828 38.0672 67.7937C40.7797 70.5047 44.3828 71.9984 48.2172 71.9984L48.2188 72Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Find out how much you
                                                            can afford</a></h4>
                                                    <p class="text-center text-1">We’ll help you estimate your budget range.
                                                        Save to your buyer
                                                        profile
                                                        to help
                                                        in your search</p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                                <div class="icons-box default effec-icon">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.23437 53.0156H13.2656V93.5469C13.2656 93.9613 13.4302 94.3587 13.7233 94.6517C14.0163 94.9447 14.4137 95.1094 14.8281 95.1094H85.1562C85.5706 95.1094 85.9681 94.9447 86.2611 94.6517C86.5541 94.3587 86.7188 93.9613 86.7188 93.5469V53.0156H93.7969C94.4075 53.0157 95.0043 52.8332 95.5105 52.4916C96.0166 52.1499 96.4091 51.6648 96.6375 51.0984C96.8751 50.521 96.9343 49.8856 96.8073 49.2743C96.6803 48.6629 96.373 48.1037 95.925 47.6687L52.1359 5.73905C51.5551 5.19085 50.7862 4.88613 49.9875 4.88758C49.1888 4.88903 48.421 5.19655 47.8422 5.74686L4.09219 47.6656C3.63982 48.0922 3.32632 48.645 3.19249 49.2522C3.05865 49.8593 3.11068 50.4927 3.34179 51.0699C3.57291 51.6471 3.97241 52.1414 4.48832 52.4884C5.00422 52.8355 5.61263 53.0191 6.23437 53.0156ZM49.9844 8.00311L93.8 49.8906L93.7969 51.4531V49.8906H85.1562C84.7418 49.8906 84.3444 50.0552 84.0514 50.3483C83.7584 50.6413 83.5938 51.0387 83.5938 51.4531V91.9844H16.3906V51.4531C16.3906 51.0387 16.226 50.6413 15.933 50.3483C15.64 50.0552 15.2425 49.8906 14.8281 49.8906L6.25312 49.925L49.9844 8.00311Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M51.3969 67.7188H48.6047C47.6709 67.7171 46.7758 67.3453 46.1156 66.6848C45.4554 66.0244 45.084 65.1291 45.0828 64.1953C45.0828 63.7809 44.9182 63.3835 44.6252 63.0905C44.3321 62.7974 43.9347 62.6328 43.5203 62.6328C43.1059 62.6328 42.7085 62.7974 42.4155 63.0905C42.1224 63.3835 41.9578 63.7809 41.9578 64.1953C41.961 65.9279 42.6405 67.5909 43.8517 68.8298C45.063 70.0687 46.7101 70.7858 48.4422 70.8281V73.9062C48.4422 74.3207 48.6068 74.7181 48.8998 75.0111C49.1929 75.3041 49.5903 75.4688 50.0047 75.4688C50.4191 75.4688 50.8165 75.3041 51.1095 75.0111C51.4026 74.7181 51.5672 74.3207 51.5672 73.9062V70.8281C53.2982 70.7842 54.9437 70.0664 56.1536 68.8277C57.3635 67.5889 58.0422 65.9269 58.0453 64.1953C58.0432 62.4327 57.3421 60.7428 56.0957 59.4964C54.8494 58.2501 53.1595 57.5489 51.3969 57.5469H48.6047C47.6709 57.5452 46.7758 57.1734 46.1156 56.513C45.4554 55.8525 45.084 54.9573 45.0828 54.0234C45.084 53.0896 45.4554 52.1944 46.1156 51.5339C46.7758 50.8735 47.6709 50.5017 48.6047 50.5H49.9797C49.9891 50.5 49.9953 50.5047 50.0062 50.5047C50.0172 50.5047 50.0219 50.5 50.0328 50.5H51.3969C52.331 50.5012 53.2264 50.8729 53.8869 51.5334C54.5475 52.1939 54.9191 53.0893 54.9203 54.0234C54.9203 54.4378 55.0849 54.8353 55.378 55.1283C55.671 55.4213 56.0684 55.5859 56.4828 55.5859C56.8972 55.5859 57.2946 55.4213 57.5877 55.1283C57.8807 54.8353 58.0453 54.4378 58.0453 54.0234C58.0418 52.2924 57.3631 50.631 56.1536 49.3926C54.9441 48.1542 53.2992 47.4365 51.5687 47.3922V44.3203C51.5687 43.9059 51.4041 43.5085 51.1111 43.2155C50.8181 42.9224 50.4206 42.7578 50.0062 42.7578C49.5918 42.7578 49.1944 42.9224 48.9014 43.2155C48.6084 43.5085 48.4437 43.9059 48.4437 44.3203V47.3906C46.7114 47.4326 45.0638 48.1494 43.8523 49.3884C42.6408 50.6274 41.961 52.2905 41.9578 54.0234C41.9599 55.7858 42.6608 57.4754 43.9068 58.7218C45.1529 59.9681 46.8423 60.6694 48.6047 60.6719H51.3969C52.331 60.6731 53.2264 61.0447 53.8869 61.7052C54.5475 62.3657 54.9191 63.2612 54.9203 64.1953C54.9191 65.1294 54.5475 66.0249 53.8869 66.6854C53.2264 67.3459 52.331 67.7175 51.3969 67.7188Z"
                                                                fill="#F1913D" />
                                                            <path
                                                                d="M50.0063 84.3656C63.9328 84.3656 75.2609 73.0359 75.2609 59.1094C75.2609 45.1828 63.9328 33.8547 50.0063 33.8547C36.0797 33.8547 24.75 45.1828 24.75 59.1094C24.75 73.0359 36.0797 84.3656 50.0063 84.3656ZM50.0063 36.9797C62.2094 36.9797 72.1359 46.9062 72.1359 59.1094C72.1359 71.3125 62.2078 81.2406 50.0063 81.2406C37.8031 81.2406 27.875 71.3125 27.875 59.1094C27.875 46.9062 37.8031 36.9797 50.0063 36.9797Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Understand your
                                                            monthly costs</a></h4>
                                                    <p class="text-center text-1">We’ll help you estimate your budget range.
                                                        Save to your buyer
                                                        profile
                                                        to help
                                                        in your search</p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                                <div class="icons-box default effec-icon">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M95.925 47.6687L52.1359 5.73905C51.5551 5.19085 50.7862 4.88613 49.9875 4.88758C49.1888 4.88903 48.421 5.19655 47.8422 5.74686L4.09217 47.6656C3.63981 48.0922 3.32631 48.645 3.19247 49.2522C3.05864 49.8593 3.11066 50.4927 3.34178 51.0699C3.57289 51.6471 3.9724 52.1414 4.4883 52.4884C5.0042 52.8355 5.61262 53.0191 6.23436 53.0156H13.2656V93.5469C13.2656 93.9613 13.4302 94.3587 13.7233 94.6517C14.0163 94.9447 14.4137 95.1094 14.8281 95.1094H85.1562C85.5706 95.1094 85.9681 94.9447 86.2611 94.6517C86.5541 94.3587 86.7187 93.9613 86.7187 93.5469V53.0156H93.7969C94.4075 53.0157 95.0043 52.8332 95.5104 52.4916C96.0166 52.1499 96.4091 51.6648 96.6375 51.0984C96.8751 50.521 96.9343 49.8856 96.8073 49.2743C96.6803 48.6629 96.3729 48.1037 95.925 47.6687ZM93.7969 51.4531V49.8906H85.1562C84.7418 49.8906 84.3444 50.0552 84.0514 50.3483C83.7583 50.6413 83.5937 51.0387 83.5937 51.4531V91.9844H16.3906V51.4531C16.3906 51.0387 16.226 50.6413 15.933 50.3483C15.6399 50.0552 15.2425 49.8906 14.8281 49.8906L6.25311 49.925L49.9844 8.00311L93.8 49.8906L93.7969 51.4531Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M44.2593 55.7437C43.9663 55.4508 43.569 55.2863 43.1547 55.2863C42.7403 55.2863 42.343 55.4508 42.05 55.7437L29.1031 68.689C28.958 68.8342 28.843 69.0065 28.7645 69.1962C28.686 69.3858 28.6457 69.5891 28.6458 69.7943C28.6458 69.9995 28.6863 70.2027 28.7649 70.3923C28.8435 70.5819 28.9587 70.7541 29.1039 70.8992C29.2491 71.0443 29.4214 71.1593 29.611 71.2378C29.8007 71.3163 30.0039 71.3566 30.2091 71.3566C30.4144 71.3565 30.6176 71.316 30.8071 71.2374C30.9967 71.1588 31.169 71.0436 31.314 70.8984L43.1547 59.0578L51.364 67.2672C51.6571 67.5601 52.0544 67.7247 52.4687 67.7247C52.883 67.7247 53.2804 67.5601 53.5734 67.2672L68.2297 52.6109V58.3172C68.2297 58.7316 68.3943 59.129 68.6873 59.422C68.9803 59.7151 69.3778 59.8797 69.7922 59.8797C70.2066 59.8797 70.604 59.7151 70.897 59.422C71.19 59.129 71.3547 58.7316 71.3547 58.3172V48.8391C71.3543 48.5301 71.2624 48.2282 71.0905 47.9716C70.9186 47.7149 70.6745 47.5149 70.389 47.3969C70.1999 47.318 69.9971 47.2771 69.7922 47.2766H60.3125C59.8981 47.2766 59.5006 47.4412 59.2076 47.7342C58.9146 48.0272 58.75 48.4246 58.75 48.8391C58.75 49.2535 58.9146 49.6509 59.2076 49.9439C59.5006 50.2369 59.8981 50.4016 60.3125 50.4016H66.0172L52.4687 63.9531L44.2593 55.7437Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Get help with your down
                                                            payment</a></h4>
                                                    <p class="text-center text-1">We’ll help you estimate your budget range.
                                                        Save to your buyer
                                                        profile
                                                        to help
                                                        in your search</p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-inner ">
                                            <div class="grid-layout-3">
                                                <div class="icons-box default effec-icon">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.825 95.1156H85.1625C85.5769 95.1156 85.9743 94.951 86.2673 94.658C86.5604 94.3649 86.725 93.9675 86.725 93.5531V53.0187H93.7922C95.0391 53.0187 96.1547 52.2703 96.6344 51.1125C96.874 50.5321 96.9345 49.8932 96.8081 49.2781C96.6817 48.663 96.3741 48.0998 95.925 47.6609L52.1359 5.73123C51.5537 5.18615 50.7855 4.88364 49.988 4.88538C49.1904 4.88713 48.4236 5.19299 47.8438 5.74061L29.4734 23.3437V12.2031C29.4734 11.7887 29.3088 11.3913 29.0158 11.0983C28.7228 10.8052 28.3253 10.6406 27.9109 10.6406H14.825C14.4106 10.6406 14.0132 10.8052 13.7201 11.0983C13.4271 11.3913 13.2625 11.7887 13.2625 12.2031V38.8797L4.09375 47.6656C3.64187 48.0963 3.3297 48.6527 3.19765 49.2627C3.0656 49.8728 3.11977 50.5085 3.35312 51.0875C3.58434 51.6606 3.98229 52.151 4.49544 52.4953C5.00859 52.8397 5.61329 53.022 6.23125 53.0187H13.2625V93.5531C13.2625 93.9675 13.4271 94.3649 13.7201 94.658C14.0132 94.951 14.4106 95.1156 14.825 95.1156ZM16.3875 13.764H26.3484V26.3375L16.3875 35.8703V13.764ZM6.26094 49.9172L23.0109 33.8594L28.9906 28.1344C29 28.125 29.0031 28.1125 29.0109 28.1031L49.9844 7.99842L93.7969 49.8953H85.1625C84.7481 49.8953 84.3507 50.0599 84.0576 50.3529C83.7646 50.646 83.6 51.0434 83.6 51.4578V91.9922H16.3875V51.4562C16.3875 51.0418 16.2229 50.6444 15.9299 50.3514C15.6368 50.0583 15.2394 49.8937 14.825 49.8937L6.26094 49.9172Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M48.8594 78.9703C52.625 78.9703 56.4031 78.0016 59.8031 76.0281C60.4922 77.2188 61.2328 78.4344 62.0453 79.6375C63.7031 82.1125 65.4828 84.4469 66.4781 85.4531C67.1866 86.1623 68.0283 86.7245 68.9547 87.1074C69.8812 87.4903 70.8741 87.6864 71.8766 87.6844C72.8793 87.6859 73.8724 87.4898 74.7993 87.1072C75.7261 86.7246 76.5685 86.1631 77.2781 85.4547L77.2828 85.4516C78.7106 84.0157 79.5114 82.0726 79.51 80.0476C79.5085 78.0227 78.7049 76.0807 77.275 74.6469C76.2735 73.6547 73.9391 71.875 71.4688 70.2203C70.2875 69.4293 69.0795 68.6788 67.8469 67.9703C70.2631 63.7911 71.2313 58.9309 70.6012 54.1448C69.9711 49.3587 67.778 44.9146 64.3625 41.5031C60.2172 37.3578 54.7063 35.075 48.8422 35.075C42.9781 35.075 37.4703 37.3563 33.3313 41.5031C31.2864 43.5347 29.6651 45.952 28.5614 48.6149C27.4577 51.2777 26.8935 54.1331 26.9016 57.0156C26.9016 62.8781 29.1844 68.3906 33.3297 72.5344C35.3678 74.5758 37.7886 76.195 40.4534 77.2994C43.1182 78.4038 45.9748 78.9716 48.8594 78.9703ZM75.0703 76.861C75.9136 77.7086 76.3871 78.8556 76.3874 80.0513C76.3877 81.2469 75.9148 82.3941 75.0719 83.2422C74.2252 84.0856 73.0792 84.5596 71.8841 84.5607C70.6891 84.5619 69.5421 84.0901 68.6938 83.2484C67.975 82.5234 66.3516 80.4516 64.6391 77.8953C63.8443 76.7184 63.0917 75.5134 62.3828 74.2828C62.4484 74.2313 62.5063 74.1688 62.5703 74.1156C63.1906 73.6203 63.7938 73.0969 64.3672 72.5297C64.9297 71.9625 65.45 71.3594 65.9453 70.7422C65.9969 70.6781 66.0594 70.6203 66.1094 70.5547C67.2875 71.2313 68.5172 72 69.7266 72.8141C72.2781 74.5235 74.3484 76.1469 75.0703 76.861ZM35.5391 43.7125C37.2815 41.9592 39.3545 40.5691 41.6381 39.6228C43.9217 38.6766 46.3703 38.193 48.8422 38.2C53.8703 38.2 58.5969 40.1578 62.1531 43.7125C68.5625 50.125 69.5 60.1875 64.375 67.6344L64.3719 67.6406C63.7155 68.5987 62.9739 69.4956 62.1563 70.3203C61.3269 71.1433 60.4248 71.8896 59.4609 72.55C52.0125 77.675 41.9516 76.7375 35.5391 70.325C31.9828 66.7703 30.025 62.0438 30.025 57.0156C30.025 51.9875 31.9828 47.2641 35.5391 43.7125Z"
                                                                fill="#F1913D" />
                                                            <path
                                                                d="M48.2188 72C48.6332 72 49.0306 71.8353 49.3236 71.5423C49.6166 71.2493 49.7813 70.8519 49.7813 70.4375C49.7813 70.0231 49.6166 69.6256 49.3236 69.3326C49.0306 69.0396 48.6332 68.875 48.2188 68.875C46.7431 68.8788 45.2814 68.59 43.9181 68.0251C42.5548 67.4603 41.3171 66.6307 40.2766 65.5843C39.231 64.5445 38.4022 63.3074 37.8381 61.9449C37.2741 60.5824 36.986 59.1215 36.9906 57.6468C36.9908 57.2324 36.8264 56.8349 36.5335 56.5418C36.2407 56.2486 35.8433 56.0838 35.4289 56.0836C35.0145 56.0834 34.617 56.2478 34.3238 56.5406C34.0307 56.8335 33.8658 57.2309 33.8656 57.6453C33.8625 61.4797 35.3547 65.0828 38.0672 67.7937C40.7797 70.5047 44.3828 71.9984 48.2172 71.9984L48.2188 72Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Find out how much you
                                                            can afford</a></h4>
                                                    <p class="text-center text-1">We’ll help you estimate your budget range.
                                                        Save to your buyer
                                                        profile
                                                        to help
                                                        in your search</p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                                <div class="icons-box default effec-icon">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.23437 53.0156H13.2656V93.5469C13.2656 93.9613 13.4302 94.3587 13.7233 94.6517C14.0163 94.9447 14.4137 95.1094 14.8281 95.1094H85.1562C85.5706 95.1094 85.9681 94.9447 86.2611 94.6517C86.5541 94.3587 86.7188 93.9613 86.7188 93.5469V53.0156H93.7969C94.4075 53.0157 95.0043 52.8332 95.5105 52.4916C96.0166 52.1499 96.4091 51.6648 96.6375 51.0984C96.8751 50.521 96.9343 49.8856 96.8073 49.2743C96.6803 48.6629 96.373 48.1037 95.925 47.6687L52.1359 5.73905C51.5551 5.19085 50.7862 4.88613 49.9875 4.88758C49.1888 4.88903 48.421 5.19655 47.8422 5.74686L4.09219 47.6656C3.63982 48.0922 3.32632 48.645 3.19249 49.2522C3.05865 49.8593 3.11068 50.4927 3.34179 51.0699C3.57291 51.6471 3.97241 52.1414 4.48832 52.4884C5.00422 52.8355 5.61263 53.0191 6.23437 53.0156ZM49.9844 8.00311L93.8 49.8906L93.7969 51.4531V49.8906H85.1562C84.7418 49.8906 84.3444 50.0552 84.0514 50.3483C83.7584 50.6413 83.5938 51.0387 83.5938 51.4531V91.9844H16.3906V51.4531C16.3906 51.0387 16.226 50.6413 15.933 50.3483C15.64 50.0552 15.2425 49.8906 14.8281 49.8906L6.25312 49.925L49.9844 8.00311Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M51.3969 67.7188H48.6047C47.6709 67.7171 46.7758 67.3453 46.1156 66.6848C45.4554 66.0244 45.084 65.1291 45.0828 64.1953C45.0828 63.7809 44.9182 63.3835 44.6252 63.0905C44.3321 62.7974 43.9347 62.6328 43.5203 62.6328C43.1059 62.6328 42.7085 62.7974 42.4155 63.0905C42.1224 63.3835 41.9578 63.7809 41.9578 64.1953C41.961 65.9279 42.6405 67.5909 43.8517 68.8298C45.063 70.0687 46.7101 70.7858 48.4422 70.8281V73.9062C48.4422 74.3207 48.6068 74.7181 48.8998 75.0111C49.1929 75.3041 49.5903 75.4688 50.0047 75.4688C50.4191 75.4688 50.8165 75.3041 51.1095 75.0111C51.4026 74.7181 51.5672 74.3207 51.5672 73.9062V70.8281C53.2982 70.7842 54.9437 70.0664 56.1536 68.8277C57.3635 67.5889 58.0422 65.9269 58.0453 64.1953C58.0432 62.4327 57.3421 60.7428 56.0957 59.4964C54.8494 58.2501 53.1595 57.5489 51.3969 57.5469H48.6047C47.6709 57.5452 46.7758 57.1734 46.1156 56.513C45.4554 55.8525 45.084 54.9573 45.0828 54.0234C45.084 53.0896 45.4554 52.1944 46.1156 51.5339C46.7758 50.8735 47.6709 50.5017 48.6047 50.5H49.9797C49.9891 50.5 49.9953 50.5047 50.0062 50.5047C50.0172 50.5047 50.0219 50.5 50.0328 50.5H51.3969C52.331 50.5012 53.2264 50.8729 53.8869 51.5334C54.5475 52.1939 54.9191 53.0893 54.9203 54.0234C54.9203 54.4378 55.0849 54.8353 55.378 55.1283C55.671 55.4213 56.0684 55.5859 56.4828 55.5859C56.8972 55.5859 57.2946 55.4213 57.5877 55.1283C57.8807 54.8353 58.0453 54.4378 58.0453 54.0234C58.0418 52.2924 57.3631 50.631 56.1536 49.3926C54.9441 48.1542 53.2992 47.4365 51.5687 47.3922V44.3203C51.5687 43.9059 51.4041 43.5085 51.1111 43.2155C50.8181 42.9224 50.4206 42.7578 50.0062 42.7578C49.5918 42.7578 49.1944 42.9224 48.9014 43.2155C48.6084 43.5085 48.4437 43.9059 48.4437 44.3203V47.3906C46.7114 47.4326 45.0638 48.1494 43.8523 49.3884C42.6408 50.6274 41.961 52.2905 41.9578 54.0234C41.9599 55.7858 42.6608 57.4754 43.9068 58.7218C45.1529 59.9681 46.8423 60.6694 48.6047 60.6719H51.3969C52.331 60.6731 53.2264 61.0447 53.8869 61.7052C54.5475 62.3657 54.9191 63.2612 54.9203 64.1953C54.9191 65.1294 54.5475 66.0249 53.8869 66.6854C53.2264 67.3459 52.331 67.7175 51.3969 67.7188Z"
                                                                fill="#F1913D" />
                                                            <path
                                                                d="M50.0063 84.3656C63.9328 84.3656 75.2609 73.0359 75.2609 59.1094C75.2609 45.1828 63.9328 33.8547 50.0063 33.8547C36.0797 33.8547 24.75 45.1828 24.75 59.1094C24.75 73.0359 36.0797 84.3656 50.0063 84.3656ZM50.0063 36.9797C62.2094 36.9797 72.1359 46.9062 72.1359 59.1094C72.1359 71.3125 62.2078 81.2406 50.0063 81.2406C37.8031 81.2406 27.875 71.3125 27.875 59.1094C27.875 46.9062 37.8031 36.9797 50.0063 36.9797Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Understand your
                                                            monthly costs</a></h4>
                                                    <p class="text-center text-1">We’ll help you estimate your budget range.
                                                        Save to your buyer
                                                        profile
                                                        to help
                                                        in your search</p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                                <div class="icons-box default effec-icon">
                                                    <div class="tf-icon text-center">
                                                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M95.925 47.6687L52.1359 5.73905C51.5551 5.19085 50.7862 4.88613 49.9875 4.88758C49.1888 4.88903 48.421 5.19655 47.8422 5.74686L4.09217 47.6656C3.63981 48.0922 3.32631 48.645 3.19247 49.2522C3.05864 49.8593 3.11066 50.4927 3.34178 51.0699C3.57289 51.6471 3.9724 52.1414 4.4883 52.4884C5.0042 52.8355 5.61262 53.0191 6.23436 53.0156H13.2656V93.5469C13.2656 93.9613 13.4302 94.3587 13.7233 94.6517C14.0163 94.9447 14.4137 95.1094 14.8281 95.1094H85.1562C85.5706 95.1094 85.9681 94.9447 86.2611 94.6517C86.5541 94.3587 86.7187 93.9613 86.7187 93.5469V53.0156H93.7969C94.4075 53.0157 95.0043 52.8332 95.5104 52.4916C96.0166 52.1499 96.4091 51.6648 96.6375 51.0984C96.8751 50.521 96.9343 49.8856 96.8073 49.2743C96.6803 48.6629 96.3729 48.1037 95.925 47.6687ZM93.7969 51.4531V49.8906H85.1562C84.7418 49.8906 84.3444 50.0552 84.0514 50.3483C83.7583 50.6413 83.5937 51.0387 83.5937 51.4531V91.9844H16.3906V51.4531C16.3906 51.0387 16.226 50.6413 15.933 50.3483C15.6399 50.0552 15.2425 49.8906 14.8281 49.8906L6.25311 49.925L49.9844 8.00311L93.8 49.8906L93.7969 51.4531Z"
                                                                fill="#2C2E33" />
                                                            <path
                                                                d="M44.2593 55.7437C43.9663 55.4508 43.569 55.2863 43.1547 55.2863C42.7403 55.2863 42.343 55.4508 42.05 55.7437L29.1031 68.689C28.958 68.8342 28.843 69.0065 28.7645 69.1962C28.686 69.3858 28.6457 69.5891 28.6458 69.7943C28.6458 69.9995 28.6863 70.2027 28.7649 70.3923C28.8435 70.5819 28.9587 70.7541 29.1039 70.8992C29.2491 71.0443 29.4214 71.1593 29.611 71.2378C29.8007 71.3163 30.0039 71.3566 30.2091 71.3566C30.4144 71.3565 30.6176 71.316 30.8071 71.2374C30.9967 71.1588 31.169 71.0436 31.314 70.8984L43.1547 59.0578L51.364 67.2672C51.6571 67.5601 52.0544 67.7247 52.4687 67.7247C52.883 67.7247 53.2804 67.5601 53.5734 67.2672L68.2297 52.6109V58.3172C68.2297 58.7316 68.3943 59.129 68.6873 59.422C68.9803 59.7151 69.3778 59.8797 69.7922 59.8797C70.2066 59.8797 70.604 59.7151 70.897 59.422C71.19 59.129 71.3547 58.7316 71.3547 58.3172V48.8391C71.3543 48.5301 71.2624 48.2282 71.0905 47.9716C70.9186 47.7149 70.6745 47.5149 70.389 47.3969C70.1999 47.318 69.9971 47.2771 69.7922 47.2766H60.3125C59.8981 47.2766 59.5006 47.4412 59.2076 47.7342C58.9146 48.0272 58.75 48.4246 58.75 48.8391C58.75 49.2535 58.9146 49.6509 59.2076 49.9439C59.5006 50.2369 59.8981 50.4016 60.3125 50.4016H66.0172L52.4687 63.9531L44.2593 55.7437Z"
                                                                fill="#F1913D" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="title text-center"><a href="#">Get help with your down
                                                            payment</a></h4>
                                                    <p class="text-center text-1">We’ll help you estimate your budget range.
                                                        Save to your buyer
                                                        profile
                                                        to help
                                                        in your search</p>
                                                    <a href="#" class="tf-btn style-border pd-5 mx-auto">
                                                        Learn More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text text-center text-1 " data-wow-duration="2s">Looking to spotlight a unique
                                    property with expert
                                    marketing?<a href="#" class="fw-7">Let’s chat</a></p>
                            </div>
                        </div>
                    </div>

                </section><!-- /.section-help -->

                <!-- .section-pre-approved -->
                <section class="section-pre-approved tf-spacing-1">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="content">
                                    <div class="heading-section ">
                                        <h2 class="title text-anime-wave">Do you need a home loan? <br>
                                            Get pre-approved</h2>
                                        <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                            data-wow-delay="0s">Find a lender who can offer competitive mortgage
                                            rates and help
                                            you with
                                            pre-approval.
                                        </p>
                                    </div>
                                    <form class="form-pre-approved">
                                        <div class="cols ">
                                            <fieldset>
                                                <label class=" text-1 fw-6 mb-12" for="amount">Total Amount</label>
                                                <input type="number" id="amount" placeholder="1000">
                                            </fieldset>
                                            <div class="wrap-input">
                                                <fieldset class="payment">
                                                    <label class="text-1 fw-6 mb-12" for="payment">Down Payment</label>
                                                    <input type="number" id="payment" placeholder="2000">
                                                </fieldset>
                                                <fieldset class="percent">
                                                    <input class="input-percent" type="text" value="20%">
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <fieldset class="interest-rate">
                                                <label class="text-1 fw-6 mb-12" for="interestRate">Interest Rate</label>
                                                <input type="number" id="interestRate" placeholder="0">
                                            </fieldset>
                                            <div class="select">
                                                <label class="text-1 fw-6 mb-12">Amortization Period (months)</label>
                                                <div class="nice-select" tabindex="0">
                                                    <span class="current">Select amortization period</span>
                                                    <ul class="list">
                                                        <li data-value class="option selected">Select amortization period
                                                        </li>
                                                        <li data-value="1 month" class="option">1 month</li>
                                                        <li data-value="2 months" class="option">2 months</li>
                                                        <li data-value="3 months" class="option">3 months</li>
                                                        <li data-value="4 months" class="option">4 months</li>
                                                        <li data-value="5 months" class="option">5 months</li>
                                                        <li data-value="6 months" class="option">6 months</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cols">
                                            <fieldset>
                                                <label class=" text-1 fw-6 mb-12" for="tax">Property Tax</label>
                                                <input type="number" id="tax" placeholder="$3000">
                                            </fieldset>
                                            <fieldset>
                                                <label class=" text-1 fw-6 mb-12" for="insurance">Home Insurance</label>
                                                <input type="number" id="insurance" placeholder="$3000">
                                            </fieldset>
                                        </div>
                                        <p class="text-1">Your estimated monthly payment: <span>8000</span>
                                        </p>
                                        <div class="wrap-btn">
                                            <a href="#" class="tf-btn bg-color-primary pd-6 fw-7">
                                                Calculate now
                                            </a>
                                            <a href="#" class="tf-btn style-border pd-7 fw-7 ">Start over</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-wrap img-animation wow animate__animated">
                                    <img class="lazyload parallax-img" data-src="{{ url('frontend/images/section/section-pre-approved.jpg') }}"
                                        src="{{ url('frontend/images/section/section-pre-approved.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- /.section-pre-approved -->

                <!-- section-neighborhoods -->
                <section class="section-neighborhoods ">
                    <div class="tf-container full">
                        <div class="col-12">
                            <div class="heading-section text-center mb-48">
                                <h2 class="title text-anime-wave">Explore The Neighborhoods</h2>
                                <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                    data-wow-delay="0s">Find your dream apartment with our listing
                                </p>
                            </div>
                            <div class="wrap-neighborhoods">
                                <div class="box-location hover-img item-1">
                                    <div class="image-wrap">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ url('frontend/images/section/location-9.jpg') }}"
                                                src="{{ url('frontend/images/section/location-9.jpg') }}" alt="">
                                        </a>

                                    </div>
                                    <div class="content">
                                        <h6 class="text-white">New York</h6>
                                        <a href="#"
                                            class="text-1 tf-btn style-border pd-23 text-white  tf-btn style-border pd-23">2.491
                                            Properties <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="box-location hover-img item-2">
                                    <div class="image-wrap">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ url('frontend/images/section/location-10.jpg') }}"
                                                src="{{ url('frontend/images/section/location-10.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="text-white">New York</h6>
                                        <a href="#" class="text-1 tf-btn style-border pd-23 text-white">2.491 Properties <i
                                                class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="box-location hover-img item-3">
                                    <div class="image-wrap">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ url('frontend/images/section/location-11.jpg') }}"
                                                src="{{ url('frontend/images/section/location-11.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="text-white">New York</h6>
                                        <a href="#" class="text-1 tf-btn style-border pd-23 text-white">2.491 Properties <i
                                                class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="box-location hover-img item-4">
                                    <div class="image-wrap">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ url('frontend/images/section/location-12.jpg') }}"
                                                src="{{ url('frontend/images/section/location-12.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="text-white">New York</h6>
                                        <a href="#" class="text-1 tf-btn style-border pd-23 text-white">2.491 Properties <i
                                                class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="box-location hover-img item-5">
                                    <div class="image-wrap">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ url('frontend/images/section/location-13.jpg') }}"
                                                src="{{ url('frontend/images/section/location-13.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="text-white">New York</h6>
                                        <a href="#" class="text-1 tf-btn style-border pd-23 text-white">2.491 Properties <i
                                                class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="box-location hover-img item-6">
                                    <div class="image-wrap">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ url('frontend/images/section/location-14.jpg') }}"
                                                src="{{ url('frontend/images/section/location-14.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="text-white">New York</h6>
                                        <a href="#" class="text-1 tf-btn style-border pd-23 text-white">2.491 Properties <i
                                                class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="box-location hover-img item-7">
                                    <div class="image-wrap">
                                        <a href="#">
                                            <img class="lazyload" data-src="{{ url('frontend/images/section/location-15.jpg') }}"
                                                src="{{ url('frontend/images/section/location-15.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="text-white">New York</h6>
                                        <a href="#" class="text-1 tf-btn style-border pd-23 text-white">2.491 Properties <i
                                                class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- /.section-neighborhoods -->

                <!-- .section-listing -->
                <section class="section-listing tf-spacing-1">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center mb-48">
                                    <h2 class="title text-anime-wave">Open Houses Listings</h2>
                                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                        data-wow-delay="0s">Thousands of luxury home enthusiasts just like you
                                        visit our website.
                                    </p>
                                </div>
                                <div class="swiper style-pagination tf-sw-mobile" data-screen="992" data-preview="1"
                                    data-space="15">
                                    <div class="swiper-wrapper tf-layout-mobile-lg lg-col-2 ">
                                        <div class="swiper-slide">
                                            <div class="box-house hover-img style-list ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-list-1.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-list-1.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">For Sale</li>
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
                                                        <a href="property-detail-v1.html"> Elegant studio flat</a>
                                                    </h5>
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bed"></i>Beds<span>4</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-sqft"></i>Sqft<span>1150</span>
                                                            </div>
                                                        </li>
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bath"></i>Baths<span>2</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-garage"></i>Garage<span>2</span>
                                                            </div>
                                                        </li>

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
                                        <div class="swiper-slide">
                                            <div class="box-house hover-img style-list ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-list-2.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-list-2.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">For Sale</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bed"></i>Beds<span>4</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-sqft"></i>Sqft<span>1150</span>
                                                            </div>
                                                        </li>
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bath"></i>Baths<span>2</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-garage"></i>Garage<span>2</span>
                                                            </div>
                                                        </li>

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
                                        <div class="swiper-slide">
                                            <div class="box-house hover-img style-list ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-list-3.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-list-3.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">For Sale</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bed"></i>Beds<span>4</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-sqft"></i>Sqft<span>1150</span>
                                                            </div>
                                                        </li>
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bath"></i>Baths<span>2</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-garage"></i>Garage<span>2</span>
                                                            </div>
                                                        </li>

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
                                        <div class="swiper-slide">
                                            <div class="box-house hover-img style-list ">
                                                <div class="image-wrap">
                                                    <a href="property-detail-v1.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/section/box-house-list-4.jpg') }}"
                                                            src="{{ url('frontend/images/section/box-house-list-4.jpg') }}" alt="">
                                                    </a>
                                                    <ul class="box-tag flex gap-8 ">
                                                        <li class="flat-tag text-4 bg-main fw-6 text-white">For Sale</li>
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
                                                    <p class="location text-1 line-clamp-1 ">
                                                        <i class="icon-location"></i> Los Angeles, California 91604
                                                    </p>
                                                    <ul class="meta-list flex">
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bed"></i>Beds<span>4</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-sqft"></i>Sqft<span>1150</span>
                                                            </div>
                                                        </li>
                                                        <li class="meta-item">
                                                            <div class="text-9 flex"><i
                                                                    class="icon-bath"></i>Baths<span>2</span>
                                                            </div>
                                                            <div class="text-9 flex"><i
                                                                    class="icon-garage"></i>Garage<span>2</span>
                                                            </div>
                                                        </li>

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
                                    <div class="sw-pagination sw-pagination-mb text-center mt-20 d-lg-none d-block"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /.section-listing -->

                <!-- section-work-together -->
                <section class="section-work-together ">
                    <div class="wg-partner  tf-spacing-1">
                        <div class="tf-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading-section  text-center mb-48">
                                        <h2 class="title text-white text-anime-wave">Let’s Work Together</h2>
                                        <p class="text-1 text-white wow animate__fadeInUp animate__animated"
                                            data-wow-duration="1.5s" data-wow-delay="0s">Thousands of luxury home
                                            enthusiasts
                                            just like you
                                            visit
                                            our website.
                                        </p>
                                    </div>
                                    <div class="swiper brand-slide " data-preview="6" data-tablet="4" data-mobile-sm="3"
                                        data-mobile="1.8" data-space="15" data-space-md="30" data-space-lg="30">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="partner-item style-2 ">
                                                    <svg width="126" height="82" viewBox="0 0 126 82" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2304_5655)">
                                                            <path
                                                                d="M35.082 30.0261C35.082 30.2227 34.92 30.3835 34.722 30.3835H29.61C29.412 30.3835 29.25 30.2227 29.25 30.0261V24.9502C29.25 24.7536 29.412 24.5928 29.61 24.5928H34.722C34.92 24.5928 35.082 24.7536 35.082 24.9502V30.0261Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M42.426 30.0261C42.426 30.2227 42.264 30.3835 42.066 30.3835H36.954C36.756 30.3835 36.594 30.2227 36.594 30.0261V24.9502C36.594 24.7536 36.756 24.5928 36.954 24.5928H42.066C42.264 24.5928 42.426 24.7536 42.426 24.9502V30.0261Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M89.406 30.0261C89.406 30.2227 89.244 30.3835 89.046 30.3835H83.934C83.736 30.3835 83.574 30.2227 83.574 30.0261V24.9502C83.574 24.7536 83.736 24.5928 83.934 24.5928H89.046C89.244 24.5928 89.406 24.7536 89.406 24.9502V30.0261Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M96.75 30.0261C96.75 30.2227 96.588 30.3835 96.39 30.3835H91.278C91.08 30.3835 90.918 30.2227 90.918 30.0261V24.9502C90.918 24.7536 91.08 24.5928 91.278 24.5928H96.39C96.588 24.5928 96.75 24.7536 96.75 24.9502V30.0261Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M108.378 25.2362L101.988 18.8914V14.4053C101.988 14.1551 101.772 13.9585 101.52 13.9585H99.504C99.252 13.9585 99.054 14.1551 99.054 14.4053V15.996L90.594 7.59583C90.36 7.36348 89.964 7.36348 89.712 7.59583L88.83 8.47159C88.596 8.70394 88.2 9.09714 87.948 9.34735L80.298 16.9433L65.178 1.93018C64.944 1.67996 64.548 1.30463 64.296 1.05442L63.432 0.178653C63.198 -0.0536918 62.802 -0.0536918 62.55 0.178653L54.09 8.57883V6.98816C54.09 6.73794 53.892 6.54134 53.622 6.54134H51.606C51.354 6.54134 51.138 6.75581 51.138 6.98816V11.4742L45.666 16.9075L38.016 9.31161C37.782 9.07926 37.386 8.68606 37.134 8.43585L36.252 7.56008C36.018 7.32774 35.622 7.32774 35.37 7.56008L26.91 15.9603V14.3696C26.91 14.1194 26.712 13.9228 26.442 13.9228H24.426C24.174 13.9228 23.958 14.1194 23.958 14.3696V18.8556L17.568 25.2005C17.334 25.4328 17.334 25.826 17.568 26.0762L18.45 26.952C18.684 27.1843 19.08 27.1843 19.332 26.952L35.352 11.0274C35.586 10.795 35.982 10.795 36.234 11.0274L52.272 26.952C52.506 27.1843 52.902 27.1843 53.154 26.952L54.036 26.0762C54.27 25.8439 54.27 25.4507 54.036 25.2005L47.412 18.6233L62.532 3.61021C62.766 3.37787 63.162 3.37787 63.414 3.61021L78.534 18.6233L71.91 25.2005C71.676 25.4328 71.676 25.826 71.91 26.0762L72.792 26.952C73.026 27.1843 73.422 27.1843 73.674 26.952L89.694 11.0274C89.928 10.795 90.324 10.795 90.576 11.0274L106.596 26.952C106.83 27.1843 107.226 27.1843 107.478 26.952L108.36 26.0762C108.63 25.8796 108.63 25.4864 108.378 25.2362Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M36.63 12.7252C36.54 12.6358 36.378 12.475 36.288 12.3856L35.946 12.046C35.856 11.9567 35.694 11.9567 35.604 12.046L28.8 18.8198C28.71 18.9091 28.71 19.07 28.8 19.1594L29.142 19.4989C29.232 19.5883 29.394 19.5883 29.484 19.4989L35.622 13.4044C35.712 13.315 35.874 13.315 35.964 13.4044L42.102 19.4989C42.192 19.5883 42.354 19.5883 42.444 19.4989L42.786 19.1594C42.876 19.07 42.876 18.9091 42.786 18.8198L36.63 12.7252Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M63.846 5.25449C63.756 5.16512 63.594 5.00427 63.504 4.9149L63.162 4.57532C63.072 4.48596 62.91 4.48596 62.82 4.57532L55.998 11.3491C55.908 11.4384 55.908 11.5993 55.998 11.6887L56.34 12.0282C56.43 12.1176 56.592 12.1176 56.682 12.0282L62.82 5.93365C62.91 5.84429 63.072 5.84429 63.162 5.93365L69.3 12.0282C69.39 12.1176 69.552 12.1176 69.642 12.0282L69.984 11.6887C70.074 11.5993 70.074 11.4563 69.984 11.3491L63.846 5.25449Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M91.008 12.7252C90.918 12.6358 90.756 12.475 90.666 12.3856L90.324 12.046C90.234 11.9567 90.072 11.9567 89.982 12.046L83.16 18.8198C83.07 18.9091 83.07 19.07 83.16 19.1594L83.502 19.4989C83.592 19.5883 83.754 19.5883 83.844 19.4989L90 13.3865C90.09 13.2971 90.252 13.2971 90.342 13.3865L96.48 19.4811C96.57 19.5704 96.732 19.5704 96.822 19.4811L97.164 19.1415C97.254 19.0521 97.254 18.8913 97.164 18.8019L91.008 12.7252Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M63 36.7283C84.672 36.7283 103.428 41.268 112.5 47.8809C109.782 39.4271 88.668 32.832 63 32.832C37.332 32.832 16.218 39.4092 13.5 47.8809C22.572 41.268 41.328 36.7283 63 36.7283Z"
                                                                fill="#E3E3E3" />
                                                            <path
                                                                d="M35.082 34.5837V31.8492C35.082 31.6526 34.92 31.4917 34.722 31.4917H29.61C29.412 31.4917 29.25 31.6526 29.25 31.8492V36.1565C31.068 35.5846 33.03 35.0662 35.082 34.5837Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M42.426 33.1896V31.8492C42.426 31.6526 42.264 31.4917 42.066 31.4917H36.954C36.756 31.4917 36.594 31.6526 36.594 31.8492V34.262C38.466 33.8509 40.41 33.4934 42.426 33.1896Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M89.406 34.2439V31.8311C89.406 31.6345 89.244 31.4736 89.046 31.4736H83.934C83.736 31.4736 83.574 31.6345 83.574 31.8311V33.1715C85.59 33.4932 87.534 33.8507 89.406 34.2439Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M96.75 36.1565V31.8492C96.75 31.6526 96.588 31.4917 96.39 31.4917H91.278C91.08 31.4917 90.918 31.6526 90.918 31.8492V34.5837C92.97 35.0662 94.932 35.5846 96.75 36.1565Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M62.244 23.467C62.244 23.6636 62.082 23.8245 61.884 23.8245H56.772C56.574 23.8245 56.412 23.6636 56.412 23.467V18.3911C56.412 18.1945 56.574 18.0337 56.772 18.0337H61.884C62.082 18.0337 62.244 18.1945 62.244 18.3911V23.467Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M69.588 23.467C69.588 23.6636 69.426 23.8245 69.228 23.8245H64.116C63.918 23.8245 63.756 23.6636 63.756 23.467V18.3911C63.756 18.1945 63.918 18.0337 64.116 18.0337H69.228C69.426 18.0337 69.588 18.1945 69.588 18.3911V23.467Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M62.244 30.3659C62.244 30.5625 62.082 30.7234 61.884 30.7234H56.772C56.574 30.7234 56.412 30.5625 56.412 30.3659V25.2901C56.412 25.0935 56.574 24.9326 56.772 24.9326H61.884C62.082 24.9326 62.244 25.0935 62.244 25.2901V30.3659Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M69.588 30.3659C69.588 30.5625 69.426 30.7234 69.228 30.7234H64.116C63.918 30.7234 63.756 30.5625 63.756 30.3659V25.2901C63.756 25.0935 63.918 24.9326 64.116 24.9326H69.228C69.426 24.9326 69.588 25.0935 69.588 25.2901V30.3659Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M0 54.7979H8.316C10.242 54.7979 11.682 55.2089 12.636 56.0311C13.59 56.8532 14.076 57.9971 14.076 59.4805C14.076 60.3026 13.95 60.9818 13.716 61.5359C13.464 62.072 13.194 62.5189 12.87 62.8406C12.546 63.1802 12.222 63.4125 11.898 63.5555C11.574 63.6985 11.34 63.8057 11.196 63.8414V63.8951C11.448 63.9308 11.736 64.0023 12.042 64.1453C12.348 64.2704 12.618 64.4849 12.888 64.7708C13.14 65.0568 13.356 65.4142 13.536 65.8789C13.698 66.3257 13.788 66.8977 13.788 67.5768C13.788 68.5956 13.86 69.525 14.022 70.3471C14.184 71.1871 14.418 71.7769 14.742 72.1344H11.466C11.232 71.7591 11.106 71.348 11.07 70.9012C11.034 70.4543 11.016 70.0075 11.016 69.5965C11.016 68.8101 10.962 68.113 10.872 67.5411C10.782 66.9692 10.602 66.4866 10.332 66.1113C10.08 65.7359 9.72 65.45 9.27 65.2713C8.82 65.0925 8.244 65.0032 7.542 65.0032H3.06V72.1344H0V54.7979ZM3.06 62.6797H8.064C9.036 62.6797 9.774 62.4474 10.278 61.9827C10.782 61.518 11.034 60.8388 11.034 59.9094C11.034 59.3554 10.944 58.9086 10.782 58.569C10.62 58.2294 10.404 57.9434 10.116 57.7647C9.828 57.5681 9.504 57.443 9.144 57.3715C8.784 57.3 8.406 57.2822 8.01 57.2822H3.06V62.6797Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M18.972 66.5583C18.972 67.0408 19.044 67.5055 19.188 67.9702C19.332 68.417 19.53 68.8102 19.818 69.1498C20.088 69.4894 20.448 69.7575 20.862 69.9541C21.276 70.1507 21.798 70.2579 22.374 70.2579C23.184 70.2579 23.85 70.0792 24.336 69.7396C24.84 69.4 25.2 68.8639 25.452 68.1847H28.08C27.936 68.8639 27.684 69.4715 27.324 70.0077C26.964 70.5439 26.532 70.9907 26.028 71.3482C25.524 71.7056 24.966 71.9916 24.336 72.1703C23.706 72.349 23.058 72.4563 22.374 72.4563C21.384 72.4563 20.502 72.2954 19.746 71.9737C18.972 71.652 18.342 71.2052 17.802 70.6154C17.28 70.0256 16.866 69.3464 16.614 68.5243C16.344 67.72 16.218 66.8264 16.218 65.8612C16.218 64.9676 16.362 64.1276 16.65 63.3233C16.938 62.519 17.334 61.822 17.874 61.2143C18.396 60.6067 19.044 60.1241 19.782 59.7667C20.538 59.4092 21.384 59.2305 22.32 59.2305C23.31 59.2305 24.21 59.4449 25.002 59.856C25.794 60.2671 26.442 60.8211 26.964 61.5003C27.486 62.1795 27.864 62.9659 28.098 63.8416C28.332 64.7174 28.386 65.6289 28.278 66.5762H18.972V66.5583ZM25.47 64.7353C25.434 64.3063 25.344 63.8774 25.182 63.4663C25.02 63.0552 24.822 62.7157 24.552 62.4118C24.282 62.108 23.958 61.8756 23.58 61.679C23.202 61.5003 22.77 61.3931 22.302 61.3931C21.816 61.3931 21.366 61.4824 20.97 61.6433C20.574 61.8041 20.232 62.0544 19.944 62.3403C19.656 62.6442 19.44 62.9837 19.26 63.3948C19.098 63.8059 18.99 64.2348 18.972 64.6995H25.47V64.7353Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M40.932 69.3285C40.932 69.668 40.968 69.9183 41.058 70.0612C41.148 70.2042 41.328 70.2757 41.58 70.2757C41.67 70.2757 41.76 70.2757 41.868 70.2757C41.976 70.2757 42.12 70.2578 42.264 70.2221V72.1345C42.174 72.1702 42.048 72.206 41.886 72.2417C41.724 72.2775 41.58 72.3132 41.418 72.3489C41.256 72.3847 41.094 72.4026 40.932 72.4204C40.77 72.4383 40.626 72.4383 40.518 72.4383C39.942 72.4383 39.474 72.3311 39.096 72.0987C38.718 71.8664 38.484 71.4732 38.358 70.9191C37.8 71.4553 37.134 71.8485 36.324 72.0809C35.514 72.3132 34.74 72.4383 33.984 72.4383C33.408 72.4383 32.868 72.3668 32.346 72.206C31.824 72.0451 31.374 71.8306 30.96 71.5268C30.564 71.223 30.24 70.8476 30.006 70.3829C29.772 69.9183 29.646 69.3821 29.646 68.7744C29.646 68.0059 29.79 67.3625 30.078 66.8799C30.366 66.3973 30.744 66.022 31.194 65.736C31.662 65.4679 32.184 65.2714 32.76 65.1462C33.336 65.0211 33.912 64.9318 34.506 64.8603C35.01 64.7709 35.496 64.6994 35.946 64.6458C36.396 64.6101 36.81 64.5386 37.152 64.4313C37.494 64.342 37.782 64.1811 37.98 63.9845C38.178 63.7879 38.286 63.4841 38.286 63.073C38.286 62.7156 38.196 62.4296 38.034 62.1972C37.872 61.9649 37.656 61.804 37.404 61.6789C37.152 61.5538 36.864 61.4823 36.558 61.4287C36.252 61.393 35.964 61.3751 35.676 61.3751C34.902 61.3751 34.254 61.536 33.75 61.8577C33.246 62.1794 32.958 62.6798 32.904 63.359H30.114C30.168 62.5547 30.366 61.8755 30.708 61.3394C31.05 60.8032 31.482 60.3742 32.022 60.0525C32.544 59.7308 33.156 59.4985 33.822 59.3734C34.488 59.2482 35.172 59.1768 35.874 59.1768C36.486 59.1768 37.098 59.2482 37.71 59.3734C38.304 59.4985 38.862 59.7129 39.33 59.9989C39.816 60.2849 40.194 60.6602 40.482 61.1249C40.77 61.5896 40.914 62.1436 40.914 62.8049V69.3285H40.932ZM38.16 65.8254C37.728 66.0935 37.224 66.2722 36.594 66.3258C35.982 66.3795 35.352 66.4688 34.74 66.5761C34.452 66.6297 34.164 66.7012 33.894 66.7905C33.624 66.8799 33.372 67.005 33.156 67.148C32.94 67.3088 32.778 67.5054 32.652 67.7557C32.526 68.0059 32.472 68.3097 32.472 68.6672C32.472 68.971 32.562 69.2391 32.742 69.4357C32.922 69.6502 33.138 69.811 33.39 69.9361C33.642 70.0612 33.912 70.1506 34.218 70.1863C34.524 70.24 34.794 70.2578 35.028 70.2578C35.334 70.2578 35.676 70.2221 36.036 70.1327C36.396 70.0434 36.738 69.9183 37.044 69.7217C37.368 69.5251 37.62 69.2748 37.836 68.9889C38.052 68.685 38.16 68.3276 38.16 67.8808V65.8254Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M44.01 54.7979H46.8V72.0986H44.01V54.7979Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M57.006 54.7979H69.552V57.4073H60.048V61.9469H68.832V64.4134H60.048V69.4713H69.714V72.0808H56.988V54.7979H57.006Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M74.088 68.0773C74.178 68.8815 74.484 69.4535 75.024 69.7752C75.564 70.0969 76.212 70.2577 76.95 70.2577C77.202 70.2577 77.508 70.2399 77.85 70.2041C78.192 70.1684 78.498 70.079 78.786 69.9718C79.074 69.8645 79.326 69.6858 79.506 69.4713C79.686 69.2569 79.776 68.9709 79.758 68.6135C79.74 68.256 79.614 67.97 79.362 67.7377C79.11 67.5053 78.804 67.3266 78.426 67.1836C78.048 67.0407 77.616 66.9334 77.112 66.8262C76.626 66.7368 76.122 66.6296 75.618 66.5045C75.096 66.3972 74.592 66.2543 74.124 66.0934C73.638 65.9325 73.206 65.7181 72.828 65.4321C72.45 65.164 72.144 64.8066 71.91 64.3776C71.676 63.9487 71.568 63.4125 71.568 62.7869C71.568 62.1078 71.73 61.5359 72.072 61.0712C72.414 60.6065 72.828 60.2311 73.35 59.9631C73.854 59.6771 74.43 59.4805 75.06 59.3733C75.69 59.266 76.284 59.2124 76.86 59.2124C77.508 59.2124 78.138 59.2839 78.732 59.4269C79.326 59.5699 79.866 59.7843 80.352 60.0882C80.838 60.392 81.234 60.8031 81.54 61.2856C81.864 61.7861 82.062 62.3759 82.134 63.0729H79.236C79.11 62.4116 78.804 61.9648 78.318 61.7325C77.832 61.5001 77.292 61.3929 76.662 61.3929C76.464 61.3929 76.23 61.4107 75.96 61.4465C75.69 61.4822 75.438 61.5359 75.204 61.6252C74.97 61.7146 74.772 61.8397 74.61 62.0184C74.448 62.1793 74.358 62.4116 74.358 62.6797C74.358 63.0193 74.484 63.2874 74.718 63.5019C74.952 63.7163 75.258 63.8772 75.654 64.0202C76.032 64.1631 76.464 64.2704 76.968 64.3776C77.454 64.467 77.958 64.5742 78.48 64.6993C78.984 64.8066 79.488 64.9495 79.974 65.1104C80.46 65.2713 80.892 65.4857 81.288 65.7717C81.666 66.0398 81.972 66.3972 82.224 66.8083C82.458 67.2373 82.584 67.7377 82.584 68.3632C82.584 69.1139 82.422 69.7394 82.08 70.2577C81.738 70.7761 81.288 71.1871 80.748 71.5267C80.208 71.8484 79.596 72.0808 78.93 72.2237C78.264 72.3667 77.598 72.4382 76.95 72.4382C76.158 72.4382 75.42 72.3488 74.736 72.1701C74.052 71.9914 73.476 71.7233 72.972 71.3658C72.468 71.0084 72.09 70.5437 71.802 70.0075C71.514 69.4713 71.37 68.8279 71.352 68.0773H74.088Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M83.394 59.5697H85.5V55.8164H88.29V59.5697H90.81V61.625H88.29V68.3094C88.29 68.5954 88.308 68.8456 88.326 69.0601C88.344 69.2746 88.416 69.4533 88.488 69.5963C88.578 69.7393 88.704 69.8465 88.884 69.918C89.064 69.9895 89.316 70.0252 89.622 70.0252C89.82 70.0252 90.018 70.0252 90.216 70.0073C90.414 70.0073 90.612 69.9716 90.81 69.918V72.0448C90.504 72.0806 90.198 72.1163 89.91 72.1342C89.622 72.1699 89.316 72.1878 89.01 72.1878C88.272 72.1878 87.696 72.1163 87.246 71.9733C86.796 71.8304 86.454 71.6338 86.202 71.3657C85.95 71.0976 85.77 70.758 85.698 70.3648C85.608 69.9537 85.554 69.5069 85.536 68.9886V61.5893H83.43V59.5697H83.394Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M103.356 69.3285C103.356 69.668 103.392 69.9183 103.482 70.0612C103.572 70.2042 103.752 70.2757 104.004 70.2757C104.094 70.2757 104.184 70.2757 104.292 70.2757C104.4 70.2757 104.544 70.2578 104.688 70.2221V72.1345C104.598 72.1702 104.472 72.206 104.31 72.2417C104.148 72.2775 104.004 72.3132 103.842 72.3489C103.68 72.3847 103.518 72.4026 103.356 72.4204C103.194 72.4383 103.05 72.4383 102.942 72.4383C102.366 72.4383 101.898 72.3311 101.52 72.0987C101.142 71.8664 100.908 71.4732 100.782 70.9191C100.224 71.4553 99.558 71.8485 98.748 72.0809C97.938 72.3311 97.164 72.4383 96.408 72.4383C95.832 72.4383 95.292 72.3668 94.77 72.206C94.248 72.0451 93.798 71.8306 93.384 71.5268C92.988 71.223 92.664 70.8476 92.43 70.3829C92.196 69.9183 92.07 69.3821 92.07 68.7744C92.07 68.0059 92.214 67.3625 92.502 66.8799C92.79 66.3973 93.168 66.022 93.618 65.736C94.086 65.4679 94.608 65.2714 95.184 65.1462C95.76 65.0211 96.336 64.9318 96.93 64.8603C97.434 64.7709 97.92 64.6994 98.37 64.6458C98.82 64.6101 99.234 64.5386 99.576 64.4313C99.918 64.342 100.206 64.1811 100.404 63.9845C100.602 63.7879 100.71 63.4841 100.71 63.073C100.71 62.7156 100.62 62.4296 100.458 62.1972C100.296 61.9649 100.08 61.804 99.828 61.6789C99.576 61.5538 99.288 61.4823 98.982 61.4287C98.676 61.393 98.388 61.3751 98.1 61.3751C97.326 61.3751 96.678 61.536 96.174 61.8577C95.67 62.1794 95.382 62.6798 95.328 63.359H92.538C92.592 62.5547 92.79 61.8755 93.132 61.3394C93.474 60.8032 93.906 60.3742 94.446 60.0525C94.968 59.7308 95.58 59.4985 96.246 59.3734C96.912 59.2482 97.596 59.1768 98.298 59.1768C98.91 59.1768 99.522 59.2482 100.134 59.3734C100.728 59.4985 101.286 59.7129 101.754 59.9989C102.24 60.2849 102.618 60.6602 102.906 61.1249C103.194 61.5896 103.338 62.1436 103.338 62.8049V69.3285H103.356ZM100.584 65.8254C100.152 66.0935 99.648 66.2722 99.018 66.3258C98.406 66.3795 97.776 66.4688 97.164 66.5761C96.876 66.6297 96.588 66.7012 96.318 66.7905C96.048 66.8799 95.796 67.005 95.58 67.148C95.364 67.3088 95.202 67.5054 95.076 67.7557C94.95 68.0059 94.896 68.3097 94.896 68.6672C94.896 68.971 94.986 69.2391 95.166 69.4357C95.346 69.6502 95.562 69.811 95.814 69.9361C96.066 70.0612 96.336 70.1506 96.642 70.1863C96.948 70.24 97.218 70.2578 97.452 70.2578C97.758 70.2578 98.1 70.2221 98.46 70.1327C98.82 70.0434 99.162 69.9183 99.468 69.7217C99.792 69.5251 100.044 69.2748 100.26 68.9889C100.476 68.685 100.584 68.3276 100.584 67.8808V65.8254Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M105.102 59.5697H107.208V55.8164H109.98V59.5697H112.5V61.625H109.98V68.3094C109.98 68.5954 109.998 68.8456 110.016 69.0601C110.034 69.2746 110.106 69.4533 110.178 69.5963C110.268 69.7393 110.394 69.8465 110.574 69.918C110.754 69.9895 111.006 70.0252 111.312 70.0252C111.51 70.0252 111.708 70.0252 111.906 70.0073C112.104 70.0073 112.302 69.9716 112.5 69.918V72.0448C112.194 72.0806 111.888 72.1163 111.6 72.1342C111.312 72.1699 111.006 72.1878 110.7 72.1878C109.962 72.1878 109.386 72.1163 108.936 71.9733C108.486 71.8304 108.144 71.6338 107.892 71.3657C107.64 71.0976 107.46 70.758 107.388 70.3648C107.298 69.9537 107.244 69.5069 107.226 68.9886V61.5893H105.12V59.5697H105.102Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M116.676 66.5583C116.676 67.0408 116.748 67.5055 116.892 67.9702C117.036 68.417 117.234 68.8102 117.522 69.1498C117.792 69.4894 118.152 69.7575 118.566 69.9541C118.998 70.1507 119.502 70.2579 120.078 70.2579C120.888 70.2579 121.554 70.0792 122.04 69.7396C122.544 69.4 122.904 68.8639 123.156 68.1847H125.784C125.64 68.8639 125.388 69.4715 125.028 70.0077C124.668 70.5439 124.236 70.9907 123.732 71.3482C123.228 71.7056 122.67 71.9916 122.04 72.1703C121.41 72.349 120.762 72.4563 120.078 72.4563C119.088 72.4563 118.206 72.2954 117.45 71.9737C116.676 71.652 116.046 71.2052 115.506 70.6154C114.984 70.0256 114.57 69.3464 114.318 68.5243C114.048 67.72 113.922 66.8264 113.922 65.8612C113.922 64.9676 114.066 64.1276 114.354 63.3233C114.642 62.519 115.038 61.822 115.578 61.2143C116.1 60.6067 116.748 60.1241 117.486 59.7667C118.242 59.4092 119.088 59.2305 120.024 59.2305C121.014 59.2305 121.914 59.4449 122.706 59.856C123.498 60.2671 124.146 60.8211 124.668 61.5003C125.19 62.1795 125.568 62.9659 125.802 63.8416C126.036 64.7174 126.09 65.6289 125.982 66.5762H116.676V66.5583ZM123.156 64.7353C123.12 64.3063 123.03 63.8774 122.868 63.4663C122.706 63.0552 122.508 62.7157 122.238 62.4118C121.968 62.108 121.644 61.8756 121.266 61.679C120.888 61.5003 120.456 61.3931 119.988 61.3931C119.502 61.3931 119.052 61.4824 118.656 61.6433C118.26 61.8041 117.918 62.0544 117.63 62.3403C117.342 62.6442 117.126 62.9837 116.946 63.3948C116.784 63.8059 116.676 64.2348 116.658 64.6995H123.156V64.7353Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M16.416 77.3711H17.226L18.09 79.8554H18.108L18.954 77.3711H19.728L18.432 80.8741C18.378 81.0171 18.306 81.1601 18.252 81.3031C18.198 81.4461 18.126 81.5533 18.036 81.6605C17.946 81.7678 17.856 81.8571 17.73 81.9108C17.604 81.9644 17.442 82.0001 17.244 82.0001C17.064 82.0001 16.902 81.9823 16.74 81.9644V81.3567C16.794 81.3567 16.866 81.3746 16.92 81.3925C16.974 81.4103 17.028 81.4103 17.1 81.4103C17.19 81.4103 17.262 81.3925 17.316 81.3746C17.37 81.3567 17.424 81.321 17.46 81.2852C17.496 81.2495 17.532 81.1959 17.55 81.1422C17.568 81.0886 17.604 81.0171 17.622 80.9456L17.712 80.6954L16.416 77.3711Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M22.95 80.7847C22.68 80.7847 22.446 80.7489 22.23 80.6596C22.014 80.5702 21.852 80.4451 21.708 80.3021C21.564 80.1413 21.456 79.9625 21.384 79.7481C21.312 79.5336 21.276 79.3013 21.276 79.051C21.276 78.8008 21.312 78.5685 21.384 78.354C21.456 78.1395 21.564 77.9608 21.708 77.7999C21.852 77.6391 22.032 77.5319 22.23 77.4425C22.446 77.3531 22.68 77.3174 22.95 77.3174C23.22 77.3174 23.454 77.3531 23.67 77.4425C23.886 77.5319 24.048 77.657 24.192 77.7999C24.336 77.9608 24.444 78.1395 24.516 78.354C24.588 78.5685 24.624 78.8008 24.624 79.051C24.624 79.3013 24.588 79.5515 24.516 79.7481C24.444 79.9625 24.336 80.1413 24.192 80.3021C24.048 80.463 23.868 80.5702 23.67 80.6596C23.454 80.7311 23.22 80.7847 22.95 80.7847ZM22.95 80.1949C23.112 80.1949 23.256 80.1591 23.382 80.0877C23.508 80.0162 23.598 79.9268 23.688 79.8196C23.76 79.7123 23.814 79.5872 23.868 79.4442C23.904 79.3013 23.922 79.1583 23.922 79.0153C23.922 78.8723 23.904 78.7293 23.868 78.5863C23.832 78.4434 23.778 78.3183 23.688 78.211C23.616 78.1038 23.508 78.0144 23.382 77.9429C23.256 77.8714 23.112 77.8357 22.95 77.8357C22.788 77.8357 22.644 77.8714 22.518 77.9429C22.392 78.0144 22.302 78.1038 22.212 78.211C22.14 78.3183 22.086 78.4434 22.032 78.5863C21.996 78.7293 21.978 78.8723 21.978 79.0153C21.978 79.1583 21.996 79.3013 22.032 79.4442C22.068 79.5872 22.122 79.7123 22.212 79.8196C22.284 79.9268 22.392 80.0162 22.518 80.0877C22.644 80.1591 22.788 80.1949 22.95 80.1949Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M29.484 80.6775H28.764V80.2128H28.746C28.656 80.3736 28.512 80.5166 28.35 80.606C28.17 80.7132 27.99 80.7489 27.81 80.7489C27.378 80.7489 27.054 80.6417 26.856 80.4272C26.658 80.2128 26.568 79.8911 26.568 79.4442V77.3353H27.306V79.3727C27.306 79.6587 27.36 79.8732 27.468 79.9804C27.576 80.1055 27.738 80.1591 27.936 80.1591C28.098 80.1591 28.224 80.1413 28.332 80.0877C28.44 80.034 28.512 79.9804 28.584 79.8911C28.656 79.8196 28.692 79.7123 28.728 79.6051C28.764 79.4979 28.764 79.3727 28.764 79.2476V77.3174H29.502V80.6775H29.484Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M31.554 77.3709H32.238V78.0143H32.256C32.274 77.925 32.328 77.8356 32.382 77.7462C32.436 77.6569 32.526 77.5854 32.616 77.5139C32.706 77.4424 32.796 77.3888 32.904 77.3352C33.012 77.2994 33.12 77.2637 33.228 77.2637C33.318 77.2637 33.372 77.2637 33.408 77.2637C33.444 77.2637 33.48 77.2637 33.516 77.2815V77.9786C33.462 77.9786 33.408 77.9607 33.354 77.9607C33.3 77.9607 33.246 77.9428 33.192 77.9428C33.066 77.9428 32.958 77.9607 32.832 78.0143C32.724 78.0679 32.634 78.1394 32.544 78.2288C32.454 78.3182 32.4 78.4433 32.346 78.5863C32.292 78.7292 32.274 78.8901 32.274 79.0688V80.6416H31.536V77.3709H31.554Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M37.872 77.371H38.43V76.3701H39.168V77.371H39.834V77.925H39.168V79.6944C39.168 79.7659 39.168 79.8374 39.186 79.891C39.186 79.9447 39.204 79.9983 39.24 80.034C39.258 80.0698 39.294 80.1055 39.348 80.1234C39.402 80.1413 39.456 80.1591 39.546 80.1591C39.6 80.1591 39.654 80.1591 39.708 80.1591C39.762 80.1591 39.816 80.1413 39.87 80.1413V80.7132C39.78 80.7132 39.708 80.7311 39.636 80.7311C39.564 80.7311 39.474 80.7489 39.402 80.7489C39.204 80.7489 39.06 80.7311 38.934 80.6953C38.808 80.6596 38.718 80.606 38.664 80.5345C38.592 80.463 38.556 80.3736 38.52 80.2664C38.502 80.1591 38.484 80.034 38.484 79.9089V77.9608H37.926V77.371H37.872Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M44.442 79.9447C44.442 80.034 44.46 80.1055 44.478 80.1413C44.496 80.177 44.55 80.1949 44.622 80.1949C44.64 80.1949 44.676 80.1949 44.694 80.1949C44.73 80.1949 44.766 80.1949 44.802 80.177V80.6775C44.784 80.6775 44.748 80.6953 44.694 80.7132C44.658 80.7311 44.604 80.7311 44.568 80.7489C44.532 80.7489 44.478 80.7668 44.442 80.7668C44.406 80.7668 44.37 80.7668 44.334 80.7668C44.19 80.7668 44.064 80.7311 43.956 80.6775C43.848 80.6238 43.794 80.5166 43.758 80.3558C43.614 80.4987 43.434 80.606 43.218 80.6596C43.002 80.7311 42.804 80.7489 42.606 80.7489C42.462 80.7489 42.318 80.7311 42.174 80.6953C42.03 80.6596 41.922 80.5881 41.814 80.5166C41.706 80.4451 41.616 80.3379 41.562 80.2128C41.508 80.0877 41.472 79.9447 41.472 79.7838C41.472 79.5872 41.508 79.4085 41.58 79.2834C41.652 79.1583 41.76 79.051 41.886 78.9796C42.012 78.9081 42.138 78.8544 42.3 78.8187C42.444 78.783 42.606 78.7651 42.768 78.7472C42.894 78.7293 43.02 78.7115 43.146 78.6936C43.272 78.6757 43.38 78.6578 43.47 78.64C43.56 78.6221 43.632 78.5685 43.686 78.5149C43.74 78.4612 43.758 78.3898 43.758 78.2825C43.758 78.1932 43.74 78.1038 43.686 78.0502C43.632 77.9966 43.578 77.9429 43.524 77.9072C43.452 77.8714 43.38 77.8536 43.308 77.8357C43.218 77.8178 43.146 77.8178 43.074 77.8178C42.876 77.8178 42.696 77.8536 42.57 77.9429C42.444 78.0323 42.354 78.1574 42.336 78.3361H41.598C41.616 78.1217 41.67 77.9429 41.76 77.8C41.85 77.657 41.958 77.5497 42.102 77.4604C42.246 77.371 42.408 77.3174 42.57 77.2816C42.75 77.2459 42.93 77.228 43.11 77.228C43.272 77.228 43.434 77.2459 43.596 77.2816C43.758 77.3174 43.902 77.371 44.028 77.4425C44.154 77.514 44.262 77.6212 44.334 77.7463C44.406 77.8714 44.442 78.0144 44.442 78.1932V79.9447ZM43.704 79.0332C43.596 79.1047 43.452 79.1583 43.29 79.1583C43.128 79.1762 42.966 79.194 42.804 79.2298C42.732 79.2476 42.642 79.2655 42.57 79.2834C42.498 79.3013 42.426 79.337 42.372 79.3728C42.318 79.4085 42.264 79.4621 42.246 79.5336C42.21 79.6051 42.192 79.6766 42.192 79.7659C42.192 79.8553 42.21 79.9089 42.264 79.9625C42.318 80.0162 42.372 80.0698 42.444 80.0877C42.516 80.1234 42.588 80.1413 42.66 80.1592C42.732 80.177 42.804 80.177 42.876 80.177C42.966 80.177 43.038 80.1591 43.146 80.1413C43.236 80.1234 43.326 80.0877 43.416 80.034C43.506 79.9804 43.578 79.9089 43.632 79.8374C43.686 79.766 43.722 79.6587 43.722 79.5515V79.0332H43.704Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M49.626 80.5167C49.626 81.0171 49.482 81.3925 49.194 81.6427C48.906 81.8929 48.51 82.018 47.97 82.018C47.808 82.018 47.628 82.0001 47.466 81.9644C47.304 81.9286 47.142 81.875 46.998 81.7857C46.854 81.6963 46.746 81.5891 46.638 81.464C46.548 81.3388 46.494 81.1601 46.476 80.9814H47.214C47.232 81.0886 47.268 81.1601 47.322 81.2316C47.376 81.3031 47.43 81.3388 47.502 81.3746C47.574 81.4103 47.646 81.4282 47.736 81.4461C47.826 81.464 47.916 81.464 48.006 81.464C48.312 81.464 48.528 81.3925 48.654 81.2495C48.798 81.1065 48.852 80.892 48.852 80.6239V80.1235H48.834C48.726 80.3022 48.582 80.4452 48.402 80.5524C48.222 80.6597 48.024 80.7133 47.826 80.7133C47.556 80.7133 47.34 80.6597 47.142 80.5703C46.962 80.481 46.8 80.3558 46.674 80.195C46.548 80.0341 46.458 79.8554 46.404 79.6409C46.35 79.4265 46.314 79.212 46.314 78.9618C46.314 78.7473 46.35 78.5328 46.422 78.3184C46.494 78.1218 46.584 77.943 46.728 77.7822C46.854 77.6392 47.016 77.5141 47.196 77.4247C47.376 77.3354 47.592 77.2817 47.826 77.2817C48.042 77.2817 48.222 77.3175 48.402 77.4068C48.582 77.4962 48.708 77.6392 48.816 77.8179H48.834V77.3711H49.572V80.5167H49.626ZM47.988 80.1056C48.15 80.1056 48.294 80.0699 48.402 79.9984C48.51 79.9269 48.6 79.8375 48.672 79.7303C48.744 79.6231 48.798 79.498 48.834 79.355C48.87 79.212 48.888 79.069 48.888 78.926C48.888 78.783 48.87 78.6401 48.834 78.515C48.798 78.3898 48.744 78.2647 48.672 78.1575C48.6 78.0503 48.51 77.9788 48.402 77.9073C48.294 77.8537 48.15 77.8179 47.988 77.8179C47.826 77.8179 47.682 77.8537 47.574 77.9252C47.466 77.9966 47.376 78.086 47.304 78.1932C47.232 78.3005 47.178 78.4256 47.16 78.5686C47.124 78.7116 47.106 78.8367 47.106 78.9796C47.106 79.1226 47.124 79.2477 47.16 79.3728C47.196 79.498 47.25 79.6231 47.322 79.7303C47.394 79.8375 47.484 79.909 47.592 79.9805C47.7 80.0699 47.844 80.1056 47.988 80.1056Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M51.678 76.1021H52.416V80.6775H51.678V76.1021Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M54.522 76.1021H55.26V76.7991H54.522V76.1021ZM54.522 77.371H55.26V80.6953H54.522V77.371Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M57.366 77.3711H58.068V77.8537L58.086 77.8715C58.194 77.6928 58.338 77.5498 58.518 77.4426C58.698 77.3354 58.896 77.2817 59.112 77.2817C59.472 77.2817 59.76 77.3711 59.976 77.5677C60.192 77.7643 60.3 78.0324 60.3 78.4077V80.6776H59.562V78.5864C59.562 78.3184 59.49 78.1396 59.4 78.0145C59.292 77.8894 59.13 77.8358 58.914 77.8358C58.788 77.8358 58.68 77.8537 58.572 77.9073C58.464 77.9609 58.392 78.0145 58.32 78.086C58.248 78.1575 58.194 78.2647 58.158 78.372C58.122 78.4792 58.104 78.5864 58.104 78.7116V80.6597H57.366V77.3711Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M62.946 79.212C62.946 79.3371 62.964 79.4622 63 79.5873C63.036 79.7124 63.09 79.8197 63.162 79.909C63.234 79.9984 63.324 80.0699 63.432 80.1235C63.54 80.1771 63.684 80.195 63.828 80.195C64.044 80.195 64.224 80.1414 64.35 80.052C64.476 79.9626 64.584 79.8197 64.638 79.6409H65.34C65.304 79.8197 65.232 79.9805 65.142 80.1235C65.052 80.2665 64.926 80.3916 64.8 80.481C64.674 80.5703 64.512 80.6418 64.35 80.6954C64.188 80.749 64.008 80.7669 63.828 80.7669C63.558 80.7669 63.324 80.7312 63.126 80.6418C62.928 80.5524 62.748 80.4452 62.604 80.2844C62.46 80.1235 62.352 79.9448 62.28 79.7303C62.208 79.5158 62.172 79.2835 62.172 79.0333C62.172 78.8009 62.208 78.5686 62.28 78.3541C62.352 78.1396 62.46 77.9609 62.604 77.8C62.748 77.6392 62.91 77.5141 63.108 77.4247C63.306 77.3354 63.522 77.2817 63.774 77.2817C64.044 77.2817 64.278 77.3354 64.476 77.4426C64.692 77.5498 64.854 77.6928 64.998 77.8715C65.142 78.0503 65.232 78.2647 65.304 78.4971C65.358 78.7294 65.376 78.9796 65.358 79.212H62.946ZM64.656 78.7294C64.656 78.6222 64.62 78.4971 64.584 78.3898C64.548 78.2826 64.494 78.1932 64.422 78.1039C64.35 78.0324 64.26 77.9609 64.17 77.9073C64.062 77.8537 63.954 77.8358 63.828 77.8358C63.702 77.8358 63.576 77.8537 63.468 77.9073C63.36 77.9609 63.27 78.0145 63.198 78.086C63.126 78.1575 63.054 78.2647 63.018 78.372C62.964 78.4792 62.946 78.5864 62.946 78.7116H64.656V78.7294Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M73.422 80.5167C73.422 81.0171 73.278 81.3925 72.99 81.6427C72.702 81.8929 72.306 82.018 71.766 82.018C71.604 82.018 71.424 82.0001 71.262 81.9644C71.1 81.9286 70.938 81.875 70.794 81.7857C70.65 81.6963 70.542 81.5891 70.434 81.464C70.344 81.3388 70.29 81.1601 70.272 80.9814H71.01C71.028 81.0886 71.064 81.1601 71.118 81.2316C71.172 81.3031 71.226 81.3388 71.298 81.3746C71.37 81.4103 71.442 81.4282 71.532 81.4461C71.622 81.464 71.712 81.464 71.802 81.464C72.108 81.464 72.324 81.3925 72.45 81.2495C72.594 81.1065 72.648 80.892 72.648 80.6239V80.1235H72.63C72.522 80.3022 72.378 80.4452 72.198 80.5524C72.018 80.6597 71.82 80.7133 71.622 80.7133C71.352 80.7133 71.136 80.6597 70.938 80.5703C70.758 80.481 70.596 80.3558 70.47 80.195C70.344 80.0341 70.254 79.8554 70.2 79.6409C70.146 79.4265 70.11 79.212 70.11 78.9618C70.11 78.7473 70.146 78.5328 70.218 78.3184C70.29 78.1218 70.38 77.943 70.524 77.7822C70.65 77.6392 70.812 77.5141 70.992 77.4247C71.172 77.3354 71.388 77.2817 71.622 77.2817C71.838 77.2817 72.018 77.3175 72.198 77.4068C72.378 77.4962 72.504 77.6392 72.612 77.8179H72.63V77.3711H73.368V80.5167H73.422ZM71.784 80.1056C71.946 80.1056 72.09 80.0699 72.198 79.9984C72.306 79.9269 72.396 79.8375 72.468 79.7303C72.54 79.6231 72.594 79.498 72.63 79.355C72.666 79.212 72.684 79.069 72.684 78.926C72.684 78.783 72.666 78.6401 72.63 78.515C72.594 78.3898 72.54 78.2647 72.468 78.1575C72.396 78.0503 72.306 77.9788 72.198 77.9073C72.09 77.8537 71.946 77.8179 71.784 77.8179C71.622 77.8179 71.478 77.8537 71.37 77.9252C71.262 77.9966 71.172 78.086 71.1 78.1932C71.028 78.3005 70.974 78.4256 70.956 78.5686C70.92 78.7116 70.902 78.8367 70.902 78.9796C70.902 79.1226 70.92 79.2477 70.956 79.3728C70.992 79.498 71.046 79.6231 71.118 79.7303C71.19 79.8375 71.28 79.909 71.388 79.9805C71.496 80.0699 71.64 80.1056 71.784 80.1056Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M76.986 80.7847C76.716 80.7847 76.482 80.7489 76.266 80.6596C76.05 80.5702 75.888 80.4451 75.744 80.3021C75.6 80.1413 75.492 79.9625 75.42 79.7481C75.348 79.5336 75.312 79.3013 75.312 79.051C75.312 78.8008 75.348 78.5685 75.42 78.354C75.492 78.1395 75.6 77.9608 75.744 77.7999C75.888 77.6391 76.068 77.5319 76.266 77.4425C76.482 77.3531 76.716 77.3174 76.986 77.3174C77.256 77.3174 77.49 77.3531 77.706 77.4425C77.922 77.5319 78.084 77.657 78.228 77.7999C78.372 77.9608 78.48 78.1395 78.552 78.354C78.624 78.5685 78.66 78.8008 78.66 79.051C78.66 79.3013 78.624 79.5515 78.552 79.7481C78.48 79.9625 78.372 80.1413 78.228 80.3021C78.084 80.463 77.904 80.5702 77.706 80.6596C77.49 80.7311 77.256 80.7847 76.986 80.7847ZM76.986 80.1949C77.148 80.1949 77.292 80.1591 77.418 80.0877C77.544 80.0162 77.634 79.9268 77.724 79.8196C77.796 79.7123 77.85 79.5872 77.904 79.4442C77.94 79.3013 77.958 79.1583 77.958 79.0153C77.958 78.8723 77.94 78.7293 77.904 78.5863C77.868 78.4434 77.814 78.3183 77.724 78.211C77.652 78.1038 77.544 78.0144 77.418 77.9429C77.292 77.8714 77.148 77.8357 76.986 77.8357C76.824 77.8357 76.68 77.8714 76.554 77.9429C76.428 78.0144 76.338 78.1038 76.248 78.211C76.176 78.3183 76.122 78.4434 76.068 78.5863C76.014 78.7293 76.014 78.8723 76.014 79.0153C76.014 79.1583 76.032 79.3013 76.068 79.4442C76.104 79.5872 76.158 79.7123 76.248 79.8196C76.32 79.9268 76.428 80.0162 76.554 80.0877C76.68 80.1591 76.824 80.1949 76.986 80.1949Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M81.162 79.212C81.162 79.3371 81.18 79.4622 81.216 79.5873C81.252 79.7124 81.306 79.8197 81.378 79.909C81.45 79.9984 81.54 80.0699 81.648 80.1235C81.756 80.1771 81.9 80.195 82.044 80.195C82.26 80.195 82.44 80.1414 82.566 80.052C82.692 79.9626 82.8 79.8197 82.854 79.6409H83.556C83.52 79.8197 83.448 79.9805 83.358 80.1235C83.268 80.2665 83.142 80.3916 83.016 80.481C82.89 80.5703 82.728 80.6418 82.566 80.6954C82.404 80.749 82.224 80.7669 82.044 80.7669C81.774 80.7669 81.54 80.7312 81.342 80.6418C81.144 80.5524 80.964 80.4452 80.82 80.2844C80.676 80.1235 80.568 79.9448 80.496 79.7303C80.424 79.5158 80.388 79.2835 80.388 79.0333C80.388 78.8009 80.424 78.5686 80.496 78.3541C80.568 78.1396 80.676 77.9609 80.82 77.8C80.964 77.6392 81.126 77.5141 81.324 77.4247C81.522 77.3354 81.738 77.2817 81.99 77.2817C82.26 77.2817 82.494 77.3354 82.692 77.4426C82.908 77.5498 83.07 77.6928 83.214 77.8715C83.358 78.0503 83.448 78.2647 83.52 78.4971C83.574 78.7294 83.592 78.9796 83.574 79.212H81.162ZM82.872 78.7294C82.872 78.6222 82.836 78.4971 82.8 78.3898C82.764 78.2826 82.71 78.1932 82.638 78.1039C82.566 78.0324 82.476 77.9609 82.386 77.9073C82.278 77.8537 82.17 77.8358 82.044 77.8358C81.918 77.8358 81.792 77.8537 81.684 77.9073C81.576 77.9609 81.486 78.0145 81.414 78.086C81.342 78.1575 81.27 78.2647 81.234 78.372C81.18 78.4792 81.162 78.5864 81.162 78.7116H82.872V78.7294Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M86.022 79.6232C86.04 79.8376 86.13 79.9806 86.274 80.07C86.418 80.1593 86.58 80.1951 86.778 80.1951C86.85 80.1951 86.922 80.1951 87.012 80.1772C87.102 80.1593 87.192 80.1415 87.264 80.1236C87.336 80.0879 87.408 80.0521 87.462 79.9985C87.516 79.9449 87.534 79.8734 87.534 79.7661C87.534 79.6768 87.498 79.5874 87.426 79.5338C87.354 79.4802 87.282 79.4266 87.174 79.3908C87.066 79.3551 86.958 79.3193 86.832 79.3015C86.706 79.2836 86.58 79.2478 86.436 79.2121C86.292 79.1763 86.166 79.1406 86.04 79.1049C85.914 79.0691 85.806 78.9976 85.698 78.9261C85.59 78.8546 85.518 78.7653 85.464 78.6402C85.41 78.5329 85.374 78.3899 85.374 78.2112C85.374 78.0325 85.41 77.8895 85.5 77.7644C85.59 77.6393 85.698 77.5499 85.842 77.4606C85.986 77.3891 86.13 77.3355 86.292 77.2997C86.454 77.264 86.616 77.2461 86.76 77.2461C86.94 77.2461 87.102 77.264 87.246 77.2997C87.408 77.3355 87.552 77.3891 87.678 77.4784C87.804 77.5678 87.912 77.6572 88.002 77.8001C88.092 77.9253 88.146 78.0861 88.164 78.2648H87.39C87.354 78.0861 87.282 77.9789 87.156 77.9074C87.03 77.8538 86.886 77.818 86.724 77.818C86.67 77.818 86.616 77.818 86.544 77.8359C86.472 77.8359 86.4 77.8538 86.346 77.8895C86.292 77.9074 86.238 77.9431 86.184 77.9967C86.148 78.0504 86.112 78.104 86.112 78.1755C86.112 78.2648 86.148 78.3363 86.202 78.3899C86.256 78.4436 86.346 78.4972 86.454 78.5329C86.562 78.5687 86.67 78.6044 86.796 78.6223C86.922 78.6402 87.066 78.6759 87.192 78.7117C87.318 78.7474 87.462 78.7831 87.588 78.8189C87.714 78.8546 87.84 78.9261 87.93 78.9976C88.038 79.0691 88.11 79.1585 88.182 79.2657C88.236 79.3729 88.272 79.5159 88.272 79.6768C88.272 79.8734 88.218 80.0342 88.128 80.1772C88.038 80.3202 87.912 80.4274 87.768 80.5168C87.624 80.6062 87.462 80.6598 87.282 80.6955C87.102 80.7313 86.922 80.7491 86.76 80.7491C86.544 80.7491 86.346 80.7313 86.184 80.6777C86.004 80.624 85.842 80.5525 85.716 80.4632C85.59 80.3738 85.482 80.2487 85.41 80.1057C85.338 79.9627 85.302 79.784 85.284 79.5874H86.022V79.6232Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M93.204 76.1021H93.942V77.8H93.96C94.05 77.657 94.194 77.5319 94.356 77.4246C94.536 77.3174 94.734 77.2817 94.95 77.2817C95.31 77.2817 95.598 77.371 95.814 77.5676C96.03 77.7642 96.138 78.0323 96.138 78.4076V80.6775H95.4V78.5864C95.4 78.3183 95.328 78.1395 95.238 78.0144C95.13 77.8893 94.968 77.8357 94.752 77.8357C94.626 77.8357 94.518 77.8536 94.41 77.9072C94.302 77.9608 94.23 78.0144 94.158 78.0859C94.086 78.1574 94.032 78.2647 93.996 78.3719C93.96 78.4791 93.942 78.5864 93.942 78.7115V80.6596H93.204V76.1021Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M98.784 79.212C98.784 79.3371 98.802 79.4622 98.838 79.5873C98.874 79.7124 98.928 79.8197 99 79.909C99.072 79.9984 99.162 80.0699 99.27 80.1235C99.378 80.1771 99.522 80.195 99.666 80.195C99.882 80.195 100.062 80.1414 100.188 80.052C100.314 79.9626 100.422 79.8197 100.476 79.6409H101.178C101.142 79.8197 101.07 79.9805 100.98 80.1235C100.89 80.2665 100.764 80.3916 100.638 80.481C100.512 80.5703 100.35 80.6418 100.188 80.6954C100.026 80.749 99.846 80.7669 99.666 80.7669C99.396 80.7669 99.162 80.7312 98.964 80.6418C98.766 80.5524 98.586 80.4452 98.442 80.2844C98.298 80.1235 98.19 79.9448 98.118 79.7303C98.046 79.5158 98.01 79.2835 98.01 79.0333C98.01 78.8009 98.046 78.5686 98.118 78.3541C98.19 78.1396 98.298 77.9609 98.442 77.8C98.586 77.6392 98.748 77.5141 98.946 77.4247C99.144 77.3354 99.36 77.2817 99.612 77.2817C99.882 77.2817 100.116 77.3354 100.314 77.4426C100.53 77.5498 100.692 77.6928 100.836 77.8715C100.98 78.0503 101.07 78.2647 101.142 78.4971C101.196 78.7294 101.214 78.9796 101.196 79.212H98.784ZM100.494 78.7294C100.494 78.6222 100.458 78.4971 100.422 78.3898C100.386 78.2826 100.332 78.1932 100.26 78.1039C100.188 78.0324 100.098 77.9609 100.008 77.9073C99.9 77.8537 99.792 77.8358 99.666 77.8358C99.54 77.8358 99.414 77.8537 99.306 77.9073C99.198 77.9609 99.108 78.0145 99.036 78.086C98.964 78.1575 98.892 78.2647 98.856 78.372C98.802 78.4792 98.784 78.5864 98.784 78.7116H100.494V78.7294Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M103.086 77.3709H103.77V78.0143H103.788C103.806 77.925 103.86 77.8356 103.914 77.7462C103.968 77.6569 104.058 77.5854 104.148 77.5139C104.238 77.4424 104.328 77.3888 104.436 77.3352C104.544 77.2994 104.652 77.2637 104.76 77.2637C104.85 77.2637 104.904 77.2637 104.94 77.2637C104.976 77.2637 105.012 77.2637 105.048 77.2815V77.9786C104.994 77.9786 104.94 77.9607 104.886 77.9607C104.832 77.9607 104.778 77.9428 104.724 77.9428C104.598 77.9428 104.49 77.9607 104.364 78.0143C104.256 78.0679 104.166 78.1394 104.076 78.2288C103.986 78.3182 103.932 78.4433 103.878 78.5863C103.824 78.7292 103.806 78.8901 103.806 79.0688V80.6416H103.068V77.3709H103.086Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M107.118 79.212C107.118 79.3371 107.136 79.4622 107.172 79.5873C107.208 79.7124 107.262 79.8197 107.334 79.909C107.406 79.9984 107.496 80.0699 107.604 80.1235C107.712 80.1771 107.856 80.195 108 80.195C108.216 80.195 108.396 80.1414 108.522 80.052C108.648 79.9626 108.756 79.8197 108.81 79.6409H109.512C109.476 79.8197 109.404 79.9805 109.314 80.1235C109.224 80.2665 109.098 80.3916 108.972 80.481C108.846 80.5703 108.684 80.6418 108.522 80.6954C108.36 80.749 108.18 80.7669 108 80.7669C107.73 80.7669 107.496 80.7312 107.298 80.6418C107.1 80.5524 106.92 80.4452 106.776 80.2844C106.632 80.1235 106.524 79.9448 106.452 79.7303C106.38 79.5158 106.344 79.2835 106.344 79.0333C106.344 78.8009 106.38 78.5686 106.452 78.3541C106.524 78.1396 106.632 77.9609 106.776 77.8C106.92 77.6392 107.082 77.5141 107.28 77.4247C107.478 77.3354 107.694 77.2817 107.946 77.2817C108.216 77.2817 108.45 77.3354 108.648 77.4426C108.864 77.5498 109.026 77.6928 109.17 77.8715C109.314 78.0503 109.404 78.2647 109.476 78.4971C109.53 78.7294 109.548 78.9796 109.53 79.212H107.118ZM108.846 78.7294C108.846 78.6222 108.81 78.4971 108.774 78.3898C108.738 78.2826 108.684 78.1932 108.612 78.1039C108.54 78.0324 108.45 77.9609 108.36 77.9073C108.252 77.8537 108.144 77.8358 108.018 77.8358C107.892 77.8358 107.766 77.8537 107.658 77.9073C107.55 77.9609 107.46 78.0145 107.388 78.086C107.316 78.1575 107.244 78.2647 107.208 78.372C107.154 78.4792 107.136 78.5864 107.136 78.7116H108.846V78.7294Z"
                                                                fill="#B9B9B9" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2304_5655">
                                                                <rect width="126" height="82" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="partner-item style-2">
                                                    <svg width="130" height="49" viewBox="0 0 130 49" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2304_5712)">
                                                            <path
                                                                d="M56.2047 42.9411V34.8164H59.6501C61.1912 34.8164 61.9555 35.4714 61.9555 36.7688C61.9555 37.8269 61.2037 38.6079 59.7003 39.1118L62.4692 42.9411H61.091L58.5225 39.2881V38.5953C60.0636 38.3434 60.8404 37.7514 60.8404 36.8066C60.8404 36.0509 60.4144 35.6856 59.5499 35.6856H57.2446V42.9411H56.2047Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M68.8589 34.8164V35.673H64.6241V38.4064H68.671V39.2629H64.6241V42.1097H68.9466V42.9663H63.5717V34.8416H68.8589V34.8164Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M70.7883 42.9411H69.6983L73.1313 34.8164H74.2839L77.7294 42.9411H76.5642L75.5243 40.384H72.8556L73.1438 39.5275H75.1735L73.67 35.8493L70.7883 42.9411Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M79.8969 34.8164V42.0845H84.1316V42.9411H78.857V34.8164H79.8969Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M93.4782 34.8164V35.673H89.2434V38.4064H93.2777V39.2629H89.2434V42.1097H93.5659V42.9663H88.191V34.8416H93.4782V34.8164Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M95.0318 42.664V41.694C95.8838 41.9963 96.7984 42.1475 97.7756 42.1475C99.1663 42.1475 99.8554 41.6311 99.8554 40.6107C99.8554 39.7416 99.3417 39.3007 98.3144 39.3007H97.2745C95.5831 39.3007 94.7436 38.5575 94.7436 37.0838C94.7436 35.5344 95.8211 34.7534 97.9886 34.7534C98.9283 34.7534 99.8053 34.8668 100.62 35.0935V36.0634C99.8053 35.7611 98.9283 35.61 97.9886 35.61C96.5227 35.61 95.7835 36.1012 95.7835 37.0838C95.7835 37.9529 96.2847 38.3938 97.2745 38.3938H98.3144C100.043 38.3938 100.895 39.137 100.895 40.6107C100.895 42.1979 99.8554 42.9915 97.7631 42.9915C96.7858 42.9915 95.8587 42.8781 95.0193 42.6514L95.0318 42.664Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M107.886 34.8164V35.673H105.343V42.9411H104.303V35.673H101.76V34.8164H107.886Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M108.538 42.9411H107.448L110.881 34.8164H112.034L115.479 42.9411H114.326L113.274 40.384H110.605L110.893 39.5275H112.923L111.42 35.8493L108.538 42.9411Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M121.205 34.8164V35.673H118.661V42.9411H117.609V35.673H115.066V34.8164H121.192H121.205Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M127.732 34.8164V35.673H123.497V38.4064H127.532V39.2629H123.497V42.1097H127.82V42.9663H122.445V34.8416H127.732V34.8164Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M52.7592 46.4682L53.3732 47.6774L53.9996 46.4682H54.5258L53.6237 48.0931V48.9622H53.1476V48.0805L52.2456 46.4556H52.7718L52.7592 46.4682Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M57.0692 48.9871C56.8938 48.9871 56.7309 48.9493 56.5931 48.8863C56.4427 48.8107 56.3175 48.7225 56.2172 48.5966C56.117 48.4832 56.0293 48.3446 55.9792 48.1935C55.9165 48.0423 55.8915 47.8786 55.8915 47.7274C55.8915 47.5763 55.9165 47.3999 55.9792 47.2487C56.0418 47.0976 56.117 46.959 56.2298 46.8457C56.33 46.7323 56.4553 46.6315 56.6056 46.5685C56.756 46.5056 56.9063 46.4678 57.0817 46.4678C57.2571 46.4678 57.42 46.5056 57.5578 46.5811C57.7082 46.6567 57.8209 46.7575 57.9337 46.8709C58.0339 46.9968 58.1216 47.1228 58.1717 47.2865C58.2219 47.4377 58.2594 47.6015 58.2594 47.7526C58.2594 47.9164 58.2344 48.0801 58.1717 48.2313C58.1091 48.3824 58.0339 48.521 57.9212 48.6344C57.8209 48.7477 57.6956 48.8485 57.5453 48.9115C57.3949 48.9745 57.2446 49.0122 57.0692 49.0122V48.9871ZM56.3801 47.7148C56.3801 47.8282 56.3926 47.929 56.4302 48.0297C56.4678 48.1305 56.5054 48.2187 56.568 48.2943C56.6307 48.3698 56.7059 48.4328 56.781 48.4832C56.8687 48.5336 56.969 48.5588 57.0817 48.5588C57.1945 48.5588 57.2947 48.5336 57.3824 48.4832C57.4701 48.4328 57.5453 48.3698 57.5954 48.2943C57.6581 48.2187 57.6956 48.1305 57.7332 48.0297C57.7583 47.929 57.7833 47.8282 57.7833 47.7274C57.7833 47.6266 57.7708 47.5133 57.7332 47.4125C57.6956 47.3117 57.6581 47.2236 57.5954 47.148C57.5328 47.0724 57.4576 47.0094 57.3824 46.959C57.2947 46.9086 57.1945 46.8961 57.0943 46.8961C56.994 46.8961 56.8813 46.9212 56.7936 46.9716C56.7059 47.022 56.6307 47.085 56.5806 47.1606C56.5179 47.2362 56.4803 47.3243 56.4427 47.4251C56.4177 47.5259 56.3926 47.6266 56.3926 47.7274L56.3801 47.7148Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M61.0784 48.5592C61.1912 48.5592 61.2914 48.534 61.3666 48.4836C61.4418 48.4332 61.5044 48.3702 61.5545 48.2946C61.6047 48.2191 61.6422 48.1309 61.6548 48.0301C61.6798 47.9293 61.6798 47.8286 61.6798 47.7278V46.4556H62.1559V47.7278C62.1559 47.9042 62.1309 48.0553 62.0933 48.2065C62.0557 48.3576 61.9931 48.4836 61.9054 48.597C61.8177 48.7103 61.7049 48.7985 61.5671 48.8615C61.4293 48.9245 61.2664 48.9622 61.0784 48.9622C60.8905 48.9622 60.7151 48.9245 60.5773 48.8615C60.4395 48.7985 60.3267 48.6977 60.239 48.5844C60.1513 48.471 60.0887 48.3324 60.0511 48.1939C60.0135 48.0427 59.9884 47.8916 59.9884 47.7278V46.4556H60.4771V47.7278C60.4771 47.8286 60.4771 47.9293 60.5021 48.0301C60.5272 48.1309 60.5522 48.2191 60.6023 48.2946C60.6525 48.3702 60.7151 48.4332 60.7903 48.471C60.8655 48.5214 60.9657 48.534 61.0784 48.534V48.5592Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M64.0603 48.9745V46.4678H65.1629C65.2756 46.4678 65.3884 46.493 65.4761 46.5434C65.5763 46.5937 65.6515 46.6567 65.7267 46.7323C65.8018 46.8079 65.852 46.8961 65.8895 46.9968C65.9271 47.0976 65.9522 47.1984 65.9522 47.2991C65.9522 47.4629 65.9146 47.614 65.8269 47.74C65.7517 47.8786 65.639 47.9667 65.5011 48.0297L66.09 48.9745H65.5387L65.0125 48.1305H64.5364V48.9745H64.0478H64.0603ZM64.5489 47.7022H65.1503C65.1503 47.7022 65.238 47.7022 65.2756 47.6644C65.3132 47.6392 65.3508 47.614 65.3759 47.5763C65.4009 47.5385 65.426 47.5007 65.4385 47.4503C65.451 47.3999 65.4636 47.3495 65.4636 47.2865C65.4636 47.2236 65.4636 47.1732 65.4385 47.1228C65.426 47.0724 65.3884 47.0346 65.3633 46.9968C65.3383 46.959 65.3007 46.9338 65.2506 46.9087C65.213 46.8835 65.1629 46.8835 65.1253 46.8835H64.5364V47.6896L64.5489 47.7022Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M71.8408 46.8961H71.0515V48.9745H70.5628V46.8961H69.761V46.4678H71.8408V46.8961Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M73.0686 48.9745L74.0459 46.4678H74.4343L75.4115 48.9745H74.8978L74.6723 48.3446H73.7953L73.5698 48.9745H73.0561H73.0686ZM74.2463 46.9968L73.883 48.0045H74.5846L74.2338 46.9968H74.2463Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M78.7693 48.6851C78.5813 48.8867 78.3558 48.9874 78.1052 48.9874C77.9424 48.9874 77.792 48.9497 77.6542 48.8867C77.5164 48.8111 77.3911 48.7229 77.2909 48.6095C77.1906 48.4962 77.1029 48.3576 77.0403 48.1939C76.9776 48.0427 76.9526 47.879 76.9526 47.7152C76.9526 47.5515 76.9776 47.3877 77.0403 47.2365C77.1029 47.0854 77.1781 46.9468 77.2909 46.8335C77.3911 46.7201 77.5164 46.6319 77.6667 46.5563C77.8171 46.4934 77.9674 46.4556 78.1428 46.4556C78.3683 46.4556 78.5688 46.506 78.7192 46.6067C78.882 46.7075 79.0073 46.8335 79.0825 47.0098L78.7192 47.2743C78.6565 47.1484 78.5688 47.0602 78.4686 46.9846C78.3558 46.9216 78.2431 46.8838 78.1178 46.8838C78.0175 46.8838 77.9173 46.909 77.8421 46.9468C77.7544 46.9972 77.6918 47.0476 77.6291 47.1358C77.5665 47.2113 77.5289 47.2995 77.4913 47.4003C77.4537 47.5011 77.4412 47.6144 77.4412 47.7152C77.4412 47.816 77.4537 47.9419 77.4913 48.0427C77.5289 48.1435 77.579 48.2317 77.6417 48.3072C77.7043 48.3828 77.7795 48.4458 77.8672 48.4836C77.9549 48.5214 78.0426 48.5466 78.1428 48.5466C78.3683 48.5466 78.5813 48.4332 78.7693 48.2065V48.0301H78.2681V47.6774H79.1702V48.9622H78.7693V48.6851Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M80.9869 48.9745V46.4678H81.4755V48.5462H82.7409V48.9745H80.9869Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M84.4574 48.9745V46.4678H84.946V48.9745H84.4574Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M87.339 47.3625V48.9622H86.8504V46.4556H87.2263L88.5293 48.0931V46.4556H89.0179V48.9622H88.6295L87.3516 47.3625H87.339Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M92.6764 48.5462V48.9745H90.9474V46.4678H92.6513V46.8961H91.436V47.5007H92.4884V47.8912H91.436V48.5462H92.6764Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M98.2016 47.123C98.2016 47.123 98.1515 47.0852 98.1139 47.06C98.0763 47.0348 98.0137 47.0096 97.9636 46.9718C97.9009 46.9466 97.8383 46.9214 97.7631 46.9088C97.6879 46.8836 97.6127 46.8836 97.5376 46.8836C97.3998 46.8836 97.2995 46.9088 97.2369 46.9592C97.1742 47.0096 97.1367 47.0852 97.1367 47.1734C97.1367 47.2237 97.1366 47.2741 97.1742 47.2993C97.1993 47.3371 97.2369 47.3623 97.287 47.3875C97.3371 47.4127 97.3872 47.4379 97.4624 47.4631C97.5376 47.4883 97.6127 47.5009 97.713 47.5261C97.8383 47.5639 97.951 47.589 98.0513 47.6268C98.1515 47.6646 98.2392 47.715 98.3018 47.7654C98.3645 47.8158 98.4271 47.8914 98.4647 47.9669C98.5023 48.0425 98.5148 48.1433 98.5148 48.2567C98.5148 48.3952 98.4898 48.5086 98.4397 48.5968C98.3895 48.6975 98.3269 48.7731 98.2392 48.8235C98.1515 48.8865 98.0513 48.9243 97.9385 48.9495C97.8257 48.9746 97.713 48.9872 97.5877 48.9872C97.3998 48.9872 97.2118 48.9621 97.0364 48.8991C96.8485 48.8487 96.6856 48.7605 96.5478 48.6597L96.7608 48.2441C96.7608 48.2441 96.8234 48.2944 96.8735 48.3322C96.9237 48.37 96.9988 48.3952 97.074 48.433C97.1492 48.4708 97.2369 48.496 97.3246 48.5212C97.4123 48.5464 97.5125 48.559 97.6002 48.559C97.8633 48.559 98.0011 48.4708 98.0011 48.307C98.0011 48.2441 97.9886 48.2063 97.951 48.1685C97.9134 48.1307 97.8759 48.0929 97.8257 48.0677C97.7756 48.0425 97.7005 48.0173 97.6253 47.9921C97.5501 47.9669 97.4624 47.9417 97.3622 47.9166C97.2494 47.8788 97.1367 47.8536 97.0489 47.8032C96.9612 47.7654 96.8861 47.715 96.8234 47.6646C96.7608 47.6142 96.7232 47.5513 96.6856 47.4757C96.6606 47.4127 96.6355 47.3245 96.6355 47.2238C96.6355 47.0978 96.6606 46.9844 96.7107 46.8836C96.7608 46.7829 96.8234 46.7073 96.9111 46.6317C96.9988 46.5687 97.0865 46.5184 97.1993 46.4806C97.3121 46.4428 97.4248 46.4302 97.5501 46.4302C97.7255 46.4302 97.8884 46.4554 98.0387 46.5184C98.1891 46.5687 98.3144 46.6443 98.4271 46.7199L98.2141 47.1104L98.2016 47.123Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M100.269 48.9745V46.4678H101.321C101.434 46.4678 101.547 46.493 101.635 46.5434C101.735 46.5937 101.81 46.6567 101.885 46.7323C101.96 46.8079 102.01 46.8961 102.048 46.9968C102.086 47.0976 102.111 47.1984 102.111 47.2991C102.111 47.3999 102.086 47.5133 102.061 47.614C102.023 47.7148 101.973 47.803 101.898 47.8786C101.835 47.9541 101.747 48.0171 101.647 48.0675C101.547 48.1179 101.447 48.1431 101.334 48.1431H100.745V48.9871H100.256L100.269 48.9745ZM100.758 47.7022H101.321C101.409 47.7022 101.484 47.6644 101.547 47.5889C101.609 47.5133 101.635 47.4125 101.635 47.2865C101.635 47.2236 101.635 47.1606 101.609 47.1228C101.597 47.0724 101.572 47.0346 101.534 46.9968C101.497 46.959 101.472 46.9338 101.422 46.9212C101.384 46.9086 101.334 46.8961 101.296 46.8961H100.758V47.7022Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M103.414 48.9745L104.391 46.4678H104.779L105.757 48.9745H105.243L105.017 48.3446H104.14L103.915 48.9745H103.401H103.414ZM104.591 46.9968L104.228 48.0045H104.93L104.579 46.9968H104.591Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M107.298 47.7025C107.298 47.5514 107.323 47.4002 107.373 47.249C107.423 47.0979 107.511 46.9719 107.611 46.846C107.711 46.7326 107.836 46.6318 107.987 46.5562C108.137 46.4807 108.3 46.4429 108.488 46.4429C108.713 46.4429 108.901 46.4933 109.064 46.594C109.227 46.6948 109.352 46.8208 109.428 46.9845L109.052 47.2364C109.027 47.1609 108.989 47.1105 108.939 47.0601C108.889 47.0097 108.851 46.9719 108.789 46.9467C108.738 46.9215 108.688 46.8963 108.626 46.8837C108.563 46.8837 108.513 46.8586 108.463 46.8586C108.35 46.8586 108.25 46.8837 108.162 46.9341C108.074 46.9845 107.999 47.0475 107.949 47.1231C107.886 47.1987 107.849 47.2868 107.824 47.3876C107.799 47.4884 107.786 47.5891 107.786 47.6899C107.786 47.8033 107.799 47.9041 107.836 48.0048C107.874 48.1056 107.924 48.1938 107.987 48.2694C108.049 48.3449 108.125 48.4079 108.212 48.4583C108.3 48.5087 108.388 48.5339 108.5 48.5339C108.55 48.5339 108.613 48.5339 108.663 48.5087C108.713 48.4961 108.776 48.4709 108.826 48.4457C108.876 48.4205 108.926 48.3701 108.976 48.3323C109.027 48.2819 109.052 48.2316 109.089 48.156L109.49 48.3827C109.453 48.4709 109.402 48.5591 109.327 48.6346C109.252 48.7102 109.177 48.7732 109.089 48.811C109.002 48.8614 108.901 48.8992 108.801 48.9244C108.701 48.9496 108.601 48.9622 108.5 48.9622C108.325 48.9622 108.175 48.9244 108.024 48.8488C107.886 48.7732 107.761 48.6724 107.648 48.5591C107.548 48.4331 107.46 48.2945 107.41 48.1434C107.36 47.9922 107.323 47.8285 107.323 47.6773L107.298 47.7025Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M112.923 48.5462V48.9745H111.194V46.4678H112.898V46.8961H111.683V47.5007H112.735V47.8912H111.683V48.5462H112.923Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M119.062 46.4678V48.9745H118.586V47.9038H117.459V48.9745H116.97V46.4678H117.459V47.4755H118.586V46.4678H119.062Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M122.708 48.5462V48.9745H120.979V46.4678H122.683V46.8961H121.468V47.5007H122.52V47.8912H121.468V48.5462H122.708Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M124.5 48.9745V46.4678H125.602C125.715 46.4678 125.828 46.493 125.916 46.5434C126.016 46.5937 126.091 46.6567 126.166 46.7323C126.229 46.8079 126.291 46.8961 126.329 46.9968C126.367 47.0976 126.392 47.1984 126.392 47.2991C126.392 47.4629 126.354 47.614 126.266 47.74C126.191 47.8786 126.078 47.9667 125.941 48.0297L126.529 48.9745H125.978L125.452 48.1305H124.976V48.9745H124.487H124.5ZM124.988 47.7022H125.59C125.59 47.7022 125.678 47.7022 125.715 47.6644C125.753 47.6392 125.79 47.614 125.815 47.5763C125.84 47.5385 125.865 47.5007 125.878 47.4503C125.891 47.3999 125.903 47.3495 125.903 47.2865C125.903 47.2236 125.903 47.1732 125.878 47.1228C125.853 47.0724 125.828 47.0346 125.803 46.9968C125.778 46.959 125.74 46.9338 125.69 46.9087C125.652 46.8835 125.615 46.8835 125.565 46.8835H124.976V47.6896L124.988 47.7022Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M130 48.5462V48.9745H128.271V46.4678H129.975V46.8961H128.76V47.5007H129.812V47.8912H128.76V48.5462H130Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M9.17116 48.2442V32.083L37.3236 11.4123L45.079 17.1185L52.8595 11.4123L37.3236 0L0 27.3972V48.2442H9.17116Z"
                                                                fill="#E7E7E7" />
                                                            <path
                                                                d="M39.5663 48.2442V32.083L67.7188 11.4123H83.2546L67.7188 0L30.3951 27.3972V48.2442H39.5663Z"
                                                                fill="#B9B9B9" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2304_5712">
                                                                <rect width="130" height="49" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>




                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="partner-item style-2">
                                                    <svg width="148" height="38" viewBox="0 0 148 38" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2304_5750)">
                                                            <path
                                                                d="M22.8727 24.6738L0 11.6625L20.5075 0L43.3843 13.0113L22.8727 24.6738Z"
                                                                fill="#EBEBEB" />
                                                            <path
                                                                d="M22.8727 38.0002L0.0901785 25.0011V11.6748L22.8727 24.674V38.0002Z"
                                                                fill="#E3E3E3" />
                                                            <path
                                                                d="M43.3802 26.3334L22.8727 38V24.6737L43.3843 13.0112L43.3802 26.3334Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M31.5667 12.0584V10.2492H30.8658C30.3862 9.57889 29.6648 8.94892 28.7056 8.40376C24.8566 6.21502 18.6178 6.21502 14.7688 8.40376C13.8097 8.94892 13.0882 9.57889 12.6087 10.2533H11.8831V12.3693C11.8831 13.8029 12.8464 15.2405 14.7688 16.3349C18.6178 18.5236 24.8566 18.5236 28.7056 16.3349C30.7674 15.1638 31.7143 13.601 31.5667 12.0665V12.0584Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M28.7056 14.5901C24.8566 16.7789 18.6178 16.7789 14.7688 14.5901C10.9198 12.4014 10.9198 8.85177 14.7688 6.66304C18.6178 4.4743 24.8566 4.4743 28.7056 6.66304C32.5546 8.85177 32.5546 12.4014 28.7056 14.5901Z"
                                                                fill="#E3E3E3" />
                                                            <path
                                                                d="M63.1129 16.4439L60.7806 12.438H59.4361V16.4439H56.6078V4.25244H61.5553C62.7399 4.25244 63.7278 4.65223 64.5599 5.472C65.392 6.29176 65.7978 7.26498 65.7978 8.43204C65.7978 9.91408 64.8796 11.2709 63.5188 11.9655L66.1544 16.4399H63.1129V16.4439ZM59.4361 6.86519V9.99888H61.5553C62.3341 9.99888 62.9695 9.32045 62.9695 8.43204C62.9695 7.54362 62.3341 6.86519 61.5553 6.86519H59.4361Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M69.7616 13.1327C70.0608 13.9524 70.77 14.3522 71.8808 14.3522C72.6063 14.3522 73.172 14.1261 73.5778 13.6899L75.697 14.8933C74.8321 16.0967 73.5409 16.6863 71.8439 16.6863C70.3601 16.6863 69.1754 16.2502 68.2736 15.382C67.3882 14.5097 66.9497 13.4153 66.9497 12.0908C66.9497 10.7662 67.3924 9.68802 68.2572 8.81576C69.1426 7.92734 70.274 7.49121 71.6513 7.49121C72.9425 7.49121 74.0041 7.92734 74.8526 8.81576C75.7175 9.68802 76.1438 10.7824 76.1438 12.0908C76.1438 12.4583 76.1069 12.8056 76.0372 13.1367H69.7616V13.1327ZM73.5081 11.1822C73.2417 10.2574 72.6227 9.80513 71.6349 9.80513C70.647 9.80513 69.9747 10.2574 69.7083 11.1822H73.5081Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M83.973 7.73754H86.6251V16.444H83.973V15.6243C83.354 16.339 82.4686 16.6863 81.3414 16.6863C80.2142 16.6863 79.1853 16.2502 78.3532 15.3618C77.5211 14.4734 77.1153 13.375 77.1153 12.0867C77.1153 10.7985 77.5211 9.72033 78.3532 8.83191C79.1853 7.9435 80.1732 7.49121 81.3414 7.49121C82.5096 7.49121 83.3581 7.8385 83.973 8.55327V7.73351V7.73754ZM81.8702 14.2149C82.4891 14.2149 83.0015 14.0251 83.3909 13.6415C83.7803 13.2578 83.973 12.7369 83.973 12.0908C83.973 11.4447 83.7803 10.9237 83.3909 10.5401C83.0015 10.1565 82.4891 9.96666 81.8702 9.96666C81.2512 9.96666 80.7388 10.1565 80.3494 10.5401C79.96 10.9237 79.7674 11.4447 79.7674 12.0908C79.7674 12.7369 79.96 13.2578 80.3494 13.6415C80.7388 14.0251 81.2512 14.2149 81.8702 14.2149Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M88.5721 16.4439V3.73145H91.2242V16.4439H88.5721Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M100.504 13.7625H105.452V16.4439H97.6761V4.25244H105.366V6.93384H100.504V8.95297H104.923V11.598H100.504V13.7585V13.7625Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M111.002 11.0449C112.224 11.3074 113.83 11.9333 113.814 13.8313C113.814 14.7722 113.461 15.487 112.752 15.9716C112.047 16.44 111.178 16.6863 110.137 16.6863C108.28 16.6863 107.01 15.9917 106.337 14.6147L108.637 13.3265C108.866 14.0049 109.379 14.3522 110.141 14.3522C110.777 14.3522 111.096 14.1786 111.096 13.8111C111.096 13.4436 110.408 13.2538 109.559 13.0438C108.338 12.7127 106.747 12.1191 106.747 10.3463C106.747 9.44169 107.083 8.74307 107.735 8.23829C108.407 7.73351 109.239 7.49121 110.211 7.49121C111.678 7.49121 112.933 8.15349 113.658 9.35285L111.396 10.5562C111.113 10.0515 110.723 9.78898 110.211 9.78898C109.699 9.78898 109.469 9.94647 109.469 10.2776C109.469 10.6249 110.158 10.8187 111.006 11.0449H111.002Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M120.053 10.2452H118.233V13.3264C118.233 14.025 118.762 14.1462 120.053 14.0735V16.4399C118.372 16.6135 117.208 16.456 116.552 15.9715C115.9 15.4667 115.581 14.5944 115.581 13.3264V10.2452H114.167V7.73745H115.581V6.08176L118.233 5.29834V7.73745H120.053V10.2452Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M127.796 7.73754H130.448V16.444H127.796V15.6243C127.177 16.339 126.291 16.6863 125.164 16.6863C124.037 16.6863 123.008 16.2502 122.176 15.3618C121.344 14.4734 120.938 13.375 120.938 12.0867C120.938 10.7985 121.344 9.72033 122.176 8.83191C123.008 7.9435 123.996 7.49121 125.164 7.49121C126.332 7.49121 127.181 7.8385 127.796 8.55327V7.73351V7.73754ZM125.693 14.2149C126.312 14.2149 126.824 14.0251 127.214 13.6415C127.603 13.2578 127.796 12.7369 127.796 12.0908C127.796 11.4447 127.603 10.9237 127.214 10.5401C126.824 10.1565 126.312 9.96666 125.693 9.96666C125.074 9.96666 124.562 10.1565 124.172 10.5401C123.783 10.9237 123.59 11.4447 123.59 12.0908C123.59 12.7369 123.783 13.2578 124.172 13.6415C124.562 14.0251 125.074 14.2149 125.693 14.2149Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M137.572 10.2452H135.752V13.3264C135.752 14.025 136.281 14.1462 137.572 14.0735V16.4399C135.891 16.6135 134.727 16.456 134.071 15.9715C133.42 15.4667 133.1 14.5944 133.1 13.3264V10.2452H131.686V7.73745H133.1V6.08176L135.752 5.29834V7.73745H137.572V10.2452Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M141.622 13.1327C141.921 13.9524 142.63 14.3522 143.741 14.3522C144.467 14.3522 145.032 14.1261 145.438 13.6899L147.557 14.8933C146.692 16.0967 145.401 16.6863 143.704 16.6863C142.22 16.6863 141.036 16.2502 140.134 15.382C139.249 14.5097 138.81 13.4153 138.81 12.0908C138.81 10.7662 139.253 9.68802 140.118 8.81576C141.003 7.92734 142.134 7.49121 143.512 7.49121C144.803 7.49121 145.864 7.92734 146.713 8.81576C147.578 9.68802 148.004 10.7824 148.004 12.0908C148.004 12.4583 147.967 12.8056 147.898 13.1367H141.622V13.1327ZM145.368 11.1822C145.102 10.2574 144.483 9.80513 143.495 9.80513C142.507 9.80513 141.835 10.2574 141.569 11.1822H145.368Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M61.9447 25.1143L59.3459 29.419V32.3387H58.3704V29.4069L55.7839 25.1143H56.8742L58.8663 28.4983L60.8585 25.1143H61.9488H61.9447Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M65.2035 26.0753C65.9372 25.3444 66.839 24.981 67.8965 24.981C68.9541 24.981 69.8559 25.3404 70.5896 26.0753C71.3315 26.7982 71.7004 27.6866 71.7004 28.7285C71.7004 29.7703 71.3356 30.6466 70.5896 31.3816C69.8559 32.1125 68.9541 32.476 67.8965 32.476C66.839 32.476 65.9372 32.1166 65.2035 31.3816C64.4697 30.6466 64.1049 29.7703 64.1049 28.7285C64.1049 27.6866 64.4697 26.7982 65.2035 26.0753ZM69.9092 26.7255C69.3763 26.1803 68.704 25.9098 67.8965 25.9098C67.089 25.9098 66.4209 26.1763 65.8757 26.7255C65.3428 27.2626 65.0682 27.9329 65.0682 28.7285C65.0682 29.524 65.3387 30.1822 65.8757 30.7314C66.4209 31.2685 67.089 31.535 67.8965 31.535C68.704 31.535 69.3722 31.2685 69.9092 30.7314C70.4543 30.1863 70.7249 29.524 70.7249 28.7285C70.7249 27.9329 70.4543 27.2626 69.9092 26.7255Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M74.4509 25.1143H75.4265V29.8713C75.4265 30.893 76.0659 31.531 77.2095 31.531C78.3532 31.531 78.9885 30.893 78.9885 29.8713V25.1143H79.9518V29.9117C79.9518 30.6871 79.7018 31.317 79.1853 31.7814C78.6729 32.2458 78.013 32.472 77.2055 32.472C76.3979 32.472 75.7257 32.2458 75.2133 31.7814C74.7009 31.317 74.4468 30.6871 74.4468 29.9117V25.1143H74.4509Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M87.4654 32.3387L85.8216 29.5725H84.0918V32.3387H83.1163V25.1143H86.0512C86.6783 25.1143 87.2153 25.3323 87.6662 25.7765C88.1171 26.2086 88.3344 26.7376 88.3344 27.3555C88.3344 27.8199 88.1868 28.252 87.9039 28.6356C87.6211 29.0193 87.2645 29.2979 86.8136 29.4513L88.5434 32.3427H87.4654V32.3387ZM84.0918 26.0108V28.7043H86.0512C86.416 28.7043 86.7193 28.571 86.9735 28.3126C87.2358 28.046 87.3629 27.723 87.3629 27.3515C87.3629 26.9799 87.2358 26.6609 86.9735 26.4025C86.7234 26.144 86.4201 26.0108 86.0512 26.0108H84.0918Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M100.181 25.1143V26.0229H98.0122V32.3387H97.0489V26.0229H94.8887V25.1143H100.181Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M107.116 32.3387L106.518 30.7194H103.218L102.62 32.3387H101.582L104.317 25.1143H105.415L108.149 32.3387H107.112H107.116ZM103.554 29.8188H106.182L104.862 26.2571L103.554 29.8188Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M117.77 28.7567V29.1888C117.77 30.1297 117.446 30.9132 116.786 31.5431C116.126 32.161 115.257 32.4719 114.179 32.4719C113.101 32.4719 112.137 32.1125 111.404 31.3897C110.682 30.6587 110.313 29.7703 110.313 28.7285C110.313 27.6866 110.678 26.7982 111.404 26.0753C112.137 25.3444 113.06 24.981 114.158 24.981C114.839 24.981 115.458 25.1465 116.023 25.4655C116.589 25.7846 117.028 26.1965 117.335 26.7255L116.499 27.2101C116.081 26.4267 115.167 25.9098 114.15 25.9098C113.314 25.9098 112.621 26.1763 112.088 26.7255C111.555 27.2626 111.281 27.9329 111.281 28.7285C111.281 29.524 111.551 30.1943 112.088 30.7314C112.633 31.2685 113.334 31.535 114.195 31.535C115.663 31.535 116.605 30.7516 116.802 29.625H114.109V28.7567H117.778H117.77Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M121.602 31.4301H124.767V32.3387H120.627V25.1143H121.602V31.4301Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M127.419 25.1143H128.394V32.3387H127.419V25.1143Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M136.195 25.1143H137.17V32.3387H136.383L132.612 26.9396V32.3387H131.637V25.1143H132.424L136.195 30.5013V25.1143Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M141.392 31.4301H144.799V32.3387H140.421V25.1143H144.749V26.0229H141.396V28.2439H144.487V29.1404H141.396V31.4301H141.392Z"
                                                                fill="#B9B9B9" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2304_5750">
                                                                <rect width="148" height="38" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>





                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="partner-item style-2">

                                                    <svg width="126" height="75" viewBox="0 0 126 75" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2304_5782)">
                                                            <path d="M48.5762 19.0562H43.4095V24.1914H48.5762V19.0562Z"
                                                                fill="#E3E3E3" />
                                                            <path d="M55.2941 19.0562H50.1301V24.1914H55.2941V19.0562Z"
                                                                fill="#E3E3E3" />
                                                            <path d="M55.2941 25.4346H50.1301V30.5698H55.2941V25.4346Z"
                                                                fill="#E3E3E3" />
                                                            <path d="M48.5762 25.4346H43.4095V30.5698H48.5762V25.4346Z"
                                                                fill="#E3E3E3" />
                                                            <path
                                                                d="M105.518 8.47549L106.857 9.98778L83.6973 29.8343C73.7613 21.3204 51.7337 2.44552 49.3573 0.40625C46.393 2.9423 22.5134 23.4063 10.2121 33.9457H19.8141L49.3573 8.63468C51.1513 10.1744 77.3493 32.6201 78.8977 33.9457H88.4998L110.997 14.6701L112.377 16.2318C114.068 11.2558 114.019 11.404 115.705 6.44994C109.843 7.61367 109.608 7.66307 105.521 8.47549H105.518Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M66.7122 13.1441L71.5147 17.2583L81.9861 8.28607L83.3054 9.77915C85.3451 3.78486 84.5916 5.99429 86.634 0C83.4683 0.628522 79.6125 1.39428 76.4496 2.0228L77.8461 3.60371L66.7095 13.1468L66.7122 13.1441Z"
                                                                fill="#E3E3E3" />
                                                            <path
                                                                d="M75.8451 20.9691L80.6475 25.0833L97.2379 10.8689L98.5876 12.3949C100.624 6.40058 99.8737 8.61001 101.916 2.61572C98.7532 3.24424 94.8974 4.01 91.7317 4.63852L93.0979 6.18375L75.8451 20.9664V20.9691Z"
                                                                fill="#E3E3E3" />
                                                            <path
                                                                d="M6.6875 55.9L5.08946 60.7114H3.03601L8.26347 45.4155H10.6592L15.9087 60.7114H13.7863L12.144 55.9H6.6875ZM11.73 54.3576L10.2231 49.9552C9.88084 48.9561 9.65176 48.0476 9.42544 47.1639H9.37852C9.14943 48.0723 8.89827 49.0028 8.60295 49.9332L7.09599 54.3576H11.73Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M18.0284 44.5977H20.0377V60.7114H18.0284V44.5977Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M23.4132 53.3118C23.4132 51.9038 23.3662 50.7703 23.3221 49.7273H25.1244L25.2155 51.6101H25.2624C26.0849 50.2707 27.3848 49.4775 29.1871 49.4775C31.856 49.4775 33.8653 51.7254 33.8653 55.0601C33.8653 59.0097 31.4448 60.9611 28.8449 60.9611C27.3848 60.9611 26.1069 60.3271 25.4445 59.2375H25.3976V65.2071H23.4132V53.3145V53.3118ZM25.3976 56.2403C25.3976 56.534 25.4445 56.8085 25.4887 57.0582C25.853 58.4415 27.0647 59.3967 28.5026 59.3967C30.6251 59.3967 31.856 57.673 31.856 55.1534C31.856 52.9522 30.6913 51.0694 28.5689 51.0694C27.1999 51.0694 25.922 52.0465 25.5329 53.5423C25.4639 53.7921 25.3949 54.0858 25.3949 54.3602V56.2431L25.3976 56.2403Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M36.399 44.5978H38.4083V51.4511H38.4552C38.7754 50.883 39.2777 50.3835 39.8932 50.0431C40.4866 49.7028 41.1931 49.475 41.9466 49.475C43.4287 49.475 45.8024 50.3835 45.8024 54.1738V60.7088H43.7931V54.3989C43.7931 52.6286 43.1307 51.13 41.2373 51.13C39.9373 51.13 38.9106 52.0385 38.5435 53.1281C38.4304 53.3998 38.4055 53.6962 38.4055 54.0805V60.7061H36.3962V44.5923L36.399 44.5978Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M55.1809 60.7113L55.0208 59.328H54.9518C54.3363 60.1899 53.1495 60.9611 51.5736 60.9611C49.338 60.9611 48.1953 59.3939 48.1953 57.8075C48.1953 55.1534 50.5689 53.6988 54.8359 53.7235V53.4957C54.8359 52.5872 54.5847 50.9542 52.3243 50.9542C51.2976 50.9542 50.2239 51.2725 49.4484 51.7721L48.993 50.4546C49.9065 49.8645 51.2286 49.4775 52.6224 49.4775C56.0006 49.4775 56.8203 51.7693 56.8203 53.9705V58.0792C56.8203 59.0316 56.8673 59.9621 57.0025 60.7113H55.1754H55.1809ZM54.8856 55.1068C52.6941 55.0601 50.2074 55.4471 50.2074 57.5797C50.2074 58.8724 51.074 59.4872 52.1007 59.4872C53.5387 59.4872 54.4523 58.5788 54.7697 57.6483C54.8387 57.4452 54.8828 57.2174 54.8828 57.0116V55.104L54.8856 55.1068Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M66.9551 45.4131V51.8136H74.3961V45.4131H76.4054V60.709H74.3961V53.5372H66.9551V60.709H64.9706V45.4131H66.9551Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M89.7749 55.1263C89.7749 59.1884 86.9459 60.9587 84.2742 60.9587C81.2851 60.9587 78.9805 58.7794 78.9805 55.3075C78.9805 51.6296 81.3982 49.4751 84.4563 49.4751C87.5144 49.4751 89.7749 51.7669 89.7749 55.1263ZM81.0118 55.2388C81.0118 57.6431 82.4029 59.4601 84.368 59.4601C86.3331 59.4601 87.7242 57.6678 87.7242 55.1949C87.7242 53.3341 86.7885 50.9737 84.4149 50.9737C82.0413 50.9737 81.0146 53.1529 81.0146 55.2388H81.0118Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M101.549 57.7144C101.549 58.848 101.571 59.847 101.64 60.7116H99.86L99.7468 58.9193H99.6999C99.1755 59.8031 98.0108 60.9613 96.0484 60.9613C94.3151 60.9613 92.2368 60.009 92.2368 56.15V49.7275H94.2461V55.8097C94.2461 57.8983 94.8864 59.3036 96.7108 59.3036C98.0577 59.3036 98.9933 58.3732 99.3576 57.4894C99.4708 57.193 99.5398 56.8307 99.5398 56.4684V49.7275H101.549V57.7172V57.7144Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M104.607 58.6669C105.201 59.0539 106.249 59.4601 107.254 59.4601C108.714 59.4601 109.399 58.7328 109.399 57.827C109.399 56.8746 108.827 56.3504 107.345 55.807C105.361 55.1044 104.425 54.0147 104.425 52.6973C104.425 50.927 105.863 49.4751 108.237 49.4751C109.354 49.4751 110.337 49.7935 110.952 50.1558L110.45 51.6077C110.017 51.336 109.219 50.9709 108.19 50.9709C107.003 50.9709 106.34 51.6516 106.34 52.4695C106.34 53.378 107.003 53.7869 108.441 54.3304C110.359 55.0577 111.339 56.0101 111.339 57.6431C111.339 59.5726 109.832 60.934 107.207 60.934C105.998 60.934 104.88 60.6375 104.102 60.1847L104.604 58.6642L104.607 58.6669Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M115.037 55.5819C115.084 58.2826 116.817 59.3942 118.827 59.3942C120.265 59.3942 121.131 59.1445 121.885 58.8261L122.227 60.256C121.521 60.5744 120.309 60.9367 118.554 60.9367C115.153 60.9367 113.122 58.7136 113.122 55.398C113.122 52.0825 115.084 49.4751 118.302 49.4751C121.907 49.4751 122.867 52.6287 122.867 54.6487C122.867 55.0577 122.82 55.3761 122.798 55.5792H115.04L115.037 55.5819ZM120.924 54.152C120.946 52.8812 120.4 50.9078 118.14 50.9078C116.108 50.9078 115.219 52.7687 115.059 54.152H120.924Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M20.6421 72.288C20.2833 72.4664 19.5629 72.6448 18.6439 72.6448C16.5104 72.6448 14.9041 71.3054 14.9041 68.838C14.9041 66.3706 16.5104 64.8857 18.8564 64.8857C19.8003 64.8857 20.3937 65.0861 20.6532 65.2206L20.4186 66.0138C20.0487 65.8354 19.5215 65.7009 18.8923 65.7009C17.1176 65.7009 15.9391 66.8289 15.9391 68.8051C15.9391 70.6467 17.0044 71.8297 18.8481 71.8297C19.4443 71.8297 20.0487 71.7062 20.4434 71.5168L20.6449 72.288H20.6421Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M28.05 69.7879C28.05 71.786 26.6589 72.6561 25.3452 72.6561C23.8741 72.6561 22.7397 71.5829 22.7397 69.8758C22.7397 68.0671 23.9293 67.0049 25.4335 67.0049C26.9377 67.0049 28.05 68.1329 28.05 69.7852V69.7879ZM23.7388 69.8428C23.7388 71.0258 24.4233 71.9205 25.3893 71.9205C26.3553 71.9205 27.0398 71.0395 27.0398 69.8209C27.0398 68.9042 26.5789 67.7432 25.4114 67.7432C24.2439 67.7432 23.7388 68.8163 23.7388 69.8428Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M30.7217 68.5913C30.7217 68.0341 30.7106 67.5758 30.6775 67.1284H31.5414L31.5856 67.9984H31.6187C31.9223 67.4852 32.4274 67.0049 33.3244 67.0049C34.0668 67.0049 34.6271 67.4523 34.8617 68.089H34.8838C35.0521 67.7871 35.2647 67.5538 35.491 67.3864C35.8167 67.1421 36.1755 67.0076 36.6916 67.0076C37.4092 67.0076 38.4773 67.477 38.4773 69.3515V72.5326H37.5113V69.4723C37.5113 68.4348 37.1304 67.8091 36.3328 67.8091C35.7725 67.8091 35.3337 68.2235 35.1653 68.7011C35.1211 68.8356 35.0853 69.014 35.0853 69.1924V72.5298H34.1193V69.2912C34.1193 68.4321 33.7384 67.8063 32.9849 67.8063C32.3666 67.8063 31.9195 68.2976 31.7622 68.7889C31.707 68.9344 31.6849 69.1018 31.6849 69.2692V72.5298H30.7189V68.5885L30.7217 68.5913Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M41.5106 68.8929C41.5106 68.2012 41.4885 67.6413 41.4664 67.1281H42.3524L42.3965 68.0558H42.4186C42.8216 67.3971 43.4619 67.0073 44.3506 67.0073C45.6644 67.0073 46.6525 68.1134 46.6525 69.7547C46.6525 71.6979 45.4629 72.6585 44.1822 72.6585C43.4646 72.6585 42.8354 72.3457 42.5097 71.8104H42.4876V74.7472H41.5106V68.8956V68.8929ZM42.4876 70.3338C42.4876 70.4793 42.5097 70.6138 42.5318 70.7345C42.7112 71.4152 43.3073 71.8845 44.0139 71.8845C45.0572 71.8845 45.6644 71.0365 45.6644 69.7959C45.6644 68.7117 45.0931 67.7868 44.047 67.7868C43.3736 67.7868 42.7443 68.2671 42.5538 69.0027C42.5207 69.1262 42.4876 69.2716 42.4876 69.4034V70.3311V70.3338Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M52.3326 72.5326L52.2553 71.8519H52.2222C51.9186 72.2773 51.3362 72.6561 50.5606 72.6561C49.4594 72.6561 48.8991 71.8849 48.8991 71.1054C48.8991 69.7989 50.0666 69.0853 52.167 69.0963V68.9838C52.167 68.5364 52.0428 67.7322 50.9332 67.7322C50.4282 67.7322 49.901 67.8887 49.5174 68.1329L49.2938 67.4852C49.7437 67.1943 50.395 67.0049 51.0795 67.0049C52.741 67.0049 53.1468 68.1329 53.1468 69.2143V71.2344C53.1468 71.7037 53.1688 72.1621 53.2378 72.5298H52.3408L52.3326 72.5326ZM52.1863 69.7742C51.1071 69.7523 49.8844 69.9416 49.8844 70.9901C49.8844 71.6269 50.3122 71.9288 50.8173 71.9288C51.5239 71.9288 51.9738 71.4814 52.1311 71.023C52.1642 70.9215 52.1863 70.8117 52.1863 70.7101V69.7715V69.7742Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M56.1579 68.5913C56.1579 68.0341 56.1469 67.5758 56.1138 67.1284H56.9887L57.0439 68.0204H57.066C57.3364 67.5072 57.963 67.0049 58.8627 67.0049C59.6162 67.0049 60.7837 67.4523 60.7837 69.3049V72.5326H59.7956V69.4174C59.7956 68.5474 59.4699 67.82 58.5371 67.82C57.8857 67.82 57.3806 68.2784 57.2122 68.8246C57.1681 68.9481 57.146 69.1155 57.146 69.2829V72.5326H56.1579V68.5913Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M64.0295 67.1284L65.219 70.3204C65.3432 70.6772 65.4785 71.1027 65.5668 71.4265H65.5889C65.691 71.1027 65.8014 70.691 65.9366 70.2985L67.0158 67.1284H68.0591L66.577 70.9819C65.8704 72.8345 65.3874 73.7842 64.714 74.366C64.231 74.7915 63.7479 74.9589 63.5023 75.0028L63.2567 74.1767C63.5023 74.0998 63.828 73.9434 64.1205 73.6963C64.391 73.485 64.7277 73.1035 64.9513 72.6012C64.9955 72.4997 65.0286 72.4228 65.0286 72.3679C65.0286 72.313 65.0065 72.2334 64.9624 72.1099L62.9531 67.1312H64.0322L64.0295 67.1284Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M74.0538 71.528C74.3464 71.7174 74.8625 71.9178 75.3566 71.9178C76.0742 71.9178 76.4109 71.561 76.4109 71.1136C76.4109 70.6443 76.1294 70.389 75.4007 70.12C74.4237 69.7742 73.9628 69.239 73.9628 68.5913C73.9628 67.7212 74.6693 67.0049 75.8368 67.0049C76.386 67.0049 76.869 67.1613 77.1727 67.3397L76.927 68.0533C76.7145 67.9188 76.3198 67.7404 75.8147 67.7404C75.2296 67.7404 74.9067 68.0753 74.9067 68.4788C74.9067 68.9261 75.2324 69.1265 75.9389 69.3955C76.8828 69.7523 77.3659 70.2216 77.3659 71.0258C77.3659 71.9754 76.6234 72.6451 75.3345 72.6451C74.7383 72.6451 74.1891 72.4996 73.8082 72.2773L74.0538 71.528Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M80.0596 64.606H81.0477V72.5325H80.0596V64.606Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M89.0517 69.7879C89.0517 71.786 87.6607 72.6561 86.3469 72.6561C84.8758 72.6561 83.7415 71.5829 83.7415 69.8758C83.7415 68.0671 84.931 67.0049 86.4353 67.0049C87.9395 67.0049 89.0517 68.1329 89.0517 69.7852V69.7879ZM84.7406 69.8428C84.7406 71.0258 85.4251 71.9205 86.3911 71.9205C87.3571 71.9205 88.0416 71.0395 88.0416 69.8209C88.0416 68.9042 87.5807 67.7432 86.4132 67.7432C85.2457 67.7432 84.7406 68.8163 84.7406 69.8428Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M96.4044 67.1285C96.3823 67.5182 96.3602 67.9546 96.3602 68.6134V71.7505C96.3602 72.9911 96.1118 73.7486 95.5847 74.2179C95.0575 74.7092 94.293 74.8656 93.6085 74.8656C92.924 74.8656 92.2395 74.7092 91.8007 74.4183L92.0491 73.669C92.4079 73.8913 92.9709 74.0944 93.6444 74.0944C94.6546 74.0944 95.397 73.5702 95.397 72.2061V71.6023H95.3749C95.0713 72.1045 94.489 72.5053 93.6471 72.5053C92.3003 72.5053 91.3343 71.3662 91.3343 69.8704C91.3343 68.0397 92.5349 66.9995 93.7824 66.9995C94.7263 66.9995 95.2424 67.4908 95.477 67.9382H95.4991L95.5433 67.123H96.4072L96.4044 67.1285ZM95.3832 69.2611C95.3832 69.0937 95.3722 68.9482 95.328 68.8137C95.1486 68.2456 94.6656 67.7762 93.948 67.7762C93.0041 67.7762 92.3306 68.5694 92.3306 69.821C92.3306 70.8804 92.8688 71.7642 93.9369 71.7642C94.5441 71.7642 95.0934 71.3854 95.3059 70.7597C95.3611 70.5922 95.386 70.4029 95.386 70.2354V69.2638L95.3832 69.2611Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M102.432 72.5326L102.352 71.8519H102.319C102.016 72.2773 101.433 72.6561 100.658 72.6561C99.5563 72.6561 98.9961 71.8849 98.9961 71.1054C98.9961 69.7989 100.164 69.0853 102.264 69.0963V68.9838C102.264 68.5364 102.14 67.7322 101.03 67.7322C100.525 67.7322 99.9979 67.8887 99.6143 68.1329L99.3907 67.4852C99.8406 67.1943 100.492 67.0049 101.176 67.0049C102.838 67.0049 103.244 68.1329 103.244 69.2143V71.2344C103.244 71.7037 103.266 72.1621 103.335 72.5298H102.438L102.432 72.5326ZM102.286 69.7742C101.207 69.7523 99.9841 69.9416 99.9841 70.9901C99.9841 71.6269 100.412 71.9288 100.917 71.9288C101.624 71.9288 102.073 71.4814 102.231 71.023C102.264 70.9215 102.286 70.8117 102.286 70.7101V69.7715V69.7742Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M106.26 68.5913C106.26 68.0341 106.249 67.5758 106.216 67.1284H107.091L107.146 68.0204H107.168C107.439 67.5072 108.065 67.0049 108.965 67.0049C109.719 67.0049 110.886 67.4523 110.886 69.3049V72.5326H109.898V69.4174C109.898 68.5474 109.572 67.82 108.64 67.82C107.988 67.82 107.483 68.2784 107.315 68.8246C107.271 68.9481 107.248 69.1155 107.248 69.2829V72.5326H106.26V68.5913Z"
                                                                fill="#B9B9B9" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2304_5782">
                                                                <rect width="126" height="75" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>

                                            </div>
                                            <div class="swiper-slide">
                                                <div class="partner-item style-2">
                                                    <svg width="153" height="30" viewBox="0 0 153 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2304_5818)">
                                                            <path d="M34.0377 3.84326H38.7694V20.6786H34.0377V3.84326Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M41.8687 3.84326H46.8421L50.8912 10.3604L54.9403 3.84326H59.9136V20.6786H55.2328V11.0079L50.8912 17.5966H50.7937L46.4775 11.0542V20.6744H41.8687V3.84326Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M62.924 3.84326H70.1996C74.4946 3.84326 77.259 6.00864 77.259 9.75917V9.80542C77.259 13.7746 74.1766 15.8685 69.9579 15.8685H67.6302V20.6786H62.924V3.84326ZM69.8604 12.2147C71.5351 12.2147 72.5527 11.3737 72.5527 10.0241V9.97781C72.5527 8.53562 71.5563 7.76618 69.8349 7.76618H67.626V12.2147H69.8561H69.8604Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M79.2474 3.84326H92.9041V7.81243H83.9071V10.3604H92.0561V14.0395H83.9071V16.7094H93.027V20.6786H79.2517V3.84326H79.2474Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M95.4226 3.84326H103.449C106.069 3.84326 107.837 4.516 108.977 5.67227C109.974 6.63513 110.483 7.93436 110.483 9.59098V9.63724C110.483 12.2357 109.126 13.9175 106.989 14.8089L111.038 20.6786H105.607L102.185 15.5784H100.125V20.6786H95.4183V3.84326H95.4226ZM103.232 11.9246C104.856 11.9246 105.755 11.1551 105.755 9.92735V9.8811C105.755 8.53562 104.784 7.88391 103.207 7.88391H100.129V11.9246H103.232Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M112.959 3.84326H117.69V20.6786H112.959V3.84326Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M126.662 3.72119H131.199L138.428 20.6784H133.382L132.144 17.6721H125.593L124.381 20.6784H119.433L126.662 3.72119ZM130.783 14.0393L128.892 9.25448L126.976 14.0393H130.783Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M140.073 3.84326H144.779V16.5917H153V20.6828H140.073V3.84326Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M33.9275 25.4841C34.2243 25.4252 34.6482 25.3916 35.0553 25.3916C35.6828 25.3916 36.0898 25.5051 36.3696 25.7616C36.5986 25.9634 36.7258 26.2704 36.7258 26.6194C36.7258 27.2164 36.3484 27.6116 35.8693 27.7714V27.7924C36.2212 27.9144 36.429 28.2339 36.5392 28.7006C36.6876 29.3313 36.7936 29.7644 36.8911 29.9368H36.2848C36.2128 29.8107 36.111 29.4196 35.9796 28.8604C35.8439 28.2381 35.6022 28.0027 35.068 27.9859H34.5168V29.941H33.9317V25.4925L33.9275 25.4841ZM34.5126 27.5402H35.1146C35.7421 27.5402 36.1407 27.1996 36.1407 26.6824C36.1407 26.1022 35.7167 25.8457 35.0934 25.8373C34.8094 25.8373 34.6058 25.8625 34.5126 25.892V27.5402Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M40.0795 27.818H38.3115V29.4452H40.283V29.933H37.7264V25.4214H40.1813V25.9091H38.3115V27.3345H40.0795V27.818Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M41.9451 28.516L41.4744 29.933H40.8681L42.4114 25.4214H43.1195L44.6713 29.933H44.0438L43.5562 28.516H41.9451ZM43.4375 28.0619L42.9923 26.7627C42.8906 26.4683 42.8227 26.1992 42.7549 25.9386H42.7422C42.6743 26.2077 42.6022 26.481 42.5132 26.7543L42.068 28.0577H43.4375V28.0619Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M45.5066 25.4256H46.0917V29.4452H48.0335V29.933H45.5023V25.4214L45.5066 25.4256Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M52.8118 27.818H51.0438V29.4452H53.0154V29.933H50.4587V25.4214H52.9136V25.9091H51.0438V27.3345H52.8118V27.818Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M53.8633 29.2265C54.1262 29.3862 54.512 29.5208 54.9148 29.5208C55.5169 29.5208 55.8645 29.2054 55.8645 28.7513C55.8645 28.3309 55.6229 28.087 55.0081 27.8558C54.2661 27.5951 53.8082 27.2124 53.8082 26.5775C53.8082 25.8754 54.3933 25.354 55.2794 25.354C55.7458 25.354 56.0808 25.4591 56.2843 25.5726L56.1232 26.0478C55.9748 25.9679 55.6695 25.8333 55.2582 25.8333C54.6392 25.8333 54.4018 26.2033 54.4018 26.5103C54.4018 26.9307 54.6774 27.141 55.3049 27.3806C56.0723 27.675 56.4666 28.045 56.4666 28.7051C56.4666 29.4031 55.9451 30.0043 54.8724 30.0043C54.4357 30.0043 53.9566 29.8782 53.7107 29.7184L53.8591 29.2307L53.8633 29.2265Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M58.3025 25.9214H56.9203V25.4253H60.2867V25.9214H58.8961V29.9369H58.3025V25.9214Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M61.1898 28.516L60.7192 29.933H60.1129L61.6562 25.4214H62.3643L63.9161 29.933H63.2886L62.801 28.516H61.1898ZM62.6823 28.0619L62.2371 26.7627C62.1353 26.4683 62.0675 26.1992 61.9997 25.9386H61.9869C61.9191 26.2077 61.847 26.481 61.758 26.7543L61.3128 28.0577H62.6823V28.0619Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M65.0948 25.9214H63.7126V25.4253H67.079V25.9214H65.6884V29.9369H65.0948V25.9214Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M70.1063 27.818H68.3383V29.4452H70.3098V29.933H67.7532V25.4214H70.2081V25.9091H68.3383V27.3345H70.1063V27.818Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M73.5703 28.516L73.0997 29.933H72.4933L74.0367 25.4214H74.7447L76.2965 29.933H75.669L75.1814 28.516H73.5703ZM75.0627 28.0619L74.6175 26.7627C74.5158 26.4683 74.4479 26.1992 74.3801 25.9386H74.3674C74.2995 26.2077 74.2275 26.481 74.1384 26.7543L73.6932 28.0577H75.0627V28.0619Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M80.4898 29.7352C80.2269 29.8277 79.7054 29.9833 79.0948 29.9833C78.408 29.9833 77.8398 29.8109 77.3946 29.3862C77.0046 29.012 76.7587 28.4107 76.7587 27.7044C76.7671 26.3589 77.6957 25.375 79.222 25.375C79.7478 25.375 80.159 25.4885 80.3541 25.581L80.2142 26.0562C79.9725 25.951 79.6672 25.8627 79.2093 25.8627C78.1027 25.8627 77.3819 26.5439 77.3819 27.6749C77.3819 28.806 78.0773 29.4955 79.1372 29.4955C79.5231 29.4955 79.7859 29.4409 79.9216 29.3736V28.0281H78.9973V27.5614H80.494V29.731L80.4898 29.7352Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M83.9113 27.818H82.1433V29.4452H84.1148V29.933H81.5582V25.4214H84.013V25.9091H82.1433V27.3345H83.9113V27.818Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M85.0433 29.933V25.4214H85.6836L87.1421 27.7045C87.4813 28.2343 87.7441 28.7094 87.9604 29.1719L87.9731 29.1635C87.918 28.5622 87.9052 28.0114 87.9052 27.3093V25.4214H88.4607V29.933H87.8671L86.4213 27.6456C86.1033 27.1453 85.8023 26.6281 85.5733 26.1404L85.5521 26.1488C85.586 26.7164 85.5988 27.2588 85.5988 28.0072V29.933H85.0476H85.0433Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M90.5128 25.9214H89.1306V25.4253H92.4971V25.9214H91.1064V29.9369H90.5128V25.9214Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M93.0483 29.2265C93.3111 29.3862 93.697 29.5208 94.0998 29.5208C94.7018 29.5208 95.0495 29.2054 95.0495 28.7513C95.0495 28.3309 94.8078 28.087 94.193 27.8558C93.4511 27.5951 92.9931 27.2124 92.9931 26.5775C92.9931 25.8754 93.5782 25.354 94.4644 25.354C94.9308 25.354 95.2657 25.4591 95.4692 25.5726L95.3081 26.0478C95.1597 25.9679 94.8544 25.8333 94.4432 25.8333C93.8242 25.8333 93.5867 26.2033 93.5867 26.5103C93.5867 26.9307 93.8623 27.141 94.4898 27.3806C95.2572 27.675 95.6515 28.045 95.6515 28.7051C95.6515 29.4031 95.13 30.0043 94.0574 30.0043C93.6164 30.0043 93.1373 29.8782 92.8956 29.7184L93.044 29.2307L93.0483 29.2265Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M3.67173 14.6069V29.9328H0V17.916L3.67173 14.6069Z"
                                                                fill="#E7E7E7" />
                                                            <path
                                                                d="M3.67172 14.6069V29.9328H7.34345V17.1718L3.67172 14.6069Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M10.9092 8.34619V29.9327H6.01215V12.9166L10.9092 8.34619Z"
                                                                fill="#E7E7E7" />
                                                            <path
                                                                d="M10.9092 8.34619V29.9327H15.802V11.7646L10.9092 8.34619Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M19.9528 0V29.9327H13.3556V6.83672L19.9528 0Z"
                                                                fill="#E7E7E7" />
                                                            <path d="M19.9529 0V29.9327H26.5459V6.83672L19.9529 0Z"
                                                                fill="#B9B9B9" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2304_5818">
                                                                <rect width="153" height="30" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>



                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="partner-item style-2">
                                                    <svg width="86" height="82" viewBox="0 0 86 82" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2304_5853)">
                                                            <path
                                                                d="M15.7606 76.9297H16.1343V81.9208H15.7606V79.5319H12.8879V81.9208H12.5143V76.9297H12.8879V79.1762H15.7606V76.9297Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M19.803 81.9999C19.0909 81.9999 18.4898 81.7509 17.9971 81.2501C17.5043 80.7439 17.2552 80.1364 17.2552 79.425C17.2552 78.7135 17.5016 78.1061 17.9971 77.6053C18.4898 77.0991 19.0909 76.8501 19.803 76.8501C20.5151 76.8501 21.1162 77.0991 21.6089 77.6053C22.1017 78.1033 22.3508 78.7108 22.3508 79.425C22.3508 80.1392 22.1044 80.7439 21.6089 81.2501C21.1162 81.7481 20.5151 81.9999 19.803 81.9999ZM19.803 81.636C20.4095 81.636 20.9239 81.4225 21.3409 80.9929C21.7633 80.5578 21.9772 80.0379 21.9772 79.425C21.9772 78.8121 21.766 78.2921 21.3409 77.8625C20.9239 77.4275 20.4095 77.214 19.803 77.214C19.1965 77.214 18.6821 77.4275 18.257 77.8625C17.84 78.2894 17.6288 78.8121 17.6288 79.425C17.6288 80.0379 17.84 80.5578 18.257 80.9929C18.6794 81.4198 19.1965 81.636 19.803 81.636Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M27.9365 76.9297V81.9208H27.5629V77.4852L25.7353 80.5526H25.673L23.8454 77.4852V81.9208H23.4717V76.9297H23.9374L25.7028 79.8822L27.4681 76.9297H27.9419H27.9365Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M29.7126 81.5675H32.1819V81.9232H29.339V76.9321H32.1467V77.2879H29.7126V79.2279H31.9707V79.5836H29.7126V81.5675Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M35.0384 80.8233L35.3633 80.6317C35.5393 81.2529 36.0537 81.636 36.8444 81.636C37.635 81.636 38.0871 81.2282 38.0871 80.6372C38.0871 80.3581 37.9815 80.1529 37.7758 80.0024C37.57 79.8519 37.2451 79.7096 36.8092 79.5673L36.4572 79.4524L36.1458 79.332C36.0104 79.2745 35.9048 79.2252 35.8426 79.1815C35.7072 79.0966 35.4906 78.9379 35.4039 78.7956C35.32 78.6451 35.2415 78.4399 35.2415 78.1909C35.2415 77.7832 35.3823 77.463 35.6639 77.2222C35.9536 76.9732 36.3055 76.8501 36.736 76.8501C37.505 76.8501 38.0709 77.277 38.3227 77.8981L38.0059 78.076C37.773 77.4986 37.3507 77.214 36.736 77.214C36.0592 77.214 35.6205 77.6135 35.6205 78.1772C35.6205 78.4481 35.7126 78.6479 35.9021 78.7847C36.0917 78.9215 36.3949 79.0556 36.8254 79.1979C37.1016 79.2909 37.3128 79.3675 37.4617 79.4332C37.616 79.4961 37.7785 79.5837 37.9544 79.6959C38.3146 79.9175 38.4635 80.224 38.4635 80.629C38.4635 81.034 38.3146 81.3787 38.0194 81.6278C37.7243 81.8768 37.329 81.9999 36.8416 81.9999C35.9319 81.9999 35.2604 81.5429 35.0357 80.8233H35.0384Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M41.8262 81.9999C41.1142 81.9999 40.5131 81.7509 40.0203 81.2501C39.5275 80.7439 39.2784 80.1364 39.2784 79.425C39.2784 78.7135 39.5248 78.1061 40.0203 77.6053C40.5131 77.0991 41.1142 76.8501 41.8262 76.8501C42.5383 76.8501 43.1394 77.0991 43.6322 77.6053C44.125 78.1033 44.3741 78.7108 44.3741 79.425C44.3741 80.1392 44.1277 80.7439 43.6322 81.2501C43.1394 81.7481 42.5383 81.9999 41.8262 81.9999ZM41.8262 81.636C42.4327 81.636 42.9472 81.4225 43.3641 80.9929C43.7865 80.5578 44.0004 80.0379 44.0004 79.425C44.0004 78.8121 43.7892 78.2921 43.3641 77.8625C42.9472 77.4275 42.4327 77.214 41.8262 77.214C41.2198 77.214 40.7053 77.4275 40.2802 77.8625C39.8633 78.2894 39.6521 78.8121 39.6521 79.425C39.6521 80.0379 39.8633 80.5578 40.2802 80.9929C40.7026 81.4198 41.2198 81.636 41.8262 81.636Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M45.8686 81.5675H48.1971V81.9232H45.495V76.9321H45.8686V81.5675Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M49.0067 76.9297H49.3803V80.2516C49.3803 81.0862 49.9029 81.6362 50.8126 81.6362C51.7223 81.6362 52.253 81.0862 52.253 80.2516V76.9297H52.6266V80.2516C52.6266 80.7797 52.4561 81.2011 52.1258 81.5213C51.7954 81.8414 51.3568 82.0001 50.8126 82.0001C50.2684 82.0001 49.8325 81.8442 49.4994 81.5213C49.1691 81.2011 49.0067 80.7797 49.0067 80.2516V76.9297Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M56.994 76.9297V77.2854H55.4425V81.9208H55.0608V77.2854H53.5093V76.9297H56.994Z"
                                                                fill="#B9B9B9" />
                                                            <path d="M57.9443 76.9297H58.318V81.9208H57.9443V76.9297Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M61.9867 81.9999C61.2746 81.9999 60.6735 81.7509 60.1808 81.2501C59.688 80.7439 59.4389 80.1364 59.4389 79.425C59.4389 78.7135 59.6853 78.1061 60.1808 77.6053C60.6735 77.0991 61.2746 76.8501 61.9867 76.8501C62.6988 76.8501 63.2999 77.0991 63.7926 77.6053C64.2854 78.1033 64.5345 78.7108 64.5345 79.425C64.5345 80.1392 64.2881 80.7439 63.7926 81.2501C63.2999 81.7481 62.6988 81.9999 61.9867 81.9999ZM61.9867 81.636C62.5932 81.636 63.1076 81.4225 63.5246 80.9929C63.947 80.5578 64.1609 80.0379 64.1609 79.425C64.1609 78.8121 63.9497 78.2921 63.5246 77.8625C63.1076 77.4275 62.5932 77.214 61.9867 77.214C61.3802 77.214 60.8658 77.4275 60.4407 77.8625C60.0237 78.2894 59.8125 78.8121 59.8125 79.425C59.8125 80.0379 60.0237 80.5578 60.4407 80.9929C60.8631 81.4198 61.3802 81.636 61.9867 81.636Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M68.9017 76.9297H69.2754V81.9208H68.9424L66.029 77.6275V81.9208H65.6554V76.9297H65.9803L68.9017 81.223V76.9297Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M70.3124 80.8233L70.6373 80.6317C70.8133 81.2529 71.3277 81.636 72.1183 81.636C72.9089 81.636 73.3611 81.2282 73.3611 80.6372C73.3611 80.3581 73.2555 80.1529 73.0497 80.0024C72.8467 79.8519 72.5218 79.7096 72.0831 79.5673L71.7312 79.4524L71.4198 79.332C71.2844 79.2745 71.1788 79.2252 71.1165 79.1815C70.9812 79.0966 70.7646 78.9379 70.6779 78.7956C70.594 78.6451 70.5155 78.4399 70.5155 78.1909C70.5155 77.7832 70.6563 77.463 70.9378 77.2222C71.2276 76.9732 71.5795 76.8501 72.01 76.8501C72.779 76.8501 73.3449 77.277 73.5967 77.8981L73.2799 78.076C73.047 77.4986 72.6246 77.214 72.01 77.214C71.3331 77.214 70.8945 77.6135 70.8945 78.1772C70.8945 78.4481 70.9866 78.6479 71.1761 78.7847C71.3656 78.9215 71.6689 79.0556 72.0994 79.1979C72.3756 79.2909 72.5868 79.3675 72.7357 79.4332C72.89 79.4961 73.0524 79.5837 73.2284 79.6959C73.5885 79.9175 73.7375 80.224 73.7375 80.629C73.7375 81.034 73.5885 81.3787 73.2934 81.6278C72.9983 81.8768 72.603 81.9999 72.1156 81.9999C71.2059 81.9999 70.5344 81.5429 70.3097 80.8233H70.3124Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M4.37811 63.2832C6.7391 63.2832 7.94667 64.6514 7.94667 66.3944C7.94667 67.6422 7.25624 68.7012 5.916 69.1417L7.96021 72.7756H4.72468L2.95936 69.3716H2.94582V72.7756H0V63.2832H4.37811ZM4.11277 65.776H2.94582V67.385H4.11277C4.68407 67.385 4.96294 67.1579 4.96294 66.5805C4.96294 66.0989 4.68407 65.776 4.11277 65.776Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M15.4818 65.6554H12.1651V66.8211H15.0838V69.0594H12.1651V70.4002H15.4818V72.7727H9.21924V63.2803H15.4818V65.6527V65.6554Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M22.9492 71.3417H19.8193L19.3563 72.7756H16.2643L19.7002 63.2832H23.0954L26.5178 72.7756H23.4122L22.9492 71.3417ZM21.3843 66.4628L20.5341 69.1034H22.2317L21.3816 66.4628H21.3843Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M30.4573 63.2832V70.5236H33.2975V72.7756H27.5142V63.2832H30.46H30.4573Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M43.4048 65.6554H40.088V66.8211H43.0068V69.0594H40.088V70.4002H43.4048V72.7727H37.1422V63.2803H43.4048V65.6527V65.6554Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M48.5248 72.8686C46.3615 72.8686 44.7044 71.8781 44.5582 69.7328H47.6882C47.7288 70.4305 48.1403 70.5509 48.403 70.5509C48.7089 70.5509 48.9742 70.4169 48.9742 70.083C48.9742 68.7969 44.5312 69.2649 44.5826 66.0196C44.5826 64.1288 46.1746 63.1245 48.1782 63.1245C50.4607 63.1245 51.893 64.2108 51.985 66.1947H48.8145C48.7739 65.6173 48.4842 65.4449 48.1647 65.4449C47.9129 65.4449 47.7396 65.6064 47.7396 65.9265C47.7396 67.1196 52.1042 66.9198 52.1042 69.8422C52.1042 71.599 50.8046 72.8714 48.5221 72.8714L48.5248 72.8686Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M52.9435 63.2832H60.8495V65.6419H58.3559V72.7756H55.4101V65.6419H52.9435V63.2832Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M67.3368 71.3417H64.2069L63.7439 72.7756H60.6519L64.0877 63.2832H67.483L70.9054 72.7756H67.7998L67.3368 71.3417ZM65.7718 66.4628L64.9217 69.1034H66.6193L65.7691 66.4628H65.7718Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M70.705 63.2832H78.6111V65.6419H76.1174V72.7756H73.1716V65.6419H70.705V63.2832Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M86 65.6554H82.6832V66.8211H85.602V69.0594H82.6832V70.4002H86V72.7727H79.7374V63.2803H86V65.6527V65.6554Z"
                                                                fill="#B9B9B9" />
                                                            <path
                                                                d="M38.7234 33.9416L41.7694 31.6951V56.9269H38.7234V33.9416ZM58.5617 26.6383V14.6312L38.7234 0V26.2771L35.339 28.7726V14.6367L12.8636 31.2135V56.9269H15.9096V32.7787L32.2903 20.6977V31.0219L22.5756 38.1857V56.9269H35.3363V36.4371L32.2903 38.6837V53.8458H25.6216V39.7481L41.7694 27.8396V6.05826L55.513 16.1937V24.389L46.069 17.425V56.9241H49.115V23.4833L70.2068 39.0367V53.843H58.559V34.2973L55.513 32.0508V56.9214H73.2555V37.4715L58.5617 26.6328V26.6383Z"
                                                                fill="#B9B9B9" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2304_5853">
                                                                <rect width="86" height="82" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wg-appraisal ">
                        <div class="tf-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="content">
                                        <div class="heading-section mb-30">
                                            <h2 class="title text-anime-wave">Are You Selling Or <br>
                                                Renting Your Property?</h2>
                                            <p class="text-1 wow animate__fadeInUp animate__animated"
                                                data-wow-duration="1.5s" data-wow-delay="0s">Thousands of luxury home
                                                enthusiasts just like
                                                you visit our
                                                website.
                                            </p>
                                        </div>
                                        <a href="#" class="tf-btn bg-color-primary fw-7 pd-11">
                                            Request your free appraisal
                                        </a>
                                        <div class="person wow animate__fadeInRight animate__animated"
                                            data-wow-duration="2s">
                                            <img src="{{ url('frontend/images/section/person-1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- /.section-work-together -->

                <!-- section-opinion -->
                <section class="section-opinion ">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-section text-center mb-48">
                                    <h2 class="title text-anime-wave">Insight & Opinion</h2>
                                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                        data-wow-delay="0s">Thousands of luxury home enthusiasts just like you
                                        visit our website.
                                    </p>
                                </div>
                                <div class="swiper style-pagination tf-sw-latest" data-preview="3" data-tablet="2"
                                    data-mobile-sm="2" data-mobile="1" data-space-lg="40" data-space-md="20"
                                    data-space="15">
                                    <div class="swiper-wrapper ">
                                        <div class="swiper-slide">
                                            <div class="blog-article-item style-2 hover-img ">
                                                <div class=" image-wrap ">
                                                    <a href="blog-details.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/blog/blog-grid-1.jpg') }}"
     ' )}} src="{{ url('frontend/images/blog/blog-grid-1.jpg') }}" alt="">
                                            </a>
                                            <div class="box-tag">
                                                <div class="tag-item text-4 text-white fw-6">Real estate</div>
                                            </div>
                                        </div>
                                        <div class="article-content">
                                            <div class="time">
                                                <div class="icons">
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2450_13848)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M6.03497 3.8631C6.08651 3.83315 6.12412 3.78402 6.13959 3.72645C6.15505 3.66887 6.14712 3.60751 6.11752 3.55576L5.70832 2.8471C5.67837 2.79555 5.62923 2.75795 5.57164 2.74253C5.51405 2.72711 5.45269 2.73512 5.40098 2.7648C5.34943 2.79475 5.31183 2.8439 5.29641 2.90149C5.28099 2.95908 5.289 3.02044 5.31869 3.07214L5.72788 3.78081C5.75788 3.83224 5.80698 3.86974 5.86449 3.88516C5.922 3.90057 5.98327 3.89264 6.03497 3.8631ZM12.6009 15.2355C12.6524 15.2055 12.69 15.1564 12.7055 15.0988C12.721 15.0412 12.713 14.9799 12.6834 14.9281L12.2742 14.2195C12.2443 14.1679 12.1951 14.1303 12.1376 14.1149C12.08 14.0995 12.0186 14.1075 11.9669 14.1372C11.9154 14.1672 11.8778 14.2163 11.8624 14.2739C11.847 14.3315 11.855 14.3928 11.8846 14.4445L12.2938 15.1532C12.3237 15.2047 12.3728 15.2422 12.4304 15.2576C12.4879 15.273 12.5492 15.2651 12.6009 15.2355ZM3.86377 6.0343C3.89339 5.98258 3.90136 5.92125 3.88595 5.86367C3.87053 5.8061 3.83298 5.75696 3.78148 5.72696L3.07282 5.31776C3.0211 5.28814 2.95976 5.28017 2.90219 5.29559C2.84462 5.311 2.79547 5.34856 2.76548 5.40006C2.73585 5.45178 2.72788 5.51311 2.7433 5.57069C2.75872 5.62826 2.79627 5.6774 2.84777 5.7074L3.55643 6.11659C3.60817 6.14615 3.66948 6.15408 3.72703 6.13867C3.78459 6.12326 3.83373 6.08575 3.86377 6.0343ZM15.2364 12.6C15.266 12.5482 15.274 12.4869 15.2586 12.4293C15.2432 12.3718 15.2056 12.3226 15.1541 12.2926L14.4454 11.8834C14.3937 11.8538 14.3324 11.8458 14.2748 11.8612C14.2172 11.8767 14.1681 11.9142 14.1381 11.9657C14.1084 12.0174 14.1004 12.0788 14.1158 12.1364C14.1312 12.194 14.1688 12.2431 14.2204 12.2731L14.9291 12.6823C14.9808 12.7119 15.0421 12.72 15.0997 12.7045C15.1573 12.6891 15.2064 12.6515 15.2364 12.6ZM3.06926 9.00001C3.06906 8.94038 3.04528 8.88326 3.00312 8.8411C2.96096 8.79894 2.90384 8.77517 2.84422 8.77496H2.02583C1.9662 8.77517 1.90908 8.79894 1.86692 8.8411C1.82476 8.88326 1.80098 8.94038 1.80078 9.00001C1.80078 9.12371 1.90213 9.22505 2.02583 9.22505H2.84422C2.90384 9.22485 2.96096 9.20108 3.00312 9.15892C3.04528 9.11676 3.06906 9.05963 3.06926 9.00001ZM16.2011 9.00001C16.2009 8.94043 16.1771 8.88334 16.135 8.84119C16.0929 8.79904 16.0359 8.77523 15.9763 8.77496H15.1579C15.0983 8.77517 15.0412 8.79894 14.999 8.8411C14.9568 8.88326 14.9331 8.94038 14.9329 9.00001C14.9329 9.12396 15.0342 9.22505 15.1579 9.22505H15.9763C16.0359 9.22479 16.0929 9.20098 16.135 9.15883C16.1771 9.11667 16.2009 9.05959 16.2011 9.00001ZM3.86403 11.966C3.83407 11.9144 3.78495 11.8768 3.72737 11.8614C3.66979 11.8459 3.60844 11.8538 3.55669 11.8834L2.84803 12.2926C2.79647 12.3226 2.75888 12.3717 2.74345 12.4293C2.72803 12.4869 2.73604 12.5483 2.76573 12.6C2.79568 12.6515 2.84482 12.6891 2.90242 12.7045C2.96001 12.72 3.02137 12.7119 3.07307 12.6823L3.78173 12.2731C3.83322 12.2431 3.87076 12.194 3.88618 12.1365C3.9016 12.0789 3.89364 12.0177 3.86403 11.966ZM15.2364 5.40006C15.2064 5.34851 15.1573 5.31091 15.0997 5.29544C15.0422 5.27998 14.9808 5.28791 14.9291 5.31751L14.2204 5.7267C14.1688 5.75665 14.1312 5.8058 14.1158 5.86339C14.1004 5.92098 14.1084 5.98234 14.1381 6.03404C14.168 6.0856 14.2172 6.12319 14.2748 6.13862C14.3324 6.15404 14.3937 6.14603 14.4454 6.11634L15.1541 5.70715C15.2056 5.6772 15.2431 5.6281 15.2585 5.57057C15.274 5.51304 15.266 5.45174 15.2364 5.40006ZM6.03522 14.1372C5.9835 14.1075 5.92217 14.0996 5.8646 14.115C5.80702 14.1304 5.75788 14.168 5.72788 14.2195L5.31869 14.9281C5.28907 14.9798 5.2811 15.0412 5.29651 15.0988C5.31193 15.1563 5.34948 15.2055 5.40098 15.2355C5.4527 15.2651 5.51404 15.2731 5.57161 15.2576C5.62918 15.2422 5.67833 15.2047 5.70832 15.1532L6.11752 14.4445C6.14707 14.3928 6.15501 14.3315 6.1396 14.2739C6.12418 14.2164 6.08667 14.1672 6.03522 14.1372ZM12.6009 2.76455C12.5492 2.73493 12.4878 2.72696 12.4303 2.74237C12.3727 2.75779 12.3235 2.79534 12.2935 2.84685L11.8843 3.55551C11.8547 3.60723 11.8468 3.66856 11.8622 3.72613C11.8776 3.78371 11.9151 3.83285 11.9666 3.86285C12.0183 3.89254 12.0797 3.90055 12.1373 3.88512C12.1949 3.8697 12.244 3.8321 12.274 3.78055L12.6832 3.07189C12.7129 3.02019 12.7209 2.95883 12.7055 2.90124C12.69 2.84364 12.6524 2.7945 12.6009 2.76455ZM9.00093 14.9317C8.94131 14.9319 8.88419 14.9557 8.84203 14.9978C8.79986 15.04 8.77609 15.0971 8.77589 15.1567V15.9751C8.77589 16.0988 8.87723 16.2002 9.00093 16.2002C9.06056 16.2 9.11768 16.1762 9.15984 16.134C9.202 16.0919 9.22578 16.0347 9.22598 15.9751V15.1567C9.22578 15.0971 9.202 15.04 9.15984 14.9978C9.11768 14.9557 9.06056 14.9319 9.00093 14.9317ZM9.00093 1.80011C8.94131 1.80031 8.88419 1.82409 8.84203 1.86625C8.79986 1.90841 8.77609 1.96553 8.77589 2.02515V2.84354C8.77589 2.96724 8.87723 3.06859 9.00093 3.06859C9.06056 3.06839 9.11768 3.04461 9.15984 3.00245C9.202 2.96029 9.22578 2.90317 9.22598 2.84354V2.0249C9.22578 1.9653 9.20199 1.9082 9.15983 1.86608C9.11766 1.82396 9.06053 1.80024 9.00093 1.80011ZM9.00093 3.4567C8.94137 3.45697 8.88433 3.48073 8.84219 3.52282C8.80005 3.56491 8.77622 3.62193 8.77589 3.68149V9.00001C8.77616 9.05961 8.79995 9.1167 8.8421 9.15884C8.88424 9.20099 8.94133 9.22479 9.00093 9.22505C9.06058 9.22492 9.11774 9.20117 9.15992 9.15899C9.20209 9.11682 9.22584 9.05965 9.22598 9.00001V3.68149C9.22571 3.62191 9.20191 3.56485 9.15975 3.52275C9.1176 3.48064 9.06051 3.4569 9.00093 3.4567Z"
                                                                fill="#5C5E61" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.0019 8.54993C9.06189 8.54851 9.12156 8.55909 9.17739 8.58106C9.23323 8.60304 9.28412 8.63595 9.32705 8.67787C9.36998 8.7198 9.40409 8.76988 9.42739 8.82519C9.45068 8.88049 9.46268 8.93989 9.46268 8.99989C9.46268 9.0599 9.45068 9.1193 9.42739 9.1746C9.40409 9.2299 9.36998 9.27999 9.32705 9.32191C9.28412 9.36384 9.23323 9.39675 9.17739 9.41872C9.12156 9.4407 9.06189 9.45128 9.0019 9.44986C8.88441 9.44706 8.77268 9.39843 8.69057 9.31435C8.60846 9.23027 8.5625 9.11741 8.5625 8.99989C8.5625 8.88237 8.60846 8.76952 8.69057 8.68544C8.77268 8.60136 8.88441 8.55272 9.0019 8.54993Z"
                                                                fill="#5C5E61" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M12.7417 9.00001C12.7414 8.94045 12.7177 8.8834 12.6756 8.84126C12.6335 8.79912 12.5765 8.7753 12.5169 8.77496H8.99848C8.93888 8.77523 8.88179 8.79903 8.83965 8.84117C8.7975 8.88332 8.7737 8.9404 8.77344 9.00001C8.77344 9.12396 8.87478 9.22505 8.99848 9.22505H12.5169C12.5765 9.22485 12.6336 9.20107 12.6757 9.1589C12.7178 9.11673 12.7416 9.05961 12.7417 9.00001Z"
                                                                fill="#5C5E61" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9 0C13.9705 0 18 4.02946 18 9C18 13.9705 13.9705 18 9 18C4.02946 18 0 13.9705 0 9C0 4.02946 4.02946 0 9 0ZM9 0.899924C13.4735 0.899924 17.1001 4.52654 17.1001 9C17.1001 13.4735 13.4735 17.1001 9 17.1001C4.52654 17.1001 0.899924 13.4735 0.899924 9C0.899924 4.52654 4.52654 0.899924 9 0.899924Z"
                                                                fill="#5C5E61" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2450_13848">
                                                                <rect width="18" height="18" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <p class="fw-5">26 August, 2024</p>
                                            </div>
                                            <h4 class="title  ">
                                                <a href="blog-details.html" class="line-clamp-2">Building gains into
                                                    housing
                                                    stocks and how to
                                                    trade the...</a>
                                            </h4>
                                            <a href="blog-details.html" class="tf-btn-link">
                                                <span>
                                                    Read More
                                                </span> <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2450_13860)">
                                                        <path
                                                            d="M10.0013 18.3334C14.6037 18.3334 18.3346 14.6024 18.3346 10C18.3346 5.39765 14.6037 1.66669 10.0013 1.66669C5.39893 1.66669 1.66797 5.39765 1.66797 10C1.66797 14.6024 5.39893 18.3334 10.0013 18.3334Z"
                                                            stroke="#F1913D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M6.66797 10H13.3346" stroke="#F1913D"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M10 13.3334L13.3333 10L10 6.66669" stroke="#F1913D"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2450_13860">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-article-item style-2 hover-img ">
                                        <div class=" image-wrap ">
                                            <a href="blog-details.html">
                                                <img class="lazyload"
                                                    data-src="{{ url('frontend/images/blog/blog-grid-2.jpg') }}" ')}}                                                       src="{{ url('frontend/images/blog/blog-grid-2.jpg') }}" alt="">
                                                    </a>
                                                    <div class="box-tag">
                                                        <div class="tag-item text-4 text-white fw-6">News</div>
                                                    </div>
                                                </div>
                                                <div class="article-content">
                                                    <div class="time">
                                                        <div class="icons">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_2450_13848)">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6.03497 3.8631C6.08651 3.83315 6.12412 3.78402 6.13959 3.72645C6.15505 3.66887 6.14712 3.60751 6.11752 3.55576L5.70832 2.8471C5.67837 2.79555 5.62923 2.75795 5.57164 2.74253C5.51405 2.72711 5.45269 2.73512 5.40098 2.7648C5.34943 2.79475 5.31183 2.8439 5.29641 2.90149C5.28099 2.95908 5.289 3.02044 5.31869 3.07214L5.72788 3.78081C5.75788 3.83224 5.80698 3.86974 5.86449 3.88516C5.922 3.90057 5.98327 3.89264 6.03497 3.8631ZM12.6009 15.2355C12.6524 15.2055 12.69 15.1564 12.7055 15.0988C12.721 15.0412 12.713 14.9799 12.6834 14.9281L12.2742 14.2195C12.2443 14.1679 12.1951 14.1303 12.1376 14.1149C12.08 14.0995 12.0186 14.1075 11.9669 14.1372C11.9154 14.1672 11.8778 14.2163 11.8624 14.2739C11.847 14.3315 11.855 14.3928 11.8846 14.4445L12.2938 15.1532C12.3237 15.2047 12.3728 15.2422 12.4304 15.2576C12.4879 15.273 12.5492 15.2651 12.6009 15.2355ZM3.86377 6.0343C3.89339 5.98258 3.90136 5.92125 3.88595 5.86367C3.87053 5.8061 3.83298 5.75696 3.78148 5.72696L3.07282 5.31776C3.0211 5.28814 2.95976 5.28017 2.90219 5.29559C2.84462 5.311 2.79547 5.34856 2.76548 5.40006C2.73585 5.45178 2.72788 5.51311 2.7433 5.57069C2.75872 5.62826 2.79627 5.6774 2.84777 5.7074L3.55643 6.11659C3.60817 6.14615 3.66948 6.15408 3.72703 6.13867C3.78459 6.12326 3.83373 6.08575 3.86377 6.0343ZM15.2364 12.6C15.266 12.5482 15.274 12.4869 15.2586 12.4293C15.2432 12.3718 15.2056 12.3226 15.1541 12.2926L14.4454 11.8834C14.3937 11.8538 14.3324 11.8458 14.2748 11.8612C14.2172 11.8767 14.1681 11.9142 14.1381 11.9657C14.1084 12.0174 14.1004 12.0788 14.1158 12.1364C14.1312 12.194 14.1688 12.2431 14.2204 12.2731L14.9291 12.6823C14.9808 12.7119 15.0421 12.72 15.0997 12.7045C15.1573 12.6891 15.2064 12.6515 15.2364 12.6ZM3.06926 9.00001C3.06906 8.94038 3.04528 8.88326 3.00312 8.8411C2.96096 8.79894 2.90384 8.77517 2.84422 8.77496H2.02583C1.9662 8.77517 1.90908 8.79894 1.86692 8.8411C1.82476 8.88326 1.80098 8.94038 1.80078 9.00001C1.80078 9.12371 1.90213 9.22505 2.02583 9.22505H2.84422C2.90384 9.22485 2.96096 9.20108 3.00312 9.15892C3.04528 9.11676 3.06906 9.05963 3.06926 9.00001ZM16.2011 9.00001C16.2009 8.94043 16.1771 8.88334 16.135 8.84119C16.0929 8.79904 16.0359 8.77523 15.9763 8.77496H15.1579C15.0983 8.77517 15.0412 8.79894 14.999 8.8411C14.9568 8.88326 14.9331 8.94038 14.9329 9.00001C14.9329 9.12396 15.0342 9.22505 15.1579 9.22505H15.9763C16.0359 9.22479 16.0929 9.20098 16.135 9.15883C16.1771 9.11667 16.2009 9.05959 16.2011 9.00001ZM3.86403 11.966C3.83407 11.9144 3.78495 11.8768 3.72737 11.8614C3.66979 11.8459 3.60844 11.8538 3.55669 11.8834L2.84803 12.2926C2.79647 12.3226 2.75888 12.3717 2.74345 12.4293C2.72803 12.4869 2.73604 12.5483 2.76573 12.6C2.79568 12.6515 2.84482 12.6891 2.90242 12.7045C2.96001 12.72 3.02137 12.7119 3.07307 12.6823L3.78173 12.2731C3.83322 12.2431 3.87076 12.194 3.88618 12.1365C3.9016 12.0789 3.89364 12.0177 3.86403 11.966ZM15.2364 5.40006C15.2064 5.34851 15.1573 5.31091 15.0997 5.29544C15.0422 5.27998 14.9808 5.28791 14.9291 5.31751L14.2204 5.7267C14.1688 5.75665 14.1312 5.8058 14.1158 5.86339C14.1004 5.92098 14.1084 5.98234 14.1381 6.03404C14.168 6.0856 14.2172 6.12319 14.2748 6.13862C14.3324 6.15404 14.3937 6.14603 14.4454 6.11634L15.1541 5.70715C15.2056 5.6772 15.2431 5.6281 15.2585 5.57057C15.274 5.51304 15.266 5.45174 15.2364 5.40006ZM6.03522 14.1372C5.9835 14.1075 5.92217 14.0996 5.8646 14.115C5.80702 14.1304 5.75788 14.168 5.72788 14.2195L5.31869 14.9281C5.28907 14.9798 5.2811 15.0412 5.29651 15.0988C5.31193 15.1563 5.34948 15.2055 5.40098 15.2355C5.4527 15.2651 5.51404 15.2731 5.57161 15.2576C5.62918 15.2422 5.67833 15.2047 5.70832 15.1532L6.11752 14.4445C6.14707 14.3928 6.15501 14.3315 6.1396 14.2739C6.12418 14.2164 6.08667 14.1672 6.03522 14.1372ZM12.6009 2.76455C12.5492 2.73493 12.4878 2.72696 12.4303 2.74237C12.3727 2.75779 12.3235 2.79534 12.2935 2.84685L11.8843 3.55551C11.8547 3.60723 11.8468 3.66856 11.8622 3.72613C11.8776 3.78371 11.9151 3.83285 11.9666 3.86285C12.0183 3.89254 12.0797 3.90055 12.1373 3.88512C12.1949 3.8697 12.244 3.8321 12.274 3.78055L12.6832 3.07189C12.7129 3.02019 12.7209 2.95883 12.7055 2.90124C12.69 2.84364 12.6524 2.7945 12.6009 2.76455ZM9.00093 14.9317C8.94131 14.9319 8.88419 14.9557 8.84203 14.9978C8.79986 15.04 8.77609 15.0971 8.77589 15.1567V15.9751C8.77589 16.0988 8.87723 16.2002 9.00093 16.2002C9.06056 16.2 9.11768 16.1762 9.15984 16.134C9.202 16.0919 9.22578 16.0347 9.22598 15.9751V15.1567C9.22578 15.0971 9.202 15.04 9.15984 14.9978C9.11768 14.9557 9.06056 14.9319 9.00093 14.9317ZM9.00093 1.80011C8.94131 1.80031 8.88419 1.82409 8.84203 1.86625C8.79986 1.90841 8.77609 1.96553 8.77589 2.02515V2.84354C8.77589 2.96724 8.87723 3.06859 9.00093 3.06859C9.06056 3.06839 9.11768 3.04461 9.15984 3.00245C9.202 2.96029 9.22578 2.90317 9.22598 2.84354V2.0249C9.22578 1.9653 9.20199 1.9082 9.15983 1.86608C9.11766 1.82396 9.06053 1.80024 9.00093 1.80011ZM9.00093 3.4567C8.94137 3.45697 8.88433 3.48073 8.84219 3.52282C8.80005 3.56491 8.77622 3.62193 8.77589 3.68149V9.00001C8.77616 9.05961 8.79995 9.1167 8.8421 9.15884C8.88424 9.20099 8.94133 9.22479 9.00093 9.22505C9.06058 9.22492 9.11774 9.20117 9.15992 9.15899C9.20209 9.11682 9.22584 9.05965 9.22598 9.00001V3.68149C9.22571 3.62191 9.20191 3.56485 9.15975 3.52275C9.1176 3.48064 9.06051 3.4569 9.00093 3.4567Z"
                                                                        fill="#5C5E61" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M9.0019 8.54993C9.06189 8.54851 9.12156 8.55909 9.17739 8.58106C9.23323 8.60304 9.28412 8.63595 9.32705 8.67787C9.36998 8.7198 9.40409 8.76988 9.42739 8.82519C9.45068 8.88049 9.46268 8.93989 9.46268 8.99989C9.46268 9.0599 9.45068 9.1193 9.42739 9.1746C9.40409 9.2299 9.36998 9.27999 9.32705 9.32191C9.28412 9.36384 9.23323 9.39675 9.17739 9.41872C9.12156 9.4407 9.06189 9.45128 9.0019 9.44986C8.88441 9.44706 8.77268 9.39843 8.69057 9.31435C8.60846 9.23027 8.5625 9.11741 8.5625 8.99989C8.5625 8.88237 8.60846 8.76952 8.69057 8.68544C8.77268 8.60136 8.88441 8.55272 9.0019 8.54993Z"
                                                                        fill="#5C5E61" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M12.7417 9.00001C12.7414 8.94045 12.7177 8.8834 12.6756 8.84126C12.6335 8.79912 12.5765 8.7753 12.5169 8.77496H8.99848C8.93888 8.77523 8.88179 8.79903 8.83965 8.84117C8.7975 8.88332 8.7737 8.9404 8.77344 9.00001C8.77344 9.12396 8.87478 9.22505 8.99848 9.22505H12.5169C12.5765 9.22485 12.6336 9.20107 12.6757 9.1589C12.7178 9.11673 12.7416 9.05961 12.7417 9.00001Z"
                                                                        fill="#5C5E61" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M9 0C13.9705 0 18 4.02946 18 9C18 13.9705 13.9705 18 9 18C4.02946 18 0 13.9705 0 9C0 4.02946 4.02946 0 9 0ZM9 0.899924C13.4735 0.899924 17.1001 4.52654 17.1001 9C17.1001 13.4735 13.4735 17.1001 9 17.1001C4.52654 17.1001 0.899924 13.4735 0.899924 9C0.899924 4.52654 4.52654 0.899924 9 0.899924Z"
                                                                        fill="#5C5E61" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_2450_13848">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <p class="fw-5">26 August, 2024</p>
                                                    </div>
                                                    <h4 class="title  ">
                                                        <a href="blog-details.html" class="line-clamp-2">Building gains into
                                                            housing
                                                            stocks and how to
                                                            trade the...</a>
                                                    </h4>
                                                    <a href="blog-details.html" class="tf-btn-link">
                                                        <span>
                                                            Read More
                                                        </span> <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_2450_13860)">
                                                                <path
                                                                    d="M10.0013 18.3334C14.6037 18.3334 18.3346 14.6024 18.3346 10C18.3346 5.39765 14.6037 1.66669 10.0013 1.66669C5.39893 1.66669 1.66797 5.39765 1.66797 10C1.66797 14.6024 5.39893 18.3334 10.0013 18.3334Z"
                                                                    stroke="#F1913D" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M6.66797 10H13.3346" stroke="#F1913D"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M10 13.3334L13.3333 10L10 6.66669" stroke="#F1913D"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_2450_13860">
                                                                    <rect width="20" height="20" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide ">
                                            <div class="blog-article-item style-2 hover-img">
                                                <div class=" image-wrap ">
                                                    <a href="blog-details.html">
                                                        <img class="lazyload" data-src="{{ url('frontend/images/blog/blog-grid-3.jpg') }}"
     ' )}} src="{{ url('frontend/images/blog/blog-grid-3.jpg') }}" alt="">
                                            </a>
                                            <div class="box-tag">
                                                <div class="tag-item text-4 text-white fw-6">Real estate</div>
                                            </div>
                                        </div>
                                        <div class="article-content">
                                            <div class="time">
                                                <div class="icons">
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_2450_13848)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M6.03497 3.8631C6.08651 3.83315 6.12412 3.78402 6.13959 3.72645C6.15505 3.66887 6.14712 3.60751 6.11752 3.55576L5.70832 2.8471C5.67837 2.79555 5.62923 2.75795 5.57164 2.74253C5.51405 2.72711 5.45269 2.73512 5.40098 2.7648C5.34943 2.79475 5.31183 2.8439 5.29641 2.90149C5.28099 2.95908 5.289 3.02044 5.31869 3.07214L5.72788 3.78081C5.75788 3.83224 5.80698 3.86974 5.86449 3.88516C5.922 3.90057 5.98327 3.89264 6.03497 3.8631ZM12.6009 15.2355C12.6524 15.2055 12.69 15.1564 12.7055 15.0988C12.721 15.0412 12.713 14.9799 12.6834 14.9281L12.2742 14.2195C12.2443 14.1679 12.1951 14.1303 12.1376 14.1149C12.08 14.0995 12.0186 14.1075 11.9669 14.1372C11.9154 14.1672 11.8778 14.2163 11.8624 14.2739C11.847 14.3315 11.855 14.3928 11.8846 14.4445L12.2938 15.1532C12.3237 15.2047 12.3728 15.2422 12.4304 15.2576C12.4879 15.273 12.5492 15.2651 12.6009 15.2355ZM3.86377 6.0343C3.89339 5.98258 3.90136 5.92125 3.88595 5.86367C3.87053 5.8061 3.83298 5.75696 3.78148 5.72696L3.07282 5.31776C3.0211 5.28814 2.95976 5.28017 2.90219 5.29559C2.84462 5.311 2.79547 5.34856 2.76548 5.40006C2.73585 5.45178 2.72788 5.51311 2.7433 5.57069C2.75872 5.62826 2.79627 5.6774 2.84777 5.7074L3.55643 6.11659C3.60817 6.14615 3.66948 6.15408 3.72703 6.13867C3.78459 6.12326 3.83373 6.08575 3.86377 6.0343ZM15.2364 12.6C15.266 12.5482 15.274 12.4869 15.2586 12.4293C15.2432 12.3718 15.2056 12.3226 15.1541 12.2926L14.4454 11.8834C14.3937 11.8538 14.3324 11.8458 14.2748 11.8612C14.2172 11.8767 14.1681 11.9142 14.1381 11.9657C14.1084 12.0174 14.1004 12.0788 14.1158 12.1364C14.1312 12.194 14.1688 12.2431 14.2204 12.2731L14.9291 12.6823C14.9808 12.7119 15.0421 12.72 15.0997 12.7045C15.1573 12.6891 15.2064 12.6515 15.2364 12.6ZM3.06926 9.00001C3.06906 8.94038 3.04528 8.88326 3.00312 8.8411C2.96096 8.79894 2.90384 8.77517 2.84422 8.77496H2.02583C1.9662 8.77517 1.90908 8.79894 1.86692 8.8411C1.82476 8.88326 1.80098 8.94038 1.80078 9.00001C1.80078 9.12371 1.90213 9.22505 2.02583 9.22505H2.84422C2.90384 9.22485 2.96096 9.20108 3.00312 9.15892C3.04528 9.11676 3.06906 9.05963 3.06926 9.00001ZM16.2011 9.00001C16.2009 8.94043 16.1771 8.88334 16.135 8.84119C16.0929 8.79904 16.0359 8.77523 15.9763 8.77496H15.1579C15.0983 8.77517 15.0412 8.79894 14.999 8.8411C14.9568 8.88326 14.9331 8.94038 14.9329 9.00001C14.9329 9.12396 15.0342 9.22505 15.1579 9.22505H15.9763C16.0359 9.22479 16.0929 9.20098 16.135 9.15883C16.1771 9.11667 16.2009 9.05959 16.2011 9.00001ZM3.86403 11.966C3.83407 11.9144 3.78495 11.8768 3.72737 11.8614C3.66979 11.8459 3.60844 11.8538 3.55669 11.8834L2.84803 12.2926C2.79647 12.3226 2.75888 12.3717 2.74345 12.4293C2.72803 12.4869 2.73604 12.5483 2.76573 12.6C2.79568 12.6515 2.84482 12.6891 2.90242 12.7045C2.96001 12.72 3.02137 12.7119 3.07307 12.6823L3.78173 12.2731C3.83322 12.2431 3.87076 12.194 3.88618 12.1365C3.9016 12.0789 3.89364 12.0177 3.86403 11.966ZM15.2364 5.40006C15.2064 5.34851 15.1573 5.31091 15.0997 5.29544C15.0422 5.27998 14.9808 5.28791 14.9291 5.31751L14.2204 5.7267C14.1688 5.75665 14.1312 5.8058 14.1158 5.86339C14.1004 5.92098 14.1084 5.98234 14.1381 6.03404C14.168 6.0856 14.2172 6.12319 14.2748 6.13862C14.3324 6.15404 14.3937 6.14603 14.4454 6.11634L15.1541 5.70715C15.2056 5.6772 15.2431 5.6281 15.2585 5.57057C15.274 5.51304 15.266 5.45174 15.2364 5.40006ZM6.03522 14.1372C5.9835 14.1075 5.92217 14.0996 5.8646 14.115C5.80702 14.1304 5.75788 14.168 5.72788 14.2195L5.31869 14.9281C5.28907 14.9798 5.2811 15.0412 5.29651 15.0988C5.31193 15.1563 5.34948 15.2055 5.40098 15.2355C5.4527 15.2651 5.51404 15.2731 5.57161 15.2576C5.62918 15.2422 5.67833 15.2047 5.70832 15.1532L6.11752 14.4445C6.14707 14.3928 6.15501 14.3315 6.1396 14.2739C6.12418 14.2164 6.08667 14.1672 6.03522 14.1372ZM12.6009 2.76455C12.5492 2.73493 12.4878 2.72696 12.4303 2.74237C12.3727 2.75779 12.3235 2.79534 12.2935 2.84685L11.8843 3.55551C11.8547 3.60723 11.8468 3.66856 11.8622 3.72613C11.8776 3.78371 11.9151 3.83285 11.9666 3.86285C12.0183 3.89254 12.0797 3.90055 12.1373 3.88512C12.1949 3.8697 12.244 3.8321 12.274 3.78055L12.6832 3.07189C12.7129 3.02019 12.7209 2.95883 12.7055 2.90124C12.69 2.84364 12.6524 2.7945 12.6009 2.76455ZM9.00093 14.9317C8.94131 14.9319 8.88419 14.9557 8.84203 14.9978C8.79986 15.04 8.77609 15.0971 8.77589 15.1567V15.9751C8.77589 16.0988 8.87723 16.2002 9.00093 16.2002C9.06056 16.2 9.11768 16.1762 9.15984 16.134C9.202 16.0919 9.22578 16.0347 9.22598 15.9751V15.1567C9.22578 15.0971 9.202 15.04 9.15984 14.9978C9.11768 14.9557 9.06056 14.9319 9.00093 14.9317ZM9.00093 1.80011C8.94131 1.80031 8.88419 1.82409 8.84203 1.86625C8.79986 1.90841 8.77609 1.96553 8.77589 2.02515V2.84354C8.77589 2.96724 8.87723 3.06859 9.00093 3.06859C9.06056 3.06839 9.11768 3.04461 9.15984 3.00245C9.202 2.96029 9.22578 2.90317 9.22598 2.84354V2.0249C9.22578 1.9653 9.20199 1.9082 9.15983 1.86608C9.11766 1.82396 9.06053 1.80024 9.00093 1.80011ZM9.00093 3.4567C8.94137 3.45697 8.88433 3.48073 8.84219 3.52282C8.80005 3.56491 8.77622 3.62193 8.77589 3.68149V9.00001C8.77616 9.05961 8.79995 9.1167 8.8421 9.15884C8.88424 9.20099 8.94133 9.22479 9.00093 9.22505C9.06058 9.22492 9.11774 9.20117 9.15992 9.15899C9.20209 9.11682 9.22584 9.05965 9.22598 9.00001V3.68149C9.22571 3.62191 9.20191 3.56485 9.15975 3.52275C9.1176 3.48064 9.06051 3.4569 9.00093 3.4567Z"
                                                                fill="#5C5E61" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9.0019 8.54993C9.06189 8.54851 9.12156 8.55909 9.17739 8.58106C9.23323 8.60304 9.28412 8.63595 9.32705 8.67787C9.36998 8.7198 9.40409 8.76988 9.42739 8.82519C9.45068 8.88049 9.46268 8.93989 9.46268 8.99989C9.46268 9.0599 9.45068 9.1193 9.42739 9.1746C9.40409 9.2299 9.36998 9.27999 9.32705 9.32191C9.28412 9.36384 9.23323 9.39675 9.17739 9.41872C9.12156 9.4407 9.06189 9.45128 9.0019 9.44986C8.88441 9.44706 8.77268 9.39843 8.69057 9.31435C8.60846 9.23027 8.5625 9.11741 8.5625 8.99989C8.5625 8.88237 8.60846 8.76952 8.69057 8.68544C8.77268 8.60136 8.88441 8.55272 9.0019 8.54993Z"
                                                                fill="#5C5E61" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M12.7417 9.00001C12.7414 8.94045 12.7177 8.8834 12.6756 8.84126C12.6335 8.79912 12.5765 8.7753 12.5169 8.77496H8.99848C8.93888 8.77523 8.88179 8.79903 8.83965 8.84117C8.7975 8.88332 8.7737 8.9404 8.77344 9.00001C8.77344 9.12396 8.87478 9.22505 8.99848 9.22505H12.5169C12.5765 9.22485 12.6336 9.20107 12.6757 9.1589C12.7178 9.11673 12.7416 9.05961 12.7417 9.00001Z"
                                                                fill="#5C5E61" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M9 0C13.9705 0 18 4.02946 18 9C18 13.9705 13.9705 18 9 18C4.02946 18 0 13.9705 0 9C0 4.02946 4.02946 0 9 0ZM9 0.899924C13.4735 0.899924 17.1001 4.52654 17.1001 9C17.1001 13.4735 13.4735 17.1001 9 17.1001C4.52654 17.1001 0.899924 13.4735 0.899924 9C0.899924 4.52654 4.52654 0.899924 9 0.899924Z"
                                                                fill="#5C5E61" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_2450_13848">
                                                                <rect width="18" height="18" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <p class="fw-5">26 August, 2024</p>
                                            </div>
                                            <h4 class="title  ">
                                                <a href="blog-details.html" class="line-clamp-2">Building gains into
                                                    housing
                                                    stocks and how to
                                                    trade the...</a>
                                            </h4>
                                            <a href="blog-details.html" class="tf-btn-link">
                                                <span>
                                                    Read More
                                                </span> <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_2450_13860)">
                                                        <path
                                                            d="M10.0013 18.3334C14.6037 18.3334 18.3346 14.6024 18.3346 10C18.3346 5.39765 14.6037 1.66669 10.0013 1.66669C5.39893 1.66669 1.66797 5.39765 1.66797 10C1.66797 14.6024 5.39893 18.3334 10.0013 18.3334Z"
                                                            stroke="#F1913D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M6.66797 10H13.3346" stroke="#F1913D"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M10 13.3334L13.3333 10L10 6.66669" stroke="#F1913D"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2450_13860">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="sw-pagination sw-pagination-latest text-center d-lg-none d-block mt-20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.section-opinion -->

        <!-- .section-testimonials -->
        <div class="section-testimonials style-1 tf-spacing-1">
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center mb-48">
                            <h2 class="title text-anime-wave">Clients Testimonials</h2>
                            <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                data-wow-delay="0s">Thousands of luxury home enthusiasts just like you
                                visit our website.
                            </p>
                        </div>
                        <div class="tf-grid-layout md-col-3 loadmore-item-8">
                            <div class="box-testimonials">
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">Aenean orci lorem, pharetra ac imperdiet eget,
                                        tristique ac magna. In aliquet efficitur turpis, et posuere tellus commodo
                                        at. Morbi accumsan nulla id neque rutrum, et tempus dui venenatis. Quisque
                                        dapibus metus ligula, id tempor nisl interdum vitae.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/testimonials-4.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Annette Black</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">In hac habitasse platea dictumst. Sed eleifend
                                        aliquam dui quis convallis. Sed aliquet eros sit amet metus rhoncus bibendum
                                        nec vel nunc. Nullam ac dapibus enim. Nulla rhoncus ante ante, nec lacinia
                                        turpis consectetur non. Vivamus sit amet nunc leo.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png7.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Eleanor Pena</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Ut aliquam tempus urna id interdum. Proin iaculis erat id sapien
                                        venenatis convallis. Nam et ullamcorper nibh. Nulla malesuada consectetur
                                        sem ut varius. Fusce ornare tortor non maximus volutpat. Integer at
                                        consequat turpis, vel aliquam neque. Suspendisse quis odio felis. Quisque
                                        volutpat bibendum maximus. In porttitor semper ultrices.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png12.png') }}"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Floyd Miles</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-testimonials">
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Ut aliquam tempus urna id interdum. Proin iaculis erat id sapien
                                        venenatis convallis. Nam et ullamcorper nibh. Nulla malesuada consectetur
                                        sem ut varius. Fusce ornare tortor non maximus volutpat. Integer at
                                        consequat turpis, vel aliquam neque. Suspendisse quis odio felis. Quisque
                                        volutpat bibendum maximus. In porttitor semper ultrices.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png12.png') }}"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Floyd Miles</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">Vivamus at nisl ornare, vulputate turpis finibus,
                                        posuere metus. Donec in placerat felis. Praesent ante tellus, dignissim nec
                                        imperdiet ac.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png6.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Cody Fisher</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">Quisque tincidunt, nunc vitae maximus lobortis,
                                        tellus risus fringilla mi, pulvinar feugiat lacus ipsum nec tortor. Aliquam
                                        a venenatis orci, id bibendum eros. Pellentesque in ante rutrum, congue eros
                                        vestibulum, commodo ex.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png5.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Ralph Edwards</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-testimonials">
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">"My experience with property management services
                                        has exceeded expectations. They efficiently manage properties with a
                                        professional and attentive approach in every situation. I feel reassured
                                        that any issue will be resolved promptly and effectively."</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png8.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Jacob Jones</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">Quisque tincidunt, nunc vitae maximus lobortis,
                                        tellus risus fringilla mi, pulvinar feugiat lacus ipsum nec tortor. Aliquam
                                        a venenatis orci, id bibendum eros. Pellentesque in ante rutrum, congue eros
                                        vestibulum, commodo ex.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png5.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Ralph Edwards</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wg-testimonial style-2">
                                    <div class="ratings ">
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                        <i class="icon-start"></i>
                                    </div>
                                    <p class="text-1 description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Ut aliquam tempus urna id interdum. Proin iaculis erat id sapien
                                        venenatis convallis. Nam et ullamcorper nibh. Nulla malesuada consectetur
                                        sem ut varius. Fusce ornare tortor non maximus volutpat. Integer at
                                        consequat turpis, vel aliquam neque. Suspendisse quis odio felis. Quisque
                                        volutpat bibendum maximus. In porttitor semper ultrices.</p>
                                    <div class="author">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/images/avatar/avt-png12.png') }}"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">
                                                <a href="#">Floyd Miles</a>
                                            </h6>
                                            <p class="text-2">CEO Themesflat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="tf-btn bg-color-primary fw-7 mx-auto btn-loadmore view-more-button">Show
                                more...
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.section-testimonials -->

    </div><!-- /.main-content -->
@endsection

@push('scripts') 
@endpush