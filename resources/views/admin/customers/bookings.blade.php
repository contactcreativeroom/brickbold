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
                                <li class="nav-item"><a class="nav-link " href="{{ route('admin.customer', $user->id) }}"><i class="bx bx-user bx-sm me-1_5"></i> Profile</a></li>
                                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-grid-alt bx-sm me-1_5"></i>Bookings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>                

                <div class="row g-6">
                    @foreach ($rows as $booking)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card h-100 size-14">
                                <div class="card-header pb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar me-4">
                                                <img src="{{ App\Helper\Helper::getProfileImage('storage/vendor/' . $booking->service->vendor_id . '/services/' . $booking->service->id . '/profile', $booking->service->profile_image) }}" alt="{{ $booking->service->name }}" class="rounded-circle">
                                            </div>
                                            <div class="me-2">
                                                <h5 class="mb-0"><a href="{{ route('admin.vendor', $booking->service->vendor_id )}}" class="text-heading">{{$booking?->service->name}}</a></h5>
                                                <div class="client-info text-body"><span class="fw-medium">Status:</span>
                                                    @if ($booking->booking_status == 'Completed')
                                                        @if ($booking->is_dispute_raised == 1)
                                                            <small class="text-danger text-nowrap fw-semibold"> Disputed </small>
                                                        @else
                                                            <small class="text-success text-nowrap fw-semibold"> {{ $booking->booking_status }} </small>
                                                        @endif

                                                    @else
                                                        <small class="text-info text-nowrap fw-semibold"> {{ $booking->booking_status }} </small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p><i class="bx bx-map me-1 align-top"></i><span class="fw-medium">{{$booking->latitude}}, {{$booking->longitude}}</span></p>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="bg-lighter px-3 py-2 rounded me-auto mb-4">
                                            <p class="mb-1"><small class="fw-medium text-heading">{{config("constants.CURRENCIES.symbol").$booking->total_price}}</small></p>
                                            <small class="text-body">Total Budget</small>
                                        </div>
                                        <div class="text-start mb-4">
                                            <p class="mb-1"><small class="text-heading fw-medium">Start Date: </small>{{ App\Helper\Helper::formatStringDate($booking->booking_from, true)  }}</p>
                                            <p class="mb-1"><small class="text-heading fw-medium">Deadline: </small>{{ App\Helper\Helper::formatStringDate($booking->booking_to, true)  }}</p>
                                        </div>
                                    </div>
                                    
                                    <p class="mb-0">{{$booking->service->short_description}}</p>
                                </div>
                                <div class="card-body border-top">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">
                                            <ul class="list-unstyled">
                                                <li><small class="text-heading fw-medium">Service Price:</small> <small>{{config("constants.CURRENCIES.symbol").$booking->service_price}}</small></li>
                                                <li><small class="text-heading fw-medium">Tax Price:</small> <small>{{config("constants.CURRENCIES.symbol").$booking->tax_price}}</small></li>                                        
                                            </ul>
                                        </p>
                                        <div class="ms-auto">
                                            <ul class="list-unstyled">
                                                <li><small class="text-heading fw-medium">Traveling Price:</small> <small>{{config("constants.CURRENCIES.symbol").$booking->traveling_price}}</small></li>                                        
                                                <li><small class="text-heading fw-medium">Total Hours:</small> <small>{{$booking->total_hours}}</small></li>                                        
                                            </ul>
                                        </div>
                                    </div>  
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <span style="--rating: {{ $booking?->rating ? $booking?->rating?->rating  : '' }}"></span>
                                        </div>
                                        <div class="ms-auto"> 
                                            <a href="{{ route('admin.customer.bookings.chat', $booking->id )}}" class="text-muted d-flex align-items-center"><i class="bx bx-chat me-1"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    {{ $rows->links() }}
                </div> 
            </div>
            <!-- / Content -->

        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Content -->
@endsection
 
