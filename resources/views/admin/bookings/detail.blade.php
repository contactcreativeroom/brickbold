@extends('admin.layouts.app')
@section('content')
<div class="container py-5">
   <div class="row">
      <div class="col">
         <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
               <li class="breadcrumb-item"><a href="{{ route('admin.bookings') }}">Bookings</a></li>
               <li class="breadcrumb-item active" aria-current="page">{{ $row->name }}</li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- Content wrapper -->
   <div class="content-wrapper">
      <!-- Content -->
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="card mb-6">
                  <div class="user-profile-header-banner">
                     <img src="{{ App\Helper\Helper::getCoverImage('storage/vendor/' . $row->vendor_id . '/services/' . $row->service?->id . '/cover', $row->service?->cover_image) }}"
                        alt="Banner image" class="rounded-top">
                  </div>
                  <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-8">
                     <div class="flex-shrink-0 mt-1 mx-sm-0 mx-auto">
                        <img src="{{ App\Helper\Helper::getProfileImage('storage/vendor/' . $row->vendor_id . '/services/' . $row->service?->id . '/profile', $row->service?->profile_image) }}"
                           alt="user image"
                           class="d-block h-auto ms-0 ms-sm-6 rounded-3 user-profile-img d-block rounded">
                     </div>
                     <div class="flex-grow-1 mt-3 mt-lg-5">
                        <div
                           class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                           <div class="user-profile-info">
                              <h4 class="mb-2 mt-lg-7">{{ $row->vendor?->name }}</h4>
                              <ul
                                 class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 mt-4">
                                 <li class="list-inline-item">
                                    <i class="bx bx-palette me-2 align-top"></i><span
                                       class="fw-medium">{{ $row->service?->name }}</span>
                                 </li>
                                 <li class="list-inline-item">
                                    <i class="bx bx-time me-2 align-top"></i><span class="fw-medium"> $
                                    {{ $row->service?->hourly_price }}</span>
                                 </li> 
                              </ul>
                              {{-- <a href="javascript:;">{!! $row->averageRating() > 0 ? '<span style="--rating: ' . $row->averageRating() . '"></span>' : '' !!} </a> --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-6">
               <div class="card mb-6">
                    <div class="user-profile-header-banner">
                        <img src="{{ App\Helper\Helper::getCoverImage('storage/user/profile/'.$row->user_id.'/cover', $row->user?->cover_image) }}"
                            alt="Banner image" class="rounded-top">
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-8">
                        <div class="flex-shrink-0 mt-1 mx-sm-0 mx-auto">
                            <img src="{{ App\Helper\Helper::getProfileImage('storage/user/profile/'.$row->user_id, $row->user?->profile_image) }}"
                                alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded-3 user-profile-img d-block rounded">
                        </div>
                        <div class="flex-grow-1 mt-3 mt-lg-5">
                            <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                                <div class="user-profile-info">
                                    <h4 class="mb-2 mt-lg-7">{{ $row->user->name }}</h4>
                                    <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 mt-4">
                                        <li class="list-inline-item">
                                            <a href="{{route('admin.chat', ['vendor_id'=>$row->vendor_id, 'user_id'=>$row->user_id] )}}">
                                                <i class="bx bx-chat me-2 align-top"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-calendar"></i><span
                           class="fw-medium mx-2">From:</span> <span>{{ App\Helper\Helper::formatStringDate($row->booking_from, true)  }}</span></li>
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-calendar"></i><span
                           class="fw-medium mx-2">To:</span> <span>{{ App\Helper\Helper::formatStringDate($row->booking_to, true)  }}</span></li>
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-time"></i><span
                           class="fw-medium mx-2">Total hours:</span> <span>{{$row->total_hours}}</span></li>
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-check"></i>
                            <span class="fw-medium mx-2">Status:</span> 
                            <span>
                                @if ($row->booking_status == 'Completed')
                                    @if ($row->is_dispute_raised == 1)
                                        <small class="text-danger text-nowrap fw-semibold"> Disputed </small>
                                    @else
                                        <small class="text-success text-nowrap fw-semibold"> {{ $row->booking_status }} </small>
                                    @endif
                                @else
                                    <small class="text-info text-nowrap fw-semibold"> {{ $row->booking_status }} </small>
                                @endif
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 order-1 mb-4">
               <!-- About User -->
               <div class="card h-100">
                  <div class="card-body">
                     <small class="card-text text-uppercase text-muted small">Price</small>
                     <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-4"><i class='bx bx-wrench'></i><span
                           class="fw-medium mx-2">Service Price:</span> <span>{{ config("constants.CURRENCIES.symbol").$row->service_price }}</span></li>
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-taxi"></i><span
                           class="fw-medium mx-2">Traveling Price:</span> <span>{{ config("constants.CURRENCIES.symbol").$row->traveling_price }}</span></li>
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-dollar-circle"></i><span
                           class="fw-medium mx-2">Tax Price:</span> <span>{{ config("constants.CURRENCIES.symbol").$row->tax_price }}</span></li>
                        <li class="d-flex align-items-center mb-4"><i class='bx bx-wallet'></i><span
                           class="fw-medium mx-2">Total Price:</span> <span>{{ config("constants.CURRENCIES.symbol").$row->total_price }}</span></li>
                     </ul>
                  </div>
               </div>
               <!--/ About User -->
            </div>
            <div class="col-md-6 col-lg-4 order-2 mb-4">
               <!-- Profile Overview -->
               <div class="card h-100">
                  <div class="card-body">
                     <small class="card-text text-uppercase text-muted small">Overview</small>
                     <ul class="list-unstyled mb-0 mt-3 pt-1">
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-map"></i><span
                           class="fw-medium mx-2">Lat, Long:</span>
                           <span>{{ $row?->latitude}}, {{ $row?->longitude }}</span>
                        </li> 
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-calendar"></i><span
                           class="fw-medium mx-2">Booking On:</span>
                           <span>{{ App\Helper\Helper::formatStringDate($row->created_at, false) }}</span>
                        </li> 
                        <li class="d-flex align-items-center mb-4"><i class="fa fa-gavel"></i><span
                           class="fw-medium mx-2">Is Disputed:</span>
                           <span>{{ $row->is_dispute_raised ? 'Yes' : 'No' }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-4"><i class="bx bx-star"></i><span
                           class="fw-medium mx-2">Rating:</span>
                           <span style="--rating: {{ $row?->rating ? $row?->rating?->rating  : '' }}"></span>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--/ Profile Overview -->
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 col-lg-4 order-4 order-lg-3">
               <div class="card h-100">
                  <div class="card-header d-flex justify-content-between">
                     <h5 class="card-title m-0 me-2">History</h5>
                  </div>
                  <div class="card-body pt-2">
                     <ul class="timeline mb-0">
                        @foreach ($row->history as $history)
                           <li class="timeline-item timeline-item-transparent">
                              <span class="timeline-point 
                                 @if ($history->status == "Disputed")
                                    timeline-point-danger
                                 @elseif ($history->status == "Complete")
                                    timeline-point-success
                                 @elseif ($history->status == "Processed")
                                    timeline-point-warning
                                 @elseif ($history->status == "Confirmed")
                                    timeline-point-primary
                                 @elseif ($history->status == "Booked")
                                    timeline-point-info
                                 @else
                                    timeline-point-info
                                 @endif
                              "></span>
                              <div class="timeline-event">
                                 <div class="timeline-header mb-3">
                                    <h6 class="mb-0">{{$history->status}}</h6>
                                    <small class="text-muted">{{ App\Helper\Helper::formatChatDate($history->created_at)}} </small>
                                 </div>
                                 <p class="mb-2">
                                    @if ($history->status == "Disputed")
                                       <b>{{$row->user->name}}</b> raised a disput on this service provided by <b>{{$row?->service->name}}</b>
                                    @elseif ($history->status == "Complete")
                                       <b>{{$row->user->name}}</b> mark completed the service of <b>{{$row?->service->name}}</b> 
                                       @if ($row?->rating?->rating > 0)
                                           and give rating <span style="--rating: {{ $row?->rating ? $row?->rating?->rating  : '' }}"></span>
                                       @endif                       

                                    @elseif ($history->status == "Processed")
                                       <b>{{$row?->service->name}}</b> started working.
                                    @elseif ($history->status == "Confirmed")
                                       <b>{{$row?->service->name}}</b> Confirmed the booking of <b>{{$row->user->name}}</b>
                                    @elseif ($history->status == "Booked")
                                       <b>{{$row->user->name}}</b> booked a Service <b>{{$row?->service->name}} ({{$row?->vendor->name}})</b>
                                    @endif  
                                    
                                 </p> 
                              </div>
                           </li>
                                                
                           
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-8">
               <!-- Draggable Marker With Popup -->
               <div class="col-12">
                  <div class="card mb-6">
                     <h5 class="card-header">Draggable Marker With Popup</h5>
                     <div class="card-body">
                        <iframe width="100%" height="250" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBUkrIEQStEvADw3fBKMbeVNMjrAZdON4s&origin=Oslo+Norway&destination=Telemark+Norway&avoid=tolls|highways" allowfullscreen> </iframe>
                        {{-- <div class="leaflet-map" id="dragMap1"></div> --}}
                     </div>
                  </div>
               </div>
               <!-- /Draggable Marker With Popup -->
            </div>
         </div>
         {{-- 
         <div class="row">
            <div class="col-lg-4 col-md-4 order-1">
               <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                 <img src="{{ url('backend/assets/img/icons/unicons/chart-success.png') }}" alt="chart success" class="rounded" />
                              </div>
                           </div>
                           <span class="fw-semibold d-block mb-1">Services provided</span>
                           <h3 class="card-title mb-2">{{ $row->totalBookingCompleted() }}</h3>
                           <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                 <img src="{{ url('backend/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                           </div>
                           <span class="fw-semibold d-block mb-1">Total Earned</span>
                           <h3 class="card-title text-nowrap mb-1">${{ $row->totalEarned() }}</h3>
                           <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-6 mb-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                 <img src="{{ url('backend\assets\img\icons\unicons\paypal.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                           </div>
                           <span class="d-block mb-1">Payouts</span>
                           <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                           <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                     </div>
                  </div>
                  <div class="col-6 mb-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                 <img src="{{ url('backend/assets/img/icons/unicons/cc-primary.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                           </div>
                           <span class="fw-semibold d-block mb-1">Balance</span>
                           <h3 class="card-title mb-2">$14,857</h3>
                           <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Total Revenue -->
            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
               <div class="card h-100">
                  <div class="row row-bordered g-0">
                     <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Year Revenue</h5>
                        <div id="totalRevenueYearChart" class="px-2"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <!-- Order Statistics -->
            <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
               <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between pb-0">
                     <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Booking Statistics</h5>
                        <small class="text-muted">$ {{$row?->thisYearBooking()->sum('total_price')}} Total Sales Amount</small>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                           <h2 class="mb-2">{{$row?->thisYearBooking()->count()}}</h2>
                           <span>Bookings</span>
                        </div>
                        <div id="bookingStatisticsChart"></div>
                     </div>
                     <ul class="p-0 m-0">
                        @foreach ($row->service?->bookingLatestLimit ?? [] as $booking)
                        <li class="d-flex mb-4 pb-1">
                           <div class="avatar flex-shrink-0 me-3">
                              <span class="rounded bg-label-primary">
                              <img src="{{ App\Helper\Helper::getProfileImage('storage/user/profile/' . $booking->user_id, $booking->User->profile_image) }}"
                                 height="140" uid="{{ $booking->user->id }}"
                                 alt="{{ $booking->user->name }}" />
                              </span>
                           </div>
                           <div
                              class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                 <h6 class="mb-0">
                                    {{ $booking->name }}
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
                                    <small class="fw-semibold">$ {{ $booking->total_price }}</small> 
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
            <!--/ Order Statistics -->
            <!-- Transactions -->
            <div class="col-md-6 col-lg-6 order-2 mb-4">
               <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between">
                     <h5 class="card-title m-0 me-2">Payouts</h5>
                     <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                           <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                           <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                           <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                           <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ url('backend/assets/img/icons/unicons/paypal.png')}}" alt="User"
                                 class="rounded" />
                           </div>
                           <div
                              class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                 <small class="text-muted d-block mb-1">Paypal</small>
                                 <h6 class="mb-0">Send money</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                 <h6 class="mb-0">+82.6</h6>
                                 <span class="text-muted">USD</span>
                              </div>
                           </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                           <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ url('backend/assets/img/icons/unicons/wallet.png')}}" alt="User"
                                 class="rounded" />
                           </div>
                           <div
                              class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                 <small class="text-muted d-block mb-1">Wallet</small>
                                 <h6 class="mb-0">Mac'D</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                 <h6 class="mb-0">+270.69</h6>
                                 <span class="text-muted">USD</span>
                              </div>
                           </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                           <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ url('backend/assets/img/icons/unicons/chart.png')}}" alt="User"
                                 class="rounded" />
                           </div>
                           <div
                              class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                 <small class="text-muted d-block mb-1">Transfer</small>
                                 <h6 class="mb-0">Refund</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                 <h6 class="mb-0">+637.91</h6>
                                 <span class="text-muted">USD</span>
                              </div>
                           </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                           <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ url('backend/assets/img/icons/unicons/cc-success.png')}}" alt="User"
                                 class="rounded" />
                           </div>
                           <div
                              class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                 <small class="text-muted d-block mb-1">Credit Card</small>
                                 <h6 class="mb-0">Ordered Food</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                 <h6 class="mb-0">-838.71</h6>
                                 <span class="text-muted">USD</span>
                              </div>
                           </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                           <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ url('backend/assets/img/icons/unicons/wallet.png')}}" alt="User"
                                 class="rounded" />
                           </div>
                           <div
                              class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                 <small class="text-muted d-block mb-1">Wallet</small>
                                 <h6 class="mb-0">Starbucks</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                 <h6 class="mb-0">+203.33</h6>
                                 <span class="text-muted">USD</span>
                              </div>
                           </div>
                        </li>
                        <li class="d-flex">
                           <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ url('backend/assets/img/icons/unicons/cc-warning.png')}}" alt="User"
                                 class="rounded" />
                           </div>
                           <div
                              class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                 <small class="text-muted d-block mb-1">Mastercard</small>
                                 <h6 class="mb-0">Ordered Food</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                 <h6 class="mb-0">-92.45</h6>
                                 <span class="text-muted">USD</span>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--/ Transactions -->
         </div>
         --}}
      </div>
      <!-- / Content -->
   </div>
   <!-- Content wrapper -->
</div>
<!-- / Content -->
@endsection
@push('scripts')
{{-- @include('admin.vendors.chart-js') --}}
@endpush