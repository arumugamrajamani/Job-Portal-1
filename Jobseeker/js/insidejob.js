$(document).ready(function () {
    load_data();
    function load_data(){
        $.ajax({
            url: 'php/insidejob.inc.php',
            type: 'POST',
            data: {
                fetchData: true,
            },
            dataType: 'JSON',
            success: function (response) {
                // console.log('response');
                $('#jobTitle').html(response.jobTitle);
                $('#jobTitle1').html(response.jobTitle);
                $('#companyName').html(response.companyName);
                $('#address').html(response.companyAddress);
                $('#salaryy').html(response.salary+' a month');
                $('#companyName').text(response.companyName);
                $('#address').text(response.companyAddress);
                $('#salaryy1').html(response.salary+' a month');
                $('#employment').html('• '+response.employment);
                $('#description').html(response.description);
                $('#datePosted').html(response.date);
                // console.log(response.test);
            }
        });
    }
});

function update(){
    $.ajax({
        url: 'php/insidejob.inc.php',
        type: 'POST',
        data: {
            update: true,
        },
        //dataType: 'JSON',
        success: function (response) {
            console.log(response);
            window.location = 'bookmark-job.php';
        }
    });
}
function apply(){
    $.ajax({
        url: 'php/insidejob.inc.php',
        type: 'POST',
        data: {
            apply: true,
        },
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            window.location = 'jobapplication.php';
        }
    });
}