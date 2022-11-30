const scrollContainer = document.querySelector(".gsoa-fp-outer");

scrollContainer.addEventListener("wheel", (evt) => {
  let outro = document.querySelector(".gsoa-fp-outro-wrapper");
  let outroInner = document.querySelector(".gsoa-fp-outro-content").scrollTop;
  console.log(outroInner);
  let scrollposition = parseFloat(document.querySelector(".gsoa-fp-progressbar p").getAttribute("data-progress"));
  if (outro.contains(evt.target) && evt.deltaY > 0 && scrollposition > "99.999") {
    return;
  }
  evt.preventDefault();
  if (evt.deltaX !== 0) {
    scrollContainer.scrollLeft += evt.deltaX;
  }
  scrollContainer.scrollLeft += evt.deltaY;
});