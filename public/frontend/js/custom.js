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