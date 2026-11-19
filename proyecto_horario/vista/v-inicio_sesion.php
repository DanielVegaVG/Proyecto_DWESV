<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./vista/estilo.css">
</head>
<body>
    <h1>Añadir Asignatura</h1>
    <form method="POST" action="./index.php?controlador=c_iniciosesion&metodo=iniciosesion">
        <input type="text" name="usuario" placeholder="Usuario" require><br>
        <input type="text" name="pw" placeholder="Contraseña" require><br>
        <input type="submit" value="Inicio Sesión"></input>
    </form>
    <p><a href="./index.php?controlador=c_asignatura&metodo=listar">Volver al listado</a></p>
</body>
</html>