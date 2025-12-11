//#BTNクリックで#MENUを表示.disp {display: none;}
$(function () {
  $(".menuNavi").click(function () {
    $("#menuNavi__menu").toggleClass("icon-menu");
    $("#menuNavi__menu").toggleClass("icon-close");
    $(".mainNavi").toggleClass("menu-open");
  });
});
// ハンバーガーメニュー
$(function () {
  const body = document.querySelector("body");
  const btn = document.querySelector(".js-button");
  const menu = document.querySelector(".js-open-menu");

  btn.addEventListener("click", () => {
    const isOpen = menu.classList.toggle("is-open");
    body.classList.toggle("is-active");
    btn.classList.toggle("is-active");
    btn.setAttribute("aria-expanded", isOpen);
  });
});
//Scroll Rules
$(function () {
  if (window.matchMedia("(max-width: 640px)").matches) {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 50;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  } else {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 100;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  }
});

//施工事例(サムネイル固定)
$(function () {
  $(".yao-slider").slick({
    arrows: false,
    fade: true,
    asNavFor: ".yao-thumbnail",
  });
  $(".yao-thumbnail").slick({
    slidesToShow: 6,
    asNavFor: ".yao-slider",
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
        },
      },
    ],
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // すべての質問要素を取得します
  const faqQuestions = document.querySelectorAll(".c-faq__question");

  // 各質問要素に対してクリックイベントを設定します
  faqQuestions.forEach(function (question) {
    question.addEventListener("click", function () {
      // クリックされた質問の親要素(.c-faq__item)を取得します
      const item = this.closest(".c-faq__item");

      // is-openクラスを付けたり外したりします
      item.classList.toggle("is-open");
    });
  });
});
//クリックしたら開閉
$(function () {
  $(".click-title").on("click", function () {
    $(this).next().slideToggle(400);
    $(this).toggleClass("close", 400);
  });
});

// headerの高さを計測して、bodyのpading-topにその値を追加
function adjustBodyPadding() {
  const body = document.body;
  const headerHeight = document.querySelector("header").offsetHeight;
  body.style.paddingTop = headerHeight + "px";
}

window.addEventListener("resize", adjustBodyPadding);
window.addEventListener("load", adjustBodyPadding);

// ヘッダー　背景変化
const header = document.querySelector("header");
window.addEventListener("scroll", () => {
  // 垂直方向のスクロール量
  const scrollY = window.scrollY;
  if (scrollY <= 0) {
    header.classList.remove("scroll");
  } else {
    header.classList.add("scroll");
  }
});

$(function () {
  // 各スライダーラッパーに対して処理を実行
  $(".top-blog__slider-wrapper").each(function () {
    // 自身の配下にあるスライダー要素
    var $slider = $(this).find(".js-slick-blog");
    // 自身の配下にある矢印要素
    var $prevBtn = $(this).find(".top-blog__arrow--prev");
    var $nextBtn = $(this).find(".top-blog__arrow--next");

    $slider.slick({
      dots: false,
      arrows: true,
      // ここで自作ボタンを指定
      prevArrow: $prevBtn,
      nextArrow: $nextBtn,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1080,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
  });

  $(".top-blog__tab").on("click", function () {
    var targetId = $(this).data("target");
    var $targetWrapper = $(targetId); // IDはラッパーについている
    var $targetSlider = $targetWrapper.find(".js-slick-blog");

    if ($(this).hasClass("is-active")) return false;

    $(".top-blog__tab").removeClass("is-active");
    $(this).addClass("is-active");

    // すべてのラッパーを隠す
    $(".top-blog__slider-wrapper").hide();

    // ターゲットを表示＆再計算
    $targetWrapper.css("opacity", 0).show();
    $targetSlider.slick("setPosition");
    $targetWrapper.animate({ opacity: 1 }, 300);
  });
});
