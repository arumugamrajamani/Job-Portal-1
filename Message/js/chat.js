export function chat() {
$(document).ready(function() {
    // change chat textarea height until max height
    $(".chat-input textarea").each(function () {
        this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:auto;");
    }).on("input", function () {
        this.style.height = 0;
        this.style.height = (this.scrollHeight) + "px";

        let comment = $.trim($('#type-text').val());
        if (comment != '') {
            $('.outside-btn').css({'display':'none'})
            $('.input-con').css({'width':'90.5%'});
        } else {
            $('.outside-btn').css({'display':'block'})
            $('.input-con').css({'width':'75%'});
        }
    });

    // force to bottom (recent in chat)
    $('.chat .chat-body').scrollTop($('.chat .chat-body')[0].scrollHeight);

    // slide toggle, collapse or show items
    $('.media-collapse').click(function() {
        $(this).next('.media-files').slideToggle();
        $(this).find('.angle-right').toggleClass('rotate');
    })

    // inbox show options
    $('.inbox-title .option .fa-sliders-h').click(function() {
        $('.popup-archive-spam').toggleClass('show')
    })

    // body header media files
    // function for removing and adding class
    function add_class(_selector, _class) {
        $(_selector).addClass(_class)
    }

    function remove_class(_selector, _class) {
        $(_selector).removeClass(_class)
    }

    let imgBtn = '.img-button'
    let imgCon = '.img-con'
    let fileBtn = '.files-button'
    let fileCon = '.files-con'
    
    // body header media files
    $('.img-button').click(function() {
        add_class(imgBtn, 'active')
        remove_class(fileBtn, 'active')

        if ($(this).hasClass('active')) {
            add_class(imgCon, 'active')
            remove_class(fileCon, 'active')
        } 
    })

    $('.files-button').click(function() {
        add_class(fileBtn, 'active')
        remove_class(imgBtn, 'active')

        if ($(this).hasClass('active')) {
            add_class(fileCon, 'active')
            remove_class(imgCon, 'active')
        } 
    })

    // open modal
    $('.img-files img').click(function() {
        $img = $(this).attr('src')

        $('#show-img-modal').css({'display':'block'});
        $('#img-modal').attr('src', $img);
    })

    // close modal
    $('.close-modal').click(function() {
        $('#show-img-modal').css({'display':'none'});
    })
});
}