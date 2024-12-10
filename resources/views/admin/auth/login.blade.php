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
                        <h4 class="mb-2">Welcome to admin panel</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>

                        <form id="formAuthentication" class="mb-3" action="{{route('admin.login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" autofocus />
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                     <a href="{{ route('admin.forgot.password') }}">
                                        <small>Forgot Password?</small>
                                    </a> 
                                </div>


                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" />
                                    <label class="form-check-label" > Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        <!-- <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="auth-register-basic.html">
                                <span>Create an account</span>
                            </a>
                        </p> -->
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