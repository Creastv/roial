(window.onload = function (event) {
  const triangles = document.querySelector(".bg-zaufali-nam svg");
  document.addEventListener("scroll", () => {
    let scrollTop = document.documentElement.scrollTop;
    if (triangles !== null) {
      triangles.style.width = 100 + scrollTop / 30 + "%";
      triangles.style.left = -scrollTop / 20 + "%";
      triangles.style.top = -80 - scrollTop / 2 + "%";
    }
  });
})();
