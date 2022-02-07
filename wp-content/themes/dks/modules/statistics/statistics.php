<?php
$s_title = get_sub_field('s_title');

if (!empty($s_title) || have_rows('s_blocks')) {
        wp_enqueue_style('statistics_styles', get_template_directory_uri() . '/static/css/modules/statistics/statistics.css', '', '', 'all');

    wp_enqueue_script('waypoints_js', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', '', '', true);
    wp_enqueue_script('counterup_js', 'https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js', ['waypoints_js'], '', true);
    wp_enqueue_script('statistics_js', get_template_directory_uri() . '/static/js/modules/statistics/statistics.js', ['counterup_js'], '', true); ?>

    <section class="statistics">
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2>
                    <?php echo $s_title; ?>
                </h2>
            <?php }

            if (have_rows('s_blocks')) { ?>
                <div class="blocks">
                    <?php while (have_rows('s_blocks')) {
                        the_row();
                        $ikonka = get_sub_field('ikonka');
                        $name = get_sub_field('name');
                        $description = get_sub_field('description') ?>

                        <div class="block">
                            <?php if (!empty($ikonka)) { ?>
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($ikonka, 's_60_60'); ?>
                                </div>
                            <?php }
                            if (!empty($name)) { ?>
                                <h3><?php echo $name; ?></h3>
                            <?php }
                            if (!empty($description)) { ?>
                                <div class="description"><?php echo $description; ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>