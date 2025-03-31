@extends('admin.layouts.app')



@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Banners</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Banners</h2>
            <div class="card-header d-flex align-items-center mb-5">
                <h5 class="card-title mb-0 flex-grow-1">Banner List</h5>
                <div><a href="{{ route('admin.banner') }}" class="btn btn-primary">Add Banner</a></div>
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
                        <th scope="col" class="border">#</th>
                        <th scope="col" class="border">Title</th>
                        <th scope="col" class="border">Image</th>
                        <th scope="col" class="border">Status</th>
                        <th scope="col" class="border">Operations</th>
                    </tr>
                </thead>
                <tbody id="sortableList" data-entity-type="banner" data-entity-url='{{route("admin.banner.priority.change")}}'>
                    @foreach($rows as $row)
                    <tr class="sortable-row" data-entity-id="{{ $row->id }}">
                        <td><i class="fas fa-arrows-alt"></i></td>
                        <td><span class="row-number"></span> {{ $row->title }}</td>
                        <td><img src="{{ App\Helper\Helper::getImage('storage/banner/'.$row->id, $row->image) }}" alt="{{ $row->title }}" class="list-images"></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input entity-toggle" type="checkbox" data-entity-url="{{ route('admin.banner.status.change') }}" data-entity-id="{{ $row->id }}" data-entity-type="banner" {{ $row->status == 1 ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{ route('admin.banner.edit', $row->id) }}">Edit</a>                                 
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-danger delete-entity" href="javascript:void(0)" data-entity-url="{{ route('admin.banner.delete', $row->id) }}" data-entity-id="{{ $row->id }}" data-entity-type="banner"  data-entity-title="{{ $row->title }}">Delete</a>
                            </div>
                        </td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

@endpush