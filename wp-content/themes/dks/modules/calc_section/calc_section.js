(function ($) {
    $(document).on('ready', function () {
        let phoneMask = $('input.phone-mask');
        if (phoneMask.length) {
            phoneMask.mask("+7 (999)999-99-99");
        }

        let range = $("#custom-range");
        if (range.length) {
            noUiSlider.create(range[0], {
                start: 20,
                connect: true,
                range: {
                    'min': 0,
                    'max': 100000
                },
                pips: {
                    mode: 'values',
                    values: [100, 500, 1000, 3000, 50000, 100000],
                }
            });

            let connectedInput = $('input[name="weight_f"]');
            if(connectedInput.length) {
                range[0].noUiSlider.on('update', function(values, handle) {
                    let value = Math.round(values[handle]);
                    connectedInput.val(value + ' кг');
                });

                connectedInput.on('keydown', function() {
                    range[0].noUiSlider.set([parseFloat($(this).val()), null]);
                });
            }
        }
    });
})(jQuery);