<?php

/**
 * This file contains one loop to load the components into the template.
 */
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        $fileName = sprintf('%s/flex-content/blocks/%s.php',  get_template_directory(), get_row_layout());
        
        if (file_exists($fileName)) : ?>
        <h1>Stop for now</h1>
            <?php // get_template_part(sprintf('flex-content/blocks/%s', get_row_layout())); ?>
        <?php else :
            get_template_part('404', null);
        endif;
        $no_spacing = false;
    endwhile;
endif;