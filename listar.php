<?php
    // Establecer la conexión a la base de datos
    $host = "host=containers-us-west-191.railway.app";
    $port = "port=5624";
    $dbname = "dbname=railway";
    $user = "user=postgres";
    $password = "password=xrtXMPoJ4Ch9HFeH1Bex";
    $db = pg_connect("$host $port $dbname $user $password");

    // Consultar los registros de la tabla persona
    $query = "SELECT * FROM persona";
    $result = pg_query($db, $query);

    // Mostrar los resultados en una tabla HTML
    echo "<table>";
    echo "<tr><th>ID</th><th>Documento</th><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Celular</th></tr>";
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['idpersona']."</td>";
        echo "<td>".$row['documento']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['apellido']."</td>";
        echo "<td>".$row['direccion']."</td>";
        echo "<td>".$row['celular']."</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Cerrar la conexión a la base de datos
    pg_close($db);
?>
