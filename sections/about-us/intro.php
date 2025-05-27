<section class="mc_intro mc_intro_abus">
    <div class="mc-container">
        <div class="intro-contain">
            <div class="left">
                <div class="sub-title">
                    <?php echo get_field("sub_title_intro_common"); ?>
                </div>
                <div class="title">
                    <?php echo get_field("title_intro_common"); ?>
                </div>
                <div class="content">
                    <?php echo get_field("content_intro_common"); ?>
                </div>
            </div>
            <div class="right">
                <img src="<?php echo get_field("ha_mh_intro_common"); ?>" alt="Hình ảnh">
            </div>
        </div>
        <div class="list-tc">
            <?php
            if (have_rows("dd_nb_common")):
                while (have_rows("dd_nb_common")) : the_row();
            ?>
                    <div class="item-cover">
                        <div class="item">
                            <div class="icon">
                                <img src="<?php echo get_sub_field("icon_ddnb"); ?>" alt="Icon" />
                            </div>
                            <div class="content-item">
                                <div class="tt">
                                    <?php echo get_sub_field("ddnb_name_common"); ?>
                                </div>
                                <div class="desc">
                                    <?php echo get_sub_field("ddnb_desc_common"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="number-tt">
            <?php
            if (have_rows("sltt_intro_common")):
                while (have_rows("sltt_intro_common")) : the_row();
            ?>
                    <div class="item">
                        <div class="num">
                            <?php echo get_sub_field("sl_tt_intro"); ?>
                        </div>
                        <div class="txt">
                            <?php echo get_sub_field("txt_sltt_intro"); ?>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>