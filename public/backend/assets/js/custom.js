$(document).ready(function(){
    $('#category').on('change', function(){
        var category_id = $(this).val();
     

        if(category_id){
            getSubCategory(category_id)
        //  console.log(category_id);
        //     $.ajax({
        //         url: '/show_sub_category/'+category_id,
        //         type: 'GET',
        //         dataType: 'json',
        //         success: function(data){
                 

        //              $('#sub_category').empty();   
        //              $('#sub_category').append('<option value="">Select Sub Category</option>');
        //              $.each(data, function(key, value){
        //                    $('#sub_category').append('<option value="'+value.id+'">'+value.sub_category+'</option>');
        //                    // console.log(value.id, value.sub_category);
        //              });                                                                       
        //         }
        //     });
        }else{
            $('#sub_category').empty();
        }
    });

    var category_id = $('#category').data('category');
    if( category_id != "" ){
        getSubCategory(category_id);
    }
    
    function getSubCategory(category_id){
        if(category_id){
            var sub_category_id = $('#sub_category').data('subcategory');
            $.ajax({
                url: $('#category').data('url'),
                type: 'POST',
                data: {category_id: category_id,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                success: function(data){
                    $('#sub_category').empty();   
                    $('#sub_category').append('<option value="">Select Sub Category</option>');
                    $.each(data, function(key, value){
                        $('#sub_category').append('<option '+( sub_category_id == value.id ? "selected" : "" )+' value="'+value.id+'">'+value.sub_category+'</option>');
                    });                                                                       
                }
            });
        }else{
            $('#sub_category').empty();
        }
    }


    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });
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
