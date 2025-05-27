<?php

/**
 * template name: Contact Page
 */
get_header();
?>
<?php
get_template_part('sections/common/slider-top');
?>
<div class="home-cover-1 contact">
    <?php
    get_template_part('sections/contact/info');
    get_template_part('sections/home/form');
    get_template_part('sections/common/footer');
    ?>
</div>
<?php get_footer(); ?>