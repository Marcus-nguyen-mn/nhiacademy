<?php

/**
 * template name: Home Page
 */
get_header();
?>
<?php
get_template_part('sections/common/slider-top');
?>
<div class="home-cover-1">
    <?php
    get_template_part('sections/home/service');
    ?>
</div>
<?php get_footer(); ?>