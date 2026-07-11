(function () {
  var bar = document.getElementById("lp-sp-bar");

  if (!bar) {
    return;
  }

  var hideTimer = null;

  window.addEventListener(
    "scroll",
    function () {
      bar.classList.remove("is-visible");

      if (hideTimer) {
        clearTimeout(hideTimer);
      }

      hideTimer = setTimeout(function () {
        bar.classList.add("is-visible");
      }, 400);
    },
    { passive: true }
  );
})();
