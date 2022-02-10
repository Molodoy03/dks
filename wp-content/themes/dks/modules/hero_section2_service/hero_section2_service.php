<?php
$s_title = get_sub_field('s_title');
$s_kartinka = get_sub_field('s_kartinka');
$s_phone_number = get_sub_field('s_phone_number');

if (!empty($s_title) || !empty($s_kartinka) || have_rows('s_preimushhestva')) {
    wp_enqueue_style('hero_section2_service_styles', get_template_directory_uri() . '/static/css/modules/hero_section2_service/hero_section2_service.css', '', '', 'all'); ?>

    <section class="hero_section2_service">
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

        <?php if (!empty($s_kartinka)) { ?>
            <div class="image">
                <?php echo wp_get_attachment_image($s_kartinka, 's_986_999'); ?>
            </div>
        <?php } ?>

        <div class="container narrow">
            <div class="main-holder">
                <?php if (!empty($s_title)) { ?>
                    <h1><?php echo $s_title; ?></h1>
                <?php }

                if (have_rows('s_preimushhestva')) { ?>
                    <div class="advantages">
                        <?php while (have_rows('s_preimushhestva')) {
                            the_row();
                            $ikonka = get_sub_field('ikonka');
                            $tekst = get_sub_field('tekst'); ?>
                            <div class="item">
                                <?php if (!empty($ikonka)) { ?>
                                    <div class="icon">
                                        <div class="holder">
                                            <?php echo wp_get_attachment_image($ikonka, 'full'); ?>
                                        </div>
                                    </div>
                                <?php }

                                if (!empty($tekst)) { ?>
                                    <div class="text">
                                        <?php echo $tekst; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if (!empty($s_phone_number)) { ?>
                    <div class="bottom-block">
                        <div class="phone">
                            <div class="icon">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect y="-0.000793457" width="60" height="60" rx="4" fill="#FF5718"/>
                                    <g clip-path="url(#clip0_401_2996)">
                                        <path d="M27.4243 32.5459C24.5609 29.6824 23.9143 26.819 23.7685 25.6718C23.7277 25.3545 23.8369 25.0364 24.0638 24.8111L26.3811 22.4949C26.7219 22.1542 26.7824 21.6233 26.5269 21.2147L22.8374 15.4857C22.5548 15.0333 21.9744 14.87 21.4973 15.1087L15.5743 17.8981C15.1885 18.0881 14.9616 18.4981 15.0054 18.9259C15.3157 21.8742 16.6011 29.1218 23.7235 36.2447C30.8459 43.3676 38.0924 44.6524 41.0423 44.9628C41.4701 45.0066 41.88 44.7797 42.07 44.3938L44.8595 38.4709C45.0973 37.9948 44.9351 37.416 44.4845 37.1328L38.7555 33.4443C38.3472 33.1886 37.8163 33.2486 37.4754 33.5892L35.1592 35.9064C34.9338 36.1333 34.6157 36.2425 34.2985 36.2018C33.1512 36.0559 30.2878 35.4093 27.4243 32.5459Z"
                                              fill="white"/>
                                        <path d="M38.7929 31.0337C38.2216 31.0337 37.7584 30.5705 37.7584 29.9992C37.7536 25.7163 34.2828 22.2454 29.9998 22.2406C29.4285 22.2406 28.9653 21.7774 28.9653 21.2061C28.9653 20.6348 29.4285 20.1716 29.9998 20.1716C35.425 20.1776 39.8214 24.5741 39.8274 29.9992C39.8274 30.5705 39.3642 31.0337 38.7929 31.0337Z"
                                              fill="white"/>
                                        <path d="M43.9653 31.0337C43.394 31.0337 42.9309 30.5705 42.9309 29.9992C42.9229 22.8609 37.1381 17.0762 29.9998 17.0682C29.4285 17.0682 28.9653 16.605 28.9653 16.0337C28.9653 15.4624 29.4285 14.9992 29.9998 14.9992C38.2803 15.0083 44.9907 21.7187 44.9998 29.9992C44.9998 30.2736 44.8908 30.5367 44.6968 30.7307C44.5028 30.9247 44.2397 31.0337 43.9653 31.0337Z"
                                              fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_401_2996">
                                            <rect width="30" height="30" fill="white"
                                                  transform="translate(15 14.9992)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="info">
                                <span><?php _e('Заказ вывоза'); ?></span>
                                <a href="tel:<?php echo $s_phone_number; ?>"><?php echo $s_phone_number; ?></a>
                            </div>
                        </div>

                        <?php if (have_rows('h_soczseti', 'option')) { ?>
                            <div class="socials">
                                <?php while (have_rows('h_soczseti', 'option')) {
                                    the_row();
                                    $ikonka = get_sub_field('ikonka');
                                    $ssylka = get_sub_field('ssylka');

                                    if (!empty($ikonka) && !empty($ssylka)) { ?>
                                        <a href="<?php echo $ssylka; ?>" target="_blank">
                                            <?php echo $ikonka; ?>
                                        </a>
                                    <?php }
                                } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>