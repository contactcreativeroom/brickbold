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
                        <th scope="col" class="border">Property</th>
                        <th scope="col" class="border">Address</th>
                        <th scope="col" class="border">For-Type</th>
                        <th scope="col" class="border">Type</th>
                        <th scope="col" class="border">Status</th>
                        <th scope="col" class="border">user</th>
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
                        <td class="sorting_1">
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
                        </td>
                        <td>  

                            <a href="{{route("admin.property.edit", $row->id)}}">
                                <span class="btn-primary badge" text-capitalized="">Edit</span>
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