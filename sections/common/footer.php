<div class="mc_footer">
    <div class="mc-container">
        <div class="mc_footer_contain">
            <div class="logo-and-social">
                <img src="<?php echo get_field("logo_footer_main", "option"); ?>" alt="Logo Footer" />
                <div class="social-footer">
                    <?php
                    if (have_rows("social_footer", "option")):
                        while (have_rows("social_footer", "option")) : the_row();
                    ?>
                            <a href="<?php echo get_sub_field("link_social_footer", "option"); ?>">
                                <img src="<?php echo get_sub_field("icon_social_footer", "option"); ?>" alt="Icon" />
                            </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="item-list-footer">
                <?php echo get_field("list_page_footer", "option"); ?>
            </div>
            <div class="item-list-footer">
                <?php echo get_field("list_services_footer", "option"); ?>
            </div>
            <div class="info-footer">
                <div class="address">
                    <?php echo get_field("address_footer", "option"); ?>
                </div>
                <div class="phone">
                    <?php echo get_field("sdt_footer", "option"); ?>
                </div>
                <div class="email">
                    <?php echo get_field("email_footer", "option"); ?>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <?php echo get_field("subfooter", "option"); ?>
        </div>
    </div>

</div>