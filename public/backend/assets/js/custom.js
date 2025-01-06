$(document).ready(function(){  

    jQuery('#add_more').click(function(){
        //let cnt = $(this).attr('data-id');
        let cnt = $('.more_fields').length +1;
        let row = '<div class="row mt-3 more_fields" id="row_'+cnt+'"><div class="col-md-7"><input type="text" class="form-control" placeholder="Heading" name="fields['+cnt+'][heading]" /></div><div class="col-md-3"><input type="text" class="form-control" placeholder="Value" name="fields['+cnt+'][value]" /></div><div class="col-md-2"><a href="javascript:void(0);" data-id="'+cnt+'"  class="btn btn-danger remove_row" style="width: 100%;" >Remove </a></div></div>';
        cnt++;            
        $(this).attr('data-id',cnt);
        $('.add_more_field').append(row);
    
    });
    
    jQuery('html body').on('click','.remove_row',function(){        
        let cnt = $(this).attr('data-id');
        $('#row_'+cnt).remove();
    });

    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    if (togglePassword && password) {
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    }
});

$(document).ready(function() {
    // Toggle entity status
    $('.entity-toggle').change(function() {       
        var entityId = $(this).data('entity-id');
        var entityType = $(this).data('entity-type');
        var entityUrl = $(this).data('entity-url');
        var isChecked = $(this).prop('checked') ? 1 : 0;
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token

        // Send AJAX request to update entity status
        $.ajax({
            type: 'POST',
            url:  entityUrl, 
            data: {
                entity_id: entityId,
                status: isChecked
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request headers
            },
            success: function(response) {
                console.log(response);
                if (response.status === 'success') {
                    showToastr(entityType.charAt(0).toUpperCase() + entityType.slice(1) + ' status updated successfully', 'success');
                } else {
                    console.error('Failed to update status');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    // Delete entity
    $('.delete-entity').click(function(e) {
        e.preventDefault();
        var en = $(this);
        var entityId = en.data('entity-id');
        var entityType = en.data('entity-type');
        var entityTitle = en.data('entity-title');
        var entityUrl = en.data('entity-url');
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        if (confirm('Are you sure you want to delete ' + entityType + ': ' + entityTitle + '?')) {
            $.ajax({
                type: 'GET',
                url: entityUrl, 
                data: {
                    entity_id: entityId
                },
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if (response.status === 'success') {
                        en.closest('tr').remove();
                        renumberRows();
                        showToastr(entityTitle + ' deleted successfully', 'success');
                    } else {
                        console.error('Failed to delete ' + entityType);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });

    // Sortable list for entities
    if($('#sortableList').length > 0){
        $('#sortableList').sortable({
        
            placeholder: 'ui-state-highlight',
            update: function(event, ui) {
                var entityType = $('#sortableList').data('entity-type'); // Get entity type from container
                var entityUrl = $('#sortableList').data('entity-url');
                var entityIdArr = [];
                $('#sortableList .sortable-row').each(function() {
                    entityIdArr.push($(this).data('entity-id'));
                });
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
            
                $.ajax({
                    type: 'POST',
                    url: entityUrl, 
                    data: {
                        entityIdArr: entityIdArr,
                        _token: csrfToken
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            showToastr(entityType.charAt(0).toUpperCase() + entityType.slice(1) + ' priority updated', 'success');
                        } else {
                            alert('Error updating position');
                        }
                    },
                    error: function(e) {
                        console.error('Error:', e);
                    }
                });
            }
        });
    }
    

});

// Function to show toastr notification
function showToastr(message, type) {
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right"
    };
    toastr[type](message);
}

// Function to renumber rows (if necessary)
function renumberRows() {
    $('#sortableList .sortable-row').each(function(index) {
        $(this).find('.row-number').text(index + 1);
    });
}
