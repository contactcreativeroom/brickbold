@extends('user.layouts.app')
@section('content')
    <div class="page-layout">
        @include('user.layouts.sidebar')
        <!-- .main-content -->
        <div class="main-content w-100">
            <div class="main-content-inner style-3">
                <div class="widget-box-2 style-2 package">              
                    @include('user.layouts.verify-email') 
                    <h3 class="title">My Orders</h3>
                    <div class="row">
                        @foreach ($rows as $row)
                        <div class="package-col col-md-6 col-lg-4 mb-30">
                            <div class="flat-pricing h-100">
                                <div class="box box-style h-100 position-relative">
                                    <span class="text-color-primary">#BBORD{{ App\Helper\Helper::formatNumber($row->id)}}</span>
                                    <h5 class="sub-title  fw-7">{{$row->order->package_name}}</h5>
                                    <p class="text-sub fw-6 ">  <span class="text-color-primary">Post Properties:</span> {{$row->post_property}} ,  <span class="text-color-primary">Contacts:</span> {{$row->contacts}} ,  <span class="text-color-primary">Days:</span> {{$row->days}} </p>
                                    <div class="title-price flex">
                                        <h3 class="text-color-primary">{{ config('constants.CURRENCIES.symbol'). $row->order->grand_price}} </h3>
                                        <div class="month fw-7"> / <span class="text-decoration-line-through">{{ config('constants.CURRENCIES.symbol'). $row->order->package_price}}</span></div>
                                    </div> 
                                    <p class="texts mb-3 pb-3">From <span class="text-color-primary">{{ App\Helper\Helper::formatStringDate($row->start_date)}} </span> to <span class="text-color-primary">{{ App\Helper\Helper::formatStringDate($row->end_date)}} </span></p>
                                    {{-- <ul class="check">
                                        @php
                                            $fields = unserialize($row->order->package_value);                                            
                                        @endphp
                                        @foreach ($fields as $fieldKey=>$fieldVal)
                                        <li class="flex-three">{{ $fieldKey}}: {{ $fieldVal}}</li>
                                        @endforeach 
                                    </ul>  --}}
                                    {{-- <div class="button-pricing">
                                        <select class="form-control nice-select tf-btn bg-color-primary pd-20 text-white" id="property_id" name="property_id">
                                            <option value="">Select Property</option>
                                            @foreach($properties as $value)
                                                <option value="{{$value->id}}" @if(!empty($row) && $row->property_id==$value->id) selected @endif >{{$value->title}}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    {{-- @if(now()->greaterThan($row->created_at->addDays($row->days))) --}}
                                    @if(now()->greaterThan($row->end_date))
                                        <div class="ribbon">Expired</div>
                                    @else
                                        <div class="ribbon active">Active</div>
                                    @endif
                                    
                                    <span class="badge text-bg-danger float-end mb-3">
                                        <a href="{{ route('user.package.invoice.download', ['orderid' => $row->id])}}" target="_blank" class="text-white download-invoice-btn">View Invoice</a>
                                    </span>
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
