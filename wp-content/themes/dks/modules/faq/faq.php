<?php
$s_title = get_sub_field('s_title');
$t_faq_kartinka = get_field('t_faq_kartinka', 'option');

if (have_rows('t_faq_blocks', 'option')) {
    wp_enqueue_style('faq_styles', get_template_directory_uri() . '/static/css/modules/faq/faq.css', '', '', 'all'); ?>

    <section class="faq" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <?php if (!empty($s_title)) { ?>
                <h2>
                    <?php echo $s_title; ?>
                </h2>
            <?php } ?>

            <div class="faq-list">
                <?php
                $i = 1;
                while (have_rows('t_faq_blocks', 'option')) {
                    the_row();
                    $vopros = get_sub_field('vopros');
                    $otvet = get_sub_field('otvet'); ?>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="list-item">
                        <h6 itemprop="name">
                            <span>
                                <?php if ($i > 9) {
                                    echo $i;
                                } else {
                                    echo '0' . $i;
                                } ?>.
                            </span>
                            <?php echo $vopros; ?></h6>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="answer">
                            <div itemprop="text">
                                <?php echo $otvet; ?>
                            </div>
                        </div>
                    </div>
                    <?php $i++;
                } ?>
            </div>

            <?php if (!empty($t_faq_kartinka)) { ?>
                <div class="image">
                    <?php echo wp_get_attachment_image($t_faq_kartinka, 'full'); ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>