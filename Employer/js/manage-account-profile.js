$(document).ready(function () {

    fetchData();
    function fetchData() {
        $.ajax({
            url: 'php/manage-account-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                //assign got value to the val ids
                $('#company_logo_name').attr('src', data.company_logo_name);
                $('#employer_name').val(data.employer_name);
                $('#contact_number').val(data.contact_number);
                $('#email').val(data.email);
                $('#employer_position').val(data.employer_position);
                $('#company_address').val(data.employerAddress);
                $('#company_name').val(data.companyName);
                $('#company_description').val(data.companyDescription);
                $('#company_ceo').val(data.companyCeoName);
                $('#company_size').val(data.companySize);
                $('#company_revenue').val(data.companyRevenue);
                $('#industry').val(data.industry);
                $('#permit_original').attr('placeholder', data.permit_original_name);
            }
        });
    }

    // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidName(name) {
        var regex = new RegExp(/^[a-zA-Z .]+$/);
        return regex.test(name);
    }

    // Function to used to check if address is valid string, return boolean result(true or false)
    function isValidAddress(address) {
        var regex = new RegExp(/^[a-zA-Z0-9\s,.'-]+$/);
        return regex.test(address);
    }

    // Function to be used to check if contact number is valid, return boolean result(true or false)
    function isNumber(mobile) {
        var regex = new RegExp(/^[0-9-+]+$/);
        return regex.test(mobile);
    }


    // Trigger this when user started to type in employer name input and validate it
    $('#employer_name').on('keyup', function () {
        let employer_name = $('#employer_name').val();
        if (employer_name.length == 0) {
            $('#employer_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_name').popover({ placement: 'right', content: 'Employer Name is required.' }).popover('show');
        } else if (!isValidName(employer_name)) {
            $('#employer_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_name').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#employer_name').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user started to type in employer position input and validate it
    $('#employer_position').on('keyup', function () {
        let employer_position = $('#employer_position').val();
        if (employer_position.length == 0) {
            $('#employer_position').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_position').popover({ placement: 'right', content: 'Employer Position is required.' }).popover('show');
        } else if (!isValidName(employer_position)) {
            $('#employer_position').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_position').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#employer_position').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user started to type in company name input and validate it
     $('#company_name').on('keyup', function () {
        let company_name = $('#company_name').val();
        if (company_name.length == 0) {
            $('#company_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_name').popover({ placement: 'right', content: 'Company Name is required.' }).popover('show');
        } else if (!isValidName(company_name)) {
            $('#company_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_name').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#company_name').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user started to type in company address input and validate it
     $('#company_address').on('keyup', function () {
        let company_address = $('#company_address').val();
        if (company_address.length == 0) {
            $('#company_address').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_address').popover({ placement: 'right', content: 'Company Address is required.' }).popover('show');
        } else if (!isValidAddress(company_address)) {
            $('#company_address').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_address').popover({ placement: 'right', content: 'Company Address is required.' }).popover('show');
        } else {
            $('#company_address').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


 // Trigger this when user started to type in company ceo input and validate it
     $('#company_ceo').on('keyup', function () {
        let company_ceo = $('#company_ceo').val();
        if (company_ceo.length == 0) {
            $('#company_ceo').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_ceo').popover({ placement: 'right', content: 'Company Ceo Name is required.' }).popover('show');
        } else if (!isValidName(company_ceo)) {
            $('#company_ceo').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_ceo').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#company_ceo').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user started to type in company size input and validate it
    $('#company_size').on('keyup', function () {
        let company_size = $('#company_size').val();
        if (company_size.length == 0) {
            $('#company_size').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_size').popover({ placement: 'right', content: 'Company Size is required.' }).popover('show');
        } else if (isNumber(company_size) == false) {
            $('#company_size').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_size').popover({ placement: 'right', content: 'Company Size must be numeric.' }).popover('show');
        } else {
            $('#company_size').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in company revenue input and validate it
    $('#company_revenue').on('keyup', function () {
        let company_size = $('#company_revenue').val();
        if (company_size.length == 0) {
            $('#company_revenue').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_revenue').popover({ placement: 'right', content: 'Company Revenue is required.' }).popover('show');
        } else if (isNumber(company_size) == false) {
            $('#company_revenue').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_revenue').popover({ placement: 'right', content: 'Company Revenue must be numeric.' }).popover('show');
        } else {
            $('#company_revenue').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in industry input and validate it
    $('#industry').on('keyup', function () {
        let industry = $('#industry').val();
        if (industry.length == 0) {
            $('#industry').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#industry').popover({ placement: 'right', content: 'Industry is required.' }).popover('show');
        } else if (!isValidName(industry)) {
            $('#industry').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#industry').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#industry').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in company description input and validate it
    $('#company_description').on('keyup', function () {
        let company_description = $('#company_description').val();
        if (company_description.length == 0) {
            $('#company_description').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_description').popover({ placement: 'right', content: 'Company Description is required.' }).popover('show');
        } else if (!isValidAddress(company_description)) {
            $('#company_description').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_description').popover({ placement: 'right', content: 'Company Description is required.' }).popover('show');
        } else {
            $('#company_description').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in contact number input and validate it
    $('#contact_number').on('keyup', function () {
        let contact_number = $('#contact_number').val();
        if (contact_number.length == 0) {
            $('#contact_number').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#contact_number').popover({ placement: 'right', content: 'Contact number is required.' }).popover('show');
        } else if (isNumber(contact_number) == false) {
            $('#contact_number').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#contact_number').popover({ placement: 'right', content: 'Contact number must be numeric.' }).popover('show');
        } else {
            $('#contact_number').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user click save now 
    $(document).on('click', '#save-now', function (event) {
        event.preventDefault();
        let employer_name = $('#employer_name').val();
        let employer_position = $('#employer_position').val();
        let company_name = $('#company_name').val();
        let company_address = $('#company_address').val();
        let company_ceo = $('#company_ceo').val();
        let company_size = $('#company_size').val();
        let company_revenue = $('#company_revenue').val();
        let industry = $('#industry').val();
        let company_description = $('#company_description').val();
        let contact_number = $('#contact_number').val();
        let company_logo_new = $('#companyLogo').prop('files')[0];
        let qr_code = $('#qrCode').prop('files')[0];
        let permit_new_name = $('#permit_original_name').prop('files')[0];
        let form_data = new FormData();
        form_data.append('employer_name', employer_name);
        form_data.append('employer_position', employer_position);
        form_data.append('company_name', company_name);
        form_data.append('company_address',  company_address);
        form_data.append('company_ceo', company_ceo);
        form_data.append('company_size', company_size);
        form_data.append('company_revenue', company_revenue);
        form_data.append('industry',  industry);
        form_data.append('company_description',  company_description);
        form_data.append('contact_number', contact_number);
        form_data.append('permit_new_name', permit_new_name);
        form_data.append('company_logo_new', company_logo_new);
        form_data.append('qr_code', qr_code);
        form_data.append('saveNow', true);
        $.ajax({
            url: 'php/manage-account-profile.inc.php',
            type: 'POST',
            data: form_data, 
            contentType: false, 
            processData: false,
            dataType: 'JSON',
            success: function (data) {
                //console.log(data);
                if (data.status == "success") {
                    swal({
                        title: "Update Account Succesfull!",
                        icon: "success",
                        button: "Okay",
                    })
                    .then(function() {
                        window.location = "company-profile.php";
                    });
                    // Call this function to clear border color
                    //clearBorderColor();
                } else {
                    if(data.permitRR.status == 'error') {
                        $('#permit_original_name').popover({ placement: 'right', content: data.permitRR.message}).popover('show');
                    } else {
                        $('permit_original_name').popover('dispose');
                    }
                    if(data.companyRR.status == 'error') {
                        $('#companyLogo').popover({ placement: 'right', content: data.companyRR.message}).popover('show');
                    } else {
                        $('companyLogo').popover('dispose');
                    }
                    if(data.qrRR.status == 'error') {
                        $('#qrCode').popover({ placement: 'right', content: data.qrRR.message}).popover('show');
                    } else {
                        $('qrCode').popover('dispose');
                    }
                    //toastr.error('', data.message);
                }
            }
        })
    })






















});