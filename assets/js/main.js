jQuery(document).ready(function(){
    sliderBannerTop();
    initHeader();
    sliderImages();
    sliderCustomersTalk();
    handlerVideo();
    sliderNews();
    formRegister(
        ".btn-sub-form",
        "form-Contact",
        ".form-Contact",
        "#fnameSave",
        "#phoneSave",
        ".phoneValSave",
        ".nameValSave"
    );
    AOS.init();
    handlerMenuFixed();
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
function sliderImages(){ 
  jQuery('.list-images').slick({
    centerMode: true,
    dots: true,
    centerPadding: '350px',
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '150px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '150px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 577,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
}
function sliderCustomersTalk(){
  jQuery('.mc-slider-cs-talk').slick({
    vertical: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    verticalSwiping: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    draggable: false,  // tắt kéo chuột (desktop)
    swipe: false,      // tắt vuốt cảm ứng (mobile)
    prevArrow: '<button type="button" class="slick-prev"><img src="../wp-content/themes/mc-theme/assets/images/prev-ver.png" alt="Prev"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="../wp-content/themes/mc-theme/assets/images/next-ver.png" alt="Next"></button>',
  });
}
function handlerVideo(){
  let videoCover = document.getElementById('videoCover');
  let iconPlay = document.querySelector(".icon-play");
  if(videoCover){
    videoCover.addEventListener('click', function() {
      const videoUrl = this.getAttribute('data-link');
      const videoDisplay = document.getElementById('handlerVideoDisplay');
      videoDisplay.innerHTML = `
        <video controls autoplay>
          <source src="${videoUrl}" type="video/mp4" />
          Trình duyệt của bạn không hỗ trợ thẻ video.
        </video>
      `;
      videoCover.style.display = "none";
      iconPlay.style.display = "none";
    });
  }
  if(iconPlay){
    iconPlay.addEventListener('click', function() {
      const videoUrl = this.getAttribute('data-link');
      const videoDisplay = document.getElementById('handlerVideoDisplay');
      videoDisplay.innerHTML = `
        <video controls autoplay>
          <source src="${videoUrl}" type="video/mp4" />
          Trình duyệt của bạn không hỗ trợ thẻ video.
        </video>
      `;
      videoCover.style.display = "none";
      iconPlay.style.display = "none";
    });
  }
  
}
function sliderNews(){
  jQuery('.mc-slider-news').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 877,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 577,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
}

function formRegister(
  buttonClass,
  formClass,
  dataClass,
  idHoTen,
  idSdt,
  phoneVal,
  nameVal
) {
  
  var submit = jQuery(buttonClass);
  submit.click(function () {
    var hoTen = document.forms[formClass]["hoTenSave"].value;
    var sdt = document.forms[formClass]["SdtSave"].value;
    var remove_space = jQuery.trim(sdt.replace(/ /g, ""));
    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    let selectedTime = document.querySelector('input[name="time"]:checked');
    let timecheck = document.getElementById('timecheck');
    if(selectedTime){
      timecheck.value = selectedTime.value;
    }
    if (hoTen == "" || sdt == "") {
      if (hoTen == "") {
        jQuery(nameVal).css("display", "block");
      }
      jQuery(idHoTen).click(function () {
        jQuery(nameVal).css("display", "none");
      });
      if (sdt !== "") {
        if (vnf_regex.test(remove_space) == false) {
          jQuery(phoneVal)
            .empty()
            .append("<span>Số điện thoại không đúng định dạng!</span>");
          jQuery(phoneVal).css("display", "block");
        } else {
          jQuery(phoneVal).empty().append("<span>Số điện thoại hợp lệ!</span>");
          jQuery(phoneVal).css("display", "block");
        }
      } else {
        jQuery(phoneVal).empty().append("Bạn chưa nhập số điện thoại!");
        jQuery(phoneVal).css("display", "block");
      }
      jQuery(idSdt).click(function () {
        jQuery(phoneVal).css("display", "none");
      });
      return false;
    }
    if (hoTen !== "" || sdt !== "") {
      if (vnf_regex.test(remove_space) == false) {
        jQuery(phoneVal)
          .empty()
          .append("<span>Số điện thoại không đúng định dạng!</span>");
        jQuery(phoneVal).css("display", "block");
      } else {
        jQuery(".watting").css("display", "block");
        var data = jQuery(dataClass).serialize();
        jQuery.ajax({
          type: "GET",
          url: "https://script.google.com/macros/s/AKfycbwMbsvulAxgSb4y0qw1amFiltc1zd7A4CsYRzpuSsl8e-p1rWuU02m5cRHY6EUxFA4XHQ/exec",
          dataType: "json",
          crossDomain: true,
          data: data,
          success: function (data) {
            if (data == "false") {
              alert("Thêm không thành công");
              location.reload();
            } else {
              alert("Cảm ơn quý khách đã đăng ký. Chúng tôi sẽ liên hệ với bạn vào khoảng thời gian sớm nhất !");
              location.reload();
            }
          },
        });
        return false;
      }
      return false;
    } else {
      var data = jQuery(formClass).serialize();
      jQuery.ajax({
        type: "GET",
        url: "https://script.google.com/macros/s/AKfycbwMbsvulAxgSb4y0qw1amFiltc1zd7A4CsYRzpuSsl8e-p1rWuU02m5cRHY6EUxFA4XHQ/exec",
        dataType: "json",
        crossDomain: true,
        data: data,
        success: function (data) {
          if (data == "false") {
            alert("Thêm không thành công");
            location.reload();
          } else {
            alert("Cảm ơn quý khách đã đăng ký. Chúng tôi sẽ liên hệ với bạn vào khoảng thời gian sớm nhất !");
            location.reload();
          }
        },
      });
      return false;
    }
  });
}
function handlerMenuFixed(){
  window.addEventListener('scroll', function() {
    const menu = document.getElementById('HandlerMenu');
    const scrollPosition = window.scrollY || window.pageYOffset;

    if(scrollPosition > 100) {
      menu.classList.add('active');
    } else {
      menu.classList.remove('active');
    }
  });
}