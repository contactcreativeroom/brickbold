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
                            <li>Property Listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /flat-title -->

    <!-- .main-content -->
    <div class="main-content tf-spacing-6 header-fixed">

        <!-- section-faq -->
        <section class="section-faq ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-6">
                            <div class="box-contact">
                                <div class="heading-section mb-48">
                                    <h3 class="title">Apply Home Loan Online at brickbold</h3> 
                                </div>
                                <div class="">
                                    <p class="text-1">Loan Offers from 34+ Banks </p>
                                    <p class="text-1">Highest Loan Value & Lowest ROI</p>
                                    <p class="text-1">Dedicated RM for Property Search</p>
                                    <p class="text-1">Fastest Loan Disbursal</p>
                                    
                                </div>
                            </div>
                        </div>
                   
                    <div class="col-md-6 col-sm-12">
                        <div class="card mx-2 my-3  bg-body-tertiary rounded-3">
                            <div class="card-body widget-box-2">
                                 
                                <form class="flat-tab flat-tab-form widget-filter-search widget-box" action="{{route('bank.enquiry')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <fieldset class="box-fieldset mb-3">
                                            <input type="number" class="form-control {{ $errors->has('loan_amount') ? ' is-invalid' : '' }}" name="loan_amount" placeholder="Loan Amount" value="@if(old('loan_amount')!=null){{old('loan_amount')}}@endif">
                                            @if($errors->has('loan_amount'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('loan_amount') }}
                                                </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="box-fieldset mb-3">
                                            <input type="number" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Mobile Number" value="@if(old('phone')!=null){{old('phone')}}@endif">
                                            @if($errors->has('phone'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('phone') }}
                                                </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="box-fieldset mb-3">
                                            <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" placeholder="Property City" value="@if(old('city')!=null){{old('city')}}@endif">
                                            @if($errors->has('city'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('city') }}
                                                </span>
                                            @endif
                                        </fieldset> 
                                        <fieldset class="box-fieldset1 mt-3">
                                            <label for="looking">Is Property Finalized?</label>
                                            <div class="box-radio-check d-flex">
                                                <fieldset class="radio-item me-3">
                                                    <label>
                                                        <span class="text-1">Yes</span>
                                                        <input type="radio" name="loan_property" value="Yes" @if(old('loan_property')!=null && old('loan_property')== "Yes") checked  @endif>
                                                        <span class="btn-radio"></span>
                                                    </label>
                                                </fieldset>
                                                <fieldset class="radio-item me-3">
                                                    <label>
                                                        <span class="text-1">No</span>
                                                        <input type="radio" name="loan_property" value="No" @if(old('loan_property')!=null && old('loan_property')== "No") checked  @endif>
                                                        <span class="btn-radio"></span>
                                                    </label>
                                                </fieldset>
                                                
                                            </div>
                                            <span id="for_type-error" class="text-danger is_error"></span>
                                        </fieldset> 
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="tf-btn bg-color-primary pd-13">Check Eligibility</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        {{-- <div class="heading-section  mb-48">
                            <h2 class="title ">Frequently Asked Questions</h2>
                        </div> --}}
                        <div class="widget-box-2 wd-listing">
                        <h3 class="title">Top Home Loan Bank Partners</h3>
                        <div class="tf-new-listing w-100">
                            <div class="new-listing wrap-table ">
                                <div class="table-content">
                                    <div class="wrap-listing table-responsive">
                                        <table class="table-save-search"> 
                                            <tbody>
                                                @foreach ($rows as $row)                                                   
                                                
                                                <tr class="file-delete">
                                                    <td class="w-100"> 
                                                        <img class="bank-logo img-thumbnail" src="{{ App\Helper\Helper::getImage('storage/bank', $row->image) }}" alt="{{$row->name}}">
                                                    </td>
                                                    <td>
                                                        <h5 class="heading-title">{{$row->name}}</h5>
                                                    </td>
                                                    <td>
                                                        <p class="intrest-pargh">From <span class="intrest-pargh-2">{{$row->interest}}</span> % pa</p>
                                                    </td>
                                                    
                                                    <td>
                                                        <p class="intrest-pargh">Max Tenure <span class="intrest-pargh-2">{{$row->tenure}} years</span></p>
                                                    </td>
                                                </tr>
                                                @endforeach 

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
