<?php
    /*FORMULARIO NOTAS DE ALUMNOS
    1-añadir notas/mostrar alumno
    2-formulario que pide nombre, nota y fecha
    3-formulario q pide nombre alumno con 2 submit: descargar  (csv) o mostrar
    4-si existe el fichero del alumno se escribe la nueva nota y fecha. Si no existe se crea y se guarda*/

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir o mostrar alumnos</title>
</head>
<body>
    <h1>Gestión de alumnos</h1>
    <form action="controlaAyMAlumnos.php" method="post">
        <input type="submit" name="addAlum" value="Añadir"/>
        <input type="submit" name="mostrar" value="Mostrar"/><br>
    </form>
</body>
</html>