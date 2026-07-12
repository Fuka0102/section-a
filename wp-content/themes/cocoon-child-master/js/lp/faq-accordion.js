(function () {
  var questions = document.querySelectorAll(".lp-faq__question");

  questions.forEach(function (question) {
    question.addEventListener("click", function () {
      var item = question.closest(".lp-faq__item");
      var isOpen = item.classList.toggle("is-open");
      question.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  });
})();
