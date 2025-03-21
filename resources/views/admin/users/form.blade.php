@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.users') }}">users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Left side of the form -->

                    <div class="card mb-6">
                        <div class="card-header">
                            <h4 class="card-title">Update user</h4>
                        </div>
                        <div class="card-body">
                            
                         
                            <form id="formAccountSettings"  action="{{ route('admin.user.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="d-flex align-items-start align-items-sm-center gap-6 pb-4 mb-5 border-bottom">
                                    <img src="{{ App\Helper\Helper::getProfileImage('storage/user/'.$row->id, $row->profile_image) }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload new photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg" name="profile_image">
                                        </label> 
                                        <div>Allowed JPG, GIF or PNG. Max size of 2MB</div>
                                    </div>
                                </div>
                                <div class="row g-6">
                                    <div class="col-md-6">
                                        <label for="link" class="form-label">Status <span class="text-danger mandatory">*</span></label>
                                        <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" name="status">
                                            <option value="">--Select Status--</option>
                                            @foreach(config('constants.STATUSES') as $key => $status)
                                                <option value="{{$key}}" @if(old('status')!=null && old('status')==$key) selected @elseif(!empty($row) && $row->status==$key) selected @endif >{{$status}}</option>
                                            @endforeach
                                        </select> 
                                        @error('status')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="link" class="form-label">Role <span class="text-danger mandatory">*</span></label>
                                        <select class="form-control {{ $errors->has('user_type') ? ' is-invalid' : '' }}" id="user_type" name="user_type">
                                            <option value="">Select Role</option>
                                            @foreach(config('constants.USER_TYPE') as $key => $value)
                                                <option value="{{$value}}" @if(old('user_type')!=null && old('user_type')==$value) selected @elseif(!empty($row) && $row->user_type==$value) selected @endif>{{$value}}</option>
                                            @endforeach
                                        </select>
                                        @error('user_type')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name" class="form-label">Name <span class="text-danger mandatory">*</span></label>
                                        <input type="text" class="form-control form-control-solid {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="" name="name" value="@if(!empty($row->name)){{$row->name}}@elseif(old('name')!=null){{old('name')}}@endif" />
                                        @error('name')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div> 
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">email <span class="text-danger mandatory">*</span></label>
                                        <input type="text" class="form-control form-control-solid {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="" name="email" value="@if(!empty($row->email)){{$row->email}}@elseif(old('email')!=null){{old('email')}}@endif" />
                                        @error('email')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div> 
                                    
                                    <div class="col-md-4"> 
                                        <label class="form-label" for="phone">Your Phone <span class="text-danger mandatory">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">IN (+91)</span>
                                            <input type="text" id="phoneNumber" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="" value="@if(!empty($row->phone)){{$row->phone}}@elseif(old('phone')!=null){{old('phone')}}@endif" />
                                        </div>
                                        @error('phone')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div>
                                    @if (!empty($row->user_type) && in_array($row->user_type , ['Agent', 'Builder']))
                                    <div class="col-md-6">
                                        <label class="form-label" for="business_name">Business Name </label>
                                        <input type="text" id="business_name" name="business_name" value="@if(old('business_name')!=null){{old('business_name')}}@elseif(!empty($row->business_name)){{$row->business_name}}@endif" class="form-control {{ $errors->has('business_name') ? ' is-invalid' : '' }}">
                                        @if($errors->has('business_name'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('business_name') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="landline_number">Landline Number</label>
                                        <input type="text" id="landline_number" name="landline_number" value="@if(old('landline_number')!=null){{old('landline_number')}}@elseif(!empty($row->landline_number)){{$row->landline_number}}@endif" class="form-control {{ $errors->has('landline_number') ? ' is-invalid' : '' }}">
                                    </div>
                                    @endif
                                    <div class="col-md-12">
                                        <label class="form-label" for="address">Address <span class="text-danger mandatory">*</span></label>
                                        <input type="text" id="address" name="address" value="@if(old('address')!=null){{old('address')}}@elseif(!empty($row->address)){{$row->address}}@endif" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">
                                        @if($errors->has('address'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </span>
                                        @endif
                                    </div>
                                    @if (!empty($row->user_type) && in_array($row->user_type , ['Agent', 'Builder']))                                     
                                    <div class="col-md-4">
                                        <label class="form-label" for="gstin">GSTIN/Udyog Aadhaar Number</label>
                                        <input type="text" id="gstin" name="gstin" value="@if(old('gstin')!=null){{old('gstin')}}@elseif(!empty($row->gstin)){{$row->gstin}}@endif" class="form-control {{ $errors->has('gstin') ? ' is-invalid' : '' }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="rera_number">Rera Number</label>
                                        <input type="text" id="rera_number" name="rera_number" value="@if(old('rera_number')!=null){{old('rera_number')}}@elseif(!empty($row->rera_number)){{$row->rera_number}}@endif" class="form-control {{ $errors->has('rera_number') ? ' is-invalid' : '' }}">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="website">Website</label>
                                        <input type="text" id="website" name="website" value="@if(old('website')!=null){{old('website')}}@elseif(!empty($row->website)){{$row->website}}@endif" class="form-control {{ $errors->has('website') ? ' is-invalid' : '' }}">
                                    </div>
                                    @endif
                                    
                                </div>
                                <div class="mt-6">
                                    @if (isset($row->id))   
                                        <input type="hidden" name="id" value="{{$row->id}}">
                                    @endif
                                    <button type="submit" class="btn btn-primary me-3">Save changes</button>
                                    <a href="{{route('admin.users')}}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- / Content -->
</div>
@endsection

@push('scripts')
<script>
    $('.dropify').dropify();
</script>

<script src="{{ URL::asset('common/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    ['description'].forEach(function(editorId) {
        CKEDITOR.replace(editorId, {
            // Define your custom toolbar configuration here
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', 'Blockquote']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize', 'TextColor', 'BGColor']
                },
                {
                    name: 'editing',
                    items: ['Undo', 'Redo']
                }
            ],
            // Define any other CKEditor configuration options here
        });
    });
</script>
@endpush