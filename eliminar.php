<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["elemento_id"])) {
        $elemento_id = $_POST["elemento_id"];
        $tablaSeleccionada = $_POST["tablaSeleccionada"]; 
        
        $query = "";
        
        switch ($tablaSeleccionada) {
            case "tabla1":
                $query = "DELETE FROM cliente WHERE id = $elemento_id";
                break;
            case "tabla2":
                $query = "DELETE FROM coordinador WHERE id = $elemento_id";
                break;
            case "tabla3":
                $query = "DELETE FROM desarrollador WHERE id = $elemento_id";
                break;
            case "tabla4":
                $query = "DELETE FROM proyecto WHERE id = $elemento_id";
                break;
            case "tabla5":
                $query = "DELETE FROM tareas WHERE no_tarea = $elemento_id";
                break;
            default:
                break;
        }

        if (!empty($query)) {
            if (mysqli_query($conn, $query)) {
                header("Location: baja.php");
                exit;
            } else {
                header("Location: baja.php");
                exit;
            }
        } else {
            header("Location: baja.php");
            exit;
        }
    } else {
        header("Location: baja.php");
        exit;
    }
}
?>