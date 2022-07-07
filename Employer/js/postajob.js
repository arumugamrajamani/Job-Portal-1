$(document).ready(function() {
    $("form.ajax-form" ).submit(function(event) {
        //prevents the page to load 
        event.preventDefault();
        //getting the attributes in the form tag
        var jobForm = $(this), url = jobForm.attr('action'), type = jobForm.attr('method'), data = {};
        //finding all  elements with name attribute within the form and iterating each element
        jobForm.find('[name]').each(function(i, value){
            //saving all the values of the form in the data array
            var element = $(this), name = element.attr('name'), value = element.val();
            data[name] = value;
        });
        $.ajax({
            url : url, type: type, data : data, dataType:'json', success: function(response){
               if (response.status == "success"){
                 // Create sweet alert to display successfull message and return to company-profile page
                swal({
                    title: "Message alert",
                    icon: "success",
                    button: "Okay",
                })
                .then(function() {
                    console.log(data);
                   // window.location = "company-profile.php";
                });
                }
            }
        });
      });
});