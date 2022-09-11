jQuery(function () {
  jQuery(".mv--weaponSelector").on("click", function () {});
});

window.addEventListener("load", function () {
  var elem = document.querySelector(".swiper-container");
  if (elem !== null) {
    //swiper-containerがあれば…
    var mySwiper = new Swiper(".swiper-container", {
      loop: true, //ループさせる
      effect: "fade", //フェードのエフェクト
      autoplay: {
        delay: 4000, //４秒後に次の画像へ
        disableOnInteraction: false, //ユーザー操作後に自動再生を再開する
      },
      speed: 2000, //２秒かけながら次の画像へ移動
      allowTouchMove: false, //マウスでのスワイプを禁止
      navigation: {
        //左右のページ送りを有効にする
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        //円形のページネーションを有効にする
        el: ".swiper-pagination",
        clickable: true, //クリックを有効にする
      },
    });
  }

  jQuery(window).scroll(function () {
    jQuery(".fade").each(function () {
      var winheight = jQuery(window).height();
      var posi = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      if (scroll + winheight > posi) {
        jQuery(this).addClass("fadein");
      } else {
        jQuery(this).removeClass("fadein");
      }
    });
  });
});
