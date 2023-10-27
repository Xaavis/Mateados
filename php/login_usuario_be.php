<?php
    session_start();
    include 'conexion_be.php';
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $validar_login=mysqli_query($conexion,"SELECT * FROM usuarios WHERE Usuario='$usuario'
    and Clave='$clave'");
    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario']=$usuario;
        header("location: ../php/BienvenidaUsuario.php");
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location="../registro-login.php";
            </script>
        ';
        exit();
    }
?>