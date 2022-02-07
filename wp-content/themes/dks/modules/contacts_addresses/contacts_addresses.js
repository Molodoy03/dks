(function ($) {
    $(document).on('ready', function () {
        let button = $('.contacts_addresses .block .left-block button');

        if(button.length) {
            button.on('click', function() {
                $(this).toggleClass('active');

                let rightBlock = $(this).closest('.block').find('.right-block');

                if(rightBlock.length) {
                    rightBlock.slideToggle(200);
                }
            });
        }
    });
})(jQuery);