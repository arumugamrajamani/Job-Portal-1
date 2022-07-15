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
// Function for getting the current page number
function getCurrentPage() {
    var page = $('#pagination').find('.active').attr('data-page');
    return page;
}
$(document).ready(function () {
   load_data();
   function load_data(search, page){
        $.ajax({
        url: 'php/recycle-bin-job-management.inc.php',
        type: 'POST',
        data: {
            fetchData: true,
            search: search,
            page: page
        },
        dataType: 'JSON',
        success: function (response) {
            //alert('nagana');
            $('#body-h').html(response.tableData);
            $('#pagination').html(response.pagination);
            $('#entries').html(response.entries);
        }
        });
    }
    
    $('#search').keyup(function () {
        let search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });
    
     // Trigger this when user click on the pagination 
    $('#pagination').on('click', '.page-item', function () {
        let page = $(this).attr('data-page');
        load_data(GetSearchValue(), page);
    });
    
    // Trigger this when user click delete button and pass the data-id value on selected button to yes button in delete modal
    $('#body-h').on('click', '.delete-Btn', function () {
        let postId = $(this).attr('data-id');
        $('#del-yes').val(postId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {
        let postId = $(this).val();
        $.ajax({
            url: "php/recycle-bin-job-management.inc.php",
            type: "POST",
            data: {
                deleteJobPost: true,
                postId: postId
            },
            success: function (data) {
                $('#exampleModal').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        });
    });

    //----------------------------restore---------------------------

    $('#body-h').on('click', '.restore-Btn', function () {
        let postId = $(this).attr('data-id');

        $.ajax({
            url: "php/recycle-bin-job-management.inc.php",
            type: "POST",
            data: {
                restoreJobPost: true,
                postId: postId
            },
            success: function (data) {
                $('#modal-restore').modal('restore');
                toastr.success('', 'Successfully Restored');
                load_data(GetSearchValue());
            }
        })

    });
});