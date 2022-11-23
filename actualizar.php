<?php

include_once 'conexion.php';

if (isset($_GET['id'])) 
{
    $id=$_GET['id'];
    $sql="select * from contacto where id_contacto='$id'";
    $resultado=mysqli_query($con,$sql);
    if ($fila=mysqli_fetch_assoc($resultado)) 
    {
        //mostrar los val0res en las cajas de texto
    }
}

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id=$_POST['id_contacto'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $cel=$_POST['cel'];
    $whatsapp=$_POST['whatsapp'];

    $sql="update contacto set nombre_suc='$nombre', direccion='$direccion', email='$email', tel='$tel', cel='$cel', whatsapp='$whatsapp' where id_contacto='$id'";


    $resultado=mysqli_query($con,$sql);


    if ($resultado)
    {
       echo "<script>
               alert('¡Contacto Actualizado con éxito!');
               location.href='administrar.php';
             </script>";
    }
    else
    {
       echo "<script>
                 alert('No fue posible actualizar correctamente, intentelo de nuevo ...');
                 location.href='administrar.php';
             </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualixar contacto</title>
</head>
<body>
    <br>
    <h3><a href="administrar.php">contactos->administrar</a></h3>
    <hr>
    <center>

    <h1>actualizar contactos</h1>
    <hr>
    <form action="" method="post">
        <table border="1">
            <tr>
                <td><label for="nombre">nombre: </label></td>
                <td><input type="text" name="nombre" value="<?php echo $fila['nombre_suc']?>" require></td>
            </tr>
            <tr>
            <td><label for="direccion">direccion: </label></td>
                <td><input type="text" name="direccion" value="<?php echo $fila['direccion'] ?>" require></td>
            </tr>
            <tr>
            <td><label for="emal">email: </label></td>
                <td><input type="email" name="email" value="<?php echo $fila['email']?>" require></td>
            </tr>
            <tr>
            <td><label for="tel">telefono: </label></td>
                <td><input type="tel" name="tel" value="<?php echo $fila['tel']?>" require></td>
            </tr>
            <tr>
            <td><label for="cel">celular: </label></td>
                <td><input type="text" name="cel" value="<?php echo $fila['cel']?>" require></td>
            </tr>
            <tr>
            <td><label for="whatsapp">whatsapp: </label></td>
                <td><input type="text" name="whatsapp" value="<?php echo $fila['whatsapp'] ?>" require></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar" name="guardar"></td>
            </tr>
        </table>
        <hr>
        <input type="hidden" name="id_contacto" value="<?php echo $fila['id_contacto']?>">
    </form>
    </center>
    
</body>
</html>