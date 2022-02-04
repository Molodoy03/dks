<?php
$s_title = get_sub_field('s_title');
$s_nomer_telefona = get_sub_field('s_nomer_telefona');
$s_tekst = get_sub_field('s_tekst');
$s_knopka = get_sub_field('s_knopka');

if (!empty($s_title) || !empty($s_nomer_telefona) || !empty($s_tekst) || have_rows('s_steps1') || have_rows('s_steps2')) {
    wp_enqueue_style('scheme_of_work_styles', get_template_directory_uri() . '/static/css/modules/scheme_of_work/scheme_of_work.css', '', '', 'all'); ?>

    <section class="scheme_of_work">
        <svg width="489" height="1065" viewBox="0 0 489 1065" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-573" y="485.463" width="724.93" height="783.193" rx="4" transform="rotate(-42.1481 -573 485.463)" fill="#F8F8F8"/>
        </svg>

        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2>
                    <?php echo $s_title; ?>
                </h2>
            <?php }

            if (!empty($s_nomer_telefona)) { ?>
                <div class="tel">
                    <span><?php _e('Вы звоните нам', THEME_NAME); ?></span>
                    <a href="tel:<?php echo $s_nomer_telefona; ?>"><?php echo $s_nomer_telefona; ?></a>
                </div>
            <?php }

            if (!empty($s_tekst)) { ?>
                <div class="text">
                    <?php echo $s_tekst; ?>
                </div>
            <?php }

            if (!empty($s_knopka)) { ?>
                <div class="btn-holder">
                    <button class="button"><?php echo $s_knopka; ?></button>
                </div>
            <?php }

            $s_ikonka1 = get_sub_field('s_ikonka1');
            $s_name1 = get_sub_field('s_name1');

            $s_ikonka2 = get_sub_field('s_ikonka2');
            $s_name2 = get_sub_field('s_name2');

            $s_steps1_size = count(get_sub_field('s_steps1'));
            $s_steps2_size = count(get_sub_field('s_steps2'));

            if (have_rows('s_steps1') || have_rows('s_steps2')) { ?>
                <div class="steps-holder">
                    <?php if (have_rows('s_steps1')) { ?>
                        <div class="block">
                            <div class="title">
                                <?php if (!empty($s_ikonka1)) { ?>
                                    <div class="icon">
                                        <?php echo wp_get_attachment_image($s_ikonka1, 's_55_55'); ?>
                                    </div>
                                <?php } ?>
                                <div class="right-block">
                                    <span><?php _e('Если вы хотите сдать', THEME_NAME); ?></span>
                                    <?php if (!empty($s_name1)) { ?>
                                        <h4><?php echo $s_name1; ?></h4>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="steps">
                                <?php
                                $i = 1;
                                while (have_rows('s_steps1')) {
                                    the_row();
                                    $text = get_sub_field('text'); ?>
                                    <div class="step">
                                        <?php if (!empty($s_steps1_size) && $i != $s_steps1_size) { ?>
                                            <span class="orange">
                                                <?php _e('ШАГ ', THEME_NAME);
                                                echo $i; ?>
                                            </span>
                                        <?php }

                                        if (!empty($s_steps1_size) && $i == $s_steps1_size) { ?>
                                            <span class="orange last">
                                                <?php _e('Готово!', THEME_NAME); ?>
                                            </span>
                                        <?php }

                                        if (!empty($text)) { ?>
                                            <div class="step-text">
                                                <?php echo $text; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <?php $i++;
                                } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (have_rows('s_steps2')) { ?>
                        <div class="block">
                            <div class="title">
                                <?php if (!empty($s_ikonka2)) { ?>
                                    <div class="icon">
                                        <?php echo wp_get_attachment_image($s_ikonka2, 's_55_55'); ?>
                                    </div>
                                <?php } ?>
                                <div class="right-block">
                                    <span><?php _e('Если вы хотите сдать', THEME_NAME); ?></span>
                                    <?php if (!empty($s_name2)) { ?>
                                        <h4><?php echo $s_name2; ?></h4>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="steps">
                                <?php
                                $i = 1;
                                while (have_rows('s_steps2')) {
                                    the_row();
                                    $text = get_sub_field('text'); ?>
                                    <div class="step">
                                        <?php if (!empty($s_steps2_size) && $i != $s_steps2_size) { ?>
                                            <span class="grey">
                                                <?php _e('ШАГ ', THEME_NAME);
                                                echo $i; ?>
                                            </span>
                                        <?php }

                                        if (!empty($s_steps2_size) && $i == $s_steps2_size) { ?>
                                            <span class="grey last">
                                                <?php _e('Готово!', THEME_NAME); ?>
                                            </span>
                                        <?php }

                                        if (!empty($text)) { ?>
                                            <div class="step-text">
                                                <?php echo $text; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <?php $i++;
                                } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>