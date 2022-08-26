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
        },
        error: function(response) {
            console.log(response);
        }
        });
    }
    
    // Trigger this when user started to type in fullname input and validate it
    $('#company').on('keyup', function() {
        let fullname = $('#company').val();
        if(fullname.length == 0) {
            $('#company').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company').popover({ placement: 'right', content: 'Company Name is required.'}).popover('show');
        } else {
            $('#company').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in fullname input and validate it
    $('#jobcategory').on('keyup', function() {
        let fullname = $('#jobcategory').val();
        if(fullname.length == 0) {
            $('#jobcategory').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#jobcategory').popover({ placement: 'right', content: 'Job Category is required.'}).popover('show');
        } else {
            $('#jobcategory').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

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
        $('#save-edit').val(postId);
    });

    $('#save-edit').click(function () {
      postId = $(this).val();
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
          dataType: 'json',
          success: function (data) {
            console.log(data);
            if(data.status == 'success') {
              $('#modal-editdetails').modal('hide');
                toastr.success('', 'Updated Successfully');
                load_data(GetSearchValue(), getCurrentPage());
            } else {
                // if there is an error in fullname, display error message
                if(data.companyRR.status == 'error') {
                    $('#company').removeClass().addClass('form-control border-danger');
                    $('#company').popover({ placement: 'right', content: data.companyRR.message }).popover('show');
                } else {
                    $('#company').removeClass().addClass('form-control border-success').popover('dispose');
                }
                // if there is an error in number, display error message
                if(data.jobcategoryRR.status == 'error') {
                    $('#jobcategory').removeClass().addClass('form-control border-danger');
                    $('#jobcategory').popover({ placement: 'right', content: data.jobcategoryRR.message }).popover('show');
                } else {
                    $('#jobcategory').removeClass().addClass('form-control border-success');
                }
          }
      }
    });
    });
});