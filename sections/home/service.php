<section class="mc-service-home">
    <div class="mc-container">
        <div class="mc-service-home-cover">
            <div class="title">
                <?php echo get_field("title_service_home"); ?>
            </div>
            <div class="sub-title">
                <?php echo get_field("title_service_home_small"); ?>
            </div>
            <div class="contain">
                <div class="kol">
                    <img src="<?php echo get_field("kol_service_home"); ?>" alt="KOL">
                </div>
                <?php
                $services = get_field('list_services_home');
                if ($services) {
                    $first_post = $services[0];
                ?>
                    <div class="item-service item-service-1">
                        <div class="thumb">
                            <img src="<?php echo get_the_post_thumbnail_url($first_post->ID) ?>" alt="Thumb">
                        </div>
                        <div class="name-service">
                            <?php
                            echo get_the_title($first_post->ID);
                            ?>
                        </div>
                    </div>
                    <?php
                    if ($services[1]) {
                        $sec_post = $services[1];
                    ?>
                        <div class="item-service item-service-2">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url($sec_post->ID) ?>" alt="Thumb">
                            </div>
                            <div class="name-service">
                                <?php
                                echo get_the_title($sec_post->ID);
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    if ($services[2]) {
                        $three_post = $services[2];
                    ?>
                        <div class="item-service item-service-3">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url($three_post->ID) ?>" alt="Thumb">
                            </div>
                            <div class="name-service">
                                <?php
                                echo get_the_title($three_post->ID);
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    if ($services[3]) {
                        $four_post = $services[3];
                    ?>
                        <div class="item-service item-service-4">
                            <div class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url($four_post->ID) ?>" alt="Thumb">
                            </div>
                            <div class="name-service">
                                <?php
                                echo get_the_title($four_post->ID);
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>