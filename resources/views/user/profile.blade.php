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
                    {{-- <div class="box">
                        <h3 class="title">Account Settings</h3>
                        <div class="box-agent-account">
                            <h6>Agent Account</h6>
                            <p class="note">Your current account type is set to agent, if you want to remove your
                                agent
                                account, and return to normal account, you must click the button below</p>
                            <a href="#" class="tf-btn bg-color-primary pd-10 fw-7">Remove Agent Account</a>
                        </div>
                    </div> --}}
                    <form  method="post" action="{{ route('user.profile.edit') }}" enctype="multipart/form-data" class="form-contact mb-30">
                    @csrf
                        <div class="box">
                            <h6 class="title">Profile Picture</h6>
                            <div class="box-agent-avt">
                                <div class="avatar">
                                    <img src="{{ App\Helper\Helper::getProfileImage('storage/user/'.$row->id, $row?->profile_image) }}" alt="avatar" loading="lazy" width="128" height="128">
                                </div>
                                <div class="content uploadfile">
                                    <p>Upload a new avatar</p>
                                    <div class="box-ip">
                                        <input type="file" name="profile_image" class="ip-file">
                                    </div>
                                    <p>SIZE 100x100</p>
                                </div>
                            </div>
                        </div>
                        
                        <h5 class="title">Information</h5>  
                        <div class="box {{ $row->user_type ? 'grid-layout-1' : 'grid-layout-2'}} gap-30 box-info-2">  
                            @if (!$row->user_type)
                            <fieldset class="box box-fieldset">
                                <label for="name">Role</label>
                                <select class="form-control nice-select" id="user_type" name="user_type">
                                    <option value="">Select Role</option>
                                    @foreach(config('constants.USER_TYPE') as $key => $value)
                                        <option value="{{$value}}" @if(old('user_type')!=null && old('user_type')==$value) selected @elseif(!empty($row) && $row->user_type==$value) selected @endif>{{$value}}</option>
                                    @endforeach
                                </select>
                            </fieldset>    
                            @endif                
                            <fieldset class="box box-fieldset">
                                <label for="name">Full name:<span>*</span></label>
                                <input type="text" id="name" name="name" value="@if(old('name')!=null){{old('name')}}@elseif(!empty($row->name)){{$row->name}}@endif" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </fieldset>
                        </div>
                        <fieldset class="box box-fieldset">
                            <label>Description:</label>
                            <textarea name="description">@if(old('description')!=null){{old('description')}}@elseif(!empty($row->description)){{$row->description}}@endif</textarea>
                        </fieldset>
                        <div class="box grid-layout-2 gap-30 box-info-2">                             
                            <div class="box-fieldset">
                                <label for="email">Email address:<span>*</span></label>
                                <input type="text" id="email" name="email" value="@if(old('email')!=null){{old('email')}}@elseif(!empty($row->email)){{$row->email}}@endif" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="box-fieldset">
                                <label for="phone">Your Phone:<span>*</span></label>
                                <input type="number" id="phone" name="phone" value="@if(old('phone')!=null){{old('phone')}}@elseif(!empty($row->phone)){{$row->phone}}@endif" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                                @if($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if (!empty($row->user_type) && in_array($row->user_type , ['Agent', 'Builder']))
                        <div class="box grid-layout-2 gap-30 box-info-2">   
                            <div class="box-fieldset">
                                <label for="company">Business Name:<span>*</span></label>
                                <input type="text" name="business_name" class="form-control {{ $errors->has('business_name') ? ' is-invalid' : '' }}" value="@if(old('business_name')!=null){{old('business_name')}}@elseif(!empty($row->business_name)){{$row->business_name}}@endif" >
                                @if($errors->has('business_name'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('business_name') }}
                                    </span>
                                @endif
                            </div>
                            <div class="box-fieldset">
                                <label for="name">Landline Number:</label>
                                <input type="text" name="landline_number"  class="form-control" value="@if(old('landline_number')!=null){{old('landline_number')}}@elseif(!empty($row->landline_number)){{$row->landline_number}}@endif" >
                            </div>
                        </div>
                        @endif
                        <div class="box box-fieldset">
                            <label for="address">Address:<span>*</span></label>
                            <input type="text" id="address" name="address" value="@if(old('address')!=null){{old('address')}}@elseif(!empty($row->address)){{$row->address}}@endif" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">
                            @if($errors->has('address'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </span>
                            @endif
                        </div>
                        @if (!empty($row->user_type) && in_array($row->user_type , ['Agent', 'Builder']))
                        <div class="box grid-layout-3 gap-30 box-info-2">  
                            <div class="box-fieldset">
                                <label for="company">GSTIN/Udyog Aadhaar Number:</label>
                                <input type="text" name="gstin" class="form-control" value="@if(old('gstin')!=null){{old('gstin')}}@elseif(!empty($row->gstin)){{$row->gstin}}@endif" >
                            </div>
                            <div class="box-fieldset">
                                <label for="name">Rera Number:</label>
                                <input type="text" name="rera_number"  class="form-control" value="@if(old('rera_number')!=null){{old('rera_number')}}@elseif(!empty($row->rera_number)){{$row->rera_number}}@endif" >
                            </div>
                            <div class="box-fieldset">
                                <label for="position">Website:</label>
                                <input type="text" name="website" class="form-control" value="@if(old('website')!=null){{old('website')}}@elseif(!empty($row->website)){{$row->website}}@endif" >
                            </div>
                        </div>
                        @endif
                        <div class="box">
                            <button type="submit" class="tf-btn bg-color-primary pd-10">Save & Update</button>
                        </div>
                    </form>

                    <form method="post" action="{{ route('user.change.password') }}" enctype="multipart/form-data" class="form-contact">
                    @csrf
                    <h5 class="title">Change Password</h5>
                    <div class="box grid-layout-3 gap-30">
                        
                        <!-- Old Password Field -->
                        <div class="box-fieldset">
                            <label for="old-pass">Old Password:<span>*</span></label>
                            <div class="box-password">
                                <input type="password"  id="old-pass"  name="old_password"  class="form-contact password-field {{ $errors->has('old_password') ? 'is-invalid' : '' }}"  value="{{ old('old_password') }}"  placeholder="Old Password"  >
                                @if ($errors->has('old_password'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('old_password') }}
                                    </span>
                                @endif
                                <span class="show-pass">
                                    <i class="icon-pass icon-hide"></i>
                                    <i class="icon-pass icon-view"></i>
                                </span>
                            </div>
                            
                        </div>

                        <!-- New Password Field -->
                        <div class="box-fieldset">
                            <label for="new-pass">New Password:<span>*</span></label>
                            <div class="box-password">
                                <input type="password" id="new-pass" name="new_password" class="form-contact password-field2 {{ $errors->has('new_password') ? 'is-invalid' : '' }}" value="{{ old('new_password') }}" placeholder="New Password" >
                                @if ($errors->has('new_password'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('new_password') }}
                                    </span>
                                @endif
                                <span class="show-pass2">
                                    <i class="icon-pass icon-hide"></i>
                                    <i class="icon-pass icon-view"></i>
                                </span>
                            </div>
                            
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="box-fieldset mb-30">
                            <label for="confirm-pass">Confirm Password:<span>*</span></label>
                            <div class="box-password">
                                <input type="password" id="confirm-pass" name="new_password_confirmation" class="form-contact password-field3 {{ $errors->has('new_password_confirmation') ? 'is-invalid' : '' }}" value="{{ old('new_password_confirmation') }}" placeholder="Confirm Password" >
                                @if ($errors->has('new_password_confirmation'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('new_password_confirmation') }}
                                    </span>
                                @endif
                                <span class="show-pass3">
                                    <i class="icon-pass icon-hide"></i>
                                    <i class="icon-pass icon-view"></i>
                                </span>
                            </div>
                            
                        </div>

                    </div>

                    <div class="box">
                        <button type="submit" class="tf-btn bg-color-primary pd-20">Update Password</button>
                    </div>
                </form>
                    
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
