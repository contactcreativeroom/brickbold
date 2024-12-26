@extends('user.layouts.app')
@section('content')
    <div class="page-layout">
        @include('user.layouts.sidebar')
        <!-- .main-content -->
        <div class="main-content style-2">
            <div class="main-content-inner wrap-dashboard-content-2">
                <div class="button-show-hide show-mb">
                    <span class="body-1">Show Dashboard</span>
                </div>
                <div class="widget-box-2">
                    <div class="box">
                        <h3 class="title">Account Settings</h3>
                        <div class="box-agent-account">
                            <h6>Agent Account</h6>
                            <p class="note">Your current account type is set to agent, if you want to remove your
                                agent
                                account, and return to normal account, you must click the button below</p>
                            <a href="#" class="tf-btn bg-color-primary pd-10 fw-7">Remove Agent Account</a>
                        </div>
                    </div>
                    <div class="box">
                        <h5 class="title">Avatar</h5>
                        <div class="box-agent-avt">
                            <div class="avatar">
                                <img src="images/avatar/account.jpg" alt="avatar" loading="lazy" width="128"
                                    height="128">
                            </div>
                            <div class="content uploadfile">
                                <p>Upload a new avatar</p>
                                <div class="box-ip">
                                    <input type="file" class="ip-file">
                                </div>
                                <p>JPEG 100x100</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h5 class="title">Agent Poster</h5>
                        <div class="box-agent-avt">
                            <div class="img-poster">
                                <img src="images/avatar/account-2.jpg" alt="avatar" loading="lazy">
                            </div>
                            <div class="content uploadfile">
                                <p>Upload a new poster</p>
                                <div class="box-ip">
                                    <input type="file" class="ip-file">
                                </div>
                                <span>JPEG 100x100</span>
                            </div>
                        </div>
                    </div>
                    <h5 class="title">Information</h5>
                    <form>
                        <fieldset class="box box-fieldset">
                            <label for="name">Full name:<span>*</span></label>
                            <input type="text" id="name" value="Demo Agent" class="form-control ">
                        </fieldset>
                        <fieldset class="box box-fieldset">
                            <label>Description:<span>*</span></label>
                            <textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                        </fieldset>
                        <fieldset class="box grid-layout-4 gap-30">
                            <div class="box-fieldset">
                                <label for="company">Your Company:<span>*</span></label>
                                <input type="text" id="company" value="Your Company" class="form-control ">
                            </div>
                            <div class="box-fieldset">
                                <label for="position">Position:<span>*</span></label>
                                <input type="text" id="position" value="Your Company" class="form-control ">
                            </div>
                            <div class="box-fieldset">
                                <label for="num">Office Number:<span>*</span></label>
                                <input type="number" id="num" value="1332565894" class="form-control ">
                            </div>
                            <div class="box-fieldset">
                                <label for="address">Office Address:<span>*</span></label>
                                <input type="text" id="address" value="10 Bringhurst St, Houston, TX"
                                    class="form-control ">
                            </div>
                        </fieldset>
                        <div class="box grid-layout-4 gap-30 box-info-2">
                            <div class="box-fieldset">
                                <label for="job">Job:<span>*</span></label>
                                <input type="text" id="job" value="Realter" class="form-control ">
                            </div>
                            <div class="box-fieldset">
                                <label for="email">Email address:<span>*</span></label>
                                <input type="text" id="email" value="themeflat@gmail.com" class="form-control ">
                            </div>
                            <div class="box-fieldset">
                                <label for="phone">Your Phone:<span>*</span></label>
                                <input type="number" id="phone" value="1332565894" class="form-control ">
                            </div>
                        </div>
                        <div class="box box-fieldset">
                            <label for="location">Location:<span>*</span></label>
                            <input type="text" id="location" value="634 E 236th St, Bronx, NY 10466"
                                class="form-control ">
                        </div>
                        <div class="box box-fieldset">
                            <label for="fb">Facebook:<span>*</span></label>
                            <input type="text" id="fb" value="#" class="form-control ">
                        </div>
                        <div class="box box-fieldset">
                            <label for="tw">Twitter:<span>*</span></label>
                            <input type="text" id="tw" value="#" class="form-control ">
                        </div>
                        <div class="box box-fieldset">
                            <label for="linkedin">Linkedin:<span>*</span></label>
                            <input type="text" id="linkedin" value="#" class="form-control ">
                        </div>
                        <div class="box">
                            <a href="#" class="tf-btn bg-color-primary pd-10">Save & Update</a>
                        </div>
                        <h5 class="title">Change password</h5>
                        <div class="box grid-layout-3 gap-30">
                            <div class="box-fieldset">
                                <label for="old-pass">Old Password:<span>*</span></label>
                                <div class="box-password">
                                    <input type="password" id="old-pass" class="form-contact password-field"
                                        placeholder="Password">
                                    <span class="show-pass">
                                        <i class="icon-pass icon-hide"></i>
                                        <i class="icon-pass icon-view"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="box-fieldset">
                                <label for="new-pass">New Password:<span>*</span></label>
                                <div class="box-password">
                                    <input type="password" id="new-pass" class="form-contact password-field2"
                                        placeholder="Password">
                                    <span class="show-pass2">
                                        <i class="icon-pass icon-hide"></i>
                                        <i class="icon-pass icon-view"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="box-fieldset mb-30">
                                <label for="confirm-pass">Confirm Password:<span>*</span></label>
                                <div class="box-password">
                                    <input type="password" id="confirm-pass" class="form-contact password-field3"
                                        placeholder="Password">
                                    <span class="show-pass3">
                                        <i class="icon-pass icon-hide"></i>
                                        <i class="icon-pass icon-view"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="box">
                        <a href="#" class="tf-btn bg-color-primary pd-20">Update Password</a>
                    </div>
                </div>
                @include('user.layouts.footer')
            </div>
            <div class="overlay-dashboard"></div>



        </div>

    <!-- /.main-content -->

    </div>
@endsection

@push('scripts')
@endpush
