<?php
$s_title = get_sub_field('s_title');
$s_bg_photo = get_sub_field('s_bg_photo');
$s_text = get_sub_field('s_text');

if (!empty($s_title) || !empty($s_bg_photo) || !empty($s_text)) {
    wp_enqueue_style('current_price_styles', get_template_directory_uri() . '/static/css/modules/current_price/current_price.css', '', '', 'all');

    wp_enqueue_script('masked_input_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js', '', '', true);
    wp_enqueue_script('current_price_js', get_template_directory_uri() . '/static/js/modules/current_price/current_price.js', ['masked_input_js'], '', true); ?>

    <section class="current_price">
        <div class="container"
             <?php if (!empty($s_bg_photo)) { ?>style="background-image: url('<?php echo wp_get_attachment_image_url($s_bg_photo, 'full'); ?>')"<?php } ?>>
            <div class="main-holder">
                <?php if (!empty($s_title)) { ?>
                    <h4><?php echo $s_title; ?></h4>
                <?php }

                if (!empty($s_text)) { ?>
                    <div class="text"><?php echo $s_text; ?></div>
                <?php } ?>

                <div class="bottom-block">
                    <div class="text">
                        <h5><?php _e('Оставьте свой номер телефона', THEME_NAME); ?></h5>
                        <h6><?php _e('и наш менеджер перезвонит Вам и уточнит все детали.', THEME_NAME); ?></h6>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="378" title="Оставьте номер телефона"]'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>