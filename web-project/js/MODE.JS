const btn = document.getElementById("btn-toggle");
const theme = document.getElementById("navbar");
const theme1 = document.getElementById("font");


function chuyen () {

  if (theme.getAttribute("href") == "css/navbar1.css") {
    theme1.href = "css/font.css";
    theme.href = "css/navbar.css";
  } else {
    theme.href = "css/navbar1.css";
    theme1.href = "css/font1.css";
  }
};

btn.addEventListener("click",chuyen);
