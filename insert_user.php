<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];

$sql = "INSERT INTO user VALUES('$id','$nombre','$apellido','$documento','$direccion','$correo')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>