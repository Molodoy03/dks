<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueAlliance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'dash-tech'), max($paged, $page));
        ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
    <header class="header wow fadeInDown">
        <?php
        $t_working_mode = get_field('t_working_mode', 'option');
        $t_email = get_field('t_email', 'option');
        $t_phone_number = get_field('t_phone_number', 'option');

        if (!empty($t_working_mode) || !empty($t_email) || !empty($t_phone_number)) { ?>
            <div class="top-line">
                <div class="container">
                    <div class="holder">
                        <?php if (!empty($t_working_mode)) { ?>
                            <div class="block">
                                <div class="title">
                                    <?php _e('Режим работы:'); ?>
                                </div>
                                <span>
                                <?php echo $t_working_mode; ?>
                            </span>
                            </div>
                        <?php }

                        if (!empty($t_email)) { ?>
                            <div class="block">
                                <div class="title">
                                    <?php _e('E-mail:'); ?>
                                </div>
                                <a href="mailto:<?php echo $t_email; ?>">
                                    <?php echo $t_email; ?>
                                </a>
                            </div>
                        <?php }

                        if (!empty($t_phone_number)) { ?>
                            <div class="block">
                                <div class="title">
                                    <?php _e('Телефон:'); ?>
                                </div>
                                <a href="tel:<?php echo $t_phone_number; ?>">
                                    <?php echo $t_phone_number; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="main-line">
            <div class="container">
                <div class="holder">
                    <?php
                    $h_logo = get_field('h_logo', 'option');
                    $h_opisanie = get_field('h_opisanie', 'option');

                    if (!empty($h_logo) || !empty($h_opisanie)) { ?>
                        <div class="logo">
                            <?php if (!empty($h_logo)) { ?>
                                <a href="<?php echo get_site_url(); ?>">
                                    <img src="<?php echo $h_logo['url']; ?>" alt="<?php echo $h_logo['alt']; ?>"/>
                                </a>
                            <?php }

                            if (!empty($h_opisanie)) { ?>
                                <div class="description">
                                    <?php echo $h_opisanie; ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php }

                    if (has_nav_menu('header_menu')) { ?>
                        <div class="menu-holder">
                            <?php wp_nav_menu(['theme_location' => 'header_menu', 'container' => '']); ?>

                            <div class="mob-sections">
                                <?php
                                $t_working_mode = get_field('t_working_mode', 'option');
                                $t_email = get_field('t_email', 'option');
                                $t_phone_number = get_field('t_phone_number', 'option');

                                if (!empty($t_working_mode)) { ?>
                                    <div class="block">
                                        <div class="title">
                                            <?php _e('Режим работы:'); ?>
                                        </div>
                                        <span><?php echo $t_working_mode; ?></span>
                                    </div>
                                <?php }

                                if (!empty($t_email)) { ?>
                                    <div class="block">
                                        <div class="title">
                                            <?php _e('E-mail:'); ?>
                                        </div>
                                        <a href="mailto:<?php echo $t_email; ?>">
                                            <?php echo $t_email; ?>
                                        </a>
                                    </div>
                                <?php }

                                if (!empty($t_phone_number)) { ?>
                                    <div class="block">
                                        <div class="title">
                                            <?php _e('Телефон:'); ?>
                                        </div>
                                        <a href="tel:<?php echo $t_phone_number; ?>">
                                            <?php echo $t_phone_number; ?>
                                        </a>
                                    </div>
                                <?php } ?>

                                <div class="bottom-block">
                                    <?php $h_knopka = get_field('h_knopka', 'option');
                                    if (!empty($h_knopka)) { ?>
                                        <button class="button">
                                            <?php echo $h_knopka['title']; ?>
                                        </button>
                                    <?php }

                                    if (have_rows('h_soczseti', 'option')) { ?>
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
                            </div>
                        </div>
                    <?php } ?>

                    <button class="burger-btn">
                    </button>

                    <div class="right-block">
                        <?php $h_knopka = get_field('h_knopka', 'option');
                        if (!empty($h_knopka)) { ?>
                            <button class="button open_photo_rating_modal">
                                <?php echo $h_knopka['title']; ?>
                            </button>
                        <?php }

                        if (have_rows('h_soczseti', 'option')) { ?>
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
                </div>
            </div>
        </div>

        <div class="mobile-fixed-block">
            <?php if (!empty($t_phone_number)) { ?>
                <a href="tel:<?php echo $t_phone_number; ?>">
                    <div class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.1318 1.35548C15.0882 1.25011 15.0237 1.15135 14.9383 1.0655C14.9371 1.06423 14.9358 1.06295 14.9345 1.06169C14.7718 0.899938 14.5476 0.799988 14.3 0.799988H10.7C10.203 0.799988 9.80005 1.20293 9.80005 1.69999C9.80005 2.19704 10.203 2.59999 10.7 2.59999H12.1273L9.16365 5.56359C8.81218 5.91506 8.81218 6.48491 9.16365 6.83638C9.51512 7.18786 10.085 7.18786 10.4364 6.83638L13.4 3.87278V5.29999C13.4 5.79704 13.803 6.19999 14.3 6.19999C14.7971 6.19999 15.2 5.79704 15.2 5.29999V1.69999C15.2 1.57796 15.1758 1.4616 15.1318 1.35548Z"
                                  fill="#838383"/>
                            <path d="M0.800049 1.69999C0.800049 1.20293 1.20299 0.799988 1.70005 0.799988H3.63763C4.07759 0.799988 4.45306 1.11806 4.52539 1.55203L5.19077 5.54431C5.25572 5.93404 5.0589 6.32056 4.70551 6.49726L3.31218 7.19392C4.31685 9.69048 6.30956 11.6832 8.80612 12.6879L9.50278 11.2945C9.67947 10.9411 10.066 10.7443 10.4557 10.8093L14.448 11.4746C14.882 11.547 15.2 11.9224 15.2 12.3624V14.3C15.2 14.797 14.7971 15.2 14.3 15.2H12.5C6.03832 15.2 0.800049 9.96172 0.800049 3.49999V1.69999Z"
                                  fill="#838383"/>
                        </svg>
                    </div>

                    <span><?php _e('Позвонить', THEME_NAME); ?></span>
                </a>
            <?php } ?>

            <button class="center-btn">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="#FF5718"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 14C11 13.4477 11.4477 13 12 13H28C28.5523 13 29 13.4477 29 14C29 14.5523 28.5523 15 28 15H12C11.4477 15 11 14.5523 11 14Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 20C11 19.4477 11.4477 19 12 19H28C28.5523 19 29 19.4477 29 20C29 20.5523 28.5523 21 28 21H12C11.4477 21 11 20.5523 11 20Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 26C11 25.4477 11.4477 25 12 25H28C28.5523 25 29 25.4477 29 26C29 26.5523 28.5523 27 28 27H12C11.4477 27 11 26.5523 11 26Z" fill="white"/>
                </svg>
            </button>

            <?php $q = 1;
            if (have_rows('h_soczseti', 'option')) {
                while (have_rows('h_soczseti', 'option')) {
                    the_row();
                    if ($q <= 2) {
                        $ikonka = get_sub_field('ikonka');
                        $ssylka = get_sub_field('ssylka');
                        $nazvanie = get_sub_field('nazvanie');

                        if (!empty($ikonka) && !empty($ssylka)) { ?>
                            <a href="<?php echo $ssylka; ?>" target="_blank">
                                <div class="icon">
                                    <?php echo $ikonka; ?>
                                </div>

                                <?php if (!empty($nazvanie)) { ?>
                                    <span>
                                        <?php echo $nazvanie; ?>
                                    </span>
                                <?php } ?>
                            </a>
                        <?php }
                    }
                    $q++;
                }
            }

            $h_contact_page_link = get_field('h_contact_page_link', 'option');
            if (!empty($h_contact_page_link)) { ?>
                <a href="<?php echo $h_contact_page_link['url']; ?>">
                    <div class="icon">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M4.54518 3.64522C7.00548 1.18491 10.9944 1.18491 13.4547 3.64522C15.915 6.10552 15.915 10.0945 13.4547 12.5548L8.99995 17.0095L4.54518 12.5548C2.08488 10.0945 2.08488 6.10552 4.54518 3.64522ZM8.99995 9.89999C9.99406 9.89999 10.8 9.0941 10.8 8.09999C10.8 7.10588 9.99406 6.29999 8.99995 6.29999C8.00584 6.29999 7.19995 7.10588 7.19995 8.09999C7.19995 9.0941 8.00584 9.89999 8.99995 9.89999Z"
                                  fill="#838383"/>
                        </svg>
                    </div>

                    <span>
                        <?php _e('Пункты приема', THEME_NAME); ?>
                    </span>
                </a>
            <?php } ?>
        </div>
    </header>


