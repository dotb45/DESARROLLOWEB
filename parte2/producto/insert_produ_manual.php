<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar porductos manualmente</title>
</head>
<body>


    <?php
    require("conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    if(mysqli_connect_errno()){
        echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
        exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die (" NO SE ENCUENTRA LA BASE DE DATOS");

    $consulta = "INSERT INTO productos(id_producto, seccion, producto, origen, importado, precio)
    VALUES('ar40', 'FERRETERIA', 'pela cables', 'japon', 'FALSO', 10000)";
    $resultado = mysqli_query($conexion, $consulta);
    mysqli_close($conexion)
    ?>


</body>
</html>