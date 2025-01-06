@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.packages') }}">Package</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{empty($row->id)?'Add' : 'Update';}}</li>
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
                            <h4 class="card-title">{{empty($row->id)?'Add' : 'Update';}} Package</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.package.post') }}" method="POST" enctype='multipart/form-data'>
                                @csrf
                                <div class="row">
                                    @if (!empty($row->id))
                                        <div class="col-md-3">
                                            <label class="form-label">Status<span>*</span></label>
                                            <select class="form-control form-select" name="status">
                                                @foreach (config('constants.STATUS') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('status', request('status')) === (string)$key ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif                                    
                                    <div class="col-md-3">
                                        <label for="profile" class="form-label">Profile</label>
                                        <select class="form-control form-select {{ $errors->has('profile') ? ' is-invalid' : '' }}" name="profile">
                                            <option value="">Select Profile Type</option>
                                            @foreach (config('constants.PACKAGE_PROFILE') as $key=>$value)
                                                <option value="{{$value}}" @if(old('profile', $row->profile ?? null) == $value) selected @endif >{{$value}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('profile'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('profile') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="type" class="form-label">Looking For</label>
                                        <select class="form-control form-select {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">
                                            <option value="">Select Package Type</option>
                                            @foreach (config('constants.PACKAGE_TYPE') as $key=>$value)
                                                <option value="{{$value}}" @if(old('type', $row->type ?? null) == $value) selected @endif >{{$value}}</option>
                                            @endforeach
                                            
                                        </select>
                                        @if($errors->has('type'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('type') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Property Type</label>
                                        <select class="form-control form-select {{ $errors->has('property_type') ? ' is-invalid' : '' }}" name="property_type">
                                            <option value="">Select Property Type</option>
                                            @foreach (config('constants.TYPE') as $key=>$value)
                                                <option value="{{$value}}" @if(old('property_type', $row->property_type ?? null) == $value) selected @endif >{{$value}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('property_type'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('property_type') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $row->name ?? '') }}" />
                                        @if($errors->has('name'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <label for="mobile" class="form-label">Days</label>
                                        <input type="number" class="form-control {{ $errors->has('months') ? ' is-invalid' : '' }}" placeholder="e.g. 3" name="months" value="{{ old('months', $row->months ?? '') }}" />
                                        @if($errors->has('months'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('months') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="password" class="form-label">Price</label>
                                        <input type="numver" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price', $row->price ?? '') }}" />
                                        @if($errors->has('price'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('price') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="unit" class="form-label">Contacts</label>
                                        <input type="number" class="form-control {{ $errors->has('unit') ? ' is-invalid' : '' }}" placeholder="e.g. 3" name="unit" value="{{ old('unit', $row->unit ?? '') }}" />
                                        @if($errors->has('unit'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('unit') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="post_property" class="form-label">Post Property</label>
                                        <input type="number" class="form-control {{ $errors->has('post_property') ? ' is-invalid' : '' }}" placeholder="e.g. 3" value="{{ old('post_property', $row->post_property ?? '') }}" name="post_property" />
                                        @if($errors->has('post_property'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('post_property') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="discount" class="form-label">Discount %</label>
                                        <input type="number" id="discount" class="form-control {{ $errors->has('discount') ? ' is-invalid' : '' }}" placeholder="e.g. 10"  name="discount" value="{{ old('discount', $row->discount ?? '') }}" />
                                        @if($errors->has('discount'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('discount') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                @php
                                    $fields = old('fields', $row->fields ?? []);
                                @endphp
                                <div class="row mt-3">
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" placeholder="Heading" name="fields[0][heading]" value="{{ $fields[0]['heading'] ?? '' }}"  />
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" placeholder="Value" name="fields[0][value]" value="{{ $fields[0]['value'] ?? '' }}"/>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:void(0);" data-id="1" id="add_more" class="btn btn-success" style="width: 100%;">Add More</a>
                                    </div>
                                </div>
                                <div class="add_more_field">
                                    
                                    @foreach ($fields as $index => $field)
                                        @if ($index > 0)
                                            <div class="row mt-3 more_fields" id="row_{{ $index }}">
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" placeholder="Heading" name="fields[{{ $index }}][heading]" value="{{ $field['heading'] ?? '' }}" />
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" placeholder="Value" name="fields[{{ $index }}][value]" value="{{ $field['value'] ?? '' }}" />
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="javascript:void(0);" data-id="{{ $index }}" class="btn btn-danger remove_row" style="width: 100%;">Remove</a>
                                                </div>
                                            </div>
                                        @endif                                        
                                    @endforeach
                                </div>
                                @if (isset($row->id))   
                                    <input type="hidden" name="id" value="{{$row->id}}">
                                @endif
                                 
                                
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <button style="padding: 12px 46px;" type="submit"  class="btn btn-primary">{{empty($row->id)?'Submit' : 'Update';}}</button>
                                        </div>
                                    </div>
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
 
@endpush