<?php
$s_title = get_sub_field('s_title');
$s_tekst = get_sub_field('s_tekst');
$s_tekst2 = get_sub_field('s_tekst2');
$s_photo = get_sub_field('s_photo');

if (!empty($s_title) || !empty($s_tekst) || !empty($s_tekst2) || !empty($s_photo)) {
    wp_enqueue_style('about_us_styles', get_template_directory_uri() . '/static/css/modules/about_us/about_us.css', '', '', 'all'); ?>

    <section class="about_us">
        <svg class="black-svg" width="986" height="713" viewBox="0 0 986 713" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-0.000305176 0H986.282V713H986.282L-0.000305176 0Z" fill="#282525"/>
        </svg>

        <svg class="rectangle" width="396" height="870" viewBox="0 0 396 870" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-472" y="396.522" width="592.389" height="640" rx="4" transform="rotate(-42.1481 -472 396.522)" fill="#F8F8F8"/>
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

            <?php if (!empty($s_title)) { ?>
                <h1><?php echo $s_title; ?></h1>
            <?php } ?>

            <div class="holder">
                <div class="left-block">
                    <?php if (!empty($s_tekst)) { ?>
                        <div class="orange-text"><?php echo $s_tekst; ?></div>
                    <?php }

                    if (!empty($s_tekst2)) { ?>
                        <div class="text"><?php echo $s_tekst2; ?></div>
                    <?php } ?>
                </div>

                <?php if (!empty($s_photo)) { ?>
                    <div class="image">
                        <?php echo wp_get_attachment_image($s_photo, 's_845_999'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>