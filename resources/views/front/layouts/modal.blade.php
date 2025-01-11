<!-- register -->
<div class="modal modal-account fade" id="modalRegister">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="flat-account">
                <div class="banner-account">
                    <img src="{{url('frontend/images/section/banner-register.jpg')}}" alt="banner">
                </div> 
                <form class="form-account" action="{{route('register')}}" id="registerForm"  method="post" enctype='multipart/form-data'>
                    @csrf 
                    <div class="title-box">
                        <h4>Register</h4>
                        <span class="close-modal icon-close" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="box">
                        <fieldset class="box-fieldset">
                            <label for="name">Role</label>
                            <div class="ip-field">
                                <svg class="icon" width="15" height="15" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" style="z-index:1;">
                                        <path
                                            d="M15 15C16.3807 15 17.5 13.8807 17.5 12.5C17.5 11.1193 16.3807 10 15 10C13.6193 10 12.5 11.1193 12.5 12.5C12.5 13.8807 13.6193 15 15 15Z"
                                            stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M7.5013 9.16667C9.34225 9.16667 10.8346 7.67428 10.8346 5.83333C10.8346 3.99238 9.34225 2.5 7.5013 2.5C5.66035 2.5 4.16797 3.99238 4.16797 5.83333C4.16797 7.67428 5.66035 9.16667 7.5013 9.16667Z"
                                            stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M8.33464 12.5H5.0013C4.11725 12.5 3.2694 12.8512 2.64428 13.4763C2.01916 14.1014 1.66797 14.9493 1.66797 15.8333V17.5"
                                            stroke="#A8ABAE" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M18.082 13.6666L17.332 13.4166" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.668 11.5834L11.918 11.3334" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.832 15.5834L14.082 14.8334" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.918 10.1666L16.168 9.41663" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.3333 15.5833L16 14.75" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.0013 10.25L13.668 9.41663" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.918 13.8333L12.7513 13.5" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.25 11.5L18.0833 11.1666" stroke="#A8ABAE" stroke-width="1.4"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> 
                                <select class="form-control nice-select" name="role">
                                    <option value="">Select Role</option>
                                    @foreach (config('constants.USER_TYPE') as $key=>$value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="role-error" class="text-danger is_error"></span>
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label for="name">Full name</label>
                            <div class="ip-field">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z"
                                        stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <input type="text" class="form-control" id="name" name="name" placeholder="full name">
                            </div>
                            <span id="name-error" class="text-danger is_error"></span>
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label for="email">Email address</label>
                            <div class="ip-field">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.3125 5.0625V12.9375C16.3125 13.3851 16.1347 13.8143 15.8182 14.1307C15.5018 14.4472 15.0726 14.625 14.625 14.625H3.375C2.92745 14.625 2.49822 14.4472 2.18176 14.1307C1.86529 13.8143 1.6875 13.3851 1.6875 12.9375V5.0625M16.3125 5.0625C16.3125 4.61495 16.1347 4.18573 15.8182 3.86926C15.5018 3.55279 15.0726 3.375 14.625 3.375H3.375C2.92745 3.375 2.49822 3.55279 2.18176 3.86926C1.86529 4.18573 1.6875 4.61495 1.6875 5.0625M16.3125 5.0625V5.24475C16.3125 5.53286 16.2388 5.81618 16.0983 6.06772C15.9578 6.31926 15.7553 6.53065 15.51 6.68175L9.885 10.143C9.61891 10.3069 9.31252 10.3937 9 10.3937C8.68748 10.3937 8.38109 10.3069 8.115 10.143L2.49 6.6825C2.24469 6.5314 2.04215 6.32001 1.90168 6.06847C1.7612 5.81693 1.68747 5.53361 1.6875 5.2455V5.0625"
                                        stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <input type="text" class="form-control" name="email" id="email" placeholder="Email address">
                            </div>
                            <span id="email-error" class="text-danger is_error"></span>

                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label for="pass">Password</label>
                            <div class="ip-field">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                        stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                            </div>
                            <span id="password-error" class="text-danger is_error"></span>
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label for="password_confirmation">Confirm password</label>
                            <div class="ip-field">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                        stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  placeholder="Confirm password">
                            </div>
                            <span id="password_confirmation-error" class="text-danger is_error"></span>
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <div class="checkbox-item style-1">
                                <label>
                                    <input type="checkbox" value="1" name="accept_term_condition">
                                    <span class="btn-checkbox"></span>
                                    <span class="text">I agreed to the terms & conditions</span>
                                </label>
                            </div>
                            <span id="accept_term_condition-error" class="text-danger is_error"></span>
                        </fieldset>

                    </div>
                    <div class="box box-btn">
                        <button type="submit" class="tf-btn bg-color-primary w-full">Sign Up</button>
                        <div class="text text-center">Don’t you have an account? <a href="#modalLogin" data-bs-toggle="modal" class="text-color-primary">Sign In</a></div>
                    </div>
                    <p class="box text-center caption-2">or login with</p>
                    <div class="group-btn">
                        <a href="{{route('login.google.redirect')}}" class="btn-social">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2478_12036)">
                                    <path
                                        d="M4.93242 12.0863L4.23625 14.6852L1.69176 14.739C0.931328 13.3286 0.5 11.7149 0.5 10C0.5 8.34179 0.903281 6.77804 1.61812 5.40112H1.61867L3.88398 5.81644L4.87633 8.06815C4.66863 8.67366 4.55543 9.32366 4.55543 10C4.55551 10.7341 4.68848 11.4374 4.93242 12.0863Z"
                                        fill="#FBBB00" />
                                    <path
                                        d="M20.3242 8.1319C20.439 8.73682 20.4989 9.36155 20.4989 10C20.4989 10.716 20.4236 11.4143 20.2802 12.088C19.7934 14.3803 18.5214 16.3819 16.7594 17.7984L16.7588 17.7978L13.9055 17.6522L13.5017 15.1314C14.6709 14.4456 15.5847 13.3726 16.066 12.088H10.7188V8.1319H20.3242Z"
                                        fill="#518EF8" />
                                    <path
                                        d="M16.7595 17.7978L16.7601 17.7984C15.0464 19.1758 12.8694 20 10.4996 20C6.69141 20 3.38043 17.8715 1.69141 14.739L4.93207 12.0863C5.77656 14.3401 7.95074 15.9445 10.4996 15.9445C11.5952 15.9445 12.6216 15.6484 13.5024 15.1313L16.7595 17.7978Z"
                                        fill="#28B446" />
                                    <path
                                        d="M16.882 2.30219L13.6425 4.95437C12.7309 4.38461 11.6534 4.05547 10.4991 4.05547C7.89246 4.05547 5.67762 5.73348 4.87543 8.06812L1.61773 5.40109H1.61719C3.28148 2.1923 6.63422 0 10.4991 0C12.9254 0 15.1502 0.864297 16.882 2.30219Z"
                                        fill="#F14336" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2478_12036">
                                        <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            Google
                        </a>
                        <a href="#modalOTP" data-bs-toggle="modal" class="btn-social"> OTP </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- register -->


