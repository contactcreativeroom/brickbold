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
                                    <option value="">Property Type</option>
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
                <div class="widget-box-2-- style-2 package">
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
                </div>
            </div>
        </section>
        <!-- section-faq -->
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
@endpush
