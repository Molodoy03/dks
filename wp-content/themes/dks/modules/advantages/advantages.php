<?php
$s_title = get_sub_field('s_title');
$s_advantages_list = get_sub_field('s_advantages_list');

if (!empty($s_title) || !empty($s_advantages_list)) {
    wp_enqueue_style('advantages_styles', get_template_directory_uri() . '/static/css/modules/advantages/advantages.css', '', '', 'all'); ?>

    <section class="advantages">
        <svg width="945" height="694" viewBox="0 0 945 694" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M960 0H0L960 694V0Z" fill="#F8F8F8"/>
        </svg>
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2>
                    <?php echo $s_title; ?>
                </h2>
            <?php }

            if (!empty($s_advantages_list)) { ?>
                <div class="items">
                    <?php while (have_rows('s_advantages_list')) {
                        the_row();
                        $icon = get_sub_field('icon');
                        $name = get_sub_field('name');
                        $text = get_sub_field('text');
                        $hover_icon = get_sub_field('hover_icon');
                        $btn_text = get_sub_field('btn_text'); ?>

                        <div class="item <?php echo !empty($btn_text) || !empty($hover_icon) ? 'hover' : ''; ?>">
                            <?php if (!empty($hover_icon) || !empty($btn_text)) { ?>
                                <div class="hover">
                                    <?php if (!empty($hover_icon)) { ?>
                                        <div class="hover-icon">
                                            <?php echo wp_get_attachment_image($hover_icon, 'full'); ?>
                                        </div>
                                    <?php }
                                    if (!empty($name)) { ?>
                                        <h6><?php echo $name; ?></h6>
                                    <?php }
                                    if (!empty($btn_text)) { ?>
                                        <button class="button normal open_call_me_modal"><?php echo $btn_text; ?></button>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="border">
                                <?php if (!empty($icon)) { ?>
                                    <div class="icon">
                                        <?php echo wp_get_attachment_image($icon, 'full'); ?>
                                    </div>
                                <?php } ?>

                                <div class="holder">
                                    <?php if (!empty($name)) { ?>
                                        <h6><?php echo $name; ?></h6>
                                    <?php }
                                    if (!empty($text)) { ?>
                                        <div class="text"><?php echo $text; ?></div>
                                    <?php } ?>
                                </div>

                                <svg width="9" height="8" viewBox="0 0 9 8" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.16281 8L0.279999 8L8.16281 -9.54079e-08L8.16281 8Z" fill="#FF5718"/>
                                </svg>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>