@extends('admin.layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bookings</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Bookings</h2> 
            @if($rows->isEmpty())
            <div class="alert alert-danger text-center">
                No Bookings found.
            </div>
            @else
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="border">#</th>
                        <th scope="col" class="border">Unique Code</th>
                        <th scope="col" class="border">Service</th>
                        <th scope="col" class="border">User</th>
                        <th scope="col" class="border">Hours</th>
                        <th scope="col" class="border">Total Price</th>
                        <th scope="col" class="border">Status</th>
                        <th scope="col" class="border">Added on</th>
                        <th scope="col" class="border">Operations</th>
                    </tr>
                </thead>
                <tbody  data-entity-type="category"  >
                    @foreach($rows as $row) 
                    <tr data-entity-id="{{ $row->id }}">
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td>
                        <td>{{ $row->booking_unique_code }}</td>
                        <td>{{ $row->service->name }}</td>
                        <td>{!! $row->name.'<br>('.$row->email.')' !!}</td> 
                        <td>{{ $row->total_hours }}</td>
                        <td>{{ config("constants.CURRENCIES.symbol").$row->total_price }}</td>
                        <td>
                            @if ($row->booking_status == 'Completed')
                                @if ($row->is_dispute_raised == 1)
                                    <small class="text-danger text-nowrap fw-semibold"> Disputed </small>
                                @else
                                    <small class="text-success text-nowrap fw-semibold"> {{ $row->booking_status }} </small>
                                @endif
                                {!! $row?->rating ? '<br><span style="--rating: '.$row?->rating?->rating.'"></span>'  : '' !!}
                            @else
                                <small class="text-info text-nowrap fw-semibold"> {{ $row->booking_status }} </small>
                            @endif 
                        </td>                         
                        <td>{{ App\Helper\Helper::formatStringDate($row->created_at, true)  }}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="{{route('admin.booking', $row->id )}}">Detail</a>
                                <a class="btn btn-primary" href="{{route('admin.booking.invoice', $row->id )}}">Invoice</a>
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