@extends('admin.layouts.app')

@section('content')
                              
<!-- Content Wrapper. Contains page content -->
<div class="container py-5">
    <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                        <li class="breadcrumb-item active">Social</li>
                    </ol>
                </nav>
            </div>
        </div>  

    <!-- Main content -->
    <div class="content-wrapper">
      <div class="container-fluid">

      <div class="card card-primary card-outline">
          <!-- <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Vertical Tabs Examples
            </h3>
          </div> -->
          <div class="card-body">
            <div class="row">
                <div class="col-5 col-sm-3">
                  @include('admin.setting.side')
                </div>
                <div class="col-7 col-sm-9">

                  <div class="">
                    <div class="tab-pane text-left fade show active">

                    <div class="card-header1 d-flex justify-content-between p-0">
                      <h3 class="card-title py-3">Social Links</h3>
                    </div>
                    
                    <form action="{{ route('admin.settings.social') }}" method="post" enctype='multipart/form-data'>
                      @csrf
                        <div class="card-body1">
                          <div class="row">
                            <div class="col-md-10">

                            <div class="form-group mt-3">
                              <label for="facebook_social">Facebook Social Link</label>
                              <input type="text" class="form-control {{ $errors->has('facebook_social') ? ' is-invalid' : '' }}" id="facebook_social" placeholder="Enter Facebook link" name="facebook_social" value="@if(old('facebook_social')!=null){{old('facebook_social')}}@elseif(!empty($facebookSocialDB)){{$facebookSocialDB}}@endif">
                              @if($errors->has('facebook_social'))
                                <span class="invalid-feedback">
                                  {{ $errors->first('facebook_social') }}
                                </span>
                              @endif
                            </div>
                            
                            <div class="form-group mt-3">
                              <label for="instagram_social">Instagram Social Link</label>
                              <input type="text" class="form-control {{ $errors->has('instagram_social') ? ' is-invalid' : '' }}" id="instagram_social" placeholder="Enter Instagram link" name="instagram_social" value="@if(old('instagram_social')!=null){{old('instagram_social')}}@elseif(!empty($instagramSocialDB)){{$instagramSocialDB}}@endif">
                              @if($errors->has('instagram_social'))
                                <span class="invalid-feedback">
                                  {{ $errors->first('instagram_social') }}
                                </span>
                              @endif
                            </div>
                            
                            <div class="form-group mt-3">
                              <label for="twitter_social">Twitter Social Link</label>
                              <input type="text" class="form-control {{ $errors->has('twitter_social') ? ' is-invalid' : '' }}" id="twitter_social" placeholder="Enter Twitter link" name="twitter_social" value="@if(old('twitter_social')!=null){{old('twitter_social')}}@elseif(!empty($twitterSocialDB)){{$twitterSocialDB}}@endif">
                              @if($errors->has('twitter_social'))
                                <span class="invalid-feedback">
                                  {{ $errors->first('twitter_social') }}
                                </span>
                              @endif
                            </div>
                            
                            <div class="form-group mt-3">
                              <label for="pinterest_social">Pinterest Social Link</label>
                              <input type="text" class="form-control {{ $errors->has('pinterest_social') ? ' is-invalid' : '' }}" id="pinterest_social" placeholder="Enter Pinterest link" name="pinterest_social" value="@if(old('pinterest_social')!=null){{old('pinterest_social')}}@elseif(!empty($pinterestSocialDB)){{$pinterestSocialDB}}@endif">
                              @if($errors->has('pinterest_social'))
                                <span class="invalid-feedback">
                                  {{ $errors->first('pinterest_social') }}
                                </span>
                              @endif
                            </div>
                            
                            <div class="form-group mt-3">
                              <label for="youtube_social">Youtube Social Link</label>
                              <input type="text" class="form-control {{ $errors->has('youtube_social') ? ' is-invalid' : '' }}" id="youtube_social" placeholder="Enter Youtube link" name="youtube_social" value="@if(old('youtube_social')!=null){{old('youtube_social')}}@elseif(!empty($youtubeSocialDB)){{$youtubeSocialDB}}@endif">
                              @if($errors->has('youtube_social'))
                                <span class="invalid-feedback">
                                  {{ $errors->first('youtube_social') }}
                                </span>
                              @endif
                            </div>
                            

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <!-- <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div> -->
                      </form>
                    
                    </div>
                  </div>

                </div>
              </div>
          <!-- /.row -->
          </div>
          <!-- /.card -->
        </div>

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection


@push('scripts')
    {{-- page specific JS goes here --}}
    <!-- <script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script> -->

@endpush



