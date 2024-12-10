@extends('admin.layouts.app')


@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.customers') }}">Customers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Content wrapper -->

        <div class="content-wrapper">
            <!-- Content -->
            <div class="container">                 
                @include('admin.customers.header-section')
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-align-top">
                            <ul class="nav nav-pills flex-column flex-sm-row mb-6">
                                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user bx-sm me-1_5"></i> Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.customer.bookings', $user->id) }}"><i class="bx bx-grid-alt bx-sm me-1_5"></i>Bookings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                        <!-- About User -->
                        <div class="card h-100">
                            <div class="card-body">
                                <small class="card-text text-uppercase text-muted small">About</small>
                                <ul class="list-unstyled my-3 py-1">
                                    <li class="d-flex align-items-center mb-4"><i class="bx bx-user"></i><span
                                            class="fw-medium mx-2">Full Name:</span> <span>{{ $user->name }}</span></li>
                                    <li class="d-flex align-items-center mb-4"><i class="bx bx-check"></i><span
                                            class="fw-medium mx-2">Status:</span>
                                        <span>{{ $user->status ? 'Active' : 'Deactive' }}</span></li>                                    
                                    <li class="d-flex align-items-center mb-4"><i class="bx bx-flag"></i><span
                                            class="fw-medium mx-2">Country:</span> <span>{{ $user->country }}</span></li>                                     
                                    
                                </ul>   

                                <small class="card-text text-uppercase text-muted small">Contacts</small>
                                <ul class="list-unstyled my-3 py-1">
                                    <li class="d-flex align-items-center mb-4"><i class="bx bx-phone"></i><span
                                            class="fw-medium mx-2">Contact:</span> <span>{{ $user->phone }}</span></li>
                                    <li class="d-flex align-items-center mb-4"><i class="bx bx-chat"></i><span
                                            class="fw-medium mx-2">Skype:</span> <span>{{ $user->email }}</span></li>
                                    <li class="d-flex align-items-center mb-4"><i class="bx bx-envelope"></i><span
                                            class="fw-medium mx-2">Email:</span> <span>{{ $user->email }}</span></li>
                                    <li class="d-flex align-items-center mb-4"><i class="bx bx-map"></i>  <span
                                            class="fw-medium mx-2">{{ $user->service?->address ? $user->service?->address : "N/A"}}</span></li>
                                
                                </ul>

                            </div>
                        </div> 
                    </div>

                    <div class="col-md-6 col-lg-8 order-1 mb-4"> 
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">Booking Statistics</h5>
                                    <small class="text-muted">{{config("constants.CURRENCIES.symbol").$user?->booked()->sum('total_price')}} Total Sales Amount</small>
                                </div> 
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex flex-column align-items-center gap-1">
                                        <h2 class="mb-2">{{$user?->booked()->count()}}</h2>
                                        <span>Bookings</span>
                                    </div>
                                    <div id="bookingStatisticsChart"></div>
                                </div>
                                <ul class="p-0 m-0">
                                    @foreach ($user?->bookingLatestLimit ?? [] as $booking)
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="rounded bg-label-primary">
                                                    <img src="{{ App\Helper\Helper::getProfileImage('storage/vendor/' . $booking->service->vendor_id . '/services/' . $booking->service->id . '/profile', $booking->service->profile_image) }}" alt="{{ $booking->service->name }}" height="140" uid="{{ $booking->user->id }}" />
                                                </span>
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">
                                                        {{ $booking->service->name }}
                                                        @if ($booking->booking_status == 'Completed')
                                                            @if ($booking->is_dispute_raised == 1)
                                                                <small class="text-danger text-nowrap fw-semibold"> Disputed </small>
                                                            @else
                                                                <small class="text-success text-nowrap fw-semibold"> {{ $booking->booking_status }} </small>
                                                            @endif
                                                            {!! $booking?->rating ? '<br><span style="--rating: '.$booking?->rating?->rating.'"></span>'  : '' !!}
                                                        @else
                                                            <small class="text-info text-nowrap fw-semibold"> {{ $booking->booking_status }} </small>
                                                        @endif                                                            
                                                    </h6> 
                                                    <small class="text-muted short-title"><i class="bx bx-calendar align-top"></i> From: {{ App\Helper\Helper::formatStringDate($booking->booking_from, true)  }}, To: {{ App\Helper\Helper::formatStringDate($booking->booking_to, true)  }}</small>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="fw-semibold">{{ config("constants.CURRENCIES.symbol").$booking->total_price }}</small> 
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <i class="bx bx-calendar align-top"></i><span class="fw-medium">{{ App\Helper\Helper::formatStringDate($booking->created_at, false) }}</span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </li> 
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                    
                </div>
                

            </div>
            <!-- / Content -->

        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Content -->
@endsection

@push('scripts')
    
@endpush
