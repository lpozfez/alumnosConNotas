<?php
    if(isset($_POST["guardar"])){
        $nombre=$_POST['nombre'];
        $apellidos=str_replace(" ","",$_POST['apellidos']);
        $nota=$_POST['nota'];
        $fecha=$_POST['fecha'];

        if(empty($nombre)||empty($apellidos)||empty($nota)||empty($fecha)){
            echo '<h1 style="color:red;">Introduzca todos los datos</h1>';
        }else{
            //El string con los datos del alumno para guardar en archivo csv
            $alumno=$nombre.','.$apellidos.','.$nota.','.$fecha;
        }

        
        //Si $alumno no está vacío se crea la ruta y el archivo con su nombre y apellidos
        if(!empty($alumno)){
            //Crear fichero .csv del alumno
            $rutaFichero=$_SERVER['DOCUMENT_ROOT'].'/aplicaciones/dwservidor/alumnosConNotas/ficheros/'.$nombre.$apellidos.'.csv';
            //Comprobar que no existe ya ese fichero para crearlo
            if(!file_exists($rutaFichero)){
                $fichero=file_put_contents($rutaFichero,$alumno);
                echo '<h1 style="color:green;">Alumno creado</h1>';
            }else{
                echo '<h1 style="color:red;">El alumno ya existe.</h1>';
            }
            //var_dump ($fichero);
            
        }else{
            echo 'Faltan datos por introducir';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta alumnos</title>
</head>
<body>
    <form action="addAlumnos.php" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php if(isset($nombre))echo ($nombre);?>"><br>
        <label for="">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php if(isset($apellidos))echo ($apellidos);?>"><br>
        <label for="">Nota:</label>
        <input type="text" name="nota" value="<?php if(isset($nota))echo ($nota);?>"><br>
        <label for="">Fecha:</label>
        <input type="date" name="fecha" value="<?php if(isset($fecha))echo ($fecha);?>"><br><br>
        <input type="submit" value="Guardar" name="guardar"/>
    </form>
</body>
</html>

