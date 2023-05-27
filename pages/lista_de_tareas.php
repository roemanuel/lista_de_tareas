<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  require_once("../php/head.php")
  ?>
  <title>Lista de tareas</title>
</head>

<body>
  <?php
  require_once("../php/nav.php")
  ?>

  <main class="task_main">
    <div class="task_main_new_task">
      <h2 class="task_main_new_task_h2">Crear tarea</h2>
      <i class="bi bi-caret-down-fill task_main_new_task_i"></i>

      <div class="task_main_new_task_contain">
        <label for="new_task_contain_nombre_tarea">
          <h3>Nombre de la tarea:</h3>
          <input type="text" id="new_task_contain_nombre_tarea" require placeholder="Nombre de la tarea" minlength="1">
        </label>
        <label for="new_task_contain_color">
          <h3>Color:</h3>
          <div class="new_task_color_container">
            <select class="new_task_contain_color_select">
              <option disabled selected>Elige un color</option>
              <option value="#8B0000">Rojo oscuro</option>
              <option value="#000080">Azul oscuro</option>
              <option value="#006400">Verde oscuro</option>
              <option value="#808000">Amarillo oscuro</option>
              <option value="#800080">Violeta oscuro</option>
              <option value="#8B4513">Marrón oscuro</option>
              <option value="#FF4500">Naranja oscuro</option>
              <option value="#C71585">Rosa oscuro</option>
              <option value="#000000">Negro</option>
            </select>
            <div class="new_task_contain_color_preview"></div>
          </div>
        </label>
        <label for="new_task_contain_import">
          <h3>Importancia:</h3>
          <select name="" class="new_task_contain_import">
            <option value="">Baja</option>
            <option value="">Media</option>
            <option value="">Alta</option>
          </select>
        </label>
        <label for="new_task_contain_date">
          <h3>Fecha de finalización:</h3>
          <input type="date" id="new_task_contain_date" require placeholder="Nombre de la tarea" minlength="1">
        </label>
        <label for="new_task_contain_date">
          <h3>Hora de finalización:</h3>
          <input type="time" id="new_task_contain_date" require placeholder="Nombre de la tarea" minlength="1">
        </label>
      </div>
    </div>

    <div class="task_main_tasks">
      <h2 class="task_main_tasks_h2">Tareas</h2>
      <i class="bi bi-caret-down-fill task_main_tasks_i"></i>
    </div>
  </main>

  <footer>

  </footer>

  <script src="../js/script.js"></script>
</body>

</html>