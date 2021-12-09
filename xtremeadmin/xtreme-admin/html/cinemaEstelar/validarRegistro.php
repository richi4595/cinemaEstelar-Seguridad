<?php
    require 'conexion.php';
    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //echo $usuario.",".$email.",".$password;

    if($usuario && $email && $password){

        $consulta = mysqli_query($mysqli, "insert into usuarios values ('$usuario','$email','$password','1')");

        if($consulta){
            header("Location: pagPrincipal.php");
            die();
        }
        else{
            echo "<div class='text-center' style='background-color:#f54021;'>
                            Nombre de usuario y/o email ya registrados.
                 </div>";
        }
    }

?>
