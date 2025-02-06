$('#registerForm').on('submit', function(e) {
    e.preventDefault();
    $('#registerForm .is_error').text('');
    let $submitButton = $('#registerForm [type="submit"]');
    $submitButton.prop('disabled', true);
    let formData = $(this).serialize();

    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        success: function(response) {
            toastr.success(response.message, 'Successfully!');
            if (response.success) {
                window.location.href = response.redirect_url || '/';
            }
        },
        error: function(xhr) {
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                let errors = xhr.responseJSON.errors;
                for (let field in errors) {
                    $(`#registerForm #${field}-error`).text(errors[field][0]);
                }
            } else { 
                toastr.error("An error occurred. Please try again.", 'Error!');
            }
        },
        complete: function() {
            $submitButton.prop('disabled', false); 
        }
    });
});


$('#loginForm').on('submit', function(e) {
    e.preventDefault(); 
    $('#loginForm .is_error').text('');
    let formData = $(this).serialize();

    $.ajax({
        url: $(this).attr('action'), 
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        success: function(response) {
            toastr.success(response.message, 'Successfully!');
            if (response.success) {
                window.location.href = response.redirect_url;
            }
        },
        error: function(xhr) {
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                let errors = xhr.responseJSON.errors;
                for (let field in errors) {
                    $(`#loginForm #${field}-error`).text(errors[field][0]);
                }
            } else if (xhr.responseJSON && xhr.responseJSON.message) {
                let errors = xhr.responseJSON.message;
                toastr.error(errors, 'Error!');
            } else {
                toastr.error("An error occurred. Please try again.", 'Error!');
            }
        }
    });
});

document.querySelectorAll('.for_type_select').forEach(item => {
    item.addEventListener('click', function () {
        const selectedValue = this.getAttribute('data-value');
        document.querySelector('.for_type').value = selectedValue;         
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const listOptions = document.querySelectorAll('.list-sort .option');
    const filterForm = document.getElementById('filter_form');
    const sortValueInput = document.getElementById('sort_value');

    listOptions.forEach(option => {
        option.addEventListener('click', function () {
            // Remove 'selected' class from all options
            listOptions.forEach(opt => opt.classList.remove('selected'));

            // Add 'selected' class to the clicked option
            this.classList.add('selected');

            // Update the hidden input with the selected value
            const selectedValue = this.getAttribute('data-value');
            sortValueInput.value = selectedValue;
 
            filterForm.submit();
        });
    });
});

function sendOTP() {
    var mobile = $("#OTPForm #mobile").val();
    if(mobile == ""){
       $("#OTPForm #mobile-error").text("The mobile field is required.");
       return false;
    }
    $("#OTPForm #mobile-error").text(""); 
    $.ajax({
        url: site_url+'/send-otp', 
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { mobile: mobile },
        success: function(response) {
            console.log(response.message);
            toastr.success(response.message, 'Successfully!');
            $(".otpSentMobile").html(mobile);
            $(".get-otp-section").hide();
            $(".verify-otp-section ").show();
            
        },
        error: function(xhr) {           
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                let errors = xhr.responseJSON.errors;
                console.log(errors);
                for (let field in errors) {
                    $(`#OTPForm #${field}-error`).text(errors[field][0]);
                }
            } else {
                toastr.error("An error occurred. Please try again.", 'Error!');
            }
        }
    });
}

function verifyOTP() {
    var mobile = $("#OTPForm #mobile").val();
    if(mobile == ""){
       $("#OTPForm #mobile-error").text("The mobile field is required.");
       //return false;
    }
    const otp = Array.from(document.querySelectorAll(".otp-input-field input"))
        .map(input => input.value)
        .join("");
    if (!otp) {
        $("#OTPForm #otp-error").text("Please fill the OTP.");
        return false;
    }
    $("#OTPForm #otp-error").text(""); 
    
    $.ajax({
        url: site_url+'/verify-otp', 
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { mobile: mobile, otp: otp },
        success: function(response) {
            console.log(response);
            if (response.error) {
                toastr.error(response.message, 'Error!');
            } else{
                toastr.success(response.message, 'Successfully!');
                if (response.success) {
                    window.location.href = response.redirect_url;
                }
            }
        },
        error: function(xhr) {           
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                let errors = xhr.responseJSON.errors;
                console.log(errors);
                for (let field in errors) {
                    $(`#OTPForm #${field}-error`).text(errors[field][0]);
                }
            } else {
                toastr.error("An error occurred. Please try again.", 'Error!');
            }
        }
    });
}

