<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["elemento_id"])) {
        $elemento_id = $_POST["elemento_id"];
        $tablaSeleccionada = $_POST["tablaSeleccionada"]; 
        
        $query = "";
        
        switch ($tablaSeleccionada) {
            case "tabla1":
                $idCliente = $_POST['idCliente'];
                $nombreCliente = $_POST['nombreCliente'];
                $telefonoCliente = $_POST['telefonoCliente'];
                $presupuestoCliente = $_POST['presupuestoCliente'];
                $correoCliente = $_POST['correoCliente'];
                $idCambio = $_POST['elemento_id'];

                $query = "UPDATE cliente SET id = ?, nombre = ?, telefono = ?, presupuesto = ?, correo = ? WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("issssi", $idCliente, $nombreCliente, $telefonoCliente, $presupuestoCliente, $correoCliente, $idCambio);
            break;

            case "tabla2":
                $idCoordinador = $_POST['idCoordinador'];
                $nombreCoordinador = $_POST['nombreCoordinador'];
                $telefonoCoordinador = $_POST['telefonoCoordinador'];
                $experienciaCoordinador = $_POST['experienciaCoordinador'];
                $correoCoordinador = $_POST['correoCoordinador'];
                $idCambio = $_POST['elemento_id'];

                $query = "UPDATE coordinador SET id = ?, nombre = ?, telefono = ?, experiencia = ?, correo = ? WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("issssi", $idCoordinador, $nombreCoordinador, $telefonoCoordinador, $experienciaCoordinador, $correoCoordinador, $idCambio);
                break;

            case "tabla3":
                $idDesarrollador = $_POST['idDesarrollador'];
                $nombreDesarrollador = $_POST['nombreDesarrollador'];
                $rfcDesarrollador = $_POST['rfcDesarrollador'];
                $telefonoDesarrollador = $_POST['telefonoDesarrollador'];
                $experienciaDesarrollador = $_POST['experienciaDesarrollador'];
                $correoDesarrollador = $_POST['correoDesarrollador'];
                $idCambio = $_POST['elemento_id'];
            
                $query = "UPDATE desarrollador SET id = ?, nombre = ?, RFC = ?, telefono = ?, experiencia = ?, correo = ? WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("issssii", $idDesarrollador, $nombreDesarrollador, $rfcDesarrollador, $telefonoDesarrollador, $experienciaDesarrollador, $correoDesarrollador, $idCambio);
                break;

            case "tabla4":
                $idProyecto = $_POST['idProyecto'];
                $nombreProyecto = $_POST['nombreProyecto'];
                $descripcionProyecto = $_POST['descripcionProyecto'];
                $inicioProyecto = $_POST['inicioProyecto'];
                $finProyecto = $_POST['finProyecto'];
                $idCoordinador = $_POST['idCoordinador'];
                $idDesarrollador = $_POST['idDesarrollador'];
                $idCliente = $_POST['idCliente'];
                $idCambio = $_POST['elemento_id'];
            
                $query = "UPDATE proyecto SET id = ?, nombre = ?, descripcion = ?, fecha_inicio = ?, fecha_fin = ?, id_coordinador = ?, id_desarrollador = ?, id_cliente = ? WHERE id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("issssiiii", $idProyecto, $nombreProyecto, $descripcionProyecto, $inicioProyecto, $finProyecto, $idCoordinador, $idDesarrollador, $idCliente, $idCambio);
                break;

            case "tabla5":
                $noTarea = $_POST['noTarea'];
                $descripcionTarea = $_POST['descripcionTarea'];
                $estadoTarea = $_POST['estadoTarea'];
                $idProyecto = $_POST['idProyecto'];
                $idCambio = $_POST['elemento_id'];
            
                $query = "UPDATE tareas SET no_tarea = ?, descripcion = ?, estado = ?, id_proyecto = ? WHERE no_tarea = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("issii", $noTarea, $descripcionTarea, $estadoTarea, $idProyecto, $idCambio);
                break;
            default:
                break;
        }

        if ($stmt->execute()) {
            header("Location: cambio.php");

        } else {
            header("Location: cambio.php");

        }
        $stmt->close();
        exit;
    }
}
?>