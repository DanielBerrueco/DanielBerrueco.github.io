<?php 
    require 'conexion.php';

    if(isset($_POST['nombre']) && isset($_POST['correo'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        $sql = "INSERT INTO Usuario(nombre, correo) VALUES('".$nombre."','".$correo."')";

        $conn->exec($sql);
        header('Location: index.php');
    }