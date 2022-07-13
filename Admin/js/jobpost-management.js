function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "390px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft = "230px";
}
function GetSearchValue() {
        var search = $('#search').val();
        return search;
    }
$(document).ready(function () {
    $.ajax({
        url: 'php/job-management.inc.php',
        type: 'POST',
        data: {
            fetchData: true
        },
        dataType: 'JSON',
        success: function (response) {
            $('#body-h').html(response.tableData);
        }
    });
    $('#body-h').on('click', '.delete-Btn', function () {
        let postId = $(this).attr('data-id');
        $('#del-yes').val(postId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {
        let postId = $(this).val();
        $.ajax({
            url: "php/job-management.inc.php",
            type: "POST",
            data: {
                deleteJobseeker: true,
                post: postId
            },
            success: function (data) {
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue());
            }
        });
    });
});