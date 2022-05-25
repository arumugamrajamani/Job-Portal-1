$(document).ready(function() {
    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search){
        $.ajax({
            url: "php/employer-management.inc.php",
            type: "POST",
            data: {
                loadData: true,
                search: search
            },
            success: function(data){
                $('#body-h').html(data);
            }
        })
    }

    // Function for searching of company logo src and displaying to modal
    $('#body-h').on('click', '.view-logo', function(){
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
            success: function(data){
                $('#modal-delete').modal('hide');
                load_data();
            }
        })
    })

})