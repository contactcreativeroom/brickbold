
<meta charset="utf-8" />
@php 
    $routeKey = Route::current()->uri();
    $seo= App\Helper\Helper::getSeoValues();
@endphp

@if($routeKey == 'page/{slug}' && isset($page) && $page->seo_title != null && $page->seo_description != null && $page->seo_keywords != null)
    <title>{{$page['seo_title']}}</title>
    <meta name="keywords" content="{{$page['seo_keywords']}}">
    <meta name="description" content="{{$page['seo_description']}}">
@elseif($routeKey == 'product/{slug}' && isset($product) && $product->seo_title != null && $product->seo_description != null && $product->seo_keywords != null)
    <title>{{$product['seo_title']}}</title>
    <meta name="keywords" content="{{$product['seo_keywords']}}">
    <meta name="description" content="{{$product['seo_description']}}">
@elseif($routeKey == 'blog/{slug}' && isset($blog) && $blog->seo_title != null && $blog->seo_description != null && $blog->seo_keywords != null)
    <title>{{$blog['seo_title']}}</title>
    <meta name="keywords" content="{{$blog['seo_keywords']}}">
    <meta name="description" content="{{$blog['seo_description']}}">
@elseif($seo)
    <title>{{$seo['seo_title']}}</title>
    <meta name="keywords" content="{{$seo['seo_keywords']}}">
    <meta name="description" content="{{$seo['seo_description']}}">
@endif
<meta name="author" content="creativeroom.i/" />
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Theme Style -->
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/animate.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/magnific-popup.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/swiper-bundle.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/jquery.fancybox.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/sib-styles.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/styles.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('frontend/css/custom.css')}}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

<!-- Icon -->
<link rel="stylesheet" type="text/css" href="{{url('frontend/icons/icomoon/style.css')}}" />

<!-- Favicon and Touch Icons  -->
<link rel="shortcut icon" href="{{data_get($config, 'favicon', '')}}" />
<link rel="apple-touch-icon-precomposed" href="{{data_get($config, 'favicon', '')}}" />
@stack('head')