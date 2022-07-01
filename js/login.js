$(document).ready(function(){
    // Trigger this when user click login button
    $('form').submit(function(event){
        event.preventDefault();
        let email = $('#email').val();
        let password = $('#password').val();

        $.ajax({
            url: 'php/login.inc.php',
            type: 'POST',
            data: {
                email: email,
                password: password,
                login: true
            },
            success: function(data) {
                // Check the value of data
                if(data == "jobseeker"){
                    alert("Succesfully login as Jobseeker");
<<<<<<< HEAD
                    window.location.href = 'Jobseeker/applicant-profile.php';
                } else if(data == "employer") {
                    alert("Succesfully login as Employer");
                } else if(data == "admin") {
=======
                }else if(data == "employer"){
                    window.location.href = 'Employer/company-profile.php';
                }else if(data == "admin"){
>>>>>>> a6ee65b7183a13e3c335c5eb5afb1db3b8fccba2
                    window.location.href = 'Admin/dashboard.php';
                }else{
                    toastr.error(data, "Login Failed!" , {
                        timeOut: 3000,
                        preventDuplicates: true
                    });
                }
            }
        });
    });
});
function showHide(){
    let icon = document.querySelector(".icon");
    let  input= document.getElementById("password");
    
    if (input.type === "password"){
        input.type = "text";
    } else {
        input.type = "password";
    }
    icon.classList.toggle('is-active');
}
		