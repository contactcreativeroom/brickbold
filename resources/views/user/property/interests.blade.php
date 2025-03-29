@extends('user.layouts.app')
@section('content')
@php
    $config =  App\Helper\Helper::getWebsiteConfig();
@endphp
    <div class="page-layout">
        @include('user.layouts.sidebar')
        <div class="main-content w-100">
            <div class="main-content-inner wrap-dashboard-content">
                <div class="button-show-hide show-mb">
                    <span class="body-1">Show Dashboard</span>
                </div> 
                <div class="widget-box-2 wd-listing mt-20">
                    <h3 class="title">My Interests</h3>
                    <div class="wrap-table">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Property</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Owner</th>
                                        <th>Created On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($rows as $key => $row)
                                        <tr class="file-delete">
                                            {{-- <td>{{ ($rows->currentPage() - 1) * $rows->perPage() + $loop->iteration }}.</td> --}}
                                            <td>
                                                <div class="listing-box">
                                                    <div class="images ht-125">
                                                        <img src="{{ App\Helper\Helper::getImage('storage/property/'.$row?->property->id, $row?->property?->image?->image) }}" alt="images" class="cover-img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="title">
                                                            <a href="{{route('property', $row?->property->slug)}}" class="link">{{$row?->property->title}}</a> 
                                                        </div>
                                                        <div class="text-date">ID: {{$row?->property->uid}}</div>
                                                        <div class="text-date">Posting date: {{ App\Helper\Helper::formatStringDate($row?->property->created_at)  }}</div>
                                                        <div class="text-date">Type: {{config('constants.TYPE')[$row?->property->type]}}</div>
                                                        <div class="text-date">Views: {{$row?->property?->views}}</div>
                                                        <div class="text-btn text-color-primary">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row?->property->price)}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            {{-- <td>
                                                <div class="status-wrap">
                                                    <a href="javascript:void(0)" class="btn-status {{ strtolower(config('constants.PROPERTY_STATUSES')[$row?->property->status]) }}"> {{config('constants.PROPERTY_STATUSES')[$row?->property->status]}} </a>
                                                </div> 
                                            </td> --}}
                                            <td> 
                                                <div class="content">
                                                    @if (isset($row->user->name))                                                    
                                                        <div class="title mb-0">
                                                            <a href="javascript:void(0)" class="link">{{$row?->user?->name}}</a> 
                                                        </div>
                                                        <div class="text-date">Email: {{$row?->user?->email}}</div>
                                                        <div class="text-date">Mobile: {{$row?->user?->phone}}</div>
                                                    @else
                                                        <div class="title mb-0">
                                                            <a href="javascript:void(0)" class="link">Contact to support</a> 
                                                        </div>
                                                        <div class="text-date">Email: {{ data_get($config, 'email', '') }}</div>
                                                        <div class="text-date">Mobile: {{ data_get($config, 'phone', '') }}</div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>  {{ App\Helper\Helper::formatStringDate($row->created_at)  }} </td>
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
