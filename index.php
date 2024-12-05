<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Bootstrap 5 - Web Components - by Image</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-dark text-light">

  <div id="content" class="fade show">

    <?php

    include "modulos/menu.php";

    if (isset($_GET["url"])) {

      if ($_GET["url"] == "inicio" ||  $_GET["url"] == "accordion" || $_GET["url"] == "alerts" || $_GET["url"] == "badge" || $_GET["url"] == "breadcrumb" || $_GET["url"] == "buttons" || $_GET["url"] == "button-group" || $_GET["url"] == "card" || $_GET["url"] == "button-group" || $_GET["url"] == "carousel" || $_GET["url"] == "close-button" || $_GET["url"] == "collapse" || $_GET["url"] == "dropdown" || $_GET["url"] == "list-groups" || $_GET["url"] == "modal" || $_GET["url"] == "navbar" || $_GET["url"] == "off-canvas" || $_GET["url"] == "pagination" || $_GET["url"] == "placeholders" || $_GET["url"] == "popover" || $_GET["url"] == "progress" || $_GET["url"] == "scrollspy" || $_GET["url"] == "spinners" || $_GET["url"] == "toast" || $_GET["url"] == "tooltips") {

        include "modulos/" . $_GET["url"] . ".php";
      }

      include "modulos/footer.php";
    } else {

      include "modulos/inicio.php";
    }

    echo '</div></div>';

    ?>



    <!-- Scripts -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Accordion -->
    <script>
      function copyAccordionContent(targetId) {
        const content = document.querySelector(`${targetId} .accordion-body`).innerText;
        navigator.clipboard.writeText(content).then(() => {
          alert("Contenido copiado al portapapeles.");
        }).catch(err => {
          console.error("Error al copiar: ", err);
        });
      }
    </script>
</body>

</html>