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
                                <img src="{{ App\Helper\Helper::getLogo(); }}" height="50">
                            </a>
                        </div>
                        <!-- /Logo -->
						<div class="text-center mb-10"> 
							<div class="text-gray-400 fw-bold fs-4">Forgot Password? 🔒</div>
						</div>

                        <h6 class="mb-4 mt-3 text-center">
							Enter your email and we'll send you instructions to reset your password
						</h6>

                        <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" method="POST" action="{{ route('admin.forgot.password') }}">
							{{ csrf_field() }}
                            <div class="mb-3 form-password-toggle">
								<div class="d-flex justify-content-between">
                                    <label for="email" class="form-label">Email</label>
                                     <a href="{{ route('admin.login') }}">
                                        <small>Back to login</small>
                                    </a> 
                                </div>
								<div class="">									
									<input class="form-control form-control-solid @if($errors->has('email')) is-invalid @endif" type="email" placeholder="" name="email" value="{{ old('email') }}" autocomplete="off" />
									@if ($errors->has('email'))
									<div class="fv-plugins-message-container invalid-feedback">
										<div>{{ $errors->first('email') }}</div>
									</div>
									@endif								
								</div>
							</div>
                            <button type="submit" class="btn btn-primary d-grid w-100">Send Reset Link</button>
                        </form>
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