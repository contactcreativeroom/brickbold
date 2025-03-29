@extends('front.layouts.app')
@section('content')
    <!-- flat-title -->
    <section class="flat-title ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-inner ">
                        <ul class="breadcrumb">
                            <li><a class="home fw-6 text-color-3" href="{{route('home')}}">Home</a></li>
                            <li>packages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /flat-title -->

    <!-- .main-content -->
    <div class="main-content tf-spacing-6 header-fixed custom-pages">
        <!-- section-faq -->
        <section class="section-faq ">
            <div class="container">
                {!! $msg !!}
                <div class="card-header  mb-48">
                    <h5 class="card-title mb-0">Search Filters</h5>
                    <form action="{{ route('packages') }}" method="get" enctype='multipart/form-data'>
                        <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0 g-6 mb-3">
                            
                            <div class="col-md-3 user_plan">
                                <select  class="form-select nice-select" name="profile">
                                    @auth('user') <!-- Checks if a user is authenticated using the 'user' guard -->
                                        @php
                                            $user = Auth::guard('user')->user();
                                        @endphp

                                        @if(!empty($user->user_type))  
                                            <option value="{{ $user->user_type }}">{{ $user->user_type }}</option>
                                        @else
                                            {{-- <option value="">Select Profile</option> --}}
                                        @endif
                                    @else
                                        {{-- <option value="">Select Profile </option> --}}
                                        @foreach (config('constants.USER_TYPE') as $key=>$value)
                                            <option value="{{$value}}" {{ old('profile', request('profile')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                        @endforeach
                                    @endauth
                                </select>
                            </div>
                            <div class="col-md-3 user_role">
                                <select  class="form-select nice-select" name="type">
                                    @foreach (config('constants.PACKAGE_TYPE') as $key=>$value)
                                        <option value="{{$value}}" {{ old('type', request('type')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 user_role">
                                <select class="form-control form-select nice-select" name="property_type">
                                    @foreach (config('constants.TYPE') as $key=>$value)
                                        <option value="{{$value}}" {{ old('property_type', request('property_type')) == $value ? 'selected' : '' }}  >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 user_role">
                                <div class="bot flex items-center">
                                    <button class="tf-btn bg-color-primary pd-3 me-3" type="submit" >Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div> 
                {{-- <div class="widget-box-2-- style-2 package">
                    <div class="row">
                        @auth('user') 
                            @php
                                $user = Auth::guard('user')->user();
                            @endphp

                            @if(empty($user->user_type))  
                                <div class="text text-center">Update your "Role" in <a href="{{route('user.profile')}}" class="text-color-primary">Profile section</a> first.</div>
                            @endif
                        
                        @endauth

                        @foreach ($rows as $row)
                            <div class="package-col col-xl-3 mb-3">
                                <div class="flat-pricing">
                                    <div class="box box-style">
                                        <h3 class="sub-title  fw-7">{{$row->name}}</h3>
                                        <p class="text-sub fw-6 ">Upgrade your {{$row->profile}} account to the {{$row->name}} package.</p>
                                        <div class="title-price flex">
                                            <h2 class="text-color-primary">{{ config('constants.CURRENCIES.symbol'). $row->grand_price}} </h2>
                                            <div class="month fw-7"> / <span class="text-decoration-line-through">{{ config('constants.CURRENCIES.symbol'). $row->price}}</span></div>
                                        </div>
                                        <p class="texts">Get benefits for {{$row->property_type}} {{$row->type}} properties account for {{$row->days}} days.</p>
                                        <ul class="check">
                                            @foreach ($row->fields as $field)
                                                <li class="flex-three">{{ $field->heading}}: {{ $field->value}}</li>
                                            @endforeach 
                                        </ul>
                                        <div >
                                        @auth('user')
                                            <button class="tf-btn bg-color-primary pd-20" onclick="payNow('{{ $row->id }}')">Buy</button> 
                                        @endauth
                                        @guest('user')
                                            <a href="{{route('login')}}" class="tf-btn bg-color-primary pd-20">Buy</a>                                        
                                        @endguest
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        @endforeach 
                        <div class="col-xl-12">
                        {{ $rows->links('vendor.pagination.frontend-bootstrap-4') }}
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- section-faq -->
        {{-- <h2 class="accordion-header text-center mb-30">
            <a href="#" class="collapsed tf-btn style-border package-buy-btn" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Compare Packages <i class="icon-CaretDown"></i></a> 
        </h2> --}}

        <!-- section-compare -->
        {{-- <section id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#compare-packages"> --}}
        <section >
             <div id="container" class="zui-scroller table-responsive container">
                <table class="zui-table">
                    <thead>
                        <tr>
                            {{-- <th class="zui-sticky-col">&nbsp;</th> --}}
                            <th class="zui-sticky-col align-middle">
                                <h4 class="text-color-primary">Advertising Packages</h4>
                                <p class="text-sub fw-6">Here are Packages that will best suit your need.</p>
                            </th>
                            @foreach ($rows as $k=>$row)
                            @php
                                $gst = $row->grand_price/118*18 ;
                                $pacPrice = $row->grand_price - $gst;
                            @endphp
                            <th class="table-col {{ ($k%2==0)? 'pk-bg-red' : ''}}">
                                <h3 class="sub-title  fw-7">{{$row->name}}</h3>
                                {{-- <p class="text-sub fw-6 ">Upgrade your {{$row->profile}} account to the {{$row->name}} package.</p> --}}
                                <div class="title-price mb-3">
                                    <div class="month fw-7 text-color-primary"> <span class="text-decoration-line-through">{{ config('constants.CURRENCIES.symbol'). $row->price}}</span></div>
                                    <h2 class="position-relative">
                                        {{ config('constants.CURRENCIES.symbol'). $row->grand_price}}<sup data-bs-toggle="tooltip" data-bs-html="true" title="Price: {{ config('constants.CURRENCIES.symbol').round($pacPrice,2) }} <br> 18% GST Included: {{ config('constants.CURRENCIES.symbol').round($gst,2) }} "><img src="{{URL('images/info.png')}}" class="info-sm" height="20" /></sup>
                                    </h2>    
                                </div>
                                {{-- <p class="">Get benefits for {{$row->property_type}} {{$row->type}} properties account for {{$row->days}} days.</p> --}}
                                @auth('user')
                                    <button class="tf-btn bg-color-primary  package-buy-btn" onclick="payNow('{{ $row->id }}')">Buy</button> 
                                @endauth
                                @guest('user')
                                    <a href="{{ route('login', ['redirect' => route('packages')]) }}" class="tf-btn bg-color-primary package-buy-btn">Buy</a>                                        
                                @endguest
                            </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($rows[0]->fields))
                            @foreach ($rows[0]->fields as $key => $field)
                                <tr>
                                    <td class="zui-sticky-col {{ ($key%2==1)? 'zui-stripe-row' : ''}}">{{$field->heading}}</td>                                   
                                    @foreach ($rows as $row)
                                        @php
                                            $d= $row->fields->where('heading', 'like', $field->heading)->first();
                                        @endphp
                                        <td><strong>
                                        @if (strtolower($d?->value) == 'yes')
                                            <img src="{{URL('images/table-chk.webp')}}" />
                                        @elseif(strtolower($d?->value) == 'no')
                                            <img src="{{URL('images/table-cross.png')}}" />
                                        @else
                                            {{$d?->value}}
                                        @endif 
                                        </strong></td>
                                    @endforeach  
                                </tr>
                            @endforeach  
                        @endif                                                
                    </tbody>
                </table>
            </div>
        </section>
        <!-- section-compare -->
    </div>
    <!-- /main-content -->
@endsection

@push('scripts') 
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function payNow(packageId) {
        fetch(site_url+'/create-order', { 
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ package_id: packageId })
        })
        .then(response => response.json())
        .then(data => {
            const options = {
                "key": data.key,
                "amount": data.amount,
                "currency": "{{config('constants.CURRENCIES.name')}}",
                "name": data.name,
                "description": data.description,
                "order_id": data.api_order_id,
                "handler": function (response) {
                    console.log("Razor pay Payment Successful!");
                    verifyPayment(response, data.order_id, packageId);
                },
                "theme": {
                    "color": "#3399cc"
                }
            };

            const rzp = new Razorpay(options);
            rzp.open();
        })
        .catch(error => console.error('Error:', error));
    }

    function verifyPayment(paymentResponse, orderId, packageId) {
        fetch(site_url+'/verify-payment', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ 
                razorpay_payment_id: paymentResponse.razorpay_payment_id,
                razorpay_order_id: paymentResponse.razorpay_order_id,
                razorpay_signature: paymentResponse.razorpay_signature,
                order_id: orderId,
                package_id: packageId
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                toastr.success("Payment verified successfully!", 'Successfull');
                window.location.href = "{{route('user.properties')}}";
            } else {
                toastr.error("Payment verification failed.", 'Error');
            }
        })
        .catch(error => console.error('Error:', error));
    } 
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
@endpush
