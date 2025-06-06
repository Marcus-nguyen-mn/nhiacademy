<section class="mc-service-home mc-ovex-hid">
    <div class="mc-container">
        <div class="mc-service-home-cover">
            <div class="title" data-aos="fade-up" data-aos-duration="1000">
                <?php echo get_field("title_service_home"); ?>
            </div>
            <div class="sub-title" data-aos="fade-up" data-aos-duration="1200">
                <?php echo get_field("title_service_home_small"); ?>
            </div>
            <div class="contain">
                <div class="kol" data-aos="fade-up" data-aos-duration="1200">
                    <img src="<?php echo get_field("kol_service_home"); ?>" alt="KOL">
                </div>
                <?php
                $services = get_field('list_services_home');
                if ($services) {
                    $first_post = $services[0];
                ?>
                    <a href="<?php the_permalink($first_post->ID); ?>" class="item-service item-service-1" data-aos="fade-right" data-aos-duration="1500">
                        <div class="thumb">
                            <img src="<?php echo get_the_post_thumbnail_url($first_post->ID) ?>" alt="Thumb">
                        </div>
                        <div class="name-service">
                            <?php
                            echo get_the_title($first_post->ID);
                            ?>
                        </div>
                    </a>
                    <?php
                    if ($services[1]) {
                        $sec_post = $services[1];
                    ?>
                        <a href="<?php the_permalink($sec_post->ID); ?>" class="item-service item-service-2" data-aos="fade-left" data-aos-duration="1500">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url($sec_post->ID) ?>" alt="Thumb">
                            </div>
                            <div class="name-service">
                                <?php
                                echo get_the_title($sec_post->ID);
                                ?>
                            </div>
                        </a>
                    <?php } ?>
                    <?php
                    if ($services[2]) {
                        $three_post = $services[2];
                    ?>
                        <a href="<?php the_permalink($three_post->ID); ?>" class="item-service item-service-3" data-aos="fade-right" data-aos-duration="1800">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url($three_post->ID) ?>" alt="Thumb">
                            </div>
                            <div class="name-service">
                                <?php
                                echo get_the_title($three_post->ID);
                                ?>
                            </div>
                        </a>
                    <?php } ?>
                    <?php
                    if ($services[3]) {
                        $four_post = $services[3];
                    ?>
                        <a href="<?php the_permalink($four_post->ID); ?>" class="item-service item-service-4" data-aos="fade-left" data-aos-duration="1800">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url($four_post->ID) ?>" alt="Thumb">
                            </div>
                            <div class="name-service">
                                <?php
                                echo get_the_title($four_post->ID);
                                ?>
                            </div>
                        </a>
                    <?php } ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>