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
                                            <span class="badge bg-label-secondary">role here</span>
                                        </div>
                                    </div>
                                </div> 
                                <h5 class="pb-4 border-bottom mb-4">Details</h5>
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
                                            <span>Author</span>
                                        </li>
                                        <li class="mb-2">
                                            <span class="h6">GSTIN:</span>
                                            <span>Tax-8965</span>
                                        </li>
                                        <li class="mb-2">
                                            <span class="h6">Phone:</span>
                                            <span>{{ $user->phone }}</span>
                                        </li> 
                                        <li class="mb-2">
                                            <span class="h6">Address:</span>
                                            <span>
                                                {{ $user->address }} 
                                                <small>{{ $user->state }}</small>
                                                <small>{{ $user->city }}</small>
                                                <small>{{ $user->postal_code }}</small>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-center">
                                        <a href="javascript:void(0);" class="btn btn-primary me-2" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                                        <a href="javascript:void(0);" data-entity-url="{{ route('admin.user.status.change') }}" data-entity-id="{{ $user->id }}" data-entity-type="user" class="btn btn-label-danger suspend-user me-2">{{ $user->status == 1 ? 'Active' : 'Inactive' }}</a>
                                        <a href="{{route("admin.user", $user->id)}}" class="btn btn-label-warning">Add property</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /User Card -->
                        <!-- Plan Card -->
                        <div class="card mb-6 border border-2 border-primary rounded primary-shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <span class="badge bg-label-primary">Standard</span>
                                    <div class="d-flex justify-content-center">
                                        <sub class="h5 pricing-currency mb-auto mt-1 text-primary">$</sub>
                                        <h1 class="mb-0 text-primary">99</h1>
                                        <sub class="h6 pricing-duration mt-auto mb-3 fw-normal">month</sub>
                                    </div>
                                </div>
                                <ul class="list-unstyled g-2 my-6">
                                    <li class="mb-2 d-flex align-items-center"><i
                                            class="bx bxs-circle bx-6px text-secondary me-2"></i><span>10 Users</span></li>
                                    <li class="mb-2 d-flex align-items-center"><i
                                            class="bx bxs-circle bx-6px text-secondary me-2"></i><span>Up to 10 GB
                                            storage</span></li>
                                    <li class="mb-2 d-flex align-items-center"><i
                                            class="bx bxs-circle bx-6px text-secondary me-2"></i><span>Basic Support</span>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="h6 mb-0">Days</span>
                                    <span class="h6 mb-0">26 of 30 Days</span>
                                </div>
                                <div class="progress mb-1">
                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>4 days remaining</small>
                                <div class="d-grid w-100 mt-6">
                                    <button class="btn btn-primary" data-bs-target="#upgradePlanModal"
                                        data-bs-toggle="modal">Upgrade Plan</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Plan Card -->
                    </div>
                    <!--/ User Sidebar -->


                    <!-- User Content -->
                    <div class="col-xl-8 col-lg-7 order-0 order-md-1">


                        <!-- Project table -->
                        <div class="card mb-6">
                            <h5 class="card-header pb-0 text-sm-start text-center">Properties List</h5>
                            <div class="table-responsive mb-4">
                                <table class="table table-hover">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col" class="border">#</th>
                                            <th scope="col" class="border">User</th>
                                            <th scope="col" class="border">Role</th>
                                            <th scope="col" class="border">Address</th>
                                            <th scope="col" class="border">Status</th>
                                            <th scope="col" class="border">Joined on</th>
                                            <th scope="col" class="border">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody  data-entity-type="category"  >
                                        @foreach($rows as $row)
                                        <tr data-entity-id="{{ $row->id }}">
                                            <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-start align-items-center user-name">
                                                    <div class="avatar-wrapper">
                                                        <div class="avatar avatar-sm me-4">
                                                            <img src="{{ App\Helper\Helper::getProfileImage('storage/user/'.$row->id, $row->profile_image) }}" alt="Avatar" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="app-user-view-account.html" class="text-heading text-truncate">
                                                            <span class="fw-medium">{{ $row->name }}</span>
                                                        </a>
                                                        <small>{{ $row->email }}</small>
                                                        <small>{{ $row->phone }}</small>
                                                    </div>
                                                </div>
                                            </td>   
                                            <td> role </td>   
                                            <td> 
                                                {{ $row->address }} 
                                                <small>{{ $row->state }}</small>
                                                <small>{{ $row->city }}</small>
                                                <small>{{ $row->postal_code }}</small>
                                            </td>   
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input entity-toggle" type="checkbox" data-entity-url="{{ route('admin.user.status.change') }}" data-entity-id="{{ $row->id }}" data-entity-type="user" {{ $row->status == 1 ? 'checked' : '' }}>
                                                </div>
                                            </td>
                                            <td><span class="row-number"></span> {{ App\Helper\Helper::formatStringDate($row->created_at, true)  }}</td>
                                            <td>                             
                                                <a href="{{route("admin.user", $row->id)}}">
                                                    <span class="btn-info badge" text-capitalized="">View</span>
                                                </a>

                                                <a href="{{route("admin.user.edit", $row->id)}}">
                                                    <span class="btn-primary badge" text-capitalized="">Edit</span>
                                                </a>

                                                <a href="{{route("admin.user", $row->id)}}">
                                                    <span class="btn-warning badge" text-capitalized="">Add property</span>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row custom-row ">
                                    <div class="col-sm-6 text-center text-sm-right order-sm-1">
                                        Showing {{ $rows->firstItem() }} to {{ $rows->lastItem() }} of {{ $rows->total() }} results
                                    </div>
                                    <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                                        {{ $rows->links() }}
                                    </div>
                                </div>
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
@include('admin.layouts.modal')
@endsection

@push('scripts')
@endpush
