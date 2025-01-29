document.addEventListener("DOMContentLoaded", function () {
    if (localStorage.getItem("hideHelpModal") === "true") {
        return; 
    }
    setTimeout(function () {
        var myModal = new bootstrap.Modal(document.getElementById('HelpPopup'));
        myModal.show();
    }, 5000);

    document.getElementById("helpLater").addEventListener("click", function () {
        localStorage.setItem("hideHelpModal", "true"); 
        var modalInstance = bootstrap.Modal.getInstance(document.getElementById('HelpPopup'));
        modalInstance.hide(); 
    });
});



$('#HelpPopupForm').on('submit', function(e) {
    var modalInstance = bootstrap.Modal.getInstance(document.getElementById('HelpPopup'));
    e.preventDefault(); 
    $('#HelpPopupForm .is_error').text('');
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
            modalInstance.hide(); 
            localStorage.setItem("hideHelpModal", "true");
        },
        error: function(xhr) {
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                let errors = xhr.responseJSON.errors;
                for (let field in errors) {
                    $(`#HelpPopupForm #${field}-error`).text(errors[field][0]);
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