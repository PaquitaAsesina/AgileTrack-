<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tablaSeleccionada = $_POST['tablaSeleccionada']; 

    $campos = [];
    switch ($tablaSeleccionada) {
        case 'cliente':
            $campos = [
                'id' => $_POST['idCliente'],
                'nombre' => $_POST['nombreCliente'],
                'telefono' => $_POST['telefonoCliente'],
                'presupuesto' => $_POST['presupuestoCliente'],
                'correo' => $_POST['correoCliente'],
            ];
            break;

        case 'coordinador':
            $campos = [
                'id' => $_POST['idCoordinador'],
                'nombre' => $_POST['nombreCoordinador'],
                'telefono' => $_POST['telefonoCoordinador'],
                'experiencia' => $_POST['experienciaCoordinador'],
                'correo' => $_POST['correoCoordinador'],
            ];
            break;

        case 'desarrollador':
            $campos = [
                'id' => $_POST['idDesarrollador'],
                'nombre' => $_POST['nombreDesarrollador'],
                'RFC' => $_POST['rfcDesarrollador'],
                'telefono' => $_POST['telefonoDesarrollador'],
                'experiencia' => $_POST['experienciaDesarrollador'],
                'correo' => $_POST['correoDesarrollador'],
            ];
            break;

        case 'proyecto':
            $campos = [
                'id' => $_POST['idProyecto'],
                'nombre' => $_POST['nombreProyecto'],
                'descripcion' => $_POST['descripcionProyecto'],
                'fecha_inicio' => $_POST['inicioProyecto'],
                'fecha_fin' => $_POST['finProyecto'],
                'id_coordinador' => $_POST['idCoordinador'],
                'id_desarrollador' => $_POST['idDesarrollador'],
                'id_cliente' => $_POST['idCliente'],
            ];
            break;

        case 'tareas':
            $campos = [
                'no_tarea' => $_POST['noTarea'],
                'descripcion' => $_POST['descripcionTarea'],
                'estado' => $_POST['estadoTarea'],
                'id_proyecto' => $_POST['idProyecto'],
            ];
            break;

        default:
            break;
    }

    $sql = "INSERT INTO $tablaSeleccionada (";

    $keys = array_keys($campos);
    $sql .= implode(', ', $keys) . ") VALUES (";

    $values = array_map(function ($value) use ($conn) {
        return "'" . $conn->real_escape_string($value) . "'";
    }, $campos);

    $sql .= implode(', ', $values) . ")";

    if ($conn->query($sql) === TRUE) {
        header("Location: alta.html");
        exit;
    } else {
        header("Location: alta.html");
        exit;
    }
}

$conn->close();
?>
