$(document).ready(function () {
    // Note: the variable "postId" was located at the bottom portion of insidejob.php
    
    console.log(postId);
    load_data();
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
                    // window.location = 'jobapplication.php';

                }
            });
        }
        else if ($(this).text() == "APPLIED") {
            console.log("You have already applied."); 
            $.ajax({
                url: 'php/insidejob.inc.php',
                type: 'POST',
                data: {
                    testing: true,
                    // postId: postId
                },
                dataType: 'JSON',
                success: function (response) {
                    // window.location = 'jobapplication.php';
                    console.log(response.test);

                }
            });
        }
        
    });

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
<<<<<<< HEAD
                // window.location = 'jobapplication.php';
                // console.log(response.test);
                console.log("Finished");
                console.log(response.count);
=======
                window.location = 'bookmark-job.php';
                console.log("Finished");
                console.log(response.string);
>>>>>>> 2033d177f08095d496ba5f3de6c4c2facb595406
            }
        });
    });

});

// function update(){
//     $.ajax({
//         url: 'php/insidejob.inc.php',
//         type: 'POST',
//         data: {
//             update: true,
//         },
//         //dataType: 'JSON',
//         success: function (response) {
//             console.log(response);
//             window.location = 'bookmark-job.php';
//         }
//     });
// }
// function apply(){
//     $.ajax({
//         url: 'php/insidejob.inc.php',
//         type: 'POST',
//         data: {
//             apply: true,
//             postId: postId
//         },
//         dataType: 'JSON',
//         success: function (response) {
//             window.location = 'jobapplication.php';
//         }
//     });
// }