<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Landing Bootstrap 5</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-dark text-light">
  <?php
  include "modulos/menu.php";
  ?>

  <main>
    <div class="container d-flex h-100vh justify-content-center">
      <h1>Web Components Bootstrap 5</h1>
    </div>
  </main>

  <!-- Scripts -->
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>