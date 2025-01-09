@extends('admin.layouts.app')

@section('content')
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>

            <!-- <li class="breadcrumb-item active" aria-current="page">My Profile</li> -->
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-4">

        <div class="card mb-4">
          <div class="card-body text-center">
            <div class="position-relative">

              <img src="{{ App\Helper\Helper::getProfileImage('storage/subadmin/'.$admin->id, $admin->image) }}" alt="avatar" class="rounded-circle img-fluid"
                style="width: 150px;">
            </div>

            <h5 class="my-3">{{ $admin->name }}</h5>


          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <a href="{{ route('admin.profile.edit') }}" class="fa-solid fa-pencil" data-field="form"
            style="position: absolute; top: 5px; right: 5px; padding-top: 5px; padding-right: 5px;"></a>

          <div class="card-body">
            <div class=" row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>



              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $admin->name }}


                </p>

              </div>

            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $admin->email }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $admin->phone }}</p>
              </div>
            </div>

          </div>
        </div>



      </div>
    </div>
  </div>
  </div>
</section>
@endsection