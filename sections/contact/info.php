<div class="info-maps">
    <div class="mc-container">
        <div class="info-maps-cover">
            <div class="left">
                <div class="left-cover">
                    <div class="img-mh">
                        <img src="<?php echo get_field("bg_contactp"); ?>" alt="Liên hệ" />
                    </div>
                    <div class="left-content">
                        <div class="title-left">
                            <?php echo get_field("title_info_contactp"); ?>
                        </div>
                        <div class="desc-left">
                            <?php echo get_field("desc_contactp"); ?>
                        </div>
                        <div class="info-left">
                            <div class="item">
                                <div class="item-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-1.png" alt="Địa chỉ" />
                                </div>
                                <div class="info-content">
                                    <div class="title-content-info">
                                        Địa chỉ
                                    </div>
                                    <div class="detail">
                                        <?php echo get_field("address_contactp"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-2.png" alt="Số điện thoại" />
                                </div>
                                <div class="info-content">
                                    <div class="title-content-info">
                                        Số điện thoại
                                    </div>
                                    <div class="detail">
                                        <?php echo get_field("sdt_contactp"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-4.png" alt="Mail" />
                                </div>
                                <div class="info-content">
                                    <div class="title-content-info">
                                        Mail
                                    </div>
                                    <div class="detail">
                                        <?php echo get_field("email_contactp"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-3.png" alt="Thời gian hoạt động" />
                                </div>
                                <div class="info-content">
                                    <div class="title-content-info">
                                        Thời gian hoạt động
                                    </div>
                                    <div class="detail">
                                        <?php echo get_field("time_active_contactp"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <?php echo get_field("iframe_maps_contactp"); ?>
            </div>
        </div>
    </div>
</div>