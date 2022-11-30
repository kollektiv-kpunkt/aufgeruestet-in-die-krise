import feather from "feather-icons";
import { siFacebook, siTwitter, siWhatsapp, siTelegram } from "simple-icons/icons";

function insertIcons(icon, siIcon) {
  let iconName = icon.toLowerCase();
  iconName = "si" + iconName.charAt(0).toUpperCase() + iconName.slice(1);
  let iconElement = document.querySelector(`[data-si="${icon}"]`);
  iconElement.innerHTML = siIcon.svg;
  let iconSVG = document.querySelector(`[data-si="${icon}"] svg`)
  setStyles(iconSVG, window.getComputedStyle(iconElement));
};

insertIcons("facebook", siFacebook)
insertIcons("twitter", siTwitter)
insertIcons("whatsapp", siWhatsapp)
insertIcons("telegram", siTelegram)

function setStyles(icon, styles) {
  icon.style.width = (styles.width != "auto") ? styles.width : "1rem";
  icon.style.height = (styles.width != "auto") ? styles.width : "1rem";
  icon.style.display = (styles.display != "inline") ? styles.display : "inline-flex";
  icon.style.fill = icon.style.color || "currentColor";
}

feather.replace();