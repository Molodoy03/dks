(function ($) {
    let burgerBtn = $('.header .burger-btn');
    let menu = $('.header .menu-holder');

    if(burgerBtn.length && menu.length) {
        burgerBtn.on('click', function() {
            $(this).toggleClass('close');
            menu.toggle();
        });
    }

    let menuItemHasChildren = $('.header .menu-holder li.menu-item-has-children');

    if(menuItemHasChildren.length) {
        menuItemHasChildren.on('click', function(e) {
            e.preventDefault();

            let submenu = $(this).find('.sub-menu');
            let parentLinkTitle = $(this).children('a').text();

            if(submenu.length) {
                submenu.prepend('<div class="top-line"><div class="parent"><button class="return-btn"></button>'+parentLinkTitle+'</div><button class="close-sub-menu-btn"></button></div>');
                submenu.addClass('active');
            }

            $(document).on('click', '.top-line .close-sub-menu-btn', function() {
                let submenu = $(this).closest('.sub-menu');
                if(submenu.length) {
                    submenu.removeClass('active');
                }
            });

            $(document).on('click', '.top-line .return-btn', function() {
                let submenu = $(this).closest('.sub-menu');
                if(submenu.length) {
                    submenu.removeClass('active');
                }
            });
        });
    }
})(jQuery);