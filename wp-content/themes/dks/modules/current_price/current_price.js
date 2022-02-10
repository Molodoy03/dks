(function ($) {
    $(document).on('ready', function () {
        let phoneMask = $('input.phone-mask');
        if (phoneMask.length) {
            phoneMask.mask("+7 (999)999-99-99");
        }
    });
})(jQuery);