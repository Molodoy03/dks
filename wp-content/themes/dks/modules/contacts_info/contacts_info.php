<?php wp_enqueue_style('contacts_info_styles', get_template_directory_uri() . '/static/css/modules/contacts_info/contacts_info.css', '', '', 'all'); ?>

<section class="contacts_info">
    <svg width="396" height="870" viewBox="0 0 396 870" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="-472" y="396.522" width="592.389" height="640" rx="4" transform="rotate(-42.1481 -472 396.522)"
              fill="#F8F8F8"/>
    </svg>

    <div class="container">
        <div class="breadcrumbs">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo get_home_url(); ?>">
                        <span itemprop="name"><?php _e('Главная', THEME_NAME); ?></span></a>
                    <meta itemprop="position" content="1"/>
                </li>
                /
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="current">
                    <span itemprop="name"><?php the_title(); ?></span>
                    <meta itemprop="position" content="2"/>
                </li>
            </ol>
        </div>
    </div>
    <div class="container narrow">
        <h1>
            <?php _e('Контакты', THEME_NAME); ?>
        </h1>
    </div>
    <div class="container">
        <div class="info-blocks">
            <?php if (have_rows('c_otdely')) {
                while (have_rows('c_otdely')) {
                    the_row();
                    $name = get_sub_field('name');
                    $telefon = get_sub_field('telefon');
                    $email = get_sub_field('email');
                    $ssylka_na_telegramm = get_sub_field('ssylka_na_telegramm'); ?>

                    <div class="block">
                        <h5>
                            <?php echo $name; ?>
                        </h5>

                        <?php if (!empty($telefon)) { ?>
                            <div class="phone">
                                <span>
                                    <?php _e('Телефон:', THEME_NAME); ?>
                                </span>
                                <a href="tel:<?php echo $telefon; ?>"><?php echo $telefon; ?></a>
                            </div>
                        <?php }

                        if (!empty($email)) { ?>
                            <div class="email">
                                <span>
                                    <?php _e('E-mail:', THEME_NAME); ?>
                                </span>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </div>
                        <?php }

                        if (!empty($ssylka_na_telegramm)) { ?>
                            <a class="link" href="<?php echo $ssylka_na_telegramm; ?>" target="_blank">
                                <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9363 1.84185L18.6167 17.4972C18.3662 18.6021 17.7131 18.8771 16.785 18.3566L11.727 14.6293L9.28634 16.9767C9.01625 17.2468 8.79035 17.4726 8.26982 17.4726L8.63321 12.3213L18.0078 3.85033C18.4154 3.48694 17.9194 3.2856 17.3743 3.64899L5.785 10.9463L0.79571 9.3847C-0.289558 9.04586 -0.3092 8.29944 1.0216 7.7789L20.5368 0.260597C21.4404 -0.0782421 22.231 0.461936 21.9363 1.84185Z"
                                          fill="#FF5718"/>
                                </svg>
                            </a>
                        <?php } ?>
                    </div>
                <?php }
            } ?>

            <div class="block">
                <h5>
                    <?php _e('Пишите нам', THEME_NAME); ?>
                </h5>

                <?php $t_email = get_field('t_email', 'option');

                if (!empty($t_email)) { ?>
                    <div class="email">
                                <span>
                                    <?php _e('E-mail:', THEME_NAME); ?>
                                </span>
                        <a href="mailto:<?php echo $t_email; ?>"><?php echo $t_email; ?></a>
                    </div>
                <?php }

                if (have_rows('socz_seti')) { ?>
                    <div class="socials">
                        <?php
                        while (have_rows('socz_seti')) {
                            the_row();
                            $ikonka = get_sub_field('ikonka');
                            $ssylka = get_sub_field('ssylka');

                            if (!empty($ikonka) && !empty($ssylka)) { ?>
                                <a class="link" href="<?php echo $ssylka; ?>" target="_blank">
                                    <?php echo $ikonka; ?>
                                </a>
                            <?php }
                        } ?>
                    </div>
                <?php } ?>

                <div class="error-text">
                    <span><?php _e('Нашли ошибку в работе сайта?', THEME_NAME); ?></span>
                    <button class="open_error_modal"><?php _e('Напишите', THEME_NAME); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>