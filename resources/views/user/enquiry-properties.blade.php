@extends('user.layouts.app')
@section('content')
    <div class="page-layout">
        @include('user.layouts.sidebar')
        <!-- .main-content -->
        <div class="main-content w-100">
            <div class="main-content-inner style-3">
                <div class="button-show-hide show-mb">
                    <span class="body-1">Show Dashboard</span>
                </div>
                <div class="widget-box-2 wd-listing">
                    <h3 class="title">Property Enquiries</h3>
                    <div class="tf-new-listing w-100">
                        <div class="new-listing wrap-table ">
                            <div class="table-content">
                                <div class="wrap-listing table-responsive">
                                    <table class="table-save-search">
                                        <thead>
                                            <tr>
                                                <th class="fw-6">Property</th>
                                                <th class="fw-6">Requested From</th>
                                                <th class="fw-6">Created On</th>
                                                <th class="fw-6">Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($rows as $key => $row)
                                            <tr class="file-delete">
                                                <td>
                                                    <div class="listing-box">
                                                        <div class="images">
                                                            <img src="{{ App\Helper\Helper::getImage('storage/property/'.$row->property_id, $row?->property->image?->image) }}" alt="images" style="height:110px;">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title">
                                                                <a href="{{route('property', $row->property->slug)}}" class="link">{{$row->property->title}}</a> 
                                                            </div>
                                                            <div class="text-date">Posting date: {{ App\Helper\Helper::formatStringDate($row->property->created_at)  }}</div>
                                                            <div class="text-date">Views: {{$row->property->views}}</div>
                                                            <div class="text-btn text-color-primary">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->property->price)}}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <div>Name: {{$row->name}}</div>
                                                    <div>Email: {{$row->email}}</div>
                                                    <div>Phone: {{$row->phone}}</div>
                                                </td>
                                                
                                                <td>
                                                    <div>{{ App\Helper\Helper::formatStringDate($row->created_at)  }}</div>
                                                </td>
                                                <td> <div>{{$row->message}}</div> </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="wrap-pagination">
                                    <p class="text-1">Showing {{ $rows->firstItem() }}-{{ $rows->lastItem() }} of {{ $rows->total() }} results.</p>
                                    {{ $rows->links() }}
                                </div> 
                            </div>
                        </div>
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
