const loginbox = document.querySelector(".login-container");
const modal = document.querySelector(".modal");
const body = document.querySelector("body");
const cells = document.querySelectorAll(".history table td");

window.onload = () => {
  settings = () => {
    document.querySelector(".header ul").classList.toggle("ul-toggler");
    document
      .querySelector(".burger-container")
      .classList.toggle("burger-toggler");
  };
  loginModal = () => {
    modal.style.setProperty("display", "flex");
    loginbox.style.setProperty("display", "flex");
    loginbox.style.setProperty(
      "animation",
      "slide-in .5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"
    );
    settings();
    loginbox.style.setProperty(
      "-webkit-animation",
      "slide-in .5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"
    );
  };
  closeLogin = () => {
    loginbox.style.setProperty("animation", "none");
    loginbox.style.setProperty("-webkit-animation", "none");

    setTimeout(() => {
      modal.style.setProperty("display", "none");
      loginbox.style.setProperty("display", "none");
    }, 100);
  };
  toggleTable = () => {
    for (i = 0; i < cells.length; i++) {
      var j = Math.floor(Math.random() * 10 + Math.random() * 10);
      if (j < cells.length)
        cells[j].style.setProperty("transition-delay", `${i * 25}ms`);
    }
    if (
      getComputedStyle(document.documentElement).getPropertyValue("--cells") ==
      "transparent"
    ) {
      document.querySelector(".history").classList.toggle("greying");
      document.documentElement.style.setProperty("--cells", "black");
    } else {
      document.documentElement.style.setProperty("--cells", "transparent");
      document.querySelector(".history").classList.toggle("greying");
    }
  };
  payMenu = () => {
    document
      .querySelector(".friend-pay .container")
      .style.setProperty("transform-origin", "right");
    document
      .querySelector(".friend-pay .container")
      .style.setProperty("transform", "scalex(0)");

    setTimeout(() => {
      document.querySelector(".friend-pay .container").style.display = "none";
    }, 620);

    setTimeout(() => {
      document.querySelector(".pay-menu").style.display = "flex";
      setTimeout(() => {
        document
          .querySelector(".pay-menu")
          .style.setProperty("transform", "scalex(1)");
      }, 50);
    }, 620);
  };

  backMenu = () => {
    document
      .querySelector(".pay-menu")
      .style.setProperty("transform-origin", "right");
    document
      .querySelector(".pay-menu")
      .style.setProperty("transform", "scalex(0)");

    setTimeout(() => {
      document.querySelector(".pay-menu").style.display = "none";
    }, 620);

    setTimeout(() => {
      document.querySelector(".container").style.display = "flex";
      setTimeout(() => {
        document
          .querySelector(".container")
          .style.setProperty("transform", "scalex(1)");
      }, 50);
    }, 620);
  };
};
