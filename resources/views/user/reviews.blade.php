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
                <div class="widget-box-2 mess-box">
                    <h3 class="title">Recent Reviews</h3>
                    <ul class="list-mess">
                        <li class="mess-item">
                            <div class="user-box">
                                <div class="avatar">
                                    <img src="images/avatar/avt-png13.png" alt="avt">
                                </div>
                                <div class="content justify-content-start">
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
                                    <img src="images/avatar/avt-png14.png" alt="avt">
                                </div>
                                <div class="content justify-content-start">
                                    <div class="name fw-6">Annette Black</div>
                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                </div>
                            </div>
                            <p>Nullam rhoncus dolor arcu, et commodo tellus semper vitae. Aenean finibus tristique
                                lectus, ac lobortis mauris venenatis ac. </p>
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
                                    <img src="images/avatar/avt-png15.png" alt="avt">
                                </div>
                                <div class="content justify-content-start">
                                    <div class="name fw-6">Ralph Edwards</div>
                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra semper
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
                                    <img src="images/avatar/avt-png16.png" alt="avt">
                                </div>
                                <div class="content justify-content-start">
                                    <div class="name fw-6">Jerome Bell</div>
                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                </div>
                            </div>
                            <p>Fusce sit amet purus eget quam eleifend hendrerit nec a erat. Sed turpis neque,
                                iaculis
                                blandit viverra ut, dapibus eget nisi. </p>
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
                                    <img src="images/avatar/avt-png17.png" alt="avt">
                                </div>
                                <div class="content justify-content-start">
                                    <div class="name fw-6">Albert Flores</div>
                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                </div>
                            </div>
                            <p>Donec bibendum nibh quis nisl luctus, at aliquet ipsum bibendum. Fusce at dui
                                tincidunt
                                nulla semper venenatis at et magna. Mauris turpis lorem, ultricies vel justo sed.
                            </p>
                            <div class="ratings">
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                                <i class="icon-start"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                @include('user.layouts.footer')
            </div>
            <div class="overlay-dashboard"></div>
        </div><!-- /.main-content -->


    </div>
@endsection

@push('scripts')
@endpush
