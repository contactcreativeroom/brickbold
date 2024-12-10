@extends('admin.layouts.app')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">My Profile</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Change Password</h3>
                        <form action="{{ route('admin.change.password') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Old Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="old_password" class="form-control" name="old_password"
                                        value="{{old('old_password')}}" placeholder="" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                </div>
                                @error('old_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">New Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="new_password" class="form-control" name="new_password"
                                        value="{{old('new_password')}}" placeholder="" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                </div>
                                @error('new_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="confirm_password" class="form-control"
                                        name="confirm_password" value="{{old('confirm_password')}}" placeholder=""
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('confirm_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>



                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    $('.dropify').dropify();
</script>

@endpush