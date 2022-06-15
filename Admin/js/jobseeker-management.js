function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "390px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft = "230px";
}

$(document).ready(function () {

    //toggle sub-menu
    $('.sub-btn').click(function () {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });

    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search, page) {
        $.ajax({
            url: "php/jobseeker-management.inc.php",
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

    function GetSearchValue() {
        var search = $('#search').val();
        return search;
    }

    // Function for getting the current page number
    function getCurrentPage() {
        var page = $('#pagination').find('.active').attr('data-page');
        return page;
    }

    // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidName(name) {
        var regex = new RegExp(/^[a-zA-Z .]+$/);
        return regex.test(name);
    }

    // Function to be used to check if mobile number is valid, return boolean result(true or false)
    function isNumber(mobile) {
        var regex = new RegExp(/^[0-9-+]+$/);
        return regex.test(mobile);
    }


    // Trigger this when user started to type in fullname input and validate it
    $('#e-jobseekername').on('keyup', function () {
        let fullname = $('#e-jobseekername').val();
        if (fullname.length == 0) {
            $('#e-jobseekername').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-jobseekername').popover({ placement: 'right', content: 'Fullname is required.' }).popover('show');
        } else if (!isValidName(fullname)) {
            $('#e-jobseekername').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-jobseekername').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#e-jobseekername').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in mobile number input and validate it
    $('#e-contactnumber').on('keyup', function () {
        let mobilenumber = $('#e-contactnumber').val();
        if (mobilenumber.length == 0) {
            $('#e-contactnumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-contactnumber').popover({ placement: 'right', content: 'Mobile number is required.' }).popover('show');
        } else if (isNumber(mobilenumber) == false) {
            $('#e-contactnumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-contactnumber').popover({ placement: 'right', content: 'Mobile number must be numeric.' }).popover('show');
        } else {
            $('#e-contactnumber').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Function for searching of profile picture src and displaying to modal
    $('#body-h').on('click', '.view-pp', function () {
        let src = $(this).find('img').attr('src')
        $('#view-pp').attr('src', src)
    });

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
        let jobseekerId = $(this).attr('data-id');
        $('#del-yes').val(jobseekerId);
    });

    // Trigger this when user click yes on delete modal
    $('#del-yes').click(function () {
        let jobseekerId = $(this).val();
        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                deleteJobseeker: true,
                jobseekerId: jobseekerId
            },
            success: function (data) {
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    });

    // Trigger this when user click edit button and get the jobseeker data to be assigned in edit modal inputs
    $('#body-h').on('click', '.fetch-details', function () {
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
            success: function (data) {
                // Insert the fetch information into edit modal inputs fields
                $('#e-jobseekername').val(data.jobseekerName);
                $('#e-contactnumber').val(data.jobseekerNumber);
                $('#e-emailaddress').val(data.jobseekerEmail);
            }
        })
    });

    // Trigger this when user click the save details in edit modal
    $('#save-edit').click(function () {
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
            dataType: 'json',
            success: function (data) {
                if (data.status == 'success') {
                    $('#modal-editdetails').modal('hide');
                    toastr.success('', 'Successfully Updated!');
                    load_data(GetSearchValue(), getCurrentPage());
                } else {
                    // if there is an error in fullname, display error message
                    if (data.fullnameRR.status == 'error') {
                        $('#e-jobseekername').removeClass().addClass('form-control border-danger');
                        $('#e-jobseekername').popover({ placement: 'right', content: data.fullnameRR.message }).popover('show');
                    } else {
                        $('#e-jobseekername').removeClass().addClass('form-control border-success').popover('dispose');
                    }

                    // if there is an error in number, display error message
                    if (data.mobilenumberRR.status == 'error') {
                        $('#e-contactnumber').removeClass().addClass('form-control border-danger');
                        $('#e-contactnumber').popover({ placement: 'right', content: data.mobilenumberRR.message }).popover('show');
                    } else {
                        $('#e-contactnumber').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                }
            }
        })
    })

})