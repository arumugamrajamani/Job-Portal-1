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

    function displayNone() {
        $('.faq-text-h4').css({'display':'none'});
        $('.system-con').css({'display':'none'});
        $('.application-con').css({'display':'none'});
        $('.interview-con').css({'display':'none'});
        $('.general-ques-con').css({'display':'none'});
    }

    function displayBlock() {
        $('.faq-text-h4').css({'display':'block'});
        $('.system-con').css({'display':'block'});
        $('.application-con').css({'display':'block'});
        $('.interview-con').css({'display':'block'});
        $('.general-ques-con').css({'display':'block'});
    }

    $('#searchFaq').keyup(function() {
        var input = $(this).val();
        var outString = input.replace(/[`~!@#$%^&*()_|+\=?;:'",.<>\{\}\[\]\\\/]/gi, '');
        // alert(input);
        if (input != '') {
            $.ajax({
                url: 'php/faq.inc.php',
                type: 'POST',
                data: {
                    input: outString
                },
                success: function(data) {
                    $('.search-results').html(data);
                    $('.search-results').css({'display':'block'})
                    displayNone();
                }
            });
        } else {
            $('.search-results').css({'display':'none'});
            displayBlock();
        }
    });
});