<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Personas</title>
  <!-- Agregar los archivos CSS de Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-ozGIBdVYBXLIDxy9p0jG5N5JJ5V7FYu2w0hV7ZaqfdplKjY7OV6QI9XDEbjTuGyz" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index2.png" style="width: 30px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="listar.php">Listados</a>
        <a class="p-2 text-dark" href="#">Registrar</a>
        <a class="p-2 text-dark" href="#">Actualizar</a>
        <a class="p-2 text-dark" href="#">Eliminar</a>
      </nav>
    </div>
    <div class="container">
        <h1>Listado de Personas</h1>
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once 'conexion.php';

            $db = conexion();
            $query = "SELECT * FROM persona ORDER BY idpersona ASC";
            $result = pg_query($db, $query);

            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['idpersona'] . "</td>";
                echo "<td>" . $row['documento'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['direccion'] . "</td>";
                echo "<td>" . $row['celular'] . "</td>";
                echo "</tr>";
            }

            pg_close($db);
            ?>
        </tbody>
        </table>
    </div>
    <!-- Agregar los archivos JS de Bootstrap 5 (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Cmz+pPYgdlL8j+ncuI7BNLuJnZu08jKTr2BR/A9+Q2a1xOyT8CzwWpdTJFuh+huT" crossorigin="anonymous"></script>
</body>
</html>

