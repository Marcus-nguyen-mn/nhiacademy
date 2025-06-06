<section class="mc_images mc-ovex-hid">
    <div class="mc_images_contain">
        <div class="sub-title" data-aos="fade-up" data-aos-duration="1200">
            <?php echo get_field("sub_title_hatt"); ?>
        </div>
        <div class="title" data-aos="fade-up" data-aos-duration="1400">
            <?php echo get_field("title_hatt"); ?>
        </div>
        <div class="list-images">
            <?php
            if (have_rows("list_img_hatt")):
                while (have_rows("list_img_hatt")) : the_row();
            ?>
                    <div class="item">
                        <img src="<?php echo get_sub_field("img_item_hatt"); ?>" alt="Hình ảnh thực tế" />
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <div class="bg-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-image.webp" alt="Background" />
    </div>
</section>