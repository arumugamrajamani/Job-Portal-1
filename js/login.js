$(document).ready(function(){
    // Trigger this when user click login button
    $('#login').on('click', function(){
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
            success: function(data){
                // Check the value of data
                if(data == "jobseeker"){
                    alert("Succesfully login as Jobseeker");
                } else if(data == "employer") {
                    alert("Succesfully login as Employer");
                } else if(data == "admin") {
<<<<<<< HEAD
                    window.location.href = "admin/dashboard.php";
=======
                    window.location.href = 'Admin/dashboard.php';
>>>>>>> b7aa528d438ec7dd9b92b46d878b8123ec942148
                } else {
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
		