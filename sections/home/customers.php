<section class="mc_customers mc-ovex-hid">
    <div class="mc-container">
        <div class="mc_customer_contain">
            <div class="sub-title" data-aos="fade-up" data-aos-duration="1200">
                <?php echo get_field("small_title_kh"); ?>
            </div>
            <div class="title" data-aos="fade-up" data-aos-duration="1400">
                <?php echo get_field("title_kh"); ?>
            </div>
            <div class="customer-cover">
                <div class="left">
                    <div class="left-slider mc-slider-cs-talk">
                        <?php
                        if (have_rows("list_cs_talk")):
                            while (have_rows("list_cs_talk")) : the_row();
                        ?>
                                <div class="item">
                                    <div class="avatar">
                                        <img src="<?php echo get_sub_field("avatar_cs_talk"); ?>" alt="<?php echo get_sub_field("img_mh_cs_talk"); ?>">
                                    </div>
                                    <div class="right-cus-talk">
                                        <div class="name-and-rating">
                                            <div class="name">
                                                <?php echo get_sub_field("name_cs_talk"); ?>
                                            </div>
                                            <div class="rating">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="Star">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="Star">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="Star">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="Star">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="Star">
                                            </div>
                                        </div>
                                        <div class="cs-talk">
                                            <?php echo get_sub_field("cs_talk_home"); ?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="right" data-aos="fade-left" data-aos-duration="1400">
                    <img src="<?php echo get_field("img_mh_cs_talk"); ?>" alt="Khách hàng nói gì">
                </div>
            </div>
        </div>
    </div>
</section>