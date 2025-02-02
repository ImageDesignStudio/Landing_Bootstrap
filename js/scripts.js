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

// OBSERVER

// EFECTO DE APARICIÓN DE ELEMENTOS AL HACER SCROLL
const elementsToObserve = document.querySelectorAll(".card, .pie");

// Configuramos el Intersection Observer
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Añadimos la clase "visible" si el elemento está en el viewport
        entry.target.classList.add("visible");
      } else {
        // Opcional: Quitamos la clase "visible" al salir del viewport
        entry.target.classList.remove("visible");
      }
    });
  },
  {
    threshold: 0.2, // El 50% del elemento debe estar visible para hacer comenzar el efecto
  }
);

// Observamos todos los elementos seleccionados
elementsToObserve.forEach((element) => observer.observe(element));
