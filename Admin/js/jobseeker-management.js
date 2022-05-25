$(document).ready(function() {

    // Call this function to reload the table data at first time
    load_data();
    // Function for loading of table data
    function load_data(search){
        $.ajax({
            url: "php/jobseeker-management.inc.php",
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
    // Function for searching of profile picture src and displaying to modal
    $('#body-h').on('click', '.view-pp', function(){
        let src = $(this).find('img').attr('src')
        $('#view-pp').attr('src', src)
    })


    // Trigger this when user started to search in the search bar
    $('#search').keyup(function () {
        let search = $(this).val();
        if(search != ''){
            load_data(search);
        } else {
            load_data();
        }
    });

    /* when the admin clicks on the delete button of a job seeker this will trigger.
    it will pass the employer id from the attr 'data-id' to the jobseeker-management.inc.php  */
    $('#body-h').on('click', '.delete-Btn', function(){
        let jobseekerId = $(this).attr('data-id');
        $('#del-yes').attr('data-id', jobseekerId);
        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                deleteBtn: true,
                jobseekerId: jobseekerId
            },
            dataType: "JSON",
            success: function(data){
                // Display the info reponse from the server into the delete modal
                $('#jobseekerNameDisp').text("Name: " + data.fullname);
            }
        })
    });

    /* when the admin clicks on the YES button of the modal this will trigger.
    it will pass the employer id from the attr 'data-id' of the yes button to the jobseeker-management.inc.php  */
    $('.modal-body').on('click', '#del-yes', function(){
        let jobseekerId = $(this).attr('data-id');
        $.ajax({
            url: "php/jobseeker-management.inc.php",
            type: "POST",
            data: {
                deleteYes: true,
                jobseekerId: jobseekerId
            },
            dataType: "JSON",
            success: function(data){
                toastr.info(data.fullname + ' Was Deleted Succesfully.', 'Deleted succesfully!');
                load_data();
            }
        })
    });

})