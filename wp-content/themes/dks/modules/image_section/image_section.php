<?php
$s_image = get_sub_field('s_image');

if (!empty($s_image)) {
    wp_enqueue_style('image_section_styles', get_template_directory_uri() . '/static/css/modules/image_section/image_section.css', '', '', 'all'); ?>

    <section class="image_section">
        <div class="container">
            <?php echo wp_get_attachment_image($s_image, 'full'); ?>
        </div>
    </section>
<?php } ?>