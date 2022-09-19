$(document).ready(function () {
    // Initially loads the data into the table.
    load_data();

    function load_data() {
        $.ajax({
            url: 'php/bookmark-job.inc.php',
            type: 'POST',
            data: {
                fetchData: true 
            },
            dataType: 'JSON',
            success: function (response) {
                $("thead").after(response.tableData);
                console.log("Success");
                console.log(response.tableData);
            },
            error: function (jqXHR, status, description) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        });
    }

    // This will be responsible for implementing the value of the "Yes" button inside the modal. 
    // So that whenever that button was clicked, it will show its value and used it as a jobpost_id to 
    // determine what row will be used
    $('#detail_bookmark').on('click', '.btn-apply', function() {
        let jobpost_id = $(this).attr('data-id');
        $("#apply-yes").val(jobpost_id);
    });

    $('#detail_bookmark').on('click', '.btn-delete', function() {
        let jobpost_id = $(this).attr('data-id');
        $("#delete-yes").val(jobpost_id);
    });
    

    // Whenever the "Yes" button was clicked, it select that row based on the jobpost_id and proceed to the event
    $("#apply-yes").click(function() {
        let postId = $('.btn-apply').attr('data-id');
        $.ajax({
            url: 'php/bookmark-job.inc.php',
            type: 'POST',
            data: {
                apply: true,
                postId: postId 
            },
            dataType: 'JSON',
            success: function (response) {
                console.log("Bookmark Applied");

                $('#modal-apply').modal('hide');
                toastr.success('', 'Successfully Applied!');

                // Just a temporary, I didn't figured it out yet how to update the browser
                // load_data();
                window.location = "bookmark-job.php";
            }
        });
    })

    $("#delete-yes").click(function() {
        let postId = $('.btn-delete').attr('data-id');
        $.ajax({
            url: 'php/bookmark-job.inc.php',
            type: 'POST',
            data: {
                delete: true,
                postId: postId 
            },
            dataType: 'JSON',
            success: function (response) {
                console.log("Bookmark Delete");

                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                
                // Just a temporary, I didn't figured it out yet how to update the browser
                // load_data();
                window.location = "bookmark-job.php";
            }
        });
    })
});