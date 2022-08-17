

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
                toastr.options = {
                    positionClass : "toast-top-center"
                }
                toastr.success('', 'Successfully Changed!');
                load_data();
            }
        });
    });

    $('#body-h').on('click','.bookmark', function () {
        let Id = $(this).attr('data-id');
        $('#accept').val(Id);
    });
    $('#accept').click(function () {
        let Num = $(this).val();
        $.ajax({
            url: 'php/manage-applicant-resume.inc.php',
            type: 'POST',
            data: {
                bookmark: true,
                Num: Num
            },
            //dataType: "JSON",
            success: function (data) {
                console.log(Num);
                $('#exampleModal2').modal('hide');
                toastr.options = {
                    positionClass : "toast-top-center"
                }
                toastr.success('', 'Bookmarked!');
                window.location='company-profile.php';
            }
        });
    });

    $('#body-h').on('click','.remove', function () {
        let Id = $(this).attr('data-id');
        $('#accept1').val(Id);
    });
    $('#accept1').click(function () {
        let Num = $(this).val();
        console.log(Num);
        $.ajax({
            url: 'php/manage-applicant-resume.inc.php',
            type: 'POST',
            data: {
                remove: true,
                Num: Num
            },
            //dataType: "JSON",
            success: function (data) {
                console.log(data);
                $('#exampleModal3').modal('hide');
                toastr.options = {
                    positionClass : "toast-top-center"
                }
                toastr.success('', 'Bookmark Removed!');
                window.location='company-profile.php';
            }
        });
    });

    $('#body-h').on('click', '.delete-btn', function () {
        let postId = $(this).attr('data-id');
        $('#del-yes1').val(postId);
        });

        $('#del-yes1').click(function () {
            let postId = $(this).val();
            console.log(postId);
            $.ajax({
            url: 'php/manage-applicant-resume.inc.php',
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