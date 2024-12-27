@extends('user.layouts.app')
@section('content')
<div class="main-content-inner mt-32">  
    <div class="row"> 
        <div class="col-xl-8 offset-2"> 
                <div class="flat-account">
                    <div class="banner-account">
                        <img src="{{url('frontend/images/section/banner-login.jpg')}}" alt="banner">
                    </div> 
                    <form class="form-account" id="loginForm" method="POST" action="{{ route('password.reset', ['token' => request()->token, 'email' => request()->email ]) }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ request()->token }}" >
                        <input type="hidden" name="email" value="{{ request()->email }}" >
                        <div class="title-box mb-40">
                            <h4>Setup New Password</h4>
                        </div>
                         
                        <div class="box"> 
                            <fieldset class="box-fieldset">
                                <label for="email">Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input class="form-control @if($errors->has('password')) is-invalid @endif" type="password" placeholder="" name="password" autocomplete="off" >
                                </div> 
                                @if ($errors->has('password'))
                                <div class="text-danger is_error">
                                    <div>{{ $errors->first('password') }}</div>
                                </div>
                                @endif
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="pass">Confirm Password</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                            stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" type="password" placeholder="" name="password_confirmation" autocomplete="off">
                                </div>
                                @if ($errors->has('password_confirmation'))
								<div class="text-danger is_error">
									<div>{{ $errors->first('password_confirmation') }}</div>
								</div>
								@endif  
                                @if ($errors->has('token'))
								<div class="text-danger is_error">
									<div>{{ $errors->first('token') }}</div>
								</div>
								@endif  
                                @if ($errors->has('email'))
								<div class="text-danger is_error">
									<div>{{ $errors->first('email') }}</div>
								</div>
								@endif  
                            </fieldset>
                        </div>
                        <div class="box box-btn">
                            <button type="submit" class="tf-btn bg-color-primary w-100">Submit</button>
                            <div class="text text-center">Already have reset your password ? <a href="{{route('login')}}" class="text-color-primary">Sign in here</a></div>
                        </div> 
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection

@push('scripts') 
@endpush