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
                            <h4 class="card-title">{{isset($row->id) ? "Update Banner" : "Add Banner"}}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.banner.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title <span class="text-danger mandatory">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="@if(!empty($row->title)){{$row->title}}@elseif(old('title')!=null){{old('title')}}@endif " />
                                    @error('title')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">Sub title</label>
                                    <input type="text" class="form-control" id="sub_title" name="sub_title" value="@if(!empty($row->sub_title)){{$row->sub_title}}@elseif(old('sub_title')!=null){{old('sub_title')}}@endif" />
                                    @error('sub_title')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control form-control-solid @if($errors->has('description')) is-invalid @endif" id="description" name="description">@if(!empty($row->description)){{$row->description}}@elseif(old('description')!=null){{old('description')}}@endif</textarea>
                                    @error('description')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload Image <span class="text-danger mandatory">*</span></label>
                                    <input type="file" class="dropify" data-default-file="{{ isset($row->image)? url('/storage/banner/'.$row->id.'/'.$row->image) : ''}}" name="image" />
                                    @error('image')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div> 

                                <div class="mb-3">
                                    <label for="link" class="form-label">Status</label>
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