<!-- .login -->
<div class="modal modal-account fade" id="modalLogin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="flat-account">
                <div class="banner-account">
                    <img src="{{url('frontend/images/section/banner-login.jpg')}}" alt="banner">
                </div> 
                <form class="form-account" action="{{route('login')}}" id="loginForm" method="post" enctype='multipart/form-data' >
                    @csrf 
                    <div class="title-box">
                        <h4>Login</h4>
                        <span class="close-modal icon-close" data-bs-dismiss="modal"></span>
                    </div>
                    <div class="box">
                        <fieldset class="box-fieldset">
                            <label for="email">Email Account</label>
                            <div class="ip-field">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z"
                                        stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <input type="text" class="form-control"  name="email" id="email" placeholder="Your email">
                            </div>
                            <span id="email-error" class="text-danger is_error"></span>
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label for="pass">Password</label>
                            <div class="ip-field">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.375 7.875V5.0625C12.375 4.16739 12.0194 3.30895 11.3865 2.67601C10.7535 2.04308 9.89511 1.6875 9 1.6875C8.10489 1.6875 7.24645 2.04308 6.61351 2.67601C5.98058 3.30895 5.625 4.16739 5.625 5.0625V7.875M5.0625 16.3125H12.9375C13.3851 16.3125 13.8143 16.1347 14.1307 15.8182C14.4472 15.5018 14.625 15.0726 14.625 14.625V9.5625C14.625 9.11495 14.4472 8.68573 14.1307 8.36926C13.8143 8.05279 13.3851 7.875 12.9375 7.875H5.0625C4.61495 7.875 4.18573 8.05279 3.86926 8.36926C3.55279 8.68573 3.375 9.11495 3.375 9.5625V14.625C3.375 15.0726 3.55279 15.5018 3.86926 15.8182C4.18573 16.1347 4.61495 16.3125 5.0625 16.3125Z"
                                        stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                            </div>
                            <span id="password-error" class="text-danger is_error" ></span>
                            <div class="text-forgot d-flex justify-content-between" >
                                <div class="checkbox-item style-1">
                                    <label>
                                        <input type="checkbox" value="1" name="remember">
                                        <span class="btn-checkbox"></span>
                                        <span class="text">Remember Me</span>
                                    </label>
                                </div>
                                <label>
                                <a href="{{route('forgot.password')}}">Forgot password</a>
                                </label>
                            </div> 
                        </fieldset>
                    </div>
                    <div class="box box-btn">
                        <button type="submit" class="tf-btn bg-color-primary w-100">Login</button>
                        <div class="text text-center">Don’t you have an account? <a href="#modalRegister" data-bs-toggle="modal" class="text-color-primary">Register</a></div>
                    </div>
                    <p class="box text-center caption-2">or login with</p>
                    <div class="group-btn">
                        <a href="{{route('login.google.redirect')}}" class="btn-social">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2478_11334)">
                                    <path
                                        d="M4.93242 12.0863L4.23625 14.6852L1.69176 14.739C0.931328 13.3286 0.5 11.7149 0.5 10C0.5 8.34179 0.903281 6.77804 1.61812 5.40112H1.61867L3.88398 5.81644L4.87633 8.06815C4.66863 8.67366 4.55543 9.32366 4.55543 10C4.55551 10.7341 4.68848 11.4374 4.93242 12.0863Z"
                                        fill="#FBBB00" />
                                    <path
                                        d="M20.3242 8.1319C20.439 8.73682 20.4989 9.36155 20.4989 10C20.4989 10.716 20.4236 11.4143 20.2802 12.088C19.7934 14.3803 18.5214 16.3819 16.7594 17.7984L16.7588 17.7978L13.9055 17.6522L13.5017 15.1314C14.6709 14.4456 15.5847 13.3726 16.066 12.088H10.7188V8.1319H20.3242Z"
                                        fill="#518EF8" />
                                    <path
                                        d="M16.7595 17.7978L16.7601 17.7984C15.0464 19.1758 12.8694 20 10.4996 20C6.69141 20 3.38043 17.8715 1.69141 14.739L4.93207 12.0863C5.77656 14.3401 7.95074 15.9445 10.4996 15.9445C11.5952 15.9445 12.6216 15.6484 13.5024 15.1313L16.7595 17.7978Z"
                                        fill="#28B446" />
                                    <path
                                        d="M16.882 2.30219L13.6425 4.95437C12.7309 4.38461 11.6534 4.05547 10.4991 4.05547C7.89246 4.05547 5.67762 5.73348 4.87543 8.06812L1.61773 5.40109H1.61719C3.28148 2.1923 6.63422 0 10.4991 0C12.9254 0 15.1502 0.864297 16.882 2.30219Z"
                                        fill="#F14336" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2478_11334">
                                        <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            Google
                        </a>
                        <a href="#modalOTP" data-bs-toggle="modal" class="btn-social"> OTP </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<!-- /.login -->

