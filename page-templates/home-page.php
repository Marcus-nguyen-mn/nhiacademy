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
    get_template_part('sections/home/intro');
    ?>
</div>
<?php get_footer(); ?>