@extends('admin.layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Customers</h2>
            @if($rows->isEmpty())
            <div class="alert alert-danger text-center">
                No Categories found.
            </div>
            @else
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="border">#</th>
                        <th scope="col" class="border">Name</th>
                        <th scope="col" class="border">Email</th>
                        <th scope="col" class="border">Profile Image</th>
                        <th scope="col" class="border">Status</th>
                        <th scope="col" class="border">Added on</th>
                        <th scope="col" class="border">Operations</th>
                    </tr>
                </thead>
                <tbody  data-entity-type="category"  >
                    @foreach($rows as $row)
                    <tr data-entity-id="{{ $row->id }}">
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td>
                        <td><span class="row-number"></span> {{ $row->name }}</td>
                        <td><span class="row-number"></span> {{ $row->email }}</td>
                        <td><img src="{{ App\Helper\Helper::getProfileImage('storage/user/profile/'.$row->id, $row->profile_image) }}" alt="{{ $row->name }}" class="list-images"></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input entity-toggle" type="checkbox" data-entity-url="{{ route('admin.customer.status.change') }}" data-entity-id="{{ $row->id }}" data-entity-type="user" {{ $row->status == 1 ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td><span class="row-number"></span> {{ App\Helper\Helper::formatStringDate($row->created_at, true)  }}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{route("admin.customer", $row->id)}}">Detail</a>
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