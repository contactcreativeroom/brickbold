<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    @include('admin.layouts.head')
    <link rel="stylesheet" href="{{url('backend/assets/admin/css/pages/page-auth.css')}}" />
</head>


<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="javascript:void(0)" class="app-brand-link gap-2">
                                <img src="{{ App\Helper\Helper::getLogo(); }}" height="50" >
                            </a>
                        </div>
                        <!-- /Logo -->
						<div class="text-center mb-10"> 
							<div class="text-gray-400 fw-bold fs-4 text-success">Congratulation!! Password reset successfully.</div>
							<!--end::Link-->
						</div>

                        <h6 class="mb-4 mt-3 text-center"><a href="{{route('admin.login')}}">Login now</a></h6> 
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    @include('admin.layouts.script')

    @if(Session::has('message'))

    @if(Session::get('result')==true)
    <script type="text/javascript">
        toastr.success("{{ Session::get('message') }}", 'Success');
    </script>
    @endif

    @if(Session::get('result')==false)
    <script type="text/javascript">
        toastr.error("{{ Session::get('message') }}", 'Error');
    </script>
    @endif

    @endif

    <!-- / Content -->
</body>

</html>