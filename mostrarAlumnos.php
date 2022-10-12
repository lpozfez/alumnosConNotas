<?php
    if(isset($_POST['descargar'])){
        
        echo 'descargar';
        if(!empty($_POST['alumno'])){
            $alumno=str_replace(" ","",$_POST['alumno']);  
            $rutaFichero=$_SERVER['DOCUMENT_ROOT'].'/aplicaciones/dwservidor/alumnosConNotas/ficheros/'.$nombre.$apellidos.'.csv';
            //Comprobar que no existe ya ese fichero para crearlo
            if(!file_exists($rutaFichero)){
                $fichero=file_get_contents($rutaFichero,$alumno);
                
            }
        }else{
            echo '<span style="color:red;">Introduzca el alumno</span>';
        }
        
    }
    if(isset($_POST['mostrar'])){
        echo 'mostrar';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar alumnos</title>
</head>
<body>
    <form action="mostrarAlumnos.php" method="post">
        <h1>Introduzca el alumno</h1><br>
        <input type="text" name="alumno"><br>
        <input type="submit" name="descargar" value="Descargar">
        <input type="submit" name="mostrar" value="Mostrar">
    </form>
</body>
</html>