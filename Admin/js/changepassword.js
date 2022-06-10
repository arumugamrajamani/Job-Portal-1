$(document).ready(function(){
    $('#confirm').click(function(){
        let currentpassword = $('#currentpassword').val();
        let newpassword = $('#newpassword').val();
        let confirmpassword = $('#confirmpassword').val();
        $.ajax({
            url: "php/changepassword.inc.php",
            method: "POST",
            data: {
                confirm: true,
                currentpassword: currentpassword,
                newpassword: newpassword,
                confirmpassword: confirmpassword
            },
            dataType: 'json',
            success: function(data){
                alert(data);
            }
        })
    })
})