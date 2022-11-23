<?php
    include_once("conexion.php");

    $sql = "select * from contacto";
    $resultado = mysqli_query($con, $sql);
    $num_filas = mysqli_num_rows($resultado);
    // echo("$num_filas");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar contactos</title>
</head>
<body>
    <center>
    <h1>Administar Contactos</h1>
    <table border =1>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Celular</th>
            <th>Whatsapp</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <?php
            while($fila=mysqli_fetch_assoc($resultado))
            {
            ?>


            <td><?php echo $fila['id_contacto'] ?></td>
            <td><?php echo $fila['nombre_suc'] ?></td>
            <td><?php echo $fila['direccion'] ?></td>
            <td><?php echo $fila['email']?></td>
            <td><?php echo $fila['tel']?></td>
            <td><?php echo $fila['cel']?></td>
            <td><?php echo $fila['whatsapp'] ?></td>
            <td><?php echo $fila['id_contacto']?></td>
            <td><a href="actualizar.php?id=<?php echo $fila['id_contacto']?>">actualizar</a></td>
        </tr>
        <?php
            
            }
            ?>
    </table>
        <h2>Numero de registros:<?php echo $num_filas?></h2>
    </center>
 
</body>
</html>