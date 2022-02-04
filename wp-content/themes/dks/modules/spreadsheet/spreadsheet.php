<?php
$s_heading = get_sub_field('s_heading');

if (!empty($s_heading) || have_rows('s_spreadsheets')) {
    wp_enqueue_style('spreadsheet_styles', get_template_directory_uri() . '/static/css/modules/spreadsheet/spreadsheet.css', '', '', 'all'); ?>

    <section class="spreadsheet">
        <div class="container">
            <?php if (!empty($s_heading)) { ?>
                <h2>
                    <?php echo $s_heading; ?>
                </h2>
            <?php }

            if (have_rows('s_spreadsheets')) { ?>
                <div class="spreadsheets">
                    <?php while (have_rows('s_spreadsheets')) {
                        the_row();
                        $spreedsheet = get_sub_field('spreedsheet');

                        if (!empty($spreedsheet)) { ?>
                            <div class="spreadsheet">
                                <?php if (have_rows('cols', $spreedsheet)) { ?>
                                    <div class="cols">
                                        <?php while (have_rows('cols', $spreedsheet)) {
                                            the_row();
                                            $col = get_sub_field('col', $spreedsheet);
                                            if (!empty($col)) { ?>
                                                <div class="col">
                                                    <?php echo $col; ?>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                <?php }

                                if (have_rows('rows', $spreedsheet)) { ?>
                                    <div class="rows-holder">
                                        <?php while (have_rows('rows', $spreedsheet)) {
                                            the_row(); ?>
                                            <div class="row">
                                                <?php if (have_rows('elements')) {
                                                    while (have_rows('elements')) {
                                                        the_row();
                                                        $dobavit_kartinku = get_sub_field('dobavit_kartinku');
                                                        $kartinka = get_sub_field('kartinka');
                                                        $row = get_sub_field('row');

                                                        if (!empty($row)) { ?>
                                                            <div class="element">
                                                                <?php if ($dobavit_kartinku && !empty($kartinka)) { ?>
                                                                    <div class="icon">
                                                                        <?php echo wp_get_attachment_image($kartinka, 's_70_70'); ?>
                                                                    </div>
                                                                <?php } ?>
                                                                <div class="text">
                                                                    <?php echo $row; ?>
                                                                </div>
                                                            </div>
                                                        <?php }
                                                    }
                                                } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php }
                    } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>