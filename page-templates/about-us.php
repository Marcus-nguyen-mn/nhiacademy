<?php

/**
 * template name: About Us Page
 */
get_header();
?>
<?php
get_template_part('sections/common/slider-top');
?>
<div class="home-cover-1 abu-st-main">
    <?php
    get_template_part('sections/about-us/intro');
    get_template_part('sections/home/image');
    get_template_part('sections/home/form');
    get_template_part('sections/common/footer');
    ?>
</div>
<?php get_footer(); ?>