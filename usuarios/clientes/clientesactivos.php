<?php
include('../seguimientoPrestamo.php');
?>


<!-- Módulo de vista para clientes activos con adeudos -->
<div class="col-md-6 mt-4">
    <h2>Vista de Clientes con Adeudos</h2>
    <!-- Sección de vista de clientes con adeudos -->
    <div>
        <?php
            // Obtener la información del cliente desde la base de datos y almacenarla en variables
            $adeudo = obtenerAdeudoDesdeBaseDeDatos();
            $nombre = obtenerNombreDesdeBaseDeDatos();
            $apellidoPaterno = obtenerApellidoPaternoDesdeBaseDeDatos();
            $apellidoMaterno = obtenerApellidoMaternoDesdeBaseDeDatos();
            // ... y así sucesivamente para los demás campos

            // Imprimir la información en los respectivos lugares
            echo "<label for='adeudo'>Monto del Adeudo Otorgado: </label><p>" . $adeudo . "</p>";
            echo "<label for='nombre'>Nombre del Cliente: </label><p>" . $nombre . "</p>";
            echo "<label for='apellidoPaterno'>Apellido Paterno del Cliente: </label><p>" . $apellidoPaterno . "</p>";
            echo "<label for='apellidoMaterno'>Apellido Materno del Cliente: </label><p>" . $apellidoMaterno . "</p>";
            // ... y así sucesivamente para los demás campos
        ?>
    </div>
</div>
