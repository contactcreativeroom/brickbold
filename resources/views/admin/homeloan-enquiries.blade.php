@extends('admin.layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Home Loan Eenquiries</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Home Loan Enquiries</h2>             
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
                        <th scope="col" class="border">Phone</th>
                        <th scope="col" class="border">Amount</th>
                        <th scope="col" class="border">City</th> 
                        <th scope="col" class="border">Finalized</th>
                        <th scope="col" class="border">Enquired On</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $row)
                    <tr data-entity-id="{{ $row->id }}">
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td> 
                        <td>{{$row->phone}}</td>
                        <td>{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->amount)}}</td>
                        <td>{{$row->city}}</td>
                        <td>{{$row->finalized}}</td>
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