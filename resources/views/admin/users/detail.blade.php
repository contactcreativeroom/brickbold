@extends('admin.layouts.app')


@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <!-- User Sidebar -->
                    <div class="col-xl-4 col-lg-5 order-1 order-md-0">
                        <!-- User Card -->
                        <div class="card mb-6">
                            <div class="card-body pt-12">
                                <div class="user-avatar-section">
                                    <div class=" d-flex align-items-center flex-column">
                                        <img class="img-fluid rounded mb-4" src="{{ App\Helper\Helper::getProfileImage('storage/user/'.$user->id, $user->profile_image) }}"
                                            height="120" width="120" alt="User avatar">
                                        <div class="user-info text-center">
                                            <h5>{{ $user->name }}</h5>
                                            <span class="badge bg-label-secondary">{{ $user->user_type }}</span>
                                        </div>
                                    </div>
                                </div> 
                                <h5 class="pb-4 border-bottom justify-header mb-4">
                                    Details
                                    <div class="form-check form-switch">
                                        <input class="form-check-input entity-toggle" type="checkbox" data-entity-url="{{ route('admin.user.status.change') }}" data-entity-id="{{ $user->id }}" data-entity-type="user" {{ $user->status == 1 ? 'checked' : '' }}>
                                    </div>
                                </h5>
                                <div class="info-container">
                                    <ul class="list-unstyled mb-6">                                        
                                        <li class="mb-2">
                                            <span class="h6">Email:</span>
                                            <span>{{ $user->email }}</span>
                                        </li> 
                                        <li class="mb-2">
                                            <span class="h6">Status:</span>
                                            <span>{{ $user->status==1? 'Active' : 'Inactive' }}</span>
                                        </li>
                                        <li class="mb-2">
                                            <span class="h6">Role:</span>
                                            <span>{{ $user->user_type }}</span>
                                        </li>
                                        
                                        <li class="mb-2">
                                            <span class="h6">Phone:</span>
                                            <span>{{ $user->phone }}</span>
                                        </li> 
                                        @if (!empty($user->user_type) && in_array($user->user_type , ['Agent', 'Builder']))
                                        <li class="mb-2">
                                            <span class="h6">Business Name:</span>
                                            <span>{{ $user->business_name }}</span>
                                        </li> 
                                        <li class="mb-2">
                                            <span class="h6">Landline Number:</span>
                                            <span>{{ $user->landline_number }}</span>
                                        </li> 
                                        @endif
                                        <li class="mb-2">
                                            <span class="h6">Address:</span>
                                            <span>
                                                {{ $user->address }} 
                                                <small>{{ $user->state }}</small>
                                                <small>{{ $user->city }}</small>
                                                <small>{{ $user->postal_code }}</small>
                                            </span>
                                        </li>
                                        @if (!empty($user->user_type) && in_array($user->user_type , ['Agent', 'Builder']))
                                        <li class="mb-2">
                                            <span class="h6">GSTIN:</span>
                                            <span>{{ $user->gstin }}</span>
                                        </li> 
                                        <li class="mb-2">
                                            <span class="h6">Rera Number:</span>
                                            <span>{{ $user->rera_number }}</span>
                                        </li> 
                                        <li class="mb-2">
                                            <span class="h6">Website:</span>
                                            <span>{{ $user->website }}</span>
                                        </li> 
                                        @endif
                                    </ul>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route("admin.user.edit", ['id'=>$user->id])}}" class="btn btn-primary me-2">Edit</a>
                                        <a href="{{route("admin.property.add", ['user_id'=>$user->id])}}" class="btn btn-label-danger suspend-user">Add property</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /User Card -->
                        <!-- Plan Card -->
                        @foreach ($subscriptions as $subscription)
                        <div class="card mb-6 border border-2 border-primary rounded primary-shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <span class="badge bg-label-primary">{{$subscription->order->package_name}}</span>
                                    <div class="d-flex justify-content-center">
                                        <sub class="h5 pricing-currency mb-auto mt-1 text-primary">{{ config('constants.CURRENCIES.symbol')}}</sub>
                                        <h1 class="mb-0 text-primary">{{ App\Helper\Helper::priceFormat($subscription->order->package_price)}}</h1>
                                    </div>
                                </div>
                                <ul class="list-unstyled g-2 my-6">
                                    @php
                                        $fields = unserialize($subscription->order->package_value); 
                                         
                                        $today = Carbon\Carbon::today();
                                        $endDate = Carbon\Carbon::parse($subscription->end_date);
                                        $startDate = Carbon\Carbon::parse($subscription->start_date);
                                        $remainingDays = $endDate->diffInDays($today);                                            
                                        $completedDays = $startDate->diffInDays($today) +1;                                            
                                    @endphp
                                    @foreach ($fields as $fieldKey=>$fieldVal)
                                        <li class="mb-2 d-flex align-items-center"><i class="bx bxs-circle bx-6px text-secondary me-2"></i><span>{{ $fieldKey}}: {{ $fieldVal}}</span></li>
                                    @endforeach 
                                </ul>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="h6 mb-0">Days</span>
                                    <span class="h6 mb-0">{{$completedDays}} of {{$subscription->days}} Days</span>
                                </div>
                                <div class="progress mb-1">
                                    <div class="progress-bar" role="progressbar" style="width: {{$completedDays}}%;" aria-valuenow="{{$completedDays}}" aria-valuemin="0" aria-valuemax="{{$subscription->days}}"></div>
                                </div>
                                <small>{{$remainingDays}} days remaining</small>
                                 
                            </div>
                        </div>
                        @endforeach
                        <!-- /Plan Card -->
                    </div>
                    <!--/ User Sidebar -->


                    <!-- User Content -->
                    <div class="col-xl-8 col-lg-7 order-0 order-md-1">


                        <!-- Project table -->
                        <div class="card mb-6">
                            <h5 class="card-header pb-0 text-sm-start text-center">Property List</h5>
                            <div class="table-responsive mb-4">
                                @if($rows->isEmpty())
                                <div class="alert alert-danger text-center">
                                    No Records found.
                                </div>
                                @else
                                <table class="table table-hover">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col" class="border">#</th>
                                            <th scope="col" class="border">Property</th>
                                            <th scope="col" class="border">Address</th>
                                            <th scope="col" class="border">For-Type</th>
                                            <th scope="col" class="border">Type</th>
                                            <th scope="col" class="border">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody  data-entity-type="category"  >
                                        @foreach($rows as $row)
                                        <tr data-entity-id="{{ $row->id }}">
                                            <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-start align-items-center user-name">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-xxl me-4">
                                                            <img src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" alt="Avatar" class="rounded">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="{{route('property', $row->slug)}}" class="text-heading text-truncate">
                                                            <span class="fw-medium">{{$row->title}}</span>
                                                        </a>
                                                        <small>Date: {{ App\Helper\Helper::formatStringDate($row->created_at)  }}</small>
                                                        <small>Views: {{$row->views}}</small>
                                                        <small class="text-btn text-color-primary" >{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}</small>
                                                        <small>
                                                            <a href="{{route("admin.property.edit", $row->id)}}">
                                                                <span class="btn-primary badge" text-capitalized="">Edit</span>
                                                            </a>
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>      
                                            <td> 
                                                {{-- {{ $row->location }} 
                                                <small>{{ $row->state }}</small>--}}
                                                <small>{{ $row->city }}</small>
                                                <small>{{ $row->zip_code }}</small> 
                                            </td>   
                                            <td>{{config('constants.FOR_TYPE')[$row->for_type]}} </td>   
                                            <td>{{config('constants.TYPE')[$row->type]}}</td>   
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input entity-toggle" type="checkbox" data-entity-url="{{ route('admin.property.status.change') }}" data-entity-id="{{ $row->id }}" data-entity-type="user" {{ $row->status == 1 ? 'checked' : '' }}>
                                                </div>
                                            </td>  
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="ps-5 pt-5">
                                    {{ $rows->links() }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- /Project table -->



                    </div>
                    <!--/ User Content -->
                </div>


            </div>
            <!-- / Content -->





            <div class="content-backdrop fade"></div>
        </div>
    </div>
    <!-- / Content -->

@endsection

@push('scripts')
@endpush
