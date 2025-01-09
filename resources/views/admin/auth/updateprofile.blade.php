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
                        <h3>Edit</h3>
                        <form action="{{ route('admin.profile.edit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ Auth::guard('admin')->user()->name }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ Auth::guard('admin')->user()->email }}">
                            </div>


                            <div class="form-group">
                                <label for="phone">Mobile</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    value="{{ Auth::guard('admin')->user()->phone }}">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Profile Image</label>
                                <input type="file" class="dropify" data-default-file="{{ App\Helper\Helper::getProfileImage('storage/subadmin/'.Auth::guard('admin')->user()->id, Auth::guard('admin')->user()->image) }}" name="image" />
                                @error('image')
                                <div class="text-danger">
                                    <small>{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
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