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
    get_template_part('sections/home/image');
    get_template_part('sections/home/customers');
    get_template_part('sections/home/video');
    ?>
</div>
<div class="home-cover-2">
    <?php
    get_template_part('sections/home/form');
    get_template_part('sections/home/news');
    get_template_part('sections/common/footer');
    ?>
</div>
<?php get_footer(); ?>