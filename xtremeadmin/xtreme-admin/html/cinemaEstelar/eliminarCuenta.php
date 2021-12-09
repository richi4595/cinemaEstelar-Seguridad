<?php
    require 'conexion.php';

    session_start();
    $email=$_SESSION['email'];
    if(!$email)
            header("Location: cinemaIngreso.php");


    $borrar = mysqli_query($mysqli, "delete from usuarios where email='$email'");

    if($borrar){
        session_destroy();
        header("Location: cinemaIngreso.php");
        die();
    }
    else{
        echo "<div class='text-center' style='background-color:#f54021;'>
                        Error al eliminar usuario.
                </div>";
    }

?>
