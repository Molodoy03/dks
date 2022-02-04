<?php
$s_title = get_sub_field('s_title');
$s_photo = get_sub_field('s_photo');

if (!empty($s_title) || have_rows('s_list')) {
    wp_enqueue_style('hero_section_home_page_styles', get_template_directory_uri() . '/static/css/modules/hero_section_home_page/hero_section_home_page.css', '', '', 'all'); ?>

    <section class="hero_section_home_page">
        <svg width="396" height="870" viewBox="0 0 396 870" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-472" y="396.522" width="592.389" height="640" rx="4" transform="rotate(-42.1481 -472 396.522)"
                  fill="#F8F8F8"/>
        </svg>
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h1><?php echo $s_title; ?></h1>
            <?php } ?>

            <?php if (have_rows('s_list')) { ?>
                <div class="list">
                    <?php while (have_rows('s_list')) {
                        the_row();
                        $icon = get_sub_field('icon');
                        $text = get_sub_field('text');

                        if (!empty($icon) && !empty($text)) { ?>
                            <div class="item">
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($icon, 'full'); ?>
                                </div>
                                <?php echo $text; ?>
                            </div>
                        <?php }
                    } ?>
                </div>
            <?php } ?>
        </div>

        <?php if (!empty($s_photo)) {
            echo wp_get_attachment_image($s_photo, 'full');
        } ?>
    </section>
<?php } ?>