<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Baja</title>
    <script src="cambio.js" defer></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="alta.html">Alta</a></li>
            <li><a href="baja.php">Baja</a></li>
            <li><a href="cambio.php">Cambio</a></li>
            <li><a href="mostrar.php">Mostrar</a></li>
        </ul>
    </nav>
</head>
<body>
    <div class="sidebar"></div>
    <div class="main-content">
        <center>
            <select id="tablaSelector" onchange="cambiarTabla()">
                <option value="tabla1">Cliente</option>
                <option value="tabla2">Coordinador</option>
                <option value="tabla3">Desarrollador</option>
                <option value="tabla4">Proyecto</option>
                <option value="tabla5">Tareas</option>
            </select>
        </center>

        <table id="tabla1">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>telefono</td>
                <td>presupuesto</td>
                <td>correo</td>
            </tr>
            <?php
                $sql = "SELECT * from cliente";
                $result = mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td> <?php echo $mostrar['id'] ?> </td>
                        <td> <?php echo $mostrar['nombre'] ?> </td>
                        <td> <?php echo $mostrar['telefono'] ?> </td>
                        <td> <?php echo $mostrar['presupuesto'] ?> </td>
                        <td> <?php echo $mostrar['correo'] ?> </td>
                    </tr>
            <?php    
                }

            ?>
        </table>


        <table id="tabla2" style="display: none;">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>telefono</td>
                <td>experiencia</td>
                <td>correo</td>
            </tr>
            <?php
                $sql = "SELECT * from coordinador";
                $result = mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td> <?php echo $mostrar['id'] ?> </td>
                        <td> <?php echo $mostrar['nombre'] ?> </td>
                        <td> <?php echo $mostrar['telefono'] ?> </td>
                        <td> <?php echo $mostrar['experiencia'] ?> </td>
                        <td> <?php echo $mostrar['correo'] ?> </td>
                    </tr>
            <?php    
                }

            ?>
        </table>

        <table id="tabla3" style="display: none;">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>RFC</td>
                <td>telefono</td>
                <td>experiencia</td>
                <td>correo</td>
            </tr>
            <?php
                $sql = "SELECT * from desarrollador";
                $result = mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td> <?php echo $mostrar['id'] ?> </td>
                        <td> <?php echo $mostrar['nombre'] ?> </td>
                        <td> <?php echo $mostrar['RFC'] ?> </td>
                        <td> <?php echo $mostrar['telefono'] ?> </td>
                        <td> <?php echo $mostrar['experiencia'] ?> </td>
                        <td> <?php echo $mostrar['correo'] ?> </td>
                    </tr>
            <?php    
                }

            ?>
        </table>

        <table id="tabla4" style="display: none;">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>descripcion</td>
                <td>fecha inicio</td>
                <td>fecha fin</td>
                <td>id coordinador</td>
                <td>id desarrollador</td>
                <td>id cliente</td>
            </tr>
            <?php
                $sql = "SELECT * from proyecto";
                $result = mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td> <?php echo $mostrar['id'] ?> </td>
                        <td> <?php echo $mostrar['nombre'] ?> </td>
                        <td> <?php echo $mostrar['descripcion'] ?> </td>
                        <td> <?php echo $mostrar['fecha_inicio'] ?> </td>
                        <td> <?php echo $mostrar['fecha_fin'] ?> </td>
                        <td> <?php echo $mostrar['id_coordinador'] ?> </td>
                        <td> <?php echo $mostrar['id_desarrollador'] ?> </td>
                        <td> <?php echo $mostrar['id_cliente'] ?> </td>
                    </tr>
            <?php    
                }

            ?>
        </table>

        <table id="tabla5" style="display: none;">
            <tr>
                <td>id</td>
                <td>descripcion</td>
                <td>estado</td>
                <td>id proyecto</td>
            </tr>
            <?php
                $sql = "SELECT * from tareas";
                $result = mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <td> <?php echo $mostrar['no_tarea'] ?> </td>
                        <td> <?php echo $mostrar['descripcion'] ?> </td>
                        <td> <?php echo $mostrar['estado'] ?> </td>
                        <td> <?php echo $mostrar['id_proyecto'] ?> </td>
                    </tr>
            <?php    
                }

            ?>
        </table>

        <form action="eliminar.php" method="post" class = "formulario">
        <label for="tablaSeleccionada" style="display:none;">Tabla Seleccionada:</label>
        <input type="hidden" id="tablaSeleccionada" name="tablaSeleccionada" value="tabla1">
        <label for="elemento_id">ID del elemento a eliminar:</label>
        <input type="text" id="elemento_id" name="elemento_id">
        <input type="submit" value="Eliminar">
        </form>
    </div>
    <div class="sidebar"></div>

    <center><footer><p>Oscar Alfredo Martinez Gutierrez</p></footer></center>
</body>
</html>