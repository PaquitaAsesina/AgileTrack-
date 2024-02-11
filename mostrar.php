<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Mostrar</title>
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
        <div>
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
        </div>

        <div>
            <center>
                <select id="tablaSelector2" onchange="cambiarTabla2()">
                    <option value="tablaa1">Clientes con presupuesto mayor a 80000</option>
                    <option value="tablaa2">Cuantos proyectos tiene un coordinador</option>
                    <option value="tablaa3">Proyectos de los clientes</option>
                    <option value="tablaa4">Proyectos completados</option>
                    <option value="tablaa5">Numero de tareas por proyecto</option>
                    <option value="tablaa6">Involucrados en el proyecto con mayor presupuesto</option>
                    <option value="tablaa7">Mostrar toda la informacion de los proyectos</option>
                    <option value="tablaa8">Proyectos sin terminar</option>
                    <option value="tablaa9">Promedio de presupuesto por cliente</option>
                    <option value="tablaa10">Cantidad de tareas por proyecto</option>
                </select>
            </center>

            <table id="tablaa1" >
                <tr>
                    <td>id</td>
                    <td>nombre</td>
                    <td>telefono</td>
                    <td>presupuesto</td>
                    <td>correo</td>
                </tr>
                <?php
                    $sql = "SELECT * FROM cliente WHERE presupuesto > 80000 
                    ORDER BY presupuesto DESC";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['id'] ?> </td>
                            <td> <?php echo $mostrar2['nombre'] ?> </td>
                            <td> <?php echo $mostrar2['telefono'] ?> </td>
                            <td> <?php echo $mostrar2['presupuesto'] ?> </td>
                            <td> <?php echo $mostrar2['correo'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa2" style="display: none;">
                <tr>
                    <td>Coordinador</td>
                    <td>Cantidad de Proyectos asignados</td>
                </tr>
                <?php
                    $sql = "SELECT c.nombre AS coordinador, (SELECT COUNT(*) 
                    FROM proyecto p WHERE p.id_coordinador = c.id) AS proyectos_asignados 
                    FROM coordinador c ORDER BY proyectos_asignados DESC";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['coordinador'] ?> </td>
                            <td> <?php echo $mostrar2['proyectos_asignados'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa3" style="display: none;">
                <tr>
                    <td>Cliente</td>
                    <td>Proyectos</td>
                </tr>
                <?php
                    $sql = "SELECT c.nombre AS cliente, p.nombre AS proyecto
                    FROM cliente c
                    LEFT JOIN proyecto p ON c.id = p.id_cliente
                    UNION
                    SELECT c.nombre AS cliente, p.nombre AS proyecto
                    FROM cliente c
                    RIGHT JOIN proyecto p ON c.id = p.id_cliente
                    ORDER BY cliente ASC";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['cliente'] ?> </td>
                            <td> <?php echo $mostrar2['proyecto'] ?> </td>
                        </tr>
                <?php    
                    }
                ?>
            </table>

            <table id="tablaa4" style="display: none;">
                <tr>
                    <td>Proyecto</td>
                    <td>Id tarea</td>
                    <td>Descripcion tarea</td>
                </tr>
                <?php
                    $sql = "SELECT p.nombre AS proyecto, t.no_tarea AS no_tarea ,t.descripcion AS tarea
                    FROM proyecto p, tareas t
                    WHERE p.id = t.id_proyecto AND t.estado = 'Completado'";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['no_tarea'] ?> </td>
                            <td> <?php echo $mostrar2['tarea'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa5" style="display: none;">
                <tr>
                    <td>Proyecto</td>
                    <td>Cantidad de tareas</td>
                </tr>
                <?php
                    $sql = "SELECT p.nombre AS proyecto, (SELECT COUNT(*) FROM tareas t WHERE t.id_proyecto = p.id) AS cantidad_tareas
                    FROM proyecto p;";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['cantidad_tareas'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa6" style="display: none;">
                <tr>
                    <td>Proyecto</td>
                    <td>Cliente</td>
                    <td>Desarrollador</td>
                    <td>Coordinador</td>
                </tr>
                <?php
                    $sql = "SELECT d.nombre AS desarrollador, c.nombre AS cliente, p.nombre AS proyecto, co.nombre AS coordinador
                    FROM desarrollador d
                    JOIN proyecto p ON p.id_desarrollador = d.id
                    JOIN cliente c ON p.id_cliente = c.id
                    JOIN coordinador co ON p.id_coordinador = co.id
                    WHERE c.presupuesto = (
                        SELECT MAX(presupuesto)
                        FROM cliente
                    )";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['cliente'] ?> </td>
                            <td> <?php echo $mostrar2['desarrollador'] ?> </td>
                            <td> <?php echo $mostrar2['coordinador'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa7" style="display: none;">
                <tr>
                    <td>ID Proyecto</td>
                    <td>Proyecto</td>
                    <td>Descripcion del proyecto</td>
                    <td>Fecha de inicio</td>
                    <td>Fecha de fin</td>
                    <td>Desarrollador</td>
                    <td>Coordinador</td>
                    <td>Cliente</td>
                </tr>
                <?php
                    $sql = "SELECT 
                    proyecto.id AS id_proyecto,
                    proyecto.nombre AS nombre_proyecto,
                    proyecto.descripcion AS descripcion_proyecto,
                    proyecto.fecha_inicio AS inicio,
                    proyecto.fecha_fin AS fin,
                    desarrollador.nombre AS nombre_desarrollador,
                    coordinador.nombre AS nombre_coordinador,
                    cliente.nombre AS nombre_cliente
                    FROM proyecto
                    JOIN desarrollador ON proyecto.id_desarrollador = desarrollador.id
                    JOIN coordinador ON proyecto.id_coordinador = coordinador.id
                    JOIN cliente ON proyecto.id_cliente = cliente.id
                    ";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['id_proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['nombre_proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['descripcion_proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['inicio'] ?> </td>
                            <td> <?php echo $mostrar2['fin'] ?> </td>
                            <td> <?php echo $mostrar2['nombre_desarrollador'] ?> </td>
                            <td> <?php echo $mostrar2['nombre_coordinador'] ?> </td>
                            <td> <?php echo $mostrar2['nombre_cliente'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa8" style="display: none;">
                <tr>
                    <td>ID tarea</td>
                    <td>Descripcion</td>
                    <td>Estado</td>
                    <td>ID Proyecto</td>
                    <td>Nombre Proyecto</td>
                </tr>
                <?php
                    $sql = "SELECT t.no_tarea AS no_tarea,
                        t.descripcion AS descripcion_tarea,
                        t.estado AS estado_tarea,
                        p.nombre AS nombre_proyecto,
                        p.id AS id_proyecto
                        FROM tareas t
                        JOIN proyecto p ON t.id_proyecto = p.id
                        WHERE t.estado = 'En espera' OR t.estado = 'en espera' OR t.estado = 'En progres'
                        AND p.id IN (
                        SELECT DISTINCT id_proyecto
                        FROM tareas
                        WHERE estado = 'En espera' OR estado = 'en espera' OR estado = 'En progres'
                        )";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['no_tarea'] ?> </td>
                            <td> <?php echo $mostrar2['descripcion_tarea'] ?> </td>
                            <td> <?php echo $mostrar2['estado_tarea'] ?> </td>
                            <td> <?php echo $mostrar2['id_proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['nombre_proyecto'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa9" style="display: none;">
                <tr>
                    <td>Cliente</td>
                    <td>Promedio de presupuesto</td>
                </tr>
                <?php
                    $sql = "SELECT c.nombre AS cliente,
                            AVG(c.presupuesto) AS presupuesto_promedio
                            FROM cliente c
                            JOIN proyecto p ON c.id = p.id_cliente
                            GROUP BY c.nombre";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['cliente'] ?> </td>
                            <td> <?php echo $mostrar2['presupuesto_promedio'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>

            <table id="tablaa10" style="display: none;">
                <tr>
                    <td>Proyecto</td>
                    <td>Cant tareas</td>
                </tr>
                <?php
                    $sql = "SELECT p.nombre AS proyecto,
                    COUNT(t.no_tarea) AS cant_tareas,
                    SUM(CASE WHEN t.estado = 'completada' THEN 1 ELSE 0 END) AS tareas_completadas,
                    SUM(CASE WHEN t.estado = 'pendiente' THEN 1 ELSE 0 END) AS tareas_pendientes
                    FROM proyecto p 
                    LEFT JOIN tareas t ON p.id = t.id_proyecto
                    GROUP BY p.nombre;";
                    $result = mysqli_query($conn,$sql);
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                        <tr>
                            <td> <?php echo $mostrar2['proyecto'] ?> </td>
                            <td> <?php echo $mostrar2['cant_tareas'] ?> </td>
                        </tr>
                <?php    
                    }

                ?>
            </table>
        </div>
    </div>
    <div class="sidebar"></div>

    <center><footer><p>Oscar Alfredo Martinez Gutierrez</p></footer></center>
    
</body>
</html>