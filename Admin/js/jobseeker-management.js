function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "390px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft= "230px";
}

$(document).ready(function() {

    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search ,page){
        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search,
                page: page
            },
            success: function(data){
                $('#body-h').html(data);
                $('#pagination').html(data.pagination);
            }
        })
    }

    function GetSearchValue(){
        var search = $('#search').val();
        return search;
    }

    // Function for getting the current page number
    function getCurrentPage(){
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

    
    // Function for searching of profile picture src and displaying to modal
    $('#body-h').on('click', '.view-pp', function(){
        let src = $(this).find('img').attr('src')
        $('#view-pp').attr('src', src)
    });

    // Trigger this when user started to search in the search bar
    $('#search').keyup(function () {
        let search = $(this).val();
        if(search != ''){
            load_data(search);
        } else {
            load_data();
        }
    });

    
    // Trigger this when user click on the pagination 
    $('#pagination').on('click', '.page-item', function(){
        let page = $(this).attr('data-page');
        load_data(GetSearchValue(), page);
    });

    // Trigger this when user click delete button and pass the data-id value on selected button to yes button in delete modal
    $('#body-h').on('click', '.delete-Btn', function(){
        let jobseekerId = $(this).attr('data-id');
        $('#del-yes').val(jobseekerId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function(){
        let jobseekerId = $(this).val();
        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                deleteJobseeker: true,
                jobseekerId: jobseekerId
            },
            success: function(data){
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    });

    // Trigger this when user click edit button and get the jobseeker data to be assigned in edit modal inputs
    $('#body-h').on('click', '.fetch-details', function(){
        let jobseekerId = $(this).attr('data-id');
        // Pass the jobseeker Id to the save details button in edit modal
        $('#save-edit').val(jobseekerId);

        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                fetchDetails: true,
                jobseekerId: jobseekerId
            },
            dataType: "JSON",
            success: function(data){
                // Insert the fetch information into edit modal inputs fields
                $('#e-jobseekername').val(data.jobseekerName);
                $('#e-contactnumber').val(data.jobseekerNumber);
                $('#e-emailaddress').val(data.jobseekerEmail);
            }
        })
    });

       // Trigger this when user click the save details in edit modal
    $('#save-edit').click(function(){
        // Get all the input values from the edit modal
        let jobseekerId = $(this).val();
        let jobseekerName = $('#e-jobseekername').val();
        let jobseekerNumber = $('#e-contactnumber').val();

        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                saveDetails: true,
                jobseekerId: jobseekerId,
                jobseekerName: jobseekerName,
                jobseekerNumber: jobseekerNumber,
            },
            success: function(){
                $('#modal-editdetails').modal('hide');
                toastr.success('', 'Successfully Updated!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    })

})