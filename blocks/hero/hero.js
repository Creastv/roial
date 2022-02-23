// setTimeout(function () {
//   document.querySelector(".ra-hero").classList.add("loaded");
// }, 200);
(window.onload = function (event) {
  const triangles = document.querySelector(".triangles svg");
  document.addEventListener("scroll", () => {
    let scrollTop = document.documentElement.scrollTop;
    if (triangles !== null) {
      triangles.style.width = 100 + scrollTop / 30 + "%";
      triangles.style.right = -scrollTop / 20 + "%";
      triangles.style.top = -80 - scrollTop / 2 + "%";
    }
  });

  var swiper = new Swiper("#ra-hero-carusel", {
    // grabCursor: true,
    effect: "creative",
    // loop: true,
    autoplay: {
      delay: 2900,
      disableOnInteraction: false
    },
    creativeEffect: {
      prev: {
        opacity: 0,
        translate: [0, 0, -400]
      },
      next: {
        opacity: 0,
        translate: ["100%", 0, 0]
      }
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
      formatFractionCurrent: function (number) {
        return ("0" + number).slice(-2);
      },
      formatFractionTotal: function (number) {
        return ("0" + number).slice(-2);
      },
      renderFraction: function (currentClass, totalClass) {
        return '<span class="' + currentClass + '"></span>' + " <span class='sep-b'></span> " + '<span class="' + totalClass + '"></span>';
      }
    }
  });
})();
