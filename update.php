<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM user WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar user</title>
        
    </head>
    <body>
        <div class="user-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre" placeholder="nombre" value="<?= $row['nombre']?>">
                <input type="text" name="apellido" placeholder="Apellido" value="<?= $row['apellido']?>">
                <input type="text" name="documento" placeholder="documento" value="<?= $row['documento']?>">
                <input type="text" name="direccion" placeholder="direccion" value="<?= $row['direccion']?>">
                <input type="text" name="correo" placeholder="correo" value="<?= $row['correo']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>