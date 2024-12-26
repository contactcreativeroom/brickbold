@extends('user.layouts.app')
@section('content')

    <div class="page-layout">
        @include('user.layouts.sidebar')
        <!-- .main-content -->
        <div class="main-content w-100">
            <div class="main-content-inner">
                <div class="button-show-hide show-mb">
                    <span class="body-1">Show Dashboard</span>
                </div>
                <form class="box-info-property" action="{{ route('user.property.post') }}" method="post" enctype='multipart/form-data'>
                @csrf                    
                    <div class="widget-box-2 mb-20">
                        <h5 class="title">Information</h5>
                        
                        <fieldset class="box box-fieldset">
                            <label for="title">
                                Title: <span>*</span>
                            </label>
                            <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Title" name="title" value="@if(old('title')!=null){{old('title')}}@elseif(!empty($row->title)){{$row->title}}@endif">
                            @if($errors->has('title'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </span>
                            @endif
                        </fieldset>
                        <fieldset class="box box-fieldset">
                            <label for="desc">Description:</label>
                            <textarea class="textarea" placeholder="Decscription" name="description">@if(old('description')!=null){{old('description')}}@elseif(!empty($row->description)){{$row->description}}@endif</textarea>
                        </fieldset>
                        
                        <div class="box box-fieldset">
                            <label for="location">Location:<span>*</span></label>
                            <div class="box-ip">
                                <input type="text" id="__address" class="form-control {{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" placeholder="Location" value="@if(old('location')!=null){{old('location')}}@elseif(!empty($row->location)){{$row->location}}@endif">

                                <a href="javascript:void(0)" class="btn-location"><i class="icon  icon-location"></i></a>
                                @if($errors->has('location'))
                                    <span class="invalid-feedback">
                                        {{ $errors->first('location') }}
                                    </span>
                                @endif

                                <input type="hidden" id="__address_saved" value="@if(!empty($row->location)){{$row->location}}@elseif(old('location')!=null){{old('location')}}@endif" />

                                <input type="hidden" id="__address_lat" name="latitude" value="@if(!empty($row->latitude)){{$row->latitude}}@elseif(old('latitude')!=null){{old('latitude')}}@endif" />

                                <input type="hidden" id="__address_lng" name="longitude" value="@if(!empty($row->longitude)){{$row->longitude}}@elseif(old('longitude')!=null){{old('longitude')}}@endif" />

                                <input type="hidden" id="__address_place_id" name="place_id" value="@if(!empty($row->place_id)){{$row->place_id}}@elseif(old('place_id')!=null){{old('place_id')}}@endif" />	

                                <input type="hidden" id="__address_state_code" name="state_code" value="@if(!empty($row->state_code)){{$row->state_code}}@elseif(old('state_code')!=null){{old('state_code')}}@endif" />

                                <input type="hidden" id="__address_country" name="address_country" value="@if(!empty($row->address_country)){{$row->address_country}}@elseif(old('address_country')!=null){{old('address_country')}}@endif" />

                                <input type="hidden" id="__address_country_code" name="address_country_code" value="@if(!empty($row->address_country_code)) {{$row->address_country_code}}@elseif(old('address_country_code')!=null){{old('address_country_code')}}@endif" />
                            </div>

                            {{-- <iframe class="map"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d135905.11693909427!2d-73.95165795400088!3d41.17584829642291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1727094281524!5m2!1sen!2s"
                                width="100%" height="456" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                        </div> 
                        <div class="box grid-layout-3 gap-30">
                            <fieldset class="box-fieldset">
                                <label for="zip">
                                    Province/State:<span>*</span>
                                </label>
                                <input type="text" class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" placeholder="Enter property zip code" value="@if(old('state')!=null){{old('state')}}@elseif(!empty($row->state)){{$row->state}}@endif" id="__address_state">
                                @if($errors->has('state'))
									<span class="invalid-feedback">
										{{ $errors->first('state') }}
									</span>
								@endif
                            </fieldset> 
 
                            <fieldset class="box-fieldset">
                                <label for="City">
                                    City:<span>*</span>
                                </label>
                                <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" placeholder="Enter property zip code" value="@if(old('city')!=null){{old('city')}}@elseif(!empty($row->city)){{$row->city}}@endif" id="__address_city">
                                @if($errors->has('city'))
									<span class="invalid-feedback">
										{{ $errors->first('city') }}
									</span>
								@endif
                            </fieldset> 
                            <fieldset class="box-fieldset">
                                <label for="zip">
                                    Zip Code:<span>*</span>
                                </label>
                                <input type="text" class="form-control {{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" placeholder="Enter property zip code" value="@if(old('zip_code')!=null){{old('zip_code')}}@elseif(!empty($row->zip_code)){{$row->zip_code}}@endif" id="__address_postcode" >
                                @if($errors->has('zip_code'))
									<span class="invalid-feedback">
										{{ $errors->first('zip_code') }}
									</span>
								@endif
                            </fieldset> 
                        </div> 
                        <div class="box grid-layout-3 gap-30">
                            <fieldset class="box-fieldset">
                                <label for="price">
                                    Availability:<span>*</span>
                                </label>
                                <select class="form-control form-select nice-select {{ $errors->has('availability') ? ' is-invalid' : '' }}" name="availability">
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
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="price">
                                    Ownership:<span>*</span>
                                </label>
                                <select class="form-control form-select nice-select {{ $errors->has('ownership') ? ' is-invalid' : '' }}" name="ownership">
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
                            </fieldset>
                            <fieldset class="box-fieldset">
                            <label for="price">
                                    Age Of Construction:<span>*</span>
                                </label>
                                <select class="form-control form-select nice-select {{ $errors->has('build_year') ? ' is-invalid' : '' }}" name="build_year">
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
                        </fieldset>
                    </div>
                    </div>
                    <div class="widget-box-2 mb-20">
                        <h3 class="title">Price</h3>
                        <div class="box-price-property">
                            <div class="box grid-layout-3 gap-30">
                                <fieldset class="box-fieldset">
                                    <label for="price">
                                        Price:<span>*</span>
                                    </label>
                                    <input type="number" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="@if(old('price')!=null){{old('price')}}@elseif(!empty($row->price)){{$row->price}}@endif">
                                    @if($errors->has('price'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('price') }}
                                        </span>
                                    @endif
                                </fieldset> 
                                <fieldset class="box-fieldset">
                                    <label for="neighborhood">
                                        Is Negotiable:<span>*</span>
                                    </label>
                                    <select class="form-control form-select nice-select {{ $errors->has('is_negotiable') ? ' is-invalid' : '' }}" name="is_negotiable">
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
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="price_detail">
                                        Token/Booking Amount:
                                    </label>
                                    <input type="number" class="form-control" value="@if(old('price_detail')!=null){{old('price_detail')}}@elseif(!empty($row->price_detail)){{$row->price_detail}}@endif" name="price_detail">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="widget-box-2 mb-20">
                        <h3 class="title">Addtional Infomation</h3>
                        <div class="box grid-layout-3 gap-30">
                            <fieldset class="box-fieldset">
                                <label for="property_type">
                                    Property Type:<span>*</span>
                                </label>
                                <select class="form-control form-select nice-select {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="property_type">
                                    <option value="">Select Property Type</option>
                                    @foreach (config('constants.TYPE') as $key=>$value)
                                        <option value="{{$key}}" @if(old('type')!=null && old('type')==$key) selected @elseif(!empty($row) && $row->type==$key) selected @endif >{{$value}}</option>
                                    @endforeach                                 
                                </select>
                                @if($errors->has('type'))
									<span class="invalid-feedback">
										{{ $errors->first('type') }}
									</span>
								@endif
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="property_detail">
                                    Property Detail:<span>*</span>
                                </label>
                                <select class="form-control form-select nice-select {{ $errors->has('property_detail') ? ' is-invalid' : '' }}" name="property_detail" id="property_detail">
                                    <option value="">Select Property Detail</option>
                                    @foreach (config('constants.PROPERTY_DETAIL') as $key=>$value)
                                        <option value="{{$key}}" @if(old('property_detail')!=null && old('property_detail')==$key) selected @elseif(!empty($row) && $row->property_detail==$key) selected @endif >{{$value}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('property_detail'))
									<span class="invalid-feedback">
										{{ $errors->first('property_detail') }}
									</span>
								@endif
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="for_type">
                                    Property Status:<span>*</span>
                                </label>
                                <select class="form-control form-select nice-select {{ $errors->has('for_type') ? ' is-invalid' : '' }}" name="for_type">
                                    @foreach (config('constants.FOR_TYPE') as $key=>$value)
                                        <option value="{{$key}}" @if(old('for_type')!=null && old('for_type')==$key) selected @elseif(!empty($row) && $row->for_type==$key) selected @endif >{{$value}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('for_type'))
									<span class="invalid-feedback">
										{{ $errors->first('for_type') }}
									</span>
								@endif
                            </fieldset>
                        </div>
                        
                        <div class="box grid-layout-3 gap-30">
                            <fieldset class="box-fieldset">
                                <label for="size">
                                    Size (SqFt):<span>*</span>
                                </label>
                                <input type="text" class="form-control {{ $errors->has('plot_area') ? ' is-invalid' : '' }}" name="plot_area" value="@if(old('plot_area')!=null){{old('plot_area')}}@elseif(!empty($row->plot_area)){{$row->plot_area}}@endif">
                                @if($errors->has('plot_area'))
									<span class="invalid-feedback">
										{{ $errors->first('plot_area') }}
									</span>
								@endif
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="builtup">
                                    Builtup Area (SqFt):<span>*</span>
                                </label>
                                <input type="text" class="form-control {{ $errors->has('builtup_area') ? ' is-invalid' : '' }}" name="builtup_area" value="@if(old('builtup_area')!=null){{old('builtup_area')}}@elseif(!empty($row->builtup_area)){{$row->builtup_area}}@endif">
                                @if($errors->has('builtup_area'))
									<span class="invalid-feedback">
										{{ $errors->first('builtup_area') }}
									</span>
								@endif
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="carpet">
                                    Carpet Area (SqFt):<span>*</span>
                                </label>
                                <input type="text" class="form-control {{ $errors->has('carpet_area') ? ' is-invalid' : '' }}" name="carpet_area" value="@if(old('carpet_area')!=null){{old('carpet_area')}}@elseif(!empty($row->carpet_area)){{$row->carpet_area}}@endif">
                                @if($errors->has('carpet_area'))
									<span class="invalid-feedback">
										{{ $errors->first('carpet_area') }}
									</span>
								@endif
                            </fieldset>
                        </div>
                        <div class="box grid-layout-4 gap-30"> 
                            <fieldset class="box-fieldset">
                                <label for="rom">
                                    Bedroom:<span>*</span>
                                </label>
                                <select class="form-select form-control nice-select {{ $errors->has('bedroom') ? ' is-invalid' : '' }}" id="bedroom" name="bedroom">
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
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="Bathroom">
                                    Bathroom:<span>*</span>
                                </label>
                                <select class="form-select form-control nice-select {{ $errors->has('bathroom') ? ' is-invalid' : '' }}" id="bathroom" name="bathroom">
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
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="Balcony">
                                    Balcony:
                                </label>
                                <select class="form-select form-control nice-select" id="balcony" name="balcony">
                                    <option value="">Select Balcony</option>
                                    @foreach (config('constants.LOOP5') as $value)
                                        <option value="{{$value}}" @if(old('balcony')!=null && old('balcony')==$value) selected @elseif(!empty($row) && $row->balcony==$value) selected @endif >{{$value}}</option>
                                    @endforeach
                                </select>

                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="floors">
                                    Floor:
                                </label>
                                <select class="form-select form-control nice-select" id="floors" name="floors">
                                    <option value="">Select Floors</option>
                                    @foreach (config('constants.LOOP5') as $value)
                                        <option value="{{$value}}" @if(old('floors')!=null && old('floors')==$value) selected @elseif(!empty($row) && $row->floors==$value) selected @endif >{{$value}}</option>
                                    @endforeach
                                </select>
                            </fieldset> 
                        </div>
                        <div class="box grid-layout-3 gap-30"> 
                            <fieldset class="box-fieldset">
                                <label for="Facing">
                                    Facing:<span>*</span>
                                </label>
                                <select class="form-select form-control nice-select {{ $errors->has('facing') ? ' is-invalid' : '' }}" id="facing" name="facing">
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
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="garages-size">
                                    Furnished Detail:<span>*</span>
                                </label>
                                <select class="form-select form-control nice-select {{ $errors->has('furnished') ? ' is-invalid' : '' }}" id="furnished" name="furnished">
                                    <option value="">Select Furnished</option>
                                    @foreach (config('constants.FURNISHED_DETAIL') as $key=>$value)
                                        <option value="{{$value}}" @if(old('furnished')!=null && old('furnished')==$value) selected @elseif(!empty($row) && $row->furnished==$value) selected @endif >{{$value}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('furnished'))
									<span class="invalid-feedback">
										{{ $errors->first('furnished') }}
									</span>
								@endif
                            </fieldset>
                            <fieldset class="box-fieldset">
                                <label for="year">
                                    Approved By:
                                </label>
                                <select class="form-select form-control nice-select" id="approved_by" name="approved_by">
                                    <option value="">Select Approved By</option>
                                    @foreach (config('constants.APPROVED_BY') as $key=>$value)
                                        <option value="{{$value}}" @if(old('approved_by')!=null && old('approved_by')==$value) selected @elseif(!empty($row) && $row->approved_by==$value) selected @endif >{{$value}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    
                    <div class="widget-box-2 mb-20">
                        <h5 class="title">Addtional Room:</h5>
                        <div class="box-amenities-property">
                            <div class="box-amenities"> 
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item  style-1  ">
                                        <label>
                                            <span class="text-4">Puja Room</span>
                                            <input type="checkbox" name="additional[]" id="PujaRoom" value="Puja Room" @if(old('additional')!=null && in_array('Puja Room', old('additional'))) checked @elseif(!empty($row) && in_array('Puja Room', explode(',', $row->additional))) checked @endif >
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Servent Room</span>
                                            <input type="checkbox" name="additional[]" id="ServentRoom" value="Servent Room" @if(old('additional')!=null && in_array('Servent Room', old('additional'))) checked @elseif(!empty($row) && in_array('Servent Room', explode(',', $row->additional))) checked @endif
                                            >
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="box-amenities"> 
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Study Room</span>
                                            <input type="checkbox" name="additional[]" id="StudyRoom" value="Study Room" @if(old('additional')!=null && in_array('Study Room', old('additional'))) checked @elseif(!empty($row) && in_array('Study Room', explode(',', $row->additional))) checked @endif >
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Gym Room</span>
                                            <input type="checkbox" name="additional[]" id="GymRoom" value="Gym Room" @if(old('additional')!=null && in_array('Gym Room', old('additional'))) checked @elseif(!empty($row) && in_array('Gym Room', explode(',', $row->additional))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset> 
                                </div>
                            </div>
                            <div class="box-amenities">
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Store Room</span>
                                            <input type="checkbox" name="additional[]" id="StoreRoom" value="Store Room" @if(old('additional')!=null && in_array('Store Room', old('additional'))) checked @elseif(!empty($row) && in_array('Store Room', explode(',', $row->additional))) checked @endif
                                            >
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Theater Room</span>
                                            <input type="checkbox" name="additional[]" id="TheaterRoom" value="Theater Room" @if(old('additional')!=null && in_array('Theater Room', old('additional'))) checked @elseif(!empty($row) && in_array('Theater Room', explode(',', $row->additional))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>  
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="widget-box-2 mb-20">
                        <h5 class="title">Amenities</h5>
                        <div class="box-amenities-property">
                            <div class="box-amenities">
                                <div class="title-amenities fw-6 text-color-heading text-1">Home safety:</div>
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item  style-1  ">
                                        <label>
                                            <span class="text-4">Smoke alarm</span>
                                            <input type="checkbox" name="amenities[]" value="Smoke alarm" @if(old('amenities')!=null && in_array('Smoke alarm', old('amenities'))) checked @elseif(!empty($row) && in_array('Smoke alarm', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Self check-in with lockbox</span>
                                            <input type="checkbox" name="amenities[]" value="Self check-in with lockbox" @if(old('amenities')!=null && in_array('Self check-in with lockbox', old('amenities'))) checked @elseif(!empty($row) && in_array('Self check-in with lockbox', explode(',', $row->amenities))) checked @endif >
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Carbon monoxide alarm</span>
                                            <input type="checkbox" name="amenities[]" value="Carbon monoxide alarm" @if(old('amenities')!=null && in_array('Carbon monoxide alarm', old('amenities'))) checked @elseif(!empty($row) && in_array('Carbon monoxide alarm', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Security cameras</span>
                                            <input type="checkbox" name="amenities[]" value="Security cameras" @if(old('amenities')!=null && in_array('Security cameras', old('amenities'))) checked @elseif(!empty($row) && in_array('Security cameras', explode(',', $row->amenities))) checked @endif >
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Fingerprint access</span>
                                            <input type="checkbox" name="amenities[]" value="Fingerprint access" @if(old('amenities')!=null && in_array('Fingerprint access', old('amenities'))) checked @elseif(!empty($row) && in_array('Fingerprint access', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="box-amenities">
                                <div class="title-amenities fw-6 text-color-heading text-1">Bedroom</div>
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Hangers</span>
                                            <input type="checkbox" name="amenities[]" value="Hangers" @if(old('amenities')!=null && in_array('Hangers', old('amenities'))) checked @elseif(!empty($row) && in_array('Hangers', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Extra pillows & blankets</span>
                                            <input type="checkbox" name="amenities[]" value="Extra pillows & blankets" @if(old('amenities')!=null && in_array('Extra pillows & blankets', old('amenities'))) checked @elseif(!empty($row) && in_array('Extra pillows & blankets', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Bed linens</span>
                                            <input type="checkbox" name="amenities[]" value="Bed linens" @if(old('amenities')!=null && in_array('Bed linens', old('amenities'))) checked @elseif(!empty($row) && in_array('Bed linens', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">TV with standard cable</span>
                                            <input type="checkbox" name="amenities[]" value="TV with standard cable" @if(old('amenities')!=null && in_array('TV with standard cable', old('amenities'))) checked @elseif(!empty($row) && in_array('TV with standard cable', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Air Conditioner</span>
                                            <input type="checkbox" name="amenities[]" value="Air Conditioner" @if(old('amenities')!=null && in_array('Air Conditioner', old('amenities'))) checked @elseif(!empty($row) && in_array('Air Conditioner', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="box-amenities">
                                <div class="title-amenities fw-6 text-color-heading text-1">Kitchen:</div>
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Dishwasher</span>
                                            <input type="checkbox" name="amenities[]" value="Dishwasher" @if(old('amenities')!=null && in_array('Dishwasher', old('amenities'))) checked @elseif(!empty($row) && in_array('Dishwasher', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Microwave</span>
                                            <input type="checkbox" name="amenities[]" value="Microwave" @if(old('amenities')!=null && in_array('Microwave', old('amenities'))) checked @elseif(!empty($row) && in_array('Microwave', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1">
                                        <label>
                                            <span class="text-4">Coffee maker</span>
                                            <input type="checkbox" name="amenities[]" value="Coffee maker" @if(old('amenities')!=null && in_array('Coffee maker', old('amenities'))) checked @elseif(!empty($row) && in_array('Coffee maker', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1">
                                        <label>
                                            <span class="text-4"> Piped Gas</span>
                                            <input type="checkbox" name="amenities[]" value="Piped Gas" @if(old('amenities')!=null && in_array('Piped Gas', old('amenities'))) checked @elseif(!empty($row) && in_array('Piped Gas', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1">
                                        <label>
                                            <span class="text-4">Ro Water System</span>
                                            <input type="checkbox" name="amenities[]" value="Ro Water System" @if(old('amenities')!=null && in_array('Ro Water System', old('amenities'))) checked @elseif(!empty($row) && in_array('Ro Water System', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>     
                                    
                                </div>
                            </div>
                        </div>

                        <div class="box-amenities-property mt-5">
                            <div class="box-amenities">
                                <div class="title-amenities fw-6 text-color-heading text-1">More:</div>
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item  style-1  ">
                                        <label>
                                            <span class="text-4">Lift</span>
                                            <input type="checkbox" name="amenities[]" value="Lift" @if(old('amenities')!=null && in_array('Lift', old('amenities'))) checked @elseif(!empty($row) && in_array('Lift', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Swimming Pool</span>
                                            <input type="checkbox" name="amenities[]" value="Swimming Pool" @if(old('amenities')!=null && in_array('Swimming Pool', old('amenities'))) checked @elseif(!empty($row) && in_array('Swimming Pool', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset> 
                                </div>
                            </div>
                            <div class="box-amenities"> 
                                <div class="title-amenities fw-6 text-color-heading text-1"></div>
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Internet/Wifi Community</span>
                                            <input type="checkbox" name="amenities[]" value="Internet/Wifi Community" @if(old('amenities')!=null && in_array('Internet/Wifi Community', old('amenities'))) checked @elseif(!empty($row) && in_array('Internet/Wifi Community', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Laundry Service</span>
                                            <input type="checkbox" name="amenities[]" value="Laundry Service" @if(old('amenities')!=null && in_array('Laundry Service', old('amenities'))) checked @elseif(!empty($row) && in_array('Laundry Service', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset> 
                                </div>
                            </div>
                            <div class="box-amenities"> 
                                <div class="title-amenities fw-6 text-color-heading text-1"></div>
                                <div class="list-amenities">
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Car Parking Facility</span>
                                            <input type="checkbox" name="amenities[]" value="Car Parking Facility" @if(old('amenities')!=null && in_array('Car Parking Facility', old('amenities'))) checked @elseif(!empty($row) && in_array('Car Parking Facility', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <span class="text-4">Visitors Parking</span>
                                            <input type="checkbox" name="amenities[]" value="Visitors Parking" @if(old('amenities')!=null && in_array('Visitors Parking', old('amenities'))) checked @elseif(!empty($row) && in_array('Visitors Parking', explode(',', $row->amenities))) checked @endif>
                                            <span class="btn-checkbox"></span>
                                        </label>
                                    </fieldset>    
                                    
                                </div>
                            </div>
                        </div>

                    </div>
 
                    <div class="widget-box-2 mb-20">
                        <h3 class="title">Videos</h3>
                        
                            <fieldset class="box-fieldset">
                                <label for="video" class="text-btn">Video URL:</label>
                                <input type="text" class="form-control" placeholder="Youtube url" name="video_link" value="@if(old('video_link')!=null){{old('video_link')}}@elseif(!empty($row->video_link)){{$row->video_link}}@endif">
                            </fieldset>
                         
                    </div>
                    <div class="widget-box-2 mb-20">
                        <h3 class="title">Property images</h3>
                        <div class="uploadfile">
                            <div id="images" class="row"></div>
                        </div>                         
                    </div>
                    @if (isset($row->images))                    
                        <div class="mb-48">
                            <h5 class="mb-3">Saved Images List</h5>
                            <div class="box-img-upload"> 
                                @foreach($row->images as $imageKey => $imageVal)
                                <div class="item-upload file-delete" id="{{ 'delete-'.$imageVal->id}}">
                                    <img src="{{ url('storage/property/'.$row->id.'/'.$imageVal->image)}}" alt="img">
                                    <span class="icon icon-trashcan1 custom_spartan_remove_row" data-id="{{$imageVal->id}}" ></span>
                                </div>
                                {{-- <div class="col-3 spartan_item_wrapper" data-spartanindexrow="{{ $imageKey.'_custom' }}"
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
                                </div> --}}
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (isset($row->id))   
                        <input type="hidden" name="id" value="{{$row->id}}">
                    @endif
                    <div class="box-btn">
                        <button type="submit" class="tf-btn bg-color-primary pd-13">{{empty($row->id)?'Add Property' : 'Update Property';}}</button>
                        <button href="#" class="tf-btn style-border pd-10">Save & Preview</button>
                    </div>
                </form>
                @include('user.layouts.footer')
                
            </div>
            <div class="overlay-dashboard"></div>

        </div><!-- /.main-content -->

    
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
                    url: "{{route('user.property.image.delete')}}",
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
