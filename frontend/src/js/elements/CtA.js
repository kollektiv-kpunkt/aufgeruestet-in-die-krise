if (document.querySelector(".gsoa-fp-some-share-button")) {
  document.querySelectorAll(".gsoa-fp-some-share-button").forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const shareText = button.parentElement.getAttribute("data-sharetext");
      const twitterText = button.parentElement.getAttribute("data-twittertext");
      const shareType = button.getAttribute("data-sharetype");
      const shareUrl = window.location.href;

      switch (shareType) {
        case "facebook":
          window.open(`https://www.facebook.com/sharer/sharer.php?u=${shareUrl}`, "facebook-share-dialog", "width=800,height=600");
          break;
        case "twitter":
          window.open(`https://twitter.com/intent/tweet?text=${twitterText}&url=${shareUrl}`);
          break;
        case "whatsapp":
          window.open(`https://api.whatsapp.com/send/?text=${shareText}%0A${shareUrl}`);
          break;
        case "telegram":
          window.open(`https://t.me/share/url?url=${shareUrl}&text=${shareText}`);
          break;
      }
      _paq.push(['trackEvent', 'Share', 'Click', shareType]);
    });
  });
}

if (document.querySelector(".gsoa-petition-button")) {
  document.querySelector(".gsoa-petition-button").addEventListener("click", (e) => {
    _paq.push(['trackEvent', 'Petition', 'Click']);
  });
}