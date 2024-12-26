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
							<div class="text-gray-400 fw-bold fs-4">Setup New Password</div>
							<!--end::Link-->
						</div>

                        <h6 class="mb-4 mt-3 text-center">Already have reset your password ?
							<a href="{{route('admin.login')}}" class="link-primary fw-bolder">Sign in here</a>
						</h6>
                        <form class="form w-100" novalidate="novalidate" id="kt_new_password_form" method="POST" 
						action="{{ route('admin.password.reset', ['token' => request()->token, 'email' => request()->email ]) }}">
						 
						{{ csrf_field() }}
							<!--begin::Heading-->
							
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="mb-10 fv-row" data-kt-password-meter="true">
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6">Password</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid @if($errors->has('password')) is-invalid @endif" type="password" placeholder="" name="password" autocomplete="off" />
										@if ($errors->has('password'))
										<div class="fv-plugins-message-container invalid-feedback">
											<div>{{ $errors->first('password') }}</div>
										</div>
										@endif
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
									<!--end::Input wrapper-->
					
								</div>
								<!--end::Wrapper-->
							
							</div>
							<!--end::Input group=-->
							<!--begin::Input group=-->
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
								<input class="form-control form-control-lg form-control-solid @if($errors->has('password_confirmation')) is-invalid @endif" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
								@if ($errors->has('password_confirmation'))
								<div class="fv-plugins-message-container invalid-feedback">
									<div>{{ $errors->first('password_confirmation') }}</div>
								</div>
								@endif
							</div>
							<!--end::Input group=-->
			
							<!--begin::Action-->
							<div class="text-center mt-3">
								<input type="hidden" name="token" value="{{$token}}">
								<input type="submit" id="kt_new_password_submit" class="btn btn-lg btn-primary fw-bolder" value="Submit" />
							</div> 
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