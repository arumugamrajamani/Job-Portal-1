$(document).ready(function() {
    load_data();
    function load_data() {
        $.ajax({
            url: 'php/faq.inc.php',
            type: 'POST',
            data: {
                dataLoad: true
            },
            dataType: 'JSON',
            success: function(data) {
                // from faq.inc.php to faq.js
                // output the data from the database to the div container
                $('.system-con').html(data.faqSystem);
                $('.application-con').html(data.faqApplication);
                $('.interview-con').html(data.faqInterview);
                $('.general-ques-con').html(data.faqGeneral);
            }
        });
    }
});