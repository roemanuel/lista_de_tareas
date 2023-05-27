<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  require_once("../php/head.php")
  ?>
  <title>Iniciar sesión - Lista de tareas</title>
</head>

<body>
  <?php
  require_once("../php/nav.php");
  ?>

  <main>
    <div class="login_title">
      <h1 class="login_h1">Iniciar sesión</h1>
      <hr>
    </div>

    <form action="">
      <label for="login_email">
        <h2 class="login_h2">Email:</h2>
        <input type="email" id="login_email" class="login_input" placeholder="Introduce tu email" required>
      </label>

      <label for="login_password">
        <h2 class="login_h2">Contraseña:</h2>
        <input type="password" id="login_password" class="login_input" placeholder="Introduce tu contraseña" required minlength="4">
      </label>

      <div>
        <input type="submit" value="Iniciar sesión">
      </div>
    </form>
  </main>

  <script src="../js/script.js"></script>
</body>

</html>