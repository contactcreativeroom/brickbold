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
                                            <h3 class="card-title py-3">Seo details</h3>
                                        </div>

                                        <form action="{{ route('admin.settings') }}" method="post"
                                            enctype='multipart/form-data'>
                                            @csrf
                                            <div class="card-body1">
                                                <div class="row">
                                                    <div class="col-md-10">

                                                        <div class="form-group  mt-3">
                                                            <label for="address">Address <span
                                                                    class="text-danger">*</span></label>
                                                            <textarea type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" id="address"
                                                                placeholder="Enter Contact Address" name="address">
@if (old('address') != null)
{{ old('address') }}
@elseif(!empty($addressDB))
{{ $addressDB }}
@endif
</textarea>
                                                            @if ($errors->has('address'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('address') }}
                                                                </span>
                                                            @endif
                                                        </div>



                                                        <div class="form-group mt-3">
                                                            <label for="phone">Phone<span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">+@if (!empty($countryCodeDB))
                                                                            {{ $countryCodeDB }}@else{{ config('constants.CONTACT.country_code') }}
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                    class="form-control only-numbers {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                                    id="phone" maxlength="10"
                                                                    placeholder="Enter Contact Phone" name="phone"
                                                                    value="@if (old('phone') != null) {{ old('phone') }}@elseif(!empty($phoneDB)){{ $phoneDB }} @endif">
                                                            </div>
                                                            @if ($errors->has('phone'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('phone') }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="whatsapp">WhatsApp<span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">+@if (!empty($countryCodeDB))
                                                                            {{ $countryCodeDB }}@else{{ config('constants.CONTACT.country_code') }}
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                    class="form-control only-numbers {{ $errors->has('whatsapp') ? ' is-invalid' : '' }}"
                                                                    id="whatsapp" maxlength="10"
                                                                    placeholder="Enter Whatsapp number" name="whatsapp"
                                                                    value="@if (old('whatsapp') != null) {{ old('whatsapp') }}@elseif(!empty($whatsappDB)){{ $whatsappDB }} @endif">
                                                            </div>
                                                            @if ($errors->has('whatsapp'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('whatsapp') }}
                                                                </span>
                                                            @endif
                                                        </div>


                                                        <div class="form-group mt-3">
                                                            <label for="email">Email<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text"
                                                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                                id="email" placeholder="Enter Contact Email"
                                                                name="email"
                                                                value="@if (old('email') != null) {{ old('email') }}@elseif(!empty($emailDB)){{ $emailDB }} @endif">
                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('email') }}
                                                                </span>
                                                            @endif
                                                        </div>


                                                        <div class="form-group mt-3">
                                                            <label for="light_logo">Light Background Logo<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="file"
                                                                class="form-control form-control-solid {{ $errors->has('light_logo') ? ' is-invalid' : '' }}"
                                                                placeholder="" name="light_logo" />
                                                            @if ($errors->has('light_logo'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('light_logo') }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        @if (!empty($lightLogoDB) && ($lightLogoDB != null || $lightLogoDB != ''))
                                                            <div class="form-group mt-3">
                                                                <img class="img-thumbnail mb-4"
                                                                    src="{{ asset('storage/logo/') }}/{{ $lightLogoDB }}" />
                                                            </div>
                                                        @endif

                                                        <div class="form-group mt-3">
                                                            <label for="dark_logo">Dark Background Logo<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="file"
                                                                class="form-control form-control-solid {{ $errors->has('dark_logo') ? ' is-invalid' : '' }}"
                                                                placeholder="" name="dark_logo" />
                                                            @if ($errors->has('dark_logo'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('dark_logo') }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        @if (!empty($darkLogoDB) && ($darkLogoDB != null || $darkLogoDB != ''))
                                                            <div class="form-group mt-3">
                                                                <img class="img-thumbnail mb-4"
                                                                    src="{{ asset('storage/logo/') }}/{{ $darkLogoDB }}" />
                                                            </div>
                                                        @endif

                                                        <div class="form-group mt-3">
                                                            <label for="favicon">Favicon<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="file"
                                                                class="form-control form-control-solid {{ $errors->has('favicon') ? ' is-invalid' : '' }}"
                                                                placeholder="" name="favicon" />
                                                            @if ($errors->has('favicon'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('favicon') }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        @if (!empty($faviconDB) && ($faviconDB != null || $faviconDB != ''))
                                                            <div class="form-group mt-3">
                                                                <div style="max-width: 40px"> 

                                                                    <img class="img-thumbnail mb-4"
                                                                    src="{{ asset('storage/favicon/') }}/{{ $faviconDB }}" />

                                                                </div>
                                                            </div>
                                                        @endif

                                                        <div class="form-group mt-3">
                                                            <label for="page">Seo Title <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="seo_title"
                                                                class="form-control count-characters {{ $errors->has('seo_title') ? ' is-invalid' : '' }}"
                                                                id="seo_title" placeholder="Enter Seo Page Title"
                                                                name="seo_title"
                                                                value="@if (old('seo_title') != null) {{ old('seo_title') }}@elseif(!empty($seoTitleDB)){{ $seoTitleDB }} @endif">
                                                            <small><strong>Note: </strong> Add 45 to 80 characters for
                                                                optimal results</small>
                                                            @if ($errors->has('seo_title'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('seo_title') }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="seo_description">SEO Description <span
                                                                    class="text-danger">*</span></label>
                                                            <textarea class="form-control count-characters {{ $errors->has('seo_description') ? ' is-invalid' : '' }}"
                                                                id="seo_description" rows="4" placeholder="Enter Description" name="seo_description">
@if (old('seo_description') != null)
{{ old('seo_description') }}
@elseif(!empty($seoDescriptionDB))
{{ $seoDescriptionDB }}
@endif
</textarea>
                                                            <small><strong>Note: </strong> Add 90 to 180 characters for
                                                                optimal results</small>
                                                            @if ($errors->has('seo_description'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('seo_description') }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group mt-3">
                                                            <label for="seo_keywords">SEO Keywords <span
                                                                    class="text-danger">*</span></label>
                                                            <textarea class="form-control {{ $errors->has('seo_keywords') ? ' is-invalid' : '' }}" id="seo_keywords"
                                                                rows="4" placeholder="Enter Keywords" name="seo_keywords">
@if (old('seo_keywords') != null)
{{ old('seo_keywords') }}
@elseif(!empty($seoKeywordsDB))
{{ $seoKeywordsDB }}
@endif
</textarea>
                                                            <small>Example: Comma separated values like <strong>Keyword1,
                                                                    Keyword2, Keyword3</strong></small>
                                                            @if ($errors->has('seo_keywords'))
                                                                <span class="invalid-feedback">
                                                                    {{ $errors->first('seo_keywords') }}
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <button type="submit"
                                                            class="btn btn-primary mt-5">Submit</button>

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
