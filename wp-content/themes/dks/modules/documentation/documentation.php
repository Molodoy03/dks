<?php
$s_title = get_sub_field('s_title');
$s_image = get_sub_field('s_image');

if (have_rows('s_links') || !empty($s_image)) {
    wp_enqueue_style('documentation_styles', get_template_directory_uri() . '/static/css/modules/documentation/documentation.css', '', '', 'all'); ?>

    <section class="documentation">
        <div class="container">
            <?php if (!empty($s_image)) { ?>
                <div class="image">
                    <?php echo wp_get_attachment_image($s_image, 's_945_999'); ?>
                </div>
            <?php } ?>

            <div class="holder">
                <?php if (!empty($s_title)) { ?>
                    <h2><?php echo $s_title; ?></h2>
                <?php }

                if (have_rows('s_links')) { ?>
                    <div class="links">
                        <?php while (have_rows('s_links')) {
                            the_row();
                            $link = get_sub_field('link');

                            if (!empty($link)) { ?>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                    <?php echo $link['title']; ?>
                                </a>
                            <?php }
                        } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>