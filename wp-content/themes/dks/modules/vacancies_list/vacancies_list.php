<?php wp_enqueue_style('vacancies_list_styles', get_template_directory_uri() . '/static/css/modules/vacancies_list/vacancies_list.css', '', '', 'all'); ?>

<section class="vacancies_list">
    <svg width="666" height="2192" viewBox="0 0 666 2192" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="-1" y="763.216" width="1007.79" height="2193.41" rx="4" transform="rotate(-49.3153 -1 763.216)" fill="#F8F8F8"/>
    </svg>
    <div class="container narrow">
        <div class="list">
            <?php while (have_rows('v_vakansii')) {
                the_row(); ?>

                <div class="list-item">
                    <?php $nazvanie_otdela = get_sub_field('nazvanie_otdela');

                    if (!empty($nazvanie_otdela)) { ?>
                        <h4><?php echo $nazvanie_otdela; ?></h4>
                    <?php }

                    if (have_rows('spisok_vakansij')) { ?>
                        <div class="vacancies">
                            <?php while (have_rows('spisok_vakansij')) {
                                the_row();
                                $nazvanie_dolzhnosti = get_sub_field('nazvanie_dolzhnosti');
                                $trebovaniya = get_sub_field('trebovaniya');
                                $vozrast = get_sub_field('vozrast');
                                $tekst = get_sub_field('tekst'); ?>

                                <div class="vacancy">
                                    <div class="holder">
                                        <?php if (!empty($nazvanie_dolzhnosti)) { ?>
                                            <h6><?php echo $nazvanie_dolzhnosti; ?></h6>
                                        <?php }
                                        if (!empty($trebovaniya)) { ?>
                                            <div class="requirements">
                                                <span>
                                                    <?php _e('Требования:', THEME_NAME); ?>
                                                </span>
                                                <?php echo $trebovaniya; ?></div>
                                        <?php }
                                        if (!empty($vozrast)) { ?>
                                            <div class="age">
                                                 <span>
                                                    <?php _e('Возраст:', THEME_NAME); ?>
                                                </span>
                                                <?php echo $vozrast; ?>
                                            </div>
                                        <?php }
                                        if (!empty($tekst)) { ?>
                                            <div class="text"><?php echo $tekst; ?></div>
                                        <?php } ?>

                                        <div class="bottom-block">
                                            <button>
                                                <?php _e('Отправить резюме', THEME_NAME); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
