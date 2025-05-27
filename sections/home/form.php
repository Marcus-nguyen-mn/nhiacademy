<section class="mc-form mc-ovex-hid">
    <div class="mc-container">
        <div class="mc-form-cover">
            <div class="sub-title" data-aos="fade-up" data-aos-duration="1000">
                <?php echo get_field("small_title_form", "option"); ?>
            </div>
            <div class="title" data-aos="fade-up" data-aos-duration="1200">
                <?php echo get_field("title_form_config", "option"); ?>
            </div>
            <div class="form-contain">
                <div class="left" data-aos="fade-right" data-aos-duration="1000">
                    <img src="<?php echo get_field("img_form_mh", "option"); ?>" alt="Form liên hệ" />
                </div>
                <div class="right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="title-form">
                        Đặt lịch ngay
                    </div>
                    <form>
                        <div class="inp-st">
                            <input type="text" placeholder="Họ tên" />
                        </div>
                        <div class="inp-st">
                            <input type="text" placeholder="Số điện thoại" />
                        </div>
                        <div class="inp-st">
                            <input type="text" placeholder="Ghi chú" />
                        </div>
                        <div class="button-form">
                            <button type="button" class="btn-sub-form">Nhận tư vấn</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>