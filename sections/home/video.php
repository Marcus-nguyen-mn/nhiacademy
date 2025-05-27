<section class="mc-video">
    <div class="mc-video-contain">
        <div class="img-video" id="handlerVideoDisplay">
            <img src="<?php echo get_field("image_video_home"); ?>" alt="Video" />
        </div>
        <div class="overlay-video" data-link='<?php echo get_field("video_home"); ?>' id="videoCover">

        </div>
        <div class="icon-play" data-link='<?php echo get_field("video_home"); ?>' id="playVideo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play.png" alt="Play" />
        </div>
    </div>
</section>