$(document).ready(function () {

    fetchData();
    $.ajax({
            url: 'php/postajob.inc.php',
            type: 'POST',
            data: {
                fetchTableData: true
            },
            dataType: "JSON",
            success: function (response) {
            $('#body-h').html(response.tableData);
        }
        });

        fetchData();
    $('#editProfile').click(function(){
        window.location = 'manage-account-profile.php';
    });

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
                $('#employer_name').html(data.employer_name);
                $('#contact_number').html("Number: "+data.contact_number);
                $('#email').html("Email: "+data.email);
                $('#employer_position').html(data.employer_position);
                $('#company_address').html('<i class="bi bi-geo-alt"></i> ' + data.employerAddress);
                $('#company_name').html(data.companyName);
                $('#company_description').html(data.companyDescription);
            }
        });
    }
});