@extends('user.layouts.app')
@section('content')
    <div class="page-layout">
        @include('user.layouts.sidebar')
        <div class="main-content w-100">
            <div class="main-content-inner wrap-dashboard-content">
                <div class="button-show-hide show-mb">
                    <span class="body-1">Show Dashboard</span>
                </div> 
                <div class="widget-box-2 wd-listing mt-20">
                    <h3 class="title">My Favorites</h3>
                    <div class="wrap-table">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Listing</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rows as $key => $row)
                                        <tr class="file-delete">
                                            {{-- <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td> --}}
                                            <td>
                                                <div class="listing-box">
                                                    <div class="images">
                                                        <img src="{{ App\Helper\Helper::getImage('storage/property/'.$row?->property->id, $row?->property?->image?->image) }}" alt="images" style="height:110px;">
                                                    </div>
                                                    <div class="content">
                                                        <div class="title">
                                                            <a href="{{route('property', $row?->property->id)}}" class="link">{{$row?->property->title}}</a> 
                                                        </div>
                                                        <div class="text-date">Posting date: {{ App\Helper\Helper::formatStringDate($row?->property->created_at)  }}</div>
                                                        <div class="text-btn text-color-primary">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row?->property->price)}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="status-wrap">
                                                    <a href="javascript:void(0)" class="btn-status {{ strtolower(config('constants.PROPERTY_STATUSES')[$row?->property->status]) }}"> {{config('constants.PROPERTY_STATUSES')[$row?->property->status]}} </a>
                                                </div> 
                                            </td>
                                            <td> 
                                                {{config('constants.TYPE')[$row?->property->type]}}
                                            </td>
                                            <td>
                                                <ul class="list-action">                                                     
                                                    <li>
                                                        <a href="{{route('user.favorite.delete', $row->id)}}" class="item confirm-navigation">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568"
                                                                    stroke="#A3ABB0" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $rows->links('vendor.pagination.frontend-bootstrap-4') }}
                    </div>
                </div>
                @include('user.layouts.footer')
            </div>
            <div class="overlay-dashboard"></div>


        </div><!-- /.main-content -->



    </div>
@endsection

@push('scripts')
@endpush
