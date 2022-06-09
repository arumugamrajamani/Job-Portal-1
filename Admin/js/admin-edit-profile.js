$(document).ready(function(){
    fetchData();

    //fetch the admin's data from the database
    function fetchData(){
        $.ajax({
            url: 'php/admin-edit-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function(data){
                // insert the data into the input fields
                $('#fullname').val(data.fullName);
                $('#email').val(data.email);
                $('#contactnumber').val(data.number);
                $('#profile-pic-view').attr('src', data.profilePic); 
            }
        });
    }

    $(document).on('change', '#profilePic', function(){
        // get the file name
        let profilePic = $("#profilePic").prop('files')[0];
        let form_data = new FormData();
        form_data.append("profilePic", profilePic);
        form_data.append("changeprofile", true);
        $.ajax({
            url: "php/admin-edit-profile.inc.php",
            type: "POST",
            contentType: false,
            processData: false,
            cache: false,
            data: form_data,
            dataType: 'JSON',
            success: function(data){
                if(data.status == 'error'){
                    toastr.error('', data.message);   
                }
            }
        })
    })
    
});