document.addEventListener("DOMContentLoaded", () => {
  const content = document.getElementById("content");

  document.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", (e) => {
      const href = link.getAttribute("href");

      if (href && href.startsWith("?url=")) {
        e.preventDefault();

        // Fade out actual
        content.classList.remove("show");

        content.addEventListener(
          "transitionend",
          () => {
            // Cambiar el contenido al nuevo
            window.location.href = href;
          },
          { once: true }
        );
      }
    });
  });
});
