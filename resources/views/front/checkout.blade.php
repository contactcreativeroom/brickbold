@extends('front.layouts.app')
@section('content')
    <!-- flat-title -->
    <section class="flat-title ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-inner ">
                        <ul class="breadcrumb">
                            <li><a class="home fw-6 text-color-3" href="{{ route('home') }}">Home</a></li>
                            <li><a class="home fw-6 text-color-3" href="{{ route('packages') }}">Packages</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /flat-title -->
    
    @php
        $gst = ($row->grand_price / 118) * 18;
        $pacPrice = $row->grand_price - $gst;
    @endphp
    <!-- .main-content -->
    <div class="main-content tf-spacing-6 header-fixed custom-pages">

        <section>
            <div class="checkout-page container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center mb-48">
                            <h2 class="title text-anime-wave">Checkout</h2>
                            <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">
                                Review, confirm, and securely place your order.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="container" class="zui-scroller table-responsive mb-3">
                            <table class="zui-table">
                                <thead>
                                    <tr>
                                        <th class="table-col" >
                                            <h3 class="sub-title  fw-7">{{ $row->name }}</h3>
                                            <div class="title-price mb-3">
                                                <div class="month fw-7 text-color-primary"> <span
                                                        class="text-decoration-line-through">{{ config('constants.CURRENCIES.symbol') . $row->price }}</span>
                                                </div>
                                                <h2 class="position-relative">
                                                    {{ config('constants.CURRENCIES.symbol') . $row->grand_price }}<sup data-bs-toggle="tooltip" data-bs-html="true" title="Price: {{ config('constants.CURRENCIES.symbol') . round($pacPrice, 2) }} <br> 18% GST Included: {{ config('constants.CURRENCIES.symbol') . round($gst, 2) }} "><img src="{{ URL('images/info.png') }}" class="info-sm" height="20" /></sup>
                                                </h2>
                                            </div> 
                                            
                                        </th>
                                        <th class="align-middle">
                                            <div class="text-sub fw-6 ">  
                                                @if (strtoupper(trim($row->type)) != 'BUY')                                         
                                                    <h6 class="mb-2" ><span class="text-color-primary">Post Properties:</span> {{App\Helper\Helper::postProperyNumberShown($row->post_property)}} </h6> 
                                                @else
                                                    <h6 class="mb-2"><span class="text-color-primary">Search:</span> Unlimited </h6> 
                                                @endif                                        
                                                <h6 class="mb-2"><span class="text-color-primary">Contacts:</span> {{$row->unit}} </h6>  
                                                <h6 class="mb-2"><span class="text-color-primary">Days:</span> {{$row->days}} </h6>
                                            </div>
                                        </th>
                                    </tr>
                                    
                                </thead> 
                                <tbody class="d-none1">
                                    @if (isset($row->fields))
                                        @foreach ($row->fields as $key => $field)
                                            <tr>
                                                <td class="zui-sticky-col {{ $key % 2 == 1 ? 'zui-stripe-row' : '' }}">
                                                    {{ $field->heading }}</td>

                                                @php
                                                    $d = $row->fields
                                                        ->where('heading', 'like', $field->heading)
                                                        ->first();
                                                @endphp
                                                <td>
                                                    <strong>
                                                        @if (strtolower($d?->value) == 'yes')
                                                            <img src="{{ URL('images/table-chk.webp') }}" />
                                                        @elseif(strtolower($d?->value) == 'no')
                                                            <img src="{{ URL('images/table-cross.png') }}" />
                                                        @else
                                                            {{ $d?->value }}
                                                        @endif
                                                    </strong>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class=" tf-sidebar sticky-sidebar pt-0 mb-3">
                            <div class="zui-scroller p-4 pt-5">
                                <div class="card-body">
                                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x tax-section mb-3">
                                        <li class="list-group-item d-flex">
                                            <span>Package Price: </span> &nbsp;<span class="ml-auto">{{ config('constants.CURRENCIES.symbol') . $row->price }}</span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Discount ({{$row->discount }}%): </span> &nbsp;<span class="ml-auto">{{ config('constants.CURRENCIES.symbol') . round(($row->price/100*$row->discount), 2) }}</span>
                                        </li>
                                        {{-- <li class="list-group-item d-flex">
                                            <span>Net Price: </span> &nbsp;<span class="ml-auto">{{ config('constants.CURRENCIES.symbol') . $row->grand_price }}</span>
                                        </li> --}}
                                    {{-- </ul>
                                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x tax-section"> --}}
                                        <li class="list-group-item d-flex">
                                            <span>Subtotal: </span> &nbsp;<span class="ml-auto">{{ config('constants.CURRENCIES.symbol') . round($pacPrice, 2) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Total GST (+18%): </span> &nbsp;<span class="ml-auto">{{ config('constants.CURRENCIES.symbol') . round($gst, 2) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Grand Total: </span> &nbsp;<span class="ml-auto"><strong>{{ config('constants.CURRENCIES.symbol') . $row->grand_price }}</strong></span>
                                        </li> 
                                    </ul>
                                    @auth('user')
                                        <button class="tf-btn bg-color-primary w-full mt-3" onclick="payNow('{{ $row->id }}')">Buy Now</button> 
                                    @endauth
                                    @guest('user')
                                        <a href="{{ route('login', ['redirect' => route('packages')]) }}" class="tf-btn bg-color-primary w-full mt-3">Buy Now</a>                                        
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            fetch(site_url + '/create-order', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        package_id: packageId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        window.location.href = data.redirect_url;
                        return;
                    }
                    
                    const options = {
                        "key": data.key,
                        "amount": data.amount,
                        "currency": "{{ config('constants.CURRENCIES.name') }}",
                        "name": data.name,
                        "description": data.description,
                        "order_id": data.api_order_id,
                        "handler": function(response) {
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
            fetch(site_url + '/verify-payment', {
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
                        window.location.href = "{{ route('user.properties') }}";
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
