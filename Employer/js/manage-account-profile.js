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
});