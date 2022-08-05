$(document).ready(function () {
    load_data();
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
                //toastr.success('', 'Successfully Deleted!');
            }
            });
        });
    });