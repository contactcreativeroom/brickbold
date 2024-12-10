@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.meta.list')}}">Meta Details</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Left side of the form -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Meta Details <small class="text-muted">(for static pages)</small>
                            </h4>

                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.meta.save') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="page" class="form-label">Page <span
                                            class="text-danger mandatory">*</span></label>
                                    <select data-page="{{old('page')}}" data-url='' class="form-select" id="static_page"
                                        name="page">
                                        <option value="" selected>Select page</option>
                                        @foreach($meta_non_existing_pages as $key=>$value)

                                        <option value="{{$key}}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('page')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Title <span
                                            class="text-danger mandatory">*</span></label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"
                                        value="{{ old('meta_title') }}" />
                                    @error('meta_title')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Meta Description <span
                                            class="text-danger mandatory">*</span></label>
                                    <textarea class="form-control" id="meta_description"
                                        name="meta_description">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords <span
                                            class="text-danger mandatory">*</span></label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                        value="{{ old('meta_keywords') }}" />
                                    @error('meta_keywords')
                                    <div class="text-danger">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
</div>
@endsection

@push('scripts')

@endpush