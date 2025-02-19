<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['email'] = $email;

    include('db.php');

    $consulta = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location: ./../home.php");
    }else{
        header("location: ../../index.php?error=1");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>