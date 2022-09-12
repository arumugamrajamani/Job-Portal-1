$(document).ready(function () {
    
    function load_data(){
        $.ajax({
            url: 'php/company-profile.inc.php',
            type: 'POST',
            data: {
                getBookmarkData: true
            },
            dataType: "JSON",
            success: function (data) {
                //assign got value to the html ids
                $('#bookmark').html(data.tableData);
            },
            error: function (jqXHR, status, description) {
                console.log(jqXHR.responseText);
                console.log(status);
            }
        });
    }

    function fetchData() {
        $.ajax({
            url: 'php/company-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                //assign got value to the html ids
                $('#company_logo_name').attr('src', data.company_logo_name);
                $('#pfp').attr('src', data.company_logo_name);
                $('#employer_name').html(data.employer_name);
                $('#contact_number').html("Number: "+data.contact_number);
                $('#email').html("Email: "+data.email);
                $('#employer_position').html(data.employer_position);
                $('#company_address').html('<i class="bi bi-geo-alt"></i> ' + data.employerAddress);
                $('#company_name').html(data.companyName);
                $('#compname').html(data.companyName.toUpperCase());
                $('#company_description').html(data.companyDescription);
            }
        });
    }

    fetchData();
    load_data();
    $.ajax({
        url: 'php/postajob.inc.php',
        type: 'POST',
        data: {
            fetchTableData: true
        },
        dataType: "JSON",
        success: function (response) {
            $('#body-h').html(response.tableData);
            // console.log("Success")
        },
        error: function (jqXHR, status, description) {
            console.log(jqXHR.responseText);
            console.log(status);
        }
    });

    $('#editProfile').click(function(){
        window.location = 'manage-account-profile.php';
    });
});