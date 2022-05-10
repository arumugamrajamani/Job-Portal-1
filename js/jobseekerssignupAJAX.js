$(document).ready(function (){
    console.log('page connected');
    $("#signUp").on('click', function(event) {
        event.preventDefault()
        let fullName = $('#fullName').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirmPassword = $('#confirmPassword').val();
        let mobileNumber = $("#mobileNumber").val();
        let errors = 0;
        if (fullName==""){
            console.log("no full name");
            errors+=1;
        }
        if (email == ""){
            console.log("no full email");
            errors+=1;
        }
        if (password != confirmPassword){
            console.log("password does not match");
            errors+=1;
           }
        if (errors == 0){
            $.ajax(
                {
                 //post 
            });
        }
    });

});