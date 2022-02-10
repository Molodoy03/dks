(function ($) {
    $(document).on('ready', function () {
        var workssSlider = $('.export_work .works-slider');
        if (workssSlider.length) {
            workssSlider.each(function () {
                $(this).slick({
                    dots: false,
                    arrows: false,
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                swipe: false,
                            }
                        },
                    ]
                });
            });

            let prevBtn = $('.control-box .prev');
            if(prevBtn.length) {
                prevBtn.on('click', function() {
                    workssSlider.slick('slickPrev');
                });
            }

            let nextBtn = $('.control-box .next');
            if(nextBtn.length) {
                nextBtn.on('click', function() {
                    workssSlider.slick('slickNext');
                });
            }

            // function changeDot() {
            //     let current = testimonialsSlider.find('.slick-slide.slick-current');
            //     let currentnumber = current.attr('data-slick-index');
            //     let dot = testimonialsSlider.find('.slick-dots li:nth-child('+(parseInt(currentnumber) + 1)+')');
            //     testimonialsSlider.find('.slick-dots li').removeClass('active');
            //     dot.addClass('active');
            // }
            //
            // changeDot();
            //
            // testimonialsSlider.on("afterChange", function (){
            //     changeDot();
            // });
        }
    });
})(jQuery);