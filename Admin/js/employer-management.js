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
    function load_data(search, page){
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search,
                page: page
            },
            dataType: "JSON",
            success: function(data){
                $('#body-h').html(data.tableData);
                $('#pagination').html(data.pagination);
            }
        })
    }

    // Function for getting the current value in search box
    function GetSearchValue(){
        var search = $('#search').val();
        return search;
    }

    // Function for getting the current page number
    function getCurrentPage(){
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

    // Function for searching of company logo src and displaying to modal
    $('#body-h').on('click', '.view-logo', function(){
        var logo = $(this).data('logo');
        let src = $(this).find('img').attr('src')
        $('#view-logo').attr('src', src)
    })

    // Trigger this when user started to type in the search bar
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

    // Trigger this when user click more details button
    $('#body-h').on('click', '.more-details', function(){
        let employerId = $(this).attr('data-id');
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                moreDetails: true,
                employerId: employerId
            },
            dataType: "JSON",
            success: function(data){
                // Display the info reponse from the server into the more details modal
                $('#companyaddress').text(data.companyAddress);
                $('#companyceoname').text(data.companyCEO);
                $('#companysize').text(data.companySize);
                $('#companyrevenue').text(data.companyRevenue)
                $('#industry').text(data.industry);
                $('#companynumber').text(data.contactNumber);
                $('#companyemail').text(data.companyEmail);
                $('#companydescription').html(data.companyDescription)
                $('#datecreated').text(data.dateCreated);
            }
        })
    })

    // Trigger this when user click delete button and pass the employer id to the delete modal
    $('#body-h').on('click', '.delete-employer', function(){
        let employerId = $(this).attr('data-id');
        $('#yes-delete').val(employerId);
    })

    // Trigger this when user click yes in delete employer modal confirmation
    $('#yes-delete').click(function(){
        let employerId = $(this).val();
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                deleteEmployer: true,
                employerId: employerId
            },
            success: function(){
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    })

    // Trigger this when user click edit button and get the employer data to be assigned in edit modal inputs
    $('#body-h').on('click', '.fetch-details', function(){
        let employerId = $(this).attr('data-id');
        // Pass the employer Id to the save details button in edit modal
        $('#save-edit').val(employerId);
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                fetchDetails: true,
                employerId: employerId
            },
            dataType: "JSON",
            success: function(data){
                // Insert the fetch information into edit modal inputs fields
                $('#e-employerfullname').val(data.employerName);
                $('#e-employerposition').val(data.employerPosition);
                $('#e-companyname').val(data.companyName);
                $('#e-companyaddress').val(data.companyAddress);
                $('#e-companyceoname').val(data.CEOname);
                $('#e-companysize').val(data.companySize);
                $('#e-companyrevenue').val(data.companyRevenue);
                $('#e-industry').val(data.industry);
                $('#e-companynumber').val(data.companyNumber);
                $('#e-companyemail').val(data.companyEmail);
                $('#e-companydescription').val(data.companyDescription);
                $('select#verify').val(data.verificationStatus);
            }
        })    
    })

    // Trigger this when user click the save details in edit modal
    $('#save-edit').click(function(){
        // Get all the input values from the edit modal
        let employerId = $(this).val();
        let employerName = $('#e-employerfullname').val();
        let employerPosition = $('#e-employerposition').val();
        let companyName = $('#e-companyname').val();
        let companyAddress = $('#e-companyaddress').val();
        let CEOname = $('#e-companyceoname').val();
        let companySize = $('#e-companysize').val();
        let companyRevenue = $('#e-companyrevenue').val();
        let industry = $('#e-industry').val();
        let companyNumber = $('#e-companynumber').val();
        let companyEmail = $('#e-companyemail').val();
        let companyDescription = $('#e-companydescription').val();
        let verificationStatus = $('#verify').val();

        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                saveDetails: true,
                employerId: employerId,
                employerName: employerName,
                employerPosition: employerPosition,
                companyName: companyName,
                companyAddress: companyAddress,
                CEOname: CEOname,
                companySize: companySize,
                companyRevenue: companyRevenue,
                industry: industry,
                companyNumber: companyNumber,
                companyEmail: companyEmail,
                companyDescription: companyDescription,
                verificationStatus: verificationStatus
            },
            success: function(){
                $('#modal-editdetails').modal('hide');
                toastr.success('', 'Successfully Updated!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    })
})