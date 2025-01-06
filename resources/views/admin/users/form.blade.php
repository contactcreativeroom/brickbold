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
                                        <label for="link" class="form-label">Status</label>
                                        <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" name="status">
                                            <option value="">--Select Status--</option>
                                            @foreach(config('constants.STATUSES') as $key => $status)
                                                <option value="{{$key}}" {{ (isset($row->status) && $key == $row->status) ?'selected':'' }} >{{$status}}</option>
                                            @endforeach
                                        </select> 
                                        @error('status')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name <span class="text-danger mandatory">*</span></label>
                                        <input type="text" class="form-control form-control-solid {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="" name="name" value="@if(!empty($row->name)){{$row->name}}@elseif(old('name')!=null){{old('name')}}@endif" />
                                        @error('name')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div> 
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">email <span class="text-danger mandatory">*</span></label>
                                        <input type="text" class="form-control form-control-solid {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="" name="email" value="@if(!empty($row->email)){{$row->email}}@elseif(old('email')!=null){{old('email')}}@endif" />
                                        @error('email')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div> 
                                    
                                    <div class="col-md-6"> 
                                        <label class="form-label" for="phone">Your Phone <span class="text-danger mandatory">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text">IN (+91)</span>
                                            <input type="text" id="phoneNumber" name="phone" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="" value="@if(!empty($row->phone)){{$row->phone}}@elseif(old('phone')!=null){{old('phone')}}@endif" />
                                            @error('phone')
                                            <div class="text-danger">
                                                <small>{{ $message }}</small>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label" for="address">Address <span class="text-danger mandatory">*</span></label>
                                        <input type="text" id="address" name="address" value="@if(old('address')!=null){{old('address')}}@elseif(!empty($row->address)){{$row->address}}@endif" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">
                                        @if($errors->has('address'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </span>
                                        @endif
                                    </div>
                                    
                                     <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" rows="4">@if(old('description')!=null){{old('description')}}@elseif(!empty($row->description)){{$row->description}}@endif</textarea>
                                    </div>
                                     
                                    
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