$(document).ready(function () {
    // Note: the variable "postId" was located at the bottom portion of insidejob.php
    // It's role was to get the value stored in the URL
    
    load_data();

    // Initially loads the data for the page
    function load_data(){
        $.ajax({
            url: 'php/insidejob.inc.php',
            type: 'POST',
            data: {
                fetchData: true,
                postId: postId
            },
            dataType: 'JSON',
            success: function (response) {
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

                // Check if the jobseeker was applied or not based on the fetched database on 'applied_jobs'
                if (response.isApplied == true) {
                    $("#applyJob").text("APPLIED");
                }
                else {
                    $("#applyJob").text("APPLY NOW");
                }
            }
        });
    }

    // Executes the event the id "applyJob" was clicked. It will detect first the 
    // statement of the button before performing mysql query
    $("#applyJob").click(function() {
        if ($(this).text() == "APPLY NOW") {
            console.log("Applied!")
            $.ajax({
                url: 'php/insidejob.inc.php',
                type: 'POST',
                data: {
                    apply: true,
                    postId: postId
                },
                dataType: 'JSON',
                success: function (response) {
                    // Will direct to the jobapplication where it shows the table of every jobpost where the jobseeker applied
                    window.location = 'jobapplication.php';

                }
            });
        }
        else if ($(this).text() == "APPLIED") {        
            $.ajax({
                url: 'php/insidejob.inc.php',
                type: 'POST',
                data: {
                    testing: true,
                    postId: postId
                },
                dataType: 'JSON',
                success: function (response) {
                    console.log("You have already applied."); 
                }
            });
        }
        
    });


    // Bookmark function for insidejob page. It will direct to the bookmark table if successfully performed
    $("#bookmarkJob").click(function() {
        $.ajax({
            url: 'php/insidejob.inc.php',
            type: 'POST',
            data: {
                bookmark: true,
                postId: postId
            },
            dataType: 'JSON',
            success: function (response) {
                window.location = 'bookmark-job.php';
                console.log("Finished");
                console.log(response.string);
            }
        });
    });
});