// Vanilla.JS severiz
window.onscroll = function() {
    var navbar = document.getElementById("navbar");
    if (window.pageYOffset > 0) {
      navbar.style.backgroundColor = "red";
      navbar.style.color = "white";
      navbar.style.transition = "background-color 0.5s ease, color 0.5s ease";
      navbar.classList.add("sticky");
    } else {
      navbar.style.backgroundColor = "";
      navbar.style.color = "";
      navbar.classList.remove("sticky");
    }
  };
  