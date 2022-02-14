(window.onload = function (event) {
  const body = document.querySelector("body");
  const header = document.querySelector("#header");
  const sticky = header.offsetTop;
  const togglerNav = document.querySelector(".toggler-nav");
  const headerNav = document.querySelector(".header-nav");
  const li = [...document.querySelectorAll("#header-nav-list li")];

  let navFlag = false;
  const goToTop = document.querySelector("#go-to-top");

  // Go to Top
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("go-to-to-active");
    } else {
      goToTop.classList.remove("go-to-to-active");
    }
  });

  // sticky header
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= sticky) {
      header.classList.add("header-sticky");
      body.style.paddingTop = `${header.clientHeight}px`;
    } else {
      header.classList.remove("header-sticky");
      body.style.paddingTop = "0px";
    }
  });

  // Toggle Nav
  togglerNav.addEventListener("click", () => {
    addClassToNavList();
    if (navFlag == false) {
      headerNav.classList.add("header-nav-active");
      togglerNav.classList.add("toggler-nav-active");
      header.classList.add("header-active");
      navFlag = true;
    } else {
      headerNav.classList.remove("header-nav-active");
      togglerNav.classList.remove("toggler-nav-active");
      header.classList.remove("header-active");
      navFlag = false;
    }
  });
  function addClassToNavList() {
    let index = 0;
    setTimeout(function () {
      window.setInterval(function () {
        if (index < li.length) {
          if (navFlag) {
            li[index++].classList.add("liVisible");
          } else {
            li[index++].classList.remove("liVisible");
          }
        }
      }, 100);
    }, 0);
  }
})();
