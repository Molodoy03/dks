<?php
$s_title = get_sub_field('s_title');
$s_raboty = get_sub_field('s_raboty');
$s_raboty_size = count($s_raboty);

if (have_rows('s_raboty')) {
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/static/css/slick.min.css', '', '', 'all');
    wp_enqueue_style('export_work_styles', get_template_directory_uri() . '/static/css/modules/export_work/export_work.css', '', '', 'all');

    wp_enqueue_script('slick-js', get_template_directory_uri() . '/static/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('export_work_js', get_template_directory_uri() . '/static/js/modules/export_work/export_work.js', array('slick-js'), '', true); ?>

    <section class="export_work">
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2 class="main"><?php echo $s_title; ?></h2>
            <?php } ?>

            <div class="works-slider">
                <?php
                $i = 1;
                while (have_rows('s_raboty')) {
                    the_row();
                    $title = get_sub_field('title');
                    $adres = get_sub_field('adres');
                    $content = get_sub_field('content');
                    $photo = get_sub_field('photo');
                    ?>
                    <div class="item">
                        <div class="left-block">
                            <?php if (!empty($s_title)) { ?>
                                <h2><?php echo $s_title; ?></h2>
                            <?php } ?>
                            <?php if (!empty($title)) { ?>
                                <h5><?php echo $title; ?></h5>
                            <?php }
                            if (!empty($adres)) { ?>
                                <div class="address">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M13.455 3.64503C15.9153 6.10534 15.9153 10.0943 13.455 12.5546L9.0002 17.0093L4.54542 12.5546C2.08512 10.0943 2.08512 6.10534 4.54542 3.64503C7.00573 1.18473 10.9947 1.18473 13.455 3.64503ZM9.0002 9.8998C9.99431 9.8998 10.8002 9.09392 10.8002 8.0998C10.8002 7.10569 9.99431 6.2998 9.0002 6.2998C8.00608 6.2998 7.2002 7.10569 7.2002 8.0998C7.2002 9.09392 8.00608 9.8998 9.0002 9.8998Z"
                                              fill="#FF5718"/>
                                    </svg>

                                    <?php echo $adres; ?>
                                </div>
                            <?php }
                            if (!empty($content)) { ?>
                                <div class="content"><?php echo $content; ?></div>
                            <?php } ?>

                            <div class="control-box">
                                <button class="prev">
                                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.646446 4.35355C0.451185 4.15829 0.451185 3.84171 0.646446 3.64645L3.82843 0.464466C4.02369 0.269204 4.34027 0.269204 4.53553 0.464466C4.7308 0.659728 4.7308 0.976311 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53553L0.646446 4.35355ZM21 4.5H1V3.5H21V4.5Z"
                                              fill="#838383"/>
                                    </svg>
                                    <?php _e('Назад', THEME_NAME); ?>
                                </button>
                                <div class="slide-number">
                                    <?php echo $i; ?>/<?php echo $s_raboty_size; ?>
                                </div>
                                <button class="next">
                                    <?php _e('Дальше', THEME_NAME); ?>
                                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z"
                                              fill="#FF5718"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <?php if (!empty($photo)) { ?>
                            <div class="photos">
                                <?php foreach ($photo as $item) { ?>
                                    <div class="photo">
                                        <?php echo wp_get_attachment_image($item, 's_408_999'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <div class="control-box">
                            <button class="prev">
                                <svg width="21" height="8" viewBox="0 0 21 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.646446 4.35355C0.451185 4.15829 0.451185 3.84171 0.646446 3.64645L3.82843 0.464466C4.02369 0.269204 4.34027 0.269204 4.53553 0.464466C4.7308 0.659728 4.7308 0.976311 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53553L0.646446 4.35355ZM21 4.5H1V3.5H21V4.5Z"
                                          fill="#838383"/>
                                </svg>
                                <?php _e('Назад', THEME_NAME); ?>
                            </button>
                            <div class="slide-number">
                                <?php echo $i; ?>/<?php echo $s_raboty_size; ?>
                            </div>
                            <button class="next">
                                <?php _e('Дальше', THEME_NAME); ?>
                                <svg width="21" height="8" viewBox="0 0 21 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z"
                                          fill="#FF5718"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <?php $i++;
                } ?>
            </div>
        </div>
    </section>
<?php } ?>