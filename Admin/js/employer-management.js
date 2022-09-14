
//--------------------------------Navbar functions --------------------------------------------------------

function openNav() {
    document.getElementById("mySidebar").style.left = "0";
    document.getElementById("main").style.marginLeft = "390px";
}

function closeNav() {
    document.getElementById("mySidebar").style.left = "-100%";
    document.getElementById("main").style.marginLeft = "230px";
}

//--------------------------------End of Navbar functions --------------------------------------------------------


$(document).ready(function () {
    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search, page) {
        $.ajax({
            url: "php/employer-management.inc.php",
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

    // Function to be used to check if mobile number is valid, return boolean result(true or false)
    function isNumber(mobile) {
        var regex = new RegExp(/^[0-9-+]+$/);
        return regex.test(mobile);
    }

    // Function to be used to check if email is valid, return boolean result(true or false)
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidName(name) {
        var regex = new RegExp(/^[a-zA-Z .]+$/);
        return regex.test(name);
    }
    // Function for clearing input value, border color and error message
    function resetFields() {
        $('.form-control').removeClass('border-danger');
        $('.form-control').removeClass('border-success');
    }

    // Function for searching of company logo src and displaying to modal
    $('#body-h').on('click', '.view-logo', function () {
        var logo = $(this).data('logo');
        let src = $(this).find('img').attr('src')
        $('#view-logo').attr('src', src)
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

    // Trigger this when user click more details button
    $('#body-h').on('click', '.more-details', function () {
        let employerId = $(this).attr('data-id');
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                moreDetails: true,
                employerId: employerId
            },
            dataType: "JSON",
            success: function (data) {
                // Display the info reponse from the server into the more details modal
                $('#e-companyaddress').text(data.companyAddress);
                $('#e-companyceoname').text(data.companyCEO);
                $('#e-companysize').text(data.companySize);
                $('#e-companyrevenue').text(data.companyRevenue)
                $('#e-industry').text(data.industry);
                $('#e-companynumber').text(data.contactNumber);
                $('#e-companyemail').text(data.companyEmail);
                $('#e-companydescription').html(data.companyDescription)
                $('#e-datecreated').text(data.dateCreated);
            }
        })
    })

    // Trigger this when user click delete button and pass the employer id to the delete modal
    $('#body-h').on('click', '.delete-employer', function () {
        let employerId = $(this).attr('data-id');
        $('#yes-delete').val(employerId);
    })

    // Trigger this when user click yes in delete employer modal confirmation
    $('#yes-delete').click(function () {
        let employerId = $(this).val();
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                deleteEmployer: true,
                employerId: employerId
            },
            success: function () {
                $('#modal-delete').modal('hide');
                toastr.success('', 'Successfully Deleted!');
                load_data(GetSearchValue(), getCurrentPage());
            }
        })
    })

    // Trigger this when user click edit button and get the employer data to be assigned in edit modal inputs
    $('#body-h').on('click', '.fetch-details', function () {
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
            success: function (data) {
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
                $('#verify').val(data.verificationStatus);
                resetFields();
            }
        })
    })

    //--------------------------------Start of Edit Details validation --------------------------------------------------------

    // Trigger this when user started to type in fullname input and validate it
    $('#e-employerfullname').on('keyup', function () {
        let fullname = $('#e-employerfullname').val();
        if (fullname.length == 0) {
            $('#e-employerfullname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-employerfullname').popover({ placement: 'right', content: 'Employer Fullname is required.' }).popover('show');
        } else if (!isValidName(fullname)) {
            $('#e-employerfullname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-employerfullname').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#e-employerfullname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in employerposition input and validate it
    $('#e-employerposition').on('keyup', function () {
        let position = $('#e-employerposition').val();
        if (position.length == 0) {
            $('#e-employerposition').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-employerposition').popover({ placement: 'right', content: 'Employer Position is required.' }).popover('show');
        } else {
            $('#e-employerposition').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companyname input and validate it
    $('#e-companyname').on('keyup', function () {
        let companyName = $('#e-companyname').val();
        if (companyName.length == 0) {
            $('#e-companyname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyname').popover({ placement: 'right', content: 'Company Name is required.' }).popover('show');
        } else {
            $('#e-companyname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companyaddress input and validate it
    $('#e-companyaddress').on('keyup', function () {
        let address = $('#e-companyaddress').val();
        if (address.length == 0) {
            $('#e-companyaddress').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyaddress').popover({ placement: 'right', content: 'Company Address is required.' }).popover('show');
        } else {
            $('#e-companyaddress').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companyceoname input and validate it
    $('#e-companyceoname').on('keyup', function () {
        let CEOname = $('#e-companyceoname').val();
        if (CEOname.length == 0) {
            $('#e-companyceoname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyceoname').popover({ placement: 'right', content: 'Company CEO Name is required.' }).popover('show');
        } else if (!isValidName(CEOname)) {
            $('#e-companyceoname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyceoname').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#e-companyceoname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companysize input and validate it. only accepts ints
    $('#e-companysize').on('keyup', function () {
        let companysize = $('#e-companysize').val();
        if (companysize.length == 0) {
            $('#e-companysize').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companysize').popover({ placement: 'right', content: 'Company Size is required.' }).popover('show');
        } else if (!isNumber(companysize)) {
            $('#e-companysize').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companysize').popover({ placement: 'right', content: 'Only numbers are allowed.' }).popover('show');
        } else {
            $('#e-companysize').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companysize input and validate it. only accepts ints
    $('#e-companyrevenue').on('keyup', function () {
        let companyrevenue = $('#e-companyrevenue').val();
        if (companyrevenue.length == 0) {
            $('#e-companyrevenue').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyrevenue').popover({ placement: 'right', content: 'Company Revenue is required.' }).popover('show');
        } else if (!isNumber(companyrevenue)) {
            $('#e-companyrevenue').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyrevenue').popover({ placement: 'right', content: 'Only numbers are allowed.' }).popover('show');
        } else {
            $('#e-companyrevenue').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in industry input and validate it
    $('#e-industry').on('keyup', function () {
        let industry = $('#e-industry').val();
        if (industry.length == 0) {
            $('#e-industry').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-industry').popover({ placement: 'right', content: 'Industry is required.' }).popover('show');
        } else {
            $('#e-industry').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in contactnumber input and validate it
    $('#e-companynumber').on('keyup', function () {
        let contactnumber = $('#e-companynumber').val();
        if (contactnumber.length == 0) {
            $('#e-companynumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companynumber').popover({ placement: 'right', content: 'Contact Number is required.' }).popover('show');
        } else if (!isNumber(contactnumber)) {
            $('#e-companynumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companynumber').popover({ placement: 'right', content: 'Only numbers are allowed.' }).popover('show');
        } else {
            $('#e-companynumber').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in email input and validate it
    $('#e-companyemail').on('keyup', function () {
        let companyemail = $('#e-companyemail').val();
        console.log(companyemail)
        if (companyemail.length == 0) {
            $('#e-companyemail').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyemail').popover({ placement: 'right', content: 'Company Email is required.' }).popover('show');
        } else if (isEmail(companyemail) == false) {
            $('#e-companyemail').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companyemail').popover({ placement: 'right', content: 'Email is invalid.' }).popover('show');
        } else {
            $('#e-companyemail').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in industry input and validate it
    //the 1000 limit is in the html as maxlength="1000"
    $('#e-companydescription').on('keyup', function () {
        let companydescription = $('#e-companydescription').val();
        if (companydescription.length == 0) {
            $('#e-companydescription').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companydescription').popover({ placement: 'right', content: 'Company Description is required.' }).popover('show');
        } else if (companydescription.length < 50) {
            $('#e-companydescription').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#e-companydescription').popover({ placement: 'right', content: 'Atleast 50 characters are required.' }).popover('show');
        } else {
            $('#e-companydescription').removeClass().addClass('form-control border-success').popover('dispose');
            $('#e-companydescription-errorMsg').text(null);
        }
    })


    //--------------------------------End of Edit Details validation --------------------------------------------------------

    // Trigger this when user click the save details in edit modal
    $('#save-edit').click(function () {
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
            dataType: 'json',
            success: function (data) {
                if (data.status == "success") {
                    $('#modal-editdetails').modal('hide');
                    toastr.success('', 'Successfully Updated!');
                    load_data(GetSearchValue(), getCurrentPage());
                } else {
                    // <--------------------------------------- VALIDATIONS ------------------------------------------------------->

                    // Checking of status of employer name
                    if (data.employerNameRR.status == "error") {
                        $('#e-employerfullname').removeClass().addClass('form-control border-danger');
                        $('#e-employerfullname').popover({ placement: 'right', content: data.employerNameRR.message }).popover('show');
                    } else {
                        $('#e-employerfullname').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of employer position
                    if (data.employerPositionRR.status == "error") {
                        $('#e-employerposition').removeClass().addClass('form-control border-danger');
                        $('#e-employerposition').popover({ placement: 'right', content: data.employerPositionRR.message }).popover('show');
                    } else {
                        $('#e-employerposition').removeClass().addClass('form-control success-danger');
                    }

                    // Checking of status of company name
                    if (data.companyNameRR.status == "error") {
                        $('#e-companyname').removeClass().addClass('form-control border-danger');
                        $('#e-companyname').popover({ placement: 'right', content: data.companyNameRR.message }).popover('show');
                    } else {
                        $('#e-companyname').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of company address
                    if (data.companyAddressRR.status == "error") {
                        $('#e-companyaddress').removeClass().addClass('form-control border-danger');
                        $('#e-companyaddress').popover({ placement: 'right', content: data.companyAddressRR.message }).popover('show');
                    } else {
                        $('#e-companyaddress').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of company CEO
                    if (data.companyCEORR.status == "error") {
                        $('#e-companyceoname').removeClass().addClass('form-control border-danger');
                        $('#e-companyceoname').popover({ placement: 'right', content: data.companyCEORR.message }).popover('show');
                    } else {
                        $('#e-companyceoname').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of company size
                    if (data.companySizeRR.status == "error") {
                        $('#e-companysize').removeClass().addClass('form-control border-danger');
                        $('#e-companysize').popover({ placement: 'right', content: data.companySizeRR.message }).popover('show');
                    } else {
                        $('#e-companysize').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of company revenue
                    if (data.companyRevenueRR.status == "error") {
                        $('#e-companyrevenue').removeClass().addClass('form-control border-danger');
                        $('#e-companyrevenue').popover({ placement: 'right', content: data.companyRevenueRR.message }).popover('show');
                    } else {
                        $('#e-companyrevenue').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of industry
                    if (data.industryRR.status == "error") {
                        $('#e-industry').removeClass().addClass('form-control border-danger');
                        $('#e-industry').popover({ placement: 'right', content: data.industryRR.message }).popover('show');
                    } else {
                        $('#e-industry').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of company description
                    if (data.companyDescriptionRR.status == "error") {
                        $('#e-companydescription').removeClass().addClass('form-control border-danger');
                        $('#e-companydescription').popover({ placement: 'right', content: data.companyDescriptionRR.message }).popover('show');
                    } else {
                        $('#e-companydescription').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of contact number
                    if (data.contactNumberRR.status == "error") {
                        $('#e-companynumber').removeClass().addClass('form-control border-danger');
                        $('#e-companynumber').popover({ placement: 'right', content: data.contactNumberRR.message }).popover('show');
                    } else {
                        $('#e-companynumber').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of company description address
                    if (data.companyDescriptionRR.status == "error") {
                        $('#e-companydescription').removeClass().addClass('form-control border-danger');
                        $('#e-companydescription').popover({ placement: 'right', content: data.companyDescriptionRR.message }).popover('show');
                    } else {
                        $('#e-companydescription').removeClass().addClass('form-control border-success');
                    }

                    // Checking of status of verification.
                    if (data.verificationStatusRR.status == "error") {
                        $('#verify').removeClass().addClass('form-control border-danger');
                        $('#verify').popover({ placement: 'right', content: data.verificationStatusRR.message }).popover('show');
                    } else {
                        $('#verify').removeClass().addClass('form-control border-success');
                    }


                }
            }
        })
    })
})