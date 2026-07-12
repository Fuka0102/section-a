(function () {
  var button = document.getElementById("lp-back-to-top");

  if (!button) {
    return;
  }

  var SHOW_AFTER = 400;

  window.addEventListener(
    "scroll",
    function () {
      if (window.scrollY > SHOW_AFTER) {
        button.classList.add("is-visible");
      } else {
        button.classList.remove("is-visible");
      }
    },
    { passive: true }
  );

  button.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
})();
