const scrollContainer = document.querySelector(".gsoa-fp-outer");

scrollContainer.addEventListener("wheel", (evt) => {
  let outro = document.querySelector(".gsoa-fp-outro-wrapper");
  let scrollposition = parseFloat(document.querySelector(".gsoa-fp-progressbar p").getAttribute("data-progress"));
  if (outro.contains(evt.target) && evt.deltaY > 0 && scrollposition > "99.999") {
    return;
  }
  evt.preventDefault();
  if (evt.deltaX !== 0) {
    scrollContainer.scrollLeft += evt.deltaX;
  } else {
    scrollContainer.scrollLeft += evt.deltaY;
  }
});