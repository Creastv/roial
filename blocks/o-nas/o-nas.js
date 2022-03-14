(window.onload = function (event) {
  var swiper = new Swiper(".team", {
    slidesPerView: "auto",
    centeredSlides: true,
    freeMode: true,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      768: {
        spaceBetween: -50
      }
    }
  });
})();
