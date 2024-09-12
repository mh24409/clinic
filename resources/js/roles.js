// $.notify("I'm over here ssssssssssssss!");

function get_role_table() {
    $.ajax({
        type: "GET",
        url: '/get_roles_table',
        success: function (data) {
            $('#roles_permissions_table').html(data)
        }
    })
}


$(document).ready(function () {
    get_role_table();
    $('#role_form').submit(function (e) {
        e.preventDefault();
        if ($('#name').val() == '') {
            $('#name').focus();
            $("#name").notify($('#please_enter_name').val(), "error");
        } else {
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {

                    if (data.status) {
                        $('#name').val('');
                        $('#roles_permissions_table').html($('#loading').html());
                        get_role_table();
                    }
                },
                error: function (data) {
                    if (data.responseJSON && data.responseJSON.errors) {
                        var errors = data.responseJSON.errors;
                        $.each(errors, function (key, messages) {
                            if (Array.isArray(messages)) {
                                messages.forEach(function (message) {
                                    $("#name").notify(message, "error");
                                });
                            } else {
                                $("#name").notify(messages, "error");
                            }
                        });
                    } else {
                        $("#name").notify($('#unknown_error').val(), "error");
                    }
                }
            })
        }
    })
    $('#show').click(function () {
        show_modal();
    })
    function showRoleDetails(id, name) {
        $.ajax({
            type: "GET",
            url: 'roles-permissions/' + id,
            success: function (data) {
                Swal.fire({
                    title: name,
                    html: data,
                    showCloseButton: true,
                    showConfirmButton: false,
                    padding: "1em",
                    showClass: {
                        popup: `
                          animate__animated
                          animate__fadeInUp
                          animate__faster
                        `
                    },
                    hideClass: {
                        popup: `
                          animate__animated
                          animate__fadeOutDown
                          animate__faster
                        `
                    }
                });
            },
            error: function (xhr, status, error) {
                console.error("Error: " + error);
            }
        });
    }
    window.showRoleDetails = showRoleDetails;
    $('#permission_form').submit(function (e) {
        e.preventDefault();
        if ($('#permission_name').val() == '') {
            $('#permission_name').focus();
            $("#permission_name").notify($('#please_enter_name').val(), "error");
        } else {
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    if (data.status) {
                        $('#permission_name').val('');
                    }
                },
                error: function (data) {
                    if (data.responseJSON && data.responseJSON.errors) {
                        var errors = data.responseJSON.errors;
                        $.each(errors, function (key, messages) {
                            if (Array.isArray(messages)) {
                                messages.forEach(function (message) {
                                    $("#permission_name").notify(message, "error");
                                });
                            } else {
                                $("#permission_name").notify(messages, "error");
                            }
                        });
                    } else {
                        $("#permission_name").notify($('#unknown_error').val(), "error");
                    }
                }
            })
        }
    })


})


$(document).on('click', '.delete-record', function (event) {
    event.preventDefault();
    Swal.fire({
        title: $('#are_you_sure').val(),
        text: $('#you_wont_be_able_to_revert_this').val(),
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: $('#yes_delete_it').val(),
        cancelButtonText: $('#no_cancel_it').val(),
    }).then((result) => {
        if (result.isConfirmed) {
            $(this).closest('form').submit();
        }
    });

});
