<?php

require_once('../Daos/conexion.php');

function obtenerUsuarios()
{
    $sentencia_sql = "SELECT * FROM usuario";
    $usuario =ejecutar_query($sentencia_sql);
    return $usuarios;
}

function obtenerUsuario($usuario, $contrasena)
{
    $sentencia_sql = "SELECT * FROM app_ludicas.usuario WHERE usuario = '$usuario' AND contrasena = '$contrasena';";
    $usuarios = ejecutar_query($sentencia_sql);

    return $usuarios;
}

function obtenUsuario($id)
{
    $sentencia_sql = "SELECT * FROM usuario WHERE id= '$id'";
    $usuario = ejecutar_query($sentencia_sql);
    return $usuario;
}

function generarUsuario($usuario, $contrasena,$nombre_usuario)
{
    $sentencia_sql = "INSERT INTO usuario (usuario, contrasena,nombre_usuario) VALUES ('$usuario', '$contrasena','$nombre_usuario');";
    $usuario = ejecutar_query($sentencia_sql);
    return $usuario;
}

function deleteUsuario($cod_u)
{

}