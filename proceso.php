<?php
    $hots="localhost";
    $usuario="root";
    $password="";
    $database="cliente";
    
    $conexion = new mysqli ($host, $usuario, $password, $database)
    or die ('error al conectar');
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $comentario = $_POST['comentario'];
    
    $insertar = "INSERT INTO usuario (nombre,apellido,correo,numero,comentario) value ('$nombre','$apellido','$correo','$numero','$comentario')";
    
    $resultado = mysqli_query($conexion,$insertar) or die ('error al insertar el registro'); header('location:formulario.php');
    
?>
    