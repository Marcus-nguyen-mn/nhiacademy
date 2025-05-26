<section class="mc_slider_banner">
    <div class="slider-banner-top">
        <?php
        if (have_rows("list_banner", "option")):
            while (have_rows("list_banner", "option")) : the_row();
        ?>
                <div class="item">
                    <img src="<?php echo get_sub_field("banner_top_item", "option"); ?>" class="banner-desktop" alt="Banner" />
                    <img src="<?php echo get_sub_field("banner_top_item_mobile", "option"); ?>" class="banner-mobile" alt="Banner Mobile" />
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>