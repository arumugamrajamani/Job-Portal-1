$(document).ready(function () {
    load_data();
    apply();
    function apply(){
        $('#body-h').on('click', '#apply', function () {
            let postId = $(this).attr('data-id');
            $('#apply-yes').val(postId);
            });
    
        $('#apply-yes').click(function () {
            let postId = $(this).val();
            console.log(postId);
            $.ajax({
                url: 'php/bookmark-job.inc.php',
                type: 'POST',
                data: {
                    apply: true,
                    postId: postId
                },
                //dataType: 'JSON',
                success: function (response) {
                    console.log(response);
                    window.location = 'jobapplication.php';
                }
            });
        });
    }
       function load_data(){
            $.ajax({
                url: 'php/insidejob.inc.php',
                type: 'POST',
                data: {
                    asdf: true,
                },
                dataType: 'JSON',
                success: function (response) {
                 console.log(response);
                $('#body-h').html(response.tableData);
    
                }
                });
       }
       $('#body-h').on('click', '#delete', function () {
        let postId = $(this).attr('data-id');
        $('#del-yes').val(postId);
        });
    
        $('#del-yes').click(function () {
            let postId = $(this).val();
            console.log(postId);
            $.ajax({
            url: 'php/insidejob.inc.php',
            type: 'POST',
            data: {
                delete: true,
                postId: postId
            },
            success: function (response) {
                $('#modal-delete').modal('hide');
                console.log(response);
                toastr.options = {
                    positionClass : "toast-top-center"
                }
                toastr.success('', 'Successfully Deleted!');
                load_data();
            }
            });
        });
    });