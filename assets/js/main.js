jQuery(document).ready(function(){
    sliderBannerTop();
    initHeader();
    AOS.init();
});
function sliderBannerTop(){
    jQuery('.slider-banner-top').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
}
function initHeader() {
  const $burgerMenu = jQuery(".burger-menu");
  const $popupOverlay = jQuery("#popupOverlay");
  const $closePopup = jQuery("#closePopup");

  if (
    $burgerMenu.length === 0 ||
    $popupOverlay.length === 0 ||
    $closePopup.length === 0
  ) {
    return;
  }

  jQuery(".menu-item-has-children").each(function () {
    const $a = jQuery(this).children("a");
    if ($a.siblings(".arrow-icon").length === 0) {
      $a.after('<span class="arrow-icon"></span>');
    }
  });

  function handleToggleSubmenu(e) {
    if (jQuery(e.target).is("a")) return;

    e.preventDefault();
    e.stopPropagation();

    const $li = jQuery(this);
    const $submenu = $li.children(".sub-menu");

    if ($li.hasClass("open")) {
      $submenu.stop(true, true).slideUp(300);
      $li.removeClass("open");
    } else {
      $submenu.stop(true, true).slideDown(300);
      $li.addClass("open");
    }
  }

  jQuery(".side-popup-overlay .menu-item-has-children").on(
    "click",
    handleToggleSubmenu
  );

  function resetSubmenuDisplay() {
    jQuery(".side-popup-overlay .menu-item-has-children").each(function () {
      const $li = jQuery(this);
      const $submenu = $li.children(".sub-menu");

      if ($li.hasClass("open")) {
        $submenu.show();
      } else {
        $submenu.hide();
      }
    });
  }

  function openPopup() {
    $popupOverlay.addClass("active");
  }

  function closePopup() {
    $popupOverlay.removeClass("active");
  }

  $burgerMenu.on("click", openPopup);
  $closePopup.on("click", closePopup);

  $popupOverlay.on("click", function (e) {
    if (e.target === this) {
      closePopup();
    }
  });

  resetSubmenuDisplay();
}