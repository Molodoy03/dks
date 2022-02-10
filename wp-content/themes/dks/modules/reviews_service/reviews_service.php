<?php
$s_title = get_sub_field('s_title');

if (!empty($s_title) || have_rows('otzyvy')) {
    wp_enqueue_style('reviews_service_styles', get_template_directory_uri() . '/static/css/modules/reviews_service/reviews_service.css', '', '', 'all'); ?>

    <section class="reviews-service">
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2>
                    <?php echo $s_title; ?>
                </h2>
            <?php }

            if (have_rows('otzyvy')) { ?>
                <div class="reviews-holder">
                    <?php while (have_rows('otzyvy')) {
                        the_row();
                        $nazvanie = get_sub_field('nazvanie');
                        $tekst = get_sub_field('tekst');
                        $imya = get_sub_field('imya');
                        $data = get_sub_field('data'); ?>

                        <div class="review">
                            <svg width="45" height="38" viewBox="0 0 45 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0.249878V37.7499L18.75 18.9999V0.249878H0Z" fill="#FF5718"/>
                                <path d="M26.25 0.249878V37.7499L45 18.9999V0.249878H26.25Z" fill="#FF5718"/>
                            </svg>


                            <?php if (!empty($nazvanie)) { ?>
                                <h6>
                                    <?php echo $nazvanie; ?>
                                </h6>
                            <?php }

                            if (!empty($tekst)) { ?>
                                <div class="text">
                                    <?php echo $tekst; ?>
                                </div>
                            <?php }

                            if (!empty($imya) || !empty($data)) { ?>
                                <div class="bottom-holder">
                                    <?php if (!empty($imya)) { ?>
                                        <span class="name"><?php echo $imya; ?></span>
                                    <?php }

                                    if (!empty($data)) { ?>
                                        <span class="date"><?php echo $data; ?></span>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>