// The comments was used for DEMO purposes for newcomers
$(document).ready(function () {
    // Initially fetches the data from the database
    load_data();
    function load_data(){
        // Using AJAX function can be able to store HTTP requests and it can be loaded by an external script. 
        // In this case, to the .inc.php file
        $.ajax({
            url: 'php/manage-applicant-resume.inc.php',
            type: 'POST',
            data: {
                getData: true
            },
            dataType: "JSON",
            success: function (response, status, jqXHR) {
                // The data will be display at id "body-h"
                $('#body-h').html(response.tableData);
            },
            // It is the best practice to put an error parameter to determine the description of the error. 
            // The results can be seen at the browser's console. 
            // You can remove the error parameter anytime if you feel comfortable that the code is working fine.
            // Just showing here that you can debug error using this method
            error: function (jqXHR, status, description) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        });
    }

    // When the "Edit" button was clicked
    $('#body-h').on('click', '.edit-btn', function () {
        let id = $(this).attr('data-id');
        $('#edit-yes').val(id);
    });
    // When the "Bookmark" button was clicked
    $('#body-h').on('click', '.bookmark-btn', function () {
        let id = $(this).attr('data-id');
        $('#bookmark-yes').val(id);
    });
    // When the "Reject" button was clicked
    $('#body-h').on('click', '.reject-btn', function () {
        let id = $(this).attr('data-id');
        $('#reject-yes').val(id);
    });
    
    // When the "Yes" button on "Edit" modal was clicked
    $('#edit-yes').click(function () { 
        let apply_id = $(this).val();
        let status = $('#status').val();
        $.ajax({
            url: "php/manage-applicant-resume.inc.php",
            type: "POST",
            data: {
                edit: true,
                apply_id: apply_id,
                status: status
            },
            dataType: 'JSON',
            success: function (response, status, jqXHR) {
                $('#edit-modal').modal('hide');
                toastr.success('', 'Successfully Changed!');
                load_data();
            },
            error: function (jqXHR, status, response) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        });
    });

    // When the "Yes" button on "Bookmark" modal was clicked
    $('#bookmark-yes').click(function () { 
        let jobseeker_id = $(this).val();
        $.ajax({
            url: "php/manage-applicant-resume.inc.php",
            type: "POST",
            data: {
                bookmark: true,
                jobseeker_id: jobseeker_id
            },
            dataType: 'JSON',
            success: function (response, status, jqXHR) {
                $('#bookmark-modal').modal('hide');
                toastr.success('', 'Successfully Changed!');
                load_data();
            },
            error: function (jqXHR, status, response) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        });
    });

    // When the "Yes" button on "Reject" modal was clicked
    $('#reject-yes').click(function () {
        let apply_id = $(this).val(); 
        $.ajax({
            url: "php/manage-applicant-resume.inc.php",
            type: "POST",
            data: {
                reject: true,
                apply_id: apply_id
            },
            dataType: 'JSON',
            success: function (response, status, jqXHR) {
                $('#reject-modal').modal('hide');
                toastr.success('', 'Successfully Changed!');
                load_data();
            },
            error: function (jqXHR, status, response) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        });
    });

    // // Trigger this when user click yes on delete modal
    // $('#del-yes').click(function () {
    //     let apply_id = $(this).val();
    //     let status = $('#status').val();
    //     $.ajax({
    //         url: 'php/manage-applicant-resume.inc.php',
    //         type: 'POST',
    //         data: {
    //             update: true,
    //             apply_id: apply_id,
    //             status: status
    //         },
    //         success: function (data) {
    //             $('#exampleModal1').modal('hide');
    //             toastr.options = {
    //                 positionClass : "toast-top-center"
    //             }
    //             toastr.success('', 'Successfully Changed!');
    //             load_data();
    //         }
    //     });
    // });

    // $('#body-h').on('click','.bookmark', function () {
    //     let Id = $(this).attr('data-id');
    //     $('#accept').val(Id);
    // });


    // $('#body-h').on('click','.remove', function () {
    //     let Id = $(this).attr('data-id');
    //     $('#accept1').val(Id);
    //     $('#exampleModal3').modal('hide');
    // });

    // $('#body-h').on('click', '.delete-btn', function () {
    //     let apply_id = $(this).attr('data-id');
    //     $('#del-yes1').val(apply_id);
    //     });

    //     $('#del-yes1').click(function () {
    //         let apply_id = $(this).val();
    //         console.log(apply_id);
    //         $.ajax({
    //         url: 'php/manage-applicant-resume.inc.php',
    //         type: 'POST',
    //         data: {
    //              delete: true,
    //              apply_id: apply_id
    //         },
    //         success: function (response) {
    //             $('#exampleModal').modal('hide');
    //             console.log(apply_id);
    //             toastr.options = {
    //                 positionClass : "toast-top-center"
    //             }
    //             toastr.success('', 'Successfully Deleted!');
    //             load_data();
    //         }
    //     });
    // });
});