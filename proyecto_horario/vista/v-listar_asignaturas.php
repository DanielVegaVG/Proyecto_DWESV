<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado asignaturas</title>
    <link rel="stylesheet" href="./vista/estilo.css">
</head>
<body>
    <h1>Listado de asignaturas</h1>
    <p><a href="./index.php?controlador=c_asignatura&metodo=pedirDatos">+ Nueva asignatura</a></p>
    <table>
        <tr><th>Nombre</th><th>Abreviatura</th><th>Acciones</th></tr>
        <?php foreach ($datos as $fila) { ?>
            <tr>
                <td><?php echo $fila['nombre']; ?></td>
                <td id="abr"><?php echo $fila['abreviatura']; ?></td>
                <td>
                    <?php echo '<a id=modificar href="./index.php?controlador=c_asignatura&metodo=modificar&id='.$fila['id'].'">Modificar</a>'; ?> |
                    <?php echo '<a id=borrar href="./index.php?controlador=c_asignatura&metodo=borrar&id='.$fila['id'].'">Borrar</a>'; ?>
                </td>
            </tr>
        <?php } ?>
        <?php if (empty($datos)) { ?>
            <tr><td colspan="3">No hay asignaturas.</td></tr>
        <?php } ?>  
    </table>
</body>
</html>