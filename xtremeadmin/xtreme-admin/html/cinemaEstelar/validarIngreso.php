<?php
    require 'conexion.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    //echo $email.",".$password;

    if($email && $password){
        $consulta = mysqli_query($mysqli, "select * from usuarios where email='$email' and password='$password'");
        $resultado=mysqli_fetch_assoc($consulta);
        //echo $resultado['usuario'];

        if($resultado){
            session_start();
            $_SESSION['email'] = $email;
            header("Location: pagPrincipal.php");
            die();
        } else{
            echo "<div class='text-center' style='background-color:#f54021;'>
                            Usuario inexistente o contraseña incorrecta.
                 </div>";
        }
    }
?>
