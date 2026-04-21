var questions = document.getElementsByClassName("question");

for (q of questions) {
  q.addEventListener("click", function () {
    this.parentElement.classList.toggle("active");
  });
}
