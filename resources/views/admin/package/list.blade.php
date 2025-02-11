@extends('admin.layouts.app')


@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Packages</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Packages</h2>
            <div class="card-header  mb-5">
                <h5 class="card-title mb-0">Search Filters</h5>
                <form action="{{ route('admin.packages') }}" method="get" enctype='multipart/form-data'>
                    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0 g-6 mb-3">
                        <div class="col-md-4 user_role">
                            <select  class="form-select text-capitalize" name="type">
                                <option value="">Select For </option>
                                @foreach (config('constants.PACKAGE_TYPE') as $key=>$value)
                                    <option value="{{$value}}" {{ old('type', request('type')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 user_plan">
                            <select  class="form-select text-capitalize" name="profile">
                                <option value="">Select Profile </option>
                                @foreach (config('constants.USER_TYPE') as $key=>$value)
                                    <option value="{{$value}}" {{ old('profile', request('profile')) == $value ? 'selected' : '' }} >{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 user_status">
                            <select id="FilterTransaction" class="form-select text-capitalize" name="status">
                                <option value=""> Select Status </option>
                                @foreach (config('constants.STATUS') as $key=>$value)
                                    <option value="{{$key}}" {{ old('status', request('status')) === (string)$key ? 'selected' : '' }} >{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-secondary add-new btn-primary" type="submit" >Submit</button>
                    <a href="{{ route('admin.packages') }}"  class="btn btn-secondary add-new btn-primary" >Reset</a>
                </form>
            </div>
            <div class="card-header d-flex align-items-center mb-5">
                <h5 class="card-title mb-0 flex-grow-1">Package List</h5>
                <div><a href="{{route('admin.package.add')}}" class="btn btn-primary">Add Package</a></div>
            </div>
            @if($rows->isEmpty())
            <div class="alert alert-danger text-center">
                No Records found.
            </div>
            @else
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="border">#</th>
                        <th scope="col" class="border">Name</th>
                        <th scope="col" class="border">Type</th>
                        <th scope="col" class="border">Profile</th>
                        <th scope="col" class="border">Days</th>
                        <th scope="col" class="border">Price</th>
                        <th scope="col" class="border">Discount(%)</th>
                        <th scope="col" class="border">Grand Total</th>
                        <th scope="col" class="border">Contacts</th>
                        <th scope="col" class="border">Status</th>
                        <th scope="col" class="border">Operations</th>
                    </tr>
                </thead>
                <tbody  data-entity-type="category"  >
                    @foreach($rows as $row)
                    <tr data-entity-id="{{ $row->id }}">
                        <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td>
                            
                        <td>{{ $row->name }} <br><small>Date: {{ App\Helper\Helper::formatStringDate($row->created_at)  }}</small></td>   
                        <td>{{ $row->type }}</td>    
                        <td>{{ $row->profile }}</td>   
                        <td>{{ $row->days }} </td>
                        <td>{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}</td>
                        <td>{{ $row->discount }}</td>
                        <td>{{ $row->grand_price }}</td>
                        <td>{{ $row->unit }}</td>   
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input entity-toggle" type="checkbox" data-entity-url="{{ route('admin.package.status.change') }}" data-entity-id="{{ $row->id }}" data-entity-type="user" {{ $row->status == 1 ? 'checked' : '' }}>
                            </div>
                        </td> 
                        <td>    
                            <a href="{{route("admin.package.edit", $row->id)}}">
                                <span class="btn-primary badge" text-capitalized="">Edit</span>
                            </a> 

                            {{-- <a href="{{route("admin.package.delete", $row->id)}}">
                                <span class="btn-primary badge" text-capitalized="">Delete</span>
                            </a>  --}}
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