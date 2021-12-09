<?php
    $secretKey='6LfiemYcAAAAADk0MOACZQOS__3ArBXdtev-B6iR';
    $captcha=$_POST['g-recaptcha-response'];

    if($captcha){

        $respuesta=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
        $respuestaArr=json_decode($respuesta, TRUE);

        if($respuestaArr['success'])
            require('validarRegistro.php');

    } else{
        echo "<div class='text-center' style='background-color:#f54021;'>
                            No olvides realizar el captcha.
                 </div>";
    }

?>
