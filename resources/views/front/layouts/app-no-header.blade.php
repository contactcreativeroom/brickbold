<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/proty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 11:51:31 GMT -->
@php
    $config =  App\Helper\Helper::getWebsiteConfig();
    //dd($config);
@endphp
<head>
    @include('front.layouts.head')
</head>

<body class="popup-loader">
    <!-- wrapper -->
    <div id="wrapper">

        <!-- .preload -->
        <div id="loading">
            <div id="loading-center">
                <div class="loader-container">
                    <div class="wrap-loader">
                        <div class="loader">
                        </div>
                        <div class="icon">
                            <img src="{{ url('frontend/images/logo/loading.png') }}" alt="logo_icon">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.preload -->
        @yield('content')
    </div> <!-- /.wrapper -->
    @include('front.layouts.script')
    <script>
        var site_url = "{{url('/')}}";  
        const minPrice = "{{ request('min_price', '') }}";
        const maxPrice = "{{ request('max_price', '') }}";
        const minSize = "{{ request('min_size', '') }}";
        const maxSize = "{{ request('max_size', '') }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript" src="{{url('frontend/js/custom.js')}}"></script> 
    <script type="text/javascript" src="{{url('frontend/js/help-modal.js')}}"></script> 
    @stack('scripts')

    @if (Session::has('message'))

        @if (Session::get('result') == true)
            <script type="text/javascript">
                toastr.success("{{ Session::get('message') }}", 'Success');
            </script>
        @endif

        @if (Session::get('result') == false)
            <script type="text/javascript">
                toastr.error("{{ Session::get('message') }}", 'Error');
            </script>
        @endif

    @endif

</body>

</html>
