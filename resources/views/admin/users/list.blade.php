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
        <div class="container">
            <h2>Users</h2>
            <div class="card-header  mb-5">
                <h5 class="card-title mb-0">Search Filters</h5>
                <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0 g-6 mb-3">
                    <div class="col-md-4 user_role">
                        <select id="UserRole" class="form-select text-capitalize">
                            <option value=""> Select Role </option>
                            <option value="Admin">Admin</option>
                            <option value="Author">Author</option>
                            <option value="Editor">Editor</option>
                            <option value="Maintainer">Maintainer</option>
                            <option value="Subscriber">Subscriber</option>
                        </select>
                    </div>
                    <div class="col-md-4 user_plan">
                        <select id="UserPlan" class="form-select text-capitalize">
                            <option value=""> Select Plan </option>
                            <option value="Basic">Basic</option>
                            <option value="Company">Company</option>
                            <option value="Enterprise">Enterprise</option>
                            <option value="Team">Team</option>
                        </select>
                    </div>
                    <div class="col-md-4 user_status">
                        <select id="FilterTransaction" class="form-select text-capitalize">
                            <option value=""> Select Status </option>
                            <option value="Pending" class="text-capitalize">Pending</option>
                            <option value="Active" class="text-capitalize">Active</option>
                            <option value="Inactive" class="text-capitalize">Inactive</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-secondary add-new btn-primary" type="submit" >
                    <span class="d-none d-sm-inline-block">submit</span>
                </button>
            </div>
            @if($rows->isEmpty())
            <div class="alert alert-danger text-center">
                No Categories found.
            </div>
            @else
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
                                    <div class="avatar avatar-xl me-4">
                                        <img src="{{ App\Helper\Helper::getProfileImage('storage/user/'.$row->id, $row->profile_image) }}" alt="Avatar" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{route('admin.user', $row->id)}}" class="text-heading text-truncate">
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
            @endif
        </div>
    </div>
</div>
<!-- / Content -->
@endsection

@push('scripts')

@endpush