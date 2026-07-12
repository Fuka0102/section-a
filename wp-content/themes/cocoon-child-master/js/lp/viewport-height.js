(function () {
  function setViewportHeight() {
    document.documentElement.style.setProperty("--lp-vh", window.innerHeight * 0.01 + "px");
  }

  setViewportHeight();
  window.addEventListener("resize", setViewportHeight);
  window.addEventListener("orientationchange", setViewportHeight);
})();
