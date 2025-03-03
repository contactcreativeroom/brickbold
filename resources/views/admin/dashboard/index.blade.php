@extends('admin.layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <!-- Card Border Shadow -->
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-primary h-100">
                <a href="{{route('admin.users')}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-group bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$userTotal->count()}}</h4>
                    </div>
                    <p class="mb-2">Total customers</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-light h-100">
                <a href="{{route('admin.users', ['user_type'=>'Owner'])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-light"><i class="bx bx-building-house bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$userTotal->where('user_type','Owner')->count()}}</h4>
                    </div>
                    <p class="mb-2">Total owners</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-secondary h-100">
                <a href="{{route('admin.users', ['user_type'=>'Agent'])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-buildings bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$userTotal->where('user_type','Agent')->count()}}</h4>
                    </div>
                    <p class="mb-2">Total agents</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-dark h-100">
                <a href="{{route('admin.users', ['user_type'=>'Builder'])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-dark"><i class="bx bx-user-pin bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$userTotal->where('user_type','Builder')->count()}}</h4>
                    </div>
                    <p class="mb-2">Total builders</p>
                </a>
            </div>
        </div>
        
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-wallet bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$totalEarned}}</h4>
                    </div>
                    <p class="mb-2">Total payments</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-light h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-light"><i class="bx bx-wallet bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$thisYearEarned}}</h4>
                    </div>
                    <p class="mb-2">Total this year</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-secondary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-wallet bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$thisMonthEarned}}</h4>
                    </div>
                    <p class="mb-2">Total this month</p>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-dark h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-dark"><i class="bx bx-wallet bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$todayEarned}}</h4>
                    </div>
                    <p class="mb-2">Total today</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-info h-100">
                <a href="{{route('admin.properties')}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx bxs-calendar bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$properties->count()}}</h4>
                    </div>
                    <p class="mb-2">Total properties</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-success h-100">
                <a href="{{route('admin.properties', ['status'=>1])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bxs-calendar-check bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$properties->where("status", 1)->count()}}</h4>
                    </div>
                    <p class="mb-2">Total active properties </p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-danger h-100">
                <a href="{{route('admin.properties', ['status'=>2])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-danger"><i class="bx bxs-calendar-x bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$properties->where("status", 2)->count()}}</h4>
                    </div>
                    <p class="mb-2">Total in-active properties</p>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-warning h-100">
                <a href="{{route('admin.properties', ['status'=>3])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-calendar-event bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$properties->where("status", 3)->count()}}</h4>
                    </div>
                    <p class="mb-2">Total sold properties</p>
                </a>
            </div>
        </div>
         <div class="col-lg-3 col-sm-6 g-6">
            <div class="card card-border-shadow-danger h-100">
                <a href="{{route('admin.properties', ['status'=>0])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-danger"><i class="bx bxs-calendar-x bx-lg"></i></span>
                        </div>
                        <h4 class="mb-0">{{$properties->where("status", 0)->count()}}</h4>
                    </div>
                    <p class="mb-2">Total declined properties</p>
                </a>
            </div>
        </div>
        
        <div class="col-lg-3 col-sm-6 g-6 d-none">
            <div class="card card-border-shadow-info h-100">
                <a href="{{route('admin.properties')}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx bxs-calendar bx-lg"></i></span>
                        </div>
                        {{-- <h4 class="mb-0">{{$properties->count()}}</h4> --}}
                    </div>
                    {{-- <p class="mb-2">Total properties</p> --}}
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 g-6 d-none">
            <div class="card card-border-shadow-success h-100">
                <a href="{{route('admin.properties', ['status'=>1])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bxs-calendar-check bx-lg"></i></span>
                        </div>
                        {{-- <h4 class="mb-0">{{$properties->where("status", 1)->count()}}</h4> --}}
                    </div>
                    {{-- <p class="mb-2">Total active properties </p> --}}
                </a>
            </div>
        </div>
       
        <div class="col-lg-3 col-sm-6 g-6 d-none">
            <div class="card card-border-shadow-warning h-100">
                <a href="{{route('admin.properties', ['status'=>3])}}" class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-calendar-event bx-lg"></i></span>
                        </div>
                        {{-- <h4 class="mb-0">{{$properties->where("status", 3)->count()}}</h4> --}}
                    </div>
                    {{-- <p class="mb-2">Total sold properties</p> --}}
                </a>
            </div>
        </div>
        <!--/ Card Border Shadow -->
        <div class="clearfix"></div>
        <!-- Properties statistics-->
        <div class="col-md-6 col-lg-6 order-2 mb-4 g-6">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-1">Properties statistics</h5>
                        <p class="card-subtitle">Total Properties {{$properties->count()}}</p>
                    </div>
                    <div class="btn-group d-none">
                        <button type="button" class="btn btn-label-primary">{{date('Y')}}</button>
                        <button type="button" class="btn btn-label-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item thisYear" href="javascript:void(0);">{{date('Y')}}</a></li>
                            <li><a class="dropdown-item previousYear" href="javascript:void(0);">{{date('Y')-1}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="bookingStatisticsChart"></div>
                </div>
            </div>
        </div>
        <!--/ Properties statistics -->
        <div class="col-md-6 col-lg-6 order-2 mb-4 g-6">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Revenue statistics</h5>
                    <div class="dropdown d-none">
                        <button class="btn p-0" type="button" id="totalBalance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded bx-lg text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalBalance">
                            <a class="dropdown-item thisYearEarning" href="javascript:void(0);">{{date('Y')}}</a>
                            <a class="dropdown-item previousYearEarning" href="javascript:void(0);">{{date('Y')-1}}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col d-flex">
                            <div class="me-3">
                                <span class="badge rounded-2 bg-label-warning p-2"><i class="bx bx-wallet bx-lg text-warning"></i></span>
                            </div>
                            <div>
                                <h6 class="mb-0">{{$totalEarned}}</h6>
                                <small>Total Revenue</small>
                            </div>
                        </div>
                    </div>
                    <div id="incomeChartDashboard"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
 
@endsection
@push('scripts') 
@include('admin.dashboard.chart-js')
@endpush