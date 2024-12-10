@extends('admin.layouts.app')



@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub admins</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Sub admins</h2>
            <div class="row">
                <div class="col-sm-4 pb-4">
                    <a href="{{ route('admin.subadmin') }}" class="btn btn-primary">Add sub admin</a>
                </div>
            </div>
            @if($rows->isEmpty())
            <div class="alert alert-danger text-center">
                No data found.
            </div>
            @else
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="border">#</th>
                        <th scope="col" class="border">Name</th>
                        <th scope="col" class="border">Email</th>
                        <th scope="col" class="border">Phone</th>
                        <th scope="col" class="border">Image</th>
                        <th scope="col" class="border">Status</th>
                        <th scope="col" class="border">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $row)
                    <tr class="sortable-row" data-entity-id="{{ $row->id }}">
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td>
                        {{-- <td><i class="fas fa-arrows-alt"></i></td> --}}
                        <td><span class="row-number"></span> {{ $row->name }}</td>
                        <td><span class="row-number"></span> {{ $row->email }}</td>
                        <td><span class="row-number"></span> {{ $row->phone }}</td>
                        <td><img src="{{ App\Helper\Helper::getImage('storage/subadmin/'.$row->id, $row->image) }}" alt="{{ $row->title }}" class="list-images"></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input entity-toggle" type="checkbox" data-entity-url="{{ route('admin.subadmin.status.change') }}" data-entity-id="{{ $row->id }}" data-entity-type="subadmin" {{ $row->status == 1 ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('admin.subadmin.edit', $row->id) }}">Edit</a>                                 
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-danger delete-entity" href="javascript:void(0)" data-entity-url="{{ route('admin.subadmin.delete', $row->id) }}" data-entity-id="{{ $row->id }}" data-entity-type="subadmin"  data-entity-title="{{ $row->title }}">Delete</a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('admin.subadmin.edit', $row->id) }}">Login</a>                                 
                            </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

@endpush