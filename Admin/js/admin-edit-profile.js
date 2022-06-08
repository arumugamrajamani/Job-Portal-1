$(document).ready(function(){

    //fetch the admin's data from the database
    function fetchData(){
        $.ajax({
            url: 'php/admin-edit-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },dataType: "JSON",
            success: function(data){
                // insert the data into the input fields
                $('#full-name').val(data.fullName);
                $('#email').val(data.email);
                $('#number').val(data.number);
                $('#profile-pic').attr('src', data.profilePic); 
            }
        });
    }
    fetchData();
});