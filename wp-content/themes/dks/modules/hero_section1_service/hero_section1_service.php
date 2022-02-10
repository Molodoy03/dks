<?php
$s_title = get_sub_field('s_title');
$s_kartinka = get_sub_field('s_kartinka');
$s_icon = get_sub_field('s_icon');
$s_tekst = get_sub_field('s_tekst');
$s_czena = get_sub_field('s_czena');
$dop_usluga_ikonka = get_sub_field('dop_usluga_ikonka');
$dop_usluga_tekst = get_sub_field('dop_usluga_tekst');

if (!empty($s_title) || !empty($s_kartinka) || !empty($s_icon) || !empty($s_tekst) || !empty($s_czena)) {
    wp_enqueue_style('hero_section1_service_styles', get_template_directory_uri() . '/static/css/modules/hero_section1_service/hero_section1_service.css', '', '', 'all'); ?>

    <section class="hero_section1_service">
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
                <?php if (!empty($dop_usluga_ikonka) || !empty($dop_usluga_tekst)) { ?>
                    <div class="dop-item">
                        <?php if (!empty($dop_usluga_ikonka)) {
                            echo wp_get_attachment_image($dop_usluga_ikonka, 'full');
                        }

                        if (!empty($dop_usluga_tekst)) {
                            echo $dop_usluga_tekst;
                        } ?>
                    </div>
                <?php }
                echo wp_get_attachment_image($s_kartinka, 's_986_999'); ?>
            </div>
        <?php } ?>

        <div class="container narrow">
            <div class="main-holder">
                <?php if (!empty($s_title)) { ?>
                    <h1><?php echo $s_title; ?></h1>
                <?php } ?>

                <div class="info-box">
                    <?php if (!empty($dop_usluga_ikonka) || !empty($dop_usluga_tekst)) { ?>
                        <div class="dop-item">
                            <?php if (!empty($dop_usluga_ikonka)) {
                                echo wp_get_attachment_image($dop_usluga_ikonka, 'full');
                            }

                            if (!empty($dop_usluga_tekst)) {
                                echo $dop_usluga_tekst;
                            } ?>
                        </div>
                    <?php }

                    if (!empty($s_icon)) { ?>
                        <div class="icon"><?php echo wp_get_attachment_image($s_icon, 'full'); ?></div>
                    <?php }

                    if (!empty($s_tekst) || !empty($s_czena)) { ?>
                        <div class="text-holder">
                            <?php if (!empty($s_tekst)) { ?>
                                <div class="text">
                                    <?php echo $s_tekst; ?>
                                </div>
                            <?php }

                            if (!empty($s_czena)) { ?>
                                <div class="price">
                                    <?php echo $s_czena; ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>