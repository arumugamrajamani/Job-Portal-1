$(document).ready(function (){
    load_data();
    function load_data(){
        $.ajax({
            url: 'php/manage-applicant-resume.inc.php',
            type: 'POST',
            data: {
                getData: true
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                //assign got value to the html ids
                $('#body-h').html(data.tableData);
            }
        });
        $('#body-h').on('click','.edit', function () {
            let postId = $(this).attr('data-id');
            $('#del-yes').val(postId);
        });
    }
    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {
        let postId = $(this).val();
        let status = $('#status').val();
        $.ajax({
            url: 'php/manage-applicant-resume.inc.php',
            type: 'POST',
            data: {
                update: true,
                postId: postId,
                status: status
            },
            success: function (data) {
                $('#exampleModal1').modal('hide');
                toastr.success('', 'Successfully Changed!');
                load_data();
            }
        });
    });
    
});