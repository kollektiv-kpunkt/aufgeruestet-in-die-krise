function setProgress(scrollBody) {
  const scrollLeft = scrollBody.scrollLeft;
  const introWidth = document.querySelector('.gsoa-fp-intro-wrapper').offsetWidth;
  const progress = scrollLeft - introWidth;
  const fullWidht = document.querySelector(".gsoa-fp-chart").offsetWidth;
  const progressPercent = ((progress / fullWidht) * 100);
  if (progressPercent < 0 || progressPercent > 100) {
    return;
  }
  const progressBar = document.querySelector(".gsoa-fp-progressbar");
  const progressBarInner = progressBar.querySelector(".gsoa-fp-progressbar-inner");
  const progressNumber = progressBar.querySelector("p");

  progressNumber.innerText = `${progressPercent.toFixed(2)}%`;
  progressBarInner.style.width = `${progressPercent.toFixed(2)}%`;

  const counterNumber = document.querySelector(".gsoa-fp-chart-counter-number");
  const amount = (9400000000 * (progressPercent / 100)).toLocaleString('de-CH', { style: 'currency', currency: 'CHF' });
  counterNumber.innerText = `${amount}`;
  const jumper = document.querySelector(".gsoa-fp-chart-jumper");
  if (progressPercent > 5) {
    jumper.classList.remove("opacity-0");
    jumper.classList.add("opacity-50");
  } else {
    jumper.classList.add("opacity-0");
    jumper.classList.remove("opacity-50");
  }

}

document.querySelector('.gsoa-fp-outer').addEventListener('scroll', (e) => setProgress(e.target));


function ScrollToPosition(percentage = 100) {
  let scrollPosition = (document.querySelector(".gsoa-fp-chart").offsetWidth * percentage / 100) + document.querySelector('.gsoa-fp-intro-wrapper').offsetWidth
  document.querySelector('.gsoa-fp-outer').scrollTo({
    left: scrollPosition,
    behavior: 'smooth'
  });
}

document.querySelector(".gsoa-fp-chart-jumper").addEventListener("click", (e) => {
  e.preventDefault();
  ScrollToPosition();
});

document.querySelector(".gsoa-fp-intro-button").addEventListener("click", (e) => {
  e.preventDefault();
  ScrollToPosition(0);
});

window.addEventListener("load", () => {
  const params = new URLSearchParams(window.location.search);
  if (params.has("p")) {
    ScrollToPosition(params.get("p"));
    // window.history.replaceState({}, document.title, "/");
  }
});
