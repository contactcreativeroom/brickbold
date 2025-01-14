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
                    <h3 class="title">My Package</h3>
                    <div class="row">
                        @foreach ($rows as $row)
                        <div class="package-col col-xl-4 mb-30">
                            <div class="flat-pricing">
                                <div class="box box-style">
                                    <h3 class="sub-title  fw-7">{{$row->package_name}}</h3>
                                    <p class="text-sub fw-6 "> <span class="text-color-primary">Post Properties:</span> {{$row->post_property}} ,  <span class="text-color-primary">Contacts:</span> {{$row->contacts}} ,  <span class="text-color-primary">Days:</span> {{$row->days}} </p>
                                    <div class="title-price flex">
                                        <h2 class="text-color-primary">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->grand_price)}} </h2>
                                        <div class="month fw-7"> / <span class="text-decoration-line-through">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->package_price)}}</span></div>
                                    </div> 
                                    <p class="texts">From <span class="text-color-primary">{{ App\Helper\Helper::formatStringDate($row->created_at)}} </span> to <span class="text-color-primary">{{ App\Helper\Helper::formatStringDate($row->created_at->addDays($row->days)) }} </span></p>
                                    <ul class="check">
                                        @php
                                            $fields = unserialize($row->package_value);
                                            
                                        @endphp
                                        @foreach ($fields as $fieldKey=>$fieldVal)
                                        <li class="flex-three">{{ $fieldKey}}: {{ $fieldVal}}</li>
                                        @endforeach 
                                    </ul> 
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
