(function ($) {
    $(document).on('ready', function () {
        let number = $('.statistics .block h3 span');
        if(number.length) {
            number.counterUp({
                delay: 10,
                time: 1000
            });
        }
    });
})(jQuery);