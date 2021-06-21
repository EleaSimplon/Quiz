const x = document.querySelector(".navbar");
function navResponsive() {
    if (x.className === "navbar sticky-top") x.className += " responsive";
    else x.className = "navbar sticky-top";
  }  