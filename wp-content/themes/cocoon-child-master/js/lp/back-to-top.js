(function () {
  var buttons = document.querySelectorAll(".js-back-to-top");

  if (!buttons.length) {
    return;
  }

  var SHOW_AFTER = 400;

  window.addEventListener(
    "scroll",
    function () {
      buttons.forEach(function (button) {
        if (window.scrollY > SHOW_AFTER) {
          button.classList.add("is-visible");
        } else {
          button.classList.remove("is-visible");
        }
      });
    },
    { passive: true }
  );

  buttons.forEach(function (button) {
    button.addEventListener("click", function (event) {
      // hrefを持つリンク（例: ヘッダーロゴ）は、リンク先が今いるページと同じ場合のみ
      // スムーズスクロールに置き換える。別ページへのリンクならそのまま遷移させる。
      if (button.tagName === "A") {
        var linkUrl = new URL(button.href, window.location.href);
        if (linkUrl.pathname !== window.location.pathname) {
          return;
        }
        event.preventDefault();
      }

      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });
})();
