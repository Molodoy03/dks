<?php wp_enqueue_style('vacancy-title_styles', get_template_directory_uri() . '/static/css/modules/vacancy-title/vacancy-title.css', '', '', 'all'); ?>

<section class="vacancy-title wow fadeIn">
    <svg width="396" height="870" viewBox="0 0 396 870" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="-472" y="396.522" width="592.389" height="640" rx="4" transform="rotate(-42.1481 -472 396.522)" fill="#F8F8F8"/>
    </svg>

    <div class="container">
        <div class="breadcrumbs">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo get_home_url(); ?>">
                        <span itemprop="name"><?php _e('Главная', THEME_NAME); ?></span></a>
                    <meta itemprop="position" content="1" />
                </li>
                /
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="current">
                    <span itemprop="name"><?php the_title(); ?></span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <div class="container narrow">
        <h1>
            <?php _e('Вакансии', THEME_NAME); ?>
        </h1>

        <?php if (!empty($args)) {
            if (!empty($args['v_text'])) {
                $v_text = $args['v_text']; ?>

                <div class="text">
                    <?php echo $v_text; ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>
