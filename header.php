<!doctype html>
<html id="no_margin" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" href="<?php //echo get_template_directory_uri(); 
                            ?>/images/favico.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/lib/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/lib/slick-theme.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id='top'>
    <div class="sub-header">
        <div class="mc-container">
            <div class="row-sub-head">
                <div class="left">
                    <div class="left-cover">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/address.png" alt="Phone">
                            <div class="txt">
                                <?php echo get_field("address_footer", "option"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-cover">
                        <div class="right-item">
                            <a href="tel:<?php echo get_field("sdt_footer", "option"); ?>" class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt="Phone">
                                <div class="txt">
                                    <?php echo get_field("sdt_footer", "option"); ?>
                                </div>
                            </a>
                            <a href="mailto:<?php echo get_field("email_footer", "option"); ?>" class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/letter.png" alt="Email">
                                <div class="txt">
                                    example@physiozen.com
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mc-cover-header-main">
        <div class="mc-container">
            <header>
                <a href="<?php echo site_url(); ?>" class="header-logo">
                    <img src="<?php echo get_field("logo_main", "option"); ?>" alt="Header logo" />
                </a>
                <div class="mc_menu_head_main">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                    ));
                    ?>
                </div>
                <div class="header-contact">
                    <a href="<?php echo site_url("lien-he"); ?>">Đặt hẹn</a>
                </div>
                <div class="burger-menu">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/images/burger-menu.svg" alt="" />
                </div>
                <div class="side-popup-overlay" id="popupOverlay">
                    <button class="close-popup" id="closePopup">✕</button>
                    <div class="side-popup" id="sidePopup">
                        <div class="header-logo">
                            <img src="<?php echo get_field("logo_footer_main", "option"); ?>" alt="Header logo" />
                        </div>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                        ));
                        ?>
                        <div class="contact-control">
                            <a href="tel: 1900 2222"><img src="<?php echo get_template_directory_uri();
                                                                ?>/assets/images/header-phone.svg" alt="Phone icon" />
                                1900 2222</a>
                            <a href="<?php echo site_url("lien-he"); ?>"><img
                                    src="<?php echo get_template_directory_uri();
                                            ?>/assets/images/header-calendar.svg"
                                    alt="Calendar icon" />Đặt lịch</a>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>