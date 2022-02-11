<?php
if (have_rows('punkty_priema')) {
    wp_enqueue_style('contacts_addresses_styles', get_template_directory_uri() . '/static/css/modules/contacts_addresses/contacts_addresses.css', '', '', 'all');

    wp_enqueue_script('contacts_addresses_js', get_template_directory_uri() . '/static/js/modules/contacts_addresses/contacts_addresses.js', '', '', true); ?>

    <section class="contacts_addresses wow fadeIn">
        <svg width="666" height="2192" viewBox="0 0 666 2192" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-1" y="763.216" width="1007.79" height="2193.41" rx="4" transform="rotate(-49.3153 -1 763.216)" fill="#F8F8F8"/>
        </svg>

        <div class="container narrow">
            <?php while (have_rows('punkty_priema')) {
                the_row();

                $nazvanie = get_sub_field('nazvanie');
                $rezhim_raboty = get_sub_field('rezhim_raboty');
                $email = get_sub_field('email');
                $kak_proehat = get_sub_field('kak_proehat');
                $foto = get_sub_field('foto');
                $karta = get_sub_field('karta'); ?>

                <div class="block">
                    <div class="left-block">
                        <h5>
                            <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.05991 2.86008C6.34032 -0.42032 11.6589 -0.420321 14.9393 2.86008C18.2197 6.14049 18.2197 11.4591 14.9393 14.7395L8.99961 20.6792L3.05991 14.7395C-0.220492 11.4591 -0.220492 6.14049 3.05991 2.86008ZM8.99961 11.1998C10.3251 11.1998 11.3996 10.1253 11.3996 8.79978C11.3996 7.4743 10.3251 6.39978 8.99961 6.39978C7.67413 6.39978 6.59961 7.4743 6.59961 8.79978C6.59961 10.1253 7.67413 11.1998 8.99961 11.1998Z"
                                      fill="#FF5718"/>
                            </svg>
                            <?php echo $nazvanie; ?>
                        </h5>

                        <button>
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M5.4128 5.16281C5.185 5.39061 4.81565 5.39061 4.58785 5.16281L1.08785 1.6628C0.86004 1.435 0.860041 1.06565 1.08785 0.837847C1.31565 0.610041 1.685 0.610041 1.9128 0.837847L5.00033 3.92537L8.08785 0.837848C8.31565 0.610043 8.685 0.610043 8.91281 0.837849C9.14061 1.06565 9.14061 1.435 8.9128 1.66281L5.4128 5.16281Z"
                                      fill="#838383"/>
                            </svg>
                        </button>

                        <?php if (have_rows('nomera_telefonov')) { ?>
                            <div class="phones">
                                <span><?php _e('Звоните нам:', THEME_NAME); ?></span>

                                <div class="list">
                                    <?php while (have_rows('nomera_telefonov')) {
                                        the_row();
                                        $telefon = get_sub_field('telefon');
                                        if (!empty($telefon)) { ?>
                                            <a href="tel:<?php echo $telefon; ?>"><?php echo $telefon; ?></a>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                        <?php }

                        if (!empty($rezhim_raboty)) { ?>
                            <div class="list-item">
                                <span><?php _e('Режим работы:', THEME_NAME); ?></span>
                                <?php echo $rezhim_raboty; ?>
                            </div>
                        <?php }

                        if (!empty($email)) { ?>
                            <div class="list-item">
                                <span><?php _e('E-mail:', THEME_NAME); ?></span>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </div>
                        <?php }

                        if (!empty($kak_proehat)) { ?>
                            <div class="list-item">
                                <span><?php _e('Как проехать:', THEME_NAME); ?></span>
                                <?php echo $kak_proehat; ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="right-block">
                        <?php if (have_rows('nomera_telefonov')) { ?>
                            <div class="phones">
                                <span><?php _e('Звоните нам:', THEME_NAME); ?></span>

                                <div class="list">
                                    <?php while (have_rows('nomera_telefonov')) {
                                        the_row();
                                        $telefon = get_sub_field('telefon');
                                        if (!empty($telefon)) { ?>
                                            <a href="tel:<?php echo $telefon; ?>"><?php echo $telefon; ?></a>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                        <?php }

                        if (!empty($rezhim_raboty)) { ?>
                            <div class="list-item">
                                <span><?php _e('Режим работы:', THEME_NAME); ?></span>
                                <?php echo $rezhim_raboty; ?>
                            </div>
                        <?php }

                        if (!empty($email)) { ?>
                            <div class="list-item">
                                <span><?php _e('E-mail:', THEME_NAME); ?></span>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </div>
                        <?php }

                        if (!empty($kak_proehat)) { ?>
                            <div class="list-item">
                                <span><?php _e('Как проехать:', THEME_NAME); ?></span>
                                <?php echo $kak_proehat; ?>
                            </div>
                        <?php } ?>

                        <?php if (!empty($foto)) { ?>
                            <div class="photos">
                                <?php foreach ($foto as $item) {
                                    echo wp_get_attachment_image($item, 's_115_110');
                                } ?>
                            </div>
                        <?php }

                        if (!empty($karta)) { ?>
                            <div class="map">
                                <?php echo $karta; ?>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>