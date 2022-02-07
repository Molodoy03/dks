<?php
/* Template name: Вакансии */
get_header(); ?>

    <main class="main">
        <?php
        $v_text = get_field('v_text');
        get_template_part('modules/vacancy-title/vacancy-title', '', array('v_text' => $v_text));

        if (have_rows('v_vakansii')) {
            get_template_part('modules/vacancies_list/vacancies_list', '', '');
        } ?>
    </main>

<?php get_footer(); ?>