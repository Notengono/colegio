<?php
extract($_POST, EXTR_OVERWRITE);
date_default_timezone_set('America/Argentina/Buenos_Aires');
session_name('ColegioDePodologosDeEntreRios');
session_start();

if (isset($email) && isset($clave_1) && isset($clave_2)) {
    // if (!($conect = mysqli_connect("localhost", "copoderc_copo", "c0p0_d3r_2019", "copoderc_copo"))) {
    if (!($conect = mysqli_connect("localhost", "root", "", "copoderc_copo"))) {
        echo "Error conectando a la base de datos.";
        exit();
    };

    $sentencia = "UPDATE usuarios_copo
                    SET clave = SHA2('" . $clave_2 . "', 256), email = '$email' WHERE id = $id
                    AND clave = SHA2('" . $clave_1 . "', 256);";

    $consulta = mysqli_query($conect, $sentencia);
    
    if ($consulta) {
        $sentencia = "SELECT id FROM usuarios_copo WHERE id = $id AND clave = SHA2('" . $clave_2 . "', 256);";
        $consulta = mysqli_query($conect, $sentencia);
        $resp = mysqli_fetch_array($consulta, MYSQLI_NUM);
        
        if ($resp[0] > 0) {
            echo $resp[0];
            // agregar para poder informar sobre el exitos de la transacción.-
            header("location: cambioClave.php?estado=1");
        } else {
            header("location: cambioClave.php?estado=2");
            // unset($_SESSION['tiempo']);
            // session_destroy();
            // header("location: index.php");
        }
    }
}