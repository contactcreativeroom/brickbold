@extends('admin.layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Eenquiries</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Product Eenquiries</h2>
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
                        <th scope="col" class="border">Property-Owner</th>
                        <th scope="col" class="border">Name</th>
                        <th scope="col" class="border">Email</th>
                        <th scope="col" class="border">Phone</th>
                        <th scope="col" class="border">Message</th>
                        <th scope="col" class="border">Created On</th>
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
                                        <img src="{{ App\Helper\Helper::getImage('storage/property/'.$row?->property->id, $row?->property?->image?->image) }}" alt="Avatar" class="rounded">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{route('property', $row?->property->slug)}}" class="text-heading text-truncate">
                                        <span class="fw-medium">{{$row?->property->title}}</span>
                                    </a>
                                    <small>Date: {{ App\Helper\Helper::formatStringDate($row?->property->created_at)  }}</small>
                                    <small>Views: {{$row?->property->views}}</small>
                                    <small class="text-btn text-color-primary" >{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row?->property->price)}}</small>
                                </div>
                            </div>
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
                            @else 
                                Admin
                            @endif                           

                        </td>   
                        <td>{{$row->name}} </td>   
                        <td>{{$row->email}} </td>   
                        <td>{{$row->phone}} </td>   
                        <td>{{$row->message}} </td>   
                        <td>{{ App\Helper\Helper::formatStringDate($row->created_at)  }}</td>
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