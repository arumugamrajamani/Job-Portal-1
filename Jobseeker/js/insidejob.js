$(document).ready(function () {
load_data();
   function load_data(){
        $.ajax({
            url: 'php/insidejob.inc.php',
            type: 'POST',
            data: {
                getData: true,
            },
            dataType: 'JSON',
            success: function (response) {
             console.log(response);
            $('#jobTitle').html(response.jobTitle);
            $('#companyName').html(response.companyName);
            $('#address').html(response.companyAddress);
            $('#salaryy').html(response.salary+' a month');
            $('#employment').html('• '+response.employment);
            $('#description').html(response.description);
            $('#datePosted').html(response.date);
            }
            });
   }
});