$('#mobile-edit').click(function(e) {
    $("#OTPForm .get-otp-section").show();
    $("#OTPForm .verify-otp-section ").hide();
});

// otp verification input start
const inputs = document.querySelectorAll(".otp-input-field input"), button = document.querySelector("#verify-button");
inputs.forEach((input, index1) => {
    input.addEventListener("keyup", (e) => {
        const currentInput = input,
            nextInput = input.nextElementSibling,
            prevInput = input.previousElementSibling;
        if (currentInput.value.length > 1) {
            currentInput.value = "";
            return;
        }
        if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
            nextInput.removeAttribute("disabled");
            nextInput.focus();
        }
        if (e.key === "Backspace") {
            inputs.forEach((input, index2) => {
                if (index1 <= index2 && prevInput) {
                    input.setAttribute("disabled", true);
                    input.value = "";
                    prevInput.focus();
                }
            });
        }
        if (!inputs[5].disabled && inputs[5].value !== "") {
            button.classList.add("active");
            return;
        }
        button.classList.remove("active");
    });
});
window.addEventListener("load", () => inputs[0].focus());

// otp verification input end


$(document).on('click', '.interested-function', function () {
    var slug = $(this).data('slug');
    var id = $(this).data('id');
    console.log(id);
    console.log(slug);
    $('#interestedForm #property_id').val(id);
    $('#interestedForm #property_slug').val(slug);
    $('#modalInterested').modal('show');
});

$('#interestedForm').on('submit', function(e) {
    e.preventDefault();
    $('#interestedForm .is_error').text('');
    let formData = $(this).serialize();

    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: formData,
        success: function(response) {
            toastr.success(response.message, 'Successfully!');
            $('#modalInterested').modal('hide');
        },
        error: function(xhr) {
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                let errors = xhr.responseJSON.errors;
                for (let field in errors) {
                    $(`#interestedForm #${field}-error`).text(errors[field][0]);
                }
            } else { 
                toastr.error("An error occurred. Please try again.", 'Error!');
            }
        }
    });
});



 
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".share-button").forEach(button => {
        button.addEventListener("click", function () {
            let propertyUrl = this.getAttribute("data-url");
            console.log(propertyUrl);
            document.querySelector("#sharePopup #shareUrl").value = propertyUrl;
            // Update social media links
            document.querySelector("#sharePopup #emailShare").href = `mailto:?subject=Check out this property&body=View this property: ${propertyUrl}`;
            document.querySelector("#sharePopup #whatsappShare").href = `https://api.whatsapp.com/send?text=Check out this property: ${propertyUrl}`;
            document.querySelector("#sharePopup #facebookShare").href = `https://www.facebook.com/sharer/sharer.php?u=${propertyUrl}`;
            document.querySelector("#sharePopup #twitterShare").href = `https://twitter.com/intent/tweet?text=Check out this property: ${propertyUrl}`;
            
        });
    });

    // Copy to Clipboard Functionality
    document.querySelector(".share-field #copyUrl").addEventListener("click", function () {
        let copyText = document.querySelector("#sharePopup #shareUrl");
        copyText.select();
        document.execCommand("copy");
        toastr.success("URL Copied: " + copyText.value, 'Successfully!');
    });
}); 
