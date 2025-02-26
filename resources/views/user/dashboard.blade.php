@extends('user.layouts.app')
@section('content')
<div class="page-layout">
    @include('user.layouts.sidebar')
    <!-- .main-content -->
    <div class="main-content w-100">
        <div class="main-content-inner  ">                
            @include('user.layouts.verify-email') 
            <div class="button-show-hide show-mb">
                <span class="body-1">Show Dashboard</span>
            </div>
            <div class="flat-counter-v2 tf-counter">
                <a href="{{route('user.properties')}}" class="counter-box">
                    <div class="box-icon">
                        <span class="icon ">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.5 3H9C8.20435 3 7.44129 3.31607 6.87868 3.87868C6.31607 4.44129 6 5.20435 6 6V30C6 30.7956 6.31607 31.5587 6.87868 32.1213C7.44129 32.6839 8.20435 33 9 33H27C27.7956 33 28.5587 32.6839 29.1213 32.1213C29.6839 31.5587 30 30.7956 30 30V10.5L22.5 3Z"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M21 3V9C21 9.79565 21.3161 10.5587 21.8787 11.1213C22.4413 11.6839 23.2044 12 24 12H30"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 19.5H15" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21 19.5H24" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 25.5H15" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21 25.5H24" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Your listing</div>
                        <div class="box-count d-flex align-items-end">
                            <div class="number">{{ $properties->count() }}</div>
                            {{-- <span class="text">/50 remaining</span> --}}
                        </div>

                    </div>
                </a> 
                <a href="{{route('user.properties',["status"=>2])}}" class="counter-box">
                    <div class="box-icon">
                        <span class="icon "><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.5061 32.991C15.4409 33.0945 12.4177 32.2559 9.84374 30.5882C7.26982 28.9206 5.26894 26.504 4.11073 23.6642C2.95253 20.8243 2.69265 17.6977 3.36614 14.7056C4.03962 11.7135 5.61409 8.9998 7.87737 6.9301C10.1407 4.86039 12.984 3.5342 16.0242 3.13022C19.0644 2.72624 22.1554 3.2639 24.8807 4.67074C27.6059 6.07757 29.8344 8.28598 31.2659 10.9984C32.6974 13.7107 33.263 16.7967 32.8866 19.8405"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18 9V18L21 19.5" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21 27L27 33L33 27" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M27 21V33" stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg> </span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Pending</div>
                        <div class="box-count d-flex align-items-end">
                            <div class="number">{{ $properties->where('status', 2)->count() }}</div>
                        </div>
                    </div>
                </a> 
                <a href="{{route('user.properties',["status"=>1])}}" class="counter-box">
                    <div class="box-icon">
                        <span class="icon ">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 33H27C27.7956 33 28.5587 32.6839 29.1213 32.1213C29.6839 31.5587 30 30.7956 30 30V10.5L22.5 3H9C8.20435 3 7.44129 3.31607 6.87868 3.87868C6.31607 4.44129 6 5.20435 6 6V9"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M21 3V9C21 9.79565 21.3161 10.5587 21.8787 11.1213C22.4413 11.6839 23.2044 12 24 12H30"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M15.4348 16.05C14.9224 15.5384 14.2692 15.191 13.5586 15.0521C12.848 14.9132 12.1121 14.989 11.4448 15.27C11.0098 15.45 10.6048 15.72 10.2748 16.065L9.74976 16.575L9.22476 16.065C8.71531 15.5539 8.0656 15.2055 7.35797 15.064C6.65033 14.9225 5.9166 14.9942 5.24976 15.27C4.79976 15.45 4.40976 15.72 4.06476 16.065C2.63976 17.475 2.56476 19.86 4.36476 21.675L9.74976 27L15.1498 21.675C16.9498 19.86 16.8598 17.475 15.4348 16.065V16.05Z"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Active</div>
                        <div class="d-flex align-items-end">
                            <div class="number">{{ $properties->where('status', 1)->count() }}</div>
                        </div>

                    </div>
                </a> 
                <a href="{{route('user.properties',["status"=>3])}}" class="counter-box">
                    <div class="box-icon">
                        <span class="icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M31.5 22.5C31.5 23.2956 31.1839 24.0587 30.6213 24.6213C30.0587 25.1839 29.2956 25.5 28.5 25.5H10.5L4.5 31.5V7.5C4.5 6.70435 4.81607 5.94129 5.37868 5.37868C5.94129 4.81607 6.70435 4.5 7.5 4.5H28.5C29.2956 4.5 30.0587 4.81607 30.6213 5.37868C31.1839 5.94129 31.5 6.70435 31.5 7.5V22.5Z"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12 18C12.7956 18 13.5587 17.6839 14.1213 17.1213C14.6839 16.5587 15 15.7956 15 15V12H12"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M21 18C21.7956 18 22.5587 17.6839 23.1213 17.1213C23.6839 16.5587 24 15.7956 24 15V12H21"
                                    stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </span>
                    </div>
                    <div class="content-box">
                        <div class="title-count text-variant-1">Sold</div>
                        <div class="d-flex align-items-end">
                            <div class="number">{{ $properties->where('status', 3)->count() }}</div>
                        </div>
                    </div>
                </a> 
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="widget-box-2 wd-listing mb-24">
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
                                                        <img src="{{ App\Helper\Helper::getImage('storage/property/'.$row->id, $row?->image?->image) }}" alt="images" class="cover-img ht-125">
                                                    </div>
                                                    <div class="content">
                                                        <div class="title">
                                                            <a href="{{route('property', $row->slug)}}" target="_blank" class="link">{{$row->title}}</a> 
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
                </div>
                <div class="col-xl-3 d-none">
                    <div class="widget-box-2 mess-box mb-20">
                        <h5 class="title">Messages</h5>
                        <ul class="list-mess">
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png9.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Themesflat</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque
                                    vulputate tincidunt. Maecenas lorem sapien </p>
                            </li>
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png10.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">ThemeMu</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Nullam lacinia lorem id sapien suscipit, vitae pellentesque metus maximus.
                                    Duis
                                    eu mollis dolor. Proin faucibus eu lectus a eleifend </p>
                            </li>
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png11.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Cameron Williamson</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>In consequat lacus augue, a vestibulum est aliquam non</p>
                            </li>
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png12.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Esther Howard</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Cras congue in justo vel dapibus. Praesent euismod, lectus et aliquam pretium
                                </p>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="widget-box-2 mess-box">
                        <h5 class="title">Recent Reviews</h5>
                        <ul class="list-mess">
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png13.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Bessie Cooper</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Maecenas eu lorem et urna accumsan vestibulum vel vitae magna. </p>
                                <div class="ratings">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                            </li>
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png14.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Annette Black</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Nullam rhoncus dolor arcu, et commodo tellus semper vitae. Aenean finibus
                                    tristique lectus, ac lobortis mauris venenatis ac. </p>
                                <div class="ratings">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                            </li>
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png15.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Ralph Edwards</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra
                                    semper
                                    convallis. Integer vestibulum tempus tincidunt. </p>
                                <div class="ratings">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                            </li>
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png16.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Jerome Bell</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Fusce sit amet purus eget quam eleifend hendrerit nec a erat. Sed turpis
                                    neque,
                                    iaculis blandit viverra ut, dapibus eget nisi. </p>
                                <div class="ratings">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                            </li>
                            <li class="mess-item">
                                <div class="user-box">
                                    <div class="avatar">
                                        <img src="{{ url('frontend/images/avatar/avt-png17.png')}}" alt="avt">
                                    </div>
                                    <div class="content">
                                        <div class="name fw-6">Albert Flores</div>
                                        <span class="caption-2 text-variant-3">3 day ago</span>
                                    </div>
                                </div>
                                <p>Donec bibendum nibh quis nisl luctus, at aliquet ipsum bibendum. Fusce at dui
                                    tincidunt nulla semper venenatis at et magna. Mauris turpis lorem, ultricies
                                    vel
                                    justo sed.</p>
                                <div class="ratings">
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                    <i class="icon-start"></i>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-xl-9">
                    @include('user.layouts.footer')
                </div>
            </div> --}}

        </div>

        <div class="overlay-dashboard"></div>
    </div><!-- /.main-content -->

</div>
@endsection

@push('scripts') 
@endpush