<!-- OTP -->
{{-- <div class="modal modal-sm fade show " id="modalOTP" aria-modal="true" role="dialog" style="display: block; padding-left: 0px;"> --}}
<div class="modal modal-sm fade" id="modalOTP">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="flat-account">
                    
                    <form class="form-account" id="OTPForm" >
                        <div class="title-box">
                            <h4>OTP Login</h4>
                            <span class="close-modal icon-close" data-bs-dismiss="modal"></span>
                        </div>

                        <div class="get-otp-section" >
                            <fieldset class="box-fieldset">
                                <label for="mobile">Mobile</label>
                                <div class="ip-field">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.4869 14.0435C12.9628 13.3497 12.2848 12.787 11.5063 12.3998C10.7277 12.0126 9.86989 11.8115 9.00038 11.8123C8.13086 11.8115 7.27304 12.0126 6.49449 12.3998C5.71594 12.787 5.03793 13.3497 4.51388 14.0435M13.4869 14.0435C14.5095 13.1339 15.2307 11.9349 15.5563 10.6056C15.8818 9.27625 15.7956 7.87934 15.309 6.60014C14.8224 5.32093 13.9584 4.21986 12.8317 3.44295C11.7049 2.66604 10.3686 2.25 9 2.25C7.63137 2.25 6.29508 2.66604 5.16833 3.44295C4.04158 4.21986 3.17762 5.32093 2.69103 6.60014C2.20443 7.87934 2.11819 9.27625 2.44374 10.6056C2.76929 11.9349 3.49125 13.1339 4.51388 14.0435M13.4869 14.0435C12.2524 15.1447 10.6546 15.7521 9.00038 15.7498C7.3459 15.7523 5.74855 15.1448 4.51388 14.0435M11.2504 7.31228C11.2504 7.90902 11.0133 8.48131 10.5914 8.90327C10.1694 9.32523 9.59711 9.56228 9.00038 9.56228C8.40364 9.56228 7.83134 9.32523 7.40939 8.90327C6.98743 8.48131 6.75038 7.90902 6.75038 7.31228C6.75038 6.71554 6.98743 6.14325 7.40939 5.72129C7.83134 5.29933 8.40364 5.06228 9.00038 5.06228C9.59711 5.06228 10.1694 5.29933 10.5914 5.72129C11.0133 6.14325 11.2504 6.71554 11.2504 7.31228Z" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Your mobile">
                                </div>
                                <span id="mobile-error" class="text-danger is_error"></span>
                            </fieldset>
                            <div class="box box-btn" id="send-otp-button">
                                <a href="javascript:void(0)" onClick="sendOTP()" class="tf-btn bg-color-primary w-100">Send</a>
                                <div class="text text-center">Back to <a href="#modalLogin" data-bs-toggle="modal" class="text-color-primary">Sign In</a></div>
                            </div>  
                        </div>  

                        <div class="verify-otp-section" style="display: none;">
                            <div class="box">
                                 <div class="text mb-3">OTP sent to <span class="text-color-primary">9876543210</span>. Wrong number?  <a href="javascript:void(0)" class="text-color-primary" id="mobile-edit">Click here</a href="javascript:void(0)">.</div>
                                <fieldset class="box-fieldset">
                                    <label for="pass">OTP</label>
                                    <div class="otp-input-field">
                                        <input type="number" />
                                        <input type="number" disabled />
                                        <input type="number" disabled />
                                        <input type="number" disabled />
                                        <input type="number" disabled />
                                        <input type="number" disabled />
                                    </div>
                                    <div class="mt-2 text-end"><button type="button" class="text-color-primary" onClick="sendOTP()">Resend</button></div>
                                    
                                    <span id="otp-error" class="text-danger is_error"></span>
                                </fieldset>
                            </div>
                            <div class="box box-btn">
                                <button type="button" onClick="verifyOTP()" class="tf-btn bg-color-primary w-100" id="verify-button">Verify</button>
                                <div class="text text-center">Back to <a href="#modalLogin" data-bs-toggle="modal" class="text-color-primary">Sign In</a></div>
                            </div>  
                        </div>  

                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- /.OTP -->


