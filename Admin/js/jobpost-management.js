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
function save(){
    
 }
$(document).ready(function () {
    load_data();
    function load_data(search, page){
        $.ajax({
        url: 'php/job-management.inc.php',
        type: 'POST',
        data: {
            fetchData: true,
            search: search,
            page: page
        },
        dataType: 'JSON',
        success: function (response) {
            $('#employername').val(response.name);
            $('#body-h').html(response.tableData);
            $('#pagination').html(response.pagination);
            $('#entries').html(response.entries);
        }
        });
    }
    
    // Trigger this when user started to type in the search bar
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
    
    $('#body-h').on('click','.delete-Btn', function () {
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
                deleteJobPost: true,
                postId: postId
            },
            success: function (response) {
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data();
            }
        });
    });
    
    $('#body-h').on('click','.edit-Btn', function () {
        let postId = $(this).attr('data-id');
        $('#save').val(postId);
    });
    $('#save').click(function () {
      postId = $('#save').val();
      company = $('#company').val();
      jobcategory = $('#jobcategory').val();
      $.ajax({
          url: 'php/job-management.inc.php',
          type: 'POST',
          data: {
              edit: true,
              company: company,
              jobcategory: jobcategory,
              postId: postId
          },
          //dataType: 'JSON',
          success: function (response) {
              $('#modal-editdetails').modal('hide');
                toastr.success('', 'Updated Successfully');
                load_data();
          }
      });
    });
});