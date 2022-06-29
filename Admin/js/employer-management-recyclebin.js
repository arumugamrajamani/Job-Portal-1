$(document).ready(function () {
    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search, page) {
        $.ajax({
            url: "php/recycle-bin-employer.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search,
                page: page
            },
            dataType: "JSON",
            success: function (data) {
                $('#body-h').html(data.tableData);
                $('#pagination').html(data.pagination);
                $('#entries').html(data.entries);
            }
        })
    }
      
    // Function for getting the current value in search box
    function GetSearchValue() {
        var search = $('#search').val();
        return search;
    }
    
    // Function for getting the current page number
    function getCurrentPage() {
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }
    
    // Trigger this when user started to search in the search bar
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
        let employerId = $(this).attr('data-id');
        $('#del-yes').val(employerId);
    });

    // Trigger this when user click delete button and pass the data-id value on selected button to yes button in delete modal
    $('#body-h').on('click', '.delete-Btn', function () {
        let employerId = $(this).attr('data-id');
        $('#del-yes').val(employerId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {
        let employerId = $(this).val();
        $.ajax({
            url: "php/recycle-bin-employer.inc.php",
            type: "POST",
            data: {
                deleteJobseeker: true,
                employerId: employerId
            },
            success: function (data) {
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    });

    function GetSearchValue() {
        var search = $('#search').val();
        return search;
    }
    // Function for getting the current page number
    function getCurrentPage() {
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

    // Function for searching of profile picture src and displaying to modal
    $('#body-h').on('click', '.view-pp', function () {
        let src = $(this).find('img').attr('src')
        $('#view-pp').attr('src', src)
    });

   //<-------------------------------Delete Functions------------------------------------------

    // Trigger this when user click delete button and pass the data-id value on selected button to yes button in delete modal
    $('#body-h').on('click', '.delete-Btn', function () {
        let employerId = $(this).attr('data-id');
        $('#del-yes').val(employerId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {
        let employerId = $(this).val();
        $.ajax({
            url: "php/recycle-bin-employer.inc.php",
            type: "POST",
            data: {
                deleteemployer: true,
                employerId: employerId
            },
            success: function (data) {
                $('#exampleModal').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    });
});


//----------------------------restore---------------------------

$('#body-h').on('click', '.restore-Btn', function () {
    let employerId = $(this).attr('data-id');

    $.ajax({
        url: "php/recycle-bin-employer.inc.php",
        type: "POST",
        data: {
            restoreemployer: true,
            employerId: employerId
        },
        success: function (data) {
            $('#modal-restore').modal('restore');
            toastr.success('', 'Successfully Restored');
            load_data(GetSearchValue(), getCurrentPage());
        }
    })

});
