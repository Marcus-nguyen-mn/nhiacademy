<?php
get_header();
?>
<?php
get_template_part('sections/common/slider-top');
?>
<div class="home-cover-1">
    <div class="mc-list-page">
        <div class="mc-container">
            <div class="title-list">
                <?php
                $title = get_the_archive_title();
                $title = preg_replace('/^Lưu trữ:\s*/iu', '', $title);

                echo $title;
                ?>
            </div>
            <div class="sub-title-list">
                Dẫn đầu xu hướng - Đẹp từng chi tiết
            </div>
            <div class="list">
                <div class="list-post-news">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                    ?>
                </div>
                <div class="mc-pagination">
                    <?php
                    the_posts_pagination(array(
                        'prev_text' => __('«', 'textdomain'),
                        'next_text' => __('»', 'textdomain'),
                    ));
                    ?>
                </div>

            </div>
        </div>
    </div>
    <?php get_template_part('sections/common/footer'); ?>
</div>

<?php get_footer(); ?>