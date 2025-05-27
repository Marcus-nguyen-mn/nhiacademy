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
                    <form class="form-Contact" name="form-Contact" id="form-Contact">
                        <div class="inp-st">
                            <input type="text" id="fnameSave" name="hoTenSave" placeholder="Họ tên" />
                            <p class="nameValSave">Bạn chưa điền họ và tên</p>
                        </div>
                        <div class="inp-st">
                            <input type="text" id="phoneSave" name="SdtSave" placeholder="Số điện thoại" />
                            <p class="phoneValSave">Bạn chưa điền số điện thoại</p>
                        </div>
                        <div class="inp-st">
                            <input type="text" name="noteForm" placeholder="Ghi chú" />
                        </div>
                        <div class="watting">Quý khách vui lòng chờ trong giây lát !</div>
                        <div class="button-form">
                            <?php $url      = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            $validURL = str_replace("&", "&amp", $url); ?>
                            <input type="hidden" id="Dat_lichURL_save" class="" value="<?php echo $validURL; ?>" name="URL_DKN_Save">
                            <input type="hidden" id="ngay_dang_ky_save" class="" value="<?php echo date("G:i - d/m/Y"); ?>" name="DateSave">
                            <button type="button" class="btn-sub-form">Nhận tư vấn</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>