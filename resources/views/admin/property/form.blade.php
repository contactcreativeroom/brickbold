@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.properties') }}">properties</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{empty($row->id)?'Add New' : 'Update';}}</li>
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
                            <h4 class="card-title">{{empty($row->id)?'Add Property' : 'Update Property';}}</h4>
                        </div>
                        <div class="card-body">
                            <form id="postaddForm" action="{{ route('admin.property.post') }}" method="POST"  enctype='multipart/form-data'>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label">Status<span>*</span></label>
                                            <select class="form-control form-select" name="status">
                                                @foreach (config('constants.PROPERTY_STATUSES') as $key=>$value)
                                                    <option value="{{$key}}" {{ old('status', request('status')) === (string)$key ? 'selected' : '' }} >{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="type" class="form-label">Property Type<span>*</span></label>
                                            <select class="form-control form-select {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="property_type">
                                                <option value="">Select Property Type</option>
                                                @foreach (config('constants.TYPE') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('type')!=null && old('type')==$key) selected @elseif(!empty($row) && $row->type==$key) selected @endif >{{$value}}</option>
                                                @endforeach  
                                                @if($errors->has('type'))
                                                    <span class="invalid-feedback">
                                                        {{ $errors->first('type') }}
                                                    </span>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="detail" class="form-label">Property Detail<span>*</span></label>
                                            <select class="form-control form-select{{ $errors->has('property_detail') ? ' is-invalid' : '' }}" name="property_detail" id="property_detail">
                                                <option value="">Select Property Detail</option>
                                                @foreach (config('constants.PROPERTY_DETAIL') as $key => $value)
                                                    <option value="{{ $key }}"
                                                        @if (old('property_detail') != null && old('property_detail') == $key) selected @elseif(!empty($row) && $row->property_detail == $key) selected @endif>
                                                        {{ $value }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('property_detail'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('property_detail') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <label for="address" class="form-label">Property Status<span>*</span></label>
                                            <select class="form-control form-select{{ $errors->has('for_type') ? ' is-invalid' : '' }}" name="for_type">
                                                @foreach (config('constants.FOR_TYPE') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('for_type')!=null && old('for_type')==$key) selected @elseif(!empty($row) && $row->for_type==$key) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('for_type'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('for_type') }}
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label for="title" class="form-label">Title<span>*</span></label>
                                            <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Title" name="title" value="@if(old('title')!=null){{old('title')}}@elseif(!empty($row->title)){{$row->title}}@endif">
                                            @if($errors->has('title'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('title') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label for="title" class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Decscription" name="description">@if(old('description')!=null){{old('description')}}@elseif(!empty($row->description)){{$row->description}}@endif</textarea>

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label for="location" class="form-label">Location<span>*</span></label>
                                            <input type="text" id="__address"
                                                class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}"
                                                name="location" placeholder="Location"
                                                value="@if (old('location') != null) {{ old('location') }}@elseif(!empty($row->location)){{ $row->location }} @endif">

                                            <a href="javascript:void(0)" class="btn-location"><i
                                                    class="icon  icon-location"></i></a>
                                            @if ($errors->has('location'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('location') }}
                                                </span>
                                            @endif

                                            <input type="hidden" id="__address_saved"
                                                value="@if (!empty($row->location)) {{ $row->location }}@elseif(old('location') != null){{ old('location') }} @endif" />

                                            <input type="hidden" id="__address_lat" name="latitude"
                                                value="@if (!empty($row->latitude)) {{ $row->latitude }}@elseif(old('latitude') != null){{ old('latitude') }} @endif" />

                                            <input type="hidden" id="__address_lng" name="longitude"
                                                value="@if (!empty($row->longitude)) {{ $row->longitude }}@elseif(old('longitude') != null){{ old('longitude') }} @endif" />

                                            <input type="hidden" id="__address_place_id" name="place_id"
                                                value="@if (!empty($row->place_id)) {{ $row->place_id }}@elseif(old('place_id') != null){{ old('place_id') }} @endif" />

                                            <input type="hidden" id="__address_state_code" name="state_code"
                                                value="@if (!empty($row->state_code)) {{ $row->state_code }}@elseif(old('state_code') != null){{ old('state_code') }} @endif" />

                                            <input type="hidden" id="__address_country" name="address_country"
                                                value="@if (!empty($row->address_country)) {{ $row->address_country }}@elseif(old('address_country') != null){{ old('address_country') }} @endif" />

                                            <input type="hidden" id="__address_country_code"
                                                name="address_country_code"
                                                value="@if (!empty($row->address_country_code)) {{ $row->address_country_code }}@elseif(old('address_country_code') != null){{ old('address_country_code') }} @endif" />

                                        </div>
                                    </div>
                                    <div class="row mt-3">                                       

                                        <div class="col-md-4">
                                            <label class="form-label">  Province/State:<span>*</span></label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}"
                                                name="state" placeholder="Enter property zip code"
                                                value="@if (old('state') != null) {{ old('state') }}@elseif(!empty($row->state)){{ $row->state }} @endif"
                                                id="__address_state" readonly>
                                            @if ($errors->has('state'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('state') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="City" class="form-label"> City:<span>*</span> </label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}"
                                                name="city" placeholder="Enter property zip code"
                                                value="@if (old('city') != null) {{ old('city') }}@elseif(!empty($row->city)){{ $row->city }} @endif"
                                                id="__address_city" readonly>
                                            @if ($errors->has('city'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('city') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="zip" class="form-label">
                                                Zip Code:<span>*</span>
                                            </label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('zip_code') ? ' is-invalid' : '' }}"
                                                name="zip_code" placeholder="Enter property zip code"
                                                value="@if (old('zip_code') != null) {{ old('zip_code') }}@elseif(!empty($row->zip_code)){{ $row->zip_code }} @endif"
                                                id="__address_postcode" readonly>
                                            @if ($errors->has('zip_code'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('zip_code') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Price:<span>*</span></label>
                                            <input type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="@if(old('price')!=null){{old('price')}}@elseif(!empty($row->price)){{$row->price}}@endif">
                                            @if($errors->has('price'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('price') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Is Negotiable:<span>*</span></label>
                                            <select class="form-control form-select {{ $errors->has('is_negotiable') ? ' is-invalid' : '' }}" name="is_negotiable">
                                                <option value="">Select Price Type</option>
                                                @foreach (config('constants.IS_NEGOTIABLE') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('is_negotiable')!=null && old('is_negotiable')==$key) selected @elseif(!empty($row) && $row->is_negotiable==$key) selected @endif>{{$value}}</option>
                                                @endforeach 
                                            </select>
                                            @if($errors->has('is_negotiable'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('is_negotiable') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Token Amount</label>
                                            <input type="number" class="form-control" value="@if(old('token_amount')!=null){{old('token_amount')}}@elseif(!empty($row->token_amount)){{$row->token_amount}}@endif" name="token_amount">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Availability:<span>*</span></label>
                                            <select class="form-control form-select {{ $errors->has('availability') ? ' is-invalid' : '' }}" name="availability">
                                                <option value="">Select Price Availability</option>
                                                @foreach (config('constants.AVAILABILITY') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('availability')!=null && old('availability')==$key) selected @elseif(!empty($row) && $row->availability==$key) selected @endif>{{$value}}</option>
                                                @endforeach 
                                            </select>
                                            @if($errors->has('availability'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('availability') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Ownership:<span>*</span></label>
                                            <select class="form-control form-select {{ $errors->has('ownership') ? ' is-invalid' : '' }}" name="ownership">
                                                <option value="">Select Ownership</option>
                                                @foreach (config('constants.OWNERSHIP') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('ownership')!=null && old('ownership')==$key) selected @elseif(!empty($row) && $row->ownership==$key) selected @endif >{{$value}}</option>
                                                @endforeach 
                                            </select>
                                            @if($errors->has('ownership'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('ownership') }}
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-4">
                                            <label for="year" class="form-label">Age Of Construction:<span>*</span></label>
                                            <select class="form-control form-select {{ $errors->has('build_year') ? ' is-invalid' : '' }}" name="build_year">
                                                <option value="">Select Construction</option>
                                                @foreach (config('constants.BUILD_YEAR') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('build_year')!=null && old('build_year')==$key) selected @elseif(!empty($row) && $row->build_year==$key) selected @endif >{{$value}}</option>
                                                @endforeach 
                                            </select>
                                            @if($errors->has('build_year'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('build_year') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-9" style="padding-right:0px;">
                                                    <label for="plot_area" class="form-label">Plot Area<span>*</span></label>
                                                    <input type="text" class="form-control plot-area {{ $errors->has('plot_area') ? ' is-invalid' : '' }}" name="plot_area" value="@if(old('plot_area')!=null){{old('plot_area')}}@elseif(!empty($row->plot_area)){{$row->plot_area}}@endif">
                                                    @if($errors->has('plot_area'))
                                                        <span class="invalid-feedback">
                                                            {{ $errors->first('plot_area') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-3" style="padding-left:0px;">
                                                    <label for="plot_area" class="form-label"></label>
                                                    <select class="form-control form-select plot-area-type {{ $errors->has('plot_type') ? ' is-invalid' : '' }}" name="plot_type">
                                                        @foreach (config('constants.PLOT_TYPE') as $value)
                                                            <option value="{{$value}}" @if(old('plot_type')!=null && old('plot_type')==$value) selected @elseif(!empty($row) && $row->plot_type==$value) selected @endif >{{$value}}</option>
                                                        @endforeach 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="builtup_area" class="form-label">Builtup Area (SqFt):<span>*</span></label>
                                            <input type="text" class="form-control {{ $errors->has('builtup_area') ? ' is-invalid' : '' }}" name="builtup_area" value="@if(old('builtup_area')!=null){{old('builtup_area')}}@elseif(!empty($row->builtup_area)){{$row->builtup_area}}@endif">
                                            @if($errors->has('builtup_area'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('builtup_area') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="carpet_area" class="form-label">Carpet Area (SqFt):<span>*</span></label>
                                            <input type="text" class="form-control {{ $errors->has('carpet_area') ? ' is-invalid' : '' }}" name="carpet_area" value="@if(old('carpet_area')!=null){{old('carpet_area')}}@elseif(!empty($row->carpet_area)){{$row->carpet_area}}@endif">
                                            @if($errors->has('carpet_area'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('carpet_area') }}
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label for="bedroom" class="form-label">Bedroom:<span>*</span></label>
                                            <select class="form-select form-control {{ $errors->has('bedroom') ? ' is-invalid' : '' }}" id="bedroom" name="bedroom">
                                                <option value="">Select Bedroom</option>
                                                @foreach (config('constants.LOOP5') as $value)
                                                    <option value="{{$value}}" @if(old('bedroom')!=null && old('bedroom')==$value) selected @elseif(!empty($row) && $row->bedroom==$value) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('bedroom'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('bedroom') }}
                                                </span>
                                            @endif

                                        </div>
                                        <div class="col-md-3">
                                            <label for="bathroom" class="form-label">Bathroom:<span>*</span></label>
                                            <select class="form-select form-control {{ $errors->has('bathroom') ? ' is-invalid' : '' }}" id="bathroom" name="bathroom">
                                                <option value="">Select Bathroom</option>
                                                @foreach (config('constants.LOOP5') as $value)
                                                    <option value="{{$value}}" @if(old('bathroom')!=null && old('bathroom')==$value) selected @elseif(!empty($row) && $row->bathroom==$value) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('bathroom'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('bathroom') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <label for="balcony" class="form-label">Balcony</label>
                                            <select class="form-select form-control" id="balcony" name="balcony">
                                                <option value="">Select Balcony</option>
                                                @foreach (config('constants.LOOP5') as $value)
                                                    <option value="{{$value}}" @if(old('balcony')!=null && old('balcony')==$value) selected @elseif(!empty($row) && $row->balcony==$value) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="floor" class="form-label">Floors</label>
                                            <select class="form-select form-control" id="floor" name="floors">
                                                <option value="">Select Floor</option>
                                                @foreach (config('constants.LOOP5') as $value)
                                                    <option value="{{$value}}" @if(old('floors')!=null && old('floors')==$value) selected @elseif(!empty($row) && $row->floors==$value) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="facing" class="form-label">Facing:<span>*</span></label>
                                            <select class="form-select form-control  {{ $errors->has('facing') ? ' is-invalid' : '' }}" id="facing" name="facing">
                                                <option value="">Select Facing</option>
                                                @foreach (config('constants.FACING') as $key=>$value)
                                                    <option value="{{$value}}" @if(old('facing')!=null && old('facing')==$value) selected @elseif(!empty($row) && $row->facing==$value) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('facing'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('facing') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="furnished" class="form-label">Furnished Detail:<span>*</span></label>
                                            <select class="form-select form-control  {{ $errors->has('furnished') ? ' is-invalid' : '' }}" id="furnished" name="furnished">
                                                <option value="">Select Furnished</option>
                                                @foreach (config('constants.FURNISHED_DETAIL') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('furnished')!=null && old('furnished')==$key) selected @elseif(!empty($row) && $row->furnished==$key) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('furnished'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('furnished') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label for="approved_by" class="form-label">Approved By </label>
                                            <select class="form-select form-control" id="approved_by" name="approved_by">
                                                <option value="">Select Approved By</option>
                                                @foreach (config('constants.APPROVED_BY') as $key=>$value)
                                                    <option value="{{$key}}" @if(old('approved_by')!=null && old('approved_by')==$key) selected @elseif(!empty($row) && $row->approved_by==$key) selected @endif >{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <h5 class="mt-3">Addtional Room</h5>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="row check_additional">
                                                @foreach(config('constants.ADDITIONALS') as $additional)
                                                <div class="col-md-4 mb-2">
                                                    <input type="checkbox" class="form-check-input" name="additional[]" id="{{str_replace(' ', '', $additional)}}" value="{{$additional}}" @if(old('additional')!=null && in_array($additional, old('additional'))) checked @elseif(!empty($row) && in_array($additional, explode(',', $row->additional))) checked @endif > 
                                                    <label class="form-check-label" for="{{str_replace(' ', '', $additional)}}">{{$additional}}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="mt-3">Amenities</h5>
                                    <div class="row mt-3">
                                        
                                        <div class="col-md-12">
                                            <div class="row check_amenities"> 
                                                @foreach (config('constants.AMENITIES') as $amenity)
                                                <div class="col-md-4 mb-2">
                                                    <input  class="form-check-input" type="checkbox"
                                                        name="amenities[]" id="{{str_replace(' ', '', $amenity)}}"
                                                        value="{{ $amenity }}" @if(old('amenities')!=null && in_array($amenity, old('amenities'))) checked @elseif(!empty($row) && in_array($amenity, explode(',', $row->amenities))) checked @endif />
                                                    <label class="form-check-label" for="{{str_replace(' ', '', $amenity)}}">{{ $amenity }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label for="title" class="form-label">Video Link</label>
                                            <input type="text" class="form-control" placeholder="Youtube url" name="video_link" value="@if(old('video_link')!=null){{old('video_link')}}@elseif(!empty($row->video_link)){{$row->video_link}}@endif">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12" style="padding:10px;">
                                            <h3 class="title">Property images</h3>
                                            <div class="uploadfile">
                                                <div id="images" class="row"></div>
                                            </div>
                                             
                                        </div>
                                        @if (isset($row->images))
                                            <div class="row mt-3">
                                                <div class="col-md-12 col-sm-12" style="margin-top:20px;">
                                                    <div class="row">
                                                        @foreach ($row->images as $imageKey => $imageVal)
                                                            <div class="col-3 spartan_item_wrapper" data-spartanindexrow="{{ $imageKey.'_custom' }}" id="{{ 'delete-'.$imageVal->id}}"
                                                                style="margin-bottom: 20px;">
                                                                <div style="position: relative;">
                                                                    <div class="spartan_item_loader" data-spartanindexloader="{{ $imageKey.'_custom' }}"
                                                                        style="position: absolute; width: 100%; height: 200px; background: rgba(255,255,255,0.7); z-index: 22; text-align: center; align-items: center; margin: auto; justify-content: center; flex-direction: column; display: none; font-size: 1.7em; color: #CECECE;">
                                                                        <i class="fas fa-sync fa-spin"></i>
                                                                    </div>
                                                                    <label class="file_upload"
                                                                        style="width: 100%; height: 200px; border: 2px dashed #ddd; border-radius: 3px; cursor: pointer; text-align: center; overflow: hidden; padding: 5px; margin-top: 5px; margin-bottom: 5px; position: relative; display: flex; align-items: center; margin: auto; justify-content: center; flex-direction: column;">
                                                                        <a href="javascript:void(0)"
                                                                            style="right: 3px; top: 3px; background: rgb(237, 60, 32); border-radius: 3px; width: 30px; height: 30px; line-height: 30px; text-align: center; text-decoration: none; color: rgb(255, 255, 255); position: absolute !important;"
                                                                            class="custom_spartan_remove_row" data-id="{{$imageVal->id}}">
                                                                            <i class="fas fa-trash"></i>
                                                                        </a>
                                                                        <img style="width: 64px; margin: 0 auto; vertical-align: middle; display: none; "
                                                                            data-spartanindexi="{{ $imageKey.'_custom' }}" src=""
                                                                            class="spartan_image_placeholder">
                                                                        <p data-spartanlbldropfile="{{ $imageKey.'_custom' }}" style="color: #5FAAE1; display: none; width: auto;">Drop Here</p>
                                                                        <img style="width: 100%; vertical-align: middle;" class="img_rttrtr" data-spartanindeximage="{{ url('storage/property/'.$row->id.'/'.$imageVal->image)}}" src="{{ url('storage/property/'.$row->id.'/'.$imageVal->image)}}">
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="row mt-3 mb-3">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                @if (isset($row->id))   
                                                    <input type="hidden" name="id" value="{{$row->id}}">
                                                @endif
                                                @if (isset($user_id))   
                                                    <input type="hidden" name="user_id" value="{{$user_id}}">
                                                @endif
                                                <button style="padding: 12px 46px;" type="submit" class="btn btn-primary">{{empty($row->id)?'Add Property' : 'Update Property';}}</button>
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
<script type="text/javascript" src="{{url('frontend/js/custom-maps.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQe-4d-xDKRGSzs6IQNYXdv3g3Uw3X6MI&libraries=places&callback=initAutocomplete"></script>
<script src="{{ url('backend/plugins/spartan-multi-image-picker-master/spartan-multi-image-picker-min.js') }}"></script>
  <script>
    $("#images").spartanMultiImagePicker({
        fieldName: 'images[]', // this configuration will send your images named "fileUpload" to the server
        maxCount: 50,
        rowHeight: '200px',
        groupClassName: 'col-3',
        maxFileSize: '',
        dropFileLabel: "Drop Here",
        onAddRow: function(index) {
            console.log(index);
            console.log('add new row');
        },
        onRenderedPreview: function(index) {
            console.log(index);
            console.log('preview rendered');
        },
        onRemoveRow: function(index) {
            console.log(index);
        },
        onExtensionErr: function(index, file) {
            console.log(index, file, 'extension err');
            alert('Please only input png or jpg type file')
        },
        onSizeErr: function(index, file) {
            console.log(index, file, 'file size too big');
            alert('File size too big');
        }
    });
 
    $(document).ready(function() {
        $('.custom_spartan_remove_row').on('click', function() {
            var en = $(this);
            var image_id = en.data('id'); 
            if (confirm("Are you sure you want to delete this image?")) {
                $.ajax({
                    url: "{{route('admin.property.image.delete')}}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        image_id: image_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.status == 'success') {
                            $("#delete-" + image_id).remove();
                            toastr.success('Image deleted successfully!');
                        } else {
                            toastr.error('Failed to delete the image.');
                        }
                    },
                    error: function() {
                        toastr.error('An error occurred while deleting the image.');
                    }
                });
            } 
        });
    });

</script>
@endpush