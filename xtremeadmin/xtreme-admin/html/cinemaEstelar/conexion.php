<?php
    $mysqli = new mysqli("localhost", "rammker", "NMF8H5srfn9*8IY9", "cinemaEstelar");
    if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //echo $mysqli->host_info . "\n";

    //$enlace =  mysql_connect('localhost', 'rammker', 'NMF8H5srfn9*8IY9');
    //if (!$enlace) {
    //    die('No pudo conectarse: ' . mysql_error());
    //}
    //echo 'Conectado satisfactoriamente';
    //mysql_close($enlace);

?>
