@extends('front.layouts.app')
@section('content')
    <!-- flat-title -->
    <section class="flat-title ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-inner ">
                        <ul class="breadcrumb">
                            <li><a class="home fw-6 text-color-3" href="{{route('home')}}">Home</a></li>
                            <li>{{$page->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /flat-title -->

    <!-- .main-content -->
    <div class="main-content tf-spacing-6 header-fixed custom-pages">
        <!-- section-faq -->
        <section class="section-faq ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="heading-section  mb-48">
                            <h2 class="title ">{{$page->title}}</h2>
                        </div> 
                        <div class="tf-faq mb-49 table-responsive">                        
                            <p class="faq-body">{!! $page->description !!}</p>                             
                        </div>
                       
                    </div>
                     
                </div>
            </div>
        </section>
        <!-- section-faq -->
    </div>
    <!-- /main-content -->
@endsection

@push('scripts') 
@endpush
