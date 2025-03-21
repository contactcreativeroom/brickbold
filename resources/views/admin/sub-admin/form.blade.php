@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.banners') }}">Banners</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add/Update</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{isset($row->id) ? "Update Sub Admin" : "Add Sub Admin"}}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.subadmin.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name <span class="text-danger mandatory">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="@if(!empty($row->name)){{$row->name}}@elseif(old('name')!=null){{old('name')}}@endif " />
                                    @error('name')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger mandatory">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email" value="@if(!empty($row->email)){{$row->email}}@elseif(old('email')!=null){{old('email')}}@endif" />
                                    @error('email')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="@if(!empty($row->phone)){{$row->phone}}@elseif(old('phone')!=null){{old('phone')}}@endif" />
                                    @error('phone')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                                @if (!isset($row->id))                                    
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password <span class="text-danger mandatory">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" value="@if(!empty($row->password)){{$row->password}}@elseif(old('password')!=null){{old('password')}}@endif" />
                                        @error('password')
                                        <div class="text-danger">
                                            <small>{{ $message }}</small>
                                        </div>
                                        @enderror
                                    </div>
                                @endif
                                
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload Image <span class="text-danger mandatory">*</span></label>
                                    <input type="file" class="dropify" data-default-file="{{ isset($row->image)? url('/storage/subadmin/'.$row->id.'/'.$row->image) : ''}}" name="image" />
                                    @error('image')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div> 

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" name="status">
                                        <option value="">--Select Value--</option>
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

                                <input type="hidden" name="id" value="@if(!empty($row->id)){{$row->id}}@endif">
                                <button type="submit" class="btn btn-primary">{{isset($row) ? "Update" : "Save"}}</button>
                            </form>
                        </div>
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