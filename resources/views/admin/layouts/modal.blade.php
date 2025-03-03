<div class="modal fade" id="editUser" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-6">
                    <h4 class="mb-2">Edit User Information</h4>
                    <p>Updating user details will receive a privacy audit.</p>
                </div>
                <form class="row g-6" onsubmit="false">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserFirstName">First Name</label>
                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                            class="form-control" placeholder="John" value="John">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLastName">Last Name</label>
                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                            class="form-control" placeholder="Doe" value="Doe">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserName">Username</label>
                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control"
                            placeholder="johndoe007" value="johndoe007">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserEmail">Email</label>
                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control"
                            placeholder="example@domain.com" value="example@domain.com">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserStatus">Status</label>
                        <div class="position-relative"><select id="modalEditUserStatus" name="modalEditUserStatus"
                                class="select2 form-select select2-hidden-accessible"
                                aria-label="Default select example" data-select2-id="modalEditUserStatus" tabindex="-1"
                                aria-hidden="true">
                                <option selected="" data-select2-id="2">Status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="1" style="width: auto;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                        aria-labelledby="select2-modalEditUserStatus-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-modalEditUserStatus-container" role="textbox"
                                            aria-readonly="true" title="Status">Status</span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditTaxID">Tax ID</label>
                        <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                            class="form-control modal-edit-tax-id" placeholder="123 456 7890" value="123 456 7890">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text">US (+1)</span>
                            <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                class="form-control phone-number-mask" placeholder="202 555 0111"
                                value="202 555 0111">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserLanguage">Language</label>
                        <div class="position-relative"><select id="modalEditUserLanguage"
                                name="modalEditUserLanguage" class="select2 form-select select2-hidden-accessible"
                                multiple="" data-select2-id="modalEditUserLanguage" tabindex="-1"
                                aria-hidden="true">
                                <option value="">Select</option>
                                <option value="english" selected="" data-select2-id="4">English</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="dutch">Dutch</option>
                                <option value="hebrew">Hebrew</option>
                                <option value="sanskrit">Sanskrit</option>
                                <option value="hindi">Hindi</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="3" style="width: auto;"><span class="selection"><span
                                        class="select2-selection select2-selection--multiple" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                        aria-disabled="false">
                                        <ul class="select2-selection__rendered">
                                            <li class="select2-selection__choice" title="English"
                                                data-select2-id="5"><span class="select2-selection__choice__remove"
                                                    role="presentation">×</span>English</li>
                                            <li class="select2-search select2-search--inline"><input
                                                    class="select2-search__field" type="search" tabindex="0"
                                                    autocomplete="off" autocorrect="off" autocapitalize="none"
                                                    spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                    placeholder="" style="width: 0.75em;"></li>
                                        </ul>
                                    </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalEditUserCountry">Country</label>
                        <div class="position-relative"><select id="modalEditUserCountry" name="modalEditUserCountry"
                                class="select2 form-select select2-hidden-accessible" data-allow-clear="true"
                                data-select2-id="modalEditUserCountry" tabindex="-1" aria-hidden="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India" selected="" data-select2-id="7">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="6" style="width: auto;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-modalEditUserCountry-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-modalEditUserCountry-container" role="textbox"
                                            aria-readonly="true" title="India"><span
                                                class="select2-selection__clear" title="Remove all items"
                                                data-select2-id="8">×</span>India</span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch my-2 ms-2">
                            <input type="checkbox" class="form-check-input" id="editBillingAddress" checked="">
                            <label for="editBillingAddress" class="switch-label">Use as a billing address?</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-3">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header pt-2 mb-2">
                
                <div class="mb-2">
                    <h6 class="modal-title mb-1" id="previewModalLabel">Change Property Status</h6>
                    <div class="box-radio-check d-flex radio-custom">
                        @foreach (config('constants.PROPERTY_STATUSES') as $key=>$value)
                            <div>
                            <input type="radio" class="btn-check" name="property_status" value="{{$key}}" id="property_status_{{$key}}"  @if(old('property_status')!=null && old('property_status')== $key) checked  @endif >
                            <label class="btn btn-outline-danger" for="property_status_{{$key}}">{{$value}}</label>
                            </div>
                        @endforeach
                        <input type="hidden" name="property_id" id="property_id" value="">
                        <input type="hidden" name="action_url" id="action_url" value="{{route('admin.property.status.change')}}">
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                {{-- <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                <iframe style="width:100%;min-height:600px"></iframe>

                <!-- <div id="preview">

        </div> -->
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div> -->
        </div>
    </div>
</div>
