(function ($) {
    new WOW().init();

    let burgerBtn = $('.header .burger-btn');
    let menu = $('.header .menu-holder');

    if (burgerBtn.length && menu.length) {
        burgerBtn.on('click', function () {
            $(this).toggleClass('close');
            menu.toggle();
        });
    }

    let menuItemHasChildren = $('.header .menu-holder li.menu-item-has-children');

    if (menuItemHasChildren.length && $(window).width() < '576') {
        menuItemHasChildren.on('click', function (e) {
            e.preventDefault();

            let submenu = $(this).find('.sub-menu');
            let parentLinkTitle = $(this).children('a').text();

            if (submenu.length) {
                submenu.prepend('<div class="top-line"><div class="parent"><button class="return-btn"></button>' + parentLinkTitle + '</div><button class="close-sub-menu-btn"></button></div>');
                submenu.addClass('active');
            }

            $(document).on('click', '.top-line .close-sub-menu-btn', function () {
                let submenu = $(this).closest('.sub-menu');
                if (submenu.length) {
                    submenu.removeClass('active');
                }
            });

            $(document).on('click', '.top-line .return-btn', function () {
                let submenu = $(this).closest('.sub-menu');
                if (submenu.length) {
                    submenu.removeClass('active');
                }
            });
        });
    }

    let footerColName = $('.footer .col .col-name');
    if (footerColName.length && $(window).width() < '576') {
        footerColName.on('click', function () {
            $(this).toggleClass('opened');
            let colContent = $(this).next();

            if (colContent.length) {
                colContent.slideToggle(200);
            }
        });
    }

    let closeModalBtn = $('.close-modal-btn');
    if (closeModalBtn.length) {
        closeModalBtn.on('click', function () {
            let modal = $(this).closest('.modal-parent');
            modal.fadeOut(200);
        });
    }

    let fakeUploadInput = $('.fake-upload input');
    if (fakeUploadInput.length) {
        fakeUploadInput.on('change', function () {
            let holder = $(this).closest('label');
            let fileNameTag = holder.find('span.filename');
            let fileName = $(this).val().split('\\').pop();

            fileNameTag.text(fileName);
        });
    }

    let open_photo_rating_modal = $('.open_photo_rating_modal');
    if (open_photo_rating_modal.length) {
        open_photo_rating_modal.on('click', function () {
            let modal = $('.modal-parent.photo_rating_modal');
            if (modal.length) {
                modal.fadeIn(200);
            }
        });
    }

    let open_call_me_modal = $('.open_call_me_modal');
    if (open_call_me_modal.length) {
        open_call_me_modal.on('click', function () {
            let modal = $('.modal-parent.call_me_modal');
            if (modal.length) {
                modal.fadeIn(200);
            }
        });
    }

    let open_send_resume_modal = $('.open_send_resume_modal');
    if (open_send_resume_modal.length) {
        open_send_resume_modal.on('click', function () {
            let modal = $('.modal-parent.send_resume_modal');
            if (modal.length) {
                modal.fadeIn(200);
            }
        });
    }

    let open_error_modal = $('.open_error_modal');
    if (open_error_modal.length) {
        open_error_modal.on('click', function () {
            let modal = $('.modal-parent.error_modal');
            if (modal.length) {
                modal.fadeIn(200);
            }
        });
    }
})(jQuery);