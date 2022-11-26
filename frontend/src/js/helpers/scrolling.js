const scrollContainer = document.querySelector(".gsoa-fp-outer");

scrollContainer.addEventListener("wheel", (evt) => {
  evt.preventDefault();
  scrollContainer.scrollLeft += evt.deltaY;
});