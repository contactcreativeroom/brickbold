@extends('front.layouts.app')
@section('content')
    <!-- flat-title -->
    <section class="flat-title ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-inner ">
                        <ul class="breadcrumb">
                            <li><a class="home fw-6 text-color-3" href="index.html">Home</a></li>
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
                                    <option value="">Select Profile </option>
                                    @foreach (config('constants.USER_TYPE') as $key=>$value)
                                        <option value="{{$value}}" {{ old('profile', request('profile')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 user_role">
                                <select  class="form-select nice-select" name="type">
                                    <option value="">Select For </option>
                                    @foreach (config('constants.PACKAGE_TYPE') as $key=>$value)
                                        <option value="{{$value}}" {{ old('type', request('type')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 user_role">
                                <select class="form-control form-select nice-select" name="property_type">
                                    <option value="">Select Property Type</option>
                                    @foreach (config('constants.TYPE') as $key=>$value)
                                        <option value="{{$value}}" {{ old('property_type', request('property_type')) == $value ? 'selected' : '' }}  >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 user_role">
                                <div class="bot flex items-center">
                                    <button class="tf-btn bg-color-primary pd-3 me-3" type="submit" >Submit</button>
                                    <a href="{{ route('packages') }}"  class="tf-btn style-border pd-4" >Reset</a>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="widget-box-2-- style-2 package">
                    <div class="row">
                        @foreach ($rows as $row)
                            <div class="package-col col-xl-3">
                                <div class="flat-pricing">
                                    <div class="box box-style">
                                        <h3 class="sub-title  fw-7">{{$row->name}}</h3>
                                        <p class="text-sub fw-6 ">Upgrade your {{$row->profile}} account to the {{$row->name}} package.</p>
                                        <div class="title-price flex">
                                            <h2 class="text-color-primary">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->grand_price)}} </h2>
                                            <div class="month fw-7"> / <span class="text-decoration-line-through">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}</span></div>
                                        </div>
                                        <p class="texts">Get benefits for {{$row->property_type}} {{$row->type}} properties account for {{$row->days}} days.</p>
                                        <ul class="check">
                                            @foreach ($row->fields as $field)
                                                <li class="flex-three">{{ $field->heading}}: {{ $field->value}}</li>
                                            @endforeach 
                                        </ul>
                                        <div class="button-pricing">
                                            <button class="btn btn-primary" onclick="payNow('{{ $row->id }}')">Buy</button>                                         
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        @endforeach
                        <form action="{{ route('razorpay.payment.store') }}" method="POST">
                            @csrf
                            <button class="tf-btn bg-color-primary pd-20" id="payBtn">
                                <span>Buy</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- section-faq -->
    </div>
    <!-- /main-content -->
@endsection

@push('scripts')  
<script> 
    
    var options = {
        "key": "{{ env('RAZORPAY_API_KEY') }}",
        "amount": "10000",
        "name": "Dhanar98",
        "description": "Razorpay payment",
        "image": "https://cdn.razorpay.com/logos/NSL3kbRT73axfn_medium.png",
        "prefill": {
            "name": "ABC",
            "email": "abc@gmail.com"
        },
        "theme": {
            "color": "#0F408F"
        },
        "handler" : function(res) {
            console.log(res);

            $.ajax({
                url: "/payment/create",
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}", 
                    response: {
                        razorpay_payment_id: res.razorpay_payment_id
                    }
                },
                success: function(res) {
                    console.log('Payment data sent to server', res);
                    if (res.success = true) {
                        window.location.href = "route('packages')"; //payment failure
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error sending payment failure information:', textStatus, errorThrown);
                }
            });
        },
        "modal": {
            "ondismiss": function() {
                // This function is called when the user closes the modal
                window.location.href = '/'; // Redirect to your failure page
            }
        }
    };

    var rzp = new Razorpay(options);
    document.getElementById('payBtn').onclick = function(e) {
        rzp.open();
        e.preventDefault();
    }

    rzp.on('payment.failed', function(response) {

        event.preventDefault();
        if (response.reason = "payment_failed") {
            const {
                error,
                reason
            } = response;
            $.ajax({
                url: "/payment/failure",
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}", // CSRF token
                    response: {
                        error,
                        reason
                    }
                },
                success: function(response) {
                    console.log('Payment failure data sent to server', response);
                    if (response.success = true) {
                        window.location.href = '/402'; //payment failure
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error sending payment failure information:', textStatus, errorThrown);
                }
            });
        }
    });
</script>
@endpush
