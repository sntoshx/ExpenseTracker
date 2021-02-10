const loginbox = document.querySelector(".login-container");
const signupbox = document.querySelector(".signup-container");
const modal = document.querySelector(".modal");
const body = document.querySelector("body");
const inputbox = document.querySelectorAll(
  ".box input[type='text'], .box input[type='password']"
);
const pw = document.querySelector(".password");
const pw1 = document.querySelector(".lpassword");

window.onload = () => {
  formtransit = (el) => {
    el.parentElement.firstElementChild.style.setProperty("opacity", "1");
  };
  formcheck = (el) => {
    var txt = el.getAttribute("placeholder");
    if (txt == "" || txt == null) {
      el.parentElement.firstElementChild.style.setProperty("opacity", "1");
    } else {
      el.parentElement.firstElementChild.style.setProperty("opacity", "0");
    }
  };
  loginModal = () => {
    signupbox.style.setProperty("display", "none");
    modal.style.setProperty("display", "flex");
    loginbox.style.setProperty("display", "flex");
    loginbox.style.setProperty(
      "animation",
      "slide-in .5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"
    );
    loginbox.style.setProperty(
      "-webkit-animation",
      "slide-in .5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"
    );
  };

  signupModal = () => {
    loginbox.style.setProperty("display", "none");
    modal.style.setProperty("display", "flex");
    signupbox.style.setProperty("display", "flex");
    signupbox.style.setProperty(
      "animation",
      "slide-in .5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"
    );
    signupbox.style.setProperty(
      "-webkit-animation",
      "slide-in .5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"
    );
    setTimeout(() => {}, 100);
  };

  closeLogin = () => {
    loginbox.style.setProperty("animation", "none");
    loginbox.style.setProperty("-webkit-animation", "none");

    setTimeout(() => {
      modal.style.setProperty("display", "none");
      loginbox.style.setProperty("display", "none");
    }, 100);
  };

  closeSignup = () => {
    loginbox.style.setProperty("animation", "none");
    loginbox.style.setProperty("-webkit-animation", "none");

    setTimeout(() => {
      modal.style.setProperty("display", "none");
      loginbox.style.setProperty("display", "none");
    }, 100);
  };
};
