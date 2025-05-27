<?php
get_header();
?>
<div class="home-cover-1 mcp-page">
    <div class="post-content">
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
        ?>
                <div class="post-container">
                    <div class="post-breadcrumbs">
                        <p><?php echo get_the_date(); ?></p>
                        <p>
                            <strong>Trang chủ</strong> <span style="margin: 0 6px;">|</span>
                            <strong><?php echo get_the_title(); ?></strong>
                        </p>
                    </div>

                    <h1 class="post-title">
                        <?php echo get_the_title(); ?>
                    </h1>

                    <div class="post-meta">
                        <p><span>Tác giả: <?php if (get_the_author()) {
                                                echo get_the_author();
                                            } else {
                                                echo "Diva";
                                            }  ?></span></p>
                    </div>

                    <div class="mc-content-post-single">
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    <?php
    get_template_part('sections/home/form');
    get_template_part('sections/common/footer');
    ?>
</div>

<?php get_footer(); ?>