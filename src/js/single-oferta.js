(window.onload = function (event) {
  var swiper = new Swiper(".carousel", {
    grabCursor: true,
    slidesPerView: 1,
    preloadImages: false,
    loop: true,
    lazy: true,
    autoplay: {
      delay: 3900,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".s-button-next",
      prevEl: ".s-button-prev"
    },
    breakpoints: {
      778: {
        slidesPerView: 2
      }
    }
  });

  const accordion = document.querySelectorAll(".faq .wraper");
  for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function (e) {
      for (e = 0; e < accordion.length; e++) {
        accordion[e].classList.remove("active");
      }
      this.classList.toggle("active");
    });
  }

  const triangles = document.querySelector(".orn-single-oferta svg");
  document.addEventListener("scroll", () => {
    let scrollTop = document.documentElement.scrollTop;
    if (triangles !== null) {
      triangles.style.width = 100 + scrollTop / 30 + "%";
      triangles.style.right = -scrollTop / 20 + "%";
      triangles.style.top = -80 - scrollTop / 2 + "%";
    }
  });
})();
