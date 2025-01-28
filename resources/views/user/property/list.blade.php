@extends('user.layouts.app')
@section('content')
    <div class="page-layout">
        @include('user.layouts.sidebar')
        <div class="main-content w-100">
            <div class="main-content-inner wrap-dashboard-content">
                <div class="button-show-hide show-mb">
                    <span class="body-1">Show Dashboard</span>
                </div>
                <form action="{{ route('user.properties') }}" method="get" enctype='multipart/form-data'>
                 
                <div class="row">
                        <div class="col-md-3"> 
                            <fieldset class="box-fieldset">
                                <label>
                                    Post Status:<span>*</span>
                                </label>
                                <select class="form-control form-select nice-select" name="status" id="status">
                                    <option value="">All</option>
                                    @foreach (config('constants.PROPERTY_STATUSES') as $key=>$value)
                                        <option value="{{$key}}" {{ old('status', request('status')) == (string)$key ? 'selected' : '' }} >{{$value}}</option>
                                    @endforeach
                                </select> 
                            </fieldset> 
                        </div>
                        <div class="col-md-7">                            
                            <fieldset class="box-fieldset">
                                <label>
                                    Search:<span>*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Search by title" name="search" value="{{ request('search', '') }}">
                            </fieldset>                            
                        </div>
                        <div class="col-md-2">  
                            <button type="submit" class="tf-btn bg-color-primary pd-3 mt-5">
                                Search <i class="icon-MagnifyingGlass fw-6"></i>
                            </button>  
                        </div>
                </div>
                </form>
                <div class="widget-box-2 wd-listing mt-20">
                    <h3 class="title">My Properties</h3>
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
                                                        <img src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" alt="images" style="height:110px;">
                                                    </div>
                                                    <div class="content">
                                                        <div class="title">
                                                            <a href="{{route('property', $row->slug)}}" class="link">{{$row->title}}</a> 
                                                        </div>
                                                        <div class="text-date">ID: {{$row->uid}}</div>
                                                        <div class="text-date">Posting date: {{ App\Helper\Helper::formatStringDate($row->created_at)  }}</div>
                                                        <div class="text-date">Views: {{$row->views}}</div>
                                                        <div class="text-btn text-color-primary">{{ config('constants.CURRENCIES.symbol'). App\Helper\Helper::priceFormat($row->price)}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="status-wrap">
                                                    <a href="javascript:void(0)" class="btn-status {{ strtolower(config('constants.PROPERTY_STATUSES')[$row->status]) }}"> {{config('constants.PROPERTY_STATUSES')[$row->status]}} </a>
                                                </div> 
                                            </td>
                                            <td> 
                                                {{config('constants.TYPE')[$row->type]}}
                                            </td>
                                            <td>
                                                @if ($activateButton)
                                                    @php
                                                        $isAssigned = $row->subscriptions()->where('end_date', '>=', now())->count();
                                                    @endphp
                                                    @if (!$isAssigned)
                                                        <div class="status-wrap mb-2">
                                                            <a href="{{route('user.property.assign', $row->id)}}" class="btn-status bg-secondary">Activate</a>
                                                        </div>
                                                    @endif                                                                                                        
                                                @endif 
                                                <ul class="list-action">
                                                    <li>
                                                        <a href="{{route('user.property.edit', $row->id)}}" class="item">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016"
                                                                    stroke="#A3ABB0" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            Edit</a>
                                                    </li>
                                                    @if ($row->status !=3)
                                                        <li>
                                                            <a href="{{route('user.property.sold', $row->id)}}" class="item confirm-navigation">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.2427 12.2427C13.3679 11.1175 14.0001 9.59135 14.0001 8.00004C14.0001 6.40873 13.3679 4.8826 12.2427 3.75737C11.1175 2.63214 9.59135 2 8.00004 2C6.40873 2 4.8826 2.63214 3.75737 3.75737M12.2427 12.2427C11.1175 13.3679 9.59135 14.0001 8.00004 14.0001C6.40873 14.0001 4.8826 13.3679 3.75737 12.2427C2.63214 11.1175 2 9.59135 2 8.00004C2 6.40873 2.63214 4.8826 3.75737 3.75737M12.2427 12.2427L3.75737 3.75737"
                                                                        stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                Sold
                                                            </a>
                                                        </li>
                                                    @endif                                                    
                                                    <li>
                                                        <a href="{{route('property', $row->slug)}}" class="item">
                                                            <i class="icon-pass icon-view" style="color:#A3ABB0;"></i> 
                                                            View</a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="wrap-pagination">
                            <p class="text-1">Showing {{ $rows->firstItem() }}-{{ $rows->lastItem() }} of {{ $rows->total() }} results.</p>
                            {{ $rows->links('vendor.pagination.frontend-bootstrap-4') }}
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
