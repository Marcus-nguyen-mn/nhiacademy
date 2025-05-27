<section class="mc_news mc-ovex-hid">
    <div class="mc-container">
        <div class="mc_news_contain">
            <div class="sub-title" data-aos="fade-up" data-aos-duration="1000">
                <?php echo get_field("sub_title_news", "option"); ?>
            </div>
            <div class="title" data-aos="fade-up" data-aos-duration="1200">
                <?php echo get_field("title_news", "option"); ?>
            </div>
            <div class="list-post-news mc-slider-news">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>" class="thumb">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title(); ?>" />
                            </a>
                            <div class="cate-post-and-date">
                                <div class="cate">
                                    <?php $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo '<span class="cat-name">' . esc_html($categories[0]->name) . '</span>';
                                    } ?>
                                </div>
                                <div class="date">
                                    <?php echo get_the_date('d.m.Y'); ?>
                                </div>
                            </div>
                            <a href="#" class="title-post"><?php echo get_the_title(); ?></a>
                        </div>
                <?php
                    endwhile;
                endif;

                // Reset Post Data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>