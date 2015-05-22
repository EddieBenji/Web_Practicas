<?php
$usuario=$_POST['correo'];

$contrasena=$_POST['contrasena'];

require_once('../Daos/dao_usuario.php');
$result=obtenerUsuario($usuario,$contrasena);



if ($result->num_rows >0) {
    session_start();
    while ($row = $result->fetch_assoc()) {

        $_SESSION['correo']=$row['usuario'];
        $_SESSION['nombre']=$row['nombre'];


    }
    header('location: ../Vistas/alta-articulo.html');

} else {
    header('location: ../Vistas/login.php?error=1');
}


?>
