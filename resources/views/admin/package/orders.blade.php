@extends('admin.layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Orders</h2>
            <div class="card-header  mb-5">
                <h5 class="card-title mb-0">Search Filters</h5>
                <form action="{{ route('admin.package.orders') }}" method="get" enctype='multipart/form-data'>
                    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0 g-6 mb-3">
                        <div class="col-md-4 user_role">
                            <select  class="form-select text-capitalize" name="package_name">
                                <option value="">Package</option>
                                @foreach ($packages as $key=>$value)
                                    <option value="{{$value->package_name}}" {{ old('type', request('type')) == $value->package_name ? 'selected' : '' }} >{{$value->package_name}}</option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="col-md-4 user_status">
                            <select id="FilterTransaction" class="form-select text-capitalize" name="status">
                                <option value=""> Select Status </option>
                                @foreach (config('constants.STATUS') as $key=>$value)
                                    <option value="{{$key}}" {{ old('status', request('status')) === (string)$key ? 'selected' : '' }} >{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 user_status">
                            <button class="btn btn-secondary add-new btn-primary" type="submit" >Submit</button>
                            <a href="{{ route('admin.package.orders') }}"  class="btn btn-secondary add-new btn-primary" >Reset</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-header d-flex align-items-center mb-5">
                <h5 class="card-title mb-0 flex-grow-1">Order List</h5>
            </div>
            @if($rows->isEmpty())
            <div class="alert alert-danger text-center">
                No Records found.
            </div>
            @else
            <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="border">Sr.</th>
                        <th scope="col" class="border">Order Id</th>
                        <th scope="col" class="border">Package</th>
                        <th scope="col" class="border">Razorpay order</th>
                        <th scope="col" class="border">Post property</th>
                        <th scope="col" class="border">Contacts</th>
                        <th scope="col" class="border">Validity</th>
                        <th scope="col" class="border">Status</th>
                        <th scope="col" class="border">User Info</th>
                        {{-- <th scope="col" class="border">Operations</th> --}}
                    </tr>
                </thead>
                <tbody  data-entity-type="category"  >
                    @foreach($rows as $row)
                    <tr data-entity-id="{{ $row->id }}">
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td>
                        <td> 
                            @if (isset($row?->UserSubscription?->id))                                
                                #BBORD{{ App\Helper\Helper::formatNumber($row?->UserSubscription?->id)}} 
                            @else
                            -
                            @endif
                        </td>    
                        <td class="sorting_1">
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="d-flex flex-column">
                                    <span class="fw-medium">{{$row->package_name}}</span>
                                    <small>Date: {{ App\Helper\Helper::formatStringDate($row->created_at)  }}</small>
                                    <small class="text-btn text-color-primary" >{{ config('constants.CURRENCIES.symbol'). $row->grand_price}}</small>
                                </div>
                            </div>
                        </td>  
                        <td>{{ $row->razorpay_order_id }}</td>    
                        <td>{{ $row->post_property }}</td>   
                        <td>{{ $row->contacts }}</td>   
                        <td>{{ $row->days }} Days</td>  
                        <td>
                            @if ($row->status==1)
                                <span class="badge bg-label-success me-1">Active</span>
                            @else
                                <span class="badge bg-label-danger me-1">Inactive</span>
                            @endif
                        </td>
                        <td class="sorting_1">
                            @if (isset($row->user_id) && $row->user_id > 0)
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-4">
                                            <img src="{{ App\Helper\Helper::getProfileImage('storage/user/'.$row->user->id, $row->user->profile_image) }}" alt="Avatar" class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="{{route('admin.user', $row->user_id)}}" class="text-heading text-truncate">
                                            <span class="fw-medium">{{ $row->user->name }}</span>
                                        </a>
                                        <small>{{ $row->user->phone }}</small>
                                    </div>
                                </div>
                            @endif
                        </td> 
                        {{-- <td>    
                            <a href="{{route("admin.package.order", $row->id)}}">
                                <span class="btn-primary badge" text-capitalized="">View</span>
                            </a> 
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="row custom-row ">
                <div class="col-sm-6 text-center text-sm-right order-sm-1">
                    Showing {{ $rows->firstItem() }} to {{ $rows->lastItem() }} of {{ $rows->total() }} results
                </div>
                <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                    {{ $rows->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- / Content -->
@endsection

@push('scripts')

@endpush