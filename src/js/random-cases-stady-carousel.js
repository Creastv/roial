(window.onload = function (event) {
  //   document.querySelector("#ra-case-study=-carousel").classList.add("loaded");

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
})();
