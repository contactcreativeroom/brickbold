$('#registerForm').on('submit', function(e) {
    e.preventDefault();
    $('#registerForm .is_error').text('');
    let formData = $(this).serialize();

    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
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
            } else {
                toastr.error("An error occurred. Please try again.", 'Error!');
            }
        }
    });
});

