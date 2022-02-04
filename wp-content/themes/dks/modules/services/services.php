<?php
$services_list = get_sub_field('services_list');

if (!empty($services_list)) {
    wp_enqueue_style('services_styles', get_template_directory_uri() . '/static/css/modules/services/services.css', '', '', 'all'); ?>

    <section class="services">
        <svg width="974" height="2192" viewBox="0 0 974 2192" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-1" y="763.216" width="1007.79" height="2193.41" rx="4" transform="rotate(-49.3153 -1 763.216)" fill="#F8F8F8"/>
        </svg>

        <div class="container">
            <div class="items">
                <?php foreach ($services_list as $service_id) {
                    $title = get_the_title($service_id);
                    $ikonka = get_field('ikonka', $service_id);
                    $opisanie = get_field('opisanie', $service_id); ?>

                    <a class="item" href="<?php echo get_the_permalink($service_id); ?>">
                        <div class="border">
                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-6.99447e-07 -5.02266e-06L0 8.00073L8 -5.72205e-06L-6.99447e-07 -5.02266e-06Z" fill="#EFECEC"/>
                            </svg>
                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-6.99447e-07 -5.02266e-06L0 8.00073L8 -5.72205e-06L-6.99447e-07 -5.02266e-06Z" fill="#EFECEC"/>
                            </svg>
                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-6.99447e-07 -5.02266e-06L0 8.00073L8 -5.72205e-06L-6.99447e-07 -5.02266e-06Z" fill="#EFECEC"/>
                            </svg>
                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-6.99447e-07 -5.02266e-06L0 8.00073L8 -5.72205e-06L-6.99447e-07 -5.02266e-06Z" fill="#EFECEC"/>
                            </svg>

                            <?php if (!empty($ikonka)) { ?>
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($ikonka, 'full'); ?>
                                </div>
                            <?php } ?>
                            <h6>
                                <?php echo $title; ?>
                            </h6>
                            <?php if (!empty($opisanie)) { ?>
                                <div class="description">
                                    <?php echo $opisanie; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>