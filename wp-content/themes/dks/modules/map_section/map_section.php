<?php
$s_title = get_sub_field('s_title');
$s_subtitle = get_sub_field('s_subtitle');
$t_punkty_priema_metalloloma = get_field('t_punkty_priema_metalloloma', 'option');
$t_karta = get_field('t_karta', 'option');

if (!empty($s_title) || !empty($s_subtitle) || !empty($t_punkty_priema_metalloloma) || !empty($t_karta)) {
    wp_enqueue_style('map_section_styles', get_template_directory_uri() . '/static/css/modules/map_section/map_section.css', '', '', 'all'); ?>

    <section class="map_section">
        <svg width="987" height="713" viewBox="0 0 987 713" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H986.282L0 713V0Z" fill="#FF5718"/>
        </svg>
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2>
                    <?php echo $s_title; ?>
                </h2>
            <?php }
            if (!empty($s_subtitle)) { ?>
                <h3>
                    <?php echo $s_subtitle; ?>
                </h3>
            <?php }

            if (!empty($t_punkty_priema_metalloloma) || !empty($t_karta)) { ?>
                <div class="holder">
                    <?php if (!empty($t_punkty_priema_metalloloma)) { ?>
                        <div class="punkts">
                            <?php while (have_rows('t_punkty_priema_metalloloma', 'option')) {
                                the_row();
                                $nazvanie = get_sub_field('nazvanie');

                                if (!empty($nazvanie)) { ?>
                                    <div class="name"><?php echo $nazvanie; ?></div>
                                <?php }
                            } ?>
                        </div>
                    <?php }

                    if (!empty($t_karta)) { ?>
                        <div class="map">
                            <?php echo $t_karta; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>