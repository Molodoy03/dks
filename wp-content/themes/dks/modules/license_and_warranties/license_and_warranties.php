<?php
$s_icon_1 = get_sub_field('s_icon_1');
$s_icon_2 = get_sub_field('s_icon_2');
$s_text_1 = get_sub_field('s_text_1');
$s_text_2_1 = get_sub_field('s_text_2_1');
$s_text_2_2 = get_sub_field('s_text_2_2');
$s_email = get_sub_field('s_email');

if (!empty($s_text_1) || !empty($s_text_2_1) || !empty($s_text_2_2) || have_rows('s_licenses')) {
    wp_enqueue_style('fancybox_styles', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', '', '', 'all');
    wp_enqueue_style('license_and_warranties_styles', get_template_directory_uri() . '/static/css/modules/license_and_warranties/license_and_warranties.css', '', '', 'all');

    wp_enqueue_script('fancybox_js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', '', '', true); ?>

    <section class="license_and_warranties wow fadeIn">
        <svg width="987" height="713" viewBox="0 0 987 713" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-6.10352e-05 0H986.282L-6.10352e-05 713V0Z"
                  fill="#FF5718"/>
        </svg>

        <div class="container">
            <div class="cols">
                <?php if (!empty($s_text_1) || have_rows('s_licenses')) { ?>
                    <div class="col license">
                        <h2>
                            <?php if (!empty($s_icon_1)) {
                                echo wp_get_attachment_image($s_icon_1, 's_60_60');
                            } ?>
                            <?php _e('Лицензия', THEME_NAME); ?>
                        </h2>

                        <?php if (!empty($s_text_1)) { ?>
                            <div class="text">
                                <?php echo $s_text_1; ?>
                            </div>
                        <?php }

                        if (have_rows('s_licenses')) { ?>
                            <div class="licenses">
                                <?php while (have_rows('s_licenses')) {
                                    the_row();
                                    $license = get_sub_field('license');

                                    if (!empty($license)) { ?>
                                        <div class="license" data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url($license, 'full'); ?>">
                                            <?php echo wp_get_attachment_image($license, 'full'); ?>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }

                if (!empty($s_text_2_1) || !empty($s_text_2_2) || !empty($s_email)) { ?>
                    <div class="col warranty">
                        <h2>
                            <?php if (!empty($s_icon_2)) {
                                echo wp_get_attachment_image($s_icon_2, 's_60_60');
                            } ?>
                            <?php _e('гарантии', THEME_NAME); ?>
                        </h2>

                        <?php if (!empty($s_text_2_1)) { ?>
                            <h6><?php echo $s_text_2_1; ?></h6>
                        <?php }

                        if (!empty($s_text_2_2)) { ?>
                            <h6>
                                <?php echo $s_text_2_2; ?>
                            </h6>
                        <?php }

                        if (!empty($s_email)) { ?>
                            <div class="bottom-block">
                                <div class="text-block">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_46_1293)">
                                            <path d="M27.0312 24.9219C26.5998 24.9219 26.2499 25.2716 26.2499 25.7031V31.0938C26.2499 33.2477 24.4976 35 22.3437 35H13.9087C13.4774 35 13.1278 35.3495 13.1274 35.7807L13.1263 37.334L11.2617 35.4694C11.141 35.1923 10.8647 35 10.5452 35H5.46869C3.31478 35 1.56244 33.2477 1.56244 31.0938V19.0625C1.56244 16.9086 3.31478 15.1562 5.46869 15.1562H13.3593C13.7907 15.1562 14.1406 14.8065 14.1406 14.375C14.1406 13.9435 13.7907 13.5938 13.3593 13.5938H5.46869C2.45322 13.5938 -6.10352e-05 16.047 -6.10352e-05 19.0625V31.0938C-6.10352e-05 34.1092 2.45322 36.5625 5.46869 36.5625H10.1451L13.3538 39.7712C13.5032 39.9206 13.703 40 13.9063 40C14.0069 40 14.1084 39.9805 14.2049 39.9406C14.4968 39.8198 14.6872 39.5352 14.6874 39.2193L14.6893 36.5625H22.3437C25.3592 36.5625 27.8124 34.1092 27.8124 31.0938V25.7031C27.8124 25.2716 27.4626 24.9219 27.0312 24.9219Z"
                                                  fill="white"/>
                                            <path d="M28.6449 0H26.6676C20.4063 0 15.3124 5.09391 15.3124 11.3552C15.3124 17.6164 20.4063 22.7102 26.6675 22.7102H28.6448C29.622 22.7102 30.5893 22.5861 31.5268 22.3408L34.4477 25.26C34.5971 25.4093 34.7968 25.4887 35.0001 25.4887C35.1008 25.4887 35.2024 25.4692 35.299 25.4291C35.5909 25.3082 35.7812 25.0234 35.7812 24.7074V20.1874C37.0178 19.1859 38.0451 17.9209 38.766 16.5076C39.5849 14.9024 39.9999 13.1689 39.9999 11.3552C39.9999 5.09391 34.906 0 28.6449 0ZM34.5299 19.1824C34.334 19.33 34.2187 19.5611 34.2187 19.8065V22.8221L32.3069 20.9113C32.1581 20.7627 31.9586 20.6827 31.7545 20.6827C31.678 20.6827 31.6006 20.694 31.5252 20.7172C30.5953 21.003 29.6262 21.1478 28.6449 21.1478H26.6676C21.2678 21.1478 16.8749 16.7548 16.8749 11.3552C16.8749 5.95547 21.2679 1.5625 26.6676 1.5625H28.6449C34.0445 1.5625 38.4374 5.95547 38.4374 11.3552C38.4374 14.4591 37.0132 17.3121 34.5299 19.1824Z"
                                                  fill="white"/>
                                            <path d="M31.1744 8.54846C31.0616 6.91292 29.7432 5.59448 28.1076 5.48175C27.1804 5.41807 26.2955 5.73081 25.6183 6.36307C24.9503 6.98659 24.5673 7.868 24.5673 8.78135C24.5673 9.21284 24.9171 9.5626 25.3485 9.5626C25.7799 9.5626 26.1298 9.21284 26.1298 8.78135C26.1298 8.29237 26.3268 7.83917 26.6844 7.50534C27.0418 7.17182 27.5088 7.00675 28.0002 7.04065C28.8618 7.10003 29.5562 7.79448 29.6156 8.65596C29.6756 9.52604 29.1048 10.2949 28.2584 10.4843C27.5726 10.6378 27.0937 11.2337 27.0937 11.9335V13.8104C27.0937 14.2419 27.4435 14.5917 27.8749 14.5917C28.3064 14.5917 28.6562 14.2419 28.6561 13.8104V11.9959C30.2303 11.6156 31.2865 10.1751 31.1744 8.54846Z"
                                                  fill="white"/>
                                            <path d="M28.4273 16.348C28.282 16.2027 28.0804 16.1191 27.8749 16.1191C27.6695 16.1191 27.4679 16.2027 27.3226 16.348C27.1773 16.4934 27.0937 16.6949 27.0937 16.9004C27.0937 17.1066 27.1774 17.3082 27.3226 17.4535C27.4679 17.5988 27.6695 17.6816 27.8749 17.6816C28.0804 17.6816 28.282 17.5988 28.4273 17.4535C28.5726 17.3074 28.6562 17.1066 28.6562 16.9004C28.6562 16.6949 28.5725 16.4934 28.4273 16.348Z"
                                                  fill="white"/>
                                            <path d="M21.4843 24.2188H4.99994C4.56853 24.2188 4.21869 24.5685 4.21869 25C4.21869 25.4315 4.56853 25.7812 4.99994 25.7812H21.4843C21.9158 25.7812 22.2656 25.4315 22.2656 25C22.2656 24.5685 21.9157 24.2188 21.4843 24.2188Z"
                                                  fill="white"/>
                                            <path d="M22.0366 28.8227C21.8913 28.6773 21.6898 28.5938 21.4843 28.5938C21.2788 28.5938 21.0773 28.6773 20.932 28.8227C20.7866 28.968 20.7031 29.1695 20.7031 29.375C20.7031 29.5805 20.7867 29.782 20.932 29.9273C21.0773 30.0727 21.2788 30.1562 21.4843 30.1562C21.6898 30.1562 21.8913 30.0727 22.0366 29.9273C22.182 29.782 22.2656 29.5813 22.2656 29.375C22.2656 29.1695 22.1819 28.968 22.0366 28.8227Z"
                                                  fill="white"/>
                                            <path d="M18.4114 28.5938H4.99994C4.56853 28.5938 4.21869 28.9435 4.21869 29.375C4.21869 29.8065 4.56853 30.1562 4.99994 30.1562H18.4114C18.8429 30.1562 19.1927 29.8065 19.1927 29.375C19.1927 28.9435 18.8428 28.5938 18.4114 28.5938Z"
                                                  fill="white"/>
                                            <path d="M16.4062 19.8438H4.99994C4.56853 19.8438 4.21869 20.1935 4.21869 20.625C4.21869 21.0565 4.56853 21.4062 4.99994 21.4062H16.4062C16.8377 21.4062 17.1874 21.0565 17.1874 20.625C17.1874 20.1935 16.8376 19.8438 16.4062 19.8438Z"
                                                  fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_46_1293">
                                                <rect width="40" height="40" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <div>
                                        <div class="text white">
                                            <?php _e('Если вас не устроило качество обслуживания —', THEME_NAME); ?>
                                        </div>

                                        <div class="text gray">
                                            <?php _e('пожалуйста, напишите нам на почту и мы обязательно разберемся.', THEME_NAME); ?>
                                        </div>
                                    </div>
                                </div>

                                <a href="mailto:<?php echo $s_email; ?>"><?php echo $s_email; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>