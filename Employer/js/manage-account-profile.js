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
                $('#permit_original_name').val(data.permitOriginalName);
            }
        });
    }

    // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidName(name) {
        var regex = new RegExp(/^[a-zA-Z .]+$/);
        return regex.test(name);
    }

    // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidAddress(address) {
        var regex = new RegExp(/^[a-zA-Z0-9\s,.'-]+$/);
        return regex.test(address);
    }



    // Trigger this when user started to type in fullname input and validate it
    $('#employer_name').on('keyup', function () {
        let employer_name = $('#employer_name').val();
        if (employer_name.length == 0) {
            $('#employer_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_name').popover({ placement: 'right', content: 'employer_name is required.' }).popover('show');
        } else if (!isValidName(employer_name)) {
            $('#employer_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_name').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#employer_name').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user started to type in fullname input and validate it
    $('#employer_position').on('keyup', function () {
        let employer_position = $('#employer_position').val();
        if (employer_position.length == 0) {
            $('#employer_position').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_position').popover({ placement: 'right', content: 'employer_position is required.' }).popover('show');
        } else if (!isValidName(employer_position)) {
            $('#employer_position').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employer_position').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#employer_position').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user started to type in fullname input and validate it
     $('#company_name').on('keyup', function () {
        let company_name = $('#company_name').val();
        if (company_name.length == 0) {
            $('#company_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_name').popover({ placement: 'right', content: 'company_name is required.' }).popover('show');
        } else if (!isValidName(company_name)) {
            $('#company_name').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_name').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#company_name').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user started to type in fullname input and validate it
     $('#company_address').on('keyup', function () {
        let company_address = $('#company_address').val();
        if (company_address.length == 0) {
            $('#company_address').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_address').popover({ placement: 'right', content: 'company_address is required.' }).popover('show');
        } else if (!isValidAddress(company_address)) {
            $('#company_address').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_address').popover({ placement: 'right', content: 'company_address is required.' }).popover('show');
        } else {
            $('#company_address').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


 // Trigger this when user started to type in fullname input and validate it
     $('#company_ceo').on('keyup', function () {
        let company_ceo = $('#company_ceo').val();
        if (company_ceo.length == 0) {
            $('#company_ceo').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_ceo').popover({ placement: 'right', content: 'company_ceo is required.' }).popover('show');
        } else if (!isValidName(company_ceo)) {
            $('#company_ceo').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#company_ceo').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#company_ceo').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    // Trigger this when user clic save now 
    $(document).on('click', '#save-now', function () {
        let employer_name = $('#employer_name').val();
        let employer_position = $('#employer_position').val();
        let company_name = $('#company_name').val();
        let company_address = $('#company_address').val();
        let company_ceo = $('#company_ceo').val();
        $.ajax({
            url: 'php/manage-account-profile.inc.php',
            type: 'POST',
            data: {
                employer_name: employer_name,
                employer_position: employer_position,
                company_name: company_name,
                company_address: company_address,
                company_ceo: company_ceo,
                saveNow: true
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == "success") {
                    toastr.success('', data.message);
                    // Call this function to clear border color
                    clearBorderColor();
                } else {
                    toastr.error('', data.message);
                }
            }
        })
    })





















});