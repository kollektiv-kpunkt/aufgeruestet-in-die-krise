function setContainerSize() {
  var container = document.querySelector('.gsoa-fp-outer');
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
  container.style.height = `${100 * vh}px`;
}

window.addEventListener('resize', setContainerSize);
window.addEventListener('load', setContainerSize);