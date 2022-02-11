<?php
$s_title = get_sub_field('s_title');

if (!empty($s_title) || have_rows('istochniki')) {
    wp_enqueue_style('reviews_styles', get_template_directory_uri() . '/static/css/modules/reviews/reviews.css', '', '', 'all'); ?>

    <section class="reviews wow fadeIn">
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2>
                    <?php echo $s_title; ?>
                </h2>
            <?php }

            if (have_rows('istochniki')) { ?>
                <div class="sources">
                    <?php while (have_rows('istochniki')) {
                        the_row();

                        $logotip = get_sub_field('logotip'); // required
                        $nazvanie = get_sub_field('nazvanie'); // required
                        $ssylka = get_sub_field('ssylka'); // required ?>

                        <div class="source">
                            <div class="logo">
                                <?php echo wp_get_attachment_image($logotip, 'full'); ?>
                            </div>
                            <div class="name">
                                <?php echo $nazvanie; ?>
                            </div>
                            <a href="<?php echo $ssylka; ?>" target="_blank" class="button arrow"><?php _e('Перейти', THEME_NAME); ?>
                                <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.3536 4.35307C20.5488 4.1578 20.5488 3.84122 20.3536 3.64596L17.1716 0.463978C16.9763 0.268716 16.6597 0.268716 16.4645 0.463978C16.2692 0.65924 16.2692 0.975822 16.4645 1.17108L19.2929 3.99951L16.4645 6.82794C16.2692 7.0232 16.2692 7.33978 16.4645 7.53505C16.6597 7.73031 16.9763 7.73031 17.1716 7.53505L20.3536 4.35307ZM0 4.49951H20V3.49951H0V4.49951Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>