@extends('user.layouts.app')
@section('content')
<div class="main-content-inner mt-48">  
    <div class="row"> 
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

                        <h6 class="mb-4 mt-3 text-center"><a href="#modalLogin" data-bs-toggle="modal">login now</a></h6> 
                    </div>
                </div>
             
            
        </div>
    </div>
</div>
@endsection

@push('scripts') 
@endpush