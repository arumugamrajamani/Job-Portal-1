import { chat } from "./chat.js";

export function navbar() { 
    $(document).ready(function () {
        $('.user').click(function () {
            $('.dropdown').toggleClass('show');
            $('.profile').toggleClass('click');
        });
        
        $(window).click(function(e) {
            if (!$('.user').has(e.target).length > 0) {
                $('.dropdown').removeClass('show')
                $('.profile').removeClass('click')
            }      
        })

        $('.sub-btn').click(function () {
            $(this).next('.sub-item').slideToggle();
            $(this).find('.angle-right').toggleClass('rotate');
        });

        $('.menu-btn i').click(function () {
            $('.sidebar').toggleClass('minimize');
            $('main').toggleClass('minimize');
            $(this).toggleClass('click');
        });

        $('#toggle-switch').click(function() {
            $(document.body).toggleClass('dark-theme')
        })
        
        // $('#dark-mode').click(function() {
        //     $(document.body).toggleClass('dark-mode')
        // })
    });
}

navbar()
chat()