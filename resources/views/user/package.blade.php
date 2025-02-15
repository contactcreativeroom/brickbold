@extends('user.layouts.app')
@section('content')
    <div class="page-layout">
        @include('user.layouts.sidebar')
        <!-- .main-content -->
        <div class="main-content w-100">
            <div class="main-content-inner style-3">  
                <div class="button-show-hide show-mb">
                    <span class="body-1">Show Dashboard</span>
                </div>
                <div class="widget-box-2 style-2 package">              
                    @include('user.layouts.verify-email') 
                    <h3 class="title">My Package</h3>
                    <div class="row">
                        @foreach ($rows as $row)
                        <div class="package-col col-lg-4 mb-30">
                            <div class="flat-pricing h-100">
                                <div class="box box-style h-100">
                                    
                                    <h3 class="sub-title  fw-7">{{$row->order->package_name}}</h3>
                                    <p class="text-sub fw-6 "> <span class="text-color-primary">Post Properties:</span> {{$row->post_property}} ,  <span class="text-color-primary">Contacts:</span> {{$row->contacts}} ,  <span class="text-color-primary">Days:</span> {{$row->days}} </p>
                                    <div class="title-price flex">
                                        <h2 class="text-color-primary">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->order->grand_price)}} </h2>
                                        <div class="month fw-7"> / <span class="text-decoration-line-through">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->order->package_price)}}</span></div>
                                    </div> 
                                    <p class="texts">From <span class="text-color-primary">{{ App\Helper\Helper::formatStringDate($row->created_at)}} </span> to <span class="text-color-primary">{{ App\Helper\Helper::formatStringDate($row->created_at->addDays($row->days)) }} </span></p>
                                    <ul class="check">
                                        @php
                                            $fields = unserialize($row->order->package_value);                                            
                                        @endphp
                                        @foreach ($fields as $fieldKey=>$fieldVal)
                                        <li class="flex-three">{{ $fieldKey}}: {{ $fieldVal}}</li>
                                        @endforeach 
                                    </ul> 
                                    {{-- <div class="button-pricing">
                                        <select class="form-control nice-select tf-btn bg-color-primary pd-20 text-white" id="property_id" name="property_id">
                                            <option value="">Select Property</option>
                                            @foreach($properties as $value)
                                                <option value="{{$value->id}}" @if(!empty($row) && $row->property_id==$value->id) selected @endif >{{$value->title}}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach  
                        <div class="col-xl-12">
                        {{ $rows->links('vendor.pagination.frontend-bootstrap-4') }}
                        </div>
                    </div>
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
