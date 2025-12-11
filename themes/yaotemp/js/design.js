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
  const btn = document.querySelector(".js-button");
  const menu = document.querySelector(".js-open-menu");

  btn.addEventListener("click", () => {
    const isOpen = menu.classList.toggle("is-open");
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

//クリックしたら開閉
$(function () {
  $(".click-title").on("click", function () {
    $(this).next().slideToggle(400);
    $(this).toggleClass("close", 400);
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
