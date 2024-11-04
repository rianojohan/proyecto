<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];

$sql="UPDATE user SET nombre='$nombre', apellido='$apellido', documento='$documento', direccion='$direccion', correo='$correo' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>