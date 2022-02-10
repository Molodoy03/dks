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
    <header class="header">
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
    </header>


