<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  require_once("../php/head.php")
  ?>
  <title>Registrarte - Lista de tareas</title>
</head>

<body>
  <?php
  require_once("../php/nav.php");
  ?>

  <main class="registrarte_main">
    <div class="registrarte_title">
      <h1 class="registrarte_h1">Registrarte</h1>
      <hr>
    </div>

    <form action="">
      <label for="registrarte_nombre">
        <h2 class="registrarte_h2">Nombre:</h2>
        <input type="text" id="registrarte_nombre" class="registrarte_input" placeholder="Introduce tu nombre" required minlength="2">
      </label>
      <label for="registrarte_email">
        <h2 class="registrarte_h2">Email:</h2>
        <input type="email" id="registrarte_email" class="registrarte_input" placeholder="Introduce tu email" required>
      </label>
      <label for="registrarte_password">
        <h2 class="registrarte_h2">Contraseña:</h2>
        <input type="password" id="registrarte_password" class="registrarte_input" placeholder="Introduce tu contraseña" required minlength="4">
      </label>
      <div>
        <input type="submit" value="Enviar">
      </div>
    </form>

  </main>

  <script src="../js/script.js"></script>
</body>

</html>