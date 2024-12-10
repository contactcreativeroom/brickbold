@extends('admin.layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.customers') }}">Customers</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.customer', $user->id) }}">{{ $user->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chats</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="app-chat card overflow-hidden">
                <div class="row g-0"> 
                    <!-- Chat & Contacts -->
                    <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end" id="app-chat-contacts">
                        <div class="sidebar-header px-6 border-bottom d-flex align-items-center">
                            <div class="d-flex align-items-center me-6 me-lg-0">
                                <div class="flex-shrink-0 avatar avatar-online me-4" data-bs-toggle="sidebar" data-overlay="app-overlay-ex" data-target="#app-chat-sidebar-left">
                                    <img class="user-avatar rounded-circle cursor-pointer" src="{{ $user->full_profile_image }}" alt="{{$user->name}}">
                                </div>
                                <div class="flex-grow-1 input-group input-group-merge rounded-pill">
                                     
                                </div>
                            </div>
                            <i class="bx bx-x bx-lg cursor-pointer position-absolute top-50 end-0 translate-middle d-lg-none d-block" data-overlay="" data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i>
                        </div>
                        <div class="sidebar-body ps ps--active-y">
                            <!-- Chats -->
                            <ul class="list-unstyled chat-contact-list py-2 mb-0" id="chat-list">
                                <li class="chat-contact-list-item chat-contact-list-item-title mt-0">
                                    <h5 class="text-primary mb-0">Chats</h5>
                                </li>
                                @if ($rows->count() > 0)
                                    @php
                                        $firstRow = $rows->firstWhere('by', 1);
                                    @endphp
                                    <li class="chat-contact-list-item active mb-1">
                                        <a class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar avatar-offline">
                                                <img src="{{ $vendor->full_image }}" alt="{{ $vendor->name }}" class="rounded-circle">
                                            </div>
                                            <div class="chat-contact-info flex-grow-1 ms-4">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="chat-contact-name text-truncate fw-normal m-0">{{ $vendor->name }}</h6>
                                                    <small class="text-muted">{{ App\Helper\Helper::formatChatDate($firstRow?->created_at)}}</small>
                                                </div>
                                                <small class="chat-contact-status text-truncate">{{ $firstRow->message }}</small>
                                            </div>
                                        </a>
                                    </li>
                                @else
                                    <li class="chat-contact-list-item chat-list-item-0 ">
                                        <h6 class="text-muted mb-0">No Chats Found</h6>
                                    </li>
                                @endif
                                 
                                

                                 
                            </ul>
                            <!-- Contacts -->
                            
                        </div>
                    </div>
                    <!-- /Chat contacts -->
                    <!-- Chat History -->
                    <div class="col app-chat-history">
                        <div class="chat-history-wrapper">
                            <div class="chat-history-header border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex overflow-hidden align-items-center">
                                        <i class="bx bx-menu bx-lg cursor-pointer d-lg-none d-block me-4" data-bs-toggle="sidebar" data-overlay="" data-target="#app-chat-contacts"></i>
                                        <div class="flex-shrink-0 avatar avatar-online">
                                            <img src="{{ $vendor->full_image }}" alt="{{ $vendor->name }}"  class="rounded-circle" data-bs-toggle="sidebar" data-overlay="" data-target="#app-chat-sidebar-right">
                                        </div>
                                        <div class="chat-contact-info flex-grow-1 ms-4">
                                            <h6 class="m-0 fw-normal">{{ $vendor->name }}</h6>
                                            <small class="user-status text-body">{{ $vendor?->service->name }}</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                         
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history-body ps ps--active-y">
                                <ul class="list-unstyled chat-history">

                                    @foreach ($rows as $row)   
                                        @if ($row->by == 2)
                                            <li class="chat-message chat-message-right">
                                                <div class="d-flex overflow-hidden">
                                                    <div class="chat-message-wrapper flex-grow-1">
                                                        <div class="chat-message-text">
                                                            <p class="mb-0">{!! $row->message !!}</p>
                                                        </div>
                                                        <div class="text-end text-muted mt-1">
                                                            <i class="bx bx-check-double bx-16px text-success me-1"></i>
                                                            <small>{{ App\Helper\Helper::formatChatDate($row->created_at)}}</small>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar flex-shrink-0 ms-4">
                                                        <div class="avatar avatar-sm">
                                                            <img src="{{ $row->user->full_profile_image }}" alt="{{ $row->user->name }}" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @else
                                            <li class="chat-message">
                                                <div class="d-flex overflow-hidden">
                                                    <div class="user-avatar flex-shrink-0 me-4">
                                                        <div class="avatar avatar-sm">
                                                            <img src="{{ $row->vendor->full_image }}" alt="{{ $row->vendor->name }}" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="chat-message-wrapper flex-grow-1">
                                                        <div class="chat-message-text">
                                                            <p class="mb-0">{!! $row->message !!}</p>
                                                        </div>
                                                        <div class="text-muted mt-1">
                                                            <small>{{ App\Helper\Helper::formatChatDate($row->created_at)}}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach 
                                </ul>
                            </div>
                            <!-- Chat message form -->
                           
                        </div>
                    </div>
                    <!-- /Chat History -->
                     
                    <div class="app-overlay"></div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
    <!-- Content wrapper -->
</div>
<!-- / Content -->
@endsection