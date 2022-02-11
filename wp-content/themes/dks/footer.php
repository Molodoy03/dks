<footer class="footer wow fadeInUp">
    <div class="container">
        <?php
        $f_logo = get_field('f_logo', 'options');
        $f_opisanie = get_field('f_opisanie', 'options');

        if (!empty($f_logo) || !empty($f_opisanie)) { ?>
            <div class="logo">
                <?php if (!empty($f_logo)) { ?>
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo $f_logo['url']; ?>" alt="<?php echo $f_logo['alt']; ?>"/>
                    </a>
                <?php }

                if (!empty($f_opisanie)) { ?>
                    <div class="description">
                        <?php echo $f_opisanie; ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="holder">
            <?php
            $f_about_company = get_field('f_about_company', 'option');
            $f_partners = get_field('f_partners', 'option');

            if (!empty($f_about_company) || !empty($f_partners)) { ?>
                <div class="col about_partners">
                    <?php if (!empty($f_about_company)) { ?>
                        <div class="about-company">
                            <div class="col-name">
                                <?php _e('О компании', THEME_NAME); ?>
                            </div>
                            <div class="col-content">
                                <?php echo $f_about_company; ?>
                            </div>
                        </div>
                    <?php }

                    if (!empty($f_partners)) { ?>
                        <div class="partners">
                            <div class="col-name">
                                <?php _e('Наши партнеры', THEME_NAME); ?>
                            </div>
                            <div class="col-content">
                                <div class="holder">
                                    <?php foreach ($f_partners as $f_partners_image) {
                                        echo wp_get_attachment_image($f_partners_image, 's_116_60');
                                    } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }

            if (has_nav_menu('footer_menu')) { ?>
                <div class="col menu">
                    <div class="col-name">
                        <?php echo wp_get_nav_menu_name('footer_menu'); ?>
                    </div>
                    <div class="col-content">
                        <?php wp_nav_menu(['theme_location' => 'footer_menu', 'container' => '']); ?>
                    </div>
                </div>
            <?php }

            $t_phone_number = get_field('t_phone_number', 'option');
            $t_email = get_field('t_email', 'option');
            $t_working_mode = get_field('t_working_mode', 'option');
            $t_address = get_field('t_address', 'option');

            if (!empty($t_phone_number) || !empty($t_email) || !empty($t_working_mode) || !empty($t_address) || have_rows('f_socials', 'option')) { ?>
                <div class="col contacts_socials">
                    <div class="contacts">
                        <div class="col-name">
                            <?php _e('Контакты', THEME_NAME); ?>
                        </div>
                        <div class="col-content">
                            <?php if (!empty($t_phone_number)) { ?>
                                <div class="line">
                                    <div class="title">
                                        <?php _e('Телефон:'); ?>
                                    </div>
                                    <a href="tel:<?php echo $t_phone_number; ?>">
                                        <?php echo $t_phone_number; ?>
                                    </a>
                                </div>
                            <?php }

                            if (!empty($t_email)) { ?>
                                <div class="line">
                                    <div class="title">
                                        <?php _e('Email:'); ?>
                                    </div>
                                    <a href="mailto:<?php echo $t_email; ?>">
                                        <?php echo $t_email; ?>
                                    </a>
                                </div>
                            <?php }

                            if (!empty($t_working_mode)) { ?>
                                <div class="line">
                                    <div class="title">
                                        <?php _e('Режим работы:'); ?>
                                    </div>
                                    <span><?php echo $t_working_mode; ?></span>
                                </div>
                            <?php }

                            if (!empty($t_address)) { ?>
                                <div class="line">
                                    <div class="title">
                                        <?php _e('Адрес:'); ?>
                                    </div>
                                    <span><?php echo $t_address; ?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <?php if (have_rows('f_socials', 'option')) { ?>
                        <div class="socials">
                            <?php while (have_rows('f_socials', 'option')) {
                                the_row();
                                $icon = get_sub_field('icon');
                                $url = get_sub_field('url');

                                if (!empty($icon) && !empty($url)) { ?>
                                    <a href="<?php echo $url; ?>" target="_blank">
                                        <?php echo wp_get_attachment_image($icon, 's_40_40'); ?>
                                    </a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

        <?php
        $f_copyrights_text = get_field('f_copyrights_text', 'option');

        if (!empty($f_copyrights_text)) { ?>
            <div class="copyrights">
                <?php echo $f_copyrights_text; ?>
            </div>
        <?php } ?>
    </div>
</footer>

<div class="photo_rating_modal modal-parent">
    <div class="container">
        <div class="modal">
            <button class="close-modal-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 6.29289C5.90237 6.68342 5.90237 7.31658 6.29289 7.70711L16.2929 17.7071C16.6834 18.0976 17.3166 18.0976 17.7071 17.7071C18.0976 17.3166 18.0976 16.6834 17.7071 16.2929L7.70711 6.29289C7.31658 5.90237 6.68342 5.90237 6.29289 6.29289Z" fill="#838383"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 6.29289C18.0976 6.68342 18.0976 7.31658 17.7071 7.70711L7.70711 17.7071C7.31658 18.0976 6.68342 18.0976 6.29289 17.7071C5.90237 17.3166 5.90237 16.6834 6.29289 16.2929L16.2929 6.29289C16.6834 5.90237 17.3166 5.90237 17.7071 6.29289Z" fill="#838383"/>
                </svg>
            </button>
            <h4><?php _e('Оценка по фото', THEME_NAME); ?></h4>
            <?php echo do_shortcode('[contact-form-7 id="413" title="Оценка по фото (попап)"]'); ?>
        </div>
    </div>
</div>

<div class="call_me_modal modal-parent">
    <div class="container">
        <div class="modal">
            <button class="close-modal-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 6.29289C5.90237 6.68342 5.90237 7.31658 6.29289 7.70711L16.2929 17.7071C16.6834 18.0976 17.3166 18.0976 17.7071 17.7071C18.0976 17.3166 18.0976 16.6834 17.7071 16.2929L7.70711 6.29289C7.31658 5.90237 6.68342 5.90237 6.29289 6.29289Z" fill="#838383"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 6.29289C18.0976 6.68342 18.0976 7.31658 17.7071 7.70711L7.70711 17.7071C7.31658 18.0976 6.68342 18.0976 6.29289 17.7071C5.90237 17.3166 5.90237 16.6834 6.29289 16.2929L16.2929 6.29289C16.6834 5.90237 17.3166 5.90237 17.7071 6.29289Z" fill="#838383"/>
                </svg>
            </button>
            <h4><?php _e('Перезвоните мне', THEME_NAME); ?></h4>
            <div class="text">
                <?php _e('Оставьте ваше имя и телефон и мы свяжемся с вами в ближайшее время', THEME_NAME); ?>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="414" title="Перезвоните мне (попап)"]'); ?>
        </div>
    </div>
</div>

<div class="send_resume_modal modal-parent">
    <div class="container">
        <div class="modal">
            <button class="close-modal-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 6.29289C5.90237 6.68342 5.90237 7.31658 6.29289 7.70711L16.2929 17.7071C16.6834 18.0976 17.3166 18.0976 17.7071 17.7071C18.0976 17.3166 18.0976 16.6834 17.7071 16.2929L7.70711 6.29289C7.31658 5.90237 6.68342 5.90237 6.29289 6.29289Z" fill="#838383"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 6.29289C18.0976 6.68342 18.0976 7.31658 17.7071 7.70711L7.70711 17.7071C7.31658 18.0976 6.68342 18.0976 6.29289 17.7071C5.90237 17.3166 5.90237 16.6834 6.29289 16.2929L16.2929 6.29289C16.6834 5.90237 17.3166 5.90237 17.7071 6.29289Z" fill="#838383"/>
                </svg>
            </button>
            <h4><?php _e('Отправить резюме', THEME_NAME); ?></h4>
            <?php echo do_shortcode('[contact-form-7 id="415" title="Отправить резюме (попап)"]'); ?>
        </div>
    </div>
</div>

<div class="error_modal modal-parent">
    <div class="container">
        <div class="modal">
            <button class="close-modal-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 6.29289C5.90237 6.68342 5.90237 7.31658 6.29289 7.70711L16.2929 17.7071C16.6834 18.0976 17.3166 18.0976 17.7071 17.7071C18.0976 17.3166 18.0976 16.6834 17.7071 16.2929L7.70711 6.29289C7.31658 5.90237 6.68342 5.90237 6.29289 6.29289Z" fill="#838383"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 6.29289C18.0976 6.68342 18.0976 7.31658 17.7071 7.70711L7.70711 17.7071C7.31658 18.0976 6.68342 18.0976 6.29289 17.7071C5.90237 17.3166 5.90237 16.6834 6.29289 16.2929L16.2929 6.29289C16.6834 5.90237 17.3166 5.90237 17.7071 6.29289Z" fill="#838383"/>
                </svg>
            </button>
            <h4><?php _e('Сообщить об ошибке', THEME_NAME); ?></h4>
            <?php echo do_shortcode('[contact-form-7 id="416" title="Сообщить об ошибке (попап)"]'); ?>
        </div>
    </div>
</div>

<?php wp_footer() ?>
</div><!-- .wrapper -->
</body>
</html>
