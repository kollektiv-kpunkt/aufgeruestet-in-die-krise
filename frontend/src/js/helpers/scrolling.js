const scrollContainer = document.querySelector(".gsoa-fp-outer");

scrollContainer.addEventListener("wheel", (evt) => {
  evt.preventDefault();
  if (evt.deltaX !== 0) {
    scrollContainer.scrollLeft += evt.deltaX;
  }
  scrollContainer.scrollLeft += evt.deltaY;
});