<?php
$s_heading = get_sub_field('s_heading');
$s_image = get_sub_field('s_image');

if (!empty($s_heading) || have_rows('s_clients')) {
    wp_enqueue_style('our_clients_styles', get_template_directory_uri() . '/static/css/modules/our_clients/our_clients.css', '', '', 'all'); ?>

    <section class="our_clients">
        <div class="container">
            <?php if (!empty($s_heading)) { ?>
                <h2>
                    <?php echo $s_heading; ?>
                </h2>
            <?php }

            if (have_rows('s_clients')) { ?>
                <div class="clients">
                    <?php
                    $i = 1;
                    while (have_rows('s_clients')) {
                        the_row();
                        $icon = get_sub_field('icon');
                        $name = get_sub_field('name');
                        $description = get_sub_field('description'); ?>

                        <div class="client">
                            <?php if (!empty($icon)) { ?>
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($icon, 's_60_60'); ?>
                                </div>
                            <?php } ?>

                            <?php if ($i == 1 && !empty($name)) { ?>
                                <h6><?php echo $name; ?></h6>
                            <?php } ?>

                            <div class="info-holder">
                                <?php if (!empty($name)) { ?>
                                    <h6><?php echo $name; ?></h6>
                                <?php }

                                if (!empty($description)) { ?>
                                    <div class="description">
                                        <?php echo $description; ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php $i++; ?>

                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 8.00074L8 -1.39876e-06L1.39889e-06 8.00074L8 8.00074Z" fill="#EFECEC"/>
                            </svg>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

        <?php if (!empty($s_image)) { ?>
            <div class="image">
                <?php echo wp_get_attachment_image($s_image, 'full'); ?>
            </div>
        <?php } ?>
    </section>
<?php } ?>