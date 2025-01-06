@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.pages') }}">Pages</a></li>
                    <li class="breadcrumb-item active">Create or Update</li>
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
                        <div class="card-header d-flex align-items-center">
                            <h4 class="card-title mb-0 flex-grow-1">{{isset($row->id) ? "Update Page" : "Add Page"}}</h4>
                            <div><a href="{{ route('admin.pages') }}" class="btn btn-primary">List</a></div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.page.post') }}" method="post" enctype='multipart/form-data'>
                                @csrf 

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-solid  {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" placeholder="Enter Title" name="title" value="@if(old('title')!=null){{old('title')}}@elseif(!empty($row->title)){{$row->title}}@endif">
                                                @if($errors->has('title'))
                                                <span class="text-danger">
                                                    {{ $errors->first('title') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="title">Sub title </label>
                                                <input type="text" class="form-control form-control-solid " id="sub_title" placeholder="Enter Sub title" name="sub_title" value="@if(old('sub_title')!=null){{old('sub_title')}}@elseif(!empty($row->sub_title)){{$row->sub_title}}@endif">
                                            
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="title">Page Slug <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-solid  {{ $errors->has('slug') ? ' is-invalid' : '' }}" id="slug" placeholder="Enter Page Slug" name="slug" value="@if(old('slug')!=null){{old('slug')}}@elseif(!empty($row->slug)){{$row->slug}}@endif">
                                                @if($errors->has('slug'))
                                                <span class="text-danger">
                                                    {{ $errors->first('slug') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="icon">Font Icon class</label>
                                                <input type="text" class="form-control form-control-solid " id="icon" placeholder="Enter icon class eg: fa-list" name="icon" value="@if(old('icon')!=null){{old('icon')}}@elseif(!empty($row->icon)){{$row->icon}}@endif">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="description">Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control form-control-solid  {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="4" placeholder="Enter Description" name="description">@if(old('description')!=null){{old('description')}}@elseif(!empty($row->description)){{$row->description}}@endif</textarea>
                                                @if($errors->has('description'))
                                                <span class="text-danger">
                                                    {{ $errors->first('description') }}
                                                </span>
                                                @endif
                                            </div>

                                            
                                            <div class="mb-3">
                                                <label class="form-label" for="seo_title">SEO Title </label>
                                                <input type="text" class="form-control form-control-solid  count-characters {{ $errors->has('seo_title') ? ' is-invalid' : '' }}" id="seo_title" placeholder="Enter SEO Title" name="seo_title" value="@if(old('seo_title')!=null){{old('seo_title')}}@elseif(!empty($row->seo_title)){{$row->seo_title}}@endif">
                                                <small><strong>Note: </strong> Add 45 to 80 characters for optimal results</small>
                                                @if($errors->has('seo_title'))
                                                <span class="text-danger">
                                                    {{ $errors->first('seo_title') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="seo_description">SEO Description </label>
                                                <textarea type="text" class="form-control form-control-solid  count-characters {{ $errors->has('seo_description') ? ' is-invalid' : '' }}" id="seo_description" rows="4" placeholder="Enter SEO Description" name="seo_description">@if(old('seo_description')!=null){{old('seo_description')}}@elseif(!empty($row->seo_description)){{$row->seo_description}}@endif</textarea>
                                                <small><strong>Note: </strong> Add 90 to 180 characters for optimal results</small>
                                                @if($errors->has('seo_description'))
                                                <span class="text-danger">
                                                    {{ $errors->first('seo_description') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="seo_keywords">SEO Keywords </label>
                                                <textarea class="form-control form-control-solid  {{ $errors->has('seo_keywords') ? ' is-invalid' : '' }}" id="seo_keywords" rows="4" placeholder="Enter SEO Keywords" name="seo_keywords">@if(old('seo_keywords')!=null){{old('seo_keywords')}}@elseif(!empty($row->seo_keywords)){{$row->seo_keywords}}@endif</textarea>
                                                <small>Example: Comma separated values like <strong>Keyword1, Keyword2, Keyword3</strong></small>
                                                @if($errors->has('seo_keywords'))
                                                <span class="text-danger">
                                                {{ $errors->first('seo_keywords') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
                                                <select class="form-control form-control-solid  {{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" name="status">
                                                <option value="">--Select--</option>
                                                @foreach(config('constants.STATUSES') as $key => $status)
                                                    <option value="{{$key}}" @if(old('status')!=null && old('status')==$key) selected @elseif(!empty($row) && $row->status==$key) selected @endif>{{$status}}</option>
                                                @endforeach
                                                </select>
                                                @if($errors->has('status'))
                                                <span class="text-danger">
                                                    {{ $errors->first('status') }}
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <input type="hidden" name="id" value="@if(!empty($row->id)){{$row->id}}@endif">
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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
<script src="{{url('backend/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        CKEDITOR.replace('description', {});
    }); 
</script>
@endpush