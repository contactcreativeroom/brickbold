@extends('front.layouts.app')
@section('content')
<section class="flat-title style-2 forgot-page">
    <div class="tf-container">
        <div class="row"> 
            <div class="col-lg-12">
                <div class="title-inner ">
                    <ul class="breadcrumb">
                        <li><a class="home fw-6 text-color-3" href="{{route('home')}}">Home</a></li>
                        <li><a class="home fw-6 text-color-3" href="{{route('login')}}">Login</a></li>
                        <li>Successfully</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 offset-3">  
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center text-center mb-10 mt-32">
                            <a href="javascript:void(0)" class="app-brand-link gap-2">
                                <img src="{{ App\Helper\Helper::getLogo(); }}" style="height:50px;">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <div class="text-center mb-10"> 
                            <div class="text-gray-400 fw-bold fs-4 text-success">Congratulation!! Password reset successfully.</div>
                            <!--end::Link-->
                        </div>

                        <h6 class="mb-4 mt-3 text-center"><a href="{{route('login')}}" >login now</a></h6> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts') 
@endpush