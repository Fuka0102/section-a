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
    button.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });
})();
