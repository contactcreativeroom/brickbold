@extends('admin.layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Eenquiries</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Contact Enquiries</h2>             
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
                        <th scope="col" class="border">Name</th>
                        <th scope="col" class="border">Email</th> 
                        <th scope="col" class="border">Phone</th>
                        <th scope="col" class="border">Interest</th>
                        <th scope="col" class="border">message</th>
                        <th scope="col" class="border">Enquired On</th>
                    </tr>
                </thead>
                <tbody  data-entity-type="category"  >
                    @foreach($rows as $row)
                    <tr data-entity-id="{{ $row->id }}">
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td> 
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->interest}}</td>
                        <td>{{$row->message}}</td>
                        <td>{{ App\Helper\Helper::formatStringDate($row->created_at)  }}</td> 
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