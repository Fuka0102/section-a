(function () {
  var toggle = document.querySelector(".lp-header__menu-toggle");
  var navList = document.querySelector(".lp-header__nav-list");

  if (!toggle || !navList) {
    return;
  }

  toggle.addEventListener("click", function () {
    var isOpen = navList.classList.toggle("is-open");
    toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
  });
})();
