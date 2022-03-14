setTimeout(function () {
  document.querySelector("body").classList.add("loaded");
}, 50);

(window.onload = function (event) {
  const body = document.querySelector("body");
  const header = document.querySelector("#header");
  const main = document.querySelector("main");
  const footer = document.querySelector("#footer");
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
  // Nav list
  function addClassToNavList() {
    let index = 0;
    setTimeout(() => {
      window.setInterval(() => {
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

  // formGroup; labels hover
  const labels = [...document.querySelectorAll(".fg-js")];

  for (let i = 0; i < labels.length; i++) {
    const label = function () {
      if (labels[i].children[2].childNodes[0] === document.activeElement || labels[i].children[2].childNodes[0].value) {
        labels[i].childNodes[1].classList.add("active");
        labels[i].children[2].childNodes[0].classList.add("active");
      } else {
        labels[i].childNodes[1].classList.remove("active");
        labels[i].children[2].childNodes[0].classList.remove("active");
      }
    };
    labels[i].children[2].childNodes[0].addEventListener("focusin", label);
    labels[i].children[2].childNodes[0].addEventListener("focusout", label);
  }

  // Stickier contact
  const stickier = document.querySelector("#contact-label");
  const modal = document.querySelector("#contact-modal");
  const modalClose = document.querySelector(".close-m");

  setTimeout(() => {
    stickier.classList.add("active");
  }, 2000);

  // // Modal
  stickier.addEventListener("click", openModal);

  modalClose.addEventListener("click", function (event) {
    if (!event.target.matches(".close-m") || !event.target.matches(".box")) {
      closeModal();
    }
    false;
  });

  function closeModal() {
    modal.classList.remove("active");
    body.classList.remove("modal-active");
    header.classList.remove("m-active");
    main.classList.remove("m-active");
    footer.classList.remove("m-active");
  }

  function openModal() {
    modal.classList.add("active");
    body.classList.add("modal-active");
    header.classList.add("m-active");
    main.classList.add("m-active");
    footer.classList.add("m-active");
  }

  // viewport for sf
  // const triangles = document.querySelector(".orn-right svg");
  // var h1 = document.querySelector("footer");

  // document.addEventListener("scroll", () => {
  //   let scrollTop = document.documentElement.scrollTop;
  //   if (isInViewport(h1)) {
  //     if (triangles !== null) {
  //       // triangles.style.width = 100 + scrollTop / 11 + "%";
  //       triangles.style.transform = ` translate(0, ${0 + scrollTop / 2}px)`;
  //     }
  //   }
  // });

  // var isInViewport = (elem) => {
  //   var distance = elem.getBoundingClientRect();
  //   return (
  //     distance.top >= 0 &&
  //     distance.left >= 0 &&
  //     distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
  //     distance.right <= (window.innerWidth || document.documentElement.clientWidth)
  //   );
  // };

  // const trianglesSingle = document.querySelector(".triangles-single");
  // document.addEventListener("scroll", () => {
  //   let scrollTop = document.documentElement.scrollTop;
  //   if (trianglesSingle !== null) {
  //     trianglesSingle.style.top = 0 - scrollTop / 50 + "%";
  //   }
  // });

  var pathEls = document.querySelectorAll(".bg-path path");
  for (var i = 0; i < pathEls.length; i++) {
    var pathEl = pathEls[i];
    var offset = anime.setDashoffset(pathEl);
    pathEl.setAttribute("stroke-dashoffset", offset);
    anime({
      targets: pathEl,
      strokeDashoffset: [offset, 0],
      duration: anime.random(2000, 3000),
      delay: anime.random(0, 1000),
      loop: true,
      direction: "alternate",
      easing: "easeInOutSine",
      autoplay: true
    });
  }
})();
