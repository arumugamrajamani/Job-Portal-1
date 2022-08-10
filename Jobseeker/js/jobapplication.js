$(document).ready(function (){

    fetchData();
    load_data();
    function load_data(){
        $.ajax({
            url: 'php/jobapplication.inc.php',
            type: 'POST',
            data: {
                getTableData: true
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                //assign got value to the html ids
                $('#body-h').html(data.tableData);
            }
        });
    }
    function fetchData() {
        $.ajax({
            url: 'php/jobapplication.inc.php',
            type: 'POST',
            data: {
                getData: true
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                //assign got value to the html ids
                $('#profile_picture').attr('src', data.profile_picture);
                $('#fullname').html(data.fullname);
                //$('#mobile_number').html("Number: "+data.mobile_number);
                //$('#email').html("Email: "+data.email);
            }
        });
    }
        $('#body-h').on('click', '.delete-btn', function () {
            let postId = $(this).attr('data-id');
            $('#del-yes').val(postId);
            });

         $('#del-yes').click(function () {
            let postId = $(this).val();
            console.log(postId);
            $.ajax({
            url: 'php/jobapplication.inc.php',
            type: 'POST',
            data: {
                 delete: true,
                 postId: postId
            },
            success: function (response) {
                $('#exampleModal').modal('hide');
                console.log(postId);
                toastr.options = {
                    positionClass : "toast-top-center"
                }
                toastr.success('', 'Successfully Deleted!');
                load_data();
            }
            });
        });
});