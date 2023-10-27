<?php
    include 'conexion_be.php';
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $query="INSERT INTO usuarios(Correo,Usuario,Clave) 
            VALUES('$correo','$usuario','$clave')";
    //Verificar que el correo no se repita en la base de datos
    $verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios  WHERE Correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
            <script>
                alert("Este Correo ya esta registrado, Intenta con otro diferente");
                window.location="../index.php";
            </script>
        ';
        exit();
    }
     //Verificar que el usuario no se repita en la base de datos
    $verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios  WHERE Usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
            <script>
                alert("Este Usuario ya esta registrado, Intenta con otro diferente");
                window.location="../registro-login.php";
            </script>
        ';
        exit();
    }
    $ejecutar=mysqli_query($conexion,$query);
    if($ejecutar){
        echo '
        <script>
            alert("Usuario Registrado Exitosamente");
            window.location="../registro-login.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, Usuario No Registrado");
            window.location="../registro-login.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>