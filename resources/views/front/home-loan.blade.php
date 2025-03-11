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
                    <div class="col-md-6 ">
                        <div class="bio">
                            <h4>Unlock best Home Loan offers with  <span>BrickBold</span></h4>
                            <h6 class="sub-heading pt-3 pb-3">Get one step closer to owning  your dream home with Brickbold</h6>
                            
                            <ul>
                                <li class="pt-2 pb-2"><span> Affordable rates</span> <br/>Home laons have become very affordable and lucrative</li>
                                <li class="pt-2 pb-2"><span> Quick Lending</span> <br/>Loan approval and funding within minutes to hours of application</li>
                                <li class="pt-2 pb-2"><span> Less Burden</span> <br/>The impact of making a large payment is spread out across EMIs</li>
                                <li class="pt-2 pb-2"><span> Fast Disbursement</span> <br/>The funds distributed quickly sometimes within hours of application  </li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-md-6 form">
                        <h4> Check your loan eligibility with <span class="text-color-primary">BrickBold</span></h4>
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
                    
                    
                </div>
            </div>
        </section>
        <!-- section-faq -->
 
        <section class="tf-spacing-1 bg_light_gray pb-0">
            
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="title text-center mb-40 pb-5 color-main">
                            Home Loan Bank Partners
                        </h4>
                    </div> 
                    <div class="col-md-12 img-box text-center">
                        <div class="img__ w-100">
                            <img src="{{URL('images/bank-partner.png')}}" class="img-fluid w-100">
                        </div>                                
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-4 img-box">
                            <div class="img__">
                                <img src="{{URL('images/banks/hdfc.png')}}" class="img-fluid">
                            </div>                                
                        </div>
                        <div class="col-md-4 img-box">
                            <div class="img__">
                                <img src="{{URL('images/banks/icici.png')}}" class="img-fluid">
                            </div>                                
                        </div>
                        <div class="col-md-4 img-box">
                            <div class="img__">
                                <img src="{{URL('images/banks/yes.png')}}" class="img-fluid">
                            </div>                                
                        </div>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-md-4 img-box">
                            <div class="img__">
                                <img src="{{URL('images/banks/axis.png')}}" class="img-fluid">
                            </div>                                
                        </div>
                        <div class="col-md-4 img-box">
                            <div class="img__">
                                <img src="{{URL('images/banks/pnb.png')}}" class="img-fluid">
                            </div>                                
                        </div>
                        <div class="col-md-4 img-box">
                            <div class="img__">
                                <img src="{{URL('images/banks/boi.png')}}" class="img-fluid">
                            </div>                                
                        </div>  
                    </div> --}}
                </div>
            </div>
            
        </section>
        
        
        
         <section class="tf-spacing-1 faq-loan pb-0">            
            <div class="tf-container">
                <div class="row ">
                    <div class="col-12 mb-30">
                        <h4 class="title color-main">
                            Home Loan FAQs
                        </h4>
                        <p>A home loan is a sum of money borrowed from a financial institution, like a housing finance company, to purchase a new or previously owned property, build a house, or renovate or expand an existing one. It is commonly referred to as a mortgage</p>
                        <p class="color-main">Here are some of the important features and benefits of home loan:</p>
                    </div>
               </div>
                
                
                
                <div class="row">
                    <div class="col-12">

                            <h4 >1.	What is the Eligibility Criteria for a Home Loan?</h4>
                            <p class="pb-3">Anyone, whether employed, self-employed, or a professional, with a steady income can apply for a home loan. The applicant must be at least 21 years old at the start of the loan term and should not exceed 65 years of age by the time the loan is fully repaid or upon retirement. These are the general eligibility requirements for home loans, but specific criteria such as age limits, income thresholds, and other factors may vary between lenders.</p>
                       
                            <h4 >2.	Flexibility in selecting the loan term: </h4>
                            <p class="pb-3">Many banks offer the option to choose your home loan tenure, typically ranging from 15 to 30 years. The term you select will directly affect the monthly EMI you need to pay.</p>

                            <h4 >3.	Home loans are typically more affordable than personal loans: </h4>
                            <p class="pb-3">The interest rate on home loans is usually lower than that of personal loans. This is because home loans are secured by the property, whereas personal loans are unsecured.</p>

                            <h4 >4.	Home loan balance transfer: </h4>
                            <p class="pb-3">This option lets you move your existing loan balance from one lender to another in order to benefit from a lower interest rate.</p>

                            <h4 >5.	What is floating rate home loan?</h4>
                            <p class="pb-3">A floating rate home loan is one where the interest rate changes periodically over the course of the loan tenure. Lenders set their own base rate, which influences the interest rate applied to the loan. These base rates are periodically adjusted by banks, in line with RBI guidelines and other factors, which can result in an increase or decrease in the monthly EMI.</p>

                            <h4 >6.	What is a fixed rate home loan?</h4>
                            <p class="pb-3">Fixed-rate home loans are offered with a set interest rate for the entire duration of the loan, remaining unaffected by market fluctuations. This can be highly beneficial during periods of market volatility. For example, if the RBI raises interest rates, individuals with fixed-rate home loans will not experience any changes in their EMI amounts, as their rate remains constant. However, this type of home loan has become less popular in recent times.</p>


                            <h4 >7.	How is the MCLR method going to affect my current home loan?</h4>
                            <p class="pb-3">Under the latest RBI guidelines, banks must use the MCLR (Marginal Cost of Lending Rate) to set home loan interest rates. For floating rate loans, interest rates must be adjusted annually or semi-annually. If you have a fixed-rate home loan, you can contact your bank for details on converting to the new MCLR-based floating rate. The MCLR regime has currently led to a reduction in home loan interest rates.</p>

                            <h4 >8.	Can I switch from a floating rate home loan to a fixed rate?</h4>
                            <p class="pb-3">Yes, some lenders provide the option to switch between a floating rate and a fixed-rate home loan. However, this option is not available for all home loans, and there may be fees associated with the conversion. It's best to contact your lender for specific details on the process and requirements.</p>

                            <h4 >9.	How do I repay my home loan?</h4>
                            <p class="pb-3">There are several methods to repay your loan, including providing post-dated cheques for the entire loan tenure, arranging for automatic salary deductions, or setting up Electronic Clearing System (ECS) instructions with the lender, where the EMI is automatically deducted from your bank account each month.</p>

                            <h4 >10. Is prepayment of home loan allowed?</h4>
                            <p class="pb-3">Yes, it is possible to repay the loan before the end of the scheduled tenure by making a lump sum payment. In such cases, the bank may impose a penalty ranging from 2-3% of the outstanding principal. However, some banks and non-banking financial companies (NBFCs) do not charge any penalties for early repayment of a home loan.</p>

                            <h4 >11. Tax benefits: </h4>
                            <p class="pb-3">You can avail tax benefits on both the interest and principal amounts you pay. Tax deduction on home loan principal repayment: Under Tax Section 80C, you can claim a deduction on the principal repayment of your home loan, with a maximum annual deduction of Rs 1,50,000 allowed under this section. Tax benefit on home loan interest: Under Section 24 of the Income Tax Act, you can claim a tax deduction on the interest paid on a home loan, up to a maximum of Rs. 2 lakhs for a self-occupied property.</p>                        
                    </div>                     
                </div>
            </div>
            
        </section>

    </div>
    <!-- /main-content -->
@endsection

@push('scripts') 
@endpush
