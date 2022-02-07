<?php
/* Template name: Контакты */
get_header(); ?>

<main class="main">
    <?php
    get_template_part('modules/contacts_info/contacts_info', '', '');
    get_template_part('modules/contacts_addresses/contacts_addresses', '', ''); ?>
</main>

<?php get_footer(); ?>
