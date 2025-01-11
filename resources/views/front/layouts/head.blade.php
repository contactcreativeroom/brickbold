
<meta charset="utf-8" />
<title>Proty - Real Estate HTML Template</title>
<meta name="description"
content="Propty is a website specializing in buying and renting properties, connecting buyers and tenants with trusted property owners. With an easy-to-use interface and detailed information, Propty offers a fast and convenient property search experience.">
<meta name="keywords"
content=" RealEstate, RealEstate, Buy, Rent, Homes, Apartment, Listings, Sale, Rental, Housing">
<meta name="author" content="themesflat.com" />
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
<link rel="shortcut icon" href="{{url('frontend/icons/favicon.svg')}}" />
<link rel="apple-touch-icon-precomposed" href="{{url('frontend/icons/favicon.svg')}}" />
@stack('head')