<?php
$s_title = get_sub_field('s_title');
$s_shortkod = get_sub_field('s_shortkod');

if (!empty($s_title) && !empty($s_shortkod)) {
    wp_enqueue_style('nouislider_styles', 'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css', '', '', 'all');
    wp_enqueue_style('calc_section_styles', get_template_directory_uri() . '/static/css/modules/calc_section/calc_section.css', ['nouislider_styles'], '', 'all');

    wp_enqueue_script('masked_input_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js', '', '', true);
    wp_enqueue_script('wnumb_js', 'https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js', '', '', true);
    wp_enqueue_script('nouislider_js', 'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js', '', '', true);
    wp_enqueue_script('calc_section_js', get_template_directory_uri() . '/static/js/modules/calc_section/calc_section.js', ['wnumb_js', 'masked_input_js', 'nouislider_js'], '', true); ?>

    <section class="calc_section">
        <svg width="979" height="713" viewBox="0 0 979 713" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-8.00018 0H978.282L-8.00018 713V0Z" fill="#FF5718"/>
        </svg>

        <div class="container">
            <h2><?php echo $s_title; ?></h2>

            <div class="calc-holder">
                <?php echo do_shortcode($s_shortkod); ?>
            </div>
        </div>
    </section>
<?php } ?>