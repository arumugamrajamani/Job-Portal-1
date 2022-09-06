$(document).ready(function () {
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
                // console.log(response.tableData);
            }
        });
    }

    $('#detail_bookmark').on('click', '.btn-apply', function() {
        let jobpost_id = $(this).attr('data-id');
        $("#apply-yes").val(jobpost_id);
    });

    $('#detail_bookmark').on('click', '.btn-delete', function() {
        let jobpost_id = $(this).attr('data-id');
        $("#delete-yes").val(jobpost_id);
    });

    $("#apply-yes").click(function() {
        console.log("Job Applied");
        console.log($(this).val());
        // Put Ajax later
    })

    $("#delete-yes").click(function() {
        console.log("Job Deleted");
        console.log($(this).val());
        // Put Ajax later
    })
});